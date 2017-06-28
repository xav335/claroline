<?php

/* ClarolineCoreBundle:Activity:displayActivityEvaluation.html.twig */
class __TwigTemplate_541377de66e72e4331333410ab4d15f98e7810aa45695c10cc993598b5215a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"activity-evaluation-display-element\">
    <div class=\"table-responsive\">
        <table class=\"table\">
            <tr>
                <th class=\"center-text\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("status", array(), "platform"), "html", null, true);
        echo "</th>
                <th class=\"center-text\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total_time", array(), "platform"), "html", null, true);
        echo "</th>
                <th class=\"center-text\"
                    ";
        // line 8
        if (( !twig_test_empty((isset($context["ruleScore"]) ? $context["ruleScore"] : null)) && (isset($context["isResultVisible"]) ? $context["isResultVisible"] : null))) {
            // line 9
            echo "                        data-container=\"#activity-evaluation-display-element\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
            // line 12
            echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passing_score", array(), "platform") . " : ") . (isset($context["ruleScore"]) ? $context["ruleScore"] : null)), "html", null, true);
            echo "\"
                    ";
        }
        // line 14
        echo "                >
                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("best_score", array(), "platform"), "html", null, true);
        echo "
                </th>
                <th class=\"center-text\"
                    data-container=\"#activity-evaluation-display-element\"
                    data-toggle=\"tooltip\"
                    data-placement=\"top\"
                    title=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("number_of_attempts_explanation", array(), "platform"), "html", null, true);
        echo "\"
                >
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("number_of_attempts", array(), "platform"), "html", null, true);
        echo "
                </th>
                <th class=\"center-text\"
                    data-container=\"#activity-evaluation-display-element\"
                    data-toggle=\"tooltip\"
                    data-placement=\"top\"
                    title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_evaluation_explanation", array(), "platform"), "html", null, true);
        echo "\"
                >
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation", array(), "platform"), "html", null, true);
        echo "
                </th>
                <th class=\"center-text\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("comment", array(), "platform"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td class=\"center-text\">
                    ";
        // line 37
        if ( !twig_test_empty($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getStatus", array(), "method"))) {
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getStatus", array(), "method"), array(), "platform"), "html", null, true);
            echo "
                    ";
        } elseif (( !twig_test_empty($this->getAttribute(        // line 39
(isset($context["activityParameters"]) ? $context["activityParameters"] : null), "getEvaluationType", array(), "method")) && ($this->getAttribute(        // line 40
(isset($context["activityParameters"]) ? $context["activityParameters"] : null), "getEvaluationType", array(), "method") == "automatic"))) {
            // line 42
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("not_attempted", array(), "platform"), "html", null, true);
            echo "
                    ";
        } else {
            // line 44
            echo "                        -
                    ";
        }
        // line 46
        echo "                </td>
                <td class=\"center-text\">
                    ";
        // line 48
        if ( !twig_test_empty($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getAttemptsDuration", array(), "method"))) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getAttemptsDuration", array(), "method"), "html", null, true);
            echo "
                    ";
        } else {
            // line 51
            echo "                        -
                    ";
        }
        // line 53
        echo "                </td>
                <td class=\"center-text\">
                    ";
        // line 55
        if ( !twig_test_empty($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getNumScore", array(), "method"))) {
            // line 56
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getNumScore", array(), "method"), "html", null, true);
            echo "
                        ";
            // line 57
            if ( !twig_test_empty($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getScoreMax", array(), "method"))) {
                // line 58
                echo "                            / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getScoreMax", array(), "method"), "html", null, true);
                echo "
                        ";
            }
            // line 60
            echo "                    ";
        } else {
            // line 61
            echo "                        -
                    ";
        }
        // line 63
        echo "                </td>
                <td class=\"center-text\">
                    ";
        // line 65
        if ( !twig_test_empty($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getAttemptsCount", array(), "method"))) {
            // line 66
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getAttemptsCount", array(), "method"), "html", null, true);
            echo "
                    ";
        } else {
            // line 68
            echo "                        -
                    ";
        }
        // line 70
        echo "                </td>
                <td class=\"center-text\">
                    ";
        // line 72
        if ( !twig_test_empty($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getScore", array(), "method"))) {
            // line 73
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getScore", array(), "method"), "html", null, true);
            echo "
                    ";
        } else {
            // line 75
            echo "                        -
                    ";
        }
        // line 77
        echo "                </td>
                <td class=\"center-text\">
                    ";
        // line 79
        if ( !twig_test_empty($this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getComment", array(), "method"))) {
            // line 80
            echo "                        <i class=\"fa fa-comment-o pointer-hand display-comment\"
                            data-container=\"#activity-evaluation-display-element\"
                            data-toggle=\"popover\"
                            data-placement=\"left\"
                            data-content=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evaluation"]) ? $context["evaluation"] : null), "getComment", array(), "method"), "html", null, true);
            echo "\"
                        ></i>
                    ";
        } else {
            // line 87
            echo "                        -
                    ";
        }
        // line 89
        echo "                </td>
            </tr>
        </table>
    </div>
    
    ";
        // line 94
        if ((twig_length_filter($this->env, (isset($context["pastEvals"]) ? $context["pastEvals"] : null)) > 0)) {
            // line 95
            echo "        <hr>
        <h4>";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("attempts", array(), "platform"), "html", null, true);
            echo "</h4>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <tr>
                    <th class=\"center-text\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date", array(), "platform"), "html", null, true);
            echo "</th>
                    <th class=\"center-text\">";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("status", array(), "platform"), "html", null, true);
            echo "</th>
                    <th class=\"center-text\">";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("duration", array(), "platform"), "html", null, true);
            echo "</th>
                    <th class=\"center-text\"
                        ";
            // line 104
            if (( !twig_test_empty((isset($context["ruleScore"]) ? $context["ruleScore"] : null)) && (isset($context["isResultVisible"]) ? $context["isResultVisible"] : null))) {
                // line 105
                echo "                            data-container=\"#activity-evaluation-display-element\"
                            data-toggle=\"tooltip\"
                            data-placement=\"top\"
                            title=\"";
                // line 108
                echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("passing_score", array(), "platform") . " : ") . (isset($context["ruleScore"]) ? $context["ruleScore"] : null)), "html", null, true);
                echo "\"
                        ";
            }
            // line 110
            echo "                    >
                        ";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("score", array(), "platform"), "html", null, true);
            echo "
                    </th>
                    <th class=\"center-text\"
                        data-container=\"#activity-evaluation-display-element\"
                        data-toggle=\"tooltip\"
                        data-placement=\"top\"
                        title=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manual_evaluation_explanation", array(), "platform"), "html", null, true);
            echo "\"
                    >
                        ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("evaluation", array(), "platform"), "html", null, true);
            echo "
                    </th>
                    <th class=\"center-text\">";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("comment", array(), "platform"), "html", null, true);
            echo "</th>
                </tr>
                
                ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pastEvals"]) ? $context["pastEvals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["eval"]) {
                // line 125
                echo "                    <tr>
                        <td class=\"center-text\">";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\DateFormatterExtension')->intlDateFormat($this->getAttribute($context["eval"], "getDate", array(), "method")), "html", null, true);
                echo "</td>
                        <td class=\"center-text\">";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["eval"], "getStatus", array(), "method"), array(), "platform"), "html", null, true);
                echo "</td>
                        <td class=\"center-text\">
                            ";
                // line 129
                if ( !twig_test_empty($this->getAttribute($context["eval"], "getDuration", array(), "method"))) {
                    // line 130
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["eval"], "getDuration", array(), "method"), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 132
                    echo "                                -
                            ";
                }
                // line 134
                echo "                        </td>
                        <td class=\"center-text\">
                            ";
                // line 136
                if ( !twig_test_empty($this->getAttribute($context["eval"], "getNumScore", array(), "method"))) {
                    // line 137
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["eval"], "getNumScore", array(), "method"), "html", null, true);
                    echo "
                                ";
                    // line 138
                    if ( !twig_test_empty($this->getAttribute($context["eval"], "getScoreMax", array(), "method"))) {
                        // line 139
                        echo "                                    / ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["eval"], "getScoreMax", array(), "method"), "html", null, true);
                        echo "
                                ";
                    }
                    // line 141
                    echo "                            ";
                } else {
                    // line 142
                    echo "                                -
                            ";
                }
                // line 144
                echo "                        </td>
                        <td class=\"center-text\">
                            ";
                // line 146
                if ( !twig_test_empty($this->getAttribute($context["eval"], "getScore", array(), "method"))) {
                    // line 147
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["eval"], "getScore", array(), "method"), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 149
                    echo "                                -
                            ";
                }
                // line 151
                echo "                        </td>
                        <td class=\"center-text\">
                            ";
                // line 153
                if ( !twig_test_empty($this->getAttribute($context["eval"], "getComment", array(), "method"))) {
                    // line 154
                    echo "                                <i class=\"fa fa-comment-o pointer-hand display-comment\"
                                    data-container=\"#activity-evaluation-display-element\"
                                    data-toggle=\"popover\"
                                    data-placement=\"left\"
                                    data-content=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($context["eval"], "getComment", array(), "method"), "html", null, true);
                    echo "\"
                                ></i>
                            ";
                } else {
                    // line 161
                    echo "                                -
                            ";
                }
                // line 163
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eval'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "            </table>
        </div>
    ";
        }
        // line 169
        echo "    
