<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:25:15
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Tools\Leftmenu.php" */ ?>
<?php /*%%SmartyHeaderCode:603652f89afbef4b62-89237068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e3b133861b6a812c1aeb4abde9d042ed786015f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Tools\\Leftmenu.php',
      1 => 1391742728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603652f89afbef4b62-89237068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_active' => 0,
    'links' => 0,
    'text_cache' => 0,
    'text_backup' => 0,
    'text_fixsystem' => 0,
    'text_update' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89afbf2dfe5_36836555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89afbf2dfe5_36836555')) {function content_52f89afbf2dfe5_36836555($_smarty_tpl) {?><aside class="settings-sidebar" role="complementary">
	<header><h1 class="title">Tools</h1></header>
	<nav class="settings-menu">
	    <ul>
	        <li class="cache <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='server') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['cache'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_cache']->value;?>
</a></li>
	        <li class="backup <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='template') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['backup'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_backup']->value;?>
</a></li>
	        <li class="fixsystem <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='site') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['fixsystem'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_fixsystem']->value;?>
</a></li>
	        <li class="update <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='user') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['update'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_update']->value;?>
</a></li>
	    </ul>
	</nav>
</aside><?php }} ?>
