<?php 
// Manager sessions
class __SESSION {
	private static $_instance;
	private $_sessionPath;
	private $_sessionName = array();

	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}

	public function __construct() {
		$this->start();
	}

	public function start() {
		if (headers_sent()) {
			trigger_error('Warning:: Header already sended!');
		}

		$this->_sessionSetup();

		if(!isset($_SESSION)) {
			session_start();
		}
	}

	private function _sessionSetup() {
		$this->_sessionPath = @session_save_path();
	}

	public function set($sessionName, $sessionValue = '', $cryptSession = false) {
		if (is_array($sessionName)) {
			foreach ($sessionName as $nameSession => $valueSession) {
				$this->set($nameSession, $valueSession);
			}

			return TRUE;
		}
		$sessionName = $this->_sessionName($sessionName);
		if ($cryptSession) $sessionValue = $this->cryptSession($sessionValue);
		$this->_sessionName[] = $sessionName;
		return $_SESSION[$sessionName] = $sessionValue;
		return false;
	}
	
	public function get($sessionName) {
		$sessionName = $this->_sessionName($sessionName);
		if (!isset($_SESSION[$sessionName])) {
			return FALSE;
		}

		return $_SESSION[$sessionName];
	}
	
	public function delete($sessionName) {
		if (is_array($sessionName)) {
			foreach ($sessionName as $session) {
				$this->delete($session);
			}

			return TRUE;
		}

		$sessionName = $this->_sessionName($sessionName);
		if(isset($_SESSION["$sessionName"])) $_SESSION["$sessionName"] = null;
		session_unset("$sessionName");
	}

	public function clearAll() {
		@session_destroy();
	}
	
	public function cryptSession($sessionValue) {
		return $sessionValue;
	}
	
	public function _sessionName($sessionName) {
		$sessionName = strval($sessionName);
		$prefix = substr(md5($sessionName), 0, 5);

		return $prefix . $sessionName;
	}
}