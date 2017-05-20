<?php

/* ClarolineCoreBundle:Administration\Analytics:analytics_connections.html.twig */
class __TwigTemplate_fdb660d4fa7b4b44a826c0c518b7ebd734142aa97b32bb54f681b6ec2f2fe80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics_connections.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_visit", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .line-chart{
            height: 150px;
            width: 90%;
            margin: 0 5%;
        }
        .count_by_day_chart_legend {
            text-align: center;
            font-size: 11px;
            color: #777;
        }
        #connections_criteria.form-inline div {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            margin-bottom: 5px;
            margin-top: 5px;
            margin-right: 10px;
        }
        #connections_criteria.form-inline div label {
            margin-right: 5px;
        }
        #connections_criteria.form-inline {
            margin-bottom: 5px;
        }
        span.small {font-size: 14px;}
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/common/jqplot/jquery.jqplot.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 37
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 39
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_analytics", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 50
        echo "
";
    }

    // line 53
    public function block_section_content($context, array $blocks = array())
    {
        // line 54
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_analytics", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" id=\"workspace-list-div\">
        ";
        // line 58
        $this->loadTemplate("ClarolineCoreBundle:Administration\\Analytics:analytics_navbar.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics_connections.html.twig", 58)->display($context);
        // line 59
        echo "        <div class=\"margin\">
            <h1>";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["activeUsers"]) ? $context["activeUsers"] : null), "html", null, true);
        echo " <span class=\"small\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users_connected_once", array(), "platform"), "html", null, true);
        echo "</span></h1>
        </div>

        <div class=\"margin clearfix\">
            <form role=\"form\" id=\"connections_criteria\" action=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_connections");
        echo "\" method=\"POST\">
                ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_criteria"]) ? $context["form_criteria"] : null), 'widget');
        echo "
                <div class=\"form-group\"> <input type=\"submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show_actions", array(), "platform"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/> </div>
            </form>
        </div>

        <div class=\"margin\">
            <h3>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users_visits", array(), "platform"), "html", null, true);
        echo "</h3>
            <div id=\"connections-line-chart\" class=\"line-chart\"></div>
            <br/>
            <div class=\"count_by_day_chart_legend\"><i class=\"fa fa-hand-o-up\"></i> <em>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("graph_draw_area", array(), "platform"), "html", null, true);
        echo "</em></div>
        </div>
    </div>
";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 81
        $this->loadTemplate("ClarolineCoreBundle:Layout:jqplot_script.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics_connections.html.twig", 81)->display($context);
        // line 82
        echo "    ";
        // asset "f30d392"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f30d392") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/corebundle/jqplot.analytics-connections.min.js");
        // line 91
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    ";
        unset($context["asset_url"]);
        // line 93
        echo "
    <script type=\"text/javascript\">
        var chartData = ";
        // line 95
        echo twig_jsonencode_filter((isset($context["connections"]) ? $context["connections"] : null));
        echo ";
        var bg_color = \"transparent\";

        \$(document).ready(function(){
            if (chartData.length>0) {
                var actionsPlot = \$.jqplot(
                    'connections-line-chart',
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
        // line 119
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
        return "ClarolineCoreBundle:Administration\\Analytics:analytics_connections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 119,  172 => 95,  168 => 93,  162 => 91,  158 => 82,  156 => 81,  150 => 79,  147 => 78,  139 => 74,  133 => 71,  125 => 66,  121 => 65,  117 => 64,  108 => 60,  105 => 59,  103 => 58,  97 => 55,  94 => 54,  91 => 53,  86 => 50,  84 => 39,  82 => 38,  79 => 37,  73 => 34,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Analytics:analytics_connections.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Analytics/analytics_connections.html.twig");
    }
}
