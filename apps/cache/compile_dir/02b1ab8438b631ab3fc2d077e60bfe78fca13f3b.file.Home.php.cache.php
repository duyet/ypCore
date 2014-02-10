<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 02:59:32
         compiled from "D:\xampp\htdocs\ypCore2\apps\view\\default\module\Index\Home.php" */ ?>
<?php /*%%SmartyHeaderCode:2981952f58f840d7887-25797723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b1ab8438b631ab3fc2d077e60bfe78fca13f3b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\view\\\\default\\module\\Index\\Home.php',
      1 => 1388735565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2981952f58f840d7887-25797723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'link' => 0,
    'text_progress_staff' => 0,
    'progress_staff' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f58f841a25d6_77984818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f58f841a25d6_77984818')) {function content_52f58f841a25d6_77984818($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>

 
<main class="content" role="main" >
  <article class="post" >
    <header class="jumbotron masthead">

        <h1>ypCore CMS <span class="red" style="font-size: 0.4em">openbeta</span></h1> 
            <p class="lead"><p>This is ypCore v1.0 beta version! I work hard and it was my first project, take it and try test and return me for your idea! Try me?</p>
            <p>Checksum: <code>5c3c38cbb45a6dcf8f0039817a29d70a</code></p>
            
            
            <center><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['download'];?>
" class="btn btn-large btn-success">Download Source</a></center>
            </p>
    </header>

    <hr />
    <div class="container-narrow"> 
      <div class="row">
        <div class="span2"></div>
          <div class="span8">
            <h3><?php echo $_smarty_tpl->tpl_vars['text_progress_staff']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['progress_staff']->value;?>
%</h3>
            <div class="progress progress-striped active">
            <div class="bar" style="width: <?php echo $_smarty_tpl->tpl_vars['progress_staff']->value;?>
%;"></div>
          </div>
        </div>
      </div>
    </div>

    <hr />

    <div class="row-fluid"> 

      <div class="span4">
        <h2>Code Fashion</h2>
        <p>Full 100% code by yplitgroup - Vietnameses. Core build in PHP5, with MCV. It fast and morden. Easy for deverloper to custom. Function cache template, cache setting, memcache... help your website run faster </p>
		<p><a class="btn" href="#">View details &raquo;</a></p>
      </div>  
	  <div class="span4">
        <h2>All Free</h2>
        <p>This program is free software(GNU LICENSE) and it's was OpenSource, for you and for comminucate</p>
		<p><a class="btn" href="#">View details &raquo;</a></p>
      </div>

      <div class="span4">
        <h2>Our Support</h2>
        <p>We're so happy to support you, need help? Sent our your idea and we will excute it!</p>
		<p><a class="btn" href="#">View details &raquo;</a></p>
        </div>  

    </div>
</article>
</main>

<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>

<?php }} ?>
