<?php

/* ClarolineCoreBundle:Authentication:login.html.twig */
class __TwigTemplate_402162d05a93db8e36618bd86d1b2cdd3f09b07b0c371e4e90fc4e7245f03d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCoreBundle:Authentication:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login", array(), "platform") . " - ") . strip_tags($this->renderParentBlock("title", $context, $blocks))), "html", null, true);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "
    ";
        // line 12
        $context["externalAuthentication"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Authentication:renderExternalAuthenticatonButton", array()));
        // line 13
        echo "    <div class=\"row login_form_container\" style=\"background-color: whitesmoke\">
        ";
        // line 14
        if (twig_test_empty((isset($context["externalAuthentication"]) ? $context["externalAuthentication"] : null))) {
            // line 15
            echo "            ";
            $context["containerClass"] = "col-lg-2 col-lg-offset-5 col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8";
            // line 16
            echo "            ";
            $context["columnClass"] = "";
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            $context["containerClass"] = "col-lg-4 col-lg-offset-4 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 login-flexbox";
            // line 19
            echo "            ";
            $context["columnClass"] = "col-sm-6 cos-xs-12 flex";
            // line 20
            echo "        ";
        }
        // line 21
        echo "        <h2 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login", array(), "platform"), "html", null, true);
        echo "</h2>
        <div class=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["containerClass"]) ? $context["containerClass"] : null), "html", null, true);
        echo "\">
            <div class=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["columnClass"]) ? $context["columnClass"] : null), "html", null, true);
        echo "\">
                <form role=\"form\" action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_security_login_check");
        echo "\" method=\"post\" id=\"login-form\">
                    ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 26
            echo "                        <div class=\"alert alert-danger\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login_failure", array(), "platform"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 31
        echo "                    ";
        if ((isset($context["is_expired"]) ? $context["is_expired"] : null)) {
            // line 32
            echo "                        <div class=\"alert alert-danger\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("closed_account", array(), "platform"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 37
        echo "                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username_or_email", array(), "platform"), "html", null, true);
        echo "</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                                <i class=\"fa fa-user\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username_or_email", array(), "platform"), "html", null, true);
        echo "\"></i>
                            </span>
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username_or_email", array(), "platform"), "html", null, true);
        echo "\" tabindex=\"1\" autofocus>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password", array(), "platform"), "html", null, true);
        echo "
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">
                                <i class=\"fa fa-lock\" title=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password", array(), "platform"), "html", null, true);
        echo "\"></i>
                            </span>
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password", array(), "platform"), "html", null, true);
        echo "\" tabindex=\"2\">
                        </div>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" /> ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("keep_me_logged_in", array(), "platform"), "html", null, true);
        echo "
                        </label>
                    </div>
                    <p>
                        <a href =\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_security_forgot_password");
        echo "\" tabindex=\"4\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgot_password", array(), "platform"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgot_password", array(), "platform"), "html", null, true);
        echo "</a>
                    </p>

                    <button type=\"submit\" class=\"btn btn-success btn-block\" tabindex=\"3\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login", array(), "platform"), "html", null, true);
        echo "</button>

                    ";
        // line 68
        if (((isset($context["selfRegistrationAllowed"]) ? $context["selfRegistrationAllowed"] : null) && (isset($context["showRegisterButton"]) ? $context["showRegisterButton"] : null))) {
            // line 69
            echo "                        <a class=\"btn btn-default btn-block\" tabindex=\"3\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_registration_user_registration_form");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register", array(), "platform"), "html", null, true);
            echo "\">
                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 73
        echo "                </form>
            </div>
            ";
        // line 75
        if ( !twig_test_empty((isset($context["externalAuthentication"]) ? $context["externalAuthentication"] : null))) {
            // line 76
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["columnClass"]) ? $context["columnClass"] : null), "html", null, true);
            echo " external-authentication-column\">
                    ";
            // line 77
            echo (isset($context["externalAuthentication"]) ? $context["externalAuthentication"] : null);
            echo "
                </div>
            ";
        }
        // line 80
        echo "        </div>

    </div>

    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            \$('.claro-oauth').click(function(event) {
                event.preventDefault();
                var form = \$('#login-form');
                form.attr('action', \$(event.target).attr('href'));
                form.submit();
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Authentication:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 80,  200 => 77,  195 => 76,  193 => 75,  189 => 73,  183 => 70,  176 => 69,  174 => 68,  169 => 66,  159 => 63,  152 => 59,  144 => 54,  139 => 52,  132 => 48,  124 => 43,  119 => 41,  113 => 38,  110 => 37,  104 => 34,  100 => 32,  97 => 31,  91 => 28,  87 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  48 => 14,  45 => 13,  43 => 12,  38 => 11,  35 => 10,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Authentication:login.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Authentication/login.html.twig");
    }
}
