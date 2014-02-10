<?php 
function toptext() {
	global $language;
	return $language['config_toptext'];
}

function getContent() {
	global $language;
	if (isset($_POST['submit'])) {
		$link = @mysql_connect($_SESSION['mysqlhost'], $_SESSION['mysqluser'], $_SESSION['mysqlpass']);
		@mysql_select_db($_SESSION['mysqldb'], $link);
		
		$setting['site_email'] = mysql_real_escape_string($_SESSION['email']);
		$setting['site_title'] = !empty($_POST['site_title']) ? mysql_real_escape_string($_POST['site_title']) : 'ypCore';
		$setting['site_description'] = mysql_real_escape_string($setting['site_description']);
		
		foreach ($setting as $_settingName => $_settingValue) {
			if (is_numeric($_settingValue)) {
				$value = (int) $_settingValue;
			} else {
				$value = "'$_settingValue'";
			}
			
			@mysql_query("UPDATE `yp_settings` SET `value` = $value WHERE `setting` = '$_settingName'", $link);
		}
		
		@header("Location: ./index.php?step=end");
		exit;
	} else {
?>

<div id="configcontent">
	<form id="forminfo" action="index.php?step=configuration" method="post">
	<table style="margin-top:20px;width:600px;" class="table-condensed">
		<tr>
			<td style="padding-right:10px;" align="right"><?php echo $language['config_sitetitle']  ?>:</td>
			<td><input name="site_title" type="text" class="input-lg" value="ypCore CMS" /></td>
		</tr>
		<tr>
			<td style="padding-right:10px;" align="right"><?php echo $language['config_description'] ?>:</td>
			<td><input name="site_description" type="text" class="input-lg" value="ypCore CMS is OpenSource, which help your manger your news, info... Easy to build your website." /></td>
		</tr>

	</table>
	<br />
	<p id="sendbtn"><button type="submit" class="btn btn-lg btn-default" name="submit"><?php echo $language['config_save_config'] ?></button></p>
	</form>
</div>
	
<?php 
	}
}

?>