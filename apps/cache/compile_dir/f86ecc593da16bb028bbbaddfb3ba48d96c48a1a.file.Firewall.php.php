<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 05:15:09
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\layout\Firewall.php" */ ?>
<?php /*%%SmartyHeaderCode:2798552f8524d2a4ec3-15116733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f86ecc593da16bb028bbbaddfb3ba48d96c48a1a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\layout\\Firewall.php',
      1 => 1389238243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2798552f8524d2a4ec3-15116733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'template_url' => 0,
    'text_info' => 0,
    'submit_link' => 0,
    'text_go' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f8524d32ace9_79662756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8524d32ace9_79662756')) {function content_52f8524d32ace9_79662756($_smarty_tpl) {?><html>  <head>    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>    <!-- Css -->    <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/metro-bootstrap.css'>    <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/firewall.css'>    <!-- / Css -->    <!-- Error -->      </head>  <body>    <div class="container">      <div class="hero-unit">        <h1><center>Firewall</center></h1>		<center><h6><?php echo $_smarty_tpl->tpl_vars['text_info']->value;?>
</h6></center>		<hr />        <center>		    <input type="hidden" name="is_human" value="1">            <a href="<?php echo $_smarty_tpl->tpl_vars['submit_link']->value;?>
" class="enter btn btn-success btn-large"><?php echo $_smarty_tpl->tpl_vars['text_go']->value;?>
</a>        </center>              </div>    </div>  </body></html><?php }} ?>
