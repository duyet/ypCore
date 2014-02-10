<?php 
function ypGetServerLoadAvg() {
	if (function_exists('sys_getloadavg')) {
		$load = sys_getloadavg();
		return $load[0];
	}

	if (strtolower(substr(PHP_OS, 0, 3)) === 'win' AND function_exists('passthru')) { // I find it on Nukeviet :)
		ob_start();
		passthru('typeperf -sc 1 "\processor(_total)\% processor time"', $status);
		$content = ob_get_contents();
		ob_end_clean();
		if ($status === 0) {
			if (preg_match("/\,\"([0-9]+\.[0-9]+)\"/", $content, $load)) {
				return $load[1];
			}
		}
		
		return FALSE;
	}

	if (@file_exists('/proc/loadavg')) {
		$load = @file_get_contents( '/proc/loadavg' );
		$serverload = explode( ' ', $load );
		$serverload[0] = round( $serverload[0], 4 );
		if (!$serverload) {
			$load = @exec('uptime');
			$load = split('load averages?: ', $load);
			$serverload = explode(',', $load[1]);
		}
	} else {
		$load = @exec('uptime');
		$load = split('load averages?: ', $load);
		$serverload = explode(',', $load[1]);
	}

	$serverload = trim($serverload[0]);
	if (!$returnload) {
		return FALSE;
	}

	return $serverload;
}

/**
 * Check $path is writeable?
 * 
 * @param 	string 	$path 	path of file or dir want to check
 * @return 	bool
 */
function isWritable($path) {
	if ('WIN' === strtoupper(substr(PHP_OS, 0, 3))) {
		return win_is_writable($path);
	} else {
		return @is_writable( $path );
	}
}