<?php

/* ClarolineCoreBundle:User:usersListForUserPicker.html.twig */
class __TwigTemplate_9a56c2d666acbdb6d065b2c0b7c4b7b17e2f0e4596c904e3d22833aecd977508 extends Twig_Template
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
        // line 57
        echo "
";
        // line 110
        echo "
";
        // line 111
        $context["__internal_2c092b32d4e520cb27f874e636cf670c8313acb589591e57c036be3d950b4048"] = $this;
        // line 112
        $context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"] = $this;
        // line 113
        $context["__internal_a2b6ec06ffb887e553dc6b60ff0a29a0e6fddba22eba5252a1bed6a6ba4cdf96"] = $this->loadTemplate("ClarolineCoreBundle::macros.html.twig", "ClarolineCoreBundle:User:usersListForUserPicker.html.twig", 113);
        // line 114
        echo "        
";
        // line 115
        if (((isset($context["search"]) ? $context["search"] : null) != "")) {
            // line 116
            echo "    <div class=\"alert alert-info\">
        ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("results_for_search_on", array(), "platform"), "html", null, true);
            echo " :
        \"";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
            echo "\"
    </div>
";
        }
        // line 121
        echo "
<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"input-group margin-bottom-md\">
            <input class=\"form-control search-user\"
                   type=\"text\"
                   id=\"search-user-input\"
                   placeholder=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search", array(), "platform"), "html", null, true);
        echo "\"
                   value=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\"
            >
            <span class=\"input-group-btn\">
                <button class=\"filter btn btn-default search-user-btn\"
                        type=\"button\"
                        id=\"search-user-btn\"
                >
                    <i class=\"fa fa-search\"></i>
                </button>
            </span>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"input-group margin-bottom-md pull-right\">
            ";
        // line 143
        echo $context["__internal_a2b6ec06ffb887e553dc6b60ff0a29a0e6fddba22eba5252a1bed6a6ba4cdf96"]->getmaxResultsSelectBox((isset($context["max"]) ? $context["max"] : null), "\$('#max-results-button').trigger('click');", "users_per_page");
        echo "
        </div>
    </div>
</div>

