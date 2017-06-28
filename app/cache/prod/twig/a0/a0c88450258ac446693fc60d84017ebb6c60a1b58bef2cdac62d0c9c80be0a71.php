<?php

/* ClarolineCoreBundle:Activity:edit.html.twig */
class __TwigTemplate_e0c661a4236cd7177fe9f40310bd4841cc046d5fe5525fb93367db9d11e2b2e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'resourceBreadcrumb' => array($this, 'block_resourceBreadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "ClarolineCoreBundle:Activity:edit.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["layout"] = "ClarolineCoreBundle:Workspace:layout.html.twig";
        // line 3
        if ($this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->isDesktop()) {
            // line 4
            $context["layout"] = "ClarolineCoreBundle:Desktop:layout.html.twig";
        }
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "resourceNode", array()), "name", array()) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"))), "html", null, true);
    }

    // line 11
    public function block_resourceBreadcrumb($context, array $blocks = array())
    {
        // line 12
        echo "    <li>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_open", array("resourceType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "getResourceType", array(), "method"), "getName", array(), "method"), "node" => $this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "
        </a>
    </li>
    <li class=\"active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"), "html", null, true);
        echo "</li>
";
    }

    // line 20
    public function block_section_content($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getTitle", array(), "method"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"), "html", null, true);
        echo ")</div>
    </div>
    <form role=\"form\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_activity_edit", array("resource" => $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getId", array(), "method"))), "html", null, true);
        echo "\" method=\"POST\">
        <div class=\"panel-body\">
            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <hr>
            <div class=\"form-group row\">
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formParams"]) ? $context["formParams"] : null), "evaluation_type", array()), 'label');
        echo "
                <span class=\"col-md-3\">
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formParams"]) ? $context["formParams"] : null), "evaluation_type", array()), 'widget');
        echo "
                </span>
            </div>
            <div class=\"hidden\">
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formParams"]) ? $context["formParams"] : null), 'rest');
        echo "
            </div>
            
            <div id=\"activity-rule-form-div\" class=\"hidden\" data-rule-default-starting-date=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["defaultRuleStartingDate"]) ? $context["defaultRuleStartingDate"] : null), "html", null, true);
        echo "\">
                <hr>
                <h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_rule_configuration_for_auto_evaluation", array(), "platform"), "html", null, true);
        echo "</h3>
                <br>
                <div class=\"form-group row\">
                    <span class=\"col-md-3 white-space\"
                        data-container=\"#activity-rule-form-div\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_rule_form_action_explanation", array(), "platform"), "html", null, true);
        echo "\"
                    >
                        ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "action", array()), 'label');
        echo "
                    </span>
                    <span class=\"col-md-6\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "action", array()), 'widget');
        echo "</span>
                </div>
                <div class=\"form-group row\">
                    <span class=\"col-md-3 white-space\"
                        data-container=\"#activity-rule-form-div\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_rule_form_occurrence_explanation", array(), "platform"), "html", null, true);
        echo "\"
                    >
                        ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "occurrence", array()), 'label');
        echo "
                    </span>
                    <span class=\"col-md-2\">";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "occurrence", array()), 'widget');
        echo "</span>
                </div>
                <div class=\"form-group row\">
                    <span class=\"col-md-3 white-space\"
                        data-container=\"#activity-rule-form-div\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_rule_form_result_explanation", array(), "platform"), "html", null, true);
        echo "\"
                    >
                        ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "result", array()), 'label');
        echo "
                    </span>
                    <span class=\"col-md-2\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "result", array()), 'widget');
        echo "</span>
                    <span class=\"col-md-1\">";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "resultMax", array()), 'label');
        echo "</span>
                    <span class=\"col-md-2\">";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "resultMax", array()), 'widget');
        echo "</span>
                </div>
                <div class=\"form-group row\">
                    <span class=\"col-md-3 white-space\"
                        data-container=\"#activity-rule-form-div\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_rule_form_isResultVisible_explanation", array(), "platform"), "html", null, true);
        echo "\"
                    >
                        ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "isResultVisible", array()), 'label');
        echo "
                    </span>
                    <span class=\"col-md-6\">";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "isResultVisible", array()), 'widget');
        echo "</span>
                </div>
                <div class=\"form-group row\">
                    <span class=\"col-md-3 white-space\"
                        data-container=\"#activity-rule-form-div\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_rule_form_activeFrom_explanation", array(), "platform"), "html", null, true);
        echo "\"
                    >
                        ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "activeFrom", array()), 'label');
        echo "
                    </span>
                    <span class=\"col-md-3\">";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "activeFrom", array()), 'widget');
        echo "</span>
                    <span class=\"col-md-1 white-space\"
                        data-container=\"#activity-rule-form-div\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_rule_form_activeUntil_explanation", array(), "platform"), "html", null, true);
        echo "\"
                    >
                        ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "activeUntil", array()), 'label');
        echo "
                    </span>
                    <span class=\"col-md-3\">";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRule"]) ? $context["formRule"] : null), "activeUntil", array()), 'widget');
        echo "</span>
                </div>
                ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formRule"]) ? $context["formRule"] : null), 'widget');
        echo "
            </div>
        </div>
        <div class=\"panel-footer text-right\">
            <a class=\"btn btn-default\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_open", array("resourceType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "getResourceType", array(), "method"), "getName", array(), "method"), "node" => $this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "getId", array(), "method"))), "html", null, true);
        echo "\">
                ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </a>
            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
        </div>
    </form>
";
    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        // line 121
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script
        src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/activity/editActivityParameters.js"), "html", null, true);
        echo "\"
        type=\"text/javascript\"
    >
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Activity:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 123,  271 => 121,  268 => 120,  260 => 115,  255 => 113,  251 => 112,  244 => 108,  239 => 106,  234 => 104,  229 => 102,  221 => 97,  216 => 95,  211 => 93,  201 => 86,  196 => 84,  191 => 82,  181 => 75,  177 => 74,  173 => 73,  168 => 71,  163 => 69,  153 => 62,  148 => 60,  143 => 58,  133 => 51,  128 => 49,  123 => 47,  113 => 40,  108 => 38,  102 => 35,  95 => 31,  90 => 29,  84 => 26,  79 => 24,  72 => 22,  69 => 21,  66 => 20,  60 => 17,  54 => 14,  50 => 13,  47 => 12,  44 => 11,  38 => 9,  34 => 7,  31 => 4,  29 => 3,  27 => 1,  21 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Activity:edit.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Activity/edit.html.twig");
    }
}
