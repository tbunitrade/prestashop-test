<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * @author    knowband.com <support@knowband.com>
 * @copyright 2017 knowband
 * @license   see file: LICENSE.txt
 * @category  PrestaShop Module
 */

include_once(_PS_MODULE_DIR_.'kbcustomfield/classes/KbCustomFieldSection.php');

class AdminKbCustomFieldSectionController extends ModuleAdminController
{
    public $kb_smarty;
    public $all_languages = array();
    protected $kb_module_name = 'kbcustomfield';
    
    public function __construct()
    {
        $this->bootstrap = true;
        $this->allow_export = true;
        $this->context = Context::getContext();
        $this->list_no_link = true;
        $this->kb_smarty = new Smarty();
        $this->kb_smarty->registerPlugin('function', 'l', 'smartyTranslate');
        $this->kb_smarty->setTemplateDir(_PS_MODULE_DIR_.$this->kb_module_name.'/views/templates/admin/');

        $this->all_languages = $this->getAllLanguages();
        $this->table = 'kb_custom_field_section';
        $this->className = 'KbCustomFieldSection';
        $this->identifier = 'id_section';
        $this->lang = false;
        $this->display = 'list';
        $this->list_simple_header = true;
        parent::__construct();
        
        $this->fields_list = array(
            'id_section' => array(
                'title' => $this->module->l('ID', 'AdminKbCustomFieldSectionController'),
                'search' => true,
                'align' => 'text-center',
            ),
            'label' => array(
                'title' => $this->module->l('Label', 'AdminKbCustomFieldSectionController'),
                'search' => true,
                'align' => 'text-center',
            ),
            'placement' => array(
                'title' => $this->module->l('Placement', 'AdminKbCustomFieldSectionController'),
                'search' => true,
                'align' => 'text-center',
            ),
            'active' => array(
                'title' => $this->module->l('Status', 'AdminKbCustomFieldSectionController'),
                'align' => 'text-center',
                'active' => 'active',
                'type' => 'bool',
                'order_key' => 'status',
                'search' => true
            ),
            'date_upd' => array(
                'title' => $this->l('Last Update', 'AdminKbCustomFieldSectionController'),
                'type' => 'date',
            )
        );
        $this->_select = 'a.*,c.*';
        $this->_join = 'INNER JOIN `' . _DB_PREFIX_ . 'kb_custom_field_section_lang` c ON (a.id_section = c.id_section AND c.id_lang='.$this->context->language->id.')';
        $this->_default_pagination = 1;
        $this->_use_found_rows = false;
        $this->addRowAction('edit');
        $this->addRowAction('delete');
    }
    
    /*
     * Function for returning the URL of PrestaShop Root Modules Directory
     */
    protected function getModuleDirUrl()
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
     * Function for checking SSL
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
     * Function for returning all the languages in the system
     */
    public function getAllLanguages()
    {
        return Language::getLanguages(false);
    }
    
    /**
     * Prestashop Default Function in AdminController.
     * Assign smarty variables for all default views, list and form, then call other init functions
     */
    public function initContent()
    {
        if (isset($this->context->cookie->kb_redirect_error)) {
            $this->errors[] = $this->context->cookie->kb_redirect_error;
            unset($this->context->cookie->kb_redirect_error);
        }

        if (isset($this->context->cookie->kb_redirect_success)) {
            $this->confirmations[] = $this->context->cookie->kb_redirect_success;
            unset($this->context->cookie->kb_redirect_success);
        }
        
        $this->context->smarty->assign('selected_nav', 'kbsection');
        $this->context->smarty->assign(
            'admin_cf_configure_controller',
            $this->context->link->getAdminLink('AdminModules', true).'&configure='.urlencode($this->module->name).'&tab_module='.$this->module->tab.'&module_name='.urlencode($this->module->name)
        );
        $this->context->smarty->assign(
            'admin_cf_section_controller',
            $this->context->link->getAdminLink('AdminKbCustomFieldSection', true)
        );
        
        $this->context->smarty->assign(
            'admin_cf_field_controller',
            $this->context->link->getAdminLink('AdminKbCustomFields', true)
        );
        $kb_tabs = $this->context->smarty->fetch(
            _PS_MODULE_DIR_.$this->kb_module_name.'/views/templates/admin/kb_tabs.tpl'
        );

        $this->content .= $kb_tabs;
       // $this->content .= $free_version;
        parent::initContent();
    }
    
    
    /**
     * Prestashop Default Function in AdminController.
     * Init context and dependencies, handles POST and GET
     */
    public function init()
    {
        parent::init();
    }
    
