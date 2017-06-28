<?php

/* ClarolineCoreBundle:Exception:error404.html.twig */
class __TwigTemplate_346f43ca8c38e766c1dd12c4bd9521958fb3055389155f7b8b658272614f8404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Exception:layout.html.twig", "ClarolineCoreBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Exception:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["httpCode"] = 404;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("404", array(), "platform"))), "html", null, true);
    }

    // line 7
    public function block_message($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("404", array(), "platform"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Exception:error404.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Exception/error404.html.twig");
    }
}
