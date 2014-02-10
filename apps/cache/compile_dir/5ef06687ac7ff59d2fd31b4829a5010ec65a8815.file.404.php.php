<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 12:34:16
         compiled from "D:\xampp\htdocs\ypCore2\apps\view\\default\layout\404.php" */ ?>
<?php /*%%SmartyHeaderCode:331452f61638cf15d8-05358246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ef06687ac7ff59d2fd31b4829a5010ec65a8815' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\view\\\\default\\layout\\404.php',
      1 => 1389798018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '331452f61638cf15d8-05358246',
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
  'unifunc' => 'content_52f61638e2d1a7_00283757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f61638e2d1a7_00283757')) {function content_52f61638e2d1a7_00283757($_smarty_tpl) {?><html>
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
