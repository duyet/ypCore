<aside class="settings-sidebar" role="complementary">
	<header><h1 class="title">Settings</h1></header>
	<nav class="settings-menu">
	    <ul>
	        <li class="server {if $menu_active == 'server'}active{/if}"><a href="{$links.server}">{$text_server_setting}</a></li>
	        <li class="template {if $menu_active == 'template'}active{/if}"><a href="{$links.template}">{$text_template_setting}</a></li>
	        <li class="site {if $menu_active == 'site'}active{/if}"><a href="{$links.site}">{$text_site_setting}</a></li>
	        <li class="users {if $menu_active == 'user'}active{/if}"><a href="{$links.user}">{$text_user_setting}</a></li>
	        <li class="urlandhtml {if $menu_active == 'urlandhtml'}active{/if}"><a href="{$links.urlandhtml}">{$text_urlandhtml_setting}</a></li>
	        <li class="security {if $menu_active == 'security'}active{/if}"><a href="{$links.security}">{$text_security_setting}</a></li>
	        <li class="tools"><a href="{$links.tools}">{$text_tools}</a></li>
	    </ul>
	</nav>
</aside>