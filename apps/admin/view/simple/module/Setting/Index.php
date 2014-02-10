{$Header}

<main role="main" id="main">
	<aside id="notifications">
		<!-- Notifications -->
		{if !empty($error)}<div class="notification-error">{$error}</div>{/if}
		{if !empty($success)}<div class="notification-success">{$success}</div>{/if}
	</aside>

	<div class="wrapper">
		{include file="./Leftmenu.php"}
		

		<section class="settings-content active" id="general" style="display: block;">
			<header>
				<button class="button-back">Back</button>
				<h2 class="title">All server settings</h2>
				<section class="page-actions">
				
				</section>
			</header>



			<section class="content">
			    <h1></h1>

			    	<button onclick="window.location='{$settingUrl.server}'">Server Setting</button>
			    	<button onclick="window.location='{$settingUrl.site}'">Site Setting</button>
			    	<button onclick="window.location='{$settingUrl.template}'">Template Setting</button>
			    	<button onclick="window.location='{$settingUrl.user}'">User Setting</button>
			    	<button onclick="window.location='{$settingUrl.urlandhtml}'">URL and HTML Setting</button>

			</section>
		</section>
	</div>

</main>

{$Footer}