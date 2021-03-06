<?php

namespace Proxies\__CG__\Claroline\ScormBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Scorm12Sco extends \Claroline\ScormBundle\Entity\Scorm12Sco implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'scormResource', 'scoParent', 'scoChildren', 'entryUrl', 'identifier', 'title', 'visible', 'parameters', 'prerequisites', 'maxTimeAllowed', 'timeLimitAction', 'launchData', 'masteryScore', 'isBlock'];
        }

        return ['__isInitialized__', 'id', 'scormResource', 'scoParent', 'scoChildren', 'entryUrl', 'identifier', 'title', 'visible', 'parameters', 'prerequisites', 'maxTimeAllowed', 'timeLimitAction', 'launchData', 'masteryScore', 'isBlock'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Scorm12Sco $proxy) {
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
    public function getScormResource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScormResource', []);

        return parent::getScormResource();
    }

    /**
     * {@inheritDoc}
     */
    public function getScoParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoParent', []);

        return parent::getScoParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getScoChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoChildren', []);

        return parent::getScoChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
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
    public function getParameters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParameters', []);

        return parent::getParameters();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrerequisites()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrerequisites', []);

        return parent::getPrerequisites();
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxTimeAllowed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxTimeAllowed', []);

        return parent::getMaxTimeAllowed();
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeLimitAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeLimitAction', []);

        return parent::getTimeLimitAction();
    }

    /**
     * {@inheritDoc}
     */
    public function getLaunchData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLaunchData', []);

        return parent::getLaunchData();
    }

    /**
     * {@inheritDoc}
     */
    public function getMasteryScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMasteryScore', []);

        return parent::getMasteryScore();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntryUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntryUrl', []);

        return parent::getEntryUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsBlock()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsBlock', []);

        return parent::getIsBlock();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setScormResource($scormResource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScormResource', [$scormResource]);

        return parent::setScormResource($scormResource);
    }

    /**
     * {@inheritDoc}
     */
    public function setScoParent($scoParent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScoParent', [$scoParent]);

        return parent::setScoParent($scoParent);
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function setParameters($parameters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParameters', [$parameters]);

        return parent::setParameters($parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrerequisites($prerequisites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrerequisites', [$prerequisites]);

        return parent::setPrerequisites($prerequisites);
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxTimeAllowed($maxTimeAllowed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxTimeAllowed', [$maxTimeAllowed]);

        return parent::setMaxTimeAllowed($maxTimeAllowed);
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeLimitAction($timeLimitAction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeLimitAction', [$timeLimitAction]);

        return parent::setTimeLimitAction($timeLimitAction);
    }

    /**
     * {@inheritDoc}
     */
    public function setLaunchData($launchData)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLaunchData', [$launchData]);

        return parent::setLaunchData($launchData);
    }

    /**
     * {@inheritDoc}
     */
    public function setMasteryScore($masteryScore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMasteryScore', [$masteryScore]);

        return parent::setMasteryScore($masteryScore);
    }

    /**
     * {@inheritDoc}
     */
    public function setEntryUrl($entryUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntryUrl', [$entryUrl]);

        return parent::setEntryUrl($entryUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsBlock($isBlock)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsBlock', [$isBlock]);

        return parent::setIsBlock($isBlock);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentifier($identifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifier', [$identifier]);

        return parent::setIdentifier($identifier);
    }

}
