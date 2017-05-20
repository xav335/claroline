<?php

/* ClarolineCoreBundle:Layout:jqplot_script.html.twig */
class __TwigTemplate_86343fdfdb247c892077b5ce890e6c9e5a814fdf91cc6678d64456e01a22577d extends Twig_Template
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
        // asset "1fcab29"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1fcab29") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/corebundle/jquery.jqplot.min.js");
        // line 22
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Layout:jqplot_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 22,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Layout:jqplot_script.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Layout/jqplot_script.html.twig");
    }
}
