<?php

/* FormaLibreSupportBundle:AdminSupport:adminSupportIndex.html.twig */
class __TwigTemplate_59d1a53548acb17a2356a4e6ac0d46bd592cf84024a35e6ab059b3d333f06a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "FormaLibreSupportBundle:AdminSupport:adminSupportIndex.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("formalibre_support_management_tool", array(), "tools")), "html", null, true);
        // line 8
        echo "
";
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 13
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("formalibre_support_management_tool", array(), "tools"), "href" => ""))), "method"), "html", null, true);
        // line 24
        echo "
";
    }

    // line 27
    public function block_section_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("formalibre_support_management_tool", array(), "tools"), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"list-group\">

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 36
            echo "            ";
            $context["typeId"] = $this->getAttribute($context["type"], "getId", array(), "method");
            // line 37
            echo "            <a class=\"list-group-item\"
               href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_new", array("type" => (isset($context["typeId"]) ? $context["typeId"] : null))), "html", null, true);
            echo "\"
            >
                ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["type"], "getName", array(), "method"), array(), "support"), "html", null, true);
            echo "
            
                ";
            // line 42
            if (($this->getAttribute((isset($context["counters"]) ? $context["counters"] : null), (isset($context["typeId"]) ? $context["typeId"] : null), array(), "array", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["counters"]) ? $context["counters"] : null), (isset($context["typeId"]) ? $context["typeId"] : null), array(), "array")))) {
                // line 43
                echo "                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>
                        <span class=\"label label-default margin-right-sm\">
                            ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new", array(), "support"), "html", null, true);
                echo " :
                            ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["counters"]) ? $context["counters"] : null), (isset($context["typeId"]) ? $context["typeId"] : null), array(), "array"), "new", array(), "array"), "html", null, true);
                echo "
                        </span>
                        <span class=\"label label-primary margin-right-sm\">
                            ";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("l1", array(), "support"), "html", null, true);
                echo " :
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["counters"]) ? $context["counters"] : null), (isset($context["typeId"]) ? $context["typeId"] : null), array(), "array"), "l1", array(), "array"), "html", null, true);
                echo "
                        </span>
                        <span class=\"label label-danger margin-right-sm\">
                            ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("l2", array(), "support"), "html", null, true);
                echo " :
                            ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["counters"]) ? $context["counters"] : null), (isset($context["typeId"]) ? $context["typeId"] : null), array(), "array"), "l2", array(), "array"), "html", null, true);
                echo "
                        </span>
                        <span class=\"label label-success\">
                            ";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("archives", array(), "support"), "html", null, true);
                echo " :
                            ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["counters"]) ? $context["counters"] : null), (isset($context["typeId"]) ? $context["typeId"] : null), array(), "array"), "closed", array(), "array"), "html", null, true);
                echo "
                        </span>
                    </span>
                ";
            }
            // line 63
            echo "            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        <a class=\"list-group-item\"
           href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_configuration_menu");
        echo "\"
        >
            <i class=\"fa fa-cogs\"></i>
            ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configuration", array(), "platform"), "html", null, true);
        echo "
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FormaLibreSupportBundle:AdminSupport:adminSupportIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  146 => 66,  143 => 65,  136 => 63,  129 => 59,  125 => 58,  119 => 55,  115 => 54,  109 => 51,  105 => 50,  99 => 47,  95 => 46,  90 => 43,  88 => 42,  83 => 40,  78 => 38,  75 => 37,  72 => 36,  68 => 35,  60 => 30,  56 => 28,  53 => 27,  48 => 24,  46 => 13,  44 => 12,  41 => 11,  36 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FormaLibreSupportBundle:AdminSupport:adminSupportIndex.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/support/Resources/views/AdminSupport/adminSupportIndex.html.twig");
    }
}
