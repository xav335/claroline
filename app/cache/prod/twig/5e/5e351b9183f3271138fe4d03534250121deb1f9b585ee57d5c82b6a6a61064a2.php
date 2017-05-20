<?php

/* ClarolineCoreBundle:Workspace:listWorkspacesByUser.html.twig */
class __TwigTemplate_404facabf33495494210bbadf35872d336c3b8b702ac1bd07d16493d5e5279f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 53
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:WorkspaceTag:layout.html.twig", "ClarolineCoreBundle:Workspace:listWorkspacesByUser.html.twig", 53);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        // line 51
        $context["__internal_22fc4814082bc59633537eb7e4fd492ef8e38bdf1c7fb386d9a5da26eef661a3"] = $this;
        // line 53
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 55
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_workspaces", array(), "platform"))), "html", null, true);
    }

    // line 57
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 59
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-book", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_list")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_workspaces", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 70
        echo "
";
    }

    // line 73
    public function block_section_content($context, array $blocks = array())
    {
        // line 74
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_workspaces", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "

    <div class=\"panel-body\">
        <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_manage_workspace_tag");
        echo "\" class=\"btn btn-default\" role=\"button\">
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("classify_my_workspaces", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_list_workspaces_with_self_unregistration");
        echo "\" class=\"btn btn-default\" role=\"button\">
            ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("unregister_from_a_workspace", array(), "platform"), "html", null, true);
        echo "
        </a>
        ";
        // line 86
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 87
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_list_workspaces_with_self_registration");
            echo "\" class=\"btn btn-default\" role=\"button\">
                ";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register_to_a_workspace", array(), "platform"), "html", null, true);
            echo "
            </a>
        ";
        }
        // line 91
        echo "        <hr>
        ";
        // line 92
        if (twig_test_empty((isset($context["workspaces"]) ? $context["workspaces"] : null))) {
            // line 93
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_workspace", array(), "platform"), "html", null, true);
            echo "
        ";
        } else {
            // line 95
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <a  class=\"accordion-toggle\"
                        data-toggle=\"collapse\"
                        data-parent=\"#accordion-all\"
                        href=\"#collapse-all\"
                    >
                        <i class=\"fa fa-align-justify\"></i>
                        ";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_my_workspaces", array(), "platform"), "html", null, true);
            echo "
                        <i class=\"fa fa-chevron-down pull-right\"></i>
                    </a>
                </div>
                <div id=\"collapse-all\" class=\"list-group collapse ";
            // line 107
            if ((twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) == 0)) {
                echo "in";
            }
            echo "\">
                    ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["workspaces"]) ? $context["workspaces"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["workspace"]) {
                // line 109
                echo "                    ";
                $context["workspaceId"] = $this->getAttribute($context["workspace"], "getId", array(), "method");
                // line 110
                echo "                    ";
                if ($this->env->getExtension('Claroline\CoreBundle\Twig\WorkspaceAccessExtension')->hasAccess($this->getAttribute($context["workspace"], "getId", array(), "method"))) {
                    // line 111
                    echo "                        <a  class=\"list-group-item\" class=\"row-workspace row-workspace-id-";
                    echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                    echo "\"
                            href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open", array("workspaceId" =>                     // line 113
(isset($context["workspaceId"]) ? $context["workspaceId"] : null), "toolName" => "home")), "html", null, true);
                    echo "\"
                            id=\"link-home-";
                    // line 114
                    echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                    echo "\"
                        >
                            <i class=\"fa fa-book\"></i>
                            ";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["workspace"], "getName", array(), "method"), "html", null, true);
                    echo "
                            <span><small>(";
                    // line 118
                    echo twig_escape_filter($this->env, $this->getAttribute($context["workspace"], "getCode", array(), "method"), "html", null, true);
                    echo ")</small></span>
                            <span class=\"favourite-workspace-btn pull-right\" workspace-id=\"";
                    // line 119
                    echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                    echo "\">
                                <i class=\"favourite-workspace-icon-";
                    // line 120
                    echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                    echo "
                                    ";
                    // line 121
                    if ($this->getAttribute((isset($context["favourites"]) ? $context["favourites"] : null), (isset($context["workspaceId"]) ? $context["workspaceId"] : null), array(), "array", true, true)) {
                        // line 122
                        echo "                                        fa fa-star
                                    ";
                    } else {
                        // line 124
                        echo "                                        fa fa-star-o
                                    ";
                    }
                    // line 125
                    echo "\"
                                   style=\"color:gold; font-size:175%\"
                               ></i>
                            </span>
                        </a>
                    ";
                }
                // line 131
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workspace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                </div>
            </div>
        ";
        }
        // line 135
        echo "
        ";
        // line 136
        echo $context["__internal_22fc4814082bc59633537eb7e4fd492ef8e38bdf1c7fb386d9a5da26eef661a3"]->getshowTag((isset($context["rootTags"]) ? $context["rootTags"] : null), (isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["hierarchy"]) ? $context["hierarchy"] : null), "0", (isset($context["displayable"]) ? $context["displayable"] : null), (isset($context["favourites"]) ? $context["favourites"] : null));
        echo "
    </div>

