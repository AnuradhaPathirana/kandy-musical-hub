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

/* tt_rozer1/template/plaza/module/ptajaxlogin.twig */
class __TwigTemplate_c1930232342ef6cb551ac3ad9f2b2748b23abc56d6bba365a85750403e95495f extends \Twig\Template
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
        echo "<div id=\"ajax-login-block\">
</div>
<div id=\"ajax-loader\">
    <img src=\"";
        // line 4
        echo ($context["loader_img"] ?? null);
        echo "\" alt=\"\" />
</div>
<div class=\"ajax-body-login\">
    <div class=\"account-login\">
        <div class=\"page-title\">
            <h2>";
        // line 9
        echo ($context["title"] ?? null);
        echo "</h2>
            <a href=\"javascript:void(0);\" class=\"a-close-frm\" onclick=\"ptlogin.closeForm();\"><span>Close</span></a>
        </div>
        <div class=\"ajax-content\">
            ";
        // line 13
        echo ($context["ajax_login_content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"account-register\">
        <div class=\"page-title\">
            <h2>";
        // line 18
        echo ($context["title"] ?? null);
        echo "</h2>
            <a href=\"javascript:void(0);\" class=\"a-close-frm\" onclick=\"ptlogin.closeForm();\"><span>Close</span></a>
        </div>
        <div class=\"ajax-content\">
            ";
        // line 22
        echo ($context["ajax_register_content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"account-success\">
        <div class=\"ajax-content\">
            ";
        // line 27
        echo ($context["ajax_success_content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"logout-success\">
        <div class=\"ajax-content\">
            ";
        // line 32
        echo ($context["ajax_logoutsuccess_content"] ?? null);
        echo "
        </div>
    </div>
</div>
";
        // line 36
        if (($context["status"] ?? null)) {
            // line 37
            echo "    <input type=\"hidden\" id=\"quicklogin-status\" value=\"1\" />
";
        } else {
            // line 39
            echo "    <input type=\"hidden\" id=\"quicklogin-status\" value=\"0\" />
";
        }
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/module/ptajaxlogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  101 => 39,  97 => 37,  95 => 36,  88 => 32,  80 => 27,  72 => 22,  65 => 18,  57 => 13,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/module/ptajaxlogin.twig", "");
    }
}
