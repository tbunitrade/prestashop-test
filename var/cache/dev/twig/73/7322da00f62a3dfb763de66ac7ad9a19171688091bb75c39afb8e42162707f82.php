<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig */
class __TwigTemplate_29cc5473bbf8c24ec6d02187fcbc26b1021dd0b265b322af406c5ec5f717dfdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'import_file_history_block' => array($this, 'block_import_file_history_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), 'form_start', array("attr" => array("data-file-upload-url" => (isset($context["importFileUploadUrl"]) ? $context["importFileUploadUrl"] : $this->getContext($context, "importFileUploadUrl")), "class" => "js-import-form")));
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">import_export</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block\">
        <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
                ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can read information on import at:", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http://doc.prestashop.com/display/PS17/Import", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
                    ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("http://doc.prestashop.com/display/PS17/Import", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
                </a>
            </p>
            <p class=\"alert-text\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more about the CSV format at:", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "\" class=\"_blank\">
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("https://en.wikipedia.org/wiki/Comma-separated_values", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "
                </a>
            </p>
        </div>

        <hr>

        <div class=\"card-text\">
            <div class=\"form-group\">
                <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What do you want to import?", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "entity", array()), 'errors');
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "entity", array()), 'widget', array("attr" => array("class" => "js-entity-select")));
        echo "
            </div>

            <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
                <ul>
                    <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that the Category import does not support having two categories with the same name.", array(), "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
                    <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Note that you can have several products with the same reference.", array(), "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
                </ul>
            </div>

            <hr>

            <div class=\"form-group hidden-xs-up\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "csv", array()), 'errors');
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "csv", array()), 'widget', array("attr" => array("class" => "js-import-file-input")));
        echo "
            </div>

            <div class=\"form-group js-file-upload-form-group\">
                <label class=\"form-control-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select a file to import", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "file", array()), 'errors');
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "file", array()), 'widget', array("attr" => array("class" => "js-import-file", "data-max-file-upload-size" => (isset($context["maxFileUploadSize"]) ? $context["maxFileUploadSize"] : $this->getContext($context, "maxFileUploadSize")))));
        echo "
                <span>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", array(), "Admin.Global"), "html", null, true);
        echo "</span>
                <button type=\"button\"
                        class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                        ";
        // line 79
        if (twig_test_empty((isset($context["importFileNames"]) ? $context["importFileNames"] : $this->getContext($context, "importFileNames")))) {
            echo "disabled";
        }
        // line 80
        echo "                >
                    <span class=\"badge badge-primary js-files-history-number\">";
        // line 81
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["importFileNames"]) ? $context["importFileNames"] : $this->getContext($context, "importFileNames"))), "html", null, true);
        echo "</span>
                    ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose from history / FTP", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </button>
                <small class=\"form-text\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
                <small class=\"form-text\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Only UTF-8 and ISO 8859-1 encodings are allowed", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
                <small class=\"form-text\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can also upload your file via FTP to the following directory: %s .", array("%s" => (isset($context["importDirectory"]) ? $context["importDirectory"] : $this->getContext($context, "importDirectory"))), "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
            </div>

            <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
                <p class=\"alert-text\">
                    <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
                </p>
            </div>

            <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
                <button type=\"button\"
                        class=\"close btn btn-outline-secondary js-change-import-file-btn\"
                        aria-label=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                >
                    <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
                </button>
                <p class=\"alert-text js-import-file\"></p>
            </div>

            ";
        // line 105
        $this->displayBlock('import_file_history_block', $context, $blocks);
        // line 108
        echo "
            <hr>

            <div class=\"form-group\">
                ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language of the file", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The locale must be installed", array(), "Admin.Advparameters.Notification")), "method"), "html", null, true);
        echo "
                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "iso_lang", array()), 'errors');
        echo "
                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "iso_lang", array()), 'widget');
        echo "
            </div>

            <div class=\"form-group\">
                <label class=\"form-control-label\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Field separator", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "separator", array()), 'errors');
        echo "
                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "separator", array()), 'widget');
        echo "
                <small class=\"form-text\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo " 1; Blouse; 129.90; 5</small>
            </div>

            <div class=\"form-group\">
                <label class=\"form-control-label\">";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multiple value separator", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "multiple_value_separator", array()), 'errors');
        echo "
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "multiple_value_separator", array()), 'widget');
        echo "
                <small class=\"form-text\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("e.g. ", array(), "Admin.Advparameters.Help"), "html", null, true);
        echo " Blouse; red.jpg, blue.jpg, green.jpg; 129.90</small>
            </div>

            <hr>

            <div class=\"form-group js-truncate-form-group\">
                <label class=\"form-control-label\">
                    ";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete all [1]categories[/1] before import", array("[1]" => "<span class=\"js-entity-name\">", "[/1]" => "</span>"), "Admin.Advparameters.Feature");
        echo "
                </label>
                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "truncate", array()), 'errors');
        echo "
                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "truncate", array()), 'widget');
        echo "
            </div>

            <div class=\"form-group js-match-ref-form-group\">
                ";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use product reference as key", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If enabled, the product's reference number MUST be unique!", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "match_ref", array()), 'errors');
        echo "
                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "match_ref", array()), 'widget');
        echo "
            </div>

            <div class=\"form-group js-regenerate-form-group\">
                <label class=\"form-control-label\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skip thumbnails regeneration", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "regenerate", array()), 'errors');
        echo "
                ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "regenerate", array()), 'widget');
        echo "
            </div>

            <div class=\"form-group js-force-ids-form-group\">
                ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force all ID numbers", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you enable this option, your imported items' ID number will be used as is. If you do not enable this option, the imported ID numbers will be ignored, and PrestaShop will instead create auto-incremented ID numbers for all the imported items.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "forceIDs", array()), 'errors');
        echo "
                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "forceIDs", array()), 'widget');
        echo "
            </div>

            <div class=\"form-group\">
                ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send notification email", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sends an email to let you know your import is complete. It can be useful when handling large files, as the import may take some time.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "sendemail", array()), 'errors');
        echo "
                ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), "sendemail", array()), 'widget');
        echo "
            </div>

            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), 'rest');
        echo "
        </div>
    </div>

    <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" name=\"submitImportFile\">
                ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next step", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                <i class=\"material-icons\">navigate_next</i>
            </button>
        </div>
    </div>
