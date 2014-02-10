<?php 
class Controller_Admin_Login_Progress extends ypAdminController {
	public function Index() {
		$this->loadLanguage('Admin/Login/Progress');

		if (!$this->Request->POST) {
			$this->redirect($this->Link->build('Admin/Login/Progress', TRUE));
		}

		$this->Loader->model('Admin/Admin/Admin');
		if ($this->Model_Admin_Admin_Admin->isLogin()) {
			$this->redirect($this->Link->build('Admin/Index/Home', TRUE));
		}

		$this->_data['username'] = isset($this->Request->POST['username']) ? $this->Request->POST['username'] : '';
		$this->_data['password'] = isset($this->Request->POST['password']) ? $this->Request->POST['password'] : '';
		$this->_data['redirect_to'] = isset($this->Request->POST['redirect']) ? $this->Request->POST['redirect'] : '';

		$this->_data['error']  = '';

		$this->Loader->model('Admin/Login/Progress');
		if (empty($this->_data['username'])) {
			$this->_data['error'] = $this->_data['error_username_empty'];
		} else {
			$userInfo = $this->Model_Admin_Login_Progress->GetUserInfo($this->_data['username']);
			if (!$userInfo) {
				$this->_data['error'] = $this->_data['error_username_not_exists'];
			} else {
				if ($this->Crypt->passwordHash($this->_data['password'], $userInfo['salt']) != $userInfo['password']) {
					$this->_data['error'] = $this->_data['error_password_wrong'];
				} else {
					if ($userInfo['groupid'] != '4') {
						$this->_data['error'] = $this->_data['error_not_permisson'];
					} else {
						// Admin set
						$this->Session->set('admin', $this->_data['username']);
						$this->Session->set('isLogin', 'TRUE');
						$this->Cookie->set('admin', $this->_data['username']);
						$this->Cookie->set('admin_code', $this->Crypt->userLoginInfoHash($this->_data['username']));
						// User set
						$this->Session->set('userName', $this->_data['username']);
						$this->Session->set('userLoginHash', $this->Crypt->userLoginInfoHash($this->_data['username']));
						$this->Session->set('isLogin', TRUE);

						if (empty($this->_data['redirect_to'])) {
							$this->_data['redirect_to'] = $this->Link->build('User/Account', TRUE);
						}
						
						// Save logs
						$this->Loader->model('Admin/Admin/Admin');
						$this->Model_Admin_Admin_Admin->adminLogs($this->_data['username'], 'Admin login success.');

						$this->setTemplate('layout/Redirect.php');
						$this->Response->setOutput($this->render());
						return;
					}
				}
			}
		}

		if (!empty($this->_data['error'])) {
			$this->Loader->model('Admin/Admin/Admin');
			$this->Model_Admin_Admin_Admin->adminLogs($this->_data['username'], 'Admin login error: ' . $this->_data['error']);
			$this->loadLanguage('Admin/Login/Form');
			$this->Document->setTitle($this->_data['title']);
			$this->set('form_action', $this->Link->build('Admin/Login/Progress'));
			$this->set('relogin', 0);
			$this->setTemplate('module/Login/Form.php');
			$this->Document->setTitle($this->_data['title']);
			$this->setTemplateChild(array(
				'Admin/System/Header',
				'Admin/System/Footer',
			));
			$this->Response->setOutput($this->render());
		}
	}
}