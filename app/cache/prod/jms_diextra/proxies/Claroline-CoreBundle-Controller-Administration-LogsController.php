<?php

namespace EnhancedProxy878b27ff_8ab875cbc9fa4686d82afb64024e6169c34eaf46\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class LogsController extends \Claroline\CoreBundle\Controller\Administration\LogsController
{
    private $__CGInterception__loader;

    public function logListAction($page)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\LogsController', 'logListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($page));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($page), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}