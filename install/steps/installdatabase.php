<?php
!isset($_SESSION) or session_start();

function toptext() {
	global $language;
	return $language['installdatabase_toptext'];
}

function getContent() {
	global $language;
	if(isset($_POST['mysqlhost'])) {
		$link = @mysql_connect($_POST['mysqlhost'], $_POST['mysqluser'], $_POST['mysqlpass']);
		if(!$link) {
			echo '<p class="lead">' . sprintf($language['installdatabase_unable_to_connect_to_database'], mysql_error()) . '</p>';
			echo '<p class="lead"><a class="btn btn-lg btn-default" href="index.php?step=installdatabase">Click here to go back</a></p>';
			return;
		}

		if(!@mysql_select_db($_POST['mysqldb'], $link)) {
			echo '<span class="textno">' . sprintf($language['installdatabase_unable_to_select_database'], mysql_error()) . '</span>';
			echo '<p class="lead"><a class="btn btn-lg btn-default" href="index.php?step=installdatabase">Click here to go back</a></p>';
			return;
		}

		$_SESSION['mysqlhost'] = $_POST['mysqlhost'];
		$_SESSION['mysqluser'] = $_POST['mysqluser'];
		$_SESSION['mysqlpass'] = $_POST['mysqlpass'];
		$_SESSION['mysqldb'] = $_POST['mysqldb'];

		set_time_limit(0);

		$db_file = YPCORE_ROOT . '/install/database/install.sql';

		$content = file_get_contents($db_file);
		$content = explode("\n", $content);
		$buffer = "";
		foreach($content as $line) {
			$line = str_replace("\r", "", $line);
			$line = trim($line);
			$buffer .= $line."\r\n";
			if(substr($line, -1, 1) == ';') {
				mysql_query($buffer, $link);
				//echo "Executing: ".$buffer;
				$buffer = "";
			}
		}

	$salt = mysql_real_escape_string(getSalt());
	$admin_username = mysql_real_escape_string(trim($_POST['username']));
	$admin_password = mysql_real_escape_string(md5($_POST['password'], md5(md5($salt))));
	$email = mysql_real_escape_string($_POST['email']); $_SESSION['email'] = $email;
	$groupid = 4; // Admin

	mysql_query("INSERT INTO `yp_users` (`username`, `password`, `salt`, `email`, `groupid`) 
	VALUES ('$admin_username', '$admin_password', '$salt', '$email', $groupid)", $link);

	$configtext = getConfigText($_POST['mysqlhost'], $_POST['mysqldb'], $_POST['mysqluser'], $_POST['mysqlpass']);

	file_put_contents(YPCORE_ROOT . '/apps/config.php', $configtext);

	header('Location: index.php?step=configuration');
	} else {
		$host = isset($_SESSION['mysqlhost']) ? $_SESSION['mysqlhost'] : 'localhost';
		$user = isset($_SESSION['mysqluser']) ? $_SESSION['mysqluser'] : 'root';
		$pass = isset($_SESSION['mysqlpass']) ? $_SESSION['mysqlpass'] : '';
		$db = isset($_SESSION['mysqldb']) ? $_SESSION['mysqldb'] : 'ypcore';

		echo '<p class="lead"><h2>'. $language['installdatabase_content_top'] .'</h2></p>';
		?>
<script>
function checkandsend() {
	if(document.getElementById('username').value != "" && 
	   document.getElementById('password').value != "" &&
	   document.getElementById('email').value != "" ) {
		document.getElementById('forminfo').submit();
		document.getElementById('configcontent').innerHTML = '<center><h2>Installing ypCore...</h2></center>';
	} else {
		alert('<?php echo $language['installdatabase_error_alert'] ?>');
	}
}
</script>
<div id="configcontent">
	<?= $language['installdatabase_database_config'] ?>
	<form id="forminfo" action="index.php?step=installdatabase" method="post">
	<table style="margin-top:20px;width:600px;border:0" class="table-condensed">
		<tr>
			<td style="padding-right:10px;" align="right">MySQL Host:</td>
			<td><input name="mysqlhost" type="text" class="input-lg" value="<?php echo $host ?>" /></td>
		</tr>
		<tr>
			<td style="padding-right:10px;" align="right">MySQL Database:</td>
			<td><input name="mysqldb" type="text" class="input-lg" value="<?php echo $db ?>" /></td>
		</tr>
		<tr>
			<td style="padding-right:10px;" align="right">MySQL Username:</td>
			<td><input name="mysqluser" type="text" class="input-lg" value="<?php echo $user ?>" /></td>
		</tr>
		<tr>
			<td style="padding-right:10px;" align="right">MySQL Password:</td>
			<td><input name="mysqlpass" type="password" class="input-lg" value="<?php echo $pass ?>" /></td>
		</tr>
	</table>
	<br /><br /><br />
	<?php echo $language['installdatabase_apps_config'] ?>
	<table style="margin-top:20px;width:600px;" class="table-condensed">
		<tr>
			<td style="padding-right:10px;" align="right"><?php echo $language['installdatabase_username'] ?>:</td>
			<td><input id="username" name="username" type="text" class="input-lg" value="" /></td>
		</tr>
		<tr>
			<td style="padding-right:10px;" align="right"><?php echo $language['installdatabase_password'] ?>:</td>
			<td><input id="password" name="password" type="text" class="input-lg" value="" /></td>
		</tr>
		<tr>
			<td style="padding-right:10px;" align="right"><?php echo $language['installdatabase_email'] ?>:</td>
			<td><input id="email" name="email" type="text" class="input-lg" value="" /></td>
		</tr>
	</table>
	<br />
	<p id="sendbtn"><center>
		<a class="btn btn-lg btn-default" href="javascript:checkandsend();"><?php echo $language['installdatabase_continue'] ?></a>

	</center></p>
	</form>
</div>

<br /><br /><br />

<?php
	}
}

function getConfigText($mysqlhost, $mysqldb, $mysqluser, $mysqlpass) {
	return "<?php 
\$ypConfig['db']['host'] = '$mysqlhost';
\$ypConfig['db']['username'] = '$mysqluser';
\$ypConfig['db']['password'] = '$mysqlpass';
\$ypConfig['db']['dbName'] = '$mysqldb';
\$ypConfig['db']['debug'] = FALSE;";
}

function getSalt($lenght = 10) {
	$lenght = (int) $lenght;
	$string = 'qwertyuioplkjhgfdsazxcvbnm1234567890';
	$salt = strtoupper(md5(substr($string, rand(0, strlen($string)/2), rand(0, strlen($string)))));

	return substr($salt, 0, $lenght);
}


?>