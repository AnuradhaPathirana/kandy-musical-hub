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

/* tt_rozer1/template/plaza/module/ptproducts.twig */
class __TwigTemplate_df5b6c2799163f876697c2fd5be64670c9c46368553d9762866382d410820200 extends \Twig\Template
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
        echo "
<div class=\"products-container ";
        // line 2
        echo ($context["layout_classname"] ?? null);
        echo " ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            echo "tabs-product";
        }
        echo " ";
        if (( !($context["title"] ?? null) &&  !($context["module_des"] ?? null))) {
            echo "module-no-title";
        }
        echo "\">
\t";
        // line 3
        if ((($context["title"] ?? null) || ($context["module_des"] ?? null))) {
            echo "\t
\t\t<div class=\"block-title\">
\t\t\t";
            // line 5
            if (($context["module_des"] ?? null)) {
                // line 6
                echo "\t\t\t\t";
                echo ($context["module_des"] ?? null);
                echo "
\t\t\t";
            }
            // line 8
            echo "\t\t\t";
            if (($context["title"] ?? null)) {
                // line 9
                echo "\t\t\t<div class=\"title\"><span>";
                echo ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (($context["module_product_title"] ?? null)));
                echo "</span></div>
\t\t\t";
            }
            // line 11
            echo "\t\t\t
\t\t</div>
\t";
        }
        // line 14
        echo "\t";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 15
            echo "\t\t<div class=\"tabs-style\">
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t";
            // line 17
            $context["tab_count"] = 0;
            // line 18
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 19
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-tab=\"#tab-product-";
                // line 20
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
\t\t\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<div class=\"image-thumb\">
\t\t\t\t\t\t\t\t\t<span><img src=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 23);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 23);
                    echo "\" /></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 26);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 29
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 30
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 34
        echo "    <div class=\"pt-content\">
        ";
        // line 36
        echo "        ";
        if ((($context["module_type"] ?? null) == "single_tab")) {
            // line 37
            echo "            ";
            if (($context["single_products"] ?? null)) {
                // line 38
                echo "                ";
                if ((($context["layout_type"] ?? null) == "slider")) {
                    // line 39
                    echo "                    <div class=\"swiper-viewport\">
                        <div class=\"swiper-container single-slides-";
                    // line 40
                    echo ($context["module_id"] ?? null);
                    echo "\">
                            <div class=\"swiper-wrapper\">
                                ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 43
                        echo "                                <div class=\"product-thumb transition swiper-slide\">
                                    ";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 44);
                        echo "
                                </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                            </div>
                        </div>
                        ";
                    // line 49
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "                            <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                        ";
                    }
                    // line 52
                    echo "
                        ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 53)) {
                        // line 54
                        echo "                            <div class=\"swiper-pager\">
                                <div class=\"swiper-button-next swiper-button-next-";
                        // line 55
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 56
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                            </div>
                        ";
                    }
                    // line 59
                    echo "                    </div>
                ";
                }
                // line 61
                echo "
                ";
                // line 62
                if ((($context["layout_type"] ?? null) == "large_item")) {
                    // line 63
                    echo "                    <div class=\"box-large-item\">
                        <div class=\"col col-large-item\">
                            <div class=\"fproduct-content\">
                                <div class=\"product-thumb\">
                                    ";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, ($context["single_first_product"] ?? null), "large_html", [], "any", false, false, false, 67);
                    echo "
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t<div class=\"col col-muti-items\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 73
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products_except_first"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 76
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 77);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "                                    </div>
                                </div>
                                ";
                    // line 82
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 85
                    echo "
                                ";
                    // line 86
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 88
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 89
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 92
                    echo "                            </div>
                        </div>
