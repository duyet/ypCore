<?php 
class __CONFIG {
	private static $_instance;
	private $_data = array();
	private $_configFile;

	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function __construct() {
		$this->setConfigFile(YPCORE_ROOT . '/' . APP_CONFIG_FILE); // Sua duong dan config file de bao mat
		$this->load();
	}

	public function setConfigFile($file) {
		$this->_configFile = $file;
	}

  	public function get($key) {
    	return (isset($this->_data[$key]) ? $this->_data[$key] : null);
  	}	
	
	public function set($key, $value) {
    	$this->_data[$key] = $value;
  	}

	public function has($key) {
    	return isset($this->_data[$key]);
  	}

  	public function load() {
		if (!file_exists($this->_configFile)) { 
			trigger_error('Error: Could not load config ' . $this->_configFile . '!');
		}
		
		$ypConfig = array();
		require_once($this->_configFile);
		$this->_data = array_merge($this->_data, $ypConfig);
  	}
}