<?php

namespace Proxies\__CG__\Claroline\CoreBundle\Entity\Home;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Content2Region extends \Claroline\CoreBundle\Entity\Home\Content2Region implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'id', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'content', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'region', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'size', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'next', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'back'];
        }

        return ['__isInitialized__', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'id', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'content', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'region', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'size', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'next', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Home\\Content2Region' . "\0" . 'back'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Content2Region $proxy) {
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
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent(\Claroline\CoreBundle\Entity\Content $content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion(\Claroline\CoreBundle\Entity\Home\Region $region)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNext(\Claroline\CoreBundle\Entity\Home\Content2Region $next = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNext', [$next]);

        return parent::setNext($next);
    }

    /**
     * {@inheritDoc}
     */
    public function getNext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNext', []);

        return parent::getNext();
    }

    /**
     * {@inheritDoc}
     */
    public function setBack(\Claroline\CoreBundle\Entity\Home\Content2Region $back = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBack', [$back]);

        return parent::setBack($back);
    }

    /**
     * {@inheritDoc}
     */
    public function getBack()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBack', []);

        return parent::getBack();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', []);

        return parent::detach();
    }

}