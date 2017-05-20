<?php

/* ClarolineCoreBundle:Layout:topBar.html.twig */
class __TwigTemplate_3e30f9276cefbe8111328be916ae1039188bbc9382a912e6e7e7b26682a85f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Layout:topBarItems.html.twig", "ClarolineCoreBundle:Layout:topBar.html.twig", 1);
        $this->blocks = array(
            'topBar' => array($this, 'block_topBar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Layout:topBarItems.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topBar($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"top_bar\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                ";
        // line 12
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method") != "")) {
            // line 13
            echo "                    <a class=\"navbar-brand logo\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home", array(), "platform"), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, (($this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath() . "/uploads/logos/") . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method")), "html", null, true);
            echo "\" height=\"35\"
                            ";
            // line 15
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method") != "")) {
                echo "alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method"), "html", null, true);
                echo "\"";
            }
            echo ">
                    </a>
                ";
        }
        // line 18
        echo "                ";
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method") != "") && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "nameActive"), "method"))) {
            // line 19
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index");
            echo "\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 23
        echo "            </div>
            <div class=\"navbar-collapse collapse\">
                ";
        // line 25
        if ((( !(isset($context["isLogged"]) ? $context["isLogged"] : null) && array_key_exists("homeMenu", $context)) &&  !twig_test_empty((isset($context["homeMenu"]) ? $context["homeMenu"] : null)))) {
            // line 26
            echo "                    ";
            if ((isset($context["headerLocale"]) ? $context["headerLocale"] : null)) {
                // line 27
                echo "                        <div class=\"navbar-form navbar-right clearfix\">
                            <button class=\"pull-right locale-select btn btn-default\">";
                // line 28
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())), "html", null, true);
                echo "</button>
                        </div>
                    ";
            }
            // line 31
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["homeMenu"]) ? $context["homeMenu"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "                            ";
                if ($this->getAttribute($this->getAttribute($context["item"], "content", array(), "any", false, true), "title", array(), "any", true, true)) {
                    // line 34
                    echo "                                <li>
                                    <a";
                    // line 35
                    if ($this->getAttribute($this->getAttribute($context["item"], "content", array(), "any", false, true), "content", array(), "any", true, true)) {
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->homeLink($this->getAttribute($this->getAttribute($context["item"], "content", array()), "content", array())), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "content", array()), "getTitle", array(), "method"), "html", null, true);
                        echo "\"";
                    }
                    echo " >
                                        ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "content", array()), "getTitle", array(), "method"), "html", null, true);
                    echo "
                                    </a>
                                </li>
                            ";
                }
                // line 40
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    </ul>
                ";
        } else {
            // line 43
            echo "                    <ul class=\"nav navbar-nav\">
                        ";
            // line 44
            if ((isset($context["isLogged"]) ? $context["isLogged"] : null)) {
                $this->displayBlock("leftSide", $context, $blocks);
            }
            // line 45
            echo "                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
            // line 48
            $this->displayBlock("rightSide", $context, $blocks);
            echo "
                        ";
            // line 49
            if ((isset($context["isLogged"]) ? $context["isLogged"] : null)) {
                // line 50
                echo "                            ";
                $this->displayBlock("logged", $context, $blocks);
                echo "
                        ";
            } else {
                // line 52
                echo "                            ";
                $this->displayBlock("login", $context, $blocks);
                echo "
                        ";
            }
            // line 54
            echo "
                        ";
            // line 55
            if ((isset($context["showHelpButton"]) ? $context["showHelpButton"] : null)) {
                // line 56
                echo "                            <li>
                                <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, (isset($context["helpUrl"]) ? $context["helpUrl"] : null), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-question-circle\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 62
            echo "                    </ul>
                ";
        }
        // line 64
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Layout:topBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 64,  182 => 62,  174 => 57,  171 => 56,  169 => 55,  166 => 54,  160 => 52,  154 => 50,  152 => 49,  148 => 48,  143 => 45,  139 => 44,  136 => 43,  132 => 41,  126 => 40,  119 => 36,  109 => 35,  106 => 34,  103 => 33,  99 => 32,  96 => 31,  90 => 28,  87 => 27,  84 => 26,  82 => 25,  78 => 23,  72 => 20,  67 => 19,  64 => 18,  54 => 15,  50 => 14,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Layout:topBar.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Layout/topBar.html.twig");
    }
}
