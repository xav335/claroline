<?php

/* ClarolineCoreBundle:API:User\createGroupForm.html.twig */
class __TwigTemplate_77403aada0cc0fe50e938922335c088d0bd37c8388e4f574bd34f37b1d29a43c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:API:modal.html.twig", "ClarolineCoreBundle:API:User\\createGroupForm.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:API:modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_group", array(), "platform"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_form($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "ClarolineCoreBundle::form_theme_angular.html.twig"));
        // line 8
        echo "    <form role=\"form\"
            class=\"form-horizontal\"
            ng-submit=\"cgfm.submit(\$scope)\"
            method=\"post\" ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
        >
        <div class=\"modal-body\">
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"modal-footer\">
            <button id=\"create-location-btn\" class=\"btn btn-primary\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create", array(), "platform"), "html", null, true);
        echo "</button>
            <div class=\"btn btn-default\" data-dismiss=\"modal\" ng-click=\"\$close()\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:API:User\\createGroupForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 17,  56 => 14,  50 => 11,  45 => 8,  42 => 7,  39 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:API:User\\createGroupForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/API/User/createGroupForm.html.twig");
    }
}
