<?php

namespace Proxies\__CG__\Innova\PathBundle\Entity\Path;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Path extends \Innova\PathBundle\Entity\Path\Path implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'structure', 'breadcrumbs', 'summaryDisplayed', 'steps', 'modified', 'description', 'completeBlockingCondition', 'manualProgressionAllowed', 'id', 'resourceNode', 'mimeType'];
        }

        return ['__isInitialized__', 'name', 'structure', 'breadcrumbs', 'summaryDisplayed', 'steps', 'modified', 'description', 'completeBlockingCondition', 'manualProgressionAllowed', 'id', 'resourceNode', 'mimeType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Path $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setStructure($structure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStructure', [$structure]);

        return parent::setStructure($structure);
    }

    /**
     * {@inheritDoc}
     */
    public function getStructure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStructure', []);

        return parent::getStructure();
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', []);

        return parent::isPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublished($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', [$published]);

        return parent::setPublished($published);
    }

    /**
     * {@inheritDoc}
     */
    public function setModified($modified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModified', [$modified]);

        return parent::setModified($modified);
    }

    /**
     * {@inheritDoc}
     */
    public function isModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isModified', []);

        return parent::isModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setSummaryDisplayed($displayed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSummaryDisplayed', [$displayed]);

        return parent::setSummaryDisplayed($displayed);
    }

    /**
     * {@inheritDoc}
     */
    public function isSummaryDisplayed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSummaryDisplayed', []);

        return parent::isSummaryDisplayed();
    }

    /**
     * {@inheritDoc}
     */
    public function addStep(\Innova\PathBundle\Entity\Step $step)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStep', [$step]);

        return parent::addStep($step);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStep(\Innova\PathBundle\Entity\Step $step)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStep', [$step]);

        return parent::removeStep($step);
    }

    /**
     * {@inheritDoc}
     */
    public function getSteps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSteps', []);

        return parent::getSteps();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setBreadcrumbs($breadcrumbs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBreadcrumbs', [$breadcrumbs]);

        return parent::setBreadcrumbs($breadcrumbs);
    }

    /**
     * {@inheritDoc}
     */
    public function hasBreadcrumbs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasBreadcrumbs', []);

        return parent::hasBreadcrumbs();
    }

    /**
     * {@inheritDoc}
     */
    public function isCompleteBlockingCondition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCompleteBlockingCondition', []);

        return parent::isCompleteBlockingCondition();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompleteBlockingCondition($completeBlockingCondition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompleteBlockingCondition', [$completeBlockingCondition]);

        return parent::setCompleteBlockingCondition($completeBlockingCondition);
    }

    /**
     * {@inheritDoc}
     */
    public function isManualProgressionAllowed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManualProgressionAllowed', []);

        return parent::isManualProgressionAllowed();
    }

    /**
     * {@inheritDoc}
     */
    public function setManualProgressionAllowed($manualProgressionAllowed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManualProgressionAllowed', [$manualProgressionAllowed]);

        return parent::setManualProgressionAllowed($manualProgressionAllowed);
    }

    /**
     * {@inheritDoc}
     */
    public function getRootStep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRootStep', []);

        return parent::getRootStep();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeStructure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initializeStructure', []);

        return parent::initializeStructure();
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkspace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkspace', []);

        return parent::getWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceNode(\Claroline\CoreBundle\Entity\Resource\ResourceNode $resourceNode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceNode', [$resourceNode]);

        return parent::setResourceNode($resourceNode);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceNode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceNode', []);

        return parent::getResourceNode();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeType', []);

        return parent::getMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMimeType($mimeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMimeType', [$mimeType]);

        return parent::setMimeType($mimeType);
    }

}