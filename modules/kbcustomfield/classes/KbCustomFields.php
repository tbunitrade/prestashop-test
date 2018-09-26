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
 * @copyright 2017 Knowband
 * @license   see file: LICENSE.txt
 * @category  PrestaShop Module
 */

class KbCustomFields extends ObjectModel
{
    public $id_field;
    public $id_section;
//    public $id_lang;
//    public $id_shop;
    public $field_name;
    public $label;
    public $description;
    public $value;
    public $type;
    public $validation;
    public $error_msg;
    public $default_value;
    public $placeholder;
    public $register_for_newsletter;
    public $html_id;
    public $html_class;
    public $max_length;
    public $min_length;
    public $file_extension;
    public $allow_multifile;
    public $required;
    public $multiselect;
    public $editable;
    public $show_on_invoice;
    public $active;
    public $position;
    public $date_add;
    public $date_upd;
    
    const TABLE_NAME = 'kb_custom_fields';
    
    public static $definition = array(
        'table' => 'kb_custom_fields',
        'primary' => 'id_field',
        'multilang' => true,
        'fields' => array(
            'id_field' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'id_section' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
//            'id_lang' => array(
//                'type' => self::TYPE_INT,
//                'validate' => 'isNullOrUnsignedId'
//            ),
//            'id_shop' => array(
//                'type' => self::TYPE_INT,
//                'validate' => 'isNullOrUnsignedId'
//            ),
            'field_name' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            ),
            'type' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            ),
            'validation' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            ),
            'register_for_newsletter' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'html_id' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isCleanHtml',
//                'default' => 'fd'
            ),
            'html_class' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            ),
            'max_length' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'min_length' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'file_extension' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
            ),
            'allow_multifile' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'required' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'multiselect' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'editable' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'show_on_invoice' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isNullOrUnsignedId'
            ),
            'active' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'position' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
            'date_add' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate',
                'copy_post' => false
            ),
            'date_upd' => array(
                'type' => self::TYPE_DATE,
                'validate' => 'isDate',
                'copy_post' => false
            ),
            //lang
            'label' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName',
                'lang' => true,
            ),
            'description' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName',
                'lang' => true,
            ),
            'error_msg' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName',
                'lang' => true,
            ),
            'placeholder' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName',
                'lang' => true,
            ),
            'value' => array(
                'type' => self::TYPE_HTML,
                'validate' => 'isCleanHtml',
                'lang' => true,
            ),
            'default_value' => array(
                'type' => self::TYPE_HTML,
                'validate' => 'isCleanHtml',
                'lang' => true,
            ),
            
        ),
    );
    
    public function __construct($id_field = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
    {
         parent::__construct($id_field, $id_lang, $id_shop);
    }
    
    /*
     * Function to fetch available custom fields
     */
    public static function getAvailableCustomFields()
    {
        return Db::getInstance()->executeS(
            'SELECT c.*,cl.* FROM ' . _DB_PREFIX_ . 'kb_custom_fields c'
            . ' INNER JOIN ' . _DB_PREFIX_ . 'kb_custom_fields_lang cl'
            . ' on (cl.id_field=c.id_field AND cl.id_lang=' . (int) Context::getcontext()->language->id.')'
            . ' INNER JOIN ' . _DB_PREFIX_ . 'kb_custom_field_section cs'
            . ' on (cs.id_section=c.id_section)'
            . ' INNER JOIN ' . _DB_PREFIX_ . 'kb_custom_field_section_lang csl'
            . ' on (csl.id_section=cs.id_section AND csl.id_lang='
            . (int) Context::getcontext()->language->id . ') WHERE c.active=1'
        );
    }
    
    public static function getTotalAvailableCustomFields()
    {
        return Db::getInstance()->executeS(
            'SELECT c.*,cl.* FROM ' . _DB_PREFIX_ . 'kb_custom_fields c'
            . ' INNER JOIN ' . _DB_PREFIX_ . 'kb_custom_fields_lang cl'
            . ' on (cl.id_field=c.id_field AND cl.id_lang=' . (int) Context::getcontext()->language->id.')'
            . ' INNER JOIN ' . _DB_PREFIX_ . 'kb_custom_field_section cs'
            . ' on (cs.id_section=c.id_section)'
            . ' INNER JOIN ' . _DB_PREFIX_ . 'kb_custom_field_section_lang csl'
            . ' on (csl.id_section=cs.id_section AND csl.id_lang='
            . (int) Context::getcontext()->language->id . ')'
        );
    }
    
    /*
     * Function to fetch custom field ID by Field Name
     */
    public static function getCustomFieldIDbyName($field_name = null)
    {
        if ($field_name == null) {
            return;
        }
        $data = Db::getInstance()->getRow(
            'SELECT id_field FROM '._DB_PREFIX_.'kb_custom_fields'
            . ' WHERE field_name="'. pSQL($field_name) .'"'
        );
        
        return $data['id_field'];
    }
}
