<?php

namespace EnhancedProxy878b27ff_cfd0021ae712a674566c79aa83f6c43412c33ca1\__CG__\Claroline\CoreBundle\Controller\API\User;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class RoleController extends \Claroline\CoreBundle\Controller\API\User\RoleController
{
    private $__CGInterception__loader;

    public function getPlatformRolesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\RoleController', 'getPlatformRolesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}