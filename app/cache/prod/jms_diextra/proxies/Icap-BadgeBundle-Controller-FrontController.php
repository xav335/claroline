<?php

namespace EnhancedProxy878b27ff_206f0a550ef4144031d84a3ef3e4ab0a112376e1\__CG__\Icap\BadgeBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class FrontController extends \Icap\BadgeBundle\Controller\FrontController
{
    private $__CGInterception__loader;

    public function viewAction(\Icap\BadgeBundle\Entity\Badge $badge)
    {
        $ref = new \ReflectionMethod('Icap\\BadgeBundle\\Controller\\FrontController', 'viewAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($badge));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($badge), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}