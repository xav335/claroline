<?php

namespace EnhancedProxy878b27ff_f7e07927c05ae5b13e456f73b96191d9ca408fa2\__CG__\Claroline\CoreBundle\Controller\API\Admin;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PluginController extends \Claroline\CoreBundle\Controller\API\Admin\PluginController
{
    private $__CGInterception__loader;

    public function getPluginsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Admin\\PluginController', 'getPluginsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function enablePluginAction(\Claroline\CoreBundle\Entity\Plugin $plugin)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Admin\\PluginController', 'enablePluginAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($plugin));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($plugin), $interceptors);

        return $invocation->proceed();
    }

    public function disablePluginAction(\Claroline\CoreBundle\Entity\Plugin $plugin)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Admin\\PluginController', 'disablePluginAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($plugin));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($plugin), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}