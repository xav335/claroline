<?php
/**
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * Author: Panagiotis TSAVDARIS
 * 
 * Date: 3/12/15
 */

namespace Icap\WebsiteBundle\Manager;

use Claroline\CoreBundle\Entity\Workspace\Workspace;
use Claroline\CoreBundle\Library\Utilities\FileSystem;
use Claroline\CoreBundle\Persistence\ObjectManager;
use Icap\WebsiteBundle\Entity\Website;
use Icap\WebsiteBundle\Entity\WebsiteOptions;
use Icap\WebsiteBundle\Entity\WebsitePage;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Routing\Router;

/**
 * @DI\Service("icap.website.manager")
 */
class WebsiteManager
{
    /**
     * @var ObjectManager;
     */
    private $om;

    /**
     * @var \Icap\WebsiteBundle\Repository\WebsitePageRepository
     */
    private $websitePageRepository;

    private $websiteOptionsRepository;

    private $router;

    /**
     * @var \Claroline\CoreBundle\Repository\UserRepository
     */
    private $userRepository;

    private $webDir;

    /**
     * @DI\InjectParams({
     *      "om"        = @DI\Inject("claroline.persistence.object_manager"),
     *      "router"    = @DI\Inject("router"),
     *      "webDir"    = @DI\Inject("%claroline.param.web_directory%")
     * })
     *
     * @param ObjectManager $om
     * @param Router        $router
     * @param $webDir
     */
    public function __construct(ObjectManager $om, Router $router, $webDir)
    {
        $this->om = $om;
        $this->router = $router;
        $this->websitePageRepository = $this->om->getRepository('IcapWebsiteBundle:WebsitePage');
        $this->websiteOptionsRepository = $this->om->getRepository('IcapWebsiteBundle:WebsiteOptions');
        $this->userRepository = $this->om->getRepository('ClarolineCoreBundle:User');
        $this->webDir = $webDir;
    }

    /**
     * Copies website to a location.
     *
     * @param Website $orgWebsite
     *
     * @return Website
     */
    public function copyWebsite(Website $orgWebsite)
    {
        $orgRoot = $orgWebsite->getRoot();
        $orgOptions = $orgWebsite->getOptions();
        $websitePages = $this->websitePageRepository->children($orgRoot);
        array_unshift($websitePages, $orgRoot);
        $newWebsitePagesMap = array();

        $newWebsite = new Website($orgWebsite->isTest());
        foreach ($websitePages as $websitePage) {
            $newWebsitePage = new WebsitePage();
            $newWebsitePage->setWebsite($newWebsite);
            $newWebsitePage->importFromArray($websitePage->exportToArray());
            if ($websitePage->isRoot()) {
                $newWebsite->setRoot($newWebsitePage);
                $this->om->persist($newWebsite);
                //$this->websitePageRepository->persistAsFirstChild($newWebsitePage);
            } else {
                $newWebsitePageParent = $newWebsitePagesMap[$websitePage->getParent()->getId()];
                $newWebsitePage->setParent($newWebsitePageParent);
                $this->websitePageRepository->persistAsLastChildOf($newWebsitePage, $newWebsitePageParent);
            }
            if ($websitePage->getIsHomepage()) {
                $newWebsite->setHomePage($newWebsitePage);
            }

            $newWebsitePagesMap[$websitePage->getId()] = $newWebsitePage;
        }
        $this->om->flush();
        $newWebsite->getOptions()->importFromArray(
            $this->webDir,
            $orgOptions->exportToArray($this->webDir),
            $this->webDir.DIRECTORY_SEPARATOR.$orgOptions->getUploadDir()
        );

        return $newWebsite;
    }

    /**
     * Imports website object from array
     * (see WebsiteImporter for structure and description).
     *
     * @param array $data
     * @param $rootPath
     * @param $test
     *
     * @return Website
     */
    public function importWebsite(array $data, $rootPath, $test = false)
    {
        $website = new Website($test);
        if (isset($data['data'])) {
            $websiteData = $data['data'];
            $websiteOptions = new WebsiteOptions();
            $websiteOptions->setWebsite($website);
            $website->setOptions($websiteOptions);

            $websitePagesMap = array();
            foreach ($websiteData['pages'] as $websitePage) {
                $entityWebsitePage = new WebsitePage();
                $entityWebsitePage->setWebsite($website);
                $entityWebsitePage->importFromArray($websitePage, $rootPath);
                if ($websitePage['is_root']) {
                    $website->setRoot($entityWebsitePage);
                    $this->om->persist($website);
                    //$this->websitePageRepository->persistAsFirstChild($entityWebsitePage);
                } else {
                    $entityWebsitePageParent = $websitePagesMap[$websitePage['parent_id']];
                    $entityWebsitePage->setParent($entityWebsitePageParent);
                    $this->websitePageRepository->persistAsLastChildOf($entityWebsitePage, $entityWebsitePageParent);
                }
                if ($websitePage['is_homepage']) {
                    $website->setHomePage($entityWebsitePage);
                }

                $websitePagesMap[$websitePage['id']] = $entityWebsitePage;
            }
            $this->om->flush();
            $websiteOptions->importFromArray(
                $this->webDir,
                $websiteData['options'],
                $rootPath
            );
        }

        return $website;
    }

    public function exportWebsite(Workspace $workspace, &$files, Website $object)
    {
        //Getting all website pages and building array
        $rootWebsitePage = $object->getRoot();
        $websitePages = $this->websitePageRepository->children($rootWebsitePage);
        array_unshift($websitePages, $rootWebsitePage);
        $websitePagesArray = array();
        foreach ($websitePages as $websitePage) {
            $websitePagesArray[] = $websitePage->exportToArray($this->router, $files);
        }
        $websiteOptionsArray = $object->getOptions()->exportToArray($this->webDir, $files);
        $data = array(
            'options' => $websiteOptionsArray,
            'pages' => $websitePagesArray,
        );

        return $data;
    }

    public function deleteWebsite(Website $website)
    {
        $websiteUploadFolder = $this->webDir.DIRECTORY_SEPARATOR.$website->getOptions()->getUploadDir();
        $fs = new FileSystem();
        $fs->remove($websiteUploadFolder);
        $this->om->remove($website);
        $this->om->flush();
    }
}
