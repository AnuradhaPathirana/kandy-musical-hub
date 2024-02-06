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

/* plaza/module/ptlayoutbuilder.twig */
class __TwigTemplate_89f672d11c6fa5af792ecd91c7e0faf3f6fa44afe0c89651e889777c56af97d3 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-ptlayoutbuilder\" data-toggle=\"tooltip\" title=\"";
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
        echo ($context["heading_primary_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb theme-option-breadcrumb\">
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
        <div class=\"theme-option-container\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 20
        echo ($context["text_primary_edit"] ?? null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 23
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ptlayoutbuilder\" class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 25
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 27
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                ";
        // line 28
        if (($context["error_name"] ?? null)) {
            // line 29
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 31
        echo "                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 35
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"hidden\" name=\"status\" value=\"0\" />
                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"status\" id=\"input-status\"
                                       data-toggle=\"toggle\" data-on=\"";
        // line 39
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                        ";
        // line 40
        if (($context["status"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"widget-container col-sm-12\">
                                ";
        // line 46
        if (($context["widgets"] ?? null)) {
            // line 47
            echo "                                    ";
            $context["widget_row"] = 0;
            // line 48
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["widgets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["main_row"]) {
                // line 49
                echo "                                        ";
                list($context["cols_format"], $context["main_col_count"]) =                 ["", 0];
                // line 50
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["main_row"], "main_cols", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["main_col"]) {
                    // line 51
                    echo "                                            ";
                    $context["main_col_count"] = (($context["main_col_count"] ?? null) + 1);
                    // line 52
                    echo "                                            ";
                    if (($context["main_col"] == twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["main_row"], "main_cols", [], "any", false, false, false, 52)))) {
                        // line 53
                        echo "                                                ";
                        $context["cols_format"] = (($context["cols_format"] ?? null) . twig_get_attribute($this->env, $this->source, $context["main_col"], "format", [], "any", false, false, false, 53));
                        // line 54
                        echo "                                            ";
                    } else {
                        // line 55
                        echo "                                                ";
                        $context["cols_format"] = ((($context["cols_format"] ?? null) . twig_get_attribute($this->env, $this->source, $context["main_col"], "format", [], "any", false, false, false, 55)) . " + ");
                        // line 56
                        echo "                                            ";
                    }
                    // line 57
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                                        <div class=\"widget-row col-sm-12\">
                                            <div class=\"row-action\">
                                                <div class=\"action-group\">
                                                    <div class=\"col-count\">
                                                        <a href=\"javascript:void(0);\" onclick=\"builder.plusMainColumn(\$(this));\" rel=\"1\" class=\"col-plus\"></a>
                                                        <span class=\"count\">";
                // line 63
                echo ($context["main_col_count"] ?? null);
                echo "</span>
                                                        <a href=\"javascript:void(0);\" onclick=\"builder.minusMainColumn(\$(this));\" rel=\"1\" class=\"col-minus\"></a>
                                                    </div>
                                                    <div class=\"a-group\">
                                                        <input type=\"text\" class=\"form-control input-class-name\" name=\"widget[";
                // line 67
                echo ($context["widget_row"] ?? null);
                echo "][class]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["main_row"], "class", [], "any", false, false, false, 67);
                echo "\" placeholder=\"";
                echo ($context["text_specified_class"] ?? null);
                echo "\" />
                                                        <a class=\"a-column-custom\" title=\"";
                // line 68
                echo ($context["text_custom_columns"] ?? null);
                echo "\" onclick=\"builder.customMainColumns(\$(this));\" href=\"javascript:void(0);\"></a>
                                                        <a class=\"a-row-delete\" onclick=\"builder.removeRow(\$(this));\" href=\"javascript:void(0);\"></a>
                                                    </div>
                                                </div>
                                                <input type=\"hidden\" class=\"cols-format\" value=\"";
                // line 72
                echo ($context["cols_format"] ?? null);
                echo "\" />
                                            </div>
                                            <div class=\"row-content row-";
                // line 74
                echo ($context["widget_row"] ?? null);
                echo "\">
                                                ";
                // line 75
                $context["main_col_count"] = 0;
                // line 76
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["main_row"], "main_cols", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["main_col"]) {
                    // line 77
                    echo "                                                    <div class=\"col-sm-";
                    echo twig_get_attribute($this->env, $this->source, $context["main_col"], "format", [], "any", false, false, false, 77);
                    echo " main-column\">
                                                        <input type=\"hidden\" class=\"main-col-pos\" value=\"";
                    // line 78
                    echo ($context["main_col_count"] ?? null);
                    echo "\" />
                                                        <input type=\"hidden\" class=\"main-col-format\" name=\"widget[";
                    // line 79
                    echo ($context["widget_row"] ?? null);
                    echo "][main_cols][";
                    echo ($context["main_col_count"] ?? null);
                    echo "][format]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["main_col"], "format", [], "any", false, false, false, 79);
                    echo "\" />
                                                        <div class=\"main-col-content main-col-";
                    // line 80
                    echo ($context["main_col_count"] ?? null);
                    echo "\">
                                                            ";
                    // line 81
                    $context["widget_sub_row"] = 0;
                    // line 82
                    echo "                                                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["main_col"], "sub_rows", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["main_col"], "sub_rows", [], "any", false, false, false, 83));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub_row"]) {
                            // line 84
                            echo "                                                                    ";
                            list($context["sub_cols_format"], $context["sub_col_count"]) =                             ["", 0];
                            // line 85
                            echo "                                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_row"], "sub_cols", [], "any", false, false, false, 85));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_col"]) {
                                // line 86
                                echo "                                                                        ";
                                $context["sub_col_count"] = (($context["sub_col_count"] ?? null) + 1);
                                // line 87
                                echo "                                                                        ";
                                if (($context["sub_col"] == twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["sub_row"], "sub_cols", [], "any", false, false, false, 87)))) {
                                    // line 88
                                    echo "                                                                            ";
                                    $context["sub_cols_format"] = (($context["sub_cols_format"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sub_col"], "format", [], "any", false, false, false, 88));
                                    // line 89
                                    echo "                                                                        ";
                                } else {
                                    // line 90
                                    echo "                                                                            ";
                                    $context["sub_cols_format"] = ((($context["sub_cols_format"] ?? null) . twig_get_attribute($this->env, $this->source, $context["sub_col"], "format", [], "any", false, false, false, 90)) . " + ");
                                    // line 91
                                    echo "                                                                        ";
                                }
                                // line 92
                                echo "                                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 93
                            echo "                                                                    <div class=\"sub-row sub-row-";
                            echo ($context["widget_sub_row"] ?? null);
                            echo "\">
                                                                        <div class=\"sub-row-action\">
                                                                            <div class=\"action-group\">
                                                                                <div class=\"sub-col-count\">
                                                                                    <a href=\"javascript:void(0);\" onclick=\"builder.plusSubColumn(\$(this))\" rel=\"1\" class=\"col-plus\"></a>
                                                                                    <span class=\"count\">";
                            // line 98
                            echo ($context["sub_col_count"] ?? null);
                            echo "</span>
                                                                                    <a href=\"javascript:void(0);\" onclick=\"builder.minusSubColumn(\$(this))\" rel=\"1\" class=\"col-minus\"></a>
                                                                                </div>
                                                                                <div class=\"a-group\">
                                                                                    <a class=\"a-column-custom\" title=\"";
                            // line 102
                            echo ($context["text_custom_columns"] ?? null);
                            echo "\" onclick=\"builder.customSubColumns(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                                    <a class=\"a-row-delete\" onclick=\"builder.removeSubRow(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                                </div>
                                                                            </div>
                                                                            <input type=\"hidden\" class=\"sub-cols-format\" value=\"";
                            // line 106
                            echo ($context["sub_cols_format"] ?? null);
                            echo "\" />
                                                                        </div>
                                                                        <div class=\"sub-row-content\">
                                                                            ";
                            // line 109
                            $context["sub_col_count"] = 0;
                            // line 110
                            echo "                                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_row"], "sub_cols", [], "any", false, false, false, 110));
                            foreach ($context['_seq'] as $context["_key"] => $context["sub_col"]) {
                                // line 111
                                echo "                                                                                <div class=\"col-sm-";
                                echo twig_get_attribute($this->env, $this->source, $context["sub_col"], "format", [], "any", false, false, false, 111);
                                echo " column-area\">
                                                                                    <div class=\"module-area droparea ui-droppable ui-sortable sub-col-";
                                // line 112
                                echo ($context["sub_col_count"] ?? null);
                                echo "\">
                                                                                        ";
                                // line 113
                                if (twig_get_attribute($this->env, $this->source, $context["sub_col"], "info", [], "any", false, false, false, 113)) {
                                    // line 114
                                    echo "                                                                                            ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_col"], "info", [], "any", false, false, false, 114));
                                    foreach ($context['_seq'] as $context["_key"] => $context["modules"]) {
                                        // line 115
                                        echo "                                                                                                ";
                                        $context["position"] = 0;
                                        // line 116
                                        echo "                                                                                                ";
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable($context["modules"]);
                                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                                            // line 117
                                            echo "                                                                                                    ";
                                            $context["module_name"] = "";
                                            // line 118
                                            echo "                                                                                                    ";
                                            $context["module_url"] = "";
                                            // line 119
                                            echo "                                                                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                                            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                                                // line 120
                                                echo "                                                                                                        ";
                                                if (( !twig_get_attribute($this->env, $this->source, $context["extension"], "modules", [], "any", false, false, false, 120) && (twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 120) == twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 120)))) {
                                                    // line 121
                                                    echo "                                                                                                            ";
                                                    $context["module_url"] = twig_get_attribute($this->env, $this->source, $context["extension"], "url", [], "any", false, false, false, 121);
                                                    // line 122
                                                    echo "                                                                                                            ";
                                                    $context["module_name"] = twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 122);
                                                    // line 123
                                                    echo "                                                                                                        ";
                                                } else {
                                                    // line 124
                                                    echo "                                                                                                            ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "modules", [], "any", false, false, false, 124));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                                                        // line 125
                                                        echo "                                                                                                                ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["m"], "code", [], "any", false, false, false, 125) == twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 125))) {
                                                            // line 126
                                                            echo "                                                                                                                    ";
                                                            $context["module_url"] = twig_get_attribute($this->env, $this->source, $context["m"], "url", [], "any", false, false, false, 126);
                                                            // line 127
                                                            echo "                                                                                                                    ";
                                                            $context["module_name"] = twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 127);
                                                            // line 128
                                                            echo "                                                                                                                ";
                                                        }
                                                        // line 129
                                                        echo "                                                                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 130
                                                    echo "                                                                                                        ";
                                                }
                                                // line 131
                                                echo "                                                                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 132
                                            echo "                                                                                                    <div class=\"layout-module-info moveable\">
                                                                                                        <div class=\"top\">
                                                                                                            <div class=\"module-info\">
                                                                                                                <p>";
                                            // line 135
                                            echo ($context["module_name"] ?? null);
                                            echo "</p>
                                                                                                            </div>
                                                                                                            <div class=\"module-action\">
                                                                                                                <a class=\"a-module-edit\" href=\"javascript:void(0);\" onclick=\"loadModule('";
                                            // line 138
                                            echo ($context["module_url"] ?? null);
                                            echo "')\"><i class=\"fa fa-pencil\"></i></a>
                                                                                                                <a class=\"a-module-remove\" href=\"javascript:void(0);\" onclick=\"builder.removeModule(\$(this))\"><i class=\"fa fa-times\"></i></a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <input type=\"hidden\" class=\"module-in-main-row\" value=\"";
                                            // line 142
                                            echo ($context["widget_row"] ?? null);
                                            echo "\" />
                                                                                                        <input type=\"hidden\" class=\"module-in-main-col\" value=\"";
                                            // line 143
                                            echo ($context["main_col_count"] ?? null);
                                            echo "\" />
                                                                                                        <input type=\"hidden\" class=\"module-in-sub-row\" value=\"";
                                            // line 144
                                            echo ($context["widget_sub_row"] ?? null);
                                            echo "\" />
                                                                                                        <input type=\"hidden\" class=\"module-in-sub-col\" value=\"";
                                            // line 145
                                            echo ($context["sub_col_count"] ?? null);
                                            echo "\" />
                                                                                                        <input type=\"hidden\" class=\"module-code\" name=\"widget[";
                                            // line 146
                                            echo ($context["widget_row"] ?? null);
                                            echo "][main_cols][";
                                            echo ($context["main_col_count"] ?? null);
                                            echo "][sub_rows][";
                                            echo ($context["widget_sub_row"] ?? null);
                                            echo "][sub_cols][";
                                            echo ($context["sub_col_count"] ?? null);
                                            echo "][info][module][";
                                            echo ($context["position"] ?? null);
                                            echo "][code]\" value=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 146);
                                            echo "\" />
                                                                                                        <input type=\"hidden\" class=\"module-name\" name=\"widget[";
                                            // line 147
                                            echo ($context["widget_row"] ?? null);
                                            echo "][main_cols][";
                                            echo ($context["main_col_count"] ?? null);
                                            echo "][sub_rows][";
                                            echo ($context["widget_sub_row"] ?? null);
                                            echo "][sub_cols][";
                                            echo ($context["sub_col_count"] ?? null);
                                            echo "][info][module][";
                                            echo ($context["position"] ?? null);
                                            echo "][name]\" value=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 147);
                                            echo "\" />
                                                                                                        <input type=\"hidden\" class=\"module-url\"  name=\"widget[";
                                            // line 148
                                            echo ($context["widget_row"] ?? null);
                                            echo "][main_cols][";
                                            echo ($context["main_col_count"] ?? null);
                                            echo "][sub_rows][";
                                            echo ($context["widget_sub_row"] ?? null);
                                            echo "][sub_cols][";
                                            echo ($context["sub_col_count"] ?? null);
                                            echo "][info][module][";
                                            echo ($context["position"] ?? null);
                                            echo "][url]\"  value=\"";
                                            echo twig_get_attribute($this->env, $this->source, $context["module"], "url", [], "any", false, false, false, 148);
                                            echo "\" />
                                                                                                    </div>
                                                                                                    ";
                                            // line 150
                                            $context["position"] = (($context["position"] ?? null) + 1);
                                            // line 151
                                            echo "                                                                                                ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 152
                                        echo "                                                                                            ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 153
                                    echo "                                                                                        ";
                                }
                                // line 154
                                echo "                                                                                        <div class=\"col-action\">
                                                                                            <div class=\"action-group\">
                                                                                                <a class=\"a-module-add\" title=\"";
                                // line 156
                                echo ($context["text_add_module"] ?? null);
                                echo "\" onclick=\"builder.showAllModules(\$(this))\" href=\"javascript:void(0);\"><i class=\"fa fa-plus\"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type=\"hidden\" class=\"sub-col-pos\" value=\"";
                                // line 160
                                echo ($context["sub_col_count"] ?? null);
                                echo "\" />
                                                                                    <input type=\"hidden\" class=\"sub-col-format\" name=\"widget[";
                                // line 161
                                echo ($context["widget_row"] ?? null);
                                echo "][main_cols][";
                                echo ($context["main_col_count"] ?? null);
                                echo "][sub_rows][";
                                echo ($context["widget_sub_row"] ?? null);
                                echo "][sub_cols][";
                                echo ($context["sub_col_count"] ?? null);
                                echo "][format]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["sub_col"], "format", [], "any", false, false, false, 161);
                                echo "\" />
                                                                                </div>
                                                                                ";
                                // line 163
                                $context["sub_col_count"] = (($context["sub_col_count"] ?? null) + 1);
                                // line 164
                                echo "                                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_col'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 165
                            echo "                                                                        </div>
                                                                        <input type=\"hidden\" class=\"sub-row-pos\" value=\"";
                            // line 166
                            echo ($context["widget_sub_row"] ?? null);
                            echo "\" />
                                                                    </div>
                                                                    ";
                            // line 168
                            $context["widget_sub_row"] = (($context["widget_sub_row"] ?? null) + 1);
                            // line 169
                            echo "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 170
                        echo "                                                            ";
                    } else {
                        // line 171
                        echo "                                                                <div class=\"sub-row sub-row-";
                        echo ($context["widget_sub_row"] ?? null);
                        echo "\">
                                                                    <div class=\"sub-row-action\">
                                                                        <div class=\"action-group\">
                                                                            <div class=\"sub-col-count\">
                                                                                <a href=\"javascript:void(0);\" onclick=\"builder.plusSubColumn(\$(this))\" rel=\"1\" class=\"col-plus\"></a>
                                                                                <span class=\"count\">1</span>
                                                                                <a href=\"javascript:void(0);\" onclick=\"builder.minusSubColumn(\$(this))\" rel=\"1\" class=\"col-minus\"></a>
                                                                            </div>
                                                                            <div class=\"a-group\">
                                                                                <a class=\"a-column-custom\" title=\"";
                        // line 180
                        echo ($context["text_custom_columns"] ?? null);
                        echo "\" onclick=\"builder.customSubColumns(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                                <a class=\"a-row-delete\" onclick=\"builder.removeSubRow(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                            </div>
                                                                        </div>
                                                                        <input type=\"hidden\" class=\"sub-cols-format\" value=\"12\" />
                                                                    </div>
                                                                    <div class=\"sub-row-content\">
                                                                        <div class=\"col-sm-12 column-area\">
                                                                            <div class=\"module-area droparea ui-droppable ui-sortable sub-col-";
                        // line 188
                        echo ($context["sub_col_count"] ?? null);
                        echo "\">
                                                                                <div class=\"col-action\">
                                                                                    <div class=\"action-group\">
                                                                                        <a class=\"a-module-add\" title=\"";
                        // line 191
                        echo ($context["text_add_module"] ?? null);
                        echo "\" onclick=\"builder.showAllModules(\$(this))\" href=\"javascript:void(0);\"><i class=\"fa fa-plus\"></i> ";
                        echo ($context["text_add_module"] ?? null);
                        echo "</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input type=\"hidden\" class=\"sub-col-pos\" value=\"";
                        // line 195
                        echo ($context["sub_col_count"] ?? null);
                        echo "\" />
                                                                            <input type=\"hidden\" class=\"sub-col-format\" name=\"widget[0][main_cols][0][sub_rows][0][sub_cols][0][format]\" value=\"12\" />
                                                                        </div>
                                                                    </div>
                                                                    <input type=\"hidden\" class=\"sub-row-pos\" value=\"";
                        // line 199
                        echo ($context["widget_sub_row"] ?? null);
                        echo "\" />
                                                                </div>
                                                            ";
                    }
                    // line 202
                    echo "                                                        </div>
                                                        <div class=\"sub-row-add\">
                                                            <a class=\"a-sub-row-add\" title=\"";
                    // line 204
                    echo ($context["text_add_sub_row"] ?? null);
                    echo "\" href=\"javascript:void(0);\" onclick=\"builder.drawSubRow(\$(this))\"><i class=\"fa fa-plus-square\"></i></a>
                                                        </div>
                                                    </div>
                                                    ";
                    // line 207
                    $context["main_col_count"] = (($context["main_col_count"] ?? null) + 1);
                    // line 208
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "                                            </div>
                                            <input type=\"hidden\" class=\"main-row-pos\" value=\"";
                // line 210
                echo ($context["widget_row"] ?? null);
                echo "\" />
                                        </div>
                                        ";
                // line 212
                $context["widget_row"] = (($context["widget_row"] ?? null) + 1);
                // line 213
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['main_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                ";
        } else {
            // line 215
            echo "                                    ";
            $context["widget_row"] = 0;
            // line 216
            echo "                                    <div class=\"widget-row col-sm-12\">
                                        <div class=\"row-action\">
                                            <div class=\"action-group\">
                                                <div class=\"col-count\">
                                                    <a href=\"javascript:void(0);\" onclick=\"builder.plusMainColumn(\$(this));\" rel=\"1\" class=\"col-plus\"></a>
                                                    <span class=\"count\">1</span>
                                                    <a href=\"javascript:void(0);\" onclick=\"builder.minusMainColumn(\$(this));\" rel=\"1\" class=\"col-minus\"></a>
                                                </div>
                                                <div class=\"a-group\">
                                                    <input type=\"text\" class=\"form-control input-class-name\" name=\"widget[0][class]\" value=\"\" placeholder=\"";
            // line 225
            echo ($context["text_specified_class"] ?? null);
            echo "\" />
                                                    <a class=\"a-column-custom\" title=\"";
            // line 226
            echo ($context["text_custom_columns"] ?? null);
            echo "\" onclick=\"builder.customMainColumns(\$(this));\" href=\"javascript:void(0);\"></a>
                                                    <a class=\"a-row-delete\" onclick=\"builder.removeRow(\$(this));\" href=\"javascript:void(0);\"></a>
                                                </div>
                                            </div>
                                            <input type=\"hidden\" class=\"cols-format\" value=\"12\" />
                                        </div>
                                        <div class=\"row-content row-";
            // line 232
            echo ($context["widget_row"] ?? null);
            echo "\">
                                            ";
            // line 233
            $context["main_col_count"] = 0;
            // line 234
            echo "                                            ";
            $context["sub_col_count"] = 0;
            // line 235
            echo "                                            <div class=\"col-sm-12 main-column\">
                                                <input type=\"hidden\" class=\"main-col-pos\" value=\"";
            // line 236
            echo ($context["main_col_count"] ?? null);
            echo "\" />
                                                <input type=\"hidden\" class=\"main-col-format\" name=\"widget[0][main_cols][0][format]\" value=\"12\" />
                                                <div class=\"main-col-content main-col-";
            // line 238
            echo ($context["main_col_count"] ?? null);
            echo "\">
                                                    ";
            // line 239
            $context["widget_sub_row"] = 0;
            // line 240
            echo "                                                    <div class=\"sub-row sub-row-";
            echo ($context["widget_sub_row"] ?? null);
            echo "\">
                                                        <div class=\"sub-row-action\">
                                                            <div class=\"action-group\">
                                                                <div class=\"sub-col-count\">
                                                                    <a href=\"javascript:void(0);\" onclick=\"builder.plusSubColumn(\$(this))\" rel=\"1\" class=\"col-plus\"></a>
                                                                    <span class=\"count\">1</span>
                                                                    <a href=\"javascript:void(0);\" onclick=\"builder.minusSubColumn(\$(this))\" rel=\"1\" class=\"col-minus\"></a>
                                                                </div>
                                                                <div class=\"a-group\">
                                                                    <a class=\"a-column-custom\" title=\"";
            // line 249
            echo ($context["text_custom_columns"] ?? null);
            echo "\" onclick=\"builder.customSubColumns(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                    <a class=\"a-row-delete\" onclick=\"builder.removeSubRow(\$(this))\" href=\"javascript:void(0);\"></a>
                                                                </div>
                                                            </div>
                                                            <input type=\"hidden\" class=\"sub-cols-format\" value=\"12\" />
                                                        </div>
                                                        <div class=\"sub-row-content\">
                                                            <div class=\"col-sm-12 column-area\">
                                                                <div class=\"module-area droparea ui-droppable ui-sortable sub-col-";
            // line 257
            echo ($context["sub_col_count"] ?? null);
            echo "\">
                                                                    <div class=\"col-action\">
                                                                        <div class=\"action-group\">
                                                                            <a class=\"a-module-add\" title=\"";
            // line 260
            echo ($context["text_add_module"] ?? null);
            echo "\" onclick=\"builder.showAllModules(\$(this))\" href=\"javascript:void(0);\"><i class=\"fa fa-plus\"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type=\"hidden\" class=\"sub-col-pos\" value=\"";
            // line 264
            echo ($context["sub_col_count"] ?? null);
            echo "\" />
                                                                <input type=\"hidden\" class=\"sub-col-format\" name=\"widget[0][main_cols][0][sub_rows][0][sub_cols][0][format]\" value=\"12\" />
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" class=\"sub-row-pos\" value=\"";
            // line 268
            echo ($context["widget_sub_row"] ?? null);
            echo "\" />
                                                    </div>
                                                </div>
                                                <div class=\"sub-row-add\">
                                                    <a class=\"a-sub-row-add\" title=\"";
            // line 272
            echo ($context["text_add_sub_row"] ?? null);
            echo "\" href=\"javascript:void(0);\" onclick=\"builder.drawSubRow(\$(this))\"><i class=\"fa fa-plus-square\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <input type=\"hidden\" class=\"main-row-pos\" value=\"";
            // line 276
            echo ($context["widget_row"] ?? null);
            echo "\" />
                                    </div>
                                ";
        }
        // line 279
        echo "                            </div>
                            <div class=\"widget-info-group col-sm-12\">
                                <button type=\"button\" class=\"btn-insert\">
                                    <i class=\"fa fa-plus-square\"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"all-modules-container row\">
            <div class=\"modules-container\">
                ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 294
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "modules", [], "any", false, false, false, 294)) {
                // line 295
                echo "                        ";
                $context["extension_url"] = twig_get_attribute($this->env, $this->source, $context["extension"], "url", [], "any", false, false, false, 295);
                // line 296
                echo "                        ";
                $context["extension_code"] = twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 296);
                // line 297
                echo "                        ";
                $context["extension_name"] = twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 297);
                // line 298
                echo "                        <div class=\"col-sm-4\">
                            <button type=\"button\" onclick=\"builder.addModule('";
                // line 299
                echo ($context["extension_name"] ?? null);
                echo "', '";
                echo ($context["extension_code"] ?? null);
                echo "', '";
                echo ($context["extension_url"] ?? null);
                echo "')\" class=\"btn-choose-module btn btn-default\" value=\"";
                echo ($context["extension_code"] ?? null);
                echo "\">
                                <span>
                                    ";
                // line 301
                echo ($context["extension_name"] ?? null);
                echo "
                                </span>
                            </button>
                        </div>
                    ";
            } else {
                // line 306
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "modules", [], "any", false, false, false, 306));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 307
                    echo "                            ";
                    $context["module_url"] = twig_get_attribute($this->env, $this->source, $context["module"], "url", [], "any", false, false, false, 307);
                    // line 308
                    echo "                            ";
                    $context["module_code"] = twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 308);
                    // line 309
                    echo "                            ";
                    $context["module_name"] = twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 309);
                    // line 310
                    echo "                            <div class=\"col-sm-4\">
                                <button type=\"button\" onclick=\"builder.addModule('";
                    // line 311
                    echo ($context["module_name"] ?? null);
                    echo "', '";
                    echo ($context["module_code"] ?? null);
                    echo "', '";
                    echo ($context["module_url"] ?? null);
                    echo "')\" class=\"btn-choose-module btn btn-default\" value=\"";
                    echo ($context["module_code"] ?? null);
                    echo "\">
                                    <span>
                                        ";
                    // line 313
                    echo ($context["module_name"] ?? null);
                    echo "
                                    </span>
                                </button>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                echo "                    ";
            }
            // line 319
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        echo "            </div>
            <input type=\"hidden\" id=\"module-row\" value=\"0\" />
            <input type=\"hidden\" id=\"module-col\" value=\"0\" />
            <input type=\"hidden\" id=\"module-sub-row\" value=\"0\" />
            <input type=\"hidden\" id=\"module-sub-col\" value=\"0\" />
            <div class=\"modules-btn-group\">
                <button type=\"button\" class=\"btn-close btn-default pull-right\" onclick=\"builder.closeAllModules();\">Close</button>
            </div>
        </div>
    </div>
