<?php

/* IcapNotificationBundle:Templates:notificationList.html.twig */
class __TwigTemplate_baf97a982139d7384fb53458e7703ddcb940c1dc1fadcdf71d01865a78c44dac extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pager"]) ? $context["pager"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["notificationViewer"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute((isset($context["notificationViews"]) ? $context["notificationViews"] : null), $this->getAttribute($context["notificationViewer"], "id", array()), array(), "array", true, true)) {
                // line 3
                echo "        ";
                echo $this->getAttribute((isset($context["notificationViews"]) ? $context["notificationViews"] : null), $this->getAttribute($context["notificationViewer"], "id", array()), array(), "array");
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $this->loadTemplate("IcapNotificationBundle:Templates:notification.html.twig", "IcapNotificationBundle:Templates:notificationList.html.twig", 5)->display(array_merge($context, array("notification" => $this->getAttribute($context["notificationViewer"], "notification", array()), "status" => $this->getAttribute($context["notificationViewer"], "status", array()), "systemName" => (isset($context["systemName"]) ? $context["systemName"] : null))));
                // line 6
                echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificationViewer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Templates:notificationList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  45 => 5,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Templates:notificationList.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Templates/notificationList.html.twig");
    }
}
