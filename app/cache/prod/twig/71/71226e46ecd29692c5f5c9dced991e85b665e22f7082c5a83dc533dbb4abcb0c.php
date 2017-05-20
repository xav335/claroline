<?php

/* ClarolineMessageBundle:Message:layout.html.twig */
class __TwigTemplate_d1486f72afc8b55da60f7c4883983cc2f78eebc320500304b06020dd259ba3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineMessageBundle:Message:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
        echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages", array(), "platform"));
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 7
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message", array(), "tools"), "href" => ""))), "method"), "html", null, true);
        // line 13
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            <ul class=\"nav nav-tabs margin-bottom-md\">
                <li class=\"";
        // line 20
        if (("claro_message_list_received" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_list_received");
        echo "\" id=\"link_message_list_received_layout\"><i class=\"fa fa-envelope-o\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages_received", array(), "platform"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"";
        // line 23
        if (("claro_message_list_sent" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_list_sent");
        echo "\" id=\"link_message_sent_layout\"><i class=\"fa fa-share\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("messages_sent", array(), "platform"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"";
        // line 26
        if (("claro_message_list_removed" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method"))) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_list_removed");
        echo "\" id=\"link_message_removed_layout\"><i class=\"fa fa-trash-o\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("trash", array(), "platform"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"";
        // line 29
        if ((("claro_message_show" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method")) && $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->compareRoute("/message/show/0", true))) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_show", array("message" => 0));
        echo "\" id=\"link_message_removed_layout\"><i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new", array(), "platform"), "html", null, true);
        echo "</a>
                </li>
            </ul>
            ";
        // line 33
        $this->displayBlock('section_content', $context, $blocks);
        // line 34
        echo "        </div>
    </div>
";
    }

    // line 33
    public function block_section_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClarolineMessageBundle:Message:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  112 => 34,  110 => 33,  102 => 30,  96 => 29,  89 => 27,  83 => 26,  76 => 24,  70 => 23,  63 => 21,  57 => 20,  52 => 17,  49 => 16,  44 => 13,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineMessageBundle:Message:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/message/Resources/views/Message/layout.html.twig");
    }
}
