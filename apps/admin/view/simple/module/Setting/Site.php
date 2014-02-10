{$Header}

<main role="main" id="main">
	<aside id="notifications">
		<!-- Notifications -->
		{if !empty($error)}<div class="notification-error">{$error}<a href="#" class="close"></a></div>{/if}
		{if !empty($success)}<div class="notification-success">{$success}<a href="#" class="close"></a></div>{/if}
	</aside>

	<div class="wrapper">
		{$Leftmenu}
		

		<section class="settings-content active" id="general" style="display: block;">
			<header>
				<button class="button-back">Back</button>
				<h2 class="title">{$text_pagetitle}</h2>
				<section class="page-actions">
					
				</section>
			</header>


			<section class="content">
				<form id="settings-general" novalidate="novalidate" action="{$form_action}" method="post">

					<div class="form-group">
		                <label for="site_title">{$text_setting_sitetitle}</label>
		                <input id="site_title" name="site_title" type="text" value="{$settings.site_title}">
		                <p></p>
		            </div>

		          	<div class="form-group">
		                <label for="site_description">{$text_setting_description}</label>
		                <input id="site_description" name="site_description" type="text" value="{$settings.site_description}">
		                <p></p>
		            </div>

		            <div class="form-group">
		                <label for="site_keywork">{$text_setting_site_keywork}</label>
		                <input id="site_keywork" name="site_keywork" type="text" value="{$settings.site_keywork}">
		                <p></p>
		            </div>

					<div class="form-group">
		                <label for="firewall">{$text_setting_firewall}</label>
			                <input type="radio" name="firewall" value="1" {if $settings.firewall == '1'} checked="checked"{/if} /> {$text_on}<br />
			                <input type="radio" name="firewall" value="0" {if $settings.firewall == '0'} checked="checked"{/if} /> {$text_off}<br />
					        <p></p>
		            </div>

		            <div class="form-group">
		                <label for="language">{$text_setting_sitelanguage}</label>
			                <select name="language">
								<option value="en" {if $settings.language == 'en'} selected="selected" {/if}>{$text_en}</option>
								<option value="vi" {if $settings.language == 'vi'} selected="selected" {/if}>{$text_vi}</option>
							</select>
						<p></p>
		            </div>

		            <div class="form-group">
		                <label for="admin_language">{$text_setting_admin_language}</label>
			                <select name="admin_language">
								<option value="en" {if $settings.admin_language == 'en'} selected="selected" {/if}>{$text_en}</option>
								<option value="vi" {if $settings.admin_language == 'vi'} selected="selected" {/if}>{$text_vi}</option>
							</select>
						<p></p>
		            </div>

		            <div class="form-group">
		                <label for="addthis">{$text_setting_addthis}</label>
			                <input type="radio" name="addthis" value="1" {if $settings.addthis == '1'} checked="checked"{/if} /> {$text_on}<br />
			                <input type="radio" name="addthis" value="0" {if $settings.addthis == '0'} checked="checked"{/if} /> {$text_off}<br />
					        <p></p>
		            </div>

		            <div class="form-group">
		                <label for="addthis_id">{$text_setting_addthis_id}</label>
			                <input id="addthis_id" name="addthis_id" type="text" value="{$settings.addthis_id}" placeholder="ra-4e911dd9207371f5">
					        <p></p>
		            </div>

		            <div class="form-group">
		                <label for="default_module">{$text_setting_default_module}</label>
		                <input id="default_module" name="default_module" type="text" value="{$settings.default_module}">
		                <p></p>
		            </div>

		            <section class="page-actions">
						<button type="submit" name="submit" class="button-save">{$button_save_setting}</button>
					</section>
				</form>
			</section>
		</section>
	</div>
</main>

{$Footer}