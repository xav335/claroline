<?php

/* ClarolineCoreBundle:Layout:stylesheets.html.twig */
class __TwigTemplate_73b48ee9b798dc6878eb7d9125849a4a7a4a824f9601c61e9cbedf32dc8cca5c extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("ClarolineCoreBundle::macros.html.twig", "ClarolineCoreBundle:Layout:stylesheets.html.twig", 1);
        // line 2
        echo "
";
        // line 4
        // asset "a921370"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a921370") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/angular-ui.css");
        unset($context["asset_url"]);
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "theme_extending_default"), "method")) {
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, trim($context["macros"]->getgetDefaultTheme()), "html", null, true);
            echo "\" media=\"screen\" />
";
        }
        // line 18
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, trim($context["macros"]->getgetTheme((isset($context["config"]) ? $context["config"] : null))), "html", null, true);
        echo "\" media=\"screen\" />
<link rel='stylesheet' type='text/css' href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "'/>
<link rel='stylesheet' type='text/css' href='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "'>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Layout:stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  44 => 19,  39 => 18,  33 => 16,  31 => 15,  28 => 14,  24 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Layout:stylesheets.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Layout/stylesheets.html.twig");
    }
}
