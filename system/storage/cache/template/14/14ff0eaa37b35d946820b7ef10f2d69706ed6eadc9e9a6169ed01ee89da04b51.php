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

/* plaza/ultimatemenu/list.twig */
class __TwigTemplate_2ec62bcf25fbcd05226c0e056b3a911c8710613dca032bcb1b0924bf7ad6c74b extends \Twig\Template
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
                <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" form=\"form-menu\" formaction=\"";
        // line 7
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-menu').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
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
                            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 60
        echo ($context["text_list"] ?? null);
        echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form action=\"";
        // line 63
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-menu\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover\">
                                        <thead>
                                        <tr>
                                            <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                            <td class=\"text-left\">";
        // line 69
        echo ($context["column_name"] ?? null);
        echo "</td>
                                            <td class=\"text-center\" width=\"200px\">";
        // line 70
        echo ($context["column_status"] ?? null);
        echo "</td>
                                            <td class=\"text-right\" width=\"100px\">";
        // line 71
        echo ($context["column_action"] ?? null);
        echo "</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 75
        if (($context["menu_list"] ?? null)) {
            // line 76
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 77
                echo "                                                <tr>
                                                    <td class=\"text-center\">
                                                        ";
                // line 79
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["menu"], "menu_id", [], "any", false, false, false, 79), ($context["selected"] ?? null))) {
                    // line 80
                    echo "                                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "menu_id", [], "any", false, false, false, 80);
                    echo "\" checked=\"checked\" />
                                                        ";
                } else {
                    // line 82
                    echo "                                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "menu_id", [], "any", false, false, false, 82);
                    echo "\" />
                                                        ";
                }
                // line 84
                echo "                                                    </td>
                                                    <td class=\"text-left\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 85);
                echo "</td>
                                                    <td class=\"text-center\"><span class=\"item-status ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "status", [], "any", false, false, false, 86)) {
                    echo "enabled";
                } else {
                    echo "disabled";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "status_text", [], "any", false, false, false, 86);
                echo "</span></td>
                                                    <td class=\"text-right\"><a href=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 87);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i></a></td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                                        ";
        } else {
            // line 91
            echo "                                            <tr>
                                                <td class=\"text-center\" colspan=\"8\">";
            // line 92
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                            </tr>
                                        ";
        }
        // line 95
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <div class=\"row theme-option-pagination\">
                                <div class=\"col-sm-6 text-left\">";
        // line 100
        echo ($context["pagination"] ?? null);
        echo "</div>
                                <div class=\"col-sm-6 text-right\">";
        // line 101
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
        // line 110
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/ultimatemenu/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 110,  317 => 101,  313 => 100,  306 => 95,  300 => 92,  297 => 91,  294 => 90,  283 => 87,  273 => 86,  269 => 85,  266 => 84,  260 => 82,  254 => 80,  252 => 79,  248 => 77,  243 => 76,  241 => 75,  234 => 71,  230 => 70,  226 => 69,  217 => 63,  211 => 60,  201 => 52,  195 => 51,  192 => 50,  180 => 48,  175 => 45,  160 => 43,  156 => 42,  148 => 41,  138 => 40,  131 => 39,  128 => 38,  123 => 37,  121 => 36,  115 => 33,  108 => 28,  100 => 24,  97 => 23,  89 => 19,  87 => 18,  81 => 14,  70 => 12,  66 => 11,  61 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/ultimatemenu/list.twig", "");
    }
}
