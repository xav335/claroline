<?php

/* ClarolineCoreBundle:Administration\Workspaces:importWorkspaceForm.html.twig */
class __TwigTemplate_b2686df87b22d2f79b773c3dbe529fd8c2adadfc9ce66aad3375fa324ff2f5f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Workspaces:importWorkspaceForm.html.twig", 29);
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

    // line 31
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces_management", array(), "platform"))), "html", null, true);
    }

    // line 33
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 35
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "icon-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces_management", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management", array())), 2 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspace_import", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 50
        echo "
";
    }

    // line 53
    public function block_section_content($context, array $blocks = array())
    {
        // line 54
        echo "    <div class=\"well\">
        <p>
            <b>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos", array(), "platform"), "html", null, true);
        echo "</b>
        </p>
        <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_format", array(), "platform"), "html", null, true);
        echo " :</p>
        <ul>
            <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_workspaces_import_infos_format_a", array(), "platform"), "html", null, true);
        echo "</li>
            <li>
                ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order", array(), "platform"), "html", null, true);
        echo " :
                ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo ",
                ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code", array(), "platform"), "html", null, true);
        echo ",
                ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("is_visible", array(), "platform"), "html", null, true);
        echo ",
                ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("self_registration", array(), "platform"), "html", null, true);
        echo ",
                ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration_validation", array(), "platform"), "html", null, true);
        echo ",
                ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("self_unregistration", array(), "platform"), "html", null, true);
        echo ",
                ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("creator", array(), "platform"), "html", null, true);
        echo ",
                ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("model", array(), "platform"), "html", null, true);
        echo "
            </li>
            <li>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_format_b", array(), "platform"), "html", null, true);
        echo "</li>
        </ul>
        <p>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_required", array(), "platform"), "html", null, true);
        echo " :</p>
        <ul>
            <li>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo "</li>
            <li>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code", array(), "platform"), "html", null, true);
        echo "</li>
            <li>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("is_visible", array(), "platform"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("0_or_1", array(), "platform"), "html", null, true);
        echo ")</li>
            <li>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("self_registration", array(), "platform"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("0_or_1", array(), "platform"), "html", null, true);
        echo ")</li>
            <li>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration_validation", array(), "platform"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("0_or_1", array(), "platform"), "html", null, true);
        echo ")</li>
            <li>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("self_unregistration", array(), "platform"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("0_or_1", array(), "platform"), "html", null, true);
        echo ")</li>
        </ul>
        <p>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_optional", array(), "platform"), "html", null, true);
        echo " :</p>
        <ul>
            <li>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("creator", array(), "platform"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
        echo ")</li>
            <li>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("model", array(), "platform"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo ")</li>
        </ul>
    </div>
        <form role=\"form\" class=\"form-horizontal\" id=\"ws_import_form\" action=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspace_import", array());
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        <div class=\"panel-body\">
            ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
            <a class=\"btn btn-default\" href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_workspaces_management", array());
        echo "\" role=\"button\">
                ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </a>
        </div>
    </form>
";
    }

    // line 1
    public function getrenderPager($__search__ = null, $__pager__ = null, $__max__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "search" => $__search__,
            "pager" => $__pager__,
            "max" => $__max__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (((isset($context["search"]) ? $context["search"] : null) == "")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 5
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_admin_workspaces_management", "routeParams" => array("max" =>                 // line 10
(isset($context["max"]) ? $context["max"] : null), "order" => (isset($context["order"]) ? $context["order"] : null))));
                // line 13
                echo "
    ";
            } else {
                // line 15
                echo "        ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 17
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_admin_workspaces_management_search", "routeParams" => array("search" =>                 // line 22
(isset($context["search"]) ? $context["search"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "order" => (isset($context["order"]) ? $context["order"] : null))));
                // line 25
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Workspaces:importWorkspaceForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 25,  229 => 22,  228 => 17,  226 => 15,  222 => 13,  220 => 10,  219 => 5,  217 => 3,  214 => 2,  199 => 1,  190 => 96,  186 => 95,  182 => 94,  176 => 91,  169 => 89,  161 => 86,  155 => 85,  150 => 83,  143 => 81,  137 => 80,  131 => 79,  125 => 78,  121 => 77,  117 => 76,  112 => 74,  107 => 72,  102 => 70,  98 => 69,  94 => 68,  90 => 67,  86 => 66,  82 => 65,  78 => 64,  74 => 63,  70 => 62,  65 => 60,  60 => 58,  55 => 56,  51 => 54,  48 => 53,  43 => 50,  41 => 35,  39 => 34,  36 => 33,  30 => 31,  11 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Workspaces:importWorkspaceForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Workspaces/importWorkspaceForm.html.twig");
    }
}
