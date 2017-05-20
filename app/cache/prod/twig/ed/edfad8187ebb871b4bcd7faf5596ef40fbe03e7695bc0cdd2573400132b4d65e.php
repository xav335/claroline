<?php

/* ClarolineCoreBundle:Log:view_list_item.html.twig */
class __TwigTemplate_7cd23edd8aafb1866dc291f1fdf95efe0f773a8e60df2e1937e6c079d10325ad extends Twig_Template
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
    .log_list_item {
        font-size: 12px;
    }
</style>
";
        // line 6
        if ((isset($context["isDesktop"]) ? $context["isDesktop"] : null)) {
            // line 7
            echo "    <div class=\"col-md-2 log_list_item\">
        ";
            // line 8
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_workspace.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 8)->display($context);
            // line 9
            echo "    </div>
";
        }
        // line 11
        echo "
<div class=\"col-md-2 log_list_item\">
    ";
        // line 13
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDateLog", array(), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_format", array(), "platform")) == twig_date_format_filter($this->env, "", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_format", array(), "platform")))) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("today", array(), "platform") . ", "), "html", null, true);
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDateLog", array(), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_format", array(), "platform")) . ", "), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getDateLog", array(), "method"), "H:i"), "html", null, true);
        echo "
</div>

<div class=\"col-md-2 log_list_item\">
    ";
        // line 22
        $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_label.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 22)->display($context);
        // line 23
        echo "</div>

<div class=\"col-md-2 log_list_item\">
    ";
        // line 26
        $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_doer.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 26)->display($context);
        // line 27
        echo "</div>

";
        // line 29
        if ((isset($context["isDesktop"]) ? $context["isDesktop"] : null)) {
            // line 30
            echo "    <div class='col-md-4 log_list_item'>
";
        } else {
            // line 32
            echo "    <div class='col-md-6 log_list_item'>
";
        }
        // line 34
        echo "    ";
        if ((array_key_exists("listItemView", $context) && ((isset($context["listItemView"]) ? $context["listItemView"] : null) != null))) {
            // line 35
            echo "        ";
            echo (isset($context["listItemView"]) ? $context["listItemView"] : null);
            echo "
    ";
        } else {
            // line 37
            echo "        ";
            ob_start();
            // line 38
            echo "            ";
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_resource.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 38)->display($context);
            // line 39
            echo "        ";
            $context["resource"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "        ";
            ob_start();
            // line 41
            echo "            ";
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_receiver_user.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 41)->display($context);
            // line 42
            echo "        ";
            $context["receiver_user"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 43
            echo "        ";
            ob_start();
            // line 44
            echo "            ";
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_receiver_group.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 44)->display($context);
            // line 45
            echo "        ";
            $context["receiver_group"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "        ";
            ob_start();
            // line 47
            echo "            ";
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_role.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 47)->display($context);
            // line 48
            echo "        ";
            $context["role"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 49
            echo "        ";
            ob_start();
            // line 50
            echo "            ";
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_workspace.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 50)->display($context);
            // line 51
            echo "        ";
            $context["workspace"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 52
            echo "        ";
            ob_start();
            // line 53
            echo "            ";
            $this->loadTemplate("ClarolineCoreBundle:Log:view_list_item_tool.html.twig", "ClarolineCoreBundle:Log:view_list_item.html.twig", 53)->display($context);
            // line 54
            echo "        ";
            $context["tool"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 55
            echo "
        ";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("log_" . $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "getAction", array(), "method")) . "_sentence"), array("%resource%" =>             // line 58
(isset($context["resource"]) ? $context["resource"] : null), "%receiver_user%" =>             // line 59
(isset($context["receiver_user"]) ? $context["receiver_user"] : null), "%receiver_group%" =>             // line 60
(isset($context["receiver_group"]) ? $context["receiver_group"] : null), "%role%" =>             // line 61
(isset($context["role"]) ? $context["role"] : null), "%workspace%" =>             // line 62
(isset($context["workspace"]) ? $context["workspace"] : null), "%tool%" =>             // line 63
(isset($context["tool"]) ? $context["tool"] : null)), "log");
            // line 66
            echo "
    ";
        }
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:view_list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 68,  160 => 66,  158 => 63,  157 => 62,  156 => 61,  155 => 60,  154 => 59,  153 => 58,  152 => 56,  149 => 55,  146 => 54,  143 => 53,  140 => 52,  137 => 51,  134 => 50,  131 => 49,  128 => 48,  125 => 47,  122 => 46,  119 => 45,  116 => 44,  113 => 43,  110 => 42,  107 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 37,  89 => 35,  86 => 34,  82 => 32,  78 => 30,  76 => 29,  72 => 27,  70 => 26,  65 => 23,  63 => 22,  55 => 18,  49 => 16,  43 => 14,  41 => 13,  37 => 11,  33 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:view_list_item.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/view_list_item.html.twig");
    }
}
