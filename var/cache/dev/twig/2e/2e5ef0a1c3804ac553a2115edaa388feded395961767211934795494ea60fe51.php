<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig */
class __TwigTemplate_e40ebbbec6497f37b47cdd89870af9c5fbdce13de7e7e1c4c9de206b6d7eb6cd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig"));

        // line 25
        echo "<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title module-modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a module", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
                <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 34
        if (((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) <= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 35
            echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                <p class=\"alert-text\">
                                    ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["errorMessage"]) ? $context["errorMessage"] : $this->getContext($context, "errorMessage")), "html", null, true);
            echo "
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 45
            echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
                                <div class=\"module-import-start\">
                                    <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
                                    <p class=module-import-start-main-text>
                                        ";
            // line 51
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop your module archive here or [1]select file[/1]", array(), "Admin.Modules.Feature"), array("[1]" => "<a href=\"#\" class=\"module-import-start-select-manual\">", "[/1]" => "</a>"));
            echo "
                                    </p>
                                    <p class=module-import-start-footer-text>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).", array(), "Admin.Modules.Help"), "html", null, true);
            echo "
                                        ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your module will be installed right after that.", array(), "Admin.Modules.Help"), "html", null, true);
            echo "
                                    </p>
                                </div>
                                <div class='module-import-processing'>
                                    <!-- Loader -->
                                    <div class=\"spinner\"></div>
                                    <p class=module-import-processing-main-text>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installing module...", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
                                    <p class=module-import-processing-footer-text>
                                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It will close as soon as the module is installed. It won't be long!", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
                                    </p>
                                </div>
                                <div class='module-import-success'>
                                    <i class=\"module-import-success-icon material-icons\">done</i><br/>
                                    <p class='module-import-success-msg'>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module installed!", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
                                    <p class=\"module-import-success-details\"></p>
                                    <a class=\"module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button\" href='#'>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Actions"), "html", null, true);
            echo "</a>
                                </div>
                                <div class='module-import-failure'>
                                    <i class=\"module-import-failure-icon material-icons\">error</i><br/>
                                    <p class='module-import-failure-msg'>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Oops... Upload failed.", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
                                    <a href=\"#\" class=\"module-import-failure-details-action\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What happened?", array(), "Admin.Modules.Help"), "html", null, true);
            echo "</a>
                                    <div class='module-import-failure-details'></div>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href='#'>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Try again", array(), "Admin.Actions"), "html", null, true);
            echo "</a>
                                </div>
                                <div class='module-import-confirm'>
                                </div>
                            </form>
                        </div>
                    </div>
                ";
        }
        // line 85
        echo "            </div>
            <div class=\"modal-footer\">
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
        return "PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 85,  117 => 77,  112 => 75,  108 => 74,  101 => 70,  96 => 68,  88 => 63,  83 => 61,  74 => 55,  70 => 54,  64 => 51,  56 => 45,  47 => 39,  41 => 35,  39 => 34,  32 => 30,  25 => 25,);
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
<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title module-modal-title\">{{ 'Upload a module'|trans({}, 'Admin.Modules.Feature') }}</h4>
                <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
            </div>
            <div class=\"modal-body\">
                {% if level <= constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE') %}
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                <p class=\"alert-text\">
                                    {{ errorMessage }}
                                </p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
                                <div class=\"module-import-start\">
                                    <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
                                    <p class=module-import-start-main-text>
                                        {{ 'Drop your module archive here or [1]select file[/1]'|trans({}, 'Admin.Modules.Feature')|replace({'[1]' : '<a href=\"#\" class=\"module-import-start-select-manual\">', '[/1]' : '</a>'})|raw }}
                                    </p>
                                    <p class=module-import-start-footer-text>
                                        {{ 'Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).'|trans({}, 'Admin.Modules.Help') }}
                                        {{ 'Your module will be installed right after that.'|trans({}, 'Admin.Modules.Help') }}
                                    </p>
                                </div>
                                <div class='module-import-processing'>
                                    <!-- Loader -->
                                    <div class=\"spinner\"></div>
                                    <p class=module-import-processing-main-text>{{ 'Installing module...'|trans({}, 'Admin.Modules.Notification') }}</p>
                                    <p class=module-import-processing-footer-text>
                                        {{ \"It will close as soon as the module is installed. It won't be long!\"|trans({}, 'Admin.Modules.Notification') }}
                                    </p>
                                </div>
                                <div class='module-import-success'>
                                    <i class=\"module-import-success-icon material-icons\">done</i><br/>
                                    <p class='module-import-success-msg'>{{ 'Module installed!'|trans({}, 'Admin.Modules.Notification') }}</p>
                                    <p class=\"module-import-success-details\"></p>
                                    <a class=\"module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button\" href='#'>{{ 'Configure'|trans({}, 'Admin.Actions') }}</a>
                                </div>
                                <div class='module-import-failure'>
                                    <i class=\"module-import-failure-icon material-icons\">error</i><br/>
                                    <p class='module-import-failure-msg'>{{ 'Oops... Upload failed.'|trans({}, 'Admin.Modules.Notification') }}</p>
                                    <a href=\"#\" class=\"module-import-failure-details-action\">{{ 'What happened?'|trans({}, 'Admin.Modules.Help') }}</a>
                                    <div class='module-import-failure-details'></div>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href='#'>{{ 'Try again'|trans({}, 'Admin.Actions') }}</a>
                                </div>
                                <div class='module-import-confirm'>
                                </div>
                            </form>
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"modal-footer\">
            </div>
        </div>
    </div>
</div>
", "PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_import.html.twig");
    }
}
