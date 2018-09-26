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

include_once(_PS_MODULE_DIR_.'kbcustomfield/classes/KbCustomFields.php');
include_once(_PS_MODULE_DIR_.'kbcustomfield/classes/KbCustomFieldSection.php');
include_once(_PS_MODULE_DIR_.'kbcustomfield/classes/KbCustomFieldCustomerMapping.php');

class AdminKbCustomFieldsController extends ModuleAdminController
{
    public $kb_smarty;
    public $all_languages = array();
    protected $kb_module_name = 'kbcustomfield';
    protected $sectionArray = array();
    
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
        $this->table = 'kb_custom_fields';
        $this->className = 'KbCustomFields';
        $this->identifier = 'id_field';
        $this->lang = false;
        $this->display = 'list';
        parent::__construct();
        $this->list_simple_header = true;
        
        if (Tools::getValue('id_field')) {
            $this->toolbar_title = $this->module->l('Edit Custom Field', 'AdminKbCustomFieldsController');
        } elseif (Tools::isSubmit('addkb_custom_fields')) {
            $this->toolbar_title = $this->module->l('Add Custom Field', 'AdminKbCustomFieldsController');
        } else {
            $this->toolbar_title = $this->module->l('Knowband Custom Fields', 'AdminKbCustomFieldsController');
        }
        
