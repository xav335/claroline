<?php

namespace Claroline\ScormBundle\Controller\API;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ScormController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\ScormBundle\Controller\API\ScormController($container->get('security.authorization_checker', 1), $container->get('claroline.manager.resource_manager', 1), $container->get('claroline.manager.scorm_manager', 1), $container->get('jms_serializer', 1));
        return $instance;
    }
}
