<?php

namespace Claroline\CoreBundle\Controller\API\User;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class UserController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CoreBundle\Controller\API\User\UserController($container->get('claroline.common.authentication_manager', 1), $container->get('claroline.event.event_dispatcher', 1), $container->get('form.factory', 1), $container->get('claroline.manager.locale_manager', 1), $container->get('request', 1), $container->get('claroline.manager.user_manager', 1), $container->get('claroline.manager.group_manager', 1), $container->get('claroline.manager.role_manager', 1), $container->get('claroline.manager.facet_manager', 1), $container->get('claroline.persistence.object_manager', 1), $container->get('claroline.manager.profile_property_manager', 1), $container->get('claroline.manager.mail_manager', 1), $container->get('claroline.manager.api_manager', 1), $container->get('claroline.manager.workspace_manager', 1));
        return $instance;
    }
}