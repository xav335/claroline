<?php

namespace Proxies\__CG__\UJM\ExoBundle\Entity\Attempt;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Paper extends \UJM\ExoBundle\Entity\Attempt\Paper implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'id', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'uuid', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'number', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'start', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'end', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'structure', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'decodedStructure', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'interrupted', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'score', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'anonymized', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'invalidated', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'user', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'exercise', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'answers'];
        }

        return ['__isInitialized__', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'id', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'uuid', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'number', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'start', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'end', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'structure', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'decodedStructure', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'interrupted', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'score', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'anonymized', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'invalidated', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'user', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'exercise', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Attempt\\Paper' . "\0" . 'answers'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Paper $proxy) {
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
    public function getUuid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUuid', []);

        return parent::getUuid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUuid($uuid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUuid', [$uuid]);

        return parent::setUuid($uuid);
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setStart(\DateTime $start)
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
    public function setStructure($structure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStructure', [$structure]);

        return parent::setStructure($structure);
    }

    /**
     * {@inheritDoc}
     */
    public function getStructure()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStructure', []);

        return parent::getStructure();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterrupted($interrupted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterrupted', [$interrupted]);

        return parent::setInterrupted($interrupted);
    }

    /**
     * {@inheritDoc}
     */
    public function isInterrupted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInterrupted', []);

        return parent::isInterrupted();
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
    public function setUser(\Claroline\CoreBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getExercise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExercise', []);

        return parent::getExercise();
    }

    /**
     * {@inheritDoc}
     */
    public function setExercise(\UJM\ExoBundle\Entity\Exercise $exercise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExercise', [$exercise]);

        return parent::setExercise($exercise);
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
    public function getScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', []);

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnonymized($anonymized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnonymized', [$anonymized]);

        return parent::setAnonymized($anonymized);
    }

    /**
     * {@inheritDoc}
     */
    public function isAnonymized()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAnonymized', []);

        return parent::isAnonymized();
    }

    /**
     * {@inheritDoc}
     */
    public function setInvalidated($invalidated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInvalidated', [$invalidated]);

        return parent::setInvalidated($invalidated);
    }

    /**
     * {@inheritDoc}
     */
    public function isInvalidated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInvalidated', []);

        return parent::isInvalidated();
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswers', []);

        return parent::getAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestion($questionUuid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestion', [$questionUuid]);

        return parent::getQuestion($questionUuid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswer($questionUuid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswer', [$questionUuid]);

        return parent::getAnswer($questionUuid);
    }

    /**
     * {@inheritDoc}
     */
    public function addAnswer(\UJM\ExoBundle\Entity\Attempt\Answer $answer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAnswer', [$answer]);

        return parent::addAnswer($answer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnswer(\UJM\ExoBundle\Entity\Attempt\Answer $answer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAnswer', [$answer]);

        return parent::removeAnswer($answer);
    }

}