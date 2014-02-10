<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:25:00
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Setting\Leftmenu.php" */ ?>
<?php /*%%SmartyHeaderCode:2300252f89aec3b2324-80106904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9d41a98b6dd824ea081eed15ea75383884a26d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Setting\\Leftmenu.php',
      1 => 1391769040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2300252f89aec3b2324-80106904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_active' => 0,
    'links' => 0,
    'text_server_setting' => 0,
    'text_template_setting' => 0,
    'text_site_setting' => 0,
    'text_user_setting' => 0,
    'text_urlandhtml_setting' => 0,
    'text_security_setting' => 0,
    'text_tools' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89aec461bf1_44781193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89aec461bf1_44781193')) {function content_52f89aec461bf1_44781193($_smarty_tpl) {?><aside class="settings-sidebar" role="complementary">
	<header><h1 class="title">Settings</h1></header>
	<nav class="settings-menu">
	    <ul>
	        <li class="server <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='server') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['server'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_server_setting']->value;?>
</a></li>
	        <li class="template <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='template') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['template'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_template_setting']->value;?>
</a></li>
	        <li class="site <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='site') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['site'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_site_setting']->value;?>
</a></li>
	        <li class="users <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='user') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_user_setting']->value;?>
</a></li>
	        <li class="urlandhtml <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='urlandhtml') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['urlandhtml'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_urlandhtml_setting']->value;?>
</a></li>
	        <li class="security <?php if ($_smarty_tpl->tpl_vars['menu_active']->value=='security') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['security'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_security_setting']->value;?>
</a></li>
	        <li class="tools"><a href="<?php echo $_smarty_tpl->tpl_vars['links']->value['tools'];?>
"><?php echo $_smarty_tpl->tpl_vars['text_tools']->value;?>
</a></li>
	    </ul>
	</nav>
</aside><?php }} ?>
