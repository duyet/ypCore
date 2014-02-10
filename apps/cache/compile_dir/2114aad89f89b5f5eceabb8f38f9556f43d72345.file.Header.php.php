<?php /* Smarty version Smarty-3.1.16, created on 2014-02-09 13:27:16
         compiled from "D:\xampp\htdocs\ypCore2\\contents\\default\layout\Header.php" */ ?>
<?php /*%%SmartyHeaderCode:2352852f7742474c808-33626915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2114aad89f89b5f5eceabb8f38f9556f43d72345' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\\\contents\\\\default\\layout\\Header.php',
      1 => 1391738776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2352852f7742474c808-33626915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noscript' => 0,
    'site_base' => 0,
    'title' => 0,
    'static_url' => 0,
    'template_url' => 0,
    'description' => 0,
    'keywork' => 0,
    'meta' => 0,
    'site_title' => 0,
    'site_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f774247948a2_49404787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f774247948a2_49404787')) {function content_52f774247948a2_49404787($_smarty_tpl) {?><!DOCTYPE html> 
<html id="ypCore_html" lang="" dir="LTR" class="html" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head id="ypHead" profile="http://gmpg.org/xfn/11">
  <meta http-equiv="cleartype" content="on">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">    
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" /> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php if ($_smarty_tpl->tpl_vars['noscript']->value) {?><noscript><meta http-equiv="refresh" content="0; URL=<?php echo $_smarty_tpl->tpl_vars['noscript']->value;?>
" /></noscript><?php }?>
  <base href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
" />
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

  <link rel="alternate" media="handheld" href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
" />
  <link rel="alternate" type="application/rss+xml" title="News Feed" href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
/rss" />
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic|Open+Sans:700,400">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,800|Source+Code+Pro">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/screen.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
  <meta name="keywork" content="<?php echo $_smarty_tpl->tpl_vars['keywork']->value;?>
" />
  <meta name="software" content="[ypCore.Tester]" />
  <?php echo $_smarty_tpl->tpl_vars['meta']->value;?>


   <!--[if IE]>
   <script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/html5.js"></script>
   <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/ie.css'>
   <![endif]--> 
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/images/favicon.ico" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
  <script>!window.jQuery && document.write('<scr'+'ipt type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/jquery/jquery-1.9.1.js"><\/scr'+'ipt>');</script>   

  </head>
<body class="ypCore_root _no_script_ body_moduif home-template" id="ypCore_root"><div id="ypLoadingbar"></div> 

<script type="text/javascript">document.body.className = document.body.className.replace('_no_script_','js');</script> 

  <header id="site-head" style="background: url(<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/images/ypCore-header.png) repeat-y">
    <div class="vertical">
      <div id="site-head-content" class="inner">
          <img src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/img/ypcore3-white.png" />
          <h1 class="blog-title"><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</h1>
          <h2 class="blog-description"><?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
</h2>

          <div class="blog-menu">
            <span><a href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
">Home</a></span>
            <span><a href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
/news">News</a></span>
          </div>

      </div>
    </div>

  </header>


<?php }} ?>
