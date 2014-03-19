<!doctype html>
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (gte IE 9)| IEMobile |!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
      <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>{$admin_title}</title>
      <meta name="HandheldFriendly" content="True">
      <meta name="MobileOptimized" content="120">
      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">    
      <meta http-equiv="cleartype" content="on">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta charset="utf-8" /><link rel="shortcut icon" href="{$template_url}/images/favicon.ico" />

      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
      <link rel="stylesheet" type="text/css" href="{$template_url}/css/screen.css">

      {if ($google_analytics_code)}
      <!-- Google Analytics -->
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', '{$google_analytics_code}']);
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
      {/if}
   
      <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="{$template_url}/css/ie8-hacks.css" />
      <![endif]-->
      <!--[if IE]>
        <script src="{$static_url}/javascript/html5.js"></script>
      <![endif]--> 
    </head>
    <body class="settings manage editor">
      <header id="global-header" class="navbar">
        <a class="logo" href="{$menu.home}" data-off-canvas="left"><span class="hidden">ypCore </span></a>
        <nav id="global-nav" role="navigation">
          <ul id="main-menu">
            <li class="front"><a href="{$site_url}">Front</a></li>

            <li class="content"><a href="{$menu.listpost}">Content</a></li>

            <li class="editor"><a href="{$menu.newpost}">New Post</a></li>

            <li class="settings"><a href="{$menu.setting}">Settings</a></li>


            <li id="usermenu" class="subnav dropdown">
              <a href="#" data-toggle="dropdown" class="">
                <img class="avatar" src="{$template_url}/img/user-image.png" alt="Avatar" />
                <span class="name">{$admin.username}</span>
              </a>
              <ul class="dropdown-menu" role="menu">
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
