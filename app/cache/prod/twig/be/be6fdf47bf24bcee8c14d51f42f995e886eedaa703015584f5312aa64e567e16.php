<?php

/* ClarolineTagBundle:AdminTag:adminTagsManagement.html.twig */
class __TwigTemplate_bba7e57337be087b5919ac329e069a056cbdb8522a53c1ddd0eb7fd094cfec5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineTagBundle:AdminTag:adminTagsManagement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_tag_admin_tool", array(), "tools"))), "html", null, true);
        // line 8
        echo "
";
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_tag_admin_tool", array(), "tools"), "href" => ""))), "method"), "html", null, true);
        // line 24
        echo "
";
    }

    // line 27
    public function block_section_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_tag_admin_tool", array(), "tools"), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"input-group col-md-6 pull-right margin-top-sm\">
            <input class=\"form-control search-tag\"
                   type=\"text\"
                   id=\"search-tag-input\"
                   placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search", array(), "platform"), "html", null, true);
        echo "\"
            >
            <span class=\"input-group-btn\">
                <button class=\"filter btn btn-default search-tag-btn\"
                        type=\"button\"
                        id=\"search-tag-btn\"
                >
                    <i class=\"fa fa-search\"></i>
                </button>
            </span>
        </div>
        <br>
        <br>
        <div id=\"tags-display-box\">
            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineTagBundle:AdminTag:adminTagsDisplay"));
        echo "
        </div>
    </div>
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\"
            src=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "tag"));
        echo "\"
    >
    </script>
    <script src='";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinetag/js/adminTagsManagement.js"), "html", null, true);
        echo "'
            type=\"text/javascript\"
    >
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineTagBundle:AdminTag:adminTagsManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 63,  106 => 60,  100 => 58,  97 => 57,  89 => 52,  72 => 38,  61 => 30,  57 => 28,  54 => 27,  49 => 24,  47 => 13,  45 => 12,  42 => 11,  37 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineTagBundle:AdminTag:adminTagsManagement.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/tag/Resources/views/AdminTag/adminTagsManagement.html.twig");
    }
}
