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

/* default/template/plaza/module/ptslider.twig */
class __TwigTemplate_3c11110fac27057a1f35e84ee6d4e1a9d70034e136288815af7a3fba7e2cc2e4 extends \Twig\Template
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
        echo "<div class=\"slider-container\">
    <div class=\"slide-loading\"></div>
    <div id=\"plaza-slider\" class=\"plaza-slider\">
        ";
        // line 4
        $context["config"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slider"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 5
        echo "        ";
        $context["i"] = 1;
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ptsliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 7
            echo "            ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 8
            echo "            <img style=\"display: none;\" src=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["slider"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["image"] ?? null) : null);
            echo "\" alt=\"\" title=\"#slide-caption";
            echo ($context["i"] ?? null);
            echo "\"  />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
    ";
        // line 11
        $context["i"] = 1;
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ptsliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 13
            echo "        ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 14
            echo "        <div id=\"slide-caption";
            echo ($context["i"] ?? null);
            echo "\" class=\"slide-caption nivo-html-caption nivo-caption\">
            <div class=\"slide-title\">
                ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "title", [], "any", false, false, false, 16)) {
                // line 17
                echo "                    <h3>";
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "title", [], "any", false, false, false, 17);
                echo "</h3>
                ";
            }
            // line 19
            echo "            </div>
            <div class=\"sub-title\">
                ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "sub_title", [], "any", false, false, false, 21)) {
                // line 22
                echo "                    <h3>";
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "sub_title", [], "any", false, false, false, 22);
                echo "</h3>
                ";
            }
            // line 24
            echo "            </div>
            <div class=\"slide-description\">
                ";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["slider"], "description", [], "any", false, false, false, 26);
            echo "
            </div>
            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "link", [], "any", false, false, false, 28)) {
                // line 29
                echo "                <div class=\"slide-readmore\">
                    <a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "link", [], "any", false, false, false, 30);
                echo "\" title=\"";
                echo ($context["text_link_button"] ?? null);
                echo "\">";
                echo ($context["text_link_button"] ?? null);
                echo "</a>
                </div>
            ";
            }
            // line 33
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</div>
<script type=\"text/javascript\">
    \$(window).load(function() {
        \$('#plaza-slider').nivoSlider({
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 500,
            manualAdvance: ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "auto", [], "any", false, false, false, 43) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "auto", [], "any", false, false, false, 43) == "1"))) {
            echo " false ";
        } else {
            echo " true ";
        }
        echo " ,
            pauseTime: ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "delay", [], "any", false, false, false, 44)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "delay", [], "any", false, false, false, 44);
            echo " ";
        } else {
            echo " 3000 ";
        }
        echo " ,
            controlNav: ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "contrl", [], "any", false, false, false, 45) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "contrl", [], "any", false, false, false, 45) == "1"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo " ,
            directionNav: ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "nextback", [], "any", false, false, false, 46) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "nextback", [], "any", false, false, false, 46) == "1"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo " ,
            pauseOnHover: ";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "hover", [], "any", false, false, false, 47) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "hover", [], "any", false, false, false, 47) == "1"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo " ,
            controlNavThumbs: false,
            effect: 'random',
            startSlide: 0,
            prevText: 'Prev',
            nextText: 'Next'
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/plaza/module/ptslider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 47,  172 => 46,  164 => 45,  154 => 44,  146 => 43,  136 => 35,  129 => 33,  119 => 30,  116 => 29,  114 => 28,  109 => 26,  105 => 24,  99 => 22,  97 => 21,  93 => 19,  87 => 17,  85 => 16,  79 => 14,  76 => 13,  71 => 12,  69 => 11,  66 => 10,  55 => 8,  52 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/plaza/module/ptslider.twig", "");
    }
}
