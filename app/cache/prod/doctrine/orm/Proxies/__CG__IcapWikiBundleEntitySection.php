<?php

namespace Proxies\__CG__\Icap\WikiBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Section extends \Icap\WikiBundle\Entity\Section implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'visible', 'creationDate', 'author', 'activeContribution', 'wiki', 'deleted', 'deletionDate', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'left', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'level', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'right', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'position', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'brother', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'hasChangedActiveContribution', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'isWikiAdmin', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'root', 'parent'];
        }

        return ['__isInitialized__', 'id', 'visible', 'creationDate', 'author', 'activeContribution', 'wiki', 'deleted', 'deletionDate', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'left', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'level', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'right', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'position', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'brother', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'hasChangedActiveContribution', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'isWikiAdmin', '' . "\0" . 'Icap\\WikiBundle\\Entity\\Section' . "\0" . 'root', 'parent'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Section $proxy) {
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
    public function getVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisible', []);

        return parent::getVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
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
    public function setCreationDate($creationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', [$creationDate]);

        return parent::setCreationDate($creationDate);
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
    public function setLastEditor(\Claroline\CoreBundle\Entity\User $lastEditor = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastEditor', [$lastEditor]);

        return parent::setLastEditor($lastEditor);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastEditor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastEditor', []);

        return parent::getLastEditor();
    }

    /**
     * {@inheritDoc}
     */
    public function setActiveContribution(\Icap\WikiBundle\Entity\Contribution $contribution)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActiveContribution', [$contribution]);

        return parent::setActiveContribution($contribution);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiveContribution()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiveContribution', []);

        return parent::getActiveContribution();
    }

    /**
     * {@inheritDoc}
     */
    public function setWiki(\Icap\WikiBundle\Entity\Wiki $wiki)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWiki', [$wiki]);

        return parent::setWiki($wiki);
    }

    /**
     * {@inheritDoc}
     */
    public function getWiki()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWiki', []);

        return parent::getWiki();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletionDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletionDate', []);

        return parent::getDeletionDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletionDate($deletionDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletionDate', [$deletionDate]);

        return parent::setDeletionDate($deletionDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setLeft($left)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeft', [$left]);

        return parent::setLeft($left);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeft', []);

        return parent::getLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function setLevel($level)
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
    public function setRight($right)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRight', [$right]);

        return parent::setRight($right);
    }

    /**
     * {@inheritDoc}
     */
    public function getRight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRight', []);

        return parent::getRight();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoot($root)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoot', [$root]);

        return parent::setRoot($root);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoot', []);

        return parent::getRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrother($brother)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrother', [$brother]);

        return parent::setBrother($brother);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrother()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrother', []);

        return parent::getBrother();
    }

    /**
     * {@inheritDoc}
     */
    public function setHasChangedActiveContribution($hasChangedActiveContribution)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHasChangedActiveContribution', [$hasChangedActiveContribution]);

        return parent::setHasChangedActiveContribution($hasChangedActiveContribution);
    }

    /**
     * {@inheritDoc}
     */
    public function getHasChangedActiveContribution()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHasChangedActiveContribution', []);

        return parent::getHasChangedActiveContribution();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsWikiAdmin($isAdmin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsWikiAdmin', [$isAdmin]);

        return parent::setIsWikiAdmin($isAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsWikiAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsWikiAdmin', []);

        return parent::getIsWikiAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Icap\WikiBundle\Entity\Section $section)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$section]);

        return parent::setParent($section);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function isRoot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRoot', []);

        return parent::isRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function hasChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasChildren', []);

        return parent::hasChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function checkMoveSection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkMoveSection', []);

        return parent::checkMoveSection();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewActiveContributionToSection(\Claroline\CoreBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewActiveContributionToSection', [$user]);

        return parent::setNewActiveContributionToSection($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoveEventChangeSet(\Icap\WikiBundle\Entity\Section $oldParent, $oldLeft, \Icap\WikiBundle\Entity\Section $newParent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoveEventChangeSet', [$oldParent, $oldLeft, $newParent]);

        return parent::getMoveEventChangeSet($oldParent, $oldLeft, $newParent);
    }

    /**
     * {@inheritDoc}
     */
    public function isActiveContributionChanged($oldActiveContribution)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isActiveContributionChanged', [$oldActiveContribution]);

        return parent::isActiveContributionChanged($oldActiveContribution);
    }

    /**
     * {@inheritDoc}
     */
    public function createActiveContribution(\Doctrine\ORM\Event\LifecycleEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createActiveContribution', [$event]);

        return parent::createActiveContribution($event);
    }

}