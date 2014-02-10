<?php /* Smarty version Smarty-3.1.16, created on 2014-02-09 13:21:05
         compiled from "D:\xampp\htdocs\ypCore2\apps\view\\default\module\News\Index.php" */ ?>
<?php /*%%SmartyHeaderCode:690952f772b1babdd7-54333007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '988d219c832945f2c6c8a7363af8a87f71554a3c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\view\\\\default\\module\\News\\Index.php',
      1 => 1391263410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690952f772b1babdd7-54333007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'posts' => 0,
    'post' => 0,
    'text_on' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f772b1be56c8_44578259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f772b1be56c8_44578259')) {function content_52f772b1be56c8_44578259($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>


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
</main>


<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
