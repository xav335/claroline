<?php

namespace EnhancedProxy878b27ff_87b1494ce2a477eac4a04d3a1d2c0daa9fcd73f3\__CG__\Claroline\TagBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdminTagController extends \Claroline\TagBundle\Controller\AdminTagController
{
    private $__CGInterception__loader;

    public function adminTagsManagementAction()
    {
        $ref = new \ReflectionMethod('Claroline\\TagBundle\\Controller\\AdminTagController', 'adminTagsManagementAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminTagsDisplayAction($search = '', $orderedBy = 'name', $order = 'ASC', $page = 1, $max = 50)
    {
        $ref = new \ReflectionMethod('Claroline\\TagBundle\\Controller\\AdminTagController', 'adminTagsDisplayAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($search, $orderedBy, $order, $page, $max));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($search, $orderedBy, $order, $page, $max), $interceptors);

        return $invocation->proceed();
    }

    public function adminTaggedObjectDeleteAction(\Claroline\TagBundle\Entity\TaggedObject $taggedObject)
    {
        $ref = new \ReflectionMethod('Claroline\\TagBundle\\Controller\\AdminTagController', 'adminTaggedObjectDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($taggedObject));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($taggedObject), $interceptors);

        return $invocation->proceed();
    }

    public function adminTagDeleteAction(\Claroline\TagBundle\Entity\Tag $tag)
    {
        $ref = new \ReflectionMethod('Claroline\\TagBundle\\Controller\\AdminTagController', 'adminTagDeleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($tag));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($tag), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}