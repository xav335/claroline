<?php

/* ClarolineCoreBundle::form_theme_no_label.html.twig */
class __TwigTemplate_2885990a19f5fce55a2405b7022486979609ea15bb4e6470c0d675586c79d921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle::form_theme_no_label.html.twig", 1);
        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_label($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_form_row($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"form-group row";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 12
        $context["ctrl_width"] = "col-md-12";
        // line 13
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl_width"]) ? $context["ctrl_width"] : null), "html", null, true);
        echo "\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 16
        if ((array_key_exists("help", $context) && (isset($context["help"]) ? $context["help"] : null))) {
            // line 17
            echo "                    <div class=\"help-block\">";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
            echo "</div>
                ";
        }
        // line 19
        echo "            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle::form_theme_no_label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 17,  72 => 16,  68 => 15,  64 => 14,  59 => 13,  57 => 12,  53 => 11,  46 => 10,  43 => 9,  40 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle::form_theme_no_label.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/form_theme_no_label.html.twig");
    }
}
