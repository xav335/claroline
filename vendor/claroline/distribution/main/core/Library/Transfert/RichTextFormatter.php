<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CoreBundle\Library\Transfert;

use Claroline\BundleRecorder\Log\LoggableTrait;
use Claroline\CoreBundle\Entity\Resource\ResourceNode;
use Claroline\CoreBundle\Entity\Workspace\Workspace;
use Claroline\CoreBundle\Event\StrictDispatcher;
use Claroline\CoreBundle\Library\Configuration\PlatformConfigurationHandler;
use Claroline\CoreBundle\Manager\MaskManager;
use Claroline\CoreBundle\Manager\ResourceManager;
use Claroline\CoreBundle\Manager\TransferManager;
use Claroline\CoreBundle\Persistence\ObjectManager;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @DI\Service("claroline.importer.rich_text_formatter")
 */
class RichTextFormatter
{
    use LoggableTrait;

    //placeholder = [[uid=123]]
    const REGEX_PLACEHOLDER = '#\[\[uid=([^\]]+)\]\]#';

    private $data;
    private $router;
    private $resourceManagerData;
    private $om;
    private $listImporters;
    private $transferManager;
    private $maskManager;
    private $resourceManagerImporter;
    private $eventDispatcher;
    private $config;

    /**
     * @DI\InjectParams({
     *     "router"          = @DI\Inject("router"),
     *     "resourceManager" = @DI\Inject("claroline.manager.resource_manager"),
     *     "om"              = @DI\Inject("claroline.persistence.object_manager"),
     *     "transferManager" = @DI\Inject("claroline.manager.transfer_manager"),
     *     "maskManager"     = @DI\Inject("claroline.manager.mask_manager"),
     *     "eventDispatcher" = @DI\Inject("claroline.event.event_dispatcher"),
     *     "config"          = @DI\Inject("claroline.config.platform_config_handler")
     * })
     */
    public function __construct(
        UrlGeneratorInterface $router,
        ResourceManager $resourceManager,
        ObjectManager $om,
        TransferManager $transferManager,
        MaskManager $maskManager,
        StrictDispatcher $eventDispatcher,
        PlatformConfigurationHandler $config
    ) {
        $this->resourceManagerImporter = null;
        $this->resourceManagerData = [];
        $this->resourceManager = $resourceManager;
        $this->router = $router;
        $this->om = $om;
        $this->listImporters = new ArrayCollection();
        $this->transferManager = $transferManager;
        $this->maskManager = $maskManager;
        $this->eventDispatcher = $eventDispatcher;
        $this->config = $config;
    }

    /**
     * @param $text
     * @param array $resources
     *
     * The $resource array MUST be formatter this way:
     * where the sub array key is an the element uid.
     * array(
     *      'directories' => array(1 => $directory, ...),
     *      'items'       => array(42 => $file, ...)
     * )
     */
    public function format($text)
    {
        preg_match_all(self::REGEX_PLACEHOLDER, $text, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $uid = (int) $match[1];
            //meh, fix the following lines late
            $parent = $this->findParentFromDataUid($uid);
            $el = $this->findItemFromUid($uid);
            $node = $this->om->getRepository('ClarolineCoreBundle:Resource\ResourceNode')
                ->findOneBy(
                    [
                        'parent' => $parent,
                        'name' => $el['name'],
                        'resourceType' => $this->resourceManager->getResourceTypeByName($el['type']),
                    ]
                );

            if ($node) {
                $toReplace = $this->generateDisplayedUrlForTinyMce($node);
                $text = str_replace($match[0], $toReplace, $text);
            }
        }

        $event = $this->eventDispatcher->dispatch(
            'rich_text_format_event_import',
            'RichTextFormat',
            [$text]
        );

        return $event->getText();
    }

    /**
     * For now we only look parse .txt. in the archive.
     * It's way easier that way.
     *
     * @param $_data
     * @param $files
     *
     * @return array
     */
    public function setPlaceHolders(array $files, &$_data)
    {
        $formattedFiles = [];

        foreach ($files as $key => $file) {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $newFile = $file;

            if ($ext === 'txt') {
                $text = $this->setPlaceHolder($file, $_data, $formattedFiles);
                $newFile = $this->config->getParameter('tmp_dir').DIRECTORY_SEPARATOR.uniqid().'txt';
                file_put_contents($newFile, $text);
            }

            $formattedFiles[$key] = $newFile;
        }

        return $formattedFiles;
    }

