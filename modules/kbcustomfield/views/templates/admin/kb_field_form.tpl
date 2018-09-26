<div class="row">
    <div class="col-sm-12">
            
        <div class="panel">
            <div class="panel form-horizontal kb_custom_field_type">
        </div>
            <div class="kb_custom_field_form">
                {$kb_form_contents}{*Variable contains URL content, escape not required*}
            </div>
            
        </div>
    </div>
</div>    
<script>
    edit_field_form = {$edit_field_form|escape:'htmlall':'UTF-8'};
    var kb_numeric = "{l s='Field should be numeric.' mod='kbcustomfield'}";
    var kb_positive = "{l s='Field should be positive.' mod='kbcustomfield'}";
    var maximum_length_excced = "{l s='Maximum length should be greater than minimum length.' mod='kbcustomfield'}";
    var feature_not_available = "{l s='This feature is not available in free version.' mod='kbcustomfield'}";
    velovalidation.setErrorLanguage({
        alphanumeric: "{l s='Field should be alphanumeric.' mod='kbcustomfield'}",
        digit_pass: "{l s='Password should contain atleast 1 digit.' mod='kbcustomfield'}",
        empty_field: "{l s='Field cannot be empty.' mod='kbcustomfield'}",
        number_field: "{l s='You can enter only numbers.' mod='kbcustomfield'}",            
        positive_number: "{l s='Number should be greater than 0.' mod='kbcustomfield'}",
        maxchar_field: "{l s='Field cannot be greater than # characters.' mod='kbcustomfield'}",
        minchar_field: "{l s='Field cannot be less than # character(s).' mod='kbcustomfield'}",
        invalid_date: "{l s='Invalid date format.' mod='kbcustomfield'}",
        valid_amount: "{l s='Field should be numeric.' mod='kbcustomfield'}",
        valid_decimal: "{l s='Field can have only upto two decimal values.' mod='kbcustomfield'}",
        maxchar_size: "{l s='Size cannot be greater than # characters.' mod='kbcustomfield'}",
            specialchar_size: "{l s='Size should not have special characters.' mod='kbcustomfield'}",
            maxchar_bar: "{l s='Barcode cannot be greater than # characters.' mod='kbcustomfield'}",
            positive_amount: "{l s='Field should be positive.' mod='kbcustomfield'}",
            maxchar_color: "{l s='Color could not be greater than # characters.' mod='kbcustomfield'}",
            invalid_color: "{l s='Color is not valid.' mod='kbcustomfield'}",
            specialchar: "{l s='Special characters are not allowed.' mod='kbcustomfield'}",
            script: "{l s='Script tags are not allowed.' mod='kbcustomfield'}",
            style: "{l s='Style tags are not allowed.' mod='kbcustomfield'}",
            iframe: "{l s='Iframe tags are not allowed.' mod='kbcustomfield'}",
            image_size: "{l s='Uploaded file size must be less than #.' mod='kbcustomfield'}",
            html_tags: "{l s='Field should not contain HTML tags.' mod='kbcustomfield'}",
            number_pos: "{l s='You can enter only positive numbers.' mod='kbcustomfield'}",
        });
</script>
{*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer tohttp://www.prestashop.com for more information.
* We offer the best and most useful modules PrestaShop and modifications for your online store.
*
* @category  PrestaShop Module
* @author    knowband.com <support@knowband.com>
* @copyright 2017 Knowband
* @license   see file: LICENSE.txt
*
* Description
*
* Admin tpl file
*}