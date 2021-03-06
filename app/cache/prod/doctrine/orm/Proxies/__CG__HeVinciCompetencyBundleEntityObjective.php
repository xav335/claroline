<?php

namespace Proxies\__CG__\HeVinci\CompetencyBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Objective extends \HeVinci\CompetencyBundle\Entity\Objective implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'id', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'name', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'objectiveCompetencies', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'users', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'groups'];
        }

        return ['__isInitialized__', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'id', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'name', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'objectiveCompetencies', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'users', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\Objective' . "\0" . 'groups'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Objective $proxy) {
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
    public function getObjectiveCompetencies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjectiveCompetencies', []);

        return parent::getObjectiveCompetencies();
    }

    /**
     * {@inheritDoc}
     */
    public function addObjectiveCompetency(\HeVinci\CompetencyBundle\Entity\ObjectiveCompetency $link)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addObjectiveCompetency', [$link]);

        return parent::addObjectiveCompetency($link);
    }

    /**
     * {@inheritDoc}
     */
    public function hasUser(\Claroline\CoreBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasUser', [$user]);

        return parent::hasUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\Claroline\CoreBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\Claroline\CoreBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup(\Claroline\CoreBundle\Entity\Group $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$group]);

        return parent::hasGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\Claroline\CoreBundle\Entity\Group $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\Claroline\CoreBundle\Entity\Group $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

}
