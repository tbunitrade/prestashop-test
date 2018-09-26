<?php


class MenuSidebar extends Module
{
    public function __construct()
    {
        $this->name = "Secondary menu";
        $this->tab = "Some tab line";
        $this->version = "1.0.0";
        $this->email = "tbunitrade@gmail.com";
        $this->author = "O.Sonich";
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My modulellllll');
        $this->description = $this->l('Here some descr');

        $this->confirmUninstall = $this->l('Are you sure need to Uninstall?');
        Configuration
        if(!Configuration::get('ps_sidebar_menu_noski')){
            $this->warning = $this->l('No name provide');
        }
    }

    public function install()
    {
        if (Shop::isFeatureActive())
            Shop::setContext(Shop::CONTEXT_ALL);

        if (!parent::install() ||
            !$this->registerHook('leftColumn') ||
            !$this->registerHook('header') ||
            !Configuration::updateValue('ps_sidebar_menu_noski', 'my friend')
        )
            return false;

        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('ps_sidebar_menu_noski')
        )
            return false;

        return true;
    }

    public function getContent()
    {
        $output = null;

        if (Tools::isSubmit('submit'.$this->name))
        {
            $my_module_name = strval(Tools::getValue('ps_sidebar_menu_noski'));
            if (!$my_module_name
                || empty($my_module_name)
                || !Validate::isGenericName($my_module_name))
                $output .= $this->displayError($this->l('Invalid Configuration value'));
            else
            {
                Configuration::updateValue('ps_sidebar_menu_noski', $my_module_name);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }
        return $output.$this->displayForm();
    }

    public function displayForm()
    {
        // Get default language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Init Fields form array
        $fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Settings'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Configuration value'),
                    'name' => 'ps_sidebar_menu_noski',
                    'size' => 20,
                    'required' => true
                )
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            )
        );

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                        '&token='.Tools::getAdminTokenLite('AdminModules'),
                ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );

        // Load current value
        $helper->fields_value['ps_sidebar_menu_noski'] = Configuration::get('ps_sidebar_menu_noski');

        return $helper->generateForm($fields_form);
    }

//    public function install()
//    {
//        if (!parent::install() ||
//            !$this->registerHook('header'))
//            return false;
//
//        //$this->initConfiguration();
//
//        return true;
//    }
//
//    public function uninstall()
//    {
//        if (!parent::uninstall())
//            return false;
//
//        //$this->deleteConfiguration();
//
//        return true;
//    }


//    public function install()
//    {
//        if (Shop::isFeatureActive())
//            Shop::setContext(Shop::CONTEXT_ALL);
//
//        if (!parent::install() ||
//            !$this->registerHook('leftColumn') ||
//            !$this->registerHook('header') ||
//            !Configuration::updateValue('ps_sidebar_menu_noski', 'my friend')
//        )
//            return false;
//
//        return true;
//    }
//
//    public function uninstall()
//    {
//        if (!parent::uninstall() ||
//            !Configuration::deleteByName('ps_sidebar_menu_noski')
//        )
//            return false;
//
//        return true;
//    }

