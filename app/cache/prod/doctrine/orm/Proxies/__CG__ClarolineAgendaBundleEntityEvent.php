<?php

namespace Proxies\__CG__\Claroline\AgendaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \Claroline\AgendaBundle\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'title', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'start', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'end', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'workspace', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'user', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'allDay', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'isTask', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'isTaskDone', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'priority', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'eventInvitations', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'isEditable'];
        }

        return ['__isInitialized__', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'title', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'start', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'end', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'description', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'workspace', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'user', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'allDay', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'isTask', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'isTaskDone', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'priority', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'eventInvitations', '' . "\0" . 'Claroline\\AgendaBundle\\Entity\\Event' . "\0" . 'isEditable'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
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
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
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
    public function getStart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStart', []);

        return parent::getStart();
    }

    /**
     * {@inheritDoc}
     */
    public function getStartInTimestamp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartInTimestamp', []);

        return parent::getStartInTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function getStartInDateTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartInDateTime', []);

        return parent::getStartInDateTime();
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
    public function getEnd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnd', []);

        return parent::getEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function getEndInTimestamp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndInTimestamp', []);

        return parent::getEndInTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function getEndInDateTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndInDateTime', []);

        return parent::getEndInDateTime();
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
    public function getWorkspace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkspace', []);

        return parent::getWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkspace($workspace = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkspace', [$workspace]);

        return parent::setWorkspace($workspace);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Claroline\CoreBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function isAllDay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAllDay', []);

        return parent::isAllDay();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAllDay($isAllDay)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAllDay', [$isAllDay]);

        return parent::setIsAllDay($isAllDay);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', []);

        return parent::getPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriority($priority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriority', [$priority]);

        return parent::setPriority($priority);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsTask($isTask)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsTask', [$isTask]);

        return parent::setIsTask($isTask);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsTask', []);

        return parent::getIsTask();
    }

    /**
     * {@inheritDoc}
     */
    public function isTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTask', []);

        return parent::isTask();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsTaskDone($isTaskDone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsTaskDone', [$isTaskDone]);

        return parent::setIsTaskDone($isTaskDone);
    }

    /**
     * {@inheritDoc}
     */
    public function isTaskDone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTaskDone', []);

        return parent::isTaskDone();
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
    public function isEditable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEditable', []);

        return parent::isEditable();
    }

    /**
     * {@inheritDoc}
     */
    public function setAllDay($allDay)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAllDay', [$allDay]);

        return parent::setAllDay($allDay);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllDay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllDay', []);

        return parent::getAllDay();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsTaskDone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsTaskDone', []);

        return parent::getIsTaskDone();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsEditable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsEditable', []);

        return parent::getIsEditable();
    }

    /**
     * {@inheritDoc}
     */
    public function addEventInvitation(\Claroline\AgendaBundle\Entity\EventInvitation $eventInvitation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEventInvitation', [$eventInvitation]);

        return parent::addEventInvitation($eventInvitation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEventInvitation(\Claroline\AgendaBundle\Entity\EventInvitation $eventInvitation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEventInvitation', [$eventInvitation]);

        return parent::removeEventInvitation($eventInvitation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventInvitations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventInvitations', []);

        return parent::getEventInvitations();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(\Claroline\CoreBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', [$user]);

        return parent::jsonSerialize($user);
    }

}