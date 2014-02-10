<?php if ($breadcrumb) : ?>
<ul class="breadcrumb">
  <?php foreach ($breadcrumb['parent'] as $parent) : ?>
  <li><a href="<?php echo $parent['link'] ?>"><?php echo $parent['text'] ?></a> <span class="divider">/</span></li>
  <?php endforeach; ?>
  <li class="active"><?php echo $breadcrumb['curent'] ?></li>
</ul>
<?php endif; ?>