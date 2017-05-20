<?php

namespace EnhancedProxy878b27ff_d14de194aa53867e0dfb684f70e724d4ba65e919\__CG__\FormaLibre\ReservationBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ReservationAdminController extends \FormaLibre\ReservationBundle\Controller\ReservationAdminController
{
    private $__CGInterception__loader;

    public function updateResourceRolesAction(\FormaLibre\ReservationBundle\Entity\Resource $resource, $rolesList = '')
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'updateResourceRolesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resource, $rolesList));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resource, $rolesList), $interceptors);

        return $invocation->proceed();
    }

    public function modifyResourceAction(\FormaLibre\ReservationBundle\Entity\Resource $resource)
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'modifyResourceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resource));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resource), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importResourcesModalFormAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'importResourcesModalFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importResourcesAction($file)
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'importResourcesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($file));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($file), $interceptors);

        return $invocation->proceed();
    }

    public function exportResourcesAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'exportResourcesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function deleteResourceTypeAction(\FormaLibre\ReservationBundle\Entity\ResourceType $resourceType)
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'deleteResourceTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resourceType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resourceType), $interceptors);

        return $invocation->proceed();
    }

    public function deleteResourceAction(\FormaLibre\ReservationBundle\Entity\Resource $resource)
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'deleteResourceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resource));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resource), $interceptors);

        return $invocation->proceed();
    }

    public function changeResourceTypeNameAction(\FormaLibre\ReservationBundle\Entity\ResourceType $resourceType)
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'changeResourceTypeNameAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resourceType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resourceType), $interceptors);

        return $invocation->proceed();
    }

    public function addResourceAction(\FormaLibre\ReservationBundle\Entity\ResourceType $resourceType)
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'addResourceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resourceType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resourceType), $interceptors);

        return $invocation->proceed();
    }

    public function addNewResourceTypeAction($name = '')
    {
        $ref = new \ReflectionMethod('FormaLibre\\ReservationBundle\\Controller\\ReservationAdminController', 'addNewResourceTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($name), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}