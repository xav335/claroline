<?php

namespace Proxies\__CG__\Claroline\CursusBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SessionEvent extends \Claroline\CursusBundle\Entity\SessionEvent implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'session', 'startDate', 'endDate', 'description', 'location', 'locationExtra', 'comments', 'locationResource', 'reservation', 'tutors', 'sessionEventUsers', 'maxUsers', 'registrationType'];
        }

        return ['__isInitialized__', 'id', 'name', 'session', 'startDate', 'endDate', 'description', 'location', 'locationExtra', 'comments', 'locationResource', 'reservation', 'tutors', 'sessionEventUsers', 'maxUsers', 'registrationType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SessionEvent $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
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
    public function getSession()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSession', []);

        return parent::getSession();
    }

    /**
     * {@inheritDoc}
     */
    public function setSession(\Claroline\CursusBundle\Entity\CourseSession $session)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSession', [$session]);

        return parent::setSession($session);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', []);

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($startDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', [$startDate]);

        return parent::setStartDate($startDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDate', []);

        return parent::getEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndDate($endDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndDate', [$endDate]);

        return parent::setEndDate($endDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation(\Claroline\CoreBundle\Entity\Organization\Location $location = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', [$location]);

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationExtra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationExtra', []);

        return parent::getLocationExtra();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocationExtra($locationExtra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocationExtra', [$locationExtra]);

        return parent::setLocationExtra($locationExtra);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', []);

        return parent::getComments();
    }

    /**
     * {@inheritDoc}
     */
    public function getLocationResource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocationResource', []);

        return parent::getLocationResource();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocationResource(\FormaLibre\ReservationBundle\Entity\Resource $locationResource = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocationResource', [$locationResource]);

        return parent::setLocationResource($locationResource);
    }

    /**
     * {@inheritDoc}
     */
    public function getReservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReservation', []);

        return parent::getReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setReservation(\FormaLibre\ReservationBundle\Entity\Reservation $reservation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReservation', [$reservation]);

        return parent::setReservation($reservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getTutors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTutors', []);

        return parent::getTutors();
    }

    /**
     * {@inheritDoc}
     */
    public function addTutor(\Claroline\CoreBundle\Entity\User $tutor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTutor', [$tutor]);

        return parent::addTutor($tutor);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTutor(\Claroline\CoreBundle\Entity\User $tutor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTutor', [$tutor]);

        return parent::removeTutor($tutor);
    }

    /**
     * {@inheritDoc}
     */
    public function emptyTutors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'emptyTutors', []);

        return parent::emptyTutors();
    }

    /**
     * {@inheritDoc}
     */
    public function getSessionEventUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSessionEventUsers', []);

        return parent::getSessionEventUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxUsers', []);

        return parent::getMaxUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxUsers($maxUsers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxUsers', [$maxUsers]);

        return parent::setMaxUsers($maxUsers);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistrationType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistrationType', []);

        return parent::getRegistrationType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistrationType($registrationType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistrationType', [$registrationType]);

        return parent::setRegistrationType($registrationType);
    }

}
