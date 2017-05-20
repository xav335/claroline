<?php

namespace EnhancedProxy878b27ff_f9b6a9db864b98c201090157113671890879a58a\__CG__\HeVinci\CompetencyBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class MyObjectiveController extends \HeVinci\CompetencyBundle\Controller\MyObjectiveController
{
    private $__CGInterception__loader;

    public function userObjectiveCompetenciesAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\MyObjectiveController', 'userObjectiveCompetenciesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $user), $interceptors);

        return $invocation->proceed();
    }

    public function objectivesAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\MyObjectiveController', 'objectivesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function competencyUserHistoryAction(\HeVinci\CompetencyBundle\Entity\Competency $competency, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\MyObjectiveController', 'competencyUserHistoryAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($competency, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($competency, $user), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}