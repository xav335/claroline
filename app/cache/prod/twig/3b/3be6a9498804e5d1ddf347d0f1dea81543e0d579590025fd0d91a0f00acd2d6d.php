<?php

/* ClarolineCoreBundle::base.html.twig */
class __TwigTemplate_f6c2b56a1e8b9e7a65e4512095eb26d9de6aea3162cccccc0a42106d9363ec31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'favicon' => array($this, 'block_favicon'),
            'javascripts_header' => array($this, 'block_javascripts_header'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "locale", array()), "fr")) : ("fr")), "html", null, true);
        echo "\">
    <head>
        ";
        // line 4
        $context["description"] = $this->env->getExtension('Claroline\CoreBundle\Twig\ContentExtension')->getContent("platformDescription");
        // line 5
        echo "        ";
        $this->displayBlock('meta', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method") != "")) {
            // line 21
            echo "                ";
            $context["pagetitle"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method");
            // line 22
            echo "            ";
        } else {
            // line 23
            echo "                ";
            $context["pagetitle"] = "Claroline Connect";
            // line 24
            echo "        ";
        }
        // line 25
        echo "        <title>";
        ob_start();
        // line 26
        echo "            ";
        $this->displayBlock('title', $context, $blocks);
        // line 32
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</title>
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('favicon', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts_header', $context, $blocks);
        // line 41
        echo "    </head>
    <body id=\"claroline-base-layout-body\">
        ";
        // line 43
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "hide_browser_warning"), "method")) {
            // line 44
            echo "            <div class=\"alert alert-danger outdated-browser-warning\" style=\"text-align='center';\">
                <a id=\"close-browser-warning\" class=\"close\" data-dismiss=\"alert\" href=\"#\" aria-hidden=\"true\">&times;</a>
                <div align=\"center\"> <i class=\"fa fa-warning\"></i>
                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("outdated_brower_message", array(), "platform"), "html", null, true);
            echo "
                    (<a href=\"http://browsehappy.com\" target=\"_blank\">http://browsehappy.com</a>).
                    ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ie_support_message", array(), "platform"), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 53
        echo "        ";
        $this->displayBlock('layout', $context, $blocks);
        // line 54
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
            // line 7
            echo "                <meta name=\"Description\" content=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())), "html", null, true);
            echo "\">
            ";
        }
        // line 9
        echo "            <meta charset=\"utf-8\">
            ";
        // line 15
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        // line 27
        echo "                ";
        echo strip_tags((isset($context["pagetitle"]) ? $context["pagetitle"] : null));
        echo "
                ";
        // line 28
        if (( !twig_test_empty((isset($context["description"]) ? $context["description"] : null)) && ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()) != ""))) {
            // line 29
            echo "                    - ";
            echo strip_tags($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()));
            echo "
                ";
        }
        // line 31
        echo "            ";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 35
    public function block_favicon($context, array $blocks = array())
    {
        // line 36
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
    }

    // line 39
    public function block_javascripts_header($context, array $blocks = array())
    {
        // line 40
        echo "        ";
    }

    // line 53
    public function block_layout($context, array $blocks = array())
    {
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  178 => 53,  174 => 40,  171 => 39,  164 => 36,  161 => 35,  156 => 33,  152 => 31,  146 => 29,  144 => 28,  139 => 27,  136 => 26,  129 => 15,  126 => 9,  120 => 7,  117 => 6,  114 => 5,  108 => 55,  105 => 54,  102 => 53,  95 => 49,  90 => 47,  85 => 44,  83 => 43,  79 => 41,  77 => 39,  74 => 38,  72 => 35,  69 => 34,  67 => 33,  62 => 32,  59 => 26,  56 => 25,  53 => 24,  50 => 23,  47 => 22,  44 => 21,  42 => 20,  39 => 19,  36 => 5,  34 => 4,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle::base.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/base.html.twig");
    }
}
