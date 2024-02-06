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

/* tt_rozer2/template/plaza/module/ptmenu.twig */
class __TwigTemplate_15c8b5d98ed8e07f69e16458f2fe363780c80b19c05eeefc45ddda31336d2fe0 extends \Twig\Template
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
        echo "<style>
    #pt-menu-";
        // line 2
        echo ($context["module_id"] ?? null);
        echo " .pt-menu-bar {
        background: ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_bg", [], "any", false, false, false, 3);
        echo ";
        color: ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_text_color", [], "any", false, false, false, 4);
        echo ";
\t\tpadding: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_top", [], "any", false, false, false, 5);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_right", [], "any", false, false, false, 5);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_bottom", [], "any", false, false, false, 5);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_left", [], "any", false, false, false, 5);
        echo ";
    }
    #pt-menu-";
        // line 7
        echo ($context["module_id"] ?? null);
        echo ".pt-menu-bar {
        background: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_bg", [], "any", false, false, false, 8);
        echo ";
        color: ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_text_color", [], "any", false, false, false, 9);
        echo ";
    }
    #pt-menu-";
        // line 11
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item .a-top-link {
\t\tbackground: ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_bg", [], "any", false, false, false, 12);
        echo ";
\t\tpadding: ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_top", [], "any", false, false, false, 13);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_right", [], "any", false, false, false, 13);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_bottom", [], "any", false, false, false, 13);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_left", [], "any", false, false, false, 13);
        echo ";
\t\tcolor: ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_color", [], "any", false, false, false, 14);
        echo ";
        font-size: ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_size", [], "any", false, false, false, 15);
        echo ";
        text-transform: ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_transform", [], "any", false, false, false, 16);
        echo ";
        font-weight: ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_weight", [], "any", false, false, false, 17);
        echo ";
    }
    #pt-menu-";
        // line 19
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item:hover .a-top-link,#pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item:hover .a-top-link i, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item.active .a-top-link{
        color: ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_color_hover", [], "any", false, false, false, 20);
        echo ";
        font-weight: ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_weight_hover", [], "any", false, false, false, 21);
        echo ";
\t\tbackground: ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_bg_hover", [], "any", false, false, false, 22);
        echo ";
    }
\t#pt-menu-";
        // line 24
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item > a > span:after {background: ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_color_hover", [], "any", false, false, false, 24);
        echo ";}
    #pt-menu-";
        // line 25
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container {
        
        background: ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_bg", [], "any", false, false, false, 27);
        echo ";
        padding: ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_top", [], "any", false, false, false, 28);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_right", [], "any", false, false, false, 28);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_bottom", [], "any", false, false, false, 28);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_left", [], "any", false, false, false, 28);
        echo ";
    }
\t#pt-menu-";
        // line 30
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-second-link {
\t\tcolor: ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_color", [], "any", false, false, false, 31);
        echo ";
\t\tfont-size: ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_size", [], "any", false, false, false, 32);
        echo ";
\t\ttext-transform: ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_transform", [], "any", false, false, false, 33);
        echo ";
\t\tfont-weight: ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_weight", [], "any", false, false, false, 34);
        echo ";
\t}
\t#pt-menu-";
        // line 36
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-second-link:hover {
\t\tcolor: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_hover_font_color", [], "any", false, false, false, 37);
        echo ";
\t\tfont-weight: ";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_hover_font_weight", [], "any", false, false, false, 38);
        echo ";
\t}
\t#pt-menu-";
        // line 40
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-third-link {
\t\tcolor: ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_color", [], "any", false, false, false, 41);
        echo ";
\t\tfont-size: ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_size", [], "any", false, false, false, 42);
        echo ";
\t\ttext-transform: ";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_transform", [], "any", false, false, false, 43);
        echo ";
\t\tfont-weight: ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_weight", [], "any", false, false, false, 44);
        echo ";
