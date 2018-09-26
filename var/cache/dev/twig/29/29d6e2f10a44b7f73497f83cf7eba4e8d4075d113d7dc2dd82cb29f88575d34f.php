<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig */
class __TwigTemplate_7f8404458f1836d7e334815ce92312b3567b983ee502091a4fbc7f06d7465b78 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card d-none js-files-history-block\">
    <div class=\"card-header\">
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("History of uploaded files", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        <span class=\"badge badge-primary js-files-history-number\">";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["importFileNames"]) ? $context["importFileNames"] : $this->getContext($context, "importFileNames"))), "html", null, true);
        echo "</span>
        <a href=\"#\" class=\"close js-close-files-history-block-btn\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </a>
    </div>
    <div class=\"card-content\">
        <table id=\"fileHistoryTable\"
               class=\"table mb-0\"
               data-delete-file-url=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_file_delete");
        echo "\"
               data-download-file-url=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_file_download");
        echo "\"
        >
            <tbody>
                <tr class=\"d-none\">
                    <td></td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use", array(), "Admin.Actions"), "html", null, true);
        echo "
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Dropdown", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"#\" class=\"dropdown-item js-download-file-btn\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"#\" class=\"dropdown-item js-delete-file-btn\">
                                    <i class=\"material-icons\">delete</i>
                                    ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "html", null, true);
        echo "
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["importFileNames"]) ? $context["importFileNames"] : $this->getContext($context, "importFileNames")));
        foreach ($context['_seq'] as $context["_key"] => $context["fileName"]) {
            // line 73
            echo "                <tr>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"";
            // line 76
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use", array(), "Admin.Actions"), "html", null, true);
            echo "
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Dropdown", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_file_download", array("filename" => $context["fileName"])), "html", null, true);
            echo "\" class=\"dropdown-item\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_file_delete", array("filename" => $context["fileName"])), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                    <i class=\"material-icons\">delete</i>
                                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fileName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 103,  149 => 96,  144 => 94,  138 => 91,  133 => 89,  127 => 86,  116 => 78,  111 => 76,  106 => 74,  103 => 73,  99 => 72,  90 => 66,  82 => 61,  74 => 56,  63 => 48,  52 => 40,  48 => 39,  37 => 31,  33 => 30,  28 => 27,  25 => 25,);
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

<div class=\"card d-none js-files-history-block\">
    <div class=\"card-header\">
        {{ 'History of uploaded files'|trans({}, 'Admin.Advparameters.Feature') }}
        <span class=\"badge badge-primary js-files-history-number\">{{ importFileNames|length }}</span>
        <a href=\"#\" class=\"close js-close-files-history-block-btn\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </a>
    </div>
    <div class=\"card-content\">
        <table id=\"fileHistoryTable\"
               class=\"table mb-0\"
               data-delete-file-url=\"{{ path('admin_import_file_delete') }}\"
               data-download-file-url=\"{{ path('admin_import_file_download') }}\"
        >
            <tbody>
                <tr class=\"d-none\">
                    <td></td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                {{ 'Use'|trans({}, 'Admin.Actions') }}
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">{{ 'Toggle Dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"#\" class=\"dropdown-item js-download-file-btn\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    {{ 'Download'|trans }}
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"#\" class=\"dropdown-item js-delete-file-btn\">
                                    <i class=\"material-icons\">delete</i>
                                    {{ 'Delete'|trans({}, 'Admin.Actions') }}
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                {% for fileName in importFileNames %}
                <tr>
                    <td>{{ fileName }}</td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"{{ fileName }}\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                {{ 'Use'|trans({}, 'Admin.Actions') }}
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">{{ 'Toggle Dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"{{ path('admin_import_file_download', {'filename': fileName}) }}\" class=\"dropdown-item\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    {{ 'Download'|trans }}
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('admin_import_file_delete', {'filename': fileName}) }}\" class=\"dropdown-item\">
                                    <i class=\"material-icons\">delete</i>
                                    {{ 'Delete'|trans({}, 'Admin.Actions') }}
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig");
    }
}
