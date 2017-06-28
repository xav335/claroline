<?php

/* ClarolineCoreBundle:Widget:config_simple_text_form.html.twig */
class __TwigTemplate_ecdb8bd18a3258edcb9e0d2fd179d4df1fcff228fb49d6ce6a2b12c7376be366 extends Twig_Template
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
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "ClarolineCoreBundle::form_theme_no_label.html.twig"));
        // line 2
        echo "
<form role=\"form\"
      class=\"form-horizontal widget-content-config-form\"
      action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_simple_text_update_config", array("widget" => $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getId", array(), "method"))), "html", null, true);
        echo "\"
      method=\"post\"
      novalidate
    >
    <div class=\"panel-body\">
        ";
        // line 10
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget'), "/id=[^\"]*\"", "");
        echo "
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Widget:config_simple_text_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Widget:config_simple_text_form.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Widget/config_simple_text_form.html.twig");
    }
}
