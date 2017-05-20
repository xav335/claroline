<?php

/* ClarolineChatBundle:AdminChat:adminChatConfigureForm.html.twig */
class __TwigTemplate_4833855fefcc88fd70c1fabc572376c9d6df722cc438615d3eb4cb8f01df35a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineChatBundle:AdminChat:adminChatConfigureForm.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("chat_configuration", array(), "chat"))), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 9
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_chat_management_admin_tool", array(), "tools"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_chat_admin_management")), 2 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("chat_configuration", array(), "chat"), "href" => ""))), "method"), "html", null, true);
        // line 23
        echo "
";
    }

    // line 26
    public function block_section_content($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("chat_configuration", array(), "chat"), "html", null, true);
        echo "
        </h3>
    </div>
    <form role=\"form\"
          class=\"form-horizontal\"
          action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_chat_admin_configure");
        echo "\"
          method=\"post\"
          ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
          enctype='multipart/form-data'
    >
        <div class=\"panel-body\">
            ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
            </button>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_chat_admin_management");
        echo "\" class=\"btn btn-default\">
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </a>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_chat_admin_reset");
        echo "\" class=\"btn btn-danger\">
                ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reset", array(), "platform"), "html", null, true);
        echo "
            </a>

        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "ClarolineChatBundle:AdminChat:adminChatConfigureForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 50,  100 => 49,  95 => 47,  91 => 46,  86 => 44,  79 => 40,  72 => 36,  67 => 34,  59 => 29,  55 => 27,  52 => 26,  47 => 23,  45 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineChatBundle:AdminChat:adminChatConfigureForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/chat/Resources/views/AdminChat/adminChatConfigureForm.html.twig");
    }
}
