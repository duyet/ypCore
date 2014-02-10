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
					<h2 class="title">Tools System</h2>
					<section class="page-actions">
						
					</section>
				</header>

			</section>
		</form>
	</div>
</main>

<script type="text/javascript">
	
</script>