<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:24:53
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\layout\Menu.php" */ ?>
<?php /*%%SmartyHeaderCode:788652f89ae5385611-34988194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22098f41f84d7007031a1bc435f5b17593adeab' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\layout\\Menu.php',
      1 => 1388717848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '788652f89ae5385611-34988194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'link' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89ae5415f35_89642726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89ae5415f35_89642726')) {function content_52f89ae5415f35_89642726($_smarty_tpl) {?><ul class="nav">  <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>	<li <?php if (isset($_smarty_tpl->tpl_vars['link']->value['active'])&&$_smarty_tpl->tpl_vars['link']->value['active']==true) {?> class="active" <?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['head'];?>
	<?php if (isset($_smarty_tpl->tpl_vars['link']->value['sub'])) {?>		<ul class="dropdown-menu"> <?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?><li><?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
</li><?php } ?></ul>	<?php }?>	</li>  <?php } ?>  </ul><ul class="nav pull-right">   <li></li></ul> <?php }} ?>
