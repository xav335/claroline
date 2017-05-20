<?php

namespace EnhancedProxy878b27ff_2eb8cf8385b41b5d3d104e70879c6eaf7e6c1095\__CG__\Claroline\CursusBundle\Controller\API;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdminManagementController extends \Claroline\CursusBundle\Controller\API\AdminManagementController
{
    private $__CGInterception__loader;

    public function resetSessionsDefaultAction(\Claroline\CursusBundle\Entity\Course $course, \Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'resetSessionsDefaultAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course, $session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course, $session), $interceptors);

        return $invocation->proceed();
    }

    public function putSessionEventEditionAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'putSessionEventEditionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent), $interceptors);

        return $invocation->proceed();
    }

    public function putSessionEditionAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'putSessionEditionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function putLocationEditAction(\Claroline\CoreBundle\Entity\Organization\Location $location)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'putLocationEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($location));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($location), $interceptors);

        return $invocation->proceed();
    }

    public function putDocumentModelEditAction(\Claroline\CursusBundle\Entity\DocumentModel $documentModel)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'putDocumentModelEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($documentModel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($documentModel), $interceptors);

        return $invocation->proceed();
    }

    public function putCursusEditionAction(\Claroline\CursusBundle\Entity\Cursus $cursus)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'putCursusEditionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($cursus));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($cursus), $interceptors);

        return $invocation->proceed();
    }

    public function putCourseEditionAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'putCourseEditionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function postSessionUserRegisterAction(\Claroline\CursusBundle\Entity\CourseSession $session, \Claroline\CoreBundle\Entity\User $user, $userType = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postSessionUserRegisterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $user, $userType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $user, $userType), $interceptors);

        return $invocation->proceed();
    }

    public function postSessionMessageSendAction(\Claroline\CoreBundle\Entity\User $user, \Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postSessionMessageSendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $session), $interceptors);

        return $invocation->proceed();
    }

    public function postSessionGroupRegisterAction(\Claroline\CursusBundle\Entity\CourseSession $session, \Claroline\CoreBundle\Entity\Group $group, $groupType = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postSessionGroupRegisterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $group, $groupType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $group, $groupType), $interceptors);

        return $invocation->proceed();
    }

    public function postSessionEventUserRegisterAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postSessionEventUserRegisterAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent, $user), $interceptors);

        return $invocation->proceed();
    }

    public function postSessionEventRepeatAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postSessionEventRepeatAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent), $interceptors);

        return $invocation->proceed();
    }

    public function postSessionEventCreateAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postSessionEventCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function postSessionCreateAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postSessionCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function postReservationResourceTagAction(\FormaLibre\ReservationBundle\Entity\Resource $resource)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postReservationResourceTagAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resource));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resource), $interceptors);

        return $invocation->proceed();
    }

    public function postLocationCreateAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postLocationCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function postGeneralParametersAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postGeneralParametersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function postDocumentSendAction(\Claroline\CursusBundle\Entity\DocumentModel $documentModel, $sourceId)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postDocumentSendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($documentModel, $sourceId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($documentModel, $sourceId), $interceptors);

        return $invocation->proceed();
    }

    public function postDocumentModelCreateAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postDocumentModelCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function postDocumentForUserSendAction(\Claroline\CursusBundle\Entity\DocumentModel $documentModel, \Claroline\CoreBundle\Entity\User $user, $sourceId)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postDocumentForUserSendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($documentModel, $user, $sourceId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($documentModel, $user, $sourceId), $interceptors);

        return $invocation->proceed();
    }

    public function postCursusImportAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postCursusImportAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function postCursusCreationAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postCursusCreationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function postCursusCourseCreateAction(\Claroline\CursusBundle\Entity\Cursus $cursus)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postCursusCourseCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($cursus));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($cursus), $interceptors);

        return $invocation->proceed();
    }

    public function postCursusCourseAddAction(\Claroline\CursusBundle\Entity\Cursus $cursus, \Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postCursusCourseAddAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($cursus, $course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($cursus, $course), $interceptors);

        return $invocation->proceed();
    }

    public function postCursusChildCreationAction(\Claroline\CursusBundle\Entity\Cursus $parent)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postCursusChildCreationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($parent), $interceptors);

        return $invocation->proceed();
    }

    public function postCoursesImportAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postCoursesImportAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function postCourseCreateAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'postCourseCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getWorkspacesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getWorkspacesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getWorkspaceModelsAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getWorkspaceModelsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function getValidatorsRolesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getValidatorsRolesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionUsersBySessionAndTypeAction(\Claroline\CursusBundle\Entity\CourseSession $session, $type)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionUsersBySessionAndTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $type), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionUsersBySessionAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionUsersBySessionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionUnregisteredUsersAction(\Claroline\CursusBundle\Entity\CourseSession $session, $userType = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionUnregisteredUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $userType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $userType), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionUnregisteredGroupsAction(\Claroline\CursusBundle\Entity\CourseSession $session, $groupType = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionUnregisteredGroupsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $groupType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $groupType), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionPendingUsersBySessionAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionPendingUsersBySessionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionGroupsBySessionAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionGroupsBySessionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionEventUsersBySessionEventAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionEventUsersBySessionEventAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionEventUnregisteredUsersAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionEventUnregisteredUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionEventByIdAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionEventByIdAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent), $interceptors);

        return $invocation->proceed();
    }

    public function getSessionByIdAction(\Claroline\CursusBundle\Entity\CourseSession $session)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getSessionByIdAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session), $interceptors);

        return $invocation->proceed();
    }

    public function getReservationResourcesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getReservationResourcesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getPopulatedDocumentModelsByTypeForUserAction(\Claroline\CoreBundle\Entity\User $user, $type, $sourceId)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getPopulatedDocumentModelsByTypeForUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $type, $sourceId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $type, $sourceId), $interceptors);

        return $invocation->proceed();
    }

    public function getPopulatedDocumentModelsByTypeAction($type, $sourceId)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getPopulatedDocumentModelsByTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $sourceId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $sourceId), $interceptors);

        return $invocation->proceed();
    }

    public function getLocationsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getLocationsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getGeneralParametersAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getGeneralParametersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getDocumentModelsByTypeAction($type)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getDocumentModelsByTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function getDocumentModelsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getDocumentModelsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getDocumentModelAction(\Claroline\CursusBundle\Entity\DocumentModel $documentModel)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getDocumentModelAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($documentModel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($documentModel), $interceptors);

        return $invocation->proceed();
    }

    public function getCursusReservationResourcesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getCursusReservationResourcesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getCursusByCodeWithoutIdAction($code, $id = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getCursusByCodeWithoutIdAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($code, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($code, $id), $interceptors);

        return $invocation->proceed();
    }

    public function getCourseByIdAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getCourseByIdAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function getCourseByCodeWithoutIdAction($code, $id = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'getCourseByCodeWithoutIdAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($code, $id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($code, $id), $interceptors);

        return $invocation->proceed();
    }

    public function exportCsvSessionUsersAction(\Claroline\CursusBundle\Entity\CourseSession $session, $type)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'exportCsvSessionUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $type), $interceptors);

        return $invocation->proceed();
    }

    public function exportCsvSessionEventUsersAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent, $type)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'exportCsvSessionEventUsersAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent, $type), $interceptors);

        return $invocation->proceed();
    }

    public function deleteSessionUserAction(\Claroline\CursusBundle\Entity\CourseSessionUser $sessionUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteSessionUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionUser), $interceptors);

        return $invocation->proceed();
    }

    public function deleteSessionRegistrationQueueAction(\Claroline\CursusBundle\Entity\CourseSessionRegistrationQueue $queue)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteSessionRegistrationQueueAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($queue));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($queue), $interceptors);

        return $invocation->proceed();
    }

    public function deleteSessionGroupAction(\Claroline\CursusBundle\Entity\CourseSessionGroup $sessionGroup)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteSessionGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionGroup));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionGroup), $interceptors);

        return $invocation->proceed();
    }

    public function deleteSessionEventUserAction(\Claroline\CursusBundle\Entity\SessionEventUser $sessionEventUser)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteSessionEventUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEventUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEventUser), $interceptors);

        return $invocation->proceed();
    }

    public function deleteSessionEventAction(\Claroline\CursusBundle\Entity\SessionEvent $sessionEvent)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteSessionEventAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sessionEvent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sessionEvent), $interceptors);

        return $invocation->proceed();
    }

    public function deleteSessionAction(\Claroline\CursusBundle\Entity\CourseSession $session, $mode = 0)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteSessionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($session, $mode));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($session, $mode), $interceptors);

        return $invocation->proceed();
    }

    public function deleteReservationResourceTagAction(\FormaLibre\ReservationBundle\Entity\Resource $resource)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteReservationResourceTagAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($resource));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($resource), $interceptors);

        return $invocation->proceed();
    }

    public function deleteLocationAction(\Claroline\CoreBundle\Entity\Organization\Location $location)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteLocationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($location));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($location), $interceptors);

        return $invocation->proceed();
    }

    public function deleteDocumentModelAction(\Claroline\CursusBundle\Entity\DocumentModel $documentModel)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteDocumentModelAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($documentModel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($documentModel), $interceptors);

        return $invocation->proceed();
    }

    public function deleteCursusAction(\Claroline\CursusBundle\Entity\Cursus $cursus)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteCursusAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($cursus));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($cursus), $interceptors);

        return $invocation->proceed();
    }

    public function deleteCourseAction(\Claroline\CursusBundle\Entity\Course $course)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'deleteCourseAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($course));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($course), $interceptors);

        return $invocation->proceed();
    }

    public function acceptSessionRegistrationQueueAction(\Claroline\CursusBundle\Entity\CourseSessionRegistrationQueue $queue)
    {
        $ref = new \ReflectionMethod('Claroline\\CursusBundle\\Controller\\API\\AdminManagementController', 'acceptSessionRegistrationQueueAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($queue));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($queue), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}