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

use Claroline\CoreBundle\Entity\Resource\ResourceNode;
use Claroline\CoreBundle\Entity\Widget\ResourcesWidgetConfig;
use Claroline\CoreBundle\Entity\Widget\WidgetInstance;
use Claroline\CoreBundle\Library\Security\Utilities;
use Claroline\CoreBundle\Persistence\ObjectManager;
use Claroline\TagBundle\Manager\TagManager;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * @DI\Service("claroline.manager.resources_widget_manager")
 */
class ResourcesWidgetManager
{
    private $authorization;
    private $om;
    private $resourceManager;
    private $resourcesWidgetConfigRepo;
    private $tagManager;
    private $tokenStorage;
    private $utils;

    /**
     * @DI\InjectParams({
     *     "authorization"   = @DI\Inject("security.authorization_checker"),
     *     "om"              = @DI\Inject("claroline.persistence.object_manager"),
     *     "resourceManager" = @DI\Inject("claroline.manager.resource_manager"),
     *     "tagManager"      = @DI\Inject("claroline.manager.tag_manager"),
     *     "tokenStorage"    = @DI\Inject("security.token_storage"),
     *     "utils"           = @DI\Inject("claroline.security.utilities")
     * })
     */
    public function __construct(
        AuthorizationCheckerInterface $authorization,
        ObjectManager $om,
        ResourceManager $resourceManager,
        TagManager $tagManager,
        TokenStorageInterface $tokenStorage,
        Utilities $utils
    ) {
        $this->authorization = $authorization;
        $this->om = $om;
        $this->resourceManager = $resourceManager;
        $this->tagManager = $tagManager;
        $this->tokenStorage = $tokenStorage;
        $this->utils = $utils;
        $this->resourcesWidgetConfigRepo = $om->getRepository('ClarolineCoreBundle:Widget\ResourcesWidgetConfig');
    }

    public function getResourcesWidgetConfig(WidgetInstance $widgetInstance)
    {
        $config = $this->resourcesWidgetConfigRepo->findOneBy(['widgetInstance' => $widgetInstance]);

        if (is_null($config)) {
            $config = new ResourcesWidgetConfig();
            $config->setWidgetInstance($widgetInstance);
            $this->om->persist($config);
            $this->om->flush();
        }

        return $config;
    }

    public function persistResourcesWidgetConfig(ResourcesWidgetConfig $config)
    {
        $this->om->persist($config);
        $this->om->flush();
    }

    public function getAllResourcesByDirectory(ResourceNode $parent)
    {
        $resources = [];
        $token = $this->tokenStorage->getToken();
        $user = $token->getUser();
        $roles = $this->utils->getRoles($token);
        $this->getChildrenResources($resources, $parent, $user, $roles);
        $this->convertResourcesPath($resources);
        $this->removeResourceFromPath($resources);

        return $resources;
    }

    public function getAllResourcesByTag($tagName, $workspaceId = null)
    {
        $resources = [];
        $resourceNodes = [];
        $nodes = $this->tagManager->getTaggedResourceNodesByTagName($tagName);

        if (!is_null($workspaceId)) {
            foreach ($nodes as $node) {
                if ($node->getWorkspace()->getId() === $workspaceId) {
                    $resourceNodes[] = $node;
                }
            }
        } else {
            $resourceNodes = $nodes;
        }
        $isAdmin = $this->authorization->isGranted('ROLE_ADMIN');

        if ($isAdmin) {
            foreach ($resourceNodes as $resourceNode) {
                $resources[] = [
                    'id' => $resourceNode->getId(),
                    'name' => $resourceNode->getName(),
                    'type' => $resourceNode->getResourceType()->getName(),
                    'path' => $resourceNode->getPathForDisplay(),
                ];
            }
            $this->removeResourceFromPath($resources, false);
        } else {
            $ids = [];
            $token = $this->tokenStorage->getToken();
            $user = $token->getUser();
            $roles = $this->utils->getRoles($token);

            foreach ($resourceNodes as $resourceNode) {
                $managerRoleName = $resourceNode->getWorkspace()->getManagerRole()->getName();

                if ($user !== 'anon.' &&
                   ($user->getId() === $resourceNode->getCreator()->getId() || in_array($managerRoleName, $roles))
                ) {
                    $resources[] = [
                        'id' => $resourceNode->getId(),
                        'name' => $resourceNode->getName(),
                        'type' => $resourceNode->getResourceType()->getName(),
                        'path' => $resourceNode->getPathForDisplay(),
                    ];
                } else {
                    $id = $resourceNode->getId();
                    $ids[$id] = $id;
                }
            }
            $this->removeResourceFromPath($resources, false);
            $resourcesByIds = $this->resourceManager->getResourcesByIds($roles, $user, $ids);
            $this->convertResourcesPath($resourcesByIds);
            $this->removeResourceFromPath($resourcesByIds);

            foreach ($resourcesByIds as $r) {
                $resources[] = $r;
            }
        }

        return $resources;
    }

    private function getChildrenResources(array &$resources, ResourceNode $parent, $user, array $roles)
    {
        $children = $this->resourceManager->getChildren($parent, $roles, $user);
        $directories = [];

        foreach ($children as $child) {
            if ($child['type'] === 'directory') {
                $directories[] = $child;
            } else {
                $resources[] = $child;
            }
        }
        foreach ($directories as $directory) {
            $dirNode = $this->resourceManager->getById($directory['id']);
            $this->getChildrenResources($resources, $dirNode, $user, $roles);
        }
    }

    private function convertResourcesPath(array &$resources)
    {
        foreach ($resources as $key => $resource) {
            $path = preg_replace('/-\d+`/', ' / ', $resource['path']);
            $resources[$key]['path'] = $path;
        }
    }

    private function removeResourceFromPath(array &$resources, $withTrailingSlash = true)
    {
        $regex = $withTrailingSlash ? '/\/[^\/]+\/ $/' : '/\/[^\/]+$/';

        foreach ($resources as $key => $resource) {
            $path = preg_replace($regex, '/', $resource['path']);
            $resources[$key]['path'] = $path;
        }
    }
}
