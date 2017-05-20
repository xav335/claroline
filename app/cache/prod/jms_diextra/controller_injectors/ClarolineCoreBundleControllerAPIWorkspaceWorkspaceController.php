<?php

namespace Claroline\CoreBundle\Controller\API\Workspace;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class WorkspaceController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-API-Workspace-WorkspaceController.php';
        $y = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\API\\Workspace\\WorkspaceController' => array('getUserWorkspacesAction' => array(0 => 'security.access.method_interceptor'), 'getWorkspacesAction' => array(0 => 'security.access.method_interceptor'), 'getWorkspaceAction' => array(0 => 'security.access.method_interceptor'), 'getWorkspaceAdditionalDatasAction' => array(0 => 'security.access.method_interceptor'), 'getNonPersonalWorkspacesAction' => array(0 => 'security.access.method_interceptor'), 'postWorkspaceUserAction' => array(0 => 'security.access.method_interceptor'), 'deleteWorkspaceAction' => array(0 => 'security.access.method_interceptor'), 'putWorkspaceAction' => array(0 => 'security.access.method_interceptor'), 'putWorkspaceOwnerAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_ea26d514856ee358ee05f2a45fa1ffa0071f4883\__CG__\Claroline\CoreBundle\Controller\API\Workspace\WorkspaceController($container->get('form.factory', 1), $container->get('claroline.persistence.object_manager', 1), $container->get('request', 1), $container->get('claroline.manager.role_manager', 1), $container->getParameter('claroline.param.default_template'), $container->get('security.token_storage', 1), $container->get('claroline.utilities.misc', 1), $container->get('claroline.manager.workspace_manager', 1));
        $instance->__CGInterception__setLoader($y);
        return $instance;
    }
}