<?php 
function ypLog($message) {
	$file = YPCORE_ROOT . '/' . APP_LOG_DIR . '/logs-' . date('d-m-y') . '-' . md5(date('d-m-y')) . '.log';
	$fp = fopen($file, "a");
	if (!$fp) {
		return FALSE;
	}
		fwrite($fp, $message . "\n");
	fclose($fp);
	return TRUE;
}