<?php 
class __COOKIE {
	private static $_instance;
	public $now;
	private $_cookiePrefix = '';
	
	public function __construct() {
		$this->now = time();
		if (defined('COOKIE_PREFIX')) {
			$this->_cookiePrefix = COOKIE_PREFIX;
		}
	}

	public static function getInstance() {
		if (!self::$_instance) self::$_instance = new self();

		return self::$_instance;
	}

	public function get($name) {
		$name = $this->_cookieName($name);
		if (!isset($_COOKIE[$name])) {
			return FALSE;
		}

		return $_COOKIE[$name];
	}

	public function set($name, $value = '', $expire = 0, $path= FALSE, $domain = FALSE, $secure = FALSE, $httponly = FALSE) {
		$name = $this->_cookieName($name);
		if ($expire != 0) {
			$expire = $this->now + (int)$expire;
		}
		if (!$path) $path = '/';
		if (!$domain) $domain = '';
		return setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
	}

	public function delete($name) {
		$name = $this->_cookieName($name);

		$this->set($name, '');
		if ($_COOKIE[$name]) {
			unset($_COOKIE[$name]);
		}
	}

	private function _cookieName($name) {
		$name = strval($name);
		$prefix = substr(md5($name), 0, 5);
		
		return $prefix . $this->_cookiePrefix . $name;
	}
}