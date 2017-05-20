<?php

/* IcapBadgeBundle:Template:list_badges.html.twig */
class __TwigTemplate_f28e0612a90599baec648ad26926a38a3113ca3956c5ec3f5f2c097b97efc406 extends Twig_Template
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
        echo "<div class=\"col-md-12 list_badges\">
    <ul class=\"list-inline my_badges badge_list\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["badgePager"]) ? $context["badgePager"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 4
            echo "
            ";
            // line 5
            $context["vars"] = array("link" => $this->getAttribute($this->getAttribute(            // line 6
(isset($context["parameters"]) ? $context["parameters"] : null), "edit_link", array()), "url", array()), "route_params" => $this->getAttribute(            // line 7
(isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()), "aside" => false, "badgeId" => $this->getAttribute(            // line 9
$context["badge"], "id", array()), "dataImage" => (((("<img class=\"badge_image_mini\" src=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(            // line 10
$context["badge"], "webPath", array()))) . "\" alt=\"") . $this->getAttribute($context["badge"], "name", array())) . "\" />"));
            // line 12
            echo "            ";
            $this->loadTemplate("IcapBadgeBundle:Template:list_badges_shared.html.twig", "IcapBadgeBundle:Template:list_badges.html.twig", 12)->display(array_merge($context, (isset($context["vars"]) ? $context["vars"] : null)));
            // line 13
            echo "
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <li class=\"node-thumbnail node\">
                ";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_badges_create_to_motivate", array("%url%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "add_link", array()), $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()))), "icap_badge");
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>

    ";
        // line 21
        if ($this->getAttribute((isset($context["badgePager"]) ? $context["badgePager"] : null), "haveToPaginate", array())) {
            // line 22
            echo "        <div>
            ";
            // line 23
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(            // line 25
(isset($context["badgePager"]) ? $context["badgePager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => $this->getAttribute(            // line 29
(isset($context["parameters"]) ? $context["parameters"] : null), "current_link", array()), "routeParams" => $this->getAttribute(            // line 30
(isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()), "pageParameter" => "[badgePage]"));
            // line 34
            echo "
        </div>
    ";
        }
        // line 37
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "IcapBadgeBundle:Template:list_badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 34,  91 => 30,  90 => 29,  89 => 25,  88 => 23,  85 => 22,  83 => 21,  79 => 19,  70 => 16,  67 => 15,  53 => 13,  50 => 12,  48 => 10,  47 => 9,  46 => 7,  45 => 6,  44 => 5,  41 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBadgeBundle:Template:list_badges.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/badge/Resources/views/Template/list_badges.html.twig");
    }
}
