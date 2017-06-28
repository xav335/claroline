<?php

/* IcapNotificationBundle:Notification:list.html.twig */
class __TwigTemplate_14785bfe3812ffda17a2f0858b9d3e9ca4380155ddba5d8266b4d911a542fdd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "IcapNotificationBundle:Notification:list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'notification_widget' => array($this, 'block_notification_widget'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-notification\">
        <div class=\"panel-body\">
            <div class=\"notifications-header-text page-header\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notifications_title", array(), "notification"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 9
        if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbResults", array(), "method") > 0) || ((isset($context["category"]) ? $context["category"] : null) != null))) {
            // line 10
            echo "                <div class=\"button-container pull-left\">
                    <a class=\"btn btn-default\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_view", array("markViewed" => true, "page" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getCurrentPage", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mark_all_viewed", array(), "notification"), "html", null, true);
            echo "</a>
                    <div class=\"dropdown category-list\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filter_by_category", array(), "notification"), "html", null, true);
            echo "
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li ";
            // line 18
            if (((isset($context["category"]) ? $context["category"] : null) == null)) {
                echo " class=\"active\" ";
            }
            echo ">
                                <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_view");
            echo "\">
                                    <span>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all", array(), "platform"), "html", null, true);
            echo "</span>
                                </a>
                            </li>
                            <li ";
            // line 23
            if (((isset($context["category"]) ? $context["category"] : null) == "system")) {
                echo " class=\"active\" ";
            }
            echo ">
                                <a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_view", array("category" => "system"));
            echo "\">
                                    <span class=\"notification-icon default-notification-icon\">
                                        ";
            // line 26
            echo twig_escape_filter($this->env, twig_first($this->env, (isset($context["systemName"]) ? $context["systemName"] : null)), "html", null, true);
            echo "
                                    </span>
                                    <span>
                                        ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["systemName"]) ? $context["systemName"] : null), "html", null, true);
            echo "
                                    </span>
                                </a>
                            </li>
                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 34
                echo "                                <li ";
                if (((isset($context["category"]) ? $context["category"] : null) == $this->getAttribute($context["color"], "name", array()))) {
                    echo " class=\"active\" ";
                }
                echo ">
                                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_view", array("category" => $this->getAttribute($context["color"], "name", array()))), "html", null, true);
                echo "\">
                                    <span class=\"notification-icon\" style=\"background-color: ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "color", array()), "html", null, true);
                echo "\">
                                        ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["color"], "key", array()), "html", null, true);
                echo "
                                    </span>
                                    <span>
                                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["color"], "name", array()), array(), "notification"), "html", null, true);
                echo "
                                    </span>
                                </a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        </ul>
                    </div>
                </div>
            ";
        }
        // line 49
        echo "
            ";
        // line 50
        $this->loadTemplate("IcapNotificationBundle:Templates:pagination.html.twig", "IcapNotificationBundle:Notification:list.html.twig", 50)->display(array_merge($context, array("pager" => (isset($context["pager"]) ? $context["pager"] : null), "category" => (isset($context["category"]) ? $context["category"] : null))));
        // line 51
        echo "
            ";
        // line 52
        $this->displayBlock('notification_widget', $context, $blocks);
        // line 64
        echo "
            ";
        // line 65
        $this->loadTemplate("IcapNotificationBundle:Templates:pagination.html.twig", "IcapNotificationBundle:Notification:list.html.twig", 65)->display(array_merge($context, array("pager" => (isset($context["pager"]) ? $context["pager"] : null), "category" => (isset($context["category"]) ? $context["category"] : null))));
        // line 66
        echo "
        </div>
    </div>

";
    }

    // line 52
    public function block_notification_widget($context, array $blocks = array())
    {
        // line 53
        echo "                ";
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbResults", array(), "method") > 0)) {
            // line 54
            echo "                    <div class=\"notification-list-container\">
                        <ul id=\"notification-list\" class=\"list-group\">
                            ";
            // line 56
            $this->loadTemplate("IcapNotificationBundle:Templates:notificationList.html.twig", "IcapNotificationBundle:Notification:list.html.twig", 56)->display(array_merge($context, array("pager" => (isset($context["pager"]) ? $context["pager"] : null), "systemName" => (isset($context["systemName"]) ? $context["systemName"] : null), "notificationViews" => (isset($context["notificationViews"]) ? $context["notificationViews"] : null))));
            // line 57
            echo "                        </ul>
                    </div>
                ";
        } else {
            // line 60
            echo "                    <div class=\"zero-notifications-found\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("zero_notifications", array(), "notification"), "html", null, true);
            echo "</div>
                ";
        }
        // line 62
        echo "
            ";
    }

    // line 72
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel='stylesheet' type='text/css' href='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapnotification/css/style.css"), "html", null, true);
        echo "'/>
";
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Notification:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 74,  199 => 73,  196 => 72,  191 => 62,  185 => 60,  180 => 57,  178 => 56,  174 => 54,  171 => 53,  168 => 52,  160 => 66,  158 => 65,  155 => 64,  153 => 52,  150 => 51,  148 => 50,  145 => 49,  139 => 45,  128 => 40,  122 => 37,  118 => 36,  114 => 35,  107 => 34,  103 => 33,  96 => 29,  90 => 26,  85 => 24,  79 => 23,  73 => 20,  69 => 19,  63 => 18,  56 => 14,  48 => 11,  45 => 10,  43 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Notification:list.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Notification/list.html.twig");
    }
}
