<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 09:02:21
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Index\Home.php" */ ?>
<?php /*%%SmartyHeaderCode:1659152f8878d88bc26-82896900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6235020f709b4b147bde902cf22d0b8f7e283dc8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Index\\Home.php',
      1 => 1391926013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1659152f8878d88bc26-82896900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'template_dir' => 0,
    'link' => 0,
    'stat' => 0,
    'static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f8878d931092_35154272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8878d931092_35154272')) {function content_52f8878d931092_35154272($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>
<main role="main" id="main">	<aside id="notifications">		<!-- Notifications -->	</aside>	<div class="wrapper">		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_dir']->value)."/layout/Nav.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
		<section class="settings-content active" id="general" style="display: block;">		    <header>		        <h2 class="title">ypCore Administrator System</h2>		        <section class="page-actions">		            		        </section>		    </header>			<section class="content admin-first-page">				<div class="welcome-header">Welcome to ypCore System</div> 				<div class="column">					<h4>Get Started</h4>					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['setting']['index'];?>
" class="large button-add">Setting your site</a>				</div>				<div class="column two">					<h4>Next Steps</h4>					<div class="link">						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['newpost'];?>
"><span class="icon-newpost"></span>Write first post.</a><br />						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['newpage'];?>
"><span class="icon-addpage"></span>Add about page.</a><br />						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['front'];?>
"><span class="icon-front"></span>View your site.</a><br />						<br />					</div>					</div>								<div class="column">					<h4>Stat</h4>					<span class="icon-pageview"></span> <?php echo $_smarty_tpl->tpl_vars['stat']->value['pageview'];?>
 pageviews.<br />					<span class="icon-postcount"></span> <?php echo $_smarty_tpl->tpl_vars['stat']->value['totalpost'];?>
 posts (<?php echo $_smarty_tpl->tpl_vars['stat']->value['totaldraft'];?>
 draft).<br />					<span class="icon-commentcount"></span> <?php echo $_smarty_tpl->tpl_vars['stat']->value['comment'];?>
 comments.<br />				</div>				<div class="clear"></div>				<hr />				<div class="ypcore-voice">					<h4>ypCore Intro</h4>						<audio controls class="ypintro-audio">							<source src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/resource/intro.mp3" type="audio/mpeg" />							<source src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/resource/intro.ogg" type="audio/ogg" />							<embed height="50" width="100" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/resource/intro.mp3" />						</audio>					<!--<iframe src="http://embed.voicebunny.com/?audio=aHR0cDovL3ZvaWNlYnVubnkuczMuYW1hem9uYXdzLmNvbS9saXZlL1ZvaWNlQnVubnlfLV9wYWlkLWRlbW8tZm9yLXlwY29yZV8tX1JlYWRfODMyMzQ5X3BhcnQwMDFfYnlfVm9pY2VfQWN0b3JfQThTUTlPLm1wMz9oPTgzMjM0OQ&color=FF6600" frameborder="0" allowfullscreen></iframe>-->				</div>			</section>					</section>	</div></main><?php }} ?>