\t\t\t\t\t\t
                    </div>
                ";
                }
                // line 97
                echo "
                ";
                // line 98
                if ((($context["layout_type"] ?? null) == "image")) {
                    // line 99
                    echo "                    <div class=\"box-large-image\">
                        <div class=\"col col-large-image\">
                            <div class=\"image-content\">
                                ";
                    // line 102
                    if (($context["single_image_link"] ?? null)) {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 105
                        echo ($context["single_image_link"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 106
                        echo ($context["single_image"] ?? null);
                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                ";
                    } else {
                        // line 111
                        echo "                                    <img src=\"";
                        echo ($context["single_image"] ?? null);
                        echo "\" alt=\"\" />
                                ";
                    }
                    // line 113
                    echo "                            </div>
                        </div>
                        <div class=\"col col-muti-items\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 117
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 120
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 121);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                                    </div>
                                </div>
                                ";
                    // line 126
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 126)) {
                        // line 127
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 129
                    echo "
                                ";
                    // line 130
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 130)) {
                        // line 131
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 132
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 133
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 136
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 140
                echo "
                <script>
                    var product_slides_";
                // line 142
                echo ($context["module_id"] ?? null);
                echo " = \$(\".single-slides-";
                echo ($context["module_id"] ?? null);
                echo "\").swiper({
                        spaceBetween:0,
                        ";
                // line 144
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 144)) {
                    // line 145
                    echo "                        pagination: '.single-slides-pagination-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        paginationClickable: true,
                        ";
                }
                // line 148
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                        nextButton: '.swiper-button-next-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        prevButton: '.swiper-button-prev-";
                    // line 150
                    echo ($context["module_id"] ?? null);
                    echo "',
                        ";
                }
                // line 152
                echo "                        speed: ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 152)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 152);
                    echo " ";
                } else {
                    echo " 500 ";
                }
                echo ",
\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\twatchSlidesVisibility: true,
                        slidesPerView: ";
                // line 156
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 156);
                echo ",
                        slidesPerColumn: ";
                // line 157
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 157);
                echo ",
                        breakpoints: {
\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 160
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 160);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 161
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 161);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 164
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 164);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 165
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 165);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 168
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 168);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 169
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 169);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 172
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 172);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 173
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 173);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t567: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 176
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 176);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 177
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 177);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
                        autoplay: ";
                // line 183
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 183)) {
                    echo " 500 ";
                } else {
                    echo " false ";
                }
                echo ",
                        loop: false
                    });
