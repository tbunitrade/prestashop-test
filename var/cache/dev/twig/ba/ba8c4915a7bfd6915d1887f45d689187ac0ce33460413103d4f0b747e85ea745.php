<?php

/* @Product/ProductPage/Blocks/footer.html.twig */
class __TwigTemplate_1b980ba4914142c7e735934eb211960a0038b7b82008dc450be7fd86cbbcdd81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_footer' => array($this, 'block_product_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/footer.html.twig"));

        // line 25
        echo " ";
        $this->displayBlock('product_footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_product_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_footer"));

        // line 26
        echo "  <div class=\"product-footer justify-content-md-center\">
    <div class=\"col-lg-4\">
      <a
        href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "delete", "id" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId")))), "html", null, true);
        echo "\"
        class=\"tooltip-link btn btn-lg delete\"
        data-toggle=\"pstooltip\"
        id=\"product_form_delete_btn\"
        title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanently delete this product.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        data-placement=\"left\"
        data-original-title=\"Delete\"
      >
        <i class=\"material-icons\">delete</i>
      </a>
      <a
        href=\"\"
        data-redirect=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["preview_link"]) ? $context["preview_link"] : $this->getContext($context, "preview_link")), "html", null, true);
        echo "\"
        data-url-deactive=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["preview_link_deactivate"]) ? $context["preview_link_deactivate"] : $this->getContext($context, "preview_link_deactivate")), "html", null, true);
        echo "\"
        target=\"_blank\"
        class=\"btn btn-secondary preview\"
        data-toggle=\"pstooltip\"
        id=\"product_form_preview_btn\"
        title=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See how your product sheet will look online: ALT+SHIFT+V", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", array(), "Admin.Actions"), "html", null, true);
        echo "
      </a>
      ";
        // line 51
        if ((isset($context["editable"]) ? $context["editable"] : $this->getContext($context, "editable"))) {
            // line 52
            echo "      <h2 class=\"for-switch online-title\" ";
            if ( !(isset($context["is_active"]) ? $context["is_active"] : $this->getContext($context, "is_active"))) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
      <h2 class=\"for-switch offline-title\" ";
            // line 54
            if ((isset($context["is_active"]) ? $context["is_active"] : $this->getContext($context, "is_active"))) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Offline", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
      <input
        class=\"switch-input-lg\"
        id=\"form_step1_active\"
        data-toggle=\"switch\"
        type=\"checkbox\"
        name=\"form[step1][active]\"
        value=\"1\"
        ";
            // line 63
            echo (((isset($context["is_active"]) ? $context["is_active"] : $this->getContext($context, "is_active"))) ? ("checked=\"checked\"") : (""));
            echo "
      />
      ";
        }
        // line 66
        echo "    </div>
    <div class=\"col-sm-5 col-lg-7 text-right\">
      ";
        // line 68
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : $this->getContext($context, "is_shop_context"))) {
            // line 69
            echo "        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
          id=\"product_form_save_duplicate_btn\"
          data-redirect=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId")))), "html", null, true);
            echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and duplicate this product, then go to the new product: ALT+SHIFT+D", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\"
          >
          ";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
        </button>
      ";
        }
        // line 80
        echo "      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
        id=\"product_form_save_go_to_catalog_btn\"
        data-redirect=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and go back to the catalog: ALT+SHIFT+Q", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        >
        ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
      </button>
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
        id=\"product_form_save_new_btn\"
        data-redirect=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and create a new product: ALT+SHIFT+P", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        >
        ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
      </button>
      <input
        id=\"submit\"
        type=\"submit\"
        class=\"btn btn-primary save uppercase ml-3\"
        value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save the product and stay on the current page: ALT+SHIFT+S", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        />

        <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
        <div class=\"btn-group hide dropdown\">
          <button
          class=\"btn btn-primary js-btn-save ml-3\"
          type=\"submit\"
          >
            <span>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
          </button><button
            class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
            type=\"button\"
            id=\"dropdownMenu\"
            data-toggle=\"dropdown\"
            aria-expanded=\"false\"
          >
            <span class=\"sr-only\">Toggle Dropdown</span>
          </button>
          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
            ";
        // line 126
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : $this->getContext($context, "is_shop_context"))) {
            // line 127
            echo "              <a
              class=\"dropdown-item duplicate js-btn-save\"
              href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => (isset($context["productId"]) ? $context["productId"] : $this->getContext($context, "productId")))), "html", null, true);
            echo "\"
              >
              ";
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
              </a>
            ";
        }
        // line 134
        echo "          <a
            class=\"dropdown-item go-catalog js-btn-save\"
            href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
            >
            ";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
          </a>
          <a
            class=\"dropdown-item new-product js-btn-save\"
            href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
            >
            ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
          </a>
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
        return "@Product/ProductPage/Blocks/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  271 => 144,  266 => 142,  259 => 138,  254 => 136,  250 => 134,  244 => 131,  239 => 129,  235 => 127,  233 => 126,  219 => 115,  207 => 106,  202 => 104,  193 => 98,  188 => 96,  183 => 94,  174 => 88,  169 => 86,  164 => 84,  158 => 80,  152 => 77,  147 => 75,  142 => 73,  136 => 69,  134 => 68,  130 => 66,  124 => 63,  111 => 55,  105 => 54,  99 => 53,  92 => 52,  90 => 51,  85 => 49,  80 => 47,  72 => 42,  68 => 41,  57 => 33,  50 => 29,  45 => 26,  26 => 25,);
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
 {% block product_footer %}
  <div class=\"product-footer justify-content-md-center\">
    <div class=\"col-lg-4\">
      <a
        href=\"{{ path('admin_product_unit_action', {action: 'delete', id: productId}) }}\"
        class=\"tooltip-link btn btn-lg delete\"
        data-toggle=\"pstooltip\"
        id=\"product_form_delete_btn\"
        title=\"{{ 'Permanently delete this product.'|trans({}, 'Admin.Catalog.Help') }}\"
        data-placement=\"left\"
        data-original-title=\"Delete\"
      >
        <i class=\"material-icons\">delete</i>
      </a>
      <a
        href=\"\"
        data-redirect=\"{{ preview_link }}\"
        data-url-deactive=\"{{ preview_link_deactivate }}\"
        target=\"_blank\"
        class=\"btn btn-secondary preview\"
        data-toggle=\"pstooltip\"
        id=\"product_form_preview_btn\"
        title=\"{{ 'See how your product sheet will look online: ALT+SHIFT+V'|trans({}, 'Admin.Catalog.Help') }}\"
      >
        {{ 'Preview'|trans({}, 'Admin.Actions')}}
      </a>
      {% if editable %}
      <h2 class=\"for-switch online-title\" {% if not is_active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
          title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Online'|trans({}, 'Admin.Global') }}</h2>
      <h2 class=\"for-switch offline-title\" {% if is_active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
          title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Offline'|trans({}, 'Admin.Global') }}</h2>
      <input
        class=\"switch-input-lg\"
        id=\"form_step1_active\"
        data-toggle=\"switch\"
        type=\"checkbox\"
        name=\"form[step1][active]\"
        value=\"1\"
        {{ is_active ? 'checked=\"checked\"' : '' }}
      />
      {% endif %}
    </div>
    <div class=\"col-sm-5 col-lg-7 text-right\">
      {% if is_shop_context %}
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
          id=\"product_form_save_duplicate_btn\"
          data-redirect=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: productId}) }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save and duplicate this product, then go to the new product: ALT+SHIFT+D'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
        </button>
      {% endif %}
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
        id=\"product_form_save_go_to_catalog_btn\"
        data-redirect=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save and go back to the catalog: ALT+SHIFT+Q'|trans({}, 'Admin.Catalog.Help') }}\"
        >
        {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
      </button>
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
        id=\"product_form_save_new_btn\"
        data-redirect=\"{{ path('admin_product_new') }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save and create a new product: ALT+SHIFT+P'|trans({}, 'Admin.Catalog.Help') }}\"
        >
        {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
      </button>
      <input
        id=\"submit\"
        type=\"submit\"
        class=\"btn btn-primary save uppercase ml-3\"
        value=\"{{ 'Save'|trans({}, 'Admin.Actions') }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save the product and stay on the current page: ALT+SHIFT+S'|trans({}, 'Admin.Catalog.Help') }}\"
        />

        <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
        <div class=\"btn-group hide dropdown\">
          <button
          class=\"btn btn-primary js-btn-save ml-3\"
          type=\"submit\"
          >
            <span>{{ 'Save'|trans({}, 'Admin.Actions') }}</span>
          </button><button
            class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
            type=\"button\"
            id=\"dropdownMenu\"
            data-toggle=\"dropdown\"
            aria-expanded=\"false\"
          >
            <span class=\"sr-only\">Toggle Dropdown</span>
          </button>
          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
            {% if is_shop_context %}
              <a
              class=\"dropdown-item duplicate js-btn-save\"
              href=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: productId}) }}\"
              >
              {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
              </a>
            {% endif %}
          <a
            class=\"dropdown-item go-catalog js-btn-save\"
            href=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
            >
            {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
          </a>
          <a
            class=\"dropdown-item new-product js-btn-save\"
            href=\"{{ path('admin_product_new') }}\"
            >
            {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
          </a>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "@Product/ProductPage/Blocks/footer.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Blocks/footer.html.twig");
    }
}
