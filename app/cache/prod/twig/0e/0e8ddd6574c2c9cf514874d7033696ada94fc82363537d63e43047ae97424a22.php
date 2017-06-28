<?php

/* ClarolineCoreBundle:Exception:layout.html.twig */
class __TwigTemplate_9aefc140edc740efacf69ee5de78b03d791a10a9ed4a93d4a5382c263a64c086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::layout.html.twig", "ClarolineCoreBundle:Exception:layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_header' => array($this, 'block_javascripts_header'),
            'favicon' => array($this, 'block_favicon'),
            'layout' => array($this, 'block_layout'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'message' => array($this, 'block_message'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "theme"), "method") != "")) {
            // line 6
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ((($this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath() . "/themes/") . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "theme"), "method")) . "/bootstrap.css"), "html", null, true);
            echo "\" screen=\"media\" />
    ";
        }
        // line 8
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" screen=\"media\" />
";
    }

    // line 12
    public function block_javascripts_header($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts_header", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jquery/dist/jquery.min.js"), "html", null, true);
        echo "'></script>
";
    }

    // line 17
    public function block_favicon($context, array $blocks = array())
    {
        // line 18
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/images/ico/favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/images/ico/apple-touch-icon.png"), "html", null, true);
        echo "\"/>
";
    }

    // line 22
    public function block_layout($context, array $blocks = array())
    {
        // line 23
        echo "    <div id=\"wrap\">
        <div class=\"please-wait\">
            <h4><span class=\"label label-warning\"> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("please_wait", array(), "platform"), "html", null, true);
        echo " </span></h4>
        </div>
        <div id=\"top_bar\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    ";
        // line 35
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method") != "")) {
            // line 36
            echo "                        <a class=\"navbar-brand logo\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index");
            echo "\">
                            <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, (($this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath() . "/uploads/logos/") . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method")), "html", null, true);
            echo "\" height=\"35\"
                                ";
            // line 38
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method") != "")) {
                echo "alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method"), "html", null, true);
                echo "\"";
            }
            echo ">
                        </a>
                    ";
        }
        // line 41
        echo "                    ";
        if ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method") != "") && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "nameActive"), "method"))) {
            // line 42
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_index");
            echo "\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "name"), "method"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 46
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 53
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 54
        echo "                </div>
            </div>
            <div class=\"row content\">
                <div class=\"col-md-12\">

                        <div class=\"col-md-6 col-md-offset-3\">
                            <div class=\"alert alert-danger\">
                                ";
        // line 61
        $this->displayBlock('message', $context, $blocks);
        // line 63
        echo "                            </div>

                            ";
        // line 65
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 66
            echo "                                <div class=\"text-center\">
                                    ";
            // line 67
            if (array_key_exists("httpCode", $context)) {
                // line 68
                echo "                                        ";
                // line 69
                $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:exceptionActionsMenu", array(), array("user" => $this->getAttribute(                // line 73
(isset($context["app"]) ? $context["app"] : null), "user", array()), "message" => $this->getAttribute(                // line 74
(isset($context["exception"]) ? $context["exception"] : null), "getMessage", array(), "method"), "exception_class" => $this->getAttribute(                // line 75
(isset($context["exception"]) ? $context["exception"] : null), "getClass", array(), "method"), "file" => $this->getAttribute(                // line 76
(isset($context["exception"]) ? $context["exception"] : null), "getFile", array(), "method"), "line" => $this->getAttribute(                // line 77
(isset($context["exception"]) ? $context["exception"] : null), "getLine", array(), "method"), "url" => $this->getAttribute($this->getAttribute(                // line 78
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 79
(isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "httpCode" =>                 // line 80
(isset($context["httpCode"]) ? $context["httpCode"] : null)));
                // line 84
                echo "                                    ";
            } else {
                // line 85
                echo "                                        ";
                // line 86
                $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:exceptionActionsMenu", array(), array("user" => $this->getAttribute(                // line 90
(isset($context["app"]) ? $context["app"] : null), "user", array()), "message" => $this->getAttribute(                // line 91
(isset($context["exception"]) ? $context["exception"] : null), "getMessage", array(), "method"), "exception_class" => $this->getAttribute(                // line 92
(isset($context["exception"]) ? $context["exception"] : null), "getClass", array(), "method"), "file" => $this->getAttribute(                // line 93
(isset($context["exception"]) ? $context["exception"] : null), "getFile", array(), "method"), "line" => $this->getAttribute(                // line 94
(isset($context["exception"]) ? $context["exception"] : null), "getLine", array(), "method"), "url" => $this->getAttribute($this->getAttribute(                // line 95
(isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 96
(isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method")));
                // line 100
                echo "                                    ";
            }
            // line 101
            echo "                                    ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : null), array(), "exception_actions");
            echo "
                                </div>
                            ";
        }
        // line 104
        echo "                        </div>

                </div>
            </div>
        </div>
        <div id=\"push\"></div>
    </div>
    ";
        // line 111
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 53
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 61
    public function block_message($context, array $blocks = array())
    {
        // line 62
        echo "                                ";
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        echo "        ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Layout:footer"), array());
        // line 113
        echo "    ";
    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        // line 117
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/twitter/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 119
        // asset "040d5cb"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_040d5cb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jms/twig-js/twig.js");
        // line 121
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    ";
        unset($context["asset_url"]);
        // line 123
        echo "    <script>
        \$('.exception-action-btn').on('click', function () {
            var url = \$(this).data('url');
            var displayMode = \$(this).data('display-mode');

            if (displayMode === 'modal_form') {
                window.Claroline.Modal.displayForm(
                    url,
                    function () {},
                    function() {}
                );

            } else {
                window.location = url;
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Exception:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 123,  260 => 121,  257 => 119,  253 => 118,  248 => 117,  245 => 116,  241 => 113,  238 => 112,  235 => 111,  231 => 62,  228 => 61,  223 => 53,  219 => 111,  210 => 104,  203 => 101,  200 => 100,  198 => 96,  197 => 95,  196 => 94,  195 => 93,  194 => 92,  193 => 91,  192 => 90,  191 => 86,  189 => 85,  186 => 84,  184 => 80,  183 => 79,  182 => 78,  181 => 77,  180 => 76,  179 => 75,  178 => 74,  177 => 73,  176 => 69,  174 => 68,  172 => 67,  169 => 66,  167 => 65,  163 => 63,  161 => 61,  152 => 54,  150 => 53,  141 => 46,  135 => 43,  130 => 42,  127 => 41,  117 => 38,  113 => 37,  108 => 36,  106 => 35,  93 => 25,  89 => 23,  86 => 22,  80 => 19,  75 => 18,  72 => 17,  66 => 14,  61 => 13,  58 => 12,  52 => 9,  49 => 8,  43 => 6,  41 => 5,  38 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Exception:layout.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Exception/layout.html.twig");
    }
}
