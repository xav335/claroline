<?php

/* ClarolineCoreBundle:Administration\Parameters:sendDatasConfirmationForm.html.twig */
class __TwigTemplate_5fd6a377bf1f8742d6280303e674ec46ee0cb8e0c93a96b95387d251c9436eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Parameters:sendDatasConfirmationForm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Administration:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("infos_sending_acceptance", array(), "platform"))), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 9
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("infos_sending_acceptance", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 20
        echo "
";
    }

    // line 23
    public function block_section_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("infos_sending_acceptance", array(), "platform"), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"sendData\">
            <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_send_data", array(), "platform"), "html", null, true);
        echo "</p>
            <ul>
                <li>
                    ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("technical", array(), "platform"), "html", null, true);
        echo "
                    (<i>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("technical_data", array(), "platform"), "html", null, true);
        echo "</i>)
                </li>
                <li>
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("statistics", array(), "platform"), "html", null, true);
        echo "
                    (<i>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("statistics_data", array(), "platform"), "html", null, true);
        echo "</i>)
                </li>
            </ul>
            <small>
                <p>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("agreeing", array(), "platform"), "html", null, true);
        echo "</p>
                <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("personal_data", array(), "platform"), "html", null, true);
        echo "</p>
            </small>
        </div>
    </div>
    <div class=\"panel-footer\">
        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_send_datas_confirm");
        echo "\" class=\"btn btn-primary\">
            ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("accept", array(), "platform"), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Parameters:sendDatasConfirmationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  106 => 49,  98 => 44,  94 => 43,  87 => 39,  83 => 38,  77 => 35,  73 => 34,  67 => 31,  59 => 26,  55 => 24,  52 => 23,  47 => 20,  45 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Parameters:sendDatasConfirmationForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Parameters/sendDatasConfirmationForm.html.twig");
    }
}
