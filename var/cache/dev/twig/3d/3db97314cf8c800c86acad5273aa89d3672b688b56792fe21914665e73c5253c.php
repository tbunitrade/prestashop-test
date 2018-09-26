<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig */
class __TwigTemplate_a40c043d688ab96c34939fa12823e4eb3f4d18f013d2e6a4eb5456739c510c5e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download sample csv files", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block\">
        <div class=\"list-group\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Categories file", 1 => "categories_import"), "method"), "html", null, true);
        echo "
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Products file", 1 => "products_import"), "method"), "html", null, true);
        echo "
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Combinations file", 1 => "combinations_import"), "method"), "html", null, true);
        echo "
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Customers file", 1 => "customers_import"), "method"), "html", null, true);
        echo "
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Addresses file", 1 => "addresses_import"), "method"), "html", null, true);
        echo "
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Brands file", 1 => "manufacturers_import"), "method"), "html", null, true);
        echo "
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Suppliers file", 1 => "suppliers_import"), "method"), "html", null, true);
        echo "
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Aliases file", 1 => "alias_import"), "method"), "html", null, true);
        echo "
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "import_file_sample", array(0 => "Sample Store Contacts file", 1 => "store_contacts"), "method"), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 43,  69 => 42,  65 => 41,  61 => 40,  57 => 39,  53 => 38,  49 => 37,  45 => 36,  41 => 35,  33 => 30,  28 => 27,  25 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Feature' %}

<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> {{ 'Download sample csv files'|trans({}, 'Admin.Advparameters.Feature') }}
    </h3>

    <div class=\"card-block\">
        <div class=\"list-group\">
            {{ ps.import_file_sample('Sample Categories file', 'categories_import') }}
            {{ ps.import_file_sample('Sample Products file', 'products_import') }}
            {{ ps.import_file_sample('Sample Combinations file', 'combinations_import') }}
            {{ ps.import_file_sample('Sample Customers file', 'customers_import') }}
            {{ ps.import_file_sample('Sample Addresses file', 'addresses_import') }}
            {{ ps.import_file_sample('Sample Brands file', 'manufacturers_import') }}
            {{ ps.import_file_sample('Sample Suppliers file', 'suppliers_import') }}
            {{ ps.import_file_sample('Sample Aliases file', 'alias_import') }}
            {{ ps.import_file_sample('Sample Store Contacts file', 'store_contacts') }}
        </div>
    </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig");
    }
}
