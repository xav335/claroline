<?php

/* ClarolineCoreBundle:Tool\desktop\parameters:userOptionsEditForm.html.twig */
class __TwigTemplate_157ab01e113979a5697682328fbd9ed66190a46c9f8b7912ae271ddde9285b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineCoreBundle:Tool\\desktop\\parameters:userOptionsEditForm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop_parameters", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 7
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_parameters_menu")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop_parameters", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 17
        echo "
";
    }

    // line 20
    public function block_section_content($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop_parameters", array(), "platform"), "html", null, true);
        echo "
        </h3>
    </div>
    <form role=\"form\"
          class=\"form-horizontal\"
          action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_user_options_edit", array("options" => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "getId", array(), "method"))), "html", null, true);
        echo "\"
          method=\"post\"
          ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
    >
        <div class=\"panel-body\">
            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
            </button>
            <a class=\"btn btn-default\"
               href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_parameters_menu");
        echo "\"
               role=\"button\"
            >
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </a>
        </div>
    </form>
";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "'
            type=\"text/javascript\"
    >
    </script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/tool/desktop/userOptionsEditForm.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"
    >
    </script>
";
    }

    // line 61
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel='stylesheet'
          type='text/css'
          href='";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "'
    >
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Tool\\desktop\\parameters:userOptionsEditForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 65,  131 => 62,  128 => 61,  119 => 55,  112 => 51,  107 => 50,  104 => 49,  95 => 43,  89 => 40,  83 => 37,  76 => 33,  70 => 30,  65 => 28,  57 => 23,  53 => 21,  50 => 20,  45 => 17,  43 => 7,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Tool\\desktop\\parameters:userOptionsEditForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Tool/desktop/parameters/userOptionsEditForm.html.twig");
    }
}
