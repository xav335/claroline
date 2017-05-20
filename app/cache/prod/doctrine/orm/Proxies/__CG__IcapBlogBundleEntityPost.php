<?php

namespace Proxies\__CG__\Icap\BlogBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Post extends \Icap\BlogBundle\Entity\Post implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'title', 'content', 'slug', 'creationDate', 'modificationDate', 'publicationDate', 'viewCounter', 'comments', 'author', 'blog', 'tags', 'userPicker', 'statusList', 'status'];
        }

        return ['__isInitialized__', 'id', 'title', 'content', 'slug', 'creationDate', 'modificationDate', 'publicationDate', 'viewCounter', 'comments', 'author', 'blog', 'tags', 'userPicker', 'statusList', 'status'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Post $proxy) {
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
    public function getShortContent($url, $text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortContent', [$url, $text]);

        return parent::getShortContent($url, $text);
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
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
    public function getCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', []);

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setModificationDate(\DateTime $modificationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModificationDate', [$modificationDate]);

        return parent::setModificationDate($modificationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getModificationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModificationDate', []);

        return parent::getModificationDate();
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
    public function getPublicationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicationDate', []);

        return parent::getPublicationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addComment(\Icap\BlogBundle\Entity\Comment $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComment', [$comments]);

        return parent::addComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComment(\Icap\BlogBundle\Entity\Comment $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComment', [$comments]);

        return parent::removeComment($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function setComments(\Doctrine\Common\Collections\ArrayCollection $comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComments', [$comments]);

        return parent::setComments($comments);
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
    public function setAuthor(\Claroline\CoreBundle\Entity\User $author = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlog(\Icap\BlogBundle\Entity\Blog $blog = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlog', [$blog]);

        return parent::setBlog($blog);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlog', []);

        return parent::getBlog();
    }

    /**
     * {@inheritDoc}
     */
    public function setTags($tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTags', [$tags]);

        return parent::setTags($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
    }

    /**
     * {@inheritDoc}
     */
    public function addTag(\Icap\BlogBundle\Entity\Tag $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTag', [$tag]);

        return parent::addTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTag(\Icap\BlogBundle\Entity\Tag $tag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTag', [$tag]);

        return parent::removeTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function countComments($countUnpublished = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countComments', [$countUnpublished]);

        return parent::countComments($countUnpublished);
    }

    /**
     * {@inheritDoc}
     */
    public function countUnpublishedComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countUnpublishedComments', []);

        return parent::countUnpublishedComments();
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', []);

        return parent::isPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setViewCounter($viewCounter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViewCounter', [$viewCounter]);

        return parent::setViewCounter($viewCounter);
    }

    /**
     * {@inheritDoc}
     */
    public function getViewCounter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViewCounter', []);

        return parent::getViewCounter();
    }

    /**
     * {@inheritDoc}
     */
    public function increaseViewCounter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseViewCounter', []);

        return parent::increaseViewCounter();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserPicker(\Icap\NotificationBundle\Entity\UserPickerContent $userPicker)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserPicker', [$userPicker]);

        return parent::setUserPicker($userPicker);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserPicker()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserPicker', []);

        return parent::getUserPicker();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbstract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbstract', []);

        return parent::getAbstract();
    }

    /**
     * {@inheritDoc}
     */
    public function isAbstract()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAbstract', []);

        return parent::isAbstract();
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
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function publish()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'publish', []);

        return parent::publish();
    }

    /**
     * {@inheritDoc}
     */
    public function unpublish()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unpublish', []);

        return parent::unpublish();
    }

}