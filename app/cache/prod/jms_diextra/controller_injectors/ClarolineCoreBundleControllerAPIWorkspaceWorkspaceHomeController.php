<?php

namespace Claroline\CoreBundle\Controller\API\Workspace;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class WorkspaceHomeController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CoreBundle\Controller\API\Workspace\WorkspaceHomeController($container->get('claroline.manager.api_manager', 1), $container->get('security.authorization_checker', 1), $container->get('event_dispatcher', 1), $container->get('claroline.manager.home_tab_manager', 1), $container->get('claroline.manager.plugin_manager', 1), $container->get('request', 1), $container->get('jms_serializer', 1), $container->get('security.token_storage', 1), $container->get('claroline.security.utilities', 1), $container->get('claroline.manager.widget_manager', 1));
        return $instance;
    }
}
