<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 02:57:46
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Setting\Server.php" */ ?>
<?php /*%%SmartyHeaderCode:1406552f58f1a3513d2-25883921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154310acb8ed195a87c8be038c0929db9473c7b3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Setting\\Server.php',
      1 => 1391765300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406552f58f1a3513d2-25883921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'form_action' => 0,
    'text_pagetitle' => 0,
    'button_save_setting' => 0,
    'disk_use_on_total' => 0,
    'text_disk_space' => 0,
    'disk_class' => 0,
    'disk_used' => 0,
    'text_host_name' => 0,
    'text_server_loadavg' => 0,
    'serverLoadAvg' => 0,
    'text_setting_phpinfo' => 0,
    'phpinfo_link' => 0,
    'text_setting_debug' => 0,
    'settings' => 0,
    'text_on' => 0,
    'text_off' => 0,
    'text_setting_upload_dir' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f58f1a4c2798_42498116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f58f1a4c2798_42498116')) {function content_52f58f1a4c2798_42498116($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>
<main role="main" id="main">	<aside id="notifications">		<!-- Notifications -->		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="notification-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a href="#" class="close"></a></div><?php }?>		<?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?><div class="notification-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a href="#" class="close"></a></div><?php }?>	</aside>	<div class="wrapper">		<?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable("setting", null, 0);?>		<?php echo $_smarty_tpl->getSubTemplate ("./Leftmenu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
			<form id="settings-general" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post">		<section class="settings-content active" id="general" style="display: block;">			<header>				<button class="button-back">Back</button>				<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['text_pagetitle']->value;?>
</h2>				<section class="page-actions">					<button type="submit" name="submit" class="button-save" ><?php echo $_smarty_tpl->tpl_vars['button_save_setting']->value;?>
</button>				</section>			</header>			<section class="content">			        <fieldset>			        	<?php if ($_smarty_tpl->tpl_vars['disk_use_on_total']->value) {?>			            <div class="form-group">			                <label for="blog-title"><?php echo $_smarty_tpl->tpl_vars['text_disk_space']->value;?>
</label>			                <span class="progress">								<span class="<?php echo $_smarty_tpl->tpl_vars['disk_class']->value;?>
" style="width: <?php echo $_smarty_tpl->tpl_vars['disk_use_on_total']->value;?>
%;"><?php echo $_smarty_tpl->tpl_vars['disk_used']->value;?>
 MB (<?php echo $_smarty_tpl->tpl_vars['disk_use_on_total']->value;?>
%)</span>							</span>			            </div>			            <?php }?>			            <div class="form-group">			                <label for="blog-description"><?php echo $_smarty_tpl->tpl_vars['text_host_name']->value;?>
</label>			               	<?php echo $_smarty_tpl->tpl_vars['text_server_loadavg']->value;?>
: <span id="serverLoadAvg"><?php echo $_smarty_tpl->tpl_vars['serverLoadAvg']->value;?>
</span>% <span id="serverRefresh"></span>			            </div>			        </fieldset>			            <div class="form-group">			                <label for="blog-logo">Blog Logo</label>			                			                    <a class="button-add js-modal-logo">Upload Image</a>			                			                <p>Display a sexy logo for your publication</p>			            </div>			            <div class="form-group">			                <label for="blog-cover">Blog Cover</label>			                			                    <a class="button-add js-modal-cover">Upload Image</a>			                			                <p>Display a cover image on your site</p>			            </div>			        <fieldset>			            			            <div class="form-group">			                <label for=""><?php echo $_smarty_tpl->tpl_vars['text_setting_phpinfo']->value;?>
</label>				                <p><a href="./server/phpinfo" target="_blank"><?php echo $_smarty_tpl->tpl_vars['phpinfo_link']->value;?>
</a></p>			            </div>			            <div class="form-group">			                <label for="debug"><?php echo $_smarty_tpl->tpl_vars['text_setting_debug']->value;?>
</label>				                <input type="radio" name="debug" value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['debug']=='1') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
<br />				                <input type="radio" name="debug" value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['debug']=='0') {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['text_off']->value;?>
<br />						        <p></p>			            </div>			            <div class="form-group">			                <label for="upload_dir"><?php echo $_smarty_tpl->tpl_vars['text_setting_upload_dir']->value;?>
</label>			                <input id="tmp" name="upload_dir" type="text" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['upload_dir'];?>
">			                <p></p>			            </div>			        </fieldset>			   			</section>		</section></form>	</div></main><?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
