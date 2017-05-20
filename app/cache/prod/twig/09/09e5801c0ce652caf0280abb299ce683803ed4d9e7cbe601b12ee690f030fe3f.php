<?php

/* ClarolineCoreBundle:Form:date_time_picker.html.twig */
class __TwigTemplate_e523acc5853b9e733e6f54ddb2c9de546c34fac08dfe333a964679bd9a05d72a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig", "ClarolineCoreBundle:Form:date_time_picker.html.twig", 1);
        $this->blocks = array(
            'custom_widget_attributes' => array($this, 'block_custom_widget_attributes'),
            'datetimepicker_row' => array($this, 'block_datetimepicker_row'),
            'datetimepicker_widget' => array($this, 'block_datetimepicker_widget'),
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
        echo "    ";
        ob_start();
        // line 5
        echo "        name=\"";
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
        echo "        ";
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
        // line 7
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 11
    public function block_datetimepicker_row($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 13
        ob_start();
        // line 14
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors', array());
        echo "
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = array()) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array());
        echo "
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 18
        echo "    </div>
";
    }

    // line 23
    public function block_datetimepicker_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " clarolineDateTimePicker"))));
        // line 25
        echo "    <div class=\"form-inline\">
        ";
        // line 26
        if ((isset($context["component"]) ? $context["component"] : null)) {
            // line 27
            echo "            <div class=\"input-group  date col-md-4\">
                ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("id" => ((isset($context["id"]) ? $context["id"] : null) . "_date"), "attr" => array("class" => "input-small", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_form_placeholder", array(), "platform"))));
            echo "
                <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
            </div>
            <div class=\"input-group   col-md-offset-1 col-sm-3 \">
                ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget', array("id" => ((isset($context["id"]) ? $context["id"] : null) . "_time"), "attr" => array("class" => "input-small", "placeholder" => "--:--", "pattern" => "[0-9]{2}:[0-9]{2}")));
            echo "
                <span class=\"input-group-addon\"><i class=\"fa fa-clock-o\"></i></span>
            </div>
        ";
        } else {
            // line 36
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("id" => ((isset($context["id"]) ? $context["id"] : null) . "_date"), "attr" => array("class" => "input-small", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_form_placeholder", array(), "platform"))));
            echo "
            ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget', array("id" => ((isset($context["id"]) ? $context["id"] : null) . "_time"), "attr" => array("class" => "input-small", "placeholder" => "--:--", "pattern" => "[0-9]{2}:[0-9]{2}")));
            echo "
        ";
        }
        // line 39
        echo "    </div>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            if(!IsInputTypeSupported('date'))
            {
                \$(\"#";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_date\").datepicker(";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : null));
        echo ");
            }

            if(!IsInputTypeSupported('time'))
            {
                \$(\"#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_time\").keyup(function(e)
                {
                    // do nothing if this is a delete or suppr key.
                    if(e.keyCode != 8 && e.keyCode != 46 ) {
                        var time; // will be the returned value
                        var val = \$(this).val(); // value of the input
                        var sep =':'; // hours separator
                        var lg = \$(this).val().length; // length of the input value
                        var hours = val.substr(0,2); // supposed hours
                        var min = val.substr(3,2); // supposed minutes.
                        var default_val = '00'; // default value when something is wrong.

                        if(val == '') {
                            // if empty, set the default value
                            time  =default_val+sep+default_val;
                        } else {
                            // if hours are not a correct Integer, set the default value
                            if(isNaN(parseInt(hours))) {
                                hours = default_val;
                            }
                            // if minutes exist but are not a correct Integer, set the default value
                            if(min != '' && isNaN(parseInt(min))){
                                min = default_val;
                            }
                            // if hours are not in the correct range, set the default.
                            if( hours < 0 || hours > 23) {
                                hours = default_val;
                            }
                            // if mins are not in the correct range, set the default
                            if(min < 0 || min > 59) {
                                min = default_val;
                            }
                            // if there is no minute or separator.
                            if(lg < 2) {
                                sep = '';
                                min = '';
                            }
                            //setting a correct time value.
                            time = hours+sep+min;
                        }
                        // push the value in the input.
                        \$(this).val(time);
                    }
                });
            }
        });

        /**
         *  Check if browser support the type of input.
         * @param typeName
         * @returns {boolean}
         * @constructor
         */
        function IsInputTypeSupported(typeName) {
            // Create element
            var input = document.createElement(\"input\");
            // attempt to set the specified type
            input.setAttribute(\"type\", typeName);
            // If the \"type\" property equals \"text\"
            // then that input type is not supported
            // by the browser
            var val = (input.type !== \"text\");
            // Delete \"input\" variable to
            // clear up its resources
            delete input;
            // Return the detected value
            return val;
        }

    </script>


";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:date_time_picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  161 => 45,  153 => 39,  148 => 37,  143 => 36,  136 => 32,  129 => 28,  126 => 27,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  110 => 18,  105 => 16,  101 => 15,  96 => 14,  94 => 13,  87 => 12,  84 => 11,  79 => 7,  59 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:date_time_picker.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/date_time_picker.html.twig");
    }
}
