<?php

/* @PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig */
class __TwigTemplate_dda8c5377dd0d6c379df07a66fbca5c2eed4ca33af1c83ded25e7893a3e04e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preferences_form_general' => array($this, 'block_preferences_form_general'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig"));

        // line 29
        $context["generalForm"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "general", array());
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    <div class=\"container\">
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form", "id" => "configuration_form")));
        echo "
        <div class=\"row\">
            ";
        // line 36
        $this->displayBlock('preferences_form_general', $context, $blocks);
        // line 131
        echo "
        </div>
        ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_preferences_form_general($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preferences_form_general"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preferences_form_general"));

        // line 37
        echo "                <div class=\"col\">
                    <div class=\"card\">
                        <h3 class=\"card-header\">
                            <i class=\"material-icons\">settings</i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", array(), "Admin.Global"), "html", null, true);
        echo "
                        </h3>
                        <div class=\"card-block\">
                            <div class=\"card-text\">
                                <div class=\"form-group\">
                                    ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                                    ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isSecure", array(), "method")) {
            // line 47
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl", array()), 'errors');
            echo "
                                        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl", array()), 'widget');
            echo "
                                        <small class=\"form-text\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you own an SSL certificate for your shop's domain name, you can activate SSL encryption (https://) for customer account identification and order processing.", array(), "Admin.Shopparameters.Help"), "html", null, true);
            echo "</small>
                                    ";
        } else {
            // line 51
            echo "                                        <a class=\"d-block\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["sslUri"]) ? $context["sslUri"] : $this->getContext($context, "sslUri")), "html", null, true);
            echo "\">
                                          ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please click here to check if your shop supports HTTPS.", array(), "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
                                        </a>
                                    ";
        }
        // line 55
        echo "                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable SSL on all pages", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl_everywhere", array()), 'errors');
        echo "
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_ssl_everywhere", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabled, all the pages of your shop will be SSL-secured.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Increase front office security", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_token", array()), 'errors');
        echo "
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "enable_token", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable token in the Front Office to improve PrestaShop's security.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on HTML fields", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "allow_html_iframes", array()), 'errors');
        echo "
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "allow_html_iframes", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow iframes on text fields like product description. We recommend that you leave this option disabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use HTMLPurifier Library", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "use_htmlpurifier", array()), 'errors');
        echo "
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "use_htmlpurifier", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clean the HTML content on text fields. We recommend that you leave this option enabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round mode", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_mode", array()), 'errors');
        echo "
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_mode", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose among 6 different ways of rounding prices. \"Round up away from zero ...\" is the recommended behavior.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Round type", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_type", array()), 'errors');
        echo "
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_round_type", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can choose when to round prices: either on each item, each line or the total (of an invoice, for example).", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of decimals", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_display_precision", array()), 'errors');
        echo "
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "price_display_precision", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose how many decimals you want to display", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display brands and suppliers", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_suppliers", array()), 'errors');
        echo "
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_suppliers", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable brands and suppliers pages on your front office even when their respective modules are disabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display best sellers", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_best_sellers", array()), 'errors');
        echo "
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "display_best_sellers", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable best sellers page on your front office even when its respective module is disabled.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Multistore", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "multishop_feature_active", array()), 'errors');
        echo "
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "multishop_feature_active", array()), 'widget');
        echo "
                                    <small class=\"form-text\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The multistore feature allows you to manage several e-shops with one Back Office. If this feature is enabled, a \"Multistore\" page will be available in the \"Advanced Parameters\" menu.", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main Shop Activity", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</label>
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "shop_activity", array()), 'errors');
        echo "
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["generalForm"]) ? $context["generalForm"] : $this->getContext($context, "generalForm")), "shop_activity", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"d-flex justify-content-end\">
                                <button class=\"btn btn-primary\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 125,  325 => 119,  321 => 118,  317 => 117,  311 => 114,  307 => 113,  303 => 112,  299 => 111,  293 => 108,  289 => 107,  285 => 106,  281 => 105,  275 => 102,  271 => 101,  267 => 100,  263 => 99,  257 => 96,  253 => 95,  249 => 94,  245 => 93,  239 => 90,  235 => 89,  231 => 88,  227 => 87,  221 => 84,  217 => 83,  213 => 82,  209 => 81,  203 => 78,  199 => 77,  195 => 76,  191 => 75,  185 => 72,  181 => 71,  177 => 70,  173 => 69,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  149 => 60,  145 => 59,  141 => 58,  137 => 57,  133 => 55,  127 => 52,  122 => 51,  117 => 49,  113 => 48,  108 => 47,  106 => 46,  102 => 45,  94 => 40,  89 => 37,  80 => 36,  67 => 133,  63 => 131,  61 => 36,  56 => 34,  53 => 33,  44 => 32,  34 => 25,  32 => 29,  11 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Shopparameters.Feature\" %}

