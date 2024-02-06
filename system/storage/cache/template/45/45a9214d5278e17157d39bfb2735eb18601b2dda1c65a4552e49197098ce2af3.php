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

/* plaza/ultimatemenu/top_item_form.twig */
class __TwigTemplate_537ea139be67d1915586fe5844452b603cc5f43047712e0c772bb65714d838e3 extends \Twig\Template
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
        echo "<a class=\"a-close\" onclick=\"ptmenu.closeForm()\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></a>
<input type=\"hidden\" id=\"input-append-categories-link\" value=\"";
        // line 2
        echo ($context["append_categories_link"] ?? null);
        echo "\" />
<div class=\"frm-container\">
    <div class=\"frm-heading\">
        <h4 class=\"frm-title\">";
        // line 5
        echo ($context["text_item_form"] ?? null);
        echo "</h4>
    </div>
    <div class=\"frm-body\">
        <div class=\"frm-button\">
            <button type=\"button\" class=\"btn btn-primary btn-submit\" onclick=\"ptmenu.submitTopItemForm(";
        // line 9
        echo ($context["menu_id"] ?? null);
        echo ")\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> Save</button>
        </div>
        <div class=\"frm-left\">
            <ul class=\"frm-list\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 13
        echo ($context["text_general_setting"] ?? null);
        echo "</a></li>
                <li><a href=\"#tab-content\" data-toggle=\"tab\">";
        // line 14
        echo ($context["text_mega_setting"] ?? null);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"frm-right\">
            ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            ";
        }
        // line 23
        echo "            <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-menu-item\" class=\"form-horizontal\">
                <div class=\"tab-content\">
                    <div id=\"tab-general\" class=\"tab-pane active\">
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-item-name\">";
        // line 27
        echo ($context["entry_item_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" id=\"input-item-name\" class=\"form-control\" value=\"";
        // line 29
        echo ($context["name"] ?? null);
        echo "\" name=\"name\" />
                                ";
        // line 30
        if (($context["error_name"] ?? null)) {
            // line 31
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 33
        echo "                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-status\">";
        // line 36
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                    ";
        // line 39
        if (($context["status"] ?? null)) {
            // line 40
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 41
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 43
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 46
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-title\">";
        // line 50
        echo ($context["entry_title"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 53
            echo "                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><img src=\"language/";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 54);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 54);
            echo "</span>
                                    <input type=\"text\" name=\"title[";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null)) : (""));
            echo "\" placeholder=\"\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\" class=\"form-control\" />
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </div>
                            <div class=\"col-sm-1\"></div>
                            <div class=\"col-sm-3\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" name=\"disable_title\" value=\"";
        // line 62
        echo ($context["disable_title"] ?? null);
        echo "\" ";
        if (($context["disable_title"] ?? null)) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_hide_title"] ?? null);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-link\">";
        // line 67
        echo ($context["entry_link"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <select class=\"form-control link-selection\">
                                    ";
        // line 70
        $context["flg"] = 0;
        // line 71
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mlink"]) {
            // line 72
            echo "                                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["mlink"], "url", [], "any", false, false, false, 72);
            echo "\" ";
            if ((($context["link"] ?? null) == twig_get_attribute($this->env, $this->source, $context["mlink"], "url", [], "any", false, false, false, 72))) {
                echo " selected=\"selected\" ";
                $context["flg"] = 1;
                echo " ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["mlink"], "label", [], "any", false, false, false, 72);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                    <option value=\"0\" ";
        if ((($context["flg"] ?? null) == 0)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_custom_link"] ?? null);
        echo "</option>
                                </select>

                                <input type=\"text\" id=\"input-link\" name=\"link\" value=\"";
        // line 77
        echo ($context["link"] ?? null);
        echo "\" class=\"form-control\" style=\"margin-top: 10px\"/>
                            </div>
                            <div class=\"col-sm-1\"></div>
                            <div class=\"col-sm-3\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" name=\"disable_link\" value=\"";
        // line 82
        echo ($context["disable_link"] ?? null);
        echo "\" ";
        if (($context["disable_link"] ?? null)) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_disable_link"] ?? null);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-sub-menu-type\">";
        // line 87
        echo ($context["entry_menu_content_type"] ?? null);
        echo "</label>
                            <div class=\"col-sm-2\">
                                <select name=\"sub_menu_type\" id=\"input-sub-menu-type\" class=\"form-control sub-type-selection\">
                                    <option value=\"mega\"    ";
        // line 90
        if ((($context["sub_menu_type"] ?? null) == "mega")) {
            echo "    selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_megamenu"] ?? null);
        echo "</option>
                                    <option value=\"flyout\"  ";
        // line 91
        if ((($context["sub_menu_type"] ?? null) == "flyout")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_flyoutmenu"] ?? null);
        echo "</option>
                                </select>
                            </div>
                            <label class=\"frm-label col-sm-2 sub-width-container\" for=\"input-sub-menu-width\">";
        // line 94
        echo ($context["entry_menu_width"] ?? null);
        echo "</label>
                            <div class=\"col-sm-2\">
                                <input type=\"text\" name=\"sub_menu_content_width\" id=\"input-sub-menu-width\" class=\"form-control sub-width-container\" value=\"";
        // line 96
        echo ($context["sub_menu_content_width"] ?? null);
        echo "\" />
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-item-align\">";
        // line 100
        echo ($context["entry_item_align"] ?? null);
        echo "</label>
                            <div class=\"col-sm-2\">
                                <select name=\"item_align\" id=\"input-item-align\" class=\"form-control\">
                                    <option value=\"left\"    ";
        // line 103
        if ((($context["item_align"] ?? null) == "left")) {
            echo "    selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_left"] ?? null);
        echo "</option>
                                    <option value=\"right\"   ";
        // line 104
        if ((($context["item_align"] ?? null) == "right")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_right"] ?? null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-icon\">";
        // line 109
        echo ($context["entry_icon"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 111
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                                <input type=\"hidden\" name=\"icon\" value=\"";
        // line 112
        echo ($context["icon"] ?? null);
        echo "\" id=\"input-image\" />
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-position\">";
        // line 116
        echo ($context["entry_order"] ?? null);
        echo "</label>
                            <div class=\"col-sm-2\">
                                <input type=\"text\" id=\"input-position\" name=\"position\" value=\"";
        // line 118
        echo ($context["position"] ?? null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>

                    <div id=\"tab-content\" class=\"tab-pane\">
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-sub-menu-content-type\">";
        // line 125
        echo ($context["entry_content_type"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select name=\"sub_menu_content_type\" id=\"input-sub-menu-content-type\" class=\"form-control\">
                                    <option value=\"widget\"   ";
        // line 128
        if ((($context["sub_menu_content_type"] ?? null) == "widget")) {
            echo "    selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_widget"] ?? null);
        echo "</option>
                                    <option value=\"category\" ";
        // line 129
        if ((($context["sub_menu_content_type"] ?? null) == "category")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_category"] ?? null);
        echo "</option>
                                    <option value=\"children\" ";
        // line 130
        if ((($context["sub_menu_content_type"] ?? null) == "children")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_children"] ?? null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"frm-group frm-group-content frm-group-category\">
                            <label class=\"frm-label col-sm-2\" for=\"input-sub-menu-category\">";
        // line 135
        echo ($context["text_choose_top_category"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4 frm-group-category\">
                                <select name=\"category_id\" id=\"input-sub-menu-category\" class=\"form-control\">
                                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 139
            echo "                                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 139);
            echo "\" ";
            if ((($context["category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 139))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 139);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                                </select>
                            </div>
                            <div class=\"col-sm-2 frm-group-category\">
                                <button type=\"button\" class=\"btn btn-primary btn-widget\" onclick=\"ptmenu.addCategoryWidget()\"><i class=\"fa fa-plus\"></i> ";
        // line 144
        echo ($context["text_add_widget"] ?? null);
        echo "</button>
                                <img class=\"frm-loader-img\" src=\"";
        // line 145
        echo ($context["loader_image"] ?? null);
        echo "\" alt=\"loader_image\" />
                            </div>
                        </div>
                        <div class=\"frm-group frm-group-content frm-group-widget\">
                            <label class=\"frm-label col-sm-2\">";
        // line 149
        echo ($context["entry_choose_widget"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select id=\"widget-type\" class=\"form-control\">
                                    <option value=\"category\">";
        // line 152
        echo ($context["text_category"] ?? null);
        echo "</option>
                                    <option value=\"product\">";
        // line 153
        echo ($context["text_product"] ?? null);
        echo "</option>
                                    <option value=\"html\">";
        // line 154
        echo ($context["text_html"] ?? null);
        echo "</option>
                                    <<option value=\"link\">";
        // line 155
        echo ($context["text_link"] ?? null);
        echo "</option>
                                </select>
                            </div>
                            <div class=\"col-sm-4\">
                                <select id=\"widget-cols\" class=\"form-control\">
                                    <option value=\"2\">";
        // line 160
        echo ((1 . " ") . ($context["text_column"] ?? null));
        echo "</option>
                                    <option value=\"4\">";
        // line 161
        echo ((2 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"6\">";
        // line 162
        echo ((3 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"8\">";
        // line 163
        echo ((4 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"10\">";
        // line 164
        echo ((5 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"12\">";
        // line 165
        echo ((6 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                </select>
                            </div>
                            <div class=\"col-sm-2\">
                                <button type=\"button\" class=\"btn btn-primary btn-widget\" onclick=\"ptmenu.addWidget()\"><i class=\"fa fa-plus\"></i> ";
        // line 169
        echo ($context["text_add_widget"] ?? null);
        echo "</button>
                                <img class=\"frm-loader-img\" src=\"";
        // line 170
        echo ($context["loader_image"] ?? null);
        echo "\" alt=\"loader_image\" />
                            </div>
                        </div>

                        <div class=\"frm-group frm-group-content frm-group-children\">
                            <label class=\"frm-label col-sm-2\" for=\"input-cols\">";
        // line 175
        echo ($context["entry_number_cols"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select id=\"input-cols\" name=\"sub_menu_content_columns\" class=\"form-control\">
                                    <option value=\"1\" ";
        // line 178
        if ((($context["sub_menu_content_columns"] ?? null) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((1 . " ") . ($context["text_column"] ?? null));
        echo "</option>
                                    <option value=\"2\" ";
        // line 179
        if ((($context["sub_menu_content_columns"] ?? null) == 2)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((2 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"3\" ";
        // line 180
        if ((($context["sub_menu_content_columns"] ?? null) == 3)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((3 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"4\" ";
        // line 181
        if ((($context["sub_menu_content_columns"] ?? null) == 4)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((4 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"5\" ";
        // line 182
        if ((($context["sub_menu_content_columns"] ?? null) == 5)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((5 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"6\" ";
        // line 183
        if ((($context["sub_menu_content_columns"] ?? null) == 6)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((6 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <!-- Widget Type Container -->
                        <div class=\"widget-container widget-sortable\" id=\"widget-type-widget-container\">
                            ";
        // line 189
        if (($context["widget"] ?? null)) {
            // line 190
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "widget", [], "any", false, false, false, 190)) {
                // line 191
                echo "                                    ";
                $context["i"] = 0;
                // line 192
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "widget", [], "any", false, false, false, 192));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 193
                    echo "                                        <div class=\"widget-block col-sm-";
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 193);
                    echo "\">
                                            <div class=\"widget-content\">
                                                <a class=\"a-resize-minus a-left\" onclick=\"ptmenu.decreaseColumn(\$(this))\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>
                                                <a class=\"a-resize-plus a-left\" onclick=\"ptmenu.increaseColumn(\$(this))\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
                                                <div class=\"widget-name-container\">
                                                    ";
                    // line 198
                    if (((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 198) == "category") || (twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 198) == "product"))) {
                        // line 199
                        echo "                                                        <span class=\"name\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 199)) ? (twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 199)) : ("..."));
                        echo "</span>
                                                    ";
                    }
                    // line 201
                    echo "
                                                    ";
                    // line 202
                    if (((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 202) == "html") || (twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 202) == "link"))) {
                        // line 203
                        echo "                                                        <span class=\"name\">";
                        echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 203)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 203)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null)) : ("..."));
                        echo "</span>
                                                    ";
                    }
                    // line 205
                    echo "
                                                </div>
                                                <div class=\"widget-action\">
                                                    <a class=\"a-config\" onclick=\"ptmenu.showWidgetConfiguration(\$(this))\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-config a-delete\" onclick=\"ptmenu.deleteWidget(\$(this))\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                </div>
                                            </div>

                                            ";
                    // line 213
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 213) == "category")) {
                        // line 214
                        echo "                                                <div class=\"widget-configuration\">
                                                    <div class=\"option\"><input type=\"text\" class=\"w-category\" placeholder=\"";
                        // line 215
                        echo ($context["text_choose_category"] ?? null);
                        echo "\" /></div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-image\" ";
                        // line 216
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 216) == 1)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_show_image"] ?? null);
                        echo "</div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-child\" ";
                        // line 217
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 217) == 1)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_show_child"] ?? null);
                        echo "</div>
                                                </div>
                                                <input type=\"hidden\" class=\"widget-name\" value=\"";
                        // line 219
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 219);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][name]\" />
                                                <input type=\"hidden\" class=\"widget-category-id\" value=\"";
                        // line 220
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "category_id", [], "any", false, false, false, 220);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][category_id]\" />
                                                <input type=\"hidden\" class=\"widget-show-image\" value=\"";
                        // line 221
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 221);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_image]\" />
                                                <input type=\"hidden\" class=\"widget-show-child\" value=\"";
                        // line 222
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 222);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_child]\" />
                                            ";
                    }
                    // line 224
                    echo "
                                            ";
                    // line 225
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 225) == "product")) {
                        // line 226
                        echo "                                                <div class=\"widget-configuration\">
                                                    <div class=\"option\"><input type=\"text\" class=\"w-product\" placeholder=\"";
                        // line 227
                        echo ($context["text_choose_product"] ?? null);
                        echo "\" /></div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-image\" ";
                        // line 228
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 228) == 1)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_show_image"] ?? null);
                        echo "</div>
                                                </div>
                                                <input type=\"hidden\" class=\"widget-name\" value=\"";
                        // line 230
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 230);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][name]\" />
                                                <input type=\"hidden\" class=\"widget-product-id\" value=\"";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "product_id", [], "any", false, false, false, 231);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][product_id]\" />
                                                <input type=\"hidden\" class=\"widget-show-image\" value=\"";
                        // line 232
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 232);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_image]\" />
                                            ";
                    }
                    // line 234
                    echo "
                                            ";
                    // line 235
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 235) == "html")) {
                        // line 236
                        echo "                                                <div class=\"widget-configuration\">
                                                    <ul class=\"nav nav-tabs ul-widget-lang\" id=\"ul-widget-html-";
                        // line 237
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 238
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 239
                            echo "                                                            <li><a href=\"#widget-html-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 239);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" data-toggle=\"tab\"><img src=\"language/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 239);
                            echo "/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 239);
                            echo ".png\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 239);
                            echo "\" /> ";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 239);
                            echo "</a></li>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 241
                        echo "                                                    </ul>
                                                    <div class=\"tab-content\" id=\"tab-widget-html-";
                        // line 242
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 243
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 244
                            echo "                                                            <div class=\"tab-pane\" id=\"widget-html-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 244);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\">
                                                                <div class=\"option\"><input type=\"text\" name=\"widget[widget][";
                            // line 245
                            echo ($context["i"] ?? null);
                            echo "][name][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 245);
                            echo "]\" value=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 245)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 245)] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["text_title"] ?? null);
                            echo "\" /></div>
                                                                <div class=\"option\">
                                                                    <textarea data-toggle=\"summernote\" rows=\"10\" class=\"w-html-content\" name=\"widget[widget][";
                            // line 247
                            echo ($context["i"] ?? null);
                            echo "][content][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 247);
                            echo "]\" placeholder=\"";
                            echo ($context["text_html"] ?? null);
                            echo "\">";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["w"], "content", [], "any", false, false, false, 247)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 247)] ?? null) : null);
                            echo "</textarea>
                                                                </div>
                                                            </div>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 251
                        echo "                                                    </div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-title\" ";
                        // line 252
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_title", [], "any", false, false, false, 252) == 0)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_hide_title"] ?? null);
                        echo "</div>
                                                </div>
                                                <input type=\"hidden\" class=\"widget-show-title\" value=\"";
                        // line 254
                        echo ((twig_get_attribute($this->env, $this->source, $context["w"], "show_title", [], "any", false, false, false, 254)) ? (twig_get_attribute($this->env, $this->source, $context["w"], "show_title", [], "any", false, false, false, 254)) : (0));
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_title]\" />
                                            ";
                    }
                    // line 256
                    echo "
                                            ";
                    // line 257
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 257) == "link")) {
                        // line 258
                        echo "                                                <div class=\"widget-configuration\">
                                                    <ul class=\"nav nav-tabs ul-widget-lang\" id=\"ul-widget-link-";
                        // line 259
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 260
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 261
                            echo "                                                            <li><a href=\"#widget-link-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 261);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" data-toggle=\"tab\"><img src=\"language/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261);
                            echo "/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 261);
                            echo ".png\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 261);
                            echo "\" /> ";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 261);
                            echo "</a></li>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 263
                        echo "                                                    </ul>
                                                    <div class=\"tab-content\" id=\"tab-widget-link-";
                        // line 264
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 265
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 266
                            echo "                                                            <div class=\"tab-pane\" id=\"widget-link-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 266);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\">
                                                                <div class=\"option\"><input type=\"text\" name=\"widget[widget][";
                            // line 267
                            echo ($context["i"] ?? null);
                            echo "][name][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 267);
                            echo "]\" value=\"";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 267)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 267)] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["text_title"] ?? null);
                            echo "\" /></div>
                                                            </div>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 270
                        echo "                                                    </div>
                                                    <div class=\"option\"><input type=\"text\" name=\"widget[widget][";
                        // line 271
                        echo ($context["i"] ?? null);
                        echo "][link]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "link", [], "any", false, false, false, 271);
                        echo "\" placeholder=\"";
                        echo ($context["text_link"] ?? null);
                        echo "\" /></div>
                                                </div>
                                            ";
                    }
                    // line 274
                    echo "
                                            <input type=\"hidden\" class=\"widget-type\" value=\"";
                    // line 275
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 275);
                    echo "\" name=\"widget[widget][";
                    echo ($context["i"] ?? null);
                    echo "][type]\" />
                                            <input type=\"hidden\" class=\"widget-cols\" value=\"";
                    // line 276
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 276);
                    echo "\" name=\"widget[widget][";
                    echo ($context["i"] ?? null);
                    echo "][cols]\" />
                                            <input type=\"hidden\" class=\"widget-position\" value=\"";
                    // line 277
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "position", [], "any", false, false, false, 277);
                    echo "\" name=\"widget[widget][";
                    echo ($context["i"] ?? null);
                    echo "][position]\" />
                                        </div>
                                        ";
                    // line 279
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 280
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 281
                echo "                                ";
            } else {
                // line 282
                echo "                                    <p class=\"p-widget-items\">";
                echo ($context["text_no_children_items"] ?? null);
                echo "</p>
                                ";
            }
            // line 284
            echo "                            ";
        } else {
            // line 285
            echo "                                <p class=\"p-widget-items\">";
            echo ($context["text_no_children_items"] ?? null);
            echo "</p>
                            ";
        }
        // line 287
        echo "                        </div>

                        <!-- Category Type Container -->
                        <div class=\"widget-container widget-sortable\" id=\"widget-type-category-container\">
                            ";
        // line 291
        if (($context["widget"] ?? null)) {
            // line 292
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "category", [], "any", false, false, false, 292)) {
                // line 293
                echo "                                    ";
                $context["i"] = 0;
                // line 294
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "category", [], "any", false, false, false, 294));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 295
                    echo "                                        <div class=\"widget-block col-sm-";
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 295);
                    echo "\">
                                            <div class=\"widget-content\">
                                                <a class=\"a-resize-minus a-left\" onclick=\"ptmenu.decreaseColumn(\$(this))\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>
                                                <a class=\"a-resize-plus a-left\" onclick=\"ptmenu.increaseColumn(\$(this))\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
                                                <div class=\"widget-name-container\">
                                                    <span class=\"name\">";
                    // line 300
                    echo ((twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 300)) ? (twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 300)) : ("..."));
                    echo "</span>
                                                </div>
                                                <div class=\"widget-action\">
                                                    <a class=\"a-config\" onclick=\"ptmenu.showWidgetConfiguration(\$(this))\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-delete a-config\" onclick=\"ptmenu.deleteWidget(\$(this))\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                                                </div>
                                            </div>

                                            <div class=\"widget-configuration\">
                                                <div class=\"option\"><input type=\"text\" class=\"w-category\" placeholder=\"";
                    // line 309
                    echo ($context["text_choose_category"] ?? null);
                    echo "\" /></div>
                                                <div class=\"option\"><input type=\"checkbox\" class=\"show-image\" ";
                    // line 310
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 310) == 1)) {
                        echo " checked=\"checked\" ";
                    }
                    echo " /> ";
                    echo ($context["text_show_image"] ?? null);
                    echo "</div>
                                                <div class=\"option\"><input type=\"checkbox\" class=\"show-child\" ";
                    // line 311
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 311) == 1)) {
                        echo " checked=\"checked\" ";
                    }
                    echo " /> ";
                    echo ($context["text_show_child"] ?? null);
                    echo "</div>
                                            </div>

                                            <input type=\"hidden\" class=\"widget-name\" value=\"";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 314);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][name]\" />
                                            <input type=\"hidden\" class=\"widget-type\" value=\"";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 315);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][type]\" />
                                            <input type=\"hidden\" class=\"widget-cols\" value=\"";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 316);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][cols]\" />
                                            <input type=\"hidden\" class=\"widget-position\" value=\"";
                    // line 317
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "position", [], "any", false, false, false, 317);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][position]\" />
                                            <input type=\"hidden\" class=\"widget-category-id\" value=\"";
                    // line 318
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "category_id", [], "any", false, false, false, 318);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][category_id]\" />
                                            <input type=\"hidden\" class=\"widget-show-image\" value=\"";
                    // line 319
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 319);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][show_image]\" />
                                            <input type=\"hidden\" class=\"widget-show-child\" value=\"";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 320);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][show_child]\" />
                                        </div>
                                        ";
                    // line 322
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 323
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 324
                echo "                                ";
            } else {
                // line 325
                echo "                                    <p class=\"p-widget-items\">";
                echo ($context["text_no_children_items"] ?? null);
                echo "</p>
                                ";
            }
            // line 327
            echo "                            ";
        } else {
            // line 328
            echo "                                <p class=\"p-widget-items\">";
            echo ($context["text_no_children_items"] ?? null);
            echo "</p>
                            ";
        }
        // line 330
        echo "                        </div>

                        <input type=\"hidden\" name=\"category_id\" id=\"input-category-id\" value=\"";
        // line 332
        echo ($context["category_id"] ?? null);
        echo "\" />
                        <input type=\"hidden\" name=\"has_child\" id=\"input-has-child\" value=\"";
        // line 333
        echo ($context["has_child"] ?? null);
        echo "\" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\">
    ptmenu.initSortMenuItem();
    ptmenu.chooseCategory();
    ptmenu.chooseProduct();
    ptmenu.checkBoxClick();
    ptmenu.initSummerNote();
