<?php echo $Header ?>

<?php echo $Breadcrumb ?>

<div class="row">
  <div class="span10"><h3><?php echo $text_cat ?></h3></div>
  <div class="span2 view-mode">
    <a href="<?php echo $link_mode['box'] ?>" class="icon-th yp-tooltip" id="cat-box-view" data-toggle="tooltip" data-placement="bottom" title="<?php echo $text_swith_to_box_view ?>"></a> &nbsp; 
    <a href="<?php echo $link_mode['line'] ?>" class="icon-th-list yp-tooltip" id="cat-line-view" data-toggle="tooltip" data-placement="bottom" title="<?php echo $text_swith_to_line_view ?>"></a>
  </div>
</div>

<?php if ($cats) { ?>
<div class="row">
  <?php foreach($cats as $id => $cat) { ?>
  <div class="span12 line-cat">
    <div class="span9">
	  <div class="span2 head">
	    <h4><a class="yp-tooltip" href="<?php echo $cat['link'] ?>" title="<?php echo $cat['description'] ?>"><?php echo $cat['title'] ?></a></h4>
	    <div class="description"><?php echo $cat['description'] ?></div>
		<div class="child"> &nbsp;<?php if (isset($list_child[$id]) AND count($list_child[$id])) echo implode(' &middot; ', $list_child[$id]); ?></div>
	  </div>
	  <div class="span6 link">
		<?php if (count($cat['newest_post'])) {
			echo '<ul class="newest_post">';
			foreach($cat['newest_post']['cat_line'] as $post) {
				echo '<li>'. $post .'</li>';
			}
			echo '</ul>';
		} ?>
	  </div>
	 </div>
	 <div class="span2">
	  <div class="learn-more-button">
	    <p class="text-right"><a href="<?php echo $cat['link'] ?>" class="btn">Learn more &gt; </a></p>
	  </div>
	 </div>
	</div>
  <?php } ?>
</div>
<?php } ?>

<?php if ($posts) { ?>
<hr />
	<div class="row">
		<div class="span6">
		<ul>
		<?php foreach($posts as $post) { ?>
		  <li><a href="<?php echo $post['link'] ?>"><?php echo $post['title'] ?></a></li>
		<?php } ?>
		</ul>
		</div>
		<div class="span6"></div>
	</div>
<?php } ?>

<?php echo $Footer ?>