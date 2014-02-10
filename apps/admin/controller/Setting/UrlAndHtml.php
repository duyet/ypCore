<?php 
class Controller_Admin_Setting_UrlAndHtml extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$this->loadLanguage('Admin/Setting/UrlAndHtml');
		// Is POST
		$this->set('error', '');
		$this->set('success', '');
		if (isset($this->Request->POST['submit'])) {
			$data['compress_page'] = $this->_data['compress_page'] = $this->getBool($this->Request->POST['compress_page']);
			$data['rewrite'] = $this->_data['rewrite'] = $this->getBool($this->Request->POST['rewrite']);
			$data['google_analytics_code'] = $this->_data['google_analytics_code'] = (string) $this->Request->POST['google_analytics_code'];
			$data['url_lowcase'] = $this->_data['url_lowcase'] = $this->getBool($this->Request->POST['url_lowcase']);
			$data['compression_level'] = $this->_data['compression_level'] = (int) $this->Request->POST['compression_level'];
			$data['compress_html'] = $this->_data['compress_html'] = (int) $this->Request->POST['compress_html'];
			$data['static_url_active'] = $this->_data['static_url_active'] = $this->getBool($this->Request->POST['static_url_active']);
			$data['static_url'] = $this->_data['static_url'] = (string) $this->Request->POST['static_url'];

			$this->Loader->model('Admin/Setting/Index');
			if (!$this->Model_Admin_Setting_Index->updateSetting($data)) {
				$this->set('error', $this->_data['error_when_update_settings']);
			}
			// Update cache
			$this->Setting->preLoadCache();
			$this->Setting->load();

			// Save logs
			$this->Loader->model('Admin/Admin/Admin');
			$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Edit URL and HTML Setting.');
			
			$this->set('success', $this->_data['text_update_success']);
		}

		$this->set('menu_active', 'urlandhtml');
		$this->setTemplate('module/Setting/UrlAndHtml.php');
		$this->setTemplateChild(array(
			'Admin/Setting/Leftmenu',
			'Admin/System/Header',
			'Admin/System/Footer'
		));
		$this->set('form_action', $this->Link->build('Admin/Setting/UrlAndHtml'));
		$this->set('settings', $this->Setting->gets());
		$this->Document->setTitle($this->_data['title']);
		$this->Response->setOutput($this->render());
	}

	public function getBool($value) {
		if ((int)$value != 1) {
			return 0;
		}
		
		return 1;
	}

}