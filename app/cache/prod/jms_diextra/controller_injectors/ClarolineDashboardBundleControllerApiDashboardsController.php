<?php

namespace Claroline\DashboardBundle\Controller\Api;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class DashboardsController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\DashboardBundle\Controller\Api\DashboardsController($container->get('security.authorization_checker', 1), $container->get('request', 1), $container->get('claroline.manager.dashboard_manager', 1), $container->get('security.token_storage', 1));
        return $instance;
    }
}