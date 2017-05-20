<?php

/* ClarolineCoreBundle:Administration\Parameters:index.html.twig */
class __TwigTemplate_eff23b4466afd5e5cbeea4b9d6767f51c1dbe239ad46d42a0c962c3b1dcf5cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Parameters:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parameters", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 7
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parameters", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 18
        echo "
";
    }

    // line 21
    public function block_section_content($context, array $blocks = array())
    {
        // line 22
        echo "
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parameters", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"list-group\">
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "
        <a class=\"list-group-item\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_general");
        echo "\">
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("general", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_appearance");
        echo "\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("appearance", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_portal_parameters");
        echo "\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("portal", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_edit_terms_of_service");
        echo "\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("term_of_service", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_mail_index");
        echo "\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_indexing");
        echo "\">
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("indexing", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_session");
        echo "\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("session", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_oauth_index");
        echo "\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("oauth", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_maintenance");
        echo "\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("maintenance", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_security_token_list");
        echo "\">
            ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security_tokens_management", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_i18n_form");
        echo "\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("i18n", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\" href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_plugins");
        echo "\">
            ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("plugins", array(), "platform"), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Parameters:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  163 => 61,  158 => 59,  154 => 58,  149 => 56,  145 => 55,  140 => 53,  136 => 52,  131 => 50,  127 => 49,  122 => 47,  118 => 46,  113 => 44,  109 => 43,  104 => 41,  100 => 40,  95 => 38,  91 => 37,  86 => 35,  82 => 34,  77 => 32,  73 => 31,  68 => 29,  64 => 28,  60 => 27,  54 => 24,  50 => 22,  47 => 21,  42 => 18,  40 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Parameters:index.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Parameters/index.html.twig");
    }
}
