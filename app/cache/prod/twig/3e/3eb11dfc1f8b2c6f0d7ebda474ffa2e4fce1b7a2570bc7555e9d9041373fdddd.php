<?php

/* ClarolineCoreBundle:Workspace:listWorkspacesWithSelfRegistration.html.twig */
class __TwigTemplate_3e8caad8cf1cea3ad2c7247654888ca15ac854466d48b70d4e7c8ad64f38837d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 39
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:WorkspaceTag:layout.html.twig", "ClarolineCoreBundle:Workspace:listWorkspacesWithSelfRegistration.html.twig", 39);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:WorkspaceTag:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["__internal_48a24d792f7288ace35f9024e7291e3571d6ce3c44987c4fad765d471c2a41f4"] = $this;
        // line 39
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register_to_a_public_workspace", array(), "platform"))), "html", null, true);
    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel='stylesheet' type='text/css' href='";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/workspace/workspace-list.css"), "html", null, true);
        echo "'>
";
    }

    // line 48
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 50
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-book", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_list")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register_to_a_public_workspace", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 61
        echo "
";
    }

    // line 64
    public function block_section_content($context, array $blocks = array())
    {
        // line 65
        echo "
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register_to_a_public_workspace", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    
    <div id=\"workspace-list-div\" class=\"panel-body\">
        
        ";
        // line 72
        if (((isset($context["search"]) ? $context["search"] : null) != "")) {
            // line 73
            echo "            <div class=\"alert alert-info\">
                ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("results_for_search_on", array(), "platform"), "html", null, true);
            echo " :
                \"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
            echo "\"
            </div>
        ";
        }
        // line 78
        echo "        <div class=\"row\">
            <div class=\"input-group col-md-4 pull-right\">
                <input class=\"form-control\"
                       type=\"text\"
                       id=\"search-workspace-input\"
                       placeholder=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search", array(), "platform"), "html", null, true);
        echo "\"
                       value=";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "
                >
                <span class=\"input-group-btn\">
                    <button class=\"filter btn btn-default\" type=\"button\" id=\"search-workspace-btn\">
                        <i class=\"fa fa-search\"></i>
                    </button>
                </span>
            </div>
        </div>
        <br>
        
        ";
        // line 95
        if (twig_test_empty((isset($context["workspaces"]) ? $context["workspaces"] : null))) {
            // line 96
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("public_workspace_empty", array(), "platform"), "html", null, true);
            echo "
        ";
        } else {
            // line 98
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <a  class=\"accordion-toggle\"
                        data-toggle=\"collapse\"
                        data-parent=\"#accordion-all\"
                        href=\"#collapse-all\"
                    >
                        <i class=\"fa fa-align-justify\"></i>
                        ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_available_workspaces", array(), "platform"), "html", null, true);
            echo "
                        <i class=\"fa fa-chevron-down pull-right\"></i>
                    </a>
                </div>
                <div id=\"collapse-all\" class=\"panel-body collapse ";
            // line 110
            if ((twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) == 0)) {
                echo "in";
            }
            echo "\">
                    ";
            // line 111
            $this->loadTemplate("ClarolineCoreBundle:Workspace:workspaceCompleteListWithSelfRegPager.html.twig", "ClarolineCoreBundle:Workspace:listWorkspacesWithSelfRegistration.html.twig", 111)->display($context);
            // line 112
            echo "                </div>
            </div>
        ";
        }
        // line 115
        echo "
        ";
        // line 116
        echo $context["__internal_48a24d792f7288ace35f9024e7291e3571d6ce3c44987c4fad765d471c2a41f4"]->getshowTag((isset($context["rootTags"]) ? $context["rootTags"] : null), (isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["hierarchy"]) ? $context["hierarchy"] : null), "0", (isset($context["displayable"]) ? $context["displayable"] : null), (isset($context["listworkspacePending"]) ? $context["listworkspacePending"] : null));
        echo "
    </div>

    <div id=\"twig-self-registration-user-id\" data-user-id=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method"), "html", null, true);
        echo "\">
    </div>

    <div id=\"confirm-registration-validation-box\" class=\"modal fade\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace_registration_confirm_title", array(), "platform"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"registration-confirm-message\">
                        ";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace_registration_confirm_message", array(), "platform"), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" id=\"registration-confirm-ok\" class=\"btn btn-primary\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
    
    <div id=\"confirm-queue-removal-box\" class=\"modal fade\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4>";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace_queue_cancel_confirm_title", array(), "platform"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"registration-confirm-message\">
                        ";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace_queue_cancel_confirm_message", array(), "platform"), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" id=\"workspace-queue-cancel-confirm-ok\" class=\"btn btn-primary\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script
        src='";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/workspace/self_registration.js"), "html", null, true);
        echo "'
        type=\"text/javascript\">
    </script>
