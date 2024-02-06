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

/* tt_rozer1/template/common/header.twig */
class __TwigTemplate_50d083fe414be7667458437448ed35bfec7131839e7eae0a406b486438adebd7 extends \Twig\Template
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
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
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
<!-- end -->
<link href=\"catalog/view/theme/tt_rozer1/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_rozer1/stylesheet/plaza/header/header";
        // line 31
        echo ($context["header_layout"] ?? null);
        echo ".css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_rozer1/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/simplelineicons/css/simple-line-icons.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            echo "<script src=\"";
            echo $context["script"];
            echo "\" ></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "<script src=\"catalog/view/javascript/common.js\" ></script>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 41
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 41);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 41);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 44
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  <!-- Quick view -->
  ";
        // line 47
        if (($context["use_quick_view"] ?? null)) {
            // line 48
            echo "    <script src=\"catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js\" ></script>
    <script src=\"catalog/view/javascript/plaza/cloudzoom/zoom.js\" ></script>
    <script src=\"catalog/view/javascript/plaza/quickview/quickview.js\" ></script>
    <link href=\"catalog/view/theme/tt_rozer1/stylesheet/plaza/quickview/quickview.css\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        }
        // line 53
        echo "  <!-- General -->
  <!-- Sticky Menu -->
  ";
        // line 55
        if (($context["sticky_header"] ?? null)) {
            // line 56
            echo "\t<script >
\t \$(document).ready(function () {\t
\t\tvar height_box_scroll = \$('.scroll-fix').outerHeight(true);
\t  \$(window).scroll(function () {
\t\tif (\$(this).scrollTop() > 800) {
\t\t\t\$('.scroll-fix').addClass(\"scroll-fixed\");
\t\t\t\$('body').css('padding-top',height_box_scroll);
\t\t} else {
\t\t\t\$('.scroll-fix').removeClass(\"scroll-fixed\");
\t\t\t\$('body').css('padding-top',0);
\t\t}
\t  });
\t});
\t</script>
  ";
        }
        // line 71
        echo "  <!-- Scroll Top -->
  ";
        // line 72
        if (($context["scroll_top"] ?? null)) {
            // line 73
            echo "    <script>
      \$(\"#back-top\").hide();
      \$(function () {
        \$(window).scroll(function () {
          if (\$(this).scrollTop() > \$('body').height()/3) {
            \$('#back-top').fadeIn();
          } else {
            \$('#back-top').fadeOut();
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
        // line 90
        echo "  <!-- Advance -->
  ";
        // line 91
        if (($context["custom_css"] ?? null)) {
            // line 92
            echo "    <style>
      ";
            // line 93
            echo ($context["custom_css"] ?? null);
            echo "
    </style>
  ";
        }
        // line 96
        echo "  ";
        if (($context["custom_js"] ?? null)) {
            // line 97
            echo "    <script>
      ";
            // line 98
            echo ($context["custom_js"] ?? null);
            echo "
    </script>
  ";
        }
        // line 101
        echo "  <!-- Bootstrap Js -->
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
</head>
<body class=\"";
        // line 104
        echo ($context["class"] ?? null);
        echo "\">
<div class=\"wrapper\">
";
        // line 106
        if (($context["scroll_top"] ?? null)) {
            // line 107
            echo "  <div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
";
        }
        // line 109
        echo "  ";
        // line 111
        echo ($context["header"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 111,  270 => 109,  266 => 107,  264 => 106,  259 => 104,  254 => 101,  248 => 98,  245 => 97,  242 => 96,  236 => 93,  233 => 92,  231 => 91,  228 => 90,  209 => 73,  207 => 72,  204 => 71,  187 => 56,  185 => 55,  181 => 53,  174 => 48,  172 => 47,  169 => 46,  161 => 44,  157 => 43,  146 => 41,  142 => 40,  139 => 39,  130 => 37,  126 => 36,  118 => 31,  109 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/common/header.twig", "");
    }
}
