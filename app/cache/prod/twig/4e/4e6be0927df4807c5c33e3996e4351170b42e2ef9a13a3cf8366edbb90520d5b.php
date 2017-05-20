<?php

/* IcapBadgeBundle::Template/list.html.twig */
class __TwigTemplate_1c05a3c4dc7f980f5786bbfb750edbe56a7a15044cf68d28c034e60f38dac434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"nav nav-tabs\" role=\"tablist\">
    <li class=\"active\">
        <a href=\"#badges\" class=\"btn btn-default btn-md \" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show_all_badges", array(), "icap_badge"), "html", null, true);
        echo "\" role=\"tab\" data-toggle=\"tab\">
            ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show_all_badges", array(), "icap_badge"), "html", null, true);
        if ((0 < twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)))) {
            echo " <span class=\"badge badge-info\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("badge_current_claimed_badges_manage", twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)), array("%claimedBadgeCount%" => twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null))), "icap_badge"), "html", null, true);
            echo "\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)), "html", null, true);
            echo "</span>";
        }
        // line 6
        echo "        </a>
    </li>
    <li>
        <a href=\"#users\" class=\"btn btn-default btn-md\" title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_by_user", array(), "icap_badge"), "html", null, true);
        echo "\" role=\"tab\" data-toggle=\"tab\">
            ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_by_user", array(), "icap_badge"), "html", null, true);
        if ((0 < twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)))) {
            echo " <span class=\"badge badge-info\" data-toggle=\"tooltip\" data-container=\"body\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("badge_current_claimed_badges_manage", twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)), array("%claimedBadgeCount%" => twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null))), "icap_badge"), "html", null, true);
            echo "\">
                ";
            // line 11
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)), "html", null, true);
            echo "</span>";
        }
        // line 12
        echo "        </a>
    </li>
    ";
        // line 14
        if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "badges_per_user", array(), "any", true, true)) {
            // line 15
            echo "    <li>
        <a href=\"#stats\" class=\"btn btn-default btn-md\" title=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_statistics", array(), "icap_badge"), "html", null, true);
            echo "\" role=\"tab\" data-toggle=\"tab\">
            <span class=\"fa fa-bar-chart\"></span> ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_statistics", array(), "icap_badge"), "html", null, true);
            echo "
        </a>
        <!-- ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "statistics_link", array()), $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array())), "html", null, true);
            echo " -->
    </li>
    ";
        }
        // line 22
        echo "</ul>

<!-- Tab panes -->
<div class=\"tab-content badge_tabs\">
    <div class=\"tab-pane active\" id=\"badges\">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "add_link", array()), $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array())), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_badge", array(), "icap_badge"), "html", null, true);
        echo "\" role=\"button\" class=\"btn btn-primary btn-md\">
            <span class=\"fa fa-plus\"></span> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_badge", array(), "icap_badge"), "html", null, true);
        echo "
        </a>
        ";
        // line 30
        $this->loadTemplate("IcapBadgeBundle:Template:list_badges.html.twig", "IcapBadgeBundle::Template/list.html.twig", 30)->display($context);
        // line 31
        echo "    </div>
    <div class=\"tab-pane\" id=\"users\">
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "csv_link", array()), $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array())), "html", null, true);
        echo "\" role=\"button\" class=\"btn btn-primary btn-md\">
            <span class=\"fa fa-download\"></span> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("csv_export", array(), "icap_badge"), "html", null, true);
        echo "
        </a>
        ";
        // line 36
        $this->loadTemplate("IcapBadgeBundle:Template:list_badges_claim.html.twig", "IcapBadgeBundle::Template/list.html.twig", 36)->display($context);
        // line 37
        echo "        ";
        $this->loadTemplate("IcapBadgeBundle:Template:list_users.html.twig", "IcapBadgeBundle::Template/list.html.twig", 37)->display($context);
        // line 38
        echo "    </div>
    ";
        // line 39
        if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "badges_per_user", array(), "any", true, true)) {
            // line 40
            echo "    <div class=\"tab-pane\" id=\"stats\">
        ";
            // line 41
            $this->loadTemplate("IcapBadgeBundle:Template:statistics.html.twig", "IcapBadgeBundle::Template/list.html.twig", 41)->display($context);
            // line 42
            echo "    </div>
    ";
        }
        // line 44
        echo "</div>

