<?php

/* ClarolineCoreBundle:Activity:index.html.twig */
class __TwigTemplate_1df1c313da132913153de278f5f73d1c2925e898eeb7ccac999272d5a9eacd66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "ClarolineCoreBundle:Activity:index.html.twig", 7);
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
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "resourceNode", array()), "name", array()) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity", array(), "resource"))), "html", null, true);
    }

    // line 11
    public function block_section_content($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"panel-body\">
        <div id=\"activity-btn-group\" class=\"float-right-top margin-right-md\">

            ";
        // line 15
        if ((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getStatus", array(), "method") == "completed") || ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getStatus", array(), "method") == "passed"))) {
            // line 16
            echo "                ";
            $context["buttonType"] = "btn-success";
            // line 17
            echo "                ";
            $context["status"] = "success";
            // line 18
            echo "            ";
        } elseif ((($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getStatus", array(), "method") == "incomplete") || ($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getStatus", array(), "method") == "failed"))) {
            // line 19
            echo "                ";
            $context["buttonType"] = "btn-danger";
            // line 20
            echo "                ";
            $context["status"] = "failed";
            // line 21
            echo "            ";
        } else {
            // line 22
            echo "                ";
            $context["buttonType"] = "btn-default";
            // line 23
            echo "                ";
            $context["status"] = "undefined";
            // line 24
            echo "            ";
        }
        // line 25
        echo "
            <div id=\"display-activity-evaluation-btn\"
                class=\"btn ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["buttonType"]) ? $context["buttonType"] : null), "html", null, true);
        echo " ";
        if (((isset($context["status"]) ? $context["status"] : null) == "undefined")) {
            echo "disabled";
        }
        echo "\"
                data-activity-params-id=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activityParams"]) ? $context["activityParams"] : null), "getId", array(), "method"), "html", null, true);
        echo "\"
                ";
        // line 29
        if ((((isset($context["status"]) ? $context["status"] : null) == "success") || ((isset($context["status"]) ? $context["status"] : null) == "failed"))) {
            // line 30
            echo "                    data-container=\"#activity-btn-group\"
                    data-toggle=\"tooltip\"
                    data-placement=\"left\"
                    title=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getStatus", array(), "method"), array(), "platform"), "html", null, true);
            echo "\"
                ";
        }
        // line 35
        echo "            >
                <i class=\"fa fa-bars\"></i>
            </div>
            ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["_resource"]) ? $context["_resource"] : null))) {
            // line 39
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_activity_edit", array("resource" => $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-pencil\"></i>
                </a>
            ";
        }
        // line 43
        echo "        </div>

        <ul class=\"activity-tabs nav nav-tabs margin-bottom-md\">
            <li class=\"active activity-primary\"><a class=\"pointer-hand\" data-id=\"activity-primary\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getTitle", array(), "method"), "html", null, true);
        echo "</a></li>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getParameters", array(), "method"), "getSecondaryResources", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 48
            echo "                <li class=\"activity-tab-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "getId", array(), "method"), "html", null, true);
            echo "\">
                    <a class=\"pointer-hand\" data-id=\"resource-";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "getId", array(), "method"), "html", null, true);
            echo "\">
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "getName", array(), "method"), "html", null, true);
            echo "
                        ";
            // line 51
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["_resource"]) ? $context["_resource"] : null))) {
                // line 52
                echo "                            <div class=\"dropdown\">
                                <i class=\"fa fa-chevron-down pointer-hand\" data-toggle=\"dropdown\"></i>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li role=\"presentation\">
                                        <i role=\"menuitem\"
                                           class=\"activity-remove-resource fa fa-trash-o\"
                                           data-resource=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "getId", array(), "method"), "html", null, true);
                echo "\"
                                           data-activity=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getId", array(), "method"), "html", null, true);
                echo "\"
                                        >
                                            ";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("remove", array(), "platform"), "html", null, true);
                echo "
                                        </i>
                                    </li>
                                </ul>
                            </div>
                        ";
            }
            // line 67
            echo "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["_resource"]) ? $context["_resource"] : null))) {
            // line 71
            echo "                <li>
                    <a class=\"add-resource pointer-hand\" data-id=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getId", array(), "method"), "html", null, true);
            echo "\">
                        <i class=\"fa fa-plus\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_resource", array(), "platform"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 77
        echo "        </ul>
        <div class=\"activities\">
            <div id=\"activity-primary\">
                ";
        // line 80
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["_resource"]) ? $context["_resource"] : null)) &&  !twig_test_empty($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getPrimaryResource", array(), "method")))) {
            // line 81
            echo "                    <button class=\"remove-primary-resource btn btn-default pull-right\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getId", array(), "method"), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i> ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("activity_remove_primary_resource", array(), "platform"), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 85
        echo "                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getDescription", array(), "method"))) {
            // line 86
            echo "                    <div>";
            echo $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getDescription", array(), "method");
            echo "</div>
                ";
        }
        // line 88
        echo "                ";
        if ( !twig_test_empty($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getPrimaryResource", array(), "method"))) {
            // line 89
            echo "                    <hr>
                    <iframe class=\"activity-iframe\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_open", array("resourceType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getPrimaryResource", array(), "method"), "getResourceType", array(), "method"), "getName", array(), "method"), "node" => $this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getPrimaryResource", array(), "method"), "getId", array(), "method"))), "html", null, true);
            echo "\"></iframe>
                ";
        }
        // line 92
        echo "            </div>
            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getParameters", array(), "method"), "getSecondaryResources", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 94
            echo "                <div class=\"hide\" id=\"resource-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "getId", array(), "method"), "html", null, true);
            echo "\">
                    <iframe class=\"activity-iframe\" src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_open", array("resourceType" => $this->getAttribute($this->getAttribute($context["resource"], "getResourceType", array(), "method"), "getName", array(), "method"), "node" => $this->getAttribute($context["resource"], "getId", array(), "method"))), "html", null, true);
            echo "\"></iframe>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </div>
    </div>

    <div id=\"activity-evaluation-modal-box\" class=\"modal fade\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h3 id=\"form-modal-title\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation", array(), "platform"), "html", null, true);
        echo "</h3>
                </div>
                <div id=\"activity-evaluation-modal-body\" class=\"modal-body\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\"
                        class=\"btn btn-default\"
                        data-dismiss=\"modal\"
                    >";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("close", array(), "platform"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/activity/activity.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 125
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["_resource"]) ? $context["_resource"] : null))) {
            // line 126
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/activity/edit.js"), "html", null, true);
            echo "\"></script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Activity:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 126,  305 => 125,  301 => 124,  296 => 123,  293 => 122,  282 => 114,  271 => 106,  261 => 98,  252 => 95,  247 => 94,  243 => 93,  240 => 92,  235 => 90,  232 => 89,  229 => 88,  223 => 86,  220 => 85,  214 => 82,  209 => 81,  207 => 80,  202 => 77,  195 => 73,  191 => 72,  188 => 71,  185 => 70,  177 => 67,  168 => 61,  163 => 59,  159 => 58,  151 => 52,  149 => 51,  145 => 50,  141 => 49,  136 => 48,  132 => 47,  128 => 46,  123 => 43,  115 => 39,  113 => 38,  108 => 35,  103 => 33,  98 => 30,  96 => 29,  92 => 28,  84 => 27,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  51 => 15,  46 => 12,  43 => 11,  37 => 9,  33 => 7,  30 => 4,  28 => 3,  26 => 1,  20 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Activity:index.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Activity/index.html.twig");
    }
}
