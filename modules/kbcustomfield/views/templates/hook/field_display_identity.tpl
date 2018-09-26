<style>
    {$kb_custom_css}{*Variable contains CSS content, escape not required*}
</style>
<div class="kb_custom_field_block">
    {foreach $kb_available_section as $key => $section}

        <div id="kb_custom_section_{$key|escape:'htmlall':'UTF-8'}">   
            <h3 class="page-subheading">{$section['label']|escape:'htmlall':'UTF-8'}</h3>
            {foreach $kb_available_field as $kbfield}
                {if ($kbfield['type'] == 'text') && ($section['id_section'] == $kbfield['id_section'])}
                    <div class="form-group">
                        <label for="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}" {if $kbfield['required']}class="required"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</label>
                        <input type="{if $kbfield['validation'] == 'isEmail'}email{else}text{/if}" {if $kbfield['placeholder'] != ''}placeholder="{$kbfield['placeholder']|escape:'htmlall':'UTF-8'}"{/if} 
                               name='{$kbfield['field_name']|escape:'htmlall':'UTF-8'}' id="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}" class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'} {if $kbfield['required']}is_required{/if} {if $kbfield['validation'] != ''}validate{/if}  form-control"
                               {if $kbfield['validation'] != ''} data-validate="{$kbfield['validation']|escape:'htmlall':'UTF-8'}"{/if} {if ($kbfield['max_length'] != '') && ($kbfield['max_length'] > 0)} maxlength="{$kbfield['max_length']|escape:'htmlall':'UTF-8'}"{/if} {if $kbfield['min_length'] != ''}minlength="{$kbfield['min_length']|escape:'htmlall':'UTF-8'}"{/if}
                               value="{if isset($kbfield['customer_value'])}{$kbfield['customer_value']|escape:'htmlall':'UTF-8'}{/if}" {if $kbfield['editable'] != 1} disabled{/if}
                               />
                        {if $kbfield['description'] != ''}<span class="form-info">({$kbfield['description']|escape:'htmlall':'UTF-8'})</span>{/if}</br>
                        {if $kbfield['error_msg'] != ''}<span class="error_message" style="display:none;">{$kbfield['error_msg']|escape:'htmlall':'UTF-8'}</span>{/if}
                        <input type="hidden" name="kb_register_newsletter" value="{if $kbfield['register_for_newsletter']}1{else}0{/if}"/>
                    </div>
                {/if}
                {if ($kbfield['type'] == 'radio') && ($section['id_section'] == $kbfield['id_section'])}
                    <div class="clearfix">
                        <label {if $kbfield['required']}class="required"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</label></br>
                        {if $kbfield['value'] != ''}
                            {foreach $kbfield['value']|json_decode:1 as $field_value}
                                <div class="radio-inline">
                                    <label for="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}" class="top">
                                        <input type="radio" name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}" id="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}" class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'} {if $kbfield['required']}is_required{/if}" value="{$field_value['option_value']|escape:'htmlall':'UTF-8'}" {if $kbfield['editable'] != 1} disabled{/if}
                                               {if isset($kbfield['customer_value'])}
                                                   {if is_array($kbfield['customer_value']|json_decode:1)}
                                                       {if in_array($field_value['option_value'],$kbfield['customer_value']|json_decode:1)}
                                                           checked
                                                       {/if}
                                                   {else if $kbfield['customer_value']|json_decode:1 == $field_value['option_value']}
                                                       checked
                                                   {/if}
                                               {elseif isset($kbfield['default_value'])}
                                                   {if $kbfield['default_value'] != ""}
                                                       {if isset($kbfield['default_value'][0]) && isset($kbfield['default_value'][0]['option_value'])}
                                                           {if $kbfield['default_value'][0]['option_value'] == $field_value['option_value']}
                                                               checked
                                                           {/if}
                                                       {/if}
                                                   {/if}
                                               {/if}  />
                                        {$field_value['option_label']|escape:'htmlall':'UTF-8'}
                                    </label>
                                </div>
                            {/foreach}
                        {/if}
                        {if $kbfield['error_msg'] != ''}<span class="error_message" style="display:none;">{$kbfield['error_msg']|escape:'htmlall':'UTF-8'}</span>{/if}
                        {if $kbfield['description'] != ''}</br><span class="form-info">({$kbfield['description']|escape:'htmlall':'UTF-8'})</span>{/if}</br>
                    </div>
                {/if}
            {/foreach}
        </div>
        <script>
            {if $section['placement'] == 'top'}
            $('#identity .box').prepend($('#kb_custom_section_{$key|escape:'htmlall':'UTF-8'}'));
            {/if}
        </script>
    {/foreach}
</div>
<script>
    var kb_front_controller = "{$kb_front_controller|escape:'quotes':'UTF-8'}";
    var kb_element_error = "{l s='Field is not valid' mod='kbcustomfield'}";
    var kb_not_valid = "{l s='Field is not valid' mod='kbcustomfield'}";
    var file_not_empty = "{l s='File cannot be empty' mod='kbcustomfield'}";
    var field_not_empty = "{l s='Field cannot be empty' mod='kbcustomfield'}";
    var file_format_error = "{l s='File is not in supported format' mod='kbcustomfield'}";

    $('.std').attr('enctype', 'multipart/form-data');
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
*}