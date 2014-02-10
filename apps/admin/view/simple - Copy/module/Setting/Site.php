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
			<div class="row">
				<div class="span5">
					<div><label><?php echo $text_setting_sitetitle ?></label>
					<input class="span4" type="text" name="site_title" value="<?php echo $settings['site_title'] ?>" /></div>

					<div><label><?php echo $text_setting_sitetitle_construct ?></label>
					<input class="span4" type="text" class="input-text" name="site_title_construct" value="<?php echo htmlspecialchars_decode($settings['site_title_construct']) ?>" /></div>
				
					<div><label><?php echo $text_setting_site_keywork ?></label>
					<input class="span4" type="text" class="input-text" name="site_keywork" value="<?php echo $settings['site_keywork'] ?>" /></div>
					
					<div><label><?php echo $text_setting_description ?></label>
					<input class="span4" type="text" class="input-text" name="site_description" value="<?php echo $settings['site_description'] ?>" /></div>
					
					<div><label><?php echo $text_setting_firewall ?></label>
					<input type="radio" class="input_radio" name="firewall" value="1" <?php echo $settings['firewall'] == '1' ? 'checked="checked"' : '' ?> /> <?php echo $text_on ?><br />
					<input type="radio" class="input_radio" name="firewall" value="0" <?php echo $settings['firewall'] == '0' ? 'checked="checked"' : '' ?> /> <?php echo $text_off ?></div>
				</div>

				<div class="span5">
					<div><label><?php echo $text_setting_sitelanguage ?></label>
					<select name="language">
						<option value="en" <?php echo $settings['language'] == 'en' ? 'selected="selected"' : '' ?>><?php echo $text_en ?></option>
						<option value="vi"<?php echo $settings['language'] == 'vi' ? 'selected="selected"' : '' ?>><?php echo $text_vi ?></option>
					</select>
					</div>

					<div><label><?php echo $text_setting_admin_language ?></label>
					<select name="admin_language">
						<option value="en" <?php echo $settings['admin_language'] == 'en' ? 'selected="selected"' : '' ?>><?php echo $text_en ?></option>
						<option value="vi"<?php echo $settings['admin_language'] == 'vi' ? 'selected="selected"' : '' ?>><?php echo $text_vi ?></option>
					</select>
					</div>


				<div><label><?php echo $text_setting_default_module ?></label>
					<input class="span4" type="text" class="input-text" name="default_module" value="<?php echo $settings['default_module'] ?>" /></div>
					
					<div><label><?php echo $text_setting_addthis ?></label>
					<input type="radio" class="input_radio" name="addthis" value="1" <?php echo $settings['addthis'] == '1' ? 'checked="checked"' : '' ?> /> <?php echo $text_on ?><br />
					<input type="radio" class="input_radio" name="addthis" value="0" <?php echo $settings['addthis'] == '0' ? 'checked="checked"' : '' ?> /> <?php echo $text_off ?></div>
					
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