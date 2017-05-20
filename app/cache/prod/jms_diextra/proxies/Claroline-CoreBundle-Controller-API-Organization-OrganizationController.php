<?php

namespace EnhancedProxy878b27ff_45893640d157d051f37e615225100d094971407a\__CG__\Claroline\CoreBundle\Controller\API\Organization;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class OrganizationController extends \Claroline\CoreBundle\Controller\API\Organization\OrganizationController
{
    private $__CGInterception__loader;

    public function putOrganizationAction(\Claroline\CoreBundle\Entity\Organization\Organization $organization)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\OrganizationController', 'putOrganizationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($organization));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($organization), $interceptors);

        return $invocation->proceed();
    }

    public function postOrganizationAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\OrganizationController', 'postOrganizationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getOrganizationsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\OrganizationController', 'getOrganizationsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getOrganizationListAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\OrganizationController', 'getOrganizationListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getOrganizationEditFormAction(\Claroline\CoreBundle\Entity\Organization\Organization $organization)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\OrganizationController', 'getOrganizationEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($organization));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($organization), $interceptors);

        return $invocation->proceed();
    }

    public function deleteOrganizationAction(\Claroline\CoreBundle\Entity\Organization\Organization $organization)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\Organization\\OrganizationController', 'deleteOrganizationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($organization));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($organization), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}