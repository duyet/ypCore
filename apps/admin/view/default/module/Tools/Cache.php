<?= $Header ?>

	<div id="page-title">
		<span class="title"><img src="<?= $template_url ?>/img/icon/notepencil32.png" border="0" title="" alt=""> <?= $text_pagetitle ?></span>
		<span class="subtitle"><?= $text_pagetitle_subtite ?> &nbsp; 
			</span>
	</div>

<?php if ($success) { ?><p class="success-box"><?= $success ?></p><?php } ?>

<div class="container">
	<div class="row">
		<div class="span4"><h4><?= $text_cache ?> </h4> </div>
		<div class="span4">
			<form action="<?= $form_action ?>" method="POST">
				<button type="submit" name="cleanup_cache" value="true" class="btn btn-warning"><?= $text_clean_cache ?></button>
			</form>
		</div>
		<div class="span4"></div>
	</div>
	<br />
	<div class="row">
		<div class="span11">
			<textarea rows="8" cols="50" style="width:100%"><?= $cache ?></textarea>
		</div>
	</div>
	
	<hr />
	
	<div class="row">
		<div class="span4"><h4><?= $text_compress_template_cache ?> </h4> </div>
		<div class="span4">
			<form action="<?= $form_action ?>" method="POST">
				<button type="submit" name="cleanup_compress_template_cache" value="true" class="btn btn-warning"><?= $text_clean_compress_template_cache ?></button>
			</form>
		</div>
		<div class="span4"></div>
	</div>
	<br />
	<div class="row">
		<div class="span11">
			<textarea rows="8" cols="50" style="width:100%"><?= $template ?></textarea>
		</div>
	</div>
</div>
<?= $Footer ?>