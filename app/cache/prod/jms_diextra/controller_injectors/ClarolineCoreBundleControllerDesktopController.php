<?php

namespace Claroline\CoreBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class DesktopController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-DesktopController.php';
        $c = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\DesktopController' => array('renderToolListAction' => array(0 => 'security.access.method_interceptor'), 'openToolAction' => array(0 => 'security.access.method_interceptor'), 'openAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_6eb2fa14bce3f2a13bba152832de15b89404cd22\__CG__\Claroline\CoreBundle\Controller\DesktopController($container->get('event_dispatcher', 1), $container->get('router', 1), $container->get('session', 1), $container->get('claroline.manager.tool_manager', 1));
        $instance->__CGInterception__setLoader($c);
        return $instance;
    }
}