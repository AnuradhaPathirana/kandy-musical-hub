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

/* tt_rozer2/template/plaza/module/ptproducts/large_content.twig */
class __TwigTemplate_89e3510443704b7d8c6bca2c0527c522b251109be553910e9ddcefc59082ab9c extends \Twig\Template
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
    ";
        // line 3
        echo "    <div class=\"grid-style\">
        <div class=\"product-item first-product\">
            <div class=\"image ";
        // line 5
        if (($context["rotate_image"] ?? null)) {
            echo "rotate-image-container";
        }
        echo "\">
                <a href=\"";
        // line 6
        echo ($context["href"] ?? null);
        echo "\">
                    ";
        // line 7
        if (($context["rotate_image"] ?? null)) {
            // line 8
            echo "                        <img  src=\"";
            echo ($context["rotate_image"] ?? null);
            echo "\"   alt=\"";
            echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive img-rotate-image \" />
                    ";
        }
        // line 10
        echo "                    <img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\"  alt=\"";
        echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive img-mod-";
        echo ($context["section_id"] ?? null);
        echo "-";
        echo ($context["product_id"] ?? null);
        echo "\" />
                    ";
        // line 11
        if (($context["swatches_images"] ?? null)) {
            // line 12
            echo "                        <input type=\"hidden\" value=\"";
            echo ($context["thumb"] ?? null);
            echo "\" class=\"img-default-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                // line 14
                echo "                            <input type=\"hidden\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 14);
                echo "\" class=\"img-swatch-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 14);
                echo "\" />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                    ";
        }
        // line 17
        echo "                </a>
\t\t\t\t";
        // line 18
        if (($context["show_quickview"] ?? null)) {
            // line 19
            echo "\t\t\t\t\t<div class=\"quickview\">
\t\t\t\t\t\t<button type=\"button\" title=\"";
            // line 20
            echo ($context["button_quickview"] ?? null);
            echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
            echo ($context["href"] ?? null);
            echo "')\"><span>";
            echo ($context["button_quickview"] ?? null);
            echo "</span></button>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 23
        echo "                
            </div>
            <div class=\"caption\">
                ";
        // line 26
        if (($context["gallery_images"] ?? null)) {
            // line 27
            echo "                    <div class=\"gallery-thumbs\">
                        <div class=\"swiper-viewport\">
                            <div class=\"swiper-container gallery-images-";
            // line 29
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\">
                                <div class=\"swiper-wrapper\">
                                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gallery_images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 32
                echo "                                        <div class=\"swiper-slide\">
                                            <a href=\"javascript:changeImg('";
                // line 33
                echo ($context["section_id"] ?? null);
                echo "', '";
                echo ($context["product_id"] ?? null);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 33);
                echo "');\" class=\"child-thumb\" data-img=\"";
                echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 33);
                echo "\">
                                                <img src=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 34);
                echo "\" alt=\"";
                echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                echo "\"/>
                                            </a>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                </div>
                            </div>
                            <div class=\"swiper-pager\">
                                <div class=\"swiper-button-next swiper-button-next-";
            // line 41
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\"></div>
                                <div class=\"swiper-button-prev swiper-button-prev-";
            // line 42
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\"></div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 47
        echo "\t\t\t\t";
        if (($context["options"] ?? null)) {
            // line 48
            echo "                    <div class=\"category-options product-options\">
                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 50
                echo "                            <ul class=\"ul-swatches-colors\">
                                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 52
                    echo "                                    <li class=\"swatches-options\">
                                        <a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 53);
                    echo "\"
                                           style=\"";
                    // line 54
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 54)) {
                        echo " width: 15px; height: 15px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 55);
                        echo "') ";
                    }
                    echo "\"
                                           data-module-id=\"";
                    // line 56
                    echo ($context["section_id"] ?? null);
                    echo "\"
                                           data-product-id=\"";
                    // line 57
                    echo ($context["product_id"] ?? null);
                    echo "\"
                                           data-product-option-value-id=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 58);
                    echo "\">";
                    if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 58)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 58);
                        echo " ";
                    }
                    echo "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                            </ul>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    </div>
                ";
        }
        // line 65
        echo "\t\t\t\t";
        if (($context["manufacturer"] ?? null)) {
            // line 66
            echo "                    <p class=\"manufacture-product\">
                        <a href=\"";
            // line 67
            echo ($context["manufacturer_href"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a>
                    </p>
                ";
        }
        // line 70
        echo "
                ";
        // line 71
        if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
            // line 72
            echo "                    <div class=\"box-label\">
                        ";
            // line 73
            if (($context["special"] ?? null)) {
                // line 74
                echo "                            <div><span class=\"pro-label sale\">";
                echo (("-" . ($context["rate_special"] ?? null)) . "%");
                echo "</span></div>
                        ";
            }
            // line 76
            echo "                        ";
            if (($context["is_new"] ?? null)) {
                // line 77
                echo "                            <div><span class=\"pro-label new\">";
                echo ($context["text_new"] ?? null);
                echo "</span></div>
                        ";
            }
            // line 79
            echo "                    </div>
                ";
        }
        // line 81
        echo "
                

                

                <h4><a href=\"";
        // line 86
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
                ";
        // line 87
        if (($context["rating"] ?? null)) {
            // line 88
            echo "                    <div class=\"rating\">
                        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 90
                echo "                            ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 91
                    echo "                                <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
                            ";
                } else {
                    // line 93
                    echo "                                <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
                            ";
                }
                // line 95
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                    </div>
                ";
        }
        // line 98
        echo "                ";
        if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
            // line 99
            echo "                    <p class=\"price\">
                        ";
            // line 100
            if ( !($context["special"] ?? null)) {
                // line 101
                echo "                            ";
                echo ($context["price"] ?? null);
                echo "
                        ";
            } else {
                // line 103
                echo "                            <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
                        ";
            }
            // line 105
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 106
                echo "                            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
                        ";
            }
            // line 108
            echo "                    </p>
                ";
        }
        // line 110
        echo "
                ";
        // line 111
        if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
            // line 112
            echo "                    <p class=\"product-description\">";
            echo ($context["description"] ?? null);
            echo "</p>
                ";
        }
        // line 114
        echo "
                ";
        // line 115
        if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
            // line 116
            echo "                    <p class=\"text-countdown\">";
            echo ($context["text_countdown"] ?? null);
            echo "</p>
                    <div class=\"countdown-box countdown-product-";
            // line 117
            echo ($context["product_id"] ?? null);
            echo "\" data-id=\"";
            echo ($context["product_id"] ?? null);
            echo "\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                        <div class=\"inner\">
                            <div class=\"box\">
                                <b class=\"day\"></b><span>";
            // line 120
            echo ($context["text_days"] ?? null);
            echo "</span>
                            </div>
                            <div class=\"box\">
                                <b class=\"hour\"></b><span>";
            // line 123
            echo ($context["text_hours"] ?? null);
            echo "</span>
                            </div>
                            <div class=\"box\">
                                <b class=\"min\"></b><span>";
            // line 126
            echo ($context["text_mins"] ?? null);
            echo "</span>
                            </div>
                            <div class=\"box\">
                                <b class=\"sec\"></b><span>";
            // line 129
            echo ($context["text_secs"] ?? null);
            echo "</span>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 134
        echo "                
