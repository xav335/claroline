<?php

/* ClarolineActivityToolBundle::desktopActivityList.html.twig */
class __TwigTemplate_1554d3ee5d5526fc349a535f54875491fe3d54f3ea59be45c0e956a4e9108aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineActivityToolBundle::desktopActivityList.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'section_content' => array($this, 'block_section_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 5
(isset($context["macros"]) ? $context["macros"] : null), "breadcrumbs", array(0 => array(0 => array("icon" => "icon-briefcase", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_open")), 1 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_activity_tool", array(), "tools"), "href" => ""))), "method"), "html", null, true);
        // line 16
        echo "
";
    }

    // line 19
    public function block_section_content($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("claroline_activity_tool", array(), "tools"), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"panel-body\">
        ";
        // line 25
        $context["nbWorkspaces"] = twig_length_filter($this->env, (isset($context["workspaceInfos"]) ? $context["workspaceInfos"] : null));
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workspaceInfos"]) ? $context["workspaceInfos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["workspaceInfo"]) {
            // line 27
            echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a class=\"accordion-toggle\" data-toggle=\"collapse\" href=\"#collapse-";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["workspaceInfo"], "code", array()), "html", null, true);
            echo "\">
                        <span class=\"icon-book\"></span> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["workspaceInfo"], "name", array()), "html", null, true);
            echo "
                        <span class=\"workspace-code\">(";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["workspaceInfo"], "code", array()), "html", null, true);
            echo ")</span>
                    </a>
                </h4>
            </div>

            <table id=\"collapse-";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["workspaceInfo"], "code", array()), "html", null, true);
            echo "\" class=\"table-responsive table table-striped ";
            if (((isset($context["nbWorkspaces"]) ? $context["nbWorkspaces"] : null) == 1)) {
                echo "in";
            }
            echo "\">
                <thead>
                    <tr>
                        <th nowrap scope=\"col\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
            echo "</th>
                        <th nowrap scope=\"col\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("start_date", array(), "tools"), "html", null, true);
            echo "</th>
                        <th nowrap scope=\"col\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("end_date", array(), "tools"), "html", null, true);
            echo "</th>
                        <th nowrap scope=\"col\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("status", array(), "platform"), "html", null, true);
            echo "</th>
                    </tr>
                <thead>
                <tbody>
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["workspaceInfo"], "nodes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["nodeId"]) {
                // line 48
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_open", array("node" => $context["nodeId"], "resourceType" => "activity")), "html", null, true);
                echo "\">
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["resourceInfos"]) ? $context["resourceInfos"] : null), $context["nodeId"], array(), "array"), "name", array(), "array"), "html", null, true);
                echo "
                            </a>
                        </td>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activityInfos"]) ? $context["activityInfos"] : null), $context["nodeId"], array(), "array"), "startDate", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["activityInfos"]) ? $context["activityInfos"] : null), $context["nodeId"], array(), "array"), "endDate", array(), "array"), "html", null, true);
                echo "</td>
                        <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["activityInfos"]) ? $context["activityInfos"] : null), $context["nodeId"], array(), "array"), "status", array(), "array"), array(), "platform"), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nodeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </tbody>
            </table>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workspaceInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineActivityToolBundle::desktopActivityList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 63,  146 => 59,  137 => 56,  133 => 55,  129 => 54,  123 => 51,  119 => 50,  115 => 48,  111 => 47,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  82 => 37,  74 => 32,  70 => 31,  66 => 30,  61 => 27,  56 => 26,  54 => 25,  47 => 21,  44 => 20,  41 => 19,  36 => 16,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineActivityToolBundle::desktopActivityList.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/activity-tool/Resources/views/desktopActivityList.html.twig");
    }
}
