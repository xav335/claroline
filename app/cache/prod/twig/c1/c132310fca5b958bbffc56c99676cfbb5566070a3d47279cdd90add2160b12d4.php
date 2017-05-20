<?php

/* ClarolineCursusBundle:API\AdminManagement:index.html.twig */
class __TwigTemplate_878871370886ea8496577af6c106c4611f391b966d637076e1dfc9b4ee83d155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCursusBundle::adminLayout.html.twig", "ClarolineCursusBundle:API\\AdminManagement:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_content' => array($this, 'block_section_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCursusBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_cursus_tool", array(), "tools")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_section_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div id=\"cursus-management-panel\" ng-app=\"CursusManagementModule\" ng-cloak>
        <div ncy-breadcrumb></div>
        <div class=\"panel panel-default\" ui-view>
        </div>
    </div>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/angular-ui-tree/dist/angular-ui-tree.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/angular-data-table/release/dataTable.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/angular-data-table/release/material.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/angular-loading-bar/build/loading-bar.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/angular-dragula/dist/dragula.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/ng-table/dist/ng-table.css"), "html", null, true);
        echo "\" />
    <link rel='stylesheet' href='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/angular-bootstrap-colorpicker/css/colorpicker.min.css"), "html", null, true);
        echo "'>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecursus/css/management.css"), "html", null, true);
        echo "\" />
";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript' src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/angular/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/angular-loading-bar/build/loading-bar.min.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/angular-dragula/dist/angular-dragula.min.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/ng-table/dist/ng-table.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/claroline-distribution-plugin-cursus-management.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 35
        // asset "1b7eccd"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1b7eccd") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/1b7eccd.js");
        // line 39
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    ";
        unset($context["asset_url"]);
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClarolineCursusBundle:API\\AdminManagement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  127 => 39,  124 => 35,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  98 => 28,  95 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  56 => 16,  53 => 15,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCursusBundle:API\\AdminManagement:index.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/cursus/Resources/views/API/AdminManagement/index.html.twig");
    }
}
