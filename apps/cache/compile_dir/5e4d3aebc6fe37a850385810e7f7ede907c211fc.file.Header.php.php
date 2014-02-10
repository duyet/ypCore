<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:24:53
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\layout\Header.php" */ ?>
<?php /*%%SmartyHeaderCode:459152f89ae542f9a1-63749613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e4d3aebc6fe37a850385810e7f7ede907c211fc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\layout\\Header.php',
      1 => 1392016984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459152f89ae542f9a1-63749613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_url' => 0,
    'noscript' => 0,
    'site_base' => 0,
    'title' => 0,
    'static_url' => 0,
    'description' => 0,
    'keywork' => 0,
    'meta' => 0,
    'addthis_active' => 0,
    'addthis_id' => 0,
    'site_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89ae5480f03_59428188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89ae5480f03_59428188')) {function content_52f89ae5480f03_59428188($_smarty_tpl) {?><!DOCTYPE html> 
<html id="ypCore_html" lang="" dir="LTR" class="html" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head id="ypHead" profile="http://gmpg.org/xfn/11">
    <meta http-equiv="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">    
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" /><link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/images/favicon.ico" />
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
/css/bootstrap3/bootstrap.min.css">
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


    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />

    <!--[if IE]>
      <script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/html5.js"></script>
      <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/ie.css'>
    <![endif]--> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <?php if ($_smarty_tpl->tpl_vars['addthis_active']->value) {?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $_smarty_tpl->tpl_vars['addthis_id']->value;?>
"></script>
    <script type="text/javascript">
      addthis.layers({
        'theme' : 'transparent',
        'share' : {
          'position' : 'left',
          'numPreferredServices' : 5
        },  
        'whatsnext' : { },  
        'recommended' : {
          'title': 'Recommended for you:'
        } 
      });
    </script>
    <?php }?>
  </head>
<body class="ypCore_root _no_script_ body_moduif home-template" id="ypCore_root" onload="loadstatus.display='none'"><div id="ypLoadingbar"></div> 
  <div id="loadstatus">Loading ...</div>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
">Home</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
/news">News</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

<?php }} ?>
