<?php

/* ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig */
class __TwigTemplate_d8751a902e2981392ca1aa88bf1daf37f479edaa14c3d96b2341910518fd49ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig", 1);
        $this->blocks = array(
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'form_row' => array($this, 'block_form_row'),
            'money_widget' => array($this, 'block_money_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_label' => array($this, 'block_form_label'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'collection_prototype' => array($this, 'block_collection_prototype'),
            'form_errors' => array($this, 'block_form_errors'),
            'zenstruck_ajax_entity_widget' => array($this, 'block_zenstruck_ajax_entity_widget'),
            'zenstruck_tunnel_entity_widget' => array($this, 'block_zenstruck_tunnel_entity_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) != "hidden"))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_form_row($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            ";
        // line 15
        $context["ctrl_width"] = (($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "control_width", array(), "any", true, true)) ? ($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "control_width", array())) : ("col-md-10"));
        // line 16
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["ctrl_width"]) ? $context["ctrl_width"] : null), "html", null, true);
        echo "\">
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 19
        if ((array_key_exists("help", $context) && (isset($context["help"]) ? $context["help"] : null))) {
            // line 20
            echo "                    <div class=\"help-block\">";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
            echo "</div>
                ";
        }
        // line 22
        echo "            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_money_widget($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        ";
        $context["currency"] = trim(twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")));
        // line 30
        echo "
        ";
        // line 31
        if ((isset($context["currency"]) ? $context["currency"] : null)) {
            // line 32
            echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["currency"]) ? $context["currency"] : null), "html", null, true);
            echo "</span>
                ";
            // line 34
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 37
            echo "            ";
            echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" =>             $this->renderBlock("form_widget_simple", $context, $blocks)));
            echo "
        ";
        }
        // line 39
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (!twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array()))) {
            // line 44
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " control-standalone"))));
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
        echo "
