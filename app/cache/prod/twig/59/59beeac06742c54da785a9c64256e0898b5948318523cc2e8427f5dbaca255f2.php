<?php

/* ClarolineCoreBundle:Profile:editProfile.html.twig */
class __TwigTemplate_0c13df2f3561b96fb1a80f83f7bba8cf832548ad5b7ce20ede2bc08e2ad60d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["editYourself"]) ? $context["editYourself"] : null) == true)) ? ("ClarolineCoreBundle:Desktop:layout.html.twig") : ("ClarolineCoreBundle:Administration:layout.html.twig")), "ClarolineCoreBundle:Profile:editProfile.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profil_edition", array(), "platform"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"panel panel-default\">
        ";
        // line 9
        if ((isset($context["editYourself"]) ? $context["editYourself"] : null)) {
            // line 10
            echo "            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profil_edition", array(), "platform"), "html", null, true);
            echo "</h3>
            </div>
        ";
        }
        // line 14
        echo "        <div class=\"panel panel-body\">
           ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 16
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users_management", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_users_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile_edition", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 26
        echo "
        </div>
        ";
        // line 28
        if ((( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isMailValidated", array(), "method") && $this->env->getExtension('Claroline\CoreBundle\Twig\MailerExtension')->isMailerAvailable()) && (isset($context["editYourself"]) ? $context["editYourself"] : null))) {
            // line 29
            echo "            <div class=\"alert alert-warning\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_not_activated_part_1", array("%email%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "mail", array())), "platform"), "html", null, true);
            echo "
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_security_validate_email_send", array("hash" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "emailValidationHash", array()))), "html", null, true);
            echo "\" class=\"confirm-email\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_not_activated_part_2", array(), "platform"), "html", null, true);
            echo "</a>
                ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_not_activated_part_3", array(), "platform"), "html", null, true);
            echo ".
            </div>
        ";
        }
        // line 35
        echo "        ";
        $context["actionForm"] = (((isset($context["editYourself"]) ? $context["editYourself"] : null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_user_profile_edit")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_user_profile_edit", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method")))));
        // line 36
        echo "        ";
        $context["cancelUrl"] = (((isset($context["editYourself"]) ? $context["editYourself"] : null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_public_profile_view", array("publicUrl" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "publicUrl", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_users_index")));
        // line 37
        echo "        <form role=\"form\" class=\"form-horizontal\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["actionForm"]) ? $context["actionForm"] : null), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " id=\"profile_form\">
            <div class=\"panel-body\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unavailableRoles"]) ? $context["unavailableRoles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 40
            echo "                    <div class=\"alert alert-warning\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("role_limit_reached", array("%translationKey%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["role"], "getTranslationKey", array(), "method"), array(), "platform")), "platform"), "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            </div>
            <div class=\"panel-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "platform"), "html", null, true);
        echo "</button>
                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["cancelUrl"]) ? $context["cancelUrl"] : null), "html", null, true);
        echo "\" class=\"btn btn-default\" role=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</a>
                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_user_password_edit", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method"))), "html", null, true);
        echo "\"  class=\"btn btn-default\" role=\"button\">
                    ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit_password", array(), "platform"), "html", null, true);
        echo "
                </a>
            </div>
        </form>
    </div>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        //disable unavailable checkboxes
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unavailableRoles"]) ? $context["unavailableRoles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 59
            echo "            \$('#profile_form_platformRoles_' + ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "getId", array(), "method"), "html", null, true);
            echo ").attr('disabled', true);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </script>
";
    }

    // line 64
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/angular/angular-ui.css"), "html", null, true);
        echo "\"> </link>

";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Profile:editProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 67,  177 => 65,  174 => 64,  169 => 61,  160 => 59,  156 => 58,  149 => 55,  146 => 54,  136 => 48,  132 => 47,  126 => 46,  122 => 45,  115 => 42,  106 => 40,  102 => 39,  94 => 37,  91 => 36,  88 => 35,  82 => 32,  76 => 31,  72 => 30,  69 => 29,  67 => 28,  63 => 26,  61 => 16,  60 => 15,  57 => 14,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Profile:editProfile.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Profile/editProfile.html.twig");
    }
}
