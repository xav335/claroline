<?php

namespace Claroline\FlashCardBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class DeckController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\FlashCardBundle\Controller\DeckController($container->get('claroline.flashcard.deck_manager', 1), $container->get('claroline.form_handler', 1), $container->get('security.authorization_checker', 1), $container->get('security.token_storage', 1), $container->get('serializer', 1));
        return $instance;
    }
}