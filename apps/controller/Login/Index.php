<?php 
class Controller_Login_Index extends ypController {
	public function Index() {
		$isAdminLogin = $this->Request->REQUEST['admin_login'] ? TRUE : FALSE;
		$this->Loader->controller('User/User');
		
		$isAdminReLogin = FALSE;
		if ($this->User->isLogin() AND !$this->User->isAdmin() AND $isAdminLogin) {
			// Re-login
			$isAdminReLogin = TRUE;
		}
		else if ($this->User->isLogin()) {
			if ($this->Request->REQUEST['redirect_to']) {
				$this->redirect($this->Request->REQUEST['redirect_to']);	
			}
			$this->redirect($this->Link->build('User/Account', TRUE));
		}

		$username = '';
		if ($this->Request->GET['username'] AND $isAdminReLogin == TRUE) {
			$username = $this->Request->GET['username'];
		}
		$this->set('username', $username);

		$redirect_to = '';
		if($this->Request->GET['redirect_to']) {
			$redirect_to = $this->Request->GET['redirect_to'];
		} elseif ($isAdminLogin) {
			$redirect_to = $this->Link->build('Admin/Index/Home', TRUE);
		} else {
			$redirect_to = $this->Link->build('Index/Home', TRUE);
		}

		$this->loadLanguage('Login/Form');
		$this->set('redirect_to', $redirect_to);
		if ($this->Request->GET['is_redirect'] != '1') {
			$this->Link->addParam('hl', $this->Setting->get('language'));
			$this->Link->addParam('is_redirect', '1');
			$this->Link->addParam('is_human', '1');
			$this->Link->addParam('redirect_to', urlencode($redirect_to));
			$this->Link->addParam('continue', '1');
			$this->Link->addParam('module', 'Admin/Home');
			$this->Link->addParam('admin_login', $isAdminLogin ? '1' : '0');
			$this->redirect($this->Link->build($this->Link->this(), TRUE, $this->Link->getParams()));
		}

		$this->set('form_action', $this->Link->build('Login/Progress'));
		$this->set('text_register_link', sprintf($this->_data['text_register_link'], $this->Link->build('Register',TRUE)));
		$this->set('admin_login', $isAdminLogin);
		$this->set('hl', $this->Request->REQUEST['hl']);
		$this->set('is_redirect', $this->Request->REQUEST['is_redirect']);
		$this->set('is_human', $this->Request->REQUEST['is_human']);
		$this->set('admin_login', $this->Request->REQUEST['admin_login']);		
		$this->set('register_link', $this->Link->build('Register', FALSE, array('redirect_to' => $redirect_to)));

		$this->setTemplate('module/Login/Form.php');
		$this->setTemplateChild(array(
			'System/Header', 
			'System/Footer'
		));
		$this->Document->setTitle($this->_data['title']);
		$this->Response->setOutput($this->render());
	}
}