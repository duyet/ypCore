<?php 
// Update system
$start_time = microtime(null);
error_reporting(E_ALL);

$_this = __file__ . '/../';

if (!file_exists(pathinfo($_this, PATHINFO_DIRNAME) . '/settings.php')) {
	trigger_error('Error:: Settings file was not exists!');
}
require_once (pathinfo($_this, PATHINFO_DIRNAME) . '/settings.php');

if (!file_exists(APP_CONFIG_FILE) AND file_exists(YPCORE_ROOT . '/install/index.php')) {
	header('Location: ./install/index.php');
	exit;
}

// Auto load
require_once (YPCORE_ROOT . '/' . YPCORE_DIR . '/class/autoloader.php');
__AUTOLOADER::getInstance()->setupAutoloader(YPCORE_ROOT);

$registry = new ypRegistry();
$update = __UPDATE($registry);

// Check
if (!$_GET['_check_security_'] OR empty($_GET['_check_security_']) OR !ypCoreCheckSecurityCode($_GET['_check_security_'])) {
	die('Access deny!!');
}


// -------------------- //
//       Function       //
// -------------------- //
function ypCoreCheckSecurityCode($code = '') {
	if (empty($code)) {
		return FALSE;
	}

	if (!preg_match('/([A-z0-9]){20}-([A-z0-9]){20}/', $code)) {
		return FALSE;
	}

	if (!$_SESSION[$code . '_az']) {
		return FALSE;
	}

	if ($_SESSION[$code . '_az'] != md5($code)) {
		return FALSE;
	}

	return TRUE;

}