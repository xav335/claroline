<?php

namespace EnhancedProxy878b27ff_43d217d3f6be3450f065d2cf11f0a9bbfead8c0d\__CG__\FormaLibre\SupportBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdminSupportController extends \FormaLibre\SupportBundle\Controller\AdminSupportController
{
    private $__CGInterception__loader;

    public function pluginConfigureFormAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'pluginConfigureFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function pluginConfigureAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'pluginConfigureAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketTypeChangeFormAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketTypeChangeFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketTypeChangeAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketTypeChangeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketOpenInterventionsAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketOpenInterventionsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketOpenCommentsAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketOpenCommentsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketOpenAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketOpenAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketManagementInfoAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketManagementInfoAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionsViewAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionsViewAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionStopAction(\FormaLibre\SupportBundle\Entity\Intervention $intervention)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionStopAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($intervention));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($intervention), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionStatusEditFormAction(\FormaLibre\SupportBundle\Entity\Intervention $intervention)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionStatusEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($intervention));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($intervention), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionStatusEditAction(\FormaLibre\SupportBundle\Entity\Intervention $intervention)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionStatusEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($intervention));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($intervention), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionStartAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionStartAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionEditFormAction(\FormaLibre\SupportBundle\Entity\Intervention $intervention)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($intervention));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($intervention), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionEditAction(\FormaLibre\SupportBundle\Entity\Intervention $intervention)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($intervention));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($intervention), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionDeleteAction(\FormaLibre\SupportBundle\Entity\Intervention $intervention)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($intervention));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($intervention), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionCreateFormAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketInterventionCreateAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketInterventionCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketDeleteAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketCommentsViewAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketCommentsViewAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketCommentEditFormAction(\FormaLibre\SupportBundle\Entity\Comment $comment)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketCommentEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($comment));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($comment), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketCommentEditAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Comment $comment)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketCommentEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $comment));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $comment), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketCommentDeleteAction(\FormaLibre\SupportBundle\Entity\Comment $comment)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketCommentDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($comment));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($comment), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketCommentCreateFormAction(\FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketCommentCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminTicketCommentCreateAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminTicketCommentCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $ticket), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportTypeManagementAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportTypeManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportTypeEditFormAction(\FormaLibre\SupportBundle\Entity\Type $type)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportTypeEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportTypeEditAction(\FormaLibre\SupportBundle\Entity\Type $type)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportTypeEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportTypeDeleteAction(\FormaLibre\SupportBundle\Entity\Type $type)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportTypeDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportTypeCreateFormAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportTypeCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportTypeCreateAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportTypeCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportTabsAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Type $type, $supportName)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportTabsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $type, $supportName));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $type, $supportName), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportStatusReorderAction(\FormaLibre\SupportBundle\Entity\Status $status, $nextStatusId)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportStatusReorderAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($status, $nextStatusId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($status, $nextStatusId), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportStatusManagementAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportStatusManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportStatusEditFormAction(\FormaLibre\SupportBundle\Entity\Status $status)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportStatusEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($status));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($status), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportStatusEditAction(\FormaLibre\SupportBundle\Entity\Status $status)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportStatusEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($status));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($status), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportStatusDeleteAction(\FormaLibre\SupportBundle\Entity\Status $status)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportStatusDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($status));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($status), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportStatusCreateFormAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportStatusCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportStatusCreateAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportStatusCreateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportNewAction(\FormaLibre\SupportBundle\Entity\Type $type, $search = '', $page = 1, $max = 50, $orderedBy = 'creationDate', $order = 'DESC')
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportNewAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportMyTicketsAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Type $type, $search = '', $page = 1, $max = 50, $orderedBy = 'creationDate', $order = 'DESC')
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportMyTicketsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $type, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $type, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportLevelAction(\FormaLibre\SupportBundle\Entity\Type $type, $level, $search = '', $page = 1, $max = 50, $orderedBy = 'creationDate', $order = 'DESC')
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportLevelAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $level, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $level, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportIndexAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportIndexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportContactsManagementAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportContactsManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportContactsAddAction($contactIds)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportContactsAddAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($contactIds));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($contactIds), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportContactRemoveAction($contactId)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportContactRemoveAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($contactId));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($contactId), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportConfigurationMenuAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportConfigurationMenuAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminSupportArchivesAction(\FormaLibre\SupportBundle\Entity\Type $type, $search = '', $page = 1, $max = 50, $orderedBy = 'creationDate', $order = 'DESC')
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminSupportArchivesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function adminNewTicketOpenAction(\Claroline\CoreBundle\Entity\User $authenticatedUser, \FormaLibre\SupportBundle\Entity\Ticket $ticket)
    {
        $ref = new \ReflectionMethod('FormaLibre\\SupportBundle\\Controller\\AdminSupportController', 'adminNewTicketOpenAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($authenticatedUser, $ticket));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($authenticatedUser, $ticket), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}