{%
  set generalForm = form.general
%}

{% block content %}
    <div class=\"container\">
        {{ form_start(form, {'attr' : {'class': 'form', 'id': 'configuration_form'} }) }}
        <div class=\"row\">
            {% block preferences_form_general %}
                <div class=\"col\">
                    <div class=\"card\">
                        <h3 class=\"card-header\">
                            <i class=\"material-icons\">settings</i> {{ 'General'|trans({}, 'Admin.Global') }}
                        </h3>
                        <div class=\"card-block\">
                            <div class=\"card-text\">
                                <div class=\"form-group\">
                                    {{ ps.label_with_help(('Enable SSL'|trans), ('If you want to enable SSL on all the pages of your shop, activate the \"Enable on all the pages\" option below.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                                    {% if app.request.isSecure() %}
                                        {{ form_errors(generalForm.enable_ssl) }}
                                        {{ form_widget(generalForm.enable_ssl) }}
                                        <small class=\"form-text\">{{ 'If you own an SSL certificate for your shop\\'s domain name, you can activate SSL encryption (https://) for customer account identification and order processing.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                    {% else %}
                                        <a class=\"d-block\" href=\"{{ sslUri }}\">
                                          {{ 'Please click here to check if your shop supports HTTPS.'|trans({}, 'Admin.Shopparameters.Feature') }}
                                        </a>
                                    {% endif %}
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Enable SSL on all pages'|trans }}</label>
                                    {{ form_errors(generalForm.enable_ssl_everywhere) }}
                                    {{ form_widget(generalForm.enable_ssl_everywhere) }}
                                    <small class=\"form-text\">{{ 'When enabled, all the pages of your shop will be SSL-secured.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Increase front office security'|trans }}</label>
                                    {{ form_errors(generalForm.enable_token) }}
                                    {{ form_widget(generalForm.enable_token) }}
                                    <small class=\"form-text\">{{ 'Enable or disable token in the Front Office to improve PrestaShop\\'s security.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Allow iframes on HTML fields'|trans }}</label>
                                    {{ form_errors(generalForm.allow_html_iframes) }}
                                    {{ form_widget(generalForm.allow_html_iframes) }}
                                    <small class=\"form-text\">{{ 'Allow iframes on text fields like product description. We recommend that you leave this option disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Use HTMLPurifier Library'|trans }}</label>
                                    {{ form_errors(generalForm.use_htmlpurifier) }}
                                    {{ form_widget(generalForm.use_htmlpurifier) }}
                                    <small class=\"form-text\">{{ 'Clean the HTML content on text fields. We recommend that you leave this option enabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Round mode'|trans }}</label>
                                    {{ form_errors(generalForm.price_round_mode) }}
                                    {{ form_widget(generalForm.price_round_mode) }}
                                    <small class=\"form-text\">{{ 'You can choose among 6 different ways of rounding prices. \"Round up away from zero ...\" is the recommended behavior.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Round type'|trans }}</label>
                                    {{ form_errors(generalForm.price_round_type) }}
                                    {{ form_widget(generalForm.price_round_type) }}
                                    <small class=\"form-text\">{{ 'You can choose when to round prices: either on each item, each line or the total (of an invoice, for example).'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Number of decimals'|trans }}</label>
                                    {{ form_errors(generalForm.price_display_precision) }}
                                    {{ form_widget(generalForm.price_display_precision) }}
                                    <small class=\"form-text\">{{ 'Choose how many decimals you want to display'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Display brands and suppliers'|trans }}</label>
                                    {{ form_errors(generalForm.display_suppliers) }}
                                    {{ form_widget(generalForm.display_suppliers) }}
                                    <small class=\"form-text\">{{ 'Enable brands and suppliers pages on your front office even when their respective modules are disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Display best sellers'|trans }}</label>
                                    {{ form_errors(generalForm.display_best_sellers) }}
                                    {{ form_widget(generalForm.display_best_sellers) }}
                                    <small class=\"form-text\">{{ 'Enable best sellers page on your front office even when its respective module is disabled.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Enable Multistore'|trans }}</label>
                                    {{ form_errors(generalForm.multishop_feature_active) }}
                                    {{ form_widget(generalForm.multishop_feature_active) }}
                                    <small class=\"form-text\">{{ 'The multistore feature allows you to manage several e-shops with one Back Office. If this feature is enabled, a \"Multistore\" page will be available in the \"Advanced Parameters\" menu.'|trans({}, 'Admin.Shopparameters.Help') }}</small>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"form-control-label\">{{ 'Main Shop Activity'|trans }}</label>
                                    {{ form_errors(generalForm.shop_activity) }}
                                    {{ form_widget(generalForm.shop_activity) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"d-flex justify-content-end\">
                                <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            {% endblock %}

        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/preferences.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/preferences.html.twig");
    }
}
