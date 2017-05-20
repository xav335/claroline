<?php

namespace EnhancedProxy878b27ff_af7410d6fb5daabe9bd3c4c3bb1ed363f03390bd\__CG__\Claroline\TagBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class TagController extends \Claroline\TagBundle\Controller\TagController
{
    private $__CGInterception__loader;

    public function workspaceTagAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\TagBundle\\Controller\\TagController', 'workspaceTagAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function userTagAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('Claroline\\TagBundle\\Controller\\TagController', 'userTagAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function groupTagAction(\Claroline\CoreBundle\Entity\Group $group)
    {
        $ref = new \ReflectionMethod('Claroline\\TagBundle\\Controller\\TagController', 'groupTagAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($group));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($group), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}