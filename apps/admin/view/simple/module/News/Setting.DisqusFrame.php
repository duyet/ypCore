{$Header}

<main role="main" class="main-frame" contenteditable="false">
	<aside id="notifications">
		<!-- Notifications -->
		{if !empty($error)}<div class="notification-error">{$error}</div>{/if}
		{if !empty($success)}<div class="notification-success">{$success}</div>{/if}
	</aside>

	<section class="frame">
		<h3>Disqus Setting</h3>
		<iframe src="{$disqus_frame_url}" class="disqus_frame" frameborder="0"></iframe>
	</section>
</main>
