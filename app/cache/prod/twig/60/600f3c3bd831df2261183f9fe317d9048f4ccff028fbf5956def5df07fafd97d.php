<?php

/* ClarolineCoreBundle:Administration\Widget:widgetEditModalForm.html.twig */
class __TwigTemplate_482c0c6e58291107d372cf0ed164c8dff3d9ca482f59f9db7b71be3fcb59a0b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"modal-widget-edit-form\"
     class=\"modal-dialog\"
     role=\"dialog\"
     aria-labelledby=\"modalLabel\"
     aria-hidden=\"true\"
>
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                &times;
            </button>
            <h3 class=\"modal-title\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "getName", array(), "method"), array(), "widget"), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"modal-body\">
            <form id=\"widget-edit-form\"
                  action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_widget_edit", array("widget" => $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "getId", array(), "method"))), "html", null, true);
        echo "\"
                  method=\"POST\"
                  ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
            >
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "defaultWidth", array()), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "defaultHeight", array()), 'row');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isDisplayableInDesktop", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isDisplayableInWorkspace", array()), 'row');
        echo "
                <div id=\"roles-form-field\" class=\"hidden\">
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "roles", array()), 'row');
        echo "
                </div>
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            </form>
        </div>
        <div class=\"modal-footer\">
            <span class=\"btn btn-default\" data-dismiss=\"modal\">
                ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </span>
            <button type=\"submit\" id='edit-btn' class=\"btn btn-primary\">
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "
            </button>
        </div>
    </div>
</div>

";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "    <script type=\"text/javascript\">
        (function () {
            'use strict';

            function checkDesktop ()
            {
                var value = \$('#widget_form_isDisplayableInDesktop').prop('checked');

                if (value) {
                    \$('#roles-form-field').removeClass('hidden');
                    \$('#roles-form-field').show('slow');
                } else {
                    \$('#roles-form-field').hide('slow');
                }
            }

            \$('#widget-edit-form').on('change', '#widget_form_isDisplayableInDesktop', function () {
                checkDesktop();
            });

            checkDesktop();
        })();
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Widget:widgetEditModalForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  97 => 43,  88 => 37,  82 => 34,  74 => 29,  69 => 27,  64 => 25,  60 => 24,  56 => 23,  52 => 22,  47 => 20,  42 => 18,  34 => 13,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Widget:widgetEditModalForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Widget/widgetEditModalForm.html.twig");
    }
}
