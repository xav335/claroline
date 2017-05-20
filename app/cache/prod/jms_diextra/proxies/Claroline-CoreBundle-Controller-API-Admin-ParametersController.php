<?php

namespace EnhancedProxy878b27ff_ed3d3de2af1a71cc0126bcd3d41be211cb886fbb\__CG__\Claroline\CoreBundle\Controller\API\Admin;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ParametersController extends \Claroline\CoreBundle\Controller\API\Admin\ParametersController
{
    private $__CGInterception__loader;

    public function postParametersAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Admin\\ParametersController', 'postParametersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}