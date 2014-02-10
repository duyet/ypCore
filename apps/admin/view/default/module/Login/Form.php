<?= $Header ?>
	<div id="page-title">
		<span class="title"><img src="<?= $template_url ?>/img/icon/unlock32.png" border="0" title="<?= $text_login ?>" alt=""><?= $text_login ?></span>
		<span class="subtitle"><?= $text_login_subtite ?></span>
	</div>
<div class="row">
	<div class="span1"></div>
	<div class="span5">
		<?php if ($error) { ?><div class="error-box" style=""><?= $error ?></div><?php } ?>

		<form action="<?= $form_action ?>" method="POST">
			<input name="hl" id="hl" value="vi" type="hidden">
			<fieldset>
				<div>
					<label><?= $text_username ?></label>
					<input class="span4" spellcheck="false" name="username" id="Email" type="text" value="<?= $username ?>" class="form-poshytip" title="<?= $text_placeholder_username ?>" <?= $relogin ? 'disabled="disabled"': '' ?>>
				</div>
				<div>
					<label><?= $text_password ?></label>
					<input class="span4" name="password" id="Passwd" type="password" value="<?= $password ?>" class="form-poshytip" title="<?= $text_placeholder_password ?>">
				</div>

				<input type="hidden" name="redirect" value="<?= $redirect_to ?>">
				<p class="text-center"><input name="login" id="submit" value="<?= $button_login ?>" type="submit" class="btn btn-success btn-large" /></p> &nbsp;&nbsp;
				<p><?= $relogin ? $another_login_link : '' ?></p>
			</fieldset>
		</form>
	</div>

	<div class="span6">
		<?= $text_right_description ?>
	</div>
</div>

<?= $Footer ?>