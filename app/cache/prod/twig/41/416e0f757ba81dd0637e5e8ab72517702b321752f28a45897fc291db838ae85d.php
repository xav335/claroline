<?php

/* IcapNotificationBundle:Configuration:config.html.twig */
class __TwigTemplate_20db84ecc19077beb0e50b8e2573beb073570319271e7f4f9001e66f2bb3b7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "IcapNotificationBundle:Configuration:config.html.twig", 1);
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
        // line 3
        $context["title"] = "notification_configuration";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null), array(), "notification"))), "html", null, true);
    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 10
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification_configuration", array(), "notification"), "href" => ""))), "method"), "html", null, true);
        // line 21
        echo "
";
    }

    // line 24
    public function block_section_content($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null), array(), "notification"), "html", null, true);
        echo "</h3>
    </div>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "
    <div class=\"panel-body\">
        <form id=\"notification-plugin-configuration-form\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_configuration_save");
        echo "\" method=\"post\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            <div class=\"row\">
                <div class=\"col-md-10\">
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dropdownItems", array()), 'row');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "maxPerPage", array()), 'row');
        echo "
                    <div class=\"form-group row\">
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purgeEnabled", array()), 'label');
        echo "
                        <div class=\"col-md-9\">
                            ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "purgeEnabled", array()), 'widget');
        echo "
                            <span class=\"text-muted\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("purge_explain_text", array(), "notification"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                </div>
            </div>
            <div class=\"form-actions\">
                <button type=\"submit\" id=\"edit-tools-btn\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index");
        echo "\" class=\"btn btn-primary\">
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"), "html", null, true);
        echo "
                </button>
                <a class=\"btn btn-default\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index");
        echo "\">
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
                </a>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Configuration:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  117 => 50,  112 => 48,  108 => 47,  101 => 43,  95 => 40,  91 => 39,  86 => 37,  81 => 35,  77 => 34,  71 => 31,  67 => 30,  62 => 28,  57 => 26,  54 => 25,  51 => 24,  46 => 21,  44 => 10,  42 => 9,  39 => 8,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Configuration:config.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Configuration/config.html.twig");
    }
}
