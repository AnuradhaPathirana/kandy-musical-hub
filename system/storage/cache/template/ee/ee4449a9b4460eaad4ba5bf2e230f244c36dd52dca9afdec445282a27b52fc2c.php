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

/* plaza/ultimatemenu/form.twig */
class __TwigTemplate_eaaa77df2d40fde25fe5a3691e3cc387e61038fb8da0da662662b5b3927af748 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-menu\" data-toggle=\"tooltip\" title=\"";
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
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 22
        echo "        <div class=\"theme-option-container\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-menu\" class=\"form-horizontal\">
                        <div class=\"frm-left\">
                            <div class=\"form-group\">
                                <label class=\"col col-label\" for=\"input-menu-name\">";
        // line 31
        echo ($context["entry_menu_name"] ?? null);
        echo "</label>
                                <div class=\"col col-input\">
                                    <input id=\"input-menu-name\" type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" />
                                    ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                    ";
        }
        // line 37
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col col-label\" for=\"input-menu-status\">";
        // line 40
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col col-input\">
                                    <input type=\"hidden\" name=\"status\" value=\"0\" />
                                    <input type=\"checkbox\" class=\"ckb-switch\" name=\"status\" id=\"input-menu-status\"
                                           data-toggle=\"toggle\" data-on=\"";
        // line 44
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                            ";
        // line 45
        if (($context["status"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col col-label\" for=\"input-menu-type\">";
        // line 49
        echo ($context["entry_menu_type"] ?? null);
        echo "</label>
                                <div class=\"col col-input\">
                                    <select name=\"menu_type\" id=\"input-menu-type\" class=\"form-control\">
                                        <option value=\"horizontal\" ";
        // line 52
        if ((($context["menu_type"] ?? null) == "horizontal")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_horizontal"] ?? null);
        echo "</option>
                                        <option value=\"vertical\" ";
        // line 53
        if ((($context["menu_type"] ?? null) == "vertical")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_vertical"] ?? null);
        echo "</option>
                                        <option value=\"mobile\" ";
        // line 54
        if ((($context["menu_type"] ?? null) == "mobile")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_mobile"] ?? null);
        echo "</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"frm-right frm-menu\">
                            <div class=\"form-group\">
                                <div class=\"frm-title col-sm-6\">";
        // line 61
        echo ($context["text_item_hierarchy"] ?? null);
        echo "</div>
                                <div class=\"col-sm-6 control-label col-btn\">
                                    <button type=\"button\" class=\"btn btn-widget btn-delete\" onclick=\"ptmenu.deleteCheckItems()\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"menu_item_container\">
                                    ";
        // line 68
        if (($context["top_items"] ?? null)) {
            // line 69
            echo "                                        <div class=\"top_item_container top_sortable\">
                                            ";
            // line 70
            $context["top_count"] = 0;
            // line 71
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["top_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                // line 72
                echo "                                                <div class=\"top_item_content\">
                                                    <div class=\"top_item item row\">
                                                        ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                                                            <a href=\"#second-content-";
                    echo ($context["top_count"] ?? null);
                    echo "\" data-toggle=\"collapse\" class=\"parent collapsed expand\"></a>
                                                        ";
                }
                // line 77
                echo "                                                        <div class=\"del-name\">
                                                            <div class=\"del-action\">
                                                                <input type=\"checkbox\" class=\"ck-del top-ck-del\" value=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "menu_item_id", [], "any", false, false, false, 79);
                echo "\" />
                                                            </div>
                                                            <div class=\"name\">
                                                                <span>";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "name", [], "any", false, false, false, 82);
                echo "</span>
                                                            </div>
                                                        </div>
                                                        <div class=\"action\">
                                                            <a href=\"javascript:void(0)\" title=\"";
                // line 86
                echo ($context["text_add_sub_item"] ?? null);
                echo "\" onclick=\"ptmenu.appendAddSubItemForm('";
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "menu_item_id", [], "any", false, false, false, 86);
                echo "', '2')\" class=\"a-config\"><i class=\"fa fa-plus\"></i></a>
                                                            <a href=\"javascript:void(0)\" onclick=\"ptmenu.appendTopItemNewForm('";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "url", [], "any", false, false, false, 87);
                echo "')\" class=\"a-config\"><i class=\"fa fa-pencil\"></i></a>
                                                            <a href=\"javascript:void(0)\" onclick=\"ptmenu.deleteMenuItem('";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "del_url", [], "any", false, false, false, 88);
                echo "')\" class=\"a-delete a-config\"><i class=\"fa fa-times\"></i></a>
                                                        </div>
                                                    </div>
                                                    ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                                                        <div class=\"second_item_container second_sortable collapse\" id=\"second-content-";
                    echo ($context["top_count"] ?? null);
                    echo "\">
                                                            ";
                    // line 93
                    $context["second_count"] = 0;
                    // line 94
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 94));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                        // line 95
                        echo "                                                                <div class=\"second_item_content\">
                                                                    <div class=\"second_item item row\">
                                                                        ";
                        // line 97
                        if (twig_get_attribute($this->env, $this->source, $context["sub_item"], "sub_items", [], "any", false, false, false, 97)) {
                            // line 98
                            echo "                                                                            <a href=\"#third-content-";
                            echo ($context["top_count"] ?? null);
                            echo "-";
                            echo ($context["second_count"] ?? null);
                            echo "\" data-toggle=\"collapse\" class=\"parent collapsed expand\"></a>
                                                                        ";
                        }
                        // line 100
                        echo "                                                                        <div class=\"del-name\">
                                                                            <div class=\"del-action\">
                                                                                <input type=\"checkbox\" class=\"ck-del sub-ck-del\" value=\"";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 102);
                        echo "\" />
                                                                            </div>
                                                                            <div class=\"name\">
                                                                                <span>";
                        // line 105
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 105);
                        echo "</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"action\">
                                                                            <a href=\"javascript:void(0)\" title=\"";
                        // line 109
                        echo ($context["text_add_sub_item"] ?? null);
                        echo "\" onclick=\"ptmenu.appendAddSubItemForm('";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 109);
                        echo "', '3')\" class=\"a-config\"><i class=\"fa fa-plus\"></i></a>
                                                                            <a href=\"javascript:void(0)\" onclick=\"ptmenu.appendEditSubItemForm('";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 110);
                        echo "')\" class=\"a-config\"><i class=\"fa fa-pencil\"></i></a>
                                                                            <a href=\"javascript:void(0)\" onclick=\"ptmenu.deleteMenuItem('";
                        // line 111
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "del_url", [], "any", false, false, false, 111);
                        echo "')\" class=\"a-delete a-config\"><i class=\"fa fa-times\"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    ";
                        // line 114
                        if (twig_get_attribute($this->env, $this->source, $context["sub_item"], "sub_items", [], "any", false, false, false, 114)) {
                            // line 115
                            echo "                                                                        <div class=\"third_item_container third_sortable collapse\" id=\"third-content-";
                            echo ($context["top_count"] ?? null);
                            echo "-";
                            echo ($context["second_count"] ?? null);
                            echo "\">
                                                                            ";
                            // line 116
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item"], "sub_items", [], "any", false, false, false, 116));
                            foreach ($context['_seq'] as $context["_key"] => $context["s_item"]) {
                                // line 117
                                echo "                                                                                <div class=\"third_item_content\">
                                                                                    <div class=\"third_item item row\">
                                                                                        <div class=\"del-name\">
                                                                                            <div class=\"del-action\">
                                                                                                <input type=\"checkbox\" class=\"ck-del sub-ck-del\" value=\"";
                                // line 121
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "item_id", [], "any", false, false, false, 121);
                                echo "\" />
                                                                                            </div>
                                                                                            <div class=\"name\">
                                                                                                <span>";
                                // line 124
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "name", [], "any", false, false, false, 124);
                                echo "</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class=\"action\">
                                                                                            <a href=\"javascript:void(0)\" onclick=\"ptmenu.appendEditSubItemForm('";
                                // line 128
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "item_id", [], "any", false, false, false, 128);
                                echo "')\" class=\"a-config\"><i class=\"fa fa-pencil\"></i></a>
                                                                                            <a href=\"javascript:void(0)\" onclick=\"ptmenu.deleteMenuItem('";
                                // line 129
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "del_url", [], "any", false, false, false, 129);
                                echo "')\" class=\"a-delete a-config\"><i class=\"fa fa-times\"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type=\"hidden\" class=\"sub-item-position3\" name=\"sub_item_position3[";
                                // line 132
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "item_id", [], "any", false, false, false, 132);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "position", [], "any", false, false, false, 132);
                                echo "\" />
                                                                                </div>
                                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 135
                            echo "                                                                        </div>
                                                                    ";
                        }
                        // line 137
                        echo "                                                                    <input type=\"hidden\" class=\"sub-item-position2\" name=\"sub_item_position2[";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 137);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "position", [], "any", false, false, false, 137);
                        echo "\" />
                                                                </div>
                                                                ";
                        // line 139
                        $context["second_count"] = (($context["second_count"] ?? null) + 1);
                        // line 140
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "                                                        </div>
                                                    ";
                }
                // line 143
                echo "                                                    <input type=\"hidden\" class=\"top-item-position\" name=\"top_item_position[";
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "menu_item_id", [], "any", false, false, false, 143);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "position", [], "any", false, false, false, 143);
                echo "\" />
                                                </div>
                                                ";
                // line 145
                $context["top_count"] = (($context["top_count"] ?? null) + 1);
                // line 146
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                                        </div>
                                    ";
        } else {
            // line 149
            echo "                                        <p class=\"text-center\">";
            echo ($context["text_no_items"] ?? null);
            echo "</p>
                                    ";
        }
        // line 151
        echo "                                </div>
                                <div class=\"btn-action\">
                                    <button type=\"button\" class=\"btn btn-add\" onclick=\"ptmenu.appendTopItemNewForm('";
        // line 153
        echo ($context["top_items_form_url"] ?? null);
        echo "')\"><i class=\"fa fa-plus-square\"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <input type=\"hidden\" id=\"sub-item-form-url\" value=\"";
        // line 158
        echo ($context["sub_item_add_form_url"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"sub-item-edit-form-url\" value=\"";
        // line 159
        echo ($context["sub_item_edit_form_url"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"get-top-item-url\" value=\"";
        // line 160
        echo ($context["get_top_items_url"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"multiple-del-url\" value=\"";
        // line 161
        echo ($context["multiple_del_url"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"input-add-sub-item\" value=\"";
        // line 162
        echo ($context["text_add_sub_item"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-show-image\" value=\"";
        // line 163
        echo ($context["text_show_image"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-show-child\" value=\"";
        // line 164
        echo ($context["text_show_child"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-success-item\" value=\"";
        // line 165
        echo ($context["text_success_item"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-choose-category\" value=\"";
        // line 166
        echo ($context["text_choose_category"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-choose-product\" value=\"";
        // line 167
        echo ($context["text_choose_product"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-user-token\" value=\"";
        // line 168
        echo ($context["user_token"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-title\" value=\"";
        // line 169
        echo ($context["text_title"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-link\" value=\"";
        // line 170
        echo ($context["text_link"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-html\" value=\"";
        // line 171
        echo ($context["text_html"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-hide-title\" value=\"";
        // line 172
        echo ($context["text_hide_title"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-confirm-delete\" value=\"";
        // line 173
        echo ($context["text_confirm_delete"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-confirm-multiple-delete\" value=\"";
        // line 174
        echo ($context["text_confirm_multiple_delete"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-choose-delete\" value=\"";
        // line 175
        echo ($context["text_choose_delete_items"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-no-items\" value=\"";
        // line 176
        echo ($context["text_no_items"] ?? null);
        echo "\" />
                    <input type=\"hidden\" id=\"text-no-children-items\" value=\"";
        // line 177
        echo ($context["text_no_children_items"] ?? null);
        echo "\" />
                    <div id=\"form-container-bg\"></div>
                    <div id=\"form-ajax-loader\"><img src=\"";
        // line 179
        echo ($context["loader_image"] ?? null);
        echo "\" class=\"ajax-loader-img\" /></div>
                    <div id=\"form-container\"></div>
                </div>
            </div>
        </div>
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
";
        // line 198
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/ultimatemenu/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 198,  515 => 179,  510 => 177,  506 => 176,  502 => 175,  498 => 174,  494 => 173,  490 => 172,  486 => 171,  482 => 170,  478 => 169,  474 => 168,  470 => 167,  466 => 166,  462 => 165,  458 => 164,  454 => 163,  450 => 162,  446 => 161,  442 => 160,  438 => 159,  434 => 158,  426 => 153,  422 => 151,  416 => 149,  412 => 147,  406 => 146,  404 => 145,  396 => 143,  392 => 141,  386 => 140,  384 => 139,  376 => 137,  372 => 135,  361 => 132,  355 => 129,  351 => 128,  344 => 124,  338 => 121,  332 => 117,  328 => 116,  321 => 115,  319 => 114,  313 => 111,  309 => 110,  303 => 109,  296 => 105,  290 => 102,  286 => 100,  278 => 98,  276 => 97,  272 => 95,  267 => 94,  265 => 93,  260 => 92,  258 => 91,  252 => 88,  248 => 87,  242 => 86,  235 => 82,  229 => 79,  225 => 77,  219 => 75,  217 => 74,  213 => 72,  208 => 71,  206 => 70,  203 => 69,  201 => 68,  191 => 61,  177 => 54,  169 => 53,  161 => 52,  155 => 49,  144 => 45,  138 => 44,  131 => 40,  126 => 37,  120 => 35,  118 => 34,  114 => 33,  109 => 31,  103 => 28,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/ultimatemenu/form.twig", "");
    }
}