";
        // line 46
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 47
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/common/jqplot/jquery.jqplot.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    <script type=\"text/javascript\" src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapbadge/js/list.js"), "html", null, true);
        echo "'></script>
    ";
        // line 52
        if ((($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "badges_per_user", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "badges_per_user", array()))) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "totalBadges", array()) > 0))) {
            // line 53
            echo "        <!--[if lt IE 9]><script language=\"javascript\" type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/jqPlot/src/excanvas.min.js"), "html", null, true);
            echo "\"></script><![endif]-->
        <script type=\"text/javascript\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontend/jqPlot/src/jquery.jqplot.js"), "html", null, true);
            echo "\"></script>
        ";
            // line 55
            // asset "44bf5b0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_44bf5b0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/icapbadge/jqplot.plugins.min.js");
            // line 64
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            unset($context["asset_url"]);
            // line 66
            echo "

        <script type=\"text/javascript\">
            var jqplotInitialized = false;
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                \$target = \$(e.target).attr(\"href\");
                if (\$target == \"#stats\" && !jqplotInitialized) {

                    var s1 = [['";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("awarded_badges", array(), "icap_badge"), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "totalBadgeAwarded", array()), "html", null, true);
            echo "], ['";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("availables_badges", array(), "icap_badge"), "html", null, true);
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "totalBadgeNotAwarded", array()), "html", null, true);
            echo "]];

                    var plot = \$.jqplot('globalAttrib', [s1], {
                        grid: {
                            drawBorder: false,
                            background: 'white',
                            shadow: false
                        },
                        seriesDefaults: {
                            // make this a donut chart.
                            renderer:\$.jqplot.DonutRenderer,
                            rendererOptions:{
                                shadow: false,
                                sliceMargin: 3,
                                startAngle: 90,
                                color:'white',
                                showDataLabels: true,
                                dataLabels: 'value',
                                padding: 5,
                                animation:{show:!\$.jqplot.use_excanvas}
                            }
                        },
                        legend: { show:true, location: 'e' }
                    });

                    \$.jqplot.config.enablePlugins = true;
                    var badges_per_user = ";
            // line 100
            echo twig_jsonencode_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "badges_per_user", array()));
            echo ";
                    var dataLength = badges_per_user.length;
                    var maxNbBadge = parseInt(badges_per_user[dataLength-1][0]);
                    var barchartWidth = \$(\"#badgesPerUsers\").width()-50;

                    plot1 = \$.jqplot('badgesPerUsers', [badges_per_user], {
                        axesDefaults: {
                            labelRenderer: \$.jqplot.CanvasAxisLabelRenderer,
                            min: 0,
                            tickOptions: {
                                formatString: '%d'
                            }
                        },
                        animate: !\$.jqplot.use_excanvas,
                        grid: {
                            drawBorder: false,
                            background: 'white',
                            shadow: false
                        },
                        seriesDefaults:{
                            shadow: false,
                            renderer:\$.jqplot.BarRenderer,
                            pointLabels: { show: true },
                            rendererOptions: {
                                barWidth: Math.floor(barchartWidth/(maxNbBadge+10)),
                                animation:{show:!\$.jqplot.use_excanvas}
                            }
                        },
                        axes: {
                            xaxis: {
                                label: \"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badges_number", array(), "icap_badge"), "html", null, true);
            echo "\",
                                renderer: \$.jqplot.LinearAxisRenderer,
                                tickInterval: 1,
                                numberTicks: maxNbBadge+2
                            },
                            yaxis: {
                                label: \"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_number", array(), "icap_badge"), "html", null, true);
            echo "\",
                                forceTickAt0: true
                            }
                        },
                        highlighter: { show: false }
                    });

                    \$('#badgesPerUsers').bind('jqplotDataClick',
                            function (ev, seriesIndex, pointIndex, data) {
                                \$('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
                            }
                    );

                    //On recupere le nom du badge attribué, ainsi que son nombre
                    var plot2 = \$.jqplot('repartitionBadges', [[ ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "mostAwardedBadges", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["awardedBadge"]) {
                echo " [\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["awardedBadge"], "userBadge", array()), "badge", array()), "name", array()), "html", null, true);
                echo "\",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["awardedBadge"], "awardedNumber", array()), "html", null, true);
                echo "],";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['awardedBadge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ]], {
                        grid: {
                            drawBorder: false,
                            background: 'white',
                            shadow: false
                        },
                        animate: !\$.jqplot.use_excanvas,
                        seriesDefaults:{
                            shadow: false,
                            renderer:\$.jqplot.PieRenderer,
                            rendererOptions: {
                                showDataLabels: true,
                                dataLabels: 'value',
                                padding:5
                            },
                            trendline:{
                                show: true
                            }
                        },
                        legend:{
                            show: true
                        }
                    });

                    jqplotInitialized = true;
                }
            });
        </script>

    ";
        }
    }

    public function getTemplateName()
    {
        return "IcapBadgeBundle::Template/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 150,  274 => 136,  265 => 130,  232 => 100,  197 => 74,  187 => 66,  181 => 64,  178 => 55,  174 => 54,  169 => 53,  167 => 52,  162 => 51,  159 => 50,  152 => 47,  149 => 46,  145 => 50,  142 => 49,  140 => 46,  136 => 44,  132 => 42,  130 => 41,  127 => 40,  125 => 39,  122 => 38,  119 => 37,  117 => 36,  112 => 34,  108 => 33,  104 => 31,  102 => 30,  97 => 28,  91 => 27,  84 => 22,  78 => 19,  73 => 17,  69 => 16,  66 => 15,  64 => 14,  60 => 12,  56 => 11,  49 => 10,  45 => 9,  40 => 6,  36 => 5,  29 => 4,  25 => 3,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBadgeBundle::Template/list.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/badge/Resources/views/Template/list.html.twig");
    }
}
