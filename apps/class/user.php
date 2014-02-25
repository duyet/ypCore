<?php
class __USER {
	private $_data = array();
	protected $_registry;
	const COOKIE_MAX_TIME = 31536; // 365 days * 24 hours * 3600 seconds

	public function __construct(&$registry) {
		$this->_registry = $registry;

		$this->set('isLogin', FALSE);
		$this->set('isAdmin', FALSE);

		$this->set('userHashKey', '');

		if ($this->_isLogin()) {
			$this->set('isLogin', TRUE);
			$this->set('user_info', $this->_getUserInfo());
			$this->set('isAdmin', $this->_isAdmin());
			$this->set('userHashKey', $this->_getUserHashKey());
		}
	}

	public function __set($name, $value) {
		return $this->_registry->set($name, $value);
	}

	public function __get($name) {
		return $this->_registry->get($name);
	}

	private function _isLogin() {
		$username = $this->Session->get('username');
		$time_login = $this->Session->get('time_login');
		$client = $this->Session->get('client');
		$isAdmin = $this->Session->get('isAdmin');
		$hashkey = $this->Session->get('hashkey');

		if ($hashkey != $this->Crypt->getUserSessionHash($username, $time_login, $client, $isAdmin)) {
			return FALSE;
		}

		// Check from database
		$this->Db->query("SELECT * FROM `yp_sessions`
			WHERE `username` = '". $this->Db->e($username) ."'
				AND `client` = '". $this->Db->e($client) ."'
				AND `is_admin` = '". $this->Db->e($isAdmin) ."'
				AND `hash` = '". $this->Db->e($hashkey) ."'");

		if ($this->Db->num_rows() > 0) {
			return TRUE; // is login
		}

		// And not? Check in cookie
		// Khong duoc? Kiem tra bang cookie
		$username = $this->Cookie->get('username');
		$time_login = $this->Cookie->get('time_login');
		$client = $this->Cookie->get('client');
		$isAdmin = $this->Cookie->get('isAdmin');
		$hashkey = $this->Cookie->get('hashkey');

		if ($hashKey != $this->Crypt->getUserSessionHash($username, $time_login, $client, $isAdmin)) {
			return FALSE;
		}

		// Check from database
		$this->Db->query("SELECT * FROM `yp_sessions`
			WHERE `username` = '". $this->Db->e($username) ."'
				AND `client` = '". $this->Db->e($client) ."'
				AND `is_admin` = '". $this->Db->e($isAdmin) ."'
				AND `hash` = '". $this->Db->e($hashkey) ."'");

		if ($this->Db->num_rows() > 0) {
			return TRUE; // is login
		}

		return FALSE;
	}

	public function isLogin() {
		return (boolean) $this->get('isLogin');
	}

	private function _isAdmin() {
		if (!$this->isLogin()) {
			return FALSE;
		}

		// Check in session
		if ($this->Session->get('isAdmin') == 'true') {
			return TRUE;
		}

		// Check in cookie
		if ($this->Cookie->get('isAdmin') == 'true') {
			return TRUE;
		}

		return FALSE;
	}

	private function _getUserHashKey() {
		if (!$this->isLogin()) {
			return '';
		}

		// Check in session
		if ($this->Session->get('hashkey') != '') {
			return $this->Session->get('hashkey');
		}

		// Check in cookie
		if ($this->Cookie->get('hashkey') != '') {
			return $this->Cookie->get('hashkey');
		}

		return '';
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