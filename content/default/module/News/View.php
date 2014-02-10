{$Header}



<article class="post">
	<h1 class="post-title">{$news.title}</h1>
	<div class="time-author">
		By <a href="{$news.author_link}">{$news.author}</a> 
		at <time pubdate datetime="{$news.post_date}" class="date">{$news.post_date}</time> 
		{if $news.tag} on {$news.tag}{/if}
		 | <a href="{$site_url}">Back to home</a>
	</div>

	<section class="post-content">
		<p {if $quick_edit == TRUE}contenteditable="true"{/if}>{$news.post}</p>
	</section>

	<hr />

	<div class="comment row">
		{if $comment_disqus}
		<h3 class="comment">Comment</h3>
			<div id="disqus_thread"></div>
			<script type="text/javascript">
	        (function() {
	            var yp_comment_disqus = document.createElement('script'); 
	            yp_comment_disqus.type = 'text/javascript'; 
	            yp_comment_disqus.async = true;
	            yp_comment_disqus.src = '//{$comment_disqus_alias}.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(yp_comment_disqus);
	        })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a>
	    {else}
			<div class="span5">{$Comment}</div>
			<div class="span1"></div>
			<div class="span5">{$ListComment}</div>
		{/if}
	</div>


</article>

{if $quick_edit == TRUE}
<script type="text/javascript" src="{$static_url}/javascript/ckeditor/ckeditor.js"></script>
{/if}

{$Footer}