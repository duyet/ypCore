<?php 
/**
 * ypAction
 * Manager Action, class, path and method.
 * 
 * @package ypCore 1.0
 * @since ypCore 1.0
 * @author duyet2000@gmail.com (http://go.use.vn)
 * @copyright 2013
 * @version $Id$
 * @access public
 */
class ypAction {
	protected $_isAdminController = FALSE;
	protected $_file;
	protected $_class;
	protected $_method;
	protected $_args = array();

	public function __construct($route, $args = array()) {
		$path = '';

		if ($route == '/' OR $route == '') {
			$route = 'Index/Home'; // default route
		}

		if (substr($route, -1, 1) == '/') {
			$route = substr($route, 0, strlen($route)-1);
		} 
		$parts = explode('/', str_replace('../', '', (string)$route));

		$dir = YPCORE_ROOT . '/' . APP_DIR;
		if (strtolower($parts[0]) == 'admin') {
			$dir = YPCORE_ROOT . '/' . ADMIN_DIR;
			$this->_isAdminController = TRUE;
			array_shift($parts);
		}

		foreach ($parts as $part) {
			$part = ucfirst($part);
			$path .= $part;

			if (is_dir($dir . '/controller/' . $path)) {
				$path .= '/';

				array_shift($parts);

				if(!is_file($dir . '/controller/' . str_replace(array('../', '..\\', '..'), '', $path) . 'Index.php') AND count($parts) > 0) {
					continue;
				}
			}

			$file = $dir . '/controller/' . str_replace(array('../', '..\\', '..'), '', $path) . '.php';
			if (!is_file($file) AND count($parts) == 0) {
				if (is_file($dir . '/controller/' . str_replace(array('../', '..\\', '..'), '', $path) . 'Index.php')) {
					$file = $dir . '/controller/' . str_replace(array('../', '..\\', '..'), '', $path) . 'Index.php';
					$path .= 'Index';
				}
			}
			if (is_file($file)) {
				$this->_file = $file;

				$class = preg_replace('/[^a-zA-Z0-9\/]/', '', $path);
				$class = str_replace('/', '_', $class);
				if ($this->isAdminController()) {
					$this->_class = 'Controller_Admin_' . $class;
				} else {
					$this->_class = 'Controller_' . $class;
				}

				array_shift($parts);

				break;
			}
		}


		if ($args) {
			$this->_args = $args;
		}

		$method = array_shift($parts);

		if ($method) {
			$this->_method = ucfirst($method);
		} else {
			$this->_method = 'Index';
		}
	}

	public function getFile() {
		return $this->_file;
	}

	public function getClass() {
		return $this->_class;
	}

	public function getMethod() {
		return $this->_method;
	}

	public function getArgs() {
		return $this->_args;
	}

	public function isAdminController() {
		return $this->_isAdminController;
	}
}