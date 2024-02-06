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

/* tt_rozer4/template/common/column_right.twig */
class __TwigTemplate_add7d98f71c02fd7912a999f4aca4b9f50aed32f172c472813c69f2fc19f3921 extends \Twig\Template
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
        if ((($context["modules"] ?? null) || ($context["use_filter"] ?? null))) {
            // line 2
            echo "<aside id=\"column-right\" class=\"col-sm-3 col-xs-12\">
  <div class=\"col-order-inner\">
  ";
            // line 4
            if (($context["use_filter"] ?? null)) {
                // line 5
                echo "    ";
                echo ($context["filter_section"] ?? null);
                echo "
  ";
            }
            // line 7
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 8
                echo "  ";
                echo $context["module"];
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "  </div>
</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_rozer4/template/common/column_right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  56 => 8,  51 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer4/template/common/column_right.twig", "");
    }
}
