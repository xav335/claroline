<?php

namespace EnhancedProxy878b27ff_7661c33c07a47aecf4c3c73ff54a30c60f7a52dc\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class RolesController extends \Claroline\CoreBundle\Controller\Administration\RolesController
{
    private $__CGInterception__loader;

    public function toolsIndexAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'toolsIndexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function roleListAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'roleListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function removeRoleFromToolAction(\Claroline\CoreBundle\Entity\Tool\AdminTool $tool, \Claroline\CoreBundle\Entity\Role $role)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'removeRoleFromToolAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($tool, $role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($tool, $role), $interceptors);

        return $invocation->proceed();
    }

    public function removeRoleAction(\Claroline\CoreBundle\Entity\Role $role)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'removeRoleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role), $interceptors);

        return $invocation->proceed();
    }

    public function invertPersonalWorkspaceCreationAction(\Claroline\CoreBundle\Entity\Role $role)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'invertPersonalWorkspaceCreationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role), $interceptors);

        return $invocation->proceed();
    }

    public function initializeRoleLimitAction(\Claroline\CoreBundle\Entity\Role $role)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'initializeRoleLimitAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function increaseRoleMaxUsers(\Claroline\CoreBundle\Entity\Role $role, $amount)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'increaseRoleMaxUsers');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role, $amount));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role, $amount), $interceptors);

        return $invocation->proceed();
    }

    public function editRoleNameAction(\Claroline\CoreBundle\Entity\Role $role, $name)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'editRoleNameAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role, $name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role, $name), $interceptors);

        return $invocation->proceed();
    }

    public function createPlatformRoleModalFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'createPlatformRoleModalFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function createPlatformRoleAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'createPlatformRoleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function addRoleToToolAction(\Claroline\CoreBundle\Entity\Tool\AdminTool $tool, \Claroline\CoreBundle\Entity\Role $role)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\RolesController', 'addRoleToToolAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($tool, $role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($tool, $role), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}