<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * @author    knowband.com <support@knowband.com>
 * @copyright 2017 Knowband
 * @license   see file: LICENSE.txt
 * @category  PrestaShop Module
 *
 *
*/

class KbCustomFieldkbcustomcustomerModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    
    /**
     * Initializes front controller: sets smarty variables,
     * class properties, redirects depending on context, etc.
     *
     * @throws PrestaShopException
     */
    public function init()
    {
        parent::init();
    }
    
    /**
     * Method that is executed after init() and checkAccess().
     * Used to process user input.
     *
     * @see Controller::run()
     */
    public function postProcess()
    {
        /*
         * Function to download uploaded file
         */
        if (Tools::getValue('downloadFile')) {
            if (Tools::getValue('id_field') != '') {
                $kbcustom = new Kbcustomfield();
                $kbcustom->downloadFile(Tools::getValue('id_field'));
            }
        }
        if (Tools::getValue('customer_identity_submit')) {
            $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
            if ($kbconfig['enable']) {
                $customer = new Customer();
                $new_customer = $customer->getByEmail(Tools::getValue('email'));
                $id_customer = $new_customer->id;
                $availableFields = KbCustomFields::getAvailableCustomFields();
                foreach ($availableFields as $available) {
                    $id_field = KbCustomFields::getCustomFieldIDbyName($available['field_name']);
                    $kbcustomfield = new KbCustomFields($id_field);
                    if (($kbcustomfield->type == 'select') || ($kbcustomfield->type == 'checkbox') || ($kbcustomfield->type == 'radio')) {
                        $field_value = Tools::jsonEncode(Tools::getValue($kbcustomfield->field_name));
                    } elseif ($kbcustomfield->type == 'file') {
                    } else {
                        $field_value = Tools::getValue($kbcustomfield->field_name);
                    }
                    $id_employee = 0;
                    if ($field_value != '') {
                        if (!empty($id_customer) && $id_customer != '') {
                            $id_mapping = KbCustomFieldCustomerMapping::getIDByCustomerAndField($id_customer, $id_field);
                            $kbmapping = new KbCustomFieldCustomerMapping($id_mapping);
                        } else {
                            $kbmapping = new KbCustomFieldCustomerMapping();
                        }
                        $kbmapping->id_field = $id_field;
                        $kbmapping->value = $field_value;
                        $kbmapping->id_employee = $id_employee;
                        $kbmapping->id_customer = $id_customer;
                        if ($kbcustomfield->editable) {
                            if ($kbmapping->save()) {
                                $this->context->cookie->__set(
                                    'kb_redirect_success',
                                    $this->module->l('Custom Information updated successfully', 'kbcustomcustomer')
                                );
                            } else {
                                $this->context->cookie->__set(
                                    'kb_redirect_error',
                                    $this->module->l('Something went wrong while updating the information. Please try again.', 'kbcustomcustomer')
                                );
                            }
                        }
                    }
                }
            }
            die;
        }
    }
}
