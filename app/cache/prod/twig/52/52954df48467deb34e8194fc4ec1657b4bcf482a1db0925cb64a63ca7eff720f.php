<?php

/* ClarolineCoreBundle:Home:layout.html.twig */
class __TwigTemplate_6b0977a84e6ca11847cbaca396e9aea677cc09b1c3a67d6ec5d7a2af189d898b extends Twig_Template
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
        if (((isset($context["content"]) ? $context["content"] : null) != null)) {
            // line 3
            echo "
    ";
            // line 4
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_HOME_MANAGER") && array_key_exists("publish", $context)) &&  !(isset($context["publish"]) ? $context["publish"] : null))) {
                // line 5
                echo "        <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
            <strong><i class=\"fa fa-exclamation-triangle\"></i> ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("unpublish_page", array(), "home"), "html", null, true);
                echo "</strong>
            <a class=\"alert-link\" href=\"";
                // line 8
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claroline_types_manager");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("unpublish_link", array(), "home"), "html", null, true);
                echo "</a>
        </div>
    ";
            }
            // line 11
            echo "    ";
            if (( !array_key_exists("region", $context) || ((array_key_exists("region", $context) && ((isset($context["region"]) ? $context["region"] : null) != "header")) && ((isset($context["region"]) ? $context["region"] : null) != "footer")))) {
                // line 12
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Home:creator", array("type" => (isset($context["type"]) ? $context["type"] : null), "id" => null, "content" => null, "father" => (isset($context["father"]) ? $context["father"] : null))), array());
                // line 13
                echo "    ";
            }
            // line 14
            echo "
    ";
            // line 15
            if (twig_test_empty((isset($context["father"]) ? $context["father"] : null))) {
                // line 16
                echo "        <div class=\"contents\">
            ";
                // line 17
                echo (isset($context["content"]) ? $context["content"] : null);
                echo "
        </div>
    ";
            } else {
                // line 20
                echo "        ";
                echo (isset($context["content"]) ? $context["content"] : null);
                echo "
    ";
            }
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Home:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  69 => 20,  63 => 17,  60 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Home:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Home/layout.html.twig");
    }
}
