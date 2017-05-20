<?php

namespace EnhancedProxy878b27ff_91a4808bc4330f47b460e2960722f0c6d3fab15e\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class DesktopConfigurationController extends \Claroline\CoreBundle\Controller\Administration\DesktopConfigurationController
{
    private $__CGInterception__loader;

    public function updateOrderedToolOrderAction(\Claroline\CoreBundle\Entity\Tool\OrderedTool $orderedTool, $nextOrderedToolId, $type = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController', 'updateOrderedToolOrderAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($orderedTool, $nextOrderedToolId, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($orderedTool, $nextOrderedToolId, $type), $interceptors);

        return $invocation->proceed();
    }

    public function toggleVisibility(\Claroline\CoreBundle\Entity\Tool\OrderedTool $orderedTool)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController', 'toggleVisibility');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($orderedTool));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($orderedTool), $interceptors);

        return $invocation->proceed();
    }

    public function toggleLock(\Claroline\CoreBundle\Entity\Tool\OrderedTool $orderedTool)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController', 'toggleLock');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($orderedTool));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($orderedTool), $interceptors);

        return $invocation->proceed();
    }

    public function adminDesktopHomeLockManagementAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController', 'adminDesktopHomeLockManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminDesktopHomeLockChangeAction(\Claroline\CoreBundle\Entity\Role $role, $locked)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController', 'adminDesktopHomeLockChangeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($role, $locked));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($role, $locked), $interceptors);

        return $invocation->proceed();
    }

    public function adminDesktopConfigureToolAction($type = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController', 'adminDesktopConfigureToolAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function adminDesktopConfigMenuAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController', 'adminDesktopConfigMenuAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}