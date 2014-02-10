<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:25:16
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Tools\Index.php" */ ?>
<?php /*%%SmartyHeaderCode:2105352f89afc010734-76079114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094f0b12f4cc7a67bc1f0642946761dd0e47a747' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Tools\\Index.php',
      1 => 1391772940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2105352f89afc010734-76079114',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89afc030a55_12819772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89afc030a55_12819772')) {function content_52f89afc030a55_12819772($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>


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
					<h2 class="title">Tools System</h2>
					<section class="page-actions">
						
					</section>
				</header>

			</section>
		</form>
	</div>
</main>

<script type="text/javascript">
	
</script><?php }} ?>
