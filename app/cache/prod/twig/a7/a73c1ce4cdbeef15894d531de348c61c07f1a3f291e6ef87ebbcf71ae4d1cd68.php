<?php

/* ClarolineCoreBundle:Administration\Analytics:analytics.html.twig */
class __TwigTemplate_8208d70ae9a019938171769105db36df1fedc56bc8e0422627273c0208f7a478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("analytics_home", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .bar-chart{
            height: 200px;
            width: 90%;
            margin: 0 5%;
        }
        table td.text-right{
            text-align:right!important;
        }
        span.user-count-number{
            font-size: 25px;
        }
        div#users-pie-chart{
            min-height: 200px;
        }
        div.jqplot-pie-series.jqplot-data-label {font-size: 10px;}
        table tr.odd td {background-color: #F9F9F9 }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/common/jqplot/jquery.jqplot.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 28
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 30
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_analytics", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 41
        echo "
";
    }

    // line 44
    public function block_section_content($context, array $blocks = array())
    {
        // line 45
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_analytics", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\" id=\"workspace-list-div\">
        ";
        // line 49
        $this->loadTemplate("ClarolineCoreBundle:Administration\\Analytics:analytics_navbar.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics.html.twig", 49)->display($context);
        // line 50
        echo "
        <div class=\"\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-bar-chart-o\"></i>
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("last_30_days_activity", array(), "platform"), "html", null, true);
        echo "
                </div>
                <div id=\"analytics-barchart\" class=\"panel-body\">
                    <div id=\"container-barchart\">
                        <div id=\"activity-bar-chart\" class=\"bar-chart\"></div>
                    </div>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-user\"></i>
                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("account_general_statistics", array(), "platform"), "html", null, true);
        echo "
                </div>
                <div id=\"analytics-userstats\" class=\"panel-body\">
                    <div id=\"container-userstats\" class=\"row\">
                        <div class=\"col-md-2\">
                            <span class=\"user-count-number\">";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usersCount"]) ? $context["usersCount"] : null), "user_accounts", array(), "array"), "html", null, true);
        echo "</span><br/>
                            <span class=\"user-count-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_accounts", array(), "platform"), "html", null, true);
        echo "</span>
                        </div>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["usersCount"]) ? $context["usersCount"] : null)));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 76
            echo "                            ";
            if (($context["key"] != "user_accounts")) {
                // line 77
                echo "                            <div class=\"col-md-2\">
                                <span class=\"user-count-number\">";
                // line 78
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</span><br/>
                                <span class=\"user-count-label\">";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["key"], array(), "platform"), "html", null, true);
                echo "</span>
                            </div>
                            ";
            }
            // line 82
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        <div class=\"col-md-4\">
                            <div id=\"users-pie-chart\"></div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>
                ";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("yesterday_activity", array(), "platform"), "html", null, true);
        echo "
            </h3>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-book\"></i>
                    ";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ws_most_viewed", array(), "platform"), "html", null, true);
        echo "
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-condensed table-hovered\">
                        <tr><th>#</th><th>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connections", array(), "platform"), "html", null, true);
        echo "</th></tr>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mostViewedWS"]) ? $context["mostViewedWS"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ws"]) {
            // line 103
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\"><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ws"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ws"], "code", array()), "html", null, true);
            echo ")</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ws"], "actions", array()), "html", null, true);
            echo "</td></tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ws'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        <tr><td colspan=\"3\" class=\"text-right\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_top", array("topType" => "top_workspaces_connections"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("see_more", array(), "platform"), "html", null, true);
        echo "...</a></td></tr>
                    </table>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-file\"></i>
                    ";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("media_most_viewed", array(), "platform"), "html", null, true);
        echo "
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-condensed table-hovered\">
                        <tr><th>#</th><th>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("views", array(), "platform"), "html", null, true);
        echo "</th></tr>
                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mostViewedMedia"]) ? $context["mostViewedMedia"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 119
            echo "                            <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\"><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "name", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["media"], "actions", array()), "html", null, true);
            echo "</td></tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                        <tr><td colspan=\"3\" class=\"text-right\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_top", array("topType" => "top_media_views"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("see_more", array(), "platform"), "html", null, true);
        echo "...</a></td></tr>
                    </table>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <i class=\"fa fa-arrow-circle-o-down\"></i>
                    ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources_most_downloaded", array(), "platform"), "html", null, true);
        echo "
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-condensed table-hovered\">
                        <tr><th>#</th><th>";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("downloads", array(), "platform"), "html", null, true);
        echo "</th></tr>
                        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mostDownloadedResources"]) ? $context["mostDownloadedResources"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 135
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\"><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "name", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "actions", array()), "html", null, true);
            echo "</td></tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                        <tr><td colspan=\"3\" class=\"text-right\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_analytics_top", array("topType" => "top_resources_downloads"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("see_more", array(), "platform"), "html", null, true);
        echo "...</a></td></tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
