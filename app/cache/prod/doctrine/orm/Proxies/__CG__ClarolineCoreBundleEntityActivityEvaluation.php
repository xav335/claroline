<?php

namespace Proxies\__CG__\Claroline\CoreBundle\Entity\Activity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Evaluation extends \Claroline\CoreBundle\Entity\Activity\Evaluation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'user', 'activityParameters', 'date', 'attemptsDuration', 'attemptsCount', 'id', 'type', 'status', 'duration', 'score', 'numScore', 'scoreMin', 'scoreMax', 'comment', 'details', 'log'];
        }

        return ['__isInitialized__', 'user', 'activityParameters', 'date', 'attemptsDuration', 'attemptsCount', 'id', 'type', 'status', 'duration', 'score', 'numScore', 'scoreMin', 'scoreMax', 'comment', 'details', 'log'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Evaluation $proxy) {
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
    public function getActivityParameters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivityParameters', []);

        return parent::getActivityParameters();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivityParameters($activityParameters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivityParameters', [$activityParameters]);

        return parent::setActivityParameters($activityParameters);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttemptsDuration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttemptsDuration', []);

        return parent::getAttemptsDuration();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttemptsDuration($attemptsDuration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttemptsDuration', [$attemptsDuration]);

        return parent::setAttemptsDuration($attemptsDuration);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttemptsCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttemptsCount', []);

        return parent::getAttemptsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttemptsCount($attemptsCount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttemptsCount', [$attemptsCount]);

        return parent::setAttemptsCount($attemptsCount);
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
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuration', []);

        return parent::getDuration();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuration($duration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuration', [$duration]);

        return parent::setDuration($duration);
    }

    /**
     * {@inheritDoc}
     */
    public function getScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', []);

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setScore($score)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScore', [$score]);

        return parent::setScore($score);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumScore', []);

        return parent::getNumScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumScore($numScore)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumScore', [$numScore]);

        return parent::setNumScore($numScore);
    }

    /**
     * {@inheritDoc}
     */
    public function getScoreMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoreMin', []);

        return parent::getScoreMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setScoreMin($scoreMin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScoreMin', [$scoreMin]);

        return parent::setScoreMin($scoreMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getScoreMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoreMax', []);

        return parent::getScoreMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setScoreMax($scoreMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScoreMax', [$scoreMax]);

        return parent::setScoreMax($scoreMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', []);

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setComment($comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComment', [$comment]);

        return parent::setComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetails', []);

        return parent::getDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setDetails($details)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDetails', [$details]);

        return parent::setDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function getLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLog', []);

        return parent::getLog();
    }

    /**
     * {@inheritDoc}
     */
    public function setLog(\Claroline\CoreBundle\Entity\Log\Log $log)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLog', [$log]);

        return parent::setLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function isTerminated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTerminated', []);

        return parent::isTerminated();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuccessful()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuccessful', []);

        return parent::isSuccessful();
    }

}