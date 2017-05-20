<?php

namespace EnhancedProxy878b27ff_ea26d514856ee358ee05f2a45fa1ffa0071f4883\__CG__\Claroline\CoreBundle\Controller\API\Workspace;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class WorkspaceController extends \Claroline\CoreBundle\Controller\API\Workspace\WorkspaceController
{
    private $__CGInterception__loader;

    public function putWorkspaceOwnerAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'putWorkspaceOwnerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace, $user), $interceptors);

        return $invocation->proceed();
    }

    public function putWorkspaceAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'putWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function postWorkspaceUserAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'postWorkspaceUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function getWorkspacesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'getWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getWorkspaceAdditionalDatasAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'getWorkspaceAdditionalDatasAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function getWorkspaceAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'getWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function getUserWorkspacesAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'getUserWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function getNonPersonalWorkspacesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'getNonPersonalWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteWorkspaceAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController', 'deleteWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}