<?php

/* ClarolineCoreBundle:Form:redirect_after_login_theme.html.twig */
class __TwigTemplate_f3f29dbe22bb3a8efea35cdc99795a436cfb5a1177f6bbe617b51120dc41dae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle:Form:redirect_after_login_theme.html.twig", 1);
        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
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
        $context["parent_class"] = null;
        // line 5
        echo "    ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "array", true, true))) {
            // line 6
            echo "        ";
            $context["parent_class"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "attr", array()), "class", array(), "array");
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        if (((isset($context["parent_class"]) ? $context["parent_class"] : null) == "redirect-after-login")) {
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            ";
            $context["isOptionUrl"] = ((isset($context["label"]) ? $context["label"] : null) == "redirect_after_login_option_url");
            // line 11
            echo "            ";
            $context["isOptionWorkspace"] = ((isset($context["label"]) ? $context["label"] : null) == "redirect_after_login_option_workspace_tag");
            // line 12
            echo "            ";
            $context["attrClass"] = ((twig_in_filter("radio", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null))) ? ("radio") : ("checkbox"));
            // line 13
            echo "            ";
            if ((((isset($context["isOptionUrl"]) ? $context["isOptionUrl"] : null) == true) || ((isset($context["isOptionWorkspace"]) ? $context["isOptionWorkspace"] : null) == true))) {
                // line 14
                echo "                ";
                $context["attrClass"] = ((isset($context["attrClass"]) ? $context["attrClass"] : null) . " radio-with-input");
                // line 15
                echo "            ";
            }
            // line 16
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (isset($context["attrClass"]) ? $context["attrClass"] : null)));
            // line 17
            echo "            <div ";
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
                <label class=\"col-md-12\">
                    <div class=\"pull-left\">
                    ";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                    <span>";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "</span>
                    </div>
                    ";
            // line 23
            if (((isset($context["isOptionUrl"]) ? $context["isOptionUrl"] : null) == true)) {
                // line 24
                echo "                    <div class=\"col-md-6\">
                        ";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "parent", array()), "redirectAfterLoginUrl", array()), 'widget');
                echo "
                    </div>
                    ";
            } elseif ((            // line 27
(isset($context["isOptionWorkspace"]) ? $context["isOptionWorkspace"] : null) == true)) {
                // line 28
                echo "                    <div class=\"col-md-4\">
                        ";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "parent", array()), "defaultWorkspaceTag", array()), 'widget');
                echo "
                    </div>
                    ";
            }
            // line 32
            echo "                </label>
            </div>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 35
            echo "    ";
        } else {
            // line 36
            echo "        ";
            $this->displayParentBlock("form_label", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:redirect_after_login_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  123 => 35,  118 => 32,  112 => 29,  109 => 28,  107 => 27,  102 => 25,  99 => 24,  97 => 23,  92 => 21,  88 => 20,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:redirect_after_login_theme.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/redirect_after_login_theme.html.twig");
    }
}
