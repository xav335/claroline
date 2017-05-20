<?php

/* IcapBadgeBundle:Administration:list.html.twig */
class __TwigTemplate_69baef0f25cd4e9d821e4aaeec02c2be47440344c98d532123497bc4c90b7fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IcapBadgeBundle:Administration:layout.html.twig", "IcapBadgeBundle:Administration:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_title' => array($this, 'block_section_title'),
            'section_body' => array($this, 'block_section_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IcapBadgeBundle:Administration:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badges_management", array(), "icap_badge"))), "html", null, true);
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 9
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badges_management", array(), "icap_badge"), "href" => ""))), "method"), "html", null, true);
        // line 20
        echo "
";
    }

    // line 23
    public function block_section_title($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badges_platform_list", array(), "icap_badge"), "html", null, true);
        echo "
";
    }

    // line 27
    public function block_section_body($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("IcapBadgeBundle:Badge:list", array("parameters" => (isset($context["parameters"]) ? $context["parameters"] : null))));
        echo "
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/confirm-bootstrap/confirm-bootstrap.js"), "html", null, true);
        echo "'></script>
    <script type=\"text/javascript\">
        \$(function(){
            \$('.confirm').confirmModal();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "IcapBadgeBundle:Administration:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  73 => 32,  70 => 31,  63 => 28,  60 => 27,  53 => 24,  50 => 23,  45 => 20,  43 => 9,  41 => 8,  38 => 7,  32 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBadgeBundle:Administration:list.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/badge/Resources/views/Administration/list.html.twig");
    }
}
