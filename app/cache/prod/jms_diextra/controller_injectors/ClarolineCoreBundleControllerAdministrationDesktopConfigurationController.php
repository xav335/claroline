<?php

namespace Claroline\CoreBundle\Controller\Administration;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class DesktopConfigurationController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-Administration-DesktopConfigurationController.php';
        $k = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\Administration\\DesktopConfigurationController' => array('adminDesktopConfigMenuAction' => array(0 => 'security.access.method_interceptor'), 'adminDesktopConfigureToolAction' => array(0 => 'security.access.method_interceptor'), 'toggleVisibility' => array(0 => 'security.access.method_interceptor'), 'toggleLock' => array(0 => 'security.access.method_interceptor'), 'updateOrderedToolOrderAction' => array(0 => 'security.access.method_interceptor'), 'adminDesktopHomeLockManagementAction' => array(0 => 'security.access.method_interceptor'), 'adminDesktopHomeLockChangeAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_91a4808bc4330f47b460e2960722f0c6d3fab15e\__CG__\Claroline\CoreBundle\Controller\Administration\DesktopConfigurationController($container->get('claroline.manager.role_manager', 1), $container->get('claroline.manager.tool_manager', 1));
        $instance->__CGInterception__setLoader($k);
        return $instance;
    }
}
