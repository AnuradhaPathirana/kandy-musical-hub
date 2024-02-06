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

/* tt_rozer1/template/product/category.twig */
class __TwigTemplate_738d4bc8fe954b41f678798cffb3890b1c14de3673f7096e4e6b856dd8993ed3 extends \Twig\Template
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
        echo "
<div id=\"product-category\" class=\"container layer-category\">
    <div class=\"show-sidebar hidden-lg hidden-md\">
\t\t<i class=\"fa fa-filter\"></i>
\t\t<i class=\"ion-android-close\"></i>
\t</div>
\t<div class=\"layered-navigation-block\"></div>
    <div class=\"ajax-loader\">
        <img src=\"";
        // line 9
        echo ($context["loader_img"] ?? null);
        echo "\" alt=\"\" />
    </div>
    
    <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "        ";
        }
        // line 20
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t</ul>
\t\t\t";
        // line 26
        if ((($context["show_cate_img"] ?? null) && ($context["thumb"] ?? null))) {
            // line 27
            echo "\t\t\t\t<div class=\"category-image\"><img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
\t\t\t";
        }
        // line 29
        echo "\t\t\t<h1>";
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t";
        // line 30
        if ((($context["show_cate_des"] ?? null) && ($context["description"] ?? null))) {
            // line 31
            echo "\t\t\t\t<div >";
            echo ($context["description"] ?? null);
            echo "</div>
\t\t\t\t<hr>
\t\t\t";
        }
        // line 34
        echo "\t\t\t\t
\t\t\t
\t\t\t
            ";
        // line 37
        if ((($context["show_cate_sub"] ?? null) && ($context["categories"] ?? null))) {
            // line 38
            echo "                <p class=\"text-refine\">";
            echo ($context["text_refine"] ?? null);
            echo "</p>
                ";
            // line 39
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 40
                echo "                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <ul>
                                ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    echo "                                    <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            </ul>
                        </div>
                    </div>
                ";
            } else {
                // line 50
                echo "                    <div class=\"row\">
                        ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 52
                    echo "                            <div class=\"col-sm-3\">
                                <ul>
                                    ";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 55
                        echo "                                        <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 55);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 55);
                        echo "</a></li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "                                </ul>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                    </div>
                    <br />
                ";
            }
            // line 63
            echo "            ";
        }
        // line 64
        echo "            <div class=\"custom-category\">
                ";
        // line 65
        if (($context["products"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t<div class=\"tool-bar\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t";
            // line 70
            if (($context["use_advance_view"] ?? null)) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 1, 'btn-grid-1')\" class=\"btn btn-default btn-custom-view btn-grid-1\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"1\">1</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 2, 'btn-grid-2')\" class=\"btn btn-default btn-custom-view btn-grid-2\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"2\">2</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 3, 'btn-grid-3')\" class=\"btn btn-default btn-custom-view btn-grid-3\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"3\">3</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 4, 'btn-grid-4')\" class=\"btn btn-default btn-custom-view btn-grid-4\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"4\">4</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 5, 'btn-grid-5')\" class=\"btn btn-default btn-custom-view btn-grid-5\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"5\">5</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('list', 0, 'btn-list')\" class=\"btn btn-default btn-custom-view btn-list\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 76
                echo ($context["button_list"] ?? null);
                echo "\"></button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"category-view-type\" value=\"";
                // line 77
                echo ($context["advance_default_view"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"category-grid-cols\" value=\"";
                // line 78
                echo ($context["product_p_row"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 81
                echo ($context["button_list"] ?? null);
                echo "\"></button>
\t\t\t\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\"><a href=\"";
            // line 86
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t";
            // line 90
            if (($context["use_filter"] ?? null)) {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
                echo ($context["text_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"ptfilter.filter(this.value);\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt_sorts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 94) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 95);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 95);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 97);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 97);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
                echo ($context["text_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 105) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 106);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 106);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 108);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 108);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t";
            // line 117
            if (($context["use_filter"] ?? null)) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
                echo ($context["text_limit"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"ptfilter.filter(this.value);\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt_limits"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 121) == ($context["limit"] ?? null))) {
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 122);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 122);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 124);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 124);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 126
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
                echo ($context["text_limit"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 132) == ($context["limit"] ?? null))) {
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 133);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 133);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 135);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 135);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"row\">
                        ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 146
                echo "                            <div class=\"product-layout product-list col-xs-12 product-items\">
                                <div class=\"product-thumb\">
