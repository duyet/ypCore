<?php
require_once(YPCORE_ROOT . '/' . YPCORE_DIR . '/helper/error.php');

/**
 * Auto load class for all system.
 *
 * @since 0.1.0
 * @author LvDuit <duyet2000@gmail.com>
 * @package ypCore
 */
class __AUTOLOADER {
	private static $_instance;

	/**
	 * Root dir of system to autoload
	 * @var string
	 */
	protected $_rootDir = '.';

	/**
	 * Auto load logs.
	 * 
	 * @var array
	 */
	public $log = array();

	/**
	 * Is settup?
	 * 
	 * @var boolean
	 */
	protected $_setup = FALSE;

	/**
	 * Setup auto loader
	 * @param  string $rootDir Define root dir autoload
	 * @return void
	 */
	public function setupAutoloader($rootDir) {
		if ($this->_setup) {
			return;
		}

		$this->_rootDir = $rootDir;
		$this->_setupAutoloader();

		$this->_setup = TRUE;
	}

	protected function _setupAutoloader() {
		if (@ini_get('open_basedir')) {
			set_include_path($this->_rootDir . PATH_SEPARATOR . '.');
		} else {
			set_include_path($this->_rootDir . PATH_SEPARATOR . '.' . PATH_SEPARATOR . get_include_path());
		}

		spl_autoload_register(array($this, 'autoload'));
	}

	/**
	 * Auto load main function
	 * 
	 * @param  string $class
	 * @return boolean
	 */
	public function autoload($class) {
		if (class_exists($class, FALSE) OR interface_exists($class, FALSE)) {
			return TRUE;
		}

		$filename = $this->autoloaderClassToFile($class);
		if (!$filename) {
			return FALSE;
		}

		if (file_exists($filename)) {
			$this->autoloadLog($class, $filename);
			include($filename);
			return (class_exists($class, FALSE) || interface_exists($class, FALSE));
		}

		return FALSE;
	}

	/**
	 * Save log with any class loaded.
	 * See $this->log;
	 * 
	 * @param  string $class
	 * @param  string $file
	 * @return void
	 */
	private function autoloadLog($class, $file) {
		$this->log[] = array(
			'class' => $class,
			'file' => $file,
			'time' => microtime(false));
	}

	/**
	 * Convert class auto to file path.
	 * All file was lower string.
	 * 
	 * @param  string $className
	 * @return string            Path of file
	 */
	public function autoloaderClassToFile($className) {
		if (preg_match('#^[^a-zA-Z0-9_]$#', $className)) {
			return FALSE;
		}

		if (substr($className, 0, 2) == '__') {
			$class = strtolower(substr($className, 2));
			$fileName = YPCORE_DIR . '/class/' . $class . '.php';
			if (!file_exists($fileName)) {
				$fileName = APP_DIR . '/class/' . $class . '.php';
			}
		}
		elseif (substr($className, 0, 2) == 'yp') {
			$class = strtolower(substr($className, 2));
			$fileName = YPCORE_DIR . '/engine/' . $class . '.php';
			if (!file_exists($fileName)) {
				$fileName = APP_DIR . '/class/' . $class . '.php'; 
			}
		}

		if (empty($fileName) OR !file_exists($fileName)) {
			return FALSE;
		}

		return $this->_rootDir . '/' . $fileName;
	}

	/**
	 * Get root dir
	 * 
	 * @return string 	
	 */
	public function getRootDir() {
		return $this->_rootDir;
	}

	/**
	 * GEt instance.
	 * 
	 * @return object
	 */
	public static final function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public static function setInstance($loader = null) {
		self::$_instance = $loader;
	}
}
