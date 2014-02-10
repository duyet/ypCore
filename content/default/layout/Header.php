<!DOCTYPE html> 
<html id="ypCore_html" lang="" dir="LTR" class="html" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head id="ypHead" profile="http://gmpg.org/xfn/11">
    <meta http-equiv="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">    
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" /><link rel="shortcut icon" href="{$template_url}/images/favicon.ico" />
    {if !$isNoscript}<noscript><meta http-equiv="refresh" content="0; URL={$noscript_link}" /></noscript>{/if}
    
    <base href="{$site_base}" />
    <title>{$title}</title>

    <link rel="alternate" media="handheld" href="{$site_base}" />
    <link rel="alternate" type="application/rss+xml" title="News Feed" href="{$site_base}/rss" />
    <link rel="stylesheet" type="text/css" href="{$static_url}/css/bootstrap3/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic|Open+Sans:700,400">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,800|Source+Code+Pro">
    <link rel="stylesheet" href="{$template_url}/css/screen.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{$description}" />
    <meta name="keywork" content="{$keywork}" />
    <meta name="software" content="[ypCore.Tester]" />
    {$meta}

    <meta property="og:description" content="{$description}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:site_name" content="{$title}" />

    <!--[if IE]>
      <script src="{$template_url}/js/html5.js"></script>
      <link rel='stylesheet' href='{$template_url}/css/ie.css'>
    <![endif]--> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  {if $addthis_active}<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid={$addthis_id}"></script>
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
    {/if}

    <noscript><style type="text/css">#loadstatus{ display: none }</style></noscript>
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
          <a class="navbar-brand" href="{$site_base}">{$site_title}</a>
        </div>
        {$Menu}
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

