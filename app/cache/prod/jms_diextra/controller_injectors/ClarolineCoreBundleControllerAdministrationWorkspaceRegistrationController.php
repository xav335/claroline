<?php

namespace Claroline\CoreBundle\Controller\Administration;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class WorkspaceRegistrationController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-Administration-WorkspaceRegistrationController.php';
        $m = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\Administration\\WorkspaceRegistrationController' => array('registrationManagementAction' => array(0 => 'security.access.method_interceptor'), 'registrationManagementUserListAction' => array(0 => 'security.access.method_interceptor'), 'registrationManagementGroupListAction' => array(0 => 'security.access.method_interceptor'), 'userListPagerAction' => array(0 => 'security.access.method_interceptor'), 'groupListPagerAction' => array(0 => 'security.access.method_interceptor'), 'subscribeMultipleUsersToMultipleWorkspacesAction' => array(0 => 'security.access.method_interceptor'), 'subscribeMultipleGroupsToMultipleWorkspacesAction' => array(0 => 'security.access.method_interceptor'), 'subscribeMultipleUsersToOneWorkspaceAction' => array(0 => 'security.access.method_interceptor'), 'subscribeMultipleGroupsToOneWorkspaceAction' => array(0 => 'security.access.method_interceptor'), 'workspaceUsersUnregistrationManagementAction' => array(0 => 'security.access.method_interceptor'), 'workspaceGroupsUnregistrationManagementAction' => array(0 => 'security.access.method_interceptor'), 'unsubscribeMultipleUsersFromWorkspaceAction' => array(0 => 'security.access.method_interceptor'), 'unsubscribeMultipleGroupsFromWorkspaceAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_0b688822bc8b2f2808e8420a64d53b6d0ab77f61\__CG__\Claroline\CoreBundle\Controller\Administration\WorkspaceRegistrationController($container->get('claroline.manager.group_manager', 1), $container->get('claroline.manager.role_manager', 1), $container->get('session', 1), $container->get('translator', 1), $container->get('claroline.manager.user_manager', 1), $container->get('claroline.manager.workspace_manager', 1), $container->get('claroline.manager.workspace_tag_manager', 1));
        $instance->__CGInterception__setLoader($m);
        return $instance;
    }
}