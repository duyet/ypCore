<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:25:00
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Setting\Template.php" */ ?>
<?php /*%%SmartyHeaderCode:1817752f89aec50a809-40332021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a4e9663a6c5e5a1ea546647a5495d99f58ac47' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Setting\\Template.php',
      1 => 1392024172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817752f89aec50a809-40332021',
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
    'text_site_template' => 0,
    'template' => 0,
    '_template' => 0,
    'current_template' => 0,
    'text_admin_template' => 0,
    'admin_template' => 0,
    'current_admin_template' => 0,
    'text_cache_template' => 0,
    'cache_template' => 0,
    'text_on' => 0,
    'text_off' => 0,
    'button_save_setting' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89aec581702_90367449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89aec581702_90367449')) {function content_52f89aec581702_90367449($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>
<main role="main" id="main">	<aside id="notifications">		<!-- Notifications -->		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="notification-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a href="#" class="close"></a></div><?php }?>		<?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?><div class="notification-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a href="#" class="close"></a></div><?php }?>	</aside>	<div class="wrapper">		<?php echo $_smarty_tpl->tpl_vars['Leftmenu']->value;?>
				<section class="settings-content active" id="general" style="display: block;">			<header>				<button class="button-back">Back</button>				<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['text_pagetitle']->value;?>
</h2>				<section class="page-actions">									</section>			</header>			<section class="content">				<form id="settings-general" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post">					<div class="form-group">		                <label for="template"><?php echo $_smarty_tpl->tpl_vars['text_site_template']->value;?>
</label>		                <select name="template">						<?php  $_smarty_tpl->tpl_vars['_template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_template']->key => $_smarty_tpl->tpl_vars['_template']->value) {
$_smarty_tpl->tpl_vars['_template']->_loop = true;
?>							<option value="<?php echo $_smarty_tpl->tpl_vars['_template']->value['dir'];?>
" <?php if (($_smarty_tpl->tpl_vars['_template']->value['dir']==$_smarty_tpl->tpl_vars['current_template']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_template']->value['name'];?>
</option>						<?php } ?>						</select>		                <p></p>		            </div>		            <div class="form-group">		                <label for="admin_template"><?php echo $_smarty_tpl->tpl_vars['text_admin_template']->value;?>
</label>		                <select name="admin_template" >						<?php  $_smarty_tpl->tpl_vars['_template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin_template']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_template']->key => $_smarty_tpl->tpl_vars['_template']->value) {
$_smarty_tpl->tpl_vars['_template']->_loop = true;
?>							<option value="<?php echo $_smarty_tpl->tpl_vars['_template']->value['dir'];?>
" <?php if (($_smarty_tpl->tpl_vars['_template']->value['dir']==$_smarty_tpl->tpl_vars['current_admin_template']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_template']->value['name'];?>
</option>						<?php } ?>						</select>		                <p></p>		            </div>		            <div class="form-group">		                <label for="cache_template"><?php echo $_smarty_tpl->tpl_vars['text_cache_template']->value;?>
</label>						<input type="radio" name="cache_template" value="1" <?php if ($_smarty_tpl->tpl_vars['cache_template']->value=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
 						<input type="radio" name="cache_template" value="0" <?php if ($_smarty_tpl->tpl_vars['cache_template']->value=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />		                <p></p>		            </div>		            <section class="page-actions">						<button type="submit" name="submit" class="button-save"><?php echo $_smarty_tpl->tpl_vars['button_save_setting']->value;?>
</button>					</section>				</form>			</section>		</section>	</div></main><?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
