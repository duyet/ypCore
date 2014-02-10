<?php echo $Header ?>

	<div id="page-title" class="page-title-post">
		<span class="title"><img src="<?php echo $template_url ?>/img/icon/PowerPoint alt 1.png" border="0" width="50" title="" alt=""> <?php echo $text_pagetitle ?></span>
		<span class="subtitle"><?php echo $text_pagetitle_subtite ?> &nbsp; 
			</span>
	</div>

<div class="">
	<br />
	<div class="row">
		<div class="span1"></div>
		<div class="span4"><h3><?php echo $text_module ?></h3></div>
		<div class="span4"><a href="<?php echo $reload_module_list_link ?>" class="btn"><?php echo $text_reload_module_list_link ?></a></div>
	</div>
	<br />

	<div class="tabbable tabs-left">
		<?php echo $ModuleLeftMenu ?>
		<div class="tab-content">
			<div class="row">
				<table class="table">
					<tbody>
						<tr>
							<th ></th>
							<th >#</th>
							<th ><?php echo $text_module_name ?></th>
							<th ><?php echo $text_module_path ?></th>
							<th ><?php echo $text_module_active ?></th>
							<th ><?php echo $text_module_action ?></th>
						</tr>
						<?php if (empty($modules)) { ?>
						<tr>
							<td colspan="4"><?php echo $text_no_module ?></td>
						</tr>
						<?php } else { ?>
							<?php $i = 0; foreach($modules as $module) { $i++; ?>
							<tr>
								<td></td>
								<td><?php echo $i ?></td>
								<td><b><?php echo $module['info']['module_name'] ?></b></td>
								<td><i>/controller/<?php echo $module['dir'] ?>/</i></td>
								<td><?php echo $module['active'] ? $text_module_isactive : $text_module_is_not_active ?></td>
								<td><?php echo $layout_link[$module['dir']] ?> - <?php echo $active_link[$module['dir']] ?></td>
							</tr>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php echo $Footer ?>