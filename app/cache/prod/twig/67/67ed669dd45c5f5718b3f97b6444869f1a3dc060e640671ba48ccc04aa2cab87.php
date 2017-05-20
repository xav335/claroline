<?php

/* ClarolineCoreBundle:Log:view_list.html.twig */
class __TwigTemplate_93a1d4bbc5808afbc4ec9ba1be292d5c464a8f82d005224bdfc4bb490aae9a73 extends Twig_Template
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
        echo "<style type=\"text/css\">
    .logs-list {
        margin-top: 10px;
    }
    .logs-list .row {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .logs-list .row-odd {
        background-color: #F9F9F9;
    }
    .logs-list > div.row {
        border-top: 1px solid #DDDDDD;
    }
    .logs-list > div.row:first-child {
        border-top: none;
    }
</style>

<div class='logs-list'>
    <div class='row'>
        ";
        // line 22
        $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_header.html.twig", "ClarolineCoreBundle:Log:view_list.html.twig", 22)->display(array_merge($context, array("isDesktop" => (isset($context["isDesktop"]) ? $context["isDesktop"] : null))));
        // line 23
        echo "    </div>
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 25
            echo "    <div class='row ";
            if ((0 == $this->getAttribute($context["loop"], "index", array()) % 2)) {
                echo "row-odd";
            } else {
                echo "row-even";
            }
            echo "'>
        ";
            // line 26
            if ($this->getAttribute((isset($context["listItemViews"]) ? $context["listItemViews"] : null), $this->getAttribute($context["log"], "getId", array(), "method"), array(), "array", true, true)) {
                // line 27
                echo "            ";
                $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item.html.twig", "ClarolineCoreBundle:Log:view_list.html.twig", 27)->display(array_merge($context, array("isDesktop" => (isset($context["isDesktop"]) ? $context["isDesktop"] : null), "listItemView" => $this->getAttribute((isset($context["listItemViews"]) ? $context["listItemViews"] : null), $this->getAttribute($context["log"], "getId", array(), "method"), array(), "array"))));
                // line 28
                echo "        ";
            } else {
                // line 29
                echo "            ";
                $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item.html.twig", "ClarolineCoreBundle:Log:view_list.html.twig", 29)->display(array_merge($context, array("isDesktop" => (isset($context["isDesktop"]) ? $context["isDesktop"] : null))));
                // line 30
                echo "        ";
            }
            // line 31
            echo "    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  87 => 31,  84 => 30,  81 => 29,  78 => 28,  75 => 27,  73 => 26,  64 => 25,  47 => 24,  44 => 23,  42 => 22,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list.html.twig");
    }
}