";
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        ob_start();
        // line 51
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 53
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $context["type"] = "select";
        // line 61
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 64
    public function block_form_label($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        ob_start();
        // line 66
        echo "        ";
        $context["is_multichoice_widget"] = (array_key_exists("checked", $context) && twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "block_prefixes", array())));
        // line 67
        echo "
        ";
        // line 68
        if ((isset($context["is_multichoice_widget"]) ? $context["is_multichoice_widget"] : null)) {
            // line 69
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ((twig_in_filter("radio", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null))) ? ("radio") : ("checkbox"))));
            // line 70
            echo "        ";
        } else {
            // line 71
            echo "            ";
            $context["lbl_width"] = (($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "label_width", array(), "any", true, true)) ? ($this->getAttribute((isset($context["theme_options"]) ? $context["theme_options"] : null), "label_width", array())) : ("col-md-2"));
            // line 72
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ("control-label " . (isset($context["lbl_width"]) ? $context["lbl_width"] : null))));
            // line 73
            echo "        ";
        }
        // line 74
        echo "        ";
        if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
            // line 75
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            // line 76
            echo "        ";
        }
        // line 77
        echo "        ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 78
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 81
            echo "            ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 82
            echo "        ";
        }
        // line 83
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "
            ";
        // line 85
        if ((isset($context["is_multichoice_widget"]) ? $context["is_multichoice_widget"] : null)) {
            // line 86
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
            ";
        }
        // line 88
        echo "        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 92
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        ob_start();
        // line 94
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 95
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" =>             $this->renderBlock("collection_prototype", $context, $blocks)));
            // line 96
            echo "        ";
        }
        // line 97
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            <div class=\"form-collection";
        // line 99
        echo ((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : null))) ? ("") : (" hide"));
        echo "\">
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 101
            echo "                    ";
            echo $this->getAttribute($this, "collection_field", array(0 => $context["rows"], 1 => (isset($context["allow_delete"]) ? $context["allow_delete"] : null)), "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </div>
            ";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
        ";
        // line 106
        if ((isset($context["allow_add"]) ? $context["allow_add"] : null)) {
            // line 107
            echo "            <a href=\"#\" class=\"btn btn-info form-collection-add\">Add</a>
        ";
        }
        // line 109
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 112
    public function block_collection_prototype($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        echo $this->getAttribute($this, "collection_field", array(0 => (isset($context["prototype"]) ? $context["prototype"] : null), 1 => (isset($context["allow_delete"]) ? $context["allow_delete"] : null)), "method");
        echo "
";
    }

    // line 133
    public function block_form_errors($context, array $blocks = array())
    {
        // line 134
        echo "    ";
        ob_start();
        // line 135
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 136
            echo "            <span class=\"help-block\">
                ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 138
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "            </span>
        ";
        }
        // line 142
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 145
    public function block_zenstruck_ajax_entity_widget($context, array $blocks = array())
    {
        // line 146
        echo "    ";
        ob_start();
        // line 147
        echo "        ";
        $context["type"] = "hidden";
        // line 148
        echo "        <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 152
    public function block_zenstruck_tunnel_entity_widget($context, array $blocks = array())
    {
        // line 153
        echo "    ";
        ob_start();
        // line 154
        echo "        <input type=\"hidden\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
        <div class=\"input-group zenstruck-tunnel-widget\">
            <input type=\"text\" disabled=\"disabled\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\" class=\"form-control zenstruck-tunnel-title\" />
            <span class=\"input-group-btn\">
                ";
        // line 158
        if ( !(isset($context["required"]) ? $context["required"] : null)) {
            // line 159
            echo "                    <a href=\"#\" class=\"btn btn-default zenstruck-tunnel-clear\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                ";
        }
        // line 161
        echo "                <a href=\"#\" class=\"btn btn-default zenstruck-tunnel-select\"";
        if ((isset($context["callback"]) ? $context["callback"] : null)) {
            echo " data-callback=\"";
            echo twig_escape_filter($this->env, (isset($context["callback"]) ? $context["callback"] : null), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["button_text"]) ? $context["button_text"] : null)), "html", null, true);
        echo "</a>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 116
    public function getcollection_field($__rows__ = null, $__allow_delete__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "rows" => $__rows__,
            "allow_delete" => $__allow_delete__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    ";
            ob_start();
            // line 118
            echo "        <div class=\"form-collection-element\">
            ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 120
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["row"], 'row');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "            ";
            if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
                // line 123
                echo "                <div class=\"form-group\">
                    <div class=\"col-lg-offset-2 col-lg-10\">
                        <a class=\"btn btn-danger remove\" href=\"#\">Delete</a>
                    </div>
                </div>
            ";
            }
            // line 129
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 129,  506 => 123,  503 => 122,  494 => 120,  490 => 119,  487 => 118,  484 => 117,  471 => 116,  455 => 161,  451 => 159,  449 => 158,  444 => 156,  432 => 154,  429 => 153,  426 => 152,  410 => 148,  407 => 147,  404 => 146,  401 => 145,  396 => 142,  392 => 140,  383 => 138,  379 => 137,  376 => 136,  373 => 135,  370 => 134,  367 => 133,  360 => 113,  357 => 112,  352 => 109,  348 => 107,  346 => 106,  341 => 104,  338 => 103,  329 => 101,  325 => 100,  321 => 99,  317 => 98,  312 => 97,  309 => 96,  306 => 95,  303 => 94,  300 => 93,  297 => 92,  291 => 88,  285 => 86,  283 => 85,  279 => 84,  263 => 83,  260 => 82,  257 => 81,  254 => 80,  251 => 79,  248 => 78,  245 => 77,  242 => 76,  239 => 75,  236 => 74,  233 => 73,  230 => 72,  227 => 71,  224 => 70,  221 => 69,  219 => 68,  216 => 67,  213 => 66,  210 => 65,  207 => 64,  200 => 61,  197 => 60,  194 => 59,  188 => 55,  179 => 53,  175 => 52,  170 => 51,  167 => 50,  164 => 49,  157 => 46,  154 => 45,  151 => 44,  148 => 43,  145 => 42,  140 => 39,  134 => 37,  128 => 34,  124 => 33,  121 => 32,  119 => 31,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  100 => 22,  94 => 20,  92 => 19,  88 => 18,  84 => 17,  79 => 16,  77 => 15,  73 => 14,  66 => 13,  63 => 12,  60 => 11,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ZenstruckFormBundle:Twitter:form_bootstrap3_layout.html.twig", "/var/www/claroline/vendor/zenstruck/form-bundle/Zenstruck/Bundle/FormBundle/Resources/views/Twitter/form_bootstrap3_layout.html.twig");
    }
}
