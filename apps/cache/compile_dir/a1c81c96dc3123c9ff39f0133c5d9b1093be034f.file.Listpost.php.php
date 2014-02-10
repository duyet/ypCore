<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 09:59:36
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\News\Listpost.php" */ ?>
<?php /*%%SmartyHeaderCode:144752f894f88350d3-64391892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1c81c96dc3123c9ff39f0133c5d9b1093be034f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\News\\Listpost.php',
      1 => 1391616159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144752f894f88350d3-64391892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'newpost_link' => 0,
    'POSTS' => 0,
    'post' => 0,
    'static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f894f88b29a8_16210097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f894f88b29a8_16210097')) {function content_52f894f88b29a8_16210097($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>
<main role="main" id="main">	<aside id="notifications">		<!-- Notifications -->		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="notification-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>		<?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?><div class="notification-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div><?php }?>	</aside>	<section class="content-view-container">	    <section class="content-list js-content-list">	      <header class="floatingheader">	          <section class="content-filter">	              <span>All Posts</span>	          </section>	          <a href="<?php echo $_smarty_tpl->tpl_vars['newpost_link']->value;?>
" class="button button-add"><span class="hidden">New Post</span></a>	      </header>	      <section class="content-list-content">			<ol>				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['POSTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>					<li class="each-post" data-toggle="tooltip" data-placement="bottom" title="<?php if ($_smarty_tpl->tpl_vars['post']->value['tag']) {?>Post in tags: <?php echo $_smarty_tpl->tpl_vars['post']->value['tag'];?>
<?php } else { ?>No tag.<?php }?>">						<h3 class="entry-title">							<a class="permalink" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link_edit'];?>
" ><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['post']->value['is_draft']) {?><span class="draft">[draft]</span><?php }?></a>							<span class="meta-post-right">								<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link_viewpost'];?>
" target="_blank" class="viewpost">View post</a> 								<time datetime="<?php echo $_smarty_tpl->tpl_vars['post']->value['datetime'];?>
" class="date"><?php echo $_smarty_tpl->tpl_vars['post']->value['datetime'];?>
</time>							</span>						</h3>					</li>				<?php } ?>			</ol>	      </section>	    </section>	</section></main><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/jquery/jquery-1.9.1.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/bootstrap/bootstrap-tooltip.js"></script><script type="text/javascript">$('.each-post').tooltip();</script></body></html><?php }} ?>
