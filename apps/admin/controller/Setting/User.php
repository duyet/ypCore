<?php 
class Controller_Admin_Setting_User extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Setting/User');
		$this->set('error', '');
		$this->set('success', '');

		if (isset($this->Request->POST['submit'])) {
			$data = array();
			$data['register_active'] =   (string) $this->Request->POST['register_active'];
			$data['username_maxchars'] = (int) $this->Request->POST['username_maxchars'];
			$data['username_minchars'] = (int) $this->Request->POST['username_minchars'];
			$data['password_maxchars'] = (int) $this->Request->POST['password_maxchars'];
			$data['password_minchars'] = (int) $this->Request->POST['password_minchars'];
			$data['facebook_login'] =    $this->_getBool($this->Request->POST['facebook_login']);
			$data['google_login'] =      $this->_getBool($this->Request->POST['google_login']);

			$this->Loader->model('Admin/Setting/Index');
			if (!$this->Model_Admin_Setting_Index->updateSetting($data)) {
				$this->set('error', $this->_data['error_when_update_settings']);
			}
			// Update cache
			$this->Setting->preLoadCache();
			$this->Setting->load();

			// Save logs
			$this->Loader->model('Admin/Admin/Admin');
			$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Edit User setting.');
			
			$this->set('success', $this->_data['update_success']);
		}

		$this->set('menu_active', 'user');
		$this->setTemplate('module/Setting/User.php');
		$this->setTemplateChild(array(
			'Admin/Setting/Leftmenu',
			'Admin/System/Header',
			'Admin/System/Footer'
		));
		$this->set('form_action', $this->Link->build('Admin/Setting/User'));
		$this->set('settings', $this->Setting->gets());
		$this->Document->setTitle($this->_data['title']);
		$this->Response->setOutput($this->render());
	}
	
	private function _getBool($value) {
		if ((int)$value != 1) {
			return 0;
		}
		
		return 1;
	}
}