<div class="comment-list-box">
<h3>{$text_comment_list}</h3>
{if (count($comments) == 0)}
  <h4>{$text_no_comment}<h4>
{else}

  <div class="comment-list">
    {foreach $comments as $comment}
      <div class="comment-each">
        <p>
          <span class="comment-username">
           <a href="{$comment['user_link']}" title="{$comment['date']}">{$comment['username']}</a>
          </span>
            {$comment['comment']}
          {if ($is_admin)}
           <a href="{$delete_link[$comment['id']]}"></a>
          {/if}
        </p>
      </div>
    {/foreach}
  </div>

{/if}
</div>