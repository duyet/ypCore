<?php 
class Controller_Register_Progress extends ypController {
	public function Index() {
		if (!$this->Request->POST['login']) {
			// Khong co request post (do nhan nut Back tren trinh duyet)
			$this->redirect($this->Link->build('Register/Index', TRUE));
		}

		$this->loadLanguage('Register/Progress');

		$this->_data['error'] = '';
		$this->_data['username'] = $this->Request->POST['username'];
		$this->_data['password'] = $this->Request->POST['password'];
		$this->_data['re_password'] = $this->Request->POST['re_password'];
		$this->_data['full_name'] = $this->Request->POST['full_name'];
		$this->_data['email'] = $this->Request->POST['email'];

		$this->Loader->model('Register/Progress');

		if (empty($this->_data['username'])) {
			$this->_data['error'] = $this->_data['error_username_empty'];
		} else {
			if (strlen($this->_data['username']) < 4 OR strlen($this->_data['username']) > 25) {
				$this->_data['error'] = $this->_data['error_username_strlen'];
			} else {
				if (!$this->Model_Register_Progress->CheckUsername($this->_data['username'])) {
					$this->_data['error'] = $this->_data['error_username_exists'];
				} else {
					if ($this->_data['password'] !== $this->_data['re_password']) {
						$this->_data['error'] = $this->_data['error_re_password_not_match'];
					} else {
						if (strlen($this->_data['password']) < 4 OR strlen($this->_data['re_password']) > 25) {
							$this->_data['error'] = $this->_data['error_password_strlen'];
						} else {
							if (!$this->Model_Register_Progress->CheckValidEmail($this->_data['email'])) {
								$this->_data['error'] = $this->_data['error_email_fail'];
							} else {
								if (!$this->Model_Register_Progress->CheckEmail($this->_data['email'])) {
									$this->_data['error'] = $this->_data['error_email_exists'];
								} else {
									// Insert to db
									if (!$this->Model_Register_Progress->addUser($this->_data)) {
										trigger_error('Error when try addUser! Please contact Administrator!');
										exit();
									} else {
										// Success
										$this->setTemplate('module/Register/Success.php');
										$this->Document->setTitle($this->_data['title']);
										$this->set('redirect_to', $this->Link->build('Login/Index', TRUE, array('username' => $this->_data['username'])));
										$this->Response->setOutput($this->render());
									}
								}
							}
						}
					}
				}
			}
		}

		if (!empty($this->_data['error'])) {
			$this->loadLanguage('Register/Index');
			$this->Document->setTitle($this->_data['title']);
			
			$this->set('redirect_to', '');
			$this->set('form_action', $this->Link->build('Register/Progress'));
			
			$this->setTemplate('module/Register/Form.php');
			$this->setTemplateChild(array(
				'System/Header',
				'System/Footer',
			));
			$this->Response->setOutput($this->render());
		}

	}
}

?>