\t}
\t#pt-menu-";
        // line 46
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-third-link:hover {
\t\tcolor: ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_hover_font_color", [], "any", false, false, false, 47);
        echo ";
\t\tfont-weight: ";
        // line 48
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_hover_font_weight", [], "any", false, false, false, 48);
        echo ";
\t}
    #pt-menu-";
        // line 50
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items {
        background: ";
        // line 51
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_bg", [], "any", false, false, false, 51);
        echo ";
        color: ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color", [], "any", false, false, false, 52);
        echo ";
    }
    #pt-menu-";
        // line 54
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items:hover, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items.active {
        background: ";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_bg_hover", [], "any", false, false, false, 55);
        echo ";
        color: ";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color_hover", [], "any", false, false, false, 56);
        echo ";
    }
    #pt-menu-";
        // line 58
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items .a-second-link {
        color: ";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color", [], "any", false, false, false, 59);
        echo ";
        font-size: ";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_size", [], "any", false, false, false, 60);
        echo ";
        text-transform: ";
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_transform", [], "any", false, false, false, 61);
        echo ";
        font-weight: ";
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_weight", [], "any", false, false, false, 62);
        echo ";
    }
    #pt-menu-";
        // line 64
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items .a-second-link:hover,#pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items:hover .a-second-link, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items.active .a-second-link {
        color: ";
        // line 65
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color_hover", [], "any", false, false, false, 65);
        echo ";
        font-weight: ";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_weight_hover", [], "any", false, false, false, 66);
        echo ";
    }
    #pt-menu-";
        // line 68
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items {
        background: ";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_bg", [], "any", false, false, false, 69);
        echo ";
    }
    #pt-menu-";
        // line 71
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items:hover, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items.active {
        background: ";
        // line 72
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_bg_hover", [], "any", false, false, false, 72);
        echo ";
    }
    #pt-menu-";
        // line 74
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items .a-third-link {
        color: ";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_color", [], "any", false, false, false, 75);
        echo ";
        font-size: ";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_size", [], "any", false, false, false, 76);
        echo ";
        text-transform: ";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_transform", [], "any", false, false, false, 77);
        echo ";
        font-weight: ";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_weight", [], "any", false, false, false, 78);
        echo ";
    }
    #pt-menu-";
        // line 80
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items .a-third-link:hover, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items.active .a-third-link {
        color: ";
        // line 81
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_color_hover", [], "any", false, false, false, 81);
        echo ";
        font-weight: ";
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_weight_hover", [], "any", false, false, false, 82);
        echo ";
    }
