<?php 
class Controller_Admin_Setting_Site extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$this->loadLanguage('Admin/Setting/Site');
		// Is POST
		$this->set('error', '');
		$this->set('success', '');
		if (isset($this->Request->POST['submit'])) {
			$data['site_title'] = (string) $this->Request->POST['site_title'];
			$data['site_keywork'] = htmlspecialchars((string) $this->Request->POST['site_keywork']);
			$data['site_description'] = htmlspecialchars((string) $this->Request->POST['site_description']);
			$data['firewall'] = $this->_getBool($this->Request->POST['firewall']);
			$data['language'] = $this->_getLanguage($this->Request->POST['language']);
			$data['default_module'] = (string) $this->Request->POST['default_module'];
			$data['addthis'] = $this->_getBool($this->Request->POST['addthis']);
			$data['addthis_id'] = (string) $this->Request->POST['addthis_id'];
			$data['admin_language'] = $this->_getLanguage($this->Request->POST['admin_language']);
			$data['google_analytics_code'] = (string) $this->Request->POST['google_analytics_code'];
			$this->Loader->model('Admin/Setting/Index');
			if (!$this->Model_Admin_Setting_Index->updateSetting($data)) {
				$this->set('error', $this->_data['error_when_update_settings']);
			} else {
				// Update cache
				$this->Setting->preLoadCache();
				$this->set('success', $this->_data['update_success']);	
			}
		}

		$this->set('menu_active', 'site');
		$this->setTemplate('module/Setting/Site.php');
		$this->setTemplateChild(array(
			'Admin/Setting/Leftmenu',
			'Admin/System/Header',
			'Admin/System/Footer',
		));
		$this->set('form_action', $this->Link->build('Admin/Setting/Site'));
		$this->set('settings', $this->Setting->gets());
		$this->Document->setTitle($this->_data['title']);
		$this->Response->setOutput($this->render());
	}
	
	private function _getBool($value) {
		return ((int)$value != 1 ? 0 : 1);
	}
	
	private function _getLanguage($language) {
		return ($language != 'vi') ? 'en' : 'vi';
	}
}