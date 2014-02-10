<?php echo $Header ?>
	<div id="page-title">
		<span class="title"><img src="<?php echo $template_url ?>/img/icon/unlock32.png" border="0" title="<?php echo $text_login ?>" alt=""><?php echo $text_login ?></span>
		<span class="subtitle"><?php echo $text_login_subtite ?></span>
	</div>
<div class="row login-form">
	<div class="span1"></div>
	<div class="span5">
		<?php if ($error) { ?><div class="error-box" style=""><?php echo $error ?></div><?php } ?>

		<form action="<?php echo $form_action ?>" method="POST">
			<input name="hl" id="hl" value="vi" type="hidden">
			<fieldset>
				<div>
					<label><?php echo $text_username ?></label>
					<input class="span4" spellcheck="false" name="username" id="Email" type="text" value="<?php echo $username ?>" class="form-poshytip" title="<?php echo $text_placeholder_username ?>" />
					<?php // $relogin ? 'disabled="disabled"': '' ?>
				</div>
				<div>
					<label><?php echo $text_password ?></label>
					<input class="span4" name="password" id="Passwd" type="password" value="<?php echo $password ?>" class="form-poshytip" title="<?php echo $text_placeholder_password ?>">
				</div>

				<input type="hidden" name="redirect" value="<?php echo $redirect_to ?>">
				<p class="text-center"><input name="login" id="submit" value="<?php echo $button_login ?>" type="submit" class="btn btn-success btn-large" /></p> &nbsp;&nbsp;
				<p><?php echo $relogin ? $another_login_link : '' ?></p>
			</fieldset>
		</form>
	</div>

	<div class="span6">
		<?php echo $text_right_description ?>
	</div>
</div>

<?php echo $Footer ?>