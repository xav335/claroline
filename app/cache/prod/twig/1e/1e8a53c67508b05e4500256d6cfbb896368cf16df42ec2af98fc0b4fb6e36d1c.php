<?php

/* ClarolineCoreBundle::layout.html.twig */
class __TwigTemplate_2a8e053cbdcc8df09d5b0b8993dad8ced57de841470f8016e331904c89e75947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::base.html.twig", "ClarolineCoreBundle::layout.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_header' => array($this, 'block_javascripts_header'),
            'favicon' => array($this, 'block_favicon'),
            'layout' => array($this, 'block_layout'),
            'claroline_danger' => array($this, 'block_claroline_danger'),
            'leftbar' => array($this, 'block_leftbar'),
            'rightbar' => array($this, 'block_rightbar'),
            'topBarRender' => array($this, 'block_topBarRender'),
            'impersonation' => array($this, 'block_impersonation'),
            'content_container' => array($this, 'block_content_container'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macros"] = $this->loadTemplate("ClarolineCoreBundle::macros.html.twig", "ClarolineCoreBundle::layout.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "google_meta_tag"), "method") != "")) {
            // line 7
            echo "        ";
            echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "google_meta_tag"), "method");
            echo "
    ";
        }
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("ClarolineCoreBundle:Layout:stylesheets.html.twig", "ClarolineCoreBundle::layout.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        if (((array_key_exists("hideTopBar", $context) && (isset($context["hideTopBar"]) ? $context["hideTopBar"] : null)) &&  !($this->env->getExtension('Claroline\CoreBundle\Twig\HasRoleExtension')->hasRole("ROLE_USURPATE_WORKSPACE_ROLE") || $this->env->getExtension('Claroline\CoreBundle\Twig\HasRoleExtension')->isImpersonated()))) {
            // line 15
            echo "        <style type=\"text/css\">
            body, #left-bar {
                padding-top: 0px !important;
            }
        </style>
    ";
        }
    }

    // line 23
    public function block_javascripts_header($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts_header", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jquery/dist/jquery.min.js"), "html", null, true);
        echo "'></script>
