<?php

/* ClarolineCoreBundle:Resource:breadcrumbs.html.twig */
class __TwigTemplate_b1e336d945ee3cd48eaa09240f597751b1bcad43c2919887411997c578d15efa extends Twig_Template
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
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ancestors"]) ? $context["ancestors"] : null));
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
        foreach ($context['_seq'] as $context["keyRes"] => $context["node"]) {
            // line 2
            echo "    ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 3
                echo "        ";
                if ($this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->isDesktop()) {
                    // line 4
                    echo "            ";
                    $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_open_tool", array("toolName" => "resource_manager", "workspaceId" => (isset($context["workspaceId"]) ? $context["workspaceId"] : null)));
                    // line 5
                    echo "        ";
                } else {
                    // line 6
                    echo "            ";
                    $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open_tool", array("toolName" => "resource_manager", "workspaceId" => (isset($context["workspaceId"]) ? $context["workspaceId"] : null)));
                    // line 7
                    echo "        ";
                }
                // line 8
                echo "
        ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ancestors"]) ? $context["ancestors"] : null));
                foreach ($context['_seq'] as $context["keyPath"] => $context["pathItem"]) {
                    // line 10
                    echo "            ";
                    if (($context["keyPath"] == 0)) {
                        // line 11
                        echo "                ";
                        $context["url"] = ((isset($context["url"]) ? $context["url"] : null) . "?");
                        // line 12
                        echo "            ";
                    } else {
                        // line 13
                        echo "                ";
                        $context["url"] = ((isset($context["url"]) ? $context["url"] : null) . "&");
                        // line 14
                        echo "            ";
                    }
                    // line 15
                    echo "            ";
                    if (($context["keyPath"] < $context["keyRes"])) {
                        // line 16
                        echo "                ";
                        $context["url"] = (((isset($context["url"]) ? $context["url"] : null) . "_breadcrumbs[]=") . $this->getAttribute($context["pathItem"], "id", array()));
                        // line 17
                        echo "            ";
                    }
                    // line 18
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keyPath'], $context['pathItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "
        ";
                // line 20
                $context["url"] = (((isset($context["url"]) ? $context["url"] : null) . "#resources/") . $this->getAttribute($context["node"], "id", array()));
                // line 21
                echo "
        <li>
            <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\">
                ";
                // line 24
                if (( !$this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->isDesktop() && $this->getAttribute($context["loop"], "first", array()))) {
                    // line 25
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resources", array(), "platform"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 27
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["node"], "name", array()), "html", null, true);
                    echo "
                ";
                }
                // line 29
                echo "            </a>
        </li>
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['keyRes'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Resource:breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  113 => 27,  107 => 25,  105 => 24,  101 => 23,  97 => 21,  95 => 20,  92 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  37 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Resource:breadcrumbs.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Resource/breadcrumbs.html.twig");
    }
}
