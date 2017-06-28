<?php

/* ClarolineCoreBundle:Notification:notification_subscribe_user.html.twig */
class __TwigTemplate_347151215b408527c096362ecad560d08a4b15d440f18b7ea94937d4110662d5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "actionKey", array()), array("%role%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "details", array()), "role", array()), "name", array()), array(), "platform")), "notification"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Notification:notification_subscribe_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Notification:notification_subscribe_user.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Notification/notification_subscribe_user.html.twig");
    }
}
