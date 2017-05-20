<?php

namespace EnhancedProxy878b27ff_0c770c6eb25fcaa334201f3ed3cdd4c336d5c995\__CG__\HeVinci\CompetencyBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ScaleController extends \HeVinci\CompetencyBundle\Controller\ScaleController
{
    private $__CGInterception__loader;

    public function scalesAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ScaleController', 'scalesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function scaleAction(\HeVinci\CompetencyBundle\Entity\Scale $scale, $edit)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ScaleController', 'scaleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($scale, $edit));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($scale, $edit), $interceptors);

        return $invocation->proceed();
    }

    public function newScaleAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ScaleController', 'newScaleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editScaleAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Scale $scale)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ScaleController', 'editScaleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $scale));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $scale), $interceptors);

        return $invocation->proceed();
    }

    public function deleteScaleAction(\HeVinci\CompetencyBundle\Entity\Scale $scale)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ScaleController', 'deleteScaleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($scale));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($scale), $interceptors);

        return $invocation->proceed();
    }

    public function createScaleAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ScaleController', 'createScaleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}