</div>

";
        // line 172
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 173
        echo "    <script>
        \$('.display-comment').popover();
    </script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Activity:displayActivityEvaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 173,  388 => 172,  383 => 169,  378 => 166,  370 => 163,  366 => 161,  360 => 158,  354 => 154,  352 => 153,  348 => 151,  344 => 149,  338 => 147,  336 => 146,  332 => 144,  328 => 142,  325 => 141,  319 => 139,  317 => 138,  312 => 137,  310 => 136,  306 => 134,  302 => 132,  296 => 130,  294 => 129,  289 => 127,  285 => 126,  282 => 125,  278 => 124,  272 => 121,  267 => 119,  262 => 117,  253 => 111,  250 => 110,  245 => 108,  240 => 105,  238 => 104,  233 => 102,  229 => 101,  225 => 100,  218 => 96,  215 => 95,  213 => 94,  206 => 89,  202 => 87,  196 => 84,  190 => 80,  188 => 79,  184 => 77,  180 => 75,  174 => 73,  172 => 72,  168 => 70,  164 => 68,  158 => 66,  156 => 65,  152 => 63,  148 => 61,  145 => 60,  139 => 58,  137 => 57,  132 => 56,  130 => 55,  126 => 53,  122 => 51,  116 => 49,  114 => 48,  110 => 46,  106 => 44,  100 => 42,  98 => 40,  97 => 39,  92 => 38,  90 => 37,  83 => 33,  78 => 31,  73 => 29,  64 => 23,  59 => 21,  50 => 15,  47 => 14,  42 => 12,  37 => 9,  35 => 8,  30 => 6,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Activity:displayActivityEvaluation.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Activity/displayActivityEvaluation.html.twig");
    }
}
