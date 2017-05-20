<?php

/* ClarolineCoreBundle:Layout:topBarItems.html.twig */
class __TwigTemplate_a708633f65a1b15cf9c5b7db3e455a1ca062cacfccfac31bbadf504ea7e7d87e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topBar' => array($this, 'block_topBar'),
            'leftSide' => array($this, 'block_leftSide'),
            'rightSide' => array($this, 'block_rightSide'),
            'login' => array($this, 'block_login'),
            'logged' => array($this, 'block_logged'),
            'dropdownAdministration' => array($this, 'block_dropdownAdministration'),
            'dropdownWorkspace' => array($this, 'block_dropdownWorkspace'),
            'dropdownLogged' => array($this, 'block_dropdownLogged'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('topBar', $context, $blocks);
    }

    public function block_topBar($context, array $blocks = array())
    {
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('leftSide', $context, $blocks);
        // line 27
        echo "
    ";
        // line 28
        $this->displayBlock('rightSide', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('login', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('logged', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('dropdownAdministration', $context, $blocks);
        // line 72
        echo "
    ";
        // line 73
        $this->displayBlock('dropdownWorkspace', $context, $blocks);
        // line 95
        echo "
    ";
        // line 96
        $this->displayBlock('dropdownLogged', $context, $blocks);
        // line 99
        echo "
";
    }

    // line 24
    public function block_leftSide($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("ClarolineCoreBundle:Builder:topBarLeftMenu", array(), "top_bar_left");
        echo "
    ";
    }

    // line 28
    public function block_rightSide($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $context["topbar"] = $this;
        // line 30
        echo "
        ";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["adminTools"]) ? $context["adminTools"] : null)) > 0)) {
            // line 32
            echo "            ";
            echo $context["topbar"]->getitem(array("name" => "administration", "dropdown" =>             $this->renderBlock("dropdownAdministration", $context, $blocks)));
            echo "
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if ((isset($context["isInAWorkspace"]) ? $context["isInAWorkspace"] : null)) {
            // line 36
            echo "            ";
            $context["workspacesName"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["currentWorkspace"]) ? $context["currentWorkspace"] : null), "getName", array(), "method")) > 16)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["currentWorkspace"]) ? $context["currentWorkspace"] : null), "getName", array(), "method"), 0, 16) . "...")) : ($this->getAttribute((isset($context["currentWorkspace"]) ? $context["currentWorkspace"] : null), "getName", array(), "method")));
            // line 37
            echo "        ";
        } else {
            // line 38
            echo "            ";
            $context["workspacesName"] = "";
            // line 39
            echo "        ";
        }
        // line 40
        echo "        ";
        echo $context["topbar"]->getitem(array("name" => (isset($context["workspacesName"]) ? $context["workspacesName"] : null), "icon" => "book", "route" => "/workspaces/", "dropdown" =>         $this->renderBlock("dropdownWorkspace", $context, $blocks)));
        echo "
    ";
    }

    // line 43
    public function block_login($context, array $blocks = array())
    {
        // line 44
        echo "        ";
        $context["topbar"] = $this;
        // line 45
        echo "        ";
        if ( !twig_test_empty((isset($context["register_target"]) ? $context["register_target"] : null))) {
            // line 46
            echo "            ";
            echo $context["topbar"]->getitem(array("name" => "register", "href" => (isset($context["register_target"]) ? $context["register_target"] : null), "icon" => "user-plus"));
            echo "
        ";
        }
        // line 48
        echo "        ";
        echo $context["topbar"]->getitem(array("name" => "login", "href" => (isset($context["login_target"]) ? $context["login_target"] : null), "icon" => "user", "title" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login", array(), "platform") . " Claroline Connect")));
        echo "
    ";
    }

    // line 51
    public function block_logged($context, array $blocks = array())
    {
        // line 52
        echo "        ";
        $context["topbar"] = $this;
        // line 53
        echo "        ";
        $context["username"] = (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstName", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastName", array()));
        // line 54
        echo "        ";
        $context["user"] = (((twig_length_filter($this->env, (isset($context["username"]) ? $context["username"] : null)) > 16)) ? ((twig_slice($this->env, (isset($context["username"]) ? $context["username"] : null), 0, 16) . "...")) : ((isset($context["username"]) ? $context["username"] : null)));
        // line 55
        echo "        ";
        echo $context["topbar"]->getitem(array("name" => (isset($context["user"]) ? $context["user"] : null), "icon" => "user", "route" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_public_profile_view", array("publicUrl" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "token", array()), "user", array()), "publicUrl", array()))), "dropdown" =>         $this->renderBlock("dropdownLogged", $context, $blocks)));
        echo "
    ";
    }

    // line 58
    public function block_dropdownAdministration($context, array $blocks = array())
    {
        // line 59
        echo "        ";
        $context["topbar"] = $this;
        // line 60
        echo "        <ul class=\"dropdown-menu\" role=\"menu\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adminTools"]) ? $context["adminTools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 62
            echo "                ";
            echo             // line 63
$context["topbar"]->getitem(array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(            // line 64
$context["tool"], "getName", array(), "method"), array(), "tools"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_admin_open_tool", array("toolName" => $this->getAttribute(            // line 65
$context["tool"], "getName", array(), "method"))), "icon" => $this->getAttribute(            // line 66
$context["tool"], "getClass", array(), "method")));
            // line 68
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </ul>
    ";
    }

    // line 73
    public function block_dropdownWorkspace($context, array $blocks = array())
    {
        // line 74
        echo "        <ul class=\"dropdown-menu\" role=\"menu\">
        ";
        // line 75
        $context["topbar"] = $this;
        // line 76
        echo "        ";
        if ((isset($context["isLogged"]) ? $context["isLogged"] : null)) {
            // line 77
            echo "            ";
            if ( !twig_test_empty((isset($context["workspaces"]) ? $context["workspaces"] : null))) {
                // line 78
                echo "                <li role=\"presentation\" class=\"dropdown-header\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("history", array(), "platform"), "html", null, true);
                echo "</li>
                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["workspaces"]) ? $context["workspaces"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["workspace"]) {
                    // line 80
                    echo "                    ";
                    echo $context["topbar"]->getitem(array("name" => ((($this->getAttribute($context["workspace"], "getName", array(), "method") . " (") . $this->getAttribute($context["workspace"], "getCode", array(), "method")) . ")"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open", array("workspaceId" => $this->getAttribute($context["workspace"], "getId", array(), "method")))));
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workspace'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                <li role=\"presentation\" class=\"divider\"></li>
            ";
            }
            // line 84
            echo "            ";
            echo $context["topbar"]->getitem(array("name" => "my_workspaces", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_by_user"), "icon" => "book"));
            echo "
            ";
            // line 85
            echo $context["topbar"]->getitem(array("name" => "find_workspaces", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_list"), "icon" => "book"));
            echo "
            ";
            // line 86
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_WS_CREATOR")) {
                // line 87
                echo "                <li role=\"presentation\" class=\"divider\"></li>
                ";
                // line 88
                echo $context["topbar"]->getitem(array("name" => "create_workspace", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_creation_form"), "icon" => "pencil"));
                echo "
            ";
            }
            // line 90
            echo "        ";
        } else {
            // line 91
            echo "            ";
            echo $context["topbar"]->getitem(array("name" => "find_workspaces", "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_list"), "icon" => "book"));
            echo "
        ";
        }
        // line 93
        echo "        </ul>
    ";
    }

    // line 96
    public function block_dropdownLogged($context, array $blocks = array())
    {
        // line 97
        echo "        ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("ClarolineCoreBundle:Builder:topBarRightMenu", array(), "top_bar_right");
        echo "
    ";
    }

    // line 1
    public function getitem($__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <li role=\"presentation\" ";
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array())))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "id", array()), "html", null, true);
                echo "\" ";
            }
            echo "class=\"";
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array())))) {
                echo "dropdown";
            }
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->compareRoute((($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "route", array()), " ")) : (" ")), " active");
            echo "\">
        <a  role=\"menuitem\"
            ";
            // line 4
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array())))) {
                echo "class=\"pointer-hand dropdown-toggle\" data-toggle=\"dropdown\"";
            }
            // line 5
            echo "            href=\"";
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "href", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "href", array())))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "href", array()), "html", null, true);
            }
            echo "\"
            ";
            // line 6
            if ((( !$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array(), "any", true, true) && $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "name", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "name", array())))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "name", array()), array(), "platform"), "html", null, true);
                echo "\"";
            }
            // line 7
            echo "            ";
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array())))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "title", array()), "html", null, true);
                echo "\"";
            }
            // line 8
            echo "                >
            ";
            // line 9
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "icon", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "icon", array())))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "icon", array()), "html", null, true);
                echo "\"></i> ";
            }
            // line 10
            echo "            <span ";
            if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "breakhide", array(), "any", true, true)) {
                echo "class=\"break-hide\"";
            }
            echo ">
                ";
            // line 11
            if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "name", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "name", array()), array(), "platform"), "html", null, true);
                echo " ";
            }
            // line 12
            echo "            </span>
            ";
            // line 13
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "badge", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "badge", array())))) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "badge", array()), "html", null, true);
                echo "</span>";
            }
            // line 14
            echo "            ";
            if ((($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array()))) && ( !$this->getAttribute((isset($context["params"]) ? $context["params"] : null), "hideArrow", array(), "any", true, true) || twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "hideArrow", array()))))) {
                echo "<i class=\"caret\"></i>";
            }
            // line 15
            echo "        </a>
        ";
            // line 16
            if (($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array())))) {
                // line 17
                echo "        ";
                echo $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "dropdown", array());
                echo "
        ";
            }
            // line 19
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Layout:topBarItems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 19,  371 => 17,  369 => 16,  366 => 15,  361 => 14,  355 => 13,  352 => 12,  346 => 11,  339 => 10,  333 => 9,  330 => 8,  323 => 7,  317 => 6,  310 => 5,  306 => 4,  291 => 2,  279 => 1,  272 => 97,  269 => 96,  264 => 93,  258 => 91,  255 => 90,  250 => 88,  247 => 87,  245 => 86,  241 => 85,  236 => 84,  232 => 82,  223 => 80,  219 => 79,  214 => 78,  211 => 77,  208 => 76,  206 => 75,  203 => 74,  200 => 73,  195 => 70,  188 => 68,  186 => 66,  185 => 65,  184 => 64,  183 => 63,  181 => 62,  177 => 61,  174 => 60,  171 => 59,  168 => 58,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  142 => 48,  136 => 46,  133 => 45,  130 => 44,  127 => 43,  120 => 40,  117 => 39,  114 => 38,  111 => 37,  108 => 36,  106 => 35,  103 => 34,  97 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  79 => 25,  76 => 24,  71 => 99,  69 => 96,  66 => 95,  64 => 73,  61 => 72,  59 => 58,  56 => 57,  54 => 51,  51 => 50,  49 => 43,  46 => 42,  44 => 28,  41 => 27,  39 => 24,  36 => 23,  30 => 22,  27 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Layout:topBarItems.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Layout/topBarItems.html.twig");
    }
}
