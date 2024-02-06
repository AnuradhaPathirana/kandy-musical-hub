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

/* tt_rozer2/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_c60d9703a401bcb2206eb6471530110de13d4b6275060a5925704bd163216067 extends \Twig\Template
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
            echo "\t\t\t\t";
            if (((($context["show_wishlist"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 172
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 174
                if (($context["show_cart"] ?? null)) {
                    // line 175
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 183
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 186
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 189
            if (($context["options"] ?? null)) {
                // line 190
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 192
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 193
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 194
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 195
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 195);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 196
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 196)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 197
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 197);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 198
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 199
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 200
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 200);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 200)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 200);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t\t";
            if (($context["manufacturer"] ?? null)) {
                // line 208
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 209
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<h4><a href=\"";
            // line 214
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 215
            if (($context["rating"] ?? null)) {
                // line 216
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 223
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 227
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 228
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 229
                if (($context["tax"] ?? null)) {
                    // line 230
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t";
                if ( !($context["special"] ?? null)) {
                    // line 233
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 237
                echo "\t\t\t\t\t\t\t";
                if (($context["special"] ?? null)) {
                    // line 238
                    echo "\t\t\t\t\t\t\t\t<span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 240
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 243
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 244
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 247
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 248
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 249
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 251
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 255
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 256
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 259
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 262
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 265
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 268
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 274
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 280
        echo "
";
        // line 281
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 282
            echo "    ";
            // line 283
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">\t
\t\t\t";
            // line 285
            if (($context["gallery_images"] ?? null)) {
                // line 286
                echo "\t\t\t\t<div class=\"gallery-thumbs\">
\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t<div class=\"swiper-container gallery-images-";
                // line 288
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["gallery_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 291
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:changeImg('";
                    // line 292
                    echo ($context["section_id"] ?? null);
                    echo "', '";
                    echo ($context["product_id"] ?? null);
                    echo "', '";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 292);
                    echo "');\" class=\"child-thumb\" data-img=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 292);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 293);
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
                // line 297
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--div class=\"swiper-pager\">
\t\t\t\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 300
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t\t<div class=\"swiper-button-prev swiper-button-prev-";
                // line 301
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t</div-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 306
            echo "\t\t\t<div class=\"image ";
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<a href=\"";
            // line 308
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t\t";
            // line 309
            if (($context["rotate_image"] ?? null)) {
                // line 310
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
            // line 312
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
            // line 313
            if (($context["swatches_images"] ?? null)) {
                // line 314
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 315
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 316
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 316);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 316);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                echo "\t\t\t\t\t\t";
            }
            // line 319
            echo "\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 320
            if (($context["lazy_load"] ?? null)) {
                // line 321
                echo "\t\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t\t";
            }
            // line 323
            echo "\t\t\t\t\t";
            if (($context["options"] ?? null)) {
                // line 324
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 325
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 326
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 327
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 327));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 328
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 329
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 329);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 330
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 330)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 331
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 331);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 332
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 333
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 334
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 334);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 334)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 334);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 337
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 339
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 341
            echo "\t\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_wishlist"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 342
                echo "\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 345
                if (($context["show_wishlist"] ?? null)) {
                    // line 346
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 348
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 349
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 351
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 352
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 354
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 357
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 361
            if (($context["manufacturer"] ?? null)) {
                // line 362
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 363
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 366
            echo "
\t\t\t\t\t";
            // line 367
            if (($context["rating"] ?? null)) {
                // line 368
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 369
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 370
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 371
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 373
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 375
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 376
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 378
            echo "\t\t\t\t\t<h4><a href=\"";
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t
\t\t\t\t\t";
            // line 380
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 381
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 382
                if ( !($context["special"] ?? null)) {
                    // line 383
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 385
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 387
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 388
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 390
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 392
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 393
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 394
                if (($context["special"] ?? null)) {
                    // line 395
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 397
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 398
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 400
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 402
            echo "\t\t\t\t\t";
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 403
                echo "\t\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 405
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 406
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 407
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 408
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 409
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 411
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 414
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 415
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 418
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 421
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 424
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 427
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 432
            echo "\t\t\t\t\t";
            if (($context["show_cart"] ?? null)) {
                // line 433
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                // line 434
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 437
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tvar gallery_images = \$(\".gallery-images-";
            // line 442
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
            // line 450
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "',
\t\t\t\t// prevButton: '.swiper-button-prev-";
            // line 451
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
        return "tt_rozer2/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1501 => 451,  1495 => 450,  1482 => 442,  1475 => 437,  1465 => 434,  1462 => 433,  1459 => 432,  1451 => 427,  1445 => 424,  1439 => 421,  1433 => 418,  1423 => 415,  1419 => 414,  1413 => 411,  1406 => 409,  1400 => 408,  1397 => 407,  1395 => 406,  1392 => 405,  1386 => 403,  1383 => 402,  1379 => 400,  1373 => 398,  1370 => 397,  1364 => 395,  1362 => 394,  1359 => 393,  1356 => 392,  1352 => 390,  1344 => 388,  1341 => 387,  1333 => 385,  1327 => 383,  1325 => 382,  1322 => 381,  1320 => 380,  1312 => 378,  1308 => 376,  1302 => 375,  1298 => 373,  1294 => 371,  1291 => 370,  1287 => 369,  1284 => 368,  1282 => 367,  1279 => 366,  1271 => 363,  1268 => 362,  1266 => 361,  1260 => 357,  1255 => 354,  1245 => 352,  1242 => 351,  1232 => 349,  1229 => 348,  1219 => 346,  1217 => 345,  1212 => 342,  1209 => 341,  1205 => 339,  1198 => 337,  1183 => 334,  1179 => 333,  1175 => 332,  1169 => 331,  1165 => 330,  1161 => 329,  1158 => 328,  1154 => 327,  1151 => 326,  1147 => 325,  1144 => 324,  1141 => 323,  1137 => 321,  1135 => 320,  1132 => 319,  1129 => 318,  1114 => 316,  1110 => 315,  1101 => 314,  1099 => 313,  1070 => 312,  1044 => 310,  1042 => 309,  1038 => 308,  1030 => 306,  1020 => 301,  1014 => 300,  1009 => 297,  997 => 293,  987 => 292,  984 => 291,  980 => 290,  973 => 288,  969 => 286,  967 => 285,  963 => 283,  961 => 282,  959 => 281,  956 => 280,  948 => 274,  939 => 268,  933 => 265,  927 => 262,  921 => 259,  911 => 256,  907 => 255,  900 => 251,  893 => 249,  887 => 248,  884 => 247,  881 => 246,  875 => 244,  873 => 243,  870 => 242,  866 => 240,  860 => 238,  857 => 237,  849 => 235,  843 => 233,  840 => 232,  832 => 230,  830 => 229,  827 => 228,  825 => 227,  822 => 226,  818 => 224,  812 => 223,  808 => 221,  804 => 219,  801 => 218,  797 => 217,  794 => 216,  792 => 215,  786 => 214,  782 => 212,  774 => 209,  771 => 208,  768 => 207,  764 => 205,  757 => 203,  742 => 200,  738 => 199,  734 => 198,  728 => 197,  724 => 196,  720 => 195,  717 => 194,  713 => 193,  710 => 192,  706 => 191,  703 => 190,  701 => 189,  696 => 186,  691 => 183,  681 => 181,  678 => 180,  668 => 178,  665 => 177,  655 => 175,  653 => 174,  649 => 172,  646 => 171,  637 => 169,  632 => 168,  628 => 166,  622 => 164,  620 => 163,  617 => 162,  614 => 161,  610 => 159,  608 => 158,  605 => 157,  602 => 156,  587 => 154,  583 => 153,  574 => 152,  572 => 151,  543 => 150,  517 => 148,  515 => 147,  511 => 146,  504 => 144,  500 => 142,  498 => 141,  496 => 140,  493 => 139,  485 => 133,  476 => 127,  470 => 124,  464 => 121,  458 => 118,  448 => 115,  444 => 114,  437 => 110,  430 => 108,  424 => 107,  421 => 106,  418 => 105,  413 => 102,  403 => 100,  400 => 99,  390 => 97,  387 => 96,  377 => 94,  375 => 93,  371 => 91,  368 => 90,  362 => 88,  360 => 87,  357 => 86,  353 => 84,  347 => 82,  344 => 81,  336 => 79,  333 => 78,  325 => 76,  319 => 74,  317 => 73,  314 => 72,  312 => 71,  309 => 70,  305 => 68,  299 => 67,  295 => 65,  291 => 63,  288 => 62,  284 => 61,  281 => 60,  279 => 59,  272 => 58,  264 => 55,  261 => 54,  259 => 53,  254 => 50,  244 => 48,  241 => 47,  237 => 45,  230 => 43,  215 => 40,  211 => 39,  207 => 38,  201 => 37,  197 => 36,  193 => 35,  190 => 34,  186 => 33,  183 => 32,  179 => 31,  176 => 30,  173 => 29,  169 => 27,  166 => 26,  162 => 24,  156 => 22,  154 => 21,  151 => 20,  149 => 19,  146 => 18,  143 => 17,  128 => 15,  124 => 14,  115 => 13,  113 => 12,  84 => 11,  58 => 9,  56 => 8,  52 => 7,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer2/template/plaza/module/ptproducts/content.twig", "");
    }
}
