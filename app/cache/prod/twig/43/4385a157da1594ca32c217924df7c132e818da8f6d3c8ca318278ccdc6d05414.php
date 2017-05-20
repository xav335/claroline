<?php

/* FormaLibreReservationBundle:Admin:index.html.twig */
class __TwigTemplate_0d876d2d9c1177402ba1a718b417a73d0977a95b4fc6b316388dd87af149488c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Administration:layout.html.twig", "FormaLibreReservationBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\">
    <style>
        .roles-list {
            max-height: 200px;
            overflow-y: scroll;
            overflow-x: hidden;
        }
    </style>
";
    }

    // line 15
    public function block_section_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"panel-heading\">
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_resources_reservation", array(), "tools"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"panel-body\">
        <div class=\"row list-group-resource-type\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resourcesType"]) ? $context["resourcesType"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["resourceType"]) {
            // line 22
            echo "                <div class=\"col-sm-6\">
                    <div class=\"list-group\">
                        <div class=\"list-group-item active\" data-resource-type-id=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["resourceType"], "getId", array(), "method"), "html", null, true);
            echo "\">
                            <div class=\"pull-right\" style=\"margin: -5px -5px 0 0\">
                                <button class=\"btn btn-sm btn-success add-new-resource\" title=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_resource", array(), "reservation"), "html", null, true);
            echo "\" data-toggle=\"tooltip\"><span class=\"fa fa-plus\"></span></button>
                                <button class=\"btn btn-sm btn-warning modify-resource-type\" title=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("modify_resource_type_name", array(), "reservation"), "html", null, true);
            echo "\" data-toggle=\"tooltip\"><span class=\"fa fa-pencil\"></span></button>
                                <button class=\"btn btn-sm btn-danger delete-resource-type\" title=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_resource_type", array(), "reservation"), "html", null, true);
            echo "\" data-toggle=\"tooltip\"><span class=\"fa fa-trash\"></span></button>
                            </div>
                            <div class=\"list-group-item-title\">
                                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["resourceType"], "getName", array(), "method"), "html", null, true);
            echo "
                            </div>
                        </div>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["resourceType"], "getResources", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
                // line 35
                echo "                            <a class=\"list-group-item\" href=\"#\" data-resource-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "getId", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "getName", array(), "method"), "html", null, true);
                echo "</a>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 37
                echo "                            <div class=\"list-group-item no-resource-yet\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_resources_in_resource_type", array(), "reservation"), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                <div class=\"col-sm-12\">
                    <div class=\"alert alert-info\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_resources_type_yet", array(), "reservation"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"resource_type\" class=\"form-control\">
                    <span class=\"input-group-btn\"><button class=\"btn btn-success add-new-resource-type\"><span class=\"fa fa-plus-circle\"></span> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_new_resource_type", array(), "reservation"), "html", null, true);
        echo "</button></span>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("formalibre_reservation_export_resources");
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("export_resources", array(), "reservation"), "html", null, true);
        echo "</a>
                <button class=\"btn btn-warning import-resources\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("import.resources", array(), "reservation"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "reservation"));
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/formalibrereservation/js/admin.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FormaLibreReservationBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 67,  183 => 66,  179 => 65,  174 => 64,  171 => 63,  162 => 57,  156 => 56,  149 => 52,  141 => 46,  132 => 43,  129 => 42,  122 => 39,  113 => 37,  103 => 35,  98 => 34,  92 => 31,  86 => 28,  82 => 27,  78 => 26,  73 => 24,  69 => 22,  64 => 21,  57 => 17,  54 => 16,  51 => 15,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FormaLibreReservationBundle:Admin:index.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/reservation/Resources/views/Admin/index.html.twig");
    }
}
