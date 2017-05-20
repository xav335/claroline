<?php

namespace EnhancedProxy878b27ff_3977e231ae826a49b1ea0e1da54d8c59cb984496\__CG__\Claroline\MessageBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class MessageController extends \Claroline\MessageBundle\Controller\MessageController
{
    private $__CGInterception__loader;

    public function softDeleteAction(array $messages)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'softDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($messages));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($messages), $interceptors);

        return $invocation->proceed();
    }

    public function showAction(\Claroline\CoreBundle\Entity\User $user, array $receivers, array $groups, array $workspaces, \Claroline\MessageBundle\Entity\Message $message = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'showAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $receivers, $groups, $workspaces, $message));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $receivers, $groups, $workspaces, $message), $interceptors);

        return $invocation->proceed();
    }

    public function setMailNotificationAction($isNotified, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'setMailNotificationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($isNotified, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($isNotified, $user), $interceptors);

        return $invocation->proceed();
    }

    public function sendAction(\Claroline\CoreBundle\Entity\User $sender, \Claroline\MessageBundle\Entity\Message $parent = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'sendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sender, $parent));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sender, $parent), $interceptors);

        return $invocation->proceed();
    }

    public function restoreFromTrashAction(array $messages)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'restoreFromTrashAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($messages));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($messages), $interceptors);

        return $invocation->proceed();
    }

    public function markAsReadAction(\Claroline\CoreBundle\Entity\User $user, \Claroline\MessageBundle\Entity\Message $message)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'markAsReadAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $message));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $message), $interceptors);

        return $invocation->proceed();
    }

    public function listSentAction(\Claroline\CoreBundle\Entity\User $sender, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'listSentAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($sender, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($sender, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function listRemovedAction(\Claroline\CoreBundle\Entity\User $user, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'listRemovedAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function listReceivedAction(\Claroline\CoreBundle\Entity\User $receiver, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'listReceivedAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($receiver, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($receiver, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function formForWorkspaceAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'formForWorkspaceAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function formForUserAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'formForUserAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function formForGroupAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'formForGroupAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction(array $messages)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($messages));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($messages), $interceptors);

        return $invocation->proceed();
    }

    public function contactableWorkspacesListAction(\Claroline\CoreBundle\Entity\User $user, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'contactableWorkspacesListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function contactableUsersListAction(\Claroline\CoreBundle\Entity\User $user, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'contactableUsersListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function contactableGroupsListAction(\Claroline\CoreBundle\Entity\User $user, $page, $search)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'contactableGroupsListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $page, $search));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $page, $search), $interceptors);

        return $invocation->proceed();
    }

    public function checkAccess(\Claroline\MessageBundle\Entity\Message $message, \Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\MessageBundle\\Controller\\MessageController', 'checkAccess');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($message, $user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($message, $user), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}