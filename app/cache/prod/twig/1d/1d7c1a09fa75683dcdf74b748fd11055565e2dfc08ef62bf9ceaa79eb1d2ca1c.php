<?php

/* ClarolineCoreBundle:Administration\Users:userCreationForm.html.twig */
class __TwigTemplate_0508490607af8f7672c041ce785ef3f1d7ca33f8e5a7cd40a301e817c379b13b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Users:userCreationForm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_user", array(), "platform"))), "html", null, true);
    }

    // line 4
    public function block_section_content($context, array $blocks = array())
    {
        // line 5
        echo "    <form role=\"form\" class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_create_user");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_complete_user"]) ? $context["form_complete_user"] : null), 'enctype');
        echo " id=\"form_complete_user\" autocomplete=\"off\">
        <div class=\"panel-body\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 8
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users_management", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_users_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_user", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 18
        echo "
            <div>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "</div>
            ";
        // line 20
        if ( !twig_test_empty((isset($context["error"]) ? $context["error"] : null))) {
            // line 21
            echo "                <div class=\"alert alert-warning\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : null), array(), "platform"), "html", null, true);
            echo " </div>
            ";
        }
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unavailableRoles"]) ? $context["unavailableRoles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 24
            echo "                ";
            if (($this->getAttribute($context["role"], "getName", array(), "method") == "ROLE_USER")) {
                // line 25
                echo "                    <div class=\"alert alert-danger\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_limit_reached", array(), "platform"), "html", null, true);
                echo "</div>
                ";
            } else {
                // line 27
                echo "                    <div class=\"alert alert-warning\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("role_limit_reached", array("%translationKey%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["role"], "getTranslationKey", array(), "method"), array(), "platform")), "platform"), "html", null, true);
                echo "</div>
                ";
            }
            // line 29
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_complete_user"]) ? $context["form_complete_user"] : null), 'widget');
        echo "
        </div>
        <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
            <a class=\"btn btn-default\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_users_index");
        echo "\" role=\"button\">
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "
            </a>
        </div>
    </form>
";
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        //disable unavailable checkboxes
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unavailableRoles"]) ? $context["unavailableRoles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 46
            echo "            \$('#profile_form_creation_platformRoles_' + ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "getId", array(), "method"), "html", null, true);
            echo ").attr('disabled', true);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Users:userCreationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  129 => 46,  125 => 45,  118 => 42,  115 => 41,  106 => 35,  102 => 34,  98 => 33,  91 => 30,  85 => 29,  79 => 27,  73 => 25,  70 => 24,  65 => 23,  59 => 21,  57 => 20,  53 => 19,  50 => 18,  48 => 8,  47 => 7,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Users:userCreationForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Users/userCreationForm.html.twig");
    }
}
