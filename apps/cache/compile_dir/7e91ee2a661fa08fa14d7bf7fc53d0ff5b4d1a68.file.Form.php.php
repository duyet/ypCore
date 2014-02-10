<?php /* Smarty version Smarty-3.1.16, created on 2014-02-09 06:16:28
         compiled from "D:\xampp\htdocs\ypCore2\apps\view\\default\module\Login\Form.php" */ ?>
<?php /*%%SmartyHeaderCode:258552f70f2c1a9278-77069047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e91ee2a661fa08fa14d7bf7fc53d0ff5b4d1a68' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\view\\\\default\\module\\Login\\Form.php',
      1 => 1391587444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258552f70f2c1a9278-77069047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'site_base' => 0,
    'static_url' => 0,
    'keywork' => 0,
    'meta' => 0,
    'template_url' => 0,
    'error' => 0,
    'form_action' => 0,
    'username' => 0,
    'password' => 0,
    'text_remember_me' => 0,
    'redirect_to' => 0,
    'text_sign_in' => 0,
    'text_register_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f70f2c2817b6_60568405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f70f2c2817b6_60568405')) {function content_52f70f2c2817b6_60568405($_smarty_tpl) {?><!DOCTYPE html> <html id="ypCore_html" lang="" dir="LTR" class="html" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"><head id="ypHead" profile="http://gmpg.org/xfn/11">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">  <meta charset="utf-8" /> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <title id="siteTitle"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>  <link rel="alternate" media="handheld" href="<?php echo $_smarty_tpl->tpl_vars['site_base']->value;?>
" />  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/css/bootstrap3/bootstrap.min.css">  <style type="text/css">  body {    padding-top: 40px;    padding-bottom: 40px;    background-color: #eee;  }  .form-signin {    max-width: 330px;    padding: 15px;    margin: 0 auto;  }  .form-signin .form-signin-heading,  .form-signin .checkbox {    margin-bottom: 10px;  }  .form-signin .checkbox {    font-weight: normal;  }  .form-signin .form-control {    position: relative;    font-size: 16px;    height: auto;    padding: 10px;    -webkit-box-sizing: border-box;       -moz-box-sizing: border-box;            box-sizing: border-box;  }  .form-signin .form-control:focus {    z-index: 2;  }  .form-signin input[type="text"] {    margin-bottom: -1px;    border-bottom-left-radius: 0;    border-bottom-right-radius: 0;  }  .form-signin input[type="password"] {    margin-bottom: 10px;    border-top-left-radius: 0;    border-top-right-radius: 0;  }  </style>  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  <meta name="description" content="ypLogin" />  <meta name="keywork" content="<?php echo $_smarty_tpl->tpl_vars['keywork']->value;?>
" />  <meta name="software" content="ypCore CMS" />  <?php echo $_smarty_tpl->tpl_vars['meta']->value;?>
    <!-- Just for debugging purposes. Don't actually copy this line! -->    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>    <![endif]-->   <!--[if IE]>   <script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/html5.js"></script>   <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/css/ie.css'>   <![endif]-->   <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/images/favicon.ico" />  </head><body class="ypCore_root _no_script_ body_moduif home-template" id="ypCore_root">     <div class="container">    <?php if (($_smarty_tpl->tpl_vars['error']->value)) {?>      <div class="alert alert-warning">        <strong>Warning!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
      </div>    <?php }?>      <form class="form-signin" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
">        <h2 class="form-signin-heading">Please sign in</h2>        <input type="text" class="form-control" placeholder="Email address" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" required autofocus>        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" required>        <label class="checkbox">          <input type="checkbox" name="remember_me" value="remember_me"> <?php echo $_smarty_tpl->tpl_vars['text_remember_me']->value;?>
        </label>        <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['redirect_to']->value;?>
">        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="true"><?php echo $_smarty_tpl->tpl_vars['text_sign_in']->value;?>
</button>        <?php echo $_smarty_tpl->tpl_vars['text_register_link']->value;?>
      </form>    </div> <!-- /container -->  </body></html><?php }} ?>
