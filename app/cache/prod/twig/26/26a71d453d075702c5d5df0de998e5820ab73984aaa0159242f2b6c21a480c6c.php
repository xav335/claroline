<?php

/* HeVinciCompetencyBundle:Competency:frameworks.html.twig */
class __TwigTemplate_fd472545f55e1f9827d248c6c5758f40155688b5af86b85f2e66f117ac3b7926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HeVinciCompetencyBundle:Competency:layout.html.twig", "HeVinciCompetencyBundle:Competency:frameworks.html.twig", 1);
        $this->blocks = array(
            'panelBody' => array($this, 'block_panelBody'),
            'panelFooter' => array($this, 'block_panelFooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HeVinciCompetencyBundle:Competency:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_panelBody($context, array $blocks = array())
    {
        // line 6
        echo "    <table id=\"framework-table\"
           class=\"table table-condensed table-bordered\"
           ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["frameworks"]) ? $context["frameworks"] : null)) == 0)) {
            echo "style=\"display: none;\"";
        }
        echo ">
        <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("framework_", array(), "competency"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("description", array(), "platform"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("scale_", array(), "competency"), "html", null, true);
        echo "</th>
                <th colspan=\"3\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "platform"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frameworks"]) ? $context["frameworks"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["framework"]) {
            // line 19
            echo "                ";
            // line 20
            $this->loadTemplate("HeVinciCompetencyBundle:Competency:frameworkRow.html.twig", "HeVinciCompetencyBundle:Competency:frameworks.html.twig", 20)->display(array_merge($context, array("id" => $this->getAttribute(            // line 22
$context["framework"], "getId", array(), "method"), "name" => $this->getAttribute(            // line 23
$context["framework"], "getName", array(), "method"), "scale" => $this->getAttribute($this->getAttribute(            // line 24
$context["framework"], "getScale", array(), "method"), "getName", array(), "method"), "description" => $this->getAttribute(            // line 25
$context["framework"], "getDescription", array(), "method"))));
            // line 28
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['framework'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    ";
        // line 32
        if ((twig_length_filter($this->env, (isset($context["frameworks"]) ? $context["frameworks"] : null)) == 0)) {
            // line 33
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <i class=\"fa fa-info-circle\"></i>
            <span id=\"status-info\">
                ";
            // line 36
            if ((isset($context["hasScales"]) ? $context["hasScales"] : null)) {
                // line 37
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.no_frame", array(), "competency"), "html", null, true);
                echo "
                ";
            } else {
                // line 39
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.no_frame_no_scale", array(), "competency"), "html", null, true);
                echo "
                ";
            }
            // line 41
            echo "            </span>
        </div>
    ";
        }
    }

    // line 46
    public function block_panelFooter($context, array $blocks = array())
    {
        // line 47
        echo "    <button id=\"create-framework\" class=\"btn btn-primary\">
        ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("framework.create", array(), "competency"), "html", null, true);
        echo "
    </button>
    <button id=\"import-framework\" class=\"btn btn-primary\">
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("framework.import", array(), "competency"), "html", null, true);
        echo "
    </button>
    <button id=\"create-first-scale\" class=\"btn btn-primary\" ";
        // line 53
        echo (((isset($context["hasScales"]) ? $context["hasScales"] : null)) ? ("style=\"display: none\"") : (""));
        echo ">
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("scale.create", array(), "competency"), "html", null, true);
        echo "
    </button>
    <a id=\"manage-scales\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hevinci_scales");
        echo "\" class=\"btn btn-primary\" ";
        echo (( !(isset($context["hasScales"]) ? $context["hasScales"] : null)) ? ("style=\"display: none\"") : (""));
        echo ">
        ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manage_scales", array(), "competency"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "HeVinciCompetencyBundle:Competency:frameworks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  161 => 56,  156 => 54,  152 => 53,  147 => 51,  141 => 48,  138 => 47,  135 => 46,  128 => 41,  122 => 39,  116 => 37,  114 => 36,  109 => 33,  107 => 32,  102 => 29,  88 => 28,  86 => 25,  85 => 24,  84 => 23,  83 => 22,  82 => 20,  80 => 19,  63 => 18,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  36 => 8,  32 => 6,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HeVinciCompetencyBundle:Competency:frameworks.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/competency/Resources/views/Competency/frameworks.html.twig");
    }
}