    /**
     * If we find an resource id wich is a file and not in the export yet, then we
     * export is aswell. It's a link towards "something else".
     */
    private function setPlaceHolder($file, &$_data, &$_files)
    {
        //urls to be matched...
        //'/file/resource/media/([^']+)#'
        //'/resource/open/([^/]+)/([^']+)'
        $text = file_get_contents($file);
        $baseUrl = $this->router->getContext()->getBaseUrl();

        //first regex
        $regex = '#'.$baseUrl.'/file/resource/media/([^\'"]+)#';

        preg_match_all($regex, $text, $matches, PREG_SET_ORDER);

        if (count($matches) > 0) {
            foreach ($matches as $match) {
                if (!$this->getItemFromUid($match[1], $_data)) {
                    $this->createDataFolder($_data);
                    $node = $this->resourceManager->getNode($match[1]);

                    if ($node && $node->getResourceType()->getName() === 'file') {
                        $el = $this->getImporterByName('resource_manager')->getResourceElement(
                            $node,
                            $node->getWorkspace(),
                            $_files,
                            $_data,
                            true
                        );
                        $el['item']['parent'] = 'data_folder';
                        $el['item']['roles'] = [['role' => [
                            'name' => 'ROLE_USER',
                            'rights' => $this->maskManager->decodeMask(7, $this->resourceManager->getResourceTypeByName('file')),
                        ]]];

                        if (!$this->getItemFromUid($el['item']['uid'], $_data)) {
                            $_data['data']['items'][] = $el;
                        }
                    }
                }

                $text = $this->replaceLink($text, $match[0], $match[1], $_data);
            }
        }

        //second regex
        $regex = '#'.$baseUrl.'/resource/open/([^/]+)/([^\'"]+)#';
        preg_match_all($regex, $text, $matches, PREG_SET_ORDER);

        if (count($matches) > 0) {
            foreach ($matches as $match) {
                $text = $this->replaceLink($text, $match[0], $match[2]);
            }
        }

        $event = $this->eventDispatcher->dispatch(
            'rich_text_format_event_export',
            'RichTextFormat',
            [$text, &$_data, &$_files]
        );
        $text = $event->getText();

        return $text;
    }

    private function replaceLink($txt, $fullMatch, $nodeId)
    {
        //videos <source type="video/webm" src=...media...></source>
        //files <a href=...open...> - name - </a>
        //imgs <img style='max-width: 100%;' src='{$url}' alt='{$node->getName()}'>
        $matchReplaced = [];
        $fullMatch = preg_quote($fullMatch);

        preg_match(
            "#(<source|<a)(.*){$fullMatch}(.*)(</a>|</source>)#",
            $txt,
            $matchReplaced
        );

        if (count($matchReplaced) > 0) {
            $txt = str_replace($matchReplaced[0], "[[uid={$nodeId}]]", $txt);
        }

        return $txt;
    }

    /**
     * @todo remove this for claroline v6
     */
    public function setData(array $data)
    {
        $this->data = $data;

        foreach ($this->data['tools'] as $tool) {
            if ($tool['tool']['type'] === 'resource_manager') {
                $this->resourceManagerData = $tool['tool'];
            }
        }
    }

    /**
     * @todo remove this for claroline v6
     */
    public function setWorkspace(Workspace $workspace)
    {
        $this->workspace = $workspace;
    }

    public function findParentFromDataUid($uid)
    {
        //we must find the resource whose uid in the data is $uid
        //this resource already has been persisted before, let's find it !
        //first we find the item in the data
        $itemData = $this->findItemFromUid($uid);
        if ($itemData) {
            return $this->getResourceNodeFromPathData($this->getResourcePathFromItem($itemData));
        }
    }

