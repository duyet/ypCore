<?php 
/**
 * Cookie manager.
 *
 * @since 0.1.0
 * @author LvDuit <duyet2000@gmail.com>
 * @package ypCore
 */
class __COOKIE {
	private static $_instance;
	public $now;
	private $_cookiePrefix = '';
	public $expire;
	
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

	/**
	 * Setup cookie 
	 * 
	 * @param string  $name     [description]
	 * @param string  $value    [description]
	 * @param integer $expire   [description]
	 * @param boolean $path     [description]
	 * @param boolean $domain   [description]
	 * @param boolean $secure   [description]
	 * @param boolean $httponly [description]
	 */
	public function set($name, $value = '', $expire = 0, $path= FALSE, $domain = FALSE, $secure = FALSE, $httponly = FALSE) {
		if (is_array($name)) {
			foreach($name as $cookieName => $cookieValue) {
				$this->set($cookieName, $cookieValue);
			}
			return TRUE;
		}

		$name = $this->_cookieName($name);
		if ($expire != 0) {
			$expire = $this->now + (int)$expire;
		}
		if (!$path) $path = '/';
		if (!$domain) $domain = '';
		return setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
	}

	/**
	 * Set expire.
	 * 
	 * @param integer $expire [description]
	 */
	public function setExpire($expire = 0) {
		$this->expire = $expire;
	}

	/**
	 * Delete cookie.
	 * 
	 * @param  string $name 
	 * @return void
	 */
	public function delete($name) {
		$name = $this->_cookieName($name);

		$this->set($name, '');
		if ($_COOKIE[$name]) {
			unset($_COOKIE[$name]);
		}
	}

	/**
	 * Fix and get cookie name
	 * 
	 * @param  sting $name
	 * @return string 		
	 */
	private function _cookieName($name) {
		$name = strval($name);
		$prefix = substr(md5($name), 0, 5);
		
		return $prefix . $this->_cookiePrefix . $name;
	}
}