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

/* default/template/account/account.twig */
class __TwigTemplate_ad35668bd249f5bea57a420366ac2c24eca048f087442169e39cffd5cb1dd338 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-account\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
          <h2>";
        // line 22
        echo ($context["text_my_account"] ?? null);
        echo "</h2>
          <ul class=\"list-unstyled\">
            <li><a href=\"";
        // line 24
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 25
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 26
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 27
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          </ul>
        </div>
        
        ";
        // line 31
        if (($context["credit_cards"] ?? null)) {
            // line 32
            echo "        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
          <h2>";
            // line 33
            echo ($context["text_credit_card"] ?? null);
            echo "</h2>
          <ul class=\"list-unstyled\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 36
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 36);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 36);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "          </ul>
        </div>
        ";
        }
        // line 41
        echo "        
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
          <h2>";
        // line 43
        echo ($context["text_my_orders"] ?? null);
        echo "</h2>
          <ul class=\"list-unstyled\">
            <li><a href=\"https://www.domex.lk/\" target=\"_blank\">Track your order</a></li>
            <li><a href=\"";
        // line 46
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 47
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
            ";
        // line 48
        if (($context["reward"] ?? null)) {
            // line 49
            echo "            <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
            ";
        }
        // line 51
        echo "            <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 52
        echo ($context["transaction"] ?? null);
        echo "\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 53
        echo ($context["recurring"] ?? null);
        echo "\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
          </ul>
        </div>
        
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
          <h2>";
        // line 58
        echo ($context["text_my_affiliate"] ?? null);
        echo "</h2>
          <ul class=\"list-unstyled\">
            ";
        // line 60
        if ( !($context["tracking"] ?? null)) {
            // line 61
            echo "            <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_add"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 63
            echo "            <li><a href=\"";
            echo ($context["affiliate"] ?? null);
            echo "\">";
            echo ($context["text_affiliate_edit"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 64
            echo ($context["tracking"] ?? null);
            echo "\">";
            echo ($context["text_tracking"] ?? null);
            echo "</a></li>
            ";
        }
        // line 66
        echo "          </ul>
        </div>
        
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
          <h2>";
        // line 70
        echo ($context["text_my_newsletter"] ?? null);
        echo "</h2>
          <ul class=\"list-unstyled\">
            <li><a href=\"";
        // line 72
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      ";
        // line 76
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 77
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 79
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 79,  273 => 77,  269 => 76,  260 => 72,  255 => 70,  249 => 66,  242 => 64,  235 => 63,  227 => 61,  225 => 60,  220 => 58,  210 => 53,  204 => 52,  197 => 51,  189 => 49,  187 => 48,  181 => 47,  175 => 46,  169 => 43,  165 => 41,  160 => 38,  149 => 36,  145 => 35,  140 => 33,  137 => 32,  135 => 31,  126 => 27,  120 => 26,  114 => 25,  108 => 24,  103 => 22,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/account.twig", "");
    }
}
