<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 04:08:31
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\Index\Home.php" */ ?>
<?php /*%%SmartyHeaderCode:311252f59fafa5ded8-54827382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6235020f709b4b147bde902cf22d0b8f7e283dc8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\Index\\Home.php',
      1 => 1391572559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311252f59fafa5ded8-54827382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'template_dir' => 0,
    'link' => 0,
    'stat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f59fafac23e6_64355263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f59fafac23e6_64355263')) {function content_52f59fafac23e6_64355263($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>
<main role="main" id="main">	<aside id="notifications">		<!-- Notifications -->	</aside>	<div class="wrapper">		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_dir']->value)."/layout/Nav.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
		<section class="settings-content active" id="general" style="display: block;">		    <header>		        <h2 class="title">ypCore Administrator System</h2>		        <section class="page-actions">		            		        </section>		    </header>			<section class="content admin-first-page">				<div class="welcome-header">Welcome to ypCore System</div> 				<div class="column">					<h4>Get Started</h4>					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['setting']['index'];?>
" class="large button-add">Setting your site</a>				</div>				<div class="column two">					<h4>Next Steps</h4>					<div class="link">						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['newpost'];?>
"><span class="icon-newpost"></span>Write first post.</a><br />						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['newpage'];?>
"><span class="icon-addpage"></span>Add about page.</a><br />						<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['front'];?>
"><span class="icon-front"></span>View your site.</a><br />						<br />					</div>					</div>								<div class="column">					<h4>Stat</h4>					<span class="icon-pageview"></span> <?php echo $_smarty_tpl->tpl_vars['stat']->value['pageview'];?>
 pageviews.<br />					<span class="icon-postcount"></span> <?php echo $_smarty_tpl->tpl_vars['stat']->value['totalpost'];?>
 posts (<?php echo $_smarty_tpl->tpl_vars['stat']->value['totaldraft'];?>
 draft).<br />					<span class="icon-commentcount"></span> <?php echo $_smarty_tpl->tpl_vars['stat']->value['comment'];?>
 comments.<br />				</div>			</section>					</section>	</div></main><?php }} ?>
