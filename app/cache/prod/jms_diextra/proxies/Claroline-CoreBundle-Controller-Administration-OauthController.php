<?php

namespace EnhancedProxy878b27ff_f8b0809e2fb7ba271aa3aba9a2a7e01d732f0627\__CG__\Claroline\CoreBundle\Controller\Administration;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class OauthController extends \Claroline\CoreBundle\Controller\Administration\OauthController
{
    private $__CGInterception__loader;

    public function requestFriendSubmitAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'requestFriendSubmitAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function requestFriendFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'requestFriendFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function removePendingFriend(\Claroline\CoreBundle\Entity\Oauth\PendingFriend $friend)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'removePendingFriend');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($friend));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($friend), $interceptors);

        return $invocation->proceed();
    }

    public function removeFriendRequest(\Claroline\CoreBundle\Entity\Oauth\FriendRequest $friend)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'removeFriendRequest');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($friend));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($friend), $interceptors);

        return $invocation->proceed();
    }

    public function modalEditFormAction(\Claroline\CoreBundle\Entity\Oauth\Client $client)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'modalEditFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($client));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($client), $interceptors);

        return $invocation->proceed();
    }

    public function modalCreateFormAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'modalCreateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function listAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'listAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function friendAuthenticationSubmitAction(\Claroline\CoreBundle\Entity\Oauth\FriendRequest $friend)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'friendAuthenticationSubmitAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($friend));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($friend), $interceptors);

        return $invocation->proceed();
    }

    public function friendAuthenticationFormAction(\Claroline\CoreBundle\Entity\Oauth\FriendRequest $friend)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'friendAuthenticationFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($friend));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($friend), $interceptors);

        return $invocation->proceed();
    }

    public function editClientAction(\Claroline\CoreBundle\Entity\Oauth\Client $client)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'editClientAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($client));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($client), $interceptors);

        return $invocation->proceed();
    }

    public function deleteClientAction(\Claroline\CoreBundle\Entity\Oauth\Client $client)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'deleteClientAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($client));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($client), $interceptors);

        return $invocation->proceed();
    }

    public function createClientAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'createClientAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function clientsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'clientsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function acceptFriendAction(\Claroline\CoreBundle\Entity\Oauth\PendingFriend $friend)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\Administration\\OauthController', 'acceptFriendAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($friend));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($friend), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}