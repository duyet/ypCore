<?php echo $Header ?>

	<div id="page-title">
		<span class="title"><img src="<?php echo $template_url ?>/img/icon/notepencil32.png" border="0" title="" alt=""> <?php echo $text_pagetitle ?></span>
		<span class="subtitle"><?php echo $text_pagetitle_subtite ?> &nbsp; 
			</span>
	</div>

<?php if ($success) { ?><p class="success-box"><?php echo $success ?></p><?php } ?>
<br />
<div class="container">
	<div class="row">
		<div class="span1"></div>
		<div class="span4"><h4><?php echo $text_cache ?> </h4> </div>
		<div class="span4">
			<form action="<?php echo $form_action ?>" method="POST">
				<button type="submit" name="cleanup_cache" value="true" class="btn btn-warning"><?php echo $text_clean_cache ?></button>
			</form>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="span1"></div>
		<div class="span11">
			<textarea rows="8" cols="50" style="width:100%"><?php echo $cache ?></textarea>
		</div>
	</div>
	<br />
	<hr />
	
	<div class="green">
	<div class="row"><br />
		<div class="span1"></div>
		<div class="span4"><h4><?php echo $text_compress_template_cache ?> </h4> </div>
		<div class="span4">
			<form action="<?php echo $form_action ?>" method="POST">
				<button type="submit" name="cleanup_compress_template_cache" value="true" class="btn btn-warning"><?php echo $text_clean_compress_template_cache ?></button>
			</form>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="span1"></div>
		<div class="span11">
			<textarea rows="8" cols="50" style="width:100%"><?php echo $template ?></textarea>
		</div>
	</div>
	<br />
	</div>
</div>
<?php echo $Footer ?>