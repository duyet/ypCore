<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 09:59:29
         compiled from "D:\xampp\htdocs\ypCore2\apps\admin\view\\simple\module\News\Newpost.php" */ ?>
<?php /*%%SmartyHeaderCode:1428352f894f12a5969-31449809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7f7f81312fae1b257bb7e019013f257bf6941b2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\admin\\view\\\\simple\\module\\News\\Newpost.php',
      1 => 1392020369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1428352f894f12a5969-31449809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'error' => 0,
    'success' => 0,
    'form_action' => 0,
    'post' => 0,
    'static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f894f130e876_45789383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f894f130e876_45789383')) {function content_52f894f130e876_45789383($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['Header']->value;?>


<main role="main" id="main" contenteditable="false">
	<aside id="notifications">
		<!-- Notifications -->
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?><div class="notification-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?><div class="notification-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div><?php }?>
	</aside>

	<form action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="POST">
		<?php if ($_smarty_tpl->tpl_vars['post']->value) {?>
			<input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" />
			<input type="hidden" name="title_alias" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title_alias'];?>
" />
		<?php }?>
		<section class="entry-container" ng-app="ypEditor" ng-controller="__ypEditor">
			<header>
				<section class="box entry-title-editor">
			         <input class="" type="text" name="post_title" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" placeholder="Post title here..."  autofocus="autofocus" />
			    </section>
			</header>

		    <section class="entry-container">
		    	<textarea name="post_content" 
		    		id="post_content" 
		    		rows="40" cols="200"
		    		style="width: 100%; border:0">
		    	<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['post']->value['post']);?>

		    	</textarea>	
		    </section>

		    <!-- Modal Setting -->
			<div class="modal fade bs-modal-sm" id="modalSetting" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<a type="button" class="close" data-dismiss="modal" aria-hidden="true"></a>
							<h4 class="modal-title" id="myModalLabel">Post setting</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="url">URL</label>
								<input type="text" class="form-control" id="url" placeholder="URL" name="title_alias" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title_alias'];?>
">
							</div>

							<div class="form-group">
								<label for="pub-date">Pub Date</label>
								<input type="date" class="form-control" id="pub-date" placeholder="24 Jan 14 @ 19:01" name="post_date" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
">
							</div>

							<div class="form-group">
								<label for="keyword">Pub Date</label>
								<input type="text" class="form-control" id="keyword" placeholder="Post keyword" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keyword'];?>
">
							</div>

							<div class="form-group">
								<?php if (isset($_smarty_tpl->tpl_vars['post']->value['post_id'])) {?><a href="./Delete?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&submit=1" onclick="return confirm('Are you sure?'); "><i class="delete"></i> Delete this post?</a> <?php }?>
							</div>

						</div>
					</div>
				</div>
			</div>

			<footer id="publish-bar">
			    <nav>
			        <section id="entry-tags" href="#" class="left">
			            <input class="tag-input" id="tags" type="text" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['tag'];?>
" placeholder="Post tag">
			        </section>

			        <div class="right">

			            <section id="entry-controls" class="unsaved">
			                <a class="post-settings" href="#" data-toggle="modal" data-target="#modalSetting" title="Post Settings"><span class="hidden">Post Settings</span></a>
			                



			            </section>

			            <section id="entry-actions" class="entry-submit-post">
			                <button type="submit" class="save-draft-button" data-loading-text="Loading..." name="submit" value="save-draft">Save Draft</button>
			                <button type="submit" class="publish-button" data-loading-text="Saving..." name="submit" value="publish-now">Publish Now</button>
			                
			                <ul class="editor-options overlay" style="display: none;">
			                </ul>
			            </section>
			        </div>
			    </nav>
			</footer>

		</section>
	</form>
</main>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
var config = {
	height: '320px',
	filebrowserBrowseUrl : '<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/../plugin/pdw_file_browser/index.php',
	filebrowserImageBrowseUrl : '<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/../plugin/pdw_file_browser/index.php?filter=image',
	filebrowserFlashBrowseUrl : '<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/../plugin/pdw_file_browser/index.php?filter=flash',
};
	CKEDITOR.replace('post_content', config);
	
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/jquery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/bootstrap/bootstrap-modal.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/jquery/jquery.tagsinput.min.js"></script>
<script type="text/javascript">
	//$('#tags').tagsInput();
</script>
<script>
function makeDeleteSure() {
	return confirm('Are you sure to delete this post?');
}
</script><?php }} ?>
