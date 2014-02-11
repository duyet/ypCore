<?php echo $Header ?>

<?php echo $Breadcrumb ?>

<div class="container module-news ">
	<!-- Head -->
	<div class="head row">
	 <div class="span8 title">
	   <h4><?php echo $news['title'] ?></h4>
	   <!-- Info -->
	     <span class="post-info">
		 <?php if ($news['post_date']) echo $news['post_date']; ?>
		 <?php if ($news['post_by']) echo ' &middot; <i class="icon-pencil"></i> ' . $text_by . ' ' . $news['post_by']; ?>
		 <?php if ($news['view_count']) echo ' &middot; <i class="icon-ok"></i> ' . $news['view_count'] ?>
		 <?php if ($news['like_info']) echo ' &middot; <i class="icon-thumbs-up"></i> ' . $news['like_info'] ?>
		 </span>
	   <!-- / Info -->
	 </div>
	 <div class="span3">
	   <?php if ($addthis) : ?>
	   <!-- / Share -->
			Add-this share
		<!-- Share -->
	   <?php endif; ?><br />
		<!-- Tools -->
		<a href="<?php echo $link_edit ?>" class="icon-wrench yp-tooltip" title="Edit Post"></a> 
		<!-- / Tools -->
	 </div>
	</div>
	<!-- / Head -->

	<!-- Content -->
	<div class="container content post-content row" id="post_editor" ondblclick="ypCore_showEditor();">
	  <div class="span11" style="padding:1px">
	  <!------------------------------------------------->
	  <p id="post_content" class="post_content" style="margin:0"><?php echo $news['post'] ?></p>
	  <!------------------------------------------------->
	  </div>
	</div><br />
	<div class="row">
		<div class="span10"></div>
		<div class="span2" id="editor_footer"></div>
	</div>
	<!-- / Content -->
</div>

	<!-- Tag, Category -->
<div class="block-tag">
	<div class="row">
		<div class="span8">
			<strong><i class="icon-tags"></i> <?php echo $text_tag ?>:</strong> 
			<i><?php echo $news['tags'] ?></i>
		</div>
		<div class="span2"></div>
	</div>
	<hr />
</div>
	<!-- / Tag, Category -->
<div class="container">
	<div class="comment row">
		<div class="span5"><?php echo $Comment ?></div>
		<div class="span1"></div>
		<div class="span6"><?php echo $ListComment ?></div>
	</div>
</div>

	<?php if ($quick_edit) { ?>
	<script type="text/javascript" src="<?php echo $static_url ?>/javascript/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		var editor, post_content;
		function ypCore_showEditor() {
			if (editor) {
				editor.destroy();
			}
			var config = {height: '600px'};
			var element = document.getElementById('post_editor');
			var post_content = document.getElementById('post_content').innerHTML;
			editor =  CKEDITOR.replace(element, config, post_content);
			document.getElementById('editor_footer').innerHTML = '<input class="btn btn-success" onclick="ypCore_savePost();" type="button" value="Save Post">';
		}
		function ypCore_savePost() {
			// AJAX
			// =============== SOME THING ==============
			post_content = editor.getData();
			editor.destroy();
			document.getElementById('post_content').innerHTML = post_content;
			document.getElementById('editor_footer').display = 'none';
		}
		// Press 'e' to open editor
		document.addEventListener("keydown", function(e){
			if (e.keyCode == 69) {
				ypCore_showEditor();
			}
		}, false);
	</script>
	<?php } ?>

<?php echo $Footer ?>