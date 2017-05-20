<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CoreBundle\Manager;

use Claroline\BundleRecorder\Log\LoggableTrait;
use Claroline\CoreBundle\Entity\Resource\AbstractResource;
use Claroline\CoreBundle\Entity\Resource\Directory;
use Claroline\CoreBundle\Entity\Resource\ResourceIcon;
use Claroline\CoreBundle\Entity\Resource\ResourceNode;
use Claroline\CoreBundle\Entity\Resource\ResourceShortcut;
use Claroline\CoreBundle\Entity\Resource\ResourceType;
use Claroline\CoreBundle\Entity\User;
use Claroline\CoreBundle\Entity\Workspace\Workspace;
use Claroline\CoreBundle\Event\StrictDispatcher;
use Claroline\CoreBundle\Library\Configuration\PlatformConfigurationHandler;
use Claroline\CoreBundle\Library\Security\Utilities;
use Claroline\CoreBundle\Library\Utilities\ClaroUtilities;
use Claroline\CoreBundle\Manager\Exception\ExportResourceException;
use Claroline\CoreBundle\Manager\Exception\MissingResourceNameException;
use Claroline\CoreBundle\Manager\Exception\ResourceMoveException;
use Claroline\CoreBundle\Manager\Exception\ResourceNotFoundException;
use Claroline\CoreBundle\Manager\Exception\ResourceTypeNotFoundException;
use Claroline\CoreBundle\Manager\Exception\RightsException;
use Claroline\CoreBundle\Manager\Exception\WrongClassException;
use Claroline\CoreBundle\Persistence\ObjectManager;
use Claroline\CoreBundle\Repository\DirectoryRepository;
use Claroline\CoreBundle\Repository\ResourceNodeRepository;
use Claroline\CoreBundle\Repository\ResourceRightsRepository;
use Claroline\CoreBundle\Repository\ResourceShortcutRepository;
use Claroline\CoreBundle\Repository\ResourceTypeRepository;
use Claroline\CoreBundle\Repository\RoleRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use JMS\DiExtraBundle\Annotation as DI;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * @DI\Service("claroline.manager.resource_manager")
 */
class ResourceManager
{
    use LoggableTrait;

    /** @var RightsManager */
    private $rightsManager;
    /** @var ResourceTypeRepository */
    private $resourceTypeRepo;
    /** @var ResourceNodeRepository */
    private $resourceNodeRepo;
    /** @var ResourceRightsRepository */
    private $resourceRightsRepo;
    /** @var ResourceShortcutRepository */
    private $shortcutRepo;
    /** @var RoleRepository */
    private $roleRepo;
    /** @var DirectoryRepository */
    private $directoryRepo;
    /** @var RoleManager */
    private $roleManager;
    /** @var MaskManager */
    private $maskManager;
    /** @var IconManager */
    private $iconManager;
    /** @var Dispatcher */
    private $dispatcher;
    /** @var ObjectManager */
    private $om;
    /** @var ClaroUtilities */
    private $ut;
    /** @var Utilities */
    private $secut;
    /* @var TranslatorInterface */
    private $translator;
    /* @var PlatformConfigurationHandler */
    private $platformConfigHandler;
    private $filesDirectory;
    /* @var ContainerInterface */
    private $container;

    /**
     * Constructor.
     *
     * @DI\InjectParams({
     *     "roleManager"           = @DI\Inject("claroline.manager.role_manager"),
     *     "iconManager"           = @DI\Inject("claroline.manager.icon_manager"),
     *     "maskManager"           = @DI\Inject("claroline.manager.mask_manager"),
     *     "container"             = @DI\Inject("service_container"),
     *     "rightsManager"         = @DI\Inject("claroline.manager.rights_manager"),
     *     "dispatcher"            = @DI\Inject("claroline.event.event_dispatcher"),
     *     "om"                    = @DI\Inject("claroline.persistence.object_manager"),
     *     "ut"                    = @DI\Inject("claroline.utilities.misc"),
     *     "secut"                 = @DI\Inject("claroline.security.utilities"),
     *     "translator"            = @DI\Inject("translator"),
     *     "platformConfigHandler" = @DI\Inject("claroline.config.platform_config_handler")
     * })
     */
    public function __construct(
        RoleManager $roleManager,
        IconManager $iconManager,
        ContainerInterface $container,
        RightsManager $rightsManager,
        StrictDispatcher $dispatcher,
        ObjectManager $om,
        ClaroUtilities $ut,
        Utilities $secut,
        MaskManager $maskManager,
        TranslatorInterface $translator,
        PlatformConfigurationHandler $platformConfigHandler
    ) {
        $this->resourceTypeRepo = $om->getRepository('ClarolineCoreBundle:Resource\ResourceType');
        $this->resourceNodeRepo = $om->getRepository('ClarolineCoreBundle:Resource\ResourceNode');
        $this->resourceRightsRepo = $om->getRepository('ClarolineCoreBundle:Resource\ResourceRights');
        $this->roleRepo = $om->getRepository('ClarolineCoreBundle:Role');
        $this->shortcutRepo = $om->getRepository('ClarolineCoreBundle:Resource\ResourceShortcut');
        $this->directoryRepo = $om->getRepository('ClarolineCoreBundle:Resource\Directory');
        $this->roleManager = $roleManager;
        $this->iconManager = $iconManager;
        $this->rightsManager = $rightsManager;
        $this->maskManager = $maskManager;
        $this->dispatcher = $dispatcher;
        $this->om = $om;
        $this->ut = $ut;
        $this->secut = $secut;
        $this->container = $container;
        $this->translator = $translator;
        $this->platformConfigHandler = $platformConfigHandler;
        $this->filesDirectory = $container->getParameter('claroline.param.files_directory');
    }