\t\t\t\t\t
                </script>
            ";
            } else {
                // line 189
                echo "                <p class=\"txt-empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
            ";
            }
            // line 191
            echo "        ";
        }
        // line 192
        echo "
        ";
        // line 194
        echo "        ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 195
            echo "        <div class=\"product-tabs-section\">
            <div class=\"tab-content product-tabs-content\">
                ";
            // line 197
            $context["tab_count"] = 0;
            // line 198
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 199
                echo "                    <div class=\"tab-product\" id=\"tab-product-";
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
                        ";
                // line 200
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 200)) {
                    // line 201
                    echo "                            ";
                    if ((($context["layout_type"] ?? null) == "slider")) {
                        // line 202
                        echo "                                <div class=\"swiper-viewport\">
                                    <div id=\"";
                        // line 203
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                        <div class=\"swiper-wrapper\">
                                            ";
                        // line 205
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 205));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 206
                            echo "                                                <div class=\"product-thumb transition swiper-slide\">
                                                    ";
                            // line 207
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 207);
                            echo "
                                                </div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 210
                        echo "                                        </div>
                                    </div>
                                    ";
                        // line 212
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 212)) {
                            // line 213
                            echo "                                        <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                    ";
                        }
                        // line 215
                        echo "
                                    ";
                        // line 216
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 216)) {
                            // line 217
                            echo "                                        <div class=\"swiper-pager\">
                                            <div class=\"swiper-button-next swiper-button-next-";
                            // line 218
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 219
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        </div>
                                    ";
                        }
                        // line 222
                        echo "                                </div>
                            ";
                    }
                    // line 224
                    echo "
                            ";
                    // line 225
                    if ((($context["layout_type"] ?? null) == "large_item")) {
                        // line 226
                        echo "                                
\t\t\t\t\t\t\t\t<div class=\"box-large-item\">
                                    <div class=\"col col-large-item\">
                                        <div class=\"fproduct-content\">
                                            <div class=\"product-thumb\">
                                                ";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["tab"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_product"] ?? null) : null), "large_html", [], "any", false, false, false, 231);
                        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col col-muti-items\">
                                        <div class=\"swiper-viewport\">
                                            <div id=\"";
                        // line 237
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                                <div class=\"swiper-wrapper\">
                                                    ";
                        // line 239
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_except_first", [], "any", false, false, false, 239));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 240
                            echo "                                                        <div class=\"product-thumb transition swiper-slide\">
                                                            ";
                            // line 241
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 241);
                            echo "
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 244
                        echo "                                                </div>
                                            </div>
                                            ";
                        // line 246
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 246)) {
                            // line 247
                            echo "                                                <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            ";
                        }
                        // line 249
                        echo "
                                            ";
                        // line 250
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 250)) {
                            // line 251
                            echo "                                                <div class=\"swiper-pager\">
                                                    <div class=\"swiper-button-next swiper-button-next-";
                            // line 252
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                    <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 253
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                </div>
                                            ";
                        }
                        // line 256
                        echo "                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                </div>
                            ";
                    }
                    // line 261
                    echo "
                            ";
                    // line 262
                    if ((($context["layout_type"] ?? null) == "image")) {
                        // line 263
                        echo "\t\t\t\t\t\t\t
                            <div class=\"box-large-image\">
                                <div class=\"col col-large-image\">
                                    <div class=\"image-content\">
                                        ";
                        // line 267
                        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 267)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) {
                            // line 268
                            echo "                                            <div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 270
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 270)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 271
                            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 271)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 271)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["link"] ?? null) : null);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                        } else {
                            // line 276
                            echo "                                            <img src=\"";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 276)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 276)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                            echo "\" />
                                        ";
                        }
                        // line 278
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col col-muti-items\">
                                    <div class=\"swiper-viewport\">
                                        <div id=\"";
                        // line 282
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                            <div class=\"swiper-wrapper\">
                                                ";
                        // line 284
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 284));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 285
                            echo "                                                    <div class=\"product-thumb transition swiper-slide\">
                                                        ";
                            // line 286
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 286);
                            echo "
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 289
                        echo "                                            </div>
                                        </div>
                                        ";
                        // line 291
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 291)) {
                            // line 292
                            echo "                                            <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        ";
                        }
                        // line 294
                        echo "
                                        ";
                        // line 295
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 295)) {
                            // line 296
                            echo "                                            <div class=\"swiper-pager\">
                                                <div class=\"swiper-button-next swiper-button-next-";
                            // line 297
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 298
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            </div>
                                        ";
                        }
                        // line 301
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                            ";
                    }
                    // line 306
                    echo "
                            <script>
                                \$(\".multi-slides-";
                    // line 308
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo "\").swiper({
                                    spaceBetween: 0,
                                    ";
                    // line 310
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 310)) {
                        // line 311
                        echo "                                    pagination: '.multi-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    paginationClickable: true,
                                    ";
                    }
                    // line 314
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 314)) {
                        // line 315
                        echo "                                    nextButton: '.swiper-button-next-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    prevButton: '.swiper-button-prev-";
                        // line 316
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    ";
                    }
                    // line 318
                    echo "                                    speed: ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 318)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 318);
                        echo " ";
                    } else {
                        echo " 500 ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
                                    slidesPerView: ";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 322);
                    echo ",
                                    slidesPerColumn: ";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 323);
                    echo ",
                                    breakpoints: {
                                        1499: {
                                            slidesPerView: ";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 326);
                    echo ",
                                            slidesPerColumn: ";
                    // line 327
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 327);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t1199: {
                                            slidesPerView: ";
                    // line 330
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 330);
                    echo ",
                                            slidesPerColumn: ";
                    // line 331
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 331);
                    echo "
                                        },
                                        991: {
                                            slidesPerView: ";
                    // line 334
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 334);
                    echo ",
                                            slidesPerColumn: ";
                    // line 335
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 335);
                    echo "
                                        },
                                        767: {
                                            slidesPerView: ";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 338);
                    echo ",
                                            slidesPerColumn: ";
                    // line 339
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 339);
                    echo "
                                        },
                                        567: {
                                            slidesPerView: ";
                    // line 342
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 342);
                    echo ",
                                            slidesPerColumn: ";
                    // line 343
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 343);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t\t\t\t}
                                    },
                                    autoplay: ";
                    // line 349
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 349)) {
                        echo " 500 ";
                    } else {
                        echo " false ";
                    }
                    echo ",
                                    loop: false
                                });
                            </script>
                        ";
                } else {
                    // line 354
                    echo "                            <p class=\"txt-empty\">";
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
                        ";
                }
                // line 356
                echo "                    </div>
                    ";
                // line 357
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 358
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 359
            echo "            </div>
        </div>
        <script>
            \$('.tabs-style .nav-tabs').each(function() {
\t\t\t\t\$(this).find('li').first().addClass('active');
\t\t\t});
\t\t\t
\t\t\t
            \$('.product-tabs-section .tab-content').each(function() {
\t\t\t\t\$(this).find('.tab-product').hide();
\t\t\t\t\$(this).find('.tab-product').first().show();
\t\t\t}); 
\t\t\t
            \$('.tabs-style .nav-tabs a').on('click', function () {
                \$(this).closest('ul').find('li').removeClass('active');
                \$(this).closest('li').addClass('active');

                var tab = \$(this).data('tab');
\t\t\t\t\$(tab).closest('.tab-content').find('.tab-product').hide();
                \$(tab).show();
            });
        </script>
        ";
        }
        // line 382
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/module/ptproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  987 => 382,  962 => 359,  956 => 358,  954 => 357,  951 => 356,  945 => 354,  933 => 349,  924 => 343,  920 => 342,  914 => 339,  910 => 338,  904 => 335,  900 => 334,  894 => 331,  890 => 330,  884 => 327,  880 => 326,  874 => 323,  870 => 322,  856 => 318,  849 => 316,  842 => 315,  839 => 314,  830 => 311,  828 => 310,  821 => 308,  817 => 306,  810 => 301,  802 => 298,  796 => 297,  793 => 296,  791 => 295,  788 => 294,  780 => 292,  778 => 291,  774 => 289,  765 => 286,  762 => 285,  758 => 284,  747 => 282,  741 => 278,  733 => 276,  723 => 271,  719 => 270,  715 => 268,  713 => 267,  707 => 263,  705 => 262,  702 => 261,  695 => 256,  687 => 253,  681 => 252,  678 => 251,  676 => 250,  673 => 249,  665 => 247,  663 => 246,  659 => 244,  650 => 241,  647 => 240,  643 => 239,  632 => 237,  623 => 231,  616 => 226,  614 => 225,  611 => 224,  607 => 222,  599 => 219,  593 => 218,  590 => 217,  588 => 216,  585 => 215,  577 => 213,  575 => 212,  571 => 210,  562 => 207,  559 => 206,  555 => 205,  544 => 203,  541 => 202,  538 => 201,  536 => 200,  529 => 199,  524 => 198,  522 => 197,  518 => 195,  515 => 194,  512 => 192,  509 => 191,  503 => 189,  490 => 183,  481 => 177,  477 => 176,  471 => 173,  467 => 172,  461 => 169,  457 => 168,  451 => 165,  447 => 164,  441 => 161,  437 => 160,  431 => 157,  427 => 156,  413 => 152,  408 => 150,  403 => 149,  400 => 148,  393 => 145,  391 => 144,  384 => 142,  380 => 140,  374 => 136,  368 => 133,  364 => 132,  361 => 131,  359 => 130,  356 => 129,  350 => 127,  348 => 126,  344 => 124,  335 => 121,  332 => 120,  328 => 119,  323 => 117,  317 => 113,  311 => 111,  303 => 106,  299 => 105,  295 => 103,  293 => 102,  288 => 99,  286 => 98,  283 => 97,  276 => 92,  270 => 89,  266 => 88,  263 => 87,  261 => 86,  258 => 85,  252 => 83,  250 => 82,  246 => 80,  237 => 77,  234 => 76,  230 => 75,  225 => 73,  216 => 67,  210 => 63,  208 => 62,  205 => 61,  201 => 59,  195 => 56,  191 => 55,  188 => 54,  186 => 53,  183 => 52,  177 => 50,  175 => 49,  171 => 47,  162 => 44,  159 => 43,  155 => 42,  150 => 40,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 34,  130 => 31,  124 => 30,  122 => 29,  115 => 26,  107 => 23,  104 => 22,  102 => 21,  96 => 20,  93 => 19,  88 => 18,  86 => 17,  82 => 15,  79 => 14,  74 => 11,  68 => 9,  65 => 8,  59 => 6,  57 => 5,  52 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/module/ptproducts.twig", "");
    }
}
