<?php

/* ClarolineCoreBundle:Profile:publicProfile.html.twig */
class __TwigTemplate_88c7c4284d9e1ccfea8a2719ea6bc0c83e658a72bc1f7140297b4a415081bc2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineCoreBundle:Profile:publicProfile.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["canEdit"] = (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getId", array(), "method"))) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getLastName", array(), "method") . " ") . strip_tags($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getFirstName", array(), "method"))), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"panel panel-default panel-user\">
        <div class=\"panel-heading relative\">
            ";
        // line 10
        if ((isset($context["canEdit"]) ? $context["canEdit"] : null)) {
            // line 11
            echo "                <div class=\"dropdown float-right-top\">
                    <a data-toggle=\"dropdown\" href=\"#\" class=\"btn btn-xs btn-primary\" role=\"button\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "platform"), "html", null, true);
            echo " <span class=\"fa fa-gear\"></span> <i class=\"caret\"></i>
                    </a>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li role=\"presentation\" >
                            <a role=\"menuitem\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_user_profile_edit", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\">
                                ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit_profile", array(), "platform"), "html", null, true);
            echo "
                            </a>
                        </li>
                        <li role=\"presentation\" >
                            <a role=\"menuitem\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_user_password_edit", array("user" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\">
                                ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit_password", array(), "platform"), "html", null, true);
            echo "
                            </a>
                        </li>
                        ";
            // line 26
            if ((false == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "hasTunedPublicUrl", array()))) {
                // line 27
                echo "                            <li role=\"presentation\" >
                                <a role=\"menuitem\" href=\"";
                // line 28
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_user_public_url_edit");
                echo "\">
                                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tune_your_public_profile_url", array(), "platform"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 33
            echo "                    </ul>
                </div>
            ";
        }
        // line 36
        echo "            <h3 class=\"panel-title\">
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_profile", array(), "platform"), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"panel-body\">
            <user-profile ng-app=\"UserProfile\"></user-profile>
        </div>
    </div>
";
    }

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/ng-table/dist/ng-table.css"), "html", null, true);
        echo "\" />
";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/angular/angular.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/ng-table/dist/ng-table.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "cursus"));
        echo "\"></script>
    <script>
        window.userId = ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo ";
        window.disabled = true;
        window.canEdit = ";
        // line 59
        echo (((isset($context["canEdit"]) ? $context["canEdit"] : null)) ? ("true") : ("false"));
        echo ";
    </script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/claroline-distribution-main-core-private-profile.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Profile:publicProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  157 => 59,  152 => 57,  147 => 55,  143 => 54,  139 => 53,  134 => 52,  131 => 51,  125 => 48,  120 => 47,  117 => 46,  105 => 37,  102 => 36,  97 => 33,  90 => 29,  86 => 28,  83 => 27,  81 => 26,  75 => 23,  71 => 22,  64 => 18,  60 => 17,  53 => 13,  49 => 11,  47 => 10,  43 => 8,  40 => 7,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Profile:publicProfile.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Profile/publicProfile.html.twig");
    }
}
