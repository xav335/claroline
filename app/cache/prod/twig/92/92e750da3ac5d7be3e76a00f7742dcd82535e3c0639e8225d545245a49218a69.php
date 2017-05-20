<?php

/* ClarolineCoreBundle:Form:date_range.html.twig */
class __TwigTemplate_9ed31a971f4e8bd412a7690e0e25e6375435d8aec9128ad8b13130148baacf8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle::form_theme.html.twig", "ClarolineCoreBundle:Form:date_range.html.twig", 1);
        $this->blocks = array(
            'daterange_widget' => array($this, 'block_daterange_widget'),
            'daterange_assets' => array($this, 'block_daterange_assets'),
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
    public function block_daterange_widget($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"input-group input-group-sm\">
            ";
        // line 6
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span>
        </div>
        ";
        // line 9
        $this->displayBlock('daterange_assets', $context, $blocks);
        // line 15
        echo "        <script type=\"text/javascript\">
            var schoolYear = moment().month()>=8?moment().year():moment().subtract(1, 'year').year();
            var possibleRanges = {
                'today': {
                    'value': [
                        moment(),
                        moment()
                    ],
                    'label': '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.today", array(), "platform"), "html", null, true);
        echo "'
                },
                'yesterday': {
                    'value': [
                        moment().subtract(1, 'days'),
                        moment().subtract(1, 'days')
                    ],
                    'label': '";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.yesterday", array(), "platform"), "html", null, true);
        echo "'
                },
                'this_week': {
                    'value': [
                        moment().day(";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.first_day", array(), "platform");
        echo "),
                        moment().day(";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.first_day", array(), "platform");
        echo " + 6)
                    ],
                    'label': '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.this_week", array(), "platform"), "html", null, true);
        echo "'
                },
                'last_week': {
                    'value': [
                        moment().day(";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.first_day", array(), "platform");
        echo ").subtract(7, 'days'),
                        moment().day(";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.first_day", array(), "platform");
        echo " + 6).subtract(7, 'days')
                    ],
                    'label': '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.last_week", array(), "platform"), "html", null, true);
        echo "'
                },
                'this_month': {
                    'value': [
                        moment().startOf('month'),
                        moment().endOf('month')
                    ],
                    'label': '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.this_month", array(), "platform"), "html", null, true);
        echo "'
                },
                'last_month': {
                    'value': [
                        moment().subtract(1, 'month').startOf('month'),
                        moment().subtract(1, 'month').endOf('month')
                    ],
                    'label': '";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.last_month", array(), "platform"), "html", null, true);
        echo "'
                },
                'this_year': {
                    'value': [
                        moment().startOf('year'),
                        moment().endOf('year')
                    ],
                    'label': '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.this_year", array(), "platform"), "html", null, true);
        echo "'
                },
                'last_year': {
                    'value': [
                        moment().subtract(1, 'year').startOf('year'),
                        moment().subtract(1, 'year').endOf('year')
                    ],
                    'label': '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.last_year", array(), "platform"), "html", null, true);
        echo "'
                },
                'this_school_year': {
                    'value': [
                        moment().month(8).year(schoolYear).startOf('month'),
                        moment().month(8).year(schoolYear).endOf('month').add(1, 'year').subtract(1, 'month')
                    ],
                    'label': '";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.this_school_year", array(), "platform"), "html", null, true);
        echo "'
                },
                'last_school_year': {
                    'value': [
                        moment().month(8).year(schoolYear).startOf('month').subtract(1, 'year'),
                        moment().month(8).year(schoolYear).endOf('month').subtract(1, 'month')
                    ],
                    'label': '";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.last_school_year", array(), "platform"), "html", null, true);
        echo "'
                },
                'last_seven_days': {
                    'value': [
                        moment().subtract(6, 'days'),
                        moment()
                    ],
                    'label': '";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.last_seven_days", array(), "platform"), "html", null, true);
        echo "'
                },
                'last_thirty_days': {
                    'value': [
                        moment().subtract(29, 'days'),
                        moment()
                    ],
                    'label': '";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.last_thirty_days", array(), "platform"), "html", null, true);
        echo "'
                }
            };

            var ranges = {};

            ";
        // line 106
        if (array_key_exists("chosenRangeKeys", $context)) {
            // line 107
            echo "                var chosenRangeKeys = ";
            echo (isset($context["chosenRangeKeys"]) ? $context["chosenRangeKeys"] : null);
            echo ";
            ";
        } else {
            // line 109
            echo "                var chosenRangeKeys = ['yesterday', 'last_seven_days', 'this_month', 'last_month'];
            ";
        }
        // line 111
        echo "
            for (var i in chosenRangeKeys) {
                var key = chosenRangeKeys[i];
                var range = possibleRanges[key];
                ranges[range.label] = range.value;
            }

            \$(document).ready(function() {
                \$(\"#";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\").daterangepicker({
                    ranges: ranges,
                    separator: \"";
        // line 121
        echo twig_escape_filter($this->env, ((" " . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.separator", array(), "platform")) . " "), "html", null, true);
        echo "\",
                    clearClass: 'btn hide',
                    locale: {
                        format: \"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.js_format", array(), "platform"), "html", null, true);
        echo "\",
                        applyLabel: \"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.apply", array(), "platform"), "html", null, true);
        echo "\",
                        clearLabel: \"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.clear", array(), "platform"), "html", null, true);
        echo "\",
                        fromLabel: \"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.from", array(), "platform"), "html", null, true);
        echo "\",
                        toLabel: \"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.to", array(), "platform"), "html", null, true);
        echo "\",
                        weekLabel: \"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.week", array(), "platform"), "html", null, true);
        echo "\",
                        customRangeLabel: \"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.custom_range", array(), "platform"), "html", null, true);
        echo "\",
                        daysOfWeek: ";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.day_names", array(), "platform");
        echo ",
                        monthNames: ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.month_names", array(), "platform");
        echo ",
                        firstDay: ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_range.first_day", array(), "platform");
        echo "
                    }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_daterange_assets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" screen=\"media\" />
            <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/Datejs/build/date.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/moment/min/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Form:date_range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 13,  279 => 12,  275 => 11,  270 => 10,  267 => 9,  256 => 133,  252 => 132,  248 => 131,  244 => 130,  240 => 129,  236 => 128,  232 => 127,  228 => 126,  224 => 125,  220 => 124,  214 => 121,  209 => 119,  199 => 111,  195 => 109,  189 => 107,  187 => 106,  178 => 100,  168 => 93,  158 => 86,  148 => 79,  138 => 72,  128 => 65,  118 => 58,  108 => 51,  98 => 44,  93 => 42,  89 => 41,  82 => 37,  77 => 35,  73 => 34,  66 => 30,  56 => 23,  46 => 15,  44 => 9,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Form:date_range.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Form/date_range.html.twig");
    }
}
