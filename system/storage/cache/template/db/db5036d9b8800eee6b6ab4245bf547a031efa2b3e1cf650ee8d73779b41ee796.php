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

/* default/template/information/contact.twig */
class __TwigTemplate_0783c387d0cf60c4a113ddb6535281daeda0216898a46f5b9d4b83e3f4b25ee3 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12 col-md-8";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-12 col-md-8";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12 col-md-8";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <h3>";
        // line 18
        echo ($context["text_location"] ?? null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row contact-panel-row\">
            ";
        // line 22
        if (($context["image"] ?? null)) {
            // line 23
            echo "            <div class=\"col-sm-3 contact-panel-image\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 25
        echo "            <div class=\"col-sm-3\"><strong>";
        echo ($context["store"] ?? null);
        echo "</strong><br />
              <address>
              ";
        // line 27
        echo ($context["address"] ?? null);
        echo "
              </address>
              <!-- ";
        // line 29
        if (($context["geocode"] ?? null)) {
            // line 30
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a>
              ";
        }
        // line 31
        echo " -->
            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 33
        echo ($context["text_telephone"] ?? null);
        echo "</strong><br>
              ";
        // line 34
        echo ($context["telephone"] ?? null);
        echo "<br />
              <br />
              ";
        // line 36
        if (($context["fax"] ?? null)) {
            // line 37
            echo "              <strong>";
            echo ($context["text_fax"] ?? null);
            echo "</strong><br>
              ";
            // line 38
            echo ($context["fax"] ?? null);
            echo "
              ";
        }
        // line 40
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 42
        if (($context["open"] ?? null)) {
            // line 43
            echo "              <strong>";
            echo ($context["text_open"] ?? null);
            echo "</strong><br />
              ";
            // line 44
            echo ($context["open"] ?? null);
            echo "<br />
              <br />
              ";
        }
        // line 47
        echo "              ";
        if (($context["comment"] ?? null)) {
            // line 48
            echo "              <strong>";
            echo ($context["text_comment"] ?? null);
            echo "</strong><br />
              ";
            // line 49
            echo ($context["comment"] ?? null);
            echo "
              ";
        }
        // line 51
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 55
        if (($context["locations"] ?? null)) {
            // line 56
            echo "      <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 59
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 61);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 61);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 63);
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 67);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 67);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 67);
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 69
                echo "                <div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 69);
                echo "</strong><br />
                  <address>
                  ";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 71);
                echo "
                  </address>
                  <!-- ";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 74));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                  ";
                }
                // line 75
                echo " -->
                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 77
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
                  ";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 78);
                echo "<br />
                  <br />
                  ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
                  ";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 82);
                    echo "
                  ";
                }
                // line 84
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 88);
                    echo "<br />
                  <br />
                  ";
                }
                // line 91
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
                  ";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 93);
                    echo "
                  ";
                }
                // line 95
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "      </div>
      ";
        }
        // line 103
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 105
        echo ($context["text_contact"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-xs-12 col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-xs-12 col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 109
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 110
        if (($context["error_name"] ?? null)) {
            // line 111
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 113
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-xs-12 col-sm-2 control-label\" for=\"input-email\">";
        // line 116
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-xs-12 col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 118
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 119
        if (($context["error_email"] ?? null)) {
            // line 120
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 122
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-xs-12 col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 125
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
            <div class=\"col-xs-12 col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 127
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
              ";
        // line 128
        if (($context["error_enquiry"] ?? null)) {
            // line 129
            echo "              <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
              ";
        }
        // line 131
        echo "            </div>
          </div>
          ";
        // line 133
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 137
        echo ($context["button_submit"] ?? null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 141
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 142
        echo ($context["column_right"] ?? null);
        echo "

    <div class=\"col-sm-12 col-md-4\">
        ";
        // line 145
        if (($context["geocode"] ?? null)) {
            // line 146
            echo "            <iframe class=\"contact-us-iframe\"
                src=\"https://maps.google.com/maps?q=";
            // line 147
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15&output=embed\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\">
            </iframe>
        ";
        }
        // line 150
        echo "    </div>
    

    </div>
</div>
";
        // line 155
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 155,  446 => 150,  438 => 147,  435 => 146,  433 => 145,  427 => 142,  423 => 141,  416 => 137,  409 => 133,  405 => 131,  399 => 129,  397 => 128,  393 => 127,  388 => 125,  383 => 122,  377 => 120,  375 => 119,  371 => 118,  366 => 116,  361 => 113,  355 => 111,  353 => 110,  349 => 109,  344 => 107,  339 => 105,  333 => 103,  329 => 101,  318 => 95,  313 => 93,  308 => 92,  305 => 91,  299 => 88,  294 => 87,  292 => 86,  288 => 84,  283 => 82,  278 => 81,  276 => 80,  271 => 78,  267 => 77,  263 => 75,  253 => 74,  251 => 73,  246 => 71,  240 => 69,  230 => 67,  228 => 66,  222 => 63,  215 => 61,  211 => 59,  207 => 58,  201 => 56,  199 => 55,  193 => 51,  188 => 49,  183 => 48,  180 => 47,  174 => 44,  169 => 43,  167 => 42,  163 => 40,  158 => 38,  153 => 37,  151 => 36,  146 => 34,  142 => 33,  138 => 31,  128 => 30,  126 => 29,  121 => 27,  115 => 25,  105 => 23,  103 => 22,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
