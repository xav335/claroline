<?php

/* ClarolineCoreBundle:Log:view_list_item_receiver_group.html.twig */
class __TwigTemplate_ef8ccfeba4964a3dc901b97173a617febb5c6ed98e77f9b5e22dbe917b743cac extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method", false, true), "receiverGroup", array(), "any", true, true)) {
            // line 2
            echo "    <strong>
        ";
            // line 3
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") && ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getReceiverGroup", array(), "method") != null))) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_users_index") . "#/user/groups/") . $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getReceiverGroup", array(), "method"), "getId", array(), "method")), "html", null, true);
                echo "\">
                ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "receiverGroup", array()), "name", array()), "html", null, true);
                echo "
            </a>
        ";
            } elseif (($this->getAttribute(            // line 7
(isset($context["log"]) ? $context["log"] : null), "getReceiverGroup", array(), "method") != null)) {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "receiverGroup", array()), "name", array()), "html", null, true);
                echo "
        ";
            } else {
                // line 10
                echo "            <em>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "receiverGroup", array()), "name", array()), "html", null, true);
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
        return "ClarolineCoreBundle:Log:view_list_item_receiver_group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  44 => 10,  38 => 8,  36 => 7,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_receiver_group.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_receiver_group.html.twig");
    }
}