</div>

<input type=\"hidden\" id=\"text-columns\" value=\"";
        // line 332
        echo ($context["text_columns"] ?? null);
        echo "\" />
<input type=\"hidden\" id=\"text-add-module\" value=\"";
        // line 333
        echo ($context["text_add_module"] ?? null);
        echo "\" />
<input type=\"hidden\" id=\"text-custom-columns\" value=\"";
        // line 334
        echo ($context["text_custom_columns"] ?? null);
        echo "\" />
<input type=\"hidden\" id=\"text-custom-classname\" value=\"";
        // line 335
        echo ($context["text_specified_class"] ?? null);
        echo "\" />
<input type=\"hidden\" id=\"text-number-min-over\" value=\"";
        // line 336
        echo ($context["text_number_min_over"] ?? null);
        echo "\" />
<input type=\"hidden\" id=\"text-number-max-over\" value=\"";
        // line 337
        echo ($context["text_number_max_over"] ?? null);
        echo "\" />
<input type=\"hidden\" id=\"text-add-sub-row\" value=\"";
        // line 338
        echo ($context["text_add_sub_row"] ?? null);
        echo "\" />
<input type=\"hidden\" id=\"text-columns-error-format\" value=\"";
        // line 339
        echo ($context["text_columns_error_format"] ?? null);
        echo "\" />

