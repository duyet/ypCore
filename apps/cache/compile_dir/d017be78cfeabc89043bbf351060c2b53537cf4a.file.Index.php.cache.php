<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 12:36:30
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\module\News\Index.php" */ ?>
<?php /*%%SmartyHeaderCode:2968452f8b9be6cd861-70080537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd017be78cfeabc89043bbf351060c2b53537cf4a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\Index.php',
      1 => 1392022080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2968452f8b9be6cd861-70080537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'posts' => 0,
    'post' => 0,
    'text_on' => 0,
    'pre_page_link' => 0,
    'next_page_link' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f8b9be74c7d6_59548376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8b9be74c7d6_59548376')) {function content_52f8b9be74c7d6_59548376($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>


<main class="content" role="main">
<?php if (count($_smarty_tpl->tpl_vars['posts']->value)==0) {?> 
	<article class="post tag">
			<header class="post-header">
				<h2 class="post-title">Sorry, there are nothing for you :(</h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;">Coming soon ...</p>
			</section>
	</article>
<?php } else { ?>
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
		<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_date_tag'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_date_text'];?>
</time> <?php if ($_smarty_tpl->tpl_vars['post']->value['tag']) {?><?php echo $_smarty_tpl->tpl_vars['text_on']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['tag'];?>
<?php }?></span>
				<h2 class="post-title"><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><?php echo $_smarty_tpl->tpl_vars['post']->value['post'];?>
</p>
			</section>
		</article>
	<?php } ?>
<?php }?>

<section class="pagination">
	<?php if ($_smarty_tpl->tpl_vars['pre_page_link']->value) {?><div class="pre-page"><a class="older-posts" href="<?php echo $_smarty_tpl->tpl_vars['pre_page_link']->value;?>
">Pre page</a></div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['next_page_link']->value) {?><div class="next-page"><a class="newer-posts" href="<?php echo $_smarty_tpl->tpl_vars['next_page_link']->value;?>
">Next page</a></div><?php }?>	
</section>
</main>


<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
