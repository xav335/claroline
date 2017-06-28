<?php

/* ClarolineCoreBundle:Notification:notification_item.html.twig */
class __TwigTemplate_9157d93d5b5c477205a5d593981ab7b84a6db984af9efe6ec7b24100032e7de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IcapNotificationBundle:Templates:notification.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 1);
        $this->blocks = array(
            'notificationText' => array($this, 'block_notificationText'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IcapNotificationBundle:Templates:notification.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["avatarUrlPrefix"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_notificationText($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if (( !twig_test_empty($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userId", array())) && $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array(), "any", false, true), "doer", array(), "any", true, true))) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_public_profile_view", array("publicUrl" => $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "userId", array()))), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array()), "doer", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array()), "doer", array()), "lastName", array())), "html", null, true);
            echo "</strong></a>
    ";
        } else {
            // line 8
            echo "        <strong>";
            echo twig_escape_filter($this->env, (isset($context["systemName"]) ? $context["systemName"] : null), "html", null, true);
            echo "</strong>
    ";
        }
        // line 10
        echo "    ";
        if ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogWorkspaceRoleChangeRightEvent::ACTION") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 11
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_role_change_right.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 11)->display($context);
            // line 12
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogRoleSubscribeEvent::ACTION_WORKSPACE_USER") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 13
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_workspace_subscribe_user.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 13)->display($context);
            // line 14
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogRoleSubscribeEvent::ACTION_WORKSPACE_GROUP") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 15
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_workspace_subscribe_group.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 15)->display($context);
            // line 16
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogRoleSubscribeEvent::ACTION_GROUP") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 17
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_subscribe_group.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 17)->display($context);
            // line 18
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogRoleSubscribeEvent::ACTION_USER") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 19
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_subscribe_user.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 19)->display($context);
            // line 20
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogResourceCreateEvent::ACTION") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 21
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_resource_creation.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 21)->display($context);
            // line 22
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogResourcePublishEvent::ACTION") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 23
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_resource_publish.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 23)->display($context);
            // line 24
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogWorkspaceRegistrationQueueEvent::ACTION") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 25
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_workspace_role_queue.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 25)->display($context);
            // line 26
            echo "    ";
        } elseif ((twig_constant("Claroline\\CoreBundle\\Event\\Log\\LogEditResourceTextEvent::ACTION") == $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()))) {
            // line 27
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Notification:notification_text_update.html.twig", "ClarolineCoreBundle:Notification:notification_item.html.twig", 27)->display($context);
            // line 28
            echo "    ";
        }
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Notification:notification_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  45 => 8,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Notification:notification_item.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Notification/notification_item.html.twig");
    }
}
