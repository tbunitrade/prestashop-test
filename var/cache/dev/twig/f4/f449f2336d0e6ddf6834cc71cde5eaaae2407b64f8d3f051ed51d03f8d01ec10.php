<?php

/* PrestaShopBundle:Admin/Helpers:range_inputs.html.twig */
class __TwigTemplate_0c7877d7836e53d3f8bcf7a85b886aef729f1536da92fc78659d97d9a262cc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:range_inputs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:range_inputs.html.twig"));

        // line 26
        echo "<script>
    \$(document).ready(function() {
        var sliderInput = \$('#";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "');
        var minInput = \$('#";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "_min');
        var maxInput = \$('#";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "_max');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
\t        value = value.replace('BETWEEN ', '');
\t        value = value.replace(' AND ', ',');
\t        value = value.replace('<=', '";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ",');
\t        value = value.replace('>=', '";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ",');
\t        value = value.split(',');
\t        value[0] = Number(value[0]);
\t        value[1] = Number(value[1]);
        } else {
            value = [";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo "];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        // Init inputs
        if (value[0] > ";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ")
            minInput.val(value[0]);
        if (value[1] < ";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")
            maxInput.val(value[1]);

        // Change events
        var inputFlasher = function(input) {
            // animate input to highlight it (like a pulsate effect on jqueryUI)
            \$(input).stop().delay(100)
                    .fadeIn(100).fadeOut(100)
                    .queue(function() { \$(this).css(\"background-color\", \"#FF5555\").dequeue(); })
                    .fadeIn(160).fadeOut(160).fadeIn(160).fadeOut(160).fadeIn(160)
                    .animate({ backgroundColor: \"#FFFFFF\"}, 800);
        };
        var updater = function(srcElement) {
            var isMinModified = (srcElement.attr('id') == minInput.attr('id'));

            // retrieve values, replace ',' by '.', cast them into numbers (float/int)
            var newValues = [(minInput.val()!='')?Number(minInput.val().replace(',', '.')):";
        // line 68
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ", (maxInput.val()!='')?Number(maxInput.val().replace(',', '.')):";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo "];

            // if newValues are out of bounds, or not valid, fix the element.
            if (isMinModified && !(newValues[0] >= ";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo " && newValues[0] <= ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")) {
                newValues[0] = ";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ";
                minInput.val('');
                inputFlasher(minInput);
            }
            if (!isMinModified && !(newValues[1] >= ";
        // line 76
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo " && newValues[1] <= ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")) {
                newValues[1] = ";
        // line 77
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ";
                maxInput.val('');
                inputFlasher(maxInput);
            }

            // if newValues are not ordered, fix the opposite input.
            if (isMinModified && newValues[0] > newValues[1]) {
                newValues[1] = newValues[0];
                maxInput.val(newValues[0]);
                inputFlasher(maxInput);
            }
            if (!isMinModified && newValues[0] > newValues[1]) {
                newValues[0] = newValues[1];
                minInput.val(newValues[0]);
                inputFlasher(minInput);
            }

            if (newValues[0] == ";
        // line 94
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo " && newValues[1] == ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '');
            } else if (newValues[0] == ";
        // line 96
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "0")) : ("0")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '<='+newValues[1]);
            } else if (newValues[1] == ";
        // line 98
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "1000000000")) : ("1000000000")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '>='+newValues[0]);
            } else {
                sliderInput.attr('sql', 'BETWEEN ' + newValues[0] + ' AND ' + newValues[1]);
            }

            ";
        // line 104
        if (array_key_exists("on_change_func_name", $context)) {
            // line 105
            echo "            var afterUpdate = function() {
                ";
            // line 106
            echo (isset($context["on_change_func_name"]) ? $context["on_change_func_name"] : $this->getContext($context, "on_change_func_name"));
            echo "
            };
            afterUpdate();
            ";
        }
        // line 110
        echo "        }
        minInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
        maxInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
    });
</script>
<div id=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "_div\">
    <input type=\"hidden\" id=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "\" value=\"\" sql=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "_min\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("minLabel", $context)) ? (_twig_default_filter((isset($context["minLabel"]) ? $context["minLabel"] : $this->getContext($context, "minLabel")), "Min")) : ("Min")), "html", null, true);
        echo "\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["input_name"]) ? $context["input_name"] : $this->getContext($context, "input_name")), "html", null, true);
        echo "_max\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("maxLabel", $context)) ? (_twig_default_filter((isset($context["maxLabel"]) ? $context["maxLabel"] : $this->getContext($context, "maxLabel")), "Max")) : ("Max")), "html", null, true);
        echo "\" />
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Helpers:range_inputs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 122,  198 => 121,  190 => 120,  186 => 119,  175 => 110,  168 => 106,  165 => 105,  163 => 104,  154 => 98,  149 => 96,  142 => 94,  122 => 77,  116 => 76,  109 => 72,  103 => 71,  95 => 68,  76 => 52,  71 => 50,  59 => 43,  51 => 38,  47 => 37,  37 => 30,  33 => 29,  29 => 28,  25 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{# Display a range input with min/max controls #}
<script>
    \$(document).ready(function() {
        var sliderInput = \$('#{{ input_name }}');
        var minInput = \$('#{{ input_name }}_min');
        var maxInput = \$('#{{ input_name }}_max');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
\t        value = value.replace('BETWEEN ', '');
\t        value = value.replace(' AND ', ',');
\t        value = value.replace('<=', '{{ min|default('0') }},');
\t        value = value.replace('>=', '{{ max|default('1000000000') }},');
\t        value = value.split(',');
\t        value[0] = Number(value[0]);
\t        value[1] = Number(value[1]);
        } else {
            value = [{{ min|default('0') }}, {{ max|default('1000000000') }}];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        // Init inputs
        if (value[0] > {{ min|default('0') }})
            minInput.val(value[0]);
        if (value[1] < {{ max|default('1000000000') }})
            maxInput.val(value[1]);

        // Change events
        var inputFlasher = function(input) {
            // animate input to highlight it (like a pulsate effect on jqueryUI)
            \$(input).stop().delay(100)
                    .fadeIn(100).fadeOut(100)
                    .queue(function() { \$(this).css(\"background-color\", \"#FF5555\").dequeue(); })
                    .fadeIn(160).fadeOut(160).fadeIn(160).fadeOut(160).fadeIn(160)
                    .animate({ backgroundColor: \"#FFFFFF\"}, 800);
        };
        var updater = function(srcElement) {
            var isMinModified = (srcElement.attr('id') == minInput.attr('id'));

            // retrieve values, replace ',' by '.', cast them into numbers (float/int)
            var newValues = [(minInput.val()!='')?Number(minInput.val().replace(',', '.')):{{ min|default('0') }}, (maxInput.val()!='')?Number(maxInput.val().replace(',', '.')):{{ max|default('1000000000') }}];

            // if newValues are out of bounds, or not valid, fix the element.
            if (isMinModified && !(newValues[0] >= {{ min|default('0') }} && newValues[0] <= {{ max|default('1000000000') }})) {
                newValues[0] = {{ min|default('0') }};
                minInput.val('');
                inputFlasher(minInput);
            }
            if (!isMinModified && !(newValues[1] >= {{ min|default('0') }} && newValues[1] <= {{ max|default('1000000000') }})) {
                newValues[1] = {{ max|default('1000000000') }};
                maxInput.val('');
                inputFlasher(maxInput);
            }

            // if newValues are not ordered, fix the opposite input.
            if (isMinModified && newValues[0] > newValues[1]) {
                newValues[1] = newValues[0];
                maxInput.val(newValues[0]);
                inputFlasher(maxInput);
            }
            if (!isMinModified && newValues[0] > newValues[1]) {
                newValues[0] = newValues[1];
                minInput.val(newValues[0]);
                inputFlasher(minInput);
            }

            if (newValues[0] == {{ min|default('0') }} && newValues[1] == {{ max|default('1000000000') }}) {
                sliderInput.attr('sql', '');
            } else if (newValues[0] == {{ min|default('0') }}) {
                sliderInput.attr('sql', '<='+newValues[1]);
            } else if (newValues[1] == {{ max|default('1000000000') }}) {
                sliderInput.attr('sql', '>='+newValues[0]);
            } else {
                sliderInput.attr('sql', 'BETWEEN ' + newValues[0] + ' AND ' + newValues[1]);
            }

            {% if on_change_func_name is defined %}
            var afterUpdate = function() {
                {{ on_change_func_name|raw }}
            };
            afterUpdate();
            {% endif %}
        }
        minInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
        maxInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
    });
</script>
<div id=\"{{ input_name }}_div\">
    <input type=\"hidden\" id=\"{{ input_name }}\" name=\"{{ input_name }}\" value=\"\" sql=\"{{ value }}\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"{{ input_name }}_min\" value=\"\" placeholder=\"{{ minLabel|default('Min') }}\" />
    <input class=\"form-control form-min-max\" type=\"text\" id=\"{{ input_name }}_max\" value=\"\" placeholder=\"{{ maxLabel|default('Max') }}\" />
</div>
", "PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Helpers/range_inputs.html.twig");
    }
}
