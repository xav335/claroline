<?php

namespace Claroline\CoreBundle\Controller\Tool;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class WorkspaceParametersController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CoreBundle\Controller\Tool\WorkspaceParametersController($container->get('claroline.manager.workspace_manager', 1), $container->get('claroline.manager.workspace_tag_manager', 1), $container->get('claroline.manager.resource_manager', 1), $container->get('claroline.manager.transfer_manager', 1), $container->get('security.token_storage', 1), $container->get('security.authorization_checker', 1), $container->get('claroline.event.event_dispatcher', 1), $container->get('form.factory', 1), $container->get('router', 1), $container->get('request', 1), $container->get('claroline.manager.locale_manager', 1), $container->get('claroline.manager.user_manager', 1), $container->get('claroline.manager.group_manager', 1), $container->get('claroline.common.terms_of_service_manager', 1), $container->get('claroline.utilities.misc', 1), $container->get('claroline.manager.tool_manager', 1));
        return $instance;
    }
}
