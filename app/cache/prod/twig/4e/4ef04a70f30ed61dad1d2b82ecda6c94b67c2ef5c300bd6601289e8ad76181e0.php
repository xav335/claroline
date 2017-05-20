<?php

/* ClarolineCoreBundle:Administration\Widget:widgetsManagement.html.twig */
class __TwigTemplate_8e85e427e2f2c8aa7dcb888a90a383c6e095dd8b61e1dff1ed5ca3a7fd7bb279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Widget:widgetsManagement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Administration:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widgets_management", array(), "tools"))), "html", null, true);
        // line 8
        echo "
";
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widgets_management", array(), "tools"), "href" => ""))), "method"), "html", null, true);
        // line 24
        echo "
";
    }

    // line 27
    public function block_section_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widgets_management", array(), "tools"), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"widgets-table\">
                <tr>
                    <th>
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo "
                    </th>
                    <th class=\"text-center\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("visibility", array(), "platform"), "html", null, true);
        echo "
                    </th>
                    <th class=\"text-center\">
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("width", array(), "platform"), "html", null, true);
        echo "
                    </th>
                    <th class=\"text-center\">
                        ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("height", array(), "platform"), "html", null, true);
        echo "
                    </th>
                    <th class=\"text-center\">
                        ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_creation_roles", array(), "platform"), "html", null, true);
        echo "
                    </th>
                </tr>
                
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 55
            echo "                    <tr>
                        <td>
                            <a href=\"\" class=\"edit-widget-btn\" data-widget-id=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "getId", array(), "method"), "html", null, true);
            echo "\">
                                ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["widget"], "getName", array(), "method"), array(), "widget"), "html", null, true);
            echo "
                            </a>
                        </td>
                        <td class=\"text-center\">
                            
                            ";
            // line 63
            if (($this->getAttribute($context["widget"], "isDisplayableInDesktop", array(), "method") && $this->getAttribute($context["widget"], "isDisplayableInWorkspace", array(), "method"))) {
                // line 64
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop", array(), "platform"), "html", null, true);
                echo "
                                +
                                ";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace", array(), "platform"), "html", null, true);
                echo "
                            ";
            } elseif ($this->getAttribute(            // line 67
$context["widget"], "isDisplayableInDesktop", array(), "method")) {
                // line 68
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop", array(), "platform"), "html", null, true);
                echo "
                            ";
            } elseif ($this->getAttribute(            // line 69
$context["widget"], "isDisplayableInWorkspace", array(), "method")) {
                // line 70
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace", array(), "platform"), "html", null, true);
                echo "
                            ";
            } else {
                // line 72
                echo "                                -
                            ";
            }
            // line 74
            echo "                        </td>
                        <td class=\"text-center\">
                            ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "getDefaultWidth", array(), "method"), "html", null, true);
            echo "
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "getDefaultHeight", array(), "method"), "html", null, true);
            echo "
                        </td>
                        <td class=\"text-center\">
                            
                            ";
            // line 83
            if ($this->getAttribute($context["widget"], "isDisplayableInDesktop", array(), "method")) {
                // line 84
                echo "                                
                                ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["widget"], "getRoles", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 86
                    echo "                                    <span class=\"label label-success margin-right-sm margin-bottom-sm\">
                                        ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["role"], "getTranslationKey", array(), "method"), array(), "platform"), "html", null, true);
                    echo "
                                    </span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                            ";
            } else {
                // line 91
                echo "                                -
                            ";
            }
            // line 93
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </table>
        </div>
    </div>
";
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/administration/widgetsManagement.js"), "html", null, true);
        echo "\" type=\"text/javascript\">
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Widget:widgetsManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 103,  217 => 102,  214 => 101,  207 => 96,  199 => 93,  195 => 91,  192 => 90,  183 => 87,  180 => 86,  176 => 85,  173 => 84,  171 => 83,  164 => 79,  158 => 76,  154 => 74,  150 => 72,  144 => 70,  142 => 69,  137 => 68,  135 => 67,  131 => 66,  125 => 64,  123 => 63,  115 => 58,  111 => 57,  107 => 55,  103 => 54,  96 => 50,  90 => 47,  84 => 44,  78 => 41,  72 => 38,  61 => 30,  57 => 28,  54 => 27,  49 => 24,  47 => 13,  45 => 12,  42 => 11,  37 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Widget:widgetsManagement.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Widget/widgetsManagement.html.twig");
    }
}
