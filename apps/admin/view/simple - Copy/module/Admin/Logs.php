<?php echo $Header ?>

	<div id="page-title" class="page-title-logs">
		<span class="title"><img src="<?php echo $template_url ?>/img/icon/Documents Library.png" border="0" width="50" title="" alt=""> <?php echo $text_pagetitle ?></span>
		<span class="subtitle"><?php echo $text_pagetitle_subtite ?></span>
	</div>

<?php if ($logs) : ?>
<div class="container">
	<table class="table">
		<thead>
			<th>#</th>
			<th>User</th>
			<th>Message</th>
			<th>Time</th>
			<th>IP</th>
		<thead>
		<tbody>
		<?php foreach($logs as $log) : ?>
			<tr>
				<td><?php echo $log['id'] ?></td>
				<td><?php echo $log['username'] ?></td>
				<td><?php echo $log['message'] ?></td>
				<td><?php echo date('D d/m/y h:i:s ', $log['time']) ?></td>
				<td><?php echo $log['ip'] ?></td>
			</tr>
		<?php endforeach; ?>
		<tr><td colspan="5"></td></tr>
		</tbody>
	</table>
	
	<center><?php echo $pagination ?></center>
	
</div>
<?php endif; ?>

<?php echo $Footer ?>