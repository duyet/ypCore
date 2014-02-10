<?php 
class Controller_Admin_Setting_Security extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Setting/Security');
		
		$this->set('success', '');
		$this->set('error', '');
		
		if (isset($this->Request->POST['submit'])) {
			$data['security_https'] = $this->_getBool($this->Request->POST('security_https'));
			$data['deny_if_none_useragent'] = $this->_getBool($this->Request->POST('deny_if_none_useragent'));
			$data['firewall'] = $this->_getBool($this->Request->POST('firewall'));
			$data['admin_fake_link'] = (string) $this->Request->POST['admin_fake_link'];
			
			$this->Loader->model('Admin/Setting/Index');
			$this->Model_Admin_Setting_Index->updateSetting($data);
			
			// Save logs
			$this->Loader->model('Admin/Admin/Admin');
			$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Edit Security Setting.');
			
			$this->set('success', $this->_data['text_save_setting_successfully']);
		}
		
		$this->set('menu_active', 'security');
		$this->setTemplate('module/Setting/Security.php');
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
			'Admin/Setting/Leftmenu'
		));
		$this->set('form_action', $this->Link->build('Admin/Setting/Security'));
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