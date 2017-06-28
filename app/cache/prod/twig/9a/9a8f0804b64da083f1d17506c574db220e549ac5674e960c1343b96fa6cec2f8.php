<?php

/* IcapNotificationBundle:Templates:pagination.html.twig */
class __TwigTemplate_eedbd425da175f557fd3cb921b1b25b9a5b46dab04bec9661e059ecaaaaa6f46 extends Twig_Template
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
        if ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "haveToPaginate", array())) {
            // line 2
            echo "    <div class=\"pull-right\">
        ";
            // line 3
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(            // line 4
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "icap_notification_view", "routeParams" => array("category" =>             // line 9
(isset($context["category"]) ? $context["category"] : null))));
            // line 11
            echo "
    </div>
";
        }
        // line 14
        echo "<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "IcapNotificationBundle:Templates:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  28 => 11,  26 => 9,  25 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapNotificationBundle:Templates:pagination.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/notification/Resources/views/Templates/pagination.html.twig");
    }
}