</div>
";
        // line 178
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importForm"]) ? $context["importForm"] : $this->getContext($context, "importForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 105
    public function block_import_file_history_block($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "import_file_history_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "import_file_history_block"));

        // line 106
        echo "                ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 106)->display($context);
        // line 107
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 107,  368 => 106,  359 => 105,  347 => 178,  338 => 172,  328 => 165,  322 => 162,  318 => 161,  314 => 160,  307 => 156,  303 => 155,  299 => 154,  292 => 150,  288 => 149,  284 => 148,  277 => 144,  273 => 143,  269 => 142,  262 => 138,  258 => 137,  253 => 135,  243 => 128,  239 => 127,  235 => 126,  231 => 125,  224 => 121,  220 => 120,  216 => 119,  212 => 118,  205 => 114,  201 => 113,  197 => 112,  191 => 108,  189 => 105,  179 => 98,  164 => 86,  160 => 85,  156 => 84,  151 => 82,  147 => 81,  144 => 80,  140 => 79,  134 => 76,  130 => 75,  126 => 74,  122 => 73,  115 => 69,  111 => 68,  101 => 61,  97 => 60,  89 => 55,  85 => 54,  81 => 53,  69 => 44,  65 => 43,  61 => 42,  54 => 38,  50 => 37,  46 => 36,  38 => 31,  32 => 28,  29 => 27,  26 => 25,);
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