";
        // line 148
        if (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), "getNbPages", array(), "method") > 1)) {
            // line 149
            echo "    ";
            echo $context["__internal_2c092b32d4e520cb27f874e636cf670c8313acb589591e57c036be3d950b4048"]->getrenderPager((isset($context["users"]) ? $context["users"] : null), (isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null));
            echo "
";
        }
        // line 151
        echo "<div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"text-center\">
                    ";
        // line 156
        if (((isset($context["mode"]) ? $context["mode"] : null) == "multiple")) {
            // line 157
            echo "                        <input type=\"checkbox\" id=\"picker-all-users-chk\">
                    ";
        }
        // line 159
        echo "                </th>
                
                ";
        // line 161
        if (((isset($context["showId"]) ? $context["showId"] : null) == "1")) {
            // line 162
            echo "                    <th>
                        <a href=\"";
            // line 163
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "id", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("id", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                ";
        }
        // line 168
        echo "                
                ";
        // line 169
        if (((isset($context["showPicture"]) ? $context["showPicture"] : null) == "1")) {
            // line 170
            echo "                    <th>
                        <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "picture", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("picture", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                ";
        }
        // line 176
        echo "                    
                ";
        // line 177
        if (((isset($context["attachName"]) ? $context["attachName"] : null) == "1")) {
            // line 178
            echo "                    <th>
                        <a href=\"";
            // line 179
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "lastName", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                ";
        } else {
            // line 184
            echo "                    <th>
                        <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "firstName", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("firstName", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                    <th>
                        <a href=\"";
            // line 190
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "lastName", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("lastName", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                ";
        }
        // line 195
        echo "                
                ";
        // line 196
        if (((isset($context["showUsername"]) ? $context["showUsername"] : null) == "1")) {
            // line 197
            echo "                    <th>
                        <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "username", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                ";
        }
        // line 203
        echo "                
                ";
        // line 204
        if (((isset($context["showMail"]) ? $context["showMail"] : null) == "1")) {
            // line 205
            echo "                    <th>
                        <a href=\"";
            // line 206
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "mail", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mail", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                ";
        }
        // line 211
        echo "                
                ";
        // line 212
        if (((isset($context["showCode"]) ? $context["showCode"] : null) == "1")) {
            // line 213
            echo "                    <th>
                        <a href=\"";
            // line 214
            echo twig_escape_filter($this->env, trim($context["__internal_3fafe4de16af653532ab3f76a3236c6aa1c1cea3001c18f4c7e130bc3a196a5f"]->getsortUrl((isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), "administrativeCode", (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
            echo "\">
                            ";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("code", array(), "platform"), "html", null, true);
            echo "
                        </a>
                    </th>
                ";
        }
        // line 219
        echo "                
                ";
        // line 220
        if (((isset($context["showGroups"]) ? $context["showGroups"] : null) == "1")) {
            // line 221
            echo "                    <th>
                        ";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("groups", array(), "platform"), "html", null, true);
            echo "
                    </th>
                ";
        }
        // line 225
        echo "                
                ";
        // line 226
        if ((((isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null) == "1") || (twig_length_filter($this->env, (isset($context["shownWorkspaceIds"]) ? $context["shownWorkspaceIds"] : null)) > 0))) {
            // line 227
            echo "                    <th>
                        ";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("roles", array(), "platform"), "html", null, true);
            echo "
                    </th>
                ";
        }
        // line 231
        echo "            </tr>
        </thead>
        <tbody>

            ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 236
            echo "                ";
            $context["userId"] = $this->getAttribute($context["user"], "getId", array(), "method");
            // line 237
            echo "                <tr>
                    <td class=\"text-center\">
                        ";
            // line 239
            if (((isset($context["mode"]) ? $context["mode"] : null) == "multiple")) {
                // line 240
                echo "                            <input type=\"checkbox\"
                                   class=\"picker-user-chk\"
                                   id=\"picker-user-chk-";
                // line 242
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                                   value=\"";
                // line 243
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                                   data-user-first-name=\"";
                // line 244
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getFirstName", array(), "method"), "html", null, true);
                echo "\"
                                   data-user-last-name=\"";
                // line 245
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getLastName", array(), "method"), "html", null, true);
                echo "\"
                                   ";
                // line 246
                if (((isset($context["showUsername"]) ? $context["showUsername"] : null) == "1")) {
                    // line 247
                    echo "                                       data-user-username=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\"
                                   ";
                }
                // line 249
                echo "                            >
                        ";
            } elseif ((            // line 250
(isset($context["mode"]) ? $context["mode"] : null) == "single")) {
                // line 251
                echo "                            <input type=\"radio\"
                                   name=\"picker-user-radio\"
                                   class=\"picker-user-chk\"
                                   id=\"picker-user-chk-";
                // line 254
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                                   value=\"";
                // line 255
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                                   data-user-first-name=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getFirstName", array(), "method"), "html", null, true);
                echo "\"
                                   data-user-last-name=\"";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getLastName", array(), "method"), "html", null, true);
                echo "\"
                                   ";
                // line 258
                if (((isset($context["showUsername"]) ? $context["showUsername"] : null) == "1")) {
                    // line 259
                    echo "                                       data-user-username=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                    echo "\"
                                   ";
                }
                // line 261
                echo "                            >
                        ";
            }
            // line 263
            echo "                    </td>
                
                    ";
            // line 265
            if (((isset($context["showId"]) ? $context["showId"] : null) == 1)) {
                // line 266
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 268
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getId", array(), "method"), "html", null, true);
                echo "
                            </span>
                        </td>
                    ";
            }
            // line 274
            echo "                
                    ";
            // line 275
            if (((isset($context["showPicture"]) ? $context["showPicture"] : null) == 1)) {
                // line 276
                echo "                        <td class=\"text-center\">
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 278
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 280
                if (($this->getAttribute($context["user"], "getPicture", array(), "method") != "")) {
                    // line 281
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/pictures/") . $this->getAttribute($context["user"], "getPicture", array(), "method")), "html", null, true);
                    echo "\"
                                         class=\"profile_picture img-circle\"
                                         alt=\"";
                    // line 283
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "getLastName", array(), "method") . " ") . $this->getAttribute($context["user"], "getFirstName", array(), "method")), "html", null, true);
                    echo "\"
                                         width=\"50px\"
                                         height=\"50px\"
                                    >
                                ";
                } else {
                    // line 288
                    echo "                                    <h2 class=\"profile_picture_placeholder\">
                                        <i class=\"fa fa-user\"></i>
                                    </h2>
                                ";
                }
                // line 292
                echo "                            </span>
                        </td>
                    ";
            }
            // line 295
            echo "                    
                    ";
            // line 296
            if (((isset($context["attachName"]) ? $context["attachName"] : null) == "1")) {
                // line 297
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 299
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 301
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getFirstName", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getLastName", array(), "method"), "html", null, true);
                echo "
                            </span>
                        </td>
                    ";
            } else {
                // line 305
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 307
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 309
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getFirstName", array(), "method"), "html", null, true);
                echo "
                            </span>
                        </td>
                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 314
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 316
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getLastName", array(), "method"), "html", null, true);
                echo "
                            </span>
                        </td>
                    ";
            }
            // line 320
            echo "                
                    ";
            // line 321
            if (((isset($context["showUsername"]) ? $context["showUsername"] : null) == 1)) {
                // line 322
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 324
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 326
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getUsername", array(), "method"), "html", null, true);
                echo "
                            </span>
                        </td>
                    ";
            }
            // line 330
            echo "                
                    ";
            // line 331
            if (((isset($context["showMail"]) ? $context["showMail"] : null) == 1)) {
                // line 332
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 334
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 336
                if ($this->getAttribute((isset($context["profilePreferences"]) ? $context["profilePreferences"] : null), "mail", array(), "array")) {
                    // line 337
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getMail", array(), "method"), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 339
                    echo "                                    -
                                ";
                }
                // line 341
                echo "                            </span>
                        </td>
                    ";
            }
            // line 344
            echo "
                    ";
            // line 345
            if (((isset($context["showCode"]) ? $context["showCode"] : null) == 1)) {
                // line 346
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 348
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 350
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getAdministrativeCode", array(), "method"), "html", null, true);
                echo "
                            </span>
                        </td>
                    ";
            }
            // line 354
            echo "
                    ";
            // line 355
            if (((isset($context["showGroups"]) ? $context["showGroups"] : null) == 1)) {
                // line 356
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 358
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 360
                $context["groups"] = $this->getAttribute($context["user"], "getGroups", array(), "method");
                // line 361
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 362
                    echo "                                    <span class=\"label label-info margin-right-sm\">
                                        ";
                    // line 363
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
                    echo "
                                    </span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 366
                echo "                            </span>
                        </td>
                    ";
            }
            // line 369
            echo "
                    ";
            // line 370
            if ((((isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null) == "1") || (twig_length_filter($this->env, (isset($context["shownWorkspaceIds"]) ? $context["shownWorkspaceIds"] : null)) > 0))) {
                // line 371
                echo "                        <td>
                            <span class=\"picker-user-select pointer-hand\"
                                  data-user-id=\"";
                // line 373
                echo twig_escape_filter($this->env, (isset($context["userId"]) ? $context["userId"] : null), "html", null, true);
                echo "\"
                            >
                                ";
                // line 375
                $context["roles"] = $this->getAttribute($context["user"], "getEntityRoles", array(), "method");
                // line 376
                echo "                                ";
                $context["multiWorkspace"] = (twig_length_filter($this->env, (isset($context["shownWorkspaceIds"]) ? $context["shownWorkspaceIds"] : null)) > 1);
                // line 377
                echo "                                
                                ";
                // line 378
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 379
                    echo "                                    ";
                    if ((($this->getAttribute($context["role"], "getType", array(), "method") == 1) && ((isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null) == "1"))) {
                        // line 380
                        echo "                                        <span class=\"label label-success margin-right-sm\">
                                            ";
                        // line 381
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["role"], "getTranslationKey", array(), "method"), array(), "platform"), "html", null, true);
                        echo "
                                        </span>
                                    ";
                    } elseif ((($this->getAttribute(                    // line 383
$context["role"], "getType", array(), "method") == 2) && (twig_length_filter($this->env, (isset($context["shownWorkspaceIds"]) ? $context["shownWorkspaceIds"] : null)) > 0))) {
                        // line 384
                        echo "                                        ";
                        $context["workspace"] = $this->getAttribute($context["role"], "getWorkspace", array(), "method");
                        // line 385
                        echo "                                        ";
                        $context["workspaceId"] = $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getId", array(), "method");
                        // line 386
                        echo "                                
                                        ";
                        // line 387
                        if (twig_in_filter((isset($context["workspaceId"]) ? $context["workspaceId"] : null), (isset($context["shownWorkspaceIds"]) ? $context["shownWorkspaceIds"] : null))) {
                            // line 388
                            echo "                                            <span class=\"label label-success margin-right-sm\">
                                                ";
                            // line 389
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["role"], "getTranslationKey", array(), "method"), array(), "platform"), "html", null, true);
                            echo "
                                                ";
                            // line 390
                            if ((isset($context["multiWorkspace"]) ? $context["multiWorkspace"] : null)) {
                                // line 391
                                echo "                                                    (";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getName", array(), "method"), "html", null, true);
                                echo "
                                                    [";
                                // line 392
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workspace"]) ? $context["workspace"] : null), "getCode", array(), "method"), "html", null, true);
                                echo "])
                                                ";
                            }
                            // line 394
                            echo "                                            </span>
                                        ";
                        }
                        // line 396
                        echo "                                    ";
                    }
                    // line 397
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 398
                echo "                            </span>
                        </td>
                    ";
            }
            // line 401
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
        echo "        </tbody>
    </table>
