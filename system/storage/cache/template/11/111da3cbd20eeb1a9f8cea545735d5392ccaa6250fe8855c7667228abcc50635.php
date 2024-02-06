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

/* tt_rozer1/template/plaza/page_section/header_mobile.twig */

class __TwigTemplate_6d5a7c3906ecc7d097ea0ed84289141798b108529418f90d32ddc4c7f34aa038 extends \Twig\Template
{
        private $source;
        private $macros = [];

        public function __construct(Environment $env)
        {
                parent::__construct($env);

                $this->source = $this->getSourceContext();

                $this->parent = false;

                $this->blocks = [];
        }

        protected function doDisplay(array $context, array $blocks = [])
        {
                $macros = $this->macros;
                // line 1
                echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
                // line 3
                echo ($context["direction"] ?? null);
                echo "\" lang=\"";
                echo ($context["lang"] ?? null);
                echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
                // line 4
                echo ($context["direction"] ?? null);
                echo "\" lang=\"";
                echo ($context["lang"] ?? null);
                echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
                // line 6
                echo ($context["direction"] ?? null);
                echo "\" lang=\"";
                echo ($context["lang"] ?? null);
                echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
                // line 12
                echo ($context["title"] ?? null);
                echo "</title>
<base href=\"";
                // line 13
                echo ($context["base"] ?? null);
                echo "\" />
";
                // line 14
                if (($context["description"] ?? null)) {
                        // line 15
                        echo "\t<meta name=\"description\" content=\"";
                        echo ($context["description"] ?? null);
                        echo "\" />
";
                }
                // line 17
                if (($context["keywords"] ?? null)) {
                        // line 18
                        echo "\t<meta name=\"keywords\" content=\"";
                        echo ($context["keywords"] ?? null);
                        echo "\" />
";
                }
                // line 20
                echo "<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                        // line 22
                        echo "<link href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 22);
                        echo "\" type=\"text/css\" rel=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 22);
                        echo "\" media=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 22);
                        echo "\" />
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "<link href=\"catalog/view/javascript/jquery/swiper/css/swiper.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- icon font -->
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/javascript/ionicons/css/ionicons.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- end icon font -->
<link href=\"catalog/view/theme/tt_rozer1/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_rozer1/stylesheet/plaza/header/header";
                // line 30
                echo ($context["header_layout"] ?? null);
                echo ".css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_rozer1/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/simplelineicons/css/simple-line-icons.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                        // line 36
                        echo "<script src=\"";
                        echo $context["script"];
                        echo "\" ></script>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "<script src=\"catalog/view/javascript/common.js\" ></script>
";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 40
                        echo "<link href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
                        echo "\" rel=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 40);
                        echo "\" />
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
                        // line 43
                        echo $context["analytic"];
                        echo "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "
<!-- Sticky Menu -->
";
                // line 47
                if (($context["sticky_header"] ?? null)) {
                        // line 48
                        echo "<script >
 \$(document).ready(function () {\t
\tvar height_box_scroll = \$('.scroll-fix').outerHeight(true);
  \$(window).scroll(function () {
\tif (\$(this).scrollTop() > 400) {
\t\t\$('.scroll-fix').addClass(\"scroll-fixed\");
\t\t\$('body').css('padding-top',height_box_scroll);
\t} else {
\t\t\$('.scroll-fix').removeClass(\"scroll-fixed\");
\t\t\$('body').css('padding-top',0);
\t}
  });
});
</script>
";
                }
                // line 63
                echo "<!-- Scroll Top -->
";
                // line 64
                if (($context["scroll_top"] ?? null)) {
                        // line 65
                        echo "<script>
\$(\"#back-top\").hide();
\$(function () {
\$(window).scroll(function () {
  if (\$(this).scrollTop() > \$('body').height()/3) {
\t\$('#back-top').fadeIn();
  } else {
\t\$('#back-top').fadeOut();
  }
});
\$('#back-top').click(function () {
  \$('body,html').animate({scrollTop: 0}, 800);
  return false;
});
});
</script>
";
                }
                // line 82
                echo "<!-- Advance -->
";
                // line 83
                if (($context["custom_css"] ?? null)) {
                        // line 84
                        echo "<style>
";
                        // line 85
                        echo ($context["custom_css"] ?? null);
                        echo "
</style>
";
                }
                // line 88
                if (($context["custom_js"] ?? null)) {
                        // line 89
                        echo "<script>
";
                        // line 90
                        echo ($context["custom_js"] ?? null);
                        echo "
</script>
";
                }
                // line 93
                echo "<!-- Bootstrap Js -->
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
</head>
<body class=\"";
                // line 96
                echo ($context["class"] ?? null);
                echo " mobile-layout\">
<div class=\"wrapper\">
";
                // line 98
                if (($context["scroll_top"] ?? null)) {
                        // line 99
                        echo "    <div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
";
                }
                // line 101
                echo "<div id=\"header\">
\t<header class=\"scroll-fix \">
\t\t<div class=\"header-middle\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"box-inner\">
\t\t\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t\t\t<div class=\"col-logo\">
\t\t\t\t\t\t\t";
                // line 108
                echo ($context["position3"] ?? null);
                echo "\t\t\t\t
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
                // line 110
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
                        // line 111
                        echo "\t\t\t\t\t\t\t  <h1><a href=\"";
                        echo ($context["home"] ?? null);
                        echo "\">";
                        echo ($context["name"] ?? null);
                        echo "</a></h1>
\t\t\t\t\t\t\t  ";
                }
                // line 113
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 117
                echo ($context["wishlist"] ?? null);
                echo "\" id=\"wishlist-total\" ><span>";
                echo ($context["text_wishlist"] ?? null);
                echo "</span></a>
\t\t\t\t\t\t\t\t";
                // line 118
                if (($context["header_cart"] ?? null)) {
                        echo ($context["cart"] ?? null);
                }
                // line 119
                echo "\t\t\t\t\t\t\t\t<div class=\"box-setting btn-group\">
\t\t\t\t\t\t\t\t\t<button class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-android-close\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"currency\">
\t\t\t\t\t\t\t\t\t\t";
                // line 123
                if (($context["header_currency"] ?? null)) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t  ";
                        echo ($context["currency"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li id=\"top-links\">
\t\t\t\t\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
                // line 132
                echo ($context["account"] ?? null);
                echo "\" title=\"";
                echo ($context["text_account"] ?? null);
                echo "\" ><i class=\"fa fa-user\"></i><span>";
                echo ($context["text_account"] ?? null);
                echo "</span><i class=\"icon-right ion-chevron-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu-right pt-account\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 134
                if (($context["logged"] ?? null)) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        echo ($context["account"] ?? null);
                        echo "\">";
                        echo ($context["text_account"] ?? null);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        // line 136
                        echo ($context["order"] ?? null);
                        echo "\">";
                        echo ($context["text_order"] ?? null);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        // line 137
                        echo ($context["transaction"] ?? null);
                        echo "\">";
                        echo ($context["text_transaction"] ?? null);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                        // line 138
                        echo ($context["download"] ?? null);
                        echo "\">";
                        echo ($context["text_download"] ?? null);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
                        // line 139
                        echo ($context["logout"] ?? null);
                        echo "\">";
                        echo ($context["text_logout"] ?? null);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
                        echo ($context["register"] ?? null);
                        echo "\">";
                        echo ($context["text_register"] ?? null);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
                        // line 142
                        echo ($context["login"] ?? null);
                        echo "\">";
                        echo ($context["text_login"] ?? null);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"header-welcome\"><p><span>";
                // line 148
                echo ($context["text_welcome"] ?? null);
                echo "</span></p></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"contact-us\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<a href=\"https://www.daraz.lk/shop/kandy-musical-hub\" target=\"_blank\">
\t\t\t\t\t\t<img class=\"daraz-link-logo\" src=\"../image/catalog/1.kandy-musical-hub/logo/Daraz_Logo.png\" alt=\"daraz-logo\">
\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"https://www.daraz.lk/shop/kandy-musical-hub\" target=\"_blank\">Visit Our Daraz Store</a></li>
\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<!--li><a href=\"";
                // line 165
                echo ($context["shopping_cart"] ?? null);
                echo "\" title=\"";
                echo ($context["text_shopping_cart"] ?? null);
                echo "\"><i class=\"fa fa-shopping-cart\"></i> <span>";
                echo ($context["text_shopping_cart"] ?? null);
                echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 166
                echo ($context["checkout"] ?? null);
                echo "\" title=\"";
                echo ($context["text_checkout"] ?? null);
                echo "\"><i class=\"fa fa-share\"></i> <span>";
                echo ($context["text_checkout"] ?? null);
                echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 167
                echo ($context["contact"] ?? null);
                echo "\" ><span>";
                echo ($context["text_hot_line"] ?? null);
                echo " ";
                echo ($context["telephone"] ?? null);
                echo "</span></a></li-->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"d-flex flex-wrap align-center\">
\t\t\t\t\t\t<div class=\"col-search\">";
                // line 175
                echo ($context["search"] ?? null);
                echo "</div>
\t\t\t\t\t\t<div class=\"daraz-store-mobile-link\">
\t\t\t\t\t\t\t<a href=\"https://www.daraz.lk/shop/kandy-musical-hub\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"../image/catalog/1.kandy-musical-hub/logo/Daraz-Color-Logo-resize.png\" alt=\"daraz-logo\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</header>
</div>";
        }

        public function getTemplateName()
        {
                return "tt_rozer1/template/plaza/page_section/header_mobile.twig";
        }

        public function isTraitable()
        {
                return false;
        }

        public function getDebugInfo()
        {
                return array(442 => 175,  427 => 167,  419 => 166,  411 => 165,  391 => 148,  385 => 144,  378 => 142,  371 => 141,  364 => 139,  358 => 138,  352 => 137,  346 => 136,  339 => 135,  337 => 134,  328 => 132,  320 => 126,  314 => 124,  312 => 123,  306 => 119,  302 => 118,  296 => 117,  290 => 113,  282 => 111,  270 => 110,  265 => 108,  256 => 101,  252 => 99,  250 => 98,  245 => 96,  240 => 93,  234 => 90,  231 => 89,  229 => 88,  223 => 85,  220 => 84,  218 => 83,  215 => 82,  196 => 65,  194 => 64,  191 => 63,  174 => 48,  172 => 47,  168 => 45,  160 => 43,  156 => 42,  145 => 40,  141 => 39,  138 => 38,  129 => 36,  125 => 35,  117 => 30,  109 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
        }

        public function getSourceContext()
        {
                return new Source("", "tt_rozer1/template/plaza/page_section/header_mobile.twig", "");
        }
}
