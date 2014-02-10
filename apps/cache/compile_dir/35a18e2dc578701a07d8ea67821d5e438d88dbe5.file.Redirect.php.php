<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 09:59:34
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\layout\Redirect.php" */ ?>
<?php /*%%SmartyHeaderCode:1936852f894f6083ae9-38401843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35a18e2dc578701a07d8ea67821d5e438d88dbe5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\layout\\Redirect.php',
      1 => 1390493640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1936852f894f6083ae9-38401843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'redirect_to' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f894f6109f47_42165596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f894f6109f47_42165596')) {function content_52f894f6109f47_42165596($_smarty_tpl) {?><html id="ypCore-redirect">
  <head><title>Redirecting ...</title><meta http-equiv="refresh" content="1; url=<?php echo $_smarty_tpl->tpl_vars['redirect_to']->value;?>
"><script>window.location = '<?php echo $_smarty_tpl->tpl_vars['redirect_to']->value;?>
';</script></head>
  <body id="ypCore-body">
    Please wait......
  </body>
</html><?php }} ?>
