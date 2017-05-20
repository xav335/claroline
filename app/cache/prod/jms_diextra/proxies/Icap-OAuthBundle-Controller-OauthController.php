<?php

namespace EnhancedProxy878b27ff_45e677becb246709cf11537c5888ebd19bc45be4\__CG__\Icap\OAuthBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class OauthController extends \Icap\OAuthBundle\Controller\OauthController
{
    private $__CGInterception__loader;

    public function submitFormAction(\Symfony\Component\HttpFoundation\Request $request, $service)
    {
        $ref = new \ReflectionMethod('Icap\\OAuthBundle\\Controller\\OauthController', 'submitFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $service));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $service), $interceptors);

        return $invocation->proceed();
    }

    public function formAction($service)
    {
        $ref = new \ReflectionMethod('Icap\\OAuthBundle\\Controller\\OauthController', 'formAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($service));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($service), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}