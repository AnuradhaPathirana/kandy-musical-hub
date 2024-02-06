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

/* tt_rozer1/template/plaza/page_section/header/header1.twig */
class __TwigTemplate_686df0166170b6e78f6ec80b638c3b76e9b54e28127b952c64820459cf4f0218 extends \Twig\Template
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
        echo "<div id=\"header\" class=\"header-absolute\" >\t
\t<nav id=\"top\" >
\t  <div class=\"container\">
\t\t<div class=\"box-inner\">
\t\t\t<ul class=\"box-top box-top-left pull-left\">
\t\t\t\t<li class=\"header-welcome\"><p><span>";
        // line 6
        echo ($context["text_welcome"] ?? null);
        echo "</span></p></li>
\t\t\t</ul>
\t\t\t<ul class=\"box-top box-top-right pull-right\">
\t\t\t\t<li><a href=\"";
        // line 9
        echo ($context["contact"] ?? null);
        echo "\" title=\"";
        echo ($context["text_store_locator"] ?? null);
        echo "\"><i class=\"ion-ios-location-outline\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_store_locator"] ?? null);
        echo "</span></a></li>
\t\t\t\t<li><a href=\"";
        // line 10
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"ion-ios-checkmark-outline\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
\t\t\t\t<!--li><a href=\"";
        // line 11
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li-->
\t\t\t\t<li id=\"top-links\" class=\"nav header-dropdown\">
\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 14
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-ios-person-outline\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"icon-right ion-ios-arrow-down\"></i></a>
\t\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right pt-account\">
\t\t\t\t\t\t";
        // line 16
        if (($context["logged"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 18
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 19
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 20
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 21
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 24
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"currency\">
\t\t\t\t";
        // line 31
        if (($context["header_currency"] ?? null)) {
            // line 32
            echo "\t\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t</li>
\t\t\t\t<li class=\"language\">
\t\t\t\t";
        // line 36
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t  </div>
\t</nav>
\t<header class=\"scroll-fix \">
\t\t<div class=\"header-middle\">\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"box-inner\">
\t\t\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t\t\t<div class=\"col-logo\">
\t\t\t\t\t\t\t";
        // line 49
        echo ($context["position3"] ?? null);
        echo "\t\t\t\t
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 51
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 52
            echo "\t\t\t\t\t\t\t  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t  ";
        }
        // line 54
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 58
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t";
        // line 59
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 60
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"contact-us\">
\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 66
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"\" data-toggle=\"dropdown\"><span class=\"text\">";
        echo ($context["text_call_us"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
        // line 67
        echo ($context["login"] ?? null);
        echo "\">";
        echo ($context["text_phone"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-search\">
\t\t\t\t\t\t";
        // line 73
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-bottom\">\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"header-bottom-inner\">
\t\t\t\t\t<div class=\"col-ver\">
\t\t\t\t\t\t";
        // line 82
        echo ($context["position1"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-hoz pull-left\">
\t\t\t\t\t\t";
        // line 85
        echo ($context["position2"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-menu pull-right\">
\t\t\t\t\t\t<span>";
        // line 88
        echo ($context["text_menu"] ?? null);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/page_section/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 88,  254 => 85,  248 => 82,  236 => 73,  225 => 67,  217 => 66,  209 => 60,  205 => 59,  199 => 58,  193 => 54,  185 => 52,  173 => 51,  168 => 49,  152 => 36,  148 => 34,  142 => 32,  140 => 31,  133 => 26,  126 => 24,  119 => 23,  112 => 21,  106 => 20,  100 => 19,  94 => 18,  87 => 17,  85 => 16,  76 => 14,  66 => 11,  58 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/page_section/header/header1.twig", "");
    }
}
