<?php

namespace UJM\ExoBundle\Controller\Api\Question;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class QuestionController__JMSInjector
{
    public static function inject($container) {
        $instance = new \UJM\ExoBundle\Controller\Api\Question\QuestionController($container->get('ujm_exo.manager.question', 1));
        return $instance;
    }
}
