<?php

/* HeVinciCompetencyBundle:Competency:layout.html.twig */
class __TwigTemplate_73fa82d96831e7d761ba866c41549481447142cf46b16a9160fdd2e0d2718ac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::Administration/layout.html.twig", "HeVinciCompetencyBundle:Competency:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'panelTitle' => array($this, 'block_panelTitle'),
            'panelBody' => array($this, 'block_panelBody'),
            'panelFooter' => array($this, 'block_panelFooter'),
            'sectionRest' => array($this, 'block_sectionRest'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::Administration/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["competencyBreadcrumbs"] = array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("competencies", array(), "tools"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hevinci_frameworks")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("competencies", array(), "tools"))), "html", null, true);
        echo "
";
    }

    // line 20
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => (isset($context["competencyBreadcrumbs"]) ? $context["competencyBreadcrumbs"] : null)), "method"), "html", null, true);
        echo "
";
    }

    // line 24
    public function block_section_content($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"panel-heading\">
        <div class=\"panel-title\">
            ";
        // line 27
        $this->displayBlock('panelTitle', $context, $blocks);
        // line 30
        echo "        </div>
    </div>
    <div class=\"panel-body\">
        ";
        // line 33
        $this->displayBlock('panelBody', $context, $blocks);
        // line 36
        echo "    </div>
    <div class=\"panel-footer\">
        ";
        // line 38
        $this->displayBlock('panelFooter', $context, $blocks);
        // line 39
        echo "    </div>
    ";
        // line 40
        $this->displayBlock('sectionRest', $context, $blocks);
    }

    // line 27
    public function block_panelTitle($context, array $blocks = array())
    {
        // line 28
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("competencies", array(), "tools"), "html", null, true);
        echo "
            ";
    }

    // line 33
    public function block_panelBody($context, array $blocks = array())
    {
        // line 34
        echo "            TODO
        ";
    }

    // line 38
    public function block_panelFooter($context, array $blocks = array())
    {
    }

    // line 40
    public function block_sectionRest($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 45
        // check variable conditions
        if (!isset($context['assetic']['vars']['locale'])) {
            throw new \RuntimeException(sprintf('The asset "3a05f24" expected variable "locale" to be set, but got only these vars: %s. Did you set-up a value supplier?', isset($context['assetic']['vars']) && $context['assetic']['vars'] ? implode(', ', $context['assetic']['vars']) : '# none #'));
        }

        // asset "3a05f24"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3a05f24", array("locale" => $this->getAttribute($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : null), "vars", array(), "array"), "locale", array(), "array"))) : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(strtr("js/3a05f24.{locale}.js", array("{locale}" => $context['assetic']['vars']['locale'])));
        // line 51
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    ";
        unset($context["asset_url"]);
        // line 53
        echo "    <script src=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "competency"));
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/typeahead.js/dist/typeahead.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/hevincicompetency/js/flasher.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/hevincicompetency/js/tree.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/hevincicompetency/js/competency.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 60
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/typeahead.js-bootstrap3.less/typeaheadjs.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/hevincicompetency/css/style.css"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "HeVinciCompetencyBundle:Competency:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 63,  169 => 62,  164 => 61,  161 => 60,  155 => 57,  151 => 56,  147 => 55,  143 => 54,  138 => 53,  132 => 51,  124 => 45,  119 => 44,  116 => 43,  111 => 40,  106 => 38,  101 => 34,  98 => 33,  91 => 28,  88 => 27,  84 => 40,  81 => 39,  79 => 38,  75 => 36,  73 => 33,  68 => 30,  66 => 27,  62 => 25,  59 => 24,  52 => 21,  49 => 20,  42 => 17,  39 => 16,  35 => 1,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HeVinciCompetencyBundle:Competency:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/competency/Resources/views/Competency/layout.html.twig");
    }
}
