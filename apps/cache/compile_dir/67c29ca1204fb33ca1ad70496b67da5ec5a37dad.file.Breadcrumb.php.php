<?php /* Smarty version Smarty-3.1.16, created on 2014-02-09 13:14:07
         compiled from "D:\xampp\htdocs\ypCore2\apps\view\\default\layout\Breadcrumb.php" */ ?>
<?php /*%%SmartyHeaderCode:2233752f7710fca9f56-35804301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c29ca1204fb33ca1ad70496b67da5ec5a37dad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\view\\\\default\\layout\\Breadcrumb.php',
      1 => 1388720253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2233752f7710fca9f56-35804301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumb' => 0,
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f7710fcd9060_57819707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f7710fcd9060_57819707')) {function content_52f7710fcd9060_57819707($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value) {?>
<ul class="breadcrumb">
  <?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value) {
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['parent']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['text'];?>
</a> <span class="divider">/</span></li>
  <?php } ?>
  <li class="active"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['curent'];?>
</li>
</ul>
<?php }?><?php }} ?>
