<?php

/* ClarolineCoreBundle:Administration\Analytics:analytics_navbar.html.twig */
class __TwigTemplate_fe28fc1ec3bea3bfbccd82e001eff4855fb1a7e9b1fcbeb8a2109e18bef89f1b extends Twig_Template
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
        echo "<ul id=\"analytics-navbar\" class=\"nav nav-tabs margin-bottom-md\">
    <li";
        // line 2
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_show") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array())) || ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_open_tool", array("toolName" => "platform_analytics")) == $this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array())))) {
            echo " class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("analytics_home", array(), "platform"), "html", null, true);
        echo "</a>
    </li>

    <li";
        // line 7
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_connections") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array()))) {
            echo " class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_connections");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_visit", array(), "platform"), "html", null, true);
        echo "</a>
    </li>

    <li";
        // line 11
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_resources") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array())) ||         // line 12
array_key_exists("item_details_page", $context))) {
            echo " class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_resources");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("analytics_resources", array(), "platform"), "html", null, true);
        echo "</a>
    </li>

    <li";
        // line 16
        if (twig_in_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_top"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array()))) {
            echo " class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_top");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("analytics_top", array(), "platform"), "html", null, true);
        echo "</a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Analytics:analytics_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  66 => 16,  58 => 13,  52 => 12,  51 => 11,  43 => 8,  37 => 7,  29 => 4,  23 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Analytics:analytics_navbar.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Analytics/analytics_navbar.html.twig");
    }
}
