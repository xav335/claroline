<?php

/* ClarolineCoreBundle:Layout:footer.html.twig */
class __TwigTemplate_84a263cae9eebd8e20f04876aee8f2407339702ad0dbc8829100e568b4139f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"footer\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <p>
                ";
        // line 5
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "token", array()))) {
            // line 6
            echo "                    ";
            if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") && (isset($context["footerLogin"]) ? $context["footerLogin"] : null))) {
                // line 7
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_open");
                echo "\"><i class=\"fa fa-user\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login", array(), "platform"), "html", null, true);
                echo "</a> &nbsp;&nbsp;&nbsp;&nbsp;

                        ";
                // line 9
                if ((isset($context["selfRegistration"]) ? $context["selfRegistration"] : null)) {
                    // line 10
                    echo "                            <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_registration_user_registration_form");
                    echo "\">
                                <i class=\"fa fa-user-plus\"></i>
                                ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("register", array(), "platform"), "html", null, true);
                    echo "
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        ";
                }
                // line 16
                echo "                    ";
            }
            // line 17
            echo "                    ";
            if (( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") && (isset($context["footerWorkspaces"]) ? $context["footerWorkspaces"] : null))) {
                // line 18
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_list");
                echo "\"><i class=\"fa fa-book\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"), "html", null, true);
                echo "</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    ";
            }
            // line 20
            echo "
                    ";
            // line 21
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") || ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") &&  !(isset($context["headerLocale"]) ? $context["headerLocale"] : null)))) {
                // line 22
                echo "                        <span class=\"pull-right locale-select label label-default\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())), "html", null, true);
                echo "</span>
                    ";
            }
            // line 24
            echo "                ";
        }
        // line 25
        echo "
                ";
        // line 26
        if ( !twig_test_empty((isset($context["footerMessage"]) ? $context["footerMessage"] : null))) {
            echo (isset($context["footerMessage"]) ? $context["footerMessage"] : null);
        }
        // line 27
        echo "                <span";
        if (((((isset($context["footerLogin"]) ? $context["footerLogin"] : null) || (isset($context["footerWorkspaces"]) ? $context["footerWorkspaces"] : null)) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "token", array()))) ||  !twig_test_empty((isset($context["footerMessage"]) ? $context["footerMessage"] : null)))) {
            echo " class=\"pull-right\"";
        }
        echo ">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("powered_by", array(), "platform"), "html", null, true);
        echo " <a href=\"http://www.claroline.net\">Claroline</a> (";
        echo twig_escape_filter($this->env, (isset($context["coreVersion"]) ? $context["coreVersion"] : null), "html", null, true);
        echo ")
                </span>
            </p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Layout:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  88 => 27,  84 => 26,  81 => 25,  78 => 24,  72 => 22,  70 => 21,  67 => 20,  59 => 18,  56 => 17,  53 => 16,  46 => 12,  40 => 10,  38 => 9,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Layout:footer.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Layout/footer.html.twig");
    }
}
