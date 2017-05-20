<?php

/* ClarolineCoreBundle:API:Widget\widgetInstanceCreateForm.html.twig */
class __TwigTemplate_c37fa126cf1d838d35df3ab5671f6808e4150569184c6d0a9441b46d392e7132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:API:modal.html.twig", "ClarolineCoreBundle:API:Widget\\widgetInstanceCreateForm.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_widget_instance", array(), "platform"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "ClarolineCoreBundle::form_theme_angular.html.twig"));
        // line 9
        echo "    <form role=\"form\"
          class=\"form-horizontal\"
          ng-submit=\"wfmc.submit(\$scope)\"
          method=\"post\"
          ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
          novalidate
          autocomplete=\"off\"
    >
        <div class=\"modal-body\">
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"modal-footer\">
            <div class=\"btn btn-default\" data-dismiss=\"modal\" ng-click=\"\$close()\">
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
            </button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:API:Widget\\widgetInstanceCreateForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  66 => 22,  59 => 18,  51 => 13,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:API:Widget\\widgetInstanceCreateForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/API/Widget/widgetInstanceCreateForm.html.twig");
    }
}
