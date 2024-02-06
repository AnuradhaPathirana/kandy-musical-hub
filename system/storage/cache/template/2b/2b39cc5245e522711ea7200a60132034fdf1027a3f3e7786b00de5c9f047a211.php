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

/* default/template/plaza/page_section/header/header1.twig */
class __TwigTemplate_f6d81882663dc2f0c283ddee03845c611d14d9b3028f0eb606f8fc91ea78c2ae extends \Twig\Template
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
        echo "<nav id=\"top\">
    <div class=\"container\">
        ";
        // line 3
        if (($context["header_currency"] ?? null)) {
            // line 4
            echo "            ";
            echo ($context["currency"] ?? null);
            echo "
        ";
        }
        // line 6
        echo "        ";
        echo ($context["language"] ?? null);
        echo "
        <div id=\"top-links\" class=\"nav pull-right\">
            <ul class=\"list-inline\">
                <li><a href=\"";
        // line 9
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
                <li class=\"dropdown\"><a href=\"";
        // line 10
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu dropdown-menu-right pt-account\">
                        ";
        // line 12
        if (($context["logged"] ?? null)) {
            // line 13
            echo "                            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                            <li><a href=\"";
            // line 14
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                            <li><a href=\"";
            // line 15
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                            <li><a href=\"";
            // line 16
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                            <li><a id=\"pt-logout-link\" href=\"";
            // line 17
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                        ";
        } else {
            // line 19
            echo "                            <li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                            <li><a id=\"pt-login-link\" href=\"";
            // line 20
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 22
        echo "                    </ul>
                </li>
                <li><a href=\"";
        // line 24
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
                ";
        // line 25
        if (($context["header_cart"] ?? null)) {
            // line 26
            echo "                    <li><a href=\"";
            echo ($context["shopping_cart"] ?? null);
            echo "\" title=\"";
            echo ($context["text_shopping_cart"] ?? null);
            echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_shopping_cart"] ?? null);
            echo "</span></a></li>
                    <li><a href=\"";
            // line 27
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
                ";
        }
        // line 29
        echo "            </ul>
        </div>
    </div>
</nav>
<header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div id=\"logo\">";
        // line 37
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
            // line 38
            echo "                        <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
                    ";
        }
        // line 39
        echo "</div>
            </div>
            <div class=\"col-sm-5\">";
        // line 41
        echo ($context["search"] ?? null);
        echo "</div>
            ";
        // line 42
        if (($context["header_cart"] ?? null)) {
            echo "<div class=\"col-sm-3\">";
            echo ($context["cart"] ?? null);
            echo "</div>";
        }
        // line 43
        echo "        </div>
    </div>
    ";
        // line 45
        echo ($context["menu"] ?? null);
        echo "
</header>";
    }

    public function getTemplateName()
    {
        return "default/template/plaza/page_section/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 45,  195 => 43,  189 => 42,  185 => 41,  181 => 39,  173 => 38,  161 => 37,  151 => 29,  142 => 27,  133 => 26,  131 => 25,  123 => 24,  119 => 22,  112 => 20,  105 => 19,  98 => 17,  92 => 16,  86 => 15,  80 => 14,  73 => 13,  71 => 12,  62 => 10,  56 => 9,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/plaza/page_section/header/header1.twig", "");
    }
}
