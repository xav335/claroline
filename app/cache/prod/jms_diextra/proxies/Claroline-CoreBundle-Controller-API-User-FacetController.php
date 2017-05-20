<?php

namespace EnhancedProxy878b27ff_7b7bf3693ff8502172b2df7e13bea3429886e0dd\__CG__\Claroline\CoreBundle\Controller\API\User;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class FacetController extends \Claroline\CoreBundle\Controller\API\User\FacetController
{
    private $__CGInterception__loader;

    public function setFacetRolesAction(\Claroline\CoreBundle\Entity\Facet\Facet $facet, array $roles)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'setFacetRolesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($facet, $roles));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($facet, $roles), $interceptors);

        return $invocation->proceed();
    }

    public function putProfilePreferencesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'putProfilePreferencesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function putPanelRoleAction(\Claroline\CoreBundle\Entity\Facet\PanelFacet $panel)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'putPanelRoleAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($panel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($panel), $interceptors);

        return $invocation->proceed();
    }

    public function orderPanelsAction(\Claroline\CoreBundle\Entity\Facet\Facet $facet)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'orderPanelsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($facet));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($facet), $interceptors);

        return $invocation->proceed();
    }

    public function orderFieldsAction(\Claroline\CoreBundle\Entity\Facet\PanelFacet $panel)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'orderFieldsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($panel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($panel), $interceptors);

        return $invocation->proceed();
    }

    public function moveFacetUpAction(\Claroline\CoreBundle\Entity\Facet\Facet $facet)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'moveFacetUpAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($facet));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($facet), $interceptors);

        return $invocation->proceed();
    }

    public function moveFacetDownAction(\Claroline\CoreBundle\Entity\Facet\Facet $facet)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'moveFacetDownAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($facet));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($facet), $interceptors);

        return $invocation->proceed();
    }

    public function invertPropertiesEditableAction(\Claroline\CoreBundle\Entity\ProfileProperty $property)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'invertPropertiesEditableAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($property));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($property), $interceptors);

        return $invocation->proceed();
    }

    public function getProfilePreferencesAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'getProfilePreferencesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function getFacetsAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'getFacetsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editFieldFacetAction(\Claroline\CoreBundle\Entity\Facet\FieldFacet $field)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'editFieldFacetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($field));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($field), $interceptors);

        return $invocation->proceed();
    }

    public function editFacetPanelAction(\Claroline\CoreBundle\Entity\Facet\PanelFacet $panel)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'editFacetPanelAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($panel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($panel), $interceptors);

        return $invocation->proceed();
    }

    public function editFacetAction(\Claroline\CoreBundle\Entity\Facet\Facet $facet)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'editFacetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($facet));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($facet), $interceptors);

        return $invocation->proceed();
    }

    public function deletePanelFacetAction(\Claroline\CoreBundle\Entity\Facet\PanelFacet $panel)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'deletePanelFacetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($panel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($panel), $interceptors);

        return $invocation->proceed();
    }

    public function deleteFieldOptionsAction(\Claroline\CoreBundle\Entity\Facet\FieldFacetChoice $choice)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'deleteFieldOptionsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($choice));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($choice), $interceptors);

        return $invocation->proceed();
    }

    public function deleteFieldFacetAction(\Claroline\CoreBundle\Entity\Facet\FieldFacet $field)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'deleteFieldFacetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($field));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($field), $interceptors);

        return $invocation->proceed();
    }

    public function deleteFacetAction(\Claroline\CoreBundle\Entity\Facet\Facet $facet)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'deleteFacetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($facet));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($facet), $interceptors);

        return $invocation->proceed();
    }

    public function createFieldOptionsAction(\Claroline\CoreBundle\Entity\Facet\FieldFacet $field)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'createFieldOptionsAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($field));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($field), $interceptors);

        return $invocation->proceed();
    }

    public function createFieldFacetAction(\Claroline\CoreBundle\Entity\Facet\PanelFacet $panel)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'createFieldFacetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($panel));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($panel), $interceptors);

        return $invocation->proceed();
    }

    public function createFacetPanelAction(\Claroline\CoreBundle\Entity\Facet\Facet $facet)
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'createFacetPanelAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($facet));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($facet), $interceptors);

        return $invocation->proceed();
    }

    public function createFacetAction()
    {
        $ref = new \ReflectionMethod('Claroline\\CoreBundle\\Controller\\API\\User\\FacetController', 'createFacetAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}