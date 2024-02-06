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

/* tt_rozer1/template/common/footer.twig */
class __TwigTemplate_1728b5fd017f814ca9e91ab5b32f69bbeb388e529738b5c04dbfaf5d6d1d841f extends \Twig\Template
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
\t<div class=\"footer-center\">
\t\t<div class=\"container\">
\t\t\t";
        // line 4
        echo ($context["position9"] ?? null);
        echo "
\t\t</div>
\t</div>
\t<div class=\"footer-links\">  
\t  <div class=\"container\">
\t\t<div class=\"inner btn-group-vertical\">\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop4\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 13
        echo ($context["text_about_us"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop4\">
\t\t\t\t\t\t";
        // line 15
        echo ($context["position7"] ?? null);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-md-2 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop3\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 22
        echo ($context["text_support"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop3\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 25
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 26
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 27
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 28
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 29
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
        // line 37
        echo ($context["text_information"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content footer-information\" aria-labelledby=\"btnGroupVerticalDrop2\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 40
        if (($context["informations"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 42
                echo "\t\t\t\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 42);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 42);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                            <li><a href=\"#\">Academy</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t";
        // line 52
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
        // line 72
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t";
        // line 75
        echo ($context["position8"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 82
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div></body></html>";
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 84,  194 => 82,  190 => 81,  181 => 75,  175 => 72,  152 => 52,  139 => 45,  136 => 44,  125 => 42,  120 => 41,  118 => 40,  112 => 37,  99 => 29,  93 => 28,  87 => 27,  81 => 26,  75 => 25,  69 => 22,  59 => 15,  54 => 13,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/common/footer.twig", "");
    }
}
