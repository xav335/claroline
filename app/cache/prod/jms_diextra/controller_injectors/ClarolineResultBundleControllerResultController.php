<?php

namespace Claroline\ResultBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ResultController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\ResultBundle\Controller\ResultController($container->get('claroline.result.result_manager', 1), $container->get('claroline.form_handler', 1), $container->get('security.authorization_checker', 1));
        return $instance;
    }
}
