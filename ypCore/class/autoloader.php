<?php
require_once(YPCORE_ROOT . '/' . YPCORE_DIR . '/helper/error.php');

class __AUTOLOADER {
	private static $_instance;
	protected $_rootDir = '.';
	public $log = array();
	protected $_setup = FALSE;

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

	private function autoloadLog($class, $file) {
		$this->log[] = array(
			'class' => $class,
			'file' => $file,
			'time' => microtime(false));
	}

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

	public function getRootDir() {
		return $this->_rootDir;
	}

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

?>