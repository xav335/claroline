<?php

/* ClarolineCoreBundle:Log:view_list_item_receiver_user.html.twig */
class __TwigTemplate_cc77a245188330455105e801e5c52348d4cfb8fc42825f9db5e4b86f38e68f3f extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method", false, true), "receiverUser", array(), "any", true, true)) {
            // line 2
            echo "    <strong>
        ";
            // line 3
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getReceiver", array(), "method") != null)) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_public_profile_view", array("publicUrl" => $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getReceiver", array(), "method"), "getPublicUrl", array(), "method"))), "html", null, true);
                echo "\">
                ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "receiverUser", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "receiverUser", array()), "lastName", array()), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 8
                echo "            <em>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "receiverUser", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDetails", array(), "method"), "receiverUser", array()), "lastName", array()), "html", null, true);
                echo "</em>
        ";
            }
            // line 10
            echo "    </strong>
";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item_receiver_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  39 => 8,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_receiver_user.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_receiver_user.html.twig");
    }
}
