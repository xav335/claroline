<?php

namespace Claroline\ClacoFormBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ClacoFormWidgetController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\ClacoFormBundle\Controller\ClacoFormWidgetController($container->get('claroline.manager.claco_form_manager', 1), $container->get('form.factory', 1), $container->get('claroline.manager.organization.location_manager', 1), $container->get('request', 1), $container->get('translator', 1));
        return $instance;
    }
}