<?php

namespace Claroline\ChatBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ChatController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\ChatBundle\Controller\ChatController($container->get('security.authorization_checker', 1), $container->get('claroline.manager.chat_manager', 1), $container->get('form.factory', 1), $container->get('claroline.config.platform_config_handler', 1), $container->get('request_stack', 1), $container->get('router', 1), $container->get('security.token_storage', 1), $container->get('translator', 1));
        return $instance;
    }
}