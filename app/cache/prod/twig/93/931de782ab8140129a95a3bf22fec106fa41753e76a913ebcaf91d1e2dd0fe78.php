<?php

/* ClarolineCoreBundle:Resource:uploadModal.html.twig */
class __TwigTemplate_41a75ea02f226495f2bf3468a87a917eabd92ef5597f5e34b363e6af4f6be7ca extends Twig_Template
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
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("upload", array(), "platform"), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"modal-body text-center\">
            <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("upload_file", array(), "platform"), "html", null, true);
        echo ":</p>
            <form role=\"form\" enctype=\"multipart/form-data\">
                <input
                    type=\"file\"
                    name='file_form[file]'
                    id='file_form_file'
                    style='position:absolute;top:-1000px;'
                >
                ";
        // line 16
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destination", array(), "any", true, true)) {
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "destination", array()), 'row');
            echo " ";
        }
        // line 17
        echo "            </form>
            <button type=\"button\" class=\"btn btn-primary btn-lg filePicker\">
                <i class='fa fa-file'></i>
            </button>
            <div class=\"progress margin-top-md hide\">
                <div role=\"progressbar\" class=\"progress-bar\" data-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    <span class=\"sr-only\">0%</span>
                </div>
            </div>
            <hr>
            <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("choose_from_resource_manager", array(), "platform"), "html", null, true);
        echo ":</p>
            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-primary btn-lg resourcePicker\">
                <i class=\"fa fa-folder-open\"></i>
            </button>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "platform"), "html", null, true);
        echo "</button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Resource:uploadModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 33,  60 => 27,  48 => 17,  42 => 16,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Resource:uploadModal.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Resource/uploadModal.html.twig");
    }
}
