<?php

namespace EnhancedProxy878b27ff_20f0b0a23cbf3755f5e10bfaec48842cb549490a\__CG__\Claroline\ChatBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdminChatController extends \Claroline\ChatBundle\Controller\AdminChatController
{
    private $__CGInterception__loader;

    public function resetConfigurationAction()
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'resetConfigurationAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function chatUsersListAction($type = 'none')
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'chatUsersListAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function chatUsersCreateFormAction(\Claroline\CoreBundle\Entity\User $user, $username, $password)
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'chatUsersCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user, $username, $password));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user, $username, $password), $interceptors);

        return $invocation->proceed();
    }

    public function chatUserEditFormAction(\Claroline\ChatBundle\Entity\ChatUser $chatUser)
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'chatUserEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($chatUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($chatUser), $interceptors);

        return $invocation->proceed();
    }

    public function chatUserEditAction(\Claroline\ChatBundle\Entity\ChatUser $chatUser)
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'chatUserEditAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($chatUser));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($chatUser), $interceptors);

        return $invocation->proceed();
    }

    public function adminChatUsersManagementAction($show = 0, $search = '', $page = 1, $max = 50, $orderedBy = 'username', $order = 'ASC')
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'adminChatUsersManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($show, $search, $page, $max, $orderedBy, $order));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($show, $search, $page, $max, $orderedBy, $order), $interceptors);

        return $invocation->proceed();
    }

    public function adminChatManagementAction()
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'adminChatManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminChatConfigureFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'adminChatConfigureFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminChatConfigureAction()
    {
        $ref = new \ReflectionMethod('Claroline\\ChatBundle\\Controller\\AdminChatController', 'adminChatConfigureAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}