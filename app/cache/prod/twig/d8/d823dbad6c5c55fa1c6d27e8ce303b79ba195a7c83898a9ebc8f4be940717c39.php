<?php

/* ClarolineCoreBundle:Home/types:default.creator.twig */
class __TwigTemplate_fafdceb5d2f506cc4071338dddd5026450a0ecb952a632dc9b469951db621032 extends Twig_Template
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
        echo "<div class=\"creator content-12\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        if (array_key_exists("content", $context)) {
            echo "data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    <form role=\"form\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claroline_content_create");
        echo "\" method=\"post\">
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_first($this->env, (isset($context["form"]) ? $context["form"] : null)), 'widget');
        echo "
        <div class=\"panel panel-default\">
            <div class=\"navbar navbar-default navbar-static-top\">
                <ul class=\"nav navbar-nav\">
                    <li><a class=\"pointer-hand addlink\"><i class=\"fa fa-link\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_a_link", array(), "home"), "html", null, true);
        echo "</a></li>
                    <li class=\"divider-vertical\"></li>
                </ul>
                <div class=\"navbar-form pull-right\">
                    ";
        // line 11
        if (array_key_exists("content", $context)) {
            // line 12
            echo "                        <a class=\"cancel-button btn btn-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
            echo "</a>
                        <a class=\"edit-button btn btn-primary\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("save", array(), "platform"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 15
            echo "                        <a class=\"creator-button btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create", array(), "platform"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 17
        echo "                </div>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Home/types:default.creator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  60 => 15,  55 => 13,  50 => 12,  48 => 11,  41 => 7,  34 => 3,  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Home/types:default.creator.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Home/types/default.creator.twig");
    }
}
