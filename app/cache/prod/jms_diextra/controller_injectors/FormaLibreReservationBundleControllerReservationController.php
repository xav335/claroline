<?php

namespace FormaLibre\ReservationBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ReservationController__JMSInjector
{
    public static function inject($container) {
        $instance = new \FormaLibre\ReservationBundle\Controller\ReservationController($container->get('claroline.persistence.object_manager', 1), $container->get('router', 1), $container->get('request', 1), $container->get('claroline.manager.agenda_manager', 1), $container->get('formalibre.manager.reservation_manager', 1), $container->get('translator', 1), $container->get('security.token_storage', 1));
        return $instance;
    }
}
