<?php

namespace Claroline\CoreBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class FileController__JMSInjector
{
    public static function inject($container) {
        $instance = new \Claroline\CoreBundle\Controller\FileController($container->get('security.authorization_checker', 1), $container->getParameter('claroline.param.files_directory'), $container->get('claroline.manager.file_manager', 1), $container->get('form.factory', 1), $container->get('claroline.twig.home_extension', 1), $container->get('claroline.utilities.mime_type_guesser', 1), $container->get('request', 1), $container->get('claroline.manager.resource_manager', 1), $container->get('claroline.manager.role_manager', 1), $container->get('session', 1), $container->get('security.token_storage', 1), $container->get('translator', 1), $container->get('claroline.utilities.misc', 1));
        return $instance;
    }
}