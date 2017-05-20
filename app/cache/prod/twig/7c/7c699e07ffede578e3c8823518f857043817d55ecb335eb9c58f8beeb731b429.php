<?php

/* ClarolineCoreBundle:Administration\Parameters:generalForm.html.twig */
class __TwigTemplate_e7eae00a2b9831f7c3f50d0b7d816109074a09595ccd5e4e44f649492f3c2456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Parameters:generalForm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Administration:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form_settings"]) ? $context["form_settings"] : null), array(0 => "ClarolineCoreBundle:Form:redirect_after_login_theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("general", array(), "platform"))), "html", null, true);
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 9
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parameters", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 2 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("general", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 24
        echo "
";
    }

    // line 27
    public function block_section_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("general", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <form role=\"form\" class=\"form-horizontal general_parameters_form\" action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_general");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_settings"]) ? $context["form_settings"] : null), 'enctype');
        echo " id=\"form_settings\" enctype='multipart/form-data'>
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "
        <div class=\"panel-body\">
            ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_settings"]) ? $context["form_settings"] : null), 'errors');
        echo "

            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "name", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "description", array()), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "supportEmail", array()), 'row');
        echo "
            ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "allowSelfRegistration", array()), 'row');
        echo "
            ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "registerButtonAtLogin", array()), 'row');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "defaultRole", array()), 'row');
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "localeLanguage", array()), 'row');
        echo "
            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "formCaptcha", array()), 'row');
        echo "
            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "formHoneypot", array()), 'row');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "redirectAfterLoginOption", array()), 'row');
        echo "
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "accountDuration", array()), 'row');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "platformInitDate", array()), 'row');
        echo "
            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "platformLimitDate", array()), 'row');
        echo "
            ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "anonymousPublicProfile", array()), 'row');
        echo "

            ";
        // line 51
        $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "vars", array()), "value", array()), "portfolioUrl", array());
        // line 52
        echo "            <div class=\"form-group row portfolio_url_row\">
                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "portfolioUrl", array()), 'label');
        echo "
                <div class=\"col-md-9\">
                    <div class=\"portfolio-url\">
                        <div class=\"radio portfolio_url\">
                            <label class=\"col-md-12\">
                                <div class=\"pull-left\">
                                    <input type=\"radio\" name=\"portfolioUrlOptions\" id=\"portfolioUrlOptions1\" value=\"0\" ";
        // line 59
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("internal_portfolio", array(), "platform"), "html", null, true);
        echo "</span>
                                </div>
                            </label>
                        </div>
                        <div class=\"radio radio-with-input\">
                            <label class=\"col-md-12\">
                                <div class=\"pull-left\">
                                    <input type=\"radio\" name=\"portfolioUrlOptions\" id=\"portfolioUrlOptions2\" value=\"1\" ";
        // line 67
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    <span>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("general_parameters_portfolio_url_help", array(), "platform"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-md-6 portfolio_url_field\">
                                    ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_settings"]) ? $context["form_settings"] : null), "portfolioUrl", array()), 'widget');
        echo "
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_settings"]) ? $context["form_settings"] : null), 'rest');
        echo "
        </div>
        <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index");
        echo "\">
                <button type=\"button\" class=\"btn btn-default\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
            </a>
        </div>
    </form>
";
    }

    // line 89
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\"
          href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jquery-ui/themes/base/jquery-ui.min.css"), "html", null, true);
        echo "\"
          type=\"text/css\"
    />
";
    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        (function(\$) {
            \"use strict\";

            \$(function() {
                var portfolioUrlRadio = \$(\".portfolio_url input[type=radio]\");
                var portfolioUrlField = \$(\".portfolio_url_field input\");

                portfolioUrlField.on('keyup', function (event) {
                    if ('' !== \$(this).val()) {
                        portfolioUrlRadio.prop(\"checked\", true);
                    }
                });
            });
        })(jQuery);
    </script>
    <script type=\"text/javascript\"
            src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"
    >
    </script>
    <script type=\"text/javascript\">
        var tagsList = [";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
            echo "\"";
            echo $context["tag"];
            echo "\"";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
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
        echo "];

        \$('#platform_parameters_form_defaultWorkspaceTag').autocomplete({
            source: tagsList
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Parameters:generalForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 120,  254 => 116,  232 => 98,  229 => 97,  221 => 92,  215 => 90,  212 => 89,  203 => 83,  199 => 82,  195 => 81,  189 => 78,  179 => 71,  173 => 68,  167 => 67,  157 => 60,  151 => 59,  142 => 53,  139 => 52,  137 => 51,  132 => 49,  128 => 48,  124 => 47,  120 => 46,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  75 => 34,  70 => 32,  64 => 31,  59 => 29,  56 => 28,  53 => 27,  48 => 24,  46 => 9,  44 => 8,  41 => 7,  35 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Parameters:generalForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Parameters/generalForm.html.twig");
    }
}
