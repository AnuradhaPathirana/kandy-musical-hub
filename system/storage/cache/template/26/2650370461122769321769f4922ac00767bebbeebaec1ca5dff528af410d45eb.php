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

/* tt_rozer4/template/plaza/quicklogin/login.twig */
class __TwigTemplate_d86733d412bc2a4b97c17c28afa6e7f0df5432ae7241eff0a365f9b0610d0e22 extends \Twig\Template
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
        echo "<div class=\"ajax-container\">
    <div class=\"login-form-content\">
        <h3>";
        // line 3
        echo ($context["text_returning_customer"] ?? null);
        echo "</h3>
        <p><strong>";
        // line 4
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
        <form action=\"#\" method=\"post\" id=\"ajax-login-form\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 7
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 8
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 11
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 12
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a class=\"forgotten\" href=\"";
        // line 13
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
            </div>
            <div class=\"action\">
                <button class=\"button btn\" type=\"button\" onclick=\"ptlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value)\"><span>";
        // line 16
        echo ($context["button_login"] ?? null);
        echo "</span></button>
                <button class=\"button btn\" type=\"button\" onclick=\"ptlogin.appendRegisterForm()\"><span>";
        // line 17
        echo ($context["button_register_link"] ?? null);
        echo "</span></button>
                <img class=\"ajax-load-img\" alt=\"\" src=\"";
        // line 18
        echo ($context["loader_img"] ?? null);
        echo "\" width=\"30\" height=\"30\" />
            </div>
            ";
        // line 20
        if (($context["redirect"] ?? null)) {
            // line 21
            echo "            <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
            ";
        }
        // line 23
        echo "        </form>
    </div>
</div>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        var keycode = '';

        \$('#input-email').keypress(function (e) {
            keycode = (e.keyCode ? e.keyCode : e.which);
            if(keycode == '13') {
                ptlogin.loginAction(ptlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
            }
        });

        \$('#input-password').keypress(function (e) {
            keycode = (e.keyCode ? e.keyCode : e.which);
            if(keycode == '13') {
                ptlogin.loginAction(ptlogin.loginAction(document.getElementById('input-email').value, document.getElementById('input-password').value));
            }
        });
    });

</script>

";
    }

    public function getTemplateName()
    {
        return "tt_rozer4/template/plaza/quicklogin/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  96 => 21,  94 => 20,  89 => 18,  85 => 17,  81 => 16,  73 => 13,  67 => 12,  63 => 11,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_rozer4/template/plaza/quicklogin/login.twig", "");
    }
}
