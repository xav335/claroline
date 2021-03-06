<?php

namespace Proxies\__CG__\UJM\ExoBundle\Entity\Misc;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Area extends \UJM\ExoBundle\Entity\Misc\Area implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'id', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'value', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'shape', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'color', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'size', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'interactionGraphic', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'uuid', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'score', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'feedback'];
        }

        return ['__isInitialized__', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'id', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'value', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'shape', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'color', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'size', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'interactionGraphic', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'uuid', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'score', '' . "\0" . 'UJM\\ExoBundle\\Entity\\Misc\\Area' . "\0" . 'feedback'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Area $proxy) {
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
    public function setValue($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValue', [$value]);

        return parent::setValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function getValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValue', []);

        return parent::getValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setShape($shape)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShape', [$shape]);

        return parent::setShape($shape);
    }

    /**
     * {@inheritDoc}
     */
    public function getShape()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShape', []);

        return parent::getShape();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor($color)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function getInteractionGraphic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInteractionGraphic', []);

        return parent::getInteractionGraphic();
    }

    /**
     * {@inheritDoc}
     */
    public function setInteractionGraphic(\UJM\ExoBundle\Entity\QuestionType\GraphicQuestion $interactionGraphic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInteractionGraphic', [$interactionGraphic]);

        return parent::setInteractionGraphic($interactionGraphic);
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
    public function setScore($score)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScore', [$score]);

        return parent::setScore($score);
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

}
