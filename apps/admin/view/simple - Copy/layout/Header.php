<!DOCTYPE html> 
<html id="ypCore" lang="" dir="LTR" class="html" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
  <title><?php echo $title; ?></title>

<!-- Css -->
<link rel='stylesheet' href='<?php echo $template_url ?>/css/metro-bootstrap.css' />
<link rel="stylesheet" media="screen" href="<?php echo $template_url ?>/css/superfish.css" /> 
<link rel="stylesheet" media="screen" href="<?php echo $template_url ?>/css/superfish-left.css" /> 
<link rel='stylesheet' href='<?php echo $template_url ?>/css/style.css' />
<?php echo $css_addon ?>
<!-- / Css -->

<!-- Js -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
<script>if (!window.jQuery) { document.write('<script type="text/javascript" src="<?php echo $static_url ?>/javascript/jquery/jquery-1.9.1.js"><\/script>'); }</script>   
<script src="<?php echo $static_url ?>/javascript/bootstrap/bootstrap.js"></script>
<script src="<?php echo $static_url ?>/javascript/jquery/jquery.animatescroll.js"></script>
<?php echo $javascript_addon ?>
<script src="<?php echo $template_url ?>/js/custom.js"></script>
<!-- / Js -->

<!-- Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="utf-8" /> 
<meta name="description" content="ypCore Administrator Panel! Please exists if you not have permission!" />
<meta name="keywork" content="" />
<meta name="author" content="" />
<!-- / Meta -->

<?php if ($google_analytics_code) { ?>
<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', '<?php echo $google_analytics_code ?>']);
_gaq.push(['_trackPageview']);

(function() {
var ypCore_googleAnalytics = document.createElement('script'); 
ypCore_googleAnalytics.type = 'text/javascript'; 
ypCore_googleAnalytics.async = true;
ypCore_googleAnalytics.src = 'http://www.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; 
s.parentNode.insertBefore(ypCore_googleAnalytics, s);
})();
</script>
<!-- / Google Analytics -->
<?php } ?>
<script>
	var total = <?php echo count($help_scroller); ?>;
	var i = 1;
(function helpScroller(i){
	var last_id = i - 1;
	if (last_id == 0) last_id = total;
	$('#helpScroll' + last_id).fadeOut();
	$('#helpScroll' + i).fadeIn();
	i++;
	if (i > total) i = 1;
	setTimeout(function(){helpScroller(i);}, 5000);
})(i);

</script>
   <!--[if IE 8]>
     <link rel="stylesheet" type="text/css" href="<?php echo $template_url ?>/css/ie8-hacks.css" />
   <![endif]-->
   <!--[if IE]>
     <script src="<?php echo $static_url ?>/javascript/html5.js"></script>
   <![endif]--> 
    <link rel="shortcut icon" href="<?php echo $template_url ?>/images/favicon.png">

  </head>
<body class="">
<div class="container">
  <!-- HEADER -->
  <header id="header">
    <!-- wrapper-header -->
    <div class="wrapper">
        <!-- <img id="logo" src="" alt="" /> --> 
        <h2>ypCore Administrator System</h2>
	<?php if ($is_login) : ?>
		<div class="helpcrollpanel">
		<?php $i = 1; foreach($help_scroller as $helptext) : ?>
            <span class="helpcroll" id="helpScroll<?php echo $i ?>" style=""><span class="badge badge-success">?</span> <?php echo $helptext ?></span>
		<?php $i++; endforeach; ?>
		</div>
	<?php endif; ?>
	<span><noscript><div class="alert alert-danger">Javascript was disable or not support!</div></noscript></span>
    </div>
    <!-- ENDS wrapper-header -->
  </header>
  <!-- ENDS HEADER -->

