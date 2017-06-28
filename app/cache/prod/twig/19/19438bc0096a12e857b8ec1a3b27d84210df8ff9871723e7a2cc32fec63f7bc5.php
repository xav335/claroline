<?php

/* ClarolineTagBundle:AdminTag:adminTagsDisplay.html.twig */
class __TwigTemplate_f7c47ce9ff1ac4a004aafd24ef7273ee71735e15ed0c0cdc3ee148db7658a756 extends Twig_Template
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
        // line 19
        echo "
";
        // line 20
        $context["__internal_d401493256dd9be97b38edce7a25b5cf91a3877e9f0800185cc5a0f49955eeff"] = $this;
        // line 21
        echo "
";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["pager"]) ? $context["pager"] : null)) > 0)) {
            // line 23
            echo "
    ";
            // line 24
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbPages", array(), "method") > 1)) {
                // line 25
                echo "        ";
                echo $context["__internal_d401493256dd9be97b38edce7a25b5cf91a3877e9f0800185cc5a0f49955eeff"]->getrenderPager((isset($context["pager"]) ? $context["pager"] : null), (isset($context["search"]) ? $context["search"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null), (isset($context["max"]) ? $context["max"] : null));
                echo "
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) ? $context["datas"] : null));
            foreach ($context['_seq'] as $context["firstChar"] => $context["tags"]) {
                // line 29
                echo "
        ";
                // line 30
                if ((twig_length_filter($this->env, $context["tags"]) > 0)) {
                    // line 31
                    echo "            <h3>
                ";
                    // line 32
                    echo twig_escape_filter($this->env, $context["firstChar"], "html", null, true);
                    echo "
            </h3>
            <div class=\"panel-group\">

                ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["tags"]);
                    foreach ($context['_seq'] as $context["tagName"] => $context["taggedObjects"]) {
                        // line 37
                        echo "                    <div class=\"panel panel-default\" id=\"tag-row-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tags"], $context["tagName"], array(), "array"), "tag_id", array(), "array"), "html", null, true);
                        echo "\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" href=\"#tag-content-";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tags"], $context["tagName"], array(), "array"), "tag_id", array(), "array"), "html", null, true);
                        echo "\">
                                    ";
                        // line 41
                        echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                        echo "
                                </a>
                                <i class=\"fa fa-trash pointer-hand delete-tag-btn close\"
                                   data-tag-id=\"";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tags"], $context["tagName"], array(), "array"), "tag_id", array(), "array"), "html", null, true);
                        echo "\"
                                   data-tag-name=\"";
                        // line 45
                        echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                        echo "\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"left\"
                                   data-title=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_tag", array(), "tag"), "html", null, true);
                        echo "\"
                                >
                                </i>
                            </h4>
                        </div>
                        <div id=\"tag-content-";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tags"], $context["tagName"], array(), "array"), "tag_id", array(), "array"), "html", null, true);
                        echo "\" class=\"panel-collapse collapse\">
                            <div class=\"panel-body\">
                                ";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["taggedObjects"], "objects", array(), "array"));
                        foreach ($context['_seq'] as $context["class"] => $context["infos"]) {
                            // line 56
                            echo "                                    <b>";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["class"], array(), "tag"), "html", null, true);
                            echo "</b>
                                    <br>

                                    ";
                            // line 59
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["infos"]);
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
                            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                                // line 60
                                echo "                                        <div id=\"tagged-object-row-";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "tagged_object_id", array(), "array"), "html", null, true);
                                echo "\">
                                            <span>
                                                ";
                                // line 62
                                if ( !twig_test_empty($this->getAttribute($context["info"], "name", array(), "array"))) {
                                    // line 63
                                    echo "                                                    ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "name", array(), "array"), "html", null, true);
                                    echo "
                                                ";
                                } else {
                                    // line 65
                                    echo "                                                    ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array(), "array"), "html", null, true);
                                    echo "
                                                ";
                                }
                                // line 67
                                echo "                                            </span>
                                            <i class=\"fa fa-times-circle remove-tag-from-object-btn pointer-hand\"
                                               data-tagged-object-id=\"";
                                // line 69
                                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "tagged_object_id", array(), "array"), "html", null, true);
                                echo "\"
                                               data-toggle=\"tooltip\"
                                               data-placement=\"top\"
                                               data-title=\"";
                                // line 72
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("remove_tag", array(), "tag"), "html", null, true);
                                echo "\"
                                               style=\"color: #D9534F\"
                                            >
                                            </i>
                                            <br>
                                        </div>
                                        
                                        ";
                                // line 79
                                if ($this->getAttribute($context["loop"], "last", array())) {
                                    // line 80
                                    echo "                                            <br>
                                        ";
                                }
                                // line 82
                                echo "                                    ";
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 83
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['class'], $context['infos'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 84
                        echo "                            </div>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['tagName'], $context['taggedObjects'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "            </div>
        ";
                }
                // line 90
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['firstChar'], $context['tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "
    ";
            // line 92
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbPages", array(), "method") > 1)) {
                // line 93
                echo "        ";
                echo $context["__internal_d401493256dd9be97b38edce7a25b5cf91a3877e9f0800185cc5a0f49955eeff"]->getrenderPager((isset($context["pager"]) ? $context["pager"] : null), (isset($context["search"]) ? $context["search"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null), (isset($context["max"]) ? $context["max"] : null));
                echo "
    ";
            }
        } else {
            // line 96
            echo "    <br>
    <br>
    <div class=\"alert alert-warning\">
        ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_tag", array(), "tag"), "html", null, true);
            echo "
    </div>
";
        }
    }

    // line 1
    public function getrenderPager($__pager__ = null, $__search__ = null, $__orderedBy__ = null, $__order__ = null, $__max__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "search" => $__search__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "max" => $__max__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(            // line 4
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_tag_admin_tags_display", "routeParams" => array("search" =>             // line 10
(isset($context["search"]) ? $context["search"] : null), "orderedBy" =>             // line 11
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 12
(isset($context["order"]) ? $context["order"] : null), "max" =>             // line 13
(isset($context["max"]) ? $context["max"] : null))));
            // line 17
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

    public function getTemplateName()
    {
        return "ClarolineTagBundle:AdminTag:adminTagsDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 17,  266 => 13,  265 => 12,  264 => 11,  263 => 10,  262 => 4,  260 => 2,  244 => 1,  236 => 99,  231 => 96,  224 => 93,  222 => 92,  219 => 91,  213 => 90,  209 => 88,  200 => 84,  194 => 83,  180 => 82,  176 => 80,  174 => 79,  164 => 72,  158 => 69,  154 => 67,  148 => 65,  142 => 63,  140 => 62,  134 => 60,  117 => 59,  110 => 56,  106 => 55,  101 => 53,  93 => 48,  87 => 45,  83 => 44,  77 => 41,  73 => 40,  66 => 37,  62 => 36,  55 => 32,  52 => 31,  50 => 30,  47 => 29,  43 => 28,  40 => 27,  34 => 25,  32 => 24,  29 => 23,  27 => 22,  24 => 21,  22 => 20,  19 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineTagBundle:AdminTag:adminTagsDisplay.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/tag/Resources/views/AdminTag/adminTagsDisplay.html.twig");
    }
}
