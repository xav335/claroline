<?php

/* ClarolineCoreBundle:WorkspaceTag:layout.html.twig */
class __TwigTemplate_daf9c9df0489f4f7551f84656157a6e6347e8eb7a1447f260e8695e1712de4a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCoreBundle:WorkspaceTag:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'leftbar' => array($this, 'block_leftbar'),
            'content' => array($this, 'block_content'),
            'section_content' => array($this, 'block_section_content'),
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
        echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"));
    }

    // line 5
    public function block_leftbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 7
            echo "       <div class=\"list-group menu\">
            <div class=\"list-group-item disabled\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"), "html", null, true);
            echo "</div>
            <a class=\"list-group-item";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->activeLink("/workspaces/"), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_list");
            echo "\">
                <i class=\"fa fa-book\"></i>
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_public_workspaces", array(), "platform"), "html", null, true);
            echo "
            </a>
            <a class=\"list-group-item ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->activeLink("/workspaces/user"), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_by_user");
            echo "\">
                <i class=\"fa fa-book\"></i>
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_workspaces", array(), "platform"), "html", null, true);
            echo "
            </a>
            ";
            // line 17
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ADMIN")) {
                // line 18
                echo "                <a class=\"list-group-item ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->activeLink("/workspaces/new/form"), "html", null, true);
                echo "\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_creation_form");
                echo "\">
                    <i class=\"fa fa-pencil\"></i>
                    ";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_workspace", array(), "platform"), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 23
            echo "        </div>
    ";
        }
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"visible-xs\">
        ";
        // line 29
        $this->displayBlock("leftbar", $context, $blocks);
        echo "
    </div>
    <div class=\"panel panel-default\">
        ";
        // line 32
        $this->displayBlock('section_content', $context, $blocks);
        // line 34
        echo "    </div>
";
    }

    // line 32
    public function block_section_content($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:WorkspaceTag:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  115 => 32,  110 => 34,  108 => 32,  102 => 29,  99 => 28,  96 => 27,  90 => 23,  84 => 20,  76 => 18,  74 => 17,  69 => 15,  62 => 13,  57 => 11,  50 => 9,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:WorkspaceTag:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/WorkspaceTag/layout.html.twig");
    }
}
