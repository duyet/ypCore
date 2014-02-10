<?php echo $Header ?>

	<div id="page-title" class="page-title-post">
		<span class="title"><img src="<?php echo $template_url ?>/img/icon/PowerPoint alt 1.png" border="0" width="50" title="" alt=""> <?php echo $text_pagetitle ?></span>
		<span class="subtitle"><?php echo $text_pagetitle_subtite ?></span>
	</div>

<div class="container">
	<?php if ($error) { ?><div class="error-box" style=""><?php echo $error ?></div><?php } ?>

	<form action="<?php echo $form_action ?>" method="POST" id="post-form"> 
		<input type='hidden' name='post_id' value='<?php echo $post_id ?>' /> 
		<input type='hidden' name='' value='' /> 
		<div class="row"> 
			<div class="span12"><label for="post_title"><?php echo $text_post_title ?> </label> 
				<input type="text" name="post_title" id="post_title" value="<?php echo $post_title ?>" onChange="" tabindex="1" />
				<div id="alias" style="height: 20px; margin-bottom: 5px;"></div>
			</div> 

			<div class="span12"> 
				<div> 
					<label ><?php //echo $text_post_content ?></label> 
 					<textarea  name="post_content" id="post_content" rows="20" cols="20" tabindex="2" style="width: 930px;" ><?php echo $post_content ? htmlspecialchars_decode($post_content) : '' ?></textarea> 
				</div>
				<br />

				<div class="span5">
					<div>
						<h6 class=""><?php echo $text_cat ?></h6> 
						<select name="cat" id="cat" value="" tabindex="3" class="span4">
							<option value="0"><?php echo $text_select_cat ?></option>
							<?php foreach ($cats as $_cat) { ?>
							<option value="<?php echo $_cat['cat_id'] ?>" <?php echo ($cat == $_cat['cat_id']) ? 'selected' : ''  ?>><?php echo $_cat['title'] ?></option>
							<?php } ?>
						</select>
					</div><br />

					<div>
						<h6 class=""><?php echo $text_time ?></h6>
							<input type="text" name="time_box" id="time_box" value="<?php echo $time ?>" />
							<input type="hidden" name="post_date" value="<?php echo $post_date ?>" />
					</div>
				</div> 


				<div class="span5">
					<div><h6 class=""><?php echo $text_keywork ?></h6>
					<input type="text" name="keywork" id="keywork" value="<?php echo $keywork ?>"  class="span4" /></div>
					
					<br />
					<div><h6 class=""><?php echo $text_tag ?></h6>
					<input type="text" name="tags" id="tags" value="<?php echo $tags ?>" class="span4" /></div>
				</div>

				<div class="span9"> </div>
				<div class="span2">
					<input type="submit" name="submit" class="btn btn-large" value="<?php echo $button_post ?>" />
				</div> 

			</div> 
		</div> 
	</form>
</div>
<script type="text/javascript" src="<?php echo $static_url ?>/javascript/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
var config = {
	height: '400px',
	filebrowserBrowseUrl : '<?php echo $template_url ?>/../../../plugin/pdw_file_browser/index.php',
	filebrowserImageBrowseUrl : '<?php echo $template_url ?>/../../../plugin/pdw_file_browser/index.php?filter=image',
	filebrowserFlashBrowseUrl : '<?php echo $template_url ?>/../../../plugin/pdw_file_browser/index.php?filter=flash',
};
	CKEDITOR.replace('post_content_', config);
	
</script>
<script type="text/javascript">
(function($) {
		$('#post_title').change(function(){
			var title = $(this).val(); 
			if (title != '') {
				$.ajax({
					url: '<?php echo $ajax_newpost_url ?>' + URL(title),
					dataType: 'text',
					beforeSend: function() {
						$('#alias').text('Loading...');
					}, 
					complete: function() {
						$('#alias').text('');
					},
					success: function(text) {
						$('#alias').text(text);
					},
					error: function(xhr, ajaxOptions, thrownError) {
						alert('AJAX Error!');
					}
				});
			}
		});
		

		/***
		
		
		
		
				if ($title != '') {
			$.ajax({
				
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
		
		
		
		
		**/

})(jQuery);
</script>

<?php echo $Footer ?>