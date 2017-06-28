<?php

/* ClarolineAgendaBundle:Tool:agenda.html.twig */
class __TwigTemplate_7df7f69aca3e4dcb91dada7155a1a5b53c594f1069abae3d1be401f74820eb07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

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
        // line 7
        return $this->loadTemplate((isset($context["calendarExtends"]) ? $context["calendarExtends"] : null), "ClarolineAgendaBundle:Tool:agenda.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (array_key_exists("workspace", $context)) {
            // line 2
            $context["calendarExtends"] = "ClarolineCoreBundle:Workspace:layout.html.twig";
        } else {
            // line 4
            $context["calendarExtends"] = "ClarolineCoreBundle:Desktop:layout.html.twig";
        }
        // line 9
        $context["calendarPath"] = "bundles/frontend/fullcalendar/dist/";
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (array_key_exists("workspace", $context)) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("agenda", array(), "tools"))), "html", null, true);
            echo "
    ";
        } else {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("agenda", array(), "tools"))), "html", null, true);
            echo "
    ";
        }
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel='stylesheet' type='text/css' href='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["calendarPath"]) ? $context["calendarPath"] : null) . "fullcalendar.min.css")), "html", null, true);
        echo "'/>
    <link rel='stylesheet' type='text/css' href='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["calendarPath"]) ? $context["calendarPath"] : null) . "fullcalendar.print.css")), "html", null, true);
        echo "' media='print' />
    <link rel='stylesheet' type='text/css' href='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "'>
    <style>
        .fc-day-grid-event > .fc-content {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }
        .fc-day-grid-event:focus {
            color: white;
            text-decoration: none;
        }
        .popover button.close {
            font-size: 13px;
        }
        .is-task {
            padding-right: 3px;
        }
    </style>
