<?php

/* @Product/ProductPage/Panels/pricing.html.twig */
class __TwigTemplate_a30866a51e0b56b23f53d7e0a02bae9f75761ca919e2faaf3afe388a195fd865 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/pricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/pricing.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">
            <h2>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retail price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
              <span class=\"help-box\" data-toggle=\"popover\"
                data-content=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
            </h2>
          </div>

          <div class=\"col-md-12 form-group\">
            <div class=\"row\">

              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price", array()), 'errors');
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price", array()), 'widget');
        echo "
              </div>
              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price_ttc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price_ttc", array()), 'errors');
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "price_ttc", array()), 'widget');
        echo "
              </div>

              <div class=\"col-xl-4 col-lg-6 mx-auto\">
                <label class=\"form-control-label\">
                  ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unit_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unit_price", array()), 'errors');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unit_price", array()), 'widget');
        echo "
                  </div>
                  <div class=\"col-md-6\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unity", array()), 'errors');
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "unity", array()), 'widget');
        echo "
                  </div>
                </div>
              </div>
              <div class=\"col-md-2 col-md-offset-1 ";
        // line 69
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                <label class=\"form-control-label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "ecotax", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "ecotax", array()), 'errors');
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "ecotax", array()), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row form-group\">
              <div class=\"col-md-4\">
                <label class=\"form-control-label\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "id_tax_rules_group", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "id_tax_rules_group", array()), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "id_tax_rules_group", array()), 'widget');
        echo "
              </div>
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">&nbsp;</label>
                <a class=\"form-control-static external-link\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminTaxes"), "html", null, true);
        echo "\">
                  ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage tax rules", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </a>
              </div>
              <div class=\"col-md-12 pt-1\">
                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "on_sale", array()), 'widget');
        echo "
              </div>
              <div class=\"col-md-12\">
                <div class=\"row\">
                  <div class=\"col-xl-5 col-lg-12\">
                    <div class=\"alert alert-info mt-2\" role=\"alert\">
                      <p class=\"alert-text\">
                        ";
        // line 98
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.", array(), "Admin.Catalog.Feature"), array("[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<span id=\"final_retail_price_ti\">", "[/2]" => "</span>", "[3]" => "<span id=\"final_retail_price_te\">", "[/3]" => "</span>"));
        echo "
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cost price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </h2>
              </div>
              <div class=\"col-xl-2 col-lg-3 form-group\">
                <label class=\"form-control-label\">";
        // line 117
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "wholesale_price", array()), "vars", array()), "label", array());
        echo "</label>
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "wholesale_price", array()), 'errors');
        echo "
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "wholesale_price", array()), 'widget');
        echo "
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific prices", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can set specific prices for customers belonging to different groups, different countries, etc.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </h2>
              </div>
              <div class=\"col-md-12\">
                <div id=\"specific-price\" class=\"mb-2\">
                  <a class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                    <i class=\"material-icons\">add_circle</i>
                    ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a specific price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  </a>
                  <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data=\"";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_list", array("idProduct" => 1));
        echo "\" data-action-delete=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_specific_price", array("idSpecificPrice" => 1));
        echo "\">
                    <thead class=\"thead-default\">
                    <tr>
                      <th>";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fixed price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th>";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Period", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                      <th>";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
                <div class=\"collapse\" id=\"specific_price_form\" data-action=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_add");
        echo "\">
                  ";
        // line 159
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_specific_price.html.twig", array("form" => $this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specific_price", array()), "is_multishop_context" => (isset($context["is_multishop_context"]) ? $context["is_multishop_context"] : $this->getContext($context, "is_multishop_context"))));
        echo "
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>
                  ";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priority management", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </h2>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priorities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                  ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_0", array()), 'errors');
        echo "
                  ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_0", array()), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_1", array()), 'errors');
        echo "
                  ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_1", array()), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_2", array()), 'errors');
        echo "
                  ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_2", array()), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_3", array()), 'errors');
        echo "
                  ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriority_3", array()), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-12\">
                ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["pricingForm"]) ? $context["pricingForm"] : $this->getContext($context, "pricingForm")), "specificPricePriorityToAll", array()), 'widget');
        echo "
              </div>
            </div>
          </div>

          ";
        // line 208
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsPriceStepBottom", array("id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))));
        echo "

        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 208,  380 => 203,  373 => 199,  369 => 198,  360 => 192,  356 => 191,  347 => 185,  343 => 184,  334 => 178,  330 => 177,  326 => 176,  318 => 171,  313 => 169,  300 => 159,  296 => 158,  286 => 151,  282 => 150,  278 => 149,  274 => 148,  270 => 147,  266 => 146,  262 => 145,  258 => 144,  254 => 143,  250 => 142,  242 => 139,  237 => 137,  227 => 130,  222 => 128,  210 => 119,  206 => 118,  202 => 117,  195 => 113,  190 => 111,  174 => 98,  164 => 91,  157 => 87,  153 => 86,  146 => 82,  142 => 81,  138 => 80,  127 => 72,  123 => 71,  119 => 70,  113 => 69,  106 => 65,  102 => 64,  96 => 61,  92 => 60,  85 => 56,  80 => 54,  72 => 49,  68 => 48,  64 => 47,  58 => 44,  54 => 43,  50 => 42,  39 => 34,  34 => 32,  25 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">
            <h2>{{ 'Retail price'|trans({}, 'Admin.Catalog.Feature') }}
              <span class=\"help-box\" data-toggle=\"popover\"
                data-content=\"{{ \"This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
            </h2>
          </div>

          <div class=\"col-md-12 form-group\">
            <div class=\"row\">

              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">{{ pricingForm.price.vars.label }}</label>
                {{ form_errors(pricingForm.price) }}
                {{ form_widget(pricingForm.price) }}
              </div>
              <div class=\"col-xl-2 col-lg-3\">
                <label class=\"form-control-label\">{{ pricingForm.price_ttc.vars.label }}</label>
                {{ form_errors(pricingForm.price_ttc) }}
                {{ form_widget(pricingForm.price_ttc) }}
              </div>

              <div class=\"col-xl-4 col-lg-6 mx-auto\">
                <label class=\"form-control-label\">
                  {{ pricingForm.unit_price.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    {{ form_errors(pricingForm.unit_price) }}
                    {{ form_widget(pricingForm.unit_price) }}
                  </div>
                  <div class=\"col-md-6\">
                    {{ form_errors(pricingForm.unity) }}
                    {{ form_widget(pricingForm.unity) }}
                  </div>
                </div>
              </div>
              <div class=\"col-md-2 col-md-offset-1 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                <label class=\"form-control-label\">{{ pricingForm.ecotax.vars.label }}</label>
                {{ form_errors(pricingForm.ecotax) }}
                {{ form_widget(pricingForm.ecotax) }}
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row form-group\">
              <div class=\"col-md-4\">
                <label class=\"form-control-label\">{{ pricingForm.id_tax_rules_group.vars.label }}</label>
                {{ form_errors(pricingForm.id_tax_rules_group) }}
                {{ form_widget(pricingForm.id_tax_rules_group) }}
              </div>
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">&nbsp;</label>
                <a class=\"form-control-static external-link\" href=\"{{ getAdminLink(\"AdminTaxes\") }}\">
                  {{ 'Manage tax rules'|trans({}, 'Admin.Catalog.Feature') }}
                </a>
              </div>
              <div class=\"col-md-12 pt-1\">
                {{ form_widget(pricingForm.on_sale) }}
              </div>
              <div class=\"col-md-12\">
                <div class=\"row\">
                  <div class=\"col-xl-5 col-lg-12\">
                    <div class=\"alert alert-info mt-2\" role=\"alert\">
                      <p class=\"alert-text\">
                        {{ 'Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<strong>', '[/1]': '</strong>', '[2]': '<span id=\"final_retail_price_ti\">', '[/2]': '</span>', '[3]': '<span id=\"final_retail_price_te\">', '[/3]': '</span>', })|raw }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  {{ 'Cost price'|trans({}, 'Admin.Catalog.Feature') }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </h2>
              </div>
              <div class=\"col-xl-2 col-lg-3 form-group\">
                <label class=\"form-control-label\">{{ pricingForm.wholesale_price.vars.label|raw }}</label>
                {{ form_errors(pricingForm.wholesale_price) }}
                {{ form_widget(pricingForm.wholesale_price) }}
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row mb-3\">
              <div class=\"col-md-12\">
                <h2>
                  {{ 'Specific prices'|trans({}, 'Admin.Catalog.Feature') }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"You can set specific prices for customers belonging to different groups, different countries, etc.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </h2>
              </div>
              <div class=\"col-md-12\">
                <div id=\"specific-price\" class=\"mb-2\">
                  <a class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                    <i class=\"material-icons\">add_circle</i>
                    {{ 'Add a specific price'|trans({}, 'Admin.Catalog.Feature') }}
                  </a>
                  <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data=\"{{ path('admin_specific_price_list', { 'idProduct': 1 }) }}\" data-action-delete=\"{{ path('admin_delete_specific_price', { 'idSpecificPrice': 1 }) }}\">
                    <thead class=\"thead-default\">
                    <tr>
                      <th>{{ 'Rule'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'Fixed price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Impact'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th>{{ 'Period'|trans({}, 'Admin.Global') }}</th>
                      <th>{{ 'From'|trans({}, 'Admin.Catalog.Feature') }}</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
                <div class=\"collapse\" id=\"specific_price_form\" data-action=\"{{ path('admin_specific_price_add') }}\">
                  {{ include('@Product/ProductPage/Forms/form_specific_price.html.twig', {'form': pricingForm.specific_price, 'is_multishop_context': is_multishop_context}) }}
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-12\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>
                  {{ 'Priority management'|trans({}, 'Admin.Catalog.Feature') }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </h2>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>{{ 'Priorities'|trans({}, 'Admin.Catalog.Feature') }}</label>
                  {{ form_errors(pricingForm.specificPricePriority_0) }}
                  {{ form_widget(pricingForm.specificPricePriority_0) }}
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  {{ form_errors(pricingForm.specificPricePriority_1) }}
                  {{ form_widget(pricingForm.specificPricePriority_1) }}
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  {{ form_errors(pricingForm.specificPricePriority_2) }}
                  {{ form_widget(pricingForm.specificPricePriority_2) }}
                </fieldset>
              </div>
              <div class=\"col-md-3\">
                <fieldset class=\"form-group\">
                  <label>&nbsp;</label>
                  {{ form_errors(pricingForm.specificPricePriority_3) }}
                  {{ form_widget(pricingForm.specificPricePriority_3) }}
                </fieldset>
              </div>
              <div class=\"col-md-12\">
                {{ form_widget(pricingForm.specificPricePriorityToAll) }}
              </div>
            </div>
          </div>

          {{ renderhook('displayAdminProductsPriceStepBottom', { 'id_product': productId }) }}

        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/pricing.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/pricing.html.twig");
    }
}
