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

/* tt_rozer2/template/plaza/module/ptslider.twig */
class __TwigTemplate_84bb2244ccb1848a2ba8c0f20d3ca82a6b6f86f55ed3ae55facbca3bc6d09c3c extends \Twig\Template
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
        echo "<div class=\"slider-container \">
    
\t<div class=\"slide-loading\"></div>
    <div id=\"plaza-slider\" class=\"plaza-slider\">
        ";
        // line 5
        $context["config"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slider"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 6
        echo "        ";
        $context["i"] = 1;
        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ptsliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 8
            echo "            ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 9
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["slider"], "link", [], "any", false, false, false, 9);
            echo "\" ><img style=\"display: none;\" src=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["slider"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["image"] ?? null) : null);
            echo "\" alt=\"\" title=\"#slide-caption";
            echo ($context["i"] ?? null);
            echo "\"  /></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
    ";
        // line 12
        $context["i"] = 1;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ptsliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 14
            echo "        ";
            $context["class"] = "";
            // line 15
            echo "\t\t";
            if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["slider"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["type"] ?? null) : null) == 1)) {
                // line 16
                echo "\t\t\t";
                $context["class"] = "slider-1";
                // line 17
                echo "\t\t";
            }
            // line 18
            echo "\t\t
\t\t";
            // line 19
            if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["slider"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["type"] ?? null) : null) == 2)) {
                // line 20
                echo "\t\t\t";
                $context["class"] = "slider-2";
                // line 21
                echo "\t\t";
            }
            // line 22
            echo "\t\t
\t\t";
            // line 23
            if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["slider"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["type"] ?? null) : null) == 3)) {
                // line 24
                echo "\t\t\t";
                $context["class"] = "slider-3";
                // line 25
                echo "\t\t";
            }
            // line 26
            echo "\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 27
            echo "        <div id=\"slide-caption";
            echo ($context["i"] ?? null);
            echo "\" class=\"slide-caption nivo-html-caption nivo-caption\">
            <div class=\"slider-content ";
            // line 28
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"slide-title\">
\t\t\t\t\t\t\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "title", [], "any", false, false, false, 33)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t<h3>";
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "title", [], "any", false, false, false, 34);
                echo "</h3>
\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sub-title\">
\t\t\t\t\t\t\t\t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "sub_title", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t<h3>";
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "sub_title", [], "any", false, false, false, 39);
                echo "</h3>
\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"slide-description\">
\t\t\t\t\t\t\t\t";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["slider"], "description", [], "any", false, false, false, 43);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["slider"], "link", [], "any", false, false, false, 45)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<div class=\"slide-readmore\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["slider"], "link", [], "any", false, false, false, 47);
                echo "\" title=\"";
                echo ($context["text_link_button"] ?? null);
                echo "\">";
                echo ($context["text_link_button"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>
<script >
    \$(window).load(function() {
        \$('#plaza-slider').nivoSlider({
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: 500,
            manualAdvance: ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "auto", [], "any", false, false, false, 64) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "auto", [], "any", false, false, false, 64) == "1"))) {
            echo " false ";
        } else {
            echo " true ";
        }
        echo " ,
            pauseTime: ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "delay", [], "any", false, false, false, 65)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "delay", [], "any", false, false, false, 65);
            echo " ";
        } else {
            echo " 3000 ";
        }
        echo " ,
            controlNav: ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "contrl", [], "any", false, false, false, 66) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "contrl", [], "any", false, false, false, 66) == "1"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo " ,
            directionNav: ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "nextback", [], "any", false, false, false, 67) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "nextback", [], "any", false, false, false, 67) == "1"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo " ,
            pauseOnHover: ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "hover", [], "any", false, false, false, 68) && (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "hover", [], "any", false, false, false, 68) == "1"))) {
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
        return "tt_rozer2/template/plaza/module/ptslider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 68,  220 => 67,  212 => 66,  202 => 65,  194 => 64,  184 => 56,  173 => 50,  163 => 47,  160 => 46,  158 => 45,  153 => 43,  149 => 41,  143 => 39,  141 => 38,  137 => 36,  131 => 34,  129 => 33,  121 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  74 => 13,  72 => 12,  69 => 11,  56 => 9,  53 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer2/template/plaza/module/ptslider.twig", "");
    }
}
