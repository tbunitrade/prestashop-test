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

class KbCustomFieldSection extends ObjectModel
{
    public $id_section;
    public $id_field;
    public $placement;
    public $label;
    public $active;
    public $position;
    public $date_add;
    public $date_upd;
    
    public static $definition = array(
        'table' => 'kb_custom_field_section',
        'primary' => 'id_section',
        'multilang' => true,
        'fields' => array(
            'id_section' => array(
                'type' => self::TYPE_INT,
                'validate' => 'isInt'
            ),
           
            'placement' => array(
                'type' => self::TYPE_STRING,
                'validate' => 'isGenericName'
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
            
            
        ),
    );
    
    public function __construct($id_section = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
    {
         parent::__construct($id_section, $id_lang, $id_shop);
    }
    
    /*
     * Function to fetch available custom section
     */
    public static function getAvailableCustomSection()
    {
        return Db::getInstance()->executeS(
            'SELECT * FROM '._DB_PREFIX_.'kb_custom_field_section s'
            . ' INNER JOIN '._DB_PREFIX_.'kb_custom_field_section_lang sl'
            . ' on (sl.id_section=s.id_section AND sl.id_lang='
            .(int)Context::getContext()->language->id.') WHERE s.active=1'
            . ' order by s.id_section limit 1'
        );
    }
    
    
    public static function getTotalAvailableCustomSection()
    {
        return Db::getInstance()->executeS(
            'SELECT * FROM '._DB_PREFIX_.'kb_custom_field_section s'
            . ' INNER JOIN '._DB_PREFIX_.'kb_custom_field_section_lang sl'
            . ' on (sl.id_section=s.id_section AND sl.id_lang='
            .(int)Context::getContext()->language->id.')'
        );
    }
    
    
    /*
     * Function to fetch number of fields
     * avialable in particular custom section
     */
    public static function isFieldAvailableBySection($id_section = null)
    {
        if ($id_section == null) {
            return;
        }
        $data = Db::getInstance()->getRow(
            'SELECT count(*) as count FROM '._DB_PREFIX_.'kb_custom_field_section s'
            . ' INNER JOIN '._DB_PREFIX_.'kb_custom_fields f'
            . ' on (s.id_section=f.id_section AND f.active=1)'
            . ' WHERE s.active=1 AND s.id_section='
            .(int)$id_section
        );
        return $data['count'];
    }
}
