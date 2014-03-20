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

	<div class="yp-share row">
		Share:   
		<a class="" href="https://www.facebook.com/sharer/sharer.php?u={$this_url}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" title="Facebook">
            <span class="">Facebook</span>
        </a>

        <a class="" href="http://twitter.com/share?text=Hey,%20please%20read%20it&amp;url={$this_url}" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" title="Twitter">
            <span class="">Twitter</span>
        </a>

        <a class="" href="https://plus.google.com/share?url={$this_url}" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" title="Google+">
                        <span class="">Google+</span>
        </a>
	</div>

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