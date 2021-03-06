<?php

namespace Claroline\CoreBundle\Controller\Administration;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class RolesController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-Administration-RolesController.php';
        $t = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\Administration\\RolesController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'toolsIndexAction' => array(0 => 'security.access.method_interceptor'), 'addRoleToToolAction' => array(0 => 'security.access.method_interceptor'), 'removeRoleFromToolAction' => array(0 => 'security.access.method_interceptor'), 'createPlatformRoleModalFormAction' => array(0 => 'security.access.method_interceptor'), 'createPlatformRoleAction' => array(0 => 'security.access.method_interceptor'), 'roleListAction' => array(0 => 'security.access.method_interceptor'), 'removeRoleAction' => array(0 => 'security.access.method_interceptor'), 'initializeRoleLimitAction' => array(0 => 'security.access.method_interceptor'), 'increaseRoleMaxUsers' => array(0 => 'security.access.method_interceptor'), 'editRoleNameAction' => array(0 => 'security.access.method_interceptor'), 'invertPersonalWorkspaceCreationAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_7661c33c07a47aecf4c3c73ff54a30c60f7a52dc\__CG__\Claroline\CoreBundle\Controller\Administration\RolesController($container->get('claroline.manager.tool_manager', 1), $container->get('claroline.manager.role_manager', 1), $container->get('form.factory', 1), $container->get('request', 1), $container->get('claroline.persistence.object_manager', 1));
        $instance->__CGInterception__setLoader($t);
        return $instance;
    }
}
