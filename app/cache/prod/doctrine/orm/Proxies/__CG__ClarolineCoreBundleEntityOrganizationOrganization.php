<?php

namespace Proxies\__CG__\Claroline\CoreBundle\Entity\Organization;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Organization extends \Claroline\CoreBundle\Entity\Organization\Organization implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'position', 'name', 'email', 'locations', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'lft', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'lvl', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'rgt', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'root', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'parent', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'children', 'users', 'groups', 'administrators', 'timeSlots', 'years', 'default'];
        }

        return ['__isInitialized__', 'id', 'position', 'name', 'email', 'locations', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'lft', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'lvl', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'rgt', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'root', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'parent', '' . "\0" . 'Claroline\\CoreBundle\\Entity\\Organization\\Organization' . "\0" . 'children', 'users', 'groups', 'administrators', 'timeSlots', 'years', 'default'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Organization $proxy) {
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
    public function getDepartments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartments', []);

        return parent::getDepartments();
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
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocations($locations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocations', [$locations]);

        return parent::setLocations($locations);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocations', []);

        return parent::getLocations();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdministrators()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdministrators', []);

        return parent::getAdministrators();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdministrator(\Claroline\CoreBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdministrator', [$user]);

        return parent::addAdministrator($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdministrator(\Claroline\CoreBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdministrator', [$user]);

        return parent::removeAdministrator($user);
    }

    /**
     * {@inheritDoc}
     */
    public function setAdministrators(\Doctrine\Common\Collections\ArrayCollection $users)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdministrators', [$users]);

        return parent::setAdministrators($users);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeSlots()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeSlots', []);

        return parent::getTimeSlots();
    }

    /**
     * {@inheritDoc}
     */
    public function addTimeSlot(\Claroline\CoreBundle\Entity\Calendar\TimeSlot $timeSlot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTimeSlot', [$timeSlot]);

        return parent::addTimeSlot($timeSlot);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTimeSlot(\Claroline\CoreBundle\Entity\Calendar\TimeSlot $timeSlot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTimeSlot', [$timeSlot]);

        return parent::removeTimeSlot($timeSlot);
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeSlots(\Doctrine\Common\Collections\ArrayCollection $timeSlots)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeSlots', [$timeSlots]);

        return parent::setTimeSlots($timeSlots);
    }

    /**
     * {@inheritDoc}
     */
    public function getYears()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYears', []);

        return parent::getYears();
    }

    /**
     * {@inheritDoc}
     */
    public function addYear(\Claroline\CoreBundle\Entity\Calendar\Year $year)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addYear', [$year]);

        return parent::addYear($year);
    }

    /**
     * {@inheritDoc}
     */
    public function removeYear(\Claroline\CoreBundle\Entity\Calendar\Year $year)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeYear', [$year]);

        return parent::removeYear($year);
    }

    /**
     * {@inheritDoc}
     */
    public function setYears(\Doctrine\Common\Collections\ArrayCollection $years)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYears', [$years]);

        return parent::setYears($years);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefault($default)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefault', [$default]);

        return parent::setDefault($default);
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
    public function getDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefault', []);

        return parent::getDefault();
    }

}