<?php

namespace Claroline\CoreBundle\Controller\Widget;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ResourcesWidgetController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CoreBundle\Controller\Widget\ResourcesWidgetController($container->get('form.factory', 1), $container->get('request_stack', 1), $container->get('claroline.manager.resource_manager', 1), $container->get('claroline.manager.resources_widget_manager', 1), $container->get('translator', 1));
        return $instance;
    }
}