<div class=\"popup-background\"></div>
<div class=\"popup-loader-img\">
</div>
<div class=\"popup-container\">
    <div class=\"popup-content\">
        <iframe src=\"\" id=\"module-frame\" scrolling=\"yes\"></iframe>
    </div>
    <div class=\"popup-btn-group\">
        <button type=\"button\" class=\"btn-close btn-default pull-right\" onclick=\"closePopup();\">Close</button>
    </div>
</div>
<script>
    \$(document).ready(function() {
        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });
    })
</script>
<script>
    \$('.btn-insert').click(function () {
        var row_number = \$('.widget-row:last .main-row-pos').val();
        if(row_number == null) {
            row_number = 0;
        } else {
            row_number++;
        }
        builder.drawMainRow(row_number);
    });

    var module_edit_frame = \$('#module-frame');

    function closePopup() {
        \$('.popup-background').hide();
        \$('.popup-loader-img').hide();
        \$('.popup-container').hide();
        module_edit_frame.attr('src', \"\");
    }

    function loadModule(url) {
        module_edit_frame.attr('src', url);
        \$('.popup-background').show();
        \$('.popup-loader-img').show();
    }

    module_edit_frame.on('load', function(event) {
        var current_url = document.getElementById(\"module-frame\").contentWindow.location.href;

        if(module_edit_frame.attr('src') != \"\" && current_url.search('route=extension/module') > -1) {
            module_edit_frame.contents().find('#header,#content .page-header .breadcrumb,#column-left,#footer').hide();
            module_edit_frame.contents().find('#column-left + #content').css('margin', '0px');
            module_edit_frame.contents().find('#content').css('padding', '20px 0 0');
            \$('.popup-container').show();
        } else {
            \$('.popup-background').hide();
            \$('.popup-loader-img').hide();
            \$('.popup-container').hide();
        }
    });

    \$('.popup-background').on('click', function(){
        closePopup();
        builder.closeAllModules();
    });
</script>
";
        // line 410
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/module/ptlayoutbuilder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  982 => 410,  908 => 339,  904 => 338,  900 => 337,  896 => 336,  892 => 335,  888 => 334,  884 => 333,  880 => 332,  866 => 320,  860 => 319,  857 => 318,  846 => 313,  835 => 311,  832 => 310,  829 => 309,  826 => 308,  823 => 307,  818 => 306,  810 => 301,  799 => 299,  796 => 298,  793 => 297,  790 => 296,  787 => 295,  784 => 294,  780 => 293,  764 => 279,  758 => 276,  751 => 272,  744 => 268,  737 => 264,  730 => 260,  724 => 257,  713 => 249,  700 => 240,  698 => 239,  694 => 238,  689 => 236,  686 => 235,  683 => 234,  681 => 233,  677 => 232,  668 => 226,  664 => 225,  653 => 216,  650 => 215,  647 => 214,  641 => 213,  639 => 212,  634 => 210,  631 => 209,  625 => 208,  623 => 207,  617 => 204,  613 => 202,  607 => 199,  600 => 195,  591 => 191,  585 => 188,  574 => 180,  561 => 171,  558 => 170,  552 => 169,  550 => 168,  545 => 166,  542 => 165,  536 => 164,  534 => 163,  521 => 161,  517 => 160,  510 => 156,  506 => 154,  503 => 153,  497 => 152,  491 => 151,  489 => 150,  474 => 148,  460 => 147,  446 => 146,  442 => 145,  438 => 144,  434 => 143,  430 => 142,  423 => 138,  417 => 135,  412 => 132,  406 => 131,  403 => 130,  397 => 129,  394 => 128,  391 => 127,  388 => 126,  385 => 125,  380 => 124,  377 => 123,  374 => 122,  371 => 121,  368 => 120,  363 => 119,  360 => 118,  357 => 117,  352 => 116,  349 => 115,  344 => 114,  342 => 113,  338 => 112,  333 => 111,  328 => 110,  326 => 109,  320 => 106,  313 => 102,  306 => 98,  297 => 93,  291 => 92,  288 => 91,  285 => 90,  282 => 89,  279 => 88,  276 => 87,  273 => 86,  268 => 85,  265 => 84,  260 => 83,  257 => 82,  255 => 81,  251 => 80,  243 => 79,  239 => 78,  234 => 77,  229 => 76,  227 => 75,  223 => 74,  218 => 72,  211 => 68,  203 => 67,  196 => 63,  189 => 58,  183 => 57,  180 => 56,  177 => 55,  174 => 54,  171 => 53,  168 => 52,  165 => 51,  160 => 50,  157 => 49,  152 => 48,  149 => 47,  147 => 46,  134 => 40,  128 => 39,  121 => 35,  115 => 31,  109 => 29,  107 => 28,  101 => 27,  96 => 25,  91 => 23,  85 => 20,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/ptlayoutbuilder.twig", "");
    }
}
