<?php

/* ClarolineCursusBundle::adminLayout.html.twig */
class __TwigTemplate_d244b05fc5942a6ace8eac1f28b4001370015c11232621e0cc2f1f5c9bf93390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCursusBundle::adminLayout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'leftbar' => array($this, 'block_leftbar'),
            'content' => array($this, 'block_content'),
            'section_content' => array($this, 'block_section_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"));
    }

    // line 5
    public function block_leftbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Administration:renderLeftBar"), array());
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"visible-xs\">
        ";
        // line 11
        $this->displayBlock("leftbar", $context, $blocks);
        echo "
    </div>
    ";
        // line 13
        $this->displayBlock('section_content', $context, $blocks);
    }

    public function block_section_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClarolineCursusBundle::adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  51 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCursusBundle::adminLayout.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/cursus/Resources/views/adminLayout.html.twig");
    }
}
