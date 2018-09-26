<?php

/* @Product/ProductPage/Forms/form_specific_price.html.twig */
class __TwigTemplate_872c58c04da688cbc176ce6fb739ee9febf990106681ae3b3eb90c224f56024f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        // line 25
        echo "<div class=\"card card-block\">
  <h4><b>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific price conditions", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sp_id_shop", array(), "any", false, true), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 30
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", array(), "Admin.Global"), "html", null, true);
            echo "</label>
        ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_shop", array()), 'errors');
            echo "
        ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_shop", array()), 'widget');
            echo "
      </fieldset>
    </div>
  </div>
  ";
        } else {
            // line 40
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_shop", array()), 'widget');
            echo "
  ";
        }
        // line 42
        echo "
  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For", array(), "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_currency", array()), 'errors');
        echo "
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_currency", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_country", array()), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_country", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_group", array()), 'errors');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_group", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_customer", array()), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_customer", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 ";
        // line 74
        echo (((isset($context["has_combinations"]) ? $context["has_combinations"] : $this->getContext($context, "has_combinations"))) ? ("") : ("hide"));
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_product_attribute", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_product_attribute", array()), 'errors');
        echo "
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_id_product_attribute", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from", array()), 'errors');
        echo "
        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to", array(), "Admin.Global");
        echo "</label>
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_to", array()), 'errors');
        echo "
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_to", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-2\">
      <fieldset class=\"form-group\">
        <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from_quantity", array()), 'errors');
        echo "
        <div class=\"input-group\">
          ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_from_quantity", array()), 'widget');
        echo "
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit(s)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_price", array()), 'errors');
        echo "
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_price", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leave_bprice", array()), 'errors');
        echo "
        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leave_bprice", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply a discount of", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction", array()), 'errors');
        echo "
        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_type", array()), 'errors');
        echo "
        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_type", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_tax", array()), 'errors');
        echo "
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sp_reduction_tax", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancel", array()), 'widget');
        echo "
    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
  </div>
  <div class=\"clearfix\"></div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_specific_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 153,  289 => 152,  281 => 147,  277 => 146,  268 => 140,  264 => 139,  255 => 133,  251 => 132,  247 => 131,  237 => 124,  233 => 123,  224 => 117,  220 => 116,  216 => 115,  209 => 111,  198 => 103,  193 => 101,  188 => 99,  184 => 98,  176 => 93,  172 => 92,  168 => 91,  160 => 86,  156 => 85,  152 => 84,  143 => 78,  139 => 77,  135 => 76,  130 => 74,  122 => 69,  118 => 68,  114 => 67,  106 => 62,  102 => 61,  93 => 55,  89 => 54,  80 => 48,  76 => 47,  72 => 46,  66 => 42,  60 => 40,  52 => 35,  48 => 34,  44 => 33,  39 => 30,  37 => 29,  32 => 27,  28 => 26,  25 => 25,);
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
<div class=\"card card-block\">
  <h4><b>{{ 'Specific price conditions'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  {{ form_errors(form) }}

  {% if form.sp_id_shop.vars.choices is defined %}
  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>{{ 'Shop'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_shop) }}
        {{ form_widget(form.sp_id_shop) }}
      </fieldset>
    </div>
  </div>
  {% else %}
      {{ form_widget(form.sp_id_shop) }}
  {% endif %}

  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'For'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_currency) }}
        {{ form_widget(form.sp_id_currency) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_country) }}
        {{ form_widget(form.sp_id_country) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_group) }}
        {{ form_widget(form.sp_id_group) }}
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>{{ 'Customer'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_customer) }}
        {{ form_widget(form.sp_id_customer) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 {{ has_combinations ? '' : 'hide' }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_id_product_attribute.vars.label }}</label>
        {{ form_errors(form.sp_id_product_attribute) }}
        {{ form_widget(form.sp_id_product_attribute) }}
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from.vars.label }}</label>
        {{ form_errors(form.sp_from) }}
        {{ form_widget(form.sp_from) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'to'|trans({}, 'Admin.Global')|raw }}</label>
        {{ form_errors(form.sp_to) }}
        {{ form_widget(form.sp_to) }}
      </fieldset>
    </div>
    <div class=\"col-md-2\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from_quantity.vars.label }}</label>
        {{ form_errors(form.sp_from_quantity) }}
        <div class=\"input-group\">
          {{ form_widget(form.sp_from_quantity) }}
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">{{ 'Unit(s)'|trans({}, 'Admin.Catalog.Feature') }}</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>{{ 'Impact on price'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  <div class=\"row\">
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_price.vars.label }}</label>
        {{ form_errors(form.sp_price) }}
        {{ form_widget(form.sp_price) }}
      </fieldset>
    </div>
    <div class=\"col-md-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.leave_bprice) }}
        {{ form_widget(form.leave_bprice) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>{{ 'Apply a discount of'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.sp_reduction) }}
        {{ form_widget(form.sp_reduction) }}
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_type) }}
        {{ form_widget(form.sp_reduction_type) }}
      </fieldset>
    </div>
    <div class=\"col-xl-2 col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_tax) }}
        {{ form_widget(form.sp_reduction_tax) }}
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    {{ form_widget(form.cancel) }}
    {{ form_widget(form.save) }}
  </div>
  <div class=\"clearfix\"></div>
</div>
", "@Product/ProductPage/Forms/form_specific_price.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_specific_price.html.twig");
    }
}
