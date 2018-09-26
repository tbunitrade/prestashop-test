<div class="kb_custom_field_block ">
    {$information_message}{*Variable contains HTML content, escape not required*}
    <div class="panel">
        {foreach $kb_available_section as $key => $section}
            <div class="panel kb_admin_cust_section_{$key|escape:'htmlall':'UTF-8'}">   
                <div class="panel-heading"><i class="icon-users"></i> {$section['label']|escape:'htmlall':'UTF-8'}</div>
                <div class="form-wrapper">
                    <input type="hidden" name="id_customer" value="{$id_customer|escape:'htmlall':'UTF-8'}"></input>
                    {foreach $kb_available_field as $kbfield}
                        {if ($kbfield['type'] == 'text') && ($section['id_section'] == $kbfield['id_section'])}
                            <div class="form-group">
                                <label class="control-label col-lg-3">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-4">
                                    <input type="{if $kbfield['validation'] == 'isEmail'}email{else}text{/if}" {if $kbfield['placeholder'] != ''}placeholder="{$kbfield['placeholder']|escape:'htmlall':'UTF-8'}"{/if} 
                                           name='{$kbfield['field_name']|escape:'htmlall':'UTF-8'}' id='{$kbfield['html_id']|escape:'htmlall':'UTF-8'}' class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'} 
                                           form-control"{if $kbfield['required']}required="required"{/if} value="{if isset($kbfield['customer_value'])}{$kbfield['customer_value']|escape:'htmlall':'UTF-8'}{/if}" {if $kbfield['editable'] != 1} disabled{/if}  {if ($kbfield['max_length'] != '') && ($kbfield['max_length'] > 0)} maxlength="{$kbfield['max_length']|escape:'htmlall':'UTF-8'}"{/if} {if $kbfield['min_length'] != ''}minlength="{$kbfield['min_length']|escape:'htmlall':'UTF-8'}"{/if}/>
                                    {if $kbfield['error_msg'] != ''}<span class="error_message" style="display:none;">{$kbfield['error_msg']|escape:'htmlall':'UTF-8'}</span>{/if}
                                    {*                            <input type="hidden" name="kb_register_newsletter" value="{if $kbfield['register_for_newsletter']}1{else}0{/if}"/>*}
                                </div>
                            </div>
                        {/if}
                        {if ($kbfield['type'] == 'select') && ($section['id_section'] == $kbfield['id_section'])}
                            <div class="form-group">
                                <label class="control-label col-lg-3">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-4">
                                    <select name='{$kbfield['field_name']|escape:'htmlall':'UTF-8'}{if $kbfield['multiselect']}[]{/if}' id='{$kbfield['html_id']|escape:'htmlall':'UTF-8'}' class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'} form-control"
                                            {if $kbfield['multiselect']} multiple{/if} value="{if isset($kbfield['customer_value'])}{$kbfield['customer_value']|escape:'htmlall':'UTF-8'}{/if}" {if $kbfield['editable'] != 1} disabled{/if}>
                                        {if $kbfield['value'] != ''}
                                            {foreach $kbfield['value']|json_decode:1 as $field_value}
                                                <option value="{$field_value['option_value']|escape:'htmlall':'UTF-8'}"
                                                        {if isset($kbfield['customer_value'])}
                                                            {if is_array($kbfield['customer_value']|json_decode:1)}
                                                                {if in_array($field_value['option_value'],$kbfield['customer_value']|json_decode:1)}
                                                                    selected
                                                                {/if}
                                                            {else if $kbfield['customer_value']|json_decode:1 == $field_value['option_value']}
                                                                selected
                                                            {/if}
                                                        {elseif isset($kbfield['default_value'])}
                                                            {if $kbfield['default_value'] != ""}
                                                                {if isset($kbfield['default_value'][0]) && isset($kbfield['default_value'][0]['option_value'])}
                                                                    {if $kbfield['default_value'][0]['option_value'] == $field_value['option_value']}
                                                                        selected
                                                                    {/if}
                                                                {/if}
                                                            {/if}

                                                        {/if}>{$field_value['option_label']|escape:'htmlall':'UTF-8'}</option>
                                            {/foreach}
                                        {/if}        
                                    </select>
                                </div>
                            </div>
                        {/if}
                        {if ($kbfield['type'] == 'radio') && ($section['id_section'] == $kbfield['id_section'])}
                            <div class="form-group">
                                <label class="control-label col-lg-3">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-9">
                                    {if $kbfield['value'] != ''}
                                        {foreach $kbfield['value']|json_decode:1 as $field_value}
                                            <div class="radio t">
                                                <label>
                                                    <input type="radio" name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}" id="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}" class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'}"value="{$field_value['option_value']|escape:'htmlall':'UTF-8'}"
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
                                                           {/if} 
                                                           {if $kbfield['editable'] != 1} disabled{/if}/>
                                                    {$field_value['option_label']|escape:'htmlall':'UTF-8'}
                                                </label>
                                            </div>

                                        {/foreach}
                                    {/if}
                                </div>
                            </div>
                        {/if}
                        {if ($kbfield['type'] == 'checkbox') && ($section['id_section'] == $kbfield['id_section'])}
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-9">
                                    {if $kbfield['value'] != ''}
                                        {foreach $kbfield['value']|json_decode:1 as $field_value}
                                            <div class="checkbox">
                                                <label for="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}">
                                                    <input type="checkbox" name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}" id="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}" class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'}"value="{$field_value['option_value']|escape:'htmlall':'UTF-8'}"
                                                           {if isset($kbfield['customer_value'])}{if is_array($kbfield['customer_value']|json_decode:1)}
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
                                                           {/if}
                                                           {if $kbfield['editable'] != 1} disabled{/if}/>
                                                    {$field_value['option_label']|escape:'htmlall':'UTF-8'}
                                                </label>
                                            </div>

                                        {/foreach}
                                    {/if}
                                </div>
                            </div>

                        {/if}
                        {if ($kbfield['type'] == 'textarea') && ($section['id_section'] == $kbfield['id_section'])}
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-9">
                                    <textarea {if $kbfield['placeholder'] != ''}placeholder="{$kbfield['placeholder']|escape:'htmlall':'UTF-8'}"{/if} 
                                                                                name='{$kbfield['field_name']|escape:'htmlall':'UTF-8'}' id='{$kbfield['html_id']|escape:'htmlall':'UTF-8'}' class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'} 
                                                                                {if $kbfield['validation'] != ''}validate{/if}  form-control" {if $kbfield['required']}required="required"{/if}
                                                                                {if $kbfield['editable'] != 1} disabled{/if} {if ($kbfield['max_length'] != '') && ($kbfield['max_length'] > 0)} maxlength="{$kbfield['max_length']|escape:'htmlall':'UTF-8'}"{/if} {if $kbfield['min_length'] != ''}minlength="{$kbfield['min_length']}"{/if}>{if isset($kbfield['customer_value'])}{$kbfield['customer_value']|escape:'htmlall':'UTF-8'}{/if}</textarea>
                                    {if $kbfield['error_msg'] != ''}<span class="error_message" style="display:none;">{$kbfield['error_msg']|escape:'htmlall':'UTF-8'}</span>{/if}
                                </div>
                                {*                    {if $kbfield['description'] != ''}<span class="form-info">({$kbfield['description']})</span>{/if}</br>*}

                            </div>
                        {/if}
                        {if ($kbfield['type'] == 'date') && ($section['id_section'] == $kbfield['id_section'])}
                            <script>
                                $('input[name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}"]').datepicker();
                                $('input[name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}"]').datepicker();
                                $('input[name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}"]').on('keypress keydown keyup', function (e) {
                                    e.preventDefault();
                                    return false;
                                });
                            </script>
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-4">
                                    <input type="text" {if $kbfield['placeholder'] != ''}placeholder="{$kbfield['placeholder']|escape:'htmlall':'UTF-8'}"{/if} 
                                           name='{$kbfield['field_name']|escape:'htmlall':'UTF-8'}' id='{$kbfield['html_id']|escape:'htmlall':'UTF-8'}' class="kbfield {$kbfield['html_class']|escape:'htmlall':'UTF-8'} date-input form-control"{if $kbfield['required']}required="required"{/if}
                                           {if $kbfield['validation'] != ''} data-validate="{$kbfield['validation']|escape:'htmlall':'UTF-8'}"{/if} value="{if isset($kbfield['customer_value'])}{$kbfield['customer_value']|escape:'htmlall':'UTF-8'}{/if}" {if $kbfield['editable'] != 1} disabled{/if}/>
                                    {if $kbfield['error_msg'] != ''}<span class="error_message" style="display:none;">{$kbfield['error_msg']|escape:'htmlall':'UTF-8'}</span>{/if}
                                </div>
                            </div>

                        {/if}
                        {if ($kbfield['type'] == 'datetime') && ($section['id_section'] == $kbfield['id_section'])}
                            <script>
                                $('input[name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}"]').datetimepicker();
                                $('input[name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}"]').datepicker();
                                $('input[name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}"]').on('keypress keydown keyup', function (e) {
                                    e.preventDefault();
                                    return false;
                                });
                            </script>
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-4">
                                    <input type="text" {if $kbfield['placeholder'] != ''}placeholder="{$kbfield['placeholder']|escape:'htmlall':'UTF-8'}"{/if} 
                                           name='{$kbfield['field_name']|escape:'htmlall':'UTF-8'}' id='{$kbfield['html_id']|escape:'htmlall':'UTF-8'}' class="kbfield kbfielddatetime {$kbfield['html_class']|escape:'htmlall':'UTF-8'} datetime-input form-control"{if $kbfield['required']}required="required"{/if}
                                           {if $kbfield['validation'] != ''} data-validate="{$kbfield['validation']|escape:'htmlall':'UTF-8'}"{/if}  value="{if isset($kbfield['customer_value'])}{$kbfield['customer_value']|escape:'htmlall':'UTF-8'}{/if}" {if $kbfield['editable'] != 1} disabled{/if}/>
                                    {if $kbfield['error_msg'] != ''}<span class="error_message" style="display:none;">{$kbfield['error_msg']|escape:'htmlall':'UTF-8'}</span>{/if}
                                </div>

                            </div>
                        {/if}
                        {if ($kbfield['type'] == 'file') && ($section['id_section'] == $kbfield['id_section'])}                   
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}">
                                    <span  {if $kbfield['description'] != ''}class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="{$kbfield['description']|escape:'htmlall':'UTF-8'}"{else}class="control-label"{/if}>{$kbfield['label']|escape:'htmlall':'UTF-8'}</span>
                                </label>
                                <div class="col-lg-4">
                                    {if isset($kbfield['customer_value'])}
                                        <div>
                                            {if is_array($kbfield['customer_value']|json_decode:1) && $kbfield['customer_value'] != ''} 
                                                <a style="padding: 4px;margin-bottom: 6px" class="btn btn-warning" href="{$kb_front_controller|escape:'quotes':'UTF-8'}?downloadFile=true&id_field={$kbfield['id_field']|escape:'htmlall':'UTF-8'}&id_customer={$id_customer|escape:'htmlall':'UTF-8'}" ><i class="icon-download"></i> {l s='Download File' mod='kbcustomfield'}</a>
                                            {/if}
                                        </div>
                                    {/if}
                                    {if $kbfield['editable']}
                                        <input id="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}" {if $kbfield['required']}required="required"{/if} class="kbfield kbfiletype {$kbfield['html_class']|escape:'htmlall':'UTF-8'} hide" type="file" name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}">
                                        <div class="dummyfile input-group">
                                            <span class="input-group-addon"><i class="icon-file"></i></span>
                                            <input id="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-name" type="text" name="{$kbfield['field_name']|escape:'htmlall':'UTF-8'}" readonly>
                                            <span class="input-group-btn">
                                                <button id="{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-selectbutton" type="button" name="submit{$kbfield['html_id']|escape:'htmlall':'UTF-8'}" class="btn btn-default">
                                                    <i class="icon-folder-open"></i> {l s='Add file' mod='kbcustomfield'}				</button>
                                            </span>
                                        </div>
                                        {if $kbfield['file_extension'] != ''} <span class="form-info ">{l s='File must be ' mod='kbcustomfield'}<span class="file_extension">{$kbfield['file_extension']|escape:'htmlall':'UTF-8'}</span></span></br>{/if}
                                        {/if}
                                </div>
                            </div>
                            <script type="text/javascript">

                                $(document).ready(function () {

                                    $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-selectbutton').click(function (e) {
                                        $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}').trigger('click');
                                    });

                                    $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-name').click(function (e) {
                                        $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}').trigger('click');
                                    });

                                    $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-name').on('dragenter', function (e) {
                                        e.stopPropagation();
                                        e.preventDefault();
                                    });

                                    $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-name').on('dragover', function (e) {
                                        e.stopPropagation();
                                        e.preventDefault();
                                    });

                                    $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-name').on('drop', function (e) {
                                        e.preventDefault();
                                        var files = e.originalEvent.dataTransfer.files;
                                        $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}')[0].files = files;
                                        $(this).val(files[0].name);
                                    });

                                    $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}').change(function (e) {
                                        if ($(this)[0].files !== undefined)
                                        {
                                            var files = $(this)[0].files;
                                            var name = '';

                                            $.each(files, function (index, value) {
                                                name += value.name + ', ';
                                            });

                                            $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-name').val(name.slice(0, -2));
                                        } else // Internet Explorer 9 Compatibility
                                        {
                                            var name = $(this).val().split(/[\\/]/);
                                            $('#{$kbfield['html_id']|escape:'htmlall':'UTF-8'}-name').val(name[name.length - 1]);
                                        }
                                    });


                                });
                            </script>               
                        {/if}
                    {/foreach}
                </div>

            </div>
        {/foreach}
        <div class="panel-footer">
            <button type="submit" value="1" id="kb_custom_customer_submit_btn" name="submitAddKbCustomCustomer" class="btn btn-default pull-right">
                <i class="process-icon-save"></i> Save
            </button>
        </div>
    </div>
</div>
<script>
    var kb_custom_customer_link = "{$kb_custom_customer_link|escape:'quotes':'UTF-8'}";
    var kb_not_valid = "{l s='Field is not valid' mod='kbcustomfield'}";
    var file_not_empty = "{l s='File cannot be empty' mod='kbcustomfield'}";
    var field_not_empty = "{l s='Field cannot be empty' mod='kbcustomfield'}";
    var file_format_error = "{l s='File is not in supported format' mod='kbcustomfield'}";
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