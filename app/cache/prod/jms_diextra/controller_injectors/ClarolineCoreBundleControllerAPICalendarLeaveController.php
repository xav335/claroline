<?php

namespace Claroline\CoreBundle\Controller\API\Calendar;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class LeaveController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CoreBundle\Controller\API\Calendar\LeaveController($container->get('form.factory', 1), $container->get('claroline.manager.calendar.leave_manager', 1), $container->get('claroline.manager.api_manager', 1), $container->get('claroline.persistence.object_manager', 1), $container->get('request', 1));
        return $instance;
    }
}