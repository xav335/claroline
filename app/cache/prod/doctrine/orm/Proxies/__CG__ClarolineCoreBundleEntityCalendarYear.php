<?php

namespace Proxies\__CG__\Claroline\CoreBundle\Entity\Calendar;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Year extends \Claroline\CoreBundle\Entity\Calendar\Year implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'start', 'end', 'openHour', 'closeHour', 'organization', 'leaves', 'periods'];
        }

        return ['__isInitialized__', 'id', 'start', 'end', 'openHour', 'closeHour', 'organization', 'leaves', 'periods'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Year $proxy) {
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
    public function setStart($start)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStart', [$start]);

        return parent::setStart($start);
    }

    /**
     * {@inheritDoc}
     */
    public function getStart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStart', []);

        return parent::getStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnd($end)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnd', [$end]);

        return parent::setEnd($end);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnd', []);

        return parent::getEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setOpenHour($openHour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOpenHour', [$openHour]);

        return parent::setOpenHour($openHour);
    }

    /**
     * {@inheritDoc}
     */
    public function getOpenHour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOpenHour', []);

        return parent::getOpenHour();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloseHour($closeHour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloseHour', [$closeHour]);

        return parent::setCloseHour($closeHour);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloseHour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloseHour', []);

        return parent::getCloseHour();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization(\Claroline\CoreBundle\Entity\Organization\Organization $organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', [$organization]);

        return parent::setOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', []);

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function addLeave(\Claroline\CoreBundle\Entity\Calendar\Leave $leave)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLeave', [$leave]);

        return parent::addLeave($leave);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLeave(\Claroline\CoreBundle\Entity\Calendar\Leave $leave)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLeave', [$leave]);

        return parent::removeLeave($leave);
    }

    /**
     * {@inheritDoc}
     */
    public function setLeaves(\Doctrine\Common\Collections\ArrayCollection $leaves)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeaves', [$leaves]);

        return parent::setLeaves($leaves);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeaves()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeaves', []);

        return parent::getLeaves();
    }

    /**
     * {@inheritDoc}
     */
    public function addPeriod(\Claroline\CoreBundle\Entity\Calendar\Period $period)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPeriod', [$period]);

        return parent::addPeriod($period);
    }

    /**
     * {@inheritDoc}
     */
    public function removePeriod(\Claroline\CoreBundle\Entity\Calendar\Period $period)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePeriod', [$period]);

        return parent::removePeriod($period);
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriod(\Doctrine\Common\Collections\ArrayCollection $periods)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriod', [$periods]);

        return parent::setPeriod($periods);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriod', []);

        return parent::getPeriod();
    }

}
