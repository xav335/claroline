<?php

/* IcapFormulaPluginBundle:Formula:plugin.js.html.twig */
class __TwigTemplate_10e7d14b86526c76c3d573a998cc81308741f7349aace7f545976ab49ac27adc extends Twig_Template
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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4906c7e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4906c7e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tinymce/plugins/formula/langs_part_1_en_1.js");
            // line 4
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "4906c7e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4906c7e_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tinymce/plugins/formula/langs_part_1_es_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "4906c7e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4906c7e_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tinymce/plugins/formula/langs_part_1_fr_FR_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "4906c7e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4906c7e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tinymce/plugins/formula/langs.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 6
        echo "<script>
    (function () {
        'use strict';
        var tinymce = window.tinymce;
        tinymce.PluginManager.add('formula', function (editor, url) {
            function showFormulaDialog() {
                var currentNode = editor.selection.getNode();

                function getFrame() {
                    var lang = editor.settings.language || \"en\";
                    var mlangParam = \"\";
                    var equationParam = \"\";
                    if (currentNode.nodeName.toLowerCase() == \"img\" && currentNode.className.indexOf(\"fm-editor-equation\") > -1) {
                        if (currentNode.getAttribute(\"data-mlang\")) mlangParam = \"&mlang=\" + currentNode.getAttribute(\"data-mlang\");
                        if (currentNode.getAttribute(\"data-equation\")) equationParam = \"&equation=\" + currentNode.getAttribute(\"data-equation\");
                    }
                    var html = '<iframe name=\"tinymceFormula\" id=\"tinymceFormula\" src=\"' + window.Claroline.Home.asset + 'bundles/icapformulaplugin/tinymce/plugins/formula/index.html' + '?lang=' + lang + mlangParam + equationParam + '\" scrolling=\"yes\" frameborder=\"0\"></iframe>';
                    return html;
                };
                editor.windowManager.open({
                    title: \"Formula\",
                    width: 900,
                    height: 510,
                    html: getFrame(),
                    buttons: [
                        {
                            text: 'Cancel',
                            onclick: function () {
                                this.parent().parent().close();
                            }
                        },

                        {
                            text: 'Insert Formula',
                            subtype: 'primary',
                            onclick: function (e) {
                                var me = this;
                                if (window.frames['tinymceFormula'] && window.frames['tinymceFormula'].getData) {
                                    window.frames['tinymceFormula'].getData(function (src, mlang, equation) {
                                        if (src) {
                                            var htmlContent = '<img class=\"fm-editor-equation\" src=\"' + src + '\" data-mlang=\"' + mlang + '\" data-equation=\"' + encodeURIComponent(equation) + '\"/>';
                                            editor.insertContent(htmlContent);
                                        }
                                        me.parent().parent().close();
                                    });
                                } else {
                                    me.parent().parent().close();
                                }
                            }
                        }
                    ]
                });
            }

            editor.addButton('formula', {
                image: window.Claroline.Home.asset + '/bundles/icapformulaplugin/tinymce/plugins/formula/img/formula.png',
                tooltip: 'Insert Formula',
                onclick: showFormulaDialog,
                onPostRender: function () {
                    var _this = this;   // reference to the button itself
                    editor.on('NodeChange', function (e) {
                        if (e.element.nodeType === Node.ELEMENT_NODE) {
                            _this.active(e.element.className.indexOf('fm-editor-equation') > -1 && e.element.nodeName.toLowerCase() == \"img\");
                        }
                    })
                }
            });

        });
        tinymce.claroline.plugins.formula = true;
    }());
</script>
";
    }

    public function getTemplateName()
    {
        return "IcapFormulaPluginBundle:Formula:plugin.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  23 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapFormulaPluginBundle:Formula:plugin.js.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/formula/Resources/views/Formula/plugin.js.html.twig");
    }
}
