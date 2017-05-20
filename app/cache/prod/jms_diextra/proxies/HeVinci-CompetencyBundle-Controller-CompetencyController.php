<?php

namespace EnhancedProxy878b27ff_414434339d0d63f1d1baf509b4c55fd1db594aeb\__CG__\HeVinci\CompetencyBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class CompetencyController extends \HeVinci\CompetencyBundle\Controller\CompetencyController
{
    private $__CGInterception__loader;

    public function suggestAbilityAction(\HeVinci\CompetencyBundle\Entity\Competency $parent, $query)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'suggestAbilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($parent, $query));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($parent, $query), $interceptors);

        return $invocation->proceed();
    }

    public function newSubCompetencyAction(\HeVinci\CompetencyBundle\Entity\Competency $parent)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'newSubCompetencyAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($parent), $interceptors);

        return $invocation->proceed();
    }

    public function newFrameworkAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'newFrameworkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function newAbilityAction(\HeVinci\CompetencyBundle\Entity\Competency $parent)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'newAbilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($parent), $interceptors);

        return $invocation->proceed();
    }

    public function importFrameworkFormAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'importFrameworkFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function importFrameworkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'importFrameworkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function frameworksAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'frameworksAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function frameworkEditionFormAction(\HeVinci\CompetencyBundle\Entity\Competency $framework)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'frameworkEditionFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($framework));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($framework), $interceptors);

        return $invocation->proceed();
    }

    public function frameworkAction(\HeVinci\CompetencyBundle\Entity\Competency $framework)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'frameworkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($framework));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($framework), $interceptors);

        return $invocation->proceed();
    }

    public function exportFrameworkAction(\HeVinci\CompetencyBundle\Entity\Competency $framework)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'exportFrameworkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($framework));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($framework), $interceptors);

        return $invocation->proceed();
    }

    public function editFrameworkAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Competency $framework)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'editFrameworkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $framework));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $framework), $interceptors);

        return $invocation->proceed();
    }

    public function editCompetencyAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Competency $competency)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'editCompetencyAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $competency));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $competency), $interceptors);

        return $invocation->proceed();
    }

    public function editAbilityAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Competency $parent, \HeVinci\CompetencyBundle\Entity\Ability $ability)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'editAbilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $parent, $ability));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $parent, $ability), $interceptors);

        return $invocation->proceed();
    }

    public function deleteCompetencyAction(\HeVinci\CompetencyBundle\Entity\Competency $competency)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'deleteCompetencyAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($competency));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($competency), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAbilityAction(\HeVinci\CompetencyBundle\Entity\Competency $parent, \HeVinci\CompetencyBundle\Entity\Ability $ability)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'deleteAbilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($parent, $ability));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($parent, $ability), $interceptors);

        return $invocation->proceed();
    }

    public function createSubCompetencyAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Competency $parent)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'createSubCompetencyAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $parent), $interceptors);

        return $invocation->proceed();
    }

    public function createFrameworkAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'createFrameworkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function createAbilityAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Competency $parent)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'createAbilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $parent), $interceptors);

        return $invocation->proceed();
    }

    public function competencyAction(\HeVinci\CompetencyBundle\Entity\Competency $competency)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'competencyAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($competency));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($competency), $interceptors);

        return $invocation->proceed();
    }

    public function addAbilityFormAction(\HeVinci\CompetencyBundle\Entity\Competency $parent)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'addAbilityFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($parent), $interceptors);

        return $invocation->proceed();
    }

    public function addAbilityAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Competency $parent)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'addAbilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $parent), $interceptors);

        return $invocation->proceed();
    }

    public function activitiesAction(\HeVinci\CompetencyBundle\Entity\Competency $framework)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'activitiesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($framework));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($framework), $interceptors);

        return $invocation->proceed();
    }

    public function abilityAction(\HeVinci\CompetencyBundle\Entity\Competency $parent, \HeVinci\CompetencyBundle\Entity\Ability $ability)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\CompetencyController', 'abilityAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($parent, $ability));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($parent, $ability), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}