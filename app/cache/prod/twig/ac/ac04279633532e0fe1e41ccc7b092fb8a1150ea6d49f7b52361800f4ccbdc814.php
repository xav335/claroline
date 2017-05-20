<?php

/* ClarolineCoreBundle:Home/types:menu.creator.twig */
class __TwigTemplate_77a7349637888e3fb0a697fd5b135d7732c71b9f41948f1838dbeb8049f7a1f9 extends Twig_Template
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
        if (array_key_exists("father", $context)) {
            // line 2
            echo "    ";
            if (array_key_exists("content", $context)) {
                // line 3
                echo "        <div class=\"creator";
                echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                echo "\">
            <div>
                <div class=\"creator-collapse\">
    ";
            } else {
                // line 7
                echo "        <a class=\"list-group-item\" data-toggle=\"collapse\" href=\".collapse";
                echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                echo "\">
            <i class=\"fa fa-plus\"></i> ";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_link_here", array(), "home"), "html", null, true);
                echo "
        </a>
        <div class=\"creator";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                echo "\">
            <div class=\"collapse collapse";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                echo "\">
                <div class=\"creator-collapse\">
    ";
            }
            // line 14
            echo "                <div class=\"creator\" data-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            if (array_key_exists("content", $context)) {
                echo "data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
                echo "\"";
            }
            echo " ";
            if (array_key_exists("father", $context)) {
                echo "data-father=\"";
                echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <form role=\"form\" action=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claroline_content_create");
            echo "\" method=\"post\">
                        ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_first($this->env, (isset($context["form"]) ? $context["form"] : null)), 'widget');
            echo "
                        <div class=\"panel panel-default\" style=\"height:auto !important\">
                            <div class=\"navbar navbar-default navbar-static-top\">
                                <div class=\"navbar-form pull-right\">
                                    ";
            // line 20
            if (array_key_exists("content", $context)) {
                // line 21
                echo "                                    <a class=\"cancel-button btn btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
                echo "</a>
                                    <a class=\"edit-button btn btn-primary\">";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("save", array(), "platform"), "html", null, true);
                echo "</a>
                                    ";
            } else {
                // line 24
                echo "                                    <a data-toggle=\"collapse\" href=\".collapse";
                echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                echo "\" class=\"btn btn-default\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
                echo "</a>
                                    <a class=\"creator-button btn btn-primary\">";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create", array(), "platform"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 27
            echo "                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 36
            echo "    <div class=\"creator creator-menu content-12\" data-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            if (array_key_exists("content", $context)) {
                echo "data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
                echo "\"";
            }
            echo " ";
            if (array_key_exists("father", $context)) {
                echo "data-father=\"";
                echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
        <form role=\"form\" action=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claroline_content_create");
            echo "\" method=\"post\">
            ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_first($this->env, (isset($context["form"]) ? $context["form"] : null)), 'widget');
            echo "
            <div class=\"panel panel-default\" style=\"height:auto !important\">
                <div class=\"navbar navbar-default navbar-static-top\">
                    <div class=\"navbar-form pull-right\">
                        ";
            // line 42
            if (array_key_exists("content", $context)) {
                // line 43
                echo "                        <a class=\"cancel-button btn btn-default\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
                echo "</a>
                        <a class=\"edit-button btn btn-primary\">";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("save", array(), "platform"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 46
                echo "                        <a class=\"creator-button btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create", array(), "platform"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 48
            echo "                    </div>
                </div>
            </div>
        </form>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Home/types:menu.creator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  155 => 46,  150 => 44,  145 => 43,  143 => 42,  136 => 38,  132 => 37,  115 => 36,  104 => 27,  99 => 25,  92 => 24,  87 => 22,  82 => 21,  80 => 20,  73 => 16,  69 => 15,  52 => 14,  46 => 11,  42 => 10,  37 => 8,  32 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Home/types:menu.creator.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Home/types/menu.creator.twig");
    }
}
