<?php

/* ClarolineCoreBundle:Layout:favicon.html.twig */
class __TwigTemplate_7436da506ed66cb546f419a05a8c0c01863f7f825150b690d8a1851485c338d0 extends Twig_Template
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
        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/images/ico/favicon.ico"), "html", null, true);
        echo "\"/>
<link rel=\"apple-touch-icon\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/images/ico/apple-touch-icon.png"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Layout:favicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Layout:favicon.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Layout/favicon.html.twig");
    }
}