{{ form_start(importForm, {'attr': { 'data-file-upload-url': importFileUploadUrl, 'class': 'js-import-form' }}) }}
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">import_export</i> {{ 'Import'|trans({}, 'Admin.Actions') }}
    </h3>
    <div class=\"card-block\">
        <div class=\"alert alert-info\" role=\"alert\">
            <p class=\"alert-text\">
                {{ 'You can read information on import at:'|trans({}, 'Admin.Advparameters.Help') }}
                <a href=\"{{ 'http://doc.prestashop.com/display/PS17/Import'|trans({}, 'Admin.Advparameters.Help') }}\" class=\"_blank\">
                    {{ 'http://doc.prestashop.com/display/PS17/Import'|trans({}, 'Admin.Advparameters.Help') }}
                </a>
            </p>
            <p class=\"alert-text\">
                {{ 'Read more about the CSV format at:'|trans({}, 'Admin.Advparameters.Help') }}
                <a href=\"{{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}\" class=\"_blank\">
                    {{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}
                </a>
            </p>
        </div>

        <hr>

        <div class=\"card-text\">
            <div class=\"form-group\">
                <label class=\"form-control-label\">{{ 'What do you want to import?'|trans }}</label>
                {{ form_errors(importForm.entity) }}
                {{ form_widget(importForm.entity, {'attr': {'class': 'js-entity-select'}}) }}
            </div>

            <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
                <ul>
                    <li>{{ 'Note that the Category import does not support having two categories with the same name.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
                    <li>{{ 'Note that you can have several products with the same reference.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
                </ul>
            </div>

            <hr>

            <div class=\"form-group hidden-xs-up\">
                {{ form_errors(importForm.csv) }}
                {{ form_widget(importForm.csv, {'attr': {'class': 'js-import-file-input'}}) }}
            </div>

            <div class=\"form-group js-file-upload-form-group\">
                <label class=\"form-control-label\">{{ 'Select a file to import'|trans }}</label>
                {{ form_errors(importForm.file) }}
                {{ form_widget(importForm.file, {'attr': {'class': 'js-import-file', 'data-max-file-upload-size': maxFileUploadSize }}) }}
                <span>{{ 'or'|trans({}, 'Admin.Global') }}</span>
                <button type=\"button\"
                        class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                        {% if importFileNames is empty %}disabled{% endif %}
                >
                    <span class=\"badge badge-primary js-files-history-number\">{{ importFileNames|length }}</span>
                    {{ 'Choose from history / FTP'|trans({}, 'Admin.Advparameters.Feature') }}
                </button>
                <small class=\"form-text\">{{ 'Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots'|trans({}, 'Admin.Advparameters.Help') }}</small>
                <small class=\"form-text\">{{ 'Only UTF-8 and ISO 8859-1 encodings are allowed'|trans({}, 'Admin.Advparameters.Help') }}</small>
                <small class=\"form-text\">{{ 'You can also upload your file via FTP to the following directory: %s .'|trans({'%s': importDirectory}, 'Admin.Advparameters.Help') }}</small>
            </div>

            <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
                <p class=\"alert-text\">
                    <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
                </p>
            </div>

            <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
                <button type=\"button\"
                        class=\"close btn btn-outline-secondary js-change-import-file-btn\"
                        aria-label=\"{{ 'Change'|trans({}, 'Admin.Actions') }}\"
                >
                    <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
                </button>
                <p class=\"alert-text js-import-file\"></p>
            </div>

            {% block import_file_history_block %}
                {% include '@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig' %}
            {% endblock %}

            <hr>

            <div class=\"form-group\">
                {{ ps.label_with_help(('Language of the file'|trans), ('The locale must be installed'|trans({}, 'Admin.Advparameters.Notification'))) }}
                {{ form_errors(importForm.iso_lang) }}
                {{ form_widget(importForm.iso_lang) }}
            </div>

            <div class=\"form-group\">
                <label class=\"form-control-label\">{{ 'Field separator'|trans }}</label>
                {{ form_errors(importForm.separator) }}
                {{ form_widget(importForm.separator) }}
                <small class=\"form-text\">{{ 'e.g. '|trans({}, 'Admin.Advparameters.Help') }} 1; Blouse; 129.90; 5</small>
            </div>

            <div class=\"form-group\">
                <label class=\"form-control-label\">{{ 'Multiple value separator'|trans }}</label>
                {{ form_errors(importForm.multiple_value_separator) }}
                {{ form_widget(importForm.multiple_value_separator) }}
                <small class=\"form-text\">{{ 'e.g. '|trans({}, 'Admin.Advparameters.Help') }} Blouse; red.jpg, blue.jpg, green.jpg; 129.90</small>
            </div>

            <hr>

            <div class=\"form-group js-truncate-form-group\">
                <label class=\"form-control-label\">
                    {{ 'Delete all [1]categories[/1] before import'|trans({'[1]': '<span class=\"js-entity-name\">', '[/1]': '</span>'})|raw }}
                </label>
                {{ form_errors(importForm.truncate) }}
                {{ form_widget(importForm.truncate) }}
            </div>

            <div class=\"form-group js-match-ref-form-group\">
                {{ ps.label_with_help(('Use product reference as key'|trans), ('If enabled, the product\\'s reference number MUST be unique!'|trans({}, 'Admin.Advparameters.Help'))) }}
                {{ form_errors(importForm.match_ref) }}
                {{ form_widget(importForm.match_ref) }}
            </div>

            <div class=\"form-group js-regenerate-form-group\">
                <label class=\"form-control-label\">{{ 'Skip thumbnails regeneration'|trans }}</label>
                {{ form_errors(importForm.regenerate) }}
                {{ form_widget(importForm.regenerate) }}
            </div>

            <div class=\"form-group js-force-ids-form-group\">
                {{ ps.label_with_help(('Force all ID numbers'|trans), (\"If you enable this option, your imported items' ID number will be used as is. If you do not enable this option, the imported ID numbers will be ignored, and PrestaShop will instead create auto-incremented ID numbers for all the imported items.\"|trans({}, 'Admin.Advparameters.Help'))) }}
                {{ form_errors(importForm.forceIDs) }}
                {{ form_widget(importForm.forceIDs) }}
            </div>

            <div class=\"form-group\">
                {{ ps.label_with_help(('Send notification email'|trans), ('Sends an email to let you know your import is complete. It can be useful when handling large files, as the import may take some time.'|trans({}, 'Admin.Advparameters.Help'))) }}
                {{ form_errors(importForm.sendemail) }}
                {{ form_widget(importForm.sendemail) }}
            </div>

            {{ form_rest(importForm) }}
        </div>
    </div>

    <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary\" name=\"submitImportFile\">
                {{ 'Next step'|trans({}, 'Admin.Advparameters.Feature') }}
                <i class=\"material-icons\">navigate_next</i>
            </button>
        </div>
    </div>
</div>
{{ form_end(importForm) }}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig");
    }
}
