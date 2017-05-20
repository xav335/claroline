<?php

namespace EnhancedProxy878b27ff_a232afb78673de2599888a2e581d6374bc48073b\__CG__\Claroline\CoreBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class HomeController extends \Claroline\CoreBundle\Controller\HomeController
{
    private $__CGInterception__loader;

    public function updateAction($content, $size = NULL, $type = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'updateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($content, $size, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($content, $size, $type), $interceptors);

        return $invocation->proceed();
    }

    public function typesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'typesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function saveMenuSettingsAction($menu, $login, $workspaces, $locale)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'saveMenuSettingsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($menu, $login, $workspaces, $locale));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($menu, $login, $workspaces, $locale), $interceptors);

        return $invocation->proceed();
    }

    public function reorderAction($type, $a, \Claroline\CoreBundle\Entity\Content $b = NULL, \Claroline\CoreBundle\Entity\Content $father = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'reorderAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $a, $b, $father));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $a, $b, $father), $interceptors);

        return $invocation->proceed();
    }

    public function renameContentFormAction($type)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'renameContentFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function renameContentAction($type, $name)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'renameContentAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $name), $interceptors);

        return $invocation->proceed();
    }

    public function publishTypeAction($type)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'publishTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function moveContentFormAction($currentType)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'moveContentFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($currentType));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($currentType), $interceptors);

        return $invocation->proceed();
    }

    public function moveContentAction($content, $type, $page)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'moveContentAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($content, $type, $page));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($content, $type, $page), $interceptors);

        return $invocation->proceed();
    }

    public function menuSettingsAction($content)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'menuSettingsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($content));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($content), $interceptors);

        return $invocation->proceed();
    }

    public function deletetypeAction($type)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'deletetypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction($content)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($content));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($content), $interceptors);

        return $invocation->proceed();
    }

    public function createTypeAction($name)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'createTypeAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($name));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($name), $interceptors);

        return $invocation->proceed();
    }

    public function createAction($type = NULL, $father = NULL)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'createAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type, $father));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type, $father), $interceptors);

        return $invocation->proceed();
    }

    public function contentToRegionAction($region, $content)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'contentToRegionAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($region, $content));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($region, $content), $interceptors);

        return $invocation->proceed();
    }

    public function collapseAction($content, $type)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'collapseAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($content, $type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($content, $type), $interceptors);

        return $invocation->proceed();
    }

    public function changeTemplateFormAction(\Claroline\CoreBundle\Entity\Home\Type $type)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'changeTemplateFormAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function changeTemplateAction(\Claroline\CoreBundle\Entity\Home\Type $type)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\HomeController', 'changeTemplateAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($type));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($type), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}