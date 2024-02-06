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

/* plaza/module/ptcontrolpanel.twig */
class __TwigTemplate_a1995aee3365f76ea8ef46f8e5c3dff4938b8fa807e000aaa515589bd97d8833 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-ptcontrolpanel\" data-toggle=\"tooltip\" title=\"";
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
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        ";
        if (($context["error_load_file"] ?? null)) {
            // line 23
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_load_file"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 27
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 32
        echo "        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 37
        echo ($context["text_dashboard_menu"] ?? null);
        echo "</h3>
                        </div>
                        <ul class=\"nav nav-tabs menu-sections pt-dashboard-menu\">
                            ";
        // line 40
        $context["i"] = 0;
        // line 41
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plaza_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 42
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 42)) {
                // line 43
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 43)) {
                    echo " class=\"active\" ";
                }
                echo ">
                                        <a href=\"#ptcollapse_";
                // line 44
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent ";
                if ( !twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 44)) {
                    echo " collapsed ";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 44);
                echo "</a>
                                        <ul id=\"ptcollapse_";
                // line 45
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 45)) {
                    echo " in ";
                }
                echo "\">
                                            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "                                                <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 47)) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 47);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 47);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                                        </ul>
                                    </li>
                                ";
            } else {
                // line 52
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 52)) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 52);
                echo "</a></li>
                                ";
            }
            // line 54
            echo "                                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 55
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-magic\"></i> ";
        // line 64
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                            <div class=\"panel-select\">
                                <select id=\"input-store\" class=\"form-control\">
                                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 68
            echo "                                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 68);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 68) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 68);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-3 col-left\">
                                <ul class=\"nav nav-tabs menu-sections\">
                                    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>";
        // line 76
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-font\" data-toggle=\"tab\"><i class=\"fa fa-font\" aria-hidden=\"true\"></i>";
        // line 77
        echo ($context["tab_font"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-catalog\" data-toggle=\"tab\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>";
        // line 78
        echo ($context["tab_catalog"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-product\" data-toggle=\"tab\"><i class=\"fa fa-cube\" aria-hidden=\"true\"></i>";
        // line 79
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-category\" data-toggle=\"tab\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>";
        // line 80
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-advance\" data-toggle=\"tab\"><i class=\"fa fa-fire\" aria-hidden=\"true\"></i>";
        // line 81
        echo ($context["tab_advance"] ?? null);
        echo "</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-9 col-right\">
                                <div class=\"panel-body\">
                                    <form action=\"";
        // line 86
        echo ($context["action_import"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-data\" class=\"form-horizontal\">
                                        <input type=\"hidden\" name=\"file\" />
                                    </form>
                                    <form action=\"";
        // line 89
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ptcontrolpanel\" class=\"form-horizontal\">
                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_status\" value=\"1\" />
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane active\" id=\"tab-general\">
                                                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 94
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 94);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 96
            echo ($context["entry_header"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_header_layout[";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 98);
            echo "]\" class=\"form-control\">
                                                                    <option value=\"1\" ";
            // line 99
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_ptcontrolpanel_header_layout"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 99)] ?? null) : null) == "1")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["entry_header"] ?? null);
            echo " 1</option>
                                                                    <option value=\"2\" ";
            // line 100
            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_ptcontrolpanel_header_layout"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 100)] ?? null) : null) == "2")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["entry_header"] ?? null);
            echo " 2</option>
                                                                    <option value=\"3\" ";
            // line 101
            if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_ptcontrolpanel_header_layout"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 101)] ?? null) : null) == "3")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["entry_header"] ?? null);
            echo " 3</option>
                                                                    <option value=\"4\" ";
            // line 102
            if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_ptcontrolpanel_header_layout"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 102)] ?? null) : null) == "4")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["entry_header"] ?? null);
            echo " 4</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 108
            echo ($context["entry_responsive"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_responsive_type[";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 110);
            echo "]\" class=\"form-control\">
                                                                    <option value=\"responsive\" ";
            // line 111
            if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["module_ptcontrolpanel_responsive_type"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 111)] ?? null) : null) == "responsive")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_responsive_layout"] ?? null);
            echo "</option>
                                                                    <option value=\"specified\" ";
            // line 112
            if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["module_ptcontrolpanel_responsive_type"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 112)] ?? null) : null) == "specified")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_specified_layout"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 118
            echo ($context["entry_sticky_header"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_sticky_header[";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 120);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_sticky_header[";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 121);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 122
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 123
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["module_ptcontrolpanel_sticky_header"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 123)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 128
            echo ($context["entry_scroll_top"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_scroll_top[";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 130);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_scroll_top[";
            // line 131
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 131);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 132
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 133
            if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["module_ptcontrolpanel_scroll_top"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 133)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 138
            echo ($context["entry_lazy_load"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_lazy_load[";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 140);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_lazy_load[";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 141);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 142
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 143
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["module_ptcontrolpanel_lazy_load"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 143)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 148
            echo ($context["entry_loader_image"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <a href=\"\" id=\"thumb-image";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 150);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["thumb"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 150)] ?? null) : null);
            echo "\" alt=\"\" title=\"\"  /></a>
                                                                <input type=\"hidden\" id=\"input-image";
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 151);
            echo "\" name=\"module_ptcontrolpanel_loader_img[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 151);
            echo "]\" value=\"";
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["module_ptcontrolpanel_loader_img"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 151)] ?? null) : null);
            echo "\" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-font\">
                                                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 160
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 160);
            echo "\">
                                                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                                                            <li class=\"active\"><a href=\"#tab-body-";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 162);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_body"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-header-";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 163);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_heading"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-link-";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 164);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_link"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-button-";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 165);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_button"] ?? null);
            echo "</a></li>
                                                        </ul>

                                                        <div class=\"tab-content child-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-body-";
            // line 169
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 169);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-3\"></div>
                                                                    <div class=\"col-sm-6\">
                                                                        <p class=\"font-body-demo-";
            // line 173
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 173);
            echo " font-demo\">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />
                                                                            a b c d e f g h i j k l m n o p q r s t u v w x y z <br />
                                                                            0 1 2 3 4 5 6 7 8 9</p>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group font-control\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 180
            echo ($context["entry_global_font"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" name=\"module_ptcontrolpanel_body_font_family_id[";
            // line 182
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 182);
            echo "]\" onchange=\"chooseBodyFont(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 182);
            echo ")\">
                                                                            <option value=\"10000\" ";
            // line 183
            if (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["module_ptcontrolpanel_body_font_family_id"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 183)] ?? null) : null) == 10000)) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_choose_font"] ?? null);
            echo "</option>
                                                                            ";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fonts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 185
                echo "                                                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 185);
                echo "\" ";
                if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["module_ptcontrolpanel_body_font_family_id"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 185)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 185))) {
                    echo " selected=\"selected\" ";
                }
                // line 186
                echo "                                                                                        id=\"body-font-";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 186);
                echo "\" data-family=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 186);
                echo "\" data-family-val=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family_val", [], "any", false, false, false, 186);
                echo "\"
                                                                                        data-variants=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["font"], "variants", [], "any", false, false, false, 187);
                echo "\" data-subsets=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "subsets", [], "any", false, false, false, 187);
                echo "\" data-category=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "category", [], "any", false, false, false, 187);
                echo "\">
                                                                                    ";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 188);
                echo "
                                                                                </option>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"checkbox\" id=\"body-font-disable\" name=\"module_ptcontrolpanel_body_font_disable[";
            // line 194
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 194);
            echo "]\" ";
            if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["module_ptcontrolpanel_body_font_disable"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 194)] ?? null) : null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo ($context["entry_font_disable"] ?? null);
            echo "
                                                                    </div>

                                                                    <input type=\"hidden\" id=\"body-font-family-name-";
            // line 197
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197);
            echo "\" name=\"module_ptcontrolpanel_body_font_family_name[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197);
            echo "]\" value=\"";
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["module_ptcontrolpanel_body_font_family_name"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"body-font-family-cate-";
            // line 198
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 198);
            echo "\" name=\"module_ptcontrolpanel_body_font_family_cate[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 198);
            echo "]\" value=\"";
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["module_ptcontrolpanel_body_font_family_cate"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 198)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"body-font-family-link-";
            // line 199
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 199);
            echo "\" name=\"module_ptcontrolpanel_body_font_family_link[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 199);
            echo "]\" value=\"";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["module_ptcontrolpanel_body_font_family_link"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 199)] ?? null) : null);
            echo "\" />
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 203
            echo ($context["entry_font_size"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input class=\"form-control\" type=\"text\" name=\"module_ptcontrolpanel_body_font_size[";
            // line 205
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 205);
            echo "]\" value=\"";
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["module_ptcontrolpanel_body_font_size"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 205)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 210
            echo ($context["entry_font_weight"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" id=\"body-font-weight-";
            // line 212
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 212);
            echo "\" name=\"module_ptcontrolpanel_body_font_weight[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 212);
            echo "]\" onclick=\"chooseBodyWeight(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 212);
            echo ")\">
                                                                            <option value=\"300\" ";
            // line 213
            if (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 213)] ?? null) : null) == "300")) {
                echo "selected=\"selected\"";
            }
            echo ">300</option>
                                                                            <option value=\"400\" ";
            // line 214
            if (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 214)] ?? null) : null) == "400")) {
                echo "selected=\"selected\"";
            }
            echo ">400</option>
                                                                            <option value=\"500\" ";
            // line 215
            if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 215)] ?? null) : null) == "500")) {
                echo "selected=\"selected\"";
            }
            echo ">500</option>
                                                                            <option value=\"600\" ";
            // line 216
            if (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 216)] ?? null) : null) == "600")) {
                echo "selected=\"selected\"";
            }
            echo ">600</option>
                                                                            <option value=\"700\" ";
            // line 217
            if (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 217)] ?? null) : null) == "700")) {
                echo "selected=\"selected\"";
            }
            echo ">700</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 223
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_body_color[";
            // line 225
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 225);
            echo "]\" value=\"";
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["module_ptcontrolpanel_body_color"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 225)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 230
            echo ($context["entry_primary_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_link_hover_color[";
            // line 232
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 232);
            echo "]\" value=\"";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["module_ptcontrolpanel_link_hover_color"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 232)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-header-";
            // line 237
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 237);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-3\"></div>
                                                                    <div class=\"col-sm-6\">
                                                                        <p class=\"font-heading-demo-";
            // line 241
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 241);
            echo " font-demo\">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />
                                                                            a b c d e f g h i j k l m n o p q r s t u v w x y z <br />
                                                                            0 1 2 3 4 5 6 7 8 9</p>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group font-control\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 248
            echo ($context["entry_heading_font"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" name=\"module_ptcontrolpanel_heading_font_family_id[";
            // line 250
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 250);
            echo "]\" onchange=\"chooseHeadingFont(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 250);
            echo ")\">
                                                                            <option value=\"10000\" ";
            // line 251
            if (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["module_ptcontrolpanel_heading_font_family_id"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 251)] ?? null) : null) == 10000)) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_choose_font"] ?? null);
            echo "</option>
                                                                            ";
            // line 252
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fonts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 253
                echo "                                                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 253);
                echo "\" ";
                if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["module_ptcontrolpanel_heading_font_family_id"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 253)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 253))) {
                    echo " selected=\"selected\" ";
                }
                // line 254
                echo "                                                                                        id=\"heading-font-";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 254);
                echo "\" data-family=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 254);
                echo "\" data-family-val=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family_val", [], "any", false, false, false, 254);
                echo "\"
                                                                                        data-variants=\"";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["font"], "variants", [], "any", false, false, false, 255);
                echo "\" data-subsets=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "subsets", [], "any", false, false, false, 255);
                echo "\" data-category=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "category", [], "any", false, false, false, 255);
                echo "\">
                                                                                    ";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 256);
                echo "
                                                                                </option>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "                                                                        </select>
                                                                    </div>

                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"checkbox\" id=\"heading-font-disable\" name=\"module_ptcontrolpanel_heading_font_disable[";
            // line 263
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 263);
            echo "]\" ";
            if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["module_ptcontrolpanel_heading_font_disable"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 263)] ?? null) : null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo ($context["entry_font_disable"] ?? null);
            echo "
                                                                    </div>

                                                                    <input type=\"hidden\" id=\"heading-font-family-name-";
            // line 266
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 266);
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_name[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 266);
            echo "]\" value=\"";
            echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["module_ptcontrolpanel_heading_font_family_name"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 266)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"heading-font-family-cate-";
            // line 267
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 267);
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_cate[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 267);
            echo "]\" value=\"";
            echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["module_ptcontrolpanel_heading_font_family_cate"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 267)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"heading-font-family-link-";
            // line 268
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 268);
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_link[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 268);
            echo "]\" value=\"";
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["module_ptcontrolpanel_heading_font_family_link"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 268)] ?? null) : null);
            echo "\" />
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 272
            echo ($context["entry_font_weight"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" id=\"heading-font-weight-";
            // line 274
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 274);
            echo "\" name=\"module_ptcontrolpanel_heading_font_weight[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 274);
            echo "]\" onchange=\"chooseHeadingWeight(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 274);
            echo ")\">
                                                                            <option value=\"300\" ";
            // line 275
            if (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 275)] ?? null) : null) == "300")) {
                echo "selected=\"selected\"";
            }
            echo ">300</option>
                                                                            <option value=\"400\" ";
            // line 276
            if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 276)] ?? null) : null) == "400")) {
                echo "selected=\"selected\"";
            }
            echo ">400</option>
                                                                            <option value=\"500\" ";
            // line 277
            if (((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 277)] ?? null) : null) == "500")) {
                echo "selected=\"selected\"";
            }
            echo ">500</option>
                                                                            <option value=\"600\" ";
            // line 278
            if (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 278)] ?? null) : null) == "600")) {
                echo "selected=\"selected\"";
            }
            echo ">600</option>
                                                                            <option value=\"700\" ";
            // line 279
            if (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 279)] ?? null) : null) == "700")) {
                echo "selected=\"selected\"";
            }
            echo ">700</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 285
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_heading_color[";
            // line 287
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 287);
            echo "]\" value=\"";
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["module_ptcontrolpanel_heading_color"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 287)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-link-";
            // line 294
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 294);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 296
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_link_color[";
            // line 298
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 298);
            echo "]\" value=\"";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["module_ptcontrolpanel_link_color"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 298)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-button-";
            // line 305
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 305);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 307
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_color[";
            // line 309
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 309);
            echo "]\" value=\"";
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["module_ptcontrolpanel_button_color"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 309)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 314
            echo ($context["entry_hover_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_hover_color[";
            // line 316
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 316);
            echo "]\" value=\"";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["module_ptcontrolpanel_button_hover_color"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 316)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 321
            echo ($context["entry_bg_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_bg_color[";
            // line 323
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 323);
            echo "]\" value=\"";
            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["module_ptcontrolpanel_button_bg_color"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 323)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 328
            echo ($context["entry_bg_hover_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_bg_hover_color[";
            // line 330
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 330);
            echo "]\" value=\"";
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["module_ptcontrolpanel_button_bg_hover_color"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 330)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                                                <input type=\"hidden\" value=\"";
        echo ($context["entry_font_weight"] ?? null);
        echo "\" id=\"text-font-weight\" />
                                                <input type=\"hidden\" value=\"";
        // line 338
        echo ($context["entry_font_subset"] ?? null);
        echo "\" id=\"text-font-subset\" />
                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-product\">
                                                ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 343
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 343);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-related-";
            // line 345
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 345);
            echo "\">";
            echo ($context["entry_related_pro"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_related[";
            // line 347
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 347);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_related[";
            // line 348
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 348);
            echo "]\" id=\"input-related-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 348);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 349
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 349);
            echo "\"
                                                                        ";
            // line 350
            if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["module_ptcontrolpanel_related"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 350)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-social-";
            // line 355
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 355);
            echo "\">";
            echo ($context["entry_social_icons"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_social[";
            // line 357
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 357);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_social[";
            // line 358
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 358);
            echo "]\" id=\"input-social-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 358);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 359
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 359);
            echo "\"
                                                                        ";
            // line 360
            if ((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["module_ptcontrolpanel_social"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 360)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-tax-";
            // line 365
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 365);
            echo "\">";
            echo ($context["entry_tax"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_tax[";
            // line 367
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 367);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_tax[";
            // line 368
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 368);
            echo "]\" id=\"input-tax-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 368);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 369
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 369);
            echo "\"
                                                                        ";
            // line 370
            if ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["module_ptcontrolpanel_tax"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 370)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-tags-";
            // line 375
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 375);
            echo "\">";
            echo ($context["entry_tags"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_tags[";
            // line 377
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 377);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_tags[";
            // line 378
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 378);
            echo "]\" id=\"input-tags-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 378);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 379
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 379);
            echo "\"
                                                                        ";
            // line 380
            if ((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["module_ptcontrolpanel_tags"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 380)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-";
            // line 385
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 385);
            echo "\">";
            echo ($context["entry_use_zoom"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_zoom[";
            // line 387
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 387);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch zoom-status\" name=\"module_ptcontrolpanel_use_zoom[";
            // line 388
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 388);
            echo "]\" id=\"input-zoom-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 388);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 389
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 389);
            echo "\"
                                                                        ";
            // line 390
            if ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["module_ptcontrolpanel_use_zoom"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 390)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-type-";
            // line 395
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 395);
            echo "\">";
            echo ($context["entry_zoom_type"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_zoom_type[";
            // line 397
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 397);
            echo "]\" id=\"input-zoom-type-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 397);
            echo "\" class=\"form-control\">
                                                                    <option value=\"outer\" ";
            // line 398
            if (((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["module_ptcontrolpanel_zoom_type"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 398)] ?? null) : null) == "outer")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_outside"] ?? null);
            echo "</option>
                                                                    <option value=\"inner\" ";
            // line 399
            if (((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["module_ptcontrolpanel_zoom_type"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 399)] ?? null) : null) == "inner")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_inside"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-space-";
            // line 405
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 405);
            echo "\">";
            echo ($context["entry_zoom_space"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"text\" id=\"input-zoom-space-";
            // line 407
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 407);
            echo "\" class=\"form-control\" name=\"module_ptcontrolpanel_zoom_space[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 407);
            echo "]\" value=\"";
            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["module_ptcontrolpanel_zoom_space"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 407)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["text_zoom_space"] ?? null);
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-title-";
            // line 411
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 411);
            echo "\">";
            echo ($context["entry_zoom_title"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_zoom_title[";
            // line 413
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 413);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_zoom_title[";
            // line 414
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 414);
            echo "]\" id=\"input-zoom-title-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 414);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 415
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 415);
            echo "\"
                                                                        ";
            // line 416
            if ((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["module_ptcontrolpanel_zoom_title"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 416)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-swatches-";
            // line 421
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 421);
            echo "\">";
            echo ($context["entry_use_swatches"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_swatches[";
            // line 423
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 423);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_use_swatches[";
            // line 424
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 424);
            echo "]\" id=\"input-swatches-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 424);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 425
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 425);
            echo "\"
                                                                        ";
            // line 426
            if ((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["module_ptcontrolpanel_use_swatches"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 426)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-dimension-";
            // line 431
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 431);
            echo "\">";
            echo ($context["entry_icon_swatches"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 433
            echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["module_ptcontrolpanel_swatches_width"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 433)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_swatches_width[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 433);
            echo "]\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 436
            echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["module_ptcontrolpanel_swatches_height"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 436)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_swatches_height[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 436);
            echo "]\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-color-option-";
            // line 441
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 441);
            echo "\">";
            echo ($context["entry_color_option"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_swatches_option[";
            // line 443
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 443);
            echo "]\" id=\"input-color-option-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 443);
            echo "\" class=\"form-control\">
                                                                    ";
            // line 444
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 445
                echo "                                                                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 445) == "select") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 445) == "radio"))) {
                    // line 446
                    echo "                                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 446);
                    echo "\" ";
                    if (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["module_ptcontrolpanel_swatches_option"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 446)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 446))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 446);
                    echo "</option>
                                                                        ";
                }
                // line 448
                echo "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 449
            echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-category\">
                                                ";
        // line 457
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 458
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 458);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-image-";
            // line 460
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 460);
            echo "\">";
            echo ($context["entry_category_image"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_category_image[";
            // line 462
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 462);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_image[";
            // line 463
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 463);
            echo "]\" id=\"input-category-image-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 463);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 464
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 464);
            echo "\"
                                                                        ";
            // line 465
            if ((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["module_ptcontrolpanel_category_image"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 465)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-des-";
            // line 470
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 470);
            echo "\">";
            echo ($context["entry_category_des"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_category_description[";
            // line 472
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 472);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_description[";
            // line 473
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 473);
            echo "]\" id=\"input-category-des-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 473);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 474
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 474);
            echo "\"
                                                                        ";
            // line 475
            if ((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["module_ptcontrolpanel_category_description"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 475)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-sub-";
            // line 480
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 480);
            echo "\">";
            echo ($context["entry_sub_category"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_sub_category[";
            // line 482
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 482);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_sub_category[";
            // line 483
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 483);
            echo "]\" id=\"input-category-sub-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 483);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 484
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 484);
            echo "\"
                                                                        ";
            // line 485
            if ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["module_ptcontrolpanel_sub_category"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 485)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-filter-";
            // line 490
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 490);
            echo "\">";
            echo ($context["entry_filter"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-2\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_filter[";
            // line 492
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 492);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_use_filter[";
            // line 493
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 493);
            echo "]\" id=\"input-filter-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 493);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 494
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 494);
            echo "\"
                                                                        ";
            // line 495
            if ((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["module_ptcontrolpanel_use_filter"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 495)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                            <label class=\"col-sm-2 control-label\">";
            // line 497
            echo ($context["entry_position"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-2\">
                                                                <select name=\"module_ptcontrolpanel_filter_position[";
            // line 499
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 499);
            echo "]\" class=\"form-control\">
                                                                    <option value=\"left\" ";
            // line 500
            if (((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["module_ptcontrolpanel_filter_position"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 500)] ?? null) : null) == "left")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_left"] ?? null);
            echo "</option>
                                                                    <option value=\"right\" ";
            // line 501
            if (((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["module_ptcontrolpanel_filter_position"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 501)] ?? null) : null) == "right")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_right"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-cquickview-";
            // line 507
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 507);
            echo "\">";
            echo ($context["entry_quickview"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_cate_quickview[";
            // line 509
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 509);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_cate_quickview[";
            // line 510
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 510);
            echo "]\" id=\"input-cquickview-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 510);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 511
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 511);
            echo "\"
                                                                        ";
            // line 512
            if ((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["module_ptcontrolpanel_cate_quickview"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 512)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-image-effect-";
            // line 517
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 517);
            echo "\">";
            echo ($context["entry_img_effect"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_img_effect[";
            // line 519
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 519);
            echo "]\" id=\"input-image-effect-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 519);
            echo "\" class=\"form-control\">
                                                                    <option value=\"none\" ";
            // line 520
            if (((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["module_ptcontrolpanel_img_effect"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 520)] ?? null) : null) == "none")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_none"] ?? null);
            echo "</option>
                                                                    <option value=\"hover\" ";
            // line 521
            if (((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["module_ptcontrolpanel_img_effect"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 521)] ?? null) : null) == "hover")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_hover_img"] ?? null);
            echo "</option>
                                                                    <option value=\"swatches\" ";
            // line 522
            if (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["module_ptcontrolpanel_img_effect"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 522)] ?? null) : null) == "swatches")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_swatches_img"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 527
            echo ($context["entry_icon_swatches"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 529
            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["module_ptcontrolpanel_cate_swatches_width"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 529)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_cate_swatches_width[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 529);
            echo "]\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 532
            echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["module_ptcontrolpanel_cate_swatches_height"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 532)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_cate_swatches_height[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 532);
            echo "]\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-view-";
            // line 537
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 537);
            echo "\">";
            echo ($context["entry_advance_view"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_advance_view[";
            // line 539
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 539);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_advance_view[";
            // line 540
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 540);
            echo "]\" id=\"input-view-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 540);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 541
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 541);
            echo "\"
                                                                        ";
            // line 542
            if ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["module_ptcontrolpanel_advance_view"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 542)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-default-view-";
            // line 546
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 546);
            echo "\">";
            echo ($context["entry_default_view"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <select name=\"module_ptcontrolpanel_default_view[";
            // line 548
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 548);
            echo "]\" id=\"input-default-view-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 548);
            echo "\" class=\"form-control\">
                                                                    <option value=\"list\" ";
            // line 549
            if (((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["module_ptcontrolpanel_default_view"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 549)] ?? null) : null) == "list")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_list"] ?? null);
            echo "</option>
                                                                    <option value=\"grid\" ";
            // line 550
            if (((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["module_ptcontrolpanel_default_view"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 550)] ?? null) : null) == "grid")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_grid"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-row-";
            // line 555
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 555);
            echo "\">";
            echo ($context["entry_product_row"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <select name=\"module_ptcontrolpanel_product_row[";
            // line 557
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 557);
            echo "]\" id=\"input-row-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 557);
            echo "\" class=\"form-control\">
                                                                    <option value=\"2\" ";
            // line 558
            if (((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["module_ptcontrolpanel_product_row"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 558)] ?? null) : null) == "2")) {
                echo " selected=\"selected\" ";
            }
            echo ">2</option>
                                                                    <option value=\"3\" ";
            // line 559
            if (((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["module_ptcontrolpanel_product_row"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 559)] ?? null) : null) == "3")) {
                echo " selected=\"selected\" ";
            }
            echo ">3</option>
                                                                    <option value=\"4\" ";
            // line 560
            if (((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["module_ptcontrolpanel_product_row"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 560)] ?? null) : null) == "4")) {
                echo " selected=\"selected\" ";
            }
            echo ">4</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-catalog\">
                                                ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 571
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 571);
            echo "\">
                                                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                                                            <li class=\"active\"><a href=\"#tab-cheader-";
            // line 573
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 573);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_header"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-product-";
            // line 574
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 574);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_product"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-category-";
            // line 575
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 575);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_product_listing"] ?? null);
            echo "</a></li>
                                                        </ul>

                                                        <div class=\"tab-content child-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-cheader-";
            // line 579
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 579);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-header-cart-";
            // line 581
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 581);
            echo "\">";
            echo ($context["entry_cart"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_header_cart[";
            // line 583
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 583);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_header_cart[";
            // line 584
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 584);
            echo "]\" id=\"input-header-cart-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 584);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 585
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 585);
            echo "\"
                                                                                ";
            // line 586
            if ((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["module_ptcontrolpanel_header_cart"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 586)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-header-currency-";
            // line 591
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 591);
            echo "\">";
            echo ($context["entry_currency"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_header_currency[";
            // line 593
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 593);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_header_currency[";
            // line 594
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 594);
            echo "]\" id=\"input-header-currency-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 594);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 595
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 595);
            echo "\"
                                                                                ";
            // line 596
            if ((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["module_ptcontrolpanel_header_currency"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 596)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-product-";
            // line 601
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 601);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-price-";
            // line 603
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 603);
            echo "\">";
            echo ($context["entry_show_price"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_price[";
            // line 605
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 605);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_price[";
            // line 606
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 606);
            echo "]\" id=\"input-product-price-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 606);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 607
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 607);
            echo "\"
                                                                                ";
            // line 608
            if ((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["module_ptcontrolpanel_product_price"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 608)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-cart-";
            // line 613
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 613);
            echo "\">";
            echo ($context["entry_show_cart"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_cart[";
            // line 615
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 615);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_cart[";
            // line 616
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 616);
            echo "]\" id=\"input-product-cart-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 616);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 617
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 617);
            echo "\"
                                                                                ";
            // line 618
            if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["module_ptcontrolpanel_product_cart"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 618)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-wishlist-";
            // line 623
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 623);
            echo "\">";
            echo ($context["entry_show_wishlist"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_wishlist[";
            // line 625
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 625);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_wishlist[";
            // line 626
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 626);
            echo "]\" id=\"input-product-wishlist-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 626);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 627
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 627);
            echo "\"
                                                                                ";
            // line 628
            if ((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["module_ptcontrolpanel_product_wishlist"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 628)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-compare-";
            // line 633
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 633);
            echo "\">";
            echo ($context["entry_show_compare"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_compare[";
            // line 635
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 635);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_compare[";
            // line 636
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 636);
            echo "]\" id=\"input-product-compare-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 636);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 637
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 637);
            echo "\"
                                                                                ";
            // line 638
            if ((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["module_ptcontrolpanel_product_compare"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 638)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-options-";
            // line 643
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 643);
            echo "\">";
            echo ($context["entry_show_options"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_options[";
            // line 645
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 645);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_options[";
            // line 646
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 646);
            echo "]\" id=\"input-product-options-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 646);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 647
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 647);
            echo "\"
                                                                                ";
            // line 648
            if ((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["module_ptcontrolpanel_product_options"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 648)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-category-";
            // line 652
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 652);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-price-";
            // line 654
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 654);
            echo "\">";
            echo ($context["entry_show_price"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_price[";
            // line 656
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 656);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_price[";
            // line 657
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 657);
            echo "]\" id=\"input-category-price-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 657);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 658
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 658);
            echo "\"
                                                                                ";
            // line 659
            if ((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = ($context["module_ptcontrolpanel_category_price"] ?? null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 659)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-cart-";
            // line 664
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 664);
            echo "\">";
            echo ($context["entry_show_cart"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_cart[";
            // line 666
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 666);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_cart[";
            // line 667
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 667);
            echo "]\" id=\"input-category-cart-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 667);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 668
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 668);
            echo "\"
                                                                                ";
            // line 669
            if ((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["module_ptcontrolpanel_category_cart"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 669)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-wishlist-";
            // line 674
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 674);
            echo "\">";
            echo ($context["entry_show_wishlist"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_wishlist[";
            // line 676
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 676);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_wishlist[";
            // line 677
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 677);
            echo "]\" id=\"input-category-wishlist-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 677);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 678
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 678);
            echo "\"
                                                                                ";
            // line 679
            if ((($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["module_ptcontrolpanel_category_wishlist"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 679)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-compare-";
            // line 684
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 684);
            echo "\">";
            echo ($context["entry_show_compare"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_compare[";
            // line 686
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 686);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_compare[";
            // line 687
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 687);
            echo "]\" id=\"input-category-compare-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 687);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 688
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 688);
            echo "\"
                                                                                ";
            // line 689
            if ((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["module_ptcontrolpanel_category_compare"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 689)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-prodes-";
            // line 694
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 694);
            echo "\">";
            echo ($context["entry_product_des"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_prodes[";
            // line 696
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 696);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_prodes[";
            // line 697
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 697);
            echo "]\" id=\"input-category-prodes-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 697);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 698
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 698);
            echo "\"
                                                                                ";
            // line 699
            if ((($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = ($context["module_ptcontrolpanel_category_prodes"] ?? null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 699)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-label-";
            // line 704
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 704);
            echo "\">";
            echo ($context["entry_label"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_label[";
            // line 706
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 706);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_label[";
            // line 707
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 707);
            echo "]\" id=\"input-category-label-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 707);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 708
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 708);
            echo "\"
                                                                                ";
            // line 709
            if ((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["module_ptcontrolpanel_category_label"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 709)] ?? null) : null)) {
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
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 716
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-advance\">
                                                ";
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 720
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 720);
            echo "\">
                                                        <div class=\"form-group\" >
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 722
            echo ($context["entry_theme_database"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-sm-6\">
                                                                        <select id=\"input-theme\" class=\"form-control\" name=\"file\">
                                                                            ";
            // line 727
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["database"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 728
                echo "                                                                                <option value=\"";
                echo $context["key"];
                echo "\">";
                echo $context["value"];
                echo "</option>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 730
            echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-sm-6\">
                                                                        <button type=\"button\" id=\"button-import\" class=\"btn btn-primary btn-theme-option\"><i class=\"fa fa-upload\"></i> ";
            // line 733
            echo ($context["button_import"] ?? null);
            echo "</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 740
            echo ($context["entry_custom_css"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <textarea class=\"form-control code-area\" rows=\"15\" name=\"module_ptcontrolpanel_custom_css[";
            // line 742
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 742);
            echo "]\">";
            echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["module_ptcontrolpanel_custom_css"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 742)] ?? null) : null);
            echo "</textarea>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 747
            echo ($context["entry_custom_js"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <textarea class=\"form-control code-area\" rows=\"15\" name=\"module_ptcontrolpanel_custom_js[";
            // line 749
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 749);
            echo "]\">";
            echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["module_ptcontrolpanel_custom_js"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 749)] ?? null) : null);
            echo "</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        echo "                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"body-stylesheet-link\"></div>
<div class=\"heading-stylesheet-link\"></div>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.frm-field').hide();
        \$('.frm-field-0').show();

        \$('#input-store').change(function () {
            \$('.frm-field').hide();
            var store = \$(this).val();
            \$('.frm-field-' + store).show();
        })


        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });

        ";
        // line 789
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 790
            echo "            /* Body */
            var body_font_css_link_";
            // line 791
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 791);
            echo " = \$('#body-font-family-link-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 791);
            echo "').val();
            var body_font_stylesheet_link_";
            // line 792
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 792);
            echo " = '<link href=\"' + body_font_css_link_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 792);
            echo " + '\" rel=\"stylesheet\">';
            var body_family_";
            // line 793
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 793);
            echo " =  \$('#body-font-family-name-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 793);
            echo "').val();
            var body_category_";
            // line 794
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 794);
            echo " =  \$('#body-font-family-cate-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 794);
            echo "').val();
            var body_font_weight";
            // line 795
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 795);
            echo " = \$('#body-font-weight-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 795);
            echo "').val();

            \$('.body-stylesheet-link').append(body_font_stylesheet_link_";
            // line 797
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 797);
            echo ");
            \$('.font-body-demo-";
            // line 798
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 798);
            echo "').css(\"font-family\", \"'\" + body_family_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 798);
            echo " + \"', \" + body_category_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 798);
            echo ");
            \$('.font-body-demo-";
            // line 799
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 799);
            echo "').css(\"font-weight\", body_font_weight";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 799);
            echo ");

            /* Heading */
            var heading_font_css_link_";
            // line 802
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 802);
            echo " = \$('#heading-font-family-link-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 802);
            echo "').val();
            var heading_font_stylesheet_link_";
            // line 803
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 803);
            echo " = '<link href=\"' + heading_font_css_link_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 803);
            echo " + '\" rel=\"stylesheet\">';
            var heading_family_";
            // line 804
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 804);
            echo " =  \$('#heading-font-family-name-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 804);
            echo "').val();
            var heading_category_";
            // line 805
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 805);
            echo " =  \$('#heading-font-family-cate-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 805);
            echo "').val();
            var heading_font_weight";
            // line 806
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 806);
            echo " = \$('#heading-font-weight-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 806);
            echo "').val();

            \$('.heading-stylesheet-link').append(heading_font_stylesheet_link_";
            // line 808
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 808);
            echo ");
            \$('.font-heading-demo-";
            // line 809
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 809);
            echo "').css(\"font-family\", \"'\" + heading_family_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 809);
            echo " + \"', \" + heading_category_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 809);
            echo ");
            \$('.font-heading-demo-";
            // line 810
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 810);
            echo "').css(\"font-weight\", heading_font_weight";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 810);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 812
        echo "    });

    function chooseBodyFont(id, store_id) {
        var family = \$(\"#body-font-\" + id).data('family');
        var family_val = \$(\"#body-font-\" + id).data('family-val');
        var variants = \$(\"#body-font-\" + id).data('variants');
        var subsets = \$(\"#body-font-\" + id).data('subsets');
        var category = \$(\"#body-font-\" + id).data('category');

        var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + \":\" + variants + '&subset=' + subsets;
        var font_stylesheet_link = '<link href=\"' + font_css_link + '\" rel=\"stylesheet\">';

        \$('.body-stylesheet-link').append(font_stylesheet_link);

        \$('#body-font-family-name-' + store_id).val(family);
        \$('#body-font-family-cate-' + store_id).val(category);
        \$('#body-font-family-link-' + store_id).val(font_css_link);

        \$('.font-body-demo-' + store_id).css(\"font-family\", \"'\" + family + \"', \" + category);
    }

    function chooseBodyWeight(value, store_id) {
        \$('.font-body-demo-' + store_id).css(\"font-weight\", value);
    }

    function chooseHeadingFont(id, store_id) {
        var family = \$(\"#heading-font-\" + id).data('family');
        var family_val = \$(\"#heading-font-\" + id).data('family-val');
        var variants = \$(\"#heading-font-\" + id).data('variants');
        var subsets = \$(\"#heading-font-\" + id).data('subsets');
        var category = \$(\"#heading-font-\" + id).data('category');

        var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + \":\" + variants + '&subset=' + subsets;
        var font_stylesheet_link = '<link href=\"' + font_css_link + '\" rel=\"stylesheet\">';

        \$('.heading-stylesheet-link').append(font_stylesheet_link);

        \$('#heading-font-family-name-' + store_id).val(family);
        \$('#heading-font-family-cate-' + store_id).val(category);
        \$('#heading-font-family-link-' + store_id).val(font_css_link);

        \$('.font-heading-demo-' + store_id).css(\"font-family\", \"'\" + family + \"', \" + category);
    }

    function chooseHeadingWeight(value, store_id) {
        \$('.font-heading-demo-' + store_id).css(\"font-weight\", value);
    }
</script>

<script type=\"text/javascript\"><!--
    \$('#button-import').on('click', function() {

        \$('#form-data input[name=\\'file\\']').val(\$('#input-theme').val());

        \$('#form-data').submit();
    });
    //--></script>
";
        // line 869
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "plaza/module/ptcontrolpanel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2668 => 869,  2609 => 812,  2599 => 810,  2591 => 809,  2587 => 808,  2580 => 806,  2574 => 805,  2568 => 804,  2562 => 803,  2556 => 802,  2548 => 799,  2540 => 798,  2536 => 797,  2529 => 795,  2523 => 794,  2517 => 793,  2511 => 792,  2505 => 791,  2502 => 790,  2498 => 789,  2461 => 754,  2448 => 749,  2443 => 747,  2433 => 742,  2428 => 740,  2418 => 733,  2413 => 730,  2402 => 728,  2398 => 727,  2390 => 722,  2384 => 720,  2380 => 719,  2375 => 716,  2358 => 709,  2350 => 708,  2344 => 707,  2340 => 706,  2333 => 704,  2321 => 699,  2313 => 698,  2307 => 697,  2303 => 696,  2296 => 694,  2284 => 689,  2276 => 688,  2270 => 687,  2266 => 686,  2259 => 684,  2247 => 679,  2239 => 678,  2233 => 677,  2229 => 676,  2222 => 674,  2210 => 669,  2202 => 668,  2196 => 667,  2192 => 666,  2185 => 664,  2173 => 659,  2165 => 658,  2159 => 657,  2155 => 656,  2148 => 654,  2143 => 652,  2132 => 648,  2124 => 647,  2118 => 646,  2114 => 645,  2107 => 643,  2095 => 638,  2087 => 637,  2081 => 636,  2077 => 635,  2070 => 633,  2058 => 628,  2050 => 627,  2044 => 626,  2040 => 625,  2033 => 623,  2021 => 618,  2013 => 617,  2007 => 616,  2003 => 615,  1996 => 613,  1984 => 608,  1976 => 607,  1970 => 606,  1966 => 605,  1959 => 603,  1954 => 601,  1942 => 596,  1934 => 595,  1928 => 594,  1924 => 593,  1917 => 591,  1905 => 586,  1897 => 585,  1891 => 584,  1887 => 583,  1880 => 581,  1875 => 579,  1866 => 575,  1860 => 574,  1854 => 573,  1848 => 571,  1844 => 570,  1839 => 567,  1824 => 560,  1818 => 559,  1812 => 558,  1806 => 557,  1799 => 555,  1787 => 550,  1779 => 549,  1773 => 548,  1766 => 546,  1755 => 542,  1747 => 541,  1741 => 540,  1737 => 539,  1730 => 537,  1718 => 532,  1708 => 529,  1703 => 527,  1691 => 522,  1683 => 521,  1675 => 520,  1669 => 519,  1662 => 517,  1650 => 512,  1642 => 511,  1636 => 510,  1632 => 509,  1625 => 507,  1612 => 501,  1604 => 500,  1600 => 499,  1595 => 497,  1586 => 495,  1578 => 494,  1572 => 493,  1568 => 492,  1561 => 490,  1549 => 485,  1541 => 484,  1535 => 483,  1531 => 482,  1524 => 480,  1512 => 475,  1504 => 474,  1498 => 473,  1494 => 472,  1487 => 470,  1475 => 465,  1467 => 464,  1461 => 463,  1457 => 462,  1450 => 460,  1444 => 458,  1440 => 457,  1435 => 454,  1425 => 449,  1419 => 448,  1407 => 446,  1404 => 445,  1400 => 444,  1394 => 443,  1387 => 441,  1375 => 436,  1365 => 433,  1358 => 431,  1346 => 426,  1338 => 425,  1332 => 424,  1328 => 423,  1321 => 421,  1309 => 416,  1301 => 415,  1295 => 414,  1291 => 413,  1284 => 411,  1271 => 407,  1264 => 405,  1251 => 399,  1243 => 398,  1237 => 397,  1230 => 395,  1218 => 390,  1210 => 389,  1204 => 388,  1200 => 387,  1193 => 385,  1181 => 380,  1173 => 379,  1167 => 378,  1163 => 377,  1156 => 375,  1144 => 370,  1136 => 369,  1130 => 368,  1126 => 367,  1119 => 365,  1107 => 360,  1099 => 359,  1093 => 358,  1089 => 357,  1082 => 355,  1070 => 350,  1062 => 349,  1056 => 348,  1052 => 347,  1045 => 345,  1039 => 343,  1035 => 342,  1028 => 338,  1023 => 337,  1008 => 330,  1003 => 328,  993 => 323,  988 => 321,  978 => 316,  973 => 314,  963 => 309,  958 => 307,  953 => 305,  941 => 298,  936 => 296,  931 => 294,  919 => 287,  914 => 285,  903 => 279,  897 => 278,  891 => 277,  885 => 276,  879 => 275,  871 => 274,  866 => 272,  855 => 268,  847 => 267,  839 => 266,  827 => 263,  821 => 259,  812 => 256,  804 => 255,  795 => 254,  788 => 253,  784 => 252,  776 => 251,  770 => 250,  765 => 248,  755 => 241,  748 => 237,  738 => 232,  733 => 230,  723 => 225,  718 => 223,  707 => 217,  701 => 216,  695 => 215,  689 => 214,  683 => 213,  675 => 212,  670 => 210,  660 => 205,  655 => 203,  644 => 199,  636 => 198,  628 => 197,  616 => 194,  611 => 191,  602 => 188,  594 => 187,  585 => 186,  578 => 185,  574 => 184,  566 => 183,  560 => 182,  555 => 180,  545 => 173,  538 => 169,  529 => 165,  523 => 164,  517 => 163,  511 => 162,  505 => 160,  501 => 159,  496 => 156,  481 => 151,  475 => 150,  470 => 148,  458 => 143,  452 => 142,  448 => 141,  444 => 140,  439 => 138,  427 => 133,  421 => 132,  417 => 131,  413 => 130,  408 => 128,  396 => 123,  390 => 122,  386 => 121,  382 => 120,  377 => 118,  364 => 112,  356 => 111,  352 => 110,  347 => 108,  334 => 102,  326 => 101,  318 => 100,  310 => 99,  306 => 98,  301 => 96,  295 => 94,  291 => 93,  284 => 89,  278 => 86,  270 => 81,  266 => 80,  262 => 79,  258 => 78,  254 => 77,  250 => 76,  242 => 70,  227 => 68,  223 => 67,  217 => 64,  207 => 56,  201 => 55,  198 => 54,  186 => 52,  181 => 49,  166 => 47,  162 => 46,  154 => 45,  144 => 44,  137 => 43,  134 => 42,  129 => 41,  127 => 40,  121 => 37,  114 => 32,  106 => 28,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/ptcontrolpanel.twig", "");
    }
}
