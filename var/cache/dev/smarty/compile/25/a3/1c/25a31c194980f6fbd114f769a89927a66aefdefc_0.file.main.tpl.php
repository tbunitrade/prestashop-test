<?php
/* Smarty version 3.1.32, created on 2018-09-13 20:12:28
  from '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/admin993rzsfnh/themes/default/template/controllers/translations/helpers/view/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a9a7c436cc8_40730996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a31c194980f6fbd114f769a89927a66aefdefc' => 
    array (
      0 => '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/admin993rzsfnh/themes/default/template/controllers/translations/helpers/view/main.tpl',
      1 => 1535874860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a9a7c436cc8_40730996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4206476095b9a9a7c2800c6_94284950', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_4206476095b9a9a7c2800c6_94284950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_4206476095b9a9a7c2800c6_94284950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		function chooseTypeTranslation(id_lang)
		{
			getE('translation_lang').value = id_lang;

      var formTranslation = $('form#typeTranslationForm');
      var typeOption = $('#type option:selected');

      if ('mails' == $('#type option:selected').val()) {
        typeOption = $('#ps_email_selector select[name="selected-emails"] option:selected');
      }

      if ('modules' == $('#type option:selected').val()) {
        urlToTranslate = $('#ps_module_selector select[name="selected-modules"] option:selected').data('url-to-translate');
        if ('' !== urlToTranslate) {
          formTranslation.attr(
            'action',
            urlToTranslate + '&lang=' + id_lang
          );
        } else {
          formTranslation.attr('action', formTranslation.data('moduleaction'));
        }
      } else {
        if ('legacy' === typeOption.data('controller')) {
          formTranslation.attr('action', formTranslation.data('legacyaction'));
        } else {
          formTranslation.attr('action', formTranslation.data('sfaction'));
        }
      }

      formTranslation.submit();
		}

		$(document).ready(function() {
      var themeSelector = $('#ps_theme_selector');
      var themeSelectorSelect = themeSelector.find('select[name="selected-theme"]');
      var themeCoreOption = themeSelector.find('select[name="selected-theme"] option#core-option');

      var emailSelector = $('#ps_email_selector');
      var emailSelectorSelect = emailSelector.find('select[name="selected-emails"]');

      var moduleSelector = $('#ps_module_selector');
      var moduleSelectorSelect = moduleSelector.find('select[name="selected-modules"]');

      var allSelectors = $('select[name="selected-modules"], select[name="selected-emails"], select[name="selected-theme"], select[name="locale"]');

      themeSelector.hide();
      themeSelectorSelect.attr('disabled', true);

      emailSelector.hide();
      emailSelectorSelect.attr('disabled', true);

      moduleSelector.hide();
      moduleSelectorSelect.attr('disabled', true);

      $('#type').on('change', function () {

        // reset all select
        allSelectors.each(function () {
          $(this).prop('selectedIndex',0);
        });

        if ('mails' === $(this).val()) {
          emailSelector.show();
          emailSelectorSelect.attr('disabled', false);
        } else {
          emailSelector.hide();
          emailSelectorSelect.attr('disabled', true);
        }

        if ('modules' === $(this).val()) {
          moduleSelector.show();
          moduleSelectorSelect.attr('disabled', false);
        } else {
          moduleSelector.hide();
          moduleSelectorSelect.attr('disabled', true);
        }

        if ('themes' === $(this).val()) {
          themeSelector.find('select[name="selected-theme"]').prop('selectedIndex',1);
          themeCoreOption.hide().attr('disabled', true);
        } else {
          themeCoreOption.show().attr('disabled', false);
        }

        if (1 === $('#type option:selected').data('choicetheme')) {
          themeSelector.show();
          themeSelectorSelect.attr('disabled', false);
        } else {
          themeSelector.hide();
          themeSelectorSelect.attr('disabled', true);
        }
      });

      $('select[name="selected-emails"]').on('change', function() {
        if ('subject' === $(this).val()) {
          themeSelector.hide();
          themeSelectorSelect.attr('disabled', true);
        } else {
          themeSelector.show();
          themeSelectorSelect.attr('disabled', false);
        }
      });

			$('#modify-translations').click(function() {
				var languages = $('#translations-languages option');
				var i;
				var selectedLanguage;

				for (i = 0; i < languages.length; i++) {
					if (languages[i].selected) {
						selectedLanguage = languages[i].value;

						break;
					}
				}

        if ('modules' === $('#type option:selected').val() && '' === $('[name="selected-modules"]').val()) {
          alert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module!','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
');

          return;
        }

				if (0 === selectedLanguage.length) {
					alert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select your language!','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
');

					return;
				}

				chooseTypeTranslation(selectedLanguage);
			});
		});
	<?php echo '</script'; ?>
>
  <form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'sf','route'=>'admin_international_translations_list'),$_smarty_tpl ) );?>
"
        data-sfaction="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'sf','route'=>'admin_international_translations_list'),$_smarty_tpl ) );?>
"
        data-moduleaction="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'sf','route'=>'admin_international_translations_module'),$_smarty_tpl ) );?>
"
        data-legacyaction="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminTranslations',true);?>
"
        id="typeTranslationForm" class="form-horizontal">
    <div class="panel">
      <h3>
        <i class="icon-file-text"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify translations','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

      </h3>
      <p class="alert alert-info">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here you can modify translations for every line of text inside PrestaShop.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
<br />
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First, select a type of translation (such as "Back office" or "Installed modules"), and then select the language you want to translate strings in.','html'=>true,'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

      </p>
      <div class="form-group">
        <input type="hidden" name="controller" value="AdminTranslations" />
        <input type="hidden" name="lang" id="translation_lang" value="0" />
        <label class="control-label col-lg-3" for="type"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type of translation','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
        <div class="col-lg-4">
          <select name="type" id="type">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translations_type']->value, 'array', false, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['array']->value) {
?>
              <?php if (isset($_smarty_tpl->tpl_vars['array']->value['name'])) {?><option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" data-controller="<?php if ($_smarty_tpl->tpl_vars['array']->value['sf_controller']) {?>sf<?php } else { ?>legacy<?php }?>" data-choicetheme="<?php echo $_smarty_tpl->tpl_vars['array']->value['choice_theme'];?>
"><?php echo $_smarty_tpl->tpl_vars['array']->value['name'];?>
</option><?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
      <div class="form-group" id="ps_email_selector">
        <label class="control-label col-lg-3" for="selected-emails"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select the type of email content','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
        <div class="col-lg-4">
          <select name="selected-emails">
            <option value="subject" data-controller="sf"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
            <option value="body" data-controller="legacy"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Body','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</option>
          </select>
        </div>
      </div>
      <div class="form-group" id="ps_module_selector">
        <label class="control-label col-lg-3" for="selected-modules"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select your module','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
        <div class="col-lg-4">
          <select name="selected-modules" class="chosen">
            <option id="no-module" value="">---</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
" data-url-to-translate="<?php echo $_smarty_tpl->tpl_vars['module']->value['urlToTranslate'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['displayName'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
      <div class="form-group" id="ps_theme_selector">
        <label class="control-label col-lg-3" for="selected-theme"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select your theme','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
        <div class="col-lg-4">
          <select name="selected-theme">
              <option id="core-option" value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Core (no theme selected)','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value == $_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-lg-3" for="translations-languages"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select your language','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
        <div class="col-lg-4">
          <select name="locale" id="translations-languages">
            <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
      </div>
      <div class="panel-footer">
        <button type="button" class="btn btn-default pull-right" id="modify-translations">
          <i class="process-icon-edit"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

        </button>
      </div>
    </div>
  </form>

	<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8' ));?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-download"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add / Update a language','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

			</h3>
			<div id="submitAddLangContent" class="form-group">
				<p class="alert alert-info">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can add or update a language directly from the PrestaShop website here.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

				</p>
				<?php if ($_smarty_tpl->tpl_vars['packs_to_update']->value || $_smarty_tpl->tpl_vars['packs_to_install']->value) {?>
					<label class="control-label col-lg-3" for="params_import_language"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select the language you want to add or update','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-6">
								<select id="params_import_language" name="params_import_language" class="chosen" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
								<optgroup label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update a language','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packs_to_update']->value, 'name', false, 'locale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</optgroup>
								<optgroup label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a language','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packs_to_install']->value, 'name', false, 'locale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value => $_smarty_tpl->tpl_vars['name']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['locale']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</optgroup>
							</select>
							</div>
						</div>
					</div>

				<?php } else { ?>
					<p class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cannot connect to the PrestaShop website to get the language list.','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>
</p>
				<?php }?>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitAddLanguage" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
					<i class="process-icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add or update a language','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

				</button>
			</div>
		</div>
	</form>
	<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8' ));?>
" method="post" enctype="multipart/form-data" class="form-horizontal hide">
		<div class="panel">
			<h3>
				<i class="icon-download"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import a language pack manually','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

			</h3>
			<p class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If the language file format is ISO_code.gzip (e.g. "us.gzip"), and the language corresponding to this package does not exist, it will automatically be created.','html'=>true,'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning: This will replace all of the existing data inside the destination language.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

			</p>
			<div class="form-group">
				<label for="importLanguage" class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language pack to import','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<div class="form-group">
						<div class="col-lg-12">
							<input id="importLanguage" type="file" name="file" class="hide" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?> />
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input id="file-name" type="text" class="disabled" name="filename" readonly />
								<span class="input-group-btn">
									<button id="file-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
										<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add file','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="selectThemeForImport" class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select your theme','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<select name="theme[]" id="selectThemeForImport" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?> <?php if (count($_smarty_tpl->tpl_vars['themes']->value) > 1) {?>multiple="multiple"<?php }?> >
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getDirectory();?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
 &nbsp;</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitImport" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?> ><i class="process-icon-upload"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</form>
	<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'sf','route'=>'admin_international_translations_export_theme'),$_smarty_tpl ) );?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-upload"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export a language','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>

			</h3>
			<p class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export data from one language to a file (language pack).','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
<br />
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select which theme you would like to export your translations to.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

			</p>
			<div class="form-group">
				<label class="control-label col-lg-3" for="iso_code"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<select name="iso_code" id="iso_code" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="export-theme"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select your theme','d'=>'Admin.International.Feature'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<select name="theme-name" id="export-theme" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value == $_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitExport" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>><i class="process-icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</form>
	<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8' ));?>
" method="post" class="form-horizontal">
		<div class="panel">
			<h3>
				<i class="icon-copy"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy'),$_smarty_tpl ) );?>

			</h3>
			<p class="alert alert-info">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copies data from one language to another.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
<br />
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning: This will replace all of the existing data inside the destination language.','d'=>'Admin.International.Help'),$_smarty_tpl ) );?>
<br />
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If necessary [1][2] you must first create a new language[/1].','sprintf'=>array('[1]'=>"<a href=\"".((string)$_smarty_tpl->tpl_vars['url_create_language']->value)."\" class=\"btn btn-link\">",'[/1]'=>'</a>','[2]'=>'<i class="icon-external-link-sign"></i>'),'d'=>'Admin.International.Help'),$_smarty_tpl ) );?>

			</p>
			<div class="form-group">
				<label class="control-label col-lg-3 required" for="fromLang"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<select name="fromLang" id="fromLang" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-lg-4">
					<select name="fromTheme" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value == $_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3" for="toLang"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-4">
					<select name="toLang" id="toLang" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-lg-4">
					<select name="toTheme" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['current_theme_name']->value == $_smarty_tpl->tpl_vars['theme']->value->getName()) {?>selected=selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<p class="col-lg-12 text-muted required">
					<span class="text-danger">*</span>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language files must be complete to allow copying of translations.','d'=>'Admin.International.Notification'),$_smarty_tpl ) );?>

				</p>
			</div>
			<div class="panel-footer">
				<button type="submit" name="submitCopyLang" class="btn btn-default pull-right" <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?> disabled="disabled" <?php }?>><i class="process-icon-duplicate"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</form>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('#file-selectbutton').click(function(e) {
			$('#importLanguage').trigger('click');
		});

		$('#file-name').click(function(e) {
			$('#importLanguage').trigger('click');
		});

		$('#importLanguage').change(function(e) {
			if ($(this)[0].files !== undefined)
			{
				var files = $(this)[0].files;
				var name  = '';

				$.each(files, function(index, value) {
					name += value.name+', ';
				});

				$('#file-name').val(name.slice(0, -2));
			}
			else // Internet Explorer 9 Compatibility
			{
				var name = $(this).val().split(/[\\/]/);
				$('#file-name').val(name[name.length-1]);
			}
		});
	});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "override_tpl"} */
}