\t\t\t\t\t\t\t\t\t<div class=\"product-item\">\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 150
                if ((($context["image_effect"] ?? null) == "swatches")) {
                    // line 151
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image swatches-image-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 154);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 155);
                    echo "\"  alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t class=\"img-responsive img-cate-";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 157);
                    echo "\" class=\"img-default-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "swatches_images", [], "any", false, false, false, 158)) {
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "swatches_images", [], "any", false, false, false, 159));
                        foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                            // line 160
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 160);
                            echo "\" class=\"img-swatch-";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 160);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 164
                    if ((($context["image_effect"] ?? null) == "swatches")) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 165)) {
                            // line 166
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"category-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 167
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 167));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                // line 168
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 169
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 169));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 170
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeSwatchInCategory(\$(this));\" title=\"";
                                    // line 171
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 171);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                    // line 172
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 172)) {
                                        echo " width: ";
                                        echo ($context["icon_swatches_width"] ?? null);
                                        echo "px; height: ";
                                        echo ($context["icon_swatches_height"] ?? null);
                                        echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                        // line 173
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 173);
                                        echo "') ";
                                    }
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                                    // line 174
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                    // line 175
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 175);
                                    echo "\">";
                                    if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 175)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 175);
                                        echo " ";
                                    }
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 178
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 184
                    if (($context["use_quick_view"] ?? null)) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-quickview\" type=\"button\"  title=\"";
                        echo ($context["button_quickview"] ?? null);
                        echo "\" onclick=\"ptquickview.ajaxView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 185);
                        echo "')\"><span>";
                        echo ($context["button_quickview"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image rotate-image-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 194);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 195);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                    echo "\" class=\"img-responsive img-default-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 196
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 196)) {
                        // line 197
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 197);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 197);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 197);
                        echo "\" class=\"img-responsive img-rotate-image\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 200
                    if (($context["show_cate_label"] ?? null)) {
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 202
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                            echo ($context["text_new"] ?? null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 205
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["use_quick_view"] ?? null)) {
                        // line 208
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-quickview\" type=\"button\"  title=\"";
                        echo ($context["button_quickview"] ?? null);
                        echo "\" onclick=\"ptquickview.ajaxView('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 208);
                        echo "')\"><span>";
                        echo ($context["button_quickview"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 217
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 217)) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer_href", [], "any", false, false, false, 219);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 219);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 222);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 222);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 223
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 223)) {
                    // line 224
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 225
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 226) < $context["i"])) {
                            // line 227
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 229
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 231
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 232
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 235
                if ((($context["show_cate_price"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 235))) {
                    // line 236
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 236)) {
                        // line 237
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 237);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 238
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 238);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 238);
                        echo "</span> ";
                    }
                    // line 239
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 239)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 239);
                        echo "</span> ";
                    }
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 239)) {
                        // line 240
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pro-label sale\">";
                        echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 240)) . "%");
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 241
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 243
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 244
                if (($context["show_cate_cart"] ?? null)) {
                    // line 245
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                    // line 246
                    echo ($context["button_cart"] ?? null);
                    echo "\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 246);
                    echo "', '";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 246);
                    echo "');\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["show_cate_prodes"] ?? null)) {
                    // line 250
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 250);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 252
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((((($context["show_cate_wishlist"] ?? null) || ($context["show_cate_cart"] ?? null)) || ($context["show_cate_compare"] ?? null)) || ($context["use_quick_view"] ?? null))) {
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 255
                    if (($context["show_cate_cart"] ?? null)) {
                        // line 256
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                        echo ($context["button_cart"] ?? null);
                        echo "\" onclick=\"cart.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 256);
                        echo "', '";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 256);
                        echo "');\"><span>";
                        echo ($context["button_cart"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 258
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["show_cate_wishlist"] ?? null)) {
                        // line 259
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-wishlist\"  title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 259);
                        echo "');\"><span>";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 261
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["show_cate_compare"] ?? null)) {
                        // line 262
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-compare\"  title=\"";
                        echo ($context["button_compare"] ?? null);
                        echo "\" onclick=\"compare.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 262);
                        echo "');\"><span>";
                        echo ($context["button_compare"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box-list\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-available\">";
                // line 272
                echo ($context["text_stock"] ?? null);
                echo "<span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 272);
                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 273
                if ((($context["show_cate_price"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 273))) {
                    // line 274
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 274)) {
                        // line 275
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 275);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 276
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 276);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 276);
                        echo "</span> ";
                    }
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 277)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 277);
                        echo "</span> ";
                    }
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 277)) {
                        // line 278
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pro-label sale\">";
                        echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 278)) . "%");
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 279
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-cart-list\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                    </div>
\t\t\t\t\t<div class=\"tool-bar-bottom\">
\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t";
            // line 291
            if (($context["use_filter"] ?? null)) {
                // line 292
                echo "\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left ajax_pagination\">";
                echo ($context["pt_pagination"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t";
            } else {
                // line 294
                echo "\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 296
            echo "\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                ";
        }
        // line 300
        echo "                ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 301
            echo "                    <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    <div class=\"buttons\">
                        <div class=\"pull-right\"><a href=\"";
            // line 303
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
                    </div>
                ";
        }
        // line 306
        echo "            </div>
            ";
        // line 307
        echo ($context["content_bottom"] ?? null);
        echo "
        </div>
        ";
        // line 309
        echo ($context["column_right"] ?? null);
        echo "
    </div>
\t<script >
        \$(document).ready(function() {
\t\t\t\$('.show-sidebar').click(function () {
\t\t\t\tif(\$(this).hasClass('opened')) {
\t\t\t\t\t\$(this).removeClass('opened');
\t\t\t\t} else {
\t\t\t\t\t\$(this).addClass('opened');
\t\t\t\t}
\t\t\t\t\$('.layer-category #column-left,.layer-category #column-right').toggle();
\t\t\t});
        });
    </script>
</div>
";
        // line 324
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  981 => 324,  963 => 309,  958 => 307,  955 => 306,  947 => 303,  941 => 301,  938 => 300,  930 => 296,  924 => 294,  918 => 292,  916 => 291,  911 => 288,  899 => 281,  895 => 279,  889 => 278,  878 => 277,  871 => 276,  865 => 275,  862 => 274,  860 => 273,  854 => 272,  847 => 267,  842 => 264,  832 => 262,  829 => 261,  819 => 259,  816 => 258,  804 => 256,  802 => 255,  798 => 253,  795 => 252,  789 => 250,  786 => 249,  774 => 246,  771 => 245,  769 => 244,  766 => 243,  762 => 241,  756 => 240,  745 => 239,  738 => 238,  732 => 237,  729 => 236,  727 => 235,  724 => 234,  720 => 232,  714 => 231,  710 => 229,  706 => 227,  703 => 226,  699 => 225,  696 => 224,  694 => 223,  687 => 222,  679 => 219,  676 => 218,  674 => 217,  669 => 214,  663 => 210,  653 => 208,  650 => 207,  646 => 205,  640 => 203,  638 => 202,  635 => 201,  633 => 200,  630 => 199,  620 => 197,  618 => 196,  610 => 195,  606 => 194,  601 => 191,  595 => 187,  585 => 185,  583 => 184,  580 => 183,  577 => 182,  573 => 180,  566 => 178,  551 => 175,  547 => 174,  541 => 173,  533 => 172,  529 => 171,  526 => 170,  522 => 169,  519 => 168,  515 => 167,  512 => 166,  509 => 165,  507 => 164,  504 => 163,  501 => 162,  488 => 160,  483 => 159,  481 => 158,  475 => 157,  471 => 156,  463 => 155,  459 => 154,  454 => 151,  452 => 150,  446 => 146,  442 => 145,  435 => 140,  431 => 138,  425 => 137,  417 => 135,  409 => 133,  406 => 132,  402 => 131,  396 => 129,  392 => 127,  386 => 126,  378 => 124,  370 => 122,  367 => 121,  363 => 120,  357 => 118,  355 => 117,  349 => 113,  345 => 111,  339 => 110,  331 => 108,  323 => 106,  320 => 105,  316 => 104,  310 => 102,  306 => 100,  300 => 99,  292 => 97,  284 => 95,  281 => 94,  277 => 93,  271 => 91,  269 => 90,  260 => 86,  255 => 83,  250 => 81,  245 => 80,  240 => 78,  236 => 77,  232 => 76,  225 => 71,  223 => 70,  217 => 66,  215 => 65,  212 => 64,  209 => 63,  204 => 60,  196 => 57,  185 => 55,  181 => 54,  177 => 52,  173 => 51,  170 => 50,  164 => 46,  153 => 44,  149 => 43,  144 => 40,  142 => 39,  137 => 38,  135 => 37,  130 => 34,  123 => 31,  121 => 30,  116 => 29,  106 => 27,  104 => 26,  101 => 25,  90 => 23,  86 => 22,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  58 => 13,  54 => 12,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/product/category.twig", "");
    }
}
