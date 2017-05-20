<?php

/* ClarolineCoreBundle:Administration\Users:importForm.html.twig */
class __TwigTemplate_41e8b1f6399c2f756cc8a1ef5f134b92d8c4a5518ee98609c88e02bae000907d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Users:importForm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_section_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form role=\"form\" class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_import_users");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " >
        <div class=\"panel-body\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 9
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users_management", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_users_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 19
        echo "
            <div>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "</div>
            ";
        // line 21
        if (array_key_exists("error", $context)) {
            // line 22
            echo "                ";
            if ((isset($context["error"]) ? $context["error"] : null)) {
                // line 23
                echo "                    <div class=\"alert alert-danger\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("role_limit_reached", array("%translationKey%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user", array(), "platform")), "platform"), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 27
            echo "            ";
        }
        // line 28
        echo "            <div class=\"well\">
                <p>
                    <b>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos", array(), "platform"), "html", null, true);
        echo "</b>
                </p>
                <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_format", array(), "platform"), "html", null, true);
        echo " :</p>
                <ul>
                    <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_format_a", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>
                        ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("order", array(), "platform"), "html", null, true);
        echo " :
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("first_name", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("last_name", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administrative_code", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("phone", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authentication_source", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("model", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group", array(), "platform"), "html", null, true);
        echo ",
                        ";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("organization", array(), "platform"), "html", null, true);
        echo "
                    </li>
                    <li>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_format_b", array(), "platform"), "html", null, true);
        echo "</li>
                </ul>
                <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_required", array(), "platform"), "html", null, true);
        echo " :</p>
                <ul>
                    <li>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("first_name", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("last_name", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
        echo "</li>
                </ul>
                <p>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_users_import_infos_optional", array(), "platform"), "html", null, true);
        echo " :</p>
                <ul>
                    <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administrative_code", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("phone", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authentication_source", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("model", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group", array(), "platform"), "html", null, true);
        echo "</li>
                    <li>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("organization", array(), "platform"), "html", null, true);
        echo "</li>
                </ul>
            </div>

            ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
        <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_users_index");
        echo "\" class=\"btn btn-default\" role=\"button\">
                ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </a>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Users:importForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  214 => 74,  210 => 73,  204 => 70,  197 => 66,  193 => 65,  189 => 64,  185 => 63,  181 => 62,  177 => 61,  172 => 59,  167 => 57,  163 => 56,  159 => 55,  155 => 54,  151 => 53,  146 => 51,  141 => 49,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  87 => 34,  82 => 32,  77 => 30,  73 => 28,  70 => 27,  64 => 24,  61 => 23,  58 => 22,  56 => 21,  52 => 20,  49 => 19,  47 => 9,  46 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Users:importForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Users/importForm.html.twig");
    }
}
