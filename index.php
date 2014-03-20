<?php 
/**
 * Front page of system. This file will get route and 
 * sent it to Core. Response output.
 *
 * @pack 	ypCore
 * @since 	0.1.0
 */

/**
 * Set error reporting, for debuger, set it to E_ALL
 *
 * @var 	
 */
error_reporting(E_ALL);

/**
 * Get start timer, it use to calc time of compile runner
 *
 * @var 	null
 */
$start_time = microtime(null);

/**
 * Get file of root.
 *
 * @var 	
 */
$_this = __file__;

// Load setting contant, if not exists, error page
if (!file_exists(pathinfo($_this, PATHINFO_DIRNAME) . '/settings.php')) {
	trigger_error('Error:: Settings file was not exists!');
}
require_once (pathinfo($_this, PATHINFO_DIRNAME) . '/settings.php');

// Load config file. If not exists, it mean system is not install, redirect to install page.
if (!file_exists(APP_CONFIG_FILE) AND file_exists(YPCORE_ROOT . '/install/index.php')) {
	header('Location: ./install/index.php');
	exit;
}

// Auto load
require_once (YPCORE_ROOT . '/' . YPCORE_DIR . '/class/autoloader.php');
__AUTOLOADER::getInstance()->setupAutoloader(YPCORE_ROOT);

/**
 * Set registry
 * 
 * @var 	ypRegistry
 */
$registry = new ypRegistry();

/**
 * Create core object, main core
 *
 * @var 	ypCore
 * @param 	ypRegistry
 */
$ypCore = new ypCore($registry);

// And finish, Run it :)
$ypCore->run();


// ------------- END ---------------- //

/**
 * Open Source ypCore CMS
 * Licsense: Apache License (see LICSENSE file)
 * Author: LvDuit (c) 2014
 * Location: HCMC, Vietnam
 * Date: 01/01/2014
 * AdminSite: http://lvduit.blogspot.com
 */

// ------------- DEBUG --------------- //

?>