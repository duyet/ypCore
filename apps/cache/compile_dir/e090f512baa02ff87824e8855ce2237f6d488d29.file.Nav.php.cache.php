<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 04:08:31
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\layout\Nav.php" */ ?>
<?php /*%%SmartyHeaderCode:339352f59fafad3880-81947346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e090f512baa02ff87824e8855ce2237f6d488d29' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\layout\\Nav.php',
      1 => 1391520142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339352f59fafad3880-81947346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'systemLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f59fafaf7a30_70266443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f59fafaf7a30_70266443')) {function content_52f59fafaf7a30_70266443($_smarty_tpl) {?><aside class="settings-sidebar" role="complementary">
	<header><h1 class="title">ypCore System</h1></header>
	<nav class="settings-menu">
	    <ul>
	    	<li class="front"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Front</a></li>
	        <li class="general"><a href="<?php echo $_smarty_tpl->tpl_vars['systemLink']->value['setting'];?>
">Setting</a></li>
	        <li class="publishing"><a href="<?php echo $_smarty_tpl->tpl_vars['systemLink']->value['post'];?>
">Post</a></li>
	        <li class="users"><a href="<?php echo $_smarty_tpl->tpl_vars['systemLink']->value['user'];?>
">User</a></li>
	    </ul>
	</nav>
</aside><?php }} ?>