\t\t\t\t";
        // line 135
        if (((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null))) {
            // line 136
            echo "                    <div class=\"button-group\">
                        <div class=\"inner\">
                            ";
            // line 138
            if (($context["show_cart"] ?? null)) {
                // line 139
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>\t
\t\t\t\t\t\t\t";
            }
            // line 141
            echo "                            ";
            if (($context["show_wishlist"] ?? null)) {
                // line 142
                echo "                                <button type=\"button\"  title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                echo ($context["product_id"] ?? null);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
                            ";
            }
            // line 144
            echo "                            ";
            if (($context["show_compare"] ?? null)) {
                // line 145
                echo "                                <button type=\"button\"  title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" class=\"button-compare\" onclick=\"compare.add('";
                echo ($context["product_id"] ?? null);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
                            ";
            }
            // line 147
            echo "                        </div>
                    </div>
                ";
        }
        // line 150
        echo "            </div>
        </div>
    </div>

    <script>
        var gallery_images = \$(\".gallery-images-";
        // line 155
        echo ($context["section_id"] ?? null);
        echo "-";
        echo ($context["product_id"] ?? null);
        echo "\");
\t\t
\t\t\$('.child-thumb').click(function(){
\t\t\t\$('.child-thumb').removeClass('active');
\t\t\t\$(this).addClass('active');
\t\t});
        gallery_images.swiper({
            spaceBetween: 0,
            // nextButton: '.swiper-button-next-";
        // line 163
        echo ($context["section_id"] ?? null);
        echo "-";
        echo ($context["product_id"] ?? null);
        echo "',
            // prevButton: '.swiper-button-prev-";
        // line 164
        echo ($context["section_id"] ?? null);
        echo "-";
        echo ($context["product_id"] ?? null);
        echo "',
            speed: 500,
            preloadImages: false,
            watchSlidesVisibility: true,
            slidesPerView: 4,
            slidesPerColumn: 1,
            breakpoints: {
                1499: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                1199: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                991: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                767: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                479: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                }
            },
            autoplay: false,
            loop: false
        });

        function changeImg(section_id, product_id, popup) {
            \$('.first-product .img-mod-' + section_id + '-' + product_id).attr('src', popup);
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "tt_rozer2/template/plaza/module/ptproducts/large_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 164,  518 => 163,  505 => 155,  498 => 150,  493 => 147,  483 => 145,  480 => 144,  470 => 142,  467 => 141,  457 => 139,  455 => 138,  451 => 136,  449 => 135,  446 => 134,  438 => 129,  432 => 126,  426 => 123,  420 => 120,  410 => 117,  405 => 116,  403 => 115,  400 => 114,  394 => 112,  392 => 111,  389 => 110,  385 => 108,  377 => 106,  374 => 105,  366 => 103,  360 => 101,  358 => 100,  355 => 99,  352 => 98,  348 => 96,  342 => 95,  338 => 93,  334 => 91,  331 => 90,  327 => 89,  324 => 88,  322 => 87,  316 => 86,  309 => 81,  305 => 79,  299 => 77,  296 => 76,  290 => 74,  288 => 73,  285 => 72,  283 => 71,  280 => 70,  272 => 67,  269 => 66,  266 => 65,  262 => 63,  255 => 61,  240 => 58,  236 => 57,  232 => 56,  226 => 55,  222 => 54,  218 => 53,  215 => 52,  211 => 51,  208 => 50,  204 => 49,  201 => 48,  198 => 47,  188 => 42,  182 => 41,  177 => 38,  165 => 34,  155 => 33,  152 => 32,  148 => 31,  141 => 29,  137 => 27,  135 => 26,  130 => 23,  120 => 20,  117 => 19,  115 => 18,  112 => 17,  109 => 16,  94 => 14,  90 => 13,  81 => 12,  79 => 11,  66 => 10,  56 => 8,  54 => 7,  50 => 6,  44 => 5,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer2/template/plaza/module/ptproducts/large_content.twig", "");
    }
}
