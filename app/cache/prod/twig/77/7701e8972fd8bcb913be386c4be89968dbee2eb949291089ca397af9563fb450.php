<?php

/* ClarolineCoreBundle::form_theme.html.twig */
class __TwigTemplate_399060e660ff35a23ab3e103c935c21deb2780cc27701d52a3e8d4ec476acb2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig", "ClarolineCoreBundle::form_theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'scroll_widget' => array($this, 'block_scroll_widget'),
            'tinymce_widget' => array($this, 'block_tinymce_widget'),
            'content_widget' => array($this, 'block_content_widget'),
            'form_errors' => array($this, 'block_form_errors'),
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
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"form-group row";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " has-error";
        }
        echo "\"
            ";
        // line 6
        $context["display_row"] = (($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "display_row", array(), "any", true, true)) ? ($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "display_row", array())) : (true));
        // line 7
        echo "            ";
        if (((isset($context["display_row"]) ? $context["display_row"] : null) == false)) {
            echo " style=\"display: none;\" ";
        }
        echo ">
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 9
        $context["ctrl_width"] = (($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "control_width", array(), "any", true, true)) ? ($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "control_width", array())) : ("col-md-10"));
        // line 10
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl_width"]) ? $context["ctrl_width"] : null), "html", null, true);
        echo "\">
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 13
        if ((array_key_exists("help", $context) && (isset($context["help"]) ? $context["help"] : null))) {
            // line 14
            echo "                    <div class=\"help-block\">";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
            echo "</div>
                ";
        }
        // line 16
        echo "            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_form_label($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        ob_start();
        // line 23
        echo "        ";
        $context["is_multichoice_widget"] = (array_key_exists("checked", $context) && twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array())));
        // line 24
        echo "
        ";
        // line 25
        if ((isset($context["is_multichoice_widget"]) ? $context["is_multichoice_widget"] : null)) {
            // line 26
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ((twig_in_filter("radio", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null))) ? ("radio-inline") : ("checkbox"))));
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "            ";
            $context["lbl_width"] = (($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "label_width", array(), "any", true, true)) ? ($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "label_width", array())) : ("col-md-2"));
            // line 29
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ("control-label " . (isset($context["lbl_width"]) ? $context["lbl_width"] : null))));
            // line 30
            echo "        ";
        }
        // line 31
        echo "        ";
        if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
            // line 32
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 35
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 36
            echo "        ";
        }
        // line 37
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 38
            echo "            ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["id"]) ? $context["id"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            // line 39
            echo "        ";
        }
        // line 40
        echo "        <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "
            ";
        // line 42
        if ((isset($context["is_multichoice_widget"]) ? $context["is_multichoice_widget"] : null)) {
            // line 43
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
            ";
        }
        // line 45
        echo "        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 49
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        if (!twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array()))) {
            // line 51
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " control-standalone"))));
            // line 52
            echo "    ";
        }
        // line 53
        echo "    ";
        echo twig_replace_filter($this->renderParentBlock("checkbox_widget", $context, $blocks), array("form-control" => ""));
        echo "
";
    }

    // line 56
    public function block_scroll_widget($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        ob_start();
        // line 58
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 59
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 64
    public function block_tinymce_widget($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    // line 68
    public function block_content_widget($context, array $blocks = array())
    {
        // line 69
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"content-menu float-right-top\">
            <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span>";
        // line 72
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())), "html", null, true);
        echo "</span>&nbsp;<i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 76
            echo "                    <li role=\"presentation\" class=\"pointer-hand\"><a role=\"menuitem\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array())), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </ul>
        </div>
        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 81
            echo "            <div data-lang=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array())), "html", null, true);
            echo "\"
                 class=\"lang";
            // line 82
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()) != $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()))) {
                echo " hide";
            }
            echo "\">
                ";
            // line 83
            if ((isset($context["contentTitle"]) ? $context["contentTitle"] : null)) {
                // line 84
                echo "                    ";
                echo                 // line 85
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "title", array(), "array"), 'widget', array("attr" => array("placeholder" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 87
(isset($context["titlePlaceHolder"]) ? $context["titlePlaceHolder"] : null), array(), "home") . "..."))));
                // line 90
                echo "
                ";
            }
            // line 92
            echo "                ";
            if (((isset($context["contentTitle"]) ? $context["contentTitle"] : null) && (isset($context["contentText"]) ? $context["contentText"] : null))) {
                echo "<br>";
            }
            // line 93
            echo "                ";
            if ((isset($context["contentText"]) ? $context["contentText"] : null)) {
                // line 94
                echo "                    ";
                echo                 // line 95
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "content", array(), "array"), 'widget', array("attr" => array("placeholder" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(                // line 97
(isset($context["textPlaceHolder"]) ? $context["textPlaceHolder"] : null), array(), "home") . "..."))));
                // line 100
                echo "
                ";
            }
            // line 102
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div>
";
    }

    // line 107
    public function block_form_errors($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 109
            echo "        ";
            $context["errorClass"] = ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) ? ("global-error") : ("field-error"));
            // line 110
            echo "        ";
            ob_start();
            // line 111
            echo "            <div class=\"help-block ";
            echo twig_escape_filter($this->env, (isset($context["errorClass"]) ? $context["errorClass"] : null), "html", null, true);
            echo "\">
                ";
            // line 112
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) == 1)) {
                // line 113
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), 0, array(), "array"), "message", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 115
                echo "                    <ul>
                        ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 117
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "                    </ul>
                ";
            }
            // line 121
            echo "            </div>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 123
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle::form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 123,  361 => 121,  357 => 119,  348 => 117,  344 => 116,  341 => 115,  335 => 113,  333 => 112,  328 => 111,  325 => 110,  322 => 109,  319 => 108,  316 => 107,  311 => 104,  304 => 102,  300 => 100,  298 => 97,  297 => 95,  295 => 94,  292 => 93,  287 => 92,  283 => 90,  281 => 87,  280 => 85,  278 => 84,  276 => 83,  270 => 82,  265 => 81,  261 => 80,  257 => 78,  248 => 76,  244 => 75,  238 => 72,  231 => 69,  228 => 68,  221 => 65,  218 => 64,  210 => 59,  205 => 58,  202 => 57,  199 => 56,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  180 => 49,  174 => 45,  168 => 43,  166 => 42,  162 => 41,  146 => 40,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  131 => 35,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  102 => 25,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  83 => 16,  77 => 14,  75 => 13,  71 => 12,  67 => 11,  62 => 10,  60 => 9,  56 => 8,  49 => 7,  47 => 6,  40 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle::form_theme.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/form_theme.html.twig");
    }
}
