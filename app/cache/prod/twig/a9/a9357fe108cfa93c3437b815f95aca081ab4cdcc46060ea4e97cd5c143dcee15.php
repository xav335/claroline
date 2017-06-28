<?php

/* IcapNotificationBundle:Templates:notification.html.twig */
class __TwigTemplate_ec157e6c5d363f17eb4e75cb48f62b2e67c4880068ba84fa1bc86a4d71450113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'notificationText' => array($this, 'block_notificationText'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"notification-item list-group-item ";
        if (twig_test_empty((isset($context["status"]) ? $context["status"] : null))) {
            echo " not-viewed-notification ";
        }
        echo "\">
    <div class=\"row-fluid\">
        ";
        // line 3
        $context["user"] = null;
        // line 4
        echo "        ";
        if ( !array_key_exists("avatarUrlPrefix", $context)) {
            // line 5
            echo "            ";
            $context["avatarUrlPrefix"] = "";
            // line 6
            echo "        ";
        }
        // line 7
        echo "        ";
        $context["resource"] = null;
        // line 8
        echo "        ";
        if ( !twig_test_empty($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array()))) {
            // line 9
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array(), "any", false, true), "doer", array(), "any", true, true)) {
                // line 10
                echo "                ";
                $context["user"] = $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array()), "doer", array());
                // line 11
                echo "            ";
            }
            // line 12
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array(), "any", false, true), "resource", array(), "any", true, true)) {
                // line 13
                echo "                ";
                $context["resource"] = $this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array()), "resource", array());
                // line 14
                echo "            ";
            }
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div class=\"dropdown-notification-avatar\">
            ";
        // line 17
        if (( !twig_test_empty((isset($context["user"]) ? $context["user"] : null)) &&  !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array())))) {
            // line 18
            echo "                <img
                        class=\"img-polaroid img-responsive\"
                        src=\"";
            // line 20
            echo twig_escape_filter($this->env, ((isset($context["avatarUrlPrefix"]) ? $context["avatarUrlPrefix"] : null) . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "avatar", array())), "html", null, true);
            echo "\"
                        onError=\"this.onerror=null;this.src='";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapnotification/images/default-avatar.png"), "html", null, true);
            echo "';\">
            ";
        } else {
            // line 23
            echo "                <img class=\"img-polaroid img-responsive\"
                     src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapnotification/images/default-avatar.png"), "html", null, true);
            echo "\">
            ";
        }
        // line 26
        echo "        </div>
        <div class=\"dropdown-notification-text\">
            <div class=\"notification-text\">
                ";
        // line 29
        $this->displayBlock('notificationText', $context, $blocks);
        // line 32
        echo "            </div>
            <div class=\"notification-info\">
                <span class=\"notification-icon ";
        // line 34
        if (twig_test_empty($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "iconColor", array()))) {
            echo " default-notification-icon \" ";
        } else {
            echo " \" style=\"background-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "iconColor", array()), "html", null, true);
            echo " \" ";
        }
        // line 35
        echo "                >
                ";
        // line 36
        if (twig_test_empty($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "getIconLetter", array(), "method"))) {
            echo " ";
            echo twig_escape_filter($this->env, twig_first($this->env, (isset($context["systemName"]) ? $context["systemName"] : null)), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "getIconLetter", array(), "method"), "html", null, true);
            echo " ";
        }
        // line 37
        echo "                </span>
                <span class=\"notification-widget-date\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Icap\NotificationBundle\Twig\NotificationExtension')->getSmartDate($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "creationDate", array())), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
</li>";
    }

    // line 29
    public function block_notificationText($context, array $blocks = array())
    {
        // line 30
        echo "                    ";
        echo $this->env->getExtension('Icap\NotificationBundle\Twig\NotificationExtension')->getNotificationMessage((isset($context["notification"]) ? $context["notification"] : null), (isset($context["user"]) ? $context["user"] : null), (isset($context["resource"]) ? $context["resource"] : null), (isset($context["systemName"]) ? $context["systemName"] : null));
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Templates:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  137 => 29,  127 => 38,  124 => 37,  114 => 36,  111 => 35,  103 => 34,  99 => 32,  97 => 29,  92 => 26,  87 => 24,  84 => 23,  79 => 21,  75 => 20,  71 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  28 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Templates:notification.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Templates/notification.html.twig");
    }
}
