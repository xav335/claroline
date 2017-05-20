<?php

namespace Proxies\__CG__\Icap\BlogBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BlogOptions extends \Icap\BlogBundle\Entity\BlogOptions implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'blog', 'authorizeComment', 'authorizeAnonymousComment', 'postPerPage', 'autoPublishPost', 'autoPublishComment', 'displayTitle', 'bannerActivate', 'displayPostViewCounter', 'bannerBackgroundColor', 'bannerHeight', 'bannerBackgroundImage', 'bannerBackgroundImagePosition', 'bannerBackgroundImageRepeat', 'file', 'oldFileName', 'tagCloud', 'listWidgetBlog', 'tagTopMode', 'maxTag'];
        }

        return ['__isInitialized__', 'id', 'blog', 'authorizeComment', 'authorizeAnonymousComment', 'postPerPage', 'autoPublishPost', 'autoPublishComment', 'displayTitle', 'bannerActivate', 'displayPostViewCounter', 'bannerBackgroundColor', 'bannerHeight', 'bannerBackgroundImage', 'bannerBackgroundImagePosition', 'bannerBackgroundImageRepeat', 'file', 'oldFileName', 'tagCloud', 'listWidgetBlog', 'tagTopMode', 'maxTag'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BlogOptions $proxy) {
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
    public function setBlog(\Icap\BlogBundle\Entity\Blog $blog)
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
    public function setAuthorizeAnonymousComment($authorizeAnonymousComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthorizeAnonymousComment', [$authorizeAnonymousComment]);

        return parent::setAuthorizeAnonymousComment($authorizeAnonymousComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorizeAnonymousComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorizeAnonymousComment', []);

        return parent::getAuthorizeAnonymousComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthorizeComment($authorizeComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthorizeComment', [$authorizeComment]);

        return parent::setAuthorizeComment($authorizeComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorizeComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorizeComment', []);

        return parent::getAuthorizeComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutoPublishComment($autoPublishComment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutoPublishComment', [$autoPublishComment]);

        return parent::setAutoPublishComment($autoPublishComment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoPublishComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutoPublishComment', []);

        return parent::getAutoPublishComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutoPublishPost($autoPublishPost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutoPublishPost', [$autoPublishPost]);

        return parent::setAutoPublishPost($autoPublishPost);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoPublishPost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutoPublishPost', []);

        return parent::getAutoPublishPost();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostPerPage($postPerPage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostPerPage', [$postPerPage]);

        return parent::setPostPerPage($postPerPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostPerPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostPerPage', []);

        return parent::getPostPerPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayTitle($displayTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayTitle', [$displayTitle]);

        return parent::setDisplayTitle($displayTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayTitle', []);

        return parent::getDisplayTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannerBackgroundColor($bannerBackgroundColor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannerBackgroundColor', [$bannerBackgroundColor]);

        return parent::setBannerBackgroundColor($bannerBackgroundColor);
    }

    /**
     * {@inheritDoc}
     */
    public function getBannerBackgroundColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBannerBackgroundColor', []);

        return parent::getBannerBackgroundColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannerHeight($bannerHeight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannerHeight', [$bannerHeight]);

        return parent::setBannerHeight($bannerHeight);
    }

    /**
     * {@inheritDoc}
     */
    public function getBannerHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBannerHeight', []);

        return parent::getBannerHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannerBackgroundImage($bannerBackgroundImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannerBackgroundImage', [$bannerBackgroundImage]);

        return parent::setBannerBackgroundImage($bannerBackgroundImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getBannerBackgroundImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBannerBackgroundImage', []);

        return parent::getBannerBackgroundImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannerBackgroundImagePosition($bannerBackgroundImagePosition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannerBackgroundImagePosition', [$bannerBackgroundImagePosition]);

        return parent::setBannerBackgroundImagePosition($bannerBackgroundImagePosition);
    }

    /**
     * {@inheritDoc}
     */
    public function getBannerBackgroundImagePosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBannerBackgroundImagePosition', []);

        return parent::getBannerBackgroundImagePosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannerBackgroundImageRepeat($bannerBackgroundImageRepeat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannerBackgroundImageRepeat', [$bannerBackgroundImageRepeat]);

        return parent::setBannerBackgroundImageRepeat($bannerBackgroundImageRepeat);
    }

    /**
     * {@inheritDoc}
     */
    public function getBannerBackgroundImageRepeat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBannerBackgroundImageRepeat', []);

        return parent::getBannerBackgroundImageRepeat();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannerActivate($bannerActivate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannerActivate', [$bannerActivate]);

        return parent::setBannerActivate($bannerActivate);
    }

    /**
     * {@inheritDoc}
     */
    public function isBannerActivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isBannerActivate', []);

        return parent::isBannerActivate();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setTagCloud($tagCloud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTagCloud', [$tagCloud]);

        return parent::setTagCloud($tagCloud);
    }

    /**
     * {@inheritDoc}
     */
    public function getTagCloud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTagCloud', []);

        return parent::getTagCloud();
    }

    /**
     * {@inheritDoc}
     */
    public function setListWidgetBlog($listWidgetBlog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setListWidgetBlog', [$listWidgetBlog]);

        return parent::setListWidgetBlog($listWidgetBlog);
    }

    /**
     * {@inheritDoc}
     */
    public function getListWidgetBlog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListWidgetBlog', []);

        return parent::getListWidgetBlog();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayPostViewCounter($displayPostViewCounter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayPostViewCounter', [$displayPostViewCounter]);

        return parent::setDisplayPostViewCounter($displayPostViewCounter);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayPostViewCounter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayPostViewCounter', []);

        return parent::getDisplayPostViewCounter();
    }

    /**
     * {@inheritDoc}
     */
    public function getMaxTag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxTag', []);

        return parent::getMaxTag();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxTag($maxTag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxTag', [$maxTag]);

        return parent::setMaxTag($maxTag);
    }

    /**
     * {@inheritDoc}
     */
    public function isTagTopMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTagTopMode', []);

        return parent::isTagTopMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setTagTopMode($tagTopMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTagTopMode', [$tagTopMode]);

        return parent::setTagTopMode($tagTopMode);
    }

}