</style>
";
        // line 85
        if (($context["warning"] ?? null)) {
        } else {
            // line 87
            echo "    ";
            if ((($context["menu_type"] ?? null) == "horizontal")) {
                // line 88
                echo "        <div class=\"pt-menu mobile-menu horizontal-menu pt-menu-bar  ";
                if (($context["user_token"] ?? null)) {
                    echo " ";
                    echo "show-edit-button";
                    echo " ";
                }
                echo "\" id=\"pt-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            
            ";
                // line 90
                if (($context["items"] ?? null)) {
                    // line 91
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 91);
                    echo "\" />
                <div class=\"pt-menu-bar\">
\t\t\t\t\t<i class=\"ion-android-menu\" aria-hidden=\"true\"></i>
\t\t\t\t\t<i class=\"ion-android-close\" aria-hidden=\"true\"></i>
\t\t\t\t</div>
\t\t\t\t<ul class=\"ul-top-items\">
                    ";
                    // line 97
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 98
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 98)) {
                            // line 99
                            echo "                            <li class=\"li-top-item ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 99);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 99)) {
                                echo " home-link ";
                            }
                            echo "\" style=\"float: ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 99);
                            echo "\">
                                ";
                            // line 100
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 100)) {
                                // line 101
                                echo "                                    <a class=\"a-top-link\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 101);
                                echo "\">
                                        ";
                                // line 102
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 102)) {
                                    // line 103
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 103);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 103);
                                    echo "\"/>
                                        ";
                                }
                                // line 105
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 105)) {
                                    // line 106
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 106);
                                    echo "</span>
                                        ";
                                }
                                // line 108
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 108)) {
                                    // line 109
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 111
                                echo "                                    </a>
                                ";
                            } else {
                                // line 113
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 114
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 114)) {
                                    // line 115
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 115);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 115);
                                    echo "\" />
                                        ";
                                }
                                // line 117
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 117)) {
                                    // line 118
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 118);
                                    echo "</span>
                                        ";
                                }
                                // line 120
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 120)) {
                                    // line 121
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 123
                                echo "                                    </a>
                                ";
                            }
                            // line 125
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 125)) {
                                // line 126
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 127
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 127) == "mega")) {
                                    // line 128
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 128) == "children")) {
                                        // line 129
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 129);
                                        echo " ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 129) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 129);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 131
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 131)) > 0)) {
                                            // line 132
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 132));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 133
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 133)) {
                                                    // line 134
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 134)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 134);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 135
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 135) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 135);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 136
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 136);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 136);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 137
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 137)) > 0)) {
                                                        // line 138
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 139
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 139));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 140
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 140)) {
                                                                // line 141
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 141);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 141);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 143
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 144
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 146
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 148
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 149
                                            echo "                                                ";
                                        }
                                        // line 150
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    }
                                    // line 153
                                    echo "
                                        ";
                                    // line 154
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 154) == "category")) {
                                        // line 155
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 155)) > 0)) {
                                            // line 156
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 156);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 156) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 156);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 158
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 158));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 159
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 160
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 161
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 162
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 162);
                                                            echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 162);
                                                            echo "\">
                                                                        ";
                                                            // line 163
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 163)) {
                                                                // line 164
                                                                echo "                                                                            <a href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 164);
                                                                echo "\"><img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 164);
                                                                echo "\" title=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 164);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 164);
                                                                echo "\" class=\"mega-second-image\" /></a>
                                                                        ";
                                                            }
                                                            // line 166
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 166);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 166);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 167
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 167)) > 0)) {
                                                                // line 168
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 169
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 169));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 170
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 170);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 170);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 172
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 174
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 176
                                                        echo "                                                            ";
                                                    }
                                                    // line 177
                                                    echo "                                                        ";
                                                }
                                                // line 178
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 179
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 182
                                        echo "                                        ";
                                    }
                                    // line 183
                                    echo "
                                        ";
                                    // line 184
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 184) == "widget")) {
                                        // line 185
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 185)) > 0)) {
                                            // line 186
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 186);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 186) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 186);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 188
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 188));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 189
                                                echo "                                                        ";
                                                if (($context["type"] == "widget")) {
                                                    // line 190
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 191
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 192
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 192) == "category")) {
                                                                // line 193
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 193);
                                                                echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 193);
                                                                echo "\">
                                                                            ";
                                                                // line 194
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 194)) {
                                                                    // line 195
                                                                    echo "                                                                                <a  href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 195);
                                                                    echo "\"><img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 195);
                                                                    echo "\" title=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 195);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 195);
                                                                    echo "\" class=\"mega-second-image\" /></a>
                                                                            ";
                                                                }
                                                                // line 197
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 197);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 197);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 198
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 198)) > 0)) {
                                                                    // line 199
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 200
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 200));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 201
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 201);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 201);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 203
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 205
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 207
                                                            echo "
                                                                    ";
                                                            // line 208
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 208) == "product")) {
                                                                // line 209
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 209);
                                                                echo " sub-item2-content product-col-menu\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 209);
                                                                echo "\">
                                                                            ";
                                                                // line 210
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 210)) {
                                                                    // line 211
                                                                    echo "                                                                                <a  href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 211);
                                                                    echo "\"><img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 211);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 211);
                                                                    echo "\" class=\"mega-second-image\" /></a>
                                                                            ";
                                                                }
                                                                // line 213
                                                                echo "                                                                           <h4 class=\"product-menu-name\"><a class=\"a-mega-second-link product-menu-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 213);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 213);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 216
                                                            echo "
                                                                    ";
                                                            // line 217
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 217) == "html")) {
                                                                // line 218
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 218);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 218);
                                                                echo "\">
                                                                            ";
                                                                // line 219
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 219)) {
                                                                    echo "<h4 class=\"html-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 219);
                                                                    echo "</h4>";
                                                                }
                                                                // line 220
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 220);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 223
                                                            echo "
                                                                    ";
                                                            // line 224
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 224) == "link")) {
                                                                // line 225
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 225);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 225);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 226
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 226);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 226);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 229
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 230
                                                        echo "                                                            ";
                                                    }
                                                    // line 231
                                                    echo "                                                        ";
                                                }
                                                // line 232
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 233
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 236
                                        echo "                                        ";
                                    }
                                    // line 237
                                    echo "                                    ";
                                }
                                // line 238
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 240
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 240) == "flyout")) {
                                    // line 241
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 241) == "children")) {
                                        // line 242
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 242)) > 0)) {
                                            // line 243
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 243);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 245
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 245));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 246
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 246)) {
                                                    // line 247
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 248
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 248);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 249
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 249);
                                                    echo "</span>
                                                                        ";
                                                    // line 250
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 250)) > 0)) {
                                                        // line 251
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 251) == "left")) {
                                                            // line 252
                                                            echo "                                                                                <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 254
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 254) == "right")) {
                                                            // line 255
                                                            echo "                                                                                <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 257
                                                        echo "                                                                        ";
                                                    }
                                                    // line 258
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 259
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 259)) > 0)) {
                                                        // line 260
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 260);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 262
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 262));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 263
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 263)) {
                                                                // line 264
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 265
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 265);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 265);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 268
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 269
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 272
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 274
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 275
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 278
                                        echo "                                        ";
                                    }
                                    // line 279
                                    echo "
                                        ";
                                    // line 280
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 280) == "category")) {
                                        // line 281
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 281)) > 0)) {
                                            // line 282
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 282);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 284
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 284));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 285
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 286
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 287
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 288
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 289
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 289);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 290
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 290);
                                                            echo "</span>
                                                                                ";
                                                            // line 291
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 291)) > 0)) {
                                                                // line 292
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 292) == "left")) {
                                                                    // line 293
                                                                    echo "                                                                                        <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 295
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 295) == "right")) {
                                                                    // line 296
                                                                    echo "                                                                                        <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 298
                                                                echo "                                                                                ";
                                                            }
                                                            // line 299
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 300
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 300)) > 0)) {
                                                                // line 301
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 301);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 303
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 303));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 304
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 305
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 305);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 305);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 308
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 311
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 313
                                                        echo "                                                                ";
                                                    }
                                                    // line 314
                                                    echo "                                                            ";
                                                }
                                                // line 315
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 316
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 319
                                        echo "                                        ";
                                    }
                                    // line 320
                                    echo "                                    ";
                                }
                                // line 321
                                echo "                                ";
                            }
                            // line 322
                            echo "                            </li>
                        ";
                        }
                        // line 324
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 325
                    echo "                </ul>
            ";
                }
                // line 327
                echo "        </div>
    ";
            }
            // line 329
            echo "
    ";
            // line 330
            $context["item_show"] = twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_show", [], "any", false, false, false, 330);
            // line 331
            echo "    ";
            if ((($context["menu_type"] ?? null) == "vertical")) {
                // line 332
                echo "        ";
                $context["count"] = 0;
                // line 333
                echo "        <div class=\"pt-menu vertical-menu visible-lg ";
                if (($context["user_token"] ?? null)) {
                    echo " ";
                    echo "show-edit-button";
                    echo " ";
                }
                echo "\" id=\"pt-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            
            ";
                // line 335
                if (($context["items"] ?? null)) {
                    // line 336
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 336);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <div class=\"text-vertical-bar\"><span>";
                    // line 338
                    echo ($context["text_vertical_bar"] ?? null);
                    echo "</span></div>
                </div>
                <ul class=\"ul-top-items\">
                    ";
                    // line 341
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 342
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 342)) {
                            // line 343
                            echo "                            ";
                            $context["count"] = (($context["count"] ?? null) + 1);
                            // line 344
                            echo "                            <li class=\"li-top-item ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 344);
                            echo " ";
                            echo (((($context["count"] ?? null) > ($context["item_show"] ?? null))) ? ("over") : (""));
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 344)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 345
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 345)) {
                                // line 346
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 346);
                                echo "\">
                                        ";
                                // line 347
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 347)) {
                                    // line 348
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 348);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 348);
                                    echo "\" />
                                        ";
                                }
                                // line 350
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 350)) {
                                    // line 351
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 351);
                                    echo "</span>
                                        ";
                                }
                                // line 353
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 353)) {
                                    // line 354
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 356
                                echo "                                    </a>
                                ";
                            } else {
                                // line 358
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 359
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 359)) {
                                    // line 360
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 360);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 360);
                                    echo "\" />
                                        ";
                                }
                                // line 362
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 362)) {
                                    // line 363
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 363);
                                    echo "</span>
                                        ";
                                }
                                // line 365
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 365)) {
                                    // line 366
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 368
                                echo "                                    </a>
                                ";
                            }
                            // line 370
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 370)) {
                                // line 371
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 372
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 372) == "mega")) {
                                    // line 373
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 373) == "children")) {
                                        // line 374
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 374) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 374);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 376
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 376)) > 0)) {
                                            // line 377
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 377));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 378
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 378)) {
                                                    // line 379
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 379)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 379);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 380
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 380) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 380);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 381
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 381);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 381);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 382
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 382)) > 0)) {
                                                        // line 383
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 384
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 384));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 385
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 385)) {
                                                                // line 386
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 386);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 386);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 388
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 389
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 391
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 393
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 394
                                            echo "                                                ";
                                        }
                                        // line 395
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    } else {
                                        // line 398
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 398)) > 0)) {
                                            // line 399
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 399) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 399);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 401
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 401));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 402
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 403
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 404
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 405
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 405);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 405);
                                                            echo "\">
                                                                        ";
                                                            // line 406
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 406)) {
                                                                // line 407
                                                                echo "                                                                            <img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 407);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 407);
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 409
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 409);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 409);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 410
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 410)) > 0)) {
                                                                // line 411
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 412
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 412));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 413
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 413);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 413);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 415
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 417
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 419
                                                        echo "                                                            ";
                                                    }
                                                    // line 420
                                                    echo "                                                        ";
                                                }
                                                // line 421
                                                echo "
                                                        ";
                                                // line 422
                                                if (($context["type"] == "widget")) {
                                                    // line 423
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 424
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 425
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 425) == "category")) {
                                                                // line 426
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 426);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 426);
                                                                echo "\">
                                                                            ";
                                                                // line 427
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 427)) {
                                                                    // line 428
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 428);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 428);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 430
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 430);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 430);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 431
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 431)) > 0)) {
                                                                    // line 432
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 433
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 433));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 434
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 434);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 434);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 436
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 438
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 440
                                                            echo "
                                                                    ";
                                                            // line 441
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 441) == "product")) {
                                                                // line 442
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 442);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 442);
                                                                echo "\">
                                                                            ";
                                                                // line 443
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 443)) {
                                                                    // line 444
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 444);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 444);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 446
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 446);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 446);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 449
                                                            echo "
                                                                    ";
                                                            // line 450
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 450) == "html")) {
                                                                // line 451
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 451);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 451);
                                                                echo "\">
                                                                            ";
                                                                // line 452
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 452)) {
                                                                    echo "<h4><strong>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 452);
                                                                    echo "</strong></h4>";
                                                                }
                                                                // line 453
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 453);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 456
                                                            echo "
                                                                    ";
                                                            // line 457
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 457) == "link")) {
                                                                // line 458
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 458);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 458);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 459
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 459);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 459);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 462
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 463
                                                        echo "                                                            ";
                                                    }
                                                    // line 464
                                                    echo "                                                        ";
                                                }
                                                // line 465
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 466
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 469
                                        echo "                                        ";
                                    }
                                    // line 470
                                    echo "                                    ";
                                }
                                // line 471
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 473
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 473) == "flyout")) {
                                    // line 474
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 474) == "children")) {
                                        // line 475
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 475)) > 0)) {
                                            // line 476
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 476);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 478
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 478));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 479
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 479)) {
                                                    // line 480
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 481
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 481);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 482
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 482);
                                                    echo "</span>
                                                                        ";
                                                    // line 483
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 483)) > 0)) {
                                                        // line 484
                                                        echo "                                                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                        ";
                                                    }
                                                    // line 486
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 487
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 487)) > 0)) {
                                                        // line 488
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 488);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 490
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 490));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 491
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 491)) {
                                                                // line 492
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 493
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 493);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 493);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 496
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 497
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 500
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 502
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 503
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 506
                                        echo "                                        ";
                                    }
                                    // line 507
                                    echo "
                                        ";
                                    // line 508
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 508) == "category")) {
                                        // line 509
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 509)) > 0)) {
                                            // line 510
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 510);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 512
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 512));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 513
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 514
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 515
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 516
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 517
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 517);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 518
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 518);
                                                            echo "</span>
                                                                                ";
                                                            // line 519
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 519)) > 0)) {
                                                                // line 520
                                                                echo "                                                                                    <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                ";
                                                            }
                                                            // line 522
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 523
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 523)) > 0)) {
                                                                // line 524
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 524);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 526
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 526));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 527
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 528
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 528);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 528);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 531
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 534
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 536
                                                        echo "                                                                ";
                                                    }
                                                    // line 537
                                                    echo "                                                            ";
                                                }
                                                // line 538
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 539
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 542
                                        echo "                                        ";
                                    }
                                    // line 543
                                    echo "                                    ";
                                }
                                // line 544
                                echo "                                ";
                            }
                            // line 545
                            echo "                            </li>
                        ";
                        }
                        // line 547
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 548
                    echo "                    ";
                    if ((($context["count"] ?? null) > ($context["item_show"] ?? null))) {
                        // line 549
                        echo "                        <li class=\"li-top-item li-over li-plus\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-plus a-over\"><span>";
                        // line 550
                        echo ($context["text_more_item"] ?? null);
                        echo "</span></a>
                        </li>
                        <li class=\"li-top-item li-over li-minus over\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-minus a-over\"><span>";
                        // line 553
                        echo ($context["text_close_item"] ?? null);
                        echo "</span></a>
                        </li>
                    ";
                    }
                    // line 556
                    echo "                </ul>
            ";
                }
                // line 558
                echo "        </div>
    ";
            }
            // line 560
            echo "
    ";
            // line 561
            if ((($context["menu_type"] ?? null) == "mobile")) {
                // line 562
                echo "        <div class=\"pt-menu mobile-menu hidden-lg  ";
                if (($context["user_token"] ?? null)) {
                    echo " ";
                    echo "show-edit-button";
                    echo " ";
                }
                echo "\" id=\"pt-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            
            ";
                // line 564
                if (($context["items"] ?? null)) {
                    // line 565
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 565);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <i class=\"ion-android-menu\" aria-hidden=\"true\"></i>
                    <i class=\"ion-android-close\" aria-hidden=\"true\"></i>
                </div>
                <ul class=\"ul-top-items\">
                    <li class=\"menu-mobile-title\"><h3>";
                    // line 571
                    echo ($context["text_mobile_bar"] ?? null);
                    echo "</h3></li>
\t\t\t\t\t";
                    // line 572
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 573
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 573)) {
                            // line 574
                            echo "                            <li class=\"li-top-item ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 574)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 575
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 575)) {
                                // line 576
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 576);
                                echo "\">
                                        ";
                                // line 577
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 577)) {
                                    // line 578
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 578);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 578);
                                    echo "\" />
                                        ";
                                }
                                // line 580
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 580)) {
                                    // line 581
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 581);
                                    echo "</span>
                                        ";
                                }
                                // line 583
                                echo "                                    </a>
                                    ";
                                // line 584
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 584) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 584) != "widget"))) {
                                    // line 585
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 590
                                echo "                                ";
                            } else {
                                // line 591
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 592
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 592)) {
                                    // line 593
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 593);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 593);
                                    echo "\" />
                                        ";
                                }
                                // line 595
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 595)) {
                                    // line 596
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 596);
                                    echo "</span>
                                        ";
                                }
                                // line 598
                                echo "                                    </a>
                                    ";
                                // line 599
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 599) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 599) != "widget"))) {
                                    // line 600
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 605
                                echo "                                ";
                            }
                            // line 606
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 606)) {
                                // line 607
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 607) == "children")) {
                                    // line 608
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 608)) > 0)) {
                                        // line 609
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 611
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 611));
                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                            // line 612
                                            echo "                                                        ";
                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 612)) {
                                                // line 613
                                                echo "                                                            <li class=\"li-second-items\">
                                                                <a href=\"";
                                                // line 614
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 614);
                                                echo "\" class=\"a-second-link a-item\">
                                                                    <span class=\"a-second-title\">";
                                                // line 615
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 615);
                                                echo "</span>
                                                                </a>
                                                                ";
                                                // line 617
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 617)) > 0)) {
                                                    // line 618
                                                    echo "                                                                    <span class=\"second-click-show a-click-show\">
                                                                        <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                        <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                    </span>
                                                                ";
                                                }
                                                // line 623
                                                echo "                                                                ";
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 623)) > 0)) {
                                                    // line 624
                                                    echo "                                                                    <div class=\"flyout-third-items\">
                                                                        <ul class=\"ul-third-items\">
                                                                            ";
                                                    // line 626
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 626));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                        // line 627
                                                        echo "                                                                                ";
                                                        if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 627)) {
                                                            // line 628
                                                            echo "                                                                                    <li class=\"li-third-items\">
                                                                                        <a href=\"";
                                                            // line 629
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 629);
                                                            echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 629);
                                                            echo "</span></a>
                                                                                    </li>
                                                                                ";
                                                        }
                                                        // line 632
                                                        echo "                                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 633
                                                    echo "                                                                        </ul>
                                                                    </div>
                                                                ";
                                                }
                                                // line 636
                                                echo "                                                            </li>
                                                        ";
                                            }
                                            // line 638
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 639
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 642
                                    echo "                                    ";
                                }
                                // line 643
                                echo "
                                    ";
                                // line 644
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 644) == "category")) {
                                    // line 645
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 645)) > 0)) {
                                        // line 646
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 648
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 648));
                                        foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                            // line 649
                                            echo "                                                        ";
                                            if (($context["type"] == "category")) {
                                                // line 650
                                                echo "                                                            ";
                                                if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                    // line 651
                                                    echo "                                                                ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                    foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                        // line 652
                                                        echo "                                                                    <li class=\"li-second-items\">
                                                                        <a href=\"";
                                                        // line 653
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 653);
                                                        echo "\" class=\"a-second-link a-item\">
                                                                            <span class=\"a-second-title\">";
                                                        // line 654
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 654);
                                                        echo "</span>
                                                                        </a>
                                                                        ";
                                                        // line 656
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 656)) > 0)) {
                                                            // line 657
                                                            echo "                                                                            <span class=\"second-click-show a-click-show\">
                                                                                <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                                <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                            </span>
                                                                        ";
                                                        }
                                                        // line 662
                                                        echo "                                                                        ";
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 662)) > 0)) {
                                                            // line 663
                                                            echo "                                                                            <div class=\"flyout-third-items\">
                                                                                <ul class=\"ul-third-items\">
                                                                                    ";
                                                            // line 665
                                                            $context['_parent'] = $context;
                                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 665));
                                                            foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                // line 666
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 667
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 667);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 667);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            $_parent = $context['_parent'];
                                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                                            // line 670
                                                            echo "                                                                                </ul>
                                                                            </div>
                                                                        ";
                                                        }
                                                        // line 673
                                                        echo "                                                                    </li>
                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 675
                                                    echo "                                                            ";
                                                }
                                                // line 676
                                                echo "                                                        ";
                                            }
                                            // line 677
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 678
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 681
                                    echo "                                    ";
                                }
                                // line 682
                                echo "                                ";
                            }
                            // line 683
                            echo "                            </li>
                        ";
                        }
                        // line 685
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 686
                    echo "                </ul>
            ";
                }
                // line 688
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "tt_rozer2/template/plaza/module/ptmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2234 => 688,  2230 => 686,  2224 => 685,  2220 => 683,  2217 => 682,  2214 => 681,  2209 => 678,  2203 => 677,  2200 => 676,  2197 => 675,  2190 => 673,  2185 => 670,  2174 => 667,  2171 => 666,  2167 => 665,  2163 => 663,  2160 => 662,  2153 => 657,  2151 => 656,  2146 => 654,  2142 => 653,  2139 => 652,  2134 => 651,  2131 => 650,  2128 => 649,  2124 => 648,  2120 => 646,  2117 => 645,  2115 => 644,  2112 => 643,  2109 => 642,  2104 => 639,  2098 => 638,  2094 => 636,  2089 => 633,  2083 => 632,  2075 => 629,  2072 => 628,  2069 => 627,  2065 => 626,  2061 => 624,  2058 => 623,  2051 => 618,  2049 => 617,  2044 => 615,  2040 => 614,  2037 => 613,  2034 => 612,  2030 => 611,  2026 => 609,  2023 => 608,  2020 => 607,  2017 => 606,  2014 => 605,  2007 => 600,  2005 => 599,  2002 => 598,  1996 => 596,  1993 => 595,  1985 => 593,  1983 => 592,  1980 => 591,  1977 => 590,  1970 => 585,  1968 => 584,  1965 => 583,  1959 => 581,  1956 => 580,  1948 => 578,  1946 => 577,  1941 => 576,  1939 => 575,  1932 => 574,  1929 => 573,  1925 => 572,  1921 => 571,  1909 => 565,  1907 => 564,  1895 => 562,  1893 => 561,  1890 => 560,  1886 => 558,  1882 => 556,  1876 => 553,  1870 => 550,  1867 => 549,  1864 => 548,  1858 => 547,  1854 => 545,  1851 => 544,  1848 => 543,  1845 => 542,  1840 => 539,  1834 => 538,  1831 => 537,  1828 => 536,  1821 => 534,  1816 => 531,  1805 => 528,  1802 => 527,  1798 => 526,  1792 => 524,  1790 => 523,  1787 => 522,  1783 => 520,  1781 => 519,  1777 => 518,  1773 => 517,  1770 => 516,  1765 => 515,  1762 => 514,  1759 => 513,  1755 => 512,  1749 => 510,  1746 => 509,  1744 => 508,  1741 => 507,  1738 => 506,  1733 => 503,  1727 => 502,  1723 => 500,  1718 => 497,  1712 => 496,  1704 => 493,  1701 => 492,  1698 => 491,  1694 => 490,  1688 => 488,  1686 => 487,  1683 => 486,  1679 => 484,  1677 => 483,  1673 => 482,  1669 => 481,  1666 => 480,  1663 => 479,  1659 => 478,  1653 => 476,  1650 => 475,  1647 => 474,  1645 => 473,  1641 => 471,  1638 => 470,  1635 => 469,  1630 => 466,  1624 => 465,  1621 => 464,  1618 => 463,  1612 => 462,  1604 => 459,  1597 => 458,  1595 => 457,  1592 => 456,  1585 => 453,  1579 => 452,  1572 => 451,  1570 => 450,  1567 => 449,  1558 => 446,  1550 => 444,  1548 => 443,  1541 => 442,  1539 => 441,  1536 => 440,  1532 => 438,  1528 => 436,  1517 => 434,  1513 => 433,  1510 => 432,  1508 => 431,  1501 => 430,  1493 => 428,  1491 => 427,  1484 => 426,  1481 => 425,  1476 => 424,  1473 => 423,  1471 => 422,  1468 => 421,  1465 => 420,  1462 => 419,  1455 => 417,  1451 => 415,  1440 => 413,  1436 => 412,  1433 => 411,  1431 => 410,  1424 => 409,  1416 => 407,  1414 => 406,  1407 => 405,  1402 => 404,  1399 => 403,  1396 => 402,  1392 => 401,  1382 => 399,  1379 => 398,  1374 => 395,  1371 => 394,  1365 => 393,  1361 => 391,  1357 => 389,  1351 => 388,  1343 => 386,  1340 => 385,  1336 => 384,  1333 => 383,  1331 => 382,  1325 => 381,  1315 => 380,  1307 => 379,  1304 => 378,  1299 => 377,  1297 => 376,  1287 => 374,  1284 => 373,  1282 => 372,  1279 => 371,  1276 => 370,  1272 => 368,  1268 => 366,  1265 => 365,  1259 => 363,  1256 => 362,  1248 => 360,  1246 => 359,  1243 => 358,  1239 => 356,  1235 => 354,  1232 => 353,  1226 => 351,  1223 => 350,  1215 => 348,  1213 => 347,  1208 => 346,  1206 => 345,  1195 => 344,  1192 => 343,  1189 => 342,  1185 => 341,  1179 => 338,  1171 => 336,  1169 => 335,  1157 => 333,  1154 => 332,  1151 => 331,  1149 => 330,  1146 => 329,  1142 => 327,  1138 => 325,  1132 => 324,  1128 => 322,  1125 => 321,  1122 => 320,  1119 => 319,  1114 => 316,  1108 => 315,  1105 => 314,  1102 => 313,  1095 => 311,  1090 => 308,  1079 => 305,  1076 => 304,  1072 => 303,  1066 => 301,  1064 => 300,  1061 => 299,  1058 => 298,  1054 => 296,  1051 => 295,  1047 => 293,  1044 => 292,  1042 => 291,  1038 => 290,  1034 => 289,  1031 => 288,  1026 => 287,  1023 => 286,  1020 => 285,  1016 => 284,  1010 => 282,  1007 => 281,  1005 => 280,  1002 => 279,  999 => 278,  994 => 275,  988 => 274,  984 => 272,  979 => 269,  973 => 268,  965 => 265,  962 => 264,  959 => 263,  955 => 262,  949 => 260,  947 => 259,  944 => 258,  941 => 257,  937 => 255,  934 => 254,  930 => 252,  927 => 251,  925 => 250,  921 => 249,  917 => 248,  914 => 247,  911 => 246,  907 => 245,  901 => 243,  898 => 242,  895 => 241,  893 => 240,  889 => 238,  886 => 237,  883 => 236,  878 => 233,  872 => 232,  869 => 231,  866 => 230,  860 => 229,  852 => 226,  845 => 225,  843 => 224,  840 => 223,  833 => 220,  827 => 219,  820 => 218,  818 => 217,  815 => 216,  806 => 213,  796 => 211,  794 => 210,  787 => 209,  785 => 208,  782 => 207,  778 => 205,  774 => 203,  763 => 201,  759 => 200,  756 => 199,  754 => 198,  747 => 197,  735 => 195,  733 => 194,  726 => 193,  723 => 192,  718 => 191,  715 => 190,  712 => 189,  708 => 188,  696 => 186,  693 => 185,  691 => 184,  688 => 183,  685 => 182,  680 => 179,  674 => 178,  671 => 177,  668 => 176,  661 => 174,  657 => 172,  646 => 170,  642 => 169,  639 => 168,  637 => 167,  630 => 166,  618 => 164,  616 => 163,  609 => 162,  604 => 161,  601 => 160,  598 => 159,  594 => 158,  582 => 156,  579 => 155,  577 => 154,  574 => 153,  569 => 150,  566 => 149,  560 => 148,  556 => 146,  552 => 144,  546 => 143,  538 => 141,  535 => 140,  531 => 139,  528 => 138,  526 => 137,  520 => 136,  510 => 135,  502 => 134,  499 => 133,  494 => 132,  492 => 131,  480 => 129,  477 => 128,  475 => 127,  472 => 126,  469 => 125,  465 => 123,  461 => 121,  458 => 120,  452 => 118,  449 => 117,  441 => 115,  439 => 114,  436 => 113,  432 => 111,  428 => 109,  425 => 108,  419 => 106,  416 => 105,  408 => 103,  406 => 102,  401 => 101,  399 => 100,  388 => 99,  385 => 98,  381 => 97,  369 => 91,  367 => 90,  355 => 88,  352 => 87,  349 => 85,  343 => 82,  339 => 81,  333 => 80,  328 => 78,  324 => 77,  320 => 76,  316 => 75,  312 => 74,  307 => 72,  301 => 71,  296 => 69,  292 => 68,  287 => 66,  283 => 65,  275 => 64,  270 => 62,  266 => 61,  262 => 60,  258 => 59,  254 => 58,  249 => 56,  245 => 55,  239 => 54,  234 => 52,  230 => 51,  226 => 50,  221 => 48,  217 => 47,  213 => 46,  208 => 44,  204 => 43,  200 => 42,  196 => 41,  192 => 40,  187 => 38,  183 => 37,  179 => 36,  174 => 34,  170 => 33,  166 => 32,  162 => 31,  158 => 30,  147 => 28,  143 => 27,  138 => 25,  132 => 24,  127 => 22,  123 => 21,  119 => 20,  111 => 19,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  84 => 13,  80 => 12,  76 => 11,  71 => 9,  67 => 8,  63 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer2/template/plaza/module/ptmenu.twig", "");
    }
}
