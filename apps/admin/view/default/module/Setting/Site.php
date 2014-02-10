<?= $Header ?>

	<div id="page-title">
		<span class="title"><img src="<?= $template_url ?>/img/icon/notepencil32.png" border="0" title="Home" alt=""> <?= $text_pagetitle ?></span>
		<span class="subtitle"><?= $text_pagetitle_subtite ?></span>
	</div>

<div class="tabbable tabs-left">
  <ul class="nav nav-tabs">
    <?= $SettingRightMenu ?>
  </ul>
  <div class="tab-content">

		<?php if (!empty($error)) { ?><p class="error-box"><?= $error ?></p><?php } ?>
		<?php if (!empty($success)) { ?><p class="success-box"><?= $success ?></p><?php } ?>

		<form action="<?= $form_action ?>" method="POST" class="setting-form">
			<div class="row">
				<div class="span5">
					<div><label><?= $text_setting_sitetitle ?></label>
					<input class="span4" type="text" name="site_title" value="<?= $settings['site_title'] ?>" /></div>

					<div><label><?= $text_setting_sitetitle_construct ?></label>
					<input type="text" class="input-text" name="site_title_construct" value="<?= htmlspecialchars_decode($settings['site_title_construct']) ?>" /></div>
				
					<div><label><?= $text_setting_site_keywork ?></label>
					<input type="text" class="input-text" name="site_keywork" value="<?= $settings['site_keywork'] ?>" /></div>
					
					<div><label><?= $text_setting_description ?></label>
					<input type="text" class="input-text" name="site_description" value="<?= $settings['site_description'] ?>" /></div>
					
					<div><label><?= $text_setting_firewall ?></label>
					<input type="radio" class="input_radio" name="firewall" value="1" <?= $settings['firewall'] == '1' ? 'checked="checked"' : '' ?> /> <?= $text_on ?><br />
					<input type="radio" class="input_radio" name="firewall" value="0" <?= $settings['firewall'] == '0' ? 'checked="checked"' : '' ?> /> <?= $text_off ?></div>
					
					<div><label><?= $text_setting_sitelanguage ?></label>
					<select name="language">
						<option value="en" <?= $settings['language'] == 'en' ? 'selected="selected"' : '' ?>><?= $text_en ?></option>
						<option value="vi"<?= $settings['language'] == 'vi' ? 'selected="selected"' : '' ?>><?= $text_vi ?></option>
					</select>
					</div>

					<div><label><?= $text_setting_admin_language ?></label>
					<select name="admin_language">
						<option value="en" <?= $settings['admin_language'] == 'en' ? 'selected="selected"' : '' ?>><?= $text_en ?></option>
						<option value="vi"<?= $settings['admin_language'] == 'vi' ? 'selected="selected"' : '' ?>><?= $text_vi ?></option>
					</select>
					</div>

				</div>
				
				<div class="span5">
					<div><label><?= $text_setting_rewrite ?></label>
					<input type="radio" class="input_radio" name="rewrite" value="1" <?= $settings['rewrite'] == '1' ? 'checked="checked"' : '' ?> /> <?= $text_on ?><br />
					<input type="radio" class="input_radio" name="rewrite" value="0" <?= $settings['rewrite'] == '0' ? 'checked="checked"' : '' ?> /> <?= $text_off ?></div>
					
					<div><label><?= $text_setting_default_module ?></label>
					<input type="text" class="input-text" name="default_module" value="<?= $settings['default_module'] ?>" /></div>
					
					<div><label><?= $text_setting_google_analytics_code ?></label>
					<input type="text" class="input-text" name="google_analytics_code" value="<?= $settings['google_analytics_code'] ?>" /></div>
					
					<div><label><?= $text_setting_addthis ?></label>
					<input type="radio" class="input_radio" name="addthis" value="1" <?= $settings['addthis'] == '1' ? 'checked="checked"' : '' ?> /> <?= $text_on ?><br />
					<input type="radio" class="input_radio" name="addthis" value="0" <?= $settings['addthis'] == '0' ? 'checked="checked"' : '' ?> /> <?= $text_off ?></div>

					<div><label><?= $text_setting_compresspage ?></label>
					<input type="radio" class="input_radio" name="compress_page" value="1" <?= $settings['compress_page'] == '1' ? 'checked="checked"' : '' ?> /> <?= $text_on ?><br />
					<input type="radio" class="input_radio" name="compress_page" value="0" <?= $settings['compress_page'] == '0' ? 'checked="checked"' : '' ?> /> <?= $text_off ?></div>


					<div><label><?= $text_setting_compression_level ?></label>
					<input type="text" class="input-text" name="compression_level" value="<?= $settings['compression_level'] ?>" /></div>

					<div><label><?= $text_setting_compress_html ?></label>
					<input type="radio" class="input_radio" name="compress_html" value="1" <?= $settings['compress_html'] == '1' ? 'checked="checked"' : '' ?> /> <?= $text_on ?><br />
					<input type="radio" class="input_radio" name="compress_html" value="0" <?= $settings['compress_html'] == '0' ? 'checked="checked"' : '' ?> /> <?= $text_off ?></div>
					
				</div>
			<div class="row">
				<div class="span8"></div>
				<div class="span2">
					<input type="submit" value="<?= $button_save_setting ?>" name="submit" class="btn btn-primary" id="submit" />
				</div>
			</div>
			</div> 
		</form>
  </div>
</div>


<?= $Footer ?>