</div>

";
        // line 407
        if (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), "getNbPages", array(), "method") > 1)) {
            // line 408
            echo "    ";
            echo $context["__internal_2c092b32d4e520cb27f874e636cf670c8313acb589591e57c036be3d950b4048"]->getrenderPager((isset($context["users"]) ? $context["users"] : null), (isset($context["search"]) ? $context["search"] : null), (isset($context["max"]) ? $context["max"] : null), (isset($context["orderedBy"]) ? $context["orderedBy"] : null), (isset($context["order"]) ? $context["order"] : null), (isset($context["mode"]) ? $context["mode"] : null), (isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), (isset($context["showId"]) ? $context["showId"] : null), (isset($context["showPicture"]) ? $context["showPicture"] : null), (isset($context["showUsername"]) ? $context["showUsername"] : null), (isset($context["showMail"]) ? $context["showMail"] : null), (isset($context["showCode"]) ? $context["showCode"] : null), (isset($context["showGroups"]) ? $context["showGroups"] : null), (isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), (isset($context["attachName"]) ? $context["attachName"] : null));
            echo "
";
        }
        // line 410
        echo "
<div id=\"user-picker-datas-box\"
     data-search=\"";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\"
     data-page=\"";
        // line 413
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "\"
     data-max=\"";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : null), "html", null, true);
        echo "\"
     data-ordered-by=\"";
        // line 415
        echo twig_escape_filter($this->env, (isset($context["orderedBy"]) ? $context["orderedBy"] : null), "html", null, true);
        echo "\"
     data-order=\"";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : null), "html", null, true);
        echo "\"
