<?php

/* ClarolineCoreBundle:Desktop:layout.html.twig */
class __TwigTemplate_9f9a921839f682b8df770494e8276f7ddfcdff38d0aa13426a9c73acee0fa608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCoreBundle:Desktop:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'resourceBreadcrumb' => array($this, 'block_resourceBreadcrumb'),
            'content' => array($this, 'block_content'),
            'section_panel' => array($this, 'block_section_panel'),
            'section_content' => array($this, 'block_section_content'),
            'section_after_content' => array($this, 'block_section_after_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop", array(), "platform"));
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"resource-breadcrumb\">
        ";
        // line 7
        if (array_key_exists("_resource", $context)) {
            // line 8
            echo "            <div id=\"twig-resource-attributes\"
                 data-resource-id=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getId", array(), "method"), "html", null, true);
            echo "\"
                 data-resource-name=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getName", array(), "method"), "html", null, true);
            echo "\"
                    >
            </div>
            <ul class=\"breadcrumb\">
                <li><a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_open");
            echo "\"><i class=\"fa fa-home\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop", array(), "platform"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_open_tool", array("toolName" => "resource_manager"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources", array(), "platform"), "html", null, true);
            echo "</a></li>
                ";
            // line 16
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Resource:renderBreadcrumbs", array("node" => $this->getAttribute(            // line 17
(isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "_breadcrumbs" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "_breadcrumbs", 1 => array()), "method"))), array());
            // line 19
            echo "                ";
            $this->displayBlock('resourceBreadcrumb', $context, $blocks);
            // line 22
            echo "            </ul>
        ";
        }
        // line 24
        echo "    </div>
";
    }

    // line 19
    public function block_resourceBreadcrumb($context, array $blocks = array())
    {
        // line 20
        echo "                    <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "</li>
                ";
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
    ";
        // line 31
        $this->displayBlock("section_panel", $context, $blocks);
        echo "
";
    }

    // line 34
    public function block_section_panel($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"section-content\">
        <div class=\"panel panel-default\">
            ";
        // line 37
        $this->displayBlock('section_content', $context, $blocks);
        // line 38
        echo "        </div>
        ";
        // line 39
        $this->displayBlock('section_after_content', $context, $blocks);
        // line 40
        echo "    </div>
";
    }

    // line 37
    public function block_section_content($context, array $blocks = array())
    {
    }

    // line 39
    public function block_section_after_content($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        window.Workspace = {};
        ";
        // line 47
        if (array_key_exists("_resource", $context)) {
            // line 48
            echo "        window.Workspace.id = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["_resource"]) ? $context["_resource"] : null), "getResourceNode", array(), "method"), "getWorkspace", array(), "method"), "getId", array(), "method"), "html", null, true);
            echo ";
        ";
        } else {
            // line 50
            echo "        window.Workspace.id = null;
        ";
        }
        // line 52
        echo "    </script>
";
    }

    // line 55
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        ";
        // line 58
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) &&  !twig_test_empty($this->getAttribute($this->getAttribute(        // line 59
(isset($context["app"]) ? $context["app"] : null), "user", array()), "getOptions", array(), "method"))) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(        // line 60
(isset($context["app"]) ? $context["app"] : null), "user", array()), "getOptions", array(), "method"), "getDesktopBackgroundColor", array(), "method")))) {
            // line 62
            echo "            body {
                background-color: ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getOptions", array(), "method"), "getDesktopBackgroundColor", array(), "method"), "html", null, true);
            echo ";
            }
        ";
        }
        // line 66
        echo "    </style>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 66,  190 => 63,  187 => 62,  185 => 60,  184 => 59,  183 => 58,  177 => 56,  174 => 55,  169 => 52,  165 => 50,  159 => 48,  157 => 47,  150 => 44,  147 => 43,  142 => 39,  137 => 37,  132 => 40,  130 => 39,  127 => 38,  125 => 37,  121 => 35,  118 => 34,  112 => 31,  107 => 29,  104 => 28,  101 => 27,  94 => 20,  91 => 19,  86 => 24,  82 => 22,  79 => 19,  77 => 17,  76 => 16,  70 => 15,  64 => 14,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  45 => 6,  42 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Desktop:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Desktop/layout.html.twig");
    }
}