";
    }

    // line 1
    public function getshowTag($__tagsList__ = null, $__tagWorkspaces__ = null, $__hierarchy__ = null, $__index__ = null, $__displayable__ = null, $__listworkspacePending__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "tagsList" => $__tagsList__,
            "tagWorkspaces" => $__tagWorkspaces__,
            "hierarchy" => $__hierarchy__,
            "index" => $__index__,
            "displayable" => $__displayable__,
            "listworkspacePending" => $__listworkspacePending__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "        ";
                $context["workspaceTagId"] = $this->getAttribute($context["tag"], "getId", array(), "method");
                // line 5
                echo "
        ";
                // line 6
                if ($this->getAttribute((isset($context["displayable"]) ? $context["displayable"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array")) {
                    // line 7
                    echo "            ";
                    $context["currentIndex"] = (((isset($context["index"]) ? $context["index"] : null) . "-") . (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null));
                    // line 8
                    echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <a  class=\"accordion-toggle\"
                        data-toggle=\"collapse\"
                        href=\"#collapse-";
                    // line 12
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-align-justify\"></i>
                        ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array(), "method"), "html", null, true);
                    echo "
                        <i class=\"fa fa-chevron-down pull-right\"></i>
                    </a>
                </div>
                <div id=\"collapse-";
                    // line 19
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\" class=\"panel-body collapse\">

                    ";
                    // line 21
                    if (($this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array")) > 0))) {
                        // line 22
                        echo "                        ";
                        echo $this->getAttribute($this, "showTag", array(0 => $this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array"), 1 => (isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), 2 => (isset($context["hierarchy"]) ? $context["hierarchy"] : null), 3 => (isset($context["currentIndex"]) ? $context["currentIndex"] : null), 4 => (isset($context["displayable"]) ? $context["displayable"] : null), 5 => (isset($context["listworkspacePending"]) ? $context["listworkspacePending"] : null)), "method");
                        echo "
                    ";
                    }
                    // line 24
                    echo "
                    ";
                    // line 25
                    if ($this->getAttribute((isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array", true, true)) {
                        // line 26
                        echo "                        ";
                        $context["relations"] = $this->getAttribute((isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array");
                        // line 27
                        echo "                        <div id=\"workspace-list-pager-";
                        echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                        echo "\" class=\"workspace-list-pager\">
                            ";
                        // line 28
                        $this->loadTemplate("ClarolineCoreBundle:Workspace:workspaceListWithSelfRegByTagPager.html.twig", "ClarolineCoreBundle:Workspace:listWorkspacesWithSelfRegistration.html.twig", 28)->display($context);
                        // line 29
                        echo "                        </div>
                    ";
                    }
                    // line 31
                    echo "                </div>
            </div>
        ";
                }
                // line 34
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Workspace:listWorkspacesWithSelfRegistration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 34,  357 => 31,  353 => 29,  351 => 28,  346 => 27,  343 => 26,  341 => 25,  338 => 24,  332 => 22,  330 => 21,  325 => 19,  318 => 15,  312 => 12,  306 => 8,  303 => 7,  301 => 6,  298 => 5,  295 => 4,  278 => 3,  275 => 2,  258 => 1,  250 => 167,  244 => 165,  241 => 164,  230 => 156,  226 => 155,  219 => 151,  212 => 147,  198 => 136,  194 => 135,  187 => 131,  180 => 127,  169 => 119,  163 => 116,  160 => 115,  155 => 112,  153 => 111,  147 => 110,  140 => 106,  130 => 98,  124 => 96,  122 => 95,  108 => 84,  104 => 83,  97 => 78,  91 => 75,  87 => 74,  84 => 73,  82 => 72,  74 => 67,  70 => 65,  67 => 64,  62 => 61,  60 => 50,  58 => 49,  55 => 48,  49 => 45,  44 => 44,  41 => 43,  35 => 41,  31 => 39,  29 => 37,  11 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Workspace:listWorkspacesWithSelfRegistration.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Workspace/listWorkspacesWithSelfRegistration.html.twig");
    }
}
