{$Header}

{$Breadcrumb{$

<div class="row">
  <div class="span10"><h3>{$text_cat{$</h3></div>
  <div class="span2 view-mode">
    <a href="{$link_mode['box']{$" class="icon-th yp-tooltip" id="cat-box-view" data-toggle="tooltip" data-placement="bottom" title="{$text_swith_to_box_view{$"></a> &nbsp; 
    <a href="{$link_mode['line']{$" class="icon-th-list yp-tooltip" id="cat-line-view" data-toggle="tooltip" data-placement="bottom" title="{$text_swith_to_line_view{$"></a>
  </div>
</div>

{if ($cats)}
<div class="row">
 {foreach ($cats as $id => $cat)}
  <div class="span12 line-cat">
    <div class="span9">
	  <div class="span2 head">
	    <h4><a class="yp-tooltip" href="{$cat.link}" title="{$cat.description}">{$cat.title}</a></h4>
	    <div class="description">{$cat.description}</div>
		<div class="child"> &nbsp;{if (isset($list_child.$id) AND count($list_child.$id))} {implode(' &middot; ', $list_child.$id)}{/if}</div>
	  </div>
	  <div class="span6 link">
		{if (count($cat.newest_post))}
			<ul class="newest_post">';
			{foreach ($cat.newest_post.cat_line as $post)}
				<li>{$post}</li>
			{/foreach}
			</ul>
		{/if}
	  </div>
	 </div>
	 <div class="span2">
	  <div class="learn-more-button">
	    <p class="text-right"><a href="{$cat.link}" class="btn">Learn more &gt; </a></p>
	  </div>
	 </div>
	</div>
  {/foreach}
</div>
{/if}

{if ($posts)}
<hr />
	<div class="row">
		<div class="span6">
		<ul>
		{foreach ($posts as $post)}
		  <li><a href="{$post.link}">{$post.title}</a></li>
		{/foreach}
		</ul>
		</div>
		<div class="span6"></div>
	</div>
{/if}

{$Footer}