{$Header}

<main role="main" id="main">
	<aside id="notifications">
		<!-- Notifications -->
		{if !empty($error)}<div class="notification-error">{$error}<a href="#" class="close"></a></div>{/if}
		{if !empty($success)}<div class="notification-success">{$success}<a href="#" class="close"></a></div>{/if}
	</aside>

	<div class="wrapper">
		{$Leftmenu}
		
		<form id="settings-general" novalidate="novalidate" action="{$form_action}" method="post">
			<section class="settings-content active" id="general" style="display: block;">
				<header>
					<button class="button-back">Back</button>
					<h2 class="title">{$text_pagetitle}</h2>
					<section class="page-actions">
						<button type="submit" name="cleanup_cache" value="true" class="button-save" >{$text_clean_cache}</button>
						<button type="submit" name="cleanup_compress_template_cache" value="true" class="button-save" >{$text_clean_compress_template_cache}</button>
					</section>
				</header>

				<section class="content">
					<h3>{$text_cache}</h3>
					<textarea rows="8" cols="100" style="width:100%">{$cache}</textarea>

					<h3>{$text_compress_template_cache}</h3>
					<textarea rows="8" cols="100" style="width:100%">{$template}</textarea>
				</section>
			</section>
		</form>
	</div>
</main>

<script type="text/javascript">
	
</script>

{$Footer}