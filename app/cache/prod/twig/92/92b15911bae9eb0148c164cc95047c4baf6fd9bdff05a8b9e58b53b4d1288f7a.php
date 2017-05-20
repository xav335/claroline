<?php

/* ClarolineCoreBundle:Administration\WorkspaceRegistration:registrationManagement.html.twig */
class __TwigTemplate_96b756ba2f3fbde39e668af81e0d7caf59451cc0ee9fe5dbd53cbae75027267b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagement.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration_to_workspaces", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 7
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration_to_workspaces", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 18
        echo "
";
    }

    // line 21
    public function block_section_content($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration_to_workspaces", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" id=\"workspace-list-div\">

        <div class=\"search-bar row\">
            <div class=\"col-md-7\">
                <button
                    class=\"btn btn-default subscribe-user-button\"
                    subject-type=\"user\"
                    disabled=\"disabled\"
                >
                    ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subscribe_users", array(), "platform"), "html", null, true);
        echo "
                </button>
                <button
                    class=\"btn btn-default subscribe-group-button\"
                    subject-type=\"group\"
                    disabled=\"disabled\"
                >
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subscribe_groups", array(), "platform"), "html", null, true);
        echo "
                </button>
            </div>

            <div class=\"col-md-5\">
                 <div class=\"input-group\">
                     <input class=\"form-control\" type=\"text\" id=\"search-workspace-txt\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search", array(), "platform"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\">
                    <span class=\"input-group-btn\">
                        <button class=\"filter btn btn-default\" type=\"button\" id=\"search-workspace-button\">
                            <i class=\"fa fa-search\"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <hr>

        <h4>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("select_workspaces_for_registration", array(), "platform"), "html", null, true);
        echo "</h4><br>

        ";
        // line 60
        if (((isset($context["search"]) ? $context["search"] : null) == "")) {
            // line 61
            echo "            <div id=\"search-mode\" search=\"\"></div>
            ";
            // line 62
            $this->loadTemplate("ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagementCompleteWorkspacesList.html.twig", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagement.html.twig", 62)->display($context);
            // line 63
            echo "        ";
        } else {
            // line 64
            echo "            <div id=\"search-mode\" search=\"";
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
            echo "\"></div>
            ";
            // line 65
            $this->loadTemplate("ClarolineCoreBundle:Workspace:workspaceSearchedListRegistrationPager.html.twig", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagement.html.twig", 65)->display($context);
            // line 66
            echo "        ";
        }
        // line 67
        echo "
        <br>
        <button
            class=\"btn btn-default subscribe-user-button\"
            subject-type=\"user\"
            disabled=\"disabled\"
        >
            ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subscribe_users", array(), "platform"), "html", null, true);
        echo "
        </button>
        <button
            class=\"btn btn-default subscribe-group-button\"
            subject-type=\"group\"
            disabled=\"disabled\"
        >
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("subscribe_groups", array(), "platform"), "html", null, true);
        echo "
        </button>
    </div>
";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script
        src='";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/administration/registrationManagement.js"), "html", null, true);
        echo "'
        type=\"text/javascript\"
    >
    </script>
    <script
        src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/workspace/workspace_list_registration.js"), "html", null, true);
        echo "\"
        type=\"text/javascript\"
    >
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 94,  165 => 89,  159 => 87,  156 => 86,  148 => 81,  138 => 74,  129 => 67,  126 => 66,  124 => 65,  119 => 64,  116 => 63,  114 => 62,  111 => 61,  109 => 60,  104 => 58,  88 => 47,  79 => 41,  69 => 34,  55 => 23,  52 => 22,  49 => 21,  44 => 18,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\WorkspaceRegistration:registrationManagement.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/WorkspaceRegistration/registrationManagement.html.twig");
    }
}
