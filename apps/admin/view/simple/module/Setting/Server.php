{$Header}<main role="main" id="main">	<aside id="notifications">		<!-- Notifications -->		{if !empty($error)}<div class="notification-error">{$error}<a href="#" class="close"></a></div>{/if}		{if !empty($success)}<div class="notification-success">{$success}<a href="#" class="close"></a></div>{/if}	</aside>	<div class="wrapper">		{$current = "setting"}		{include file="./Leftmenu.php"}			<form id="settings-general" novalidate="novalidate" action="{$form_action}" method="post">		<section class="settings-content active" id="general" style="display: block;">			<header>				<button class="button-back">Back</button>				<h2 class="title">{$text_pagetitle}</h2>				<section class="page-actions">					<button type="submit" name="submit" class="button-save" >{$button_save_setting}</button>				</section>			</header>			<section class="content">			        <fieldset>			        	{if $disk_use_on_total}			            <div class="form-group">			                <label for="blog-title">{$text_disk_space}</label>			                <span class="progress">								<span class="{$disk_class}" style="width: {$disk_use_on_total}%;">{$disk_used} MB ({$disk_use_on_total}%)</span>							</span>			            </div>			            {/if}			            <div class="form-group">			                <label for="blog-description">{$text_host_name}</label>			               	{$text_server_loadavg}: <span id="serverLoadAvg">{$serverLoadAvg}</span>% <span id="serverRefresh"></span>			            </div>			        </fieldset>			            <div class="form-group">			                <label for="blog-logo">Blog Logo</label>			                			                    <a class="button-add js-modal-logo">Upload Image</a>			                			                <p>Display a sexy logo for your publication</p>			            </div>			            <div class="form-group">			                <label for="blog-cover">Blog Cover</label>			                			                    <a class="button-add js-modal-cover">Upload Image</a>			                			                <p>Display a cover image on your site</p>			            </div>			        <fieldset>			            			            <div class="form-group">			                <label for="">{$text_setting_phpinfo}</label>				                <p><a href="./server/phpinfo" target="_blank">{$phpinfo_link}</a></p>			            </div>			            <div class="form-group">			                <label for="debug">{$text_setting_debug}</label>				                <input type="radio" name="debug" value="1" {if $settings.debug == '1'} checked="checked"{/if} /> {$text_on}<br />				                <input type="radio" name="debug" value="0" {if $settings.debug == '0'} checked="checked"{/if} /> {$text_off}<br />						        <p></p>			            </div>			            <div class="form-group">			                <label for="upload_dir">{$text_setting_upload_dir}</label>			                <input id="tmp" name="upload_dir" type="text" value="{$settings.upload_dir}">			                <p></p>			            </div>			        </fieldset>			   			</section>		</section></form>	</div></main>{$Footer}