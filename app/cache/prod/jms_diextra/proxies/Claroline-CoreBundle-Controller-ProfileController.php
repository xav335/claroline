<?php

namespace EnhancedProxy878b27ff_1e66503ca64c98cacb618e17be2344fab04cb88a\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ProfileController extends \Claroline\CoreBundle\Controller\ProfileController
{
    private $__CGInterception__loader;

    public function viewAction(\Symfony\Component\HttpFoundation\Request $request, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'viewAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $user), $interceptors);

        return $invocation->proceed();
    }

    public function editPublicUrlAction(\Claroline\CoreBundle\Entity\User $loggedUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'editPublicUrlAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($loggedUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($loggedUser), $interceptors);

        return $invocation->proceed();
    }

    public function editProfileAction(\Claroline\CoreBundle\Entity\User $loggedUser, \Claroline\CoreBundle\Entity\User $user = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'editProfileAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($loggedUser, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($loggedUser, $user), $interceptors);

        return $invocation->proceed();
    }

    public function checkPublicUrlAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\ProfileController', 'checkPublicUrlAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}