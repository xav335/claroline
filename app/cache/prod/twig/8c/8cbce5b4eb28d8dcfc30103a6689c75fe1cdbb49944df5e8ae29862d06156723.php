<?php

/* ClarolineCoreBundle:Form:resource_picker.html.twig */
class __TwigTemplate_5236afe6b05b337f1978fc8258fe3bad5a5724a821fd9f0355af4e8519480b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle:Form:resource_picker.html.twig", 1);
        $this->blocks = array(
            'resourcePicker_widget' => array($this, 'block_resourcePicker_widget'),
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
    public function block_resourcePicker_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        ";
        // line 6
        $context["inputGroupMode"] = (((isset($context["display_view_button"]) ? $context["display_view_button"] : null) || (isset($context["display_browse_button"]) ? $context["display_browse_button"] : null)) || (isset($context["display_download_button"]) ? $context["display_download_button"] : null));
        // line 7
        echo "        ";
        if ((isset($context["inputGroupMode"]) ? $context["inputGroupMode"] : null)) {
            // line 8
            echo "        <div class=\"input-group\">
            ";
        }
        // line 10
        echo "            <input class=\"form-control\" type=\"text\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_resource", array(), "platform"), "html", null, true);
        echo "\" style=\"cursor: pointer;\">
            ";
        // line 11
        if ((isset($context["inputGroupMode"]) ? $context["inputGroupMode"] : null)) {
            // line 12
            echo "            <span class=\"input-group-btn\">
            ";
            // line 13
            if ((isset($context["display_view_button"]) ? $context["display_view_button"] : null)) {
                // line 14
                echo "                <a  class=\"btn btn-default disabled resource-view\" title=\"Voir\" data-toggle=\"tooltip\" target=\"_blank\" href=\"\" style=\"margin: 0px;\">
                    <span class=\"fa fa-external-link\"></span>
                </a>
            ";
            }
            // line 18
            echo "            ";
            if ((isset($context["display_browse_button"]) ? $context["display_browse_button"] : null)) {
                // line 19
                echo "                <button type=\"button\" class=\"btn btn-default resource-browse\" title=\"Ressources\" data-toggle=\"tooltip\" style=\"margin: 0px;\">
                    <span class=\"fa fa-folder-open\"></span>
                </button>
            ";
            }
            // line 23
            echo "            ";
            if ((isset($context["display_download_button"]) ? $context["display_download_button"] : null)) {
                // line 24
                echo "                <button type=\"button\" class=\"btn btn-default resource-download\" title=\"Téléchargement\" data-toggle=\"tooltip\" style=\"margin: 0px;\">
                    <span class=\"fa fa-file\"></span>
                </button>
            ";
            }
            // line 28
            echo "            </span>
        </div>
        ";
        }
        // line 31
        echo "
        <script type=\"text/javascript\">
            (function(\$) {
                \"use strict\";

                \$(function() {
                    window.Claroline.ResourcePicker.initialize(\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\");
                });
            })(jQuery);
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:resource_picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  89 => 31,  84 => 28,  78 => 24,  75 => 23,  69 => 19,  66 => 18,  60 => 14,  58 => 13,  55 => 12,  53 => 11,  48 => 10,  44 => 8,  41 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:resource_picker.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/resource_picker.html.twig");
    }
}
