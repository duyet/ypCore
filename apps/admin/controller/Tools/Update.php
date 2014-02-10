<?php 
class Controller_Admin_Tools_Update extends ypAdminController {
	/**
	 * Check update and redirect to update file if update availble
	 *
	 * @author 	LvDuit
	 * @date 	7/2/2014
	 * @access 	public
	 */
	public function Index() {
		$this->checkLogin();

		$servicesCheckVersionUrl = $this->Setting->get('services_check_version_url');
		$servicesData = @file_get_contents($servicesCheckVersionUrl);
		if (!$servicesData) {
			die('Network error, can not load newest version from cloud!');
		}
		$servicesData = json_decode($servicesData);
		if (!$servicesData OR !is_object($servicesData) OR !$servicesData->current_version) {
			die('Cloud data error! Please try again!');

		}
		$servicesVersion = $servicesData->current_version;
		$currentVerion = $this->Setting->get('version');

		$compare = version_compare($servicesVersion, $currentVerion);

		if ($compare < 0) {
			die('Opp! System things you have some problem!');
		}

		if ($compare == 0) {
			die('No thing to update, your system is current newest verion, relaxing!');
		}

		$downloadFile = $servicesData->file;
		if (!$this->_downloadUpdatePack($downloadFile)) {
			die('System can not reach to update pack :( ');
		}

		print_r($compare);die;
	}

	/**
	 * Download pack from cloud 
	 * 
	 * @author 	LvDuit
	 * @date 	7/2/2014
	 * @access 	private
	 */
	private function _downloadUpdatePack($packUpdateFileUrl = FALSE) {
		if (!$packUpdateFileUrl OR empty($packUpdateFileUrl)) {
			return FALSE;
		}

		if (!file_exists($packUpdateFileUrl)) {
		//	return FALSE;
		}

		$f = fopen($packUpdateFileUrl, 'r');
		if (!$f) return FALSE;

		$w = fopen(YPCORE_ROOT . '/' . APP_TMP_DIR . '/update.zip', "a+");
		while ($c = fread($f, 1024 * 200)) {
			fwrite($w, $c);
		}
		fclose($f); 
		fclose($w);

		return TRUE;
	} 
}