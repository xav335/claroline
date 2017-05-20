<?php

/* ClarolineCoreBundle:Log:view_list_item_role.html.twig */
class __TwigTemplate_7002b9aca0aabc3fbf9f4ebca96331a4add228baa3bf12961648924957701fe5 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method", false, true), "role", array(), "any", true, true)) {
            // line 2
            echo "    <strong>
        ";
            // line 3
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "Role", array(), "method") != null)) {
                // line 4
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "role", array()), "name", array()), array(), "platform"), "html", null, true);
                echo "
        ";
            } else {
                // line 6
                echo "            <em>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "role", array()), "name", array()), array(), "platform"), "html", null, true);
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
        return "ClarolineCoreBundle:Log:view_list_item_role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_role.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_role.html.twig");
    }
}
