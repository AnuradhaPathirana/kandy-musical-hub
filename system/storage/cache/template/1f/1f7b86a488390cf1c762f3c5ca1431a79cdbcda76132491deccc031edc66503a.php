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

/* tt_rozer1/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_8227574801e313b05d848bd556816234ed44606eae8c8cbf18bd9cfa8ddbda94 extends \Twig\Template
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
        if ((($context["layout_type"] ?? null) == "grid")) {
            // line 2
            echo "    ";
            // line 3
            echo "\t<div class=\"grid-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 5
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 7
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 8
            if (($context["rotate_image"] ?? null)) {
                // line 9
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 11
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " swiper-lazy ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 12
            if (($context["swatches_images"] ?? null)) {
                // line 13
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 15
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 15);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 15);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 19
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 20
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 21
                if (($context["is_new"] ?? null)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t";
            if (($context["lazy_load"] ?? null)) {
                // line 27
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t";
            if (($context["options"] ?? null)) {
                // line 30
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 32
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 35);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 36
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 36)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 37
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 37);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 38
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 39
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 40);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 40)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 40);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t";
            if (($context["show_quickview"] ?? null)) {
                // line 48
                echo "\t\t\t\t\t<button type=\"button\" title=\"";
                echo ($context["button_quickview"] ?? null);
                echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                echo ($context["href"] ?? null);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t";
            }
            // line 50
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 53
            if (($context["manufacturer"] ?? null)) {
                // line 54
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 55
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t<h4><a href=\"";
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 59
            if (($context["rating"] ?? null)) {
                // line 60
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 63
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 71
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 72
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 73
                if ( !($context["special"] ?? null)) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t\t\t";
                if (($context["special"] ?? null)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t<span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 87
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 88
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t\t";
            if ((((($context["show_compare"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_cart"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 91
                echo "\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t";
                // line 93
                if (($context["show_cart"] ?? null)) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 106
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 107
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 108
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 110
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 114
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 115
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 118
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 121
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 124
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 127
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 139
        echo "
";
        // line 140
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 141
            echo "    ";
            // line 142
            echo "\t<div class=\"list-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 144
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 146
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 147
            if (($context["rotate_image"] ?? null)) {
                // line 148
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " swiper-lazy ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 151
            if (($context["swatches_images"] ?? null)) {
                // line 152
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 154
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 154);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 154);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 158
            if (($context["lazy_load"] ?? null)) {
                // line 159
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 162
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 163
                if (($context["is_new"] ?? null)) {
                    // line 164
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 166
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t";
            if (($context["show_quickview"] ?? null)) {
                echo "\t
\t\t\t\t\t<button type=\"button\" title=\"";
                // line 169
                echo ($context["button_quickview"] ?? null);
                echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                echo ($context["href"] ?? null);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>\t\t\t\t\t\t
\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t
\t\t\t</div>
          \t";
            // line 173
            if (((($context["show_wishlist"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 174
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 176
                if (($context["show_cart"] ?? null)) {
                    // line 177
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 179
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 183
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 185
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 188
            echo "\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 190
            if (($context["options"] ?? null)) {
                // line 191
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 193
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 194
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 194));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 196
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 196);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 197
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 197)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 198
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 198);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 199
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 200
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 201
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 201);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 201)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 201);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 204
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t\t";
            if (($context["manufacturer"] ?? null)) {
                // line 209
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 210
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 213
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<h4><a href=\"";
            // line 215
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 216
            if (($context["rating"] ?? null)) {
                // line 217
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 218
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 219
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 222
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 224
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 227
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 228
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 229
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 230
                if (($context["tax"] ?? null)) {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t\t\t\t";
                if ( !($context["special"] ?? null)) {
                    // line 234
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 236
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 238
                echo "\t\t\t\t\t\t\t";
                if (($context["special"] ?? null)) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t<span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 241
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 243
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 244
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 245
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 247
            echo "\t\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 248
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 249
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 250
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 252
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 256
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 257
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 260
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 263
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 266
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 269
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 275
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 281
        echo "
";
        // line 282
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 283
            echo "    ";
            // line 284
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">\t
\t\t\t";
            // line 286
            if (($context["gallery_images"] ?? null)) {
                // line 287
                echo "\t\t\t\t<div class=\"gallery-thumbs\">
\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t<div class=\"swiper-container gallery-images-";
                // line 289
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t";
                // line 291
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["gallery_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 292
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:changeImg('";
                    // line 293
                    echo ($context["section_id"] ?? null);
                    echo "', '";
                    echo ($context["product_id"] ?? null);
                    echo "', '";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 293);
                    echo "');\" class=\"child-thumb\" data-img=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 293);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 294
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 294);
                    echo "\" alt=\"";
                    echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 298
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--div class=\"swiper-pager\">
\t\t\t\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 301
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t\t<div class=\"swiper-button-prev swiper-button-prev-";
                // line 302
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t</div-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 307
            echo "\t\t\t<div class=\"image ";
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<a href=\"";
            // line 309
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t\t";
            // line 310
            if (($context["rotate_image"] ?? null)) {
                // line 311
                echo "\t\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 313
            echo "\t\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " swiper-lazy ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t";
            // line 314
            if (($context["swatches_images"] ?? null)) {
                // line 315
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 316
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 317
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 317);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 317);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 319
                echo "\t\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 321
            if (($context["lazy_load"] ?? null)) {
                // line 322
                echo "\t\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t\t";
            }
            // line 324
            echo "\t\t\t\t\t";
            if (($context["options"] ?? null)) {
                // line 325
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 326
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 327
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 328
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 328));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 329
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 330
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 330);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 331
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 331)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 332
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 332);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 333
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 334
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 335
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 335);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 335)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 335);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 338
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 342
            echo "\t\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_wishlist"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 343
                echo "\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 346
                if (($context["show_wishlist"] ?? null)) {
                    // line 347
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 349
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 350
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 352
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 353
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 355
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 358
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 362
            if (($context["manufacturer"] ?? null)) {
                // line 363
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 364
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 367
            echo "
\t\t\t\t\t";
            // line 368
            if (($context["rating"] ?? null)) {
                // line 369
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 370
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 371
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 372
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 374
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 376
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 377
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 379
            echo "\t\t\t\t\t<h4><a href=\"";
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t
\t\t\t\t\t";
            // line 381
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 382
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 383
                if ( !($context["special"] ?? null)) {
                    // line 384
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 386
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 388
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 389
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 391
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 393
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 394
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 395
                if (($context["special"] ?? null)) {
                    // line 396
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 398
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 399
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 401
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 403
            echo "\t\t\t\t\t";
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 404
                echo "\t\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 406
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 407
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 408
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 409
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 410
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 412
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 415
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 416
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 419
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 422
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 425
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 428
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 433
            echo "\t\t\t\t\t";
            if (($context["show_cart"] ?? null)) {
                // line 434
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                // line 435
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 438
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tvar gallery_images = \$(\".gallery-images-";
            // line 443
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\");
\t\t\t
\t\t\t\$('.child-thumb').click(function(){
\t\t\t\t\$('.child-thumb').removeClass('active');
\t\t\t\t\$(this).addClass('active');
\t\t\t});
\t\t\tgallery_images.swiper({
\t\t\t\tspaceBetween: 0,
\t\t\t\t// nextButton: '.swiper-button-next-";
            // line 451
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "',
\t\t\t\t// prevButton: '.swiper-button-prev-";
            // line 452
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "',
\t\t\t\tspeed: 500,
\t\t\t\tpreloadImages: false,
\t\t\t\twatchSlidesVisibility: true,
\t\t\t\tslidesPerView: 3,
\t\t\t\tslidesPerColumn: 1,
\t\t\t\tdirection: 'vertical',
\t\t\t\tbreakpoints: {
\t\t\t\t\t414: {
\t\t\t\t\t\tslidesPerView: 4,
\t\t\t\t\t\tslidesPerColumn: 1
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tautoplay: false,
\t\t\t\tloop: false
\t\t\t});

\t\t\tfunction changeImg(section_id, product_id, popup) {
\t\t\t\t\$('.other-style .img-mod-' + section_id + '-' + product_id).attr('src', popup);
\t\t\t}
\t\t</script>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1503 => 452,  1497 => 451,  1484 => 443,  1477 => 438,  1467 => 435,  1464 => 434,  1461 => 433,  1453 => 428,  1447 => 425,  1441 => 422,  1435 => 419,  1425 => 416,  1421 => 415,  1415 => 412,  1408 => 410,  1402 => 409,  1399 => 408,  1397 => 407,  1394 => 406,  1388 => 404,  1385 => 403,  1381 => 401,  1375 => 399,  1372 => 398,  1366 => 396,  1364 => 395,  1361 => 394,  1358 => 393,  1354 => 391,  1346 => 389,  1343 => 388,  1335 => 386,  1329 => 384,  1327 => 383,  1324 => 382,  1322 => 381,  1314 => 379,  1310 => 377,  1304 => 376,  1300 => 374,  1296 => 372,  1293 => 371,  1289 => 370,  1286 => 369,  1284 => 368,  1281 => 367,  1273 => 364,  1270 => 363,  1268 => 362,  1262 => 358,  1257 => 355,  1247 => 353,  1244 => 352,  1234 => 350,  1231 => 349,  1221 => 347,  1219 => 346,  1214 => 343,  1211 => 342,  1207 => 340,  1200 => 338,  1185 => 335,  1181 => 334,  1177 => 333,  1171 => 332,  1167 => 331,  1163 => 330,  1160 => 329,  1156 => 328,  1153 => 327,  1149 => 326,  1146 => 325,  1143 => 324,  1139 => 322,  1137 => 321,  1134 => 320,  1131 => 319,  1116 => 317,  1112 => 316,  1103 => 315,  1101 => 314,  1072 => 313,  1046 => 311,  1044 => 310,  1040 => 309,  1032 => 307,  1022 => 302,  1016 => 301,  1011 => 298,  999 => 294,  989 => 293,  986 => 292,  982 => 291,  975 => 289,  971 => 287,  969 => 286,  965 => 284,  963 => 283,  961 => 282,  958 => 281,  950 => 275,  941 => 269,  935 => 266,  929 => 263,  923 => 260,  913 => 257,  909 => 256,  902 => 252,  895 => 250,  889 => 249,  886 => 248,  883 => 247,  877 => 245,  875 => 244,  872 => 243,  868 => 241,  862 => 239,  859 => 238,  851 => 236,  845 => 234,  842 => 233,  834 => 231,  832 => 230,  829 => 229,  827 => 228,  824 => 227,  820 => 225,  814 => 224,  810 => 222,  806 => 220,  803 => 219,  799 => 218,  796 => 217,  794 => 216,  788 => 215,  784 => 213,  776 => 210,  773 => 209,  770 => 208,  766 => 206,  759 => 204,  744 => 201,  740 => 200,  736 => 199,  730 => 198,  726 => 197,  722 => 196,  719 => 195,  715 => 194,  712 => 193,  708 => 192,  705 => 191,  703 => 190,  699 => 188,  694 => 185,  684 => 183,  681 => 182,  671 => 180,  668 => 179,  658 => 177,  656 => 176,  652 => 174,  650 => 173,  646 => 171,  637 => 169,  632 => 168,  628 => 166,  622 => 164,  620 => 163,  617 => 162,  614 => 161,  610 => 159,  608 => 158,  605 => 157,  602 => 156,  587 => 154,  583 => 153,  574 => 152,  572 => 151,  543 => 150,  517 => 148,  515 => 147,  511 => 146,  504 => 144,  500 => 142,  498 => 141,  496 => 140,  493 => 139,  485 => 133,  476 => 127,  470 => 124,  464 => 121,  458 => 118,  448 => 115,  444 => 114,  437 => 110,  430 => 108,  424 => 107,  421 => 106,  418 => 105,  413 => 102,  403 => 100,  400 => 99,  390 => 97,  387 => 96,  377 => 94,  375 => 93,  371 => 91,  368 => 90,  362 => 88,  360 => 87,  357 => 86,  353 => 84,  347 => 82,  344 => 81,  336 => 79,  333 => 78,  325 => 76,  319 => 74,  317 => 73,  314 => 72,  312 => 71,  309 => 70,  305 => 68,  299 => 67,  295 => 65,  291 => 63,  288 => 62,  284 => 61,  281 => 60,  279 => 59,  272 => 58,  264 => 55,  261 => 54,  259 => 53,  254 => 50,  244 => 48,  241 => 47,  237 => 45,  230 => 43,  215 => 40,  211 => 39,  207 => 38,  201 => 37,  197 => 36,  193 => 35,  190 => 34,  186 => 33,  183 => 32,  179 => 31,  176 => 30,  173 => 29,  169 => 27,  166 => 26,  162 => 24,  156 => 22,  154 => 21,  151 => 20,  149 => 19,  146 => 18,  143 => 17,  128 => 15,  124 => 14,  115 => 13,  113 => 12,  84 => 11,  58 => 9,  56 => 8,  52 => 7,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/module/ptproducts/content.twig", "");
    }
}
