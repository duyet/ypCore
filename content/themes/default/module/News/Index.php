{$Header}
<link rel="next" href="{$next_page_link}">
<link rel="prev" href="{$pre_page_link}">

<main class="content" role="main">
{if count($posts) == 0} 
	<article class="post tag">
			<header class="post-header">
				<h2 class="post-title">Sorry, there are nothing for you :(</h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;">Coming soon ...</p>
			</section>
	</article>
{else}
	{foreach $posts as $post}
		<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="{$post.post_date_tag}">{$post.post_date_text}</time> {if $post.tag}{$text_on} {$post.tag}{/if}</span>
				<h2 class="post-title"><a href="{$post.post_link}">{$post.title}</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;">{$post.post}</p>
			</section>
		</article>
	{/foreach}
{/if}

<section class="pagination">
	{if $pre_page_link}<div class="pre-page"><a class="older-posts" href="{$pre_page_link}">Pre page</a></div>{/if}
	{if $next_page_link}<div class="next-page"><a class="newer-posts" href="{$next_page_link}">Next page</a></div>{/if}	
</section>
</main>


{$Footer}