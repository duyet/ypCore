<?php 
class Model_Admin_News_Setting extends ypModel {
	public function saveSetting($data) {
		if (!is_array($data)) {
			return FALSE;
		}
		
		foreach ($data as $setting => $value) {
			$this->Setting->set($setting, $value);
		}
		
		return TRUE;
	}
}