    /**
     * Function used to render the form for this controller
     *
     * @return string
     * @throws Exception
     * @throws SmartyException
     */
    public function renderForm()
    {
        if(count(KbCustomFieldSection::getTotalAvailableCustomSection()) >= 1){
           if(!Tools::getIsset('updatekb_custom_field_section')){
                    $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('This is a free version module. You can add only one custom field section using this.', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
           }

        }        
        $this->table = 'kb_custom_field_section';
        $this->className = 'KbCustomFieldSection';
        $this->fields_form =  array(
                'id_form' => 'kbcf_add_custom_field_section',
                'legend' => array(
                    'title' => $this->l('Add Custom Field Section', 'AdminKbCustomFieldSectionController'),
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Label', 'AdminKbCustomFieldSectionController'),
                        'lang' => true,
                        'name' => 'label',
                        'col' => 4,
                        'required' => true
                    ),
                    
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Placement', 'AdminKbCustomFieldSectionController'),
                        'name' => 'placement',
                        'required' => true,
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => null,
                                    'name' => $this->module->l('Select', 'AdminKbCustomFieldSectionController'),
                                ),
                                array(
                                    'id' => 'top',
                                'name' => $this->module->l('Top', 'AdminKbCustomFieldSectionController'),
                                ),
                                array(
                                    'id' => 'bottom',
                                    'name' => $this->module->l('Bottom', 'AdminKbCustomFieldSectionController'),
                                ),
                            ),
                                
                                'id' => 'id',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Active', 'AdminKbCustomFieldSectionController'),
                        'name' => 'active',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'value' => 1
                            ),
                            array(
                                'value' => 0
                            )
                        ),
                    ),
                    
                    
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'AdminKbCustomFieldSectionController'),
                    'class' => 'btn btn-default pull-right form_kb_add_section'
                ),
                
            
        );
        return parent::renderForm();
    }
    
    /** Prestashop Default Function in AdminController
     * @TODO uses redirectAdmin only if !$this->ajax
     * @return bool
     */
    public function postProcess()
    {
        if (Tools::isSubmit('active'.$this->table)) {
            $id_section = Tools::getValue('id_section');
            $kb_custom = new KbCustomFieldSection($id_section);
            if ($kb_custom->active == 1) {
                $kb_custom->active = 0;
            } else {
                $kb_custom->active = 1;
            }
            $kb_custom->update();
            $this->context->cookie->__set('kb_redirect_success', $this->module->l('The status has been successfully updated.', 'AdminKbCustomFieldSectionController'));
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
        }
        
//        d(Tools::getAllValues());
        if (Tools::isSubmit('submitBulkenableSelection' . $this->table)) {
            $this->processBulkEnableSelection();
            $this->context->cookie->__set('kb_redirect_success', $this->module->l('The status has been successfully updated.', 'AdminKbCustomFieldSectionController'));
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
        }
        
        if (Tools::isSubmit('submitBulkdisableSelection' . $this->table)) {
            $this->processBulkDisableSelection();
            $this->context->cookie->__set('kb_redirect_success', $this->module->l('The status has been successfully updated.', 'AdminKbCustomFieldSectionController'));
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
        }
        
        parent::postProcess();
    }
    
    /**
     * Function used to add custom section
     */
    public function processAdd()
    {
        if (Tools::isSubmit('submitAddkb_custom_field_section')) {
            if(count(KbCustomFieldSection::getTotalAvailableCustomSection()) >= 1){
                $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('This is a free version module. You can add only one custom field section using this.', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
            } 
            
            $addKbSection = new KbCustomFieldSection();
            $active = Tools::getValue('active');
            $placement = Tools::getValue('placement');
            $label = array();
            foreach (Language::getLanguages(false) as $lang) {
                $label[$lang['id_lang']] = trim(Tools::getValue('label_' . $lang['id_lang']));
            }
            $addKbSection->active = $active;
            $addKbSection->placement = $placement;
            $addKbSection->label = $label;
            if ($addKbSection->add()) {
                $this->context->cookie->__set(
                    'kb_redirect_success',
                    $this->module->l('Section added successfully', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
            } else {
                $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('Something went wrong while adding the Section. Please try again.', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
            }
        }
    }
    
    /**
     * Function used to update custom section
     */
    public function processUpdate()
    {
        if (Tools::isSubmit('submitAddkb_custom_field_section')) { 
            $updateKbSection = new KbCustomFieldSection(Tools::getValue('id_section'));
            $active = Tools::getValue('active');
            $placement = Tools::getValue('placement');
            $label = array();
            foreach (Language::getLanguages(false) as $lang) {
                $label[$lang['id_lang']] = trim(Tools::getValue('label_' . $lang['id_lang']));
            }
            $updateKbSection->active = $active;
            $updateKbSection->placement = $placement;
            $updateKbSection->label = $label;
            if ($updateKbSection->update()) {
                $this->context->cookie->__set(
                    'kb_redirect_success',
                    $this->module->l('Section updated successfully', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
            } else {
                $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('Something went wrong while updating the Section. Please try again.', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
            }
        }
    }
    
    /**
     * assign default action in toolbar_btn smarty var, if they are not set.
     * uses override to specifically add, modify or remove items
     *
     */
    public function initToolbar()
    {

        parent::initToolbar();
//        if(count(KbCustomFieldSection::getTotalAvailableCustomSection()) >= 1){
//        unset( $this->toolbar_btn['new'] );
//        }
        
        
    }
    
    /*
     * Function for returning the absolute path of the module directory
     */
    protected function getKbModuleDir()
    {
        return _PS_MODULE_DIR_.$this->kb_module_name.'/';
    }
    
    
    /*
     * Default function, used here to include JS/CSS files for the module.
     */
    public function setMedia()
    {
        parent::setMedia();
        $this->context->controller->addCSS($this->getKbModuleDir() . 'views/css/admin/kb_admin.css');
        $this->context->controller->addJS($this->getKbModuleDir() . 'views/js/admin/kbcustomfield_admin.js');
        $this->context->controller->addJS($this->getKbModuleDir() . 'views/js/velovalidation.js');
        $this->context->controller->addJS($this->getKbModuleDir() . 'views/js/admin/validation_admin.js');
    }
    
    public function renderList() {
         $free_version = $this->context->smarty->fetch(
                _PS_MODULE_DIR_ . $this->module->name . '/views/templates/admin/free_version.tpl'
            );
       return parent::renderList().$free_version;
    }
    /**
     * Function used display toolbar in page header
     */
    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_btn['back_url'] = array(
            'href' => 'javascript: window.history.back();',
            'desc' => $this->module->l('Back', 'AdminKbCustomFieldSectionController'),
            'icon' => 'process-icon-back'
        );
        if (!Tools::getValue('id_section') && !Tools::isSubmit('addkb_custom_field_section') ) {
            if(count(KbCustomFieldSection::getTotalAvailableCustomSection()) < 1){
                $this->page_header_toolbar_btn['new_template'] = array(
                'href' => self::$currentIndex.'&add'.$this->table.'&token='.$this->token,
                'desc' => $this->module->l('Add new Section', 'AdminKbCustomFieldSectionController'),
                'icon' => 'process-icon-new'
                );
            }
        }
        
        if (Tools::getValue('id_section') || Tools::isSubmit('id_section')) {
            $this->page_header_toolbar_btn['kb_cancel_action'] = array(
                'href' => self::$currentIndex.'&token='.$this->token,
                'desc' => $this->module->l('Cancel', 'AdminKbCustomFieldSectionController'),
                'icon' => 'process-icon-cancel'
            );
        }
        parent::initPageHeaderToolbar();
    }
    
    protected function processBulkEnableSelection()
    {
        return $this->processBulkStatusSelection(1);
    }

    protected function processBulkDisableSelection()
    {
        return $this->processBulkStatusSelection(0);
    }
    
    /**
     * Function used to update the bulk action selection
     */
    protected function processBulkStatusSelection($status)
    {
        $boxes = Tools::getValue($this->table.'Box');
        $result = true;
        if (is_array($boxes) && !empty($boxes)) {
            foreach ($boxes as $id) {
                $object = new $this->className((int) $id);
                $object->active = (int) $status;
                $result &= $object->update();
            }
        }
        return $result;
    }
}
