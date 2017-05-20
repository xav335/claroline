<?php

namespace Proxies\__CG__\Claroline\CoreBundle\Entity\Log;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Log extends \Claroline\CoreBundle\Entity\Log\Log implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'action', 'dateLog', 'shortDateLog', 'details', 'doer', 'doerType', 'doerIp', 'doerSessionId', 'doerPlatformRoles', 'doerWorkspaceRoles', 'receiver', 'receiverGroup', 'owner', 'workspace', 'toolName', 'resourceNode', 'resourceType', 'role', 'isDisplayedInAdmin', 'isDisplayedInWorkspace', 'otherElementId'];
        }

        return ['__isInitialized__', 'id', 'action', 'dateLog', 'shortDateLog', 'details', 'doer', 'doerType', 'doerIp', 'doerSessionId', 'doerPlatformRoles', 'doerWorkspaceRoles', 'receiver', 'receiverGroup', 'owner', 'workspace', 'toolName', 'resourceNode', 'resourceType', 'role', 'isDisplayedInAdmin', 'isDisplayedInWorkspace', 'otherElementId'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Log $proxy) {
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
    public function setAction($action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAction', [$action]);

        return parent::setAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateLog(\DateTime $date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateLog', [$date]);

        return parent::setDateLog($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateLog', []);

        return parent::getDateLog();
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
    public function getDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetails', []);

        return parent::getDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setDoerType($doerType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDoerType', [$doerType]);

        return parent::setDoerType($doerType);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoerType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoerType', []);

        return parent::getDoerType();
    }

    /**
     * {@inheritDoc}
     */
    public function setDoerIp($doerIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDoerIp', [$doerIp]);

        return parent::setDoerIp($doerIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoerIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoerIp', []);

        return parent::getDoerIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setDoerSessionId($doerSessionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDoerSessionId', [$doerSessionId]);

        return parent::setDoerSessionId($doerSessionId);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoerSessionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoerSessionId', []);

        return parent::getDoerSessionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDoer(\Claroline\CoreBundle\Entity\User $doer = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDoer', [$doer]);

        return parent::setDoer($doer);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoer', []);

        return parent::getDoer();
    }

    /**
     * {@inheritDoc}
     */
    public function addDoerPlatformRole(\Claroline\CoreBundle\Entity\Role $doerPlatformRoles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDoerPlatformRole', [$doerPlatformRoles]);

        return parent::addDoerPlatformRole($doerPlatformRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDoerPlatformRole(\Claroline\CoreBundle\Entity\Role $doerPlatformRoles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDoerPlatformRole', [$doerPlatformRoles]);

        return parent::removeDoerPlatformRole($doerPlatformRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoerPlatformRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoerPlatformRoles', []);

        return parent::getDoerPlatformRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function addDoerWorkspaceRole(\Claroline\CoreBundle\Entity\Role $doerWorkspaceRoles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDoerWorkspaceRole', [$doerWorkspaceRoles]);

        return parent::addDoerWorkspaceRole($doerWorkspaceRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDoerWorkspaceRole(\Claroline\CoreBundle\Entity\Role $doerWorkspaceRoles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDoerWorkspaceRole', [$doerWorkspaceRoles]);

        return parent::removeDoerWorkspaceRole($doerWorkspaceRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoerWorkspaceRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoerWorkspaceRoles', []);

        return parent::getDoerWorkspaceRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setReceiver(\Claroline\CoreBundle\Entity\User $receiver = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReceiver', [$receiver]);

        return parent::setReceiver($receiver);
    }

    /**
     * {@inheritDoc}
     */
    public function getReceiver()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReceiver', []);

        return parent::getReceiver();
    }

    /**
     * {@inheritDoc}
     */
    public function setReceiverGroup(\Claroline\CoreBundle\Entity\Group $receiverGroup = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReceiverGroup', [$receiverGroup]);

        return parent::setReceiverGroup($receiverGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getReceiverGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReceiverGroup', []);

        return parent::getReceiverGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\Claroline\CoreBundle\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkspace(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkspace', [$workspace]);

        return parent::setWorkspace($workspace);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkspace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkspace', []);

        return parent::getWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceNode(\Claroline\CoreBundle\Entity\Resource\ResourceNode $resourceNode = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceNode', [$resourceNode]);

        return parent::setResourceNode($resourceNode);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceNode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceNode', []);

        return parent::getResourceNode();
    }

    /**
     * {@inheritDoc}
     */
    public function setResourceType(\Claroline\CoreBundle\Entity\Resource\ResourceType $resourceType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResourceType', [$resourceType]);

        return parent::setResourceType($resourceType);
    }

    /**
     * {@inheritDoc}
     */
    public function getResourceType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResourceType', []);

        return parent::getResourceType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(\Claroline\CoreBundle\Entity\Role $role = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setToolName($toolName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToolName', [$toolName]);

        return parent::setToolName($toolName);
    }

    /**
     * {@inheritDoc}
     */
    public function getToolName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToolName', []);

        return parent::getToolName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDisplayedInAdmin($isDisplayedInAdmin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDisplayedInAdmin', [$isDisplayedInAdmin]);

        return parent::setIsDisplayedInAdmin($isDisplayedInAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function isDisplayedInAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDisplayedInAdmin', []);

        return parent::isDisplayedInAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDisplayedInWorkspace($isDisplayedInWorkspace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDisplayedInWorkspace', [$isDisplayedInWorkspace]);

        return parent::setIsDisplayedInWorkspace($isDisplayedInWorkspace);
    }

    /**
     * {@inheritDoc}
     */
    public function isDisplayedInWorkspace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDisplayedInWorkspace', []);

        return parent::isDisplayedInWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function getOtherElementId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOtherElementId', []);

        return parent::getOtherElementId();
    }

    /**
     * {@inheritDoc}
     */
    public function setOtherElementId($otherElementId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOtherElementId', [$otherElementId]);

        return parent::setOtherElementId($otherElementId);
    }

}