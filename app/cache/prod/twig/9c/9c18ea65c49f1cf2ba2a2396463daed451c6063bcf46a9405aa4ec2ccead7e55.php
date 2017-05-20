<?php

/* ClarolineCoreBundle:Home:home.html.twig */
class __TwigTemplate_4a764878c6a943f2bb95259b84088196d8450798be5c0e22eb80e3d5ea824ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCoreBundle:Home:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'leftbar' => array($this, 'block_leftbar'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method") != "")) {
            // line 4
            $context["pagetitle"] = $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method");
        } else {
            // line 6
            $context["pagetitle"] = "Claroline Connect";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "menu"))) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, (((isset($context["pagetitle"]) ? $context["pagetitle"] : null) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menu", array(), "home")), "html", null, true);
            echo "
    ";
        } elseif ((        // line 12
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "_pages"))) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, (((isset($context["pagetitle"]) ? $context["pagetitle"] : null) . " - ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content_pages", array(), "home")), "html", null, true);
            echo "
    ";
        } else {
            // line 15
            echo "        ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
    ";
        }
    }

    // line 19
    public function block_leftbar($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_HOME_MANAGER")) {
            // line 21
            echo "        <div class=\"list-group menu\">
            <div class=\"list-group-item disabled\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("content_administration", array(), "home"), "html", null, true);
            echo "</div>
            <a class=\"list-group-item ";
            // line 23
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requesturi", array()))) {
                echo " active";
            }
            echo "\"
                href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index");
            echo "\">
                <i class=\"fa fa-home\"></i> ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home", array(), "platform"), "html", null, true);
            echo "
            </a>
            <a class=\"list-group-item";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->compareRoute("/type/menu", " active"), "html", null, true);
            echo "\"
                href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_get_content_by_type", array("type" => "menu"));
            echo "\">
                <i class=\"fa fa-list\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Menus", array(), "home"), "html", null, true);
            echo "
            </a>
            <a class=\"list-group-item relative";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->compareRoute("/types", " active"), "html", null, true);
            echo "\"²
                href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claroline_types_manager");
            echo "\">
                <i class=\"fa fa-file\"></i> ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages", array(), "home"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"visible-xs spacing-right\">
        ";
        // line 41
        $this->displayBlock("leftbar", $context, $blocks);
        echo "
    </div>

    ";
        // line 44
        if ($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "header", array(), "array", true, true)) {
            // line 45
            echo "        <div class=\"content-12 region-header clearfix\">
            ";
            // line 46
            echo $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "header", array(), "array");
            echo "
        </div>
    ";
        }
        // line 49
        echo "    <div>
        ";
        // line 50
        if ($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "left", array(), "array", true, true)) {
            // line 51
            echo "            <div class=\"content-3\">
                    ";
            // line 52
            echo $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "left", array(), "array");
            echo "
            </div>
        ";
        }
        // line 55
        echo "
        <div class=\"";
        // line 56
        if (($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "left", array(), "array", true, true) && $this->getAttribute(        // line 57
(isset($context["region"]) ? $context["region"] : null), "right", array(), "array", true, true))) {
            echo "content-6";
        } elseif (($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "left", array(), "array", true, true) || $this->getAttribute(        // line 58
(isset($context["region"]) ? $context["region"] : null), "right", array(), "array", true, true))) {
            echo "content-9";
        } else {
            echo "content-12";
        }
        echo "\">
            ";
        // line 59
        if ($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "content", array(), "array", true, true)) {
            // line 60
            echo "                ";
            echo $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "content", array(), "array");
            echo "
            ";
        }
        // line 62
        echo "
            ";
        // line 63
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>

        ";
        // line 66
        if ($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "right", array(), "array", true, true)) {
            // line 67
            echo "            <div class=\"content-3\">
                ";
            // line 68
            echo $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "right", array(), "array");
            echo "
            </div>
        ";
        }
        // line 71
        echo "    </div>
    ";
        // line 72
        if ($this->getAttribute((isset($context["region"]) ? $context["region"] : null), "footer", array(), "array", true, true)) {
            // line 73
            echo "        <div class='content-12'>
            ";
            // line 74
            echo $this->getAttribute((isset($context["region"]) ? $context["region"] : null), "footer", array(), "array");
            echo "
        </div>
    ";
        }
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/fluidvids/dist/fluidvids.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/home/height.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/home/readmore.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 84
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_HOME_MANAGER")) {
            // line 85
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/home/content.js"), "html", null, true);
            echo "\"></script>
        ";
        }
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 85,  241 => 84,  237 => 83,  233 => 82,  229 => 81,  224 => 80,  221 => 79,  213 => 74,  210 => 73,  208 => 72,  205 => 71,  199 => 68,  196 => 67,  194 => 66,  188 => 63,  185 => 62,  179 => 60,  177 => 59,  169 => 58,  166 => 57,  165 => 56,  162 => 55,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  142 => 46,  139 => 45,  137 => 44,  131 => 41,  128 => 40,  125 => 39,  116 => 33,  112 => 32,  108 => 31,  103 => 29,  99 => 28,  95 => 27,  90 => 25,  86 => 24,  80 => 23,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  59 => 15,  53 => 13,  51 => 12,  46 => 11,  43 => 10,  40 => 9,  36 => 1,  33 => 6,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Home:home.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Home/home.html.twig");
    }
}
