<?php

/* ClarolineVideoPlayerBundle::scripts.html.twig */
class __TwigTemplate_811ae191df5958fd2798bf972e22383474383a124b17f4dad9893eaf5fdfa3e8 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/video.js/dist/video.min.js"), "html", null, true);
        echo "\"></script>
<script>
    videojs.options.flash.swf = \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/video.js/dist/video-js.swf"), "html", null, true);
        echo "\"
</script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Claroline\CoreBundle\Twig\WebpackExtension')->hotAsset("dist/claroline-distribution-plugin-video-player-watcher"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("packages/video.js/dist/video-js.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "ClarolineVideoPlayerBundle::scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  30 => 5,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineVideoPlayerBundle::scripts.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/video-player/Resources/views/scripts.html.twig");
    }
}