    public function getResourceNodeFromPathData(array $path)
    {
        //first we find the root
        $node = $this->resourceManager->getWorkspaceRoot($this->workspace);

        foreach ($path as $el) {
            $node = $this->om->getRepository('ClarolineCoreBundle:Resource\ResourceNode')
                ->findOneBy(['parent' => $node, 'name' => $el['name']]);
        }

        return $node;
    }

    /**
     * @todo remove this for claroline v6
     * use getItemFromUid($uid, $resManagerData) instead
     */
    public function findItemFromUid($uid)
    {
        if (isset($this->resourceManagerData['data']['items'])) {
            foreach ($this->resourceManagerData['data']['items'] as $item) {
                if ($item['item']['uid'] === $uid) {
                    return $item['item'];
                }
            }
        }
    }

    public function getItemFromUid($uid, $resManagerData)
    {
        if (isset($resManagerData['data']['items'])) {
            foreach ($resManagerData['data']['items'] as $item) {
                if ($item['item']['uid'] === $uid) {
                    return $item['item'];
                }
            }
        }
    }

    /**
     * @todo remove this for claroline v6
     * use getDirectoryFromUid($uid, $resManagerData) instead
     */
    public function findDirectoryFromUid($uid)
    {
        if (isset($this->resourceManagerData['data']['directories'])) {
            foreach ($this->resourceManagerData['data']['directories'] as $item) {
                if ($item['directory']['uid'] === $uid) {
                    return $item['directory'];
                }
            }
        }
    }

    public function getDirectoryFromUid($uid, $resManagerData)
    {
        if (isset($resManagerData['data']['directories'])) {
            foreach ($resManagerData['data']['directories'] as $item) {
                if ($item['directory']['uid'] === $uid) {
                    return $item['directory'];
                }
            }
        }
    }

    public function getResourcePathFromItem(array $item, $path = [])
    {
        $dir = $this->findDirectoryFromUid($item['parent']);

        if ($dir) {
            array_unshift($path, $dir);
            $path = $this->getResourcePathFromItem($dir, $path);
        }

        return $path;
    }

    /**
     * @todo find the method wich generate the url from tinymce
     *
     * @param ResourceNode $node
     */
    public function generateDisplayedUrlForTinyMce(ResourceNode $node)
    {
        if (strpos('_'.$node->getMimeType(), 'image') > 0) {
            $url = $this->router->generate(
                'claro_file_get_media',
                ['node' => $node->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            return "<img style='max-width: 100%;' src='{$url}' alt='{$node->getName()}'>";
        }

        if (strpos('_'.$node->getMimeType(), 'video') > 0) {
            $url = $this->router->generate(
                'claro_file_get_media',
                ['node' => $node->getId()],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            return "<source type='{$node->getMimeType()}' src='{$url}'></source>";
        }

        $url = $this->router->generate(
            'claro_resource_open',
            [
                'resourceType' => $node->getResourceType()->getName(),
                'node' => $node->getId(),
            ],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        return "<a href='{$url}'>{$node->getName()}</a>";
    }

    public function addImporter(Importer $importer)
    {
        return $this->listImporters->add($importer);
    }

    public function getImporterByName($name)
    {
        foreach ($this->listImporters as $importer) {
            if ($importer->getName() === $name) {
                return $importer;
            }
        }

        return;
    }

    public function createDataFolder(array &$_data)
    {
        if ($this->dataFolderExists($_data)) {
            return;
        }

        $roles = [];
        $roles[] = ['role' => [
            'name' => 'ROLE_USER',
            'rights' => $this->maskManager->decodeMask(7, $this->resourceManager->getResourceTypeByName('directory')),
        ]];

        $parentId = $_data['data']['root']['uid'];

        $_data['data']['directories'][] = ['directory' => [
            'name' => 'data_folder',
            'creator' => null,
            'parent' => $parentId,
            'published' => true,
            'uid' => 'data_folder',
            'roles' => $roles,
            'index' => null,
        ]];
    }

    private function dataFolderExists($data)
    {
        if (!isset($data['data']['directories'])) {
            return false;
        }
        foreach ($data['data']['directories'] as $directory) {
            if ($directory['directory']['uid'] === 'data_folder') {
                return true;
            }
        }

        return false;
    }
}
