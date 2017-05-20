<?php

/* ClarolineCoreBundle:Tool\desktop\parameters:toolProperties.html.twig */
class __TwigTemplate_67e15a7fb96b77b556d9caeb60953f7a4c450a4a7fca0164d3ff7eabdb3d74b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineCoreBundle:Tool\\desktop\\parameters:toolProperties.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_panel' => array($this, 'block_section_panel'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (((isset($context["type"]) ? $context["type"] : null) == 0)) {
            // line 4
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_bar_configuration", array(), "platform");
        } elseif ((        // line 5
(isset($context["type"]) ? $context["type"] : null) == 1)) {
            // line 6
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_menu_configuration", array(), "platform");
        } else {
            // line 8
            $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tool_parameters", array(), "platform");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags((isset($context["title"]) ? $context["title"] : null))), "html", null, true);
    }

    // line 13
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 15
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_parameters_menu")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(        // line 21
(isset($context["title"]) ? $context["title"] : null), array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 25
        echo "
";
    }

    // line 28
    public function block_section_panel($context, array $blocks = array())
    {
        // line 29
        echo "    <form id=\"desktop-tool-form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_tools_roles_edit", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h3>
            </div>

            <table id=\"tool-table\" class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tool", array(), "platform"), "html", null, true);
        echo "</th>
                        <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("visible", array(), "platform"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody id=\"tools-table-body\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adminOrderedTools"]) ? $context["adminOrderedTools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["adminOrderedTool"]) {
            // line 44
            echo "                    ";
            $context["tool"] = $this->getAttribute($context["adminOrderedTool"], "getTool", array(), "method");
            // line 45
            echo "                    ";
            $context["toolName"] = $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getName", array(), "method");
            // line 46
            echo "                    <tr class=\"row-locked-tool text-muted\">
                        <td>
                            <i class=\"fa fa-";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getClass", array(), "method"), "html", null, true);
            echo "\"></i>
                            ";
            // line 49
            if (((isset($context["toolName"]) ? $context["toolName"] : null) == "parameters")) {
                // line 50
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"), "html", null, true);
                echo "
                            ";
            } else {
                // line 52
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_lower_filter($this->env, (isset($context["toolName"]) ? $context["toolName"] : null)), array(), "tools"), "html", null, true);
                echo "
                            ";
            }
            // line 54
            echo "                        </td>
                        <td>
                            <input
                                    type=\"checkbox\"
                                    class=\"chk-tool-visible\"
                                    value=\"1\"
                                    disabled
                                    ";
            // line 61
            if ($this->getAttribute($context["adminOrderedTool"], "isVisibleInDesktop", array(), "method")) {
                echo " checked ";
            }
            // line 62
            echo "                            />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adminOrderedTool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderedTools"]) ? $context["orderedTools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["orderedTool"]) {
            // line 68
            echo "                    ";
            $context["tool"] = $this->getAttribute($context["orderedTool"], "getTool", array(), "method");
            // line 69
            echo "                    ";
            $context["toolName"] = $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getName", array(), "method");
            // line 70
            echo "                    <tr class=\"row-tool-config\"
                        data-tool-id=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getId", array(), "method"), "html", null, true);
            echo "\"
                        data-ordered-tool-id=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderedTool"], "getId", array(), "method"), "html", null, true);
            echo "\"
                    >
                        <td>
                            <span class=\"fa fa-fw fa-sort text-muted\"></span>
                            &nbsp;
                            &nbsp;
                            <i class=\"fa fa-fw fa-";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getClass", array(), "method"), "html", null, true);
            echo "\"></i>
                            ";
            // line 79
            if (((isset($context["toolName"]) ? $context["toolName"] : null) == "parameters")) {
                // line 80
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"), "html", null, true);
                echo "
                            ";
            } else {
                // line 82
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_lower_filter($this->env, (isset($context["toolName"]) ? $context["toolName"] : null)), array(), "tools"), "html", null, true);
                echo "
                            ";
            }
            // line 84
            echo "                        </td>
                        <td>
                            <input
                                    type=\"checkbox\"
                                    class=\"chk-tool-visible\"
                                    value=\"1\"
                                    name=\"chk-tool-";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getId", array(), "method"), "html", null, true);
            echo "\"
                                    ";
            // line 91
            if (($this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "isDesktopRequired", array(), "method") || ($this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "getName", array(), "method") == "home"))) {
                echo " disabled ";
            }
            // line 92
            echo "                                    ";
            if ($this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "isVisible", array(), "method")) {
                echo " checked ";
            }
            // line 93
            echo "                            />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderedTool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </tbody>
            </table>

            <div class=\"panel-footer\">
                <button id=\"edit-tools-btn\" type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"), "html", null, true);
        echo "
                </button>
                <a class=\"btn btn-default\" href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_parameters_menu");
        echo "\">
                    ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
    </form>

    <div id=\"datas-box\" data-type=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\"></div>
";
    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/tool/desktop/tool_properties.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Tool\\desktop\\parameters:toolProperties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 115,  258 => 114,  255 => 113,  249 => 111,  240 => 105,  236 => 104,  231 => 102,  224 => 97,  215 => 93,  210 => 92,  206 => 91,  202 => 90,  194 => 84,  188 => 82,  182 => 80,  180 => 79,  176 => 78,  167 => 72,  163 => 71,  160 => 70,  157 => 69,  154 => 68,  150 => 67,  147 => 66,  138 => 62,  134 => 61,  125 => 54,  119 => 52,  113 => 50,  111 => 49,  107 => 48,  103 => 46,  100 => 45,  97 => 44,  93 => 43,  86 => 39,  82 => 38,  73 => 32,  66 => 29,  63 => 28,  58 => 25,  56 => 21,  55 => 15,  53 => 14,  50 => 13,  44 => 11,  40 => 1,  37 => 8,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Tool\\desktop\\parameters:toolProperties.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Tool/desktop/parameters/toolProperties.html.twig");
    }
}
