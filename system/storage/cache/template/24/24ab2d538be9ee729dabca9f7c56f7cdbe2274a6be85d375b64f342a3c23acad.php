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

/* plaza/featuredcate/list.twig */
class __TwigTemplate_e19a010086f77df5b7849ecc45c874b2fd3b82133f7c7fcc1445348cc1f4b0b2 extends \Twig\Template
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
            <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb theme-option-breadcrumb\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 19
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 20
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        ";
        if (($context["information"] ?? null)) {
            // line 25
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["information"] ?? null);
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
                            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 61
        echo ($context["text_list"] ?? null);
        echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <td class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 68
        if ((($context["sort"] ?? null) == "name")) {
            // line 69
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 71
            echo "                                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                            ";
        }
        // line 72
        echo "</td>
                                        <td class=\"text-center\">";
        // line 73
        echo ($context["column_featured"] ?? null);
        echo "</td>
                                        <td class=\"text-center\">";
        // line 74
        echo ($context["column_secondary"] ?? null);
        echo "</td>
                                        <td class=\"text-center\">";
        // line 75
        echo ($context["column_alternative"] ?? null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 76
        echo ($context["column_action"] ?? null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 80
        if (($context["categories"] ?? null)) {
            // line 81
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 82
                echo "                                            <tr>
                                                <td class=\"text-left\">";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 83);
                echo "</td>
                                                <td class=\"text-center\">
                                                    ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "is_featured", [], "any", false, false, false, 85) == 1)) {
                    // line 86
                    echo "                                                        <span class=\"item-status enabled\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</span>
                                                    ";
                } else {
                    // line 88
                    echo "                                                        <span class=\"item-status disabled\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</span>
                                                    ";
                }
                // line 90
                echo "                                                </td>
                                                <td class=\"text-center\">";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                                                        <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 92);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 92);
                    echo "\" class=\"img-thumbnail\" />
                                                    ";
                } else {
                    // line 94
                    echo "                                                        <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                                    ";
                }
                // line 95
                echo "</td>
                                                <td class=\"text-center\">";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["category"], "alternative_image", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                                                        <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "alternative_image", [], "any", false, false, false, 97);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 97);
                    echo "\" class=\"img-thumbnail\" />
                                                    ";
                } else {
                    // line 99
                    echo "                                                        <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                                    ";
                }
                // line 100
                echo "</td>
                                                <td class=\"text-right\"><a href=\"";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 101);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i></a></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                                    ";
        } else {
            // line 105
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"4\">";
            // line 106
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 109
        echo "                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class=\"row theme-option-pagination\">
                        <div class=\"col-sm-6 text-left\">";
        // line 114
        echo ($context["pagination"] ?? null);
        echo "</div>
                        <div class=\"col-sm-6 text-right\">";
        // line 115
        echo ($context["results"] ?? null);
        echo "</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
        // line 123
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/featuredcate/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 123,  358 => 115,  354 => 114,  347 => 109,  341 => 106,  338 => 105,  335 => 104,  324 => 101,  321 => 100,  317 => 99,  309 => 97,  307 => 96,  304 => 95,  300 => 94,  292 => 92,  290 => 91,  287 => 90,  281 => 88,  275 => 86,  273 => 85,  268 => 83,  265 => 82,  260 => 81,  258 => 80,  251 => 76,  247 => 75,  243 => 74,  239 => 73,  236 => 72,  228 => 71,  218 => 69,  216 => 68,  206 => 61,  196 => 53,  190 => 52,  187 => 51,  175 => 49,  170 => 46,  155 => 44,  151 => 43,  143 => 42,  133 => 41,  126 => 40,  123 => 39,  118 => 38,  116 => 37,  110 => 34,  103 => 29,  95 => 25,  92 => 24,  84 => 20,  81 => 19,  73 => 15,  71 => 14,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/featuredcate/list.twig", "");
    }
}