</div>";
    }

    // line 1
    public function getrenderPager($__pager__ = null, $__search__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, $__mode__ = null, $__showAllUsers__ = null, $__showId__ = null, $__showPicture__ = null, $__showUsername__ = null, $__showMail__ = null, $__showCode__ = null, $__showGroups__ = null, $__showPlatformRoles__ = null, $__attachName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pager" => $__pager__,
            "search" => $__search__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "mode" => $__mode__,
            "showAllUsers" => $__showAllUsers__,
            "showId" => $__showId__,
            "showPicture" => $__showPicture__,
            "showUsername" => $__showUsername__,
            "showMail" => $__showMail__,
            "showCode" => $__showCode__,
            "showGroups" => $__showGroups__,
            "showPlatformRoles" => $__showPlatformRoles__,
            "attachName" => $__attachName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_test_empty((isset($context["search"]) ? $context["search"] : null))) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 5
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_users_list_for_user_picker", "routeParams" => array("max" =>                 // line 11
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>                 // line 12
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>                 // line 13
(isset($context["order"]) ? $context["order"] : null), "mode" =>                 // line 14
(isset($context["mode"]) ? $context["mode"] : null), "showAllUsers" =>                 // line 15
(isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), "showId" =>                 // line 16
(isset($context["showId"]) ? $context["showId"] : null), "showPicture" =>                 // line 17
(isset($context["showPicture"]) ? $context["showPicture"] : null), "showUsername" =>                 // line 18
(isset($context["showUsername"]) ? $context["showUsername"] : null), "showMail" =>                 // line 19
(isset($context["showMail"]) ? $context["showMail"] : null), "showCode" =>                 // line 20
(isset($context["showCode"]) ? $context["showCode"] : null), "showGroups" =>                 // line 21
(isset($context["showGroups"]) ? $context["showGroups"] : null), "showPlatformRoles" =>                 // line 22
(isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), "attachName" =>                 // line 23
(isset($context["attachName"]) ? $context["attachName"] : null))));
                // line 27
                echo "
    ";
            } else {
                // line 29
                echo "        ";
                echo $this->env->getExtension('Claroline\CoreBundle\Twig\PagerfantaExtension')->renderPagerfanta(                // line 31
(isset($context["pager"]) ? $context["pager"] : null), "twitter_bootstrap_translated", array("proximity" => 1, "routeName" => "claro_searched_users_list_for_user_picker", "routeParams" => array("search" =>                 // line 37
(isset($context["search"]) ? $context["search"] : null), "max" =>                 // line 38
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>                 // line 39
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>                 // line 40
(isset($context["order"]) ? $context["order"] : null), "mode" =>                 // line 41
(isset($context["mode"]) ? $context["mode"] : null), "showAllUsers" =>                 // line 42
(isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), "showId" =>                 // line 43
(isset($context["showId"]) ? $context["showId"] : null), "showPicture" =>                 // line 44
(isset($context["showPicture"]) ? $context["showPicture"] : null), "showUsername" =>                 // line 45
(isset($context["showUsername"]) ? $context["showUsername"] : null), "showMail" =>                 // line 46
(isset($context["showMail"]) ? $context["showMail"] : null), "showCode" =>                 // line 47
(isset($context["showCode"]) ? $context["showCode"] : null), "showGroups" =>                 // line 48
(isset($context["showGroups"]) ? $context["showGroups"] : null), "showPlatformRoles" =>                 // line 49
(isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), "attachName" =>                 // line 50
(isset($context["attachName"]) ? $context["attachName"] : null))));
                // line 54
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getsortUrl($__search__ = null, $__max__ = null, $__orderedBy__ = null, $__order__ = null, $__mode__ = null, $__showAllUsers__ = null, $__showId__ = null, $__showPicture__ = null, $__showUsername__ = null, $__showMail__ = null, $__showCode__ = null, $__showGroups__ = null, $__showPlatformRoles__ = null, $__attachName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "search" => $__search__,
            "max" => $__max__,
            "orderedBy" => $__orderedBy__,
            "order" => $__order__,
            "mode" => $__mode__,
            "showAllUsers" => $__showAllUsers__,
            "showId" => $__showId__,
            "showPicture" => $__showPicture__,
            "showUsername" => $__showUsername__,
            "showMail" => $__showMail__,
            "showCode" => $__showCode__,
            "showGroups" => $__showGroups__,
            "showPlatformRoles" => $__showPlatformRoles__,
            "attachName" => $__attachName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            if (((isset($context["order"]) ? $context["order"] : null) == "ASC")) {
                // line 60
                echo "        ";
                $context["newOrder"] = "DESC";
                // line 61
                echo "    ";
            } else {
                // line 62
                echo "        ";
                $context["newOrder"] = "ASC";
                // line 63
                echo "    ";
            }
            // line 64
            echo "
    ";
            // line 65
            if (twig_test_empty((isset($context["search"]) ? $context["search"] : null))) {
                // line 66
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_users_list_for_user_picker", array("max" =>                 // line 70
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>                 // line 71
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>                 // line 72
(isset($context["newOrder"]) ? $context["newOrder"] : null), "mode" =>                 // line 73
(isset($context["mode"]) ? $context["mode"] : null), "showAllUsers" =>                 // line 74
(isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), "showId" =>                 // line 75
(isset($context["showId"]) ? $context["showId"] : null), "showPicture" =>                 // line 76
(isset($context["showPicture"]) ? $context["showPicture"] : null), "showUsername" =>                 // line 77
(isset($context["showUsername"]) ? $context["showUsername"] : null), "showMail" =>                 // line 78
(isset($context["showMail"]) ? $context["showMail"] : null), "showCode" =>                 // line 79
(isset($context["showCode"]) ? $context["showCode"] : null), "showGroups" =>                 // line 80
(isset($context["showGroups"]) ? $context["showGroups"] : null), "showPlatformRoles" =>                 // line 81
(isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), "attachName" =>                 // line 82
(isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
                // line 85
                echo "
    ";
            } else {
                // line 87
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("claro_searched_users_list_for_user_picker", array("search" =>                 // line 91
(isset($context["search"]) ? $context["search"] : null), "max" =>                 // line 92
(isset($context["max"]) ? $context["max"] : null), "orderedBy" =>                 // line 93
(isset($context["orderedBy"]) ? $context["orderedBy"] : null), "order" =>                 // line 94
(isset($context["newOrder"]) ? $context["newOrder"] : null), "mode" =>                 // line 95
(isset($context["mode"]) ? $context["mode"] : null), "showAllUsers" =>                 // line 96
(isset($context["showAllUsers"]) ? $context["showAllUsers"] : null), "showId" =>                 // line 97
(isset($context["showId"]) ? $context["showId"] : null), "showPicture" =>                 // line 98
(isset($context["showPicture"]) ? $context["showPicture"] : null), "showUsername" =>                 // line 99
(isset($context["showUsername"]) ? $context["showUsername"] : null), "showMail" =>                 // line 100
(isset($context["showMail"]) ? $context["showMail"] : null), "showCode" =>                 // line 101
(isset($context["showCode"]) ? $context["showCode"] : null), "showGroups" =>                 // line 102
(isset($context["showGroups"]) ? $context["showGroups"] : null), "showPlatformRoles" =>                 // line 103
(isset($context["showPlatformRoles"]) ? $context["showPlatformRoles"] : null), "attachName" =>                 // line 104
(isset($context["attachName"]) ? $context["attachName"] : null))), "html", null, true);
                // line 107
                echo "
    ";
            }
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
        return "ClarolineCoreBundle:User:usersListForUserPicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  888 => 107,  886 => 104,  885 => 103,  884 => 102,  883 => 101,  882 => 100,  881 => 99,  880 => 98,  879 => 97,  878 => 96,  877 => 95,  876 => 94,  875 => 93,  874 => 92,  873 => 91,  871 => 87,  867 => 85,  865 => 82,  864 => 81,  863 => 80,  862 => 79,  861 => 78,  860 => 77,  859 => 76,  858 => 75,  857 => 74,  856 => 73,  855 => 72,  854 => 71,  853 => 70,  851 => 66,  849 => 65,  846 => 64,  843 => 63,  840 => 62,  837 => 61,  834 => 60,  831 => 59,  806 => 58,  789 => 54,  787 => 50,  786 => 49,  785 => 48,  784 => 47,  783 => 46,  782 => 45,  781 => 44,  780 => 43,  779 => 42,  778 => 41,  777 => 40,  776 => 39,  775 => 38,  774 => 37,  773 => 31,  771 => 29,  767 => 27,  765 => 23,  764 => 22,  763 => 21,  762 => 20,  761 => 19,  760 => 18,  759 => 17,  758 => 16,  757 => 15,  756 => 14,  755 => 13,  754 => 12,  753 => 11,  752 => 5,  750 => 3,  747 => 2,  721 => 1,  715 => 416,  711 => 415,  707 => 414,  703 => 413,  699 => 412,  695 => 410,  689 => 408,  687 => 407,  681 => 403,  674 => 401,  669 => 398,  663 => 397,  660 => 396,  656 => 394,  651 => 392,  646 => 391,  644 => 390,  640 => 389,  637 => 388,  635 => 387,  632 => 386,  629 => 385,  626 => 384,  624 => 383,  619 => 381,  616 => 380,  613 => 379,  609 => 378,  606 => 377,  603 => 376,  601 => 375,  596 => 373,  592 => 371,  590 => 370,  587 => 369,  582 => 366,  573 => 363,  570 => 362,  565 => 361,  563 => 360,  558 => 358,  554 => 356,  552 => 355,  549 => 354,  542 => 350,  537 => 348,  533 => 346,  531 => 345,  528 => 344,  523 => 341,  519 => 339,  513 => 337,  511 => 336,  506 => 334,  502 => 332,  500 => 331,  497 => 330,  490 => 326,  485 => 324,  481 => 322,  479 => 321,  476 => 320,  469 => 316,  464 => 314,  456 => 309,  451 => 307,  447 => 305,  438 => 301,  433 => 299,  429 => 297,  427 => 296,  424 => 295,  419 => 292,  413 => 288,  405 => 283,  399 => 281,  397 => 280,  392 => 278,  388 => 276,  386 => 275,  383 => 274,  376 => 270,  371 => 268,  367 => 266,  365 => 265,  361 => 263,  357 => 261,  351 => 259,  349 => 258,  345 => 257,  341 => 256,  337 => 255,  333 => 254,  328 => 251,  326 => 250,  323 => 249,  317 => 247,  315 => 246,  311 => 245,  307 => 244,  303 => 243,  299 => 242,  295 => 240,  293 => 239,  289 => 237,  286 => 236,  282 => 235,  276 => 231,  270 => 228,  267 => 227,  265 => 226,  262 => 225,  256 => 222,  253 => 221,  251 => 220,  248 => 219,  241 => 215,  237 => 214,  234 => 213,  232 => 212,  229 => 211,  222 => 207,  218 => 206,  215 => 205,  213 => 204,  210 => 203,  203 => 199,  199 => 198,  196 => 197,  194 => 196,  191 => 195,  184 => 191,  180 => 190,  173 => 186,  169 => 185,  166 => 184,  159 => 180,  155 => 179,  152 => 178,  150 => 177,  147 => 176,  140 => 172,  136 => 171,  133 => 170,  131 => 169,  128 => 168,  121 => 164,  117 => 163,  114 => 162,  112 => 161,  108 => 159,  104 => 157,  102 => 156,  95 => 151,  89 => 149,  87 => 148,  79 => 143,  62 => 129,  58 => 128,  49 => 121,  43 => 118,  39 => 117,  36 => 116,  34 => 115,  31 => 114,  29 => 113,  27 => 112,  25 => 111,  22 => 110,  19 => 57,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ClarolineCoreBundle:User:usersListForUserPicker.html.twig", "/var/www/claroline/vendor/claroline/distribution/main/core/Resources/views/User/usersListForUserPicker.html.twig");
    }
}
