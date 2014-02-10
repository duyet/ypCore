<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 02:59:30
         compiled from "D:\xampp\htdocs\ypCore2\apps\view\\default\module\User\Logout.php" */ ?>
<?php /*%%SmartyHeaderCode:103452f58f828c24b2-89970413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0617d29258bba3020b0eda37136bfbc3110acb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\view\\\\default\\module\\User\\Logout.php',
      1 => 1388725895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103452f58f828c24b2-89970413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'redirect_to' => 0,
    'text_loading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f58f8292c730_90749135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f58f8292c730_90749135')) {function content_52f58f8292c730_90749135($_smarty_tpl) {?><html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta http-equiv="refresh" content="1; url=<?php echo $_smarty_tpl->tpl_vars['redirect_to']->value;?>
">
	<script>window.location = '<?php echo $_smarty_tpl->tpl_vars['redirect_to']->value;?>
';</script>
  </head>
  <body>
    <?php echo $_smarty_tpl->tpl_vars['text_loading']->value;?>

  </body>
</html><?php }} ?>
