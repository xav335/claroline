<?php

/* ClarolineCoreBundle:Tool\desktop\parameters:desktopParametersMenu.html.twig */
class __TwigTemplate_1834a57364df16788ddace5c405bd4add5a2c7fc804bf6419094a2dc3802a4e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineCoreBundle:Tool\\desktop\\parameters:desktopParametersMenu.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
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
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"))), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 9
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 15
        echo "
";
    }

    // line 18
    public function block_section_content($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("preferences", array(), "platform"), "html", null, true);
        echo "
        </h3>
    </div>

    ";
        // line 25
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("ClarolineCoreBundle:Builder:desktopParametersMenu", array(), "desktop_parameters");
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Tool\\desktop\\parameters:desktopParametersMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  59 => 21,  55 => 19,  52 => 18,  47 => 15,  45 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Tool\\desktop\\parameters:desktopParametersMenu.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Tool/desktop/parameters/desktopParametersMenu.html.twig");
    }
}
