<?php

/* ClarolineCoreBundle:Home/types:default.html.twig */
class __TwigTemplate_b90df9aacaccf0e28e9a01660ace0f9eab480f07d81ee067c4e752af17508e35 extends Twig_Template
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
        if ( !array_key_exists("father", $context)) {
            $context["father"] = null;
        }
        // line 2
        if ( !array_key_exists("region", $context)) {
            $context["region"] = null;
        }
        // line 3
        if ( !array_key_exists("collapse", $context)) {
            $context["collapse"] = false;
        }
        // line 4
        if (((isset($context["content"]) ? $context["content"] : null) != null)) {
            // line 5
            echo "    <div class=\"content-element  ";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">
        <div class=\"panel panel-default relative\">
            ";
            // line 7
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Home:menu", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "size" => (isset($context["size"]) ? $context["size"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "father" => (isset($context["father"]) ? $context["father"] : null), "region" => (isset($context["region"]) ? $context["region"] : null), "collapse" => (isset($context["collapse"]) ? $context["collapse"] : null))), array());
            // line 8
            echo "            ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()) != "")) {
                // line 9
                echo "                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
                echo "</h3>
                </div>
            ";
            }
            // line 13
            echo "            <div class=\"panel-body\">
                <div";
            // line 14
            if ((isset($context["collapse"]) ? $context["collapse"] : null)) {
                echo " class=\"read-more\"";
            }
            echo ">
                    ";
            // line 15
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array(), "any", true, true) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array()) != ""))) {
                // line 16
                echo "                        <div class=\"text\">";
                echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array());
                echo "</div>
                        ";
                // line 17
                if ((isset($context["collapse"]) ? $context["collapse"] : null)) {
                    // line 18
                    echo "                            <div class=\"text-gradient\"></div>
                            <button class=\"show-more hide btn btn-primary btn-sm\" type=\"button\">
                                <i class=\"fa fa-plus\"></i> ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("read_more", array(), "home"), "html", null, true);
                    echo "
                            </button>
                        ";
                }
                // line 23
                echo "                    ";
            }
            // line 24
            echo "                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Home/types:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  85 => 23,  79 => 20,  75 => 18,  73 => 17,  68 => 16,  66 => 15,  60 => 14,  57 => 13,  51 => 10,  48 => 9,  45 => 8,  43 => 7,  33 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Home/types:default.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Home/types/default.html.twig");
    }
}
