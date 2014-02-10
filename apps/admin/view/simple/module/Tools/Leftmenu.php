<aside class="settings-sidebar" role="complementary">
	<header><h1 class="title">Tools</h1></header>
	<nav class="settings-menu">
	    <ul>
	        <li class="cache {if $menu_active == 'server'}active{/if}"><a href="{$links.cache}">{$text_cache}</a></li>
	        <li class="backup {if $menu_active == 'template'}active{/if}"><a href="{$links.backup}">{$text_backup}</a></li>
	        <li class="fixsystem {if $menu_active == 'site'}active{/if}"><a href="{$links.fixsystem}">{$text_fixsystem}</a></li>
	        <li class="update {if $menu_active == 'user'}active{/if}"><a href="{$links.update}">{$text_update}</a></li>
	    </ul>
	</nav>
</aside>