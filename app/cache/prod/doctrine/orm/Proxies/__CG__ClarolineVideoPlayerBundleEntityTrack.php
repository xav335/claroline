<?php

namespace Proxies\__CG__\Claroline\VideoPlayerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Track extends \Claroline\VideoPlayerBundle\Entity\Track implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'video', 'trackFile', 'lang', 'label', 'kind', 'isDefault'];
        }

        return ['__isInitialized__', 'id', 'video', 'trackFile', 'lang', 'label', 'kind', 'isDefault'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Track $proxy) {
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
    public function setVideo(\Claroline\CoreBundle\Entity\Resource\File $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$file]);

        return parent::setVideo($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLang($lang)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLang', [$lang]);

        return parent::setLang($lang);
    }

    /**
     * {@inheritDoc}
     */
    public function getLang()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLang', []);

        return parent::getLang();
    }

    /**
     * {@inheritDoc}
     */
    public function setKind($kind)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKind', [$kind]);

        return parent::setKind($kind);
    }

    /**
     * {@inheritDoc}
     */
    public function getKind()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKind', []);

        return parent::getKind();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefault($isDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefault', [$isDefault]);

        return parent::setIsDefault($isDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function isDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDefault', []);

        return parent::isDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackFile(\Claroline\CoreBundle\Entity\Resource\File $trackFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrackFile', [$trackFile]);

        return parent::setTrackFile($trackFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrackFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrackFile', []);

        return parent::getTrackFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
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

}
