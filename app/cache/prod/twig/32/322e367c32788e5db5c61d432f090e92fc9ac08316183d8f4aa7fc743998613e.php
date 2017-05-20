<?php

/* ClarolineCoreBundle:Administration\Logs:logList.html.twig */
class __TwigTemplate_025c8e8a16842335ce570a26b0bc59bcde284e18bdd1205387bafcd2d6964b48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Logs:logList.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Administration:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_logs", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 7
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_logs", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 18
        echo "
";
    }

    // line 21
    public function block_section_content($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["filterFormAction"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_logs_show");
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(        // line 26
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_admin_logs_show_paginated", "routeParams" => array("filter" =>         // line 31
(isset($context["filter"]) ? $context["filter"] : null))));
        // line 34
        echo "
    ";
        $context["pagination"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    ";
        // line 37
        $context["isDesktop"] = ((array_key_exists("isDesktop", $context)) ? ((isset($context["isDesktop"]) ? $context["isDesktop"] : null)) : (false));
        // line 38
        echo "
    ";
        // line 39
        $this->loadTemplate("ClarolineCoreBundle:Log:tool_view_list.html.twig", "ClarolineCoreBundle:Administration\\Logs:logList.html.twig", 39)->display(array_merge($context, array("filterFormAction" => (isset($context["filterFormAction"]) ? $context["filterFormAction"] : null), "pagination" => (isset($context["pagination"]) ? $context["pagination"] : null), "isDesktop" => (isset($context["isDesktop"]) ? $context["isDesktop"] : null))));
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Logs:logList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 39,  71 => 38,  69 => 37,  66 => 36,  62 => 34,  60 => 31,  59 => 26,  57 => 24,  54 => 23,  51 => 22,  48 => 21,  43 => 18,  41 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Logs:logList.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Logs/logList.html.twig");
    }
}
