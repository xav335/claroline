<?php

namespace HeVinci\CompetencyBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class ApiController__JMSInjector
{
    public static function inject($container) {
        $instance = new \HeVinci\CompetencyBundle\Controller\ApiController($container->get('hevinci.competency.competency_manager', 1), $container->get('hevinci.competency.transfer_validator', 1));
        return $instance;
    }
}