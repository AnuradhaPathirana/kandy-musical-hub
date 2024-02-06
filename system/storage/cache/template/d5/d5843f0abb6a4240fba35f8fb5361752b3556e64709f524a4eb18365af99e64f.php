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

/* tt_rozer1/template/plaza/search/ajaxresult.twig */
class __TwigTemplate_63d64c77cc89899f0fc82338fa5919955e59a1a3dd4322d98153681c48a248a4 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) == 0)) {
            // line 2
            echo "    <p class=\"ajax-result-msg\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
";
        } else {
            // line 4
            echo "    <ul class=\"ajax-result-list\">
        ";
            // line 5
            $context["i"] = 0;
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 7
                echo "            ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 8
                echo "            <li class=\"ajax-result-item col-lg-6 col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t<div class=\"product-thumb\">\t
\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t";
                // line 11
                if ((($context["product_img_enabled"] ?? null) == 1)) {
                    // line 12
                    echo "\t\t\t\t\t\t\t<a class=\"product-image\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
                    echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t";
                // line 22
                if ((($context["product_price_enabled"] ?? null) == 1)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23)) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 25
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25)) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 28
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 28);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 30
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 30)) {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </li>
            ";
                // line 40
                if (((($context["i"] ?? null) % 2) == 0)) {
                    // line 41
                    echo "                <div style=\"clear:both\"></div>
            ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/search/ajaxresult.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  145 => 43,  141 => 41,  139 => 40,  133 => 36,  130 => 35,  126 => 33,  118 => 31,  115 => 30,  107 => 28,  101 => 26,  99 => 25,  96 => 24,  93 => 23,  91 => 22,  84 => 20,  80 => 18,  71 => 14,  65 => 12,  63 => 11,  58 => 8,  55 => 7,  50 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/search/ajaxresult.twig", "");
    }
}
