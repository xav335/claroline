<?php

namespace Icap\BadgeBundle\Controller\Tool;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class WorkspaceController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Icap\BadgeBundle\Controller\Tool\WorkspaceController($container->get('claroline.manager.user_manager', 1), $container->get('claroline.rule.validator', 1), $container->get('doctrine.orm.entity_manager', 1), $container->get('icap_badge.manager.badge', 1));
        return $instance;
    }
}