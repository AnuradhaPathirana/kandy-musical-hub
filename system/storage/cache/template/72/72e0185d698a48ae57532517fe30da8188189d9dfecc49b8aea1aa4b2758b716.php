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

/* default/template/extension/payment/payheretpl.twig */
class __TwigTemplate_5a0d8ce187b2d1c99d5ef4bcd95e5e7a4023aa133936cd4df1d0dc10061007f4 extends \Twig\Template
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
        echo "<style>
.loader {
  border: 4px solid #dfdfdf;
  border-radius: 50%;
  border-top: 4px solid #000;
  width: 15px;
  height: 15px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}
/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

";
        // line 23
        if (($context["testmode"] ?? null)) {
            // line 24
            echo "  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_testmode"] ?? null);
            echo "</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if (($context["has_recurring_exception_trial"] ?? null)) {
            // line 28
            echo "  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_recurring_exception_trial"] ?? null);
            echo "</div>
";
        }
        // line 30
        if (($context["has_recurring_exception_unsupported_freq"] ?? null)) {
            // line 31
            echo "  <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_recurring_exception_unsupported_freq"] ?? null);
            echo "</div>
";
        }
        // line 33
        if (($context["has_recurring_exception_unmatching_rec"] ?? null)) {
            // line 34
            echo "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_recurring_exception_unmatching_rec"] ?? null);
            echo "</div>
";
        }
        // line 36
        echo "
