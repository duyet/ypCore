<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:25:00
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\layout\Header.php" */ ?>
<?php /*%%SmartyHeaderCode:2407552f89aec48c8b8-84006676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccc666239f7682598bcf29287942feb7c07c7446' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\layout\\Header.php',
      1 => 1392017647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2407552f89aec48c8b8-84006676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'template_url' => 0,
    'google_analytics_code' => 0,
    'static_url' => 0,
    'menu' => 0,
    'site_url' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89aec4c0ca8_32174811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89aec4c0ca8_32174811')) {function content_52f89aec4c0ca8_32174811($_smarty_tpl) {?><!doctype html>
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (gte IE 9)| IEMobile |!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
      <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
      <meta name="HandheldFriendly" content="True">
      <meta name="MobileOptimized" content="120">
      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">    
      <meta http-equiv="cleartype" content="on">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta charset="utf-8" /><link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/images/favicon.ico" />

      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/screen.css">

      <?php if (($_smarty_tpl->tpl_vars['google_analytics_code']->value)) {?>
      <!-- Google Analytics -->
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['google_analytics_code']->value;?>
']);
        _gaq.push(['_trackPageview']);

        (function(d, s) {
        var ypCore_googleAnalytics = d.createElement(s); 
        ypCore_googleAnalytics.type = 'text/javascript'; 
        ypCore_googleAnalytics.async = true;
        ypCore_googleAnalytics.src = 'http://www.google-analytics.com/ga.js';
        var s = document.getElementsByTagName(s)[0]; 
        s.parentNode.insertBefore(ypCore_googleAnalytics, s);
        })(document, 'script');
      </script>
      <!-- / Google Analytics -->
      <?php }?>
   
      <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/ie8-hacks.css" />
      <![endif]-->
      <!--[if IE]>
        <script src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/html5.js"></script>
      <![endif]--> 
    </head>
    <body class="settings manage editor">
      <header id="global-header" class="navbar">
        <a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['home'];?>
" data-off-canvas="left"><span class="hidden">ypCore </span></a>
        <nav id="global-nav" role="navigation">
          <ul id="main-menu">
            <li class="front"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Front</a></li>

            <li class="content"><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['listpost'];?>
">Content</a></li>

            <li class="editor"><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['newpost'];?>
">New Post</a></li>

            <li class="settings"><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['setting'];?>
">Settings</a></li>


            <li id="usermenu" class="subnav dropdown">
              <a href="#" data-toggle="dropdown" class="">
                <img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/img/user-image.png" alt="Avatar" />
                <span class="name"><?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
</span>
              </a>
              <ul class="dropdown-menu">
                <li class="usermenu-profile"><a href="#">Your Profile</a></li>
                <li class="divider"></li>
                <li class="usermenu-help"><a href="#">Help / Support</a></li>
                <li class="divider"></li>
                <li class="usermenu-signout"><a href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </header>
<?php }} ?>
