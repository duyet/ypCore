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
			    	<fieldset>
			    		<div class="form-group">
			                <label for="deny_if_none_useragent">{$text_deny_if_none_useragent}</label>
				                <input type="radio" name="deny_if_none_useragent" value="1" {if $settings.deny_if_none_useragent == '1'} checked="checked"{/if} /> {$text_on}
				                <input type="radio" name="deny_if_none_useragent" value="0" {if $settings.deny_if_none_useragent == '0'} checked="checked"{/if} /> {$text_off}
						        <p></p>
			            </div>

			            <div class="form-group">
			                <label for="firewall">{$text_setting_firewall}</label>
				                <input type="radio" name="firewall" value="1" {if $settings.firewall == '1'} checked="checked"{/if} /> {$text_on}
				                <input type="radio" name="firewall" value="0" {if $settings.firewall == '0'} checked="checked"{/if} /> {$text_off}
						        <p></p>
			            </div>

			            <div class="form-group">
			                <label for="security_https">{$text_security_https}</label>
				                <input type="radio" name="security_https" value="1" {if $settings.security_https == '1'} checked="checked"{/if} /> {$text_on}
				                <input type="radio" name="security_https" value="0" {if $settings.security_https == '0'} checked="checked"{/if} /> {$text_off}
						        <p></p>
			            </div>

			            <div class="form-group">
			                <label for="admin_fake_link">{$text_admin_fake_link}</label>
			                <input id="tmp" name="admin_fake_link" type="text" value="{$settings.admin_fake_link}">
			                <p></p>
			            </div>			        
			        </fieldset>

			        <section class="page-actions">
						<button type="submit" name="submit" class="button-save">{$button_save_setting}</button>
					</section>
			    </form>
			</section>
		</section>
	</div>

</main>

{$Footer}