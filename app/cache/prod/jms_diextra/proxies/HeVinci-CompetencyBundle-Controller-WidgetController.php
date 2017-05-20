<?php

namespace EnhancedProxy878b27ff_807cd56e3f24f6f55e8b794d8f05e17562b67800\__CG__\HeVinci\CompetencyBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class WidgetController extends \HeVinci\CompetencyBundle\Controller\WidgetController
{
    private $__CGInterception__loader;

    public function objectivesAction(\Claroline\CoreBundle\Entity\User $user)
    {
        $ref = new \ReflectionMethod('HeVinci\\CompetencyBundle\\Controller\\WidgetController', 'objectivesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($user));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($user), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}