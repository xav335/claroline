<?php

/* ClarolineCoreBundle:Administration\Analytics:analytics_resources.html.twig */
class __TwigTemplate_a2172f22bf9002b460558f1d6fa3a6f3b558563c69554d3a595585fd056b7334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics_resources.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("analytics_resources", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        span.small {font-size: 14px;}
    </style>
";
    }

    // line 12
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 14
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_analytics", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 25
        echo "
";
    }

    // line 28
    public function block_section_content($context, array $blocks = array())
    {
        // line 29
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_analytics", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" id=\"workspace-list-div\">
        ";
        // line 33
        $this->loadTemplate("ClarolineCoreBundle:Administration\\Analytics:analytics_navbar.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics_resources.html.twig", 33)->display($context);
        // line 34
        echo "
        <div class=\"margin\">
            <h1>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["wsCount"]) ? $context["wsCount"] : null), "html", null, true);
        echo " <span class=\"small\"><i class=\"fa fa-book\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"), "html", null, true);
        echo "</span></h1>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 40
        $this->loadTemplate("ClarolineCoreBundle:Log:resource_by_type_chart.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics_resources.html.twig", 40)->display($context);
        // line 41
        echo "            </div>
            <div class=\"col-md-6\">
                <div id=\"analytics-resources-list\" class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-list\"></i>
                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources_usage_list", array(), "platform"), "html", null, true);
        echo "
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-condensed\">
                            <tr><th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resource", array(), "platform"), "html", null, true);
        echo "</th><th>#</th></tr>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resourceCount"]) ? $context["resourceCount"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 52
            echo "                                <tr><td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["resource"], "name", array()), array(), "resource"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "total", array()), "html", null, true);
            echo "</td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            ";
        if ((twig_length_filter($this->env, (isset($context["otherItems"]) ? $context["otherItems"] : null)) > 0)) {
            // line 55
            echo "                            <tr><th>Autres</th><th>#</th></tr>
                                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["otherItems"]) ? $context["otherItems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["otherItem"]) {
                // line 57
                echo "                                <tr>
                                    <td>
                                        <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_other_details", array("item" => $this->getAttribute($context["otherItem"], "item", array()))), "html", null, true);
                echo "\"
                                           title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("analytics_other_details_" . $this->getAttribute($context["otherItem"], "item", array())), array(), "analytics"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["otherItem"], "label", array()), "html", null, true);
                echo "</a>
                                    </td>
                                    <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["otherItem"], "value", array()), "html", null, true);
                echo "</td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otherItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                            ";
        }
        // line 66
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Analytics:analytics_resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 66,  158 => 65,  149 => 62,  142 => 60,  138 => 59,  134 => 57,  130 => 56,  127 => 55,  124 => 54,  113 => 52,  109 => 51,  105 => 50,  98 => 46,  91 => 41,  89 => 40,  80 => 36,  76 => 34,  74 => 33,  68 => 30,  65 => 29,  62 => 28,  57 => 25,  55 => 14,  53 => 13,  50 => 12,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Analytics:analytics_resources.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Analytics/analytics_resources.html.twig");
    }
}