";
    }

    // line 28
    public function block_favicon($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $this->displayParentBlock("favicon", $context, $blocks);
        echo "
    ";
        // line 30
        $this->loadTemplate("ClarolineCoreBundle:Layout:favicon.html.twig", "ClarolineCoreBundle::layout.html.twig", 30)->display($context);
    }

    // line 33
    public function block_layout($context, array $blocks = array())
    {
        // line 34
        echo "    <div id=\"sf-environement\" data-env=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "environment", array()), "html", null, true);
        echo "\" class=\"hide\"></div>
    <div id=\"homePath\" class=\"hide\">";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index");
        echo "</div>

    ";
        // line 37
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "ssl_enabled"), "method") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isSecure", array(), "method"))) {
            // line 38
            echo "        ";
            $context["protocol"] = "https";
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "        ";
            $context["protocol"] = "http";
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "domain_name"), "method")) {
            // line 44
            echo "        ";
            $context["host"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "domain_name"), "method");
            // line 45
            echo "    ";
        } else {
            // line 46
            echo "        ";
            $context["host"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "host"), "method");
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        $context["homeAsset"] = (((((isset($context["protocol"]) ? $context["protocol"] : null) . "://") . (isset($context["host"]) ? $context["host"] : null)) . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getBasePath", array(), "method")) . "/");
        // line 50
        echo "
    <div
        id=\"platform-configuration\"
        class=\"hide\"
        data-enable-opengraph=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "enable_opengraph"), "method"), "html", null, true);
        echo "\"
    >
    </div>
    <div id=\"homeAsset\" class=\"hide\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["homeAsset"]) ? $context["homeAsset"] : null), "html", null, true);
        echo "</div>
    <div id=\"baseAsset\" class=\"hide\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "</div>
    <div id=\"homeTheme\" class=\"hide\">";
        // line 59
        echo twig_escape_filter($this->env, trim($context["macros"]->getgetTheme((isset($context["config"]) ? $context["config"] : null))), "html", null, true);
        echo "</div>
    <div id=\"homeLocale\" class=\"hide\">";
        // line 60
        ob_start();
        // line 61
        echo "            ";
        if ($this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->assetExists((("bundles/stfalcontinymce/vendor/tinymce/langs/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())) . ".js"))) {
            // line 62
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
            echo "
            ";
        } elseif ($this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->assetExists((((("bundles/stfalcontinymce/vendor/tinymce/langs/" . $this->getAttribute($this->getAttribute(        // line 63
(isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())) . "_") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()))) . ".js"))) {
            // line 64
            echo "                ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()) . "_") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()))), "html", null, true);
            echo "
            ";
        } else {
            // line 66
            echo "                en
            ";
        }
        // line 68
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 69
        echo "    </div>
    <div id=\"wrap\">
        <div class=\"please-wait\">
            <h4><span class=\"label label-warning\"> ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("please_wait", array(), "platform"), "html", null, true);
        echo " </span></h4>
        </div>
        ";
        // line 74
        if ($this->env->getExtension('Claroline\CoreBundle\Twig\MaintenanceExtension')->isMaintenanceEnabled()) {
            // line 75
            echo "            <div class=\"alert-claroline-danger\">
                <h4 class=\"label label-danger\">
                    ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maintenance_mode_enabled", array(), "platform"), "html", null, true);
            echo "
                    <i
                            class=\"fa fa-question-circle pointer-hand maintenance-popover\"
                            data-container=\".alert-claroline-danger\"
                            data-toggle=\"popover\"
                            data-placement=\"bottom\"
                            data-content=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maintenance_mode_message", array(), "platform"), "html", null, true);
            echo "\"
                            >
                    </i>
                </h4>
            </div>
        ";
        }
        // line 89
        echo "        <!-- class name is wrong but it does the right thing -->
        <div class=\"alert-claroline-danger\">
            ";
        // line 91
        $this->displayBlock('claroline_danger', $context, $blocks);
        // line 92
        echo "        </div>
        ";
        // line 93
        if ((((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isMailValidated", array()) == false)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "hideMailWarning", array()) == false)) && $this->env->getExtension('Claroline\CoreBundle\Twig\MailerExtension')->isMailerAvailable())) {
            // line 94
            echo "            <div class=\"alert-email-confirm\">
                <h4 class=\"label label-warning\">
                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_not_activated_part_1", array("%email%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "mail", array())), "platform"), "html", null, true);
            echo "
                    <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_security_validate_email_send", array("hash" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "emailValidationHash", array()))), "html", null, true);
            echo "\" class=\"confirm-email\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_not_activated_part_2", array(), "platform"), "html", null, true);
            echo "</a>
                    ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_not_activated_part_3", array(), "platform"), "html", null, true);
            echo "
                    <i
                            class=\"fa fa-question-circle pointer-hand maintenance-popover\"
                            data-container=\".alert-email-confirm\"
                            data-toggle=\"popover\"
                            data-placement=\"bottom\"
                            data-content=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_confirmation_message", array(), "platform"), "html", null, true);
            echo "\"
                            >
                    </i>
                    &nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class=\"fa fa-close pointer-hand\" id=\"hide-email-confirmation\">

                    </i>
                </h4>
            </div>
        ";
        }
        // line 114
        echo "        <div class=\"hidden-xs\">
            <div class=\"hide\">
                <div id=\"left-bar\" class=\"sidebar\">
                    ";
        // line 117
        $this->displayBlock('leftbar', $context, $blocks);
        // line 118
        echo "                </div>
            </div>
            <div class=\"hide\">
                <div id=\"right-bar\" class=\"sidebar\">
                    ";
        // line 122
        $this->displayBlock('rightbar', $context, $blocks);
        // line 123
        echo "                </div>
            </div>
        </div>

        ";
        // line 127
        if ((( !array_key_exists("hideTopBar", $context) ||  !(isset($context["hideTopBar"]) ? $context["hideTopBar"] : null)) &&  !$this->env->getExtension('Claroline\CoreBundle\Twig\HasRoleExtension')->hasRole("ROLE_USURPATE_WORKSPACE_ROLE"))) {
            // line 128
            echo "            ";
            $this->displayBlock('topBarRender', $context, $blocks);
            // line 135
            echo "        ";
        }
        // line 136
        echo "
        ";
        // line 137
        $this->displayBlock('impersonation', $context, $blocks);
        // line 142
        echo "        ";
        $this->displayBlock('content_container', $context, $blocks);
        // line 165
        echo "    </div>
    ";
        // line 166
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 91
    public function block_claroline_danger($context, array $blocks = array())
    {
    }

    // line 117
    public function block_leftbar($context, array $blocks = array())
    {
    }

    // line 122
    public function block_rightbar($context, array $blocks = array())
    {
    }

    // line 128
    public function block_topBarRender($context, array $blocks = array())
    {
        // line 129
        echo "                ";
        if (array_key_exists("workspace", $context)) {
            // line 130
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Layout:topBar", array("workspaceId" => $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "id", array()))), array());
            // line 131
            echo "                ";
        } else {
            // line 132
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Layout:topBar"), array());
            // line 133
            echo "                ";
        }
        // line 134
        echo "            ";
    }

    // line 137
    public function block_impersonation($context, array $blocks = array())
    {
        // line 138
        echo "            ";
        if (($this->env->getExtension('Claroline\CoreBundle\Twig\HasRoleExtension')->hasRole("ROLE_USURPATE_WORKSPACE_ROLE") || $this->env->getExtension('Claroline\CoreBundle\Twig\HasRoleExtension')->isImpersonated())) {
            // line 139
            echo "                ";
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Layout:renderWarningImpersonation"), array());
            // line 140
            echo "            ";
        }
        // line 141
        echo "        ";
    }

    // line 142
    public function block_content_container($context, array $blocks = array())
    {
        // line 143
        echo "            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 146
        if (((((array_key_exists("workspace", $context) &&  !twig_test_empty($this->getAttribute(        // line 147
(isset($context["workspace"]) ? $context["workspace"] : null), "getOptions", array(), "method"))) &&  !twig_test_empty($this->getAttribute($this->getAttribute(        // line 148
(isset($context["workspace"]) ? $context["workspace"] : null), "getOptions", array(), "method"), "getDetails", array(), "method"))) && $this->getAttribute($this->getAttribute($this->getAttribute(        // line 149
(isset($context["workspace"]) ? $context["workspace"] : null), "getOptions", array(), "method", false, true), "getDetails", array(), "method", false, true), "hide_breadcrumb", array(), "array", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute(        // line 150
(isset($context["workspace"]) ? $context["workspace"] : null), "getOptions", array(), "method"), "getDetails", array(), "method"), "hide_breadcrumb", array(), "array"))) {
            // line 152
            echo "                        ";
        } else {
            // line 153
            echo "                            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 154
            echo "                        ";
        }
        // line 155
        echo "                    </div>
                </div>
                <div class=\"row content\">
                    <div class=\"col-md-12\">
                        ";
        // line 159
        $this->displayBlock('content', $context, $blocks);
        // line 160
        echo "                    </div>
                </div>
            </div>
            <div id=\"push\"></div>
        ";
    }

    // line 153
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 159
    public function block_content($context, array $blocks = array())
    {
    }

    // line 166
    public function block_footer($context, array $blocks = array())
    {
        // line 167
        echo "        ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Layout:footer"), array());
        // line 168
        echo "    ";
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "    ";
        $this->loadTemplate("ClarolineCoreBundle:Layout:javascripts.html.twig", "ClarolineCoreBundle::layout.html.twig", 172)->display($context);
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 172,  445 => 171,  441 => 168,  438 => 167,  435 => 166,  430 => 159,  425 => 153,  417 => 160,  415 => 159,  409 => 155,  406 => 154,  403 => 153,  400 => 152,  398 => 150,  397 => 149,  396 => 148,  395 => 147,  394 => 146,  389 => 143,  386 => 142,  382 => 141,  379 => 140,  376 => 139,  373 => 138,  370 => 137,  366 => 134,  363 => 133,  360 => 132,  357 => 131,  354 => 130,  351 => 129,  348 => 128,  343 => 122,  338 => 117,  333 => 91,  329 => 166,  326 => 165,  323 => 142,  321 => 137,  318 => 136,  315 => 135,  312 => 128,  310 => 127,  304 => 123,  302 => 122,  296 => 118,  294 => 117,  289 => 114,  276 => 104,  267 => 98,  261 => 97,  257 => 96,  253 => 94,  251 => 93,  248 => 92,  246 => 91,  242 => 89,  233 => 83,  224 => 77,  220 => 75,  218 => 74,  213 => 72,  208 => 69,  205 => 68,  201 => 66,  195 => 64,  193 => 63,  188 => 62,  185 => 61,  183 => 60,  179 => 59,  175 => 58,  171 => 57,  165 => 54,  159 => 50,  157 => 49,  154 => 48,  151 => 47,  148 => 46,  145 => 45,  142 => 44,  140 => 43,  137 => 42,  134 => 41,  131 => 40,  128 => 39,  125 => 38,  123 => 37,  118 => 35,  113 => 34,  110 => 33,  106 => 30,  101 => 29,  98 => 28,  92 => 25,  87 => 24,  84 => 23,  74 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  55 => 7,  53 => 6,  48 => 5,  45 => 4,  41 => 1,  39 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle::layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/layout.html.twig");
    }
}
