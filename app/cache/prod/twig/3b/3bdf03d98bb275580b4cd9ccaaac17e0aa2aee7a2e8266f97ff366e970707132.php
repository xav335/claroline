<?php

/* ClarolineCoreBundle:Form:button_group_select.html.twig */
class __TwigTemplate_93279b3a7ce6a86e9ba459e3166399151aa2b9ea615e8fab4496198cf25f78e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle:Form:button_group_select.html.twig", 1);
        $this->blocks = array(
            'buttongroupselect_widget' => array($this, 'block_buttongroupselect_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_buttongroupselect_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            \$(document).ready(function () {
                var options = [];
                var optionsHTML =\"<div id='btngroup-";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "' class='btn-group'>\";
                var curValue = \$(\"#";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\").val();
                \$(\"#";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo " option\").each(function(index, element){
                    var activeClass = (curValue==\$(this).attr(\"value\"))?\" active\":\"\";
                    optionsHTML += \"<a class='btn\"+activeClass+\" btn-default button-group-select btn-sm' value='\"+\$(this).attr(\"value\")+\"' role='button'>\"+\$(this).text()+\"</a>\";
                });
                optionsHTML += \"</div>\";
                \$(\"#";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\").after(optionsHTML);
                \$(\"#";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\").hide();
                \$(\"#btngroup-";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo " .button-group-select\").click(function(){
                    \$(\"#btngroup-";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo " .button-group-select\").removeClass(\"active\");
                    \$(this).addClass(\"active\");
                    \$(\"#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\").val(\$(this).attr(\"value\"));
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:button_group_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  50 => 11,  46 => 10,  42 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:button_group_select.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/button_group_select.html.twig");
    }
}
