<?php

/* ClarolineCoreBundle:Resource:managerParameters.json.twig */
class __TwigTemplate_73e78e92990d863c6c7bb23016e4958b3e2be25b0463ea1baba84d2080065ecb extends Twig_Template
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
        $context["directoryId"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "pickerDirectoryId", 1 => "0"), "method");
        // line 2
        $context["currentUsername"] = "anon.";
        // line 3
        $context["currentUserId"] = "anon.";
        // line 4
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 5
            echo "    ";
            $context["currentUsername"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getUsername", array(), "method");
            // line 6
            echo "    ";
            $context["currentUserId"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getId", array(), "method");
        }
        // line 8
        echo "
{
    \"currentUsername\": \"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["currentUsername"]) ? $context["currentUsername"] : null), "html", null, true);
        echo "\",
    \"currentUserId\": \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["currentUserId"]) ? $context["currentUserId"] : null), "html", null, true);
        echo "\",
    \"webPath\": \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\BaseUriExtension')->getAssetPath(), "html", null, true);
        echo "\",
    \"language\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
        echo "\",
    \"zoom\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "zoom"), "method"), "html", null, true);
        echo "\",
    \"pickerDirectoryId\": \"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["directoryId"]) ? $context["directoryId"] : null), "html", null, true);
        echo "\",
    \"preFetchedDirectory\": ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ClarolineCoreBundle:Resource:openDirectory", array("nodeId" => (isset($context["directoryId"]) ? $context["directoryId"] : null))));
        echo ",
    \"resourceTypes\": {
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resourceTypes"]) ? $context["resourceTypes"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["resourceType"]) {
            // line 19
            echo "            \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resourceType"], "getName", array(), "method"), "html", null, true);
            echo "\": {
                \"name\": \"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["resourceType"], "getName", array(), "method"), array(), "resource"), "html", null, true);
            echo "\",
                \"actions\": {
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["resourceType"], "getActions", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 23
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getName", array(), "method"), "html", null, true);
                echo "\": {
                            \"name\": \"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getName", array(), "method"), "html", null, true);
                echo "\",
                            \"route\": \"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_resource_action", array("resourceType" => $this->getAttribute($context["resourceType"], "getName", array(), "method"), "action" => $this->getAttribute($context["action"], "getName", array(), "method"), "node" => "_nodeId")), "html", null, true);
                echo "\",
                            \"async\": ";
                // line 26
                if ($this->getAttribute($context["action"], "isAsync", array(), "method")) {
                    echo " 1 ";
                } else {
                    echo " 0 ";
                }
                echo ",
                            \"mask\": ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "getValue", array(), "method"), "html", null, true);
                echo ",
                            \"isCustom\": ";
                // line 28
                if ($this->getAttribute($context["action"], "isCustom", array(), "method")) {
                    echo " \"yes\" ";
                } else {
                    echo " \"no\" ";
                }
                echo ",
                            \"isForm\": ";
                // line 29
                if ($this->getAttribute($context["action"], "isForm", array(), "method")) {
                    echo " true ";
                } else {
                    echo " false ";
                }
                // line 30
                echo "                        }
                        ";
                // line 31
                if (($this->getAttribute($context["loop"], "last", array()) != true)) {
                    echo ",";
                }
                // line 32
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                }
            }";
            // line 34
            if (($this->getAttribute($context["loop"], "last", array()) != true)) {
                echo ",";
            }
            // line 35
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    }
}
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Resource:managerParameters.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 36,  178 => 35,  174 => 34,  171 => 33,  157 => 32,  153 => 31,  150 => 30,  144 => 29,  136 => 28,  132 => 27,  124 => 26,  120 => 25,  116 => 24,  111 => 23,  94 => 22,  89 => 20,  84 => 19,  67 => 18,  62 => 16,  58 => 15,  54 => 14,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 8,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Resource:managerParameters.json.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Resource/managerParameters.json.twig");
    }
}
