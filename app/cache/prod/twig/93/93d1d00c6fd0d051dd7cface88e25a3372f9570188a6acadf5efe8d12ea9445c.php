<?php

/* ClarolineCoreBundle:Log:view_list_item_doer.html.twig */
class __TwigTemplate_9e6e7e21a27bb672b98612fd97bcedd3892f0990534984ed29ff7de6a5cc54b0 extends Twig_Template
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
        echo "<strong>

    ";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method", false, true), "doer", array(), "any", true, true)) {
            // line 4
            echo "        <strong>
            ";
            // line 5
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDoer", array(), "method") != null)) {
                // line 6
                echo "                ";
                if (array_key_exists("_resource", $context)) {
                    // line 7
                    echo "                    ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_logs", array("node" => $this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "resourceNode", array()), "id", array())));
                    // line 8
                    echo "                ";
                } elseif (array_key_exists("workspace", $context)) {
                    // line 9
                    echo "                    ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_logs_show", array("workspaceId" => $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "id", array())));
                    // line 10
                    echo "                ";
                } else {
                    // line 11
                    echo "                    ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_logs_show");
                    // line 12
                    echo "                ";
                }
                // line 13
                echo "                ";
                $context["query_params"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("user" => (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDoer", array(), "method"), "getFirstName", array(), "method") . " ") . $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDoer", array(), "method"), "getLastName", array(), "method"))));
                // line 14
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["path"]) ? $context["path"] : null) . "?") . twig_urlencode_filter((isset($context["query_params"]) ? $context["query_params"] : null))), "html", null, true);
                echo "\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "doer", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "doer", array()), "lastName", array()), "html", null, true);
                echo "
                </a>
            ";
            } else {
                // line 18
                echo "                <em>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "doer", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "doer", array()), "lastName", array()), "html", null, true);
                echo "</em>
            ";
            }
            // line 20
            echo "        </strong>
    ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["log"]) ? $context["log"] : null), "getDoerType", array()) == "platform")) {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("log_default_user", array(), "log"), "html", null, true);
            echo "
    ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["log"]) ? $context["log"] : null), "getDoerType", array()) == "anonymous")) {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("anonymous", array(), "platform"), "html", null, true);
            echo "
    ";
        }
        // line 26
        echo "</strong>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item_doer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  87 => 24,  85 => 23,  80 => 22,  78 => 21,  75 => 20,  67 => 18,  59 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_doer.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_doer.html.twig");
    }
}
