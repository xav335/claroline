<?php

namespace EnhancedProxy878b27ff_a92098030eac12c989e3cd4d1312669d25c7b4d2\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class WorkspacesController extends \Claroline\CoreBundle\Controller\Administration\WorkspacesController
{
    private $__CGInterception__loader;

    public function toggleWorkspaceVisibilityAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspacesController', 'toggleWorkspaceVisibilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function toggleWorkspacePublicRegistrationAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspacesController', 'toggleWorkspacePublicRegistrationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function managementAction($page, $search, $max, $order, $direction, $type = 1)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspacesController', 'managementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page, $search, $max, $order, $direction, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page, $search, $max, $order, $direction, $type), $interceptors);

        return $invocation->proceed();
    }

    public function importWorkspaceFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspacesController', 'importWorkspaceFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importWorkspaceAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspacesController', 'importWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteWorkspacesAction(array $workspaces)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WorkspacesController', 'deleteWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspaces));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspaces), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}