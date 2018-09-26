<div class="kb_custom_customer_info">
    <div class="panel">
    {foreach $kb_available_section as $key => $section}
        <div class="panel kb_admin_info_section_{$key|escape:'htmlall':'UTF-8'}">
            <div class="panel-heading"><i class="icon-pencil-square"></i> {$section['label']|escape:'htmlall':'UTF-8'}</div>
            <div class="form-wrapper">
                <div class="form-horizontal">
                    {if is_array($kb_available_field) && !empty($kb_available_field)}
                        {foreach $kb_available_field as $kbfield}
                            {if $section['id_section'] == $kbfield['id_section']}
                            <div class='row'>
                                <label class="control-label col-lg-3">{$kbfield['label']|escape:'htmlall':'UTF-8'}</label>
                                <div class="col-lg-9">
                                    <p class="form-control-static">
                                        {if ($kbfield['type'] == 'select') || ($kbfield['type'] == 'radio') || ($kbfield['type'] == 'checkbox')}
                                            {if $kbfield['value'] != ''}
                                                {foreach $kbfield['value']|json_decode:1 as $field_value}
                                                    {if isset($kbfield['customer_value'])}
                                                        {if is_array($kbfield['customer_value']|json_decode:1)}
                                                            {if in_array($field_value['option_value'],$kbfield['customer_value']|json_decode:1)}
                                                                {$field_value['option_label']|escape:'htmlall':'UTF-8'}</br>
                                                            {/if}
                                                            {else}
                                                                {if $field_value['option_value']  == $kbfield['customer_value']|json_decode:1}
                                                                    {$field_value['option_label']|escape:'htmlall':'UTF-8'}</br>
                                                                 {/if}
                                                        {/if}
                                                    {/if}
                                                {/foreach}
                                            {/if}
                                            {else if $kbfield['type'] == 'file'}
                                                {if isset($kbfield['customer_value'])}
                                                    {if is_array($kbfield['customer_value']|json_decode:1) && $kbfield['customer_value'] != ''} 
                                                        <a href="{$module_path|escape:'quotes':'UTF-8'}&downloadFile=true&id_field={$kbfield['id_field']|escape:'htmlall':'UTF-8'}&id_customer={$id_customer|escape:'htmlall':'UTF-8'}" >{l s='Download File' mod='kbcustomfield'}</a>
                                                    {/if}
                                                {else}
                                                    -
                                                {/if}
                                        {else}
                                        {if isset($kbfield['customer_value'])}
                                            {$kbfield['customer_value']|escape:'htmlall':'UTF-8'|nl2br}
                                        {else}
                                            -
                                        {/if}
                                    {/if}
                                </p>
                            </div>
                        </div>
                                {/if}
                    {/foreach}

                {else}
                    <p class="text-muted text-center">{l s='Customer has not added the content' mod='kbcustomfield'}</p>
                {/if}
            </div>
        </div>
    </div>
            {/foreach}
</div>
</div>
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