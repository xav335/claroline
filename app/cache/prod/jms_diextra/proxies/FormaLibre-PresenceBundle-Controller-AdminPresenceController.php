<?php

namespace EnhancedProxy878b27ff_2e4a250a4d7b750338bf3e8341113b621eb52124\__CG__\FormaLibre\PresenceBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AdminPresenceController extends \FormaLibre\PresenceBundle\Controller\AdminPresenceController
{
    private $__CGInterception__loader;

    public function StatussupprimerAction(\FormaLibre\PresenceBundle\Entity\Status $theStatus)
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'StatussupprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($theStatus));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($theStatus), $interceptors);

        return $invocation->proceed();
    }

    public function StatusModifAction(\FormaLibre\PresenceBundle\Entity\Status $theStatus)
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'StatusModifAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($theStatus));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($theStatus), $interceptors);

        return $invocation->proceed();
    }

    public function SchoolYearSupprimerAction(\FormaLibre\PresenceBundle\Entity\SchoolYear $theSchoolYear)
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'SchoolYearSupprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($theSchoolYear));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($theSchoolYear), $interceptors);

        return $invocation->proceed();
    }

    public function SchoolYearModifAction(\FormaLibre\PresenceBundle\Entity\SchoolYear $theSchoolYear)
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'SchoolYearModifAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($theSchoolYear));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($theSchoolYear), $interceptors);

        return $invocation->proceed();
    }

    public function ListingStatusByDefaultAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'ListingStatusByDefaultAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminToolIndexAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'adminToolIndexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminRightAction(\FormaLibre\PresenceBundle\Entity\PresenceRights $right, $rightValue)
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'adminRightAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($right, $rightValue));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($right, $rightValue), $interceptors);

        return $invocation->proceed();
    }

    public function adminPeriodSupprimerAction(\FormaLibre\PresenceBundle\Entity\Period $period)
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'adminPeriodSupprimerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($period));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($period), $interceptors);

        return $invocation->proceed();
    }

    public function adminModifierHoraireAction(\FormaLibre\PresenceBundle\Entity\Period $period)
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'adminModifierHoraireAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($period));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($period), $interceptors);

        return $invocation->proceed();
    }

    public function adminListingRolesAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'adminListingRolesAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminHoraireAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'adminHoraireAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function adminAddSchoolYearAction()
    {
        $ref = new \ReflectionMethod('FormaLibre\\PresenceBundle\\Controller\\AdminPresenceController', 'adminAddSchoolYearAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}