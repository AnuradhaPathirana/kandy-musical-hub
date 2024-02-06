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

/* default/template/plaza/module/ptfeaturedcate.twig */
class __TwigTemplate_653ecd18ef480d09b1bfcc19841f1f7b74c6eb9b7569d411aff2bbc197f0f308 extends \Twig\Template
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
        echo "<div class=\"featured-categories-container dv-container\">
    <div class=\"dvmodule-title\"><h2>";
        // line 2
        echo ($context["title"] ?? null);
        echo "</h2></div>
    <div class=\"dv-content\">
        ";
        // line 4
        if (($context["use_slider"] ?? null)) {
            // line 5
            echo "            <div class=\"swiper-viewport\">
                <div class=\"featured-categories-content swiper-container\">
                    <div class=\"swiper-wrapper\">
                        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 9
                echo "                            <div class=\"swiper-slide category-content\">
                                ";
                // line 10
                if (($context["use_second_img"] ?? null)) {
                    // line 11
                    echo "                                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 11);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                    echo "\" />
                                ";
                }
                // line 13
                echo "                                <h4 class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                echo "</a></h4>
                                ";
                // line 14
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "                                    <p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 15);
                    echo "</p>
                                ";
                }
                // line 17
                echo "                                ";
                if (($context["show_child"] ?? null)) {
                    // line 18
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "                                        ";
                        $context["child_count"] = 0;
                        // line 20
                        echo "                                        <ul class=\"child-featured-categories\">
                                            ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 22
                            echo "                                                ";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 23
                                echo "                                                    <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 23);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 23);
                                echo "</a></li>
                                                ";
                            }
                            // line 25
                            echo "                                                ";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 26
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "                                        </ul>
                                    ";
                    }
                    // line 29
                    echo "                                ";
                }
                // line 30
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    </div>
                </div>
                ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownav", [], "any", false, false, false, 34)) {
                // line 35
                echo "                    <div class=\"swiper-pagination fcategory-pagination\"></div>
                ";
            }
            // line 37
            echo "
                ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownextback", [], "any", false, false, false, 38)) {
                // line 39
                echo "                    <div class=\"swiper-pager\">
                        <div class=\"swiper-button-next\"></div>
                        <div class=\"swiper-button-prev\"></div>
                    </div>
                ";
            }
            // line 44
            echo "            </div>

            <script>
                \$(document).ready(function() {
                    \$(\".featured-categories-content\").swiper({
                        spaceBetween: 20,
                        ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownav", [], "any", false, false, false, 50)) {
                // line 51
                echo "                        pagination: '.fcategory-pagination',
                        paginationClickable: true,
                        ";
            }
            // line 54
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownextback", [], "any", false, false, false, 54)) {
                // line 55
                echo "                        nextButton: '.swiper-button-next',
                        prevButton: '.swiper-button-prev',
                        ";
            }
            // line 58
            echo "                        speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "speed", [], "any", false, false, false, 58)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "speed", [], "any", false, false, false, 58);
                echo " ";
            } else {
                echo " 300 ";
            }
            echo ",
                        slidesPerView: ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "items", [], "any", false, false, false, 59);
            echo ",
                        slidesPerColumn: ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "rows", [], "any", false, false, false, 60);
            echo ",
                        autoplay: ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "autoplay", [], "any", false, false, false, 61)) {
                echo " 3000 ";
            } else {
                echo " false ";
            }
            echo ",
                        loop: false
                    });
                });
            </script>
        ";
        } else {
            // line 67
            echo "            <div class=\"featured-categories-content\">
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 69
                echo "                    <div class=\"category-content\">
                        ";
                // line 70
                if (($context["use_second_img"] ?? null)) {
                    // line 71
                    echo "                            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 71);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 71);
                    echo "\" />
                        ";
                }
                // line 73
                echo "                        <h4 class=\"name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 73);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 73);
                echo "</a></h4>
                        ";
                // line 74
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 74))) {
                    // line 75
                    echo "                            <p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 75);
                    echo "</p>
                        ";
                }
                // line 77
                echo "                        ";
                if (($context["show_child"] ?? null)) {
                    // line 78
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 78)) {
                        // line 79
                        echo "                                ";
                        $context["child_count"] = 0;
                        // line 80
                        echo "                                <ul class=\"child-featured-categories\">
                                    ";
                        // line 81
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 81));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 82
                            echo "                                        ";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 83
                                echo "                                            <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 83);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 83);
                                echo "</a></li>
                                        ";
                            }
                            // line 85
                            echo "                                        ";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 86
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 87
                        echo "                                </ul>
                            ";
                    }
                    // line 89
                    echo "                        ";
                }
                // line 90
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </div>
        ";
        }
        // line 94
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/plaza/module/ptfeaturedcate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 94,  296 => 92,  289 => 90,  286 => 89,  282 => 87,  276 => 86,  273 => 85,  265 => 83,  262 => 82,  258 => 81,  255 => 80,  252 => 79,  249 => 78,  246 => 77,  240 => 75,  238 => 74,  231 => 73,  223 => 71,  221 => 70,  218 => 69,  214 => 68,  211 => 67,  198 => 61,  194 => 60,  190 => 59,  179 => 58,  174 => 55,  171 => 54,  166 => 51,  164 => 50,  156 => 44,  149 => 39,  147 => 38,  144 => 37,  140 => 35,  138 => 34,  134 => 32,  127 => 30,  124 => 29,  120 => 27,  114 => 26,  111 => 25,  103 => 23,  100 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  78 => 15,  76 => 14,  69 => 13,  61 => 11,  59 => 10,  56 => 9,  52 => 8,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/plaza/module/ptfeaturedcate.twig", "");
    }
}
