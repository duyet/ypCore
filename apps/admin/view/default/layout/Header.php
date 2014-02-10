<!DOCTYPE html> 
<html id="ypCore" lang="" dir="LTR" class="html" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
  <title><?= $title; ?></title>

  <!-- Css -->
  <link rel='stylesheet' href='<?= $static_url ?>/css/bootstrap.css' />
  <link rel='stylesheet' href='<?= $static_url ?>/css/bootstrap-responsive.css' />  
  <link rel='stylesheet' href='<?= $template_url ?>/css/style.css' />
  <?= $css_addon ?>
  <!-- / Css -->

  <!-- Js -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
  <script>if (!window.jQuery) { document.write('<script type="text/javascript" src="<?= $static_url ?>/javascript/jquery/jquery-1.9.1.js"><\/script>'); }</script>   
  <script src="<?= $static_url ?>/javascript/bootstrap/bootstrap.js"></script>
  <script src="<?= $template_url ?>/js/jquery-ui-1.8.13.custom.min.js"></script>
  <script src="<?= $template_url ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
  <script src="<?= $template_url ?>/js/custom.js"></script>
  <?= $javascript_addon ?>
  <!-- / Js -->

  <script>
  $('.s').typeahead();
  </script>
  
<!-- superfish -->
<link rel="stylesheet" media="screen" href="<?= $template_url ?>/css/superfish.css" /> 
<link rel="stylesheet" media="screen" href="<?= $template_url ?>/css/superfish-left.css" /> 
<script type="text/javascript" src="<?= $template_url ?>/js/superfish-1.4.8/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?= $template_url ?>/js/superfish-1.4.8/js/superfish.js"></script>
<script type="text/javascript" src="<?= $template_url ?>/js/superfish-1.4.8/js/supersubs.js"></script>
<!-- ENDS superfish -->


<!-- superfish -->
<link rel="stylesheet" media="screen" href="<?= $template_url ?>/js/jquery.confirm/jquery.confirm.css" /> 
<script src="<?= $template_url ?>/js/jquery.confirm/jquery.confirm.js"></script>

<!-- ENDS superfish -->

  <!-- Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" /> 
  <meta name="description" content="<?= $description ?>" />
  <meta name="keywork" content="<?= $keywork ?>" />
  <meta name="author" content="">
  <!-- / Meta -->

  <?php if ($google_analytics_code) { ?>
  <!-- Google Analytics -->
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?= $google_analytics_code ?>']);
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

   <!--[if IE 8]>
     <link rel="stylesheet" type="text/css" href="<?= $template_url ?>/css/ie8-hacks.css" />
   <![endif]-->
   <!--[if IE]>
     <script src="<?= $tstatic_url ?>/javascript/html5.js"></script>
   <![endif]--> 
    <link rel="shortcut icon" href="<?= $template_url ?>/images/favicon.png">

  </head>
<body class="home">
<div class="wrapper">
  <!-- HEADER -->
  <div id="header">
    <!-- wrapper-header -->
    <div class="wrapper">
      <a href="index.php?code=Admin">
        <!-- <img id="logo" src="" alt="" /> --> 
        <h1>ypCore Administrator System</h1>
      </a>
      <!-- search -->
      <div class="top-search">
			<form  method="get" id="searchform" action="#"> 
				<div> 
					<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" data-provide="typeahead" data-source='["Home", "Settting", "Site Setting", "Server Setting", "Template Setting", "User Setting", "Module", "News", "Module News", "New post", "All post", "List Post", "Module Home", "Module Download", "List category", "New Category", "Tools", "Clean Cache", "Clean Template Cache", "Database", "Fix System"]'/> 
					<input type="submit" id="searchsubmit" value=" " /> 
				</div> 
			</form>
      </div>
      <!-- ENDS search -->
    </div>
    <!-- ENDS wrapper-header -->
  </div>
  <!-- ENDS HEADER -->

<?php if ($is_login) { ?>
<!-- Menu -->
<div id="menu">
  <!-- ENDS menu-holder -->
  <div id="menu-holder">
    <!-- wrapper-menu -->
    <div class="wrapper">
      <!-- Navigation -->
      <ul id="nav-menu" class="sf-menu">
        <li class="current-menu-item"><a href="<?= $menu['home'] ?>">Home</a>
			<ul>
				<li><a href="<?= $menu['front_site'] ?>" target="_blank"><span><?= $text_menu_front_site ?></span></a></li>
				<li><a href="<?= $menu['front_module_news'] ?>" target="_blank"><span><?= $text_menu_front_module_news ?></span></a></li>
			</ul>
		</li>
        <li><a href="<?= $menu['setting'] ?>"><?= $text_menu_setting ?></a>
          <ul>
            <li><a href="<?= $menu['site_setting'] ?>"><span><?= $text_menu_site_setting ?></span></a></li>
            <li><a href="<?= $menu['server_setting'] ?>"><span><?= $text_menu_server_setting ?></span></a></li>
            <li><a href="<?= $menu['template_setting'] ?>"><span><?= $text_menu_template_setting ?></span></a></li>
            <li><a href="<?= $menu['user_setting'] ?>"><span><?= $text_menu_user_setting ?></span></a></li>
          </ul>
        </li>
        <li><a href="<?= $menu['module'] ?>"><?= $text_module ?></a>
          <ul>
            <li><a href="<?= $menu['module_home'] ?>"><span><?= $text_module_home ?></span></a></li>
            <li><a href="<?= $menu['module_news'] ?>"><span><?= $text_module_new ?> *</span></a>
              <ul>
                <li><a href="<?= $menu['module_news_listpost'] ?>"><span><?= $text_listpost ?></span></a></li>
                <li><a href="<?= $menu['module_news_listcat'] ?>"><span><?= $text_listcat ?></span></a></li>
                <li><a href="<?= $menu['module_news_newpost'] ?>"><span><?= $text_newpost ?></span></a></li>
                <li><a href="<?= $menu['module_news_newcat'] ?>"><span><?= $text_newcat ?></span></a></li>
                <li><a href="<?= $menu['module_news_setting'] ?>"><span><?= $text_module_news_setting ?></span></a></li>
              </ul>
            </li>
            <li><a href="<?= $menu['module_download'] ?>"><span><?= $text_module_download ?></span></a></li>
            <li><a href="<?= $menu['module_user'] ?>"><span><?= $text_module_user ?></span></a></li>
          </ul>
        </li>
        <li><a href="<?= $menu['admin_tools'] ?>"><?= $text_admin_tools ?></a>
			<ul>
				<li><a href="<?= $menu['admin_tools_backup'] ?>"><span><?= $text_admin_tools_backup ?></span></a></li>
				<li><a href="<?= $menu['admin_tools_filemanager'] ?>"><span><?= $text_admin_tools_filemanager ?></span></a></li>
				<li><a href="<?= $menu['admin_tools_cache'] ?>"><span><?= $text_admin_tools_cache ?></span></a></li>
				<li><a href="<?= $menu['admin_tools_fix'] ?>"><span><?= $text_admin_tools_fix ?></span></a></li>
			</ul>
		</li>
        <li><a href="<?= $menu['admin'] ?>"><?= $text_admin ?></a>
			<ul>
				<li><a href="<?= $menu['admin_permission'] ?>"><span><?= $text_admin_permission ?></span></a></li>
				<li><a href="<?= $menu['admin_logout'] ?>"><span><?= $text_admin_logout ?></span></a></li>
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
<?php } ?>

  <div id="content">
