<?php

namespace Proxies\__CG__\Claroline\CoreBundle\Entity\Facet;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PanelFacet extends \Claroline\CoreBundle\Entity\Facet\PanelFacet implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'facet', 'fieldsFacet', 'position', 'isDefaultCollapsed', 'isEditable', 'panelFacetsRole'];
        }

        return ['__isInitialized__', 'id', 'name', 'facet', 'fieldsFacet', 'position', 'isDefaultCollapsed', 'isEditable', 'panelFacetsRole'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PanelFacet $proxy) {
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
    public function setFacet($facet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacet', [$facet]);

        return parent::setFacet($facet);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacet', []);

        return parent::getFacet();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsFacet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsFacet', []);

        return parent::getFieldsFacet();
    }

    /**
     * {@inheritDoc}
     */
    public function addFieldFacet(\Claroline\CoreBundle\Entity\Facet\FieldFacet $fieldFacet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFieldFacet', [$fieldFacet]);

        return parent::addFieldFacet($fieldFacet);
    }

    /**
     * {@inheritDoc}
     */
    public function addPanelFacetRole(\Claroline\CoreBundle\Entity\Facet\PanelFacetRole $pfr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPanelFacetRole', [$pfr]);

        return parent::addPanelFacetRole($pfr);
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefaultCollapsed($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefaultCollapsed', [$boolean]);

        return parent::setIsDefaultCollapsed($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDefaultCollapsed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDefaultCollapsed', []);

        return parent::getIsDefaultCollapsed();
    }

    /**
     * {@inheritDoc}
     */
    public function isDefaultCollapsed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDefaultCollapsed', []);

        return parent::isDefaultCollapsed();
    }

    /**
     * {@inheritDoc}
     */
    public function isEditable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEditable', []);

        return parent::isEditable();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsEditable($isEditable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsEditable', [$isEditable]);

        return parent::setIsEditable($isEditable);
    }

    /**
     * {@inheritDoc}
     */
    public function isCollapsed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCollapsed', []);

        return parent::isCollapsed();
    }

    /**
     * {@inheritDoc}
     */
    public function getPanelFacetsRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPanelFacetsRole', []);

        return parent::getPanelFacetsRole();
    }

}
