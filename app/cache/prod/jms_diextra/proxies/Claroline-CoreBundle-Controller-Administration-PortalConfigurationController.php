<?php

namespace EnhancedProxy878b27ff_2edfd0cd9da8de5966db6de4a140654be041adae\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PortalConfigurationController extends \Claroline\CoreBundle\Controller\Administration\PortalConfigurationController
{
    private $__CGInterception__loader;

    public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\PortalConfigurationController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}