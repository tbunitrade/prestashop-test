<?php

/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_fdf16df6817917eeb2ec57f918d45296edd596deda13db50189a09cfcf074eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'product_header' => array($this, 'block_product_header'),
            'product_tabs_container' => array($this, 'block_product_tabs_container'),
            'product_panel_essentials' => array($this, 'block_product_panel_essentials'),
            'product_panel_combinations' => array($this, 'block_product_panel_combinations'),
            'product_panel_shipping' => array($this, 'block_product_panel_shipping'),
            'product_panel_pricing' => array($this, 'block_product_panel_pricing'),
            'product_panel_seo' => array($this, 'block_product_panel_seo'),
            'product_panel_options' => array($this, 'block_product_panel_options'),
            'product_panel_modules' => array($this, 'block_product_panel_modules'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        // line 325
        $context["js_translatable"] = twig_array_merge(array("Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", array(), "Admin.Catalog.Notification")),         // line 327
(isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")));
        // line 329
        $context["js_translatable"] = twig_array_merge(array("Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", array(), "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", array(), "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", array(), "Admin.Notifications.Error"), array("[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}")), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", array(), "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", array(), "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", array(), "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", array(), "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", array(), "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", array(), "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", array(), "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", array(), "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", array(), "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 346
(isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")), "Are you sure to disable variations ? they will all be deleted", array(), "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 347
(isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")), "Are you sure to disable variations ? they will all be deleted", array(), "array"))),         // line 348
(isset($context["js_translatable"]) ? $context["js_translatable"] : $this->getContext($context, "js_translatable")));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    ";
        // line 31
        if ( !(isset($context["editable"]) ? $context["editable"] : $this->getContext($context, "editable"))) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        $this->displayBlock('product_header', $context, $blocks);
        // line 44
        echo "
    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      ";
        // line 53
        echo "      ";
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 56
        echo "      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 59
        echo "        ";
        $this->displayBlock('product_panel_essentials', $context, $blocks);
        // line 79
        echo "
        ";
        // line 81
        echo "        ";
        $this->displayBlock('product_panel_combinations', $context, $blocks);
        // line 101
        echo "
        ";
        // line 103
        echo "        ";
        $this->displayBlock('product_panel_shipping', $context, $blocks);
        // line 122
        echo "
        ";
        // line 124
        echo "        ";
        $this->displayBlock('product_panel_pricing', $context, $blocks);
        // line 131
        echo "
        ";
        // line 133
        echo "        ";
        $this->displayBlock('product_panel_seo', $context, $blocks);
        // line 139
        echo "
        ";
        // line 141
        echo "        ";
        $this->displayBlock('product_panel_options', $context, $blocks);
        // line 147
        echo "
        ";
        // line 149
        echo "        ";
        $this->displayBlock('product_panel_modules', $context, $blocks);
        // line 245
        echo "      </div>

      ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_product", array()), 'widget');
        echo "
      ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

    </div>
    ";
        // line 252
        echo "    ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/footer.html.twig", array("preview_link" =>         // line 253
(isset($context["preview_link"]) ? $context["preview_link"] : $this->getContext($context, "preview_link")), "preview_link_deactivate" =>         // line 254
(isset($context["preview_link_deactivate"]) ? $context["preview_link_deactivate"] : $this->getContext($context, "preview_link_deactivate")), "is_shop_context" =>         // line 255
(isset($context["is_shop_context"]) ? $context["is_shop_context"] : $this->getContext($context, "is_shop_context")), "editable" =>         // line 256
(isset($context["editable"]) ? $context["editable"] : $this->getContext($context, "editable")), "is_active" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 257
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "active", array()), "productId" =>         // line 258
(isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product"))));
        // line 259
        echo "
    ";
        // line 260
        if ( !(isset($context["editable"]) ? $context["editable"] : $this->getContext($context, "editable"))) {
            echo " </fieldset> ";
        }
        // line 261
        echo "  </form>


  ";
        // line 264
        $this->loadTemplate("@PrestaShop/Admin/Product/ProductPage/product.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 264, "2096317304")->display(array_merge($context, array("id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", array(), "Admin.Notifications.Warning"), "closable" => false, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", array(), "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"), 1 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", array(), "Admin.Global"), "class" => "btn btn-primary btn-lg continue")))));
        // line 285
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_product_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_header"));

        // line 34
        echo "      ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/header.html.twig", array("formName" => $this->getAttribute($this->getAttribute(        // line 35
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "name", array()), "formType" => $this->getAttribute($this->getAttribute(        // line 36
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "type_product", array()), "is_multishop_context" =>         // line 37
(isset($context["is_multishop_context"]) ? $context["is_multishop_context"] : $this->getContext($context, "is_multishop_context")), "languages" =>         // line 38
(isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")), "help_link" =>         // line 39
(isset($context["help_link"]) ? $context["help_link"] : $this->getContext($context, "help_link")), "stats_link" =>         // line 40
(isset($context["stats_link"]) ? $context["stats_link"] : $this->getContext($context, "stats_link"))));
        // line 42
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_product_tabs_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_tabs_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_tabs_container"));

        // line 54
        echo "        ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/tabs.html.twig");
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_product_panel_essentials($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_essentials"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_essentials"));

        // line 60
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/essentials.html.twig", array("formPackItems" => $this->getAttribute($this->getAttribute(        // line 61
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "inputPackItems", array()), "productId" =>         // line 62
(isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product")), "images" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "images", array()), "formShortDescription" => $this->getAttribute($this->getAttribute(        // line 64
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "description_short", array()), "formDescription" => $this->getAttribute($this->getAttribute(        // line 65
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "description", array()), "formFeatures" => $this->getAttribute($this->getAttribute(        // line 66
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "features", array()), "formManufacturer" => $this->getAttribute($this->getAttribute(        // line 67
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "id_manufacturer", array()), "formRelatedProducts" => $this->getAttribute($this->getAttribute(        // line 68
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "related_products", array()), "is_combination_active" =>         // line 69
(isset($context["is_combination_active"]) ? $context["is_combination_active"] : $this->getContext($context, "is_combination_active")), "has_combinations" =>         // line 70
(isset($context["has_combinations"]) ? $context["has_combinations"] : $this->getContext($context, "has_combinations")), "formReference" => $this->getAttribute($this->getAttribute(        // line 71
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step6", array()), "reference", array()), "formQuantityShortcut" => $this->getAttribute($this->getAttribute(        // line 72
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "qty_0_shortcut", array()), "formPriceShortcut" => $this->getAttribute($this->getAttribute(        // line 73
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "price_shortcut", array()), "formPriceShortcutTTC" => $this->getAttribute($this->getAttribute(        // line 74
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "price_ttc_shortcut", array()), "formCategories" => $this->getAttribute(        // line 75
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array())));
        // line 77
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_product_panel_combinations($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_combinations"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_combinations"));

        // line 82
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/combinations.html.twig", array("formDependsOnStocks" => $this->getAttribute($this->getAttribute(        // line 83
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "depends_on_stock", array()), "productId" =>         // line 84
(isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product")), "formStockQuantity" => $this->getAttribute($this->getAttribute(        // line 85
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "qty_0", array()), "formStockMinimalQuantity" => $this->getAttribute($this->getAttribute(        // line 86
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "minimal_quantity", array()), "formLowStockThreshold" => $this->getAttribute($this->getAttribute(        // line 87
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "low_stock_threshold", array()), "formLowStockAlert" => $this->getAttribute($this->getAttribute(        // line 88
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "low_stock_alert", array()), "formVirtualProduct" => $this->getAttribute($this->getAttribute(        // line 89
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "asm_globally_activated" =>         // line 90
(isset($context["asm_globally_activated"]) ? $context["asm_globally_activated"] : $this->getContext($context, "asm_globally_activated")), "formType" => $this->getAttribute($this->getAttribute(        // line 91
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "type_product", array()), "formAdvancedStockManagement" => $this->getAttribute($this->getAttribute(        // line 92
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), "formPackStockType" => $this->getAttribute($this->getAttribute(        // line 93
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "pack_stock_type", array()), "formStep3" => $this->getAttribute(        // line 94
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "formCombinations" =>         // line 95
(isset($context["formCombinations"]) ? $context["formCombinations"] : $this->getContext($context, "formCombinations")), "has_combinations" =>         // line 96
(isset($context["has_combinations"]) ? $context["has_combinations"] : $this->getContext($context, "has_combinations")), "max_upload_size" =>         // line 97
(isset($context["max_upload_size"]) ? $context["max_upload_size"] : $this->getContext($context, "max_upload_size"))));
        // line 99
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_product_panel_shipping($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_shipping"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_shipping"));

        // line 104
        echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    ";
        // line 109
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_shipping.html.twig", array("form" => $this->getAttribute(        // line 110
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step4", array()), "asm_globally_activated" =>         // line 111
(isset($context["asm_globally_activated"]) ? $context["asm_globally_activated"] : $this->getContext($context, "asm_globally_activated")), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 112
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 113
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array()), "warehouses" =>         // line 114
(isset($context["warehouses"]) ? $context["warehouses"] : $this->getContext($context, "warehouses"))));
        // line 115
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_product_panel_pricing($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_pricing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_pricing"));

        // line 125
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/pricing.html.twig", array("pricingForm" => $this->getAttribute(        // line 126
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step2", array()), "is_multishop_context" =>         // line 127
(isset($context["is_multishop_context"]) ? $context["is_multishop_context"] : $this->getContext($context, "is_multishop_context")), "productId" =>         // line 128
(isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product"))));
        // line 129
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_product_panel_seo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_seo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_seo"));

        // line 134
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/seo.html.twig", array("seoForm" => $this->getAttribute(        // line 135
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step5", array()), "productId" =>         // line 136
(isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product"))));
        // line 137
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_product_panel_options($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_options"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_options"));

        // line 142
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/options.html.twig", array("optionsForm" => $this->getAttribute(        // line 143
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "step6", array()), "productId" =>         // line 144
(isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product"))));
        // line 145
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_product_panel_modules($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_modules"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_panel_modules"));

        // line 150
        echo "          ";
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 151
            echo "            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"container-fluid\">
                    <div class=\"row\">

                      ";
            // line 158
            echo "                      <div class=\"col-md-12\">
                        ";
            // line 159
            $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", array("id_product" => (isset($context["id_product"]) ? $context["id_product"] : $this->getContext($context, "id_product"))));
            // line 160
            echo "
                        <div class=\"row module-selection\" style=\"display: none;\">
                          <div class=\"col-md-12 col-lg-7\">
                            ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) ? $context["hooks"] : $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 164
                echo "                              <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">
                                <div>
                                  <img class=\"top-logo\" src=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                  <h2 class=\"text-ellipsis module-name-grid\">
                                    ";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                  </h2>
                                  <div class=\"text-ellipsis small-text module-version\">
                                    ";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"small no-padding\">
                                  ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "                          </div>
                          <div class=\"col-md-12 col-lg-5\">
                            <h2>";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            <select class=\"modules-list-select\" data-toggle=\"select2\">
                              ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) ? $context["hooks"] : $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 184
                echo "                                <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "</option>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                            </select>
                          </div>
                        </div>

                        <div class=\"module-render-container all-modules\">
                          <p>
                            <h2>";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            ";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                            ";
            // line 194
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"));
            echo "
                          </p>
                          <div class=\"row\">
                            ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) ? $context["hooks"] : $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 198
                echo "                              <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"module-item-wrapper-grid\">
                                  <div class=\"module-item-heading-grid\">
                                    <img class=\"module-logo-thumb-grid\" src=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                    <h3 class=\"text-ellipsis module-name-grid\">
                                      ";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                    </h3>
                                    <div class=\"text-ellipsis small-text module-version-author-grid\">
                                      ";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                    </div>
                                  </div>
                                  <div class=\"module-quick-description-grid small no-padding\">
                                    ";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                                  </div>
                                  <div class=\"module-container\">
                                    <div class=\"module-quick-action-grid clearfix\">
                                      <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\">
                                        ";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Actions"), "html", null, true);
                echo "
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                          </div>
                        </div>

                        ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) ? $context["hooks"] : $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 226
                echo "                          <div
                            id=\"module_";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\"
                            class=\"module-render-container module-";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\"
                            style=\"display: none;\"
                          >
                            <div>
                              ";
                // line 232
                echo $this->getAttribute($context["module"], "content", array());
                echo "
                            </div>
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            echo "                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        // line 244
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 288
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 289
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["editable"]) ? $context["editable"] : $this->getContext($context, "editable")), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 306,  716 => 302,  712 => 301,  708 => 300,  704 => 299,  700 => 298,  696 => 297,  692 => 296,  688 => 295,  684 => 294,  680 => 293,  676 => 292,  671 => 290,  666 => 289,  657 => 288,  647 => 244,  637 => 236,  627 => 232,  620 => 228,  616 => 227,  613 => 226,  609 => 225,  604 => 222,  591 => 215,  587 => 214,  580 => 210,  571 => 206,  565 => 203,  558 => 201,  553 => 198,  549 => 197,  543 => 194,  539 => 193,  535 => 192,  527 => 186,  516 => 184,  512 => 183,  507 => 181,  503 => 179,  493 => 175,  484 => 171,  478 => 168,  471 => 166,  465 => 164,  461 => 163,  456 => 160,  454 => 159,  451 => 158,  443 => 151,  440 => 150,  431 => 149,  420 => 145,  418 => 144,  417 => 143,  415 => 142,  406 => 141,  395 => 137,  393 => 136,  392 => 135,  390 => 134,  381 => 133,  370 => 129,  368 => 128,  367 => 127,  366 => 126,  364 => 125,  355 => 124,  339 => 115,  337 => 114,  336 => 113,  335 => 112,  334 => 111,  333 => 110,  332 => 109,  325 => 104,  316 => 103,  305 => 99,  303 => 97,  302 => 96,  301 => 95,  300 => 94,  299 => 93,  298 => 92,  297 => 91,  296 => 90,  295 => 89,  294 => 88,  293 => 87,  292 => 86,  291 => 85,  290 => 84,  289 => 83,  287 => 82,  278 => 81,  267 => 77,  265 => 75,  264 => 74,  263 => 73,  262 => 72,  261 => 71,  260 => 70,  259 => 69,  258 => 68,  257 => 67,  256 => 66,  255 => 65,  254 => 64,  253 => 63,  252 => 62,  251 => 61,  249 => 60,  240 => 59,  227 => 54,  218 => 53,  207 => 42,  205 => 40,  204 => 39,  203 => 38,  202 => 37,  201 => 36,  200 => 35,  198 => 34,  189 => 33,  178 => 285,  176 => 264,  171 => 261,  167 => 260,  164 => 259,  162 => 258,  161 => 257,  160 => 256,  159 => 255,  158 => 254,  157 => 253,  155 => 252,  149 => 248,  145 => 247,  141 => 245,  138 => 149,  135 => 147,  132 => 141,  129 => 139,  126 => 133,  123 => 131,  120 => 124,  117 => 122,  114 => 103,  111 => 101,  108 => 81,  105 => 79,  102 => 59,  98 => 56,  95 => 53,  87 => 47,  82 => 44,  79 => 33,  77 => 32,  73 => 31,  68 => 28,  59 => 27,  49 => 25,  47 => 348,  46 => 347,  45 => 346,  44 => 329,  42 => 327,  41 => 325,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {#**
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}

  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    {% block product_header %}
      {{ include('@Product/ProductPage/Blocks/header.html.twig', {
        'formName': form.step1.name,
        'formType': form.step1.type_product,
        'is_multishop_context': is_multishop_context,
        'languages': languages,
        'help_link': help_link,
        'stats_link': stats_link
        })
      }}
    {% endblock %}

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      {# FORM TABS CONTAINER #}
      {% block product_tabs_container %}
        {{ include('@Product/ProductPage/Blocks/tabs.html.twig') }}
      {% endblock %}
      <div id=\"form_content\" class=\"tab-content\">

        {# PANEL ESSENTIALS #}
        {% block product_panel_essentials %}
          {{ include('@Product/ProductPage/Panels/essentials.html.twig', {
              'formPackItems': form.step1.inputPackItems,
              'productId': id_product,
              'images': form.step1.vars.value.images,
              'formShortDescription': form.step1.description_short,
              'formDescription': form.step1.description,
              'formFeatures': form.step1.features,
              'formManufacturer': form.step1.id_manufacturer,
              'formRelatedProducts': form.step1.related_products,
              'is_combination_active': is_combination_active,
              'has_combinations': has_combinations,
              'formReference': form.step6.reference,
              'formQuantityShortcut': form.step1.qty_0_shortcut,
              'formPriceShortcut': form.step1.price_shortcut,
              'formPriceShortcutTTC': form.step1.price_ttc_shortcut,
              'formCategories': form.step1,
            })
          }}
        {% endblock %}

        {# PANEL COMBINATIONS #}
        {% block product_panel_combinations %}
          {{ include('@Product/ProductPage/Panels/combinations.html.twig', {
              'formDependsOnStocks': form.step3.depends_on_stock,
              'productId': id_product,
              'formStockQuantity': form.step3.qty_0,
              'formStockMinimalQuantity': form.step3.minimal_quantity,
              'formLowStockThreshold': form.step3.low_stock_threshold,
              'formLowStockAlert': form.step3.low_stock_alert,
              'formVirtualProduct': form.step3.virtual_product,
              'asm_globally_activated': asm_globally_activated,
              'formType': form.step1.type_product,
              'formAdvancedStockManagement': form.step3.advanced_stock_management,
              'formPackStockType': form.step3.pack_stock_type,
              'formStep3': form.step3,
              'formCombinations': formCombinations,
              'has_combinations': has_combinations,
              'max_upload_size': max_upload_size
            })
          }}
        {% endblock %}

        {# PANEL SHIPPING #}
        {% block product_panel_shipping %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    {{ include('@Product/ProductPage/Forms/form_shipping.html.twig', {
                      'form' : form.step4,
                      'asm_globally_activated': asm_globally_activated,
                      'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                      'isChecked': form.step3.advanced_stock_management.vars.checked,
                      'warehouses': warehouses
                    }) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        {% endblock %}

        {# PANEL PRICING #}
        {% block product_panel_pricing %}
          {{ include('@Product/ProductPage/Panels/pricing.html.twig', {
            'pricingForm': form.step2,
            'is_multishop_context': is_multishop_context,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL SEO #}
        {% block product_panel_seo %}
          {{ include('@Product/ProductPage/Panels/seo.html.twig', {
            'seoForm': form.step5,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL OPTIONS #}
        {% block product_panel_options %}
          {{ include('@Product/ProductPage/Panels/options.html.twig', {
            'optionsForm': form.step6,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL HOOKED MODULES #}
        {% block product_panel_modules %}
          {% if hookcount('displayAdminProductsExtra') > 0 %}
            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"container-fluid\">
                    <div class=\"row\">

                      {# LEFT #}
                      <div class=\"col-md-12\">
                        {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}

                        <div class=\"row module-selection\" style=\"display: none;\">
                          <div class=\"col-md-12 col-lg-7\">
                            {% for module in hooks %}
                              <div class=\"module-render-container module-{{ module.attributes.name }}\">
                                <div>
                                  <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                  <h2 class=\"text-ellipsis module-name-grid\">
                                    {{ module.attributes.displayName }}
                                  </h2>
                                  <div class=\"text-ellipsis small-text module-version\">
                                    {{ module.attributes.version }} by {{ module.attributes.author }}
                                  </div>
                                </div>
                                <div class=\"small no-padding\">
                                  {{ module.attributes.description }}
                                </div>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"col-md-12 col-lg-5\">
                            <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                            <select class=\"modules-list-select\" data-toggle=\"select2\">
                              {% for module in hooks %}
                                <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                              {% endfor %}
                            </select>
                          </div>
                        </div>

                        <div class=\"module-render-container all-modules\">
                          <p>
                            <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                            {{ 'These modules are relative to the product page of your shop.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                            {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}
                          </p>
                          <div class=\"row\">
                            {% for module in hooks %}
                              <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"module-item-wrapper-grid\">
                                  <div class=\"module-item-heading-grid\">
                                    <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                    <h3 class=\"text-ellipsis module-name-grid\">
                                      {{ module.attributes.displayName }}
                                    </h3>
                                    <div class=\"text-ellipsis small-text module-version-author-grid\">
                                      {{ module.attributes.version }} by {{ module.attributes.author }}
                                    </div>
                                  </div>
                                  <div class=\"module-quick-description-grid small no-padding\">
                                    {{ module.attributes.description }}
                                  </div>
                                  <div class=\"module-container\">
                                    <div class=\"module-quick-action-grid clearfix\">
                                      <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                        {{ 'Configure'|trans({}, 'Admin.Actions') }}
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            {% endfor %}
                          </div>
                        </div>

                        {% for module in hooks %}
                          <div
                            id=\"module_{{ module.id }}\"
                            class=\"module-render-container module-{{ module.attributes.name }}\"
                            style=\"display: none;\"
                          >
                            <div>
                              {{ module.content|raw }}
                            </div>
                          </div>
                        {% endfor %}
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          {% endif %}
        {% endblock %}
      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    {{ include('@Product/ProductPage/Blocks/footer.html.twig', {
      'preview_link': preview_link,
      'preview_link_deactivate': preview_link_deactivate,
      'is_shop_context': is_shop_context,
      'editable': editable,
      'is_active': form.step1.vars.value.active,
      'productId': id_product
    }) }}
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-outline-secondary btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>

  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF or PNG format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure to delete this?\": \"Are you sure to delete this?\"|trans({}, 'Admin.Notifications.Warning'),
\"This will delete the specific price. Do you wish to proceed?\": \"This will delete the specific price. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
}|merge(js_translatable) %}
", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}


/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_fdf16df6817917eeb2ec57f918d45296edd596deda13db50189a09cfcf074eef_2096317304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 264
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 264);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 281
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 282
        echo "      <div class=\"modal-body\"></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 282,  1165 => 281,  1136 => 264,  723 => 306,  716 => 302,  712 => 301,  708 => 300,  704 => 299,  700 => 298,  696 => 297,  692 => 296,  688 => 295,  684 => 294,  680 => 293,  676 => 292,  671 => 290,  666 => 289,  657 => 288,  647 => 244,  637 => 236,  627 => 232,  620 => 228,  616 => 227,  613 => 226,  609 => 225,  604 => 222,  591 => 215,  587 => 214,  580 => 210,  571 => 206,  565 => 203,  558 => 201,  553 => 198,  549 => 197,  543 => 194,  539 => 193,  535 => 192,  527 => 186,  516 => 184,  512 => 183,  507 => 181,  503 => 179,  493 => 175,  484 => 171,  478 => 168,  471 => 166,  465 => 164,  461 => 163,  456 => 160,  454 => 159,  451 => 158,  443 => 151,  440 => 150,  431 => 149,  420 => 145,  418 => 144,  417 => 143,  415 => 142,  406 => 141,  395 => 137,  393 => 136,  392 => 135,  390 => 134,  381 => 133,  370 => 129,  368 => 128,  367 => 127,  366 => 126,  364 => 125,  355 => 124,  339 => 115,  337 => 114,  336 => 113,  335 => 112,  334 => 111,  333 => 110,  332 => 109,  325 => 104,  316 => 103,  305 => 99,  303 => 97,  302 => 96,  301 => 95,  300 => 94,  299 => 93,  298 => 92,  297 => 91,  296 => 90,  295 => 89,  294 => 88,  293 => 87,  292 => 86,  291 => 85,  290 => 84,  289 => 83,  287 => 82,  278 => 81,  267 => 77,  265 => 75,  264 => 74,  263 => 73,  262 => 72,  261 => 71,  260 => 70,  259 => 69,  258 => 68,  257 => 67,  256 => 66,  255 => 65,  254 => 64,  253 => 63,  252 => 62,  251 => 61,  249 => 60,  240 => 59,  227 => 54,  218 => 53,  207 => 42,  205 => 40,  204 => 39,  203 => 38,  202 => 37,  201 => 36,  200 => 35,  198 => 34,  189 => 33,  178 => 285,  176 => 264,  171 => 261,  167 => 260,  164 => 259,  162 => 258,  161 => 257,  160 => 256,  159 => 255,  158 => 254,  157 => 253,  155 => 252,  149 => 248,  145 => 247,  141 => 245,  138 => 149,  135 => 147,  132 => 141,  129 => 139,  126 => 133,  123 => 131,  120 => 124,  117 => 122,  114 => 103,  111 => 101,  108 => 81,  105 => 79,  102 => 59,  98 => 56,  95 => 53,  87 => 47,  82 => 44,  79 => 33,  77 => 32,  73 => 31,  68 => 28,  59 => 27,  49 => 25,  47 => 348,  46 => 347,  45 => 346,  44 => 329,  42 => 327,  41 => 325,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {#**
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}

  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    {% block product_header %}
      {{ include('@Product/ProductPage/Blocks/header.html.twig', {
        'formName': form.step1.name,
        'formType': form.step1.type_product,
        'is_multishop_context': is_multishop_context,
        'languages': languages,
        'help_link': help_link,
        'stats_link': stats_link
        })
      }}
    {% endblock %}

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      {# FORM TABS CONTAINER #}
      {% block product_tabs_container %}
        {{ include('@Product/ProductPage/Blocks/tabs.html.twig') }}
      {% endblock %}
      <div id=\"form_content\" class=\"tab-content\">

        {# PANEL ESSENTIALS #}
        {% block product_panel_essentials %}
          {{ include('@Product/ProductPage/Panels/essentials.html.twig', {
              'formPackItems': form.step1.inputPackItems,
              'productId': id_product,
              'images': form.step1.vars.value.images,
              'formShortDescription': form.step1.description_short,
              'formDescription': form.step1.description,
              'formFeatures': form.step1.features,
              'formManufacturer': form.step1.id_manufacturer,
              'formRelatedProducts': form.step1.related_products,
              'is_combination_active': is_combination_active,
              'has_combinations': has_combinations,
              'formReference': form.step6.reference,
              'formQuantityShortcut': form.step1.qty_0_shortcut,
              'formPriceShortcut': form.step1.price_shortcut,
              'formPriceShortcutTTC': form.step1.price_ttc_shortcut,
              'formCategories': form.step1,
            })
          }}
        {% endblock %}

        {# PANEL COMBINATIONS #}
        {% block product_panel_combinations %}
          {{ include('@Product/ProductPage/Panels/combinations.html.twig', {
              'formDependsOnStocks': form.step3.depends_on_stock,
              'productId': id_product,
              'formStockQuantity': form.step3.qty_0,
              'formStockMinimalQuantity': form.step3.minimal_quantity,
              'formLowStockThreshold': form.step3.low_stock_threshold,
              'formLowStockAlert': form.step3.low_stock_alert,
              'formVirtualProduct': form.step3.virtual_product,
              'asm_globally_activated': asm_globally_activated,
              'formType': form.step1.type_product,
              'formAdvancedStockManagement': form.step3.advanced_stock_management,
              'formPackStockType': form.step3.pack_stock_type,
              'formStep3': form.step3,
              'formCombinations': formCombinations,
              'has_combinations': has_combinations,
              'max_upload_size': max_upload_size
            })
          }}
        {% endblock %}

        {# PANEL SHIPPING #}
        {% block product_panel_shipping %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    {{ include('@Product/ProductPage/Forms/form_shipping.html.twig', {
                      'form' : form.step4,
                      'asm_globally_activated': asm_globally_activated,
                      'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                      'isChecked': form.step3.advanced_stock_management.vars.checked,
                      'warehouses': warehouses
                    }) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        {% endblock %}

        {# PANEL PRICING #}
        {% block product_panel_pricing %}
          {{ include('@Product/ProductPage/Panels/pricing.html.twig', {
            'pricingForm': form.step2,
            'is_multishop_context': is_multishop_context,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL SEO #}
        {% block product_panel_seo %}
          {{ include('@Product/ProductPage/Panels/seo.html.twig', {
            'seoForm': form.step5,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL OPTIONS #}
        {% block product_panel_options %}
          {{ include('@Product/ProductPage/Panels/options.html.twig', {
            'optionsForm': form.step6,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL HOOKED MODULES #}
        {% block product_panel_modules %}
          {% if hookcount('displayAdminProductsExtra') > 0 %}
            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"container-fluid\">
                    <div class=\"row\">

                      {# LEFT #}
                      <div class=\"col-md-12\">
                        {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}

                        <div class=\"row module-selection\" style=\"display: none;\">
                          <div class=\"col-md-12 col-lg-7\">
                            {% for module in hooks %}
                              <div class=\"module-render-container module-{{ module.attributes.name }}\">
                                <div>
                                  <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                  <h2 class=\"text-ellipsis module-name-grid\">
                                    {{ module.attributes.displayName }}
                                  </h2>
                                  <div class=\"text-ellipsis small-text module-version\">
                                    {{ module.attributes.version }} by {{ module.attributes.author }}
                                  </div>
                                </div>
                                <div class=\"small no-padding\">
                                  {{ module.attributes.description }}
                                </div>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"col-md-12 col-lg-5\">
                            <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                            <select class=\"modules-list-select\" data-toggle=\"select2\">
                              {% for module in hooks %}
                                <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                              {% endfor %}
                            </select>
                          </div>
                        </div>

                        <div class=\"module-render-container all-modules\">
                          <p>
                            <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                            {{ 'These modules are relative to the product page of your shop.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                            {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}
                          </p>
                          <div class=\"row\">
                            {% for module in hooks %}
                              <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"module-item-wrapper-grid\">
                                  <div class=\"module-item-heading-grid\">
                                    <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                    <h3 class=\"text-ellipsis module-name-grid\">
                                      {{ module.attributes.displayName }}
                                    </h3>
                                    <div class=\"text-ellipsis small-text module-version-author-grid\">
                                      {{ module.attributes.version }} by {{ module.attributes.author }}
                                    </div>
                                  </div>
                                  <div class=\"module-quick-description-grid small no-padding\">
                                    {{ module.attributes.description }}
                                  </div>
                                  <div class=\"module-container\">
                                    <div class=\"module-quick-action-grid clearfix\">
                                      <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                        {{ 'Configure'|trans({}, 'Admin.Actions') }}
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            {% endfor %}
                          </div>
                        </div>

                        {% for module in hooks %}
                          <div
                            id=\"module_{{ module.id }}\"
                            class=\"module-render-container module-{{ module.attributes.name }}\"
                            style=\"display: none;\"
                          >
                            <div>
                              {{ module.content|raw }}
                            </div>
                          </div>
                        {% endfor %}
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          {% endif %}
        {% endblock %}
      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    {{ include('@Product/ProductPage/Blocks/footer.html.twig', {
      'preview_link': preview_link,
      'preview_link_deactivate': preview_link_deactivate,
      'is_shop_context': is_shop_context,
      'editable': editable,
      'is_active': form.step1.vars.value.active,
      'productId': id_product
    }) }}
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-outline-secondary btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>

  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF or PNG format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure to delete this?\": \"Are you sure to delete this?\"|trans({}, 'Admin.Notifications.Warning'),
\"This will delete the specific price. Do you wish to proceed?\": \"This will delete the specific price. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
}|merge(js_translatable) %}
", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}
