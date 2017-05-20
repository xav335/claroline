<?php

/* ClarolineCoreBundle:Administration\Workspaces:management.html.twig */
class __TwigTemplate_d49240008bf6d14965ed61e7a95b4defd02a997650536d33c89db9f9c84924e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 72
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Workspaces:management.html.twig", 72);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Administration:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 68
        $context["__internal_4dd2177b8644434b0702a1ea4f5c1595dc42b996fb9c36b1885dbc9a10968985"] = $this;
        // line 69
        $context["__internal_1e2942d6b3b043b88f3dc32703520fe133a26cba387d7cc49047752fe5294ad5"] = $this;
        // line 70
        $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"] = $this;
        // line 72
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 74
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces_management", array(), "platform"))), "html", null, true);
    }

    // line 76
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 78
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces_management", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 89
        echo "
";
    }

    // line 92
    public function block_section_content($context, array $blocks = array())
    {
        // line 93
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces_management", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div>
            ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"search-bar row\">
            <div class=\"col-md-8\">
                ";
        // line 102
        echo $context["__internal_1e2942d6b3b043b88f3dc32703520fe133a26cba387d7cc49047752fe5294ad5"]->getdisplayControls();
        echo "
            </div>
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" id=\"search-items-txt\" placeholder=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search", array(), "platform"), "html", null, true);
        echo "\" value=";
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo ">
                    <span class=\"input-group-btn\">
                        <button class=\"filter btn btn-default\" type=\"button\" id=\"search-button\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4 margin-top-md pull-right\">
                <div class=\"input-group-btn\">
                    <select class=\"form-control\" id=\"type-select\">
                        <option value=\"1\" ";
        // line 119
        if (((isset($context["type"]) ? $context["type"] : null) == 1)) {
            echo "selected";
        }
        echo ">
                            ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("non_personal_workspaces_only", array(), "platform"), "html", null, true);
        echo "
                        </option>
                        <option value=\"2\" ";
        // line 122
        if (((isset($context["type"]) ? $context["type"] : null) == 2)) {
            echo "selected";
        }
        echo ">
                            ";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("personal_workspaces_only", array(), "platform"), "html", null, true);
        echo "
                        </option>
                        <option value=\"3\" ";
        // line 125
        if (((isset($context["type"]) ? $context["type"] : null) == 3)) {
            echo "selected";
        }
        echo ">
                            ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_workspaces", array(), "platform"), "html", null, true);
        echo "
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 134
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbPages", array(), "method") > 1)) {
            // line 135
            echo "                    ";
            echo $context["__internal_4dd2177b8644434b0702a1ea4f5c1595dc42b996fb9c36b1885dbc9a10968985"]->getrenderPager((isset($context["search"]) ? $context["search"] : null), (isset($context["pager"]) ? $context["pager"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["order"]) ? $context["order"] : null), (isset($context["type"]) ? $context["type"] : null));
            echo "
                ";
        }
        // line 137
        echo "            </div>
            <div class=\"col-md-4 margin-top-md margin-bottom-md\">
                <div class=\"input-group\">
                    <select class=\"form-control input-md\" id=\"max-select\">
                        <option>20</option>
                        <option>50</option>
                        <option>100</option>
                        <option>200</option>
                        <option>500</option>
                    </select>
                    <span class=\"input-group-addon\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("line_per_page", array(), "platform"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>

        ";
        // line 152
        if ((twig_length_filter($this->env, (isset($context["pager"]) ? $context["pager"] : null)) > 0)) {
            // line 153
            echo "            ";
            $context["firstMenu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:workspaceActionsMenu", array(), array("workspace" => twig_first($this->env, (isset($context["pager"]) ? $context["pager"] : null))));
            // line 154
            echo "            ";
            $context["hasAdditionalAction"] = (twig_length_filter($this->env, (isset($context["firstMenu"]) ? $context["firstMenu"] : null)) > 0);
            // line 155
            echo "        ";
        } else {
            // line 156
            echo "            ";
            $context["hasAdditionalAction"] = false;
            // line 157
            echo "        ";
        }
        // line 158
        echo "        
        <div class=\"table-responsive\">
            <table id=\"workspace-table\" class=\"table table-striped table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th><input type=\"checkbox\" name=\"all\" id=\"check-all-items\"></th>
                        <th>
                            <a href=\"";
        // line 165
        echo $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"]->getsortUrl((isset($context["max"]) ? $context["max"] : null), (isset($context["search"]) ? $context["search"] : null), "id", (isset($context["direction"]) ? $context["direction"] : null), (isset($context["type"]) ? $context["type"] : null));
        echo "\">
                                ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("id", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 170
        echo $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"]->getsortUrl((isset($context["max"]) ? $context["max"] : null), (isset($context["search"]) ? $context["search"] : null), "name", (isset($context["direction"]) ? $context["direction"] : null), (isset($context["type"]) ? $context["type"] : null));
        echo "\">
                                ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 175
        echo $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"]->getsortUrl((isset($context["max"]) ? $context["max"] : null), (isset($context["search"]) ? $context["search"] : null), "code", (isset($context["direction"]) ? $context["direction"] : null), (isset($context["type"]) ? $context["type"] : null));
        echo "\">
                                ";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 180
        echo $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"]->getsortUrl((isset($context["max"]) ? $context["max"] : null), (isset($context["search"]) ? $context["search"] : null), "creator", (isset($context["direction"]) ? $context["direction"] : null), (isset($context["type"]) ? $context["type"] : null));
        echo "\">
                                ";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("creator", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 185
        echo $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"]->getsortUrl((isset($context["max"]) ? $context["max"] : null), (isset($context["search"]) ? $context["search"] : null), "displayable", (isset($context["direction"]) ? $context["direction"] : null), (isset($context["type"]) ? $context["type"] : null));
        echo "\">
                                ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("visibility", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </th>
                        <th>
                            <a href=\"";
        // line 190
        echo $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"]->getsortUrl((isset($context["max"]) ? $context["max"] : null), (isset($context["search"]) ? $context["search"] : null), "selfRegistration", (isset($context["direction"]) ? $context["direction"] : null), (isset($context["type"]) ? $context["type"] : null));
        echo "\">
                                ";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("public_registration", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </th>
                        <th>";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"), "html", null, true);
        echo "</th>
                        <th>
                            <a href=\"";
        // line 196
        echo $context["__internal_8cace667be594030c5020d959e212b31e0f73e3ffd10b95b0ae81e1dbad9b6a4"]->getsortUrl((isset($context["max"]) ? $context["max"] : null), (isset($context["search"]) ? $context["search"] : null), "creationDate", (isset($context["direction"]) ? $context["direction"] : null), (isset($context["type"]) ? $context["type"] : null));
        echo "\">
                                ";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </th>
                        ";
        // line 200
        if ((isset($context["hasAdditionalAction"]) ? $context["hasAdditionalAction"] : null)) {
            // line 201
            echo "                            <th>
                                ";
            // line 202
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "platform"), "html", null, true);
            echo "
                            </th>
                        ";
        }
        // line 205
        echo "                    </tr>
                </thead>
                <tbody id=\"workspace-table-body\">
                ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "currentPageResults", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 209
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "getId", array(), "method"), "html", null, true);
            echo "\">
                        <td>
                            <input type=\"checkbox\" value=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "id", array()), "html", null, true);
            echo "\" class=\"chk-item center-text\"/>
                        </td>
                        <td>";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "getId", array(), "method"), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open_tool", array("workspaceId" => $this->getAttribute($context["w"], "getId", array(), "method"), "toolName" => "home")), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "getName", array(), "method"), "html", null, true);
            echo " </a>
                        </td>
                        <td>";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "code", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "displayUser", array(0 => $this->getAttribute($context["w"], "getCreator", array(), "method")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"center-text\">
                            ";
            // line 220
            if (($this->getAttribute($context["w"], "isDisplayable", array(), "method") == true)) {
                // line 221
                echo "                                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management_visibility");
                echo "\"
                                   id=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "getId", array(), "method"), "html", null, true);
                echo "\"
                                   class=\"visible center\"
                                   data-visible=\"1\">
                                    <i class=\"fa fa-eye\"></i>
                                </a>
                            ";
            } else {
                // line 228
                echo "                                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management_visibility");
                echo "\"
                                   id=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "getId", array(), "method"), "html", null, true);
                echo "\"
                                   class=\"visible\"
                                   data-visible=\"0\">
                                    <i class=\"fa fa-eye-slash\"></i>
                                </a>
                            ";
            }
            // line 235
            echo "                        </td>
                        <td class=\"center-text\">
                            ";
            // line 237
            if (($this->getAttribute($context["w"], "selfRegistration", array(), "method") == true)) {
                // line 238
                echo "                                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management_registration");
                echo "\"
                                   id=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "getId", array(), "method"), "html", null, true);
                echo "\"
                                   class=\"registration\"
                                   data-registration=\"unlock\">
                                    <i class=\"fa fa-unlock\"></i>
                                </a>
                            ";
            } else {
                // line 245
                echo "                                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management_registration");
                echo "\"
                                   id=\"";
                // line 246
                echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "getId", array(), "method"), "html", null, true);
                echo "\"
                                   class=\"registration\"
                                   data-registration=\"lock\">
                                    <i class=\"fa fa-lock\"></i>
                                </a>
                            ";
            }
            // line 252
            echo "                        </td>
                        <td class=\"center-text\">
                            <a href=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_edit_form", array("workspace" => $this->getAttribute($context["w"], "getId", array(), "method"))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-pencil\"></i>
                            </a>
                        </td>
                        <td>

                            ";
            // line 260
            if ( !(null === $this->getAttribute($context["w"], "getCreationDate", array(), "method"))) {
                // line 261
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\DateFormatterExtension')->intlDateFormat($this->getAttribute($context["w"], "getCreationDate", array(), "method")), "html", null, true);
                echo "
                            ";
            } else {
                // line 263
                echo "                                -
                            ";
            }
            // line 265
            echo "                        </td>
                        ";
            // line 266
            if ((isset($context["hasAdditionalAction"]) ? $context["hasAdditionalAction"] : null)) {
                // line 267
                echo "                            <td>
                                ";
                // line 268
                $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:workspaceActionsMenu", array(), array("workspace" => $context["w"]));
                // line 269
                echo "                                ";
                echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : null), array(), "workspace_additional_actions");
                echo "
                            </td>
                        ";
            }
            // line 272
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                </tbody>
            </table>
        </div>
            ";
        // line 277
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbPages", array(), "method") > 1)) {
            // line 278
            echo "                ";
            echo $context["__internal_4dd2177b8644434b0702a1ea4f5c1595dc42b996fb9c36b1885dbc9a10968985"]->getrenderPager((isset($context["search"]) ? $context["search"] : null), (isset($context["pager"]) ? $context["pager"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["order"]) ? $context["order"] : null), (isset($context["type"]) ? $context["type"] : null));
            echo "
            ";
        }
        // line 280
        echo "        <div>
            ";
        // line 281
        echo $context["__internal_1e2942d6b3b043b88f3dc32703520fe133a26cba387d7cc49047752fe5294ad5"]->getdisplayControls();
        echo "
        </div>
    </div>
