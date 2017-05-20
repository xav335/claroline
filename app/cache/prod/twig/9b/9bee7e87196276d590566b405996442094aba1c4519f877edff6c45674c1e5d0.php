<?php

/* IcapNotificationBundle:Templates:notificationDropdownList.html.twig */
class __TwigTemplate_b3ee2b2e978505d559ab3c4c2896e91d93565da4c6e0cf275c6643fc0c991670 extends Twig_Template
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
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbResults", array(), "method") > 0)) {
            // line 2
            echo "    <ul id=\"notification-list\" class=\"list-group\" data-count=\"";
            echo twig_escape_filter($this->env, (isset($context["unviewedNotifications"]) ? $context["unviewedNotifications"] : null), "html", null, true);
            echo "\">
        ";
            // line 3
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
                // line 4
                echo "            ";
                if ($this->getAttribute((isset($context["notificationViews"]) ? $context["notificationViews"] : null), $this->getAttribute($context["notificationViewer"], "id", array()), array(), "array", true, true)) {
                    // line 5
                    echo "                ";
                    echo $this->getAttribute((isset($context["notificationViews"]) ? $context["notificationViews"] : null), $this->getAttribute($context["notificationViewer"], "id", array()), array(), "array");
                    echo "
            ";
                } else {
                    // line 7
                    echo "                ";
                    $this->loadTemplate("IcapNotificationBundle:Templates:notification.html.twig", "IcapNotificationBundle:Templates:notificationDropdownList.html.twig", 7)->display(array_merge($context, array("notification" => $this->getAttribute($context["notificationViewer"], "notification", array()), "status" => $this->getAttribute($context["notificationViewer"], "status", array()), "systemName" => (isset($context["systemName"]) ? $context["systemName"] : null))));
                    // line 8
                    echo "            ";
                }
                // line 9
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notificationViewer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ul>
    <div class=\"see-notifications-button active\">
        <a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_notification_view");
            echo "\"><i
                    class=\"fa fa-align-justify\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("see_more", array(), "notification"), "html", null, true);
            echo "</a>
    </div>
";
        } else {
            // line 16
            echo "    <div class=\"zero-notifications-found\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("zero_notifications", array(), "notification"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Templates:notificationDropdownList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  80 => 13,  76 => 12,  72 => 10,  58 => 9,  55 => 8,  52 => 7,  46 => 5,  43 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Templates:notificationDropdownList.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Templates/notificationDropdownList.html.twig");
    }
}
