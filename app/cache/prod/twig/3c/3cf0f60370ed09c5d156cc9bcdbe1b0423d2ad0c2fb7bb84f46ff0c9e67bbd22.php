<?php

/* IcapNotificationBundle:Notification:dropdownScript.html.twig */
class __TwigTemplate_4b65e5b780dbee80484f2394573033a3eca72b8256a9144717d87f87fa0241ea extends Twig_Template
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
        echo "<script type='text/javascript'>
    var loadingIcon = \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapnotification/images/icons/loadinfo.gif"), "html", null, true);
        echo "\";
    var notificationElementId = \"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["notificationElementId"]) ? $context["notificationElementId"] : null), "html", null, true);
        echo "\";
</script>
<script type='text/javascript' src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapnotification/js/script.js"), "html", null, true);
        echo "\"></script>
<link rel='stylesheet' type='text/css' href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapnotification/css/dropdown.css"), "html", null, true);
        echo "'/>";
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Notification:dropdownScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Notification:dropdownScript.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Notification/dropdownScript.html.twig");
    }
}
