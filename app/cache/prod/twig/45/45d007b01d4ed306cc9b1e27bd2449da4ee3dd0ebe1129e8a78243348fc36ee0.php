<?php

/* ClarolineCoreBundle:Contact:myContactsToolIndex.html.twig */
class __TwigTemplate_3253ee8936302f44d40b90b8110d0a928dcef3de40b3d2d99543e65ebffdf487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClarolineCoreBundle:Desktop:layout.html.twig", "ClarolineCoreBundle:Contact:myContactsToolIndex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClarolineCoreBundle:Desktop:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 155
        $context["__internal_d6a1a56af3f70313d8e51d070d75c92cb268e4d3195c73379cf9d3eddbc41b45"] = $this;
        // line 156
        $context["__internal_cd8408ba0e75ea44436151ee52e954dff7ba04ad3c678087371f5b90f504ba2d"] = $this;
        // line 157
        $context["__internal_d4efce9544f7cc6539e0b955b4511a0dbd52360b028056db251b95025b2856f5"] = $this;
        // line 158
        $context["__internal_bb7a20ca14b04f02fffaba29eb578847b2c5cf1d35c713bc2149c81b483c8231"] = $this;
        // line 159
        $context["__internal_b80b4b0f7ad69a9744eaf77c1f07646752b9b7aa060780654450cbcf238ca59e"] = $this;
        // line 160
        $context["__internal_0b0500668e5330ed041ee2452ce11e6b4877cb3195aeaf464cd45787d2e27b69"] = $this;
        // line 161
        $context["__internal_2a706aca1c067dca839369cb390ac34cae38648b816f617a340512b5ed0a32fc"] = $this;
        // line 162
        $context["__internal_3e8f06d269a7cf0de79420d67675c5c5366e0fa4b426cb0f51db5aad57e8dffb"] = $this;
        // line 163
        $context["__internal_b11c319f88b618b00b62af4890b0eb0ca6b4a4efa3545d8612e1c92ba65123cb"] = $this->loadTemplate("ClarolineCoreBundle::macros.html.twig", "ClarolineCoreBundle:Contact:myContactsToolIndex.html.twig", 163);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 166
    public function block_title($context, array $blocks = array())
    {
        // line 167
        echo "    ";
        echo strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_contacts", array(), "tools"));
        echo "
";
    }

    // line 170
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 171
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(        // line 172
(isset($context["macros"]) ? $context["macros"] : null), "desktopBreadcrumbs", array(0 => array(0 => array("name" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_contacts", array(), "tools"), "href" => ""))), "method"), "html", null, true);
        // line 178
        echo "
";
    }

    // line 181
    public function block_content($context, array $blocks = array())
    {
        // line 182
        echo "    <div class=\"panel panel-default\" id=\"my-contacts-tool\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
                ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("my_contacts", array(), "tools"), "html", null, true);
        echo "
                <span class=\"dropdown pull-right\">
                    <i class=\"fa fa-cog pointer-hand\"
                       data-toggle=\"dropdown\"
                    >
                    </i>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li role=\"presentation\" id=\"contacts-configure-btn\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                <i class=\"fa fa-wrench\"></i>
                                ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("configure", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li role=\"presentation\" id=\"category-create-btn\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                <i class=\"fa fa-plus-circle\"></i>
                                ";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_category", array(), "platform"), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>
                </span>
            </h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 209
        if ( !twig_test_empty((isset($context["search"]) ? $context["search"] : null))) {
            // line 210
            echo "                <div class=\"alert alert-info\">
                    ";
            // line 211
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("results_for_search_on", array(), "platform"), "html", null, true);
            echo " :
                    \"";
            // line 212
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
            echo "\"
                </div>
            ";
        }
        // line 215
        echo "
            <div class=\"row\">
                <div class=\"col-md-4 pull-right\">
                    <div class=\"input-group margin-bottom-md\">
                        <input class=\"form-control search-contact\"
                               type=\"text\"
                               id=\"search-contact-input\"
                               placeholder=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search", array(), "platform"), "html", null, true);
        echo "\"
                               value=\"";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\"
                        >
                        <span class=\"input-group-btn\">
                            <button class=\"filter btn btn-default search-contact-btn\"
                                    type=\"button\"
                                    id=\"search-contact-btn\"
                            >
                                <i class=\"fa fa-search\"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <br>

            ";
        // line 238
        if (twig_test_empty((isset($context["search"]) ? $context["search"] : null))) {
            // line 239
            echo "
                ";
            // line 240
            if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_all_my_contacts", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_all_my_contacts", array(), "array"))) {
                // line 241
                echo "                    <div class=\"panel panel-success\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" href=\"#all-my-contacts-content\">
                                    ";
                // line 245
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_my_contacts", array(), "platform"), "html", null, true);
                echo "
                                </a>
                                &nbsp;
                                <span class=\"badge\" id=\"all-my-contacts-badge\">
                                    ";
                // line 249
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "all_my_contacts", array(), "array")), "html", null, true);
                echo "
                                </span>
                                <i class=\"fa fa-user-plus pointer-hand pull-right\"
                                   id=\"add-contacts-btn\"
                                   data-toggle=\"tooltip\"
                                   data-placement=\"left\"
                                   title=\"";
                // line 255
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_contacts", array(), "platform"), "html", null, true);
                echo "\"
                                ></i>
                            </h4>
                        </div>
                        <div id=\"all-my-contacts-content\" class=\"panel-collapse collapse in\">
                            <div class=\"panel-body\" id=\"all-my-contacts-content-body\">

                                ";
                // line 262
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "all_my_contacts", array(), "array")) > 0)) {
                    // line 263
                    echo "
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"input-group margin-bottom-md pull-left\">
                                                ";
                    // line 267
                    if (($this->getAttribute($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "all_my_contacts", array(), "array"), "getNbPages", array(), "method") > 1)) {
                        // line 268
                        echo "                                                    ";
                        echo $context["__internal_cd8408ba0e75ea44436151ee52e954dff7ba04ad3c678087371f5b90f504ba2d"]->getrenderAllMyContactsPager($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "all_my_contacts", array(), "array"), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                        echo "
                                                ";
                    }
                    // line 270
                    echo "                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"input-group pull-right\" style=\"margin: 20px 0\">
                                                ";
                    // line 274
                    echo $context["__internal_b11c319f88b618b00b62af4890b0eb0ca6b4a4efa3545d8612e1c92ba65123cb"]->getmaxResultsSelectBox((isset($context["max"]) ? $context["max"] : null), "\$('#max-results-button').trigger('click');", "contacts_per_page");
                    echo "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"table-responsive\">
                                        <table class=\"table\">
                                            <tr>
                                                ";
                    // line 282
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                        // line 283
                        echo "                                                    <th>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("picture", array(), "platform"), "html", null, true);
                        echo "</th>
                                                ";
                    }
                    // line 285
                    echo "                                                ";
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                        // line 286
                        echo "                                                    <th>
                                                        <a href=\"";
                        // line 287
                        echo twig_escape_filter($this->env, trim($context["__internal_0b0500668e5330ed041ee2452ce11e6b4877cb3195aeaf464cd45787d2e27b69"]->getsortAllMyContactsUrl((isset($context["max"]) ? $context["max"] : null), "username", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                            ";
                        // line 288
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
                        echo "
                                                        </a>
                                                    </th>
                                                ";
                    }
                    // line 292
                    echo "                                                <th>
                                                    <a href=\"";
                    // line 293
                    echo twig_escape_filter($this->env, trim($context["__internal_0b0500668e5330ed041ee2452ce11e6b4877cb3195aeaf464cd45787d2e27b69"]->getsortAllMyContactsUrl((isset($context["max"]) ? $context["max"] : null), "firstName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                        ";
                    // line 294
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("firstName", array(), "platform"), "html", null, true);
                    echo "
                                                    </a>
                                                </th>
                                                <th>
                                                    <a href=\"";
                    // line 298
                    echo twig_escape_filter($this->env, trim($context["__internal_0b0500668e5330ed041ee2452ce11e6b4877cb3195aeaf464cd45787d2e27b69"]->getsortAllMyContactsUrl((isset($context["max"]) ? $context["max"] : null), "lastName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                        ";
                    // line 299
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lastName", array(), "platform"), "html", null, true);
                    echo "
                                                    </a>
                                                </th>

                                                ";
                    // line 303
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                        // line 304
                        echo "                                                    <th>
                                                        <a href=\"";
                        // line 305
                        echo twig_escape_filter($this->env, trim($context["__internal_0b0500668e5330ed041ee2452ce11e6b4877cb3195aeaf464cd45787d2e27b69"]->getsortAllMyContactsUrl((isset($context["max"]) ? $context["max"] : null), "mail", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                            ";
                        // line 306
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
                        echo "
                                                        </a>
                                                    </th>
                                                ";
                    }
                    // line 310
                    echo "
                                                ";
                    // line 311
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                        // line 312
                        echo "                                                    <th>
                                                        <a href=\"";
                        // line 313
                        echo twig_escape_filter($this->env, trim($context["__internal_0b0500668e5330ed041ee2452ce11e6b4877cb3195aeaf464cd45787d2e27b69"]->getsortAllMyContactsUrl((isset($context["max"]) ? $context["max"] : null), "phone", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                            ";
                        // line 314
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("phone", array(), "platform"), "html", null, true);
                        echo "
                                                        </a>
                                                    </th>
                                                ";
                    }
                    // line 318
                    echo "                                                <th>
                                                    ";
                    // line 319
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "platform"), "html", null, true);
                    echo "
                                                </th>
                                            </tr>

                                            ";
                    // line 323
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "all_my_contacts", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        // line 324
                        echo "                                                <tr class=\"contact-row-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                        echo "\">
                                                    ";
                        // line 325
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                            // line 326
                            echo "                                                        <td>
                                                            ";
                            // line 327
                            if (($this->getAttribute($context["contact"], "getPicture", array(), "method") != "")) {
                                // line 328
                                echo "                                                                <img src=\"";
                                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/") . $this->getAttribute($context["contact"], "getPicture", array(), "method")), "html", null, true);
                                echo "\"
                                                                     class=\"profile_picture img-circle\"
                                                                     alt=\"";
                                // line 330
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["contact"], "getLastName", array(), "method") . " ") . $this->getAttribute($context["contact"], "getFirstName", array(), "method")), "html", null, true);
                                echo "\"
                                                                     width=\"50px\"
                                                                     height=\"50px\"
                                                                >
                                                            ";
                            } else {
                                // line 335
                                echo "                                                                <h1 class=\"profile_picture_placeholder\">
                                                                    <i class=\"fa fa-user\"></i>
                                                                </h1>
                                                            ";
                            }
                            // line 339
                            echo "                                                        </td>
                                                    ";
                        }
                        // line 341
                        echo "                                                    ";
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                            // line 342
                            echo "                                                        <td><a class=\"standard-link\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_profile_view", array("user" => $this->getAttribute($context["contact"], "getId", array(), "method"))), "html", null, true);
                            echo "\"> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getUsername", array(), "method"), "html", null, true);
                            echo " </a></td>
                                                    ";
                        }
                        // line 344
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getFirstName", array(), "method"), "html", null, true);
                        echo "</td>
                                                    <td>";
                        // line 345
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getLastName", array(), "method"), "html", null, true);
                        echo "</td>

                                                    ";
                        // line 347
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                            // line 348
                            echo "                                                        <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getMail", array(), "method"), "html", null, true);
                            echo "</td>
                                                    ";
                        }
                        // line 350
                        echo "
                                                    ";
                        // line 351
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                            // line 352
                            echo "                                                        <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getPhone", array(), "method"), "html", null, true);
                            echo "</td>
                                                    ";
                        }
                        // line 354
                        echo "                                                    <td>
                                                        <div class=\"btn-toolbar\">
                                                            <div class=\"btn-group\">
                                                                <span class=\"btn btn-default add-contact-to-category \"
                                                                      data-contact-id=\"";
                        // line 358
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                        echo "\"
                                                                      data-toggle=\"tooltip\"
                                                                      data-placement=\"left\"
                                                                      title=\"";
                        // line 361
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_contact_to_category", array(), "platform"), "html", null, true);
                        echo "\"
                                                                >
                                                                    <i class=\"fa fa-bars\"></i>
                                                                </span>
                                                                <span class=\"btn btn-danger delete-contact\"
                                                                      data-contact-id=\"";
                        // line 366
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                        echo "\"
                                                                      data-toggle=\"tooltip\"
                                                                      data-placement=\"left\"
                                                                      title=\"";
                        // line 369
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_contact", array(), "platform"), "html", null, true);
                        echo "\"
                                                                >
                                                                    <i class=\"fa fa-times-circle\"></i>
                                                                </span>
                                                            </div>
                                                            ";
                        // line 374
                        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:contactActionsMenu", array(), array("user" => $context["contact"]));
                        // line 375
                        echo "                                                            ";
                        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : null), array(), "contact_additional_actions");
                        echo "
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 380
                    echo "                                        </table>
                                    </div>

                                    ";
                    // line 383
                    if (($this->getAttribute($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "all_my_contacts", array(), "array"), "getNbPages", array(), "method") > 1)) {
                        // line 384
                        echo "                                        ";
                        echo $context["__internal_cd8408ba0e75ea44436151ee52e954dff7ba04ad3c678087371f5b90f504ba2d"]->getrenderAllMyContactsPager($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "all_my_contacts", array(), "array"), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                        echo "
                                    ";
                    }
                    // line 386
                    echo "                                ";
                } else {
                    // line 387
                    echo "                                    <div class=\"alert alert-warning\">
                                        ";
                    // line 388
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_contact", array(), "platform"), "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                // line 391
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            // line 395
            echo "
                <div class=\"panel-group\" role=\"tablist\" id=\"category-list-box\">
                    ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 398
                echo "                        ";
                $context["categoryId"] = $this->getAttribute($context["category"], "getId", array(), "method");
                // line 399
                echo "                        <div class=\"panel panel-info category-element\"
                             id=\"category-box-";
                // line 400
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                             style=\"overflow: visible\"
                        >
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\"
                                       href=\"#category-content-";
                // line 406
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                                       id=\"category-title-";
                // line 407
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                                    >
                                        ";
                // line 409
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "getName", array(), "method"), "html", null, true);
                echo "
                                    </a>
                                    &nbsp;
                                    <span class=\"badge\" id=\"category-badge-";
                // line 412
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\">

                                        ";
                // line 414
                if ($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array", true, true)) {
                    // line 415
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array")), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 417
                    echo "                                            -
                                        ";
                }
                // line 419
                echo "                                    </span>
                                    <span class=\"dropdown pull-right\">
                                        <i class=\"fa fa-cogs pointer-hand\"
                                           data-toggle=\"dropdown\"
                                        >
                                        </i>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li role=\"presentation\"
                                                class=\"add-user-to-category-btn\"
                                                data-category-id=\"";
                // line 428
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                                            >
                                                <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                    <i class=\"fa fa-user-plus\"></i>
                                                    ";
                // line 432
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_contacts", array(), "platform"), "html", null, true);
                echo "
                                                </a>
                                            </li>
                                            <li role=\"presentation\"
                                                class=\"category-edit-btn\"
                                                data-category-id=\"";
                // line 437
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                                            >
                                                <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                    <i class=\"fa fa-edit\"></i>
                                                    ";
                // line 441
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rename", array(), "platform"), "html", null, true);
                echo "
                                                </a>
                                            </li>
                                            <li role=\"presentation\"
                                                class=\"category-delete-btn\"
                                                data-category-id=\"";
                // line 446
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                                            >
                                                <a role=\"menuitem\" tabindex=\"-1\" href=\"#\">
                                                    <i class=\"fa fa-times-circle\"></i>
                                                    ";
                // line 450
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete", array(), "platform"), "html", null, true);
                echo "
                                                </a>
                                            </li>
                                        </ul>
                                    </span>
                                </h4>
                            </div>
                            <div id=\"category-content-";
                // line 457
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body category-content-body\"
                                     id=\"category-content-body-";
                // line 459
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                                     data-category-id=\"";
                // line 460
                echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                echo "\"
                                >
                                    ";
                // line 462
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array")) > 0)) {
                    // line 463
                    echo "
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"input-group margin-bottom-md pull-left\">

                                                    ";
                    // line 468
                    if (($this->getAttribute($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array"), "getNbPages", array(), "method") > 1)) {
                        // line 469
                        echo "                                                        ";
                        echo $context["__internal_d4efce9544f7cc6539e0b955b4511a0dbd52360b028056db251b95025b2856f5"]->getrenderCategoryContactsPager($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array"), (isset($context["categoryId"]) ? $context["categoryId"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                        echo "
                                                    ";
                    }
                    // line 471
                    echo "                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"input-group pull-right\" style=\"margin: 20px 0\">
                                                    ";
                    // line 475
                    echo $context["__internal_b11c319f88b618b00b62af4890b0eb0ca6b4a4efa3545d8612e1c92ba65123cb"]->getmaxResultsSelectBox((isset($context["max"]) ? $context["max"] : null), "\$('#max-results-button').trigger('click');", "contacts_per_page");
                    echo "
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <tr>
                                                    ";
                    // line 483
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                        // line 484
                        echo "                                                        <th>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("picture", array(), "platform"), "html", null, true);
                        echo "</th>
                                                    ";
                    }
                    // line 486
                    echo "                                                    <th>
                                                        <a href=\"";
                    // line 487
                    echo twig_escape_filter($this->env, trim($context["__internal_2a706aca1c067dca839369cb390ac34cae38648b816f617a340512b5ed0a32fc"]->getsortCategoryContactsUrl((isset($context["categoryId"]) ? $context["categoryId"] : null), (isset($context["max"]) ? $context["max"] : null), "firstName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                            ";
                    // line 488
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("firstName", array(), "platform"), "html", null, true);
                    echo "
                                                        </a>
                                                    </th>
                                                    <th>
                                                        <a href=\"";
                    // line 492
                    echo twig_escape_filter($this->env, trim($context["__internal_2a706aca1c067dca839369cb390ac34cae38648b816f617a340512b5ed0a32fc"]->getsortCategoryContactsUrl((isset($context["categoryId"]) ? $context["categoryId"] : null), (isset($context["max"]) ? $context["max"] : null), "lastName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                            ";
                    // line 493
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lastName", array(), "platform"), "html", null, true);
                    echo "
                                                        </a>
                                                    </th>

                                                    ";
                    // line 497
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                        // line 498
                        echo "                                                        <th>
                                                            <a href=\"";
                        // line 499
                        echo twig_escape_filter($this->env, trim($context["__internal_2a706aca1c067dca839369cb390ac34cae38648b816f617a340512b5ed0a32fc"]->getsortCategoryContactsUrl((isset($context["categoryId"]) ? $context["categoryId"] : null), (isset($context["max"]) ? $context["max"] : null), "username", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                                ";
                        // line 500
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
                        echo "
                                                            </a>
                                                        </th>
                                                    ";
                    }
                    // line 504
                    echo "
                                                    ";
                    // line 505
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                        // line 506
                        echo "                                                        <th>
                                                            <a href=\"";
                        // line 507
                        echo twig_escape_filter($this->env, trim($context["__internal_2a706aca1c067dca839369cb390ac34cae38648b816f617a340512b5ed0a32fc"]->getsortCategoryContactsUrl((isset($context["categoryId"]) ? $context["categoryId"] : null), (isset($context["max"]) ? $context["max"] : null), "mail", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                                ";
                        // line 508
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
                        echo "
                                                            </a>
                                                        </th>
                                                    ";
                    }
                    // line 512
                    echo "
                                                    ";
                    // line 513
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                        // line 514
                        echo "                                                        <th>
                                                            <a href=\"";
                        // line 515
                        echo twig_escape_filter($this->env, trim($context["__internal_2a706aca1c067dca839369cb390ac34cae38648b816f617a340512b5ed0a32fc"]->getsortCategoryContactsUrl((isset($context["categoryId"]) ? $context["categoryId"] : null), (isset($context["max"]) ? $context["max"] : null), "phone", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                                ";
                        // line 516
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("phone", array(), "platform"), "html", null, true);
                        echo "
                                                            </a>
                                                        </th>
                                                    ";
                    }
                    // line 520
                    echo "                                                    <th>
                                                        ";
                    // line 521
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "platform"), "html", null, true);
                    echo "
                                                    </th>
                                                </tr>

                                                ";
                    // line 525
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        // line 526
                        echo "                                                    <tr class=\"contact-row-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                        echo " contact-row-";
                        echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                        echo "\"
                                                        data-category-id=\"";
                        // line 527
                        echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                        echo "\"
                                                    >
                                                        ";
                        // line 529
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                            // line 530
                            echo "                                                            <td>
                                                                ";
                            // line 531
                            if (($this->getAttribute($context["contact"], "getPicture", array(), "method") != "")) {
                                // line 532
                                echo "                                                                    <img src=\"";
                                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/") . $this->getAttribute($context["contact"], "getPicture", array(), "method")), "html", null, true);
                                echo "\"
                                                                         class=\"profile_picture img-circle\"
                                                                         alt=\"";
                                // line 534
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["contact"], "getLastName", array(), "method") . " ") . $this->getAttribute($context["contact"], "getFirstName", array(), "method")), "html", null, true);
                                echo "\"
                                                                         width=\"50px\"
                                                                         height=\"50px\"
                                                                    >
                                                                ";
                            } else {
                                // line 539
                                echo "                                                                    <h1 class=\"profile_picture_placeholder\">
                                                                        <i class=\"fa fa-user\"></i>
                                                                    </h1>
                                                                ";
                            }
                            // line 543
                            echo "                                                            </td>
                                                        ";
                        }
                        // line 545
                        echo "                                                        <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getFirstName", array(), "method"), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 546
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getLastName", array(), "method"), "html", null, true);
                        echo "</td>

                                                        ";
                        // line 548
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                            // line 549
                            echo "                                                            <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getUsername", array(), "method"), "html", null, true);
                            echo "</td>
                                                        ";
                        }
                        // line 551
                        echo "
                                                        ";
                        // line 552
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                            // line 553
                            echo "                                                            <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getMail", array(), "method"), "html", null, true);
                            echo "</td>
                                                        ";
                        }
                        // line 555
                        echo "
                                                        ";
                        // line 556
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                            // line 557
                            echo "                                                            <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getPhone", array(), "method"), "html", null, true);
                            echo "</td>
                                                        ";
                        }
                        // line 559
                        echo "                                                        <td>
                                                            <div class=\"btn-toolbar\">
                                                                <div class=\"btn-group\">
                                                                    <span class=\"btn btn-danger remove-contact\"
                                                                          data-contact-id=\"";
                        // line 563
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                        echo "\"
                                                                          data-category-id=\"";
                        // line 564
                        echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
                        echo "\"
                                                                          data-toggle=\"tooltip\"
                                                                          data-placement=\"left\"
                                                                          title=\"";
                        // line 567
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("remove_contact_from_category", array(), "platform"), "html", null, true);
                        echo "\"
                                                                    >
                                                                        <i class=\"fa fa-times-circle\"></i>
                                                                    </span>
                                                                </div>
                                                                ";
                        // line 572
                        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:contactActionsMenu", array(), array("user" => $context["contact"]));
                        // line 573
                        echo "                                                                ";
                        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : null), array(), "contact_additional_actions");
                        echo "
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 578
                    echo "                                            </table>
                                        </div>

                                        ";
                    // line 581
                    if (($this->getAttribute($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array"), "getNbPages", array(), "method") > 1)) {
                        // line 582
                        echo "                                            ";
                        echo $context["__internal_d4efce9544f7cc6539e0b955b4511a0dbd52360b028056db251b95025b2856f5"]->getrenderCategoryContactsPager($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["categoryId"]) ? $context["categoryId"] : null), array(), "array"), (isset($context["categoryId"]) ? $context["categoryId"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                        echo "
                                        ";
                    }
                    // line 584
                    echo "                                    ";
                } else {
                    // line 585
                    echo "                                        <div class=\"alert alert-warning\">
                                            ";
                    // line 586
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_contact", array(), "platform"), "html", null, true);
                    echo "
                                        </div>
                                    ";
                }
                // line 589
                echo "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 593
            echo "                </div>
                <br>

                ";
            // line 596
            if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_all_visible_users", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_all_visible_users", array(), "array"))) {
                // line 597
                echo "                    <div id=\"all-visible-users-box\">
                        <div class=\"panel panel-danger\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#all-visible-users-content\">
                                        ";
                // line 602
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_visible_users", array(), "platform"), "html", null, true);
                echo "
                                    </a>
                                    &nbsp;
                                    <span class=\"badge\" id=\"all-visible-users-badge\">
                                        ";
                // line 606
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : null)), "html", null, true);
                echo "
                                    </span>
                                </h4>
                            </div>
                            <div id=\"all-visible-users-content\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"all-visible-users-content-body\">

                                    ";
                // line 613
                if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : null)) > 0)) {
                    // line 614
                    echo "
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"input-group margin-bottom-md pull-left\">
                                                    ";
                    // line 618
                    if (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), "getNbPages", array(), "method") > 1)) {
                        // line 619
                        echo "                                                        ";
                        echo $context["__internal_bb7a20ca14b04f02fffaba29eb578847b2c5cf1d35c713bc2149c81b483c8231"]->getrenderAllVisibleUsersPager((isset($context["users"]) ? $context["users"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                        echo "
                                                    ";
                    }
                    // line 621
                    echo "                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"input-group pull-right\" style=\"margin: 20px 0\">
                                                    ";
                    // line 625
                    echo $context["__internal_b11c319f88b618b00b62af4890b0eb0ca6b4a4efa3545d8612e1c92ba65123cb"]->getmaxResultsSelectBox((isset($context["max"]) ? $context["max"] : null), "\$('#max-results-button').trigger('click');", "users_per_page");
                    echo "
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <tr>
                                                    ";
                    // line 633
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                        // line 634
                        echo "                                                        <th>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("picture", array(), "platform"), "html", null, true);
                        echo "</th>
                                                    ";
                    }
                    // line 636
                    echo "                                                    <th>
                                                        <a href=\"";
                    // line 637
                    echo twig_escape_filter($this->env, trim($context["__internal_3e8f06d269a7cf0de79420d67675c5c5366e0fa4b426cb0f51db5aad57e8dffb"]->getsortAllVisibleUsersUrl((isset($context["max"]) ? $context["max"] : null), "firstName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                            ";
                    // line 638
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("firstName", array(), "platform"), "html", null, true);
                    echo "
                                                        </a>
                                                    </th>
                                                    <th>
                                                        <a href=\"";
                    // line 642
                    echo twig_escape_filter($this->env, trim($context["__internal_3e8f06d269a7cf0de79420d67675c5c5366e0fa4b426cb0f51db5aad57e8dffb"]->getsortAllVisibleUsersUrl((isset($context["max"]) ? $context["max"] : null), "lastName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                            ";
                    // line 643
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lastName", array(), "platform"), "html", null, true);
                    echo "
                                                        </a>
                                                    </th>

                                                    ";
                    // line 647
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                        // line 648
                        echo "                                                        <th>
                                                            <a href=\"";
                        // line 649
                        echo twig_escape_filter($this->env, trim($context["__internal_3e8f06d269a7cf0de79420d67675c5c5366e0fa4b426cb0f51db5aad57e8dffb"]->getsortAllVisibleUsersUrl((isset($context["max"]) ? $context["max"] : null), "username", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                                ";
                        // line 650
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
                        echo "
                                                            </a>
                                                        </th>
                                                    ";
                    }
                    // line 654
                    echo "
                                                    ";
                    // line 655
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                        // line 656
                        echo "                                                        <th>
                                                            <a href=\"";
                        // line 657
                        echo twig_escape_filter($this->env, trim($context["__internal_3e8f06d269a7cf0de79420d67675c5c5366e0fa4b426cb0f51db5aad57e8dffb"]->getsortAllVisibleUsersUrl((isset($context["max"]) ? $context["max"] : null), "mail", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                                ";
                        // line 658
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
                        echo "
                                                            </a>
                                                        </th>
                                                    ";
                    }
                    // line 662
                    echo "
                                                    ";
                    // line 663
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                        // line 664
                        echo "                                                        <th>
                                                            <a href=\"";
                        // line 665
                        echo twig_escape_filter($this->env, trim($context["__internal_3e8f06d269a7cf0de79420d67675c5c5366e0fa4b426cb0f51db5aad57e8dffb"]->getsortAllVisibleUsersUrl((isset($context["max"]) ? $context["max"] : null), "phone", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                        echo "\">
                                                                ";
                        // line 666
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("phone", array(), "platform"), "html", null, true);
                        echo "
                                                            </a>
                                                        </th>
                                                    ";
                    }
                    // line 670
                    echo "                                                    <th>
                                                        ";
                    // line 671
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "platform"), "html", null, true);
                    echo "
                                                    </th>
                                                </tr>

                                                ";
                    // line 675
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 676
                        echo "                                                    <tr>
                                                        ";
                        // line 677
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                            // line 678
                            echo "                                                            <td>
                                                                ";
                            // line 679
                            if (($this->getAttribute($context["user"], "getPicture", array(), "method") != "")) {
                                // line 680
                                echo "                                                                    <img src=\"";
                                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/") . $this->getAttribute($context["user"], "getPicture", array(), "method")), "html", null, true);
                                echo "\"
                                                                         class=\"profile_picture img-circle\"
                                                                         alt=\"";
                                // line 682
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getLastName", array(), "method") . " ") . $this->getAttribute($context["user"], "getFirstName", array(), "method")), "html", null, true);
                                echo "\"
                                                                         width=\"50px\"
                                                                         height=\"50px\"
                                                                    >
                                                                ";
                            } else {
                                // line 687
                                echo "                                                                    <h1 class=\"profile_picture_placeholder\">
                                                                        <i class=\"fa fa-user\"></i>
                                                                    </h1>
                                                                ";
                            }
                            // line 691
                            echo "                                                            </td>
                                                        ";
                        }
                        // line 693
                        echo "                                                        <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getFirstName", array(), "method"), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 694
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getLastName", array(), "method"), "html", null, true);
                        echo "</td>

                                                        ";
                        // line 696
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                            // line 697
                            echo "                                                            <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                            echo "</td>
                                                        ";
                        }
                        // line 699
                        echo "
                                                        ";
                        // line 700
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                            // line 701
                            echo "                                                            <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getMail", array(), "method"), "html", null, true);
                            echo "</td>
                                                        ";
                        }
                        // line 703
                        echo "
                                                        ";
                        // line 704
                        if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                            // line 705
                            echo "                                                            <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getPhone", array(), "method"), "html", null, true);
                            echo "</td>
                                                        ";
                        }
                        // line 707
                        echo "                                                        <td>
                                                            <div class=\"btn-toolbar\">
                                                                ";
                        // line 709
                        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:contactActionsMenu", array(), array("user" => $context["user"]));
                        // line 710
                        echo "                                                                ";
                        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : null), array(), "contact_additional_actions");
                        echo "
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 715
                    echo "                                            </table>
                                        </div>

                                        ";
                    // line 718
                    if (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), "getNbPages", array(), "method") > 1)) {
                        // line 719
                        echo "                                            ";
                        echo $context["__internal_bb7a20ca14b04f02fffaba29eb578847b2c5cf1d35c713bc2149c81b483c8231"]->getrenderAllVisibleUsersPager((isset($context["users"]) ? $context["users"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                        echo "
                                        ";
                    }
                    // line 721
                    echo "                                    ";
                } else {
                    // line 722
                    echo "                                        <div class=\"alert alert-warning\">
                                            ";
                    // line 723
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_user", array(), "platform"), "html", null, true);
                    echo "
                                        </div>
                                    ";
                }
                // line 726
                echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 731
            echo "            ";
        } else {
            // line 732
            echo "                <div id=\"searched-contacts\">

                    ";
            // line 734
            if ((twig_length_filter($this->env, (isset($context["contacts"]) ? $context["contacts"] : null)) > 0)) {
                // line 735
                echo "                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"input-group margin-bottom-md pull-left\">
                                    ";
                // line 738
                if (($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "getNbPages", array(), "method") > 1)) {
                    // line 739
                    echo "                                        ";
                    echo $context["__internal_d6a1a56af3f70313d8e51d070d75c92cb268e4d3195c73379cf9d3eddbc41b45"]->getrenderSearchedContactsPager((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                    echo "
                                    ";
                }
                // line 741
                echo "                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"input-group pull-right\" style=\"margin: 20px 0\">
                                    ";
                // line 745
                echo $context["__internal_b11c319f88b618b00b62af4890b0eb0ca6b4a4efa3545d8612e1c92ba65123cb"]->getmaxResultsSelectBox((isset($context["max"]) ? $context["max"] : null), "\$('#max-results-button').trigger('click');", "contacts_per_page");
                echo "
                                </div>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tr>
                                    ";
                // line 753
                if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                    // line 754
                    echo "                                        <th>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("picture", array(), "platform"), "html", null, true);
                    echo "</th>
                                    ";
                }
                // line 756
                echo "                                    <th>
                                        <a href=\"";
                // line 757
                echo twig_escape_filter($this->env, trim($context["__internal_b80b4b0f7ad69a9744eaf77c1f07646752b9b7aa060780654450cbcf238ca59e"]->getsortSearchedContactsUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "firstName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                echo "\">
                                            ";
                // line 758
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("firstName", array(), "platform"), "html", null, true);
                echo "
                                        </a>
                                    </th>
                                    <th>
                                        <a href=\"";
                // line 762
                echo twig_escape_filter($this->env, trim($context["__internal_b80b4b0f7ad69a9744eaf77c1f07646752b9b7aa060780654450cbcf238ca59e"]->getsortSearchedContactsUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "lastName", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                echo "\">
                                            ";
                // line 763
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lastName", array(), "platform"), "html", null, true);
                echo "
                                        </a>
                                    </th>

                                    ";
                // line 767
                if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                    // line 768
                    echo "                                        <th>
                                            <a href=\"";
                    // line 769
                    echo twig_escape_filter($this->env, trim($context["__internal_b80b4b0f7ad69a9744eaf77c1f07646752b9b7aa060780654450cbcf238ca59e"]->getsortSearchedContactsUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "username", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                ";
                    // line 770
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
                    echo "
                                            </a>
                                        </th>
                                    ";
                }
                // line 774
                echo "
                                    ";
                // line 775
                if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                    // line 776
                    echo "                                        <th>
                                            <a href=\"";
                    // line 777
                    echo twig_escape_filter($this->env, trim($context["__internal_b80b4b0f7ad69a9744eaf77c1f07646752b9b7aa060780654450cbcf238ca59e"]->getsortSearchedContactsUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "mail", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                ";
                    // line 778
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
                    echo "
                                            </a>
                                        </th>
                                    ";
                }
                // line 782
                echo "
                                    ";
                // line 783
                if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                    // line 784
                    echo "                                        <th>
                                            <a href=\"";
                    // line 785
                    echo twig_escape_filter($this->env, trim($context["__internal_b80b4b0f7ad69a9744eaf77c1f07646752b9b7aa060780654450cbcf238ca59e"]->getsortSearchedContactsUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "phone", (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
                    echo "\">
                                                ";
                    // line 786
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("phone", array(), "platform"), "html", null, true);
                    echo "
                                            </a>
                                        </th>
                                    ";
                }
                // line 790
                echo "                                    <th>
                                        ";
                // line 791
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", array(), "platform"), "html", null, true);
                echo "
                                    </th>
                                </tr>

                                ";
                // line 795
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 796
                    echo "                                    <tr class=\"contact-row-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                    echo "\">
                                        ";
                    // line 797
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_picture", array(), "array"))) {
                        // line 798
                        echo "                                            <td>
                                                ";
                        // line 799
                        if (($this->getAttribute($context["contact"], "getPicture", array(), "method") != "")) {
                            // line 800
                            echo "                                                    <img src=\"";
                            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/") . $this->getAttribute($context["contact"], "getPicture", array(), "method")), "html", null, true);
                            echo "\"
                                                         class=\"profile_picture img-circle\"
                                                         alt=\"";
                            // line 802
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["contact"], "getLastName", array(), "method") . " ") . $this->getAttribute($context["contact"], "getFirstName", array(), "method")), "html", null, true);
                            echo "\"
                                                         width=\"50px\"
                                                         height=\"50px\"
                                                    >
                                                ";
                        } else {
                            // line 807
                            echo "                                                    <h1 class=\"profile_picture_placeholder\">
                                                        <i class=\"fa fa-user\"></i>
                                                    </h1>
                                                ";
                        }
                        // line 811
                        echo "                                            </td>
                                        ";
                    }
                    // line 813
                    echo "                                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getFirstName", array(), "method"), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 814
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getLastName", array(), "method"), "html", null, true);
                    echo "</td>

                                        ";
                    // line 816
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_username", array(), "array"))) {
                        // line 817
                        echo "                                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getUsername", array(), "method"), "html", null, true);
                        echo "</td>
                                        ";
                    }
                    // line 819
                    echo "
                                        ";
                    // line 820
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_mail", array(), "array"))) {
                        // line 821
                        echo "                                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getMail", array(), "method"), "html", null, true);
                        echo "</td>
                                        ";
                    }
                    // line 823
                    echo "
                                        ";
                    // line 824
                    if (( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array", true, true) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "show_phone", array(), "array"))) {
                        // line 825
                        echo "                                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getPhone", array(), "method"), "html", null, true);
                        echo "</td>
                                        ";
                    }
                    // line 827
                    echo "                                        <td>
                                            <div class=\"btn-toolbar\">
                                                <div class=\"btn-group\">
                                                    <span class=\"btn btn-default add-contact-to-category \"
                                                          data-contact-id=\"";
                    // line 831
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                    echo "\"
                                                          data-toggle=\"tooltip\"
                                                          data-placement=\"left\"
                                                          title=\"";
                    // line 834
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add_contact_to_category", array(), "platform"), "html", null, true);
                    echo "\"
                                                    >
                                                        <i class=\"fa fa-bars\"></i>
                                                    </span>
                                                    <span class=\"btn btn-danger delete-contact\"
                                                          data-contact-id=\"";
                    // line 839
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "getId", array(), "method"), "html", null, true);
                    echo "\"
                                                          data-toggle=\"tooltip\"
                                                          data-placement=\"left\"
                                                          title=\"";
                    // line 842
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_contact", array(), "platform"), "html", null, true);
                    echo "\"
                                                    >
                                                        <i class=\"fa fa-times-circle\"></i>
                                                    </span>
                                                </div>
                                                ";
                    // line 847
                    $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("ClarolineCoreBundle:Builder:contactActionsMenu", array(), array("user" => $context["contact"]));
                    // line 848
                    echo "                                                ";
                    echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : null), array(), "contact_additional_actions");
                    echo "
                                            </div>
                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 853
                echo "                            </table>
                        </div>

                        ";
                // line 856
                if (($this->getAttribute((isset($context["contacts"]) ? $context["contacts"] : null), "getNbPages", array(), "method") > 1)) {
                    // line 857
                    echo "                            ";
                    echo $context["__internal_d6a1a56af3f70313d8e51d070d75c92cb268e4d3195c73379cf9d3eddbc41b45"]->getrenderSearchedContactsPager((isset($context["contacts"]) ? $context["contacts"] : null), (isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null));
                    echo "
                        ";
                }
                // line 859
                echo "                    ";
            } else {
                // line 860
                echo "                        <div class=\"alert alert-warning\">
                            ";
                // line 861
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_contact", array(), "platform"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 864
            echo "                </div>
            ";
        }
        // line 866
        echo "        </div>
    </div>

    <div id=\"contacts-datas-box\"
         data-search=\"";
        // line 870
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\"
         data-max=\"";
        // line 871
        echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : null), "html", null, true);
        echo "\"
         data-ordered-by=\"";
        // line 872
        echo twig_escape_filter($this->env, (isset($context["orderedBy"]) ? $context["orderedBy"] : null), "html", null, true);
        echo "\"
         data-order=\"";
        // line 873
        echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : null), "html", null, true);
        echo "\"
         data-contacts-id=\"";
        // line 874
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allContacts"]) ? $context["allContacts"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "getId", array(), "method"), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
    >
    </div>