";
        // line 37
        if ( !($context["has_recurring_exceptions"] ?? null)) {
            // line 38
            echo "  ";
            if (($context["is_onsite_checkout_enabled"] ?? null)) {
                // line 39
                echo "    <div class=\"buttons\">
        <div class=\"pull-right\">
          <div id=\"ph-loader\" class=\"loader-container\">
            <div class=\"loader\"></div>
          </div>
          <button id=\"ph-button\" type=\"button\" class=\"btn btn-primary\" onclick=\"payhere_showmodal()\">";
                // line 44
                echo ($context["button_confirm"] ?? null);
                echo "</button>
        </div>
    </div>
    <script>

      document.getElementById(\"ph-loader\").style.display = \"block\";
      document.getElementById(\"ph-button\").style.display = \"none\";

      /*
        Loading the script this way to prevent Twig templating
        issues. When using the <script> tag to load the library,
        \"undefined object\" error for the payhere variable. 
      */
      let _s = document.createElement(\"script\");
      _s.addEventListener(\"load\", function(){
        document.getElementById(\"ph-loader\").style.display = \"none\";
        document.getElementById(\"ph-button\").style.display = \"block\";
      });
      _s.src = \"https://www.payhere.lk/lib/payhere.js\";
      document.body.appendChild(_s);
      
      function payhere_showmodal(){

        let payment_obj = {
          sandbox: \"";
                // line 68
                echo ($context["sandbox"] ?? null);
                echo "\",
          merchant_id: \"";
                // line 69
                echo ($context["merchant_id"] ?? null);
                echo "\",
          return_url: \"";
                // line 70
                echo ($context["return_url"] ?? null);
                echo "\",
          cancel_url: \"";
                // line 71
                echo ($context["cancel_url"] ?? null);
                echo "\",
          notify_url: \"";
                // line 72
                echo ($context["status_url"] ?? null);
                echo "\", 
          first_name: \"";
                // line 73
                echo ($context["firstname"] ?? null);
                echo "\",
          last_name: \"";
                // line 74
                echo ($context["lastname"] ?? null);
                echo "\",
          email: \"";
                // line 75
                echo ($context["email"] ?? null);
                echo "\",
          phone: \"";
                // line 76
                echo ($context["phone"] ?? null);
                echo "\",
          address: \"";
                // line 77
                echo ($context["address"] ?? null);
                echo "\",
          address1: \"";
                // line 78
                echo ($context["address1"] ?? null);
                echo "\",
          address2: \"";
                // line 79
                echo ($context["address2"] ?? null);
                echo "\",
          zip: \"";
                // line 80
                echo ($context["postal_code"] ?? null);
                echo "\",
          city: \"";
                // line 81
                echo ($context["city"] ?? null);
                echo "\",
          state: \"";
                // line 82
                echo ($context["state"] ?? null);
                echo "\",
          country: \"";
                // line 83
                echo ($context["country"] ?? null);
                echo "\",
          order_id: \"";
                // line 84
                echo ($context["order_id"] ?? null);
                echo "\",
          items: \"";
                // line 85
                echo ($context["items_text"] ?? null);
                echo "\",
          currency: \"";
                // line 86
                echo ($context["currency"] ?? null);
                echo "\",
          amount: \"";
                // line 87
                echo ($context["amount"] ?? null);
                echo "\",
          hash: \"";
                // line 88
                echo ($context["hash"] ?? null);
                echo "\"
        };
        
        ";
                // line 91
                if (($context["has_recurring_products"] ?? null)) {
                    // line 92
                    echo "          payment_obj['recurrence'] = \"";
                    echo ($context["recurring_recurrence"] ?? null);
                    echo "\";
          payment_obj['duration'] = \"";
                    // line 93
                    echo ($context["recurring_duration"] ?? null);
                    echo "\";
          payment_obj['startup_fee'] = \"";
                    // line 94
                    echo ($context["recurring_startup"] ?? null);
                    echo "\"

          payment_obj[\"items\"] = \"OpenCart Order #";
                    // line 96
                    echo ($context["order_id"] ?? null);
                    echo "\";
          payment_obj[\"item_name_1\"] = \"OpenCart Order\";
          payment_obj[\"item_number_1\"] = \"";
                    // line 98
                    echo ($context["order_id"] ?? null);
                    echo "\";
          payment_obj[\"amount_1\"] = \"";
                    // line 99
                    echo (($context["amount"] ?? null) + ($context["recurring_startup"] ?? null));
                    echo "\";
          payment_obj[\"quantity_1\"] = \"1\";
          payment_obj['custom_1'] = \"";
                    // line 101
                    echo ($context["custom_1"] ?? null);
                    echo "\";
        ";
                } else {
                    // line 103
                    echo "          ";
                    $context["i"] = 1;
                    // line 104
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 105
                        echo "          ";
                        // line 110
                        echo "          ";
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 111
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "          
        ";
                }
                // line 114
                echo "
        ";
                // line 115
                if (($context["discount_amount_cart"] ?? null)) {
                    // line 116
                    echo "          ";
                    // line 117
                    echo "        ";
                }
                // line 118
                echo "
        ";
                // line 122
                echo "
        payhere.onCompleted = function onCompleted(orderId) {
          window.location = \"";
                // line 124
                echo ($context["return_url"] ?? null);
                echo "\";
        };
      
        payhere.onError = function onError(error) {
          alert(\"PayHere: Payment failed with error: \" + error);
        };

        console.log(JSON.stringify(payment_obj));
        payhere.startPayment(payment_obj);
      }
    </script>
  ";
            } else {
                // line 136
                echo "    <form action=\"";
                echo ($context["action"] ?? null);
                echo "\" method=\"post\">
        <input type=\"hidden\" name=\"merchant_id\" value=\"";
                // line 137
                echo ($context["merchant_id"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"return_url\" value=\"";
                // line 138
                echo ($context["return_url"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"cancel_url\" value=\"";
                // line 139
                echo ($context["cancel_url"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"notify_url\" value=\"";
                // line 140
                echo ($context["status_url"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"language\" value=\"";
                // line 141
                echo ($context["language"] ?? null);
                echo "\" />
    
        <input type=\"hidden\" name=\"first_name\" value=\"";
                // line 143
                echo ($context["firstname"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"last_name\" value=\"";
                // line 144
                echo ($context["lastname"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"email\" value=\"";
                // line 145
                echo ($context["email"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"phone\" value=\"";
                // line 146
                echo ($context["phone_number"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"address\" value=\"";
                // line 147
                echo ($context["address"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"address1\" value=\"";
                // line 148
                echo ($context["address1"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"address2\" value=\"";
                // line 149
                echo ($context["address2"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"zip\" value=\"";
                // line 150
                echo ($context["postal_code"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"city\" value=\"";
                // line 151
                echo ($context["city"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"state\" value=\"";
                // line 152
                echo ($context["state"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"country\" value=\"";
                // line 153
                echo ($context["country"] ?? null);
                echo "\" />
        
        <input type=\"hidden\" name=\"order_id\" value=\"";
                // line 155
                echo ($context["order_id"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"currency\" value=\"";
                // line 156
                echo ($context["currency"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"amount\" value=\"";
                // line 157
                echo ($context["amount"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"hash\" value=\"";
                // line 158
                echo ($context["hash"] ?? null);
                echo "\" />
        
        ";
                // line 160
                if (($context["has_recurring_products"] ?? null)) {
                    // line 161
                    echo "          <input type=\"hidden\" name=\"recurrence\" value=\"";
                    echo ($context["recurring_recurrence"] ?? null);
                    echo "\" />
          <input type=\"hidden\" name=\"duration\" value=\"";
                    // line 162
                    echo ($context["recurring_duration"] ?? null);
                    echo "\" />
          <input type=\"hidden\" name=\"startup_fee\" value=\"";
                    // line 163
                    echo ($context["recurring_startup"] ?? null);
                    echo "\" />

          <input type=\"hidden\" name=\"items\" value=\"OpenCart Order #";
                    // line 165
                    echo ($context["order_id"] ?? null);
                    echo "\" />
          <input type=\"hidden\" name=\"item_name_1\" value=\"OpenCart Order\" />
          <input type=\"hidden\" name=\"item_number_1\" value=\"";
                    // line 167
                    echo ($context["order_id"] ?? null);
                    echo "\" />
          <input type=\"hidden\" name=\"amount_1\" value=\"";
                    // line 168
                    echo (($context["amount"] ?? null) + ($context["recurring_startup"] ?? null));
                    echo "\" />
          <input type=\"hidden\" name=\"quantity_1\" value=\"1\" />
          <input type=\"hidden\" name=\"custom_1\" value=\"";
                    // line 170
                    echo ($context["custom_1"] ?? null);
                    echo "\" />
        ";
                } else {
                    // line 172
                    echo "          <input type=\"hidden\" name=\"items\" value=\"";
                    echo ($context["items_text"] ?? null);
                    echo "\" />
          ";
                    // line 173
                    $context["i"] = 1;
                    // line 174
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 175
                        echo "          <input type=\"hidden\" name=\"item_name_";
                        echo ($context["i"] ?? null);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 175);
                        echo "\" />
          <input type=\"hidden\" name=\"item_number_";
                        // line 176
                        echo ($context["i"] ?? null);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 176);
                        echo "\" />
          <input type=\"hidden\" name=\"amount_";
                        // line 177
                        echo ($context["i"] ?? null);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 177);
                        echo "\" />
          <input type=\"hidden\" name=\"quantity_";
                        // line 178
                        echo ($context["i"] ?? null);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 178);
                        echo "\" />
          <input type=\"hidden\" name=\"weight_";
                        // line 179
                        echo ($context["i"] ?? null);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 179);
                        echo "\" />
          ";
                        // line 180
                        $context["i"] = (($context["i"] ?? null) + 1);
                        // line 181
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "        ";
                }
                // line 183
                echo "      
        ";
                // line 184
                if (($context["discount_amount_cart"] ?? null)) {
                    // line 185
                    echo "        <input type=\"hidden\" name=\"discount_amount_cart\" value=\"";
                    echo ($context["discount_amount_cart"] ?? null);
                    echo "\" />
        ";
                }
                // line 187
                echo "
        <input type=\"hidden\" name=\"site_title\" value=\"";
                // line 188
                echo ($context["description"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"logo_url\" value=\"";
                // line 189
                echo ($context["logo"] ?? null);
                echo "\" />
        <input type=\"hidden\" name=\"platform\" value=\"";
                // line 190
                echo ($context["platform"] ?? null);
                echo "\" />
        
        <div class=\"buttons\">
        <div class=\"pull-right\">
          <input type=\"submit\" value=\"";
                // line 194
                echo ($context["button_confirm"] ?? null);
                echo "\" class=\"btn btn-primary\" />
        </div>
      </div>
    </form>
  ";
            }
        }
        // line 199
        echo "  ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/payheretpl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 199,  520 => 194,  513 => 190,  509 => 189,  505 => 188,  502 => 187,  496 => 185,  494 => 184,  491 => 183,  488 => 182,  482 => 181,  480 => 180,  474 => 179,  468 => 178,  462 => 177,  456 => 176,  449 => 175,  444 => 174,  442 => 173,  437 => 172,  432 => 170,  427 => 168,  423 => 167,  418 => 165,  413 => 163,  409 => 162,  404 => 161,  402 => 160,  397 => 158,  393 => 157,  389 => 156,  385 => 155,  380 => 153,  376 => 152,  372 => 151,  368 => 150,  364 => 149,  360 => 148,  356 => 147,  352 => 146,  348 => 145,  344 => 144,  340 => 143,  335 => 141,  331 => 140,  327 => 139,  323 => 138,  319 => 137,  314 => 136,  299 => 124,  295 => 122,  292 => 118,  289 => 117,  287 => 116,  285 => 115,  282 => 114,  278 => 112,  272 => 111,  269 => 110,  267 => 105,  262 => 104,  259 => 103,  254 => 101,  249 => 99,  245 => 98,  240 => 96,  235 => 94,  231 => 93,  226 => 92,  224 => 91,  218 => 88,  214 => 87,  210 => 86,  206 => 85,  202 => 84,  198 => 83,  194 => 82,  190 => 81,  186 => 80,  182 => 79,  178 => 78,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  158 => 73,  154 => 72,  150 => 71,  146 => 70,  142 => 69,  138 => 68,  111 => 44,  104 => 39,  101 => 38,  99 => 37,  96 => 36,  90 => 34,  88 => 33,  82 => 31,  80 => 30,  74 => 28,  72 => 27,  69 => 26,  63 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/payheretpl.twig", "");
    }
}
