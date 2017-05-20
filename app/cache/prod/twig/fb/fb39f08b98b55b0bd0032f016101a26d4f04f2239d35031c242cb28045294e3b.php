<?php

/* ClarolineCoreBundle:Form:two_level_select.html.twig */
class __TwigTemplate_7518479fa0279248a6b82cef24681a2562b82fb1ad703e8d5aafdeaa0eaf9314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle:Form:two_level_select.html.twig", 1);
        $this->blocks = array(
            'twolevelselect_widget' => array($this, 'block_twolevelselect_widget'),
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
    public function block_twolevelselect_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"two_level_select";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 6
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
        </div>
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var choices = ";
        // line 10
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "choices", array(), "array"));
        echo ";
                var choicesTree = {};
                var preselectedValuePath = buildChoicesTree(choices, choicesTree, [], \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "data", array(), "array"), "html", null, true);
        echo "\");
                if (preselectedValuePath == null) {
                    preselectedValuePath = [choices[0]['label']];
                }
                var inputName = \$(\"";
        // line 16
        echo twig_escape_filter($this->env, ("#" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array")), "html", null, true);
        echo "\").attr('name');
                var choicesTreeOptions = {
                    preselect:{},
                    choose:''
                };
                choicesTreeOptions.preselect[inputName] = preselectedValuePath;
                \$(\"";
        // line 22
        echo twig_escape_filter($this->env, ("#" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array")), "html", null, true);
        echo "\").optionTree(choicesTree, choicesTreeOptions);
            });
            function buildChoicesTree(choices, choicesTree, pathToNode, preselectedValue)
            {
                var preselectedValuePath = null;
                for (var key in choices) {
                    var label = choices[key].label;
                    label = label.substring(label.indexOf(\":\") + 1);
                    if (!choices[key].choices) {
                        choicesTree[label] = choices[key].value;
                        if (preselectedValue == choices[key].data) {
                            preselectedValuePath = pathToNode.slice();
                            preselectedValuePath.push(label);
                        }
                    } else {
                        choicesTree[label] = {};
                        var newPathToNode = pathToNode.slice();
                        newPathToNode.push(key);
                        var tempPreselectedPath = buildChoicesTree(choices[key].choices, choicesTree[label], newPathToNode, preselectedValue);
                        if (tempPreselectedPath != null) {
                            preselectedValuePath = tempPreselectedPath;
                        }
                    }
                }

                return preselectedValuePath;
            }
        </script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jquery-option-tree/jquery.optionTree.js"), "html", null, true);
        echo "\"></script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:two_level_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 50,  69 => 22,  60 => 16,  53 => 12,  48 => 10,  41 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:two_level_select.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/two_level_select.html.twig");
    }
}
