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

class KbCustomFieldkbadditionalinfoModuleFrontController extends ModuleFrontController
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
    
    public function setMedia()
    {
        parent::setMedia();
        $this->context->controller->addCSS($this->getKbModuleDir() . 'views/css/front/kb_front.css');
        $this->context->controller->addJS($this->getKbModuleDir() . 'views/js/velovalidation.js');
        $this->context->controller->addJS($this->getKbModuleDir() . 'views/js/front/validation_front.js');
        $this->context->controller->addJQueryUi('ui.datepicker');
        $this->context->controller->addJQueryUi('ui.slider');
    }
    
    protected function getKbTemplateDir()
    {
        return $this->getKbModuleDir().'views/templates/front/';
    }

    protected function getKbModuleDir()
    {
        return _PS_MODULE_DIR_.'kbcustomfield/';
    }
    
    public function initContent()
    {
        $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        if ($kbconfig['enable']) {
            $kb_available_field = KbCustomFields::getAvailableCustomFields();
            $id_customer = $this->context->customer->id;
            $customer_field_value = KbCustomFieldCustomerMapping::getValueByCustomerID($id_customer);
            $kb_final_field = array();
            $kb_field_value = array();
            if (is_array($customer_field_value) && !empty($customer_field_value)) {
                foreach ($customer_field_value as $cus_key => $customer_value) {
                    $kb_field_value[$customer_value['id_field']] = $customer_value;
                }
            }
            foreach ($kb_available_field as $key => $avialable_field) {
                if (is_array($kb_field_value) && !empty($kb_field_value)) {
                    if (isset($kb_field_value[$avialable_field['id_field']]['id_field'])) {
                        if ($kb_field_value[$avialable_field['id_field']]['id_field'] == $avialable_field['id_field']) {
                            $kb_final_field[$key] = $avialable_field;
                            $kb_final_field[$key]['customer_value'] = $kb_field_value[$avialable_field['id_field']]['value'];
                        } else {
                            $kb_final_field[$key] = $avialable_field;
                            $kb_final_field[$key]['customer_value'] = '';
                        }
                    } else {
                        $kb_final_field[$key] = $avialable_field;
                    }
                } else {
                    $kb_final_field = $kb_available_field;
                }
            }
            $section = KbCustomFieldSection::getAvailableCustomSection();
            $kb_available_section = array();
            foreach ($section as $sec) {
                $count = KbCustomFieldSection::isFieldAvailableBySection($sec['id_section']);
                if ($count >= 1) {
                    $kb_available_section[] = $sec;
                }
            }


            
            $this->context->smarty->assign('kb_front_controller', $this->context->link->getModuleLink('kbcustomfield', 'kbcustomcustomer'));
            
            $this->context->smarty->assign('kb_available_field', $kb_final_field);
            $this->context->smarty->assign('kb_available_section', $kb_available_section);
            $this->context->smarty->assign('kb_custom_css', Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS_CSS'), true));
            $this->context->smarty->assign('id_customer', $id_customer);
            $this->setTemplate('display_addition_info.tpl');
//            return $this->display(__FILE__, 'views/templates/hook/field_display_identity.tpl');
        }
        parent::initContent();
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
        if (Tools::isSubmit('submitKbAdditional')) {
            $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
            if ($kbconfig['enable']) {
                $id_customer = $this->context->customer->id;
                $availableFields = KbCustomFields::getAvailableCustomFields();
                foreach ($availableFields as $available) {
                    $id_field = KbCustomFields::getCustomFieldIDbyName($available['field_name']);
                    $kbcustomfield = new KbCustomFields($id_field);
                    $file = '';
                    if (($kbcustomfield->type == 'select') || ($kbcustomfield->type == 'checkbox') || ($kbcustomfield->type == 'radio')) {
                        $field_value = Tools::jsonEncode(Tools::getValue($kbcustomfield->field_name));
                    } elseif ($kbcustomfield->type == 'file') {
                        if (isset($_FILES[$kbcustomfield->field_name])) {
                            $file = $_FILES[$kbcustomfield->field_name];

                            if (($file['error'] == 0) && !empty($file['name'])) {
                                $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
                                $allowed_extension = preg_split('/[\s*,\s*]*,+[\s*,\s*]*/', $kbcustomfield->file_extension);
                                if (in_array($file_extension, $allowed_extension)) {
                                    $path = _PS_MODULE_DIR_ . $this->name . '/views/upload/' . time() . '.' . $file_extension;
                                    move_uploaded_file(
                                        $_FILES[$kbcustomfield->field_name]['tmp_name'],
                                        $path
                                    );
                                    chmod(_PS_MODULE_DIR_ . $this->module->name . '/views/upload/' . time() . '.' . $file_extension, 0777);
//                                    $file_path = $this->getModuleDirUrl() . 'kbcustomfield/views/upload/' . time() . '.' . $file_extension;
                                    $field_value = Tools::jsonEncode(
                                        array(
                                            'path' => $path,
                                            'type' => $file['type'],
                                            'extension' => $file_extension
                                        )
                                    );
                                } else {
                                    $field_value = '';
                                }
                            } else {
                                $field_value = '';
                            }
                        }
                    } elseif ($kbcustomfield->type == 'text' || $kbcustomfield->type == 'textarea' || $kbcustomfield->type == 'date' || $kbcustomfield->type == 'datetime') {
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
                        if ($kbcustomfield->editable) {
                            $kbmapping->value = $field_value;
                        } else {
                            $kbmapping->value = $kbmapping->value;
                        }
                        $kbmapping->id_employee = $id_employee;
                        $kbmapping->id_customer = $id_customer;
                        if ($kbcustomfield->editable) {
                            if ($kbmapping->save()) {
//                                Tools::redirect(Context::getContext()->link->getPageLink('my-account', true));
                            } else {
                                $this->context->cookie->__set(
                                    'kb_redirect_error',
                                    $this->l('Something went wrong while updating the information. Please try again.')
                                );
//                                Tools::redirect(Context::getContext()->link->getPageLink('my-account', true));
                            }
                        }
                    }
                }
                Tools::redirect(Context::getContext()->link->getPageLink('my-account', true));
            }
        }
    }
    
    /*
     * Function to get the URL upto module directory
     */
    private function getModuleDirUrl()
    {
        $module_dir = '';
        if ($this->checkSecureUrl()) {
            $module_dir = _PS_BASE_URL_SSL_ . __PS_BASE_URI__ . str_replace(_PS_ROOT_DIR_ . '/', '', _PS_MODULE_DIR_);
        } else {
            $module_dir = _PS_BASE_URL_ . __PS_BASE_URI__ . str_replace(_PS_ROOT_DIR_ . '/', '', _PS_MODULE_DIR_);
        }
        return $module_dir;
    }

    /*
     * Function to get the URL of the store, this function also checks if the store is a secure store or not and returns the URL accordingly
     */
    private function checkSecureUrl()
    {
        $custom_ssl_var = 0;
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS'] == 'on') {
                $custom_ssl_var = 1;
            }
        } else if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            $custom_ssl_var = 1;
        }
        if ((bool) Configuration::get('PS_SSL_ENABLED') && $custom_ssl_var == 1) {
            return true;
        } else {
            return false;
        }
    }
}