";
    }

    // line 43
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        if (array_key_exists("workspace", $context)) {
            // line 45
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 46
(isset($context["macros"]) ? $context["macros"] : null), "workspaceBreadcrumbs", array(0 =>             // line 47
(isset($context["workspace"]) ? $context["workspace"] : null), 1 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("agenda", array(), "tools"), "href" => ""))), "method"), "html", null, true);
            // line 55
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 58
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("agenda", array(), "tools"), "href" => ""))), "method"), "html", null, true);
            // line 64
            echo "
    ";
        }
    }

    // line 68
    public function block_section_content($context, array $blocks = array())
    {
        // line 69
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("agenda", array(), "tools"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div id=\"events\"></div>
            <div id='calendar' class=\"col-md-9\"></div>

            <div class=\"col-md-3\">
                <div class=\"panel text-center\">
                    ";
        // line 79
        if (array_key_exists("workspace", $context)) {
            // line 80
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_agenda_export", array("workspace" => $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\"  role=\"button\">
                            ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("export", array(), "agenda"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 84
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_agenda_export");
            echo "\" class=\"btn btn-default btn-xs\" role=\"button\">
                            ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("export", array(), "agenda"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 88
        echo "
                    ";
        // line 89
        if (((array_key_exists("canCreate", $context) && (isset($context["canCreate"]) ? $context["canCreate"] : null)) && array_key_exists("workspace", $context))) {
            // line 90
            echo "                        <a id=\"import-ics-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_agenda_import_form", array("workspace" => $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\"
                           class=\"btn btn-default btn-xs\"
                           role=\"button\"
                                >
                            ";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import_agenda_file", array(), "agenda"), "html", null, true);
            echo "
                        </a>
                    ";
        } elseif ( !        // line 96
array_key_exists("workspace", $context)) {
            // line 97
            echo "                        <a id=\"import-ics-btn\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_agenda_import_form");
            echo "\"
                           class=\"btn btn-default btn-xs\"
                           role=\"button\">
                            ";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import_agenda_file", array(), "agenda"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 103
        echo "                </div>

                <div class=\"panel panel-default\">
                    ";
        // line 106
        if ((array_key_exists("filters", $context) && (twig_length_filter($this->env, (isset($context["filters"]) ? $context["filters"] : null)) > 1))) {
            // line 107
            echo "                        <div data-toggle=\"collapse\" data-target=\"#panel-owners\" class=\"panel-heading\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filter_ws", array(), "agenda"), "html", null, true);
            echo "</div>
                        <div id=\"panel-owners\" class=\"panel-body list-group in\" style=\"padding:0\">
                            <div id=\"selectWorkspace\">
                                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : null));
            foreach ($context['_seq'] as $context["wsId"] => $context["filterName"]) {
                // line 111
                echo "                                    <li class=\"list-group-item\">
                                        <input
                                            id=\"ws-";
                // line 113
                echo twig_escape_filter($this->env, $context["wsId"], "html", null, true);
                echo "\"
                                            type=\"checkbox\"
                                            name=\"";
                // line 115
                echo twig_escape_filter($this->env, $context["filterName"], "html", null, true);
                echo "\"
                                            class=\"filter\"
                                            value=\"";
                // line 117
                echo twig_escape_filter($this->env, $context["wsId"], "html", null, true);
                echo "\"
                                        />
                                        <label for=\"ws-";
                // line 119
                echo twig_escape_filter($this->env, $context["wsId"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["filterName"], "html", null, true);
                echo "</label>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['wsId'], $context['filterName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                            </div>
                        </div>
                    ";
        }
        // line 125
        echo "                    <div data-toggle=\"collapse\" data-target=\"#panel-tasks\" class=\"panel-heading\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("filter_tasks", array(), "agenda"), "html", null, true);
        echo "</div>
                    <div id=\"panel-tasks\" class=\"panel-body list-group in\" style=\"padding:0\">
                        <div id=\"selectTask\">
                            <div class=\"list-group-item\">
                                <input
                                        id=\"no-filter-tasks\"
                                        type=\"radio\"
                                        name=\"tasks\"
                                        class=\"filter-tasks\"
                                        value=\"no-filter-tasks\"
                                        checked
                                        />
                                <label for=\"no-filter-tasks\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_filter_tasks", array(), "agenda"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"list-group-item\">
                                <input
                                        id=\"hide-tasks\"
                                        type=\"radio\"
                                        name=\"tasks\"
                                        class=\"filter-tasks\"
                                        value=\"hide-tasks\"
                                        />
                                <label for=\"hide-tasks\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("hide_tasks", array(), "agenda"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"list-group-item\">
                                <input
                                        id=\"hide-events\"
                                        type=\"radio\"
                                        name=\"tasks\"
                                        class=\"filter-tasks\"
                                        value=\"hide-events\"
                                        />
                                <label for=\"hide-events\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show_task_only", array(), "agenda"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.priority", array(), "agenda"), "html", null, true);
        echo "</div>
                    <div class=\"panel-body list-group\" style=\"padding:0\">
                        <div class=\"list-group-item\" style=\"color:#FF0000\">  ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("high", array(), "agenda"), "html", null, true);
        echo " </div>
                        <div class=\"list-group-item\" style=\"color:#01A9DB\"> ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("medium", array(), "agenda"), "html", null, true);
        echo " </div>
                        <div class=\"list-group-item\" style=\"color:#848484\"> ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("low", array(), "agenda"), "html", null, true);
        echo " </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 176
    public function block_javascripts($context, array $blocks = array())
    {
        // line 177
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 178
        // check variable conditions
        if (!isset($context['assetic']['vars']['locale'])) {
            throw new \RuntimeException(sprintf('The asset "8c9fc19" expected variable "locale" to be set, but got only these vars: %s. Did you set-up a value supplier?', isset($context['assetic']['vars']) && $context['assetic']['vars'] ? implode(', ', $context['assetic']['vars']) : '# none #'));
        }

        // asset "8c9fc19"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8c9fc19", array("locale" => $this->getAttribute($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : null), "vars", array(), "array"), "locale", array(), "array"))) : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(strtr("js/8c9fc19.{locale}.js", array("{locale}" => $context['assetic']['vars']['locale'])));
        // line 179
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    ";
        unset($context["asset_url"]);
        // line 181
        echo "    ";
        // asset "71f1d54"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_71f1d54") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/71f1d54.js");
        // line 183
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    ";
        unset($context["asset_url"]);
        // line 185
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/moment/min/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src='";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["calendarPath"]) ? $context["calendarPath"] : null) . "fullcalendar.min.js")), "html", null, true);
        echo "' ></script>
    <script type='text/javascript' src='";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolineagenda/js/calendar.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript'>
        ";
        // line 189
        if ( !array_key_exists("workspace", $context)) {
            // line 190
            echo "            \$(function () {
                Claroline.Calendar.initialize('desktop', \"undefined\", '";
            // line 191
            echo twig_jsonencode_filter((isset($context["editableWorkspaces"]) ? $context["editableWorkspaces"] : null));
            echo "');
            });
        ";
        } else {
            // line 194
            echo "            \$(function () {
                Claroline.Calendar.initialize('workspace', ";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method"), "html", null, true);
            echo ", '";
            echo twig_jsonencode_filter((isset($context["editableWorkspaces"]) ? $context["editableWorkspaces"] : null));
            echo "');
            });
        ";
        }
        // line 198
        echo "    </script>
    <script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/jquery-ui/ui/minified/draggable.min.js"), "html", null, true);
        echo "\"> </script>
    <script type=\"text/javascript\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/jquery-ui/ui/minified/resizable.min.js"), "html", null, true);
        echo "\"> </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineAgendaBundle:Tool:agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 201,  407 => 200,  403 => 199,  400 => 198,  392 => 195,  389 => 194,  383 => 191,  380 => 190,  378 => 189,  373 => 187,  369 => 186,  364 => 185,  358 => 183,  354 => 181,  348 => 179,  340 => 178,  335 => 177,  332 => 176,  320 => 168,  316 => 167,  312 => 166,  307 => 164,  297 => 157,  284 => 147,  271 => 137,  255 => 125,  250 => 122,  239 => 119,  234 => 117,  229 => 115,  224 => 113,  220 => 111,  216 => 110,  209 => 107,  207 => 106,  202 => 103,  196 => 100,  189 => 97,  187 => 96,  182 => 94,  174 => 90,  172 => 89,  169 => 88,  163 => 85,  158 => 84,  152 => 81,  147 => 80,  145 => 79,  133 => 70,  130 => 69,  127 => 68,  121 => 64,  119 => 58,  117 => 57,  113 => 55,  111 => 47,  110 => 46,  108 => 45,  105 => 44,  102 => 43,  78 => 23,  74 => 22,  70 => 21,  65 => 20,  62 => 19,  54 => 15,  48 => 13,  45 => 12,  42 => 11,  38 => 7,  36 => 9,  33 => 4,  30 => 2,  28 => 1,  22 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineAgendaBundle:Tool:agenda.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/agenda/Resources/views/Tool/agenda.html.twig");
    }
}