    /**
     * Creates a resource.
     *
     * array $rights should be defined that way:
     * array('ROLE_WS_XXX' => array('open' => true, 'edit' => false, ...
     * 'create' => array('directory', ...), 'role' => $entity))
     *
     * @param \Claroline\CoreBundle\Entity\Resource\AbstractResource $resource
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceType     $resourceType
     * @param \Claroline\CoreBundle\Entity\User                      $creator
     * @param \Claroline\CoreBundle\Entity\Workspace\Workspace       $workspace
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode     $parent
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceIcon     $icon
     * @param array                                                  $rights
     *
     * @return \Claroline\CoreBundle\Entity\Resource\AbstractResource
     */
    public function create(
        AbstractResource $resource,
        ResourceType $resourceType,
        User $creator,
        Workspace $workspace = null,
        ResourceNode $parent = null,
        ResourceIcon $icon = null,
        array $rights = [],
        $isPublished = true,
        $createRights = true
    ) {
        $this->om->startFlushSuite();
        $this->checkResourcePrepared($resource);
        $node = $this->om->factory('Claroline\CoreBundle\Entity\Resource\ResourceNode');
        $node->setResourceType($resourceType);
        $node->setPublished($isPublished);
        $node->setGuid($this->container->get('claroline.utilities.misc')->generateGuid());
        $mimeType = ($resource->getMimeType() === null) ?
            'custom/'.$resourceType->getName() :
            $resource->getMimeType();

        $node->setMimeType($mimeType);
        $node->setName($resource->getName());
        $name = $this->getUniqueName($node, $parent);
        $node->setCreator($creator);

        if (!$workspace && $parent) {
            if ($parent->getWorkspace()) {
                $workspace = $parent->getWorkspace();
            }
        }

        if ($workspace) {
            $node->setWorkspace($workspace);
        }

        $node->setParent($parent);
        $node->setName($name);
        $node->setClass(get_class($resource));

        if ($parent) {
            $this->setLastIndex($parent, $node);
        }

        if (!is_null($parent)) {
            $node->setAccessibleFrom($parent->getAccessibleFrom());
            $node->setAccessibleUntil($parent->getAccessibleUntil());
        }

        $resource->setResourceNode($node);

        if ($createRights) {
            $this->setRights($node, $parent, $rights);
        }
        $this->om->persist($node);
        $this->om->persist($resource);

        if ($icon === null) {
            $icon = $this->iconManager->getIcon($resource, $workspace);
        }

        $parentPath = '';

        if ($parent) {
            $parentPath .= $parent->getPathForDisplay().' / ';
        }

        $node->setPathForCreationLog($parentPath.$name);
        $node->setIcon($icon);

        //if it's an activity, initialize the permissions for its linked resources;
        if ($resourceType->getName() === 'activity') {
            //care if it's a shortcut
            if ($node->getClass() === 'Claroline\CoreBundle\Entity\Resource\ResourceShortcut') {
                $target = $resource->getTarget();
                $roles = [];
                $rights = $node->getRights();

                foreach ($rights as $right) {
                    $roles[] = $right->getRole();
                }

                $toInit = $this->getResourceFromNode($target);
                $this->container->get('claroline.manager.activity_manager')->addPermissionsToResource($toInit, $roles);
            } else {
                $this->container->get('claroline.manager.activity_manager')->initializePermissions($resource);
            }
        }

        $usersToNotify = $workspace && $workspace->getId() ?
            $this->container->get('claroline.manager.user_manager')->getUsersByWorkspaces([$workspace], null, null, false) :
            [];

        $this->dispatcher->dispatch('log', 'Log\LogResourceCreate', [$node, $usersToNotify]);
        $this->om->endFlushSuite();

        return $resource;
    }

    /**
     * Gets a unique name for a resource in a folder.
     * If the name of the resource already exists here, ~*indice* will be appended
     * to its name.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $parent
     * @param bool                                               $isCopy
     *
     * @return string
     */
    public function getUniqueName(ResourceNode $node, ResourceNode $parent = null, $isCopy = false)
    {
        $candidateName = $node->getName();
        $nodeType = $node->getResourceType();
        //if the parent is null, then it's a workspace root and the name is always correct
        //otherwise we fetch each workspace root with the findBy and the UnitOfWork won't be happy...
        if (!$parent) {
            return $candidateName;
        }

        $parent = $parent ?: $node->getParent();
        $sameLevelNodes = $parent ?
            $parent->getChildren() :
            $this->resourceNodeRepo->findBy(['parent' => null]);
        $siblingNames = [];

        foreach ($sameLevelNodes as $levelNode) {
            if (!$isCopy && $levelNode === $node) {
                // without that condition, a node which is "renamed" with the
                // same name is also incremented
                continue;
            }
            if ($levelNode->getResourceType() === $nodeType) {
                $siblingNames[] = $levelNode->getName();
            }
        }

        if (!in_array($candidateName, $siblingNames)) {
            return $candidateName;
        }

        $candidateRoot = pathinfo($candidateName, PATHINFO_FILENAME);
        $candidateExt = ($ext = pathinfo($candidateName, PATHINFO_EXTENSION)) ? '.'.$ext : '';
        $candidatePattern = '/^'
            .preg_quote($candidateRoot)
            .'~(\d+)'
            .preg_quote($candidateExt)
            .'$/';
        $previousIndex = 0;

        foreach ($siblingNames as $name) {
            if (preg_match($candidatePattern, $name, $matches) && $matches[1] > $previousIndex) {
                $previousIndex = $matches[1];
            }
        }

        return $candidateRoot.'~'.++$previousIndex.$candidateExt;
    }

    /**
     * Checks if an array of serialized resources share the same parent.
     *
     * @param array nodes
     *
     * @return array
     */
    public function haveSameParents(array $nodes)
    {
        $firstRes = array_pop($nodes);
        $tmp = $firstRes['parent_id'];

        foreach ($nodes as $node) {
            if ($tmp !== $node['parent_id']) {
                return false;
            }
        }

        return true;
    }

    /**
     * Creates a shortcut.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode     $target
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode     $parent
     * @param \Claroline\CoreBundle\Entity\User                      $creator
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceShortcut $shortcut
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceShortcut
     */
    public function makeShortcut(ResourceNode $target, ResourceNode $parent, User $creator, ResourceShortcut $shortcut)
    {
        $shortcut->setName($target->getName());

        if (get_class($target) !== 'Claroline\CoreBundle\Entity\Resource\ResourceShortcut') {
            $shortcut->setTarget($target);
        } else {
            $shortcut->setTarget($target->getTarget());
        }

        $shortcut = $this->create(
            $shortcut,
            $target->getResourceType(),
            $creator,
            $parent->getWorkspace(),
            $parent,
            $target->getIcon()->getShortcutIcon()
        );

        $this->dispatcher->dispatch('log', 'Log\LogResourceCreate', [$shortcut->getResourceNode()]);

        return $shortcut;
    }

    /**
     * Set the right of a resource.
     * If $rights = array(), the $parent node rights will be copied.
     *
     * array $rights should be defined that way:
     * array('ROLE_WS_XXX' => array('open' => true, 'edit' => false, ...
     * 'create' => array('directory', ...), 'role' => $entity))
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $parent
     * @param array                                              $rights
     *
     * @throws RightsException
     */
    public function setRights(
        ResourceNode $node,
        ResourceNode $parent = null,
        array $rights = []
    ) {
        if (count($rights) === 0 && $parent !== null) {
            $node = $this->rightsManager->copy($parent, $node);
        } else {
            $this->createRights($node, $rights);
        }

        return $node;
    }

    /**
     * Create the rights for a node.
     *
     * array $rights should be defined that way:
     * array('ROLE_WS_XXX' => array('open' => true, 'edit' => false, ...
     * 'create' => array('directory', ...), 'role' => $entity))
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param array                                              $rights
     */
    public function createRights(
        ResourceNode $node,
        array $rights = []
    ) {
        foreach ($rights as $data) {
            $resourceTypes = $this->checkResourceTypes($data['create']);
            $this->rightsManager->create($data, $data['role'], $node, false, $resourceTypes);
        }

        if (!array_key_exists('ROLE_ANONYMOUS', $rights)) {
            $this->rightsManager->create(
                0,
                $this->roleRepo->findOneBy(['name' => 'ROLE_ANONYMOUS']),
                $node,
                false,
                []
            );
        }

        if (!array_key_exists('ROLE_USER', $rights)) {
            $this->rightsManager->create(
                0,
                $this->roleRepo->findOneBy(['name' => 'ROLE_USER']),
                $node,
                false,
                []
            );
        }
    }

