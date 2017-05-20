<?php

/* IcapBadgeBundle:Template:list_users.html.twig */
class __TwigTemplate_5a14ecc4284d9b872053f1ce584ae10e7edac1ea828edc1eaa5f21c41c8f1ad8 extends Twig_Template
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
        if ((0 < twig_length_filter($this->env, (isset($context["userPager"]) ? $context["userPager"] : null)))) {
            // line 2
            echo "    <table class=\"table user_badge_list\">
        <thead>
            <th class=\"username\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
            echo "</th>
            <th>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("awarded_badges", array(), "icap_badge"), "html", null, true);
            echo "</th>
        </thead>
        <tbody>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userPager"]) ? $context["userPager"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 9
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_public_profile_view", array("publicUrl" => $this->getAttribute($context["user"], "getPublicUrl", array(), "method"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "lastName", array()) . " ") . $this->getAttribute($context["user"], "firstName", array())), "html", null, true);
                echo "</a>
                    </td>
                    <td>
                       <ul class=\"list-inline user_badge\">
                       ";
                // line 15
                if ($this->getAttribute((isset($context["badges"]) ? $context["badges"] : null), $this->getAttribute($context["user"], "id", array()), array(), "array", true, true)) {
                    // line 16
                    echo "                           ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["badges"]) ? $context["badges"] : null), $this->getAttribute($context["user"], "id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                        // line 17
                        echo "                               <li>
                                    <a href=\"";
                        // line 18
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "edit_link", array()), "url", array()), twig_array_merge(array("slug" => $this->getAttribute($context["badge"], "slug", array())), $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()))), "html", null, true);
                        echo "\"
                                       title=\"";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "name", array()), "html", null, true);
                        echo "\"
                                       style=\"background-image: url(";
                        // line 20
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["badge"], "webPath", array()))), "html", null, true);
                        echo ");\"
                                       class=\"img_container\">
                                    </a>
                               </li>
                           ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                       ";
                }
                // line 26
                echo "                       </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </tbody>
    </table>
    ";
            // line 32
            if ($this->getAttribute((isset($context["userPager"]) ? $context["userPager"] : null), "haveToPaginate", array())) {
                // line 33
                echo "        <div>
            ";
                // line 34
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 36
(isset($context["userPager"]) ? $context["userPager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => $this->getAttribute(                // line 40
(isset($context["parameters"]) ? $context["parameters"] : null), "current_link", array()), "routeParams" => $this->getAttribute(                // line 41
(isset($context["parameters"]) ? $context["parameters"] : null), "route_parameters", array()), "pageParameter" => "[userPage]", "queryString" => "#!users"));
                // line 46
                echo "
        </div>
    ";
            }
        } else {
            // line 50
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_user_subscribed_to_workspace", array(), "icap_badge"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "IcapBadgeBundle:Template:list_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  107 => 46,  105 => 41,  104 => 40,  103 => 36,  102 => 34,  99 => 33,  97 => 32,  93 => 30,  84 => 26,  81 => 25,  70 => 20,  66 => 19,  62 => 18,  59 => 17,  54 => 16,  52 => 15,  43 => 11,  39 => 9,  35 => 8,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBadgeBundle:Template:list_users.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/badge/Resources/views/Template/list_users.html.twig");
    }
}
