<?php

namespace Proxies\__CG__\Claroline\CoreBundle\Entity\Tool;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tool extends \Claroline\CoreBundle\Entity\Tool\Tool implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'displayName', 'class', 'isWorkspaceRequired', 'isDesktopRequired', 'isDisplayableInWorkspace', 'isDisplayableInDesktop', 'isExportable', 'isConfigurableInWorkspace', 'isConfigurableInDesktop', 'isLockedForAdmin', 'isAnonymousExcluded', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Tool\\Tool' . "\0" . 'isVisible', 'plugin', 'orderedTools', 'maskDecoders', 'pwsToolConfig'];
        }

        return ['__isInitialized__', 'id', 'name', 'displayName', 'class', 'isWorkspaceRequired', 'isDesktopRequired', 'isDisplayableInWorkspace', 'isDisplayableInDesktop', 'isExportable', 'isConfigurableInWorkspace', 'isConfigurableInDesktop', 'isLockedForAdmin', 'isAnonymousExcluded', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Tool\\Tool' . "\0" . 'isVisible', 'plugin', 'orderedTools', 'maskDecoders', 'pwsToolConfig'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tool $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
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
    public function setDisplayName($displayName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayName', [$displayName]);

        return parent::setDisplayName($displayName);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayName', []);

        return parent::getDisplayName();
    }

    /**
     * {@inheritDoc}
     */
    public function setClass($class)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClass', [$class]);

        return parent::setClass($class);
    }

    /**
     * {@inheritDoc}
     */
    public function getClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClass', []);

        return parent::getClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsWorkspaceRequired($bool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsWorkspaceRequired', [$bool]);

        return parent::setIsWorkspaceRequired($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function isWorkspaceRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isWorkspaceRequired', []);

        return parent::isWorkspaceRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDesktopRequired($bool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDesktopRequired', [$bool]);

        return parent::setIsDesktopRequired($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function isDesktopRequired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDesktopRequired', []);

        return parent::isDesktopRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($bool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$bool]);

        return parent::setVisible($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisible', []);

        return parent::isVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlugin(\Claroline\CoreBundle\Entity\Plugin $plugin = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlugin', [$plugin]);

        return parent::setPlugin($plugin);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlugin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlugin', []);

        return parent::getPlugin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayableInWorkspace($bool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayableInWorkspace', [$bool]);

        return parent::setDisplayableInWorkspace($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function isDisplayableInWorkspace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDisplayableInWorkspace', []);

        return parent::isDisplayableInWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayableInDesktop($bool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayableInDesktop', [$bool]);

        return parent::setDisplayableInDesktop($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function isDisplayableInDesktop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDisplayableInDesktop', []);

        return parent::isDisplayableInDesktop();
    }

    /**
     * {@inheritDoc}
     */
    public function setExportable($isExportable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExportable', [$isExportable]);

        return parent::setExportable($isExportable);
    }

    /**
     * {@inheritDoc}
     */
    public function isExportable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isExportable', []);

        return parent::isExportable();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderedTools()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderedTools', []);

        return parent::getOrderedTools();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsConfigurableInWorkspace($bool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsConfigurableInWorkspace', [$bool]);

        return parent::setIsConfigurableInWorkspace($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function isConfigurableInWorkspace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isConfigurableInWorkspace', []);

        return parent::isConfigurableInWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsConfigurableInDesktop($bool)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsConfigurableInDesktop', [$bool]);

        return parent::setIsConfigurableInDesktop($bool);
    }

    /**
     * {@inheritDoc}
     */
    public function isConfigurableInDesktop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isConfigurableInDesktop', []);

        return parent::isConfigurableInDesktop();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsLockedForAdmin($isLockedForAdmin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsLockedForAdmin', [$isLockedForAdmin]);

        return parent::setIsLockedForAdmin($isLockedForAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function isLockedForAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLockedForAdmin', []);

        return parent::isLockedForAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAnonymousExcluded($isAnonymousExcluded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAnonymousExcluded', [$isAnonymousExcluded]);

        return parent::setIsAnonymousExcluded($isAnonymousExcluded);
    }

    /**
     * {@inheritDoc}
     */
    public function isAnonymousExcluded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAnonymousExcluded', []);

        return parent::isAnonymousExcluded();
    }

    /**
     * {@inheritDoc}
     */
    public function addMaskDecoder(\Claroline\CoreBundle\Entity\Tool\ToolMaskDecoder $maskDecoder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMaskDecoder', [$maskDecoder]);

        return parent::addMaskDecoder($maskDecoder);
    }

    /**
     * {@inheritDoc}
     */
    public function getMaskDecoders()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaskDecoders', []);

        return parent::getMaskDecoders();
    }

    /**
     * {@inheritDoc}
     */
    public function addPwsToolConfig(\Claroline\CoreBundle\Entity\Tool\PwsToolConfig $tr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPwsToolConfig', [$tr]);

        return parent::addPwsToolConfig($tr);
    }

    /**
     * {@inheritDoc}
     */
    public function getPwsToolConfig()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwsToolConfig', []);

        return parent::getPwsToolConfig();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
