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

/* tt_rozer1/template/product/manufacturer_info.twig */
class __TwigTemplate_4f8723cea79dac357770f9b2a30093c6ab7b1bd515536bcbcccbf602571d1d28 extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 18
        if (($context["products"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"tool-bar\">  
\t\t  <div class=\"row\">
\t\t\t<div class=\"col-md-2 col-sm-6 col-xs-6\">
\t\t\t  <div class=\"btn-group btn-group-sm\">
\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 23
            echo ($context["button_grid"] ?? null);
            echo "\"></button>
\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 24
            echo ($context["button_list"] ?? null);
            echo "\"></button>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6\">
\t\t\t  <div class=\"form-group\"> <a href=\"";
            // line 28
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a> </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t  <div class=\"form-group input-group input-group-sm\">
\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
            // line 32
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t  
\t\t\t\t  ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 36
                echo "\t\t\t\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 36) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 37
                    echo "\t\t\t\t  
\t\t\t\t  <option value=\"";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 38);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 38);
                    echo "</option>
\t\t\t\t  
\t\t\t\t  ";
                } else {
                    // line 41
                    echo "\t\t\t\t  
\t\t\t\t  <option value=\"";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 42);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 42);
                    echo "</option>
\t\t\t\t  
\t\t\t\t  ";
                }
                // line 45
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t  <div class=\"form-group input-group input-group-sm\">
\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 52
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t  
\t\t\t\t  ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 56
                echo "\t\t\t\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 56) == ($context["limit"] ?? null))) {
                    // line 57
                    echo "\t\t\t\t  
\t\t\t\t  <option value=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 58);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 58);
                    echo "</option>
\t\t\t\t  
\t\t\t\t  ";
                } else {
                    // line 61
                    echo "\t\t\t\t  
\t\t\t\t  <option value=\"";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 62);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 62);
                    echo "</option>
\t\t\t\t  
\t\t\t\t  ";
                }
                // line 65
                echo "\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t\t
\t\t\t\t</select>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t</div>\t
\t\t<div class=\"row\">
\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 74
                echo "\t\t\t\t<div class=\"product-layout product-list col-xs-12 product-items\">
\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<div class=\"product-item\">\t
\t\t\t\t\t\t\t<div class=\"image rotate-image-container\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                echo "\" class=\"img-responsive img-default-image\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 82);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                    echo "\" class=\"img-responsive img-rotate-image\" />
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<button class=\"button-quickview\" type=\"button\"  title=\"";
                // line 85
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ptquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 85);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t";
                // line 90
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer_href", [], "any", false, false, false, 92);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 92);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 99) < $context["i"])) {
                            // line 100
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 102
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 109)) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 110);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 111
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 111);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 111);
                        echo "</span> ";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 112)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 112);
                        echo "</span> ";
                    }
                    echo " </p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box-cart\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                // line 116
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 116);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 116);
                echo "');\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"product-description\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 118);
                echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                // line 121
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 121);
                echo "');\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-wishlist\"  title=\"";
                // line 122
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-compare\"  title=\"";
                // line 123
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box-list\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<p class=\"text-available\">";
                // line 131
                echo ($context["text_stock"] ?? null);
                echo "<span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 131);
                echo "</span></p>
\t\t\t\t\t\t\t\t\t";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 133)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 135
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 135);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 135);
                        echo "</span> ";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 136)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 136);
                        echo "</span> ";
                    }
                    echo " </p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t\t\t\t<div class=\"box-cart-list\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "\t\t</div>
\t\t<div class=\"tool-bar-bottom\">
\t\t  <div class=\"row\">
\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 148
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 149
            echo ($context["results"] ?? null);
            echo "</div>
\t\t  </div>
\t\t</div>
      ";
        } else {
            // line 153
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 155
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 158
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 159
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 161
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 161,  493 => 159,  488 => 158,  480 => 155,  474 => 153,  467 => 149,  463 => 148,  458 => 145,  446 => 138,  434 => 136,  427 => 135,  421 => 134,  418 => 133,  416 => 132,  410 => 131,  395 => 123,  387 => 122,  377 => 121,  371 => 118,  360 => 116,  356 => 114,  344 => 112,  337 => 111,  331 => 110,  328 => 109,  326 => 108,  323 => 107,  319 => 105,  313 => 104,  309 => 102,  305 => 100,  302 => 99,  298 => 98,  295 => 97,  293 => 96,  286 => 95,  278 => 92,  275 => 91,  273 => 90,  261 => 85,  258 => 84,  248 => 82,  246 => 81,  238 => 80,  234 => 79,  227 => 74,  223 => 73,  214 => 66,  208 => 65,  200 => 62,  197 => 61,  189 => 58,  186 => 57,  183 => 56,  179 => 55,  173 => 52,  165 => 46,  159 => 45,  151 => 42,  148 => 41,  140 => 38,  137 => 37,  134 => 36,  130 => 35,  124 => 32,  115 => 28,  108 => 24,  104 => 23,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/product/manufacturer_info.twig", "");
    }
}