";
    }

    // line 141
    public function block_javascripts($context, array $blocks = array())
    {
        // line 142
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script
        src='";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/workspace/listWorkspaceByUser.js"), "html", null, true);
        echo "'
        type=\"text/javascript\">
    </script>
";
    }

    // line 1
    public function getshowTag($__tagsList__ = null, $__tagWorkspaces__ = null, $__hierarchy__ = null, $__index__ = null, $__displayable__ = null, $__favourites__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "tagsList" => $__tagsList__,
            "tagWorkspaces" => $__tagWorkspaces__,
            "hierarchy" => $__hierarchy__,
            "index" => $__index__,
            "displayable" => $__displayable__,
            "favourites" => $__favourites__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tagsList"]) ? $context["tagsList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 3
                echo "    ";
                if ($this->getAttribute((isset($context["displayable"]) ? $context["displayable"] : null), $this->getAttribute($context["tag"], "getId", array(), "method"), array(), "array")) {
                    // line 4
                    echo "    ";
                    $context["currentIndex"] = (((isset($context["index"]) ? $context["index"] : null) . "-") . $this->getAttribute($context["tag"], "getId", array(), "method"));
                    // line 5
                    echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a  class=\"accordion-toggle\"
                data-toggle=\"collapse\"
                href=\"#collapse-";
                    // line 9
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\"
            >
                <i class=\"fa fa-align-justify\"></i>
                ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array(), "method"), "html", null, true);
                    echo "
                <i class=\"fa fa-chevron-down pull-right\"></i>
            </a>
        </div>
        <div id=\"collapse-";
                    // line 16
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\" class=\"panel-body collapse\">
            ";
                    // line 17
                    if (($this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), $this->getAttribute($context["tag"], "getId", array(), "method"), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), $this->getAttribute($context["tag"], "getId", array(), "method"), array(), "array")) > 0))) {
                        // line 18
                        echo "            ";
                        echo $this->getAttribute($this, "showTag", array(0 => $this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), $this->getAttribute($context["tag"], "getId", array(), "method"), array(), "array"), 1 => (isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), 2 => (isset($context["hierarchy"]) ? $context["hierarchy"] : null), 3 => (isset($context["currentIndex"]) ? $context["currentIndex"] : null), 4 => (isset($context["displayable"]) ? $context["displayable"] : null), 5 => (isset($context["favourites"]) ? $context["favourites"] : null)), "method");
                        echo "
            ";
                    }
                    // line 20
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), $this->getAttribute($context["tag"], "id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["relWorkspaceTag"]) {
                        // line 21
                        echo "                ";
                        $context["workspace"] = $this->getAttribute($context["relWorkspaceTag"], "getWorkspace", array(), "method");
                        // line 22
                        echo "                ";
                        $context["workspaceId"] = $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method");
                        // line 23
                        echo "                <a class=\"list-group-item row-workspace row-workspace-id-";
                        echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                        echo "\"
                    ";
                        // line 24
                        $context["granted"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("home", (isset($context["workspace"]) ? $context["workspace"] : null));
                        // line 25
                        echo "                    ";
                        if (((isset($context["granted"]) ? $context["granted"] : null) == true)) {
                            // line 26
                            echo "                        href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open", array("workspaceId" =>                             // line 27
(isset($context["workspaceId"]) ? $context["workspaceId"] : null), "toolName" => "home")), "html", null, true);
                            echo "\"
                        id=\"link-home-";
                            // line 28
                            echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                            echo "\"
                    ";
                        }
                        // line 30
                        echo "                >
                    <i class=\"fa fa-book\"></i>
                    ";
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getName", array(), "method"), "html", null, true);
                        echo "
                    <span><small>(";
                        // line 33
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getCode", array(), "method"), "html", null, true);
                        echo ")</small></span>
                    <span class=\"favourite-workspace-btn pull-right\" workspace-id=\"";
                        // line 34
                        echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                        echo "\">
                        <i class=\"favourite-workspace-icon-";
                        // line 35
                        echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                        echo "
                            ";
                        // line 36
                        if ($this->getAttribute((isset($context["favourites"]) ? $context["favourites"] : null), (isset($context["workspaceId"]) ? $context["workspaceId"] : null), array(), "array", true, true)) {
                            // line 37
                            echo "                                fa fa-star
                            ";
                        } else {
                            // line 39
                            echo "                                fa fa-star-o
                            ";
                        }
                        // line 40
                        echo "\"
                       ></i>
                    </span>
                </a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relWorkspaceTag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "        </div>
    </div>
    ";
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
        return "ClarolineCoreBundle:Workspace:listWorkspacesByUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 45,  353 => 40,  349 => 39,  345 => 37,  343 => 36,  339 => 35,  335 => 34,  331 => 33,  327 => 32,  323 => 30,  318 => 28,  314 => 27,  312 => 26,  309 => 25,  307 => 24,  302 => 23,  299 => 22,  296 => 21,  291 => 20,  285 => 18,  283 => 17,  279 => 16,  272 => 12,  266 => 9,  260 => 5,  257 => 4,  254 => 3,  250 => 2,  233 => 1,  225 => 144,  219 => 142,  216 => 141,  208 => 136,  205 => 135,  200 => 132,  194 => 131,  186 => 125,  182 => 124,  178 => 122,  176 => 121,  172 => 120,  168 => 119,  164 => 118,  160 => 117,  154 => 114,  150 => 113,  149 => 112,  144 => 111,  141 => 110,  138 => 109,  134 => 108,  128 => 107,  121 => 103,  111 => 95,  105 => 93,  103 => 92,  100 => 91,  94 => 88,  89 => 87,  87 => 86,  82 => 84,  78 => 83,  73 => 81,  69 => 80,  63 => 77,  58 => 75,  55 => 74,  52 => 73,  47 => 70,  45 => 59,  43 => 58,  40 => 57,  34 => 55,  30 => 53,  28 => 51,  11 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Workspace:listWorkspacesByUser.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Workspace/listWorkspacesByUser.html.twig");
    }
}
