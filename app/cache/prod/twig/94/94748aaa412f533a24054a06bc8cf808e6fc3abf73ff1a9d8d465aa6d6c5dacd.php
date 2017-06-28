<?php

/* ClarolineCoreBundle:User:userPicker.html.twig */
class __TwigTemplate_5f5edd52c9b724df45fa8bcb29ea698910fb5d1e4882db666ed92cb7caec306f extends Twig_Template
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
        echo "<div class=\"modal-dialog user-picker-modal\" id=\"user-picker-modal-";
        echo twig_escape_filter($this->env, (isset($context["pickerName"]) ? $context["pickerName"] : null), "html", null, true);
        echo "\">
    <div id=\"user-picker-modal-content\" class=\"modal-content\">
        <div class='modal-header'>
            <button type=\"button\"
                    class=\"close\"
                    data-dismiss=\"modal\"
                    aria-hidden=\"true\"
            >
                &times;
            </button>
            <h4 class=\"modal-title\">
                ";
        // line 12
        echo (isset($context["pickerTitle"]) ? $context["pickerTitle"] : null);
        echo "
            </h4>
        </div>
        <div class='modal-body' id=\"user-picker-body\">
            <div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
                
                ";
        // line 18
        if (((isset($context["showFilters"]) ? $context["showFilters"] : null) == 1)) {
            // line 19
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <span data-toggle=\"collapse\"
                                      href=\"#collapse-filters-box\"
                                      class=\"pointer-hand\"
                                >
                                    ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filters", array(), "platform"), "html", null, true);
            echo "
                                </span>
                                &nbsp;
                                <span class=\"badge\" id=\"filters-box-badge\">
                                    0
                                </span>
                            </h4>
                        </div>
                        <div id=\"collapse-filters-box\"
                             class=\"panel-collapse collapse\"
                        >
                            <div class=\"panel-body\">
                                <div class=\"alert alert-warning\" id=\"picker-no-filter-alert\">
                                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_filter", array(), "platform"), "html", null, true);
            echo "
                                </div>
                                <ul class=\"col-md-12 list-inline\" id=\"filters-list-box\">
                                </ul>
                                <hr>
                                <div id=\"filter-creation-box\">
                                    <div class=\"col-md-12 margin-bottom-sm\" id=\"box-filter-level-1\">
                                        <select class=\"form-control\" id=\"filter-level-1\">
                                            <option value=\"none\">
                                                --- ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("select_a_filter_type", array(), "platform"), "html", null, true);
            echo " ---
                                            </option>
                                            <option value=\"group\">
                                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group", array(), "platform"), "html", null, true);
            echo "
                                            </option>
                                            
                                            ";
            // line 54
            if ((isset($context["isAdmin"]) ? $context["isAdmin"] : null)) {
                // line 55
                echo "                                                <option value=\"role\">
                                                    ";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("role", array(), "platform"), "html", null, true);
                echo "
                                                </option>
                                            ";
            }
            // line 59
            echo "                                            <option value=\"workspace\">
                                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace", array(), "platform"), "html", null, true);
            echo "
                                            </option>
                                        </select>
                                    </div>
                                    <div class=\"col-md-12 margin-bottom-sm hidden\" id=\"box-filter-level-2\">
                                        <select class=\"form-control\" id=\"filter-level-2\">
                                            <option value=\"none\">
                                                ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("none", array(), "platform"), "html", null, true);
            echo "
                                            </option>
                                        </select>
                                    </div>
                                    <div class=\"col-md-12 margin-bottom-sm hidden\" id=\"box-filter-level-3\">
                                        <select class=\"form-control\" id=\"filter-level-3\">
                                            <option value=\"none\">
                                                ";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("none", array(), "platform"), "html", null, true);
            echo "
                                            </option>
                                        </select>
                                    </div>
                                    <div class=\"col-md-12 hidden\" id=\"box-filter-create-btn\">
                                        <span class=\"btn btn-primary\" id=\"filter-create-btn\">
                                            ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_filter", array(), "platform"), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 88
        echo "
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <span data-toggle=\"collapse\"
                                  href=\"#collapse-users-box\"
                                  class=\"pointer-hand\"
                            >
                                ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("selected_users", array(), "platform"), "html", null, true);
        echo "
                            </span>
                            &nbsp;
                            <span class=\"badge\" id=\"selected-users-box-badge\">
                                0
                            </span>
                        </h4>
                    </div>
                    <div id=\"collapse-users-box\"
                         class=\"panel-collapse collapse\"
                    >
                        <div class=\"panel-body\">
                            <div class=\"alert alert-warning\" id=\"picker-no-user-alert\">
                                ";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_user", array(), "platform"), "html", null, true);
        echo "
                            </div>
                            <ul class=\"list-inline\" id=\"selected-users-list-box\">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
                
            <div id=\"user-picker-users-list\">
                ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:User:usersListForUserPicker", array("mode" =>         // line 124
