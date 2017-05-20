<?php

namespace EnhancedProxy878b27ff_03171c5b949412ae5494a9173118e81350c82044\__CG__\HeVinci\CompetencyBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class PickerController extends \HeVinci\CompetencyBundle\Controller\PickerController
{
    private $__CGInterception__loader;

    public function suggestUserAction($query)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\PickerController', 'suggestUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($query));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($query), $interceptors);

        return $invocation->proceed();
    }

    public function suggestGroupAction($query)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\PickerController', 'suggestGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($query));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($query), $interceptors);

        return $invocation->proceed();
    }

    public function levelsAction(\HeVinci\CompetencyBundle\Entity\Competency $framework)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\PickerController', 'levelsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($framework));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($framework), $interceptors);

        return $invocation->proceed();
    }

    public function frameworksAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\PickerController', 'frameworksAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function competenciesAction(\HeVinci\CompetencyBundle\Entity\Competency $framework, $loadAbilities)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\PickerController', 'competenciesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($framework, $loadAbilities));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($framework, $loadAbilities), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}