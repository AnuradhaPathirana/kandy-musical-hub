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

/* plaza/module/list.twig */
class __TwigTemplate_5c67008497e1b027efeae7bfce21cb3c21c0e0566d016361d3b5f90ae13ba0e6 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 19
        echo ($context["text_dashboard_menu"] ?? null);
        echo "</h3>
                        </div>
                        <ul class=\"nav nav-tabs menu-sections pt-dashboard-menu\">
                            ";
        // line 22
        $context["i"] = 0;
        // line 23
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plaza_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 24
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 24)) {
                // line 25
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 25)) {
                    echo " class=\"active\" ";
                }
                echo ">
                                        <a href=\"#ptcollapse_";
                // line 26
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent ";
                if ( !twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 26)) {
                    echo " collapsed ";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 26);
                echo "</a>
                                        <ul id=\"ptcollapse_";
                // line 27
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 27)) {
                    echo " in ";
                }
                echo "\">
                                            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 29
                    echo "                                                <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 29)) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 29);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 29);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                                        </ul>
                                    </li>
                                ";
            } else {
                // line 34
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 34)) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 34);
                echo "</a></li>
                                ";
            }
            // line 36
            echo "                                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 37
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 46
        echo ($context["text_list"] ?? null);
        echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div id=\"extension\">
                                <fieldset>
                                    ";
        // line 51
        if (($context["error_warning"] ?? null)) {
            // line 52
            echo "                                        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        </div>
                                    ";
        }
        // line 56
        echo "                                    ";
        if (($context["success"] ?? null)) {
            // line 57
            echo "                                        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        </div>
                                    ";
        }
        // line 61
        echo "                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover\">
                                            <thead>
                                            <tr>
                                                <td class=\"text-left\">";
        // line 65
        echo ($context["column_name"] ?? null);
        echo "</td>
                                                <td class=\"text-center\" width=\"200px\">";
        // line 66
        echo ($context["column_status"] ?? null);
        echo "</td>
                                                <td class=\"text-right\" width=\"100px\">";
        // line 67
        echo ($context["column_action"] ?? null);
        echo "</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 71
        if (($context["extensions"] ?? null)) {
            // line 72
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 73
                echo "                                                    <tr>
                                                        <td><b>";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 74);
                echo "</b></td>
                                                        <td class=\"text-center\">
                                                            ";
                // line 76
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                                                                <span class=\"item-status ";
                    if (twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 77)) {
                        echo "enabled";
                    } else {
                        echo "disabled";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "stt_text", [], "any", false, false, false, 77);
                    echo "</span>
                                                            ";
                }
                // line 79
                echo "                                                        </td>
                                                        <td class=\"text-right\">";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 81)) {
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 81);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_add"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a> ";
                    } else {
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 81);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_edit"] ?? null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> ";
                    }
                    // line 82
                    echo "                                                            ";
                } else {
                    // line 83
                    echo "                                                                <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
                                                            ";
                }
                // line 85
                echo "                                                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 85)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 85);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a> ";
                } else {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 85);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                echo "</td>
                                                    </tr>
                                                    ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 88
                    echo "                                                        <tr>
                                                            <td class=\"text-left\">&nbsp;&nbsp;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;&nbsp;&nbsp;";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 89);
                    echo "</td>
                                                            <td class=\"text-center\"><span class=\"item-status ";
                    // line 90
                    if (twig_get_attribute($this->env, $this->source, $context["module"], "status", [], "any", false, false, false, 90)) {
                        echo "enabled";
                    } else {
                        echo "disabled";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "stt_text", [], "any", false, false, false, 90);
                    echo "</span></td>
                                                            <td class=\"text-right\"><a href=\"";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "edit", [], "any", false, false, false, 91);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "delete", [], "any", false, false, false, 91);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a></td>
                                                        </tr>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                            ";
        } else {
            // line 96
            echo "                                                <tr>
                                                    <td class=\"text-center\" colspan=\"3\">";
            // line 97
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                                </tr>
                                            ";
        }
        // line 100
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 111
        if (($context["categories"] ?? null)) {
            // line 112
            echo "        <script tpe=\"text/javascript\"><!--
            \$('select[name=\"type\"]').on('change', function() {
                \$.ajax({
                    url: \$('select[name=\"type\"]').val(),
                    dataType: 'html',
                    beforeSend: function() {
                        \$('.fa-filter').addClass('fa-circle-o-notch fa-spin');
                        \$('.fa-filter').removeClass('fa-filter');
                        \$('select[name=\\'type\\']').prop('disabled', true);
                    },
                    complete: function() {
                        \$('.fa-circle-o-notch').addClass('fa-filter');
                        \$('.fa-circle-o-notch').removeClass('fa-circle-o-notch fa-spin');
                        \$('select[name=\\'type\\']').prop('disabled', false);
                    },
                    success: function(html) {
                        \$('#extension').html(html);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            });

            \$('select[name=\"type\"]').trigger('change');

            \$('#extension').on('click', '.btn-success', function(e) {
                e.preventDefault();

                var element = this;

                \$.ajax({
                    url: \$(element).attr('href'),
                    dataType: 'html',
                    beforeSend: function() {
                        \$(element).button('loading');
                    },
                    complete: function() {
                        \$(element).button('reset');
                    },
                    success: function(html) {
                        \$('#extension').html(html);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            });

            \$('#extension').on('click', '.btn-danger, .btn-warning', function(e) {
                e.preventDefault();

                if (confirm('";
            // line 164
            echo ($context["text_confirm"] ?? null);
            echo "')) {
                    var element = this;

                    \$.ajax({
                        url: \$(element).attr('href'),
                        dataType: 'html',
                        beforeSend: function() {
                            \$(element).button('loading');
                        },
                        complete: function() {
                            \$(element).button('reset');
                        },
                        success: function(html) {
                            \$('#extension').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            });
            //--></script>
    ";
        }
        // line 187
        echo "</div>
";
        // line 188
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/module/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 188,  445 => 187,  419 => 164,  365 => 112,  363 => 111,  350 => 100,  344 => 97,  341 => 96,  338 => 95,  332 => 94,  317 => 91,  307 => 90,  303 => 89,  300 => 88,  296 => 87,  278 => 85,  274 => 83,  271 => 82,  256 => 81,  254 => 80,  251 => 79,  239 => 77,  237 => 76,  232 => 74,  229 => 73,  224 => 72,  222 => 71,  215 => 67,  211 => 66,  207 => 65,  201 => 61,  193 => 57,  190 => 56,  182 => 52,  180 => 51,  172 => 46,  162 => 38,  156 => 37,  153 => 36,  141 => 34,  136 => 31,  121 => 29,  117 => 28,  109 => 27,  99 => 26,  92 => 25,  89 => 24,  84 => 23,  82 => 22,  76 => 19,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/list.twig", "");
    }
}
