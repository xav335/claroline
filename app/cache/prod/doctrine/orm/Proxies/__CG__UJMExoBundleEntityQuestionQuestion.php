<?php

namespace Proxies\__CG__\UJM\ExoBundle\Entity\Question;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Question extends \UJM\ExoBundle\Entity\Question\Question implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'id', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'uuid', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'mimeType', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'title', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'content', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'feedback', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'dateCreate', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'dateModify', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'model', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'description', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'category', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'creator', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'hints', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'objects', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'resources', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'scoreRule', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'interaction'];
        }

        return ['__isInitialized__', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'id', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'uuid', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'mimeType', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'title', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'content', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'feedback', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'dateCreate', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'dateModify', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'model', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'description', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'category', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'creator', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'hints', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'objects', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'resources', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'scoreRule', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Question\\Question' . "\0" . 'interaction'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Question $proxy) {
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
    public function getMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMimeType', []);

        return parent::getMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMimeType($mimeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMimeType', [$mimeType]);

        return parent::setMimeType($mimeType);
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
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function getObjects()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjects', []);

        return parent::getObjects();
    }

    /**
     * {@inheritDoc}
     */
    public function addObject(\UJM\ExoBundle\Entity\Question\QuestionObject $object)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addObject', [$object]);

        return parent::addObject($object);
    }

    /**
     * {@inheritDoc}
     */
    public function removeObject(\UJM\ExoBundle\Entity\Question\QuestionObject $object)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeObject', [$object]);

        return parent::removeObject($object);
    }

    /**
     * {@inheritDoc}
     */
    public function getResources()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResources', []);

        return parent::getResources();
    }

    /**
     * {@inheritDoc}
     */
    public function addResource(\UJM\ExoBundle\Entity\Question\QuestionResource $resource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addResource', [$resource]);

        return parent::addResource($resource);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResource(\UJM\ExoBundle\Entity\Question\QuestionResource $resource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeResource', [$resource]);

        return parent::removeResource($resource);
    }

    /**
     * {@inheritDoc}
     */
    public function setFeedback($feedback)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeedback', [$feedback]);

        return parent::setFeedback($feedback);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedback()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedback', []);

        return parent::getFeedback();
    }

    /**
     * {@inheritDoc}
     */
    public function updateDateCreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDateCreate', []);

        return parent::updateDateCreate();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreate', []);

        return parent::getDateCreate();
    }

    /**
     * {@inheritDoc}
     */
    public function updateDateModify()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDateModify', []);

        return parent::updateDateModify();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModify()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModify', []);

        return parent::getDateModify();
    }

    /**
     * {@inheritDoc}
     */
    public function setModel($model)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModel', [$model]);

        return parent::setModel($model);
    }

    /**
     * {@inheritDoc}
     */
    public function isModel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isModel', []);

        return parent::isModel();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Claroline\CoreBundle\Entity\User $creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\UJM\ExoBundle\Entity\Question\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getHints()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHints', []);

        return parent::getHints();
    }

    /**
     * {@inheritDoc}
     */
    public function addHint(\UJM\ExoBundle\Entity\Question\Hint $hint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHint', [$hint]);

        return parent::addHint($hint);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHint(\UJM\ExoBundle\Entity\Question\Hint $hint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHint', [$hint]);

        return parent::removeHint($hint);
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
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getInteraction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInteraction', []);

        return parent::getInteraction();
    }

    /**
     * {@inheritDoc}
     */
    public function setInteraction(\UJM\ExoBundle\Entity\QuestionType\AbstractQuestion $interaction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInteraction', [$interaction]);

        return parent::setInteraction($interaction);
    }

    /**
     * {@inheritDoc}
     */
    public function getScoreRule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScoreRule', []);

        return parent::getScoreRule();
    }

    /**
     * {@inheritDoc}
     */
    public function setScoreRule($scoreRule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScoreRule', [$scoreRule]);

        return parent::setScoreRule($scoreRule);
    }

}
