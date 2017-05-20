<?php

/* FormaLibreSupportBundle:AdminSupport:adminSupportStatusManagement.html.twig */
class __TwigTemplate_69be8e6b548fe68d10ecb548e59c550a1aaf748c2e7ced195e7a20df855d5e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "FormaLibreSupportBundle:AdminSupport:adminSupportStatusManagement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("support_status_management", array(), "support")), "html", null, true);
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
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("formalibre_support_management_tool", array(), "tools"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_index")), 2 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configuration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_admin_support_configuration_menu")), 3 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("support_status_management", array(), "support"), "href" => ""))), "method"), "html", null, true);
        // line 32
        echo "
";
    }

    // line 35
    public function block_section_content($context, array $blocks = array())
    {
        // line 36
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("support_status_management", array(), "support"), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"panel-body\" id=\"status-management-body\">
        
        ";
        // line 43
        if ((twig_length_filter($this->env, (isset($context["allStatus"]) ? $context["allStatus"] : null)) > 0)) {
            // line 44
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-condensed\">
                    <thead>
                        <tr>
                            <th>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code", array(), "platform"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("type", array(), "platform"), "html", null, true);
            echo "</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id=\"status-elements-list\">
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allStatus"]) ? $context["allStatus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 56
                echo "                            ";
                $context["statusId"] = $this->getAttribute($context["status"], "getId", array(), "method");
                // line 57
                echo "                            <tr id=\"row-status-";
                echo twig_escape_filter($this->env, (isset($context["statusId"]) ? $context["statusId"] : null), "html", null, true);
                echo "\"
                                class=\"movable-status\"
                                data-status-id=\"";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["statusId"]) ? $context["statusId"] : null), "html", null, true);
                echo "\"
                            >
                                <td>
                                    <i class=\"fa fa-sort text-muted\"></i>
                                    ";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["status"], "getName", array(), "method"), array(), "support"), "html", null, true);
                echo "
                                </td>
                                <td class=\"text-center\">
                                    ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "getCode", array(), "method"), "html", null, true);
                echo "
                                </td>
                                <td class=\"text-center\">
                                    ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "getType", array(), "method"), "html", null, true);
                echo "
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\">
                                        <button class=\"btn btn-default edit-status-btn btn-sm\"
                                                data-status-id=\"";
                // line 74
                echo twig_escape_filter($this->env, (isset($context["statusId"]) ? $context["statusId"] : null), "html", null, true);
                echo "\"
                                        >
                                            <i class=\"fa fa-edit\"></i>
                                        </button>
                                        <button class=\"btn btn-danger delete-status-btn btn-sm\"
                                                data-status-id=\"";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["statusId"]) ? $context["statusId"] : null), "html", null, true);
                echo "\"
                                        >
                                            <i class=\"fa fa-trash\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </tbody>
                </table>
            </div>
        ";
        } else {
            // line 91
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_support_status", array(), "support"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 95
        echo "        <button class=\"btn btn-primary\" id=\"create-status-btn\">
            ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_a_support_status", array(), "support"), "html", null, true);
        echo "
        </button>
    </div>
";
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        // line 102
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\"
            src=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "support"));
        echo "\"
    >
    </script>
    <script src='";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/formalibresupport/js/adminSupportStatusManagement.js"), "html", null, true);
        echo "'
            type=\"text/javascript\"
    >
    </script>
";
    }

    public function getTemplateName()
    {
        return "FormaLibreSupportBundle:AdminSupport:adminSupportStatusManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 107,  190 => 104,  184 => 102,  181 => 101,  173 => 96,  170 => 95,  164 => 92,  161 => 91,  155 => 87,  141 => 79,  133 => 74,  125 => 69,  119 => 66,  113 => 63,  106 => 59,  100 => 57,  97 => 56,  93 => 55,  85 => 50,  81 => 49,  77 => 48,  71 => 44,  69 => 43,  61 => 38,  57 => 36,  54 => 35,  49 => 32,  47 => 13,  45 => 12,  42 => 11,  37 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FormaLibreSupportBundle:AdminSupport:adminSupportStatusManagement.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/support/Resources/views/AdminSupport/adminSupportStatusManagement.html.twig");
    }
}
