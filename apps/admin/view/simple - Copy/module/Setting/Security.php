<?php echo $Header ?>

	<div id="page-title" class="page-title-setting">
		<span class="title"><img src="<?php echo $template_url ?>/img/icon/Configure alt 2.png" width="50" border="0" title="" alt=""> <?php echo $text_pagetitle ?></span>
		<span class="subtitle"><?php echo $text_pagetitle_subtite ?></span>
	</div>

<div class="tabbable tabs-left">
  <ul class="nav nav-tabs">
    <?php echo $SettingLeftMenu ?>
  </ul>
  <div class="tab-content">

		<?php if (!empty($error)) { ?><div class="alert alert-error"><?php echo $error ?></div><?php } ?>
		<?php if (!empty($success)) { ?><div class="alert alert-success"><strong>Success</strong> <?php echo $success ?></div><?php } ?>

		<form action="<?php echo $form_action ?>" method="POST" class="setting-form">
			<br />
			<div class="row">
				<div class="span5">
					<div><label><?php echo $text_deny_if_none_useragent ?></label>
					<input type="radio" class="input_radio" name="deny_if_none_useragent" value="1" <?php echo $settings['deny_if_none_useragent'] == '1' ? 'checked="checked"' : '' ?> /> <?php echo $text_on ?><br />
					<input type="radio" class="input_radio" name="deny_if_none_useragent" value="0" <?php echo $settings['deny_if_none_useragent'] == '0' ? 'checked="checked"' : '' ?> /> <?php echo $text_off ?></div>
					
					<div><label><?php echo $text_setting_firewall ?></label>
					<input type="radio" class="input_radio" name="firewall" value="1" <?php echo $settings['firewall'] == '1' ? 'checked="checked"' : '' ?> /> <?php echo $text_on ?><br />
					<input type="radio" class="input_radio" name="firewall" value="0" <?php echo $settings['firewall'] == '0' ? 'checked="checked"' : '' ?> /> <?php echo $text_off ?></div>
					
					<div><label><?php echo $text_security_https ?></label>
					<input type="radio" class="input_radio" name="security_https" value="1" <?php echo $settings['security_https'] == '1' ? 'checked="checked"' : '' ?> /> <?php echo $text_on ?><br />
					<input type="radio" class="input_radio" name="security_https" value="0" <?php echo $settings['security_https'] == '0' ? 'checked="checked"' : '' ?> /> <?php echo $text_off ?></div>
				
				</div>

				<div class="span5">
					<div><label><?php echo $text_admin_fake_link ?></label>
					<input class="span4" type="text" class="input-text" name="admin_fake_link" value="<?php echo $settings['admin_fake_link'] ?>" /></div>
				</div>
			<div class="row">
				<div class="span8"></div>
				<div class="span2">
					<input type="submit" value="<?php echo $button_save_setting ?>" name="submit" class="btn" id="submit" />
				</div>
			</div>
			</div> 
		</form>
  </div>
</div>


<?php echo $Footer ?>