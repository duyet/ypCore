<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 12:36:34
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\module\News\View.php" */ ?>
<?php /*%%SmartyHeaderCode:1242052f8b9c2c5bd79-38077729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558104503553da03bed644f689cb0c7f619cf5b8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\View.php',
      1 => 1392012454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1242052f8b9c2c5bd79-38077729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'news' => 0,
    'site_url' => 0,
    'quick_edit' => 0,
    'comment_disqus' => 0,
    'comment_disqus_alias' => 0,
    'Comment' => 0,
    'ListComment' => 0,
    'static_url' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f8b9c2d2bef2_13337924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8b9c2d2bef2_13337924')) {function content_52f8b9c2d2bef2_13337924($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>




<article class="post">
	<h1 class="post-title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h1>
	<div class="time-author">
		By <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['author_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
</a> 
		at <time pubdate datetime="<?php echo $_smarty_tpl->tpl_vars['news']->value['post_date'];?>
" class="date"><?php echo $_smarty_tpl->tpl_vars['news']->value['post_date'];?>
</time> 
		<?php if ($_smarty_tpl->tpl_vars['news']->value['tag']) {?> on <?php echo $_smarty_tpl->tpl_vars['news']->value['tag'];?>
<?php }?>
		 | <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Back to home</a>
	</div>

	<section class="post-content">
		<p <?php if ($_smarty_tpl->tpl_vars['quick_edit']->value==true) {?>contenteditable="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['news']->value['post'];?>
</p>
	</section>

	<hr />

	<div class="comment row">
		<?php if ($_smarty_tpl->tpl_vars['comment_disqus']->value) {?>
		<h3 class="comment">Comment</h3>
			<div id="disqus_thread"></div>
			<script type="text/javascript">
	        (function() {
	            var yp_comment_disqus = document.createElement('script'); 
	            yp_comment_disqus.type = 'text/javascript'; 
	            yp_comment_disqus.async = true;
	            yp_comment_disqus.src = '//<?php echo $_smarty_tpl->tpl_vars['comment_disqus_alias']->value;?>
.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(yp_comment_disqus);
	        })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a>
	    <?php } else { ?>
			<div class="span5"><?php echo $_smarty_tpl->tpl_vars['Comment']->value;?>
</div>
			<div class="span1"></div>
			<div class="span5"><?php echo $_smarty_tpl->tpl_vars['ListComment']->value;?>
</div>
		<?php }?>
	</div>


</article>

<?php if ($_smarty_tpl->tpl_vars['quick_edit']->value==true) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/ckeditor/ckeditor.js"></script>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
