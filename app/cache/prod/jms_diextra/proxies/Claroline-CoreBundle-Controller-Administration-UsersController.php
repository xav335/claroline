<?php

namespace EnhancedProxy878b27ff_3cfb99a8f12179db6ba3a8d66b5be86c46812704\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class UsersController extends \Claroline\CoreBundle\Controller\Administration\UsersController
{
    private $__CGInterception__loader;

    public function userWorkspaceListAction(\Claroline\CoreBundle\Entity\User $user, $page, $max)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'userWorkspaceListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $max));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $max), $interceptors);

        return $invocation->proceed();
    }

    public function userCreationFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'userCreationFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function removePersonalWorkspaceToolPermAction($perm, \Claroline\CoreBundle\Entity\Role $role, \Claroline\CoreBundle\Entity\Tool\Tool $tool)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'removePersonalWorkspaceToolPermAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($perm, $role, $tool));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($perm, $role, $tool), $interceptors);

        return $invocation->proceed();
    }

    public function personalWorkspaceToolConfigIndexAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'personalWorkspaceToolConfigIndexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function personalWorkspaceResourceRightsConfigAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'personalWorkspaceResourceRightsConfigAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importProfilePicsFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'importProfilePicsFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importProfilePicsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'importProfilePicsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'importFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'importAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function export($format)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'export');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($format));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($format), $interceptors);

        return $invocation->proceed();
    }

    public function executeUserAdminAction(\Claroline\CoreBundle\Entity\User $user, \Claroline\CoreBundle\Entity\Action\AdditionalAction $action)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'executeUserAdminAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $action));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $action), $interceptors);

        return $invocation->proceed();
    }

    public function executeGroupAdminAction(\Claroline\CoreBundle\Entity\Group $group, \Claroline\CoreBundle\Entity\Action\AdditionalAction $action)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'executeGroupAdminAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group, $action));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group, $action), $interceptors);

        return $invocation->proceed();
    }

    public function deactivatePersonalWorkspaceRightsAction(\Claroline\CoreBundle\Entity\Role $role)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'deactivatePersonalWorkspaceRightsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role), $interceptors);

        return $invocation->proceed();
    }

    public function createAction(\Claroline\CoreBundle\Entity\User $currentUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($currentUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($currentUser), $interceptors);

        return $invocation->proceed();
    }

    public function activatePersonalWorkspaceToolPermAction($perm, \Claroline\CoreBundle\Entity\Role $role, \Claroline\CoreBundle\Entity\Tool\Tool $tool)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'activatePersonalWorkspaceToolPermAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($perm, $role, $tool));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($perm, $role, $tool), $interceptors);

        return $invocation->proceed();
    }

    public function activatePersonalWorkspaceRightsAction(\Claroline\CoreBundle\Entity\Role $role)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\UsersController', 'activatePersonalWorkspaceRightsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}