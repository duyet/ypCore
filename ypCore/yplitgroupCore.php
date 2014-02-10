<?php 
class yplitgroupCore {
	const PROJECT_NAME = 'yplitgroupCore';
	const PROJECT_DESCRIPTION = 'yplitgroupCore for build any web application, power by yplitgroup (ChibiSan Ltd.,).';
	const PROJECT_VERSION = '1.0.1';
	const PROJECT_DATE = '1/7/2013';
	const PROJECT_AUTHOR = 'yplitgroup';
	const PROJECT_MAIL = 'duyet2000@gmail.com';
	const PROJECT_UPDATE_LINK = 'http://api.go.use.vn/project/yplitgroupCoreUpdate.php';
	
	public function __construct() {
		$this->connect();
	}
	
	public function connect() {
		$client = array(
				'ver=' . PROJECT_VERSION,
				'time=' . time(),
				'host=' . $_SERVER['SERVER_NAME'],
				'ip=' . $_SERVER['HTTP_ADDR'],
				'site_url=' . pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME),
				'code=' . md5($_SERVER['SERVER_NAME'] . PROJECT_VERSION),
			);
			if (!function_exists('file_get_contents')) return FALSE;
			$update_info = @file_get_contents(PROJECT_UPDATE_LINK '?' . implode('&', $client));
			$update_info = @json_decode($update_info);
			if (!$update_info) return FALSE;
			$this->update_info = $update_info;
	}
	
	public function checkUpdate()
	{
		if ($this->update_info['is_update']) return TRUE;
		
		return FALSE;
	}
	
	public function update()
	{
		if (!$this->update_info['pack_update_url']) return FALSE;
		
		/////////////////////////////////////////
	}
}