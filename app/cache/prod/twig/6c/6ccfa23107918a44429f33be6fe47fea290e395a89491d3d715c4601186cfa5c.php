<?php

/* ClarolineCoreBundle:Layout:javascripts.html.twig */
class __TwigTemplate_d999df8f8a0d80b4f9b70b8619977829fb3915ada616d0d0ce403cbe6efa0784 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/es6_dll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/angular_dll.js"), "html", null, true);
        echo "\"></script>
<script>
    if (window.sessionStorage.getItem('hide_brower_warning')) {
        \$('.outdated-browser-warning').hide();
    }
</script>

";
        // line 10
        // asset "633ac24"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_633ac24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/svg4everybody/svg4everybody.js");
        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    <script>
        svg4everybody();
    </script>
";
        unset($context["asset_url"]);
        // line 18
        echo "
<script src='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/iframe/iframe.js"), "html", null, true);
        echo "'></script>
";
        // line 20
        // asset "c90dede"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c90dede") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/twitter/bootstrap/js/bootstrap.js");
        // line 36
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
        // line 38
        // asset "040d5cb"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_040d5cb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jms/twig-js/twig.js");
        // line 40
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
        // line 42
        // check variable conditions
        if (!isset($context['assetic']['vars']['locale'])) {
            throw new \RuntimeException(sprintf('The asset "f31203b" expected variable "locale" to be set, but got only these vars: %s. Did you set-up a value supplier?', isset($context['assetic']['vars']) && $context['assetic']['vars'] ? implode(', ', $context['assetic']['vars']) : '# none #'));
        }

        // asset "f31203b"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f31203b", array("locale" => $this->getAttribute($this->getAttribute((isset($context["assetic"]) ? $context["assetic"] : null), "vars", array(), "array"), "locale", array(), "array"))) : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(strtr("js/f31203b.{locale}.js", array("{locale}" => $context['assetic']['vars']['locale'])));
        // line 76
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
        // line 78
        echo "
";
        // line 80
        // asset "06f00e3"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_06f00e3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/ui/jqueryui.js");
        // line 86
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
        // line 88
        echo "
";
        // line 89
        // asset "dd81a76"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dd81a76") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dd81a76.js");
        // line 96
        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
        // line 98
        echo "
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
";
        // line 102
        if (("en" != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()))) {
            // line 103
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("packages/bootstrap-datepicker/js/locales/bootstrap-datepicker." . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())) . ".js")), "html", null, true);
            echo "\"></script>
";
        }
        // line 105
        echo "
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/underscore/underscore.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/backbone/backbone.js"), "html", null, true);
        echo "\"></script>

";
        // line 109
        // asset "2d0dfcf"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2d0dfcf") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/claroline/js/libraries.js");
        // line 139
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
        // line 141
        echo "
";
        // line 143
        // asset "4b91af5"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4b91af5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/angular.js");
        unset($context["asset_url"]);
        // line 148
        echo "
";
        // line 150
        // asset "90b17c4"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_90b17c4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/angular-ui.js");
        unset($context["asset_url"]);
        // line 159
        echo "
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/tinymce.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"), "html", null, true);
        echo "\"></script><!-- this is not duplicated file -->

";
        // line 163
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "environment", array()) == "prod")) {
            // line 164
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/commons.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 166
        echo "
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/claroline-distribution-main-core-tinymce.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/tinymce/resource_picker_button.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/tinymce/resource_picker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/tinymce/resource_upload_button.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/claroline-distribution-main-core-modernizr.js"), "html", null, true);
        echo "\"></script>

<script>
    \$('body').tooltip({
        selector: '[data-toggle=tooltip]'
    });
</script>
";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Layout:injectJavascript", array()));
        echo "
<script>
    \$('.maintenance-popover').popover();
</script>

<script>
    \$('#hide-email-confirmation').on('click', function(event) {
        \$.ajax({
            url: Routing.generate('claro_security_validate_email_hide'),
            type: 'GET',
            success: function (datas) {
                \$('.alert-email-confirm').hide();
            }
        });
    });

    \$('#close-browser-warning').on('click', function(event) {
        window.sessionStorage.setItem('hide_brower_warning', true);
    })

    // The following code fixes the issue of unscrollable modal due to focus loss when multiple modals are opened.
    var oldJqTrigger = jQuery.fn.trigger;
    jQuery.fn.trigger = function()
    {
        if ( arguments && arguments.length > 0) {
            if (typeof arguments[0] === 'string') {
                if (arguments[0] === 'hidden.bs.modal') {
                    if (\$('.modal:visible').length) {
                        \$('.modal-backdrop').first().css('z-index', parseInt(\$('.modal:visible').last().css('z-index')) - 10);
                        \$('body').addClass('modal-open');
                    }
                }
            }
        }
        return oldJqTrigger.apply(this, arguments);
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Layout:javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 178,  206 => 171,  202 => 170,  198 => 169,  194 => 168,  190 => 167,  187 => 166,  181 => 164,  179 => 163,  174 => 161,  170 => 160,  167 => 159,  163 => 150,  160 => 148,  156 => 143,  153 => 141,  147 => 139,  144 => 109,  139 => 107,  135 => 106,  132 => 105,  126 => 103,  124 => 102,  120 => 101,  116 => 100,  112 => 99,  109 => 98,  103 => 96,  100 => 89,  97 => 88,  91 => 86,  88 => 80,  85 => 78,  79 => 76,  71 => 42,  65 => 40,  62 => 38,  56 => 36,  53 => 20,  49 => 19,  46 => 18,  37 => 13,  34 => 10,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Layout:javascripts.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Layout/javascripts.html.twig");
    }
}
