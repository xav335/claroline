<?php

/* ClarolineCoreBundle:Resource:importModalForm.html.twig */
class __TwigTemplate_11a2aa1c36e715fadce17f7f1dd9876a98f3a6c7dbb120d9383dd03be06ccb29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class='modal-dialog'>
    <form role=\"form\" novalidate=\"novalidate\"
          action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_import", array("directory" => $this->getAttribute((isset($context["directory"]) ? $context["directory"] : null), "getId", array(), "method"))), "html", null, true);
        echo "\"
          method=\"post\" ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
          id=\"generic-form\"
          novalidate
          class=\"modal-content\">
        <div class='modal-header'>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                &times;
            </button>
            <h4 class=\"modal-title\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources_import", array(), "platform"), "html", null, true);
        echo "
            </h4>
        </div>
        <div class='modal-body'>
            <div class=\"well\">
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import_resources_explanation", array(), "platform"), "html", null, true);
        echo "
            </div>
            ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">
                ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </button>
            <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Resource:importModalForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  59 => 24,  52 => 20,  47 => 18,  39 => 13,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Resource:importModalForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Resource/importModalForm.html.twig");
    }
}
