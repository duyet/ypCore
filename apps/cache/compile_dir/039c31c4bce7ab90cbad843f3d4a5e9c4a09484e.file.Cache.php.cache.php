<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:25:19
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Tools\Cache.php" */ ?>
<?php /*%%SmartyHeaderCode:1899452f89affa675a9-22599249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039c31c4bce7ab90cbad843f3d4a5e9c4a09484e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Tools\\Cache.php',
      1 => 1391773222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899452f89affa675a9-22599249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'Leftmenu' => 0,
    'form_action' => 0,
    'text_pagetitle' => 0,
    'text_clean_cache' => 0,
    'text_clean_compress_template_cache' => 0,
    'text_cache' => 0,
    'cache' => 0,
    'text_compress_template_cache' => 0,
    'template' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89affaf6290_75551834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89affaf6290_75551834')) {function content_52f89affaf6290_75551834($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>


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

		
		<form id="settings-general" novalidate="novalidate" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="post">
			<section class="settings-content active" id="general" style="display: block;">
				<header>
					<button class="button-back">Back</button>
					<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['text_pagetitle']->value;?>
</h2>
					<section class="page-actions">
						<button type="submit" name="cleanup_cache" value="true" class="button-save" ><?php echo $_smarty_tpl->tpl_vars['text_clean_cache']->value;?>
</button>
						<button type="submit" name="cleanup_compress_template_cache" value="true" class="button-save" ><?php echo $_smarty_tpl->tpl_vars['text_clean_compress_template_cache']->value;?>
</button>
					</section>
				</header>

				<section class="content">
					<h3><?php echo $_smarty_tpl->tpl_vars['text_cache']->value;?>
</h3>
					<textarea rows="8" cols="100" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['cache']->value;?>
</textarea>

					<h3><?php echo $_smarty_tpl->tpl_vars['text_compress_template_cache']->value;?>
</h3>
					<textarea rows="8" cols="100" style="width:100%"><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</textarea>
				</section>
			</section>
		</form>
	</div>
</main>

<script type="text/javascript">
	
</script>

<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
