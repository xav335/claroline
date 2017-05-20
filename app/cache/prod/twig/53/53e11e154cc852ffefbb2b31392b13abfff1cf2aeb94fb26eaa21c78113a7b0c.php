<?php

/* ClarolineCoreBundle:Log:resource_by_type_chart.html.twig */
class __TwigTemplate_7c86101d528425ee817d3565f4d722f5b0307b706c1ec4c8864cdcc90ad4fb91 extends Twig_Template
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
    .pie-chart{
        ";
        // line 3
        if (( !array_key_exists("chartHeight", $context) || twig_test_empty((isset($context["chartHeight"]) ? $context["chartHeight"] : null)))) {
            // line 4
            echo "        height:600px;
        ";
        } else {
            // line 6
            echo "        height: ";
            echo twig_escape_filter($this->env, (isset($context["chartHeight"]) ? $context["chartHeight"] : null), "html", null, true);
            echo "px;
        ";
        }
        // line 8
        echo "    }
</style>
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/css/common/jqplot/jquery.jqplot.css"), "html", null, true);
        echo "\" type=\"text/css\" />

";
        // line 12
        if (( !array_key_exists("filesImported", $context) || twig_test_empty((isset($context["filesImported"]) ? $context["filesImported"] : null)))) {
            // line 13
            echo "    ";
            $this->loadTemplate("ClarolineCoreBundle:Layout:jqplot_script.html.twig", "ClarolineCoreBundle:Log:resource_by_type_chart.html.twig", 13)->display($context);
            // line 14
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/jqplot/jqplot.colors.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jqPlot/src/plugins/jqplot.pieRenderer.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jqPlot/src/plugins/jqplot.canvasTextRenderer.js"), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 18
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/jqPlot/src/plugins/jqplot.pieRenderer.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 20
        echo "
<div id=\"analytics-resources-piechart\" class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-pie-chart\"></i>
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources_usage_ratio", array(), "platform"), "html", null, true);
        echo "
    </div>
    <div id=\"collapse-piechart\" class=\"panel-body\">
        <div id=\"container-piechart\">
            <div id=\"resources-pie-chart\" class=\"pie-chart\"></div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    var pieChartData = [];

    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resourceCount"]) ? $context["resourceCount"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 36
            echo "        pieChartData.push([\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["resource"], "name", array()), array(), "resource"), "html", null, true);
            echo "\",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "total", array()), "html", null, true);
            echo "]);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    var bg_color = 'transparent';
    var numberRows = 7;

    ";
        // line 42
        if ((array_key_exists("numberRows", $context) &&  !twig_test_empty((isset($context["numberRows"]) ? $context["numberRows"] : null)))) {
            // line 43
            echo "        numberRows = ";
            echo twig_escape_filter($this->env, (isset($context["numberRows"]) ? $context["numberRows"] : null), "html", null, true);
            echo ";
    ";
        }
        // line 45
        echo "
    \$(document).ready(function(){
        if (pieChartData.length>0) {
            \$.jqplot(
                'resources-pie-chart',
                [pieChartData],
                {
                    grid: {
                        drawBorder: false,
                        shadow: false,
                        background: bg_color,
                        useNegativeColors: false
                    },
                    seriesDefaults: {
                        show: true,
                        showMarker: true,
                        renderer: \$.jqplot.PieRenderer,
                        rendererOptions: {
                            showDataLabels: true,
                            dataLabelThreshold: 2,
                            dataLabels: 'percent',
                            sliceMargin: 0.3,
                            dataLabelFormatString: '%.1f%%',
                            highlightMouseOver: false
                        },
                        shadow: false
                    },
                    legend: {
                        location: 's',
                        border: 'none',
                        renderer: \$.jqplot.CanvasTextRenderer,
                        show: true,
                        showMarker: true,
                        rendererOptions: {
                            numberRows: numberRows
                        },
                        backgroundColor: bg_color,
                        placement: 'outsideGrid'
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
        return "ClarolineCoreBundle:Log:resource_by_type_chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  112 => 43,  110 => 42,  104 => 38,  93 => 36,  89 => 35,  75 => 24,  69 => 20,  63 => 18,  58 => 16,  54 => 15,  49 => 14,  46 => 13,  44 => 12,  39 => 10,  35 => 8,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Log:resource_by_type_chart.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Log/resource_by_type_chart.html.twig");
    }
}
