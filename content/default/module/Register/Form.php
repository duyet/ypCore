<!DOCTYPE html> 
<html id="ypCore_html" lang="" dir="LTR" class="html" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head id="ypHead" profile="http://gmpg.org/xfn/11">
  <meta charset="utf-8" /> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <base href="{$site_base}" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <title id="siteTitle">{$title}</title>
  <link rel="alternate" media="handheld" href="{$site_base}" />
  <link rel="alternate" type="application/rss+xml" title="News Feed" href="{$site_base}/rss" />
  <link rel="stylesheet" type="text/css" href="{$static_url}/css/bootstrap.css">
  <link rel="stylesheet" href="{$template_url}/css/screen.css" />
  
  <script>{$js_var}</script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="{$description}" />
  <meta name="keywork" content="{$keywork}" />
  <meta name="software" content="ypCore CMS" />
  {$meta}

   <!--[if IE]>
   <script src="{$template_url}/js/html5.js"></script>
   <link rel='stylesheet' href='{$template_url}/css/ie.css'>
   <![endif]--> 
  <link rel="shortcut icon" href="{$template_url}/images/favicon.ico" />
  </head>
<body class="ypCore_root _no_script_ body_moduif home-template" id="ypCore_root"> 

<header></header>

<main class="content" role="main" >
  <article class="post" >
      <form class="form-register" method="POST" action="{$form_action}"> 
	    <input type="hidden" name="redirect" value="{if ($redirect_to)} {$redirect_to} {/if}">
        <h2 class="form-signin-heading">{$text_register}</h2> 
		{if ($error)}<div class="login-error">{$error}</div>{/if}
     User Name <input type="text" name="username" value="{$username}" class="input-block-level input-text" placeholder="{$text_placeholder_username}"> 
     Password <input type="password" name="password" value="{$password}" class="input-block-level input-password" placeholder="{$text_placeholder_password}"> 
     Again Please <input type="password" name="re_password" value="{$re_password}" class="input-block-level input-password" placeholder="{$text_placeholder_re_password}"> 
     Your full name <input type="text" name="full_name" value="{$full_name}" class="input-block-level input-text" placeholder="{$text_placeholder_fullname}"> 
     And your email <input type="text" name="email" value="{$email}" class="input-block-level input-text" placeholder="{$text_placeholder_email}"> 
        
		<button class="btn btn-large" name="login" type="reset" value="true">{$button_reset}</button> 
		<button class="btn btn-large btn-primary" name="login" type="submit" value="true">{$button_register}</button> 
      </form> 
 </article>
</main>
 
{$Footer}