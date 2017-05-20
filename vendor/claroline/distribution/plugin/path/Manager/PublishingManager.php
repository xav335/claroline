<?php

namespace Innova\PathBundle\Manager;

use Claroline\CoreBundle\Manager\RightsManager;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\PathBundle\Entity\InheritedResource;
use Innova\PathBundle\Entity\Path\Path;
use Innova\PathBundle\Entity\Step;

/**
 * Manage Publishing of the paths.
 */
class PublishingManager
{
    /**
     * Current entity manage for data persist.
     *
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    protected $om;

    /**
     * Resource Manager.
     *
     * @var \Claroline\CoreBundle\Manager\ResourceManager
     */
    protected $resourceManager;

    /**
     * innova step manager.
     *
     * @var \Innova\PathBundle\Manager\StepManager
     */
    protected $stepManager;

    /**
     * Rights Manager.
     *
     * @var \Claroline\CoreBundle\Manager\RightsManager
     */
    protected $rightsManager;

    /**
     * Path to publish.
     *
     * @var \Innova\PathBundle\Entity\Path\Path
     */
    protected $path;

    /**
     * JSON structure of the path.
     *
     * @var \stdClass
     */
    protected $pathStructure;

    /**
     * Class constructor.
     *
     * @param \Doctrine\Common\Persistence\ObjectManager  $objectManager
     * @param \Innova\PathBundle\Manager\StepManager      $stepManager
     * @param \Claroline\CoreBundle\Manager\RightsManager $rightsManager
     */
    public function __construct(
        ObjectManager        $objectManager,
        StepManager          $stepManager,
        RightsManager        $rightsManager)
    {
        $this->om = $objectManager;
        $this->stepManager = $stepManager;
        $this->rightsManager = $rightsManager;
    }

    /**
     * Initialize a new Publishing.
     *
     * @param \Innova\PathBundle\Entity\Path\Path $path
     *
     * @throws \Exception
     *
     * @return \Innova\PathBundle\Manager\PublishingManager
     */
    protected function start(Path $path)
    {
        // Get the path structure
        $pathStructure = $path->getStructure();
        if (empty($pathStructure)) {
            throw new \Exception('Unable to find JSON structure of the path. Publication aborted.');
        }

        // Decode structure
        $this->pathStructure = json_decode($pathStructure);
        $this->path = $path;

        return $this;
    }

    /**
     * End of the Publishing
     * Remove temp data from current service.
     *
     * @return \Innova\PathBundle\Manager\PublishingManager
     */
    protected function end()
    {
        $this->path = null;
        $this->pathStructure = null;

        return $this;
    }

    /**
     * Publish path
     * Create all needed Entities from JSON structure created by the Editor.
     *
     * @param \Innova\PathBundle\Entity\Path\Path $path
     *
     * @throws \Exception
     *
     * @return bool
     */
    public function publish(Path $path)
    {
        // We need to publish all linked resources to have a full working Path

        // Start Publishing
        $this->start($path);

        // Store existing steps to remove steps which no longer exist
        $existingSteps = $path->getSteps()->toArray();

        // Publish steps for this path
        $toProcess = !empty($this->pathStructure->steps) ? $this->pathStructure->steps : [];

        $publishedSteps = $this->publishSteps(0, null, $toProcess);

        // Clean steps to remove
        $this->cleanSteps($publishedSteps, $existingSteps);

        // Flush all created Entities in order to generate their IDs (needed to update the JSON structure of the Path)
        $this->om->flush();

        // Mark Path as published and not modified
        $this->path->setPublished(true);
        $this->path->setModified(false);

        // Re encode updated structure and update Path

        // When the Path is published, the structure is built from generated Entities
        // So we want to do this now to inject Entities IDs into the JSON structure
        $updatedStructure = $this->path->getStructure();
        $this->path->setStructure($updatedStructure);

        // Manage rights
        $this->manageRights();

        // Persist data
        $this->om->persist($this->path);
        $this->om->flush();

        // End Publishing
        $this->end();

        return true;
    }

    /**
     * Publish steps for the path.
     *
     * @param int                            $level
     * @param \Innova\PathBundle\Entity\Step $parent
     * @param array                          $steps
     * @param array                          $propagatedResources
     *
     * @return array
     */
    protected function publishSteps($level = 0, Step $parent = null, array $steps = [], $propagatedResources = [])
    {
        $currentOrder = 0;
        $processedSteps = [];

        // Retrieve existing steps for this path
        $existingSteps = $this->path->getSteps();

        foreach ($steps as $stepStructure) {
            if (empty($stepStructure->resourceId) || !$existingSteps->containsKey($stepStructure->resourceId)) {
                // Current step has never been published or step entity has been deleted => create it
                $step = $this->stepManager->create($this->path, $level, $parent, $currentOrder, $stepStructure);
            } else {
                // Step already exists => update it
                $step = $existingSteps->get($stepStructure->resourceId);
                $step = $this->stepManager->edit($this->path, $level, $parent, $currentOrder, $stepStructure, $step);
            }

            // Manage resources inheritance
            $excludedResources = !empty($stepStructure->excludedResources) ? $stepStructure->excludedResources : [];
            $this->publishPropagatedResources($step, $propagatedResources, $excludedResources);

            // Store step to know it doesn't have to be deleted when we will clean the path
            $processedSteps[] = $step;

            // Process children of current step
            if (!empty($stepStructure->children)) {
                // Add propagated resources of current step for children
                $currentPropagatedResources = [];
                if (!empty($stepStructure->resources)) {
                    foreach ($stepStructure->resources as $resource) {
                        if (!empty($resource->propagateToChildren) && $resource->propagateToChildren) {
                            // Resource is propagated
                            $currentPropagatedResources[] = [
                                'id' => $resource->id,
                                'resourceId' => $resource->resourceId,
                                'lvl' => $level,
                            ];
                        }
                    }
                }

                $childrenLevel = $level + 1;

                $propagatedResourcesTemp = array_merge($propagatedResources, $currentPropagatedResources);
                $childrenSteps = $this->publishSteps($childrenLevel, $step, $stepStructure->children, $propagatedResourcesTemp);

                // Store children steps
                $processedSteps = array_merge($processedSteps, $childrenSteps);
            }

            ++$currentOrder;
        }

        return $processedSteps;
    }

