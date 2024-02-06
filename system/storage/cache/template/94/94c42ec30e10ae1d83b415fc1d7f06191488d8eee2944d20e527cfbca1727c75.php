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

/* default/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_e588ec3d5fc7873b66e2834751ac03ef8a9360bc65a0d69fc1788e36e6d85792 extends \Twig\Template
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
            echo "    <div class=\"image ";
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
        <a href=\"";
            // line 4
            echo ($context["href"] ?? null);
            echo "\">
            ";
            // line 5
            if (($context["show_label"] ?? null)) {
                // line 6
                echo "                ";
                if (($context["special"] ?? null)) {
                    // line 7
                    echo "                    <span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span>
                ";
                } else {
                    // line 9
                    echo "                    ";
                    if (($context["is_new"] ?? null)) {
                        // line 10
                        echo "                        <span class=\"pro-label new\">";
                        echo ($context["text_new"] ?? null);
                        echo "</span>
                    ";
                    }
                    // line 12
                    echo "                ";
                }
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            if (($context["rotate_image"] ?? null)) {
                // line 15
                echo "                <img src=\"";
                echo ($context["rotate_image"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image\" />
            ";
            }
            // line 17
            echo "            <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
            ";
            // line 18
            if (($context["swatches_images"] ?? null)) {
                // line 19
                echo "                <input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
                ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 21
                    echo "                    <input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 21);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 21);
                    echo "\" />
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "        </a>
        ";
            // line 25
            if (($context["show_quickview"] ?? null)) {
                // line 26
                echo "            <button type=\"button\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" onclick=\"ptquickview.ajaxView('";
                echo ($context["href"] ?? null);
                echo "')\"><i class=\"fa fa-search-plus\"></i></button>
        ";
            }
            // line 28
            echo "    </div>
    <div class=\"caption\">
        <div class=\"product-options\">
            ";
            // line 31
            if (($context["options"] ?? null)) {
                // line 32
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 33
                    echo "                    <ul class=\"ul-swatches-colors\">
                        ";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 35
                        echo "                            <li class=\"swatches-options\">
                                <a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 36);
                        echo "\"
                                   style=\"";
                        // line 37
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 37)) {
                            echo " width: 14px; height: 14px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 38
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 38);
                            echo "') ";
                        }
                        echo "\"
                                   data-module-id=\"";
                        // line 39
                        echo ($context["section_id"] ?? null);
                        echo "\"
                                   data-product-id=\"";
                        // line 40
                        echo ($context["product_id"] ?? null);
                        echo "\"
                                   data-product-option-value-id=\"";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 41);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 41)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 41);
                            echo " ";
                        }
                        echo "</a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "                    </ul>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            ";
            }
            // line 47
            echo "        </div>
        <h4><a href=\"";
            // line 48
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
        ";
            // line 49
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 50
                echo "            <p>";
                echo ($context["description"] ?? null);
                echo "</p>
        ";
            }
            // line 52
            echo "
        ";
            // line 53
            if (($context["rating"] ?? null)) {
                // line 54
                echo "            <div class=\"rating\">
                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "                    ";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 57
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    } else {
                        // line 59
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                    }
                    // line 61
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "            </div>
        ";
            }
            // line 64
            echo "
        ";
            // line 65
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 66
                echo "            <p class=\"price\">
                ";
                // line 67
                if ( !($context["special"] ?? null)) {
                    // line 68
                    echo "                    ";
                    echo ($context["price"] ?? null);
                    echo "
                ";
                } else {
                    // line 70
                    echo "                    <span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
                ";
                }
                // line 72
                echo "                ";
                if (($context["tax"] ?? null)) {
                    // line 73
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
                ";
                }
                // line 75
                echo "            </p>
        ";
            }
            // line 77
            echo "
        ";
            // line 78
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 79
                echo "            <div class=\"countdown-box countdown-product-";
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
                <span class=\"day\"></span> ";
                // line 80
                echo ($context["text_day"] ?? null);
                echo "
                <span class=\"hour\"></span> ";
                // line 81
                echo ($context["text_hour"] ?? null);
                echo "
                <span class=\"min\"></span> ";
                // line 82
                echo ($context["text_min"] ?? null);
                echo "
                <span class=\"sec\"></span> ";
                // line 83
                echo ($context["text_sec"] ?? null);
                echo "
            </div>
        ";
            }
            // line 86
            echo "    </div>
    <div class=\"button-group\">
        ";
            // line 88
            if (($context["show_cart"] ?? null)) {
                // line 89
                echo "            <button type=\"button\" onclick=\"cart.add('";
                echo ($context["product_id"] ?? null);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            }
            // line 91
            echo "
        ";
            // line 92
            if (($context["show_wishlist"] ?? null)) {
                // line 93
                echo "            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo ($context["product_id"] ?? null);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
        ";
            }
            // line 95
            echo "
        ";
            // line 96
            if (($context["show_compare"] ?? null)) {
                // line 97
                echo "            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo ($context["product_id"] ?? null);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
        ";
            }
            // line 99
            echo "    </div>
";
        }
        // line 101
        echo "
";
        // line 102
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 103
            echo "    ";
        }
        // line 105
        echo "
";
        // line 106
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 107
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "default/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 107,  395 => 106,  392 => 105,  389 => 103,  387 => 102,  384 => 101,  380 => 99,  372 => 97,  370 => 96,  367 => 95,  359 => 93,  357 => 92,  354 => 91,  346 => 89,  344 => 88,  340 => 86,  334 => 83,  330 => 82,  326 => 81,  322 => 80,  313 => 79,  311 => 78,  308 => 77,  304 => 75,  296 => 73,  293 => 72,  285 => 70,  279 => 68,  277 => 67,  274 => 66,  272 => 65,  269 => 64,  265 => 62,  259 => 61,  255 => 59,  251 => 57,  248 => 56,  244 => 55,  241 => 54,  239 => 53,  236 => 52,  230 => 50,  228 => 49,  222 => 48,  219 => 47,  216 => 46,  209 => 44,  194 => 41,  190 => 40,  186 => 39,  180 => 38,  176 => 37,  172 => 36,  169 => 35,  165 => 34,  162 => 33,  157 => 32,  155 => 31,  150 => 28,  142 => 26,  140 => 25,  137 => 24,  134 => 23,  119 => 21,  115 => 20,  106 => 19,  104 => 18,  91 => 17,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  66 => 10,  63 => 9,  57 => 7,  54 => 6,  52 => 5,  48 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/plaza/module/ptproducts/content.twig", "");
    }
}
