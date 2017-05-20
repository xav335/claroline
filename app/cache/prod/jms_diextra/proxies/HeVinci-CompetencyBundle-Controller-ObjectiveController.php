<?php

namespace EnhancedProxy878b27ff_9382b7860f227ad5b11f42c8aca08f1d46d3445d\__CG__\HeVinci\CompetencyBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class ObjectiveController extends \HeVinci\CompetencyBundle\Controller\ObjectiveController
{
    private $__CGInterception__loader;

    public function usersAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'usersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function userObjectiveCompetenciesAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'userObjectiveCompetenciesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $user), $interceptors);

        return $invocation->proceed();
    }

    public function removeUserObjectiveAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'removeUserObjectiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $user), $interceptors);

        return $invocation->proceed();
    }

    public function removeGroupObjectiveAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'removeGroupObjectiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $group), $interceptors);

        return $invocation->proceed();
    }

    public function objectiveUsersAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'objectiveUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $request), $interceptors);

        return $invocation->proceed();
    }

    public function objectivesAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'objectivesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function objectiveGroupsAction(\HeVinci\CompetencyBundle\Entity\Objective $objective)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'objectiveGroupsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective), $interceptors);

        return $invocation->proceed();
    }

    public function objectiveEditionFormAction(\HeVinci\CompetencyBundle\Entity\Objective $objective)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'objectiveEditionFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective), $interceptors);

        return $invocation->proceed();
    }

    public function objectiveCompetenciesAction(\HeVinci\CompetencyBundle\Entity\Objective $objective)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'objectiveCompetenciesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective), $interceptors);

        return $invocation->proceed();
    }

    public function newObjectiveAction()
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'newObjectiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function loadUserObjectivesAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'loadUserObjectivesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function loadGroupObjectivesAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'loadGroupObjectivesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function linkCompetencyAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \HeVinci\CompetencyBundle\Entity\Competency $competency, \HeVinci\CompetencyBundle\Entity\Level $level)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'linkCompetencyAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $competency, $level));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $competency, $level), $interceptors);

        return $invocation->proceed();
    }

    public function groupUsersAction(\Claroline\CoreBundle\Entity\Group $group, \Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'groupUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group, $request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group, $request), $interceptors);

        return $invocation->proceed();
    }

    public function groupsAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'groupsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function editObjectiveAction(\Symfony\Component\HttpFoundation\Request $request, \HeVinci\CompetencyBundle\Entity\Objective $objective)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'editObjectiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request, $objective));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request, $objective), $interceptors);

        return $invocation->proceed();
    }

    public function deleteObjectiveAction(\HeVinci\CompetencyBundle\Entity\Objective $objective)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'deleteObjectiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective), $interceptors);

        return $invocation->proceed();
    }

    public function deleteCompetencyLinkAction(\HeVinci\CompetencyBundle\Entity\ObjectiveCompetency $link)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'deleteCompetencyLinkAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($link));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($link), $interceptors);

        return $invocation->proceed();
    }

    public function createObjectiveAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'createObjectiveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($request));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($request), $interceptors);

        return $invocation->proceed();
    }

    public function competencyUserHistoryAction(\HeVinci\CompetencyBundle\Entity\Competency $competency, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'competencyUserHistoryAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($competency, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($competency, $user), $interceptors);

        return $invocation->proceed();
    }

    public function assignObjectiveToUserAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'assignObjectiveToUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $user), $interceptors);

        return $invocation->proceed();
    }

    public function assignObjectiveToGroupAction(\HeVinci\CompetencyBundle\Entity\Objective $objective, \Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\ObjectiveController', 'assignObjectiveToGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($objective, $group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($objective, $group), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}