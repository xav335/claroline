<?php

/* ClarolineCoreBundle:Log:view_list_item_workspace.html.twig */
class __TwigTemplate_be4c136e634e948cacc572dc27577b46c664c07ef2021d53535f5070b9ea4417 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method", false, true), "workspace", array(), "any", true, true)) {
            // line 2
            echo "    <strong>
        ";
            // line 3
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getWorkspace", array(), "method") != null)) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open", array("workspaceId" => $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getWorkspace", array(), "method"), "getId", array(), "method"))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "workspace", array()), "name", array()), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 6
                echo "            <em>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "workspace", array()), "name", array()), "html", null, true);
                echo "</em>
        ";
            }
            // line 8
            echo "    </strong>
";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item_workspace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_workspace.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_workspace.html.twig");
    }
}
