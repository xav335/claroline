<?php

/* ClarolineCoreBundle:Registration:userRegistrationForm.html.twig */
class __TwigTemplate_b3d58bb5d659f885b416094c83eae66b20666825652f6d8fedc949c9fe9a263b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCoreBundle:Registration:userRegistrationForm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register", array(), "platform"));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register", array(), "platform"), "html", null, true);
        echo "</h3>
        </div>
        <form role=\"form\" class=\"form-horizontal\" id=\"user_registration_form\"
              action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_registration_register_user");
        echo "\"
              method=\"post\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
            <div class=\"panel-body\">

                ";
        // line 17
        echo "                ";
        $context["array"] = array();
        // line 18
        echo "
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["el"]) {
            // line 20
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["el"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "facet", array(), "any", true, true)) {
                // line 21
                echo "                        ";
                $context["array"] = twig_array_merge((isset($context["array"]) ? $context["array"] : null), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($context["el"], "vars", array()), "attr", array()), "facet", array())));
                // line 22
                echo "                    ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                ";
        // line 25
        $context["div"] = array();
        // line 26
        echo "
                ";
        // line 28
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array"]) ? $context["array"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 29
            echo "                   ";
            if (!twig_in_filter($context["name"], (isset($context["div"]) ? $context["div"] : null))) {
                // line 30
                echo "                   ";
                $context["div"] = twig_array_merge((isset($context["div"]) ? $context["div"] : null), array(0 => $context["name"]));
                // line 31
                echo "                   ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["div"]) ? $context["div"] : null)) > 0)) {
            // line 35
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\"> ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_info", array(), "platform"), "html", null, true);
            echo "</div>
                        <div class=\"panel-body\">
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["el"]) {
                // line 39
                echo "                                ";
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["el"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "facet", array(), "any", true, true)) {
                    // line 40
                    echo "                                    ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["el"], 'row');
                    echo "
                                ";
                }
                // line 42
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['el'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        </div>
                    </div>
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["div"]) ? $context["div"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["divName"]) {
                // line 46
                echo "                        <div class=\"panel panel-default ";
                echo twig_escape_filter($this->env, $context["divName"], "html", null, true);
                echo "\">
                            <div class=\"panel-heading\"> ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["divName"], array(), "platform"), "html", null, true);
                echo "</div>
                            <div class=\"panel-body\">
                                ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["el"]) {
                    // line 50
                    echo "                                    ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["el"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "facet", array(), "any", true, true)) {
                        // line 51
                        echo "                                        ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["el"], "vars", array()), "attr", array()), "facet", array()) == $context["divName"])) {
                            // line 52
                            echo "                                            ";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["el"], 'row');
                            echo "
                                        ";
                        }
                        // line 54
                        echo "                                    ";
                    }
                    // line 55
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['el'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
                ";
        } else {
            // line 61
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                ";
        }
        // line 63
        echo "
            </div>
            <div class=\"panel-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_account", array(), "platform"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"btn btn-default\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
                </a>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Registration:userRegistrationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 68,  218 => 67,  214 => 66,  209 => 63,  203 => 61,  197 => 59,  189 => 56,  183 => 55,  180 => 54,  174 => 52,  171 => 51,  168 => 50,  164 => 49,  159 => 47,  154 => 46,  150 => 45,  146 => 43,  140 => 42,  134 => 40,  131 => 39,  127 => 38,  122 => 36,  119 => 35,  117 => 34,  114 => 33,  108 => 32,  105 => 31,  102 => 30,  99 => 29,  94 => 28,  91 => 26,  89 => 25,  86 => 24,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  67 => 19,  64 => 18,  61 => 17,  55 => 13,  51 => 12,  45 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Registration:userRegistrationForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Registration/userRegistrationForm.html.twig");
    }
}
