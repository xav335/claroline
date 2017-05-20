<?php

/* IcapBadgeBundle:Template:list_badges_claim.html.twig */
class __TwigTemplate_444ccda6a725bf516e0dcc861755db04dc417152fcd450acc7b8e6369b6ee7da extends Twig_Template
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
        if ((0 < twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)))) {
            // line 2
            echo "    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#claimedBadges\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("badge_current_claimed_badges_manage", twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null)), array("%claimedBadgeCount%" => twig_length_filter($this->env, (isset($context["claimPager"]) ? $context["claimPager"] : null))), "icap_badge"), "html", null, true);
            echo "
            </a>
        </div>
        <div id=\"claimedBadges\" class=\"panel-collapse collapse\">
            <div class=\"panel-body\">
                <div class=\"table-responsive\">
                    <table class=\"table no_margin claim_list\">
                        <thead>
                            <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge", array(), "icap_badge"), "html", null, true);
            echo "</th>
                            <th>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user", array(), "platform"), "html", null, true);
            echo "</th>
                            <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claim_date", array(), "icap_badge"), "html", null, true);
            echo "</th>
                            <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_check_state", array(), "icap_badge"), "html", null, true);
            echo "</th>
                            <th>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "icap_badge"), "html", null, true);
            echo "</th>
                        </thead>
                        <tbody>
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["claimPager"]) ? $context["claimPager"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["badgeClaim"]) {
                // line 21
                echo "                            <tr>
                                <td><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_badge_view_badge", array("slug" => $this->getAttribute($this->getAttribute($context["badgeClaim"], "badge", array()), "slug", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["badgeClaim"], "badge", array()), "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["badgeClaim"], "badge", array()), "name", array()), "html", null, true);
                echo "</a></td>
                                <td><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_public_profile_view", array("publicUrl" => $this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "publicUrl", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "lastname", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "lastname", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["badgeClaim"], "claimedAt", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date_format", array(), "platform")), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 26
                if ($this->getAttribute($this->getAttribute($context["badgeClaim"], "badge", array()), "hasRules", array())) {
                    // line 27
                    echo "                                        ";
                    if ((false == $this->getAttribute((isset($context["badgeRuleChecker"]) ? $context["badgeRuleChecker"] : null), "validate", array(0 => $this->getAttribute($context["badgeClaim"], "badge", array()), 1 => $this->getAttribute($context["badgeClaim"], "user", array())), "method"))) {
                        // line 28
                        echo "                                        <span class=\"fa fa-exclamation-circle\" data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_rules_not_respected", array(), "icap_badge"), "html", null, true);
                        echo "\"></span>
                                        ";
                    } else {
                        // line 30
                        echo "                                        <span class=\"fa fa-check-circle\" data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_rules_respected", array(), "icap_badge"), "html", null, true);
                        echo "\"></span>
                                        ";
                    }
                    // line 32
                    echo "                                        (<span class=\"text-muted\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_rules_respected_state", array(), "icap_badge"), "html", null, true);
                    echo "\">détails</span>)
                                    ";
                } else {
                    // line 34
                    echo "                                        <span class=\"fa fa-exclamation-triangle\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_no_rules_check_manually", array(), "icap_badge"), "html", null, true);
                    echo "\"></span>
                                    ";
                }
                // line 36
                echo "                                </td>
                                <td>
                                    <div class=\"btn-group\">
                                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "claim_link", array()), twig_array_merge(array("id" => $this->getAttribute($context["badgeClaim"], "id", array()), "validate" => true), $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success confirm\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_validate_award", array(), "icap_badge"), "html", null, true);
                echo "\" data-confirm-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_award_confirm_title", array(), "icap_badge"), "html", null, true);
                echo "\" data-confirm-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_award_confirm_message", array("%badgeName%" => $this->getAttribute($this->getAttribute($context["badgeClaim"], "badge", array()), "name", array()), "%user%" => (($this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "lastname", array()))), "icap_badge"), "html", null, true);
                echo "\" data-confirm-ok=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("award", array(), "icap_badge"), "html", null, true);
                echo "\" data-confirm-cancel=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
                echo "\" data-confirm-style=\"success\" role=\"button\">
                                            ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_validate_award_short", array(), "icap_badge"), "html", null, true);
                echo "
                                        </a>
                                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "claim_link", array()), twig_array_merge(array("id" => $this->getAttribute($context["badgeClaim"], "id", array()), "validate" => false), $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger confirm\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_reject_award", array(), "icap_badge"), "html", null, true);
                echo "\" data-confirm-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_dont_award_confirm_title", array(), "icap_badge"), "html", null, true);
                echo "\" data-confirm-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_dont_award_confirm_message", array("%badgeName%" => $this->getAttribute($this->getAttribute($context["badgeClaim"], "badge", array()), "name", array()), "%user%" => (($this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute($context["badgeClaim"], "user", array()), "lastname", array()))), "icap_badge"), "html", null, true);
                echo "\" data-confirm-ok=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dont_award", array(), "icap_badge"), "html", null, true);
                echo "\" data-confirm-cancel=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
                echo "\" data-confirm-style=\"danger\" role=\"button\">
                                            ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_reject_award_short", array(), "icap_badge"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 49
                echo "                            <tr>
                                <td colspan=\"5\">";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_badge_claim", array(), "icap_badge"), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badgeClaim'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        </tbody>
                    </table>
                </div>
                <ul class=\"list-inline pull-right\">
                    <li class=\"text-muted\"><small><span class=\"fa fa-exclamation-circle\"></span> ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_rules_not_respected", array(), "icap_badge"), "html", null, true);
            echo "</small></li>
                    <li class=\"text-muted\"><small><span class=\"fa fa-check-circle\"></span> ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_rules_respected", array(), "icap_badge"), "html", null, true);
            echo "</small></li>
                    <li class=\"text-muted\"><small><span class=\"fa fa-exclamation-triangle\"></span> ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("badge_no_rules_check_manually", array(), "icap_badge"), "html", null, true);
            echo "</small></li>
                </ul>
                ";
            // line 61
            if ($this->getAttribute((isset($context["claimPager"]) ? $context["claimPager"] : null), "haveToPaginate", array())) {
                // line 62
                echo "                <div>
                    ";
                // line 63
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 65
(isset($context["claimPager"]) ? $context["claimPager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => $this->getAttribute(                // line 69
(isset($context["parameters"]) ? $context["parameters"] : null), "current_link", array()), "routeParams" => $this->getAttribute(                // line 70
(isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()), "pageParameter" => "[claimPage]"));
                // line 74
                echo "
                </div>
                ";
            }
            // line 77
            echo "            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "IcapBadgeBundle:Template:list_badges_claim.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 77,  211 => 74,  209 => 70,  208 => 69,  207 => 65,  206 => 63,  203 => 62,  201 => 61,  196 => 59,  192 => 58,  188 => 57,  182 => 53,  173 => 50,  170 => 49,  159 => 43,  145 => 42,  140 => 40,  126 => 39,  121 => 36,  115 => 34,  109 => 32,  103 => 30,  97 => 28,  94 => 27,  92 => 26,  87 => 24,  75 => 23,  67 => 22,  64 => 21,  59 => 20,  53 => 17,  49 => 16,  45 => 15,  41 => 14,  37 => 13,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBadgeBundle:Template:list_badges_claim.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/badge/Resources/views/Template/list_badges_claim.html.twig");
    }
}
