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

class __TwigTemplate_20dab7417714a54bb3c8986408c3ac1005b24392cd6add4fb9d49d8448c78a66 extends \Twig\Template
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

\t\t\t\t\t<div class=footer-logo-content>
                          <div class=\"footer-logo\">
                            <img src=\"../image/catalog/1.kandy-musical-hub/logo/Kandy Musical Hub - Black background.png\" alt=\"footer-logo\"/>
                          </div>
                          <div class=footer-slogun>
\t\t\t\t\t\t\t<p>Harmony Unleashed Explore Your Melodic Journey with Kandy Musical Hub.</p>
\t\t\t\t\t\t  </div>
                        </div>
\t\t\t\t
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop4\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
                // line 23
                echo ($context["text_about_us"] ?? null);
                echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop4\">
\t\t\t\t\t\t";
                // line 25
                echo ($context["position7"] ?? null);
                echo "
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-md-2 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop3\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
                // line 32
                echo ($context["text_support"] ?? null);
                echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop3\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t  <li><a href=\"";
                // line 35
                echo ($context["account"] ?? null);
                echo "\">";
                echo ($context["text_account"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
                // line 36
                echo ($context["order"] ?? null);
                echo "\">";
                echo ($context["text_order"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
                // line 37
                echo ($context["newsletter"] ?? null);
                echo "\">";
                echo ($context["text_newsletter"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
                // line 38
                echo ($context["special"] ?? null);
                echo "\">";
                echo ($context["text_special"] ?? null);
                echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
                // line 39
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
                // line 47
                echo ($context["text_information"] ?? null);
                echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content footer-information\" aria-labelledby=\"btnGroupVerticalDrop2\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
                // line 50
                if (($context["informations"] ?? null)) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                                // line 52
                                echo "\t\t\t\t\t\t\t\t  <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 52);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 52);
                                echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "\t\t\t\t\t\t\t";
                }
                // line 55
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
                // line 61
                echo ($context["position5"] ?? null);
                echo "
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t  <ul>
\t\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"https://web.facebook.com/GuitarsSrilanka\" class=\"facebook\" target=\"_blank\" title=\"Facebook\"></a></li>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"https://twitter.com/kandymusicalhub\" target=\"_blank\" class=\"twitter\" title=\"Twitter\"></a></li>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"https://www.youtube.com/channel/UCu4IQuuPd7gUTQ7b5-azoag\" target=\"_blank\" class=\"youtube\" title=\"Youtube\"></a></li>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"https://www.tiktok.com/@kandymusicalhub\" target=\"_blank\" class=\"tiktok\" title=\"Tiktok\"></a></li>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"https://www.instagram.com/kandymusicalhub_pvt_ltd/\" class=\"instagram\" title=\"Instagram\"></a></li>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t<li><a href=\"https://wa.me/+94757953397\" class=\"whatsapp\" title=\"Whatsapp\"></a></li>
\t\t\t\t
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
                // line 93
                echo ($context["powered"] ?? null);
                echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t";
                // line 96
                echo ($context["position8"] ?? null);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                        // line 103
                        echo "<script src=\"";
                        echo $context["script"];
                        echo "\" type=\"text/javascript\"></script>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
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
                return array(224 => 105,  215 => 103,  211 => 102,  202 => 96,  196 => 93,  161 => 61,  149 => 55,  146 => 54,  135 => 52,  130 => 51,  128 => 50,  122 => 47,  109 => 39,  103 => 38,  97 => 37,  91 => 36,  85 => 35,  79 => 32,  69 => 25,  64 => 23,  42 => 4,  37 => 1,);
        }

        public function getSourceContext()
        {
                return new Source("", "tt_rozer1/template/common/footer.twig", "");
        }
}