<?php if ($is_login) : ?>
<!-- Menu -->
<div id="menu">
  <!-- ENDS menu-holder -->
  <div id="menu-holder">
    <!-- wrapper-menu -->
    <div class="wrapper">
      <!-- Navigation -->
      <ul id="nav-menu" class="sf-menu">
        <li class="current-menu-item menu-1"><a href="<?php echo $menu['home'] ?>">Home</a>
			<ul>
				<li><a href="<?php echo $menu['front_site'] ?>" target="_blank"><span><?php echo $text_menu_front_site ?></span></a></li>
				<li><a href="<?php echo $menu['front_module_news'] ?>" target="_blank"><span><?php echo $text_menu_front_module_news ?></span></a></li>
			</ul>
		</li>
        <li class="menu-2"><a href="<?php echo $menu['setting'] ?>"><?php echo $text_menu_setting ?></a>
          <ul>
            <li><a href="<?php echo $menu['site_setting'] ?>"><span><?php echo $text_menu_site_setting ?></span></a></li>
            <li><a href="<?php echo $menu['urlandhtml_setting'] ?>"><span><?php echo $text_menu_urlandhtml_setting ?></span></a></li>
            <li><a href="<?php echo $menu['server_setting'] ?>"><span><?php echo $text_menu_server_setting ?></span></a></li>
            <li><a href="<?php echo $menu['template_setting'] ?>"><span><?php echo $text_menu_template_setting ?></span></a></li>
            <li><a href="<?php echo $menu['security_setting'] ?>"><span><?php echo $text_menu_security_setting ?></span></a></li>
            <li><a href="<?php echo $menu['user_setting'] ?>"><span><?php echo $text_menu_user_setting ?></span></a></li>
          </ul>
        </li>
        <li class="menu-3"><a href="<?php echo $menu['module'] ?>"><?php echo $text_module ?></a>
          <ul>
            <li><a href="<?php echo $menu['module_home'] ?>"><span><?php echo $text_module_home ?></span></a></li>
            <li><a href="<?php echo $menu['module_news'] ?>"><span><?php echo $text_module_new ?> *</span></a>
              <ul>
                <li><a href="<?php echo $menu['module_news_listpost'] ?>"><span><?php echo $text_listpost ?></span></a></li>
                <li><a href="<?php echo $menu['module_news_listcat'] ?>"><span><?php echo $text_listcat ?></span></a></li>
                <li><a href="<?php echo $menu['module_news_newpost'] ?>"><span><?php echo $text_newpost ?></span></a></li>
                <li><a href="<?php echo $menu['module_news_newcat'] ?>"><span><?php echo $text_newcat ?></span></a></li>
                <li><a href="<?php echo $menu['module_news_setting'] ?>"><span><?php echo $text_module_news_setting ?></span></a></li>
              </ul>
            </li>
            <li><a href="<?php echo $menu['module_download'] ?>"><span><?php echo $text_module_download ?></span></a></li>
            <li><a href="<?php echo $menu['module_user'] ?>"><span><?php echo $text_module_user ?></span></a></li>
          </ul>
        </li>
        <li class="menu-4"><a href="<?php echo $menu['admin_tools'] ?>"><?php echo $text_admin_tools ?></a>
			<ul>
				<li><a href="<?php echo $menu['admin_tools_backup'] ?>"><span><?php echo $text_admin_tools_backup ?></span></a></li>
				<li><a href="<?php echo $menu['admin_tools_filemanager'] ?>"><span><?php echo $text_admin_tools_filemanager ?></span></a></li>
				<li><a href="<?php echo $menu['admin_tools_cache'] ?>"><span><?php echo $text_admin_tools_cache ?></span></a></li>
				<li><a href="<?php echo $menu['admin_tools_fix'] ?>"><span><?php echo $text_admin_tools_fix ?></span></a></li>
			</ul>
		</li>
        <li class="menu-5"><a href="<?php echo $menu['admin'] ?>"><?php echo $text_admin ?></a>
			<ul>
				<li><a href="<?php echo $menu['admin_permission'] ?>"><span><?php echo $text_admin_permission ?></span></a></li>
				<li><a href="<?php echo $menu['admin_logs'] ?>"><span><?php echo $text_admin_logs ?></span></a></li>
				<li><a href="<?php echo $menu['admin_logout'] ?>"><span><?php echo $text_admin_logout ?></span></a></li>
			</ul>
		</li>
      </ul>
      <!-- Navigation -->
    </div>
    <!-- wrapper-menu -->
  </div>
  <!-- ENDS menu-holder -->
</div>
<!-- ENDS Menu -->
<?php endif; ?>

<div class="main clearfix"> 
