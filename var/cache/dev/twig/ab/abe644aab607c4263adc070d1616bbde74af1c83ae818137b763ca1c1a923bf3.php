<?php

/* @Product/ProductPage/Panels/options.html.twig */
class __TwigTemplate_7efd9b4b86fdf569a595700cc4f03840908966eebe75c7010d4b0af3ba8de6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_86104f99fa15311eafccea77aaacfb8f941c0b6abea2b23775fd33fcb1108839' => array($this, 'block___internal_86104f99fa15311eafccea77aaacfb8f941c0b6abea2b23775fd33fcb1108839'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/options.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/options.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            ";
        // line 33
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepTop", array("id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))));
        echo "

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visibility", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                <p class=\"subtitle\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Where do you want your product to appear?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-4 form-group\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "visibility", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "visibility", array()), 'widget');
        echo "
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-7 form-group\">
                  ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", array()), 'errors');
        echo "
                  <div class=\"row\">
                    <div class=\"col-md-4 js-available-for-order\">
                      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", array()), "available_for_order", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-3 js-show-price\">
                      ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", array()), "show_price", array()), 'widget');
        echo "
                    </div>
                    <div class=\"col-md-5\">
                      ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "display_options", array()), "online_only", array()), 'widget');
        echo "
                    </div>
                  </div>
              </div>
            </div>
            <div class=\"row form-group\">
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "tags", array()), 'errors');
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "tags", array()), 'widget');
        echo "
                <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                  <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                    ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", array(), "Admin.Actions");
        echo "
                  </button>
                  <p class=\"alert-text\">";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags are meant to help your customers find your products via the search bar.", array(), "Admin.Catalog.Help");
        echo "</p>
                  <div class=\"alert-more collapse\" id=\"tagsInfo\">
                    <p>
                      ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.", array(), "Admin.Catalog.Help");
        echo "<br>
                      ";
        // line 78
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.", array(), "Admin.Catalog.Help"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminSearchConf")) . "\" target=\"_blank\">"), "[/1]" => "</a>"));
        // line 83
        echo "
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Condition & References", array(), "Admin.Catalog.Feature");
        echo "</h2>
              </div>
            </div>

            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "condition", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "condition", array()), 'errors');
        echo "
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "condition", array()), 'widget');
        echo "
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">&nbsp;</label>
                ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "show_condition", array()), 'widget');
        echo "
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "isbn", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISBN is used internationally to identify books and their various editions.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "isbn", array()), 'errors');
        echo "
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "isbn", array()), 'widget');
        echo "
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "ean13", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "ean13", array()), 'errors');
        echo "
                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "ean13", array()), 'widget');
        echo "
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "upc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                </label>
                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "upc", array()), 'errors');
        echo "
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "upc", array()), 'widget');
        echo "
              </fieldset>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <div id=\"custom_fields\" class=\"mt-3\">
                  <h2>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                  <p class=\"subtitle\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customers can personalize the product by entering some text or by providing custom image files.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                  ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", array()), 'errors');
        echo "
                  <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                              ";
        // line 150
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_86104f99fa15311eafccea77aaacfb8f941c0b6abea2b23775fd33fcb1108839", $context, $blocks));
        // line 152
        echo "\">
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 154
            echo "                      <li>
                        ";
            // line 155
            echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_custom_fields.html.twig", array("form" => $context["field"]));
            echo "
                      </li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                  </ul>
                  <a href=\"#\" class=\"btn btn-outline-secondary add\">
                    <i class=\"material-icons\">add_circle</i>
                    ";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a customization field", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                  </a>
                </div>
              </div>
            </div>

            <div class=\"row mt-4\">
              <div class=\"col-md-8\">
                <h2>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attached files", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                <p class=\"subtitle\">";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachments", array()), 'widget');
        echo "
              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-md-8\">
                <a
                  class=\"btn btn-outline-secondary mb-3\"
                  href=\"#collapsedForm\"
                  data-toggle=\"collapse\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapsedForm\"
                >
                  <i class=\"material-icons\">add_circle</i>
                  ";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attach a new file", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </a>
                <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                  ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", array()), 'errors');
        echo "
                  <div id=\"form_step6_attachment_product\" data-action=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", array()), "vars", array()), "attr", array()), "data-action", array(), "array"), "html", null, true);
        echo "\">
                    <div class=\"form-group\">";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", array()), "file", array()), 'widget');
        echo "</div>
                    <div class=\"form-group\">";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", array()), "name", array()), 'widget');
        echo "</div>
                    <div class=\"form-group\">";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", array()), "description", array()), 'widget');
        echo "</div>
                    <div class=\"form-group\">
                      ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", array()), "add", array()), 'widget');
        echo "
                      ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "attachment_product", array()), "cancel", array()), 'widget');
        echo "
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-md-8\" id=\"supplier_collection\">
                ";
        // line 203
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_supplier_choice.html.twig", array("form" => (isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm"))));
        echo "
              </div>
            </div>
            <div class=\"row\">
              <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_supplier_refresh_product_supplier_combination_form", array("idProduct" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId")), "supplierIds" => 1)), "html", null, true);
        echo "\">
                ";
        // line 208
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_supplier_combination.html.twig", array("suppliers" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "suppliers", array()), "vars", array()), "value", array()), "form" => (isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm"))));
        echo "
              </div>
            </div>

            ";
        // line 212
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepBottom", array("id_product" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId"))));
        echo "

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 150
    public function block___internal_86104f99fa15311eafccea77aaacfb8f941c0b6abea2b23775fd33fcb1108839($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_86104f99fa15311eafccea77aaacfb8f941c0b6abea2b23775fd33fcb1108839"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_86104f99fa15311eafccea77aaacfb8f941c0b6abea2b23775fd33fcb1108839"));

        // line 151
        echo "                              ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_custom_fields.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["optionsForm"]) ? $context["optionsForm"] : $this->getContext($context, "optionsForm")), "custom_fields", array()), "vars", array()), "prototype", array())));
        echo "
                              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 151,  422 => 150,  403 => 212,  396 => 208,  392 => 207,  385 => 203,  373 => 194,  369 => 193,  364 => 191,  360 => 190,  356 => 189,  352 => 188,  348 => 187,  342 => 184,  326 => 171,  322 => 170,  318 => 169,  307 => 161,  302 => 158,  285 => 155,  282 => 154,  265 => 153,  262 => 152,  260 => 150,  255 => 148,  251 => 147,  247 => 146,  237 => 139,  233 => 138,  228 => 136,  223 => 134,  214 => 128,  210 => 127,  205 => 125,  200 => 123,  193 => 119,  189 => 118,  184 => 116,  179 => 114,  170 => 108,  163 => 104,  159 => 103,  154 => 101,  149 => 99,  139 => 92,  128 => 83,  126 => 78,  122 => 77,  116 => 74,  111 => 72,  105 => 69,  101 => 68,  97 => 67,  87 => 60,  81 => 57,  75 => 54,  69 => 51,  60 => 45,  56 => 44,  47 => 38,  43 => 37,  36 => 33,  26 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">

          <div class=\"col-md-12\">

            {{ renderhook('displayAdminProductsOptionsStepTop', { 'id_product': productId }) }}

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>{{ 'Visibility'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                <p class=\"subtitle\">{{ 'Where do you want your product to appear?'|trans({}, 'Admin.Catalog.Feature') }}</p>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-4 form-group\">
                {{ form_errors(optionsForm.visibility) }}
                {{ form_widget(optionsForm.visibility) }}
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-7 form-group\">
                  {{ form_errors(optionsForm.display_options) }}
                  <div class=\"row\">
                    <div class=\"col-md-4 js-available-for-order\">
                      {{ form_widget(optionsForm.display_options.available_for_order) }}
                    </div>
                    <div class=\"col-md-3 js-show-price\">
                      {{ form_widget(optionsForm.display_options.show_price) }}
                    </div>
                    <div class=\"col-md-5\">
                      {{ form_widget(optionsForm.display_options.online_only) }}
                    </div>
                  </div>
              </div>
            </div>
            <div class=\"row form-group\">
              <div class=\"col-md-8\">
                <label class=\"form-control-label\">{{ 'Tags'|trans({}, 'Admin.Catalog.Feature') }}</label>
                {{ form_errors(optionsForm.tags) }}
                {{ form_widget(optionsForm.tags) }}
                <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                  <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                    {{ 'Read more'|trans({}, 'Admin.Actions')|raw }}
                  </button>
                  <p class=\"alert-text\">{{ 'Tags are meant to help your customers find your products via the search bar.'|trans({}, 'Admin.Catalog.Help')|raw }}</p>
                  <div class=\"alert-more collapse\" id=\"tagsInfo\">
                    <p>
                      {{ 'Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
                      {{ 'You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.'|trans({}, 'Admin.Catalog.Help')|
                      replace({
                        '[1]' : '<a href=\"'~ getAdminLink(\"AdminSearchConf\") ~'\" target=\"_blank\">',
                        '[/1]' : '</a>'
                      })|raw
                      }}
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <h2>{{ 'Condition & References'|trans({}, 'Admin.Catalog.Feature')|raw }}</h2>
              </div>
            </div>

            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.condition.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.condition) }}
                {{ form_widget(optionsForm.condition) }}
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">&nbsp;</label>
                {{ form_widget(optionsForm.show_condition) }}
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.isbn.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"ISBN is used internationally to identify books and their various editions.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.isbn) }}
                {{ form_widget(optionsForm.isbn) }}
              </fieldset>
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.ean13.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.ean13) }}
                {{ form_widget(optionsForm.ean13) }}
              </fieldset>
            </div>
            <div class=\"row\">
              <fieldset class=\"col-md-4 form-group\">
                <label class=\"form-control-label\">
                  {{ optionsForm.upc.vars.label }}
                  <span class=\"help-box\" data-toggle=\"popover\"
                    data-content=\"{{ \"This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                </label>
                {{ form_errors(optionsForm.upc) }}
                {{ form_widget(optionsForm.upc) }}
              </fieldset>
            </div>

            <div class=\"row\">
              <div class=\"col-md-12\">
                <div id=\"custom_fields\" class=\"mt-3\">
                  <h2>{{ optionsForm.custom_fields.vars.label }}</h2>
                  <p class=\"subtitle\">{{ 'Customers can personalize the product by entering some text or by providing custom image files.'|trans({}, 'Admin.Catalog.Feature') }}</p>
                  {{ form_errors(optionsForm.custom_fields) }}
                  <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                              {% filter escape %}
                              {{ include('@Product/ProductPage/Forms/form_custom_fields.html.twig', { 'form': optionsForm.custom_fields.vars.prototype }) }}
                              {% endfilter %}\">
                    {% for field in optionsForm.custom_fields %}
                      <li>
                        {{ include('@Product/ProductPage/Forms/form_custom_fields.html.twig', { 'form': field }) }}
                      </li>
                    {% endfor %}
                  </ul>
                  <a href=\"#\" class=\"btn btn-outline-secondary add\">
                    <i class=\"material-icons\">add_circle</i>
                    {{ 'Add a customization field'|trans({}, 'Admin.Catalog.Feature') }}
                  </a>
                </div>
              </div>
            </div>

            <div class=\"row mt-4\">
              <div class=\"col-md-8\">
                <h2>{{ 'Attached files'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                <p class=\"subtitle\">{{ 'Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).'|trans({}, 'Admin.Catalog.Feature') }}</p>
                {{ form_widget(optionsForm.attachments) }}
              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-md-8\">
                <a
                  class=\"btn btn-outline-secondary mb-3\"
                  href=\"#collapsedForm\"
                  data-toggle=\"collapse\"
                  aria-expanded=\"false\"
                  aria-controls=\"collapsedForm\"
                >
                  <i class=\"material-icons\">add_circle</i>
                  {{ 'Attach a new file'|trans({}, 'Admin.Catalog.Feature') }}
                </a>
                <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                  {{ form_errors(optionsForm.attachment_product) }}
                  <div id=\"form_step6_attachment_product\" data-action=\"{{ optionsForm.attachment_product.vars.attr['data-action'] }}\">
                    <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.file) }}</div>
                    <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.name) }}</div>
                    <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.description) }}</div>
                    <div class=\"form-group\">
                      {{ form_widget(optionsForm.attachment_product.add) }}
                      {{ form_widget(optionsForm.attachment_product.cancel) }}
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-md-8\" id=\"supplier_collection\">
                {{ include('@Product/ProductPage/Forms/form_supplier_choice.html.twig', { 'form': optionsForm }) }}
              </div>
            </div>
            <div class=\"row\">
              <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"{{ path('admin_supplier_refresh_product_supplier_combination_form', { 'idProduct': productId, 'supplierIds': 1}) }}\">
                {{ include('@Product/ProductPage/Forms/form_supplier_combination.html.twig', { 'suppliers': optionsForm.suppliers.vars.value, 'form': optionsForm }) }}
              </div>
            </div>

            {{ renderhook('displayAdminProductsOptionsStepBottom', { 'id_product': productId }) }}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/options.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/options.html.twig");
    }
}
