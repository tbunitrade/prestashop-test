{extends file='helpers/form/form.tpl'}

{block name='defaultForm'}

    {$kb_tabs} {*Variable contains html content, escape not required*}
    {$form} {*Variable contains html content, escape not required*}
    
    {$free_version}
    <script type="text/javascript">
        var validate_css_length = "{l s='Length of CSS should be less than 10000' mod='kbcustomfield'}";
        var kb_numeric = "{l s='Field should be numeric.' mod='kbcustomfield'}";
        var kb_positive = "{l s='Field should be positive.' mod='kbcustomfield'}";
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
{/block}
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
    * @copyright 2015 Knowband
    * @license   see file: LICENSE.txt
    *
    * Description
    *
    * Admin tpl file
    *}

