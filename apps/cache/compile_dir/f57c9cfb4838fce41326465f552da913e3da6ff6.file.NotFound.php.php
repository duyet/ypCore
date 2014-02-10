<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:05:58
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\module\News\NotFound.php" */ ?>
<?php /*%%SmartyHeaderCode:2116752f89676d8a324-70839887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f57c9cfb4838fce41326465f552da913e3da6ff6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\NotFound.php',
      1 => 1388725883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2116752f89676d8a324-70839887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'Breadcrumb' => 0,
    'text_not_found' => 0,
    'text_not_found_text' => 0,
    'site_url' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89676da01c8_70640323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89676da01c8_70640323')) {function content_52f89676da01c8_70640323($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>


<?php echo $_smarty_tpl->tpl_vars['Breadcrumb']->value;?>


<div class="hero-unit news-not-found"> 
	<center>
		<h1 style="font-size:100px"><?php echo $_smarty_tpl->tpl_vars['text_not_found']->value;?>
</h1> 
		<p>Error 404 not found! Can't load this page!</p> 
		<p><?php echo $_smarty_tpl->tpl_vars['text_not_found_text']->value;?>
</p>

		<p><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="btn btn-primary btn-large">Go home</a></p> 
	</center>
</div> 

<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