";
    }

    // line 879
    public function block_javascripts($context, array $blocks = array())
    {
        // line 880
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src='";
        // line 881
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/clarolinecore/js/contact/myContactsToolIndex.js"), "html", null, true);
        echo "'
            type=\"text/javascript\"
    >
    </script>
";
    }

    // line 3
    public function getrenderSearchedContactsPager($__pager__ = null, $__search__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "search" => $__search__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(            // line 6
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_my_contacts_tool_index", "routeParams" => array("search" =>             // line 12
(isset($context["search"]) ? $context["search"] : null), "max" =>             // line 13
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 14
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 15
(isset($context["order"]) ? $context["order"] : null))));
            // line 19
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getrenderAllMyContactsPager($__pager__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(            // line 25
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_contact_show_all_my_contacts", "routeParams" => array("max" =>             // line 31
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 32
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 33
(isset($context["order"]) ? $context["order"] : null))));
            // line 37
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getrenderCategoryContactsPager($__pager__ = null, $__categoryId__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "categoryId" => $__categoryId__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(            // line 43
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_contact_show_contacts_by_category", "routeParams" => array("category" =>             // line 49
(isset($context["categoryId"]) ? $context["categoryId"] : null), "max" =>             // line 50
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 51
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 52
(isset($context["order"]) ? $context["order"] : null))));
            // line 56
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getrenderAllVisibleUsersPager($__pager__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(            // line 62
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_contact_show_all_visible_users", "routeParams" => array("max" =>             // line 68
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 69
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 70
(isset($context["order"]) ? $context["order"] : null))));
            // line 74
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 77
    public function getsortSearchedContactsUrl($__search__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "search" => $__search__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 78
            echo "    ";
            if (((isset($context["order"]) ? $context["order"] : null) == "ASC")) {
                // line 79
                echo "        ";
                $context["newOrder"] = "DESC";
                // line 80
                echo "    ";
            } else {
                // line 81
                echo "        ";
                $context["newOrder"] = "ASC";
                // line 82
                echo "    ";
            }
            // line 83
            echo "
    ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_my_contacts_tool_index", array("search" =>             // line 88
(isset($context["search"]) ? $context["search"] : null), "max" =>             // line 89
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 90
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 91
(isset($context["newOrder"]) ? $context["newOrder"] : null))), "html", null, true);
            // line 94
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getsortAllMyContactsUrl($__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 98
            echo "    ";
            if (((isset($context["order"]) ? $context["order"] : null) == "ASC")) {
                // line 99
                echo "        ";
                $context["newOrder"] = "DESC";
                // line 100
                echo "    ";
            } else {
                // line 101
                echo "        ";
                $context["newOrder"] = "ASC";
                // line 102
                echo "    ";
            }
            // line 103
            echo "
    ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_contact_show_all_my_contacts", array("max" =>             // line 108
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 109
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 110
(isset($context["newOrder"]) ? $context["newOrder"] : null))), "html", null, true);
            // line 113
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getsortCategoryContactsUrl($__categoryId__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "categoryId" => $__categoryId__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    ";
            if (((isset($context["order"]) ? $context["order"] : null) == "ASC")) {
                // line 118
                echo "        ";
                $context["newOrder"] = "DESC";
                // line 119
                echo "    ";
            } else {
                // line 120
                echo "        ";
                $context["newOrder"] = "ASC";
                // line 121
                echo "    ";
            }
            // line 122
            echo "
    ";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_contact_show_contacts_by_category", array("category" =>             // line 127
(isset($context["categoryId"]) ? $context["categoryId"] : null), "max" =>             // line 128
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 129
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 130
(isset($context["newOrder"]) ? $context["newOrder"] : null))), "html", null, true);
            // line 133
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 136
    public function getsortAllVisibleUsersUrl($__max__ = null, $__orderedBy__ = null, $__order__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 137
            echo "    ";
            if (((isset($context["order"]) ? $context["order"] : null) == "ASC")) {
                // line 138
                echo "        ";
                $context["newOrder"] = "DESC";
                // line 139
                echo "    ";
            } else {
                // line 140
                echo "        ";
                $context["newOrder"] = "ASC";
                // line 141
                echo "    ";
            }
            // line 142
            echo "
    ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_contact_show_all_visible_users", array("max" =>             // line 147
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>             // line 148
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>             // line 149
(isset($context["newOrder"]) ? $context["newOrder"] : null))), "html", null, true);
            // line 152
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ClarolineCoreBundle:Contact:myContactsToolIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1916 => 152,  1914 => 149,  1913 => 148,  1912 => 147,  1911 => 143,  1908 => 142,  1905 => 141,  1902 => 140,  1899 => 139,  1896 => 138,  1893 => 137,  1879 => 136,  1863 => 133,  1861 => 130,  1860 => 129,  1859 => 128,  1858 => 127,  1857 => 123,  1854 => 122,  1851 => 121,  1848 => 120,  1845 => 119,  1842 => 118,  1839 => 117,  1824 => 116,  1808 => 113,  1806 => 110,  1805 => 109,  1804 => 108,  1803 => 104,  1800 => 103,  1797 => 102,  1794 => 101,  1791 => 100,  1788 => 99,  1785 => 98,  1771 => 97,  1755 => 94,  1753 => 91,  1752 => 90,  1751 => 89,  1750 => 88,  1749 => 84,  1746 => 83,  1743 => 82,  1740 => 81,  1737 => 80,  1734 => 79,  1731 => 78,  1716 => 77,  1700 => 74,  1698 => 70,  1697 => 69,  1696 => 68,  1695 => 62,  1694 => 60,  1679 => 59,  1663 => 56,  1661 => 52,  1660 => 51,  1659 => 50,  1658 => 49,  1657 => 43,  1656 => 41,  1640 => 40,  1624 => 37,  1622 => 33,  1621 => 32,  1620 => 31,  1619 => 25,  1618 => 23,  1603 => 22,  1587 => 19,  1585 => 15,  1584 => 14,  1583 => 13,  1582 => 12,  1581 => 6,  1580 => 4,  1564 => 3,  1555 => 881,  1550 => 880,  1547 => 879,  1508 => 874,  1504 => 873,  1500 => 872,  1496 => 871,  1492 => 870,  1486 => 866,  1482 => 864,  1476 => 861,  1473 => 860,  1470 => 859,  1464 => 857,  1462 => 856,  1457 => 853,  1445 => 848,  1443 => 847,  1435 => 842,  1429 => 839,  1421 => 834,  1415 => 831,  1409 => 827,  1403 => 825,  1401 => 824,  1398 => 823,  1392 => 821,  1390 => 820,  1387 => 819,  1381 => 817,  1379 => 816,  1374 => 814,  1369 => 813,  1365 => 811,  1359 => 807,  1351 => 802,  1345 => 800,  1343 => 799,  1340 => 798,  1338 => 797,  1333 => 796,  1329 => 795,  1322 => 791,  1319 => 790,  1312 => 786,  1308 => 785,  1305 => 784,  1303 => 783,  1300 => 782,  1293 => 778,  1289 => 777,  1286 => 776,  1284 => 775,  1281 => 774,  1274 => 770,  1270 => 769,  1267 => 768,  1265 => 767,  1258 => 763,  1254 => 762,  1247 => 758,  1243 => 757,  1240 => 756,  1234 => 754,  1232 => 753,  1221 => 745,  1215 => 741,  1209 => 739,  1207 => 738,  1202 => 735,  1200 => 734,  1196 => 732,  1193 => 731,  1186 => 726,  1180 => 723,  1177 => 722,  1174 => 721,  1168 => 719,  1166 => 718,  1161 => 715,  1149 => 710,  1147 => 709,  1143 => 707,  1137 => 705,  1135 => 704,  1132 => 703,  1126 => 701,  1124 => 700,  1121 => 699,  1115 => 697,  1113 => 696,  1108 => 694,  1103 => 693,  1099 => 691,  1093 => 687,  1085 => 682,  1079 => 680,  1077 => 679,  1074 => 678,  1072 => 677,  1069 => 676,  1065 => 675,  1058 => 671,  1055 => 670,  1048 => 666,  1044 => 665,  1041 => 664,  1039 => 663,  1036 => 662,  1029 => 658,  1025 => 657,  1022 => 656,  1020 => 655,  1017 => 654,  1010 => 650,  1006 => 649,  1003 => 648,  1001 => 647,  994 => 643,  990 => 642,  983 => 638,  979 => 637,  976 => 636,  970 => 634,  968 => 633,  957 => 625,  951 => 621,  945 => 619,  943 => 618,  937 => 614,  935 => 613,  925 => 606,  918 => 602,  911 => 597,  909 => 596,  904 => 593,  895 => 589,  889 => 586,  886 => 585,  883 => 584,  877 => 582,  875 => 581,  870 => 578,  858 => 573,  856 => 572,  848 => 567,  842 => 564,  838 => 563,  832 => 559,  826 => 557,  824 => 556,  821 => 555,  815 => 553,  813 => 552,  810 => 551,  804 => 549,  802 => 548,  797 => 546,  792 => 545,  788 => 543,  782 => 539,  774 => 534,  768 => 532,  766 => 531,  763 => 530,  761 => 529,  756 => 527,  747 => 526,  743 => 525,  736 => 521,  733 => 520,  726 => 516,  722 => 515,  719 => 514,  717 => 513,  714 => 512,  707 => 508,  703 => 507,  700 => 506,  698 => 505,  695 => 504,  688 => 500,  684 => 499,  681 => 498,  679 => 497,  672 => 493,  668 => 492,  661 => 488,  657 => 487,  654 => 486,  648 => 484,  646 => 483,  635 => 475,  629 => 471,  623 => 469,  621 => 468,  614 => 463,  612 => 462,  607 => 460,  603 => 459,  598 => 457,  588 => 450,  581 => 446,  573 => 441,  566 => 437,  558 => 432,  551 => 428,  540 => 419,  536 => 417,  530 => 415,  528 => 414,  523 => 412,  517 => 409,  512 => 407,  508 => 406,  499 => 400,  496 => 399,  493 => 398,  489 => 397,  485 => 395,  479 => 391,  473 => 388,  470 => 387,  467 => 386,  461 => 384,  459 => 383,  454 => 380,  442 => 375,  440 => 374,  432 => 369,  426 => 366,  418 => 361,  412 => 358,  406 => 354,  400 => 352,  398 => 351,  395 => 350,  389 => 348,  387 => 347,  382 => 345,  377 => 344,  369 => 342,  366 => 341,  362 => 339,  356 => 335,  348 => 330,  342 => 328,  340 => 327,  337 => 326,  335 => 325,  330 => 324,  326 => 323,  319 => 319,  316 => 318,  309 => 314,  305 => 313,  302 => 312,  300 => 311,  297 => 310,  290 => 306,  286 => 305,  283 => 304,  281 => 303,  274 => 299,  270 => 298,  263 => 294,  259 => 293,  256 => 292,  249 => 288,  245 => 287,  242 => 286,  239 => 285,  233 => 283,  231 => 282,  220 => 274,  214 => 270,  208 => 268,  206 => 267,  200 => 263,  198 => 262,  188 => 255,  179 => 249,  172 => 245,  166 => 241,  164 => 240,  161 => 239,  159 => 238,  141 => 223,  137 => 222,  128 => 215,  122 => 212,  118 => 211,  115 => 210,  113 => 209,  102 => 201,  93 => 195,  80 => 185,  75 => 182,  72 => 181,  67 => 178,  65 => 172,  63 => 171,  60 => 170,  53 => 167,  50 => 166,  46 => 1,  44 => 163,  42 => 162,  40 => 161,  38 => 160,  36 => 159,  34 => 158,  32 => 157,  30 => 156,  28 => 155,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:Contact:myContactsToolIndex.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/Contact/myContactsToolIndex.html.twig");
    }
}