    /**
     * Manage resource inheritance.
     *
     * @param \Innova\PathBundle\Entity\Step $step
     * @param array                          $propagatedResources
     * @param array                          $excludedResources
     *
     * @return \Innova\PathBundle\Manager\PublishingManager
     */
    protected function publishPropagatedResources(Step $step, array $propagatedResources = [], array $excludedResources = [])
    {
        $inheritedResources = [];
        $currentInherited = $step->getInheritedResources();

        if (!empty($propagatedResources)) {
            foreach ($propagatedResources as $resource) {
                if (!in_array($resource['id'], $excludedResources)) {
                    // Resource is not excluded => link it to step

                    // Retrieve resource node
                    $resourceNode = $this->om->getRepository('ClarolineCoreBundle:Resource\ResourceNode')->findOneById($resource['resourceId']);
                    if ($resourceNode) {
                        if (!$inherited = $step->hasInheritedResource($resourceNode->getId())) {
                            // Inherited resource doesn't exist => Create inherited resource
                            $inherited = new InheritedResource();
                        }

                        // Update inherited resource properties
                        $inherited->setResource($resourceNode);
                        $inherited->setLvl($resource['lvl']);

                        // Add inherited resource to Step
                        $step->addInheritedResource($inherited);

                        $this->om->persist($inherited);

                        // Store resource ID to clean step
                        $inheritedResources[] = $resourceNode->getId();
                    }
                }
            }
        }

        // Clean inherited resources which no long exists
        foreach ($currentInherited as $inherited) {
            $resourceId = $inherited->getResource()->getId();
            if (!in_array($resourceId, $inheritedResources)) {
                $step->removeInheritedResource($inherited);
                $this->om->remove($inherited);
            }
        }

        return $this;
    }

    /**
     * Clean steps which no longer exist in the current path.
     *
     * @param array $neededSteps
     * @param array $existingSteps
     *
     * @return \Innova\PathBundle\Manager\PublishingManager
     */
    protected function cleanSteps(array $neededSteps = [], array $existingSteps = [])
    {
        $toRemove = array_filter($existingSteps, function (Step $current) use ($neededSteps) {
            $removeStep = true;
            foreach ($neededSteps as $step) {
                if ($current->getId() === $step->getId()) {
                    $removeStep = false;
                    break;
                }
            }

            return $removeStep;
        });

        foreach ($toRemove as $stepToRemove) {
            $this->path->removeStep($stepToRemove);
            $this->om->remove($stepToRemove);
        }

        return $this;
    }

    /**
     * Check that all Activities and Resources as at least same rights than the Path.
     *
     * @return \Innova\PathBundle\Manager\PublishingManager
     */
    protected function manageRights()
    {
        // Grab Resources and Activities
        $nodes = $this->retrieveAllNodes($this->path->getSteps()->toArray());

        if (!empty($nodes)) {
            $pathRights = $this->path->getResourceNode()->getRights();

            foreach ($nodes as $node) {
                foreach ($pathRights as $right) {
                    if ($right->getMask() & 1) {
                        $this->rightsManager->editPerms($right->getMask(), $right->getRole(), $node, true);
                    }
                }
            }
        }

        return $this;
    }

    /**
     * Retrieve all ResourceNodes of a Path.
     *
     * @param array $steps
     *
     * @return array
     */
    protected function retrieveAllNodes(array $steps)
    {
        $nodes = [];

        foreach ($steps as $step) {
            $activity = $step->getActivity();
            if (!empty($activity)) {
                // Get Activity Node
                $nodes[] = $activity->getResourceNode();

                // Get Activity primary Resource Node)
                $primaryResource = $activity->getPrimaryResource();
                if (!empty($primaryResource)) {
                    $nodes[] = $primaryResource;
                }

                // Get Activity secondary Resources Nodes
                $parameters = $activity->getParameters();
                if (!empty($parameters)) {
                    $secondaryResources = $parameters->getSecondaryResources();
                    if (!empty($secondaryResources)) {
                        $nodes = array_merge($nodes, $secondaryResources->toArray());
                    }
                }
            }

            // Get Inherited Resources Nodes
            $inheritedResources = $step->getInheritedResources();
            if (!empty($inheritedResources)) {
                foreach ($inheritedResources as $inherited) {
                    $nodes[] = $inherited->getResource();
                }
            }

            $children = $step->getChildren();
            if (!empty($children)) {
                $childrenNodes = $this->retrieveAllNodes($children->toArray());
                $nodes = array_merge($nodes, $childrenNodes);
            }
        }

        return $nodes;
    }
}
