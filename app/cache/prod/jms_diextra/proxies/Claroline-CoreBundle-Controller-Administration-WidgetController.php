<?php

namespace EnhancedProxy878b27ff_49a46a0c865477bacedffad27ea20dbeb972e170\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class WidgetController extends \Claroline\CoreBundle\Controller\Administration\WidgetController
{
    private $__CGInterception__loader;

    public function widgetsManagementAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WidgetController', 'widgetsManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function widgetEditFormAction(\Claroline\CoreBundle\Entity\Widget\Widget $widget)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WidgetController', 'widgetEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($widget));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($widget), $interceptors);

        return $invocation->proceed();
    }

    public function widgetEditAction(\Claroline\CoreBundle\Entity\Widget\Widget $widget)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\WidgetController', 'widgetEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($widget));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($widget), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}