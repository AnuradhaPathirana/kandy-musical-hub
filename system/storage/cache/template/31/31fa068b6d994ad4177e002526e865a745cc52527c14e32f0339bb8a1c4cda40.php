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

/* tt_rozer2/template/common/footer.twig */
class __TwigTemplate_6b0151007823e20c07b12fb32ba09984d7704675863f5c188789b83f6d67b00d extends \Twig\Template
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
        echo "<footer>
\t
\t<div class=\"footer-links\">  
\t  <div class=\"container\">
\t\t<div class=\"inner btn-group-vertical\">\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop4\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 9
        echo ($context["text_about_us"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop4\">
\t\t\t\t\t\t";
        // line 11
        echo ($context["position7"] ?? null);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-md-2 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop3\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 18
        echo ($context["text_support"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop3\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 21
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 22
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 23
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 24
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 25
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t  
\t\t\t\t  <div class=\"col col-md-2 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop2\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 33
        echo ($context["text_information"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content footer-information\" aria-labelledby=\"btnGroupVerticalDrop2\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 36
        if (($context["informations"] ?? null)) {
            // line 37
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 38
                echo "\t\t\t\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 38);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t";
        // line 47
        echo ($context["position5"] ?? null);
        echo "
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t  <ul>
\t\t\t\t\t\t\t<li><a href=\"https://www.facebook.com/PlazaThemes1/\" class=\"facebook\" target=\"_blank\" title=\"Facebook\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://twitter.com/plazathemes\" target=\"_blank\" class=\"twitter\" title=\"Twitter\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" target=\"_blank\" class=\"google\" title=\"Google+\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"https://www.youtube.com/user/plazathemes\" target=\"_blank\" class=\"youtube\" title=\"Youtube\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"instagram\" title=\"Instagram\"></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"pinterest\" title=\"Pinterest\"></a></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t<p class=\"text-powered\">";
        // line 67
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t";
        // line 70
        echo ($context["position8"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 77
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div></body></html>";
    }

    public function getTemplateName()
    {
        return "tt_rozer2/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 79,  186 => 77,  182 => 76,  173 => 70,  167 => 67,  144 => 47,  132 => 41,  129 => 40,  118 => 38,  113 => 37,  111 => 36,  105 => 33,  92 => 25,  86 => 24,  80 => 23,  74 => 22,  68 => 21,  62 => 18,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer2/template/common/footer.twig", "");
    }
}
