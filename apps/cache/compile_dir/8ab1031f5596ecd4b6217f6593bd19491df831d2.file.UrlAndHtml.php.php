<?php /* Smarty version Smarty-3.1.16, created on 2014-02-09 15:49:48
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Setting\UrlAndHtml.php" */ ?>
<?php /*%%SmartyHeaderCode:1082552f7958cd4a140-22175159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ab1031f5596ecd4b6217f6593bd19491df831d2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Setting\\UrlAndHtml.php',
      1 => 1391600129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1082552f7958cd4a140-22175159',
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
    'text_setting_compresspage' => 0,
    'settings' => 0,
    'text_on' => 0,
    'text_off' => 0,
    'text_setting_compression_level' => 0,
    'text_setting_compress_html' => 0,
    'text_setting_rewrite' => 0,
    'text_setting_google_analytics_code' => 0,
    'text_setting_url_lowcase' => 0,
    'text_setting_static_url_active' => 0,
    'text_setting_static_url' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f7958ce8bf43_70738765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f7958ce8bf43_70738765')) {function content_52f7958ce8bf43_70738765($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['body_class'] = new Smarty_variable("settings", null, 0);?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>
<main role="main" id="main">	<aside id="notifications">		<!-- Notifications -->		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="notification-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a href="#" class="close"></a></div><?php }?>		<?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?><div class="notification-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a href="#" class="close"></a></div><?php }?>	</aside>	<div class="wrapper">		<?php echo $_smarty_tpl->tpl_vars['Leftmenu']->value;?>
				<section class="settings-content active" id="general" style="display: block;">			<header>				<button class="button-back">Back</button>				<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['text_pagetitle']->value;?>
</h2>				<section class="page-actions">									</section>			</header>			<section class="content">			    <form id="settings-general" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post">			    	<fieldset>			    		<div class="form-group">			                <label for="compress_page"><?php echo $_smarty_tpl->tpl_vars['text_setting_compresspage']->value;?>
</label>				                <input type="radio" name="compress_page" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['compress_page']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
				                <input type="radio" name="compress_page" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['compress_page']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
						        <p></p>			            </div>			            <div class="form-group">			                <label for="compression_level"><?php echo $_smarty_tpl->tpl_vars['text_setting_compression_level']->value;?>
</label>			                <input id="tmp" name="compression_level" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['compression_level'];?>
">			                <p></p>			            </div>			            <div class="form-group">			                <label for="compress_html"><?php echo $_smarty_tpl->tpl_vars['text_setting_compress_html']->value;?>
</label>				                <input type="radio" name="compress_html" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['compress_html']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
<br />				                <input type="radio" name="compress_html" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['compress_html']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />						        <p></p>			            </div>			             <div class="form-group">			                <label for="rewrite"><?php echo $_smarty_tpl->tpl_vars['text_setting_rewrite']->value;?>
</label>				                <input type="radio" name="rewrite" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['rewrite']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
<br />				                <input type="radio" name="rewrite" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['rewrite']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />						        <p></p>			            </div>			             <div class="form-group">			                <label for="google_analytics_code"><?php echo $_smarty_tpl->tpl_vars['text_setting_google_analytics_code']->value;?>
</label>			                <input id="tmp" name="google_analytics_code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['google_analytics_code'];?>
">			                <p></p>			            </div>			            <div class="form-group">			                <label for="url_lowcase"><?php echo $_smarty_tpl->tpl_vars['text_setting_url_lowcase']->value;?>
</label>				                <input type="radio" name="url_lowcase" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['url_lowcase']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
<br />				                <input type="radio" name="url_lowcase" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['url_lowcase']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />						        <p><i>index/home</i> instead <i>Index/Home</i></p>			            </div>			            <div class="form-group">			                <label for="static_url_active"><?php echo $_smarty_tpl->tpl_vars['text_setting_static_url_active']->value;?>
</label>				                <input type="radio" name="static_url_active" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['static_url_active']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
<br />				                <input type="radio" name="static_url_active" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['static_url_active']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />						        <p></p>			            </div>			            <div class="form-group">			                <label for="static_url"><?php echo $_smarty_tpl->tpl_vars['text_setting_static_url']->value;?>
</label>			                <input id="tmp" name="static_url" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['static_url'];?>
">			                <p></p>			            </div>			        </fieldset>			        <section class="page-actions">						<button type="submit" name="submit" class="button-save">Save</button>					</section>			    </form>			</section>		</section>	</div></main><?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
