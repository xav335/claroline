<?php

/* ClarolineCoreBundle:Home/types:menu.html.twig */
class __TwigTemplate_1b4450613e35080c1e55f36b22b2e314333d56a182d08a825f2ddc76204a6cc4 extends Twig_Template
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
        if (((isset($context["content"]) ? $context["content"] : null) != null)) {
            // line 4
            echo "
    ";
            // line 5
            if (( !array_key_exists("father", $context) || (array_key_exists("father", $context) && twig_test_empty((isset($context["father"]) ? $context["father"] : null))))) {
                // line 6
                echo "        <div class=\"content-element relative ";
                echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">
            ";
                // line 7
                if ((array_key_exists("region", $context) && (((isset($context["region"]) ? $context["region"] : null) == "header") || ((isset($context["region"]) ? $context["region"] : null) == "footer")))) {
                    // line 8
                    echo "                <ul class=\"nav nav-pills relative";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_HOME_MANAGER")) {
                        echo " admin";
                    }
                    echo "\">
                    ";
                    // line 9
                    echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Home:type", array("type" => (isset($context["type"]) ? $context["type"] : null), "father" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "region" => (isset($context["region"]) ? $context["region"] : null))), array());
                    // line 10
                    echo "                    ";
                    echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Home:menu", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "size" => (isset($context["size"]) ? $context["size"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "region" => (isset($context["region"]) ? $context["region"] : null))), array());
                    // line 11
                    echo "                </ul>
            ";
                } else {
                    // line 13
                    echo "                <div class=\"list-group menu\">
                    <div class=\"relative\">
                        <a class=\"list-group-item disabled\" ";
                    // line 15
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array(), "any", true, true) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array()) != ""))) {
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->homeLink($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array())), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 16
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "any", true, true) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()) != ""))) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
                    } else {
                        echo "&nbsp;";
                    }
                    // line 17
                    echo "                        </a>
                        ";
                    // line 18
                    echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Home:menu", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "size" => (isset($context["size"]) ? $context["size"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "father" => (isset($context["father"]) ? $context["father"] : null), "region" => (isset($context["region"]) ? $context["region"] : null))), array());
                    // line 19
                    echo "                    </div>
                    ";
                    // line 20
                    echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Home:type", array("type" => (isset($context["type"]) ? $context["type"] : null), "father" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "region" => (isset($context["region"]) ? $context["region"] : null))), array());
                    // line 21
                    echo "                </div>
            ";
                }
                // line 23
                echo "        </div>
    ";
            } else {
                // line 25
                echo "        ";
                if ((array_key_exists("region", $context) && (((isset($context["region"]) ? $context["region"] : null) == "header") || ((isset($context["region"]) ? $context["region"] : null) == "footer")))) {
                    // line 26
                    echo "            <li class=\"content-element relative";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->activeLink($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array())), "html", null, true);
                    echo "\"
                data-id=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
                    echo "\"
                data-type=\"";
                    // line 28
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\"
                data-father=\"";
                    // line 29
                    echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                    echo "\">
                <a ";
                    // line 30
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array(), "any", true, true) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array()) != ""))) {
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->homeLink($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array())), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 33
                    echo "            <div class=\"content-element relative list-group-item";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->activeLink($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array())), "html", null, true);
                    echo " ";
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_HOME_MANAGER")) {
                        echo " move";
                    }
                    echo "\"
                data-id=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
                    echo "\"
                data-type=\"";
                    // line 35
                    echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                    echo "\"
                data-father=\"";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["father"]) ? $context["father"] : null), "html", null, true);
                    echo "\">
                <a ";
                    // line 37
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array(), "any", true, true) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array()) != ""))) {
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->homeLink($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "content", array())), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
                    echo "</a>
                ";
                    // line 38
                    echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Home:menu", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "size" => (isset($context["size"]) ? $context["size"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "father" => (isset($context["father"]) ? $context["father"] : null), "region" => (isset($context["region"]) ? $context["region"] : null))), array());
                    // line 39
                    echo "            </div>
        ";
                }
                // line 41
                echo "    ";
            }
            // line 42
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Home/types:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 42,  166 => 41,  162 => 39,  160 => 38,  150 => 37,  146 => 36,  142 => 35,  138 => 34,  129 => 33,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  100 => 26,  97 => 25,  93 => 23,  89 => 21,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  73 => 16,  65 => 15,  61 => 13,  57 => 11,  54 => 10,  52 => 9,  45 => 8,  43 => 7,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Home/types:menu.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Home/types/menu.html.twig");
    }
}