    public function openResourceForPortal(ResourceNode $node)
    {
        $this->rightsManager->editPerms(
            1,
            $this->roleManager->getRoleByName('ROLE_USER'),
            $node,
            false,
            [],
            true
        );
        $this->rightsManager->editPerms(
            1,
            $this->roleManager->getRoleByName('ROLE_ANONYMOUS'),
            $node,
            false,
            [],
            true
        );
    }

    /**
     * Checks if a resource already has a name.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\AbstractResource $resource
     *
     * @throws MissingResourceNameException
     */
    public function checkResourcePrepared(AbstractResource $resource)
    {
        $stringErrors = '';

        //null or '' shouldn't be valid
        if ($resource->getName() === null) {
            $stringErrors .= 'The resource name is missing'.PHP_EOL;
        }

        if ($stringErrors !== '') {
            throw new MissingResourceNameException($stringErrors);
        }
    }

    /**
     * Checks if an array of resource type name exists.
     * Expects an array of types array(array('name' => 'type'),...).
     *
     * @param array $resourceTypes
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceType
     *
     * @throws ResourceTypeNotFoundException
     */
    public function checkResourceTypes(array $resourceTypes)
    {
        $validTypes = [];
        $unknownTypes = [];

        foreach ($resourceTypes as $type) {
            //@todo write findByNames method.
            $rt = $this->resourceTypeRepo->findOneByName($type['name']);
            if ($rt === null) {
                $unknownTypes[] = $type['name'];
            } else {
                $validTypes[] = $rt;
            }
        }

        if (count($unknownTypes) > 0) {
            $content = 'The resource type(s) ';
            foreach ($unknownTypes as $unknown) {
                $content .= "{$unknown}, ";
            }
            $content .= 'were not found';

            throw new ResourceTypeNotFoundException($content);
        }

        return $validTypes;
    }

    /**
     * Insert the resource $resource at the 'index' position.
     *
     * @param ResourceNode $node
     * @param int          $next
     *
     * @return ResourceNode
     */
    public function insertAtIndex(ResourceNode $node, $index)
    {
        $this->om->startFlushSuite();

        if ($index > $node->getIndex()) {
            $this->shiftLeftAt($node->getParent(), $index);
            $node->setIndex($index);
        } else {
            $this->shiftRightAt($node->getParent(), $index);
            $node->setIndex($index);
        }

        $this->om->persist($node);
        $this->om->forceFlush();
        $this->reorder($node->getParent());
        $this->om->endFlushSuite();
    }

    /**
     * @param ResourceNode $parent
     * @param int          $index
     */
    public function shiftRightAt(ResourceNode $parent, $index)
    {
        $nodes = $parent->getChildren();

        foreach ($nodes as $node) {
            if ($node->getIndex() >= $index) {
                $node->setIndex($node->getIndex() + 1);
            }
            $this->om->persist($node);
        }

        $this->om->flush();
    }

    /**
     * @param ResourceNode $parent
     * @param int          $index
     */
    public function shiftLeftAt(ResourceNode $parent, $index)
    {
        $nodes = $parent->getChildren();

        foreach ($nodes as $node) {
            if ($node->getIndex() <= $index) {
                $node->setIndex($node->getIndex());
            }
            $this->om->persist($node);
        }

        $this->om->flush();
    }

    /**
     * @param ResourceNode $node
     * @param bool         $detach
     */
    public function reorder(ResourceNode $node, $detach = false)
    {
        /** @var \Claroline\CoreBundle\Repository\ResourceNodeRepository $resourceNodeRepository */
        $resourceNodeRepository = $this->om->getRepository('ClarolineCoreBundle:Resource\ResourceNode');
        $children = $resourceNodeRepository->getChildren($node, true, 'index');
        $index = 1;

        foreach ($children as $child) {
            $child->setIndex($index);
            ++$index;
            $this->om->persist($child);
        }

        $this->om->flush();

        if ($detach) {
            foreach ($children as $child) {
                $this->om->detach($child);
            }
        }
    }

    /**
     * Moves a resource.
     *
     * @param ResourceNode $child  currently treated node
     * @param ResourceNode $parent old parent
     *
     * @throws ResourceMoveException
     *
     * @return ResourceNode
     */
    public function move(ResourceNode $child, ResourceNode $parent)
    {
        if ($parent === $child) {
            throw new ResourceMoveException('You cannot move a directory into itself');
        }
        $this->om->startFlushSuite();
        $this->setLastIndex($parent, $child);
        $child->setParent($parent);
        $child->setName($this->getUniqueName($child, $parent));

        if ($child->getWorkspace()->getId() !== $parent->getWorkspace()->getId()) {
            $this->updateWorkspace($child, $parent->getWorkspace());
        }

        $this->om->persist($child);
        $this->om->endFlushSuite();
        $this->dispatcher->dispatch('log', 'Log\LogResourceMove', [$child, $parent]);

        return $child;
    }

    /**
     * Set the $node at the last position of the $parent.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $parent
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     */
    public function setLastIndex(ResourceNode $parent, ResourceNode $node, $autoflush = true)
    {
        $max = $this->resourceNodeRepo->findLastIndex($parent);
        $node->setIndex($max + 1);
        $this->om->persist($node);
        if ($autoflush) {
            $this->om->flush();
        }
    }

    /**
     * Remove the $node from the chained list.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     */
    public function removeIndex(ResourceNode $node)
    {
    }

