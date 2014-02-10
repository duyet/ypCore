<?php
class __USER {
	private $_data = array();
	protected $_registry;
	const COOKIE_MAX_TIME = 31536; // 365 days * 24 hours * 3600 seconds
	
	public function __construct(&$registry) {
		$this->_registry = $registry;
		
		$this->set('isLogin', FALSE);
		$this->set('isAdmin', FALSE);
			
		if ($this->_isLogin()) {
			$this->set('isLogin', TRUE);
			$this->set('user_info', $this->_getUserInfo());
			$this->set('isAdmin', $this->_isAdmin());
		}
	}
	
	public function __set($name, $value) {
		return $this->_registry->set($name, $value);
	}
	
	public function __get($name) {
		return $this->_registry->get($name);
	}
	
	private function _isLogin() {
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

		if (empty($username)) {
			return FALSE;
		}
		$this->Loader->helper('Email');
		if (isEmail($username)) {
			$this->Db->query("SELECT `userid` FROM `yp_users` 
			WHERE `email` = '". $this->Db->e($username) . "'");
		} else {
			$this->Db->query("SELECT `userid` FROM `yp_users` 
			WHERE `username` = '". $this->Db->e($username) . "'");
		}
		if ($this->Db->num_rows() == 0) {
			$this->Session->delete('userName');
			$this->Session->delete('userLoginHash');
			$this->Session->set('isLogin', FALSE);
			$this->Cookie->delete('userName');
			$this->Cookie->delete('userLoginHash');
			return FALSE;
		}
		$result = $this->Db->fetch();

		if (!$userName_session) {
			$this->Session->set('isLogin', TRUE);
			$this->Session->set('userName', $userName_cookie);
			$this->Session->set('userLoginHash', $userLoginHash_cookie);
		}

		if (isset($userName_cookie) AND $userName_cookie != $userName_session) {
			if ($userLoginHash_cookie != $userLoginHash_session) {
				$this->Cookie->set('userLoginHash', $userLoginHash_session, self::COOKIE_MAX_TIME);
			}
			$this->Cookie->set('userName', $userName_session, self::COOKIE_MAX_TIME);
		}

		$this->set('username', $username);
		$this->set('userid', $result['userid']);
		return TRUE;
	}
	
	public function isLogin() {
		return (boolean) $this->get('isLogin');
	}
	
	private function _isAdmin() {
		$userInfo = $this->getUserInfo();
		if ($userInfo AND $userInfo['groupid'] == 4) {
			return TRUE;
		}

		return FALSE;
	}

	public function isAdmin() {
		return (boolean) $this->get('isAdmin');
	}
	
	public function isLoginToAdminPanel() {
		// code this later
		//return $this->Session->get('isAdmin');
	}

	private function _getUserInfo() {
		$userInfo = $this->getUserFromID($this->get('userid'));
		unset($userInfo['password']);
		
		return $userInfo;
	}
	
	public function getUserInfo() {
		if (!isset($this->_data['user_info'])) {
			return FALSE;
		}

		return $this->_data['user_info'];
	}
	
	public function get($name) {
		if (!isset($this->_data["$name"])) {
			return FALSE;
		}
		
		return $this->_data["$name"];
	}

	public function getInfo($name) {
		if (!isset($this->_data['user_info']["$name"])) {
			return FALSE;
		}
		
		return $this->_data['user_info']["$name"];
	}

	public function set($name, $value) {
		return $this->_data[$name] = $value;
	}
	
	public function setData($data) {
		if (!is_array($data)) {
			return FALSE;
		}
		$this->_data = array_merge($this->_data, $data);
	}
	
	public function getData() {
		return $this->_data;
	}
	
	public function getUserFromID($user_id) {
		$user_id = intval($user_id);
		$this->Db->query("SELECT * FROM `yp_users` 
		WHERE `userid` = ". $user_id ."");
		
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}
		
		return $this->Db->fetch();
	}
	
	public function getUserFromUsername($username) {
		$username = htmlspecialchars((string) $username);
		if (empty($username)) {
			return FALSE;
		}
		$this->Db->query("SELECT * FROM `yp_users` 
		WHERE `username` = '". $this->Db->e($username) ."'");
		
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}
		
		return $this->Db->fetch();
	}
	
	public function getUserFromEmail($email) {
		$email = (string) $email;
		$this->_registry->get('Loader')->helper('string');
		if (!isEmail($email)) {
			return FALSE;
		}
		
		$this->Db->query("SELECT * FROM `yp_users` 
		WHERE `username` = '". $this->Db->e($email) ."'");
		
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}
		
		return $this->Db->fetch();
	}
}