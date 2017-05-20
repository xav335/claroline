<?php

namespace EnhancedProxy878b27ff_3210533c14f3ffccc61364161c41adc90c48d38a\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AuthenticationController extends \Claroline\CoreBundle\Controller\AuthenticationController
{
    private $__CGInterception__loader;

    public function triggerAuthenticationAction($hash)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\AuthenticationController', 'triggerAuthenticationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($hash));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($hash), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}