";
    }

    // line 285
    public function block_javascripts($context, array $blocks = array())
    {
        // line 286
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/table.js"), "html", null, true);
        echo "' type=\"text/javascript\"></script>
    <script>
        \$('#max-select').val(";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : null), "html", null, true);
        echo ");
        \$('#max-select').on('change', function () {
            \$('#search-button').trigger('click');
        });

        var parameters = {};
        parameters.route = {};
        parameters.route.action = {};
        parameters.route.normal = {
            \"route\": \"claro_admin_workspaces_management\",
            \"parameters\": {'order': '";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : null), "html", null, true);
        echo "', 'type': '";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "'}
        };
        parameters.route.search = {
            \"route\": \"claro_admin_workspaces_management_search\",
            \"parameters\": {'order': '";
        // line 303
        echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : null), "html", null, true);
        echo "', 'type': '";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "'}
        };
        parameters.route.action.remove = {
            \"route\": \"claro_admin_delete_workspaces\",
            \"parameters\": {},
            \"type\": \"DELETE\",
            \"confirmTemplate\": removeWorkspaceConfirm,
            \"delete\": true
        };
        Claroline.Table.initialize(parameters);

        \$('.visible').on('click', function (e) {
            e.preventDefault();
            var id = \$(e.currentTarget).attr('id');
            var visible = \$(e.currentTarget).attr('data-visible');
            var icon = e.target.parentElement.children;

            \$.ajax({
                'url': \$('.visible').attr('href'),
                'type': 'POST',
                'data': {
                    'id': id,
                    'visible': visible
                },
                'success': function (data) {
                    if (visible === '1') {
                        \$(icon[0]).removeClass('fa fa-eye');
                        \$(icon[0]).addClass('fa fa-eye-slash');
                        \$(e.currentTarget).attr('data-visible','0');
                    } else {
                        \$(icon[0]).removeClass('fa fa-eye-slash');
                        \$(icon[0]).addClass('fa fa-eye');
                        \$(e.currentTarget).attr('data-visible', '1');
                    }

                }
            });
        });

        \$('.registration').on('click', function (e) {
            e.preventDefault();
            var id = \$(e.currentTarget).attr('id');
            var previousRegistrationStatus = \$(e.currentTarget).attr('data-registration');
            var icon = e.target.parentElement.children;

            \$.ajax({
                'url': \$('.registration').attr('href'),
                'type': 'POST',
                'data': {
                    'id': id,
                    'registration': previousRegistrationStatus
                },
                'success': function (data) {
                    if (previousRegistrationStatus === 'unlock') {
                        \$(icon[0]).removeClass('fa fa-unlock');
                        \$(icon[0]).addClass('fa fa-lock');
                        \$(e.currentTarget).attr('data-registration','lock');
                    } else {
                        \$(icon[0]).removeClass('fa fa-lock');
                        \$(icon[0]).addClass('fa fa-unlock');
                        \$(e.currentTarget).attr('data-registration', 'unlock');
                    }
                }
            });
        });

        \$('#type-select').on('change', function () {
            var url;
            var workspaceType = \$(this).val();

            ";
        // line 373
        if (((isset($context["search"]) ? $context["search"] : null) == "")) {
            // line 374
            echo "                url = Routing.generate(
                    'claro_admin_workspaces_management',
                    {
                        'max': ";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : null), "html", null, true);
            echo ",
                        'order': '";
            // line 378
            echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : null), "html", null, true);
            echo "',
                        'direction': '";
            // line 379
            echo twig_escape_filter($this->env, (isset($context["direction"]) ? $context["direction"] : null), "html", null, true);
            echo "',
                        'type': workspaceType
                    }
                );
            ";
        } else {
            // line 384
            echo "                url = Routing.generate(
                    'claro_admin_workspaces_management_search',
                    {
                        'search': '";
            // line 387
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
            echo "',
                        'max': ";
            // line 388
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : null), "html", null, true);
            echo ",
                        'order': '";
            // line 389
            echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : null), "html", null, true);
            echo "',
                        'direction': '";
            // line 390
            echo twig_escape_filter($this->env, (isset($context["direction"]) ? $context["direction"] : null), "html", null, true);
            echo "',
                        'type': workspaceType
                    }
                );
            ";
        }
        // line 395
        echo "
            window.location = url;
        });
    </script>
    <script>
        \$('#workspace-table-body').on('click', '.workspace-additional-action', function (event) {
            var child = \$(this).children('.workspace-action');
            var url = child.data('url');
            var displayMode = child.data('display-mode');
            
            if (displayMode === 'modal_form') {
                window.Claroline.Modal.displayForm(
                    url,
                    function () {},
                    function() {}
                );
                
            } else {
                window.location = url;
            }
        });
    </script>
