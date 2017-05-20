<?php

/* ClarolineCoreBundle:Administration\WorkspaceRegistration:registrationManagementCompleteWorkspacesList.html.twig */
class __TwigTemplate_4c3144d406d87ce44df955c2d2e1a774427793845ae4b3f4318629911b4b8d76 extends Twig_Template
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
        // line 56
        echo "
";
        // line 57
        $context["__internal_157c94d232b924db27bf89af5497943622c021dce26983d939c7ba2e22b92fe5"] = $this;
        // line 58
        echo "
<div class=\"panel-group\">
    
    ";
        // line 61
        if (((twig_length_filter($this->env, (isset($context["nonPersonalWs"]) ? $context["nonPersonalWs"] : null)) == 0) && (twig_length_filter($this->env, (isset($context["personalWs"]) ? $context["personalWs"] : null)) == 0))) {
            // line 62
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_workspace", array(), "platform"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 66
            echo "    
        ";
            // line 67
            if ((twig_length_filter($this->env, (isset($context["nonPersonalWs"]) ? $context["nonPersonalWs"] : null)) > 0)) {
                // line 68
                echo "            <div class=\"panel panel-default\" id=\"accordion-all-non-personal\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        <a  class=\"accordion-toggle\"
                            data-toggle=\"collapse\"
                            data-parent=\"#accordion-all-non-personal\"
                            href=\"#collapse-all-non-personal\"
                        >
                            <i class=\"fa fa-align-justify\"></i>
                            ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_public_workspaces", array(), "platform"), "html", null, true);
                echo "
                            <input
                                class=\"accordion-checkbox pull-right\"
                                type=\"checkbox\"
                                value=\"all-non-personal\"
                            >
                        </a>
                    </div>
                </div>
                <div id=\"collapse-all-non-personal\" class=\"collapse ";
                // line 86
                if ((twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) == 0)) {
                    echo "in";
                }
                echo "\">
                    <div id=\"workspace-list-pager-all\" class=\"workspace-list-pager\">
                        ";
                // line 88
                $this->loadTemplate("ClarolineCoreBundle:Workspace:nonPersonalWorkspacesListRegistrationPager.html.twig", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagementCompleteWorkspacesList.html.twig", 88)->display($context);
                // line 89
                echo "                    </div>
                </div>
            </div>
        ";
            }
            // line 93
            echo "
        ";
            // line 94
            if ((twig_length_filter($this->env, (isset($context["personalWs"]) ? $context["personalWs"] : null)) > 0)) {
                // line 95
                echo "            <div class=\"panel panel-default\" id=\"accordion-all-personal\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">
                        <a  class=\"accordion-toggle\"
                            data-toggle=\"collapse\"
                            data-parent=\"#accordion-all-personal\"
                            href=\"#collapse-all-personal\"
                        >
                            <i class=\"fa fa-align-justify\"></i>
                            ";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_public_personal_workspaces", array(), "platform"), "html", null, true);
                echo "
                            <input
                                class=\"accordion-checkbox pull-right\"
                                type=\"checkbox\"
                                value=\"all-personal\"
                            >
                        </a>
                    </div>
                </div>
                <div id=\"collapse-all-personal\" class=\"collapse ";
                // line 113
                if ((twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) == 0)) {
                    echo "in";
                }
                echo "\">
                    <div id=\"workspace-list-pager-all\" class=\"workspace-list-pager\">
                        ";
                // line 115
                $this->loadTemplate("ClarolineCoreBundle:Workspace:personalWorkspacesListRegistrationPager.html.twig", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagementCompleteWorkspacesList.html.twig", 115)->display($context);
                // line 116
                echo "                    </div>
                </div>
            </div>
        ";
            }
            // line 120
            echo "    ";
        }
        // line 121
        echo "    
    ";
        // line 122
        echo $context["__internal_157c94d232b924db27bf89af5497943622c021dce26983d939c7ba2e22b92fe5"]->getshowTag((isset($context["rootTags"]) ? $context["rootTags"] : null), (isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["hierarchy"]) ? $context["hierarchy"] : null), "0", (isset($context["displayable"]) ? $context["displayable"] : null));
        echo "
