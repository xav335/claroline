<?php

/* ClarolineCoreBundle:Form:date_picker.html.twig */
class __TwigTemplate_a10dce31bdb1f1e52fa17085ed665bff3a7863b3aaa42690456f72cce6bfa963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig", "ClarolineCoreBundle:Form:date_picker.html.twig", 1);
        $this->blocks = array(
            'custom_widget_attributes' => array($this, 'block_custom_widget_attributes'),
            'datepicker_widget' => array($this, 'block_datepicker_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_custom_widget_attributes($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "html", null, true);
            echo "\"";
        }
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\" ";
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function block_datepicker_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if ((isset($context["component"]) ? $context["component"] : null)) {
            // line 13
            echo "        <div class=\"input-group date\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            <input type=\"text\" class=\"input-sm form-control\" ";
            // line 14
            $this->displayBlock("custom_widget_attributes", $context, $blocks);
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo ">
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
        ";
        } else {
            // line 18
            echo "        <input type=\"text\" class=\"input-sm form-control\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo "/>
        ";
        }
        // line 20
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$(\"#";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\").datepicker(";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:date_picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 22,  118 => 20,  106 => 18,  94 => 14,  89 => 13,  86 => 12,  83 => 11,  80 => 10,  57 => 6,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:date_picker.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/date_picker.html.twig");
    }
}
