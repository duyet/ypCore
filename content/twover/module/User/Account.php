<?php echo $Header ?>

<h1><?php echo $text_account ?></h1>
<div class="row">
  <div class="span6">
    <table class="table">
	  <thead><tr><td>#</td><td></td></tr></thead>
	  <tbody>
	  <?php foreach($user as $key => $value) { ?>
	  <tr><td><?php echo $key ?></td><td><?php if (is_array($value)) { foreach($value as $_key => $_value) { echo $_key . ': ' . $_value . '<br />'; } } else { echo $value; } ?></td></tr>
	  <?php } ?>
	  </tbody>
	</table>
  </div>
  <div class="span3">
    
  </div>
  <div class="span3">
    <ul>
     <li><?php echo $link['account'] ?></li>
     <li><?php echo $link['changepass'] ?></li>
     <li><?php echo $link['changeemail'] ?></li>
     <li><?php echo $link['logout'] ?></li>
	</ul>
  </div>
</div>

<?php echo $Footer ?>