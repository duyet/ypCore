<?php class Model_Admin_Setting_Index extends ypModel {	public function updateSetting($data) {		if (!is_array($data)) {			return FALSE;		}				foreach ($data as $setting_key => $setting_value) {			$this->Setting->set($setting_key, $setting_value);		}		return TRUE;	}}