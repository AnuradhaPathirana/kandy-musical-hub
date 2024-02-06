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

/* tt_rozer1/template/plaza/module/ptnewsletter.twig */
class __TwigTemplate_846baea26c05c71a9720b9a894f8d0f4f9aa56e625860e45b4d698478d1bd2c0 extends \Twig\Template
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
        if (($context["popup"] ?? null)) {
            // line 2
            echo "    ";
            $context["newsletter_class"] = "newsletter-popup";
        } else {
            // line 4
            echo "    ";
            $context["newsletter_class"] = "newsletter-block";
        }
        // line 6
        echo "<div class=\"newsletter-container ";
        echo ($context["newsletter_class"] ?? null);
        echo "\">
    ";
        // line 7
        if (($context["popup"] ?? null)) {
            // line 8
            echo "\t\t<a href=\"javascript:void(0)\" class=\"a-close-newsletter-full\" onclick=\"ptnewsletter.closePopup();\"></a>
        <div class=\"popup-content\">
\t\t<a href=\"javascript:void(0)\" class=\"a-close-newsletter\" onclick=\"ptnewsletter.closePopup();\">";
            // line 10
            echo ($context["text_close"] ?? null);
            echo "</a>
    ";
        }
        // line 12
        echo "    
\t";
        // line 13
        if (($context["popup"] ?? null)) {
            // line 14
            echo "\t\t<h3>";
            echo ($context["heading_title1"] ?? null);
            echo "</h3>
\t\t<p>";
            // line 15
            echo ($context["text_description"] ?? null);
            echo "</p>
\t";
        } else {
            // line 17
            echo "\t<div class=\"newsletter-title\">
\t\t<h3>";
            // line 18
            echo ($context["heading_title1"] ?? null);
            echo "</h3>
\t\t<p>";
            // line 19
            echo ($context["text_description2"] ?? null);
            echo "</p>
    </div>
\t
\t";
        }
        // line 23
        echo "    <div class=\"newsletter-content\">
        
        <div class=\"content\">
            <input type=\"text\" class=\"newsletter_email\" name=\"mail_subscribe\" value=\"\" placeholder=\"";
        // line 26
        echo ($context["entry_mail_subscribe"] ?? null);
        echo "\" />
\t\t\t
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"ptnewsletter.saveMail(\$(this));\">";
        // line 28
        echo ($context["button_subscribe"] ?? null);
        echo "</button>
        </div>
\t\t<p class=\"text-note\">";
        // line 30
        echo ($context["text_note"] ?? null);
        echo "</p>
\t\t<div class=\"newsletter-notification\"></div>
        ";
        // line 32
        if (($context["popup"] ?? null)) {
            // line 33
            echo "            <div class=\"notice\">
                <input type=\"checkbox\" class=\"cbk_newsletter\" />
                <span>";
            // line 35
            echo ($context["text_notification"] ?? null);
            echo "</span>
            </div>
        ";
        }
        // line 38
        echo "\t\t
    </div>
    
\t";
        // line 41
        if (($context["popup"] ?? null)) {
            // line 42
            echo "        </div>
    ";
        }
        // line 44
        echo "</div>
<script>
    ptnewsletter.checkCookie();
</script>";
    }

    public function getTemplateName()
    {
        return "tt_rozer1/template/plaza/module/ptnewsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  131 => 42,  129 => 41,  124 => 38,  118 => 35,  114 => 33,  112 => 32,  107 => 30,  102 => 28,  97 => 26,  92 => 23,  85 => 19,  81 => 18,  78 => 17,  73 => 15,  68 => 14,  66 => 13,  63 => 12,  58 => 10,  54 => 8,  52 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer1/template/plaza/module/ptnewsletter.twig", "");
    }
}
