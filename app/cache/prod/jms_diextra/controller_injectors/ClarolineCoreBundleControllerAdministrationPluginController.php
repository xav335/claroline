<?php

namespace Claroline\CoreBundle\Controller\Administration;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class PluginController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-Administration-PluginController.php';
        $i = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\Administration\\PluginController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'pluginParametersAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_eb26a489d70f774393a58076b9cee7b38d0c5e86\__CG__\Claroline\CoreBundle\Controller\Administration\PluginController($container->get('claroline.event.event_dispatcher', 1));
        $instance->__CGInterception__setLoader($i);
        return $instance;
    }
}