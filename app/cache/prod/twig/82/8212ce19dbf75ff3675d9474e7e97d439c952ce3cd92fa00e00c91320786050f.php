<?php

/* ClarolineCoreBundle:Administration\DesktopConfiguration:adminDesktopConfigMenu.html.twig */
class __TwigTemplate_11bf8f535c4a63e51d0424cf0f605d27e3b0df477def5702bfc295bd4f0184de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\DesktopConfiguration:adminDesktopConfigMenu.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop_and_home", array(), "tools"))), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 9
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop_and_home", array(), "tools"), "href" => ""))), "method"), "html", null, true);
        // line 20
        echo "
";
    }

    // line 23
    public function block_section_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_desktop_and_home_tabs_configuration", array(), "platform"), "html", null, true);
        echo "
        </h3>
    </div>

    <div class=\"list-group menu\">
        <a class=\"list-group-item\"
           href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_desktop_tools_configuration", array("type" => 0));
        echo "\"
        >
            <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu_bar", array(), "platform"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"list-group-item\"
           href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_desktop_tools_configuration", array("type" => 1));
        echo "\"
        >
            <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_menu", array(), "platform"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_home_tabs_configuration");
        echo "\">
            <span>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop_home_tabs", array(), "platform"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_desktop_home_lock_management");
        echo "\">
            <span>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home_lock", array(), "platform"), "html", null, true);
        echo "</span>
        </a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\DesktopConfiguration:adminDesktopConfigMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 46,  99 => 45,  94 => 43,  90 => 42,  85 => 40,  80 => 38,  74 => 35,  69 => 33,  60 => 27,  55 => 24,  52 => 23,  47 => 20,  45 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\DesktopConfiguration:adminDesktopConfigMenu.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/DesktopConfiguration/adminDesktopConfigMenu.html.twig");
    }
}
