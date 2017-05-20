<?php

/* IcapBadgeBundle:Form:badge_picker.html.twig */
class __TwigTemplate_9d1693d2ea2268d0858868cd8d4bc35b244adec0503c8841cdcce21cdda42c06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "IcapBadgeBundle:Form:badge_picker.html.twig", 1);
        $this->blocks = array(
            'badge_collection_widget' => array($this, 'block_badge_collection_widget'),
            'badgepicker_widget' => array($this, 'block_badgepicker_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_badge_collection_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 8
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" =>             $this->renderBlock("collection_prototype", $context, $blocks)));
            // line 9
            echo "        ";
        }
        // line 10
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            <div class=\"badge-form-collection\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 14
            echo "                    ";
            echo $this->getAttribute($this, "badge_collection_field", array(0 => $context["rows"], 1 => (isset($context["allow_delete"]) ? $context["allow_delete"] : null)), "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </div>
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_badgepicker_widget($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        ";
        // asset "1e42130"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_1e42130") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icapbadge/badge_picker_field.css");
        // line 37
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\" screen=\"media\" />
        ";
        unset($context["asset_url"]);
        // line 39
        echo "
        <div class=\"badge_picker\">
            ";
        // line 41
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 42
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" data-prototype=\"<div class=&quot;form-collection-element&quot;><input type=&quot;hidden&quot; id=&quot;";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "___name___id&quot; name=&quot;";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
            echo "[__name__][id]&quot;/></div>\">
                    <div class=\"badge-form-collection\">
                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["badge"]) {
                // line 45
                echo "                            <div class=\"badge-form-collection-element\">
                                <input type=\"hidden\" id=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "_id\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                echo "][id]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "id", array()), "html", null, true);
                echo "\">
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </div>
                </div>
                <button type=\"button\" class=\"btn btn-default badges_selector\" id=\"badgepicker_";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"
                        data-title=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("browse_badges", array(), "icap_badge"), "html", null, true);
            echo "\" data-toggle=\"tooltip\">
                    <i class=\"fa fa-folder-open\"></i>
                    <small";
            // line 54
            if ((0 == twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))) {
                echo " class=\"hide\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("count_selected_badge", twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)), array("%nbBadge%" => twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null))), "icap_badge"), "html", null, true);
            echo "</small>
                    <small";
            // line 55
            if ((0 < twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))) {
                echo " class=\"hide\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("select_badges", array(), "icap_badge"), "html", null, true);
            echo "</small>
                </button>
            ";
        } else {
            // line 58
            echo "                <input type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id", array()), "html", null, true);
                echo "\" ";
            }
            echo "class=\"badge-picker\">

                <div class=\"input-group select-field\">
                    <p class=\"form-control no_badge_selected";
            // line 61
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo " hide";
            }
            echo "\" disabled=\"disabled\">
                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("select_badge", array(), "icap_badge"), "html", null, true);
            echo "
                    </p>
                    <p class=\"form-control badge_selection_field";
            // line 64
            if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo " hide";
            }
            echo "\" data-title=\"";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "text", array()), "html", null, true);
            }
            echo "\"
                        data-container=\"body\" data-toggle=\"popover\" data-placement=\"top\"
                        data-content=\"";
            // line 66
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "description", array()), "html", null, true);
            }
            echo "\">
                        <span class=\"badge_text";
            // line 67
            if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo " hide";
            }
            echo "\">";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "text", array()), "html", null, true);
            }
            echo "</span>
                        <img src=\"";
            // line 68
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "icon", array())), "html", null, true);
            }
            echo "\" alt=\"";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "text", array()), "html", null, true);
            }
            echo "\" class=\"badge_image";
            if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo " hide";
            }
            echo "\" />
                    </p>
                    <span class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\" id=\"badgepicker_";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("browse_badges", array(), "icap_badge"), "html", null, true);
            echo "\" data-toggle=\"tooltip\"><i class=\"fa fa-folder-open\"></i></button>
                    </span>
                </div>
            ";
        }
        // line 75
        echo "        </div>

        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapbadge/js/badge_picker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(function(){
                var assetPath = \"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "\";
                \$(\"#badgepicker_";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\").click(function() {
                ";
        // line 82
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 83
            echo "                    var value = [];
                    \$(\".badge-form-collection-element input[type=hidden]\").each(function(index, element) {
                        value.push(\$(this).val());
                    });
                    var badgePrototypeField = \$(\"#";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\").attr('data-prototype');
                    var badgeFormCollection = \$(\".badge-form-collection\");

                    var callback = function (nodes) {
                        \$(\".badge-form-collection-element\").remove();

                        nodes.each(function(index, element) {
                            var newBadge = \$(badgePrototypeField.replace(/__name__/g, index));
                            badgeFormCollection.append(newBadge);
                            \$(\"input\", newBadge).val(element.id);
                        });
                    };
                ";
        } else {
            // line 100
            echo "                    var hiddenInputField    = \$(\"#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\");
                    var badgeSelectionField = \$(\".badge_selection_field\");
                    var callback = function (nodes) {
                        if (0 < nodes.length) {
                            var selectedBadge = nodes[0];
                            hiddenInputField.val(selectedBadge.id);
                            \$(\".badge_text\", badgeSelectionField)
                                .html(selectedBadge.text)
                                .removeClass('hide');
                            \$(\".badge_image\", badgeSelectionField)
                                .attr('src', assetPath + selectedBadge.icon)
                                .attr('alt', selectedBadge.text)
                                .removeClass('hide');
                            \$(\".no_badge_selected\").addClass('hide');
                            \$(\".badge_selection_field\").removeClass('hide');
                        }
                        else {
                            hiddenInputField.val(null);
                            \$(\".badge_text\", badgeSelectionField)
                                .html(\"\")
                                .addClass('hide');
                            \$(\".badge_image\", badgeSelectionField)
                                .attr('src', \"\")
                                .attr('alt', \"\");
                            \$(\".no_badge_selected\").removeClass('hide');
                            \$(\".badge_selection_field\").addClass('hide');
                        }

                    };
                    var value = hiddenInputField.val();
                ";
        }
        // line 131
        echo "                    var url = \"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_badge_badge_picker");
        echo "\";
                    var badgePickerSettings = {
                        mode: \"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "\",
                        multiple: ";
        // line 134
        echo twig_escape_filter($this->env, ((array_key_exists("multiple", $context)) ? (_twig_default_filter((isset($context["multiple"]) ? $context["multiple"] : null), "false")) : ("false")), "html", null, true);
        echo ",
                        value: value,
                        workspace: ";
        // line 136
        echo twig_escape_filter($this->env, ((array_key_exists("workspace", $context)) ? (_twig_default_filter((isset($context["workspace"]) ? $context["workspace"] : null), "null")) : ("null")), "html", null, true);
        echo ",
                        blacklist: ";
        // line 137
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["blacklist"]) ? $context["blacklist"] : null)), "html", null, true);
        echo "
                    };
                    window.Claroline.BadgePicker.configureBadgePicker(url, badgePickerSettings, callback);
                    window.Claroline.BadgePicker.openBadgePicker();
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function getbadge_collection_field($__rows__ = null, $__allow_delete__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "rows" => $__rows__,
            "allow_delete" => $__allow_delete__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    ";
            ob_start();
            // line 24
            echo "        <div class=\"badge-form-collection-element\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 26
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["row"], 'row');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
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
        return "IcapBadgeBundle:Form:badge_picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 28,  378 => 26,  374 => 25,  371 => 24,  368 => 23,  355 => 22,  342 => 137,  338 => 136,  333 => 134,  329 => 133,  323 => 131,  288 => 100,  272 => 87,  266 => 83,  264 => 82,  260 => 81,  256 => 80,  250 => 77,  246 => 75,  237 => 71,  221 => 68,  211 => 67,  205 => 66,  194 => 64,  189 => 62,  183 => 61,  168 => 58,  158 => 55,  150 => 54,  145 => 52,  141 => 51,  137 => 49,  120 => 46,  117 => 45,  113 => 44,  103 => 42,  101 => 41,  97 => 39,  91 => 37,  87 => 34,  84 => 33,  81 => 32,  73 => 17,  70 => 16,  61 => 14,  57 => 13,  52 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBadgeBundle:Form:badge_picker.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/badge/Resources/views/Form/badge_picker.html.twig");
    }
}