//    public function getContent()
//    {
//        $output = null;
//
//        if (Tools::isSubmit('submitSplashScreen'))
//        {
//            $settings = $this->getConfiguration();
//
//            $splashscreen_expires = strval(Tools::getValue('expires'));
//            $splashscreen_id_cms = (int)Tools::getValue('id_cms');
//            $splashscreen_url = strval(Tools::getValue('url'));
//
//            if(!filter_var($splashscreen_url, FILTER_VALIDATE_URL))
//                $output .= $this->displayError($this->l('Redirect URL must be a valid URL'));
//
//            elseif(!Validate::isInt($splashscreen_expires) ||
//                $splashscreen_expires < 1 ||
//                $splashscreen_expires > 365)
//                $output .= $this->displayError($this->l('Cookie expiration must be a number of days between 1 and 365'));
//
//            else {
//                if($splashscreen_expires != (int)$settings['expires']) {
//                    $settings['cookie'] = md5(time());
//                }
//                $settings['expires'] = $splashscreen_expires;
//                $settings['id_cms'] = $splashscreen_id_cms;
//                $settings['url'] = $splashscreen_url;
//
//                $this->updateConfiguration($settings);
//                $output .= $this->displayConfirmation($this->l('Settings updated'));
//            }
//        }
//        return $output.$this->renderForm();
//    }
//
//    public function renderForm()
//    {
//        $options = $this->listCMSPages();
//
//        $fields_form = array(
//            'form' => array(
//                'legend' => array(
//                    'title' => $this->l('Settings'),
//                    'icon' => 'icon-cog'
//                ),
//                'input' => array(
//                    array(
//                        'type' => 'select',
//                        'label' => $this->l('CMS page to display'),
//                        'desc' => $this->l('The content of the selected page will be displayed in the pop-up.'),
//                        'name' => 'id_cms',
//                        'required' => true,
//                        'options' => array(
//                            'query' => $options,
//                            'id' => 'id',
//                            'name' => 'name',
//                        ),
//                    ),
//                    array(
//                        'type' => 'text',
//                        'label' => $this->l('Redirect URL'),
//                        'name' => 'url',
//                        'class' => 'fixed-width-xl',
//                        'required' => true,
//                        'desc' => $this->l('The user will be returned to this page if the user clicks on Exit.'),
//                    ),
//                    array(
//                        'type' => 'text',
//                        'label' => $this->l('Cookie expiration'),
//                        'name' => 'expires',
//                        'class' => 'fixed-width-xs',
//                        'suffix' => $this->l('days'),
//                        'maxlength' => 3,
//                        'required' => true,
//                        'desc' => $this->l('After this time, the pop-up will appear again.'),
//                    ),
//                ),
//                'submit' => array(
//                    'title' => $this->l('Save'),
//                ),
//            ),
//        );
//
//        $helper = new HelperForm();
//        $helper->show_toolbar = false;
//        $helper->table = $this->table;
//        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
//        $helper->default_form_language = $lang->id;
//        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
//        $helper->identifier = $this->identifier;
//        $helper->submit_action = 'submitSplashScreen';
//        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
//        $helper->token = Tools::getAdminTokenLite('AdminModules');
//        $helper->tpl_vars = array(
//            'fields_value' => $this->getConfigFieldsValues(),
//            'languages' => $this->context->controller->getLanguages(),
//            'id_language' => $this->context->language->id
//        );
//
//        return $helper->generateForm(array($fields_form));
//    }
//
//    public function hookHeader($params)
//    {
//        $settings = $this->getConfiguration();
//
//        $this->context->controller->addJqueryPlugin('cooki-plugin');
//        $this->context->controller->addJqueryPlugin('cookie-plugin');
//        $this->context->controller->addJqueryPlugin('fancybox');
//
//        $this->context->controller->addJS($this->_path.'js/splashscreen.js');
//        $this->context->controller->addCSS($this->_path.'css/splashscreen.css');
//
//        $result = Db::getInstance()->getRow('SELECT * FROM '._DB_PREFIX_.'cms_lang WHERE id_cms = '.(int)$settings['id_cms'].' AND id_lang='.(int)$this->context->language->id);
//        $splashscreen_text = $result['content'];
//
//        $this->smarty->assign(array(
//            'splashscreen_cookie' => $settings['cookie'],
//            'splashscreen_expires' => (int)$settings['expires'],
//            'splashscreen_text' => $splashscreen_text,
//            'splashscreen_url' => $settings['url'],
//            'splashscreen_enter' => $this->l('Enter'),
//            'splashscreen_exit' => $this->l('Exit'),
//        ));
//
//        return $this->display(__FILE__, '/splashscreen.tpl');
//    }
//
//    protected function listCMSPages()
//    {
//        $cms = CMS::listCms($this->context->language->id);
//        $list = array();
//        foreach($cms AS $page)
//        {
//            $list[] = array(
//                'id' => (int)$page['id_cms'],
//                'name' => $page['meta_title'].' (ID: '.$page['id_cms'].')',
//            );
//        }
//        return $list;
//    }
//
//    protected function getConfigFieldsValues()
//    {
//        $settings = $this->getConfiguration();
//
//        return array(
//            'expires' => Tools::getValue('expires', $settings['expires']),
//            'id_cms' => Tools::getValue('id_cms', $settings['id_cms']),
//            'url' => Tools::getValue('url', $settings['url'])
//        );
//    }
//
//    protected function initConfiguration()
//    {
//        $settings = array(
//            'cookie' => md5(time),
//            'expires' => 7,
//            'id_cms' => 2,
//            'url' => 'http://www.google.com/'
//        );
//        Configuration::updateValue('SPLASHSCREEN_SETTINGS', serialize($settings));
//    }
//
//    protected function getConfiguration()
//    {
//        $settings = unserialize(Configuration::get('SPLASHSCREEN_SETTINGS'));
//        return $settings;
//    }
//
//    protected function updateConfiguration($settings)
//    {
//        Configuration::updateValue('SPLASHSCREEN_SETTINGS', serialize($settings));
//    }
//
//    protected function deleteConfiguration(){
//        Configuration::deleteByName('SPLASHSCREEN_SETTINGS');
//    }
}
