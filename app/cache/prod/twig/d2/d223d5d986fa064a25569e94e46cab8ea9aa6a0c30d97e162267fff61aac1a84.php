<?php

/* ClarolineCoreBundle::macros.html.twig */
class __TwigTemplate_25147448ed8315c859e9405b58b43fe7f811a50e2e5f4314ab8828fc1d13a006 extends Twig_Template
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
        // line 13
        echo "

";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 60
        echo "
";
        // line 74
        echo "
";
        // line 111
        echo "
";
        // line 127
        echo "
";
        // line 144
        echo "
";
        // line 158
        echo "
";
    }

    // line 1
    public function getrenderList($__array__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "array" => $__array__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "    <ul>
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["array"]) ? $context["array"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 5
                echo "        ";
                if (twig_test_iterable($context["element"])) {
                    // line 6
                    echo "             ";
                    echo $context["self"]->getrenderList($context["element"]);
                    echo "
        ";
                } else {
                    // line 8
                    echo "        <li> ";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo " </li>
        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </ul>
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

    // line 15
    public function getflashBox(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["self"] = $this;
            // line 17
            echo "    ";
            $context["flashBag"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "getFlashBag", array(), "method");
            // line 18
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["flashBag"]) ? $context["flashBag"] : null)) > 0)) {
                // line 19
                echo "        ";
                $context["flashes"] = array("info" => $this->getAttribute(                // line 21
(isset($context["flashBag"]) ? $context["flashBag"] : null), "get", array(0 => "info"), "method"), "success" => $this->getAttribute(                // line 22
(isset($context["flashBag"]) ? $context["flashBag"] : null), "get", array(0 => "success"), "method"), "warning" => $this->getAttribute(                // line 23
(isset($context["flashBag"]) ? $context["flashBag"] : null), "get", array(0 => "warning"), "method"), "danger" => $this->getAttribute(                // line 24
(isset($context["flashBag"]) ? $context["flashBag"] : null), "get", array(0 => "error"), "method"), "alert" => $this->getAttribute(                // line 25
(isset($context["flashBag"]) ? $context["flashBag"] : null), "get", array(0 => "alert"), "method"));
                // line 28
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : null));
                foreach ($context['_seq'] as $context["category"] => $context["msgs"]) {
                    // line 29
                    echo "            ";
                    if ((twig_length_filter($this->env, $context["msgs"]) > 0)) {
                        // line 30
                        echo "                <div class=\"alert alert-";
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "\">
                    <a class=\"close\" data-dismiss=\"alert\" href=\"#\" aria-hidden=\"true\">&times;</a>
                    ";
                        // line 32
                        echo $context["self"]->getrenderList($context["msgs"]);
                        echo "
                </div>
            ";
                    }
                    // line 35
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['category'], $context['msgs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getsectionHeader($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2 class=\"section-header\">";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "</h2>
        </div>
    </div>
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

    // line 47
    public function getbreadcrumbs($__elements__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "    ";
            ob_start();
            // line 49
            echo "    <ul class=\"breadcrumb\">
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 51
                echo "            <li";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                ";
                // line 52
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 53
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "href", array(), "array"), "html", null, true);
                    echo "\">";
                    if ($this->getAttribute($context["element"], "icon", array(), "array", true, true)) {
                        echo "<i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "icon", array(), "array"), "html", null, true);
                        echo "\"></i> ";
                    }
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array(), "array"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 54
                    echo "<span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array(), "array"), "html", null, true);
                    echo "</span>";
                }
                // line 55
                echo "            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    </ul>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getdesktopBreadcrumbs($__elements__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 62
            echo "    ";
            $context["self"] = $this;
            // line 63
            echo "
    ";
            // line 64
            $context["myDesktop"] = array(0 => array("icon" => "fa fa-home", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("desktop", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_desktop_open")));
            // line 70
            echo "    ";
            $context["finalElements"] = twig_array_merge((isset($context["myDesktop"]) ? $context["myDesktop"] : null), (isset($context["elements"]) ? $context["elements"] : null));
            // line 71
            echo "
    ";
            // line 72
            echo $context["self"]->getbreadcrumbs((isset($context["finalElements"]) ? $context["finalElements"] : null));
            echo "
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

    // line 75
    public function getworkspaceBreadcrumbs($__workspace__ = null, $__elements__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "workspace" => $__workspace__,
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    ";
            $context["self"] = $this;
            // line 77
            echo "
    ";
            // line 78
            if ($this->env->getExtension('Claroline\CoreBundle\Twig\HasRoleExtension')->hasRole("ROLE_ANONYMOUS")) {
                // line 79
                echo "        ";
                $context["workspaceElements"] = array(0 => array("icon" => "fa fa-book", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("workspaces", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_list")), 1 => array("name" => ((($this->getAttribute(                // line 87
(isset($context["workspace"]) ? $context["workspace"] : null), "getName", array(), "method") . " (") . $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getCode", array(), "method")) . ") "), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open", array("workspaceId" => $this->getAttribute(                // line 88
(isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method"), "toolName" => "home"))));
                // line 92
                echo "    ";
            } else {
                // line 93
                echo "        ";
                $context["workspaceElements"] = array(0 => array("icon" => "fa fa-book", "name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_workspaces", array(), "platform"), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_by_user")), 1 => array("name" => ((($this->getAttribute(                // line 101
(isset($context["workspace"]) ? $context["workspace"] : null), "getName", array(), "method") . " (") . $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getCode", array(), "method")) . ") "), "href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_workspace_open", array("workspaceId" => $this->getAttribute(                // line 102
(isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method"), "toolName" => "home"))));
                // line 106
                echo "    ";
            }
            // line 107
            echo "    ";
            $context["finalElements"] = twig_array_merge((isset($context["workspaceElements"]) ? $context["workspaceElements"] : null), (isset($context["elements"]) ? $context["elements"] : null));
            // line 108
            echo "
    ";
            // line 109
            echo $context["self"]->getbreadcrumbs((isset($context["finalElements"]) ? $context["finalElements"] : null));
            echo "
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

    // line 112
    public function getdisplayUser($__user__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "    ";
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 114
                echo "        ";
                if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "isRemoved", array())) {
                    // line 115
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_public_profile_view", array("publicUrl" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPublicUrl", array(), "method"))), "html", null, true);
                    echo "\">
                ";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUsername", array(), "method"), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 119
                    echo "            <div>
                ";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_removed", array(), "platform"), "html", null, true);
                    echo "
            </div>
        ";
                }
                // line 123
                echo "    ";
            } else {
                // line 124
                echo "        claroline-connect
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 128
    public function getmaxResultsSelectBox($__currentMax__ = null, $__onChangeHandler__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "currentMax" => $__currentMax__,
            "onChangeHandler" => $__onChangeHandler__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 129
            echo "    <div class=\"input-group margin-bottom-md\">
        <select class=\"form-control input-md\" id=\"max-select\" onchange=\"";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["onChangeHandler"]) ? $context["onChangeHandler"] : null), "html", null, true);
            echo "\">
            <option";
            // line 131
            if (((isset($context["currentMax"]) ? $context["currentMax"] : null) == 20)) {
                echo " selected";
            }
            echo ">20</option>
            <option";
            // line 132
            if (((isset($context["currentMax"]) ? $context["currentMax"] : null) == 50)) {
                echo " selected";
            }
            echo ">50</option>
            <option";
            // line 133
            if (((isset($context["currentMax"]) ? $context["currentMax"] : null) == 100)) {
                echo " selected";
            }
            echo ">100</option>
            <option";
            // line 134
            if (((isset($context["currentMax"]) ? $context["currentMax"] : null) == 200)) {
                echo " selected";
            }
            echo ">200</option>
            <option";
            // line 135
            if (((isset($context["currentMax"]) ? $context["currentMax"] : null) == 500)) {
                echo " selected";
            }
            echo ">500</option>
        </select>
        ";
            // line 137
            if ((isset($context["label"]) ? $context["label"] : null)) {
                // line 138
                echo "            <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), "platform"), "html", null, true);
                echo "</span>
        ";
            } else {
                // line 140
                echo "            <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("line_per_page", array(), "platform"), "html", null, true);
                echo "</span>
        ";
            }
            // line 142
            echo "    </div>
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

    // line 145
    public function getgetTheme($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 146
            echo "    ";
            ob_start();
            // line 147
            echo "        ";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "theme"), "method", true, true) && $this->env->getExtension('Claroline\CoreBundle\Twig\HomeExtension')->assetExists((("themes/" . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "theme"), "method")) . "/bootstrap.css")))) {
                // line 148
                echo "            ";
                // line 149
                echo "            ";
                $context["themeCSS"] = ((($this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath() . "/themes/") . $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "getParameter", array(0 => "theme"), "method")) . "/bootstrap.css");
                // line 150
                echo "        ";
            } else {
                // line 151
                echo "            ";
                // line 152
                echo "            ";
                $context["themeCSS"] = ($this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath() . "/themes/claroline/bootstrap.css");
                // line 153
                echo "        ";
            }
            // line 154
            echo "
        ";
            // line 155
            echo twig_escape_filter($this->env, (((isset($context["themeCSS"]) ? $context["themeCSS"] : null) . "?commit=") . $this->env->getExtension('Claroline\CoreBundle\Twig\ComposerExtension')->getCurrentDistributionCommit()), "html", null, true);
            echo "
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 159
    public function getgetDefaultTheme(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 160
            echo "    ";
            ob_start();
            // line 161
            echo "        ";
            echo twig_escape_filter($this->env, ($this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath() . "/themes/claroline/bootstrap.css"), "html", null, true);
            echo "
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return "ClarolineCoreBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 161,  616 => 160,  605 => 159,  587 => 155,  584 => 154,  581 => 153,  578 => 152,  576 => 151,  573 => 150,  570 => 149,  568 => 148,  565 => 147,  562 => 146,  550 => 145,  534 => 142,  528 => 140,  522 => 138,  520 => 137,  513 => 135,  507 => 134,  501 => 133,  495 => 132,  489 => 131,  485 => 130,  482 => 129,  468 => 128,  451 => 124,  448 => 123,  442 => 120,  439 => 119,  433 => 116,  428 => 115,  425 => 114,  422 => 113,  410 => 112,  393 => 109,  390 => 108,  387 => 107,  384 => 106,  382 => 102,  381 => 101,  379 => 93,  376 => 92,  374 => 88,  373 => 87,  371 => 79,  369 => 78,  366 => 77,  363 => 76,  350 => 75,  333 => 72,  330 => 71,  327 => 70,  325 => 64,  322 => 63,  319 => 62,  307 => 61,  290 => 57,  275 => 55,  270 => 54,  257 => 53,  255 => 52,  248 => 51,  231 => 50,  228 => 49,  225 => 48,  213 => 47,  194 => 42,  190 => 40,  178 => 39,  162 => 36,  156 => 35,  150 => 32,  144 => 30,  141 => 29,  136 => 28,  134 => 25,  133 => 24,  132 => 23,  131 => 22,  130 => 21,  128 => 19,  125 => 18,  122 => 17,  119 => 16,  108 => 15,  92 => 11,  86 => 10,  80 => 8,  74 => 6,  71 => 5,  67 => 4,  64 => 3,  61 => 2,  49 => 1,  44 => 158,  41 => 144,  38 => 127,  35 => 111,  32 => 74,  29 => 60,  26 => 46,  23 => 38,  19 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle::macros.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/macros.html.twig");
    }
}
