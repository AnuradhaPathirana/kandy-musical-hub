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

/* tt_rozer1/template/plaza/product/lightbox.twig */
class __TwigTemplate_865276889c17cf9476860791ae9442a270905507502155987e003519ada1aa93 extends \Twig\Template
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
        echo "<script>
\t\$( window ).resize(function() {
\t\tvar screenheight = \$( window ).height();
\t\t\$('.mySlides img').css('max-height', screenheight);
\t\t
\t});
\tvar screenheight = \$( window ).height();
\t\$('.mySlides img').css('max-height', screenheight);
</script>
";
        // line 10
        if (($context["has_images"] ?? null)) {
            // line 11
            echo "\t<span class=\"close cursor\" onclick=\"ptzoom.closeLightBox()\"></span>
    <div class=\"lightbox-content\">
        ";
            // line 13
            $context["i"] = 1;
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 15
                echo "            <div class=\"mySlides\">
                <div class=\"numbertext\">";
                // line 16
                echo ($context["i"] ?? null);
                echo " / ";
                echo twig_length_filter($this->env, ($context["images"] ?? null));
                echo "</div>
                <a onclick=\"ptzoom.plusSlides(1)\" ><img src=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["image"], "src", [], "any", false, false, false, 17);
                echo "\" alt=\"\"></a>
            </div>
            ";
                // line 19
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t<span class=\"close cursor\" onclick=\"ptzoom.closeLightBox()\"></span>
    </div>

    <a class=\"prev\" onclick=\"ptzoom.plusSlides(-1)\"><i class=\"ion-chevron-left\"></i></a>
    <a class=\"next\" onclick=\"ptzoom.plusSlides(1)\"><i class=\"ion-chevron-right\"></i></a>
";
        } else {
            // line 27
            echo "    <div class=\"lightbox-content\">No Image Data</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/product/lightbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  83 => 21,  77 => 20,  75 => 19,  70 => 17,  64 => 16,  61 => 15,  56 => 14,  54 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/product/lightbox.twig", "");
    }
}
