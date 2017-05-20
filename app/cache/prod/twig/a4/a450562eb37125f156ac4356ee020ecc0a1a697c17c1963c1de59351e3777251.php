<?php

/* IcapBlogBundle:Form:fields.html.twig */
class __TwigTemplate_f3e39ed0cf02beed38f16025ffdd713c9a60ef3d097a4133f17ca92b6ae4278f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listWidgetBlog_widget' => array($this, 'block_listWidgetBlog_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('listWidgetBlog_widget', $context, $blocks);
    }

    public function block_listWidgetBlog_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"form-group row\">
            <label class=\"control-label col-md-3\"> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("icap_blog_options_form_Order_Widget_Right", array(), "icap_blog"), "html", null, true);
        echo " </label>
            <div class=\"col-md-9\">
                ";
        // line 6
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
                <ul id=\"sortable\" ";
        // line 7
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgetLists"]) ? $context["widgetLists"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entityWidget"]) {
            // line 9
            echo "                        <li id=\"widget";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                            <i class=\"fa fa-eye btn btn-default visibleWidgetSortable ";
            // line 10
            if (($this->getAttribute($context["entityWidget"], "visible", array()) == false)) {
                echo " closed-eye ";
            }
            echo "\"></i>
                            <div id=\"option";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["entityWidget"], "option", array()), "html", null, true);
            echo "\" class=\"btn btn-default widgetNameSortable\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["entityWidget"], "label", array()), array(), "icap_blog"), "html", null, true);
            echo "</div>
                        </li>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityWidget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
            </div>
        </div>

        <script type=\"text/javascript\">
            \$(document).ready( function(){

                /***************************************************************
                On utilise un masque de bits pour gérer l'ordre des widget.
                On a une paire par widget.

                Le premier numéro correspond à l'id de l'élément.
                Le second numéro correspond à la visibilité.

                L'id des elements : 0.Recherche / 1.Info bar / 2.Flux RSS /
                3.Nuage de tags / 4.Rédacteurs / 5.Calendrier / 6.Archives
                ****************************************************************/
                /*Order Option*/

                String.prototype.replaceAt=function(index, char) {
                    return this.substr(0, index) + char + this.substr(index+char.length);
                }


                \$( \"#sortable\" ).sortable({
                    start: function(event, ui){
                        var start_pos = ui.item.index();
                        ui.item.data('start_pos', start_pos);
                    },
                    update: function (event, ui){
                        var start_pos = ui.item.data('start_pos');
                        var end_pos = ui.item.index();
                        //Recuperation de la chaine dans le label
                        var chaine = \$( \"#icap_blog_options_form_listWidgetBlog\" ).val();

                        //Modificaation du masque pour le déplacement
                        var doubletteSelect=chaine.substr(start_pos*2,2);
                        var chaineSansSousChaine = chaine.slice(0,(start_pos*2))+chaine.slice((start_pos*2)+2,chaine.length);
                        var newChaine=chaineSansSousChaine.slice(0,end_pos*2)+doubletteSelect+chaineSansSousChaine.slice((end_pos*2),chaine.length);

                        for(var pos_chaine=0; pos_chaine<newChaine.length; pos_chaine+=2 )
                        {
                            var index_enfant=(parseInt(newChaine.charAt(pos_chaine)));
                            \$(\"#panel\"+index_enfant).appendTo(\$(\".row aside.col-lg-4\"));
                        }

                        \$( \"#icap_blog_options_form_listWidgetBlog\" ).val(newChaine);
                    }
                });

                /*Decalage calendrier*/
                if(\$(\"#panel5.hidden\")){
                    \$(\"#panel5\").removeClass('visible-lg');
                }
                else
                {
                    \$(\"#panel5\").addClass('visible-lg');
                }



                /* Visibilité */

                \$( \"#sortable\" ).disableSelection();


                //Fermer les yeux des options correspondant aux panels
                \$( \".col-lg-4 .hidden\").each(function()
                {
                    //panel3 met class closed-eye au i et une opacité a 0.5 au papa

                    var idPanel = \$(this).attr('id');
                    var finalNumberPanel = parseInt(idPanel.slice(-1));

                    \$(\"#option\"+finalNumberPanel).prev().addClass('closed-eye');
                    \$(\"#option\"+finalNumberPanel).parent().css({ opacity: 0.5 });
                });


                \$( \".visibleWidgetSortable\" ).click(function() {

                    var idSelected = \$(this).next().attr('id');
                    var lastNumberId = idSelected[idSelected.length -1];
                    var chainetmp =\$( \"#icap_blog_options_form_listWidgetBlog\" ).val();
                    for(var replace=1; replace<chainetmp.length; replace+=2)
                    {
                        chainetmp=chainetmp.replaceAt(replace, 'X');
                    }
                    var posId = chainetmp.indexOf(lastNumberId);


                    if(\$(this).parent().css('opacity') == 1){
                        var chaine1 = \$( \"#icap_blog_options_form_listWidgetBlog\" ).val().substr(0, posId+1);
                        var chaine2 = \$( \"#icap_blog_options_form_listWidgetBlog\" ).val().substr(posId+2,14);
                        \$( \"#icap_blog_options_form_listWidgetBlog\" ).val(chaine1+\"0\"+chaine2);

                        \$(this).parent().animate({opacity:0.5}, 250);
                        \$(this).addClass(\"closed-eye\");

                        \$(\"#panel\"+lastNumberId).addClass(\"hidden\");

                    } else{
                        var chaine1 = \$( \"#icap_blog_options_form_listWidgetBlog\" ).val().substr(0, posId+1);
                        var chaine2 = \$( \"#icap_blog_options_form_listWidgetBlog\" ).val().substr(posId+2,14);
                        \$( \"#icap_blog_options_form_listWidgetBlog\" ).val(chaine1+\"1\"+chaine2);

                        \$(this).parent().animate({opacity:1}, 250);
                        \$(this).removeClass(\"closed-eye\");

                        \$(\"#panel\"+lastNumberId).removeClass(\"hidden\");
                    }
                });

            });
        </script>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "IcapBlogBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  73 => 11,  67 => 10,  62 => 9,  45 => 8,  41 => 7,  37 => 6,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IcapBlogBundle:Form:fields.html.twig", "/var/www/claroline/vendor/claroline/distribution/plugin/blog/Resources/views/Form/fields.html.twig");
    }
}
