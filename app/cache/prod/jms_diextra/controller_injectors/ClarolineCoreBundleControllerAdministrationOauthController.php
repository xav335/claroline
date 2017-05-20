<?php

namespace Claroline\CoreBundle\Controller\Administration;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class OauthController__JMSInjector
{
    public static function inject($container) {
        require_once '/var/www/claroline/app/cache/prod/jms_diextra/proxies/Claroline-CoreBundle-Controller-Administration-OauthController.php';
        $j = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('Claroline\\CoreBundle\\Controller\\Administration\\OauthController' => array('listAction' => array(0 => 'security.access.method_interceptor'), 'clientsAction' => array(0 => 'security.access.method_interceptor'), 'modalCreateFormAction' => array(0 => 'security.access.method_interceptor'), 'modalEditFormAction' => array(0 => 'security.access.method_interceptor'), 'createClientAction' => array(0 => 'security.access.method_interceptor'), 'editClientAction' => array(0 => 'security.access.method_interceptor'), 'deleteClientAction' => array(0 => 'security.access.method_interceptor'), 'requestFriendFormAction' => array(0 => 'security.access.method_interceptor'), 'requestFriendSubmitAction' => array(0 => 'security.access.method_interceptor'), 'removeFriendRequest' => array(0 => 'security.access.method_interceptor'), 'removePendingFriend' => array(0 => 'security.access.method_interceptor'), 'acceptFriendAction' => array(0 => 'security.access.method_interceptor'), 'friendAuthenticationFormAction' => array(0 => 'security.access.method_interceptor'), 'friendAuthenticationSubmitAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy878b27ff_f8b0809e2fb7ba271aa3aba9a2a7e01d732f0627\__CG__\Claroline\CoreBundle\Controller\Administration\OauthController($container->get('claroline.manager.oauth_manager', 1), $container->get('request', 1), $container->get('translator', 1));
        $instance->__CGInterception__setLoader($j);
        return $instance;
    }
}