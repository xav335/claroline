<?php

namespace EnhancedProxy878b27ff_29863b1d3c8b5a0809fe2114e569f4a258ceda27\__CG__\HeVinci\CompetencyBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ActivityController extends \HeVinci\CompetencyBundle\Controller\ActivityController
{
    private $__CGInterception__loader;

    public function removeCompetencyLinkAction(\Claroline\CoreBundle\Entity\Resource\Activity $activity, \HeVinci\CompetencyBundle\Entity\Competency $competency)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ActivityController', 'removeCompetencyLinkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($activity, $competency));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($activity, $competency), $interceptors);

        return $invocation->proceed();
    }

    public function removeAbilityLinkAction(\Claroline\CoreBundle\Entity\Resource\Activity $activity, \HeVinci\CompetencyBundle\Entity\Ability $ability)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ActivityController', 'removeAbilityLinkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($activity, $ability));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($activity, $ability), $interceptors);

        return $invocation->proceed();
    }

    public function linkCompetencyAction(\Claroline\CoreBundle\Entity\Resource\Activity $activity, \HeVinci\CompetencyBundle\Entity\Competency $competency)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ActivityController', 'linkCompetencyAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($activity, $competency));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($activity, $competency), $interceptors);

        return $invocation->proceed();
    }

    public function linkAbilityAction(\Claroline\CoreBundle\Entity\Resource\Activity $activity, \HeVinci\CompetencyBundle\Entity\Ability $ability)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ActivityController', 'linkAbilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($activity, $ability));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($activity, $ability), $interceptors);

        return $invocation->proceed();
    }

    public function competencyActivitiesAction(\HeVinci\CompetencyBundle\Entity\Competency $competency)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ActivityController', 'competencyActivitiesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($competency));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($competency), $interceptors);

        return $invocation->proceed();
    }

    public function competenciesAction(\Claroline\CoreBundle\Entity\Resource\Activity $activity)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ActivityController', 'competenciesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($activity));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($activity), $interceptors);

        return $invocation->proceed();
    }

    public function abilityActivitiesAction(\HeVinci\CompetencyBundle\Entity\Ability $ability)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ActivityController', 'abilityActivitiesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ability));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ability), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}