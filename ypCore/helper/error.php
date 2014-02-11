<?php 
require_once(pathinfo(__file__, PATHINFO_DIRNAME) . '/log.php');
set_error_handler('errorHandler');
function errorHandler($errNo, $errMess, $errFile, $errLine) {
	switch ($errNo) {
	case E_NOTICE:
	case E_USER_NOTICE:
		$error = 'Notice';
		break;
	case E_WARNING:
	case E_USER_WARNING:
		$error = 'Warning';
		break;
	case E_ERROR:
	case E_USER_ERROR:
		$error = 'Fatal Error';
		break;
	default:
		$error = 'Unknown';
		break;
	}

		if ($errNo == 8) return;

		$string = 'qwertyuioplkjhgfdsazxcvbnm1234567890';
		$key[0] = substr($string, rand(0,15), rand(3, 5));
		$key[1] = substr($string, rand(0,15), rand(3, 5));
		$key[2] = substr($string, rand(0,15), rand(3, 5));

		$key = md5( md5($key[0]) . md5($key[1] . $key[2]));
		$key = strtoupper($key);
		$errKey = substr($key, 3, 4);

	// Log error here
	ypLog('[' . date('h:i:s') . "] #$errKey :: ($errNo) :: $error :: $errMess [$errFile ($errLine)]");

?>
<!doctype html>
<html>
	<head>
		<title>Oop! Error!</title>

		<!-- Css -->
		<style>
			.clearfix { *zoom: 1;}
			.clearfix:before, .clearfix:after {display: table; line-height: 0; content: ""}
			html { font-size: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
			body { margin: 0; font-family: "Segoe UI", "Segoe WP", "Helvetica Neue", sans-serif; font-size: 14px; line-height: 25px; color: #333333; background-color: #ffffff; }
			.container { width: 940px; }
			.container { margin-top:70px; margin-right: auto; margin-left: auto; *zoom: 1; }
			.container:before,
			.container:after { display: table; content: ""; line-height: 0; }
			.container:after { clear: both; }
			[class*="span"] { float: left; min-height: 1px; margin-left: 20px; }
			.row { margin-left: -20px; *zoom: 1; }
			.row:before, .row:after { display: table; content: ""; line-height: 0; }
			.row:after { clear: both; }
			h1,h2,h3,h4,h5,h6 { margin: 12.5px 0; font-family: "Segoe UI Light", "Helvetica Neue", "Segoe UI", "Segoe WP", sans-serif; font-weight: 100; line-height: 25px; color: inherit; text-rendering: optimizelegibility; }
			h1,h2,h3 { line-height: 50px;}
			h1 { font-size: 60px;}
			.hero-unit { padding: 60px; margin-bottom: 30px; font-size: 18px; font-weight: 200; line-height: 37.5px; color: inherit; background-color: #eeeeee; -webkit-border-radius: 6px; -moz-border-radius: 6px; border-radius: 6px; }
			.hero-unit h1 { margin-bottom: 0; font-size: 60px; line-height: 1; color: inherit; letter-spacing: -1px; }
			.hero-unit li { line-height: 37.5px; }
			blockquote { border: 0; page-break-inside: avoid; }
			blockquote { padding: 0 0 0 15px; margin: 0 0 25px; border-left: 5px solid #eeeeee;}
			blockquote p {  margin-bottom: 0;  font-size: 16px;  font-weight: 300;  line-height: 31.25px;}
			blockquote small {  display: block;  line-height: 25px;  color: #999999;}
			blockquote small:before {  content: '\2014 \00A0';} 
			blockquote {  border-color: #ddd;  border-color: rgba(0, 0, 0, 0.15);}hr {  margin: 25px 0;  border: 0;  border-top: 1px solid #eeeeee;  border-bottom: 1px solid #ffffff;}
		</style>
		<!-- / Css -->

		<!-- Error -->
		
	</head>
	<body>
		<div class="container">
			<blockquote>
				<h1>Stop! Error...</h1> <br />
				<h2>#<?php echo $errKey ?>:: (<?= $errNo ?>) :: <?php echo $error . ':: ' . $errMess ?>.</h2> <br />
				<p> File: <?php echo $errFile ?> at line <?php echo $errLine ?>. </p>
			</blockquote>
		</div>
		<hr />
	</body>
</html>
<?php
exit();
}


function noticePage($msg = '', $title = 'Notice page!!', $exit = TRUE) {

?>
<!doctype html>
<html>
	<head>
		<title><?php echo $title; ?></title>

		<!-- Css -->
		<style>
			.clearfix { *zoom: 1;}
			.clearfix:before, .clearfix:after {display: table; line-height: 0; content: ""}
			html { font-size: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}
			body { margin: 0; font-family: "Segoe UI", "Segoe WP", "Helvetica Neue", sans-serif; font-size: 14px; line-height: 25px; color: #333333; background-color: #ffffff; }
			.container { width: 940px; }
			.container { margin-top:70px; margin-right: auto; margin-left: auto; *zoom: 1; }
			.container:before,
			.container:after { display: table; content: ""; line-height: 0; }
			.container:after { clear: both; }
			[class*="span"] { float: left; min-height: 1px; margin-left: 20px; }
			.row { margin-left: -20px; *zoom: 1; }
			.row:before, .row:after { display: table; content: ""; line-height: 0; }
			.row:after { clear: both; }
			h1,h2,h3,h4,h5,h6 { margin: 12.5px 0; font-family: "Segoe UI Light", "Helvetica Neue", "Segoe UI", "Segoe WP", sans-serif; font-weight: 100; line-height: 25px; color: inherit; text-rendering: optimizelegibility; }
			h1,h2,h3 { line-height: 50px;}
			h1 { font-size: 60px;}
			.hero-unit { padding: 60px; margin-bottom: 30px; font-size: 18px; font-weight: 200; line-height: 37.5px; color: inherit; background-color: #eeeeee; -webkit-border-radius: 6px; -moz-border-radius: 6px; border-radius: 6px; }
			.hero-unit h1 { margin-bottom: 0; font-size: 60px; line-height: 1; color: inherit; letter-spacing: -1px; }
			.hero-unit li { line-height: 37.5px; }
			blockquote { border: 0; page-break-inside: avoid; }
			blockquote { padding: 0 0 0 15px; margin: 0 0 25px; border-left: 5px solid #eeeeee;}
			blockquote p {  margin-bottom: 0;  font-size: 16px;  font-weight: 300;  line-height: 31.25px;}
			blockquote small {  display: block;  line-height: 25px;  color: #999999;}
			blockquote small:before {  content: '\2014 \00A0';} 
			blockquote {  border-color: #ddd;  border-color: rgba(0, 0, 0, 0.15);}hr {  margin: 25px 0;  border: 0;  border-top: 1px solid #eeeeee;  border-bottom: 1px solid #ffffff;}
		</style>
		<!-- / Css -->

		<!-- Error -->
		
	</head>
	<body>
		<div class="container">
			<blockquote>
				<br />
				<h1>Notice: <?php echo $msg ?></h1> <br />
				<br />
			</blockquote>
		</div>
	</body>
</html>
<?php 
if ($exit) exit(-1);
}