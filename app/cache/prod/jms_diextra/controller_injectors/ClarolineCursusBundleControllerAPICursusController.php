<?php

namespace Claroline\CursusBundle\Controller\API;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class CursusController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CursusBundle\Controller\API\CursusController($container->get('claroline.manager.cursus_manager', 1), $container->get('claroline.manager.facet_manager', 1), $container->get('form.factory', 1), $container->get('claroline.config.platform_config_handler', 1), $container->get('request_stack', 1));
        return $instance;
    }
}
