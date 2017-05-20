<?php

/* FormaLibreSupportBundle:AdminSupport:adminSupportConfigurationMenu.html.twig */
class __TwigTemplate_6312022716a7dfdeb4154372e8e640dc75ca20bbf5f68d61b1013cb7c0f70c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "FormaLibreSupportBundle:AdminSupport:adminSupportConfigurationMenu.html.twig", 1);
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
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configuration", array(), "platform")), "html", null, true);
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
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("formalibre_support_management_tool", array(), "tools"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_index")), 2 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configuration", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 28
        echo "
";
    }

    // line 31
    public function block_section_content($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configuration", array(), "platform"), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"list-group\">
        <a class=\"list-group-item\"
           href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_type_management");
        echo "\"
        >
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("support_type_management", array(), "support"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\"
           href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_status_management");
        echo "\"
        >
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("support_status_management", array(), "support"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\"
           href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_contacts_management");
        echo "\"
        >
            <i class=\"fa fa-users\"></i>
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("support_contacts_management", array(), "support"), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FormaLibreSupportBundle:AdminSupport:adminSupportConfigurationMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 52,  90 => 49,  84 => 46,  79 => 44,  73 => 41,  68 => 39,  60 => 34,  56 => 32,  53 => 31,  48 => 28,  46 => 13,  44 => 12,  41 => 11,  36 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FormaLibreSupportBundle:AdminSupport:adminSupportConfigurationMenu.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/support/Resources/views/AdminSupport/adminSupportConfigurationMenu.html.twig");
    }
}
