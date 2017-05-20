<?php

/* IcapBadgeBundle:Administration:layout.html.twig */
class __TwigTemplate_58d59d316d54988d186c7e98d7c903f24f5967e08abf117eb636e4a2e50bb9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "IcapBadgeBundle:Administration:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_content' => array($this, 'block_section_content'),
            'section_title' => array($this, 'block_section_title'),
            'section_body' => array($this, 'block_section_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badges", array(), "icap_badge"))), "html", null, true);
    }

    // line 5
    public function block_section_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"panel-heading\">
        <h1 class=\"panel-title\">";
        // line 7
        $this->displayBlock('section_title', $context, $blocks);
        echo "</h1>
    </div>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "

    <div class=\"panel-body badge_body\">
        ";
        // line 12
        $this->displayBlock('section_body', $context, $blocks);
        // line 13
        echo "    </div>
";
    }

    // line 7
    public function block_section_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_section_body($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 18
        // asset "3c4021f"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3c4021f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icapbadge/badge.css");
        // line 21
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\" screen=\"media\" />
    ";
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "IcapBadgeBundle:Administration:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  80 => 18,  75 => 17,  72 => 16,  67 => 12,  62 => 7,  57 => 13,  55 => 12,  49 => 9,  44 => 7,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBadgeBundle:Administration:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/badge/Resources/views/Administration/layout.html.twig");
    }
}
