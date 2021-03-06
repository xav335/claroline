<?php

namespace Claroline\CoreBundle\Controller\API\Organization;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class OrganizationController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-API-Organization-OrganizationController.php';
        $x = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\API\\Organization\\OrganizationController' => array('postOrganizationAction' => array(0 => 'security.access.method_interceptor'), 'deleteOrganizationAction' => array(0 => 'security.access.method_interceptor'), 'getOrganizationsAction' => array(0 => 'security.access.method_interceptor'), 'getOrganizationListAction' => array(0 => 'security.access.method_interceptor'), 'getOrganizationEditFormAction' => array(0 => 'security.access.method_interceptor'), 'putOrganizationAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_45893640d157d051f37e615225100d094971407a\__CG__\Claroline\CoreBundle\Controller\API\Organization\OrganizationController($container->get('form.factory', 1), $container->get('claroline.manager.organization.organization_manager', 1), $container->get('claroline.persistence.object_manager', 1), $container->get('request', 1), $container->get('claroline.manager.api_manager', 1));
        $instance->__CGInterception__setLoader($x);
        return $instance;
    }
}
