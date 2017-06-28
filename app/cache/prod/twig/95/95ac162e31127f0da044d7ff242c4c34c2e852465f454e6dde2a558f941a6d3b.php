<?php

/* IcapSocialmediaBundle:Wall:view.html.twig */
class __TwigTemplate_50bc2fa39248a670c561e790d9f24620810de53bf33e667733e6d9a38d1c3795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "IcapSocialmediaBundle:Wall:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("socialmedia_wall", array(), "resource") . " - ") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getLastName", array(), "method")) . " ") . strip_tags($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getFirstName", array(), "method"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "flashBox", array(), "method"), "html", null, true);
        echo "
    <div class=\"panel panel-default panel-user\">
        <div class=\"panel-heading relative\">
            <h3 class=\"panel-title\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("socialmedia_wall", array(), "resource"), "html", null, true);
        echo "
            </h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"social-media-wall-list\">
                ";
        // line 15
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "nbResults", array()) > 0)) {
            // line 16
            echo "                <div class=\"jscroll-wall-list list-group\">
                    ";
            // line 17
            $this->loadTemplate("IcapSocialmediaBundle:Wall:itemList.html.twig", "IcapSocialmediaBundle:Wall:view.html.twig", 17)->display(array_merge($context, array("pager" => (isset($context["pager"]) ? $context["pager"] : null), "userId" => (isset($context["userId"]) ? $context["userId"] : null))));
            // line 18
            echo "                </div>
                ";
        } else {
            // line 20
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_wall_item", array(), "icap_socialmedia"), "html", null, true);
            echo "</div>
                ";
        }
        // line 22
        echo "            </div>
        </div>
    </div>
";
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel='stylesheet' type='text/css' href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapsocialmedia/css/wall.css"), "html", null, true);
        echo "'>
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/icapsocialmedia/js/jquery.jscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(initializeJscroll);
        function initializeJscroll()
        {
            \$('.jscroll-wall-list').jscroll({
                loadingHtml: '<div class=\"list-group-item list-group-item-loading\"><i class=\"fa fa-spinner fa-pulse\"></i></div>',
                padding: 20,
                nextSelector: 'a.jscroll-wall-list-next',
                contentSelector: 'div',
                autoTrigger: false,
                callback: removeParentClass
            });
            ";
        // line 46
        if ((isset($context["isOwner"]) ? $context["isOwner"] : null)) {
            // line 47
            echo "            var deleteUrl = \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("icap_socialmedia_wall_item_delete", array("id" => "000"));
            echo "\";
            \$('.remove-sociamedia-wall-item').on(\"click\", function(){
                var itemId = \$(this).attr(\"data-item-id\");
                \$.ajax({
                    url: deleteUrl.replace(\"000\", itemId),
                    method: \"DELETE\"
                }).done(function(){
                    \$(\"#socialmedia-wall-item-\"+itemId).remove();
                }).fail(function(){
                    alert(\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("error_deleting", array(), "icap_socialmedia"), "html", null, true);
            echo "\");
                });
            });
            ";
        }
        // line 60
        echo "        }
        function removeParentClass()
        {
            \$('div.jscroll-wall-list').find('.jscroll-added').each(function(){
                        var contents = \$(this).contents();
                        \$(this).replaceWith(contents);
                    }
            );
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "IcapSocialmediaBundle:Wall:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  133 => 56,  120 => 47,  118 => 46,  102 => 33,  97 => 32,  94 => 31,  88 => 29,  83 => 28,  80 => 27,  73 => 22,  67 => 20,  63 => 18,  61 => 17,  58 => 16,  56 => 15,  48 => 10,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapSocialmediaBundle:Wall:view.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/social-media/Resources/views/Wall/view.html.twig");
    }
}
