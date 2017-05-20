<?php

/* ClarolineCoreBundle:API:HomeTab\userHomeTabCreateForm.html.twig */
class __TwigTemplate_e6eef63645a72dde72a9f2690476668baf0acfcde5dc21f6d6396fa2d5033a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:API:modal.html.twig", "ClarolineCoreBundle:API:HomeTab\\userHomeTabCreateForm.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home_tab_creation", array(), "platform"), "html", null, true);
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
          ng-submit=\"htfmc.submit(\$scope)\"
          method=\"post\" ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
          novalidate
          autocomplete=\"off\"
    >
        <div class=\"modal-body\">
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"modal-footer\">
            <div class=\"btn btn-default\" data-dismiss=\"modal\" ng-click=\"\$close()\">
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
            </button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:API:HomeTab\\userHomeTabCreateForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  65 => 21,  58 => 17,  50 => 12,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:API:HomeTab\\userHomeTabCreateForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/API/HomeTab/userHomeTabCreateForm.html.twig");
    }
}