</div>
";
    }

    // line 1
    public function getshowTag($__tagsList__ = null, $__tagWorkspaces__ = null, $__hierarchy__ = null, $__index__ = null, $__displayable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "tagsList" => $__tagsList__,
            "tagWorkspaces" => $__tagWorkspaces__,
            "hierarchy" => $__hierarchy__,
            "index" => $__index__,
            "displayable" => $__displayable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
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
                // line 3
                echo "    ";
                $context["workspaceTagId"] = $this->getAttribute($context["tag"], "getId", array(), "method");
                // line 4
                echo "    ";
                if ($this->getAttribute((isset($context["displayable"]) ? $context["displayable"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array")) {
                    // line 5
                    echo "        ";
                    $context["currentIndex"] = (((isset($context["index"]) ? $context["index"] : null) . "-") . (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null));
                    // line 6
                    echo "        ";
                    $context["workspace"] = $this->getAttribute($context["tag"], "getWorkspace", array(), "method");
                    // line 7
                    echo "        ";
                    if ( !(null === (isset($context["workspace"]) ? $context["workspace"] : null))) {
                        // line 8
                        echo "            ";
                        $context["workspaceId"] = $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method");
                        // line 9
                        echo "            ";
                        $context["workspaceName"] = $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getName", array(), "method");
                        // line 10
                        echo "            ";
                        $context["workspaceCode"] = $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getCode", array(), "method");
                        // line 11
                        echo "        ";
                    }
                    // line 12
                    echo "        <div class=\"panel panel-default panel-root\" current-index=\"";
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">
                    <a  class=\"accordion-toggle\"
                        data-toggle=\"collapse\"
                        href=\"#collapse-";
                    // line 17
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-align-justify\"></i>
                        ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "getName", array(), "method"), "html", null, true);
                    echo "
                        ";
                    // line 21
                    if ( !(null === (isset($context["workspace"]) ? $context["workspace"] : null))) {
                        // line 22
                        echo "                            <span style=\"color:#B29EA1\">
                                [
                                <i class=\"fa fa-book\"></i>
                                ";
                        // line 25
                        echo twig_escape_filter($this->env, (isset($context["workspaceName"]) ? $context["workspaceName"] : null), "html", null, true);
                        echo "
                                <small>(";
                        // line 26
                        echo twig_escape_filter($this->env, (isset($context["workspaceCode"]) ? $context["workspaceCode"] : null), "html", null, true);
                        echo ")</small>
                                ]
                            </span>
                        ";
                    }
                    // line 30
                    echo "                    <input
                        class=\"chk-workspaces-";
                    // line 31
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo " accordion-checkbox chk-workspace
                            ";
                    // line 32
                    if ( !(null === (isset($context["workspace"]) ? $context["workspace"] : null))) {
                        echo "workspace-linked";
                    }
                    echo " pull-right\"
                        type=\"checkbox\"
                        value=\"";
                    // line 34
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\"
                        ";
                    // line 35
                    if ( !(null === (isset($context["workspace"]) ? $context["workspace"] : null))) {
                        echo "workspace-id=\"";
                        echo twig_escape_filter($this->env, (isset($context["workspaceId"]) ? $context["workspaceId"] : null), "html", null, true);
                        echo "\"";
                    }
                    // line 36
                    echo "                    >
                 </div>
                </a>
            </div>
            <div id=\"collapse-";
                    // line 40
                    echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                    echo "\" class=\"panel-body collapse\">
                ";
                    // line 41
                    if (($this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array")) > 0))) {
                        // line 42
                        echo "                    ";
                        echo $this->getAttribute($this, "showTag", array(0 => $this->getAttribute((isset($context["hierarchy"]) ? $context["hierarchy"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array"), 1 => (isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), 2 => (isset($context["hierarchy"]) ? $context["hierarchy"] : null), 3 => (isset($context["currentIndex"]) ? $context["currentIndex"] : null), 4 => (isset($context["displayable"]) ? $context["displayable"] : null)), "method");
                        echo "
                ";
                    }
                    // line 44
                    echo "                ";
                    if (($this->getAttribute((isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array")) > 0))) {
                        // line 45
                        echo "                    ";
                        $context["relations"] = $this->getAttribute((isset($context["tagWorkspaces"]) ? $context["tagWorkspaces"] : null), (isset($context["workspaceTagId"]) ? $context["workspaceTagId"] : null), array(), "array");
                        // line 46
                        echo "                    <div id=\"workspace-list-pager-";
                        echo twig_escape_filter($this->env, (isset($context["currentIndex"]) ? $context["currentIndex"] : null), "html", null, true);
                        echo "\" class=\"workspace-list-pager\">
                        ";
                        // line 47
                        $this->loadTemplate("ClarolineCoreBundle:Workspace:workspaceListByTagRegistrationPager.html.twig", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagementCompleteWorkspacesList.html.twig", 47)->display($context);
                        // line 48
                        echo "                    </div>
                ";
                    }
                    // line 50
                    echo "
            </div>
        </div>
    ";
                }
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
        return "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagementCompleteWorkspacesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 50,  291 => 48,  289 => 47,  284 => 46,  281 => 45,  278 => 44,  272 => 42,  270 => 41,  266 => 40,  260 => 36,  254 => 35,  250 => 34,  243 => 32,  239 => 31,  236 => 30,  229 => 26,  225 => 25,  220 => 22,  218 => 21,  214 => 20,  208 => 17,  199 => 12,  196 => 11,  193 => 10,  190 => 9,  187 => 8,  184 => 7,  181 => 6,  178 => 5,  175 => 4,  172 => 3,  155 => 2,  139 => 1,  132 => 122,  129 => 121,  126 => 120,  120 => 116,  118 => 115,  111 => 113,  99 => 104,  88 => 95,  86 => 94,  83 => 93,  77 => 89,  75 => 88,  68 => 86,  56 => 77,  45 => 68,  43 => 67,  40 => 66,  34 => 63,  31 => 62,  29 => 61,  24 => 58,  22 => 57,  19 => 56,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagementCompleteWorkspacesList.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/WorkspaceRegistration/registrationManagementCompleteWorkspacesList.html.twig");
    }
}
