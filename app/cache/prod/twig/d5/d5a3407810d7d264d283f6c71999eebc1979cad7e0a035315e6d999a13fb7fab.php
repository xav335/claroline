<?php

/* IcapNotificationBundle:Parameters:config.html.twig */
class __TwigTemplate_cf305cca07315fbf8dfa7b0fd8e12226aec9d768faaa2ec4aad01c1727816eae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "IcapNotificationBundle:Parameters:config.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_panel' => array($this, 'block_section_panel'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = "notification_user_configuration";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null), array(), "notification"))), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 11
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_parameters_menu")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 17
(isset($context["title"]) ? $context["title"] : null), array(), "notification"), "href" => ""))), "method"), "html", null, true);
        // line 21
        echo "
";
    }

    // line 24
    public function block_section_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <form id=\"notification-user-parameters-form\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_save_user_parameters");
        echo "\" method=\"post\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null), array(), "notification"), "html", null, true);
        echo "</h3>
            </div>

            <table id=\"notification-parameters-types-table\" class=\"table table-striped\">
                <thead>
                <tr>
                    <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("type", array(), "platform"), "html", null, true);
        echo "</th>
                    <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("visible", array(), "platform"), "html", null, true);
        echo "</th>
                    <th>
                        <a class=\"text-primary\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_rss", array("rssId" => (isset($context["rssId"]) ? $context["rssId"] : null))), "html", null, true);
        echo "\">
                            <i class=\"fa fa-fw fa-rss\"></i>
                            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss_visible", array(), "notification"), "html", null, true);
        echo "
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody class=\"types-table-body\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 46
            echo "                    <tr>
                        <td>
                            ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["type"], "name", array()), array(), "notification"), array(), "resource"), "html", null, true);
            echo "
                        </td>
                        <td>
                            <input
                                    type=\"checkbox\"
                                    class=\"chk-type-visible\"
                                    value=\"visible\"
                                    name=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "[]\"
                                    ";
            // line 56
            if ($this->getAttribute($context["type"], "visible", array())) {
                echo " checked ";
            }
            // line 57
            echo "                            />
                        </td>
                        <td>
                            <input
                                    type=\"checkbox\"
                                    class=\"chk-type-visible\"
                                    value=\"rss\"
                                    name=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "[]\"
                                    ";
            // line 65
            if ($this->getAttribute($context["type"], "rssVisible", array())) {
                echo " checked ";
            }
            // line 66
            echo "                            />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </tbody>
            </table>

            <div class=\"panel-footer\">
                <button type=\"submit\" id=\"edit-tools-btn\" class=\"btn btn-primary\">
                    ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"), "html", null, true);
        echo "
                </button>
                <a class=\"btn btn-default\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_regenerate_rss_url");
        echo "\">
                    ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss_url_regenerate", array(), "notification"), "html", null, true);
        echo "
                </a>
                <a class=\"btn btn-default\" href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_parameters_menu");
        echo "\">
                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
    </form>
";
    }

    // line 88
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 89
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel='stylesheet' type='text/css' href='";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapnotification/css/style_config.css"), "html", null, true);
        echo "'/>
";
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Parameters:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 90,  189 => 89,  186 => 88,  176 => 81,  172 => 80,  167 => 78,  163 => 77,  158 => 75,  151 => 70,  142 => 66,  138 => 65,  134 => 64,  125 => 57,  121 => 56,  117 => 55,  107 => 48,  103 => 46,  99 => 45,  90 => 39,  85 => 37,  80 => 35,  76 => 34,  67 => 28,  60 => 25,  57 => 24,  52 => 21,  50 => 17,  49 => 11,  47 => 10,  44 => 9,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Parameters:config.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Parameters/config.html.twig");
    }
}
