<?php

namespace Proxies\__CG__\Claroline\ScormBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Scorm12Resource extends \Claroline\ScormBundle\Entity\Scorm12Resource implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'hashName', 'scos', 'hideTopBar', 'exitMode', 'id', 'resourceNode', 'name', 'mimeType'];
        }

        return ['__isInitialized__', 'hashName', 'scos', 'hideTopBar', 'exitMode', 'id', 'resourceNode', 'name', 'mimeType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Scorm12Resource $proxy) {
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
    public function getHashName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHashName', []);

        return parent::getHashName();
    }

    /**
     * {@inheritDoc}
     */
    public function setHashName($hashName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHashName', [$hashName]);

        return parent::setHashName($hashName);
    }

    /**
     * {@inheritDoc}
     */
    public function getScos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScos', []);

        return parent::getScos();
    }

    /**
     * {@inheritDoc}
     */
    public function getHideTopBar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHideTopBar', []);

        return parent::getHideTopBar();
    }

    /**
     * {@inheritDoc}
     */
    public function setHideTopBar($hideTopBar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHideTopBar', [$hideTopBar]);

        return parent::setHideTopBar($hideTopBar);
    }

    /**
     * {@inheritDoc}
     */
    public function getExitMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExitMode', []);

        return parent::getExitMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setExitMode($exitMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExitMode', [$exitMode]);

        return parent::setExitMode($exitMode);
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
