{if count($errors) >0}
    <div class="alert alert-danger"> {l s='Total' mod='kbcustomfield'}: {$errors|count|escape:'htmlall':'UTF-8'} {l s='errors' mod='kbcustomfield'} <br>
        {foreach from=$errors item=err}
            {$err|escape:'htmlall':'UTF-8'}<br>
        {/foreach}
    </div>
{/if}
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
*}