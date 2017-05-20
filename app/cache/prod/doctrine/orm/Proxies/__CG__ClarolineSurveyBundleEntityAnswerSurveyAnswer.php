<?php

namespace Proxies\__CG__\Claroline\SurveyBundle\Entity\Answer;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SurveyAnswer extends \Claroline\SurveyBundle\Entity\Answer\SurveyAnswer implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'survey', 'user', 'answerDate', 'nbAnswers', 'questionsAnswers'];
        }

        return ['__isInitialized__', 'id', 'survey', 'user', 'answerDate', 'nbAnswers', 'questionsAnswers'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SurveyAnswer $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
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
    public function getSurvey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurvey', []);

        return parent::getSurvey();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurvey(\Claroline\SurveyBundle\Entity\Survey $survey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurvey', [$survey]);

        return parent::setSurvey($survey);
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
    public function getAnswerDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswerDate', []);

        return parent::getAnswerDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswerDate($answerDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswerDate', [$answerDate]);

        return parent::setAnswerDate($answerDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbAnswers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbAnswers', []);

        return parent::getNbAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbAnswers($nbAnswers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbAnswers', [$nbAnswers]);

        return parent::setNbAnswers($nbAnswers);
    }

    /**
     * {@inheritDoc}
     */
    public function incrementNbAnswers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementNbAnswers', []);

        return parent::incrementNbAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestionsAnswers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestionsAnswers', []);

        return parent::getQuestionsAnswers();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestionsAnswers(\Doctrine\Common\Collections\ArrayCollection $questionsAnswers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestionsAnswers', [$questionsAnswers]);

        return parent::setQuestionsAnswers($questionsAnswers);
    }

}