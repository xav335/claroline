<?php

/* ClarolineMessageBundle:Message:listReceived.html.twig */
class __TwigTemplate_8f9941b49526d1ac82d48c3ab9141e88b420f9bc2909f56aeacaf807edc26454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 40
        $this->parent = $this->loadTemplate("ClarolineMessageBundle:Message:layout.html.twig", "ClarolineMessageBundle:Message:listReceived.html.twig", 40);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineMessageBundle:Message:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["__internal_7966b34a45637adc21bc9b9494f66464787f33723e4226881962f384c486bfc7"] = $this;
        // line 38
        $context["__internal_b486a718096418730e5c1348b29b0c2a1c013bda8f4e183095df9c2268dd5dcb"] = $this;
        // line 40
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_title($context, array $blocks = array())
    {
        echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages_received", array(), "platform"));
    }

    // line 44
    public function block_section_content($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"search-bar row margin-bottom-md\">
        <div class=\"col-md-6\">
            ";
        // line 47
        echo $context["__internal_b486a718096418730e5c1348b29b0c2a1c013bda8f4e183095df9c2268dd5dcb"]->getdisplayControls();
        echo "
        </div>
        <div class=\"col-md-6\">
             <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" id=\"search-items-txt\" placeholder=\"";
        // line 51
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
            ";
        // line 58
        if ((isset($context["isMailerAvailable"]) ? $context["isMailerAvailable"] : null)) {
            // line 59
            echo "                <div>
                    <input id=\"check-notifications\" type=\"checkbox\"
                       ";
            // line 61
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isMailNotified", array(), "method")) {
                // line 62
                echo "                           checked
                       ";
            }
            // line 64
            echo "                    >
                        ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("get_mail_notifications", array("%adress%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getMail", array(), "method")), "platform"), "html", null, true);
            echo "
                    </input>
                </div>
            ";
        }
        // line 69
        echo "        </div>
    </div>
    <div id=\"flashbox\">

    </div>
    ";
        // line 74
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbPages", array(), "method") > 1)) {
            // line 75
            echo "        ";
            echo $context["__internal_7966b34a45637adc21bc9b9494f66464787f33723e4226881962f384c486bfc7"]->getrenderPager((isset($context["search"]) ? $context["search"] : null), (isset($context["pager"]) ? $context["pager"] : null));
            echo "
    ";
        }
        // line 77
        echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered table-condensed\" id=\"messages-table\"> <thead> <tr>
            <th><input type=\"checkbox\" name=\"all\" id=\"check-all-items\"></input></th>
                    <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("object", array(), "platform"), "html", null, true);
        echo "</th>
                    <th>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("from_message", array(), "platform"), "html", null, true);
        echo "</th>
                    <th>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date", array(), "platform"), "html", null, true);
        echo "</th>
                    <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("open_the", array(), "message"), "html", null, true);
        echo "</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id=\"message-table-body\">
                ";
        // line 88
        if ((twig_length_filter($this->env, (isset($context["pager"]) ? $context["pager"] : null)) > 0)) {
            // line 89
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "currentPageResults", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["userMessage"]) {
                // line 90
                echo "                        <tr
                            class=
                            \"row-user-message
                            ";
                // line 93
                if ( !$this->getAttribute($context["userMessage"], "isRead", array(), "method")) {
                    echo " bold ";
                }
                // line 94
                echo "                            ";
                if ($this->getAttribute($context["userMessage"], "isRead", array(), "method")) {
                    echo " active ";
                }
                // line 95
                echo "                            pointer-hand\"
                            data-route=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_show", array("message" => $this->getAttribute($this->getAttribute($context["userMessage"], "getMessage", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\" >
                            <td><input class=\"chk-item\" value=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["userMessage"], "getId", array(), "method"), "html", null, true);
                echo "\" type=\"checkbox\"></input></td>
                            <td> ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userMessage"], "getMessage", array(), "method"), "getObject", array(), "method"), "html", null, true);
                echo " </td>
                            <td> ";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userMessage"], "getMessage", array(), "method"), "getSenderUsername", array(), "method"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["userMessage"], "getMessage", array(), "method"), "getSender", array(), "method"), "getFirstName", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["userMessage"], "getMessage", array(), "method"), "getSender", array(), "method"), "getLastName", array(), "method"), "html", null, true);
                echo ") </td>
                            <td> ";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\DateFormatterExtension')->intlDateFormat($this->getAttribute($this->getAttribute($context["userMessage"], "getMessage", array(), "method"), "getDate", array(), "method")), "html", null, true);
                echo " </td>
                            <td>
                                ";
                // line 102
                if ($this->getAttribute($context["userMessage"], "getLastOpenDate", array(), "method")) {
                    // line 103
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\DateFormatterExtension')->intlDateFormat($this->getAttribute($context["userMessage"], "getLastOpenDate", array(), "method")), "html", null, true);
                    echo "
                                ";
                }
                // line 105
                echo "                            </td>
                            <td>
                                ";
                // line 107
                if ($this->getAttribute($context["userMessage"], "isRead", array(), "method")) {
                    // line 108
                    echo "                                    <div style=\"color: green\" class=\"fa fa-check-circle\"></div>
                                ";
                } else {
                    // line 110
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_mark_as_read", array("message" => $this->getAttribute($this->getAttribute($context["userMessage"], "getMessage", array(), "method"), "getId", array(), "method"))), "html", null, true);
                    echo "\" class=\"mark-as-read\"><i class=\"fa fa-envelope\"></i></a>
                                ";
                }
                // line 112
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                ";
        } else {
            // line 116
            echo "                    <tr>
                        <td class=\"text-center\" colspan=\"5\">
                            ";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_message", array(), "platform"), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 122
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 125
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbPages", array(), "method") > 1)) {
            // line 126
            echo "        ";
            echo $context["__internal_7966b34a45637adc21bc9b9494f66464787f33723e4226881962f384c486bfc7"]->getrenderPager((isset($context["search"]) ? $context["search"] : null), (isset($context["pager"]) ? $context["pager"] : null));
            echo "
    ";
        }
        // line 128
        echo "    <div>";
        echo $context["__internal_b486a718096418730e5c1348b29b0c2a1c013bda8f4e183095df9c2268dd5dcb"]->getdisplayControls();
        echo "</div>
