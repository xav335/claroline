<?php

/* ClarolineCoreBundle:Log:view_list_item_label.html.twig */
class __TwigTemplate_8ecf3df449960ee0bde0158309c89cb5d046b79193b3bdedcc5d79b955f268a1 extends Twig_Template
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
        $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_icon.html.twig", "ClarolineCoreBundle:Log:view_list_item_label.html.twig", 1)->display($context);
        // line 2
        echo "
<a class='log-action-name' href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_log_view_details", array("logId" => $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getId", array(), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("log_" . $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")) . "_shortname"), array(), "log"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item_label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_label.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_label.html.twig");
    }
}
