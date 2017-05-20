<?php

namespace EnhancedProxy878b27ff_68b2457b268af8771d650bc93c03694859c43616\__CG__\Claroline\CursusBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class CourseController extends \Claroline\CursusBundle\Controller\CourseController
{
    private $__CGInterception__loader;

    public function sessionEventUserUnregisterAction(\Claroline\CursusBundle\Entity\SessionEventUser $sessionEventUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'sessionEventUserUnregisterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEventUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEventUser), $interceptors);

        return $invocation->proceed();
    }

    public function retrieveRolesTranslationKeysFromWorkspaceAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'retrieveRolesTranslationKeysFromWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function cursusToolCourseIndexAction($search = '', $page = 1, $max = 50, $orderedBy = 'title', $order = 'ASC')
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'cursusToolCourseIndexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function coursesImportFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'coursesImportFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function coursesImportAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'coursesImportAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function coursesExportAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'coursesExportAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionViewManagementAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionViewManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionUserRegistrationDeclineAction(\Claroline\CursusBundle\Entity\CourseSessionRegistrationQueue $queue)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionUserRegistrationDeclineAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($queue));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($queue), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionUserRegistrationAcceptAction(\Claroline\CursusBundle\Entity\CourseSessionRegistrationQueue $queue)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionUserRegistrationAcceptAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($queue));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($queue), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionUserRegisterAction(\Claroline\CursusBundle\Entity\CourseSession $session, \Claroline\CoreBundle\Entity\User $user, $userType)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionUserRegisterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $user, $userType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $user, $userType), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionUserConfirmationMailSendAction(\Claroline\CursusBundle\Entity\CourseSession $session, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionUserConfirmationMailSendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $user), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionRegistrationUnregisteredUsersListAction(\Claroline\CursusBundle\Entity\CourseSession $session, $userType = 0, $search = '', $page = 1, $max = 50, $orderedBy = 'firstName', $order = 'ASC')
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionRegistrationUnregisteredUsersListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $userType, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $userType, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionRegistrationUnregisteredGroupsListAction(\Claroline\CursusBundle\Entity\CourseSession $session, $groupType = 0, $search = '', $page = 1, $max = 50, $orderedBy = 'name', $order = 'ASC')
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionRegistrationUnregisteredGroupsListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $groupType, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $groupType, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionGroupUnregisterAction(\Claroline\CursusBundle\Entity\CourseSessionGroup $sessionGroup)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionGroupUnregisterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionGroup));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionGroup), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionGroupRegisterAction(\Claroline\CursusBundle\Entity\CourseSession $session, \Claroline\CoreBundle\Entity\Group $group, $groupType)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionGroupRegisterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $group, $groupType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $group, $groupType), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionEditFormAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionEditAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionDeleteAction(\Claroline\CursusBundle\Entity\CourseSession $session, $mode)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $mode));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $mode), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionDefaultSwitchAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionDefaultSwitchAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionCreateFormAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionCreateAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function courseSessionConfirmationMailSendAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseSessionConfirmationMailSendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function courseQueuedUserTransferFormAction(\Claroline\CursusBundle\Entity\CourseRegistrationQueue $queue)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseQueuedUserTransferFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($queue));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($queue), $interceptors);

        return $invocation->proceed();
    }

    public function courseQueuedUserTransferAction(\Claroline\CursusBundle\Entity\CourseRegistrationQueue $queue)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseQueuedUserTransferAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($queue));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($queue), $interceptors);

        return $invocation->proceed();
    }

    public function courseManagementAction(\Claroline\CursusBundle\Entity\Course $course, $cursusId = -1)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course, $cursusId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course, $cursusId), $interceptors);

        return $invocation->proceed();
    }

    public function courseEditFormAction(\Claroline\CursusBundle\Entity\Course $course, \Claroline\CoreBundle\Entity\User $authenticatedUser, $source = 0, $cursusId = -1)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course, $authenticatedUser, $source, $cursusId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course, $authenticatedUser, $source, $cursusId), $interceptors);

        return $invocation->proceed();
    }

    public function courseEditAction(\Claroline\CursusBundle\Entity\Course $course, \Claroline\CoreBundle\Entity\User $authenticatedUser, $source = 0, $cursusId = -1)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course, $authenticatedUser, $source, $cursusId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course, $authenticatedUser, $source, $cursusId), $interceptors);

        return $invocation->proceed();
    }

    public function courseDescriptionDisplayAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseDescriptionDisplayAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function courseDeleteAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function courseCreateFormAction(\Claroline\CoreBundle\Entity\User $authenticatedUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser), $interceptors);

        return $invocation->proceed();
    }

    public function courseCreateAction(\Claroline\CoreBundle\Entity\User $authenticatedUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\CourseController', 'courseCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}