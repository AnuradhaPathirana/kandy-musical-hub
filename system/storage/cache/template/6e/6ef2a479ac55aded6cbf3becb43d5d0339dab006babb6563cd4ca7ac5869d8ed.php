<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* plaza/blog/setting.twig */
class __TwigTemplate_73cdb6a1301a215e93f859dc14fc05f567bd0ddb953a498a0f8ec415293a02fd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-blog\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 23
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 28
        echo "        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 33
        echo ($context["text_dashboard_menu"] ?? null);
        echo "</h3>
                        </div>
                        <ul class=\"nav nav-tabs menu-sections pt-dashboard-menu\">
                            ";
        // line 36
        $context["i"] = 0;
        // line 37
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plaza_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 38
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 38)) {
                // line 39
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 39)) {
                    echo " class=\"active\" ";
                }
                echo ">
                                        <a href=\"#ptcollapse_";
                // line 40
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent ";
                if ( !twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 40)) {
                    echo " collapsed ";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 40);
                echo "</a>
                                        <ul id=\"ptcollapse_";
                // line 41
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 41)) {
                    echo " in ";
                }
                echo "\">
                                            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "                                                <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 43)) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 43);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 43);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                                        </ul>
                                    </li>
                                ";
            } else {
                // line 48
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 48)) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 48);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 48);
                echo "</a></li>
                                ";
            }
            // line 50
            echo "                                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 51
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 60
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form action=\"";
        // line 63
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog\" class=\"form-horizontal\">
                                <ul class=\"nav nav-tabs hoz-ul-sections\">
                                    <li class=\"active\"><a href=\"#tab-blog\" data-toggle=\"tab\">";
        // line 65
        echo ($context["tab_blog_page"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-category\" data-toggle=\"tab\">";
        // line 66
        echo ($context["tab_category_page"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-post\" data-toggle=\"tab\">";
        // line 67
        echo ($context["tab_post_page"] ?? null);
        echo "</a></li>
                                </ul>

                                <div class=\"tab-content child-content\">
                                    <div class=\"tab-pane active\" id=\"tab-blog\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-3 control-label\">";
        // line 73
        echo ($context["entry_image_post"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-6\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 77
        echo ($context["entry_width"] ?? null);
        echo "\" name=\"module_ptblog_blog_width\" value=\"";
        echo ($context["module_ptblog_blog_width"] ?? null);
        echo "\" />
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 80
        echo ($context["entry_height"] ?? null);
        echo "\" name=\"module_ptblog_blog_height\" value=\"";
        echo ($context["module_ptblog_blog_height"] ?? null);
        echo "\" />
                                                    </div>
                                                </div>
                                                ";
        // line 83
        if (($context["error_image_blog"] ?? null)) {
            // line 84
            echo "                                                    <div class=\"text-danger\">";
            echo ($context["error_image_blog"] ?? null);
            echo "</div>
                                                ";
        }
        // line 86
        echo "                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 90
        echo ($context["help_post_limit"] ?? null);
        echo "\">";
        echo ($context["entry_post_limit"] ?? null);
        echo "</span></label>
                                            <div class=\"col-sm-3\">
                                                <input type=\"text\" name=\"module_ptblog_blog_post_limit\" value=\"";
        // line 92
        echo ($context["module_ptblog_blog_post_limit"] ?? null);
        echo "\" placeholder=\"10\" id=\"input-blog-limit\" class=\"form-control\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-category\">";
        // line 97
        echo ($context["entry_categories"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <input type=\"hidden\" name=\"module_ptblog_cates_show\" value=\"0\" />
                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptblog_cates_show\" id=\"input-blog-category\"
                                                       data-toggle=\"toggle\" data-on=\"";
        // line 101
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                        ";
        // line 102
        if (($context["module_ptblog_cates_show"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                                <div class=\"form-group col-sm-12 form-blog-category\">
                                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 104
        echo ($context["entry_categories"] ?? null);
        echo "\" id=\"input-cate-list\" class=\"form-control\" />
                                                    <div id=\"blog-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blog_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 107
            echo "                                                            <div id=\"blog-category";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "post_list_id", [], "any", false, false, false, 107);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 107);
            echo "
                                                                <input type=\"hidden\" name=\"module_ptblog_cates_list[]\" value=\"";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["category"], "post_list_id", [], "any", false, false, false, 108);
            echo "\" />
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-latest-post\">";
        // line 117
        echo ($context["entry_latest_blog"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"hidden\" name=\"module_ptblog_blog_latest_post\" value=\"0\" />
                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptblog_blog_latest_post\" id=\"input-blog-latest-post\"
                                                       data-toggle=\"toggle\" data-on=\"";
        // line 121
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                        ";
        // line 122
        if (($context["module_ptblog_blog_latest_post"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                            </div>
                                            <label class=\"col-sm-2 control-label\" for=\"input-blog-latest-post-limit\">";
        // line 124
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"text\" name=\"module_ptblog_blog_latest_post_limit\" value=\"";
        // line 126
        echo ($context["module_ptblog_blog_latest_post_limit"] ?? null);
        echo "\" placeholder=\"5\" id=\"input-blog-latest-post-limit\" class=\"form-control\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-layout\">";
        // line 131
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-6\">
                                                <div class=\"switch switch-multi3\">
                                                    <input type=\"radio\" name=\"module_ptblog_blog_layout\" class=\"switch-input\" id=\"blog-layout-left\" value=\"left\" ";
        // line 134
        if ((($context["module_ptblog_blog_layout"] ?? null) == "left")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"blog-layout-left\" class=\"switch-label switch-label-1\">";
        // line 135
        echo ($context["text_sidebar_left"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"module_ptblog_blog_layout\" class=\"switch-input\" id=\"blog-layout-right\" value=\"right\" ";
        // line 137
        if ((($context["module_ptblog_blog_layout"] ?? null) == "right")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"blog-layout-right\" class=\"switch-label switch-label-2\">";
        // line 138
        echo ($context["text_sidebar_right"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"module_ptblog_blog_layout\" class=\"switch-input\" id=\"blog-layout-full\" value=\"full\" ";
        // line 140
        if ((($context["module_ptblog_blog_layout"] ?? null) == "full")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"blog-layout-full\" class=\"switch-label switch-label-3\">";
        // line 141
        echo ($context["text_full"] ?? null);
        echo "</label>

                                                    <span class=\"switch-selection\"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-post-content\">";
        // line 149
        echo ($context["entry_post_content"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-3\">
                                                <select name=\"module_ptblog_blog_post_content\" class=\"form-control\" id=\"input-blog-post-content\">
                                                    <option value=\"grid\" ";
        // line 152
        if ((($context["module_ptblog_blog_post_content"] ?? null) == "grid")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_grid"] ?? null);
        echo "</option>
                                                    <option value=\"list\" ";
        // line 153
        if ((($context["module_ptblog_blog_post_content"] ?? null) == "list")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_list"] ?? null);
        echo "</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-meta-title\">";
        // line 159
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <input type=\"text\" name=\"module_ptblog_meta_title\" value=\"";
        // line 161
        echo ($context["module_ptblog_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-blog-meta-title\" class=\"form-control\" />
                                                ";
        // line 162
        if (($context["error_meta_title"] ?? null)) {
            // line 163
            echo "                                                    <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                                                ";
        }
        // line 165
        echo "                                            </div>
                                        </div>

                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-meta-description\">";
        // line 169
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <input type=\"text\" name=\"module_ptblog_meta_description\" value=\"";
        // line 171
        echo ($context["module_ptblog_meta_description"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-blog-meta-description\" class=\"form-control\" />
                                                ";
        // line 172
        if (($context["error_meta_description"] ?? null)) {
            // line 173
            echo "                                                    <div class=\"text-danger\">";
            echo ($context["error_meta_description"] ?? null);
            echo "</div>
                                                ";
        }
        // line 175
        echo "                                            </div>
                                        </div>

                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-blog-meta-keyword\">";
        // line 179
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <input type=\"text\" name=\"module_ptblog_meta_keyword\" value=\"";
        // line 181
        echo ($context["module_ptblog_meta_keyword"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-blog-meta-keyword\" class=\"form-control\" />
                                                ";
        // line 182
        if (($context["error_meta_keyword"] ?? null)) {
            // line 183
            echo "                                                    <div class=\"text-danger\">";
            echo ($context["error_meta_keyword"] ?? null);
            echo "</div>
                                                ";
        }
        // line 185
        echo "                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-seo-url\">";
        // line 189
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 192
            echo "                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\"><img src=\"language/";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 193);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 193);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 193);
            echo "\" /></span>
                                                        <input type=\"text\" id=\"input-seo-url";
            // line 194
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 194);
            echo "\" class=\"form-control\" name=\"module_ptblog_seo_url[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 194);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_ptblog_seo_url"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 194)] ?? null) : null);
            echo "\" placeholder=\"\" />
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"tab-pane\" id=\"tab-category\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-3 control-label\">";
        // line 203
        echo ($context["entry_image_post"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-6\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 207
        echo ($context["entry_width"] ?? null);
        echo "\" name=\"module_ptblog_category_width\" value=\"";
        echo ($context["module_ptblog_category_width"] ?? null);
        echo "\" />
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 210
        echo ($context["entry_height"] ?? null);
        echo "\" name=\"module_ptblog_category_height\" value=\"";
        echo ($context["module_ptblog_category_height"] ?? null);
        echo "\" />
                                                    </div>
                                                </div>
                                                ";
        // line 213
        if (($context["error_image_category"] ?? null)) {
            // line 214
            echo "                                                    <div class=\"text-danger\">";
            echo ($context["error_image_category"] ?? null);
            echo "</div>
                                                ";
        }
        // line 216
        echo "                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-category-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 220
        echo ($context["help_post_limit"] ?? null);
        echo "\">";
        echo ($context["entry_post_limit"] ?? null);
        echo "</span></label>
                                            <div class=\"col-sm-3\">
                                                <input type=\"text\" name=\"module_ptblog_category_post_limit\" value=\"";
        // line 222
        echo ($context["module_ptblog_category_post_limit"] ?? null);
        echo "\" placeholder=\"10\" id=\"input-category-limit\" class=\"form-control\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-category-latest-post\">";
        // line 227
        echo ($context["entry_latest_blog"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"hidden\" name=\"module_ptblog_category_latest_post\" value=\"0\" />
                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptblog_category_latest_post\" id=\"input-category-latest-post\"
                                                       data-toggle=\"toggle\" data-on=\"";
        // line 231
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                        ";
        // line 232
        if (($context["module_ptblog_category_latest_post"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                            </div>
                                            <label class=\"col-sm-2 control-label\" for=\"input-category-latest-post-limit\">";
        // line 234
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"text\" name=\"module_ptblog_category_latest_post_limit\" value=\"";
        // line 236
        echo ($context["module_ptblog_category_latest_post_limit"] ?? null);
        echo "\" placeholder=\"5\" id=\"input-category-latest-post-limit\" class=\"form-control\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-category-layout\">";
        // line 241
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-6\">
                                                <div class=\"switch switch-multi3\">
                                                    <input type=\"radio\" name=\"module_ptblog_category_layout\" class=\"switch-input\" id=\"category-layout-left\" value=\"left\" ";
        // line 244
        if ((($context["module_ptblog_category_layout"] ?? null) == "left")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"category-layout-left\" class=\"switch-label switch-label-1\">";
        // line 245
        echo ($context["text_sidebar_left"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"module_ptblog_category_layout\" class=\"switch-input\" id=\"category-layout-right\" value=\"right\" ";
        // line 247
        if ((($context["module_ptblog_category_layout"] ?? null) == "right")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"category-layout-right\" class=\"switch-label switch-label-2\">";
        // line 248
        echo ($context["text_sidebar_right"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"module_ptblog_category_layout\" class=\"switch-input\" id=\"category-layout-full\" value=\"full\" ";
        // line 250
        if ((($context["module_ptblog_category_layout"] ?? null) == "full")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"category-layout-full\" class=\"switch-label switch-label-3\">";
        // line 251
        echo ($context["text_full"] ?? null);
        echo "</label>

                                                    <span class=\"switch-selection\"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-category-post-content\">";
        // line 259
        echo ($context["entry_post_content"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-3\">
                                                <select name=\"module_ptblog_category_post_content\" class=\"form-control\" id=\"input-category-post-content\">
                                                    <option value=\"grid\" ";
        // line 262
        if ((($context["module_ptblog_category_post_content"] ?? null) == "grid")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_grid"] ?? null);
        echo "</option>
                                                    <option value=\"list\" ";
        // line 263
        if ((($context["module_ptblog_category_post_content"] ?? null) == "list")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_list"] ?? null);
        echo "</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"tab-pane\" id=\"tab-post\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-3 control-label\">";
        // line 271
        echo ($context["entry_image_post"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-6\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 275
        echo ($context["entry_width"] ?? null);
        echo "\" name=\"module_ptblog_post_width\" value=\"";
        echo ($context["module_ptblog_post_width"] ?? null);
        echo "\" />
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 278
        echo ($context["entry_height"] ?? null);
        echo "\" name=\"module_ptblog_post_height\" value=\"";
        echo ($context["module_ptblog_post_height"] ?? null);
        echo "\" />
                                                    </div>
                                                </div>
                                                ";
        // line 281
        if (($context["error_image_post"] ?? null)) {
            // line 282
            echo "                                                    <div class=\"text-danger\">";
            echo ($context["error_image_post"] ?? null);
            echo "</div>
                                                ";
        }
        // line 284
        echo "                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-related-post\">";
        // line 288
        echo ($context["entry_related_post"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"hidden\" name=\"module_ptblog_post_related\" value=\"0\" />
                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptblog_post_related\" id=\"input-related-post\"
                                                       data-toggle=\"toggle\" data-on=\"";
        // line 292
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                        ";
        // line 293
        if (($context["module_ptblog_post_related"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                            </div>
                                            <label class=\"col-sm-2 control-label\" for=\"input-related-post-limit\">";
        // line 295
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <input type=\"text\" name=\"module_ptblog_post_related_limit\" value=\"";
        // line 297
        echo ($context["module_ptblog_post_related_limit"] ?? null);
        echo "\" placeholder=\"5\" id=\"input-related-post-limit\" class=\"form-control\" />
                                            </div>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
                                            <label class=\"col-sm-3 control-label\">";
        // line 301
        echo ($context["entry_image_related_post"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-6\">
                                                <div class=\"row\">
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 305
        echo ($context["entry_width"] ?? null);
        echo "\" name=\"module_ptblog_related_post_width\" value=\"";
        echo ($context["module_ptblog_related_post_width"] ?? null);
        echo "\" />
                                                    </div>
                                                    <div class=\"col-sm-6\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 308
        echo ($context["entry_height"] ?? null);
        echo "\" name=\"module_ptblog_related_post_height\" value=\"";
        echo ($context["module_ptblog_related_post_height"] ?? null);
        echo "\" />
                                                    </div>
                                                </div>
                                                ";
        // line 311
        if (($context["error_image_related_post"] ?? null)) {
            // line 312
            echo "                                                    <div class=\"text-danger\">";
            echo ($context["error_image_related_post"] ?? null);
            echo "</div>
                                                ";
        }
        // line 314
        echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-post-layout\">";
        // line 317
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-6\">
                                                <div class=\"switch switch-multi3\">
                                                    <input type=\"radio\" name=\"module_ptblog_post_layout\" class=\"switch-input\" id=\"post-layout-left\" value=\"left\" ";
        // line 320
        if ((($context["module_ptblog_post_layout"] ?? null) == "left")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"post-layout-left\" class=\"switch-label switch-label-1\">";
        // line 321
        echo ($context["text_sidebar_left"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"module_ptblog_post_layout\" class=\"switch-input\" id=\"post-layout-right\" value=\"right\" ";
        // line 323
        if ((($context["module_ptblog_post_layout"] ?? null) == "right")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"post-layout-right\" class=\"switch-label switch-label-2\">";
        // line 324
        echo ($context["text_sidebar_right"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"module_ptblog_post_layout\" class=\"switch-input\" id=\"post-layout-full\" value=\"full\" ";
        // line 326
        if ((($context["module_ptblog_post_layout"] ?? null) == "full")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"post-layout-full\" class=\"switch-label switch-label-3\">";
        // line 327
        echo ($context["text_full"] ?? null);
        echo "</label>

                                                    <span class=\"switch-selection\"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function () {
        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });

        \$('.form-blog-category').hide();
        var show_blog_cate = parseInt(\$('#input-blog-category').val());
        var show_blog_cate_select = \$('#input-blog-category').closest('.toggle');
        if(show_blog_cate == 1) \$('.form-blog-category').show();
        show_blog_cate_select.on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$('.form-blog-category').show();
            } else {
                \$('.form-blog-category').hide();
            }
        });
    });

    \$('input[name=\\'category\\']').autocomplete({
        source: function(request, response) {
            \$.ajax({
                url: 'index.php?route=plaza/blog/list/autocomplete&user_token=";
        // line 371
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item['name'],
                            value: item['post_list_id']
                        }
                    }));
                }
            });
        },
        select: function(item) {
            \$('input[name=\\'category\\']').val('');

            \$('#blog-category' + item['value']).remove();

            \$('#blog-category').append('<div id=\"blog-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"module_ptblog_cates_list[]\" value=\"' + item['value'] + '\" /></div>');
        }
    });

    \$('#blog-category').delegate('.fa-minus-circle', 'click', function() {
        \$(this).parent().remove();
    });
</script>
";
        // line 396
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/blog/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  942 => 396,  914 => 371,  867 => 327,  861 => 326,  856 => 324,  850 => 323,  845 => 321,  839 => 320,  833 => 317,  828 => 314,  822 => 312,  820 => 311,  812 => 308,  804 => 305,  797 => 301,  790 => 297,  785 => 295,  776 => 293,  770 => 292,  763 => 288,  757 => 284,  751 => 282,  749 => 281,  741 => 278,  733 => 275,  726 => 271,  711 => 263,  703 => 262,  697 => 259,  686 => 251,  680 => 250,  675 => 248,  669 => 247,  664 => 245,  658 => 244,  652 => 241,  644 => 236,  639 => 234,  630 => 232,  624 => 231,  617 => 227,  609 => 222,  602 => 220,  596 => 216,  590 => 214,  588 => 213,  580 => 210,  572 => 207,  565 => 203,  557 => 197,  544 => 194,  536 => 193,  533 => 192,  529 => 191,  524 => 189,  518 => 185,  512 => 183,  510 => 182,  504 => 181,  499 => 179,  493 => 175,  487 => 173,  485 => 172,  479 => 171,  474 => 169,  468 => 165,  462 => 163,  460 => 162,  454 => 161,  449 => 159,  436 => 153,  428 => 152,  422 => 149,  411 => 141,  405 => 140,  400 => 138,  394 => 137,  389 => 135,  383 => 134,  377 => 131,  369 => 126,  364 => 124,  355 => 122,  349 => 121,  342 => 117,  334 => 111,  325 => 108,  318 => 107,  314 => 106,  309 => 104,  300 => 102,  294 => 101,  287 => 97,  279 => 92,  272 => 90,  266 => 86,  260 => 84,  258 => 83,  250 => 80,  242 => 77,  235 => 73,  226 => 67,  222 => 66,  218 => 65,  213 => 63,  207 => 60,  197 => 52,  191 => 51,  188 => 50,  176 => 48,  171 => 45,  156 => 43,  152 => 42,  144 => 41,  134 => 40,  127 => 39,  124 => 38,  119 => 37,  117 => 36,  111 => 33,  104 => 28,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/blog/setting.twig", "");
    }
}
