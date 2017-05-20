<?php

/* ClarolineCoreBundle:Tool\desktop\resource_manager:resources.html.twig */
class __TwigTemplate_263f8955b92dffe30cfb41db2b1b6f9db94b940bc691d78269a02416378d3c01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineCoreBundle:Tool\\desktop\\resource_manager:resources.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 7
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 13
        echo "
";
    }

    // line 15
    public function block_section_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div id=\"data-attributes\" data-max-post-size=\"";
        echo twig_escape_filter($this->env, (isset($context["maxPostSize"]) ? $context["maxPostSize"] : null), "html", null, true);
        echo "\"></div>
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources", array(), "platform"), "html", null, true);
        echo "<span></span></h3>
    </div>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(function() {
            Claroline.ResourceManager.createFullManager({
                \"parentElement\": \$('div.section-content .panel'),
                \"breadcrumbElement\": \$('ul.breadcrumb'),
                \"isWorkspace\": false,
                \"webPath\": \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath(), "html", null, true);
        echo "\",
                \"language\": \"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\",
                \"zoom\": \"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["resourceZoom"]) ? $context["resourceZoom"] : null), "html", null, true);
        echo "\",
                \"displayMode\": \"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["displayMode"]) ? $context["displayMode"] : null), "html", null, true);
        echo "\",
                \"pickerDirectoryId\": \"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "pickerDirectoryId", 1 => "0"), "method"), "html", null, true);
        echo "\",
                \"preFetchedDirectory\": ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Resource:openDirectory"));
        echo ",
                \"resourceTypes\": {
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resourceTypes"]) ? $context["resourceTypes"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["resourceType"]) {
            // line 37
            echo "                    \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resourceType"], "getName", array(), "method"), "html", null, true);
            echo "\": {
                        \"name\": \"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["resourceType"], "getName", array(), "method"), array(), "resource"), "html", null, true);
            echo "\",
                        \"actions\": {
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["resourceType"], "getActions", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 41
                echo "                                ";
                if ($this->env->getExtension('Claroline\CoreBundle\Twig\ResourceExtension')->isMenuActionImplemented($context["resourceType"], $this->getAttribute($context["action"], "getName", array(), "method"))) {
                    // line 42
                    echo "                                    \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getName", array(), "method"), "html", null, true);
                    echo "\": {
                                        \"name\": \"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getName", array(), "method"), "html", null, true);
                    echo "\",
                                        \"route\": \"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_action", array("resourceType" => $this->getAttribute($context["resourceType"], "getName", array(), "method"), "action" => $this->getAttribute($context["action"], "getName", array(), "method"), "node" => "_nodeId")), "html", null, true);
                    echo "\",
                                        \"async\": ";
                    // line 45
                    if ($this->getAttribute($context["action"], "isAsync", array(), "method")) {
                        echo " 1 ";
                    } else {
                        echo " 0 ";
                    }
                    echo ",
                                        \"mask\": ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getValue", array(), "method"), "html", null, true);
                    echo ",
                                        \"isCustom\": ";
                    // line 47
                    if ($this->getAttribute($context["action"], "isCustom", array(), "method")) {
                        echo " \"yes\" ";
                    } else {
                        echo " \"no\" ";
                    }
                    echo ",
                                        \"isForm\": ";
                    // line 48
                    if ($this->getAttribute($context["action"], "isForm", array(), "method")) {
                        echo " true ";
                    } else {
                        echo " false ";
                    }
                    // line 49
                    echo "                                    } ";
                    if (((twig_length_filter($this->env, (isset($context["resourceActions"]) ? $context["resourceActions"] : null)) >= 0) || ($this->getAttribute($context["loop"], "last", array()) != true))) {
                        echo ",";
                    }
                    // line 50
                    echo "                                ";
                }
                // line 51
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resourceActions"]) ? $context["resourceActions"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 54
                echo "                                ";
                if ($this->env->getExtension('Claroline\CoreBundle\Twig\ResourceExtension')->isMenuActionImplemented(null, $this->getAttribute($context["action"], "getName", array(), "method"))) {
                    // line 55
                    echo "                                    \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getName", array(), "method"), "html", null, true);
                    echo "\": {
                                        \"name\": \"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getName", array(), "method"), "html", null, true);
                    echo "\",
                                        \"route\": \"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_action", array("resourceType" => $this->getAttribute($context["resourceType"], "getName", array(), "method"), "action" => "test", "node" => "_nodeId")), "html", null, true);
                    echo "\",
                                        \"async\": ";
                    // line 58
                    if ($this->getAttribute($context["action"], "isAsync", array(), "method")) {
                        echo " 1 ";
                    } else {
                        echo " 0 ";
                    }
                    echo ",
                                        \"mask\": ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getValue", array(), "method"), "html", null, true);
                    echo ",
                                        \"isCustom\": ";
                    // line 60
                    if ($this->getAttribute($context["action"], "isCustom", array(), "method")) {
                        echo " \"yes\" ";
                    } else {
                        echo " \"no\" ";
                    }
                    echo ",
                                        \"isForm\": ";
                    // line 61
                    if ($this->getAttribute($context["action"], "isForm", array(), "method")) {
                        echo " true ";
                    } else {
                        echo " false ";
                    }
                    // line 62
                    echo "                                    } ";
                    if (($this->getAttribute($context["loop"], "last", array()) != true)) {
                        echo ",";
                    }
                    // line 63
                    echo "                                ";
                }
                // line 64
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                        }
                    } ";
            // line 66
            if (($this->getAttribute($context["loop"], "last", array()) != true)) {
                echo ", ";
            }
            // line 67
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                }
            });
        });
    </script>
    <script type=\"text/javascript\">
        var FileAPI = { debug: false, pingUrl: false }
    </script>
    <script type=\"text/javascript\" src='";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/fileapi/dist/FileAPI.html5.min.js"), "html", null, true);
        echo "'></script>
    <script type=\"text/javascript\" src='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/resource/dragndrop.js"), "html", null, true);
        echo "'></script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Tool\\desktop\\resource_manager:resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 76,  326 => 75,  317 => 68,  303 => 67,  299 => 66,  296 => 65,  282 => 64,  279 => 63,  274 => 62,  268 => 61,  260 => 60,  256 => 59,  248 => 58,  244 => 57,  240 => 56,  235 => 55,  232 => 54,  215 => 53,  212 => 52,  198 => 51,  195 => 50,  190 => 49,  184 => 48,  176 => 47,  172 => 46,  164 => 45,  160 => 44,  156 => 43,  151 => 42,  148 => 41,  131 => 40,  126 => 38,  121 => 37,  104 => 36,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  68 => 22,  65 => 21,  58 => 18,  52 => 16,  49 => 15,  44 => 13,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Tool\\desktop\\resource_manager:resources.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Tool/desktop/resource_manager/resources.html.twig");
    }
}
