<?php

namespace EnhancedProxy878b27ff_b98c37c845465ebdb7ff14d04cadb992cd3081cf\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class HomeTabController extends \Claroline\CoreBundle\Controller\Administration\HomeTabController
{
    private $__CGInterception__loader;

    public function putAdminWidgetInstanceEditionAction(\Claroline\CoreBundle\Entity\Widget\WidgetHomeTabConfig $whtc, \Claroline\CoreBundle\Entity\Widget\WidgetDisplayConfig $wdc)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'putAdminWidgetInstanceEditionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($whtc, $wdc));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($whtc, $wdc), $interceptors);

        return $invocation->proceed();
    }

    public function putAdminWidgetDisplayUpdateAction($datas)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'putAdminWidgetDisplayUpdateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($datas));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($datas), $interceptors);

        return $invocation->proceed();
    }

    public function putAdminHomeTabEditionAction(\Claroline\CoreBundle\Entity\Home\HomeTabConfig $homeTabConfig, $homeTabType = 'desktop')
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'putAdminHomeTabEditionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTabConfig, $homeTabType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTabConfig, $homeTabType), $interceptors);

        return $invocation->proceed();
    }

    public function postAdminWidgetInstanceCreationAction(\Claroline\CoreBundle\Entity\Home\HomeTab $homeTab, $homeTabType = 'desktop')
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'postAdminWidgetInstanceCreationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTab, $homeTabType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTab, $homeTabType), $interceptors);

        return $invocation->proceed();
    }

    public function postAdminHomeTabCreationAction($homeTabType = 'desktop')
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'postAdminHomeTabCreationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTabType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTabType), $interceptors);

        return $invocation->proceed();
    }

    public function postAdminHomeTabConfigReorderAction($homeTabType, \Claroline\CoreBundle\Entity\Home\HomeTabConfig $homeTabConfig, $nextHomeTabConfigId)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'postAdminHomeTabConfigReorderAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTabType, $homeTabConfig, $nextHomeTabConfigId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTabType, $homeTabConfig, $nextHomeTabConfigId), $interceptors);

        return $invocation->proceed();
    }

    public function getAdminWidgetsAction(\Claroline\CoreBundle\Entity\Home\HomeTab $homeTab)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'getAdminWidgetsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTab));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTab), $interceptors);

        return $invocation->proceed();
    }

    public function getAdminWidgetInstanceEditionFormAction(\Claroline\CoreBundle\Entity\Widget\WidgetHomeTabConfig $whtc, \Claroline\CoreBundle\Entity\Widget\WidgetDisplayConfig $wdc)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'getAdminWidgetInstanceEditionFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($whtc, $wdc));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($whtc, $wdc), $interceptors);

        return $invocation->proceed();
    }

    public function getAdminInstanceCreationFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'getAdminInstanceCreationFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getAdminHomeTabsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'getAdminHomeTabsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getAdminHomeTabEditionFormAction(\Claroline\CoreBundle\Entity\Home\HomeTabConfig $homeTabConfig, $homeTabType = 'desktop')
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'getAdminHomeTabEditionFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTabConfig, $homeTabType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTabConfig, $homeTabType), $interceptors);

        return $invocation->proceed();
    }

    public function getAdminHomeTabCreationFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'getAdminHomeTabCreationFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAdminWidgetHomeTabConfigAction(\Claroline\CoreBundle\Entity\Widget\WidgetHomeTabConfig $widgetHomeTabConfig)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'deleteAdminWidgetHomeTabConfigAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($widgetHomeTabConfig));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($widgetHomeTabConfig), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAdminHomeTabAction(\Claroline\CoreBundle\Entity\Home\HomeTabConfig $homeTabConfig, $homeTabType = 'desktop')
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'deleteAdminHomeTabAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($homeTabConfig, $homeTabType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($homeTabConfig, $homeTabType), $interceptors);

        return $invocation->proceed();
    }

    public function adminHomeTabsConfigAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\HomeTabController', 'adminHomeTabsConfigAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}