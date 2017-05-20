<?php

namespace EnhancedProxy878b27ff_b81588046393b33e291b27d2503e28eef87a2d0d\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AnalyticsController extends \Claroline\CoreBundle\Controller\Administration\AnalyticsController
{
    private $__CGInterception__loader;

    public function analyticsTopAction(\Symfony\Component\HttpFoundation\Request $request, $topType)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\AnalyticsController', 'analyticsTopAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $topType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $topType), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsResourcesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\AnalyticsController', 'analyticsResourcesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsItemAction($item)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\AnalyticsController', 'analyticsItemAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($item));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($item), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsConnectionsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\AnalyticsController', 'analyticsConnectionsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function analyticsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\AnalyticsController', 'analyticsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}