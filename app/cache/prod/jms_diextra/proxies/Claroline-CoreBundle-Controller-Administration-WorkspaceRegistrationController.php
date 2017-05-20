<?php

namespace EnhancedProxy878b27ff_0b688822bc8b2f2808e8420a64d53b6d0ab77f61\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class WorkspaceRegistrationController extends \Claroline\CoreBundle\Controller\Administration\WorkspaceRegistrationController
{
    private $__CGInterception__loader;

    public function workspaceUsersUnregistrationManagementAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace, $search = '', $page = 1, $max = 50, $orderedBy = 'username', $order = 'ASC')
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'workspaceUsersUnregistrationManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function workspaceGroupsUnregistrationManagementAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace, $search = '', $page = 1, $max = 50, $orderedBy = 'name', $order = 'ASC')
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'workspaceGroupsUnregistrationManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function userListPagerAction($page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'userListPagerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function unsubscribeMultipleUsersFromWorkspaceAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace, array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'unsubscribeMultipleUsersFromWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace, $users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace, $users), $interceptors);

        return $invocation->proceed();
    }

    public function unsubscribeMultipleGroupsFromWorkspaceAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace, array $groups)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'unsubscribeMultipleGroupsFromWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace, $groups));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace, $groups), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleUsersToOneWorkspaceAction(array $roles, array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'subscribeMultipleUsersToOneWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roles, $users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roles, $users), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleUsersToMultipleWorkspacesAction($roleKey, array $workspaces, array $users)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'subscribeMultipleUsersToMultipleWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roleKey, $workspaces, $users));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roleKey, $workspaces, $users), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleGroupsToOneWorkspaceAction(array $roles, array $groups)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'subscribeMultipleGroupsToOneWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roles, $groups));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roles, $groups), $interceptors);

        return $invocation->proceed();
    }

    public function subscribeMultipleGroupsToMultipleWorkspacesAction($roleKey, array $workspaces, array $groups)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'subscribeMultipleGroupsToMultipleWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($roleKey, $workspaces, $groups));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($roleKey, $workspaces, $groups), $interceptors);

        return $invocation->proceed();
    }

    public function registrationManagementUserListAction(array $workspaces)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'registrationManagementUserListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspaces));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspaces), $interceptors);

        return $invocation->proceed();
    }

    public function registrationManagementGroupListAction(array $workspaces)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'registrationManagementGroupListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspaces));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspaces), $interceptors);

        return $invocation->proceed();
    }

    public function registrationManagementAction($search = '', $max = 20)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'registrationManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($search, $max));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($search, $max), $interceptors);

        return $invocation->proceed();
    }

    public function groupListPagerAction($page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController', 'groupListPagerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}