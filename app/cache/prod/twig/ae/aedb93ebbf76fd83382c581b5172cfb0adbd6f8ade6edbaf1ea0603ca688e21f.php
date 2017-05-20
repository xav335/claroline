<?php

/* ClarolineCoreBundle::form_theme_angular.html.twig */
class __TwigTemplate_0b12857245bbc8823204ef328bb31fc9f55de526df398920c252fdf7cc780420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle::form_theme_angular.html.twig", 5);
        $this->blocks = array(
            'widget_attributes' => array($this, 'block_widget_attributes'),
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

    // line 8
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
    ";
        // line 11
        echo "    ";
        if ( !$this->env->getExtension('Claroline\CoreBundle\Twig\VarTypeExtension')->isInt((isset($context["name"]) ? $context["name"] : null))) {
            // line 12
            echo "        ng-model='";
            echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "'
        ng-init='";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\EscaperExtension')->ngEscape((isset($context["value"]) ? $context["value"] : null)), "html", null, true);
            echo "\"'
    ";
        } else {
            // line 15
            echo "        ng-model='";
            echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "name", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "]'
        ";
            // line 17
            echo "        ";
            if ((array_key_exists("checked", $context) && ((isset($context["checked"]) ? $context["checked"] : null) == true))) {
                // line 18
                echo "            ng-init=\"";
                echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "name", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "]=true\"
        ";
            } else {
                // line 20
                echo "            ng-init=\"";
                echo twig_escape_filter($this->env, (isset($context["alias"]) ? $context["alias"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, (isset($context["model"]) ? $context["model"] : null), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "name", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "]=false\"
        ";
            }
            // line 22
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle::form_theme_angular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  85 => 20,  73 => 18,  70 => 17,  59 => 15,  48 => 13,  39 => 12,  36 => 11,  31 => 9,  28 => 8,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle::form_theme_angular.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/form_theme_angular.html.twig");
    }
}
