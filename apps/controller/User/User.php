<?php 
class Controller_User_User extends ypController {
	public function Index() {
		$userId = $this->Request->GET('userid');
		if (!$userId) {
			die('Error:: User not found!');
		}
		
		$this->loadLanguage('User/Account');
		$this->Document->setTitle($this->_data['title']);

		$userInfo = $this->User->getUserFromID($userId);
		if (!$userInfo) {
			die('Error:: User not found!');
		}

		if (!$this->User->isLogin() OR (($this->User->getInfo('userid') != $userInfo['userid']) AND !$this->User->isAdmin())) {
			die('Error:: Access deny!');
		}

		$link['account'] = $this->Link->a('User/Account', $this->_data['text_account']);
		$link['changepass'] = $this->Link->a('User/ChangePass', $this->_data['text_changepass']);
		$link['changeemail'] = $this->Link->a('User/ChangeEmail', $this->_data['text_changeemail']);
		$link['logout'] = $this->Link->a('User/Logout', $this->_data['text_logout']);

		$this->set('user', $userInfo);
		$this->set('link', $link);

		$this->setTemplate('module/User/Account.php');
		$this->setTemplateChild(array(
			'System/Header',
			'System/Footer'
		));
		$this->Response->setOutput($this->render());
	}

	public function isLogin() {
		$userName_session = $this->Session->get('userName');
		$userLoginHash_session = $this->Session->get('userLoginHash');
		$isLogin = (boolean) $this->Session->get('isLogin');
		if ($isLogin AND !empty($userName_session)) {
			if ($this->Crypt->userLoginInfoDecode($userLoginHash_session) == $userName_session) {
				$username = $userName_session;
			} else {
				$userName_cookie = $this->Cookie->get('userName');
				$userLoginHash_cookie = $this->Cookie->get('userLoginHash');
				if (!empty($userName_cookie)) {
					if ($this->Crypt->userLoginInfoDecode($userLoginHash_cookie) == $userName_cookie) {
						$username = $userName_cookie;
					} else {
						return FALSE;
					}
				}
			}
		}

		$this->Loader->model('User/User');
		if (!$this->Model_User_User->CheckUsername($username)) {
			$this->Session->delete('userName');
			$this->Session->delete('userLoginHash');
			$this->Session->set('isLogin', FALSE);
			$this->Cookie->delete('userName');
			$this->Cookie->delete('userLoginHash');
			return FALSE;
		}

		if (!$userName_session) {
			$this->Session->set('isLogin', TRUE);
			$this->Session->set('userName', $userName_cookie);
			$this->Session->set('userLoginHash', $userLoginHash_cookie);
		}

		if (isset($userName_cookie) AND $userName_cookie != $userName_session) {
			if ($userLoginHash_cookie != $userLoginHash_session) {
				$this->Cookie->set('userLoginHash', $userLoginHash_session, 3600*24*365);
			}
			$this->Cookie->set('userName', $userName_session, 3600*24*365);
		}

		return TRUE;
	}
}