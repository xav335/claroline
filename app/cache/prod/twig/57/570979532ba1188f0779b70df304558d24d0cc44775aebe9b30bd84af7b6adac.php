<?php

/* ClarolineCoreBundle:API:Widget\widgetInstanceEditForm.html.twig */
class __TwigTemplate_b61884d9385cd9a9f213acd2981124526339aa72a3866b2b962d296a8fa663f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:API:modal.html.twig", "ClarolineCoreBundle:API:Widget\\widgetInstanceEditForm.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_configuration", array(), "platform"), "html", null, true);
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
        echo "    <div class=\"modal-body\">
        <form role=\"form\"
              class=\"form-horizontal\"
              method=\"put\"
              ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
              novalidate
              autocomplete=\"off\"
        >
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </form>

        ";
        // line 20
        if ((isset($context["extraInfos"]) ? $context["extraInfos"] : null)) {
            // line 21
            echo "            <hr>
            ";
            // line 22
            echo "<div ng-bind-html=\"wfmc.contentConfig\"></div>";
            echo "
        ";
        }
        // line 24
        echo "    </div>
    <div class=\"modal-footer\">
        <div class=\"btn btn-default\" data-dismiss=\"modal\" ng-click=\"\$close()\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" ng-click=\"wfmc.submit(\$scope)\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
        </button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:API:Widget\\widgetInstanceEditForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 27,  74 => 24,  69 => 22,  66 => 21,  64 => 20,  58 => 17,  51 => 13,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:API:Widget\\widgetInstanceEditForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/API/Widget/widgetInstanceEditForm.html.twig");
    }
}
