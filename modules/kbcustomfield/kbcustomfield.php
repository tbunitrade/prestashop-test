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

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_ . 'kbcustomfield/classes/KbCustomFields.php');
include_once(_PS_MODULE_DIR_ . 'kbcustomfield/classes/KbCustomFieldCustomerMapping.php');
include_once(_PS_MODULE_DIR_ . 'kbcustomfield/classes/KbCustomFieldSection.php');

class Kbcustomfield extends Module
{

    const MODEL_FILE = 'model.sql';

    public function __construct()
    {
        $this->name = 'kbcustomfield';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'knowband';
        $this->module_key = '12ec7a2c9a9f4ef42489b8afdb1f96dd';
        $this->need_instance = 1;
        $this->bootstrap = true;

        parent::__construct();
        $this->displayName = $this->l('Knowband Custom Fields Free Version');
        $this->description = $this->l('Add additional fields in Customer Registration and customer account page');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /*
     * To install Database Table during install of the module
     */

    protected function installModel()
    {
        $installation_error = false;
        if (!file_exists(_PS_MODULE_DIR_ . $this->name . '/' . self::MODEL_FILE)) {
            $this->custom_errors[] = $this->l('Model installation file not found.');
            $installation_error = true;
        } elseif (!is_readable(_PS_MODULE_DIR_ . $this->name . '/' . self::MODEL_FILE)) {
            $this->custom_errors[] = $this->l('Model installation file is not readable.');
            $installation_error = true;
        } elseif (!$sql = Tools::file_get_contents(_PS_MODULE_DIR_ . $this->name . '/' . self::MODEL_FILE)) {
            $this->custom_errors[] = $this->l('Model installation file is empty.');
            $installation_error = true;
        }

        if (!$installation_error) {
            /*
             * Replace _PREFIX_ and ENGINE_TYPE with default Prestashop values
             */
            $sql = str_replace(
                array('_PREFIX_', 'ENGINE_TYPE'),
                array(_DB_PREFIX_, _MYSQL_ENGINE_),
                $sql
            );
            $sql = preg_split("/;\s*[\r\n]+/", trim($sql));
            foreach ($sql as $query) {
                if (!Db::getInstance(_PS_USE_SQL_SLAVE_)->execute(trim($query))) {
                    $installation_error = true;
                }
            }
        }
        if ($installation_error) {
            return false;
        } else {
            return true;
        }
    }

    /*
     * Install function to install module
     */

    public function install()
    {
        /*
         * Create Database table and if there is some problem then display error message
         */
        if (!$this->installModel()) {
            $this->custom_errors[] = $this->l('Error occurred while installing/upgrading modal.');
            return false;
        }

        /*
         * Register various hook functions
         */
        if (!parent::install() ||
                !$this->registerHook('header') ||
                !$this->registerHook('actionCustomerAccountAdd') ||
                !$this->registerHook('displayBackOfficeHeader') ||
                !$this->registerHook('displayCustomerIdentityForm') ||
                !$this->registerHook('displayCustomerAccount') ||
                !$this->registerHook('displayAdminCustomersForm') ||
                !$this->registerHook('displayAdminCustomers') ||
                !$this->registerHook('displayCustomerAccount') ||
                !$this->registerHook('displayCustomerAccountForm')) {
            return false;
        }

        $this->installKbModuleTabs();

        /*
         * Convert array of the default value of the configuration
         *  setting into jsonEncode and then save
         *  the value in the Configuration table
         */
        $defaultsettings = Tools::jsonEncode($this->getDefaultSettings());
        Configuration::updateValue('KB_CUSTOM_FIELDS', $defaultsettings);
        Configuration::updateValue('KB_CUSTOM_FIELDS_CSS', '');
        return true;
    }

    /*
     * Function to uninstall the module with 
     * unregister various hook and 
     * also delete the configuration setting
     */

    public function uninstall()
    {
        if (!parent::uninstall() ||
                !$this->unregisterHook('actionCustomerAccountAdd') ||
                !$this->unregisterHook('displayAdminCustomers') ||
                !$this->unregisterHook('displayBackOfficeHeader') ||
                !$this->unregisterHook('displayCustomerIdentityForm') ||
                !$this->unregisterHook('displayCustomerAccountForm') ||
                !Configuration::deleteByName('KB_CUSTOM_FIELDS')) {
            return false;
        }
        /*
         * Uninstall admin tabs
         */
        $this->uninstallKbModuleTabs();
        return true;
    }

    /*
     * Function to set the default configuration setting
     */
    private function getDefaultSettings()
    {
        $settings = array(
            'enable' => 0,
        );
        return $settings;
    }
    
    /*
     * Function to install admin tabs
     */
    protected function installKbModuleTabs()
    {
        $lang = Language::getLanguages();
        $tab = new Tab();
        $tab->class_name = 'AdminKbCustomFields';
        $tab->module = 'kbcustomfield';
        $tab->active = 0;
        $tab->id_parent = 0;
        foreach ($lang as $l) {
            $tab->name[$l['id_lang']] = $this->l('Knowband Custom Fields');
        }
        $tab->save();
        $tab2 = new Tab();
        $tab2->class_name = 'AdminKbCustomFieldSection';
        $tab2->module = 'kbcustomfield';
        $tab2->id_parent = 0;
        $tab2->active = 0;
        foreach ($lang as $l) {
            $tab2->name[$l['id_lang']] = $this->l('Knowband Custom Field Section');
        }
        $tab2->save();

        return true;
    }

    /*
    * Function to uninstall admin tabs
    */
    protected function uninstallKbModuleTabs()
    {
        $parentTab = new Tab(Tab::getIdFromClassName('KbCustomFieldTab'));
        $parentTab->delete();

        $admin_menus = array(
            array(
                'class_name' => 'AdminKbCustomFields',
                'active' => 1,
            ),
            array(
                'class_name' => 'AdminKbCustomFieldSection',
                'active' => 1,
            ),
        );

        foreach ($admin_menus as $menu) {
            $sql = 'SELECT id_tab FROM `' . _DB_PREFIX_ . 'tab` Where class_name = "' . pSQL($menu['class_name']) . '"
				AND module = "' . pSQL($this->name) . '"';
            $id_tab = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($sql);
            $tab = new Tab($id_tab);
            $tab->delete();
        }

        return true;
    }

    /*
     * Function to create module panel
     */
    public function getContent()
    {
        $errors = array();

        if (Tools::getValue('downloadFile')) {
            if (Tools::getValue('id_field') != '') {
                $this->downloadFile(Tools::getValue('id_field'));
            }
        }

        /*
         * Function to submit the configuration setting values,
         * first by validating the form data and then save into the DB
         */
        if (Tools::isSubmit('configsubmit' . $this->name)) {
            $kbcustomfield = Tools::getValue('kbcustomfield');
            $kbcustomss = Tools::getValue('kb_custom_field_css');
            Configuration::updateValue('KB_CUSTOM_FIELDS', Tools::jsonEncode($kbcustomfield));
            Configuration::updateValue('KB_CUSTOM_FIELDS_CSS', Tools::jsonEncode($kbcustomss));
            $this->context->cookie->__set('kb_redirect_success', $this->l('Configuration successfully updated.'));
            Tools::redirectAdmin(AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'));
        }

        $output = '';
        if (isset($this->context->cookie->kb_redirect_success)) {
            $output .= $this->displayConfirmation($this->context->cookie->kb_redirect_success);
            unset($this->context->cookie->kb_redirect_success);
        }
        /*
         * Fetch configuration settings from the Database and convert them into array
         */
        $this->kb_custom_field_setting = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        /*
         * Fetch css from the Database and convert them into array
         */
        $this->kb_css_setting = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS_CSS'), true);

        /*
         * Persistence the configuration setting form data
         */
        $config_form_data = Tools::getValue('kbcustomfield');
        $config_field_value = array(
            'kbcustomfield[enable]' => isset($config_form_data['enable']) ? $config_form_data['enable'] : $this->kb_custom_field_setting['enable'],
            'kb_custom_field_css' => (Tools::getIsset('kb_custom_field_css')) ? Tools::getValue('kb_custom_field_css') : $this->kb_css_setting,
        );

        /*
         * loop to fetch all language with default language in an array
         */
        $languages = Language::getLanguages(false);
        foreach ($languages as $k => $language) {
            $languages[$k]['is_default'] = ((int) ($language['id_lang'] == $this->context->language->id));
        }
        /*
         * Create configuration setting form
         */
        $this->fields_form = $this->getConfigurationForm();

        /*
         * Create helper form for configuration setting form
         */
        $form = $this->getform($this->fields_form, $languages, $this->l('Configuration'), false, $config_field_value, 'general', 'config');
        $this->context->smarty->assign('form', $form);
        $this->context->smarty->assign('selected_nav', 'config');
        $this->context->smarty->assign(
            'admin_cf_configure_controller',
            $this->context->link->getAdminLink('AdminModules', true)
            . '&configure=' . urlencode($this->name) . '&tab_module=' . $this->tab
            . '&module_name=' . urlencode($this->name)
        );
        $this->context->smarty->assign(
            'admin_cf_section_controller',
            $this->context->link->getAdminLink('AdminKbCustomFieldSection', true)
        );

        $this->context->smarty->assign(
            'admin_cf_field_controller',
            $this->context->link->getAdminLink('AdminKbCustomFields', true)
        );
        $this->context->smarty->assign('firstCall', false);
        $this->context->smarty->assign(
            'free_version',
            $this->context->smarty->fetch(
                _PS_MODULE_DIR_ . $this->name . '/views/templates/admin/free_version.tpl'
            )
        );
        $this->context->smarty->assign(
            'kb_tabs',
            $this->context->smarty->fetch(
                _PS_MODULE_DIR_ . $this->name . '/views/templates/admin/kb_tabs.tpl'
            )
        );

        //Loads JS and CSS
        $this->setKbMedia();

        /*
         * Generate form using Helper class
         */
        $helper = new Helper();
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->override_folder = 'helpers/';
        $helper->base_folder = 'form/';
        $tpl = 'Form_custom.tpl';
        $helper->setTpl($tpl);
        $tpl = $helper->generate();

        $output .= $tpl;
        return $output;
    }

    /*
     * Function to create configuration setting form
     */
    private function getConfigurationForm()
    {
        $form = array(
            'form' => array(
                'id_form' => 'general_configuration_form',
                'legend' => array(
                    'title' => $this->l('Configuration'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'label' => $this->l('Enable/Disable'),
                        'type' => 'switch',
                        'name' => 'kbcustomfield[enable]',
                        'values' => array(
                            array(
                                'value' => 1,
                            ),
                            array(
                                'value' => 0,
                            ),
                        ),
                        'hint' => $this->l('Enable/Disable the plugin')
                    ),
                    array(
                        'label' => $this->l('Custom CSS'),
                        'type' => 'textarea',
                        'name' => 'kb_custom_field_css',
                        'desc' => $this->l('Add CSS without adding <style type=text/css></style>'),
                        'hint' => $this->l('Customize the CSS as per requirement')
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'class' => 'btn btn-default pull-right form_general'
                ),
            ),
        );
        return $form;
    }

    /*
     * Load JS and CSS file
     */
    public function setKbMedia()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/admin/kb_admin.css');
        $this->context->controller->addCSS($this->_path . 'views/css/front/kb_front.css');
        $this->context->controller->addJS($this->_path . 'views/js/admin/kbcustomfield_admin.js');
        $this->context->controller->addJS($this->_path . 'views/js/velovalidation.js');
        $this->context->controller->addJS($this->_path . 'views/js/admin/validation_admin.js');
    }

    /*
     * Function to create Helper Form
     */
    public function getform($field_form, $languages, $title, $show_cancel_button, $field_value, $id, $action)
    {
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->fields_value = $field_value;
        $helper->name_controller = $this->name;
        $helper->languages = $languages;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->default_form_language = $this->context->language->id;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->title = $title;
        if ($id == 'general') {
            $helper->show_toolbar = true;
        } else {
            $helper->show_toolbar = false;
        }
        $helper->table = $id;
        $helper->firstCall = true;
        $helper->toolbar_scroll = true;
        $helper->show_cancel_button = $show_cancel_button;
        $helper->submit_action = $action . 'submit' . $this->name;
        return $helper->generateForm(array('form' => $field_form));
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
     * Function to get the URL of the store,
     * this function also checks if the store
     * is a secure store or not and returns the URL accordingly
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

    /*
     * Function to display Custom Fields in the Registration Page
     */
    public function hookDisplayCustomerAccountForm()
    {
        $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        if ($kbconfig['enable']) {
            $this->setKbMedia();
            $section = KbCustomFieldSection::getAvailableCustomSection();
            $kb_available_section = array();
            foreach ($section as $sec) {
                $count = KbCustomFieldSection::isFieldAvailableBySection($sec['id_section']);
                if ($count >= 1) {
                    $kb_available_section[] = $sec;
                }
            }
            $kb_available_field =  KbCustomFields::getAvailableCustomFields();
            $kb_final_field = array();
            foreach ($kb_available_field as $key => $avialable_field) {
                if (!empty($avialable_field) && is_array($avialable_field)) {
                    $avialable_field['default_value'] = Tools::jsonDecode($avialable_field['default_value'], true);
                }
                $kb_final_field[] = $avialable_field;
            }
            $this->context->controller->addJQueryUi('ui.datepicker');
            $this->context->controller->addJQueryUi('ui.slider');
            $this->context->controller->addJS($this->_path . 'views/js/front/validation_front.js');
            $this->context->smarty->assign('kb_front_controller', $this->context->link->getModuleLink('kbcustomfield', 'kbcustomcustomer'));
            $this->context->smarty->assign('kb_available_field', $kb_final_field);
            $this->context->smarty->assign('kb_custom_css', Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS_CSS'), true));
            $this->context->smarty->assign('kb_available_section', $kb_available_section);
            return $this->display(__FILE__, 'views/templates/hook/field_display_front.tpl');
        }
    }

    /*
     * Function to save the custom field
     * values when customer is created in the frontend
     */
    public function hookActionCustomerAccountAdd($params)
    {
        $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        if ($kbconfig['enable']) {
           
            $newCustomer = $params['newCustomer'];
            $availableFields = KbCustomFields::getAvailableCustomFields();
            foreach ($availableFields as $available) {
                $id_field = KbCustomFields::getCustomFieldIDbyName($available['field_name']);
                $kbcustomfield = new KbCustomFields($id_field);
                if (($kbcustomfield->type == 'select') || ($kbcustomfield->type == 'checkbox') || ($kbcustomfield->type == 'radio')) {
                    $field_value = Tools::jsonEncode(Tools::getValue($kbcustomfield->field_name));
                } elseif ($kbcustomfield->type == 'file') {
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
                            chmod(_PS_MODULE_DIR_ . $this->name . '/views/upload/' . time() . '.' . $file_extension, 0777);
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
                } elseif (($kbcustomfield->type == 'text' ||
                        $kbcustomfield->type == 'textarea' ||
                        $kbcustomfield->type == 'date' ||
                        $kbcustomfield->type == 'datetime')) {
                    $field_value = Tools::getValue($kbcustomfield->field_name);
                }
                $id_customer = $newCustomer->id;
                $id_employee = 0;
                if ($field_value != '') {
                    $kbmapping = new KbCustomFieldCustomerMapping();
                    $kbmapping->id_field = $id_field;
                    $kbmapping->value = $field_value;
                    $kbmapping->id_employee = $id_employee;
                    $kbmapping->id_customer = $id_customer;
                    if ($kbmapping->add()) {
                    }
                }
            }
        }
    }

    /*
     * Function to display Custom Field
     * in Admin Customer Edit Page
     */
    public function hookDisplayAdminCustomersForm($parms)
    {
        $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        if ($kbconfig['enable']) {
            if (Tools::getValue('id_customer')) {
                $output = '';
                if (isset($this->context->cookie->kb_redirect_error)) {
                    $output .= $this->displayError($this->context->cookie->kb_redirect_error);
                    unset($this->context->cookie->kb_redirect_error);
                }

                if (isset($this->context->cookie->kb_redirect_success)) {
                    $output .= $this->displayConfirmation($this->context->cookie->kb_redirect_success);
                    unset($this->context->cookie->kb_redirect_success);
                }
                $this->setKbMedia();
                $id_customer = Tools::getValue('id_customer');
                $kb_available_field = KbCustomFields::getAvailableCustomFields();
                $customer_field_value = KbCustomFieldCustomerMapping::getValueByCustomerID($id_customer);
                $kb_final_field = array();
                $kb_field_value = array();
                if (is_array($customer_field_value) && !empty($customer_field_value)) {
                    foreach ($customer_field_value as $cus_key => $customer_value) {
                        $kb_field_value[$customer_value['id_field']] = $customer_value;
                    }
                }
                foreach ($kb_available_field as $key => $avialable_field) {
                    if (!empty($avialable_field) && is_array($avialable_field)) {
                        $avialable_field['default_value'] = Tools::jsonDecode($avialable_field['default_value'], true);
                    }
                    
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
                $this->context->smarty->assign('kb_custom_customer_link', $this->context->link->getAdminLink('AdminKbCustomFields', true));
                $this->context->smarty->assign('kb_available_field', $kb_final_field);
                $this->context->smarty->assign('id_customer', Tools::getValue('id_customer'));
                $this->context->smarty->assign('kb_front_controller', $this->context->link->getModuleLink('kbcustomfield', 'kbcustomcustomer'));
                $this->context->smarty->assign('information_message', $output);
                $this->context->smarty->assign('kb_available_section', $kb_available_section);
                return $this->display(__FILE__, 'views/templates/hook/field_customer_admin.tpl');
            }
        }
    }

    /*
     * Function to display Custom Field
     * Information in the Admin Customer View Page
     */
    public function hookDisplayAdminCustomers()
    {
        $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        if ($kbconfig['enable']) {
            $output = '';
            $this->setKbMedia();
            $id_customer = Tools::getValue('id_customer');
            $kb_available_field = KbCustomFields::getAvailableCustomFields();
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

            $this->context->smarty->assign('kb_custom_customer_link', $this->context->link->getAdminLink('AdminKbCustomFields', true));
            $this->context->smarty->assign('kb_available_field', $kb_final_field);
            $this->context->smarty->assign('id_customer', Tools::getValue('id_customer'));
            $this->context->smarty->assign('information_message', $output);
            $this->context->smarty->assign('kb_available_section', $kb_available_section);
            $this->context->smarty->assign('module_path', $this->context->link->getAdminLink('AdminModules', true) . '&configure=' . $this->name);
            return $this->display(__FILE__, 'views/templates/hook/customer_info_admin.tpl');
        }
    }

    /*
     * Function to display Edit Custom Fields
     * in the My Account->Your Personal Information page
     */
    public function hookDisplayCustomerIdentityForm()
    {
        if (Tools::isSubmit('submitIdentity')) {
            $this->processUpdateCustomerIdentity();
        }
        $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        if ($kbconfig['enable']) {
            $this->setKbMedia();
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
                if (!empty($avialable_field) && is_array($avialable_field)) {
                    $avialable_field['default_value'] = Tools::jsonDecode($avialable_field['default_value'], true);
                }
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
            $this->context->controller->addJS($this->_path . 'views/js/front/validation_front.js');
            $this->context->smarty->assign('kb_front_controller', $this->context->link->getModuleLink('kbcustomfield', 'kbcustomcustomer'));
            $this->context->controller->addJQueryUi('ui.datepicker');
            $this->context->controller->addJQueryUi('ui.slider');
            $this->context->smarty->assign('kb_available_field', $kb_final_field);
            $this->context->smarty->assign('kb_available_section', $kb_available_section);
            $this->context->smarty->assign('kb_custom_css', Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS_CSS'), true));
            $this->context->smarty->assign('id_customer', $id_customer);
            return $this->display(__FILE__, 'views/templates/hook/field_display_identity.tpl');
        }
    }

    /*
     * Function to update Personal Information
     */
    public function processUpdateCustomerIdentity()
    {
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
                                chmod(_PS_MODULE_DIR_ . $this->name . '/views/upload/' . time() . '.' . $file_extension, 0777);
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
                } elseif ($kbcustomfield->type == 'text' ||
                        $kbcustomfield->type == 'textarea' ||
                        $kbcustomfield->type == 'date' ||
                        $kbcustomfield->type == 'datetime') {
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
                        }
                    }
                }
            }
        }
    }

    /*
     * Function to display Custom Field block in Invoice PDF
     */

    /*
     * Function is used to download uploaded file.
     */
    public function downloadFile($field_id)
    {
        // clean buffer
        if (ob_get_level() && ob_get_length() > 0) {
            ob_clean();
        }
        $id_customer = Tools::getValue('id_customer');
        $id_field = $field_id;
        $id_mapping = KbCustomFieldCustomerMapping::getIDByCustomerAndField($id_customer, $id_field);
        $mapping = new KbCustomFieldCustomerMapping($id_mapping);
        $file = Tools::jsonDecode($mapping->value, true);
        if (!empty($file) && is_array($file)) {
            if (isset($file['type'])) {
                $path = $file['path'];
                if (Tools::file_exists_no_cache($file['path'])) {
                    header('Content-type:' . $file['type']);
                    header('Content-Type: application/force-download; charset=UTF-8');
                    header('Cache-Control: no-store, no-cache');
                    header('Content-disposition: attachment; filename=' . time() . '.' . $file['extension']);
                    readfile($path);
                    exit;
                } else {
                    Tools::redirect(Context::getContext()->link->getPageLink('identity', true));
                }
            } else {
                Tools::redirect(Context::getContext()->link->getPageLink('identity', true));
            }
        }
    }
    
    /*
     * Function to display Additional Information
     * link in My Account page in Prestashop below
     * to 1.6.0.9
     */
    public function hookDisplayCustomerAccount()
    {
        if (version_compare(_PS_VERSION_, '1.6.0.8', '<=')) {
            $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
            if ($kbconfig['enable']) {
                return $this->display(__FILE__, 'views/templates/hook/additional_link_front.tpl');
            }
        }
    }
}
