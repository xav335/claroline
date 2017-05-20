<?php

/* ClarolineCoreBundle:Log:count_by_day_chart.html.twig */
class __TwigTemplate_fb285697277957dc40b5a6f3a689010bc8db12064ef13d17bd7ef8073dba9936 extends Twig_Template
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
        echo "<style type=\"text/css\">
    .line-chart {
        height: 150px;
        width: 80%;
        margin: 0 10%;
    }

    .count_by_day_chart_legend {
        text-align: center;
        font-size: 11px;
        color: #777;
    }
</style>
";
        // line 14
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "isXmlHttpRequest", array(), "method")) {
            // line 15
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/common/jqplot/jquery.jqplot.css"), "html", null, true);
            echo "\" type=\"text/css\" />

    ";
            // line 17
            $this->loadTemplate("ClarolineCoreBundle:Layout:jqplot_script.html.twig", "ClarolineCoreBundle:Log:count_by_day_chart.html.twig", 17)->display($context);
            // line 18
            echo "    ";
            // asset "d64046d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d64046d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/corebundle/jqplot.count-by-day.min.js");
            // line 27
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            unset($context["asset_url"]);
        }
        // line 30
        if ((( !array_key_exists("actionName", $context) || twig_test_empty((isset($context["actionName"]) ? $context["actionName"] : null))) || !twig_in_filter("-", (isset($context["actionName"]) ? $context["actionName"] : null)))) {
            // line 31
            echo "<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions_per_day", array(), "platform"), "html", null, true);
            echo "</legend>
";
        } else {
            // line 33
            echo "<legend>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("log_" . (isset($context["actionName"]) ? $context["actionName"] : null)) . "_filter"), array(), "log"), "html", null, true);
            echo "</legend>
";
        }
        // line 35
        echo "
<div id=\"actions-line-chart\" class=\"line-chart\"></div>
<br/>
<div class=\"count_by_day_chart_legend\"><i class=\"fa fa-hand-o-up\"></i> <em>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("graph_draw_area", array(), "platform"), "html", null, true);
        echo "</em></div>

<script type=\"text/javascript\">
    var chartData = ";
        // line 41
        echo twig_jsonencode_filter((isset($context["chartData"]) ? $context["chartData"] : null));
        echo ";
    var bg_color = \"transparent\";

    \$(document).ready(function(){
        if (chartData.length>0) {
            var actionsPlot = \$.jqplot(
                'actions-line-chart',
                [chartData],
                {
                    title: {show: false},
                    grid: {
                        drawBorder: true,
                        borderWidth: 1.0,
                        shadow: false,
                        background: bg_color
                    },
                    axesDefaults: {
                        labelRenderer: \$.jqplot.CanvasAxisLabelRenderer,
                        tickRenderer: \$.jqplot.CanvasAxisTickRenderer
                    },
                    axes: {
                        xaxis: {
                            renderer: \$.jqplot.DateAxisRenderer,
                            tickOptions: {
                                formatString:'";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("jqplot_date_output_format", array(), "platform"), "html", null, true);
        echo "',
                                showGridline: false,
                                showMark: true,
                                angle: -20,
                                fontSize: '10px'
                            },
                            numberTicks:10
                        },
                        yaxis: {
                            min:0,
                            showTickMarks: true,
                            numberTicks: 5
                        }
                    },
                    highlighter: {
                        show: true,
                        sizeAdjust: 1,
                        tooltipOffset:12,
                        tooltipLocation:'n',
                        tooltipAxes:'xy',
                        formatString:'%s <br/> %d',
                        tooltipFadeSpeed:'fast'
                    },
                    cursor: {
                        show: true,
                        zoom: true,
                        showTooltip: false
                    },
                    seriesDefaults: {
                        showMarker:((chartData.length<10)?true:false),
                        markerOptions:{shadow:false},
                        shadow:false,
                        showLine:true,
                        useNegativeColors: false,
                        fill: true,
                        lineWidth: 1.5,
                        fillAndStroke: true,
                        fillAlpha: 0.12,
                        rendererOptions:{highlightMouseOver: true, highlightMouseDown: true}
                    }
                }
            );
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Log:count_by_day_chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 65,  80 => 41,  74 => 38,  69 => 35,  63 => 33,  57 => 31,  55 => 30,  48 => 27,  44 => 18,  42 => 17,  36 => 15,  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:count_by_day_chart.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/count_by_day_chart.html.twig");
    }
}
