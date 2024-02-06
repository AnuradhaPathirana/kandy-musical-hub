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

/* tt_rozer1/template/plaza/quickview/qvcontainer.twig */
class __TwigTemplate_fafbcc21f6896242d752320ad2b4a648656cc0cb91e23f517bdd1b9a6d1685a0 extends \Twig\Template
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
        if (($context["use_quick_view"] ?? null)) {
            // line 2
            echo "<div id=\"quickview-content\">
    <!-- Load product content -->
</div>

<div id=\"quickview-bg-block\">
    <!-- Background -->
</div>

<div class=\"quickview-load-img\">
    <img src=\"";
            // line 11
            echo ($context["loader_img"] ?? null);
            echo "\" alt=\"\" />
</div>

<div class=\"lightbox-container lbo-quickview\"></div>

<input type=\"hidden\" id=\"qv-text-close\" value=\"";
            // line 16
            echo ($context["text_close"] ?? null);
            echo "\" />

<script type=\"text/javascript\">
    \$('#quickview-bg-block').click(function () {
        ptquickview.closeQVFrame();
    })

    if(\$('#product-product').length) {
        \$('.lightbox-container.lbo-quickview').remove();
    }
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/quickview/qvcontainer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/quickview/qvcontainer.twig", "");
    }
}
