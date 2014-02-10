<div class="comment-list-box">
<h3><?php echo $text_comment_list ?></h3>
<?php if (count($comments) == 0) { ?>
  <h4><?php echo $text_no_comment ?><h4>
<?php } else { ?>

 <div class="comment-list">
  <?php foreach($comments as $comment) { ?>
  <p class="">

    <span class="comment-username">
      <a href="<?php echo $comment['user_link'] ?>"><?php echo $comment['username'] ?></a>
    </span>
    <span class="date"><?php if ($comment['date']) echo $comment['date']; ?></span>:
     <?php echo $comment['comment'] ?>
	 <?php if ($is_admin) { ?>
	   <a href="<?php echo $delete_link[$comment['id']] ?>">
	 <?php } ?>
  </p>
	<hr />
  <?php } ?>
  </div>
<?php } ?>
</div>