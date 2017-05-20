<?php

namespace Proxies\__CG__\Claroline\ClacoFormBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Entry extends \Claroline\ClacoFormBundle\Entity\Entry implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'title', 'status', 'clacoForm', 'user', 'creationDate', 'editionDate', 'publicationDate', 'fieldValues', 'comments', 'categories', 'keywords'];
        }

        return ['__isInitialized__', 'id', 'title', 'status', 'clacoForm', 'user', 'creationDate', 'editionDate', 'publicationDate', 'fieldValues', 'comments', 'categories', 'keywords'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Entry $proxy) {
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
    public function getClacoForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClacoForm', []);

        return parent::getClacoForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setClacoForm(\Claroline\ClacoFormBundle\Entity\ClacoForm $clacoForm)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClacoForm', [$clacoForm]);

        return parent::setClacoForm($clacoForm);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', []);

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationDate(\DateTime $creationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', [$creationDate]);

        return parent::setCreationDate($creationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditionDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditionDate', []);

        return parent::getEditionDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditionDate(\DateTime $editionDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditionDate', [$editionDate]);

        return parent::setEditionDate($editionDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicationDate', []);

        return parent::getPublicationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicationDate(\DateTime $publicationDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicationDate', [$publicationDate]);

        return parent::setPublicationDate($publicationDate);
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
    public function getFieldValues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldValues', []);

        return parent::getFieldValues();
    }

    /**
     * {@inheritDoc}
     */
    public function addFieldValue(\Claroline\ClacoFormBundle\Entity\FieldValue $fieldValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFieldValue', [$fieldValue]);

        return parent::addFieldValue($fieldValue);
    }

    /**
     * {@inheritDoc}
     */
    public function removeValue(\Claroline\ClacoFormBundle\Entity\FieldValue $fieldValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeValue', [$fieldValue]);

        return parent::removeValue($fieldValue);
    }

    /**
     * {@inheritDoc}
     */
    public function emptyValues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'emptyValues', []);

        return parent::emptyValues();
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
    public function addComment(\Claroline\ClacoFormBundle\Entity\Comment $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comment]);

        return parent::addComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\Claroline\ClacoFormBundle\Entity\Comment $comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comment]);

        return parent::removeComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function emptyComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'emptyComments', []);

        return parent::emptyComments();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\Claroline\ClacoFormBundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\Claroline\ClacoFormBundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function emptyCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'emptyCategories', []);

        return parent::emptyCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', []);

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function addKeyword(\Claroline\ClacoFormBundle\Entity\Keyword $keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addKeyword', [$keyword]);

        return parent::addKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function removeKeyword(\Claroline\ClacoFormBundle\Entity\Keyword $keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeKeyword', [$keyword]);

        return parent::removeKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function emptyKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'emptyKeywords', []);

        return parent::emptyKeywords();
    }

}