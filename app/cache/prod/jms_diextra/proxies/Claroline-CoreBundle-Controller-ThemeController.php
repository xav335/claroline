<?php

namespace EnhancedProxy878b27ff_df471074b3524b4092385e48032f2b938a67b479\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ThemeController extends \Claroline\CoreBundle\Controller\ThemeController
{
    private $__CGInterception__loader;

    public function listAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ThemeController', 'listAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function formAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ThemeController', 'formAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(\Claroline\CoreBundle\Entity\Theme\Theme $theme)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ThemeController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($theme));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($theme), $interceptors);

        return $invocation->proceed();
    }

    public function createThemeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ThemeController', 'createThemeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}