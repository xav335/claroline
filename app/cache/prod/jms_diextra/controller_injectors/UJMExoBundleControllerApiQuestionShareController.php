<?php

namespace UJM\ExoBundle\Controller\Api\Question;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ShareController__JMSInjector
{
    public static function inject($container) {
        $instance = new \UJM\ExoBundle\Controller\Api\Question\ShareController($container->get('claroline.persistence.object_manager', 1), $container->get('ujm_exo.serializer.user', 1), $container->get('ujm_exo.manager.share', 1));
        return $instance;
    }
}