";
    }

    // line 1
    public function getrenderPager($__search__ = null, $__pager__ = null, $__max__ = null, $__order__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "search" => $__search__,
            "pager" => $__pager__,
            "max" => $__max__,
            "order" => $__order__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (((isset($context["search"]) ? $context["search"] : null) == "")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 5
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_admin_workspaces_management", "routeParams" => array("max" =>                 // line 10
(isset($context["max"]) ? $context["max"] : null), "order" => (isset($context["order"]) ? $context["order"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))));
                // line 13
                echo "
    ";
            } else {
                // line 15
                echo "        ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 17
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_admin_workspaces_management_search", "routeParams" => array("search" =>                 // line 22
(isset($context["search"]) ? $context["search"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "order" => (isset($context["order"]) ? $context["order"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))));
                // line 25
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getdisplayControls(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                // line 30
                echo "        <button class=\"btn btn-default action-button table-control\" data-action=\"remove\" disabled>
            <i class=\"fa fa-trash-o\"></i>
            ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete", array(), "platform"), "html", null, true);
                echo "
        </button>
        <a href=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_creation_form");
                echo "\" class=\"btn btn-default action-button\" role=\"button\">
            <i class=\"fa fa-pencil\"></i>
            ";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create", array(), "platform"), "html", null, true);
                echo "
        </a>
        <a href=\"";
                // line 38
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspace_import_form");
                echo "\" class=\"btn btn-default action-button\">
            <i class=\"icon-book\"></i>
            ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import_csv", array(), "platform"), "html", null, true);
                echo "
        </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getsortUrl($__max__ = null, $__search__ = null, $__order__ = null, $__direction__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "max" => $__max__,
            "search" => $__search__,
            "order" => $__order__,
            "direction" => $__direction__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "    ";
            if (((isset($context["direction"]) ? $context["direction"] : null) == "ASC")) {
                // line 46
                echo "        ";
                $context["newDirection"] = "DESC";
                // line 47
                echo "    ";
            } else {
                // line 48
                echo "        ";
                $context["newDirection"] = "ASC";
                // line 49
                echo "    ";
            }
            // line 50
            echo "
    ";
            // line 51
            if (((isset($context["search"]) ? $context["search"] : null) == "")) {
                // line 52
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management", array("max" =>                 // line 55
(isset($context["max"]) ? $context["max"] : null), "order" => (isset($context["order"]) ? $context["order"] : null), "direction" => (isset($context["newDirection"]) ? $context["newDirection"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
                // line 57
                echo "
    ";
            } else {
                // line 59
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management_search", array("search" =>                 // line 62
(isset($context["search"]) ? $context["search"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "order" => (isset($context["order"]) ? $context["order"] : null), "direction" => (isset($context["newDirection"]) ? $context["newDirection"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
                // line 64
                echo "
    ";
            }
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
        return "ClarolineCoreBundle:Administration\\Workspaces:management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  802 => 64,  800 => 62,  798 => 59,  794 => 57,  792 => 55,  790 => 52,  788 => 51,  785 => 50,  782 => 49,  779 => 48,  776 => 47,  773 => 46,  770 => 45,  754 => 44,  735 => 40,  730 => 38,  725 => 36,  720 => 34,  715 => 32,  711 => 30,  708 => 29,  697 => 28,  680 => 25,  678 => 22,  677 => 17,  675 => 15,  671 => 13,  669 => 10,  668 => 5,  666 => 3,  663 => 2,  647 => 1,  621 => 395,  613 => 390,  609 => 389,  605 => 388,  601 => 387,  596 => 384,  588 => 379,  584 => 378,  580 => 377,  575 => 374,  573 => 373,  498 => 303,  489 => 299,  476 => 289,  471 => 287,  466 => 286,  463 => 285,  455 => 281,  452 => 280,  446 => 278,  444 => 277,  439 => 274,  432 => 272,  425 => 269,  423 => 268,  420 => 267,  418 => 266,  415 => 265,  411 => 263,  405 => 261,  403 => 260,  394 => 254,  390 => 252,  381 => 246,  376 => 245,  367 => 239,  362 => 238,  360 => 237,  356 => 235,  347 => 229,  342 => 228,  333 => 222,  328 => 221,  326 => 220,  321 => 218,  317 => 217,  310 => 215,  305 => 213,  300 => 211,  294 => 209,  290 => 208,  285 => 205,  279 => 202,  276 => 201,  274 => 200,  268 => 197,  264 => 196,  259 => 194,  253 => 191,  249 => 190,  242 => 186,  238 => 185,  231 => 181,  227 => 180,  220 => 176,  216 => 175,  209 => 171,  205 => 170,  198 => 166,  194 => 165,  185 => 158,  182 => 157,  179 => 156,  176 => 155,  173 => 154,  170 => 153,  168 => 152,  160 => 147,  148 => 137,  142 => 135,  140 => 134,  129 => 126,  123 => 125,  118 => 123,  112 => 122,  107 => 120,  101 => 119,  83 => 106,  76 => 102,  69 => 98,  62 => 94,  59 => 93,  56 => 92,  51 => 89,  49 => 78,  47 => 77,  44 => 76,  38 => 74,  34 => 72,  32 => 70,  30 => 69,  28 => 68,  11 => 72,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Workspaces:management.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Workspaces/management.html.twig");
    }
}
