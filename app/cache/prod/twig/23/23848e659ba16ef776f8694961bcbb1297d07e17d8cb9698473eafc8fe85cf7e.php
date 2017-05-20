<?php

/* ClarolineCoreBundle:Log:view_list_item_header.html.twig */
class __TwigTemplate_53f364d40f15cf9c2b46daedaa69a7476ed2e17e55f1327cdae6db5c201a2ca8 extends Twig_Template
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
        echo "<style type=\"text/css\">
    .log_list_item_head {
        font-size: 13px;
        font-weight: bold;
    }
</style>

";
        // line 8
        if ((isset($context["isDesktop"]) ? $context["isDesktop"] : null)) {
            // line 9
            echo "    <div class=\"col-md-2 log_list_item_head\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace", array(), "log"), "html", null, true);
            echo "
    </div>
";
        }
        // line 13
        echo "
<div class=\"col-md-2 log_list_item_head\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date", array(), "platform"), "html", null, true);
        echo "
</div>

<div class=\"col-md-2 log_list_item_head\">
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action", array(), "platform"), "html", null, true);
        echo "
</div>

<div class=\"col-md-2 log_list_item_head\">
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user", array(), "platform"), "html", null, true);
        echo "
</div>

";
        // line 26
        if ((isset($context["isDesktop"]) ? $context["isDesktop"] : null)) {
            // line 27
            echo "    <div class='col-md-4 log_list_item_head'>
";
        } else {
            // line 29
            echo "    <div class='col-md-6 log_list_item_head'>
";
        }
        // line 31
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action", array(), "platform"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 31,  69 => 29,  65 => 27,  63 => 26,  57 => 23,  50 => 19,  43 => 15,  39 => 13,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_header.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_header.html.twig");
    }
}
