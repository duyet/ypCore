<?php 
/**
 * Load config from config.php file and manager it.
 *
 * @since 0.1.0
 * @author LvDuit <duyet2000@gmail.com>
 * @package ypCore
 */
class __CONFIG {
	private static $_instance;

	/**
	 * Contents of config.
	 * 
	 * @var array
	 */
	private $_data = array();

	/**
	 * Path of config file. 
	 * 
	 * @var string
	 */
	private $_configFile;

	/**
	 * Get instance.
	 * 
	 * @return object
	 */
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

	/**
	 * Set config file.
	 * 
	 * @param string $file
	 */
	public function setConfigFile($file) {
		$this->_configFile = $file;
	}

	/**
	 * Get value of config.
	 * 
	 * @param  string $key
	 * @return mixed
	 */
  	public function get($key) {
    	return (isset($this->_data[$key]) ? $this->_data[$key] : null);
  	}	
	
	/**
	 * Set value of config
	 * 
	 * @param string $key
	 * @param mixed $value
	 */
	public function set($key, $value) {
    	$this->_data[$key] = $value;
  	}

  	/**
  	 * Check existance of key
  	 * 
  	 * @param  string  $key
  	 * @return boolean
  	 */
	public function has($key) {
    	return isset($this->_data[$key]);
  	}

  	/**
  	 * Load config file and save it to mem.
  	 * 
  	 * @return void
  	 */
  	public function load() {
		if (!file_exists($this->_configFile)) { 
			trigger_error('Error: Could not load config ' . $this->_configFile . '!');
		}
		
		$ypConfig = array();
		require_once($this->_configFile);
		$this->_data = array_merge($this->_data, $ypConfig);
  	}
}