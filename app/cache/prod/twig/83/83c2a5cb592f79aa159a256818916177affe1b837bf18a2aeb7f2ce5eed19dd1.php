<?php

/* ClarolineCoreBundle:Administration\Parameters:appearanceForm.html.twig */
class __TwigTemplate_1ef7c2cf780b4ee7033b66ba10ad783694117ede81a255613560100b22342625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "ClarolineCoreBundle:Administration\\Parameters:appearanceForm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("appearance", array(), "platform"))), "html", null, true);
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 7
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "fa fa-cog", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("administration", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parameters", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index")), 2 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("appearance", array(), "platform"), "href" => ""))), "method"), "html", null, true);
        // line 22
        echo "
";
    }

    // line 25
    public function block_section_content($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("platform_appearance", array(), "platform"), "html", null, true);
        echo "</h3>
    </div>
    <form role=\"form\" class=\"form-horizontal\" action=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_parameters_appearance");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_appearance"]) ? $context["form_appearance"] : null), 'enctype');
        echo " id=\"form_settings\" enctype='multipart/form-data'>
        <div class=\"panel-body\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form_appearance"]) ? $context["form_appearance"] : null), 'widget');
        echo "
            <div class=\"form-group row\">
                <div class=\"col-md-9 col-md-offset-3\">
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_theme_list");
        echo "\"><i class=\"fa fa-pencil-square-o\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("theme_management", array(), "theme"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"form-group row\">
                <label class=\"control-label col-md-3\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choose_logo", array(), "platform"), "html", null, true);
        echo "</label>
                <div class=\"col-md-9 logos\">
                    <div style=\"height:80px\" class=\"alert ";
        // line 40
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method") == "")) {
            echo "alert-info";
        } else {
            echo "alert-warning";
        }
        echo " content-4 pointer-hand logo\" data-logo=\"null\">
                        <p style=\"height:35px;font-size:18px\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("none", array(), "platform"), "html", null, true);
        echo "</p>
                    </div>
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logos"]) ? $context["logos"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["logo"]) {
            // line 44
            echo "                        <div style=\"height:80px\" class=\"alert ";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method") == $context["logo"])) {
                echo "alert-info";
            } else {
                echo "alert-warning";
            }
            echo " content-4 pointer-hand logo\" data-logo=\"";
            echo twig_escape_filter($this->env, $context["logo"], "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"close\" aria-hidden=\"true\">&times;</button>
                            <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, (($this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath() . "/uploads/logos/") . $context["logo"]), "html", null, true);
            echo "\" height=\"35\" alt=\"Logo ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    <input type=\"hidden\" name=\"selectlogo\" ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method") != "")) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "logo"), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
                </div>
            </div>
            <div class=\"form-group row\">
                <label class=\"control-label col-md-3\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_a_logo", array(), "platform"), "html", null, true);
        echo "</label>
                <div class=\"col-md-9\">
                    <input type=\"file\" class=\"form-control\" name=\"logo\">
                </div>
            </div>
        </div>
        <div class=\"panel-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_index");
        echo "\">
                <button type=\"button\" class=\"btn btn-default\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
            </a>
        </div>
    </form>
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/administration/logos.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Administration\\Parameters:appearanceForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  190 => 69,  187 => 68,  178 => 62,  174 => 61,  170 => 60,  160 => 53,  148 => 49,  129 => 46,  117 => 44,  100 => 43,  95 => 41,  87 => 40,  82 => 38,  73 => 34,  67 => 31,  60 => 29,  55 => 27,  52 => 26,  49 => 25,  44 => 22,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Administration\\Parameters:appearanceForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Administration/Parameters/appearanceForm.html.twig");
    }
}