";
    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        // line 146
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 148
        $this->loadTemplate("ClarolineCoreBundle:Layout:jqplot_script.html.twig", "ClarolineCoreBundle:Administration\\Analytics:analytics.html.twig", 148)->display($context);
        // line 149
        echo "    ";
        // asset "6984c6b"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6984c6b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/corebundle/jqplot.analytics.min.js");
        // line 159
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
        echo "\"></script>
    ";
        unset($context["asset_url"]);
        // line 161
        echo "    <script type=\"text/javascript\">
        var chartData = ";
        // line 162
        echo twig_jsonencode_filter((isset($context["barChartData"]) ? $context["barChartData"] : null));
        echo ";
        var userPieChartData = [];
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["usersCount"]) ? $context["usersCount"] : null)));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 165
            echo "            ";
            if (($context["key"] != "user_accounts")) {
                // line 166
                echo "                userPieChartData.push([\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["key"], array(), "platform"), "html", null, true);
                echo "\",";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "]);
            ";
            }
            // line 168
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "        var bg_color = \"transparent\";

        \$(document).ready(function(){
            if (chartData.length>0) {
                var actionsPlot = \$.jqplot(
                    'activity-bar-chart',
                    [chartData],
                    {
                        title: {show: false},
                        grid: {
                            drawBorder: false,
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
                                pad:1.2,
                                tickOptions: {
                                    formatString:'%d %b',
                                    showGridline: false,
                                    showMark: true,
                                    angle: 0,
                                    fontSize: '11px'
                                },
                                numberTicks:7
                            },
                            yaxis: {
                                min:0,
                                showTickMarks: true,
                                numberTicks: 7,
                                tickOptions: {
                                    fontSize: '11px'
                                }
                            }
                        },
                        highlighter: {
                            show: true,
                            showMarker:false,
                            sizeAdjust: 0,
                            tooltipOffset:10,
                            tooltipLocation:'n',
                            tooltipAxes:'xy',
                            formatString:'%s <br/> %d',
                            tooltipFadeSpeed:'fast'
                        },
                        cursor: {
                            show: false,
                            zoom: false,
                            style:\"pointer\"
                        },
                        seriesDefaults: {
                            showMarker:false,
                            renderer:\$.jqplot.BarRenderer,
                            showLabel:false,
                            pointLabels: { show: false },
                            rendererOptions:{
                                barPadding: 0,
                                barMargin: 10,
                                barDirection: 'vertical',
                                barWidth: 20
                            },
                            shadow:false
                        }
                    }
                );
            }

            if (userPieChartData.length>0) {
                var usersPlot = \$.jqplot(
                        'users-pie-chart',
                        [userPieChartData],
                        {
                            title: {show: false},
                            grid: {
                                drawBorder: false,
                                shadow: false,
                                background: bg_color,
                                useNegativeColors: false
                            },
                            highlighter: {
                                show: false
                            },
                            cursor: {
                                show: false,
                                zoom: false,
                                showTooltip: false
                            },
                            seriesDefaults: {
                                showMarker:true,
                                renderer:\$.jqplot.PieRenderer,
                                rendererOptions:{
                                    showDataLabels: true,
                                    dataLabelThreshold: 2,
                                    dataLabels: 'percent',
                                    sliceMargin:0.3,
                                    dataLabelFormatString: '%.1f%%',
                                    highlightMouseOver:false
                                },
                                shadow:false
                            },
                            legend:{
                                location: 'e',
                                border:'none',
                                renderer: \$.jqplot.CavasTextRenderer,
                                show:true,
                                showMarker:true,
                                rendererOptions:{
                                    numberRows:7
                                },
                                backgroundColor:bg_color,
                                placement:'outsideGrid'
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
        return "ClarolineCoreBundle:Administration\\Analytics:analytics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 169,  428 => 168,  420 => 166,  417 => 165,  413 => 164,  408 => 162,  405 => 161,  399 => 159,  395 => 149,  393 => 148,  387 => 146,  384 => 145,  369 => 137,  346 => 135,  329 => 134,  323 => 133,  316 => 129,  302 => 121,  279 => 119,  262 => 118,  256 => 117,  249 => 113,  235 => 105,  210 => 103,  193 => 102,  187 => 101,  180 => 97,  171 => 91,  161 => 83,  155 => 82,  149 => 79,  145 => 78,  142 => 77,  139 => 76,  135 => 75,  130 => 73,  126 => 72,  118 => 67,  103 => 55,  96 => 50,  94 => 49,  88 => 46,  85 => 45,  82 => 44,  77 => 41,  75 => 30,  73 => 29,  70 => 28,  64 => 25,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Analytics:analytics.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Analytics/analytics.html.twig");
    }
}
