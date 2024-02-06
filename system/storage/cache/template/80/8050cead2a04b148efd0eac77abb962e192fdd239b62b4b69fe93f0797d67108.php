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

/* plaza/module/ptproducts.twig */
class __TwigTemplate_2111e9279ff66a812bd76679cee70cb4fb6abfe5ecbbb5fa7ea2288b7172acb5 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\">
            <div class=\"row\">
                <div class=\"col-md-7 col-sm-12\">
                    <div class=\"theme-option-container\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 28
        echo ($context["text_module_settings"] ?? null);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"form-horizontal\">
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 33
        echo ($context["entry_name"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <input type=\"text\" name=\"name\" value=\"";
        // line 35
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                            ";
        // line 36
        if (($context["error_name"] ?? null)) {
            // line 37
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                            ";
        }
        // line 39
        echo "                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 43
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"hidden\" name=\"status\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"status\" id=\"input-status\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 47
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                    ";
        // line 48
        if (($context["status"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-title\">";
        // line 53
        echo ($context["entry_module_title"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 56
            echo "                                                <div class=\"input-group\">
                                                    <span class=\"input-group-addon\"><img src=\"language/";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 57);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 57);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 57);
            echo "\" /></span>
                                                    <input type=\"text\" name=\"module_title[";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 58);
            echo "]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 58)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 58)] ?? null) : null)) : (""));
            echo "\" placeholder=\"\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\" class=\"form-control\" />
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-type\">";
        // line 65
        echo ($context["entry_module_type"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <select id=\"input-type\" class=\"form-control\" name=\"module_type\">
                                                <option value=\"single_tab\" ";
        // line 68
        if ((($context["module_type"] ?? null) == "single_tab")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_type_single"] ?? null);
        echo "</option>
                                                <option value=\"multi_tabs\" ";
        // line 69
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_type_multiple"] ?? null);
        echo "</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-show-module-des\">";
        // line 75
        echo ($context["entry_show_module_des"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"hidden\" name=\"show_module_description\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_module_description\" id=\"input-show-module-des\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 79
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                    ";
        // line 80
        if (($context["show_module_description"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group form-module-des\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-module-des\">";
        // line 85
        echo ($context["entry_module_des"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <ul class=\"nav nav-tabs\" id=\"module-des-language\">
                                                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 89
            echo "                                                    <li><a href=\"#module-des-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 89);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 89);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 89);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 89);
            echo "</a></li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                            </ul>
                                            <div class=\"tab-content\">
                                                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 94
            echo "                                                <div class=\"tab-pane\" id=\"module-des-language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
            echo "\">
                                                    <textarea name=\"module_description[";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 95);
            echo "]\" placeholder=\"";
            echo ($context["entry_module_des"] ?? null);
            echo "\" id=\"input-module-des";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_description"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 95)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 95)] ?? null) : null)) : (""));
            echo "</textarea>
                                                </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"theme-option-container\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-film\"></i> ";
        // line 108
        echo ($context["text_slider_settings"] ?? null);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"form-horizontal\">
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-slider-width\">";
        // line 113
        echo ($context["entry_width"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"slider_width\" value=\"";
        // line 115
        echo ($context["slider_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-slider-width\" class=\"form-control\" />
                                            ";
        // line 116
        if (($context["error_slider_width"] ?? null)) {
            // line 117
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_slider_width"] ?? null);
            echo "</div>
                                            ";
        }
        // line 119
        echo "                                        </div>
                                    </div>

                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-slider-height\">";
        // line 123
        echo ($context["entry_height"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"slider_height\" value=\"";
        // line 125
        echo ($context["slider_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-slider-height\" class=\"form-control\" />
                                            ";
        // line 126
        if (($context["error_slider_height"] ?? null)) {
            // line 127
            echo "                                                <div class=\"text-danger\">";
            echo ($context["error_slider_height"] ?? null);
            echo "</div>
                                            ";
        }
        // line 129
        echo "                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-auto\">";
        // line 133
        echo ($context["entry_auto"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"hidden\" name=\"auto\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"auto\" id=\"input-auto\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 137
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                    ";
        // line 138
        if (($context["auto"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-item\">";
        // line 143
        echo ($context["entry_item"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 146
        echo ($context["text_desktop"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"item[desktop]\" value=\"";
        // line 147
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "desktop", [], "any", false, false, false, 147);
        echo "\" placeholder=\"";
        echo ($context["text_desktop"] ?? null);
        echo "\" />
                                            </div>

                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 151
        echo ($context["text_laptop"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"item[laptop]\" value=\"";
        // line 152
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "laptop", [], "any", false, false, false, 152);
        echo "\" placeholder=\"";
        echo ($context["text_laptop"] ?? null);
        echo "\" />
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-inline\">
                                                <span>";
        // line 156
        echo ($context["text_tablet"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"item[tablet]\" value=\"";
        // line 157
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "tablet", [], "any", false, false, false, 157);
        echo "\" placeholder=\"";
        echo ($context["text_tablet"] ?? null);
        echo "\" />
                                            </div>\t
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 161
        echo ($context["text_s_tablet"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"item[s_tablet]\" value=\"";
        // line 162
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "s_tablet", [], "any", false, false, false, 162);
        echo "\" placeholder=\"";
        echo ($context["text_s_tablet"] ?? null);
        echo "\" />
                                            </div>

                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 166
        echo ($context["text_mobile"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"item[mobile]\" value=\"";
        // line 167
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "mobile", [], "any", false, false, false, 167);
        echo "\" placeholder=\"";
        echo ($context["text_mobile"] ?? null);
        echo "\" />
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-inline\">
                                                <span>";
        // line 171
        echo ($context["text_s_mobile"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"item[s_mobile]\" value=\"";
        // line 172
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "s_mobile", [], "any", false, false, false, 172);
        echo "\" placeholder=\"";
        echo ($context["text_s_mobile"] ?? null);
        echo "\" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-row\">";
        // line 178
        echo ($context["entry_rows"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 181
        echo ($context["text_desktop"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"row[desktop]\" value=\"";
        // line 182
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "desktop", [], "any", false, false, false, 182);
        echo "\" placeholder=\"";
        echo ($context["text_desktop"] ?? null);
        echo "\" />
                                            </div>

                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 186
        echo ($context["text_laptop"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"row[laptop]\" value=\"";
        // line 187
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "laptop", [], "any", false, false, false, 187);
        echo "\" placeholder=\"";
        echo ($context["text_laptop"] ?? null);
        echo "\" />
                                            </div>

                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 191
        echo ($context["text_tablet"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"row[tablet]\" value=\"";
        // line 192
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "tablet", [], "any", false, false, false, 192);
        echo "\" placeholder=\"";
        echo ($context["text_tablet"] ?? null);
        echo "\" />
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-inline\">
                                                <span>";
        // line 196
        echo ($context["text_s_tablet"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"row[s_tablet]\" value=\"";
        // line 197
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "s_tablet", [], "any", false, false, false, 197);
        echo "\" placeholder=\"";
        echo ($context["text_s_tablet"] ?? null);
        echo "\" />
                                            </div>

                                            <div class=\"form-control-inline\">
                                                <span>";
        // line 201
        echo ($context["text_mobile"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"row[mobile]\" value=\"";
        // line 202
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "mobile", [], "any", false, false, false, 202);
        echo "\" placeholder=\"";
        echo ($context["text_mobile"] ?? null);
        echo "\" />
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-inline\">
                                                <span>";
        // line 206
        echo ($context["text_s_mobile"] ?? null);
        echo "</span>
                                                <input type=\"text\" name=\"row[s_mobile]\" value=\"";
        // line 207
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "s_mobile", [], "any", false, false, false, 207);
        echo "\" placeholder=\"";
        echo ($context["text_s_mobile"] ?? null);
        echo "\" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-limit\">";
        // line 213
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"limit\" value=\"";
        // line 215
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-speed\">";
        // line 220
        echo ($context["entry_speed"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"speed\" value=\"";
        // line 222
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_speed"] ?? null);
        echo "\" id=\"input-speed\" class=\"form-control\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-navigation\">";
        // line 227
        echo ($context["entry_navigation"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"hidden\" name=\"navigation\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"navigation\" id=\"input-navigation\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 231
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                    ";
        // line 232
        if (($context["navigation"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-pagination\">";
        // line 237
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"hidden\" name=\"pagination\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"pagination\" id=\"input-pagination\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 241
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                    ";
        // line 242
        if (($context["pagination"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"theme-option-container\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-television\"></i> ";
        // line 252
        echo ($context["text_layout_settings"] ?? null);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-collection-layout\">";
        // line 257
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <div class=\"col-sm-4 radio-layout-type\">
                                                <input type=\"radio\" name=\"layout_type\" id=\"layout-type-slider\" value=\"slider\" ";
        // line 260
        if ((($context["layout_type"] ?? null) == "slider")) {
            echo " checked=\"checked\" ";
        }
        echo " />
                                                <label class=\"lb-layout-type ";
        // line 261
        if ((($context["layout_type"] ?? null) == "slider")) {
            echo " active ";
        }
        echo "\" for=\"layout-type-slider\"><img width=\"70px\" src=\"../image/plaza/slider.png\" /></label>
                                                <span>";
        // line 262
        echo ($context["text_slider"] ?? null);
        echo "</span>
                                            </div>
                                            <div class=\"col-sm-4 radio-layout-type\">
                                                <input type=\"radio\" name=\"layout_type\" id=\"layout-type-large-item\" value=\"large_item\" ";
        // line 265
        if ((($context["layout_type"] ?? null) == "large_item")) {
            echo " checked=\"checked\" ";
        }
        echo " />
                                                <label class=\"lb-layout-type ";
        // line 266
        if ((($context["layout_type"] ?? null) == "large_item")) {
            echo " active ";
        }
        echo "\" for=\"layout-type-large-item\"><img width=\"70px\" src=\"../image/plaza/large_slider.png\" /></label>
                                                <span>";
        // line 267
        echo ($context["text_large_item"] ?? null);
        echo "</span>
                                            </div>
                                            <div class=\"col-sm-4 radio-layout-type\">
                                                <input type=\"radio\" name=\"layout_type\" id=\"layout-type-image\" value=\"image\" ";
        // line 270
        if ((($context["layout_type"] ?? null) == "image")) {
            echo " checked=\"checked\" ";
        }
        echo " />
                                                <label class=\"lb-layout-type ";
        // line 271
        if ((($context["layout_type"] ?? null) == "image")) {
            echo " active ";
        }
        echo "\" for=\"layout-type-image\"><img width=\"70px\" src=\"../image/plaza/image_slider.png\" /></label>
                                                <span>";
        // line 272
        echo ($context["text_image_slider"] ?? null);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-product-layout\">";
        // line 277
        echo ($context["entry_product_layout"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <div class=\"switch switch-multi3\">
                                                <input type=\"radio\" name=\"product_layout_type\" class=\"switch-input\" id=\"product-layout-grid\" value=\"grid\" ";
        // line 280
        if ((($context["product_layout_type"] ?? null) == "grid")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                <label for=\"product-layout-grid\" class=\"switch-label switch-label-1\">";
        // line 281
        echo ($context["text_grid"] ?? null);
        echo "</label>

                                                <input type=\"radio\" name=\"product_layout_type\" class=\"switch-input\" id=\"product-layout-list\" value=\"list\" ";
        // line 283
        if ((($context["product_layout_type"] ?? null) == "list")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                <label for=\"product-layout-list\" class=\"switch-label switch-label-2\">";
        // line 284
        echo ($context["text_list"] ?? null);
        echo "</label>

                                                <input type=\"radio\" name=\"product_layout_type\" class=\"switch-input\" id=\"product-layout-other\" value=\"other\" ";
        // line 286
        if ((($context["product_layout_type"] ?? null) == "other")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                <label for=\"product-layout-other\" class=\"switch-label switch-label-3\">";
        // line 287
        echo ($context["text_other"] ?? null);
        echo "</label>

                                                <span class=\"switch-selection\"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-custom-class\">";
        // line 294
        echo ($context["entry_custom_class"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"text\" name=\"layout_classname\" value=\"";
        // line 296
        echo ($context["layout_classname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_custom_class"] ?? null);
        echo "\" id=\"input-custom-class\" class=\"form-control\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-5 col-sm-12\">
                    <div class=\"theme-option-container\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-shopping-bag\"></i> ";
        // line 308
        echo ($context["text_catalog_settings"] ?? null);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-price\">";
        // line 313
        echo ($context["entry_show_price"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_price\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_price\" id=\"input-price\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 317
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 318
        if (($context["show_price"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>

                                        <label class=\"col-sm-3 control-label\" for=\"input-cart\">";
        // line 321
        echo ($context["entry_show_cart"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_cart\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_cart\" id=\"input-cart\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 325
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 326
        if (($context["show_cart"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-wishlist\">";
        // line 331
        echo ($context["entry_show_wishlist"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_wishlist\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_wishlist\" id=\"input-wishlist\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 335
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 336
        if (($context["show_wishlist"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>

                                        <label class=\"col-sm-3 control-label\" for=\"input-compare\">";
        // line 339
        echo ($context["entry_show_compare"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_compare\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_compare\" id=\"input-compare\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 343
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 344
        if (($context["show_compare"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-countdown\">";
        // line 349
        echo ($context["entry_countdown"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_countdown\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_countdown\" id=\"input-countdown\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 353
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 354
        if (($context["show_countdown"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>

                                        <label class=\"col-sm-3 control-label\" for=\"input-quickview\">";
        // line 357
        echo ($context["entry_quickview"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_quickview\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_quickview\" id=\"input-quickview\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 361
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 362
        if (($context["show_quickview"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-hover-image\">";
        // line 367
        echo ($context["entry_hover_image"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_hover_image\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_hover_image\" id=\"input-hover-image\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 371
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 372
        if (($context["show_hover_image"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>

                                        <label class=\"col-sm-3 control-label\" for=\"input-swatches-image\">";
        // line 375
        echo ($context["entry_swatches_image"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_swatches_image\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_swatches_image\" id=\"input-swatches-image\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 379
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 380
        if (($context["show_swatches_image"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-product-description\">";
        // line 385
        echo ($context["entry_product_des"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_product_description\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_product_description\" id=\"input-product-description\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 389
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 390
        if (($context["show_product_description"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>

                                        <label class=\"col-sm-3 control-label\" for=\"input-product-label\">";
        // line 393
        echo ($context["entry_product_label"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-3\">
                                            <input type=\"hidden\" name=\"show_label\" value=\"0\" />
                                            <input type=\"checkbox\" class=\"ckb-switch\" name=\"show_label\" id=\"input-product-label\"
                                                   data-toggle=\"toggle\" data-on=\"";
        // line 397
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"90\" data-height=\"36\"
                                                    ";
        // line 398
        if (($context["show_label"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"theme-option-container data-settings-container single-type-module\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-shopping-bag\"></i> ";
        // line 409
        echo ($context["text_product_settings"] ?? null);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-single-collection\">";
        // line 414
        echo ($context["entry_collection"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <div class=\"switch switch-multi3\">
                                                <input type=\"radio\" name=\"single_product_collection\" class=\"switch-input\" id=\"single-type-specified\" value=\"specified\" ";
        // line 417
        if ((($context["single_product_collection"] ?? null) == "specified")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                <label for=\"single-type-specified\" class=\"switch-label switch-label-1\">";
        // line 418
        echo ($context["text_specified_product"] ?? null);
        echo "</label>

                                                <input type=\"radio\" name=\"single_product_collection\" class=\"switch-input\" id=\"single-type-category\" value=\"category\" ";
        // line 420
        if ((($context["single_product_collection"] ?? null) == "category")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                <label for=\"single-type-category\" class=\"switch-label switch-label-2\">";
        // line 421
        echo ($context["text_category_product"] ?? null);
        echo "</label>

                                                <input type=\"radio\" name=\"single_product_collection\" class=\"switch-input\" id=\"single-type-special\" value=\"special\" ";
        // line 423
        if ((($context["single_product_collection"] ?? null) == "special")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                <label for=\"single-type-special\" class=\"switch-label switch-label-3\">";
        // line 424
        echo ($context["text_special_product"] ?? null);
        echo "</label>

                                                <span class=\"switch-selection\"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div id=\"module-single-type-specified\" class=\"module-single-type-content\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-single-specified-products\">";
        // line 433
        echo ($context["entry_products"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <input type=\"text\" name=\"single_specified_product\" value=\"\" placeholder=\"";
        // line 435
        echo ($context["entry_products"] ?? null);
        echo "\" id=\"input-single-specified-products\" class=\"form-control\" />
                                                <div id=\"single-specified-product\" class=\"well well-sm\" style=\"height: 100px; overflow: auto;\">
                                                    ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["single_specified_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 438
            echo "                                                        <div id=\"single-specified-product";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 438);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 438);
            echo "
                                                            <input type=\"hidden\" name=\"single_specified_products[]\" value=\"";
            // line 439
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 439);
            echo "\" />
                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 442
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id=\"module-single-type-category\" class=\"module-single-type-content\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-single-category\">";
        // line 449
        echo ($context["entry_category"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <select id=\"input-single-category\" class=\"form-control selectpicker\" data-live-search=\"true\" title=\"";
        // line 451
        echo ($context["entry_category"] ?? null);
        echo "\">
                                                    ";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 453
            echo "                                                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 453);
            echo "\" ";
            if ((($context["single_category"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 453))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 453);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 455
        echo "                                                </select>
                                                <input type=\"hidden\" name=\"single_category\" value=\"";
        // line 456
        echo ($context["single_category"] ?? null);
        echo "\" />
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-single-category-product\">";
        // line 461
        echo ($context["entry_products"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <div class=\"switch switch-multi3\">
                                                    <input type=\"radio\" name=\"single_category_product_type\" class=\"switch-input\" id=\"single-category-product-all\" value=\"all\" ";
        // line 464
        if ((($context["single_category_product_type"] ?? null) == "all")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"single-category-product-all\" class=\"switch-label switch-label-1\">";
        // line 465
        echo ($context["text_all_products"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"single_category_product_type\" class=\"switch-input\" id=\"single-category-product-specified\" value=\"specified\" ";
        // line 467
        if ((($context["single_category_product_type"] ?? null) == "specified")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"single-category-product-specified\" class=\"switch-label switch-label-2\">";
        // line 468
        echo ($context["text_specified_product"] ?? null);
        echo "</label>

                                                    <input type=\"radio\" name=\"single_category_product_type\" class=\"switch-input\" id=\"single-category-product-special\" value=\"special\" ";
        // line 470
        if ((($context["single_category_product_type"] ?? null) == "special")) {
            echo " checked=\"checked\"";
        }
        echo "/>
                                                    <label for=\"single-category-product-special\" class=\"switch-label switch-label-3\">";
        // line 471
        echo ($context["text_special_product"] ?? null);
        echo "</label>

                                                    <span class=\"switch-selection\"></span>
                                                </div>

                                                <div class=\"single-category-product-specified single-category-type-chosen\">
                                                    <input type=\"text\" name=\"single_category_product\" value=\"\" placeholder=\"";
        // line 477
        echo ($context["entry_products"] ?? null);
        echo "\" id=\"input-single-category-products\" class=\"form-control\" />
                                                    <div id=\"single-category-product\" class=\"well well-sm\" style=\"height: 100px; overflow: auto;\">
                                                        ";
        // line 479
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["single_category_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 480
            echo "                                                            <div id=\"single-category-product";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 480);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 480);
            echo "
                                                                <input type=\"hidden\" name=\"single_category_products[]\" value=\"";
            // line 481
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 481);
            echo "\" />
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 484
        echo "                                                    </div>
                                                </div>

                                                <div class=\"single-category-product-special single-category-type-chosen\">
                                                    <select id=\"input-single-category-product-special-type\" class=\"form-control selectpicker\" title=\"";
        // line 488
        echo ($context["entry_products_type"] ?? null);
        echo "\">
                                                        <option value=\"mostviewed\" ";
        // line 489
        if ((($context["single_category_product_special_type"] ?? null) == "mostviewed")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_most_viewed"] ?? null);
        echo "</option>
                                                        <option value=\"bestseller\" ";
        // line 490
        if ((($context["single_category_product_special_type"] ?? null) == "bestseller")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_bestseller"] ?? null);
        echo "</option>
                                                        <option value=\"special\"    ";
        // line 491
        if ((($context["single_category_product_special_type"] ?? null) == "special")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_special"] ?? null);
        echo "</option>
                                                        <option value=\"latest\"     ";
        // line 492
        if ((($context["single_category_product_special_type"] ?? null) == "latest")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_latest"] ?? null);
        echo "</option>
                                                        <option value=\"random\"     ";
        // line 493
        if ((($context["single_category_product_special_type"] ?? null) == "random")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_random"] ?? null);
        echo "</option>
                                                    </select>
                                                    <input type=\"hidden\" name=\"single_category_product_special_type\" value=\"";
        // line 495
        echo ($context["single_category_product_special_type"] ?? null);
        echo "\" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id=\"module-single-type-special\" class=\"module-single-type-content\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-3 control-label\" for=\"input-single-product-special-type\">";
        // line 503
        echo ($context["entry_products_type"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-9\">
                                                <select id=\"input-single-product-special-type\" class=\"form-control selectpicker\" title=\"";
        // line 505
        echo ($context["entry_products_type"] ?? null);
        echo "\">
                                                    <option value=\"mostviewed\" ";
        // line 506
        if ((($context["single_product_special_type"] ?? null) == "mostviewed")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_most_viewed"] ?? null);
        echo "</option>
                                                    <option value=\"bestseller\" ";
        // line 507
        if ((($context["single_product_special_type"] ?? null) == "bestseller")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_bestseller"] ?? null);
        echo "</option>
                                                    <option value=\"special\"    ";
        // line 508
        if ((($context["single_product_special_type"] ?? null) == "special")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_special"] ?? null);
        echo "</option>
                                                    <option value=\"latest\"     ";
        // line 509
        if ((($context["single_product_special_type"] ?? null) == "latest")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_latest"] ?? null);
        echo "</option>
                                                    <option value=\"random\"     ";
        // line 510
        if ((($context["single_product_special_type"] ?? null) == "random")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_random"] ?? null);
        echo "</option>
                                                </select>
                                                <input type=\"hidden\" name=\"single_product_special_type\" value=\"";
        // line 512
        echo ($context["single_product_special_type"] ?? null);
        echo "\" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-image\"></i> ";
        // line 522
        echo ($context["text_image_settings"] ?? null);
        echo "</h3>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"form-horizontal\">
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-single-image-width\">";
        // line 527
        echo ($context["entry_width"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"single_image_width\" value=\"";
        // line 529
        echo ($context["single_image_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-single-image-width\" class=\"form-control\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-single-image-height\">";
        // line 534
        echo ($context["entry_height"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"single_image_height\" value=\"";
        // line 536
        echo ($context["single_image_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-single-image-height\" class=\"form-control\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-single-image\">";
        // line 541
        echo ($context["entry_image"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <a href=\"javascript:void(0);\" id=\"input-singe-module-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 543
        echo ($context["single_image_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["single_image_placeholder"] ?? null);
        echo "\" /></a>
                                            <input type=\"hidden\" name=\"single_image\" value=\"";
        // line 544
        echo ($context["single_image"] ?? null);
        echo "\" id=\"input-single-image\" />
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"col-sm-3 control-label\" for=\"input-single-image-link\">";
        // line 549
        echo ($context["entry_image_link"] ?? null);
        echo "</label>
                                        <div class=\"col-sm-9\">
                                            <input type=\"text\" name=\"single_image_link\" value=\"";
        // line 551
        echo ($context["single_image_link"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_image_link"] ?? null);
        echo "\" id=\"input-single-image-link\" class=\"form-control\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"data-settings-container multi-type-module\">
                        <div class=\"multi-product-tabs-content\">
                            ";
        // line 561
        $context["tab_count"] = 0;
        // line 562
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 563
            echo "                                <div class=\"product-tab-";
            echo ($context["tab_count"] ?? null);
            echo " product-tab-content\" data-tab=\"";
            echo ($context["tab_count"] ?? null);
            echo "\">
                                    <div class=\"tab-title\">
                                        <span>";
            // line 565
            echo ($context["text_tab"] ?? null);
            echo " - ";
            echo ($context["tab_count"] ?? null);
            echo "</span>
                                        <a class=\"right\" href=\"javascript:void(0);\" onclick=\"removeTab(\$(this))\"><i class=\"fa fa-times-circle\"></i></a>
                                        <a class=\"right\" href=\"javascript:void(0);\" onclick=\"showTab(\$(this))\"><i class=\"fa fa-chevron-down\"></i></a>
                                    </div>
                                    <div class=\"tab-settings-content\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-body\">
                                                <div class=\"form-horizontal\">
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\" for=\"input-title-";
            // line 574
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_tab_title"] ?? null);
            echo "</label>
                                                        <div class=\"col-sm-9\">
                                                            ";
            // line 576
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 577
                echo "                                                                <div class=\"input-group\">
                                                                    <span class=\"input-group-addon\"><img src=\"language/";
                // line 578
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 578);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 578);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 578);
                echo "\" /></span>
                                                                    <input type=\"text\" name=\"tabs[";
                // line 579
                echo ($context["tab_count"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 579);
                echo "]\" value=\"";
                echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 579)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 579)] ?? null) : null)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 579)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 579)] ?? null) : null)) : (""));
                echo "\" placeholder=\"\" id=\"input-title";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 579);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\" class=\"form-control\" />
                                                                </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 582
            echo "                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\" for=\"input-multi-title-image-";
            // line 586
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_tab_title_image"] ?? null);
            echo "</label>
                                                        <div class=\"col-sm-9\">
                                                            <a href=\"javascript:void(0);\" id=\"input-multi-module-title-image-";
            // line 588
            echo ($context["tab_count"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image_thumb", [], "any", false, false, false, 588);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                                                            <input type=\"hidden\" name=\"tabs[";
            // line 589
            echo ($context["tab_count"] ?? null);
            echo "][title_image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 589);
            echo "\" id=\"input-multi-title-image-";
            echo ($context["tab_count"] ?? null);
            echo "\" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\"><i class=\"fa fa-shopping-bag\"></i> ";
            // line 595
            echo ($context["text_product_settings"] ?? null);
            echo "</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <div class=\"form-horizontal\">
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\" for=\"input-multi-collection\">";
            // line 600
            echo ($context["entry_collection"] ?? null);
            echo "</label>
                                                        <div class=\"col-sm-9\">
                                                            <div class=\"switch switch-multi3\">
                                                                <input type=\"radio\" name=\"tabs[";
            // line 603
            echo ($context["tab_count"] ?? null);
            echo "][product_collection]\" onchange=\"toggleInputOfMultiTab(";
            echo ($context["tab_count"] ?? null);
            echo ")\" class=\"switch-input\" id=\"multi-type-specified-";
            echo ($context["tab_count"] ?? null);
            echo "\" value=\"specified\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_collection", [], "any", false, false, false, 603) == "specified")) {
                echo " checked=\"checked\"";
            }
            echo "/>
                                                                <label for=\"multi-type-specified-";
            // line 604
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"switch-label switch-label-1\">";
            echo ($context["text_specified_product"] ?? null);
            echo "</label>

                                                                <input type=\"radio\" name=\"tabs[";
            // line 606
            echo ($context["tab_count"] ?? null);
            echo "][product_collection]\" onchange=\"toggleInputOfMultiTab(";
            echo ($context["tab_count"] ?? null);
            echo ")\" class=\"switch-input\" id=\"multi-type-category-";
            echo ($context["tab_count"] ?? null);
            echo "\" value=\"category\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_collection", [], "any", false, false, false, 606) == "category")) {
                echo " checked=\"checked\"";
            }
            echo "/>
                                                                <label for=\"multi-type-category-";
            // line 607
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"switch-label switch-label-2\">";
            echo ($context["text_category_product"] ?? null);
            echo "</label>

                                                                <input type=\"radio\" name=\"tabs[";
            // line 609
            echo ($context["tab_count"] ?? null);
            echo "][product_collection]\" onchange=\"toggleInputOfMultiTab(";
            echo ($context["tab_count"] ?? null);
            echo ")\" class=\"switch-input\" id=\"multi-type-special-";
            echo ($context["tab_count"] ?? null);
            echo "\" value=\"special\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_collection", [], "any", false, false, false, 609) == "special")) {
                echo " checked=\"checked\"";
            }
            echo "/>
                                                                <label for=\"multi-type-special-";
            // line 610
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"switch-label switch-label-3\">";
            echo ($context["text_special_product"] ?? null);
            echo "</label>

                                                                <span class=\"switch-selection\"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id=\"module-multi-type-specified-";
            // line 617
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"module-multi-type-content-";
            echo ($context["tab_count"] ?? null);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-multi-specified-products-";
            // line 619
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_products"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <input type=\"text\" onfocus=\"autoGetProducts(\$(this), ";
            // line 621
            echo ($context["tab_count"] ?? null);
            echo ", 'specified_products')\" class=\"form-control multi-specified-products-";
            echo ($context["tab_count"] ?? null);
            echo " input-multi-specified-products\" value=\"\" placeholder=\"";
            echo ($context["entry_products"] ?? null);
            echo "\" id=\"input-multi-specified-products-";
            echo ($context["tab_count"] ?? null);
            echo "\" />
                                                                <div id=\"multi-specified-product-";
            // line 622
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"well well-sm multi-chosen-values\" style=\"height: 100px; overflow: auto;\">
                                                                    ";
            // line 623
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "specified_products_list", [], "any", false, false, false, 623));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 624
                echo "                                                                        <div id=\"multi-specified-product-";
                echo ($context["tab_count"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 624);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 624);
                echo "
                                                                            <input type=\"hidden\" name=\"tabs[";
                // line 625
                echo ($context["tab_count"] ?? null);
                echo "][specified_products][]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 625);
                echo "\" />
                                                                        </div>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 628
            echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id=\"module-multi-type-category-";
            // line 633
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"module-multi-type-content-";
            echo ($context["tab_count"] ?? null);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-multi-category-";
            // line 635
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_category"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <select onchange=\"changeSelectValue(\$(this), ";
            // line 637
            echo ($context["tab_count"] ?? null);
            echo ", 'category')\" id=\"input-multi-category-";
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"form-control selectpicker input-multi-category\" data-live-search=\"true\" title=\"";
            echo ($context["entry_category"] ?? null);
            echo "\">
                                                                    ";
            // line 638
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 639
                echo "                                                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 639);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category", [], "any", false, false, false, 639) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 639))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 639);
                echo "</option>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 641
            echo "                                                                </select>
                                                                <input type=\"hidden\" name=\"tabs[";
            // line 642
            echo ($context["tab_count"] ?? null);
            echo "][category]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "category", [], "any", false, false, false, 642);
            echo "\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-multi-category-product-";
            // line 647
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_products"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <div class=\"switch switch-multi3\">
                                                                    <input type=\"radio\" name=\"tabs[";
            // line 650
            echo ($context["tab_count"] ?? null);
            echo "][category_product_type]\" onchange=\"toggleInputOfMultiTab(";
            echo ($context["tab_count"] ?? null);
            echo ")\" class=\"switch-input switch-category-product-type\" id=\"multi-category-product-all-";
            echo ($context["tab_count"] ?? null);
            echo "\" value=\"all\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_type", [], "any", false, false, false, 650) == "all")) {
                echo " checked=\"checked\"";
            }
            echo "/>
                                                                    <label for=\"multi-category-product-all-";
            // line 651
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"switch-label switch-label-1\">";
            echo ($context["text_all_products"] ?? null);
            echo "</label>

                                                                    <input type=\"radio\" name=\"tabs[";
            // line 653
            echo ($context["tab_count"] ?? null);
            echo "][category_product_type]\" onchange=\"toggleInputOfMultiTab(";
            echo ($context["tab_count"] ?? null);
            echo ")\" class=\"switch-input switch-category-product-type\" id=\"multi-category-product-specified-";
            echo ($context["tab_count"] ?? null);
            echo "\" value=\"specified\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_type", [], "any", false, false, false, 653) == "specified")) {
                echo " checked=\"checked\"";
            }
            echo "/>
                                                                    <label for=\"multi-category-product-specified-";
            // line 654
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"switch-label switch-label-2\">";
            echo ($context["text_specified_product"] ?? null);
            echo "</label>

                                                                    <input type=\"radio\" name=\"tabs[";
            // line 656
            echo ($context["tab_count"] ?? null);
            echo "][category_product_type]\" onchange=\"toggleInputOfMultiTab(";
            echo ($context["tab_count"] ?? null);
            echo ")\" class=\"switch-input switch-category-product-type\" id=\"multi-category-product-special-";
            echo ($context["tab_count"] ?? null);
            echo "\" value=\"special\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_type", [], "any", false, false, false, 656) == "special")) {
                echo " checked=\"checked\"";
            }
            echo "/>
                                                                    <label for=\"multi-category-product-special-";
            // line 657
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"switch-label switch-label-3\">";
            echo ($context["text_special_product"] ?? null);
            echo "</label>

                                                                    <span class=\"switch-selection\"></span>
                                                                </div>

                                                                <div class=\"multi-category-product-specified-";
            // line 662
            echo ($context["tab_count"] ?? null);
            echo " multi-category-type-chosen-";
            echo ($context["tab_count"] ?? null);
            echo "\">
                                                                    <input type=\"text\" onfocus=\"autoGetProducts(\$(this), ";
            // line 663
            echo ($context["tab_count"] ?? null);
            echo ", 'category_products')\" class=\"form-control multi-category-product-";
            echo ($context["tab_count"] ?? null);
            echo " input-multi-category-products\" value=\"\" placeholder=\"";
            echo ($context["entry_products"] ?? null);
            echo "\" id=\"input-multi-category-products-";
            echo ($context["tab_count"] ?? null);
            echo "\" />
                                                                    <div id=\"multi-category-product-";
            // line 664
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"well well-sm multi-chosen-values\" style=\"height: 100px; overflow: auto;\">
                                                                        ";
            // line 665
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "category_products_list", [], "any", false, false, false, 665));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 666
                echo "                                                                            <div id=\"multi-category-product-";
                echo ($context["tab_count"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 666);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 666);
                echo "
                                                                                <input type=\"hidden\" name=\"tabs[";
                // line 667
                echo ($context["tab_count"] ?? null);
                echo "][category_products][]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 667);
                echo "\" />
                                                                            </div>
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 670
            echo "                                                                    </div>
                                                                </div>

                                                                <div class=\"multi-category-product-special-";
            // line 673
            echo ($context["tab_count"] ?? null);
            echo " multi-category-type-chosen-";
            echo ($context["tab_count"] ?? null);
            echo "\">
                                                                    <select onchange=\"changeSelectValue(\$(this), ";
            // line 674
            echo ($context["tab_count"] ?? null);
            echo ", 'category_product_special_type')\" id=\"input-multi-category-product-special-type-";
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"form-control selectpicker input-multi-category-product-special-type\" title=\"";
            echo ($context["entry_products_type"] ?? null);
            echo "\">
                                                                        <option value=\"mostviewed\" ";
            // line 675
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_special_type", [], "any", false, false, false, 675) == "mostviewed")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_most_viewed"] ?? null);
            echo "</option>
                                                                        <option value=\"bestseller\" ";
            // line 676
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_special_type", [], "any", false, false, false, 676) == "bestseller")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_bestseller"] ?? null);
            echo "</option>
                                                                        <option value=\"special\"    ";
            // line 677
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_special_type", [], "any", false, false, false, 677) == "special")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_special"] ?? null);
            echo "</option>
                                                                        <option value=\"latest\"     ";
            // line 678
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_special_type", [], "any", false, false, false, 678) == "latest")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_latest"] ?? null);
            echo "</option>
                                                                        <option value=\"random\"     ";
            // line 679
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_special_type", [], "any", false, false, false, 679) == "random")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_random"] ?? null);
            echo "</option>
                                                                    </select>
                                                                    <input type=\"hidden\" name=\"tabs[";
            // line 681
            echo ($context["tab_count"] ?? null);
            echo "][category_product_special_type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "category_product_special_type", [], "any", false, false, false, 681);
            echo "\" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id=\"module-multi-type-special-";
            // line 687
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"module-multi-type-content-";
            echo ($context["tab_count"] ?? null);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-multi-product-special-type-";
            // line 689
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_products_type"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <select onchange=\"changeSelectValue(\$(this), ";
            // line 691
            echo ($context["tab_count"] ?? null);
            echo ", 'product_special_type')\" id=\"input-multi-product-special-type-";
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"form-control selectpicker input-multi-product-special-type\" title=\"";
            echo ($context["entry_products_type"] ?? null);
            echo "\">
                                                                    <option value=\"mostviewed\" ";
            // line 692
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_special_type", [], "any", false, false, false, 692) == "mostviewed")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_most_viewed"] ?? null);
            echo "</option>
                                                                    <option value=\"bestseller\" ";
            // line 693
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_special_type", [], "any", false, false, false, 693) == "bestseller")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_bestseller"] ?? null);
            echo "</option>
                                                                    <option value=\"special\"    ";
            // line 694
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_special_type", [], "any", false, false, false, 694) == "special")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_special"] ?? null);
            echo "</option>
                                                                    <option value=\"latest\"     ";
            // line 695
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_special_type", [], "any", false, false, false, 695) == "latest")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_latest"] ?? null);
            echo "</option>
                                                                    <option value=\"random\"     ";
            // line 696
            if ((twig_get_attribute($this->env, $this->source, $context["tab"], "product_special_type", [], "any", false, false, false, 696) == "random")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_random"] ?? null);
            echo "</option>
                                                                </select>
                                                                <input type=\"hidden\" name=\"tabs[";
            // line 698
            echo ($context["tab_count"] ?? null);
            echo "][product_special_type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "product_special_type", [], "any", false, false, false, 698);
            echo "\" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <h3 class=\"panel-title\"><i class=\"fa fa-image\"></i> ";
            // line 707
            echo ($context["text_image_settings"] ?? null);
            echo "</h3>
                                            </div>
                                            <div class=\"panel-body\">
                                                <div class=\"form-horizontal\">
                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\" for=\"input-multi-image-width-";
            // line 712
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_width"] ?? null);
            echo "</label>
                                                        <div class=\"col-sm-4\">
                                                            <input type=\"text\" name=\"tabs[";
            // line 714
            echo ($context["tab_count"] ?? null);
            echo "][image_width]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "image_width", [], "any", false, false, false, 714);
            echo "\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" id=\"input-multi-image-width-";
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"form-control\" />
                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\" for=\"input-multi-image-height-";
            // line 719
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_height"] ?? null);
            echo "</label>
                                                        <div class=\"col-sm-4\">
                                                            <input type=\"text\" name=\"tabs[";
            // line 721
            echo ($context["tab_count"] ?? null);
            echo "][image_height]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "image_height", [], "any", false, false, false, 721);
            echo "\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" id=\"input-multi-image-height-";
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"form-control\" />
                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\" for=\"input-multi-image-";
            // line 726
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_image"] ?? null);
            echo "</label>
                                                        <div class=\"col-sm-9\">
                                                            <a href=\"javascript:void(0);\" id=\"input-multi-module-image-";
            // line 728
            echo ($context["tab_count"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "image_thumb", [], "any", false, false, false, 728);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" /></a>
                                                            <input type=\"hidden\" name=\"tabs[";
            // line 729
            echo ($context["tab_count"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 729);
            echo "\" id=\"input-multi-image-";
            echo ($context["tab_count"] ?? null);
            echo "\" />
                                                        </div>
                                                    </div>

                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-3 control-label\" for=\"input-multi-image-link-";
            // line 734
            echo ($context["tab_count"] ?? null);
            echo "\">";
            echo ($context["entry_image_link"] ?? null);
            echo "</label>
                                                        <div class=\"col-sm-9\">
                                                            <input type=\"text\" name=\"tabs[";
            // line 736
            echo ($context["tab_count"] ?? null);
            echo "][image_link]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "image_link", [], "any", false, false, false, 736);
            echo "\" placeholder=\"";
            echo ($context["entry_image_link"] ?? null);
            echo "\" id=\"input-multi-image-link-";
            echo ($context["tab_count"] ?? null);
            echo "\" class=\"form-control\" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
            // line 744
            $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
            // line 745
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 746
        echo "
                        </div>
                        <button type=\"button\" onclick=\"addTab()\" class=\"btn-full btn-add-tab\"><i class=\"fa fa-plus-square\"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script>
    \$('#module-des-language a:first').tab('show');
    \$('.data-settings-container').hide();
    \$('.form-module-des').hide();

    // Single Specified Products
    \$('input[name=\\'single_specified_product\\']').autocomplete({
        source: function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 773
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item['name'],
                            value: item['product_id']
                        }
                    }));
                }
            });
        },
        select: function(item) {
            \$('input[name=\\'single_specified_product\\']').val('');

            \$('#single-specified-product' + item['value']).remove();

            \$('#single-specified-product').append('<div id=\"single-specified-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"single_specified_products[]\" value=\"' + item['value'] + '\" /></div>');
        }
    });

    \$('#single-specified-product').delegate('.fa-minus-circle', 'click', function() {
        \$(this).parent().remove();
    });

    // Single Category Products
    \$('#input-single-category').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        \$('input[name=\\'single_category\\']').val(\$(this).val());
    });

    \$('input[name=\\'single_category_product\\']').autocomplete({
        source: function(request, response) {
            \$.ajax({
                url: 'index.php?route=extension/module/ptproducts/autoGetProductsByCategory&user_token=";
        // line 806
        echo ($context["user_token"] ?? null);
        echo "&category_id='+ \$('input[name=\\'single_category\\']').val() +'&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item['name'],
                            value: item['product_id']
                        }
                    }));
                }
            });
        },
        select: function(item) {
            \$('input[name=\\'single_category_product\\']').val('');

            \$('#single-category-product' + item['value']).remove();

            \$('#single-category-product').append('<div id=\"single-category-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"single_category_products[]\" value=\"' + item['value'] + '\" /></div>');
        }
    });

    \$('#single-category-product').delegate('.fa-minus-circle', 'click', function() {
        \$(this).parent().remove();
    });

    // Single Category Product Special Type
    \$('#input-single-category-product-special-type').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        \$('input[name=\\'single_category_product_special_type\\']').val(\$(this).val());
    });

    // Single Product Special Type
    \$('#input-single-product-special-type').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        \$('input[name=\\'single_product_special_type\\']').val(\$(this).val());
    });

    \$(document).ready(function() {
        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });

        var show_module_des = parseInt(\$('#input-show-module-des').val());
        var show_module_des_select = \$('#input-show-module-des').closest('.toggle');
        if(show_module_des == 1) \$('.form-module-des').show();
        show_module_des_select.on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$('.form-module-des').show();
            } else {
                \$('.form-module-des').hide();
            }
        });

        var module_type = \$('#input-type').val();
        if(module_type == \"single_tab\") \$('.single-type-module').show();
        if(module_type == \"multi_tabs\") \$('.multi-type-module').show();

        // Single
        \$('.module-single-type-content').hide();
        var single_product_collection = \$('input[name=\\'single_product_collection\\']:checked').val();
        \$('#module-single-type-' + single_product_collection).show();

        \$('.single-category-type-chosen').hide();
        var single_category_product_chosen = \$('input[name=\\'single_category_product_type\\']:checked').val();
        \$('.single-category-product-' + single_category_product_chosen).show();

        // Multi
        \$('.product-tab-content').each(function() {
            var tab_count = \$(this).data('tab');
            toggleInputOfMultiTab(tab_count);
        });

        var layout_type_chosen = \$('input[name=\\'layout_type\\']:checked').attr('id');
        \$('#' + layout_type_chosen).closest('radio-layout-type').find('lb-layout-type').addClass('active');
    });

    // Single
    \$('input[name=\\'single_product_collection\\']').on('change', function () {
        var single_product_collection = \$(this).val();
        \$('.module-single-type-content').hide();
        \$('#module-single-type-' + single_product_collection).show();
    });

    \$('input[name=\\'single_category_product_type\\']').on('change', function () {
        var single_category_product_chosen = \$(this).val();
        \$('.single-category-type-chosen').hide();
        \$('.single-category-product-' + single_category_product_chosen).show();
    });


    \$('input[name=\\'layout_type\\']').on('change', function () {
        var layout_type_chosen = \$(this).attr('id');
        \$('.lb-layout-type').removeClass('active');
        \$('#' + layout_type_chosen).closest('.radio-layout-type').find('.lb-layout-type').addClass('active');
    });

    \$('#input-type').on('change', function () {
        var module_type = \$(this).val();
        \$('.data-settings-container').hide();
        if(module_type == \"single_tab\") \$('.single-type-module').show();
        if(module_type == \"multi_tabs\") \$('.multi-type-module').show();
    });

    function toggleInputOfMultiTab(tab_count) {
        \$('.module-multi-type-content-' + tab_count).hide();
        var multi_product_collection = \$('input[name=\\'tabs['+ tab_count +'][product_collection]\\']:checked').val();
        \$('#module-multi-type-' + multi_product_collection + '-' + tab_count).show();

        \$('.multi-category-type-chosen-' + tab_count).hide();
        var multi_category_product_type = \$('input[name=\\'tabs['+ tab_count +'][category_product_type]\\']:checked').val();
        \$('.multi-category-product-' + multi_category_product_type + '-' + tab_count).show();
    }

    function autoGetProducts(element, tab_count, post_name) {
        if(post_name == \"category_products\") {
            var data_list_id = element.closest('div').find('.multi-chosen-values').attr('id');
            element.autocomplete({
                source: function(request, response) {
                    \$.ajax({
                        url: 'index.php?route=extension/module/ptproducts/autoGetProductsByCategory&user_token=";
        // line 929
        echo ($context["user_token"] ?? null);
        echo "&category_id='+ \$('input[name=\\'tabs['+ tab_count +'][category]\\']').val() +'&filter_name=' +  encodeURIComponent(request),
                        dataType: 'json',
                        success: function(json) {
                            response(\$.map(json, function(item) {
                                return {
                                    label: item['name'],
                                    value: item['product_id']
                                }
                            }));
                        }
                    });
                },
                select: function(item) {
                    element.val('');

                    \$('#' + data_list_id + '-' + item['value']).remove();

                    \$('#' + data_list_id).append('<div id=\"#' + data_list_id + '-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"tabs[' + tab_count + ']['+ post_name +'][]\" value=\"' + item['value'] + '\" /></div>');
                }
            });

            \$('#' + data_list_id).delegate('.fa-minus-circle', 'click', function() {
                \$(this).parent().remove();
            });
        } else {
            var data_list_id = element.closest('div').find('.multi-chosen-values').attr('id');
            element.autocomplete({
                source: function(request, response) {
                    \$.ajax({
                        url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 958
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                        dataType: 'json',
                        success: function(json) {
                            response(\$.map(json, function(item) {
                                return {
                                    label: item['name'],
                                    value: item['product_id']
                                }
                            }));
                        }
                    });
                },
                select: function(item) {
                    element.val('');

                    \$('#' + data_list_id + '-' + item['value']).remove();

                    \$('#' + data_list_id).append('<div id=\"#' + data_list_id + '-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"tabs[' + tab_count + ']['+ post_name +'][]\" value=\"' + item['value'] + '\" /></div>');
                }
            });

            \$('#' + data_list_id).delegate('.fa-minus-circle', 'click', function() {
                \$(this).parent().remove();
            });
        }
    }

    function showTab(element) {
        var tab_content = \$(element).closest('.product-tab-content').find('.tab-settings-content');
        if(tab_content.hasClass('open')) {
            \$('.tab-settings-content').slideUp(600).removeClass('open');
        } else {
            \$('.tab-settings-content').slideUp(600).removeClass('open');
            tab_content.slideDown(600).addClass('open');
        }
        \$(\"html, body\").animate({ scrollTop: 0 }, \"slow\");
    }

    function removeTab(element) {
        \$(element).closest('.product-tab-content').remove();
    }

    function changeSelectValue(element, tab_count, post_name) {
        element.on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
            \$('input[name=\\'tabs['+ tab_count +']['+ post_name +']\\']').val(\$(this).val());
        });
    }
</script>
<script>
    function addTab() {
        var count = 0;
        if(\$('.product-tab-content').length) {
            count = parseInt(\$('.product-tab-content:last').data('tab')) + 1;
        }
        var html =  '<div class=\"product-tab-' + count + ' product-tab-content\" data-tab=\"' + count + '\">';
        html += '   <div class=\"tab-title\">';
        html += '       <span>";
        // line 1014
        echo ($context["text_tab"] ?? null);
        echo " - ' + count + '</span>';
        html += '       <a class=\"right\" href=\"javascript:void(0);\" onclick=\"removeTab(\$(this))\"><i class=\"fa fa-times-circle\"></i></a>';
        html += '       <a class=\"right\" href=\"javascript:void(0);\" onclick=\"showTab(\$(this))\"><i class=\"fa fa-chevron-down\"></i></a>';
        html += '   </div>';
        html += '   <div class=\"tab-settings-content\">';
        html += '       <div class=\"panel panel-default\">';
        html += '           <div class=\"panel-body\">';
        html += '               <div class=\"form-horizontal\">';
        html += '                   <div class=\"form-group\">';
        html += '                       <label class=\"col-sm-3 control-label\" for=\"input-title-";
        // line 1023
        echo ($context["tab_count"] ?? null);
        echo "\">";
        echo ($context["entry_tab_title"] ?? null);
        echo "</label>';
        html += '                       <div class=\"col-sm-9\">';
        ";
        // line 1025
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1026
            echo "        html += '                           <div class=\"input-group\">';
        html += '                               <span class=\"input-group-addon\"><img src=\"language/";
            // line 1027
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1027);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1027);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1027);
            echo "\" /></span>';
        html += '                               <input type=\"text\" name=\"tabs[' + count + '][title][";
            // line 1028
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1028);
            echo "]\" value=\"\" placeholder=\"\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1028);
            echo "-' + count + '\" class=\"form-control\" />';
        html += '                           </div>';
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1031
        echo "        html += '                       </div>';
        html += '                   </div>';
        html += '                   <div class=\"form-group\">';
        html += '                       <label class=\"col-sm-3 control-label\" for=\"input-multi-title-image-' + count + '\">";
        // line 1034
        echo ($context["entry_tab_title_image"] ?? null);
        echo "</label>';
        html += '                       <div class=\"col-sm-9\">';
        html += '                           <a href=\"javascript:void(0);\" id=\"input-multi-module-title-image-' + count + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1036
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>';
        html += '                           <input type=\"hidden\" name=\"tabs[' + count + '][title_image]\" value=\"\" id=\"input-multi-title-image-' + count + '\" />';
        html += '                       </div>';
        html += '                   </div>';
        html += '               </div>';
        html += '           </div>';
        html += '           <div class=\"panel-heading\">';
        html += '               <h3 class=\"panel-title\"><i class=\"fa fa-shopping-bag\"></i> ";
        // line 1043
        echo ($context["text_product_settings"] ?? null);
        echo "</h3>';
        html += '           </div>';
        html += '           <div class=\"panel-body\">';
        html += '               <div class=\"form-horizontal\">';
        html += '                   <div class=\"form-group\">';
        html += '                       <label class=\"col-sm-3 control-label\" for=\"input-multi-collection\">";
        // line 1048
        echo ($context["entry_collection"] ?? null);
        echo "</label>';
        html += '                       <div class=\"col-sm-9\">';
        html += '                           <div class=\"switch switch-multi3\">';
        html += '                               <input type=\"radio\" name=\"tabs[' + count + '][product_collection]\" onchange=\"toggleInputOfMultiTab(' + count + ')\" class=\"switch-input\" id=\"multi-type-specified-' + count + '\" value=\"specified\" checked=\"checked\" />';
        html += '                               <label for=\"multi-type-specified-' + count + '\" class=\"switch-label switch-label-1\">";
        // line 1052
        echo ($context["text_specified_product"] ?? null);
        echo "</label>';
        html += '                               <input type=\"radio\" name=\"tabs[' + count + '][product_collection]\" onchange=\"toggleInputOfMultiTab(' + count + ')\" class=\"switch-input\" id=\"multi-type-category-' + count + '\" value=\"category\" />';
        html += '                               <label for=\"multi-type-category-' + count + '\" class=\"switch-label switch-label-2\">";
        // line 1054
        echo ($context["text_category_product"] ?? null);
        echo "</label>';
        html += '                               <input type=\"radio\" name=\"tabs[' + count + '][product_collection]\" onchange=\"toggleInputOfMultiTab(' + count + ')\" class=\"switch-input\" id=\"multi-type-special-' + count + '\" value=\"special\" />';
        html += '                               <label for=\"multi-type-special-' + count + '\" class=\"switch-label switch-label-3\">";
        // line 1056
        echo ($context["text_special_product"] ?? null);
        echo "</label>';
        html += '                               <span class=\"switch-selection\"></span>';
        html += '                           </div>';
        html += '                       </div>';
        html += '                   </div>';
        html += '                   <div id=\"module-multi-type-specified-' + count + '\" class=\"module-multi-type-content-' + count + '\">';
        html += '                       <div class=\"form-group\">';
        html += '                           <label class=\"col-sm-3 control-label\" for=\"input-multi-specified-products-' + count + '\">";
        // line 1063
        echo ($context["entry_products"] ?? null);
        echo "</label>';
        html += '                           <div class=\"col-sm-9\">';
        html += '                               <input type=\"text\" onfocus=\"autoGetProducts(\$(this), '+ count +', \\'specified_products\\')\" class=\"form-control multi-specified-products-' + count + '\" value=\"\" placeholder=\"";
        // line 1065
        echo ($context["entry_products"] ?? null);
        echo "\" id=\"input-multi-specified-products-' + count + '\" />';
        html += '                               <div id=\"multi-specified-product-' + count + '\" class=\"well well-sm multi-chosen-values\" style=\"height: 100px; overflow: auto;\"></div>';
        html += '                           </div>';
        html += '                       </div>';
        html += '                   </div>';
        html += '                   <div id=\"module-multi-type-category-' + count + '\" class=\"module-multi-type-content-' + count + '\">';
        html += '                       <div class=\"form-group\">';
        html += '                           <label class=\"col-sm-3 control-label\" for=\"input-multi-category-' + count + '\">";
        // line 1072
        echo ($context["entry_category"] ?? null);
        echo "</label>';
        html += '                           <div class=\"col-sm-9\">';
        html += '                               <select onchange=\"changeSelectValue(\$(this), '+ count +', \\'category\\')\" id=\"input-multi-category-' + count + '\" class=\"form-control selectpicker input-multi-category\" data-live-search=\"true\" title=\"";
        // line 1074
        echo ($context["entry_category"] ?? null);
        echo "\">';
        ";
        // line 1075
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1076
            echo "        html += \"                                   <option value='";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 1076);
            echo "'>";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 1076);
            echo "</option>\";
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1078
        echo "        html += '                               </select>';
        html += '                               <input type=\"hidden\" name=\"tabs[' + count + '][category]\" value=\"\" />';
        html += '                           </div>';
        html += '                       </div>';
        html += '                       <div class=\"form-group\">';
        html += '                           <label class=\"col-sm-3 control-label\" for=\"input-multi-category-product-' + count + '\">";
        // line 1083
        echo ($context["entry_products"] ?? null);
        echo "</label>';
        html += '                           <div class=\"col-sm-9\">';
        html += '                               <div class=\"switch switch-multi3\">';
        html += '                                   <input type=\"radio\" name=\"tabs[' + count + '][category_product_type]\" onchange=\"toggleInputOfMultiTab(' + count + ')\" class=\"switch-input switch-category-product-type\" id=\"multi-category-product-all-' + count + '\" value=\"all\" checked=\"checked\" />';
        html += '                                   <label for=\"multi-category-product-all-' + count + '\" class=\"switch-label switch-label-1\">";
        // line 1087
        echo ($context["text_all_products"] ?? null);
        echo "</label>';
        html += '                                   <input type=\"radio\" name=\"tabs[' + count + '][category_product_type]\" onchange=\"toggleInputOfMultiTab(' + count + ')\" class=\"switch-input switch-category-product-type\" id=\"multi-category-product-specified-' + count + '\" value=\"specified\" />';
        html += '                                   <label for=\"multi-category-product-specified-' + count + '\" class=\"switch-label switch-label-2\">";
        // line 1089
        echo ($context["text_specified_product"] ?? null);
        echo "</label>';
        html += '                                   <input type=\"radio\" name=\"tabs[' + count + '][category_product_type]\" onchange=\"toggleInputOfMultiTab(' + count + ')\" class=\"switch-input switch-category-product-type\" id=\"multi-category-product-special-' + count + '\" value=\"special\" />';
        html += '                                   <label for=\"multi-category-product-special-' + count + '\" class=\"switch-label switch-label-3\">";
        // line 1091
        echo ($context["text_special_product"] ?? null);
        echo "</label>';
        html += '                                   <span class=\"switch-selection\"></span>';
        html += '                               </div>';
        html += '                               <div class=\"multi-category-product-specified-' + count + ' multi-category-type-chosen-' + count + '\">';
        html += '                                   <input type=\"text\" onfocus=\"autoGetProducts(\$(this), '+ count +', \\'category_products\\')\" class=\"form-control input-multi-category-products multi-category-product-' + count + '\" value=\"\" placeholder=\"";
        // line 1095
        echo ($context["entry_products"] ?? null);
        echo "\" id=\"input-multi-category-products-' + count + '\" />';
        html += '                                   <div id=\"multi-category-product-' + count + '\" class=\"well well-sm multi-chosen-values\" style=\"height: 100px; overflow: auto;\"></div>';
        html += '                               </div>';
        html += '                               <div class=\"multi-category-product-special-' + count + ' multi-category-type-chosen-' + count + '\">';
        html += '                                   <select onchange=\"changeSelectValue(\$(this), '+ count +', \\'category_product_special_type\\')\" id=\"input-multi-category-product-special-type-' + count + '\" class=\"form-control selectpicker input-multi-category-product-special-type\" title=\"";
        // line 1099
        echo ($context["entry_products_type"] ?? null);
        echo "\">';
        html += '                                       <option value=\"mostviewed\">";
        // line 1100
        echo ($context["text_most_viewed"] ?? null);
        echo "</option>';
        html += '                                       <option value=\"bestseller\">";
        // line 1101
        echo ($context["text_bestseller"] ?? null);
        echo "</option>';
        html += '                                       <option value=\"special\">";
        // line 1102
        echo ($context["text_special"] ?? null);
        echo "</option>';
        html += '                                       <option value=\"latest\">";
        // line 1103
        echo ($context["text_latest"] ?? null);
        echo "</option>';
        html += '                                       <option value=\"random\">";
        // line 1104
        echo ($context["text_random"] ?? null);
        echo "</option>';
        html += '                                   </select>';
        html += '                                   <input type=\"hidden\" name=\"tabs[' + count + '][category_product_special_type]\" value=\"\" />';
        html += '                               </div>';
        html += '                           </div>';
        html += '                       </div>';
        html += '                   </div>';

        html += '                   <div id=\"module-multi-type-special-' + count + '\" class=\"module-multi-type-content-' + count + '\">';
        html += '                       <div class=\"form-group\">';
        html += '                           <label class=\"col-sm-3 control-label\" for=\"input-multi-product-special-type-' + count + '\">";
        // line 1114
        echo ($context["entry_products_type"] ?? null);
        echo "</label>';
        html += '                           <div class=\"col-sm-9\">';
        html += '                               <select onchange=\"changeSelectValue(\$(this), '+ count +', \\'product_special_type\\')\" id=\"input-multi-product-special-type-' + count + '\" class=\"form-control selectpicker input-multi-product-special-type\" title=\"";
        // line 1116
        echo ($context["entry_products_type"] ?? null);
        echo "\">';
        html += '                                   <option value=\"mostviewed\">";
        // line 1117
        echo ($context["text_most_viewed"] ?? null);
        echo "</option>';
        html += '                                   <option value=\"bestseller\">";
        // line 1118
        echo ($context["text_bestseller"] ?? null);
        echo "</option>';
        html += '                                   <option value=\"special\">";
        // line 1119
        echo ($context["text_special"] ?? null);
        echo "</option>';
        html += '                                   <option value=\"latest\">";
        // line 1120
        echo ($context["text_latest"] ?? null);
        echo "</option>';
        html += '                                   <option value=\"random\">";
        // line 1121
        echo ($context["text_random"] ?? null);
        echo "</option>';
        html += '                               </select>';
        html += '                               <input type=\"hidden\" name=\"tabs[' + count + '][product_special_type]\" value=\"\" />';
        html += '                           </div>';
        html += '                       </div>';
        html += '                   </div>';
        html += '               </div>';
        html += '           </div>';
        html += '       </div>';
        html += '       <div class=\"panel panel-default\">';
        html += '           <div class=\"panel-heading\">';
        html += '               <h3 class=\"panel-title\"><i class=\"fa fa-image\"></i> ";
        // line 1132
        echo ($context["text_image_settings"] ?? null);
        echo "</h3>';
        html += '           </div>';
        html += '           <div class=\"panel-body\">';
        html += '               <div class=\"form-horizontal\">';
        html += '                   <div class=\"form-group\">';
        html += '                       <label class=\"col-sm-3 control-label\" for=\"input-multi-image-width-' + count + '\">";
        // line 1137
        echo ($context["entry_width"] ?? null);
        echo "</label>';
        html += '                       <div class=\"col-sm-4\">';
        html += '                           <input type=\"text\" name=\"tabs[' + count + '][image_width]\" value=\"100\" placeholder=\"";
        // line 1139
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-multi-image-width-' + count + '\" class=\"form-control\" />';
        html += '                       </div>';
        html += '                   </div>';
        html += '                   <div class=\"form-group\">';
        html += '                       <label class=\"col-sm-3 control-label\" for=\"input-multi-image-height-' + count + '\">";
        // line 1143
        echo ($context["entry_height"] ?? null);
        echo "</label>';
        html += '                       <div class=\"col-sm-4\">';
        html += '                           <input type=\"text\" name=\"tabs[' + count + '][image_height]\" value=\"100\" placeholder=\"";
        // line 1145
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-multi-image-height-' + count + '\" class=\"form-control\" />';
        html += '                       </div>';
        html += '                   </div>';
        html += '                   <div class=\"form-group\">';
        html += '                       <label class=\"col-sm-3 control-label\" for=\"input-multi-image-' + count + '\">";
        // line 1149
        echo ($context["entry_image"] ?? null);
        echo "</label>';
        html += '                       <div class=\"col-sm-9\">';
        html += '                           <a href=\"javascript:void(0);\" id=\"input-multi-module-image-' + count + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1151
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>';
        html += '                           <input type=\"hidden\" name=\"tabs[' + count + '][image]\" value=\"\" id=\"input-multi-image-' + count + '\" />';
        html += '                       </div>';
        html += '                   </div>';
        html += '                   <div class=\"form-group\">';
        html += '                       <label class=\"col-sm-3 control-label\" for=\"input-multi-image-link-' + count + '\">";
        // line 1156
        echo ($context["entry_image_link"] ?? null);
        echo "</label>';
        html += '                       <div class=\"col-sm-9\">';
        html += '                           <input type=\"text\" name=\"tabs[' + count + '][image_link]\" value=\"\" placeholder=\"";
        // line 1158
        echo ($context["entry_image_link"] ?? null);
        echo "\" id=\"input-multi-image-link-' + count + '\" class=\"form-control\" />';
        html += '                       </div>';
        html += '                   </div>';
        html += '               </div>';
        html += '           </div>';
        html += '       </div>';
        html += '   </div>';
        html += '</div>';

        \$('.multi-product-tabs-content').append(html);
        \$('.selectpicker').selectpicker();
        toggleInputOfMultiTab(count);
    }
</script>
";
        // line 1172
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/module/ptproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2714 => 1172,  2697 => 1158,  2692 => 1156,  2682 => 1151,  2677 => 1149,  2670 => 1145,  2665 => 1143,  2658 => 1139,  2653 => 1137,  2645 => 1132,  2631 => 1121,  2627 => 1120,  2623 => 1119,  2619 => 1118,  2615 => 1117,  2611 => 1116,  2606 => 1114,  2593 => 1104,  2589 => 1103,  2585 => 1102,  2581 => 1101,  2577 => 1100,  2573 => 1099,  2566 => 1095,  2559 => 1091,  2554 => 1089,  2549 => 1087,  2542 => 1083,  2535 => 1078,  2524 => 1076,  2520 => 1075,  2516 => 1074,  2511 => 1072,  2501 => 1065,  2496 => 1063,  2486 => 1056,  2481 => 1054,  2476 => 1052,  2469 => 1048,  2461 => 1043,  2449 => 1036,  2444 => 1034,  2439 => 1031,  2428 => 1028,  2420 => 1027,  2417 => 1026,  2413 => 1025,  2406 => 1023,  2394 => 1014,  2335 => 958,  2303 => 929,  2177 => 806,  2141 => 773,  2112 => 746,  2106 => 745,  2104 => 744,  2087 => 736,  2080 => 734,  2068 => 729,  2060 => 728,  2053 => 726,  2039 => 721,  2032 => 719,  2018 => 714,  2011 => 712,  2003 => 707,  1989 => 698,  1980 => 696,  1972 => 695,  1964 => 694,  1956 => 693,  1948 => 692,  1940 => 691,  1933 => 689,  1926 => 687,  1915 => 681,  1906 => 679,  1898 => 678,  1890 => 677,  1882 => 676,  1874 => 675,  1866 => 674,  1860 => 673,  1855 => 670,  1844 => 667,  1835 => 666,  1831 => 665,  1827 => 664,  1817 => 663,  1811 => 662,  1801 => 657,  1789 => 656,  1782 => 654,  1770 => 653,  1763 => 651,  1751 => 650,  1743 => 647,  1733 => 642,  1730 => 641,  1715 => 639,  1711 => 638,  1703 => 637,  1696 => 635,  1689 => 633,  1682 => 628,  1671 => 625,  1662 => 624,  1658 => 623,  1654 => 622,  1644 => 621,  1637 => 619,  1630 => 617,  1618 => 610,  1606 => 609,  1599 => 607,  1587 => 606,  1580 => 604,  1568 => 603,  1562 => 600,  1554 => 595,  1541 => 589,  1533 => 588,  1526 => 586,  1520 => 582,  1503 => 579,  1495 => 578,  1492 => 577,  1488 => 576,  1481 => 574,  1467 => 565,  1459 => 563,  1454 => 562,  1452 => 561,  1437 => 551,  1432 => 549,  1424 => 544,  1418 => 543,  1413 => 541,  1403 => 536,  1398 => 534,  1388 => 529,  1383 => 527,  1375 => 522,  1362 => 512,  1353 => 510,  1345 => 509,  1337 => 508,  1329 => 507,  1321 => 506,  1317 => 505,  1312 => 503,  1301 => 495,  1292 => 493,  1284 => 492,  1276 => 491,  1268 => 490,  1260 => 489,  1256 => 488,  1250 => 484,  1241 => 481,  1234 => 480,  1230 => 479,  1225 => 477,  1216 => 471,  1210 => 470,  1205 => 468,  1199 => 467,  1194 => 465,  1188 => 464,  1182 => 461,  1174 => 456,  1171 => 455,  1156 => 453,  1152 => 452,  1148 => 451,  1143 => 449,  1134 => 442,  1125 => 439,  1118 => 438,  1114 => 437,  1109 => 435,  1104 => 433,  1092 => 424,  1086 => 423,  1081 => 421,  1075 => 420,  1070 => 418,  1064 => 417,  1058 => 414,  1050 => 409,  1032 => 398,  1026 => 397,  1019 => 393,  1009 => 390,  1003 => 389,  996 => 385,  984 => 380,  978 => 379,  971 => 375,  961 => 372,  955 => 371,  948 => 367,  936 => 362,  930 => 361,  923 => 357,  913 => 354,  907 => 353,  900 => 349,  888 => 344,  882 => 343,  875 => 339,  865 => 336,  859 => 335,  852 => 331,  840 => 326,  834 => 325,  827 => 321,  817 => 318,  811 => 317,  804 => 313,  796 => 308,  779 => 296,  774 => 294,  764 => 287,  758 => 286,  753 => 284,  747 => 283,  742 => 281,  736 => 280,  730 => 277,  722 => 272,  716 => 271,  710 => 270,  704 => 267,  698 => 266,  692 => 265,  686 => 262,  680 => 261,  674 => 260,  668 => 257,  660 => 252,  643 => 242,  637 => 241,  630 => 237,  618 => 232,  612 => 231,  605 => 227,  595 => 222,  590 => 220,  580 => 215,  575 => 213,  564 => 207,  560 => 206,  551 => 202,  547 => 201,  538 => 197,  534 => 196,  525 => 192,  521 => 191,  512 => 187,  508 => 186,  499 => 182,  495 => 181,  489 => 178,  478 => 172,  474 => 171,  465 => 167,  461 => 166,  452 => 162,  448 => 161,  439 => 157,  435 => 156,  426 => 152,  422 => 151,  413 => 147,  409 => 146,  403 => 143,  391 => 138,  385 => 137,  378 => 133,  372 => 129,  366 => 127,  364 => 126,  358 => 125,  353 => 123,  347 => 119,  341 => 117,  339 => 116,  333 => 115,  328 => 113,  320 => 108,  308 => 98,  291 => 95,  286 => 94,  282 => 93,  278 => 91,  261 => 89,  257 => 88,  251 => 85,  239 => 80,  233 => 79,  226 => 75,  213 => 69,  205 => 68,  199 => 65,  193 => 61,  180 => 58,  172 => 57,  169 => 56,  165 => 55,  160 => 53,  148 => 48,  142 => 47,  135 => 43,  129 => 39,  123 => 37,  121 => 36,  115 => 35,  110 => 33,  102 => 28,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/ptproducts.twig", "");
    }
}
