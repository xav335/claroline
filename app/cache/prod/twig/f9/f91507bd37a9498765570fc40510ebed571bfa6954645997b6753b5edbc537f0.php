<?php

/* ClarolineCoreBundle:Form:simple_auto_complete.html.twig */
class __TwigTemplate_a8b33927f69a808469320dfcd9859589294e7b56e05c4f3ae0726147d6c0e3d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle:Form:simple_auto_complete.html.twig", 1);
        $this->blocks = array(
            'simpleautocomplete_widget' => array($this, 'block_simpleautocomplete_widget'),
            'simpleautocomplete_assets' => array($this, 'block_simpleautocomplete_assets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle::form_theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_simpleautocomplete_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $this->displayBlock('simpleautocomplete_assets', $context, $blocks);
        // line 11
        echo "        <div class=\"input-group input-group-sm\">
            ";
        // line 12
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        </div>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                var path = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exporter_api", array("entityReference" => (isset($context["entity_reference"]) ? $context["entity_reference"] : null), "_format" => (isset($context["format"]) ? $context["format"] : null))), "html", null, true);
        echo "';
                var field = \$( \"#";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\" );
                field.addClass('form-control');
                field.after('<a id=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_clear\" class=\"btn btn-default input-group-addon\" role=\"button\"i><span class=\"fa fa-times\"></span></a>');
                \$(\"#";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "_clear\").on('click', function(){
                    field.val('');
                });
                field.autocomplete({
                    source: function( request, response ) {
                        \$.ajax({
                            url: path,
                            dataType: '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : null), "html", null, true);
        echo "',
                            ";
        // line 28
        if (("jsonp" == (isset($context["format"]) ? $context["format"] : null))) {
            // line 29
            echo "                            jsonp: 'extractData',
                            jsonpCallback: 'extractData',
                            ";
        }
        // line 32
        echo "                            contentType: \"application/json; charset=utf-8\",
                            data: {
                                search: request.term,
                                extra: ";
        // line 35
        echo twig_jsonencode_filter((isset($context["extraDatas"]) ? $context["extraDatas"] : null));
        echo "
                            },
                            complete: function( data ) {
                                if (data.status == 200) {
                                    var result = eval(data.responseText);
                                    response(
                                        \$.map(
                                            result, function( item ) {
                                                return { label: item.label, value: item.label };
                                            }
                                        )
                                    );
                                }
                            }
                        });
                    }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 5
    public function block_simpleautocomplete_assets($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        if ((isset($context["with_vendors"]) ? $context["with_vendors"] : null)) {
            // line 7
            echo "            <link rel='stylesheet' type='text/css' href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/common/jquery-ui-bootstrap/jquery-ui-1.9.2.custom.css"), "html", null, true);
            echo "'/>
            <script src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jquery-ui/jquery-ui.min.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 10
        echo "        ";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:simple_auto_complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 10,  123 => 8,  118 => 7,  115 => 6,  112 => 5,  87 => 35,  82 => 32,  77 => 29,  75 => 28,  71 => 27,  61 => 20,  57 => 19,  52 => 17,  48 => 16,  41 => 12,  38 => 11,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:simple_auto_complete.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/simple_auto_complete.html.twig");
    }
}
