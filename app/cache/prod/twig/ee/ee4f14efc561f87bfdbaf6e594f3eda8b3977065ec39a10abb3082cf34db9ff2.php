<?php

/* ClarolineCoreBundle:Administration\Users:index.html.twig */
class __TwigTemplate_cbffe64a6479dbd53603acb7b9883f7774113f113c5dca92f9559973566c69cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Users:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_content' => array($this, 'block_section_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users", array(), "platform"))), "html", null, true);
    }

    // line 6
    public function block_section_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "</div>
    <div id=\"users-panel\" class=\"panel panel-default\" ng-app=\"UsersManager\">
        <div class=\"panel panel-body\" ui-view>
        </div>
    </div>

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/angular-ui.css"), "html", null, true);
        echo "\"> </link>
    ";
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/common/select.css"), "html", null, true);
        echo "\"></link>
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/claroline-distribution-main-core-user-management.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  75 => 23,  72 => 22,  65 => 19,  61 => 17,  55 => 15,  52 => 14,  40 => 7,  37 => 6,  31 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Users:index.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Users/index.html.twig");
    }
}