    /**
     * Checks if a resource in a node has a link to the target with a shortcut.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $parent
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $target
     *
     * @return bool
     */
    public function hasLinkTo(ResourceNode $parent, ResourceNode $target)
    {
        $nodes = $this->resourceNodeRepo
            ->findBy(['parent' => $parent, 'class' => 'Claroline\CoreBundle\Entity\Resource\ResourceShortcut']);

        foreach ($nodes as $node) {
            $shortcut = $this->getResourceFromNode($node);
            if ($shortcut->getTarget() === $target) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if a path is valid.
     *
     * @param array $ancestors
     *
     * @return bool
     */
    public function isPathValid(array $ancestors)
    {
        $continue = true;

        for ($i = 0, $size = count($ancestors); $i < $size; ++$i) {
            if (isset($ancestors[$i + 1])) {
                if ($ancestors[$i + 1]->getParent() === $ancestors[$i]) {
                    $continue = true;
                } else {
                    $continue = $this->hasLinkTo($ancestors[$i], $ancestors[$i + 1]);
                }
            }

            if (!$continue) {
                return false;
            }
        }

        return true;
    }

    /**
     * Checks if all the resource in the array are directories.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode[] $ancestors
     *
     * @return bool
     */
    public function areAncestorsDirectory(array $ancestors)
    {
        array_pop($ancestors);

        foreach ($ancestors as $ancestor) {
            if ($ancestor->getResourceType()->getName() !== 'directory') {
                return false;
            }
        }

        return true;
    }

    /**
     * Builds an array used by the query builder from the query parameters.
     *
     * @see filterAction from ResourceController
     *
     * @param array $queryParameters
     *
     * @return array
     */
    public function buildSearchArray($queryParameters)
    {
        $allowedStringCriteria = ['name', 'dateFrom', 'dateTo'];
        $allowedArrayCriteria = ['types'];
        $criteria = [];

        foreach ($queryParameters as $parameter => $value) {
            if (in_array($parameter, $allowedStringCriteria) && is_string($value)) {
                $criteria[$parameter] = $value;
            } elseif (in_array($parameter, $allowedArrayCriteria) && is_array($value)) {
                $criteria[$parameter] = $value;
            }
        }

        return $criteria;
    }

    /**
     * Copies a resource in a directory.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $parent
     * @param \Claroline\CoreBundle\Entity\User                  $user
     * @param bool                                               $withRights
     *                                                                                 Defines if the rights of the copied resource have to be created
     * @param bool                                               $withDirectoryContent
     *                                                                                 Defines if the content of a directory has to be copied too
     * @param array                                              $rights
     *                                                                                 If defined, the copied resource will have exactly the given rights
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode
     */
    public function copy(
        ResourceNode $node,
        ResourceNode $parent,
        User $user,
        $index = null,
        $withRights = true,
        $withDirectoryContent = true,
        array $rights = []
    ) {
        $this->log("Copying {$node->getName()} from type {$node->getResourceType()->getName()}");
        $resource = $this->getResourceFromNode($node);
        $env = $this->container->get('kernel')->getEnvironment();

        if ($resource instanceof ResourceShortcut) {
            $copy = $this->om->factory('Claroline\CoreBundle\Entity\Resource\ResourceShortcut');
            $copy->setTarget($resource->getTarget());
            $newNode = $this->copyNode($node, $parent, $user, $withRights, $rights, $index);
            $copy->setResourceNode($newNode);
        } else {
            if (!$resource) {
                if ($env === 'dev') {
                    $message = 'The resource '.$node->getName().' was not found (node id is '.$node->getId().')';
                    $this->container->get('logger')->error($message);
                    throw new ResourceNotFoundException($message);
                } else {
                    //if something is malformed in production, try to not break everything if we don't need to. Just retun null.
                    return;
                }
            }

            $event = $this->dispatcher->dispatch(
                'copy_'.$node->getResourceType()->getName(),
                'CopyResource',
                [$resource, $parent]
            );

            $copy = $event->getCopy();
            $newNode = $this->copyNode($node, $parent, $user, $withRights, $rights, $index);

            // Set the published state
            $newNode->setPublished($event->getPublish());

            $copy->setResourceNode($newNode);

            if ($node->getResourceType()->getName() === 'directory' &&
                $withDirectoryContent) {
                $i = 1;

                foreach ($node->getChildren() as $child) {
                    if ($child->isActive()) {
                        $this->copy($child, $newNode, $user, $i, $withRights, $withDirectoryContent, $rights);
                        ++$i;
                    }
                }
            }
        }

        $this->om->persist($copy);
        $this->dispatcher->dispatch('log', 'Log\LogResourceCopy', [$newNode, $node]);
        $this->om->flush();

        return $copy;
    }

    /**
     * Sets the publication flag of a collection of nodes.
     *
     * @param ResourceNode[] $nodes
     * @param bool           $arePublished
     */
    public function setPublishedStatus(array $nodes, $arePublished)
    {
        foreach ($nodes as $node) {
            $node->setPublished($arePublished);
            $eventName = "publication_change_{$node->getResourceType()->getName()}";
            $resource = $this->getResourceFromNode($node);
            $this->dispatcher->dispatch($eventName, 'PublicationChange', [$resource]);
        }

        $this->om->flush();
    }

    /**
     * Convert a resource into an array (mainly used to be serialized and sent to the manager.js as
     * a json response).
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode                   $node
     * @param \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $toke
     * @param bool                                                                 $new: set the 'new' flag to display warning in the resource manager
     *
     * @todo check "new" from log
     *
     * @return array
     */
    public function toArray(ResourceNode $node, TokenInterface $token, $new = false)
    {
        $resourceArray = [];
        $resourceArray['id'] = $node->getId();
        $resourceArray['name'] = $node->getName();
        $resourceArray['parent_id'] = ($node->getParent() !== null) ? $node->getParent()->getId() : null;
        $resourceArray['creator_username'] = $node->getCreator()->getUsername();
        $resourceArray['creator_id'] = $node->getCreator()->getId();
        $resourceArray['type'] = $node->getResourceType()->getName();
        $resourceArray['large_icon'] = $node->getIcon()->getRelativeUrl();
        $resourceArray['path_for_display'] = $node->getPathForDisplay();
        $resourceArray['mime_type'] = $node->getMimeType();
        $resourceArray['published'] = $node->isPublished();
        $resourceArray['index_dir'] = $node->getIndex();
        $resourceArray['creation_date'] = $node->getCreationDate()->format($this->translator->trans('date_range.format.with_hours', [], 'platform'));
        $resourceArray['modification_date'] = $node->getModificationDate()->format($this->translator->trans('date_range.format.with_hours', [], 'platform'));
        $resourceArray['new'] = $new;

        $isAdmin = false;

        $roles = $this->roleManager->getStringRolesFromToken($token);

        foreach ($roles as $role) {
            if ($role === 'ROLE_ADMIN') {
                $isAdmin = true;
            }
        }

        if ($isAdmin || ($token->getUser() !== 'anon.' && $node->getCreator()->getUsername() === $token->getUser()->getUsername())) {
            $resourceArray['mask'] = 1023;
        } else {
            $resourceArray['mask'] = $this->resourceRightsRepo->findMaximumRights($roles, $node);
        }

        //the following line is required because we wanted to disable the right edition in personal worksspaces...
        //this is not required for everything to work properly.

        if (!$node->getWorkspace()) {
            $resourceArray['enableRightsEdition'] = false;
        } else {
            if ($node->getWorkspace()->isPersonal() && !$this->rightsManager->canEditPwsPerm($token)) {
                $resourceArray['enableRightsEdition'] = false;
            } else {
                $resourceArray['enableRightsEdition'] = true;
            }
        }

        if ($node->getResourceType()->getName() === 'file') {
            if ($node->getClass() === 'Claroline\CoreBundle\Entity\Resource\ResourceShortcut') {
                $shortcut = $this->getResourceFromNode($node);
                $realNode = $shortcut->getTarget();
            } else {
                $realNode = $node;
            }

            $file = $this->getResourceFromNode($realNode);
            $resourceArray['size'] = $file->getFormattedSize();
        }

        return $resourceArray;
    }

    /**
     * Removes a resource.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     *
     * @throws \LogicException
     */
    public function delete(ResourceNode $resourceNode, $force = false)
    {
        $this->log('Removing '.$resourceNode->getName().'['.$resourceNode->getResourceType()->getName().':id:'.$resourceNode->getId().']');

        if ($resourceNode->getParent() === null && !$force) {
            throw new \LogicException('Root directory cannot be removed');
        }
        $workspace = $resourceNode->getWorkspace();
        $nodes = $this->getDescendants($resourceNode);
        $count = count($nodes);
        $nodes[] = $resourceNode;
        $softDelete = $this->platformConfigHandler->getParameter('resource_soft_delete');
        $this->om->startFlushSuite();
        $this->log('Looping through '.$count.' children...');

        foreach ($nodes as $node) {
            $eventSoftDelete = false;
            $this->log('Removing '.$node->getName().'['.$node->getResourceType()->getName().':id:'.$node->getId().']');
            $resource = $this->getResourceFromNode($node);
            /*
             * resChild can be null if a shortcut was removed
             * @todo: fix shortcut delete. If a target is removed, every link to the target should be removed too.
             */
            if ($resource !== null) {
                if ($node->getClass() !== 'Claroline\CoreBundle\Entity\Resource\ResourceShortcut') {
                    $event = $this->dispatcher->dispatch(
                        "delete_{$node->getResourceType()->getName()}",
                        'DeleteResource',
                        [$resource]
                    );

                    $eventSoftDelete = $event->isSoftDelete();

                    foreach ($event->getFiles() as $file) {
                        if ($softDelete) {
                            $parts = explode(
                                $this->filesDirectory.DIRECTORY_SEPARATOR,
                                $file
                            );

                            if (count($parts) === 2) {
                                $deleteDir = $this->filesDirectory.
                                    DIRECTORY_SEPARATOR.
                                    'DELETED_FILES';
                                $dest = $deleteDir.
                                    DIRECTORY_SEPARATOR.
                                    $parts[1];
                                $additionalDirs = explode(DIRECTORY_SEPARATOR, $parts[1]);

                                for ($i = 0; $i < count($additionalDirs) - 1; ++$i) {
                                    $deleteDir .= DIRECTORY_SEPARATOR.$additionalDirs[$i];
                                }

                                if (!is_dir($deleteDir)) {
                                    mkdir($deleteDir, 0777, true);
                                }
                                rename($file, $dest);
                            }
                        } else {
                            unlink($file);
                        }

                        //It won't work if a resource has no workspace for a reason or an other. This could be a source of bug.
                        $dir = $this->filesDirectory.
                            DIRECTORY_SEPARATOR.
                            'WORKSPACE_'.
                            $workspace->getId();

                        if (is_dir($dir) && $this->isDirectoryEmpty($dir)) {
                            rmdir($dir);
                        }
                    }
                }

                // Delete all associated shortcuts
                $this->deleteAssociatedShortcuts($node);

                if ($softDelete || $eventSoftDelete) {
                    $node->setActive(false);
                    $this->om->persist($node);
                } else {
                    //what is it ?
                    $this->dispatcher->dispatch(
                        'claroline_resources_delete',
                        'GenericDatas',
                        [[$node]]
                    );

                    if ($node->getIcon() && $workspace) {
                        $this->iconManager->delete($node->getIcon(), $workspace);
                    }

                    /*
                     * If the child isn't removed here aswell, doctrine will fail to remove $resChild
                     * because it still has $resChild in its UnitOfWork or something (I have no idea
                     * how doctrine works tbh). So if you remove this line the suppression will
                     * not work for directory containing children.
                     */
                    $this->om->remove($resource);
                    $this->om->remove($node);
                }

                $this->dispatcher->dispatch(
                    'log',
                    'Log\LogResourceDelete',
                    [$node]
                );
            }
        }

        $this->om->endFlushSuite();

        if (!$softDelete && $resourceNode->getParent()) {
            $this->reorder($resourceNode->getParent());
        }
    }

    /**
     * Returns an archive with the required content.
     *
     * @param array $nodes[] the nodes being exported
     *
     * @throws ExportResourceException
     *
     * @return array
     */
    public function download(array $elements, $forceArchive = false)
    {
        $data = [];

        if (count($elements) === 0) {
            throw new ExportResourceException('No resources were selected.');
        }

        $archive = new \ZipArchive();
        $pathArch = $this->container->get('claroline.config.platform_config_handler')
            ->getParameter('tmp_dir').DIRECTORY_SEPARATOR.$this->ut->generateGuid().'.zip';
        $archive->open($pathArch, \ZipArchive::CREATE);
        $nodes = $this->expandResources($elements);

        if (!$forceArchive && count($nodes) === 1) {
            $event = $this->dispatcher->dispatch(
                "download_{$nodes[0]->getResourceType()->getName()}",
                'DownloadResource',
                [$this->getResourceFromNode($this->getRealTarget($nodes[0]))]
            );
            $extension = $event->getExtension();
            $data['name'] = empty($extension) ?
                $nodes[0]->getName() :
                $nodes[0]->getName().'.'.$extension;
            $data['file'] = $event->getItem();
            $guesser = ExtensionGuesser::getInstance();
            $data['mimeType'] = $guesser->guess($nodes[0]->getMimeType()) !== null ? $nodes[0]->getMimeType() : null;

            return $data;
        }

        if (isset($elements[0])) {
            $currentDir = $elements[0];
        } else {
            $archive->addEmptyDir($elements[0]->getName());
        }

        foreach ($nodes as $node) {
            //we only download is we can...
            if ($this->container->get('security.context')->isGranted('EXPORT', $node)) {
                $node = $this->getRealTarget($node);
                $resource = $this->getResourceFromNode($node);

                if ($resource) {
                    if (get_class($resource) === 'Claroline\CoreBundle\Entity\Resource\ResourceShortcut') {
                        $node = $resource->getTarget();
                    }

                    $filename = $this->getRelativePath($currentDir, $node).$node->getName();
                    $resource = $this->getResourceFromNode($node);

                    //if it's a file, we may have to add the extension back in case someone removed it from the name
                    if ($node->getResourceType()->getName() === 'file') {
                        $extension = '.'.pathinfo($resource->getHashName(), PATHINFO_EXTENSION);
                        if (!preg_match("#$extension#", $filename)) {
                            $filename .= $extension;
                        }
                    }

                    if ($node->getResourceType()->getName() !== 'directory') {
                        $event = $this->dispatcher->dispatch(
                            "download_{$node->getResourceType()->getName()}",
                            'DownloadResource',
                            [$resource]
                        );

                        $obj = $event->getItem();

                        if ($obj !== null) {
                            $archive->addFile($obj, iconv(mb_detect_encoding($filename), $this->getEncoding(), $filename));
                        } else {
                            $archive->addFromString(iconv(mb_detect_encoding($filename), $this->getEncoding(), $filename), '');
                        }
                    } else {
                        $archive->addEmptyDir(iconv(mb_detect_encoding($filename), $this->getEncoding(), $filename));
                    }

                    $this->dispatcher->dispatch('log', 'Log\LogResourceExport', [$node]);
                }
            }
        }

        $archive->close();
        $tmpList = $this->container->getParameter('claroline.param.platform_generated_archive_path');
        file_put_contents($tmpList, $pathArch."\n", FILE_APPEND);
        $data['name'] = 'archive.zip';
        $data['file'] = $pathArch;
        $data['mimeType'] = 'application/zip';
        $this->container->get('claroline.core_bundle.listener.kernel_terminate_listener')->addElementToRemove($pathArch);

        return $data;
    }

    /**
     * Returns every children of every resource (includes the startnode).
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode[] $nodes
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode[]
     *
     * @throws \Exception
     */
    public function expandResources(array $nodes)
    {
        $dirs = [];
        $ress = [];
        $toAppend = [];

        foreach ($nodes as $node) {
            $resourceTypeName = $node->getResourceType()->getName();
            ($resourceTypeName === 'directory') ? $dirs[] = $node : $ress[] = $node;
        }

        foreach ($dirs as $dir) {
            $children = $this->getDescendants($dir);

            foreach ($children as $child) {
                if ($child->isActive() &&
                    $child->getResourceType()->getName() !== 'directory') {
                    $toAppend[] = $child;
                }
            }
        }

        $merge = array_merge($toAppend, $ress);

        return $merge;
    }

    /**
     * Gets the relative path between 2 instances (not optimized yet).
     *
     * @param ResourceNode $root
     * @param ResourceNode $node
     *
     * @return string
     */
    private function getRelativePath(ResourceNode $root, ResourceNode $node, $path = '')
    {
        if ($node->getParent() !== $root->getParent() && $node->getParent() !== null) {
            $path = $node->getParent()->getName().DIRECTORY_SEPARATOR.$path;
            $path = $this->getRelativePath($root, $node->getParent(), $path);
        }

        return $path;
    }

    /**
     * Renames a node.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param string                                             $name
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode
     */
    public function rename(ResourceNode $node, $name)
    {
        $node->setName($name);
        $name = $this->getUniqueName($node, $node->getParent());
        $node->setName($name);
        $this->om->persist($node);
        $this->logChangeSet($node);
        $this->om->flush();

        return $node;
    }

    /**
     * Changes a node icon.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param \Symfony\Component\HttpFoundation\File\File        $file
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceIcon
     */
    public function changeIcon(ResourceNode $node, File $file)
    {
        $this->om->startFlushSuite();
        $icon = $this->iconManager->createCustomIcon($file, $node->getWorkspace());
        $this->iconManager->replace($node, $icon);
        $this->logChangeSet($node);
        $this->om->endFlushSuite();

        return $icon;
    }

    /**
     * Logs every change on a node.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     */
    public function logChangeSet(ResourceNode $node)
    {
        $uow = $this->om->getUnitOfWork();
        $uow->computeChangeSets();
        $changeSet = $uow->getEntityChangeSet($node);

        if (count($changeSet) > 0) {
            $this->dispatcher->dispatch(
                'log',
                'Log\LogResourceUpdate',
                [$node, $changeSet]
            );
        }
    }

    /**
     * @param string $class
     * @param string $name
     *
     * @return \Claroline\CoreBundle\Entity\Resource\AbstractResource
     *
     * @throws WrongClassException
     */
    public function createResource($class, $name)
    {
        $entity = $this->om->factory($class);

        if ($entity instanceof AbstractResource) {
            $entity->setName($name);

            return $entity;
        }

        throw new WrongClassException(
            "{$class} doesn't extend Claroline\CoreBundle\Entity\Resource\AbstractResource."
        );
    }

    /**
     * @param int $id
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode
     */
    public function getNode($id)
    {
        return $this->resourceNodeRepo->find($id);
    }

    /**
     * @param \Claroline\CoreBundle\Entity\User $user
     *
     * @return array
     */
    public function getRoots(User $user)
    {
        return $this->resourceNodeRepo->findWorkspaceRootsByUser($user);
    }

    /**
     * @param \Claroline\CoreBundle\Entity\Workspace\Workspace $workspace
     *
     * @return array
     */
    public function getWorkspaceRoot(Workspace $workspace)
    {
        return $this->resourceNodeRepo->findWorkspaceRoot($workspace);
    }

    /**
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     *
     * @return array
     */
    public function getAncestors(ResourceNode $node)
    {
        return $this->resourceNodeRepo->findAncestors($node);
    }

    /**
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param string[]                                           $roles
     * @param bool                                               $isSorted
     *
     * @return array
     */
    public function getChildren(
        ResourceNode $node,
        array $roles,
        $user,
        $withLastOpenDate = false
    ) {
        return $this->resourceNodeRepo->findChildren($node, $roles, $user, $withLastOpenDate);
    }

    /**
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param bool                                               $includeStartNode
     *
     * @return array
     */
    public function getAllChildren(ResourceNode $node, $includeStartNode)
    {
        return $this->resourceNodeRepo->getChildren($node, $includeStartNode, 'path', 'DESC');
    }

    /**
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     *
     * @return array
     */
    public function getDescendants(ResourceNode $node)
    {
        return $this->resourceNodeRepo->findDescendants($node);
    }

    /**
     * @param string                                             $mimeType
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $parent
     * @param string[]|RoleInterface[]                           $roles
     *
     * @return array
     */
    public function getByMimeTypeAndParent($mimeType, ResourceNode $parent, array $roles)
    {
        return $this->resourceNodeRepo->findByMimeTypeAndParent($mimeType, $parent, $roles);
    }

    /**
     * Find all the nodes wich mach the search criteria.
     * The search array must have the following structure (its array keys aren't required).
     *
     * array(
     *     'types' => array('typename1', 'typename2'),
     *     'roots' => array('rootpath1', 'rootpath2'),
     *     'dateFrom' => 'date',
     *     'dateTo' => 'date',
     *     'name' => 'name',
     *     'isExportable' => 'bool'
     * )
     *
     *
     * @param array                      $criteria
     * @param string[] | RoleInterface[] $userRoles
     *
     * @return array
     */
    public function getByCriteria(array $criteria, array $userRoles = null)
    {
        return $this->resourceNodeRepo->findByCriteria($criteria, $userRoles);
    }

    /**
     * @todo define the array content
     *
     * @param array $nodesIds
     *
     * @return array
     */
    public function getWorkspaceInfoByIds(array $nodesIds)
    {
        return $this->resourceNodeRepo->findWorkspaceInfoByIds($nodesIds);
    }

    /**
     * @param string $name
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceType
     */
    public function getResourceTypeByName($name)
    {
        return $this->resourceTypeRepo->findOneByName($name);
    }

    /**
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceType[]
     */
    public function getAllResourceTypes()
    {
        return $this->resourceTypeRepo->findAll();
    }

    /**
     * @param Workspace $workspace
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode[]
     */
    public function getByWorkspace(Workspace $workspace)
    {
        return $this->resourceNodeRepo->findBy(['workspace' => $workspace]);
    }

    /**
     * @param Workspace $workspace
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode[]
     */
    public function getByWorkspaceAndResourceType(
        Workspace $workspace,
        ResourceType $resourceType
    ) {
        return $this->resourceNodeRepo->findBy(
            ['workspace' => $workspace, 'resourceType' => $resourceType],
            ['name' => 'ASC']
        );
    }

    /**
     * @param int[] $ids
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode[]
     */
    public function getByIds(array $ids)
    {
        return $this->om->findByIds(
            'Claroline\CoreBundle\Entity\Resource\ResourceNode',
            $ids
        );
    }

    /**
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode
     */
    public function getById($id)
    {
        return $this->resourceNodeRepo->findOneby(['id' => $id]);
    }

    /**
     * Returns the resource linked to a node.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     *
     * @return \Claroline\CoreBundle\Entity\Resource\AbstractResource
     */
    public function getResourceFromNode(ResourceNode $node)
    {
        return $this->om->getRepository($node->getClass())->findOneByResourceNode($node);
    }

    /**
     * Copy a resource node.
     *
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $node
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $newParent
     * @param \Claroline\CoreBundle\Entity\User                  $user
     * @param \Claroline\CoreBundle\Entity\Resource\ResourceNode $last
     * @param bool                                               $withRights
     *                                                                       Defines if the rights of the copied node have to be created
     * @param array                                              $rights
     *                                                                       If defined, the copied node will have exactly the given rights
     *
     * @return \Claroline\CoreBundle\Entity\Resource\ResourceNode
     */
    private function copyNode(
        ResourceNode $node,
        ResourceNode $newParent,
        User $user,
        $withRights = true,
        array $rights = [],
        $index = null
    ) {
        $newNode = $this->om->factory('Claroline\CoreBundle\Entity\Resource\ResourceNode');
        $newNode->setResourceType($node->getResourceType());
        $newNode->setCreator($user);
        $newNode->setWorkspace($newParent->getWorkspace());
        $newNode->setParent($newParent);
        $newParent->addChild($newNode);
        $newNode->setName($this->getUniqueName($node, $newParent, true));
        $newNode->setIcon($node->getIcon());
        $newNode->setClass($node->getClass());
        $newNode->setMimeType($node->getMimeType());
        $newNode->setAccessibleFrom($node->getAccessibleFrom());
        $newNode->setAccessibleUntil($node->getAccessibleUntil());
        $newNode->setPublished($node->isPublished());
        $newNode->setLicense($node->getLicense());
        $newNode->setAuthor($node->getAuthor());
        $newNode->setIndex($index);
        $newNode->setGuid($this->container->get('claroline.utilities.misc')->generateGuid());

        if ($withRights) {
            //if everything happens inside the same workspace and no specific rights have been given,
            //rights are copied
            if ($newParent->getWorkspace() === $node->getWorkspace() && count($rights) === 0) {
                $this->rightsManager->copy($node, $newNode);
            } else {
                //otherwise we use the parent rights or the given rights if not empty
                $this->setRights($newNode, $newParent, $rights);
            }
        }

        $this->om->persist($newNode);

        return $newNode;
    }

    private function getEncoding()
    {
        return $this->ut->getDefaultEncoding();
    }

    /**
     * Returns true of the token owns the workspace of the resource node.
     *
     * @param ResourceNode   $node
     * @param TokenInterface $token
     *
     * @return bool
     */
    public function isWorkspaceOwnerOf(ResourceNode $node, TokenInterface $token)
    {
        $workspace = $node->getWorkspace();
        $managerRoleName = 'ROLE_WS_MANAGER_'.$workspace->getGuid();

        return in_array($managerRoleName, $this->secut->getRoles($token)) ? true : false;
    }

    public function resetIcon(ResourceNode $node)
    {
        $this->om->startFlushSuite();
        $icon = $this->iconManager->getIcon(
            $this->getResourceFromNode($node),
            $node->getWorkspace()
        );
        $node->setIcon($icon);
        $this->om->endFlushSuite();
    }

    /**
     * Retrieves all descendants of given ResourceNode and updates their
     * accessibility dates.
     *
     * @param ResourceNode $node            A directory
     * @param datetime     $accessibleFrom
     * @param datetime     $accessibleUntil
     */
    public function changeAccessibilityDate(
        ResourceNode $node,
        $accessibleFrom,
        $accessibleUntil
    ) {
        if ($node->getResourceType()->getName() === 'directory') {
            $descendants = $this->resourceNodeRepo->findDescendants($node);

            foreach ($descendants as $descendant) {
                $descendant->setAccessibleFrom($accessibleFrom);
                $descendant->setAccessibleUntil($accessibleUntil);
                $this->om->persist($descendant);
            }
            $this->om->flush();
        }
    }

    /**
     * Returns true if the listener is implemented for a resourceType and an action.
     *
     * @param ResourceType $resourceType
     * @param string       $actionName
     */
    public function isResourceActionImplemented(ResourceType $resourceType = null, $actionName)
    {
        if ($resourceType) {
            $alwaysTrue = ['rename', 'edit-properties', 'edit-rights', 'open-tracking'];
            //first, directories can be downloaded even if there is no listener attached to it
            if ($resourceType->getName() === 'directory' && $actionName === 'download') {
                return true;
            }
            if (in_array($actionName, $alwaysTrue)) {
                return true;
            }

            $eventName = $actionName.'_'.$resourceType->getName();
        } else {
            $eventName = 'resource_action_'.$actionName;
        }

        return $this->dispatcher->hasListeners($eventName);
    }

    private function isDirectoryEmpty($dirName)
    {
        $files = [];
        $dirHandle = opendir($dirName);

        if ($dirHandle) {
            while ($file = readdir($dirHandle)) {
                if ($file !== '.' && $file !== '..') {
                    $files[] = $file;
                    break;
                }
            }
            closedir($dirHandle);
        }

        return count($files) === 0;
    }

    private function updateWorkspace(ResourceNode $node, Workspace $workspace)
    {
        $this->om->startFlushSuite();
        $node->setWorkspace($workspace);
        $this->om->persist($node);

        if ($node->getResourceType()->getName() === 'directory') {
            $children = $this->resourceNodeRepo->getChildren($node);

            foreach ($children as $child) {
                $child->setWorkspace($workspace);
                $this->om->persist($child);
            }
        }
        $this->om->endFlushSuite();
    }

    /**
     * Check if a file can be added in the workspace storage dir (disk usage limit).
     *
     * @param Workspace    $workspace
     * @param \SplFileInfo $file
     */
    public function checkEnoughStorageSpaceLeft(Workspace $workspace, \SplFileInfo $file)
    {
        $workspaceManager = $this->container->get('claroline.manager.workspace_manager');
        $fileSize = filesize($file);
        $allowedMaxSize = $this->ut->getRealFileSize($workspace->getMaxStorageSize());
        $currentStorage = $this->ut->getRealFileSize($workspaceManager->getUsedStorage($workspace));

        return ($currentStorage + $fileSize > $allowedMaxSize) ? false : true;
    }

    /**
     * Check if a ResourceNode can be added in a Workspace (resource amount limit).
     *
     * @param Workspace $workspace
     */
    public function checkResourceLimitExceeded(Workspace $workspace)
    {
        $workspaceManager = $this->container->get('claroline.manager.workspace_manager');
        $maxFileStorage = $workspace->getMaxUploadResources();

        return ($maxFileStorage < $workspaceManager->countResources($workspace)) ? true : false;
    }

    /**
     * Adds the storage exceeded error in a form.
     *
     * @param Form $form
     * @param int  $filesize
     */
    public function addStorageExceededFormError(Form $form, $fileSize, Workspace $workspace)
    {
        $maxSize = $this->ut->getRealFileSize($workspace->getMaxStorageSize());
        $usedSize = $this->ut->getRealFileSize(
            $this->container->get('claroline.manager.workspace_manager')->getUsedStorage($workspace)
        );

        $storageLeft = $maxSize - $usedSize;
        $fileSize = $this->ut->formatFileSize($this->ut->getRealFileSize($fileSize));
        $storageLeft = $this->ut->formatFileSize($storageLeft);

        $translator = $this->container->get('translator');
        $msg = $translator->trans(
            'storage_limit_exceeded',
            ['%storageLeft%' => $storageLeft, '%fileSize%' => $fileSize],
            'platform'
        );
        $form->addError(new FormError($msg));
    }

    /**
     * Search a ResourceNode wich is persisted but not flushed yet.
     *
     * @param Workspace $workspace
     * @param $name
     * @param ResourceNode $parent
     *
     * @return ResourceNode
     */
    public function getNodeScheduledForInsert(Workspace $workspace, $name, $parent = null)
    {
        $scheduledForInsert = $this->om->getUnitOfWork()->getScheduledEntityInsertions();
        $res = null;

        foreach ($scheduledForInsert as $entity) {
            if (get_class($entity) === 'Claroline\CoreBundle\Entity\Resource\ResourceNode') {
                if ($entity->getWorkspace()->getCode() === $workspace->getCode() &&
                    $entity->getName() === $name &&
                    $entity->getParent() === $parent) {
                    return $entity;
                }
            }
        }

        return $res;
    }

    /**
     * Adds the public file directory in a workspace.
     *
     * @param Workspace $workspace
     *
     * @return Directory
     */
    public function addPublicFileDirectory(Workspace $workspace)
    {
        $directory = new Directory();
        $dirName = $this->translator->trans('my_public_documents', [], 'platform');
        $directory->setName($dirName);
        $directory->setIsUploadDestination(true);
        $parent = $this->getNodeScheduledForInsert($workspace, $workspace->getName());
        if (!$parent) {
            $parent = $this->resourceNodeRepo->findOneBy(['workspace' => $workspace->getId(), 'parent' => $parent]);
        }
        $role = $this->roleManager->getRoleByName('ROLE_ANONYMOUS');

        return $this->create(
            $directory,
            $this->getResourceTypeByName('directory'),
            $workspace->getCreator(),
            $workspace,
            $parent,
            null,
            ['ROLE_ANONYMOUS' => ['open' => true, 'export' => true, 'create' => [], 'role' => $role]],
            true
        );
    }

    /**
     * Returns the list of file upload destination choices.
     *
     * @return array
     */
    public function getDefaultUploadDestinations()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($user === 'anon.') {
            return [];
        }

        $pws = $user->getPersonalWorkspace();
        $defaults = [];

        if ($pws) {
            $defaults = array_merge(
                $defaults,
                $this->directoryRepo->findDefaultUploadDirectories($pws)
            );
        }

        $node = $this->container->get('request')->getSession()->get('current_resource_node');

        if ($node && $node->getWorkspace()) {
            $root = $this->directoryRepo->findDefaultUploadDirectories($node->getWorkspace());

            if ($this->container->get('security.authorization_checker')->isGranted('CREATE', $root)) {
                $defaults = array_merge($defaults, $root);
            }
        }

        return $defaults;
    }

    private function deleteAssociatedShortcuts(ResourceNode $resourceNode)
    {
        $this->om->startFlushSuite();
        $shortcuts = $this->shortcutRepo->findByTarget($resourceNode);

        foreach ($shortcuts as $shortcut) {
            $this->om->remove($shortcut->getResourceNode());
        }
        $this->om->endFlushSuite();
    }

    public function getLastIndex(ResourceNode $parent)
    {
        try {
            $lastIndex = $this->resourceNodeRepo->findLastIndex($parent);
        } catch (NonUniqueResultException $e) {
            $lastIndex = 0;
        } catch (NoResultException $e) {
            $lastIndex = 0;
        }

        return $lastIndex;
    }

    public function getRealTarget(ResourceNode $node, $throwException = true)
    {
        if ($node->getClass() === 'Claroline\CoreBundle\Entity\Resource\ResourceShortcut') {
            $resource = $this->getResourceFromNode($node);
            if ($resource === null) {
                if ($throwException) {
                    throw new \Exception('The resource was removed.');
                }

                return;
            }
            $node = $resource->getTarget();
            if ($node === null) {
                if ($throwException) {
                    throw new \Exception('The node target was removed.');
                }

                return;
            }
        }

        return $node;
    }

    public function checkIntegrity()
    {
        $resources = $this->resourceNodeRepo->findAll();
        $batchSize = 500;
        $i = 0;

        foreach ($resources as $resource) {
            if ($resource->getWorkspace() === null && $parent = $resource->getParent()) {
                if ($workspace = $parent->getWorkspace()) {
                    $resource->setWorkspace($workspace);
                    $this->om->persist($workspace);
                    $this->log('Set workspace '.$workspace->getName().' for '.$resource->getName());
                    ++$i;

                    if ($batchSize % $i === 0) {
                        $this->om->flush();
                    }
                }
            }
        }

        $this->om->flush();
    }

    public function importDirectoriesFromCsv($file)
    {
        $data = file_get_contents($file);
        $data = $this->container->get('claroline.utilities.misc')->formatCsvOutput($data);
        $lines = str_getcsv($data, PHP_EOL);
        $this->om->startFlushSuite();
        $i = 0;
        $resourceType = $this->om->getRepository('ClarolineCoreBundle:Resource\ResourceType')->findOneByName('directory');

        foreach ($lines as $line) {
            $values = str_getcsv($line, ';');
            $code = $values[0];
            $workspace = $this->om->getRepository('ClarolineCoreBundle:Workspace\Workspace')->findOneByCode($code);

            $name = $values[1];
            $directory = $this->om->getRepository('ClarolineCoreBundle:Resource\ResourceNode')->findOneBy(
                ['workspace' => $workspace, 'name' => $name, 'resourceType' => $resourceType]
            );
            if (!$directory) {
                $directory = new Directory();
                $directory->setName($name);
                $this->log("Create directory {$name} for workspace {$code}");
                $this->create($directory, $resourceType, $workspace->getCreator(), $workspace, $this->getWorkspaceRoot($workspace));
                ++$i;
            } else {
                $this->log("Directory {$name} already exists for workspace {$code}");
            }

            if ($i % 100 === 0) {
                $this->om->forceFlush();
                $this->om->clear();
                $resourceType = $this->om->getRepository('ClarolineCoreBundle:Resource\ResourceType')->findOneByName('directory');
                $this->om->merge($resourceType);
            }
        }

        $this->om->endFlushSuite();
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getLogger()
    {
        return $this->logger;
    }

    public function getResourcesByIds(array $roles, $user, array $ids)
    {
        return count($ids) > 0 ? $this->resourceNodeRepo->findResourcesByIds($roles, $user, $ids) : [];
    }

    public function getResourceFromShortcut(ResourceNode $node)
    {
        $target = $this->getRealTarget($node);

        return $this->getResourceFromNode($target);
    }
}
