<?php

namespace Proxies\__CG__\HeVinci\CompetencyBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ObjectiveCompetency extends \HeVinci\CompetencyBundle\Entity\ObjectiveCompetency implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'id', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'objective', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'competency', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'level', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'framework'];
        }

        return ['__isInitialized__', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'id', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'objective', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'competency', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'level', '' . "\0" . 'HeVinci\\CompetencyBundle\\Entity\\ObjectiveCompetency' . "\0" . 'framework'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ObjectiveCompetency $proxy) {
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
    public function setObjective(\HeVinci\CompetencyBundle\Entity\Objective $objective)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjective', [$objective]);

        return parent::setObjective($objective);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjective()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjective', []);

        return parent::getObjective();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompetency(\HeVinci\CompetencyBundle\Entity\Competency $competency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompetency', [$competency]);

        return parent::setCompetency($competency);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompetency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompetency', []);

        return parent::getCompetency();
    }

    /**
     * {@inheritDoc}
     */
    public function setLevel(\HeVinci\CompetencyBundle\Entity\Level $level)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLevel', [$level]);

        return parent::setLevel($level);
    }

    /**
     * {@inheritDoc}
     */
    public function getLevel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', []);

        return parent::getLevel();
    }

    /**
     * {@inheritDoc}
     */
    public function setFramework(\HeVinci\CompetencyBundle\Entity\Competency $framework)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFramework', [$framework]);

        return parent::setFramework($framework);
    }

    /**
     * {@inheritDoc}
     */
    public function getFramework()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFramework', []);

        return parent::getFramework();
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