";
    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        // line 132
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/table.js"), "html", null, true);
        echo "' type=\"text/javascript\"></script>
    <script src='";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinemessage/js/message/listReceived.js"), "html", null, true);
        echo "' type=\"text/javascript\"></script>
    <script>
        parameters = {};
        parameters.route = {};
        parameters.route.action = {};
        parameters.route.normal = {\"route\": \"claro_message_list_received\", \"parameters\": {}};
        parameters.route.search = {\"route\": \"claro_message_list_received_search\", \"parameters\": {}};
        parameters.route.action.remove = {\"route\": \"claro_message_soft_delete\", \"parameters\": {}, \"confirmTemplate\": removeMessageConfirm, \"delete\": true};
        Claroline.Table.initialize(parameters);

        \$('tr.pointer-hand').on('click', function(event) {
            var targetClass = event.target.className;
            if (targetClass !== 'chk-item' && targetClass !== 'fa fa-envelope') {
                window.document.location = \$(this).attr(\"data-route\");
            }
        });

        \$('.mark-as-read').on('click', function (e) {
            e.preventDefault();
            \$.ajax({
                type: 'GET',
                url: \$(e.currentTarget).attr('href'),
                success: function () {
                    \$(e.target).css('color', 'green');
                    \$(e.target).attr('class', 'fa fa-check-circle');
                    var row = \$(e.target)[0].parentElement.parentElement.parentElement;
                    \$(row).addClass('active');
                }
            });
        });
    </script>
";
    }

    // line 1
    public function getrenderPager($__search__ = null, $__pager__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "search" => $__search__,
            "pager" => $__pager__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (((isset($context["search"]) ? $context["search"] : null) == "")) {
                // line 3
                echo "    ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 5
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_message_list_received"));
                // line 12
                echo "
    ";
            } else {
                // line 14
                echo "        ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 16
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_message_list_received_search", "routeParams" => array("search" =>                 // line 21
(isset($context["search"]) ? $context["search"] : null))));
                // line 24
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
                echo "        <button class=\"btn btn-default action-button table-control\" data-action=\"remove\">
            <i class=\"fa fa-trash-o\"></i>
            ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete", array(), "platform"), "html", null, true);
                echo "
        </button>
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
        return "ClarolineMessageBundle:Message:listReceived.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 32,  352 => 30,  349 => 29,  338 => 28,  321 => 24,  319 => 21,  318 => 16,  316 => 14,  312 => 12,  310 => 5,  308 => 3,  305 => 2,  292 => 1,  256 => 134,  252 => 133,  247 => 132,  244 => 131,  237 => 128,  231 => 126,  229 => 125,  224 => 122,  217 => 118,  213 => 116,  210 => 115,  202 => 112,  196 => 110,  192 => 108,  190 => 107,  186 => 105,  180 => 103,  178 => 102,  173 => 100,  165 => 99,  161 => 98,  157 => 97,  153 => 96,  150 => 95,  145 => 94,  141 => 93,  136 => 90,  131 => 89,  129 => 88,  121 => 83,  117 => 82,  113 => 81,  109 => 80,  104 => 77,  98 => 75,  96 => 74,  89 => 69,  82 => 65,  79 => 64,  75 => 62,  73 => 61,  69 => 59,  67 => 58,  55 => 51,  48 => 47,  44 => 45,  41 => 44,  35 => 42,  31 => 40,  29 => 38,  27 => 37,  11 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineMessageBundle:Message:listReceived.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/message/Resources/views/Message/listReceived.html.twig");
    }
}
