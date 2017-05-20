<?php

/* ClarolineCoreBundle:Administration:layout.html.twig */
class __TwigTemplate_2291bfce1d144d8a7488871fd3378fbf6f2b74c654e252bc4a0649f2517b6f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCoreBundle:Administration:layout.html.twig", 1);
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
    <div class=\"panel panel-default\">

        ";
        // line 15
        if ( !$this->env->getExtension('Claroline\CoreBundle\Twig\SendDatasConfirmExtension')->isSendDatasConfirmed()) {
            // line 16
            echo "            <div class=\"alert-claroline-danger\">
                <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_send_datas_confirm_form");
            echo "\">
                    <h4 class=\"label label-danger\">
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("infos_sending_has_not_been_accepted", array(), "platform"), "html", null, true);
            echo "
                            <i class=\"fa fa-question-circle\"
                               data-container=\".alert-claroline-danger\"
                               data-toggle=\"tooltip\"
                               data-placement=\"bottom\"
                               title=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("infos_sending_bar_msg", array(), "platform"), "html", null, true);
            echo "\"
                            >
                            </i>
                    </h4>
                </a>
            </div>
        ";
        }
        // line 31
        echo "        ";
        $this->displayBlock('section_content', $context, $blocks);
        // line 32
        echo "    </div>
";
    }

    // line 31
    public function block_section_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  89 => 32,  86 => 31,  76 => 24,  68 => 19,  63 => 17,  60 => 16,  58 => 15,  51 => 11,  48 => 10,  45 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/layout.html.twig");
    }
}
