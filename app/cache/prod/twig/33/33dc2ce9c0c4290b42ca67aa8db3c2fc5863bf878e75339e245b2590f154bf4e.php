<?php

/* ClarolineCoreBundle:Form:user_picker.html.twig */
class __TwigTemplate_3c5bbe76d4c471f23b3be5f1221e73919a67bf689ee6d6ed2e163333ecdcbedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle:Form:user_picker.html.twig", 1);
        $this->blocks = array(
            'userpicker_widget' => array($this, 'block_userpicker_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_userpicker_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["timedPickerName"] = (((isset($context["picker_name"]) ? $context["picker_name"] : null) . "-") . twig_date_format_filter($this->env, "now", "U"));
        // line 6
        echo "
        ";
        // line 7
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 8
            echo "            <input type=\"text\"
                   name=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
            echo "\"
                   id=\"user-picker-input-";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
            echo "\"
                   ";
            // line 12
            echo "                   style=\"display: none;\"
                   ";
            // line 13
            if (array_key_exists("model", $context)) {
                // line 14
                echo "                       ng-model=\"";
                echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\"
                   ";
            }
            // line 16
            echo "
                   ";
            // line 17
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                // line 18
                echo "                       ";
                if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && twig_test_iterable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array")))) {
                    // line 19
                    echo "                           value=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                        if ($this->getAttribute($context["v"], "id", array(), "array", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array(), "array"), "html", null, true);
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo ",";
                            }
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
                           ";
                    // line 20
                    if (array_key_exists("model", $context)) {
                        // line 21
                        echo "                               ng-init='";
                        echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
                        echo ".";
                        echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
                        echo ".";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "=\"";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                            if ($this->getAttribute($context["v"], "id", array(), "array", true, true)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array(), "array"), "html", null, true);
                                if ( !$this->getAttribute($context["loop"], "last", array())) {
                                    echo ",";
                                }
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\"'
                           ";
                    }
                    // line 23
                    echo "                       ";
                } elseif (twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) {
                    // line 24
                    echo "                           value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), "html", null, true);
                    echo "\"
                           ";
                    // line 25
                    if (array_key_exists("model", $context)) {
                        // line 26
                        echo "                               ng-init='";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), "html", null, true);
                        echo "'
                           ";
                    }
                    // line 28
                    echo "                       ";
                } else {
                    // line 29
                    echo "                           value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\"
                           ";
                    // line 30
                    if (array_key_exists("model", $context)) {
                        // line 31
                        echo "                               ng-init='";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "'
                           ";
                    }
                    // line 33
                    echo "                       ";
                }
                // line 34
                echo "                   ";
            }
            // line 35
            echo "            >
        ";
        } else {
            // line 37
            echo "            <input type=\"text\"
                   name=\"";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
            echo "\"
                   id=\"user-picker-input-";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
            echo "\"
                   ";
            // line 41
            echo "                   style=\"display: none;\"

                   ";
            // line 43
            if (array_key_exists("model", $context)) {
                // line 44
                echo "                       ng-model=\"";
                echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\"
                       ng-init='";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\EscaperExtension')->ngEscape((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
                echo "\"'
                   ";
            }
            // line 47
            echo "
                   ";
            // line 48
            if ((( !twig_test_empty((isset($context["value"]) ? $context["value"] : null)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id", array(), "array", true, true))) {
                // line 49
                echo "                       value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id", array(), "array"), "html", null, true);
                echo "\"
                   ";
            } else {
                // line 51
                echo "                       value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"
                   ";
            }
            // line 53
            echo "            >
        ";
        }
        // line 55
        echo "        <div class=\"input-group\">
            <input type=\"text\"
                   class=\"form-control user-picker user-picker-input user-picker-";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
        echo "\"
                       
                   ";
        // line 59
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 60
            echo "                       ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 61
                echo "                           ";
                if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && twig_test_iterable($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array")))) {
                    // line 62
                    echo "                               value=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                        if ($this->getAttribute($context["v"], "name", array(), "array", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "name", array(), "array"), "html", null, true);
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo ",";
                            }
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
                               data-status=\"OK\"
                           ";
                } elseif (twig_test_iterable(                // line 64
(isset($context["value"]) ? $context["value"] : null))) {
                    // line 65
                    echo "                               data-value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), "html", null, true);
                    echo "\"
                               data-status=\"id\"
                           ";
                } else {
                    // line 68
                    echo "                               data-value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "\"
                               data-status=\"id\"
                           ";
                }
                // line 71
                echo "                           data-multiple=\"multiple\"
                       ";
            } elseif ($this->getAttribute(            // line 72
(isset($context["value"]) ? $context["value"] : null), "name", array(), "array", true, true)) {
                // line 73
                echo "                           value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "name", array(), "array"), "html", null, true);
                echo "\"
                           data-status=\"OK\"
                           data-multiple=\"single\"
                       ";
            } else {
                // line 77
                echo "                           data-value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"
                           data-status=\"id\"
                           data-multiple=\"single\"
                       ";
            }
            // line 81
            echo "                   ";
        } elseif ((twig_length_filter($this->env, (isset($context["selected_users"]) ? $context["selected_users"] : null)) > 0)) {
            // line 82
            echo "                       value=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selected_users"]) ? $context["selected_users"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getFirstName", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getLastName", array(), "method"), "html", null, true);
                if ((isset($context["show_username"]) ? $context["show_username"] : null)) {
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo ")";
                }
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"
                   ";
        }
        // line 84
        echo "                   id=\"user-picker-input-view-";
        echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
        echo "\"
                   placeholder=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_user", array(), "platform"), "html", null, true);
        echo "\"
            >
            <span class=\"input-group-btn\">
                <span class=\"btn btn-default user-picker user-picker-";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
        echo "\"
                      type=\"button\"
                >
                    <i class=\"fa fa-user\"></i>
                </span>
            </span>
        </div>

        <script type=\"text/javascript\">
            ";
        // line 97
        $context["excludedUserIds"] = array();
        // line 98
        echo "            ";
        $context["forcedUserIds"] = array();
        // line 99
        echo "            ";
        $context["selectedUserIds"] = array();
        // line 100
        echo "            ";
        $context["forcedGroupIds"] = array();
        // line 101
        echo "            ";
        $context["forcedRoleIds"] = array();
        // line 102
        echo "            ";
        $context["forcedWorkspaceIds"] = array();
        // line 103
        echo "            ";
        $context["shownWorkspaceIds"] = array();
        // line 104
        echo "
            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blacklist"]) ? $context["blacklist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 106
            echo "                ";
            $context["excludedUserIds"] = twig_array_merge((isset($context["excludedUserIds"]) ? $context["excludedUserIds"] : null), array(0 => $this->getAttribute($context["user"], "getId", array(), "method")));
            // line 107
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["whitelist"]) ? $context["whitelist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 110
            echo "                ";
            $context["forcedUserIds"] = twig_array_merge((isset($context["forcedUserIds"]) ? $context["forcedUserIds"] : null), array(0 => $this->getAttribute($context["user"], "getId", array(), "method")));
            // line 111
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selected_users"]) ? $context["selected_users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 114
            echo "                ";
            $context["selectedUserIds"] = twig_array_merge((isset($context["selectedUserIds"]) ? $context["selectedUserIds"] : null), array(0 => $this->getAttribute($context["user"], "getId", array(), "method")));
            // line 115
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forced_groups"]) ? $context["forced_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 118
            echo "                ";
            $context["forcedGroupIds"] = twig_array_merge((isset($context["forcedGroupIds"]) ? $context["forcedGroupIds"] : null), array(0 => $this->getAttribute($context["group"], "getId", array(), "method")));
            // line 119
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forced_roles"]) ? $context["forced_roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 122
            echo "                ";
            $context["forcedRoleIds"] = twig_array_merge((isset($context["forcedRoleIds"]) ? $context["forcedRoleIds"] : null), array(0 => $this->getAttribute($context["role"], "getId", array(), "method")));
            // line 123
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forced_workspaces"]) ? $context["forced_workspaces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["workspace"]) {
            // line 126
            echo "                ";
            $context["forcedWorkspaceIds"] = twig_array_merge((isset($context["forcedWorkspaceIds"]) ? $context["forcedWorkspaceIds"] : null), array(0 => $this->getAttribute($context["workspace"], "getId", array(), "method")));
            // line 127
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workspace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shown_workspaces"]) ? $context["shown_workspaces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["workspace"]) {
            // line 130
            echo "                ";
            $context["shownWorkspaceIds"] = twig_array_merge((isset($context["shownWorkspaceIds"]) ? $context["shownWorkspaceIds"] : null), array(0 => $this->getAttribute($context["workspace"], "getId", array(), "method")));
            // line 131
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workspace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "
            \$('body').on('click', '.user-picker-";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
        echo "', function () {
                var selectedUserIds = ";
        // line 134
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["selectedUserIds"]) ? $context["selectedUserIds"] : null)), "html", null, true);
        echo ";
                var inputValue = \$('#user-picker-input-";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
        echo "').val();
                var ids = inputValue.split(',');

                if (ids.length > 0 && ids[0] !== '') {
                    selectedUserIds = [];
                    
                    for (var i = 0; i < ids.length; i++) {
                        var id = parseInt(ids[i]);
                        
                        if (selectedUserIds.indexOf(id) === -1) {
                            selectedUserIds.push(id);
                        }
                    }
                }
                
                var userPicker = new UserPicker();
                var settings = {
                    picker_name: \"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
        echo "\",
                    picker_title: \"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["picker_title"]) ? $context["picker_title"] : null), "html", null, true);
        echo "\",
                    multiple: ";
        // line 154
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_all_users: ";
        // line 155
        if ((isset($context["show_all_users"]) ? $context["show_all_users"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_filters: ";
        // line 156
        if ((isset($context["show_filters"]) ? $context["show_filters"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_id: ";
        // line 157
        if ((isset($context["show_id"]) ? $context["show_id"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_picture: ";
        // line 158
        if ((isset($context["show_picture"]) ? $context["show_picture"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_username: ";
        // line 159
        if ((isset($context["show_username"]) ? $context["show_username"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_mail: ";
        // line 160
        if ((isset($context["show_mail"]) ? $context["show_mail"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_code: ";
        // line 161
        if ((isset($context["show_code"]) ? $context["show_code"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_groups: ";
        // line 162
        if ((isset($context["show_groups"]) ? $context["show_groups"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    show_platform_roles: ";
        // line 163
        if ((isset($context["show_platform_roles"]) ? $context["show_platform_roles"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    attach_name: ";
        // line 164
        if ((isset($context["attach_name"]) ? $context["attach_name"] : null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    blacklist: ";
        // line 165
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["excludedUserIds"]) ? $context["excludedUserIds"] : null)), "html", null, true);
        echo ",
                    whitelist: ";
        // line 166
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["forcedUserIds"]) ? $context["forcedUserIds"] : null)), "html", null, true);
        echo ",
                    selected_users: selectedUserIds,
                    forced_groups: ";
        // line 168
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["forcedGroupIds"]) ? $context["forcedGroupIds"] : null)), "html", null, true);
        echo ",
                    forced_roles: ";
        // line 169
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["forcedRoleIds"]) ? $context["forcedRoleIds"] : null)), "html", null, true);
        echo ",
                    forced_workspaces: ";
        // line 170
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["forcedWorkspaceIds"]) ? $context["forcedWorkspaceIds"] : null)), "html", null, true);
        echo ",
                    shown_workspaces: ";
        // line 171
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["shownWorkspaceIds"]) ? $context["shownWorkspaceIds"] : null)), "html", null, true);
        echo "
                };
                userPicker.configure(settings, null);
                userPicker.open();
            });
        </script>

        <script type=\"text/javascript\">
            (function () {
                var input = \$('#user-picker-input-view-";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["timedPickerName"]) ? $context["timedPickerName"] : null), "html", null, true);
        echo "');
                input.each(function () {
                    var element = \$(this);
                    var value = '' + element.data('value');
                    var multiple = element.data('multiple');
                    var status = element.data('status');
                    
                    if (status === 'id') {
                        
                        if (multiple === 'single') {
                            \$.ajax({
                                url: Routing.generate(
                                    'claro_user_infos_request',
                                    {'user': parseInt(value)}
                                ),
                                type: 'GET',
                                success: function (datas) {
                                    var name = datas['firstName'] + ' ' + datas['lastName'];
                                    element.val(name);
                                }
                            });
                        } else if (multiple === 'multiple') {
                            var ids = value.split(',');
                            
                            if (ids.length > 0 && ids[0] !== '') {
                                var userIds = [];
                                
                                for (var i = 0; i < ids.length; i++) {
                                    userIds.push(parseInt(ids[i]));
                                }
                                var route = Routing.generate('claro_users_infos_request');
                                var parameters = {};
                                parameters.userIds = userIds;
                                route += '?' + \$.param(parameters);
                                
                                \$.ajax({
                                    url: route,
                                    type: 'GET',
                                    success: function (datas) {
                                        var names = '';
                                        
                                        for (var j = 0; j < datas.length; j++) {
                                            names += datas[j]['firstName'] + ' ' + datas[j]['lastName'];
                                            
                                            if (j < datas.length - 1) {
                                                names += ',';
                                            }
                                        }
                                        element.val(names);
                                    }
                                });
                            }
                        }
                    }
                });
            })();
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:user_picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 180,  704 => 171,  700 => 170,  696 => 169,  692 => 168,  687 => 166,  683 => 165,  675 => 164,  667 => 163,  659 => 162,  651 => 161,  643 => 160,  635 => 159,  627 => 158,  619 => 157,  611 => 156,  603 => 155,  595 => 154,  591 => 153,  587 => 152,  567 => 135,  563 => 134,  559 => 133,  556 => 132,  550 => 131,  547 => 130,  543 => 129,  540 => 128,  534 => 127,  531 => 126,  527 => 125,  524 => 124,  518 => 123,  515 => 122,  511 => 121,  508 => 120,  502 => 119,  499 => 118,  495 => 117,  492 => 116,  486 => 115,  483 => 114,  479 => 113,  476 => 112,  470 => 111,  467 => 110,  463 => 109,  460 => 108,  454 => 107,  451 => 106,  447 => 105,  444 => 104,  441 => 103,  438 => 102,  435 => 101,  432 => 100,  429 => 99,  426 => 98,  424 => 97,  412 => 88,  406 => 85,  401 => 84,  357 => 82,  354 => 81,  346 => 77,  338 => 73,  336 => 72,  333 => 71,  326 => 68,  319 => 65,  317 => 64,  278 => 62,  275 => 61,  272 => 60,  270 => 59,  265 => 57,  261 => 55,  257 => 53,  251 => 51,  245 => 49,  243 => 48,  240 => 47,  229 => 45,  220 => 44,  218 => 43,  214 => 41,  210 => 39,  206 => 38,  203 => 37,  199 => 35,  196 => 34,  193 => 33,  187 => 31,  185 => 30,  180 => 29,  177 => 28,  171 => 26,  169 => 25,  164 => 24,  161 => 23,  116 => 21,  114 => 20,  76 => 19,  73 => 18,  71 => 17,  68 => 16,  58 => 14,  56 => 13,  53 => 12,  49 => 10,  45 => 9,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:user_picker.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/user_picker.html.twig");
    }
}
