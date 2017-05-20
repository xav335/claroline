<?php

/* ClarolineCoreBundle:Log:view_list_item_resource.html.twig */
class __TwigTemplate_c458cdbf5988f674579a879cf28932af1a0d70ee572f9ac54aeb00070278260d extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "details", array(), "any", false, true), "resource", array(), "any", true, true)) {
            // line 2
            echo "    <strong>
        ";
            // line 3
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "resourceNode", array()) != null)) {
                // line 4
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "resourceType", array()), "name", array()) == "directory")) {
                    // line 5
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open_tool", array("workspaceId" => $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "workspace", array()), "id", array()), "toolName" => "resource_manager")), "html", null, true);
                    echo "#resources/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "resourceNode", array()), "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "details", array()), "resource", array()), "path", array()), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_open", array("resourceType" => $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "resourceType", array()), "name", array()), "action" => "open", "node" => $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "resourceNode", array()), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "details", array()), "resource", array()), "path", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            <em>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "details", array()), "resource", array()), "path", array()), "html", null, true);
                echo "</em>
        ";
            }
            // line 12
            echo "    </strong>
";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item_resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  50 => 10,  47 => 9,  39 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_resource.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_resource.html.twig");
    }
}
