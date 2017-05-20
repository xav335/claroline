<?php

/* ClarolineMessageBundle:Message:show.html.twig */
class __TwigTemplate_a913f800b23e725fafdf80fd754b6f37aa776d94cd88deca5c42a13e3c6e322e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineMessageBundle:Message:layout.html.twig", "ClarolineMessageBundle:Message:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_content' => array($this, 'block_section_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineMessageBundle:Message:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        ob_start();
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["ancestors"]) ? $context["ancestors"] : null)) >= 1)) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (($this->renderParentBlock("title", $context, $blocks) . " - ") . strip_tags($this->getAttribute($this->getAttribute((isset($context["ancestors"]) ? $context["ancestors"] : null), 0, array(), "array"), "getObject", array(), "method"))), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new_message", array(), "platform"));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 11
    public function block_section_content($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ancestors"]) ? $context["ancestors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
            // line 15
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class='panel-title'>";
            // line 17
            echo $this->getAttribute($context["ancestor"], "getObject", array(), "method");
            echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-md-2\">
                                ";
            // line 22
            if (($this->getAttribute($context["ancestor"], "getSender", array(), "method") && ($this->getAttribute($this->getAttribute($context["ancestor"], "getSender", array(), "method"), "getPicture", array(), "method") != ""))) {
                // line 23
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/") . $this->getAttribute($this->getAttribute($context["ancestor"], "getSender", array(), "method"), "getPicture", array(), "method")), "html", null, true);
                echo "\" class=\"col-md-2\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ancestor"], "getObject", array(), "method"), "html", null, true);
                echo "\">
                                ";
            } else {
                // line 25
                echo "                                    <h1 class=\"profile_picture_placeholder\"><i class=\"fa fa-user\"></i></h1>
                               ";
            }
            // line 27
            echo "                                <p class=\"text-muted\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["ancestor"], "getSenderUsername", array(), "method"), "html", null, true);
            echo "
                                    ";
            // line 29
            if ($this->getAttribute($context["ancestor"], "getSender", array(), "method")) {
                // line 30
                echo "                                        (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ancestor"], "getSender", array(), "method"), "getFirstName", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ancestor"], "getSender", array(), "method"), "getLastName", array(), "method"), "html", null, true);
                echo ")
                                    ";
            }
            // line 32
            echo "                                </p>
                            </div>
                            <div class=\"col-md-9\">
                                ";
            // line 35
            echo $this->getAttribute($context["ancestor"], "getContent", array(), "method");
            echo "
                                <p class=\"text-muted\">
                                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->timeAgo($this->getAttribute($context["ancestor"], "getDate", array(), "method")), "html", null, true);
            echo "
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancestor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
        <div class=\"col-md-";
        // line 45
        if (twig_test_empty((isset($context["ancestors"]) ? $context["ancestors"] : null))) {
            echo "12";
        } else {
            echo "6";
        }
        echo "\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new_message", array(), "platform"), "html", null, true);
        echo "
                    </h3>
                </div>
                <form role=\"form\" novalidate=\"novalidate\"
                    ";
        // line 53
        if (twig_test_empty((isset($context["message"]) ? $context["message"] : null))) {
            // line 54
            echo "                        action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_send", array("parentId" => null));
            echo "\"
                    ";
        } else {
            // line 56
            echo "                        action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_message_send", array("parentId" => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\"
                    ";
        }
        // line 58
        echo "                    method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
                    id=\"generic-form\"
                    class=\"form-horizontal\">
                    <div class=\"panel-body\">
                        ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </div>
                    <div class=\"panel-footer\">
                        <button id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("send", array(), "platform"), "html", null, true);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id=\"contacts-box\" class=\"modal fade\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h3>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("select_contacts_title", array(), "platform"), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"modal-body\">
                    <ul class=\"nav nav-tabs margin-bottom-md\">
                        <li class=\"active\" id=\"users-nav-tab\">
                            <a href=\"#\">
                                ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li id=\"groups-nav-tab\">
                            <a href=\"#\">
                                ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("groups", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li id=\"workspaces-nav-tab\">
                            <a href=\"#\">
                                ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>
                    <br>
                    <div id=\"contacts-list\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" id=\"add-contacts-confirm-ok\" class=\"btn btn-primary\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ok", array(), "platform"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinemessage/js/message/show.js"), "html", null, true);
        echo "' type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "ClarolineMessageBundle:Message:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 112,  250 => 111,  247 => 110,  237 => 103,  233 => 102,  222 => 94,  214 => 89,  206 => 84,  197 => 78,  182 => 66,  176 => 63,  172 => 62,  164 => 58,  158 => 56,  152 => 54,  150 => 53,  143 => 49,  132 => 45,  129 => 44,  116 => 37,  111 => 35,  106 => 32,  98 => 30,  96 => 29,  92 => 28,  89 => 27,  85 => 25,  77 => 23,  75 => 22,  67 => 17,  63 => 15,  59 => 14,  55 => 12,  52 => 11,  43 => 7,  37 => 5,  34 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineMessageBundle:Message:show.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/message/Resources/views/Message/show.html.twig");
    }
}
