<!DOCTYPE html> 
<html id="ypCore_html" lang="" dir="LTR" class="html" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head id="ypHead" profile="http://gmpg.org/xfn/11">
  <meta charset="utf-8" /> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php if ($noscript) { ?><noscript><meta http-equiv="refresh" content="0; URL=<?php echo $noscript ?>" /></noscript><?php } ?>
  <base href="<?php echo $site_base ?>" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <title id="siteTitle"><?php echo $title; ?></title>
  <link rel="alternate" media="handheld" href="<?php echo $site_base ?>" />
  <link rel="alternate" type="application/rss+xml" title="News Feed" href="<?php echo $site_base ?>/rss" />
  <link rel="stylesheet" href="<?php echo $static_url ?>/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo $static_url ?>/css/bootstrap-responsive.css" />
  <link rel="stylesheet" href="<?php echo $template_url ?>/css/main.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>  
  <script>!window.jQuery && document.write('<script type="text/javascript" src="<?php echo $static_url ?>/javascript/jquery/jquery-1.9.1.js"><\/script>');</script>   
  <style>._no_script_ {}</style>
  
  <script><?php echo $js_var ?></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo $description ?>" />
  <meta name="keywork" content="<?php echo $keywork ?>" />
  <meta name="software" content="ypCore CMS" />
  <?php echo $meta ?>

   <!--[if IE]>
   <script src="<?php echo $template_url ?>/js/html5.js"></script>
   <link rel='stylesheet' href='<?php echo $template_url ?>/css/ie.css'>
   <![endif]--> 
  <link rel="shortcut icon" href="<?php echo $template_url ?>/images/favicon.ico" />
  </head>
<body class="ypCore_root _no_script_ body_moduif" id="ypCore_root"> 
<script type="text/javascript">document.body.className = document.body.className.replace('_no_script_','js');</script> 

<a class="badge badge-success" id="help-popup" data-animation="" data-toggle="popover" title="<?php echo $text_help_title ?>" data-content="<?php echo $text_help_content ?>">?</a>

 

<div class="container gradient-radial"> 
  <div class="masthead"> 
	<h3 class="muted"><?php echo $site_title ?></h3> 
	<div class="navbar"> 
	  <div class="navbar-inner"> 
		<div class="container"> 
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</a> 
			<div class="nav-collapse collapse"> 
			<?php echo $Menu ?>
			</div>
		</div> 
	  </div> 
	</div><!-- /.navbar --> 
  </div> 

<noscript>
	<div class="alert"> 
	  <button type="button" class="close" data-dismiss="alert">&times;</button> 
	 <?php echo $text_alert_no_script ?> 
	</div> 
</noscript>

<?php if (isset($anounment)) : ?>
<div class="alert alert-block alert-info"> 
  <button type="button" class="close" data-dismiss="alert">&times;</button> 
  <p><strong>Info</strong> <?php echo $anounment ?></p> 
</div> 
<?php endif; ?>