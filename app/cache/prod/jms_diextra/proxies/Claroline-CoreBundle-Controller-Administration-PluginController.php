<?php

namespace EnhancedProxy878b27ff_eb26a489d70f774393a58076b9cee7b38d0c5e86\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PluginController extends \Claroline\CoreBundle\Controller\Administration\PluginController
{
    private $__CGInterception__loader;

    public function pluginParametersAction($pluginShortName)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\PluginController', 'pluginParametersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($pluginShortName));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($pluginShortName), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\PluginController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}