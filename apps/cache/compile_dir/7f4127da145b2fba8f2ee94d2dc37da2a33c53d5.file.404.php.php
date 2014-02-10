<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 07:48:20
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\layout\404.php" */ ?>
<?php /*%%SmartyHeaderCode:587152f876343d9df9-58372011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f4127da145b2fba8f2ee94d2dc37da2a33c53d5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\layout\\404.php',
      1 => 1389798018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '587152f876343d9df9-58372011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'template_url' => 0,
    'site_url' => 0,
    'text_go_home' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f876344412a7_89572220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f876344412a7_89572220')) {function content_52f876344412a7_89572220($_smarty_tpl) {?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/bootstrap.css'>

		<style type="text/css"> 
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		.btn-large {
			width:300px;
			padding: 20px 16px;
		}
		</style> 

	</head>
	<body>
		<div class="container"> 
			<div class="hero-unit"> 
				<center>
					<h1 style="font-size:200px;">
					<div style="height: 188px; width:760px; background:url(<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/images/404-error-img3.png) no-repeat center center;"></div>
					</h1> 
					<p></p> 

					<p><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="btn btn-primary btn-large"><?php echo $_smarty_tpl->tpl_vars['text_go_home']->value;?>
</a></p> 
				</center>
			</div> 
		</div>
	</body>
</html><?php }} ?>
