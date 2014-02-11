{$Header}

<main class="content" role="main">
{foreach $posts as $post}
	<article class="post tag-{$post.tag}">
		<header class="post-header">
			<span class="post-meta"><time datetime="{$post.post_date_tag}">{$post.post_date_text}</time> {if $post.tag}{$text_on} {$post.tag}{/if}</span>
			<h2 class="post-title"><a href="{$post.post_link}">{$post.title}</a></h2>
		</header>
		<section class="post-excerpt">
			<p style="font-family: 'Droid Serif',serif;">{$post.post}</p>
		</section>
	</article>
{/foreach}
</main>


{$Footer}