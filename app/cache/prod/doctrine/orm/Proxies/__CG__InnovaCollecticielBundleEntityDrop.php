<?php

namespace Proxies\__CG__\Innova\CollecticielBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Drop extends \Innova\CollecticielBundle\Entity\Drop implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'dropDate', 'reported', 'finished', 'number', 'dropzone', 'documents', 'user', 'corrections', 'hiddenDirectory', 'autoClosedDrop', 'unlockedDrop', 'unlockedUser'];
        }

        return ['__isInitialized__', 'id', 'dropDate', 'reported', 'finished', 'number', 'dropzone', 'documents', 'user', 'corrections', 'hiddenDirectory', 'autoClosedDrop', 'unlockedDrop', 'unlockedUser'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Drop $proxy) {
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
    public function getDocuments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocuments', []);

        return parent::getDocuments();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocuments($documents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocuments', [$documents]);

        return parent::setDocuments($documents);
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
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
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
    public function getDropDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDropDate', []);

        return parent::getDropDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDropDate($dropDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDropDate', [$dropDate]);

        return parent::setDropDate($dropDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDropzone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDropzone', []);

        return parent::getDropzone();
    }

    /**
     * {@inheritDoc}
     */
    public function setDropzone($dropzone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDropzone', [$dropzone]);

        return parent::setDropzone($dropzone);
    }

    /**
     * {@inheritDoc}
     */
    public function getReported()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReported', []);

        return parent::getReported();
    }

    /**
     * {@inheritDoc}
     */
    public function setReported($reported)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReported', [$reported]);

        return parent::setReported($reported);
    }

    /**
     * {@inheritDoc}
     */
    public function setFinished($finished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFinished', [$finished]);

        return parent::setFinished($finished);
    }

    /**
     * {@inheritDoc}
     */
    public function getFinished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFinished', []);

        return parent::getFinished();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorrections($corrections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorrections', [$corrections]);

        return parent::setCorrections($corrections);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorrections()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorrections', []);

        return parent::getCorrections();
    }

    /**
     * {@inheritDoc}
     */
    public function setHiddenDirectory($hiddenDirectory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHiddenDirectory', [$hiddenDirectory]);

        return parent::setHiddenDirectory($hiddenDirectory);
    }

    /**
     * {@inheritDoc}
     */
    public function getHiddenDirectory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHiddenDirectory', []);

        return parent::getHiddenDirectory();
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
    public function getCalculatedGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCalculatedGrade', []);

        return parent::getCalculatedGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function countFinishedCorrections()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countFinishedCorrections', []);

        return parent::countFinishedCorrections();
    }

    /**
     * {@inheritDoc}
     */
    public function getHasDeniedCorrection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHasDeniedCorrection', []);

        return parent::getHasDeniedCorrection();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastCorrectionDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastCorrectionDate', []);

        return parent::getLastCorrectionDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutoClosedDrop($autoClosedDrop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutoClosedDrop', [$autoClosedDrop]);

        return parent::setAutoClosedDrop($autoClosedDrop);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoClosedDrop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutoClosedDrop', []);

        return parent::getAutoClosedDrop();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnlockedDrop($unlockedDrop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnlockedDrop', [$unlockedDrop]);

        return parent::setUnlockedDrop($unlockedDrop);
    }

    /**
     * {@inheritDoc}
     */
    public function isUnlockedDrop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUnlockedDrop', []);

        return parent::isUnlockedDrop();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnlockedUser($unlockedUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnlockedUser', [$unlockedUser]);

        return parent::setUnlockedUser($unlockedUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnlockedUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnlockedUser', []);

        return parent::getUnlockedUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnlockedDrop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnlockedDrop', []);

        return parent::getUnlockedDrop();
    }

    /**
     * {@inheritDoc}
     */
    public function addDocument(\Innova\CollecticielBundle\Entity\Document $documents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDocument', [$documents]);

        return parent::addDocument($documents);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDocument(\Innova\CollecticielBundle\Entity\Document $documents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDocument', [$documents]);

        return parent::removeDocument($documents);
    }

    /**
     * {@inheritDoc}
     */
    public function addCorrection(\Innova\CollecticielBundle\Entity\Correction $corrections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCorrection', [$corrections]);

        return parent::addCorrection($corrections);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCorrection(\Innova\CollecticielBundle\Entity\Correction $corrections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCorrection', [$corrections]);

        return parent::removeCorrection($corrections);
    }

}
