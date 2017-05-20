<?php

/* ClarolineCoreBundle:Log:view_list_item_icon.html.twig */
class __TwigTemplate_777782fbed69e4211a9942dd15cd6717a65ccb4399338eda73646947d745d5f2 extends Twig_Template
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
        $context["icon_class"] = "fa fa-file";
        // line 2
        echo "
";
        // line 3
        if (twig_in_filter("workspace", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 4
            echo "    ";
            $context["icon_class"] = "fa fa-book";
        }
        // line 6
        echo "
";
        // line 7
        if (twig_in_filter("user", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 8
            echo "    ";
            $context["icon_class"] = "fa fa-user";
        }
        // line 10
        echo "
";
        // line 11
        if (twig_in_filter("group", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 12
            echo "    ";
            $context["icon_class"] = "fa fa-users";
        }
        // line 14
        echo "
";
        // line 15
        if (twig_in_filter("ws_role", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 16
            echo "    ";
            $context["icon_class"] = "fa fa-circle-o";
        }
        // line 18
        echo "
";
        // line 19
        if (twig_in_filter("tool", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 20
            echo "    ";
            $context["icon_class"] = "fa fa-wrench";
        }
        // line 22
        echo "
";
        // line 23
        if ((twig_in_filter("delete", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")) || twig_in_filter("remove", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")))) {
            // line 24
            echo "    ";
            $context["icon_class"] = "fa fa-trash-o";
        }
        // line 26
        echo "
";
        // line 27
        if ((twig_in_filter("edit", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")) || twig_in_filter("update", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")))) {
            // line 28
            echo "    ";
            $context["icon_class"] = "fa fa-pencil";
        }
        // line 30
        echo "
";
        // line 31
        if ((twig_in_filter("create", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")) || twig_in_filter("new", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")))) {
            // line 32
            echo "    ";
            $context["icon_class"] = "fa fa-plus";
        }
        // line 34
        echo "
";
        // line 35
        if (twig_in_filter("download", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 36
            echo "    ";
            $context["icon_class"] = "fa fa-download";
        }
        // line 38
        echo "
";
        // line 39
        if (twig_in_filter("upload", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 40
            echo "    ";
            $context["icon_class"] = "fa fa-upload";
        }
        // line 42
        echo "
";
        // line 43
        if (twig_in_filter("enter", $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method"))) {
            // line 44
            echo "    ";
            $context["icon_class"] = "fa fa-mail-forward fa-flip-vertical";
        }
        // line 46
        echo "
<i class='";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["icon_class"]) ? $context["icon_class"] : null), "html", null, true);
        echo "'></i>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item_icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  120 => 46,  116 => 44,  114 => 43,  111 => 42,  107 => 40,  105 => 39,  102 => 38,  98 => 36,  96 => 35,  93 => 34,  89 => 32,  87 => 31,  84 => 30,  80 => 28,  78 => 27,  75 => 26,  71 => 24,  69 => 23,  66 => 22,  62 => 20,  60 => 19,  57 => 18,  53 => 16,  51 => 15,  48 => 14,  44 => 12,  42 => 11,  39 => 10,  35 => 8,  33 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item_icon.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item_icon.html.twig");
    }
}