</script>

<script type=\"text/javascript\">
    var sub_menu_content_type_selection = \$('#input-sub-menu-content-type');
    var sub_menu_content_type = sub_menu_content_type_selection.val();

    \$('.widget-container').hide();
    \$('#widget-type-'+ sub_menu_content_type +'-container').show();

    \$('.frm-group-content').hide();
    \$('.frm-group-' + sub_menu_content_type).show();

    sub_menu_content_type_selection.change(function () {
        var sub_menu_content_type = \$(this).val();

        \$('.frm-group-content').hide();
        \$('.frm-group-' + sub_menu_content_type).show();

        \$('.widget-container').hide();
        \$('#widget-type-'+ sub_menu_content_type +'-container').show();
    });

    \$('.ul-widget-lang').each(function () {
        \$(this).find('a:first').tab('show');
    });

    \$('#input-link').hide();
    var link = \$('.link-selection').val();
    if (link == '0') {
        \$('#input-link').show();
    } else {
        \$('#input-link').hide();
        \$('#input-link').val(link);
    }

    \$('.link-selection').change(function () {
        var link = \$(this).val();
        if (link == '0') {
            \$('#input-link').show();
        } else {
            \$('#input-link').hide();
            \$('#input-link').val(link);
        }
    });

    \$('.sub-width-container').hide();
    var sub_menu_type = \$('.sub-type-selection').val();
    if (sub_menu_type == 'mega') {
        \$('.sub-width-container').show();
    } else {
        \$('.sub-width-container').hide();
    }

    \$('.sub-type-selection').change(function () {
        var sub_menu_type = \$(this).val();
        if (sub_menu_type == 'mega') {
            \$('.sub-width-container').show();
        } else {
            \$('.sub-width-container').hide();
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "plaza/ultimatemenu/top_item_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1068 => 333,  1064 => 332,  1060 => 330,  1054 => 328,  1051 => 327,  1045 => 325,  1042 => 324,  1036 => 323,  1034 => 322,  1027 => 320,  1021 => 319,  1015 => 318,  1009 => 317,  1003 => 316,  997 => 315,  991 => 314,  981 => 311,  973 => 310,  969 => 309,  957 => 300,  948 => 295,  943 => 294,  940 => 293,  937 => 292,  935 => 291,  929 => 287,  923 => 285,  920 => 284,  914 => 282,  911 => 281,  905 => 280,  903 => 279,  896 => 277,  890 => 276,  884 => 275,  881 => 274,  871 => 271,  868 => 270,  853 => 267,  846 => 266,  842 => 265,  838 => 264,  835 => 263,  816 => 261,  812 => 260,  808 => 259,  805 => 258,  803 => 257,  800 => 256,  793 => 254,  784 => 252,  781 => 251,  765 => 247,  754 => 245,  747 => 244,  743 => 243,  739 => 242,  736 => 241,  717 => 239,  713 => 238,  709 => 237,  706 => 236,  704 => 235,  701 => 234,  694 => 232,  688 => 231,  682 => 230,  673 => 228,  669 => 227,  666 => 226,  664 => 225,  661 => 224,  654 => 222,  648 => 221,  642 => 220,  636 => 219,  627 => 217,  619 => 216,  615 => 215,  612 => 214,  610 => 213,  600 => 205,  594 => 203,  592 => 202,  589 => 201,  583 => 199,  581 => 198,  572 => 193,  567 => 192,  564 => 191,  561 => 190,  559 => 189,  546 => 183,  538 => 182,  530 => 181,  522 => 180,  514 => 179,  506 => 178,  500 => 175,  492 => 170,  488 => 169,  481 => 165,  477 => 164,  473 => 163,  469 => 162,  465 => 161,  461 => 160,  453 => 155,  449 => 154,  445 => 153,  441 => 152,  435 => 149,  428 => 145,  424 => 144,  419 => 141,  404 => 139,  400 => 138,  394 => 135,  382 => 130,  374 => 129,  366 => 128,  360 => 125,  350 => 118,  345 => 116,  338 => 112,  332 => 111,  327 => 109,  315 => 104,  307 => 103,  301 => 100,  294 => 96,  289 => 94,  279 => 91,  271 => 90,  265 => 87,  251 => 82,  243 => 77,  232 => 74,  215 => 72,  210 => 71,  208 => 70,  202 => 67,  188 => 62,  182 => 58,  169 => 55,  159 => 54,  156 => 53,  152 => 52,  147 => 50,  141 => 46,  136 => 44,  131 => 43,  126 => 41,  121 => 40,  119 => 39,  113 => 36,  108 => 33,  102 => 31,  100 => 30,  96 => 29,  91 => 27,  83 => 23,  75 => 19,  73 => 18,  66 => 14,  62 => 13,  53 => 9,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/ultimatemenu/top_item_form.twig", "");
    }
}
