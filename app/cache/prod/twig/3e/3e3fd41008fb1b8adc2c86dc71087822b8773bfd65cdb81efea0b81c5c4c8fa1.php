<?php

/* ClarolineCoreBundle:Administration:left_bar.html.twig */
class __TwigTemplate_33837d643b4cd02bf0ad332c6e798b233f429e8b632d2ac865367b1995355129 extends Twig_Template
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
        echo "<div class=\"list-group menu\">
    <div class=\"list-group-item disabled pouet\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "html", null, true);
        echo "</div>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tools"]) ? $context["tools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 4
            echo "        <a class=\"list-group-item ";
            if ($this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->activeRoute("claro_admin_open_tool", array("toolName" => $this->getAttribute($context["tool"], "getName", array(), "method")))) {
                echo "active";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_open_tool", array("toolName" => $this->getAttribute($context["tool"], "getName", array(), "method"))), "html", null, true);
            echo "\">
            <i class=\"fa fa-";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getClass", array(), "method"), "html", null, true);
            echo "\"></i>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["tool"], "getName", array(), "method"), array(), "tools"), "html", null, true);
            echo "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration:left_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  43 => 6,  39 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration:left_bar.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/left_bar.html.twig");
    }
}
