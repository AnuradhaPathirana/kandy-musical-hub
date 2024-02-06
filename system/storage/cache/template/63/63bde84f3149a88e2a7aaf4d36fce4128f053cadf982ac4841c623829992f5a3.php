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

/* tt_rozer2/template/plaza/search/form.twig */
class __TwigTemplate_d36fa5138240be7d5b02d04020cc1107762825a388026a6400b6ea7345a2a2a5 extends \Twig\Template
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
        echo "<div id=\"search-by-category\">
    <div class=\"dropdown-toggle search-button\" data-toggle=\"dropdown\"></div>
\t<div class=\"dropdown-menu search-content\" >
\t\t<div class=\"search-container\">
\t\t\t<div class=\"categories-container\">
\t\t\t\t<div class=\"hover-cate\">
\t\t\t\t\t<div class=\"text-selected\">
\t\t\t\t\t\t<div class=\"cate-selected\" data-value=\"0\"><span>";
        // line 8
        echo ($context["text_category"] ?? null);
        echo "</span><i class=\"ion-ios-arrow-down\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"cate-items\">
\t\t\t\t\t\t<li class=\"item-cate\" data-value=\"0\">";
        // line 11
        echo ($context["text_category"] ?? null);
        echo "</li>
\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 13
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 13) == ($context["category_id"] ?? null))) {
                // line 14
                echo "\t\t\t\t\t\t\t\t<li data-value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 14);
                echo "\" class=\"selected item-cate\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 14);
                echo "</li>
\t\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t\t<li data-value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 16);
                echo "\" class=\"item-cate\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 16);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 19
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 19) == ($context["category_id"] ?? null))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t<li data-value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 20);
                    echo "\" class=\"selected item-cate f1\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 20);
                    echo "</li>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t<li data-value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 22);
                    echo "\" class=\"item-cate f1\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 22);
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 25) == ($context["category_id"] ?? null))) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t\t<li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 26);
                        echo "\" class=\"selected item-cate f2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 26);
                        echo "</li>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t\t<li data-value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 28);
                        echo "\" class=\"item-cate f2\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 28);
                        echo "</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"text\" name=\"search\" id=\"text-search\" value=\"\" placeholder=\"";
        // line 36
        echo ($context["text_placeholder_search"] ?? null);
        echo "\" class=\"\"  />
\t\t\t<div id=\"sp-btn-search\" class=\"\">
\t\t\t\t<button type=\"button\" id=\"btn-search-category\" class=\"btn btn-default btn-lg\">
\t\t\t\t\t<span class=\"hidden-xs\">";
        // line 39
        echo ($context["button_search"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"search-ajax\">
\t\t\t\t<div class=\"ajax-loader-container\" style=\"display: none;\">
\t\t\t\t\t<img src=\"";
        // line 44
        echo ($context["loader_img"] ?? null);
        echo "\" alt=\"search-ajax\" class=\"ajax-load-img\" width=\"30\" height=\"30\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"ajax-result-container\">
\t\t\t\t\t<!-- Content of search results -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<input type=\"hidden\" id=\"ajax-search-enable\" value=\"";
        // line 50
        echo ($context["ajax_enabled"] ?? null);
        echo "\" />
\t\t</div>
\t
\t\t
\t</div>
</div>

<script >
    \$(document).ready(function () {
        var flag = false;
        var ajax_search_enable = \$('#ajax-search-enable').val();

        var current_cate_value = \$('ul.cate-items li.selected').data('value');
        var current_cate_text = \$('ul.cate-items li.selected').html();

        \$('.cate-selected').attr('data-value', current_cate_value);
        \$('.cate-selected span').html(current_cate_text);

        \$('.hover-cate .text-selected').click(function () {
            \$( \".cate-items\" ).toggle(\"slow\");
        });

        \$('.ajax-result-container').hover(
            function() {
                flag = true;
            },
            function() {
                flag = false;
            }
        );

        \$('.hover-cate').hover(
            function() {
                flag = true;
            },
            function() {
                flag = false;
            }
        );

        \$('#search-by-category').focusout(function() {
            if(flag == true) {
                \$('.ajax-result-container').show();
            } else {
                \$('.ajax-result-container').hide();
            }
        });

        \$('#search-by-category').focusin(function() {
            \$('.ajax-result-container').show();
        });

        \$('#btn-search-category').click(function () {
            var url = '";
        // line 103
        echo ($context["search_action"] ?? null);
        echo "';
            var text_search = \$('#text-search').val();
            if(text_search) {
                url += '&search=' + encodeURIComponent(text_search);
            }

            var category_search = \$('.cate-selected').attr(\"data-value\");
            if(category_search) {
                url += '&category_id=' + encodeURIComponent(category_search);
            }

            location = url;
        });

        if(ajax_search_enable == '1') {
            \$('#text-search').keyup(function(e) {
                var text_search = \$(this).val();
                var cate_search = \$('.cate-selected').attr(\"data-value\");
                if(text_search != null && text_search != '') {
                    ajaxSearch(text_search, cate_search);
                } else {
                    \$('.ajax-result-container').html('');
                    \$('.ajax-loader-container').hide();
                }
            });

            \$('ul.cate-items li.item-cate').click(function() {
                var cate_search = \$(this).data('value');
                var text_search = \$('#text-search').val();
                \$('.cate-selected').attr('data-value', cate_search);
                \$('.cate-selected span').html(\$(this).html());
                if(text_search != null && text_search != '') {
                    ajaxSearch(text_search, cate_search);
                } else {
                    \$('.ajax-result-container').html('');
                    \$('.ajax-loader-container').hide();
                }
                \$( \".cate-items\" ).hide();
                \$('#text-search').focus();
            });
        }

        function ajaxSearch(text_search, cate_search) {
            \$.ajax({
                url         : '";
        // line 147
        echo ($context["search_ajax_action"] ?? null);
        echo "',
                type        : 'post',
                data        : { text_search : text_search, cate_search : cate_search },
                beforeSend  : function () {
                    \$('.ajax-loader-container').show();
                },
                success     : function(json) {
                    if(json['success'] == true) {
                        \$('.ajax-result-container').html(json['result_html']);
                        \$('.ajax-loader-container').hide();
                    }
                }
            });
        }

    });
</script>";
    }

    public function getTemplateName()
    {
        return "tt_rozer2/template/plaza/search/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 147,  229 => 103,  173 => 50,  164 => 44,  156 => 39,  150 => 36,  145 => 33,  139 => 32,  133 => 31,  127 => 30,  119 => 28,  111 => 26,  108 => 25,  103 => 24,  95 => 22,  87 => 20,  84 => 19,  79 => 18,  71 => 16,  63 => 14,  60 => 13,  56 => 12,  52 => 11,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer2/template/plaza/search/form.twig", "");
    }
}
