<?php

/* ClarolineCoreBundle:Log:tool_view_list.html.twig */
class __TwigTemplate_5d4d85e10bb6f23a280e343247b9c0aaf6742bb9218e4c024abc26f5febcf5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style type=\"text/css\">
    #logFilter label {font-weight: normal;}
    #logFilter div.row {padding-bottom: 3px;}
</style>
";
        // line 5
        if (( !array_key_exists("workspace", $context) &&  !array_key_exists("_resource", $context))) {
            // line 6
            echo "<div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("logs", array(), "tools"), "html", null, true);
            echo "</h3>
</div>
";
        }
        // line 10
        echo "<div class=\"panel-body logs-container\">
    ";
        // line 11
        if (array_key_exists("_resource", $context)) {
            // line 12
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Log:workspace_resource_tabs.html.twig", "ClarolineCoreBundle:Log:tool_view_list.html.twig", 12)->display(array_merge($context, array("_resource" => (isset($context["_resource"]) ? $context["_resource"] : null), "activeTab" => "global")));
            // line 13
            echo "    ";
        } elseif (array_key_exists("workspace", $context)) {
            // line 14
            echo "        ";
            $this->loadTemplate("ClarolineCoreBundle:Log:workspace_resource_tabs.html.twig", "ClarolineCoreBundle:Log:tool_view_list.html.twig", 14)->display(array_merge($context, array("workspace" => (isset($context["workspace"]) ? $context["workspace"] : null), "activeTab" => "global")));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div>
        ";
        // line 17
        if ((0 < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "nbResults", array()))) {
            // line 18
            echo "            ";
            $this->loadTemplate("ClarolineCoreBundle:Log:count_by_day_chart.html.twig", "ClarolineCoreBundle:Log:tool_view_list.html.twig", 18)->display($context);
            // line 19
            echo "            <br/><br/>
        ";
        } else {
            // line 21
            echo "            <div style=\"text-align:center;\">
               <h3>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("log_no_actions_found", array(), "log"), "html", null, true);
            echo ".</h3>
            </div>
        ";
        }
        // line 25
        echo "
        <div class=\"panel panel-default\">

            <div class=\"panel-body\">
                <legend>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filter_actions", array(), "platform"), "html", null, true);
        echo "
                </legend>
                <form role=\"form\" id=\"logFilter\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["filterFormAction"]) ? $context["filterFormAction"] : null), "html", null, true);
        echo "\" method=\"GET\" class=\"form-inline\">
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'errors');
        echo "
                    <div class=\"row\">
                        <div class=\"form-group col-md-12\">
                            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "action", array()), 'label');
        echo "
                            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "action", array()), 'errors');
        echo "
                            <div class=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "action", array()), "vars", array()), "theme_options", array()), "control_width", array()), "html", null, true);
        echo "\">
                                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "action", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"form-group col-md-12\">
                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "range", array()), 'label');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "range", array()), 'errors');
        echo "
                            <div class=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "range", array()), "vars", array()), "theme_options", array()), "control_width", array()), "html", null, true);
        echo "\">
                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "range", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"form-group col-md-12\">
                            ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "user", array()), 'label');
        echo "
                            ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "user", array()), 'errors');
        echo "
                            <div class=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "user", array()), "vars", array()), "theme_options", array()), "control_width", array()), "html", null, true);
        echo "\">
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : null), "user", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <br/>
                    ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : null), 'rest');
        echo "
                    <input type=\"submit\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("log_filter_actions", array(), "log"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                </form>
            </div>
        </div>
        <br/><br/>
    </div>
    ";
        // line 69
        if ((0 < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "nbResults", array()))) {
            // line 70
            echo "        <legend>
            ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_list", array(), "platform"), "html", null, true);
            echo "
        </legend>

        <div class=\"text-center\">
            ";
            // line 75
            if ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "haveToPaginate", array())) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "html", null, true);
                echo "
            ";
            }
            // line 78
            echo "        </div>

        ";
            // line 80
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list.html.twig", "ClarolineCoreBundle:Log:tool_view_list.html.twig", 80)->display(array_merge($context, array("logs" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "currentPageResults", array()), "isDesktop" => (isset($context["isDesktop"]) ? $context["isDesktop"] : null))));
            // line 81
            echo "
        <div class=\"text-center\">
            ";
            // line 83
            if ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "haveToPaginate", array())) {
                // line 84
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "html", null, true);
                echo "
            ";
            }
            // line 86
            echo "        </div>
    ";
        }
        // line 88
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:tool_view_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 88,  209 => 86,  203 => 84,  201 => 83,  197 => 81,  195 => 80,  191 => 78,  185 => 76,  183 => 75,  176 => 71,  173 => 70,  171 => 69,  162 => 63,  158 => 62,  150 => 57,  146 => 56,  142 => 55,  138 => 54,  129 => 48,  125 => 47,  121 => 46,  117 => 45,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  90 => 33,  86 => 32,  81 => 30,  74 => 25,  68 => 22,  65 => 21,  61 => 19,  58 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  41 => 12,  39 => 11,  36 => 10,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:tool_view_list.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/tool_view_list.html.twig");
    }
}
