<?= $Header ?>

	<div id="page-title">
		<span class="title"><img src="<?= $template_url ?>/img/icon/pencil32.png" border="0" title="" alt=""> <?= $text_pagetitle ?></span>
		<span class="subtitle"><?= $text_pagetitle_subtite ?></span>
	</div>

<div class="container">
	<?php if ($error) { ?><div class="error-box" style=""><?= $error ?></div><?php } ?>

	<form action="<?= $form_action ?>" method="POST" id="post-form"> 
		<input type='hidden' name='post_id' value='<?= $post_id ?>' /> 
		<input type='hidden' name='' value='' /> 
		<div class="row"> 
			<div class="span12"><label ><?= $text_post_title ?> </label> 
				<input type="text" name="post_title" id="post_title" value="<?= $post_title ?>" onChange="get_alias(this.value)" tabindex="1" />
				<div id="alias"></div>
			</div> 

			<div class="span12"> 
				<div> 
					<label ><?= $text_post_content ?></label> 
 					<textarea  name="post_content" id="post_content" rows="20" tabindex="2"><?= $post_content ? htmlspecialchars_decode($post_content) : '' ?></textarea> 
				</div>
				<br />

				<div class="span5">
					<div>
						<h6 class=""><?= $text_cat ?></h6> 
						<select name="cat" id="cat" value="" tabindex="3" >
							<option value="0"><?= $text_select_cat ?></option>
							<?php foreach ($cats as $_cat) { ?>
							<option value="<?= $_cat['cat_id'] ?>" <?= ($cat == $_cat['cat_id']) ? 'selected' : ''  ?>><?= $_cat['title'] ?></option>
							<?php } ?>
						</select>
					</div><br />

					<div>
						<h6 class=""><?= $text_time ?></h6>
						<?php if ($time) { ?>
							<input type="text" name="time_box" id="time_box" value="<?= $time ?>" />
							<input type="hidden" name="post_date" value="<?= $post_date ?>" />
						<?php } else { ?>
						<input type="checkbox" name="time" id="current_time" onSelect="disable_input()" value="current" />
						<?= $text_current_time ?>
						<?php } ?>
					</div>
				</div> 


				<div class="span5">
					<div><h6 class=""><?= $text_keywork ?></h6>
					<input type="text" name="keywork" id="keywork" value="<?= $keywork ?>"  class="span4" /></div>
					
					<br />
					<div><h6 class=""><?= $text_tag ?></h6>
					<input type="text" name="tags" id="tags" value="<?= $tags ?>" class="span4" /></div>
				</div>

				<div class="span9"> </div>
				<div class="span2">
					<input type="submit" name="submit" class="btn btn-primary btn-large" value="<?= $button_post ?>" />
				</div> 

			</div> 
		</div> 
	</form>
</div>
<script type="text/javascript" src="<?= $static_url ?>/javascript/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var config = {
	height: '400px',
	filebrowserBrowseUrl : '<?= $template_url ?>/../../../plugin/pdw_file_browser/index.php',
	filebrowserImageBrowseUrl : '<?= $template_url ?>/../../../plugin/pdw_file_browser/index.php?filter=image',
	filebrowserFlashBrowseUrl : '<?= $template_url ?>/../../../plugin/pdw_file_browser/index.php?filter=flash',
};
	CKEDITOR.replace('post_content', config);
</script>
<script type="text/javascript">
	(function($){
		var title = $('#post_title').val();
		if (title != '') {
			$.ajax({
				url: 'index.php?code=Admin/Module/News/Ajax/Getalias&title=' + title,
				dataType: 'json',
				beforeSend: function() {

				},
				complete: function() {

				},
				success: function(json) {
					var html = '<input type="text" value="' + json['link_1'] . '" disabled="disabled" />';
					$('#alias').html(html).slideDown();
				},
				error: function(xhr, ajaxOptions, thrownError) {

				}
			});
		}
	});
</script>

<?= $Footer ?>