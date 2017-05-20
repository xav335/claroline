<?php

namespace EnhancedProxy878b27ff_b39bbb6938d1c64d6a98ac3e63fdc1c21978fb02\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class WorkspaceController extends \Claroline\CoreBundle\Controller\WorkspaceController
{
    private $__CGInterception__loader;

    public function openAction(\Claroline\CoreBundle\Entity\Workspace\Workspace $workspace)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\WorkspaceController', 'openAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($workspace));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($workspace), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}