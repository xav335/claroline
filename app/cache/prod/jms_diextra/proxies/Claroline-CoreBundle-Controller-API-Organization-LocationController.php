<?php

namespace EnhancedProxy878b27ff_d0a094961f1b68639d993e1698636b56505a271a\__CG__\Claroline\CoreBundle\Controller\API\Organization;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class LocationController extends \Claroline\CoreBundle\Controller\API\Organization\LocationController
{
    private $__CGInterception__loader;

    public function putLocationAction(\Claroline\CoreBundle\Entity\Organization\Location $location)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\LocationController', 'putLocationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($location));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($location), $interceptors);

        return $invocation->proceed();
    }

    public function postLocationAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\LocationController', 'postLocationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getLocationsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\LocationController', 'getLocationsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getLocationEditFormAction(\Claroline\CoreBundle\Entity\Organization\Location $location)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\LocationController', 'getLocationEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($location));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($location), $interceptors);

        return $invocation->proceed();
    }

    public function getLocationCreateFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\LocationController', 'getLocationCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteLocationAction(\Claroline\CoreBundle\Entity\Organization\Location $location)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\LocationController', 'deleteLocationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($location));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($location), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}