(isset($context["mode"]) ? $context["mode"] : null), "showAllUsers" =>         // line 125
(isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), "showId" =>         // line 126
(isset($context["showId"]) ? $context["showId"] : null), "showPicture" =>         // line 127
(isset($context["showPicture"]) ? $context["showPicture"] : null), "showUsername" =>         // line 128
(isset($context["showUsername"]) ? $context["showUsername"] : null), "showMail" =>         // line 129
(isset($context["showMail"]) ? $context["showMail"] : null), "showCode" =>         // line 130
(isset($context["showCode"]) ? $context["showCode"] : null), "showGroups" =>         // line 131
(isset($context["showGroups"]) ? $context["showGroups"] : null), "showPlatformRoles" =>         // line 132
(isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), "attachName" =>         // line 133
(isset($context["attachName"]) ? $context["attachName"] : null)), array("excludedUserIds" =>         // line 136
(isset($context["excludedUsersIds"]) ? $context["excludedUsersIds"] : null), "forcedUserIds" =>         // line 137
(isset($context["forcedUsersIds"]) ? $context["forcedUsersIds"] : null), "forcedGroupIds" =>         // line 138
(isset($context["forcedGroupsIds"]) ? $context["forcedGroupsIds"] : null), "forcedRoleIds" =>         // line 139
(isset($context["forcedRolesIds"]) ? $context["forcedRolesIds"] : null), "forcedWorkspaceIds" =>         // line 140
(isset($context["forcedWorkspacesIds"]) ? $context["forcedWorkspacesIds"] : null), "shownWorkspaceIds" =>         // line 141
(isset($context["shownWorkspacesIds"]) ? $context["shownWorkspacesIds"] : null))));
        // line 144
        echo "
            </div>
        </div>
            
        <div class=\"modal-footer\">
            <button type=\"button\"
                    id=\"user-picker-close-modal-btn\"
                    class=\"btn btn-default\"
                    data-dismiss=\"modal\"
            >
                ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </button>
            <button class=\"btn btn-primary submit\">
                ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
            </button>
        </div>
    </div>
</div>

<div id=\"user-picker-main-datas-box\"
     data-selected-users-names=\"";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedUsers"]) ? $context["selectedUsers"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getFirstName", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getLastName", array(), "method"), "html", null, true);
            if (((isset($context["showUsername"]) ? $context["showUsername"] : null) == 1)) {
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getUsername", array(), "method"), "html", null, true);
                echo ")";
            }
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ";;;";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
</div>";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:User:userPicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 164,  224 => 157,  218 => 154,  206 => 144,  204 => 141,  203 => 140,  202 => 139,  201 => 138,  200 => 137,  199 => 136,  198 => 133,  197 => 132,  196 => 131,  195 => 130,  194 => 129,  193 => 128,  192 => 127,  191 => 126,  190 => 125,  189 => 124,  188 => 120,  174 => 109,  158 => 96,  148 => 88,  137 => 80,  128 => 74,  118 => 67,  108 => 60,  105 => 59,  99 => 56,  96 => 55,  94 => 54,  88 => 51,  82 => 48,  70 => 39,  54 => 26,  45 => 19,  43 => 18,  34 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:User:userPicker.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/User/userPicker.html.twig");
    }
}
