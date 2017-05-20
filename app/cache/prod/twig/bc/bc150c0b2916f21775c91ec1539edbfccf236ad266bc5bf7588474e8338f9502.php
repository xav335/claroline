<?php

/* ClarolineCoreBundle:Authentication:externalClaroline.html.twig */
class __TwigTemplate_bc6e9b14beedeae68c90c19738c1db8ebef62d6f300f14e212f8a50cc030e6ce extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 2
            echo "    <button class=\"btn btn-primary btn-block claro-oauth\"
       data-max-rows=\"1\"
       data-size=\"xlarge\"
       type=\"submit\"
       href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "getHost", array(), "method"), "html", null, true);
            echo "/oauth/v2/auth_login?client_id=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["platform"], "getClarolineAccess", array(), "method"), "getRandomId", array(), "method"), "html", null, true);
            echo "&redirect_uri=";
            echo twig_escape_filter($this->env, (($this->env->getExtension('Claroline\CoreBundle\Twig\RouterExtension')->getHost() . "/oauth/v2/log/") . $this->getAttribute($context["platform"], "getName", array(), "method")), "html", null, true);
            echo "&response_type=code\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "getName", array(), "method"), "html", null, true);
            echo "
    </button>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Authentication:externalClaroline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Authentication:externalClaroline.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Authentication/externalClaroline.html.twig");
    }
}
