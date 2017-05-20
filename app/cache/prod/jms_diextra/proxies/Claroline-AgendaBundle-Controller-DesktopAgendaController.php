<?php

namespace EnhancedProxy878b27ff_0ae1b75f276f5499c4d764dca76221bddba34e15\__CG__\Claroline\AgendaBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class DesktopAgendaController extends \Claroline\AgendaBundle\Controller\DesktopAgendaController
{
    private $__CGInterception__loader;

    public function widgetAction($order = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'widgetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($order), $interceptors);

        return $invocation->proceed();
    }

    public function updateEventModalFormAction(\Claroline\AgendaBundle\Entity\Event $event)
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'updateEventModalFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($event));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($event), $interceptors);

        return $invocation->proceed();
    }

    public function updateAction(\Claroline\AgendaBundle\Entity\Event $event)
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($event));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($event), $interceptors);

        return $invocation->proceed();
    }

    public function importsEventsIcsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'importsEventsIcsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importEventsModalForm()
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'importEventsModalForm');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function guestUpdateAction(\Claroline\AgendaBundle\Entity\Event $event)
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'guestUpdateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($event));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($event), $interceptors);

        return $invocation->proceed();
    }

    public function guestDeleteAction(\Claroline\AgendaBundle\Entity\Event $event)
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'guestDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($event));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($event), $interceptors);

        return $invocation->proceed();
    }

    public function desktopShowAction()
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'desktopShowAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function checkGuestAccess(\Claroline\AgendaBundle\Entity\Event $event)
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'checkGuestAccess');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($event));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($event), $interceptors);

        return $invocation->proceed();
    }

    public function addEventModalFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'addEventModalFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function addEvent()
    {
        $ref = new \ReflectionMethod('Claroline\\AgendaBundle\\Controller\\DesktopAgendaController', 'addEvent');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}