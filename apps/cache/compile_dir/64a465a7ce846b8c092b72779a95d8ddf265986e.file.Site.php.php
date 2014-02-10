<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:17:10
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Setting\Site.php" */ ?>
<?php /*%%SmartyHeaderCode:2492552f899165e0376-97951411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a465a7ce846b8c092b72779a95d8ddf265986e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Setting\\Site.php',
      1 => 1392003030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2492552f899165e0376-97951411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'Leftmenu' => 0,
    'text_pagetitle' => 0,
    'form_action' => 0,
    'text_setting_sitetitle' => 0,
    'settings' => 0,
    'text_setting_description' => 0,
    'text_setting_site_keywork' => 0,
    'text_setting_firewall' => 0,
    'text_on' => 0,
    'text_off' => 0,
    'text_setting_sitelanguage' => 0,
    'text_en' => 0,
    'text_vi' => 0,
    'text_setting_admin_language' => 0,
    'text_setting_addthis' => 0,
    'text_setting_addthis_id' => 0,
    'text_setting_default_module' => 0,
    'button_save_setting' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89916683ff7_63984371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89916683ff7_63984371')) {function content_52f89916683ff7_63984371($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>


<main role="main" id="main">
	<aside id="notifications">
		<!-- Notifications -->
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="notification-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a href="#" class="close"></a></div><?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?><div class="notification-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a href="#" class="close"></a></div><?php }?>
	</aside>

	<div class="wrapper">
		<?php echo $_smarty_tpl->tpl_vars['Leftmenu']->value;?>

		

		<section class="settings-content active" id="general" style="display: block;">
			<header>
				<button class="button-back">Back</button>
				<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['text_pagetitle']->value;?>
</h2>
				<section class="page-actions">
					
				</section>
			</header>


			<section class="content">
				<form id="settings-general" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post">

					<div class="form-group">
		                <label for="site_title"><?php echo $_smarty_tpl->tpl_vars['text_setting_sitetitle']->value;?>
</label>
		                <input id="site_title" name="site_title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_title'];?>
">
		                <p></p>
		            </div>

		          	<div class="form-group">
		                <label for="site_description"><?php echo $_smarty_tpl->tpl_vars['text_setting_description']->value;?>
</label>
		                <input id="site_description" name="site_description" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_description'];?>
">
		                <p></p>
		            </div>

		            <div class="form-group">
		                <label for="site_keywork"><?php echo $_smarty_tpl->tpl_vars['text_setting_site_keywork']->value;?>
</label>
		                <input id="site_keywork" name="site_keywork" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['site_keywork'];?>
">
		                <p></p>
		            </div>

					<div class="form-group">
		                <label for="firewall"><?php echo $_smarty_tpl->tpl_vars['text_setting_firewall']->value;?>
</label>
			                <input type="radio" name="firewall" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['firewall']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
<br />
			                <input type="radio" name="firewall" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['firewall']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />
					        <p></p>
		            </div>

		            <div class="form-group">
		                <label for="language"><?php echo $_smarty_tpl->tpl_vars['text_setting_sitelanguage']->value;?>
</label>
			                <select name="language">
								<option value="en" <?php if ($_smarty_tpl->tpl_vars['settings']->value['language']=='en') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['text_en']->value;?>
</option>
								<option value="vi" <?php if ($_smarty_tpl->tpl_vars['settings']->value['language']=='vi') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['text_vi']->value;?>
</option>
							</select>
						<p></p>
		            </div>

		            <div class="form-group">
		                <label for="admin_language"><?php echo $_smarty_tpl->tpl_vars['text_setting_admin_language']->value;?>
</label>
			                <select name="admin_language">
								<option value="en" <?php if ($_smarty_tpl->tpl_vars['settings']->value['admin_language']=='en') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['text_en']->value;?>
</option>
								<option value="vi" <?php if ($_smarty_tpl->tpl_vars['settings']->value['admin_language']=='vi') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['text_vi']->value;?>
</option>
							</select>
						<p></p>
		            </div>

		            <div class="form-group">
		                <label for="addthis"><?php echo $_smarty_tpl->tpl_vars['text_setting_addthis']->value;?>
</label>
			                <input type="radio" name="addthis" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['addthis']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
<br />
			                <input type="radio" name="addthis" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['addthis']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />
					        <p></p>
		            </div>

		            <div class="form-group">
		                <label for="addthis_id"><?php echo $_smarty_tpl->tpl_vars['text_setting_addthis_id']->value;?>
</label>
			                <input id="addthis_id" name="addthis_id" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['addthis_id'];?>
" placeholder="ra-4e911dd9207371f5">
					        <p></p>
		            </div>

		            <div class="form-group">
		                <label for="default_module"><?php echo $_smarty_tpl->tpl_vars['text_setting_default_module']->value;?>
</label>
		                <input id="default_module" name="default_module" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['default_module'];?>
">
		                <p></p>
		            </div>

		            <section class="page-actions">
						<button type="submit" name="submit" class="button-save"><?php echo $_smarty_tpl->tpl_vars['button_save_setting']->value;?>
</button>
					</section>
				</form>
			</section>
		</section>
	</div>
</main>

<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
