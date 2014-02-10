<?php /*%%SmartyHeaderCode:1899452f89affa675a9-22599249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039c31c4bce7ab90cbad843f3d4a5e9c4a09484e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Tools\\Cache.php',
      1 => 1391773222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1899452f89affa675a9-22599249',
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'Leftmenu' => 0,
    'form_action' => 0,
    'text_pagetitle' => 0,
    'text_clean_cache' => 0,
    'text_clean_compress_template_cache' => 0,
    'text_cache' => 0,
    'cache' => 0,
    'text_compress_template_cache' => 0,
    'template' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89affb52946_65788888',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89affb52946_65788888')) {function content_52f89affb52946_65788888($_smarty_tpl) {?><!doctype html>
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (gte IE 9)| IEMobile |!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
      <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Administrator Panel</title>
      <meta name="HandheldFriendly" content="True">
      <meta name="MobileOptimized" content="120">
      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">    
      <meta http-equiv="cleartype" content="on">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta charset="utf-8" /><link rel="shortcut icon" href="http://localhost/ypCore2/apps/admin/view/simple/images/favicon.ico" />

      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
      <link rel="stylesheet" type="text/css" href="http://localhost/ypCore2/apps/admin/view/simple/css/screen.css">

         
      <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="http://localhost/ypCore2/apps/admin/view/simple/css/ie8-hacks.css" />
      <![endif]-->
      <!--[if IE]>
        <script src="http://localhost/ypCore2/static/javascript/html5.js"></script>
      <![endif]--> 
    </head>
    <body class="settings manage editor">
      <header id="global-header" class="navbar">
        <a class="logo" href="/ypCore2/cp/index/home" data-off-canvas="left"><span class="hidden">ypCore </span></a>
        <nav id="global-nav" role="navigation">
          <ul id="main-menu">
            <li class="front"><a href="http://localhost/ypCore2">Front</a></li>

            <li class="content"><a href="/ypCore2/cp/news/listpost">Content</a></li>

            <li class="editor"><a href="/ypCore2/cp/news/newpost">New Post</a></li>

            <li class="settings"><a href="/ypCore2/cp/setting/index">Settings</a></li>


            <li id="usermenu" class="subnav dropdown">
              <a href="#" data-toggle="dropdown" class="">
                <img class="avatar" src="http://localhost/ypCore2/apps/admin/view/simple/img/user-image.png" alt="Avatar" />
                <span class="name">admin</span>
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


<main role="main" id="main">
	<aside id="notifications">
		<!-- Notifications -->
					</aside>

	<div class="wrapper">
		<aside class="settings-sidebar" role="complementary">
	<header><h1 class="title">Tools</h1></header>
	<nav class="settings-menu">
	    <ul>
	        <li class="cache "><a href="/ypCore2/cp/tools/cache">Cache cleaner</a></li>
	        <li class="backup "><a href="/ypCore2/cp/tools/backup">Backup System</a></li>
	        <li class="fixsystem "><a href="/ypCore2/cp/tools/fixsystem">Fix system</a></li>
	        <li class="update "><a href="/ypCore2/cp/tools/update">Update</a></li>
	    </ul>
	</nav>
</aside>
		
		<form id="settings-general" novalidate="novalidate" action="/ypCore2/cp/tools/cache" method="post">
			<section class="settings-content active" id="general" style="display: block;">
				<header>
					<button class="button-back">Back</button>
					<h2 class="title">Cache Tools</h2>
					<section class="page-actions">
						<button type="submit" name="cleanup_cache" value="true" class="button-save" >Clean All Cache</button>
						<button type="submit" name="cleanup_compress_template_cache" value="true" class="button-save" >Clean All Compress Template Cache</button>
					</section>
				</header>

				<section class="content">
					<h3>Cache cleaner</h3>
					<textarea rows="8" cols="100" style="width:100%">filecache.2e5d8aa3dfa8ef34ca5131d20f9dad51.1392027900.cache
filecache.88d6b3bb39065bedaa0a8b47115cecbf.1392027389.cache
</textarea>

					<h3>List Compress Template Cache</h3>
					<textarea rows="8" cols="100" style="width:100%">094f0b12f4cc7a67bc1f0642946761dd0e47a747.Index.php.php
6e3b133861b6a812c1aeb4abde9d042ed786015f.Leftmenu.php.php
a1929ff40777d02f82dd450958a09e57840856f1.Footer.php.php
ccc666239f7682598bcf29287942feb7c07c7446.Header.php.php
</textarea>
				</section>
			</section>
		</form>
	</div>
</main>

<script type="text/javascript">
	
</script>

<script type="text/javascript" src="http://localhost/ypCore2/static/javascript/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="http://localhost/ypCore2/static/javascript/jquery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://localhost/ypCore2/apps/admin/view/simple/js/main.js"></script>

</body>
</html><?php }} ?>