        $data = Db::getInstance()->executeS(
            'SELECT * FROM '._DB_PREFIX_.'kb_custom_field_section s'
            . ' INNER JOIN '._DB_PREFIX_.'kb_custom_field_section_lang sl'
            . ' on (s.id_section= sl.id_section AND sl.id_lang='. (int) $this->context->language->id.')'
            . 'order by s.id_section limit 1'
        );
        foreach ($data as $d) {
            $this->sectionArray[$d['id_section']] = $d['label'];
        }
        $this->fields_list = array(
            'id_field' => array(
                'title' => $this->module->l('ID', 'AdminKbCustomFieldsController'),
                'search' => true,
                'align' => 'text-center',
            ),
            'label' => array(
                'title' => $this->module->l('Label', 'AdminKbCustomFieldsController'),
                'search' => true,
                'align' => 'text-center',
            ),
            'type' => array(
                'title' => $this->module->l('Input Type', 'AdminKbCustomFieldsController'),
                'search' => true,
                'align' => 'text-center',
            ),
            'id_section' => array(
                'title' => $this->module->l('Section', 'AdminKbCustomFieldsController'),
                'search' => true,
                'type' => 'select',
                'align' => 'text-center',
                'filter_key' => 'a!id_section',
                'callback' => 'getkbSectionname',
                'list' => $this->sectionArray
            ),
            'active' => array(
                'title' => $this->module->l('Status', 'AdminKbCustomFieldsController'),
                'align' => 'text-center',
                'active' => 'active',
                'type' => 'bool',
                'filter_key' => 'a!active',
                'search' => true
            ),
            'date_upd' => array(
                'title' => $this->l('Last Update', 'AdminKbCustomFieldsController'),
                'type' => 'date',
                 'filter_key' => 'a!date_upd',
                
            )
        );
        $this->_select = 'c.*';
        $this->_join = 'INNER JOIN `' . _DB_PREFIX_ . 'kb_custom_fields_lang` c'
            . ' ON (a.id_field = c.id_field AND c.id_lang='.$this->context->language->id.')'
            . ' INNER JOIN `' . _DB_PREFIX_ . 'kb_custom_field_section` s'
            . ' ON (a.id_section = s.id_section)';  
        $this->_default_pagination = 3;
//        $this->_listTotal
        $this->_use_found_rows = false;
        $this->addRowAction('edit');
        $this->addRowAction('delete');
    }
    
    /**
     * Function used to display section name in the list
     */
    public function getkbSectionname($echo, $tr)
    {
//        d($echo);
        if (isset($this->sectionArray[$echo])) {
        return $this->sectionArray[$echo];
        }
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
        if ((!$this->tabAccess['edit'] && Tools::getValue('id_field')) ||
            (!$this->tabAccess['add'] && !Tools::getValue('id_field'))) {
            $this->errors[] = Tools::displayError('You do not have permission to use this form.');
            return false;
        }
        $this->table = 'kb_custom_fields';
        $this->className = 'KbCustomFields';
        
        if (Tools::getValue('id_template')) {
            $template_action = $this->module->l('Edit', 'AdminKbCustomFieldsController');
        } else {
            $template_action = $this->module->l('Add', 'AdminKbCustomFieldsController');
        }
        $customizable = false;
        $tpl = $this->kb_smarty->createTemplate('kb_field_form.tpl');
        
        $tpl->assign(array(
            'kb_form_contents' => $this->getAddFieldForm(),
            'edit_field_form' => (Tools::getValue('id_field') && Tools::getIsset('updatekb_custom_fields')) ? 1 : 0,
            'template_action' => $template_action,
            'customizable' => $customizable,
            'moduledir_url' => $this->getModuleDirUrl(),
            'allowed_field_type' => $this->getAllowedFieldType(),
        ));

        return $tpl->fetch().parent::renderForm();
    }
    
    /**
     * Function used to display add field form
     */
    protected function getAddFieldForm()
    {
        if(count(KbCustomFields::getTotalAvailableCustomFields()) >= 3){
            if(!Tools::getIsset('updatekb_custom_fields')){
            $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('This is a free version module. You can add only three custom field using this.', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
             }
        }
        $this->table = 'kb_custom_fields';
        $this->className = 'KbCustomFields';
        $tpl_vars = array();
        $object = new KbCustomFields(Tools::getValue('id_field'));
        if ((Tools::getValue('id_field') != '') && Tools::getIsset('updatekb_custom_fields')) {
            $submit_btn = 'update_submit_kb_custom';
        } else {
            $submit_btn = 'add_submit_kb_custom';
        }
        $this->fields_form = array(
            'form' => array(
                'id_form' => 'kbcf_add_custom_field',
                'legend' => array(
                    'title' => $this->l('Add Custom Field', 'AdminKbCustomFieldsController'),
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Select Field Type', 'AdminKbCustomFieldsController'),
                        'hint' => $this->module->l('Select Type of the Field', 'AdminKbCustomFieldsController'),
                        'name' => 'type',
                        'options' => array(
                            'query' => $this->getAllowedFieldType(),
                            'id' => 'id',
                            'name' => 'label',
                        ),
                        'default_value' => (Tools::getValue('id_field') && Tools::getIsset('updatekb_custom_fields')) ? $object->type: '',
                    ),
                    array(
                        'type' => 'hidden',
                        'name' => 'type'
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Label', 'AdminKbCustomFieldsController'),
                        'lang' => true,
                        'name' => 'label',
                        'required' => true,
                        'col' => 4,
                        'hint' => $this->module->l('Add the label of the input field', 'AdminKbCustomFieldsController'),
                    ),
                    
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Short Description', 'AdminKbCustomFieldsController'),
                        'lang' => true,
                        'name' => 'description',
                        'col' => 4,
                        'hint' => $this->module->l('Add the help text for the input field', 'AdminKbCustomFieldsController'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Placeholder', 'AdminKbCustomFieldsController'),
                        'lang' => true,
                        'name' => 'placeholder',
                        'col' => 4,
                        'hint' => $this->module->l('Add the placeholder in the input field', 'AdminKbCustomFieldsController'),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Section', 'AdminKbCustomFieldsController'),
                        'name' => 'id_section',
                        'options' => array(
                            'query' => KbCustomFieldSection::getAvailableCustomSection(),
                            'id' => 'id_section',
                            'name' => 'label'
                        ),
                        'hint' => $this->module->l('Add the field in different block', 'AdminKbCustomFieldsController'),
                        'required' => true,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Multiple Select', 'AdminKbCustomFieldsController'),
                        'name' => 'multiselect',
                        'is_bool' => true,
                        'hint' => $this->module->l('Enable the functionality of multiple select', 'AdminKbCustomFieldsController'),
                        'values' => array(
                            array(
                                'value' => 1
                            ),
                            array(
                                'value' => 0
                            )
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Field Name', 'AdminKbCustomFieldsController'),
                        'name' => 'field_name',
                        'col' => 4,
                        'required'=> true,
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->module->l('Options', 'AdminKbCustomFieldsController'),
                        'lang' => true,
                        'desc' => $this->module->l('Enter only one option in 1 line', 'AdminKbCustomFieldsController')
                        . '</br>' . $this->module->l('Avoid blank lines.', 'AdminKbCustomFieldsController') . '</br>'
                        . $this->module->l('Accepted format example:', 'AdminKbCustomFieldsController') . '</br>'
                        . 'm|Male' . '</br>'
                        . 'f|Female',
                        'name' => 'value',
                        'col' => 5,
                        'required' => true
                        
                    ),
                    array(
                        'type' => 'hidden',
                        'label' => $this->module->l('Default value (optional)', 'AdminKbCustomFieldsController'),
                        'lang' => true,
                        'name' => 'default_value',
                        'col' => 5,
                        'desc' => $this->module->l('For select, radio or checkbox, set the default value like this', 'AdminKbCustomFieldsController')
                        . '</br>' . $this->module->l('Option:- n|No, Default Value:- n', 'AdminKbCustomFieldsController') . '</br>'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Validation', 'AdminKbCustomFieldsController'),
                        'name' => 'validation',
                        'options' => array(
                            'query' => $this->getFieldValidation(),
                            'id' => 'id',
                            'name' => 'value'
                        ),
                        'hint' => $this->module->l('Select the type of validation to validate the field', 'AdminKbCustomFieldsController'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Error Message', 'AdminKbCustomFieldsController'),
                        'name' => 'error_msg',
                        'lang' => true,
                        'col' => 4,
                         'hint' => $this->module->l('Display the error message if there is any error in the field', 'AdminKbCustomFieldsController'),
                    ),
                    array(
                        'type' => 'hidden',
                        'label' => $this->module->l('Register for newsletter', 'AdminKbCustomFieldsController'),
                        'name' => 'register_for_newsletter',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('HTML ID', 'AdminKbCustomFieldsController'),
                        'name' => 'html_id',
                        'col' => 4,
                        'required' => true
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('HTML Class', 'AdminKbCustomFieldsController'),
                        'name' => 'html_class',
                        'col' => 4,
                        'required' => true
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Minimum Length', 'AdminKbCustomFieldsController'),
                        'name' => 'min_length',
                        'col' => 3,
                        'hint' => $this->module->l('Enter the minimum character for the field', 'AdminKbCustomFieldsController'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Maximum Length', 'AdminKbCustomFieldsController'),
                        'name' => 'max_length',
                        'col' => 3,
                        'hint' => $this->module->l('Enter the maximum character for the field', 'AdminKbCustomFieldsController'),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('File Extension', 'AdminKbCustomFieldsController'),
                        'name' => 'file_extension',
                        'col' => 4,
                        'required' => true,
                        'desc' => $this->module->l('Extension must be comma separated value. Eg- ', 'AdminKbCustomFieldsController') .'png, jpg'
                        
                    ),
                    array(
                        'type' => 'hidden',
                        'label' => $this->module->l('Allow Multiple File', 'AdminKbCustomFieldsController'),
                        'name' => 'allow_multifile',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Required', 'AdminKbCustomFieldsController'),
                        'name' => 'required',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'value' => 1
                            ),
                            array(
                                'value' => 0
                            )
                        ),
                        'hint' => $this->module->l('Enable if to make field mandatory', 'AdminKbCustomFieldsController'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Editable by Customer', 'AdminKbCustomFieldsController'),
                        'name' => 'editable',
                        'is_bool' => true,
                        'hint' => $this->module->l('Enable if to make field editable in Personal Information page', 'AdminKbCustomFieldsController'),
                        'values' => array(
                            array(
                                'value' => 1
                            ),
                            array(
                                'value' => 0
                            )
                        ),
                        'default_values' => 1,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Show in Invoice', 'AdminKbCustomFieldsController'),
                        'name' => 'show_on_invoice',
                        'is_bool' => true,
                        'hint' => $this->module->l('Enable if to display the field in invoice pdf', 'AdminKbCustomFieldsController'),
                        'values' => array(
                            array(
                                'value' => 1
                            ),
                            array(
                                'value' => 0
                            )
                        ),
                        'default_value' => 1,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Active', 'AdminKbCustomFieldsController'),
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
                        'default_value' => 0,
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'AdminKbCustomFieldsController'),
                    'class' => 'btn btn-default pull-right ' .$submit_btn
                ),
            ),
        );
        
         $object = '';
        if ((Tools::getValue('id_field') != '') && Tools::getIsset('updatekb_custom_fields')) {
            $field_value = $this->getEditFieldValues();
        } elseif (Tools::getIsset('addkb_custom_fields')) {
            $field_value = $this->getAddFieldValues();
        }
        
        return $this->renderGenericForm(
            array(
                'form' => $this->fields_form
            ),
            $field_value,
            Tools::getAdminTokenLite('AdminKbCustomFields'),
            $tpl_vars
        );
    }
    
    /**
     * Function used to assign default values
     * to the fields in Add Custom Field form
     */
    protected function getAddFieldValues()
    {
        $languages = $this->all_languages;
        $field_value = array(
            'type' => '',
            'multiselect' => 0,
            'register_for_newsletter' => 0,
            'validation' => '',
            'id_section' => '',
            'field_name' => 'field_' . time(),
            'html_id' => 'field_' . time(),
            'html_class' => 'field_' . time(),
            'min_length' => 0,
            'max_length' => 255,
            'file_extension' => '',
            'allow_multifile' => 0,
            'required' => 0,
            'editable' => 0,
            'show_on_invoice' => 0,
            'active' => 0,
        );
        foreach ($languages as $lang) {
            $field_value['label'][$lang['id_lang']] = '';
            $field_value['description'][$lang['id_lang']] = '';
            $field_value['placeholder'][$lang['id_lang']] = '';
            $field_value['value'][$lang['id_lang']] = '';
            $field_value['default_value'][$lang['id_lang']] = '';
            $field_value['error_msg'][$lang['id_lang']] = '';
        }
        return $field_value;
    }
    
    /**
     * Function used to display Edit field form
     */
    protected function getEditFieldValues()
    {
        $object = new KbCustomFields(Tools::getValue('id_field'));
        $languages = $this->all_languages;
        if (is_object($object) && (count(get_object_vars($object)) > 0)) {
            $field_value = array(
                'type' => $object->type,
                'multiselect' => $object->multiselect,
                'register_for_newsletter' =>$object->register_for_newsletter,
                'validation' => $object->validation,
                'id_section' => $object->id_section,
                'field_name' => $object->field_name,
                'html_id' => $object->html_id,
                'html_class' => $object->html_class,
                'min_length' => $object->min_length,
                'max_length' => $object->max_length,
                'file_extension' =>$object->file_extension,
                'allow_multifile' => $object->allow_multifile,
                'required' =>  $object->required,
                'allow_multifile' =>  $object->allow_multifile,
                'editable' =>  $object->editable,
                'show_on_invoice' =>  $object->show_on_invoice,
                'active' =>  $object->active,
            );
            foreach ($languages as $lang) {
                $field_value['label'][$lang['id_lang']] = isset($object->label[$lang['id_lang']]) ?$object->label[$lang['id_lang']] : '';
                $field_value['description'][$lang['id_lang']] = isset($object->description[$lang['id_lang']]) ?$object->description[$lang['id_lang']] : '';
                $field_value['placeholder'][$lang['id_lang']] = isset($object->placeholder[$lang['id_lang']]) ?$object->placeholder[$lang['id_lang']] : '';
                $field_value['value'][$lang['id_lang']] = isset($object->value[$lang['id_lang']]) ?$object->value[$lang['id_lang']] : '';
                $field_value['default_value'][$lang['id_lang']] = '';
                $field_value['error_msg'][$lang['id_lang']] = isset($object->error_msg[$lang['id_lang']]) ?$object->error_msg[$lang['id_lang']] : '';
            }
            $array_option_data = array();
            if (is_array($field_value['value']) && !empty($field_value['value'])) {
                foreach ($field_value['value'] as $key => $value_field) {
                    $option_data = '';
                    $field_option = Tools::jsonDecode($value_field, true);
                    if (!empty($field_option) && is_array($field_option)) {
                        foreach ($field_option as $value) {
                            $option_data .= implode('|', $value) . "\n";
                        }
                    }
                    $array_option_data[$key] = $option_data;
                }
            }
            
            $array_default_option_data = array();
            if (is_array($field_value['default_value']) && !empty($field_value['value'])) {
                foreach ($field_value['default_value'] as $key => $value_field) {
                    $option_data = '';
                    $field_option = Tools::jsonDecode($value_field, true);
                    if (!empty($field_option) && is_array($field_option)) {
                        foreach ($field_option as $value) {
                            $option_data .= implode('|', $value) . "\n";
                        }
                    }
                    $array_default_option_data[$key] = '';
                }
            }
            $field_value['value'] = $array_option_data;
            $field_value['default_value'] = $array_default_option_data;
        } else {
            $field_value = array(
                'type' => '',
                'multiselect' => 0,
                'register_for_newsletter' => 0,
                'validation' => '',
                'id_section' => '',
                'field_name' => 'field_' . time(),
                'html_id' => 'field_' . time(),
                'html_class' => 'field_' . time(),
                'min_length' => '',
                'max_length' => '',
                'file_extension' => '',
                'allow_multifile' => 0,
                'required' => 0,
                'editable' => 0,
                'show_on_invoice' => 0,
                'active' => 0,
            );
            foreach ($languages as $lang) {
                $field_value['label'][$lang['id_lang']] = '';
                $field_value['description'][$lang['id_lang']] = '';
                $field_value['placeholder'][$lang['id_lang']] = '';
                $field_value['value'][$lang['id_lang']] = '';
                $field_value['default_value'][$lang['id_lang']] = '';
                $field_value['error_msg'][$lang['id_lang']] = '';
            }
        }
        return $field_value;
    }
    
    /**
     * Function used for assign array for validation field
     */
    protected function getFieldValidation()
    {
        return array(
            array(
                'id' => null,
                'value' => $this->module->l('Select', 'AdminKbCustomFieldsController'),
            ),
            array(
                'id' => 'isName',
                'value' => 'isName',
                
            ),
            array(
                'id' => 'isGenericName',
                'value' => 'isGenericName'
            ),
            array(
                'id' => 'isAddress',
                'value' => 'isAddress',
            ),
            array(
                'id' => 'isCityName',
                'value' => 'isCityName'
            ),
            array(
                'id' => 'isMessage',
                'value' => 'isMessage',
            ),
            array(
                'id' => 'isPhoneNumber',
                'value' => 'isPhoneNumber',
            ),
            array(
                'id' => 'isDniLite',
                'value' => 'isDniLite'
            ),
            array(
                'id' => 'isEmail',
                'value' => 'isEmail'
            ),
            array(
                'id' => 'isPasswd',
                'value' => 'isPasswd'
            ),
        );
    }
    
    /**
     * Function used for assign array for allowed field type field
     */
    protected function getAllowedFieldType()
    {
        return array(
            array(
                'id' => null,
                'label' => $this->module->l('Select Type', 'AdminKbCustomFieldsController'),
            ),
            array(
                'id' => 'text',
                'label' => 'Text'
            ),
            array(
                'id' => 'radio',
                'label' => 'Radio'
            ),
        );
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
        $this->context->smarty->assign('selected_nav', 'kbfields');
        
        $this->context->smarty->assign(
            'admin_cf_configure_controller',
            $this->context->link->getAdminLink('AdminModules', true)
            .'&configure='.urlencode($this->module->name)
            .'&tab_module='.$this->module->tab
            .'&module_name='.urlencode($this->module->name)
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
        parent::initContent();
    }
    
    /**
     * Function used to render the list to display for this controller
     *
     * @return string|false
     * @throws PrestaShopException
     */
    public function renderList()
    {
        $free_version = $this->context->smarty->fetch(
            _PS_MODULE_DIR_ . $this->module->name . '/views/templates/admin/free_version.tpl'
            );
        $section = Db::getInstance()->getRow('SELECT count(*) as count FROM '._DB_PREFIX_.'kb_custom_field_section WHERE active=1');
        if ($section['count'] > 0) {
            return parent::renderList().$free_version;
        } else {
            $this->context->smarty->assign('kb_controller_link', $this->context->link->getAdminLink('AdminKbCustomFieldSection', true));
            return $this->context->smarty->fetch(
                _PS_MODULE_DIR_.'kbcustomfield/views/templates/admin/section_view.tpl'
            );
        }
    }
    
    /** Prestashop Default Function in AdminController
     * @TODO uses redirectAdmin only if !$this->ajax
     * @return bool
     */
    public function postProcess()
    {
        if (Tools::isSubmit('active'.$this->table)) {
            $id_field= Tools::getValue('id_field');
            $kb_custom = new KbCustomFields($id_field);
            if ($kb_custom->active == 1) {
                $kb_custom->active = 0;
            } else {
                $kb_custom->active = 1;
            }
            $kb_custom->update();
            $this->context->cookie->__set('kb_redirect_success', $this->module->l('The status has been successfully updated.', 'AdminKbCustomFieldsController'));
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
        }

        if (Tools::isSubmit('submitBulkenableSelection' . $this->table)) {
            $this->processBulkEnableSelection();
            $this->context->cookie->__set('kb_redirect_success', $this->module->l('The status has been successfully updated.', 'AdminKbCustomFieldsController'));
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
        }
        
        if (Tools::isSubmit('submitBulkdisableSelection' . $this->table)) {
            $this->processBulkDisableSelection();
            $this->context->cookie->__set('kb_redirect_success', $this->module->l('The status has been successfully updated.', 'AdminKbCustomFieldsController'));
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
        }
        
        if (Tools::isSubmit('submitAddKbCustomCustomer')) {
            $this->processAddAdminCustomerInfo();
        }
        parent::postProcess();
    }
    
    /**
     * Function to store custom field value from AdminCustomer
     */
    public function processAddAdminCustomerInfo()
    {
        $kbconfig = Tools::jsonDecode(Configuration::get('KB_CUSTOM_FIELDS'), true);
        if ($kbconfig['enable']) {
            $id_customer = Tools::getValue('id_customer');
            $availableFields = KbCustomFields::getAvailableCustomFields();
            foreach ($availableFields as $available) {
                $id_field = KbCustomFields::getCustomFieldIDbyName($available['field_name']);
                $kbcustomfield = new KbCustomFields($id_field);
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
                } elseif (($kbcustomfield->type == 'text' ||
                    $kbcustomfield->type == 'textarea' ||
                    $kbcustomfield->type == 'date' ||
                    $kbcustomfield->type == 'datetime')) {
                    $field_value = Tools::getValue($kbcustomfield->field_name);
                }
                $id_employee = $this->context->employee->id;
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
                    $update = $kbmapping->save();
                    if ($update) {
                        $this->context->cookie->__set(
                            'kb_redirect_success',
                            $this->module->l('Custom Information updated successfully')
                        );
                    } else {
                        $this->context->cookie->__set(
                            'kb_redirect_error',
                            $this->module->l('Something went wrong while updating the information. Please try again.')
                        );
                    }
                }
            }
            Tools::redirectAdmin(
                $this->context->link->getAdminLink('AdminCustomers', true)
                . '&id_customer=' . $id_customer . '&updatecustomer'
            );
        }
    }
    
    /**
     * Function to create custom field
     */
    public function processAdd()
    {
        if (Tools::isSubmit('submitAddkb_custom_fields')) {
            if(count(KbCustomFields::getTotalAvailableCustomFields()) >= 3){
                $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('This is a free version module. You can add only three custom field using this.', 'AdminKbCustomFieldSectionController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
            }
            $addKbField = new KbCustomFields();
            $label = array();
            $description = array();
            $placeholder = array();
            $field_value = array();
            $field_default_value = array();
            $field_error_msg = array();
            $languages = $this->all_languages;
            foreach ($languages as $lang) {
                $label[$lang['id_lang']] = trim(Tools::getValue('label_' . $lang['id_lang']));
                $description[$lang['id_lang']] = trim(Tools::getValue('description_' . $lang['id_lang']));
                $placeholder[$lang['id_lang']] = trim(Tools::getValue('placeholder_' . $lang['id_lang']));
                $field_value[$lang['id_lang']] = trim(Tools::getValue('value_' . $lang['id_lang']));
                $field_default_value[$lang['id_lang']] = "";
                $field_error_msg[$lang['id_lang']] = trim(Tools::getValue('error_msg_' . $lang['id_lang']));
            }
            $array_option_data_lang = '';
            $array_default_option_data_lang = '';
            if (is_array($field_value) && !empty($field_value)) {
                foreach ($field_value as $key => $value) {
                    $array_option = explode("\n", $value);
                    foreach ($array_option as $op_key => $option) {
                        if (!empty(trim($option))) {
                            $array_option_data = explode('|', trim($option));
                            if(count($array_option_data) == 2 ){
                            $array_option_data_lang[$key][$op_key]['option_value'] = $array_option_data[0];
                            $array_option_data_lang[$key][$op_key]['option_label'] = $array_option_data[1];
                            }else{
                            $array_option_data_lang[$key][$op_key]['option_value'] = '';
                            $array_option_data_lang[$key][$op_key]['option_label'] = ''; 
                            }

                        }
                    }
                }
            }
            if (is_array($array_option_data_lang) && !empty($array_option_data_lang)) {
                foreach ($array_option_data_lang as $key => $options) {
                    $array_option_data_lang[$key] = Tools::jsonEncode($options);
                }
            }
            //d($field_default_value);
            if (is_array($field_default_value) && !empty($field_default_value)) {
                foreach ($field_default_value as $key => $value) {
                    $array_option = explode("\n", $value);
                    foreach ($array_option as $op_key => $option) {
                        if (!empty(trim($option))) {
                            $array_option_data = explode('|', trim($option));
                            $array_default_option_data_lang[$key][$op_key]['option_value'] = '';
                            $array_default_option_data_lang[$key][$op_key]['option_label'] = '';
                        }
                    }
                }
            }
            
            if (is_array($array_default_option_data_lang) && !empty($array_default_option_data_lang)) {
                foreach ($array_default_option_data_lang as $key => $options) {
                    $array_default_option_data_lang[$key] = Tools::jsonEncode($options);
                }
            }
            $type = Tools::getValue('type');
            $id_section = Tools::getValue('id_section');
            $multiselect = Tools::getValue('multiselect');
            $field_name = Tools::getValue('field_name');
            $validation = Tools::getValue('validation');
            $newsletter = Tools::getValue('register_for_newsletter');
            $html_id = trim(Tools::getValue('html_id'));
            $html_class = trim(Tools::getValue('html_class'));
            $min_length = trim(Tools::getValue('min_length'));
            $max_length = trim(Tools::getValue('max_length'));
            $file_extension = trim(Tools::getValue('file_extension'));
            $allow_multifile = Tools::getValue('allow_multifile');
            $required = Tools::getValue('required');
            $editable = Tools::getValue('editable');
            $show_on_invoice = Tools::getValue('show_on_invoice');
            $active = Tools::getValue('active');
            if (($type == 'text') || ($type == 'textarea')) {
                
                $multiselect = 0;
                $array_option_data_lang = '';
                $array_default_option_data_lang = '';
                if (($type == 'text') && ($validation == 'isEmail')) {
                    $min_length = '';
                    $max_length = '';
                }
                if (($type == 'text') && ($validation != 'isEmail')) {
                    $newsletter = 0;
                } elseif ($type == 'textarea') {
                    $newsletter = 0;
                }
                $file_extension = '';
                $allow_multifile = 0;
            }  elseif ($type == 'radio') {
                $placeholder = '';
                $newsletter = 0;
                $min_length = '';
                $max_length = '';
                $file_extension = '';
                $allow_multifile = 0;
                $required = 0;
            }


            //save
            $addKbField->id_section = $id_section;
            $addKbField->field_name = $field_name;
            $addKbField->type = $type;
            $addKbField->label = $label;
            $addKbField->description = $description;
            $addKbField->value = $array_option_data_lang;
            $addKbField->validation = $validation;
            $addKbField->error_msg = $field_error_msg;
            $addKbField->default_value = $array_default_option_data_lang;
            $addKbField->placeholder = $placeholder;
            $addKbField->register_for_newsletter = $newsletter;
            $addKbField->html_id = $html_id;
            $addKbField->html_class = $html_class;
            $addKbField->max_length = $max_length;
            $addKbField->min_length = $min_length;
            $addKbField->file_extension = $file_extension;
            $addKbField->allow_multifile = $allow_multifile;
            $addKbField->required = $required;
            $addKbField->multiselect = $multiselect;
            $addKbField->editable = 0;
            $addKbField->show_on_invoice = 0;
            $addKbField->active = $active;
            if ($addKbField->add()) {
                $this->context->cookie->__set(
                    'kb_redirect_success',
                    $this->module->l('Field added successfully', 'AdminKbCustomFieldsController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
            } else {
                $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('Something went wrong while adding the Field. Please try again.', 'AdminKbCustomFieldsController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
            }
        }
    }
    
     /**
     * Function to update custom field
     */
    public function processUpdate()
    {
        if (Tools::isSubmit('submitAddkb_custom_fields')) {
            
            $updateKbField = new KbCustomFields(Tools::getValue('id_field'));
            $label = array();
            $description = array();
            $placeholder = array();
            $field_value = array();
            $field_default_value = array();
            $field_error_msg = array();
            $languages = $this->all_languages;
            foreach ($languages as $lang) {
                $label[$lang['id_lang']] = trim(Tools::getValue('label_' . $lang['id_lang']));
                $description[$lang['id_lang']] = trim(Tools::getValue('description_' . $lang['id_lang']));
                $placeholder[$lang['id_lang']] = trim(Tools::getValue('placeholder_' . $lang['id_lang']));
                $field_value[$lang['id_lang']] = trim(Tools::getValue('value_' . $lang['id_lang']));
                $field_default_value[$lang['id_lang']] = "";
                $field_error_msg[$lang['id_lang']] = trim(Tools::getValue('error_msg_' . $lang['id_lang']));
            }
            $array_option_data_lang = '';
            $array_default_option_data_lang = '';
            if (is_array($field_value) && !empty($field_value)) {
                foreach ($field_value as $key => $value) {
                    $array_option = explode("\n", $value);
                    foreach ($array_option as $op_key => $option) {
                        if (!empty(trim($option))) {
                            $array_option_data = explode('|', trim($option));
                            if(count($array_option_data) == 2 ){
                            $array_option_data_lang[$key][$op_key]['option_value'] = $array_option_data[0];
                            $array_option_data_lang[$key][$op_key]['option_label'] = $array_option_data[1];
                            }else{
                            $array_option_data_lang[$key][$op_key]['option_value'] = '';
                            $array_option_data_lang[$key][$op_key]['option_label'] = ''; 
                            }
                        }
                    }
                }
            }
            if (is_array($array_option_data_lang) && !empty($array_option_data_lang)) {
                foreach ($array_option_data_lang as $key => $options) {
                    $array_option_data_lang[$key] = Tools::jsonEncode($options);
                }
            }
            
            if (is_array($field_default_value) && !empty($field_default_value)) {
                foreach ($field_default_value as $key => $value) {
                    $array_option = explode("\n", $value);
                    foreach ($array_option as $op_key => $option) {
                        if (!empty(trim($option))) {
                            $array_option_data = explode('|', trim($option));
                            $array_default_option_data_lang[$key][$op_key]['option_value'] = $array_option_data[0];
                            $array_default_option_data_lang[$key][$op_key]['option_label'] = $array_option_data[1];
                        }
                    }
                }
            }
            
            if (is_array($array_default_option_data_lang) && !empty($array_default_option_data_lang)) {
                foreach ($array_default_option_data_lang as $key => $options) {
                    $array_default_option_data_lang[$key] = Tools::jsonEncode($options);
                }
            }
            
            $type = $updateKbField->type;
            $id_section = Tools::getValue('id_section');
            $multiselect = Tools::getValue('multiselect');
            $field_name = Tools::getValue('field_name');
            $validation = Tools::getValue('validation');
            $newsletter = Tools::getValue('register_for_newsletter');
            $html_id = trim(Tools::getValue('html_id'));
            $html_class = trim(Tools::getValue('html_class'));
            $min_length = trim(Tools::getValue('min_length'));
            $max_length = trim(Tools::getValue('max_length'));
            $file_extension = trim(Tools::getValue('file_extension'));
            $allow_multifile = Tools::getValue('allow_multifile');
            $required = Tools::getValue('required');
            $editable = 0;
            $show_on_invoice = 0;
            $active = Tools::getValue('active');
            if (($type == 'text') || ($type == 'textarea')) {
                $multiselect = 0;
                $array_option_data_lang = '';
                $array_default_option_data_lang = '';
                if (($type == 'text') && ($validation == 'isEmail')) {
                    $min_length = '';
                    $max_length = '';
                }
                if (($type == 'text') && ($validation != 'isEmail')) {
                    $newsletter = 0;
                } elseif ($type == 'textarea') {
                    $newsletter = 0;
                }
                $file_extension = '';
                $allow_multifile = 0;
            }elseif ($type == 'radio') {
                $placeholder = '';
                $newsletter = 0;
                $min_length = '';
                $max_length = '';
                $file_extension = '';
                $allow_multifile = 0;
                $required = 0;
            } 

            //save
            $updateKbField->id_section = $id_section;
            $updateKbField->field_name = $field_name;
//            $updateKbField->type = $updateKbField->type;
            $updateKbField->label = $label;
            $updateKbField->description = $description;
            $updateKbField->value = $array_option_data_lang;
            $updateKbField->validation = $validation;
            $updateKbField->error_msg = $field_error_msg;
            $updateKbField->default_value = $array_default_option_data_lang;
            $updateKbField->placeholder = $placeholder;
            $updateKbField->register_for_newsletter = $newsletter;
            $updateKbField->html_id = $html_id;
            $updateKbField->html_class = $html_class;
            $updateKbField->max_length = $max_length;
            $updateKbField->min_length = $min_length;
            $updateKbField->file_extension = $file_extension;
            $updateKbField->allow_multifile = $allow_multifile;
            $updateKbField->required = $required;
            $updateKbField->multiselect = $multiselect;
            $updateKbField->editable = 0;
            $updateKbField->show_on_invoice = 0;
            $updateKbField->active = $active;
            if ($updateKbField->update()) {
                $this->context->cookie->__set(
                    'kb_redirect_success',
                    $this->module->l('Field updated successfully', 'AdminKbCustomFieldsController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
            } else {
                $this->context->cookie->__set(
                    'kb_redirect_error',
                    $this->module->l('Something went wrong while updating the Field. Please try again.', 'AdminKbCustomFieldsController')
                );
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminKbCustomFields', true));
            }
        }
    }
    
    /**
     * Prestashop Default Function in AdminController.
     * Init context and dependencies, handles POST and GET
     */
    public function init()
    {
        parent::init();
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
    
    /**
     * Function used display toolbar in page header
     */
    public function initPageHeaderToolbar()
    {
        $this->page_header_toolbar_btn['back_url'] = array(
            'href' => 'javascript: window.history.back();',
            'desc' => $this->module->l('Back', 'AdminKbCustomFieldsController'),
            'icon' => 'process-icon-back'
        );
        if (!Tools::getValue('id_field') && !Tools::isSubmit('addkb_custom_fields')) {
            if((count(KbCustomFields::getTotalAvailableCustomFields()) < 3)  ){
                if(count(KbCustomFieldSection::getTotalAvailableCustomSection()) > 0){
                    $this->page_header_toolbar_btn['new_template'] = array(
                    'href' => self::$currentIndex.'&add'.$this->table.'&token='.$this->token,
                    'desc' => $this->module->l('Add new Field', 'AdminKbCustomFieldsController'),
                    'icon' => 'process-icon-new'
                    );
                }
            }
        }
        
        if (Tools::getValue('id_field') || Tools::isSubmit('id_field')) {
            $this->page_header_toolbar_btn['kb_cancel_action'] = array(
                'href' => self::$currentIndex.'&token='.$this->token,
                'desc' => $this->module->l('Cancel', 'AdminKbCustomFieldsController'),
                'icon' => 'process-icon-cancel'
            );
        }
        parent::initPageHeaderToolbar();
    }
    
    public function initToolbar()
    {

        parent::initToolbar();
        
//        if((count(KbCustomFields::getTotalAvailableCustomFields()) >= 3) ||(count(KbCustomFieldSection::getTotalAvailableCustomSection()) == 0)){
//        unset( $this->toolbar_btn['new'] );
       // }
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
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])
            && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            $custom_ssl_var = 1;
        }
        if ((bool) Configuration::get('PS_SSL_ENABLED') && $custom_ssl_var == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    /*
     * Function for returning the HTML of Helper Form
     */
    public function renderGenericForm($fields_form, $fields_value, $admin_token, $tpl_vars = array())
    {
        $languages = $this->all_languages;
        foreach ($languages as $k => $language) {
            $languages[$k]['is_default'] = ((int) ($language['id_lang'] == $this->context->language->id));
        }
        $helper = new HelperForm($this);
        $this->setHelperDisplay($helper);
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->show_cancel_button = true;
        $helper->languages = $languages;
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $this->fields_form = array();
        $helper->token = $admin_token;
        $helper->tpl_vars = array_merge(array(
                'fields_value' => $fields_value
            ), $tpl_vars);

        return $helper->generateForm($fields_form);
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
