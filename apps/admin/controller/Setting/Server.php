<?php 
class Controller_Admin_Setting_Server extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Setting/Server');

		// Drive status
		$disk_total_space = disk_total_space(getcwd());
		if ($disk_total_space AND $disk_total_space > 0) {
			$disk_total_space = number_format(($disk_total_space / (1024 * 1024)), 2); // convert to MB
		}
		$disk_free_space = disk_free_space(getcwd());
		if ($disk_free_space AND $disk_free_space > 0) {
			$disk_free_space = number_format(($disk_free_space / (1024 * 1024)), 2); // convert to MB
		}
		if ($disk_total_space AND $disk_free_space) {
			$disk_used = ($disk_total_space - $disk_free_space);
			$disk_use_on_total = number_format(($disk_used / $disk_total_space) * 100, 2);
			if ($disk_use_on_total <= 50) {
				$disk_class = 'bar bar-success';
			} else if ($disk_use_on_total <= 70) {
				$disk_class = 'bar bar-warning';
			} else {
				$disk_class = 'bar bar-danger';
			}
			$this->set('disk_use_on_total', $disk_use_on_total);
			$this->set('disk_used', $disk_used);
			$this->set('disk_class', $disk_class);
		} else {
			$this->set('disk_use_on_total', FALSE);
			$this->set('disk_class', FALSE);
		}

		// Host name
		$this->set('host_name', @gethostname());
		
		// Server load average with AJAX refresh
		$this->Loader->helper('server');
		$this->set('serverLoadAvg', ypGetServerLoadAvg());
		$this->set('server_loadavg_ajax', $this->Link->build('Admin/Setting/Server/ServerLoadAvg', TRUE));

		// Is POST
		$this->set('error', '');
		if (isset($this->Request->POST)) {
			$this->_data['debug'] = $this->_getBool($this->Request->POST['debug']);
			$this->_data['upload_dir'] = (string) $this->Request->POST['upload_dir'];

			$this->Loader->model('Admin/Setting/Index');
			if (!$this->Model_Admin_Setting_Index->updateSetting($data)) {
				$this->set('error', $this->_data['error_when_update_settings']);
			}
			// Update cache
			$this->Cache->delete('settings');
			$this->Setting->load();

			$this->set('success', $this->_data['update_success']);
		}

		$this->set('phpinfo_link', $this->Link->a('Admin/Setting/Server/PhpInfo', $this->_data['phpinfo_link']));

		$this->set('menu_active', 'server');
		$this->setTemplate('module/Setting/Server.php');
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
			'Admin/Setting/Leftmenu',
		));
		$this->set('form_action', $this->Link->build('Admin/Setting/Server'));
		$this->set('settings', $this->Setting->gets());
		$this->Document->setTitle($this->_data['title']);
		$this->Response->setOutput($this->render());
	}
	
	public function PhpInfo() {
		$this->checkLogin();
		
		ob_start();
		phpinfo();
		$content = ob_get_contents();
		ob_end_clean();
		$content = explode('<body>', $content);
		$content = $content[1];
		$content = str_replace('</div></body></html>', '', $content);
		$content = str_replace('<table ', '<table class="table" ', $content);
		$content = preg_replace("/<a\shref=\"http:\/\/www.php.net\/\">(.*)<\/a>/", '', $content);
		
		$this->set('content', $content);
		$this->setTemplate('module/Setting/Phpinfo.php');
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer'
		));
		$this->Response->setOutput($this->render());
	}
	
	public function Phpcredits() {
		// Check Admin
		$this->Loader->model('Admin/Admin/Admin');
		if (!$this->Model_Admin_Admin_Admin->isLogin()) {
			$this->redirect($this->Link->build('Admin/Login/Index', TRUE));
		}
		$this->Document->set('is_login', TRUE);
		
		phpcredits();
	}
	
	public function ServerLoadAvg() {
		$this->checkLogin();
		$this->Loader->helper('server');
		$serverLoadAvg = ypGetServerLoadAvg();

		echo $serverLoadAvg;
		die;
	}

	private function _getBool($value) {
		if ((int)$value != 1) {
			return 0;
		}
		
		return 1;
	}
}