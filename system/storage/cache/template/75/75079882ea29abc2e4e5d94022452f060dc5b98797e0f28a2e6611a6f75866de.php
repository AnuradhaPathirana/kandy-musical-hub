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

/* plaza/slider/list.twig */
class __TwigTemplate_912cb537d1e9da9408d6a67549c2fbad53567d47e26b8d836211960d9752d106 extends \Twig\Template
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
            <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["insert"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\" onclick=\"\$('#form-slider').attr('action', '";
        echo ($context["copy"] ?? null);
        echo "').submit()\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-slider').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 34
        echo ($context["text_dashboard_menu"] ?? null);
        echo "</h3>
                        </div>
                        <ul class=\"nav nav-tabs menu-sections pt-dashboard-menu\">
                            ";
        // line 37
        $context["i"] = 0;
        // line 38
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plaza_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 39
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 39)) {
                // line 40
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 40)) {
                    echo " class=\"active\" ";
                }
                echo ">
                                        <a href=\"#ptcollapse_";
                // line 41
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent ";
                if ( !twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 41)) {
                    echo " collapsed ";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 41);
                echo "</a>
                                        <ul id=\"ptcollapse_";
                // line 42
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 42)) {
                    echo " in ";
                }
                echo "\">
                                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 44
                    echo "                                                <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 44)) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 44);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                                        </ul>
                                    </li>
                                ";
            } else {
                // line 49
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 49)) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 49);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 49);
                echo "</a></li>
                                ";
            }
            // line 51
            echo "                                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 52
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 61
        echo ($context["text_slider_list"] ?? null);
        echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form action=\"";
        // line 64
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-slider\" class=\"form-horizontal\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover\">
                                        <thead>
                                        <tr>
                                            <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                            <td class=\"text-left\">";
        // line 70
        echo ($context["column_name"] ?? null);
        echo "</td>
                                            <td class=\"text-center\" width=\"200px\">";
        // line 71
        echo ($context["column_status"] ?? null);
        echo "</td>
                                            <td class=\"text-right\" width=\"100px\">";
        // line 72
        echo ($context["column_action"] ?? null);
        echo "</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 76
        if (($context["ptsliders"] ?? null)) {
            // line 77
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ptsliders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ptslider"]) {
                // line 78
                echo "                                                <tr>
                                                    <td class=\"text-center\"> ";
                // line 79
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["ptslider"], "ptslider_id", [], "any", false, false, false, 79), ($context["selected"] ?? null))) {
                    // line 80
                    echo "                                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ptslider"], "ptslider_id", [], "any", false, false, false, 80);
                    echo "\" checked=\"checked\" />
                                                        ";
                } else {
                    // line 82
                    echo "                                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ptslider"], "ptslider_id", [], "any", false, false, false, 82);
                    echo "\" />
                                                        ";
                }
                // line 83
                echo " </td>
                                                    <td class=\"text-left\">";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["ptslider"], "name", [], "any", false, false, false, 84);
                echo "</td>
                                                    <td class=\"text-center\"><span class=\"item-status ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["ptslider"], "status", [], "any", false, false, false, 85)) {
                    echo "enabled";
                } else {
                    echo "disabled";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ptslider"], "status_text", [], "any", false, false, false, 85);
                echo "</span></td>
                                                    <td class=\"text-right\"><a href=\"";
                // line 86
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["ptslider"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["action"] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit_slider"] ?? null);
                echo "\" class=\"btn btn-theme-option\"><i class=\"fa fa-cog\"></i></a></td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ptslider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                        ";
        } else {
            // line 90
            echo "                                            <tr>
                                                <td class=\"text-center\" colspan=\"4\">";
            // line 91
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                            </tr>
                                        ";
        }
        // line 94
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <div class=\"row theme-option-pagination\">
                                <div class=\"col-sm-6 text-left\">";
        // line 99
        echo ($context["pagination"] ?? null);
        echo "</div>
                                <div class=\"col-sm-6 text-right\">";
        // line 100
        echo ($context["results"] ?? null);
        echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 109
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/slider/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 109,  320 => 100,  316 => 99,  309 => 94,  303 => 91,  300 => 90,  297 => 89,  286 => 86,  276 => 85,  272 => 84,  269 => 83,  263 => 82,  257 => 80,  255 => 79,  252 => 78,  247 => 77,  245 => 76,  238 => 72,  234 => 71,  230 => 70,  221 => 64,  215 => 61,  205 => 53,  199 => 52,  196 => 51,  184 => 49,  179 => 46,  164 => 44,  160 => 43,  152 => 42,  142 => 41,  135 => 40,  132 => 39,  127 => 38,  125 => 37,  119 => 34,  112 => 29,  104 => 25,  101 => 24,  93 => 20,  91 => 19,  84 => 14,  73 => 12,  69 => 11,  64 => 9,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/slider/list.twig", "");
    }
}
