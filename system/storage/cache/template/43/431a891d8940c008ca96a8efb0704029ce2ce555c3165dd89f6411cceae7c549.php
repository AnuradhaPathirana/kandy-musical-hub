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

/* tt_rozer1/template/plaza/module/ptmenu.twig */
class __TwigTemplate_5533aec2e5a2492cdeb6a31350bd42ad62b959ec38668fcb62a6f9a31c9f58d1 extends \Twig\Template
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
                echo "        <div class=\"pt-menu horizontal-menu pt-menu-bar visible-lg  ";
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
                <ul class=\"ul-top-items\">
                    ";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 94
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 94)) {
                            // line 95
                            echo "                            <li class=\"li-top-item ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 95);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 95)) {
                                echo " home-link ";
                            }
                            echo "\" style=\"float: ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 95);
                            echo "\">
                                ";
                            // line 96
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 96)) {
                                // line 97
                                echo "                                    <a class=\"a-top-link\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 97);
                                echo "\">
                                        ";
                                // line 98
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 98)) {
                                    // line 99
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 99);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 99);
                                    echo "\"/>
                                        ";
                                }
                                // line 101
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 101)) {
                                    // line 102
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 102);
                                    echo "</span>
                                        ";
                                }
                                // line 104
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 104)) {
                                    // line 105
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 107
                                echo "                                    </a>
                                ";
                            } else {
                                // line 109
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 110
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 110)) {
                                    // line 111
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 111);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 111);
                                    echo "\" />
                                        ";
                                }
                                // line 113
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 113)) {
                                    // line 114
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 114);
                                    echo "</span>
                                        ";
                                }
                                // line 116
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 116)) {
                                    // line 117
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 119
                                echo "                                    </a>
                                ";
                            }
                            // line 121
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 121)) {
                                // line 122
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 123
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 123) == "mega")) {
                                    // line 124
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 124) == "children")) {
                                        // line 125
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 125);
                                        echo " ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 125) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 125);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 127
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 127)) > 0)) {
                                            // line 128
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 128));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 129
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 129)) {
                                                    // line 130
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 130)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 130);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 131
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 131) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 131);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 132
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 132);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 132);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 133
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 133)) > 0)) {
                                                        // line 134
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 135
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 135));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 136
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 136)) {
                                                                // line 137
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 137);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 137);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 139
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 140
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 142
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 144
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 145
                                            echo "                                                ";
                                        }
                                        // line 146
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    }
                                    // line 149
                                    echo "
                                        ";
                                    // line 150
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 150) == "category")) {
                                        // line 151
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 151)) > 0)) {
                                            // line 152
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 152);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 152) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 152);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 154
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 154));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 155
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 156
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 157
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 158
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 158);
                                                            echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 158);
                                                            echo "\">
                                                                        ";
                                                            // line 159
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 159)) {
                                                                // line 160
                                                                echo "                                                                            <a href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 160);
                                                                echo "\"><img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 160);
                                                                echo "\" title=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 160);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 160);
                                                                echo "\" class=\"mega-second-image\" /></a>
                                                                        ";
                                                            }
                                                            // line 162
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 162);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 162);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 163
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 163)) > 0)) {
                                                                // line 164
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 165
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 165));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 166
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 166);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 166);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 168
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 170
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 172
                                                        echo "                                                            ";
                                                    }
                                                    // line 173
                                                    echo "                                                        ";
                                                }
                                                // line 174
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 175
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 178
                                        echo "                                        ";
                                    }
                                    // line 179
                                    echo "
                                        ";
                                    // line 180
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 180) == "widget")) {
                                        // line 181
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 181)) > 0)) {
                                            // line 182
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 182);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 182) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 182);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 184
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 184));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 185
                                                echo "                                                        ";
                                                if (($context["type"] == "widget")) {
                                                    // line 186
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 187
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 188
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 188) == "category")) {
                                                                // line 189
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 189);
                                                                echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 189);
                                                                echo "\">
                                                                            ";
                                                                // line 190
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 190)) {
                                                                    // line 191
                                                                    echo "                                                                                <a  href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 191);
                                                                    echo "\"><img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 191);
                                                                    echo "\" title=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 191);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 191);
                                                                    echo "\" class=\"mega-second-image\" /></a>
                                                                            ";
                                                                }
                                                                // line 193
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 193);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 193);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 194
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 194)) > 0)) {
                                                                    // line 195
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 196
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 196));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 197
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 197);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 197);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 199
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 201
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 203
                                                            echo "
                                                                    ";
                                                            // line 204
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 204) == "product")) {
                                                                // line 205
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 205);
                                                                echo " sub-item2-content product-col-menu\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 205);
                                                                echo "\">
                                                                            ";
                                                                // line 206
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 206)) {
                                                                    // line 207
                                                                    echo "                                                                                <a  href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 207);
                                                                    echo "\"><img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 207);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 207);
                                                                    echo "\" class=\"mega-second-image\" /></a>
                                                                            ";
                                                                }
                                                                // line 209
                                                                echo "                                                                           <h4 class=\"product-menu-name\"><a class=\"a-mega-second-link product-menu-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 209);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 209);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 212
                                                            echo "
                                                                    ";
                                                            // line 213
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 213) == "html")) {
                                                                // line 214
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 214);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 214);
                                                                echo "\">
                                                                            ";
                                                                // line 215
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 215)) {
                                                                    echo "<h4 class=\"html-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 215);
                                                                    echo "</h4>";
                                                                }
                                                                // line 216
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 216);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 219
                                                            echo "
                                                                    ";
                                                            // line 220
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 220) == "link")) {
                                                                // line 221
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 221);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 221);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 222
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 222);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 222);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 225
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 226
                                                        echo "                                                            ";
                                                    }
                                                    // line 227
                                                    echo "                                                        ";
                                                }
                                                // line 228
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 229
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 232
                                        echo "                                        ";
                                    }
                                    // line 233
                                    echo "                                    ";
                                }
                                // line 234
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 236
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 236) == "flyout")) {
                                    // line 237
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 237) == "children")) {
                                        // line 238
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 238)) > 0)) {
                                            // line 239
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 239);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 241
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 241));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 242
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 242)) {
                                                    // line 243
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 244
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 244);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 245
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 245);
                                                    echo "</span>
                                                                        ";
                                                    // line 246
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 246)) > 0)) {
                                                        // line 247
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 247) == "left")) {
                                                            // line 248
                                                            echo "                                                                                <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 250
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 250) == "right")) {
                                                            // line 251
                                                            echo "                                                                                <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 253
                                                        echo "                                                                        ";
                                                    }
                                                    // line 254
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 255
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 255)) > 0)) {
                                                        // line 256
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 256);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 258
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 258));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 259
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 259)) {
                                                                // line 260
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 261
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 261);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 261);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 264
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 265
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 268
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 270
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 271
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 274
                                        echo "                                        ";
                                    }
                                    // line 275
                                    echo "
                                        ";
                                    // line 276
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 276) == "category")) {
                                        // line 277
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 277)) > 0)) {
                                            // line 278
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 278);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 280
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 280));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 281
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 282
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 283
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 284
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 285
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 285);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 286
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 286);
                                                            echo "</span>
                                                                                ";
                                                            // line 287
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 287)) > 0)) {
                                                                // line 288
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 288) == "left")) {
                                                                    // line 289
                                                                    echo "                                                                                        <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 291
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 291) == "right")) {
                                                                    // line 292
                                                                    echo "                                                                                        <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 294
                                                                echo "                                                                                ";
                                                            }
                                                            // line 295
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 296
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 296)) > 0)) {
                                                                // line 297
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 297);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 299
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 299));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 300
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 301
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 301);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 301);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 304
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 307
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 309
                                                        echo "                                                                ";
                                                    }
                                                    // line 310
                                                    echo "                                                            ";
                                                }
                                                // line 311
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 312
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 315
                                        echo "                                        ";
                                    }
                                    // line 316
                                    echo "                                    ";
                                }
                                // line 317
                                echo "                                ";
                            }
                            // line 318
                            echo "                            </li>
                        ";
                        }
                        // line 320
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 321
                    echo "                </ul>
            ";
                }
                // line 323
                echo "        </div>
    ";
            }
            // line 325
            echo "
    ";
            // line 326
            $context["item_show"] = twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_show", [], "any", false, false, false, 326);
            // line 327
            echo "    ";
            if ((($context["menu_type"] ?? null) == "vertical")) {
                // line 328
                echo "        ";
                $context["count"] = 0;
                // line 329
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
                // line 331
                if (($context["items"] ?? null)) {
                    // line 332
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 332);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <div class=\"text-vertical-bar\"><span>";
                    // line 334
                    echo ($context["text_vertical_bar"] ?? null);
                    echo "</span></div>
                </div>
                <ul class=\"ul-top-items\">
                    ";
                    // line 337
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 338
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 338)) {
                            // line 339
                            echo "                            ";
                            $context["count"] = (($context["count"] ?? null) + 1);
                            // line 340
                            echo "                            <li class=\"li-top-item ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 340);
                            echo " ";
                            echo (((($context["count"] ?? null) > ($context["item_show"] ?? null))) ? ("over") : (""));
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 340)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 341
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 341)) {
                                // line 342
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 342);
                                echo "\">
                                        ";
                                // line 343
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 343)) {
                                    // line 344
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 344);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 344);
                                    echo "\" />
                                        ";
                                }
                                // line 346
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 346)) {
                                    // line 347
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 347);
                                    echo "</span>
                                        ";
                                }
                                // line 349
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 349)) {
                                    // line 350
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 352
                                echo "                                    </a>
                                ";
                            } else {
                                // line 354
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 355
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 355)) {
                                    // line 356
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 356);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 356);
                                    echo "\" />
                                        ";
                                }
                                // line 358
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 358)) {
                                    // line 359
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 359);
                                    echo "</span>
                                        ";
                                }
                                // line 361
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 361)) {
                                    // line 362
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 364
                                echo "                                    </a>
                                ";
                            }
                            // line 366
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 366)) {
                                // line 367
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 368
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 368) == "mega")) {
                                    // line 369
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 369) == "children")) {
                                        // line 370
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 370) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 370);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 372
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 372)) > 0)) {
                                            // line 373
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 373));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 374
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 374)) {
                                                    // line 375
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 375)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 375);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 376
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 376) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 376);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 377
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 377);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 377);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 378
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 378)) > 0)) {
                                                        // line 379
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 380
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 380));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 381
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 381)) {
                                                                // line 382
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 382);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 382);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 384
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 385
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 387
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 389
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 390
                                            echo "                                                ";
                                        }
                                        // line 391
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    } else {
                                        // line 394
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 394)) > 0)) {
                                            // line 395
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 395) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 395);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 397
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 397));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 398
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 399
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 400
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 401
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 401);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 401);
                                                            echo "\">
                                                                        ";
                                                            // line 402
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 402)) {
                                                                // line 403
                                                                echo "                                                                            <img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 403);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 403);
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 405
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 405);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 405);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 406
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 406)) > 0)) {
                                                                // line 407
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 408
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 408));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 409
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 409);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 409);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 411
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 413
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 415
                                                        echo "                                                            ";
                                                    }
                                                    // line 416
                                                    echo "                                                        ";
                                                }
                                                // line 417
                                                echo "
                                                        ";
                                                // line 418
                                                if (($context["type"] == "widget")) {
                                                    // line 419
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 420
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 421
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 421) == "category")) {
                                                                // line 422
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 422);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 422);
                                                                echo "\">
                                                                            ";
                                                                // line 423
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 423)) {
                                                                    // line 424
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 424);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 424);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 426
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 426);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 426);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 427
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 427)) > 0)) {
                                                                    // line 428
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 429
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 429));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 430
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 430);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 430);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 432
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 434
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 436
                                                            echo "
                                                                    ";
                                                            // line 437
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 437) == "product")) {
                                                                // line 438
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 438);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 438);
                                                                echo "\">
                                                                            ";
                                                                // line 439
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 439)) {
                                                                    // line 440
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 440);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 440);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 442
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 442);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 442);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 445
                                                            echo "
                                                                    ";
                                                            // line 446
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 446) == "html")) {
                                                                // line 447
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 447);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 447);
                                                                echo "\">
                                                                            ";
                                                                // line 448
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 448)) {
                                                                    echo "<h4><strong>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 448);
                                                                    echo "</strong></h4>";
                                                                }
                                                                // line 449
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 449);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 452
                                                            echo "
                                                                    ";
                                                            // line 453
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 453) == "link")) {
                                                                // line 454
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 454);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 454);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 455
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 455);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 455);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 458
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 459
                                                        echo "                                                            ";
                                                    }
                                                    // line 460
                                                    echo "                                                        ";
                                                }
                                                // line 461
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 462
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 465
                                        echo "                                        ";
                                    }
                                    // line 466
                                    echo "                                    ";
                                }
                                // line 467
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 469
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 469) == "flyout")) {
                                    // line 470
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 470) == "children")) {
                                        // line 471
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 471)) > 0)) {
                                            // line 472
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 472);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 474
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 474));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 475
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 475)) {
                                                    // line 476
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 477
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 477);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 478
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 478);
                                                    echo "</span>
                                                                        ";
                                                    // line 479
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 479)) > 0)) {
                                                        // line 480
                                                        echo "                                                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                        ";
                                                    }
                                                    // line 482
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 483
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 483)) > 0)) {
                                                        // line 484
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 484);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 486
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 486));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 487
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 487)) {
                                                                // line 488
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 489
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 489);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 489);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 492
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 493
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 496
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 498
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 499
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 502
                                        echo "                                        ";
                                    }
                                    // line 503
                                    echo "
                                        ";
                                    // line 504
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 504) == "category")) {
                                        // line 505
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 505)) > 0)) {
                                            // line 506
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 506);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 508
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 508));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 509
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 510
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 511
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 512
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 513
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 513);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 514
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 514);
                                                            echo "</span>
                                                                                ";
                                                            // line 515
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 515)) > 0)) {
                                                                // line 516
                                                                echo "                                                                                    <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                ";
                                                            }
                                                            // line 518
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 519
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 519)) > 0)) {
                                                                // line 520
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 520);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 522
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 522));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 523
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 524
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 524);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 524);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 527
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 530
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 532
                                                        echo "                                                                ";
                                                    }
                                                    // line 533
                                                    echo "                                                            ";
                                                }
                                                // line 534
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 535
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 538
                                        echo "                                        ";
                                    }
                                    // line 539
                                    echo "                                    ";
                                }
                                // line 540
                                echo "                                ";
                            }
                            // line 541
                            echo "                            </li>
                        ";
                        }
                        // line 543
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 544
                    echo "                    ";
                    if ((($context["count"] ?? null) > ($context["item_show"] ?? null))) {
                        // line 545
                        echo "                        <li class=\"li-top-item li-over li-plus\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-plus a-over\"><span>";
                        // line 546
                        echo ($context["text_more_item"] ?? null);
                        echo "</span></a>
                        </li>
                        <li class=\"li-top-item li-over li-minus over\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-minus a-over\"><span>";
                        // line 549
                        echo ($context["text_close_item"] ?? null);
                        echo "</span></a>
                        </li>
                    ";
                    }
                    // line 552
                    echo "                </ul>
            ";
                }
                // line 554
                echo "        </div>
    ";
            }
            // line 556
            echo "
    ";
            // line 557
            if ((($context["menu_type"] ?? null) == "mobile")) {
                // line 558
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
                // line 560
                if (($context["items"] ?? null)) {
                    // line 561
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 561);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <i class=\"ion-android-menu\" aria-hidden=\"true\"></i>
                    <i class=\"ion-android-close\" aria-hidden=\"true\"></i>
                </div>
                <ul class=\"ul-top-items\">
                    <li class=\"menu-mobile-title\"><h3>";
                    // line 567
                    echo ($context["text_mobile_bar"] ?? null);
                    echo "</h3></li>
\t\t\t\t\t";
                    // line 568
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 569
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 569)) {
                            // line 570
                            echo "                            <li class=\"li-top-item ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 570)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 571
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 571)) {
                                // line 572
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 572);
                                echo "\">
                                        ";
                                // line 573
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 573)) {
                                    // line 574
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 574);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 574);
                                    echo "\" />
                                        ";
                                }
                                // line 576
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 576)) {
                                    // line 577
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 577);
                                    echo "</span>
                                        ";
                                }
                                // line 579
                                echo "                                    </a>
                                    ";
                                // line 580
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 580) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 580) != "widget"))) {
                                    // line 581
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 586
                                echo "                                ";
                            } else {
                                // line 587
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 588
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 588)) {
                                    // line 589
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 589);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 589);
                                    echo "\" />
                                        ";
                                }
                                // line 591
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 591)) {
                                    // line 592
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 592);
                                    echo "</span>
                                        ";
                                }
                                // line 594
                                echo "                                    </a>
                                    ";
                                // line 595
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 595) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 595) != "widget"))) {
                                    // line 596
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 601
                                echo "                                ";
                            }
                            // line 602
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 602)) {
                                // line 603
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 603) == "children")) {
                                    // line 604
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 604)) > 0)) {
                                        // line 605
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 607
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 607));
                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                            // line 608
                                            echo "                                                        ";
                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 608)) {
                                                // line 609
                                                echo "                                                            <li class=\"li-second-items\">
                                                                <a href=\"";
                                                // line 610
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 610);
                                                echo "\" class=\"a-second-link a-item\">
                                                                    <span class=\"a-second-title\">";
                                                // line 611
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 611);
                                                echo "</span>
                                                                </a>
                                                                ";
                                                // line 613
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 613)) > 0)) {
                                                    // line 614
                                                    echo "                                                                    <span class=\"second-click-show a-click-show\">
                                                                        <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                        <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                    </span>
                                                                ";
                                                }
                                                // line 619
                                                echo "                                                                ";
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 619)) > 0)) {
                                                    // line 620
                                                    echo "                                                                    <div class=\"flyout-third-items\">
                                                                        <ul class=\"ul-third-items\">
                                                                            ";
                                                    // line 622
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 622));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                        // line 623
                                                        echo "                                                                                ";
                                                        if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 623)) {
                                                            // line 624
                                                            echo "                                                                                    <li class=\"li-third-items\">
                                                                                        <a href=\"";
                                                            // line 625
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 625);
                                                            echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 625);
                                                            echo "</span></a>
                                                                                    </li>
                                                                                ";
                                                        }
                                                        // line 628
                                                        echo "                                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 629
                                                    echo "                                                                        </ul>
                                                                    </div>
                                                                ";
                                                }
                                                // line 632
                                                echo "                                                            </li>
                                                        ";
                                            }
                                            // line 634
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 635
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 638
                                    echo "                                    ";
                                }
                                // line 639
                                echo "
                                    ";
                                // line 640
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 640) == "category")) {
                                    // line 641
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 641)) > 0)) {
                                        // line 642
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 644
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 644));
                                        foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                            // line 645
                                            echo "                                                        ";
                                            if (($context["type"] == "category")) {
                                                // line 646
                                                echo "                                                            ";
                                                if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                    // line 647
                                                    echo "                                                                ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                    foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                        // line 648
                                                        echo "                                                                    <li class=\"li-second-items\">
                                                                        <a href=\"";
                                                        // line 649
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 649);
                                                        echo "\" class=\"a-second-link a-item\">
                                                                            <span class=\"a-second-title\">";
                                                        // line 650
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 650);
                                                        echo "</span>
                                                                        </a>
                                                                        ";
                                                        // line 652
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 652)) > 0)) {
                                                            // line 653
                                                            echo "                                                                            <span class=\"second-click-show a-click-show\">
                                                                                <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                                <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                            </span>
                                                                        ";
                                                        }
                                                        // line 658
                                                        echo "                                                                        ";
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 658)) > 0)) {
                                                            // line 659
                                                            echo "                                                                            <div class=\"flyout-third-items\">
                                                                                <ul class=\"ul-third-items\">
                                                                                    ";
                                                            // line 661
                                                            $context['_parent'] = $context;
                                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 661));
                                                            foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                // line 662
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 663
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 663);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 663);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            $_parent = $context['_parent'];
                                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                                            // line 666
                                                            echo "                                                                                </ul>
                                                                            </div>
                                                                        ";
                                                        }
                                                        // line 669
                                                        echo "                                                                    </li>
                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 671
                                                    echo "                                                            ";
                                                }
                                                // line 672
                                                echo "                                                        ";
                                            }
                                            // line 673
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 674
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 677
                                    echo "                                    ";
                                }
                                // line 678
                                echo "                                ";
                            }
                            // line 679
                            echo "                            </li>
                        ";
                        }
                        // line 681
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 682
                    echo "                </ul>
            ";
                }
                // line 684
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/module/ptmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2230 => 684,  2226 => 682,  2220 => 681,  2216 => 679,  2213 => 678,  2210 => 677,  2205 => 674,  2199 => 673,  2196 => 672,  2193 => 671,  2186 => 669,  2181 => 666,  2170 => 663,  2167 => 662,  2163 => 661,  2159 => 659,  2156 => 658,  2149 => 653,  2147 => 652,  2142 => 650,  2138 => 649,  2135 => 648,  2130 => 647,  2127 => 646,  2124 => 645,  2120 => 644,  2116 => 642,  2113 => 641,  2111 => 640,  2108 => 639,  2105 => 638,  2100 => 635,  2094 => 634,  2090 => 632,  2085 => 629,  2079 => 628,  2071 => 625,  2068 => 624,  2065 => 623,  2061 => 622,  2057 => 620,  2054 => 619,  2047 => 614,  2045 => 613,  2040 => 611,  2036 => 610,  2033 => 609,  2030 => 608,  2026 => 607,  2022 => 605,  2019 => 604,  2016 => 603,  2013 => 602,  2010 => 601,  2003 => 596,  2001 => 595,  1998 => 594,  1992 => 592,  1989 => 591,  1981 => 589,  1979 => 588,  1976 => 587,  1973 => 586,  1966 => 581,  1964 => 580,  1961 => 579,  1955 => 577,  1952 => 576,  1944 => 574,  1942 => 573,  1937 => 572,  1935 => 571,  1928 => 570,  1925 => 569,  1921 => 568,  1917 => 567,  1905 => 561,  1903 => 560,  1891 => 558,  1889 => 557,  1886 => 556,  1882 => 554,  1878 => 552,  1872 => 549,  1866 => 546,  1863 => 545,  1860 => 544,  1854 => 543,  1850 => 541,  1847 => 540,  1844 => 539,  1841 => 538,  1836 => 535,  1830 => 534,  1827 => 533,  1824 => 532,  1817 => 530,  1812 => 527,  1801 => 524,  1798 => 523,  1794 => 522,  1788 => 520,  1786 => 519,  1783 => 518,  1779 => 516,  1777 => 515,  1773 => 514,  1769 => 513,  1766 => 512,  1761 => 511,  1758 => 510,  1755 => 509,  1751 => 508,  1745 => 506,  1742 => 505,  1740 => 504,  1737 => 503,  1734 => 502,  1729 => 499,  1723 => 498,  1719 => 496,  1714 => 493,  1708 => 492,  1700 => 489,  1697 => 488,  1694 => 487,  1690 => 486,  1684 => 484,  1682 => 483,  1679 => 482,  1675 => 480,  1673 => 479,  1669 => 478,  1665 => 477,  1662 => 476,  1659 => 475,  1655 => 474,  1649 => 472,  1646 => 471,  1643 => 470,  1641 => 469,  1637 => 467,  1634 => 466,  1631 => 465,  1626 => 462,  1620 => 461,  1617 => 460,  1614 => 459,  1608 => 458,  1600 => 455,  1593 => 454,  1591 => 453,  1588 => 452,  1581 => 449,  1575 => 448,  1568 => 447,  1566 => 446,  1563 => 445,  1554 => 442,  1546 => 440,  1544 => 439,  1537 => 438,  1535 => 437,  1532 => 436,  1528 => 434,  1524 => 432,  1513 => 430,  1509 => 429,  1506 => 428,  1504 => 427,  1497 => 426,  1489 => 424,  1487 => 423,  1480 => 422,  1477 => 421,  1472 => 420,  1469 => 419,  1467 => 418,  1464 => 417,  1461 => 416,  1458 => 415,  1451 => 413,  1447 => 411,  1436 => 409,  1432 => 408,  1429 => 407,  1427 => 406,  1420 => 405,  1412 => 403,  1410 => 402,  1403 => 401,  1398 => 400,  1395 => 399,  1392 => 398,  1388 => 397,  1378 => 395,  1375 => 394,  1370 => 391,  1367 => 390,  1361 => 389,  1357 => 387,  1353 => 385,  1347 => 384,  1339 => 382,  1336 => 381,  1332 => 380,  1329 => 379,  1327 => 378,  1321 => 377,  1311 => 376,  1303 => 375,  1300 => 374,  1295 => 373,  1293 => 372,  1283 => 370,  1280 => 369,  1278 => 368,  1275 => 367,  1272 => 366,  1268 => 364,  1264 => 362,  1261 => 361,  1255 => 359,  1252 => 358,  1244 => 356,  1242 => 355,  1239 => 354,  1235 => 352,  1231 => 350,  1228 => 349,  1222 => 347,  1219 => 346,  1211 => 344,  1209 => 343,  1204 => 342,  1202 => 341,  1191 => 340,  1188 => 339,  1185 => 338,  1181 => 337,  1175 => 334,  1167 => 332,  1165 => 331,  1153 => 329,  1150 => 328,  1147 => 327,  1145 => 326,  1142 => 325,  1138 => 323,  1134 => 321,  1128 => 320,  1124 => 318,  1121 => 317,  1118 => 316,  1115 => 315,  1110 => 312,  1104 => 311,  1101 => 310,  1098 => 309,  1091 => 307,  1086 => 304,  1075 => 301,  1072 => 300,  1068 => 299,  1062 => 297,  1060 => 296,  1057 => 295,  1054 => 294,  1050 => 292,  1047 => 291,  1043 => 289,  1040 => 288,  1038 => 287,  1034 => 286,  1030 => 285,  1027 => 284,  1022 => 283,  1019 => 282,  1016 => 281,  1012 => 280,  1006 => 278,  1003 => 277,  1001 => 276,  998 => 275,  995 => 274,  990 => 271,  984 => 270,  980 => 268,  975 => 265,  969 => 264,  961 => 261,  958 => 260,  955 => 259,  951 => 258,  945 => 256,  943 => 255,  940 => 254,  937 => 253,  933 => 251,  930 => 250,  926 => 248,  923 => 247,  921 => 246,  917 => 245,  913 => 244,  910 => 243,  907 => 242,  903 => 241,  897 => 239,  894 => 238,  891 => 237,  889 => 236,  885 => 234,  882 => 233,  879 => 232,  874 => 229,  868 => 228,  865 => 227,  862 => 226,  856 => 225,  848 => 222,  841 => 221,  839 => 220,  836 => 219,  829 => 216,  823 => 215,  816 => 214,  814 => 213,  811 => 212,  802 => 209,  792 => 207,  790 => 206,  783 => 205,  781 => 204,  778 => 203,  774 => 201,  770 => 199,  759 => 197,  755 => 196,  752 => 195,  750 => 194,  743 => 193,  731 => 191,  729 => 190,  722 => 189,  719 => 188,  714 => 187,  711 => 186,  708 => 185,  704 => 184,  692 => 182,  689 => 181,  687 => 180,  684 => 179,  681 => 178,  676 => 175,  670 => 174,  667 => 173,  664 => 172,  657 => 170,  653 => 168,  642 => 166,  638 => 165,  635 => 164,  633 => 163,  626 => 162,  614 => 160,  612 => 159,  605 => 158,  600 => 157,  597 => 156,  594 => 155,  590 => 154,  578 => 152,  575 => 151,  573 => 150,  570 => 149,  565 => 146,  562 => 145,  556 => 144,  552 => 142,  548 => 140,  542 => 139,  534 => 137,  531 => 136,  527 => 135,  524 => 134,  522 => 133,  516 => 132,  506 => 131,  498 => 130,  495 => 129,  490 => 128,  488 => 127,  476 => 125,  473 => 124,  471 => 123,  468 => 122,  465 => 121,  461 => 119,  457 => 117,  454 => 116,  448 => 114,  445 => 113,  437 => 111,  435 => 110,  432 => 109,  428 => 107,  424 => 105,  421 => 104,  415 => 102,  412 => 101,  404 => 99,  402 => 98,  397 => 97,  395 => 96,  384 => 95,  381 => 94,  377 => 93,  369 => 91,  367 => 90,  355 => 88,  352 => 87,  349 => 85,  343 => 82,  339 => 81,  333 => 80,  328 => 78,  324 => 77,  320 => 76,  316 => 75,  312 => 74,  307 => 72,  301 => 71,  296 => 69,  292 => 68,  287 => 66,  283 => 65,  275 => 64,  270 => 62,  266 => 61,  262 => 60,  258 => 59,  254 => 58,  249 => 56,  245 => 55,  239 => 54,  234 => 52,  230 => 51,  226 => 50,  221 => 48,  217 => 47,  213 => 46,  208 => 44,  204 => 43,  200 => 42,  196 => 41,  192 => 40,  187 => 38,  183 => 37,  179 => 36,  174 => 34,  170 => 33,  166 => 32,  162 => 31,  158 => 30,  147 => 28,  143 => 27,  138 => 25,  132 => 24,  127 => 22,  123 => 21,  119 => 20,  111 => 19,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  84 => 13,  80 => 12,  76 => 11,  71 => 9,  67 => 8,  63 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/module/ptmenu.twig", "");
    }
}
