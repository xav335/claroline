<?php

/* ClarolineCoreBundle:Authentication:loginAjaxForm.html.twig */
class __TwigTemplate_7f3919f4d29c212ea7fb5a5d75862e84a7549e598e5d66d6505d9e5889df83c9 extends Twig_Template
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
        echo "<div class=\"modal-dialog\">
    <form role=\"form\" id=\"login-form\" class=\"modal-content\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_security_login_check");
        echo "\" method=\"post\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login", array(), "platform"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"username\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username_or_email", array(), "platform"), "html", null, true);
        echo " :</label>
                <input class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username_or_email", array(), "platform"), "html", null, true);
        echo "\"  autofocs type=\"text\" id=\"username\" name=\"_username\" required=\"required\"/>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password", array(), "platform"), "html", null, true);
        echo " :</label>
                <input class=\"form-control\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password", array(), "platform"), "html", null, true);
        echo "\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("login", array(), "platform"), "html", null, true);
        echo "</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Authentication:loginAjaxForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  56 => 18,  49 => 14,  45 => 13,  39 => 10,  35 => 9,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Authentication:loginAjaxForm.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Authentication/loginAjaxForm.html.twig");
    }
}
