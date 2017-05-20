<?php

/* ClarolineChatBundle:AdminChat:adminChatManagement.html.twig */
class __TwigTemplate_075c7d85f6f409a1f30e53eea2db0c174a408facc490c6f4d9caddc7c6f18d41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineChatBundle:AdminChat:adminChatManagement.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_chat_management_admin_tool", array(), "tools")), "html", null, true);
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
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_chat_management_admin_tool", array(), "tools"), "href" => ""))), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_chat_management_admin_tool", array(), "tools"), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"list-group\">
        <a class=\"list-group-item\"
           href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_chat_admin_configure_form");
        echo "\"
        >
            <i class=\"fa fa-cogs\"></i>
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configuration", array(), "platform"), "html", null, true);
        echo "
        </a>
        <a class=\"list-group-item\"
           href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_chat_users_admin_management");
        echo "\"
        >
            <i class=\"fa fa-users\"></i>
            ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users_management", array(), "platform"), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineChatBundle:AdminChat:adminChatManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  80 => 41,  74 => 38,  68 => 35,  60 => 30,  56 => 28,  53 => 27,  48 => 24,  46 => 13,  44 => 12,  41 => 11,  36 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineChatBundle:AdminChat:adminChatManagement.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/chat/Resources/views/AdminChat/adminChatManagement.html.twig");
    }
}
