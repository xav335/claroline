<?php

/* ClarolineCoreBundle:API:modal.html.twig */
class __TwigTemplate_30f0c4a30db336b75d8b5edbd43fbf4ad60c648b355347a0b80fde23a11990d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'explanation' => array($this, 'block_explanation'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal-content\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\" ng-click=\"\$close()\">&times;</button>
        <h4>";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        echo "</h4>
    </div>
    ";
        // line 6
        $this->displayBlock('explanation', $context, $blocks);
        // line 7
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 8
        echo "</div>";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_explanation($context, array $blocks = array())
    {
        echo " ";
    }

    // line 7
    public function block_form($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:API:modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  46 => 6,  41 => 4,  37 => 8,  34 => 7,  32 => 6,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:API:modal.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/API/modal.html.twig");
    }
}
