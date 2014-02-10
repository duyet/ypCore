<?php 
class __LOADER {
	protected $_registry;

	public function __construct(&$registry) {
		$this->_registry = $registry;
	}

	public function library($library, $params = FALSE) {
		$file = YPCORE_ROOT . '/' . YPCORE_DIR . '/class/' . $library . '.php';
		if (!file_exists($file)) {
			trigger_error("Could not load library $library");
		}
		require_once($file);
		$class = '__' . strtoupper($library);
		if ($params != FALSE) {
			$object = new $class($params);
		} else {
			$object = new $class();
		}
		return $this->_registry->set(ucfirst(strtolower($library)), $object);
	}

	public function model($model) {
		if (substr($model, 0, 5) == 'Admin') {
			$file = YPCORE_ROOT . '/' . ADMIN_DIR . '/model/' . substr($model, 6) . '.php';
		} else {
			$file  = YPCORE_ROOT . '/' . APP_DIR . '/model/' . $model . '.php';
		}
		$model = str_replace('/', '_', $model);
		$class = 'Model_' . preg_replace('/[^a-zA-Z0-9_]/', '', $model);

		if (file_exists($file)) {
			include_once($file);

			$this->_registry->set($class, new $class($this->_registry));
		} else {
			trigger_error('Error: Could not load model ' . $class . '!');
		}
	}

	public function controller($controller) {
		if (substr($controller, 0, 5) == 'Admin') {
			$file  = YPCORE_ROOT . '/' . APP_DIR . '/controller/' . substr($controller, 6) . '.php';
		} else {
			$file  = YPCORE_ROOT . '/' . APP_DIR . '/controller/' . $controller . '.php';
		}
		$controller = str_replace('/', '_', $controller);
		$class = 'Controller_' . preg_replace('/[^a-zA-Z0-9_]/', '', $controller);
		
		if (file_exists($file)) {
			include_once($file);
			
			$this->_registry->set($class, new $class($this->_registry));
		} else {
			trigger_error('Error: Could not load controller ' . $class . '!');
		}
	}


	public function helper($helper) {
		$file = YPCORE_ROOT . '/' . YPCORE_DIR . '/helper/' . $helper . '.php';

		if (file_exists($file)) {
			require_once($file);
		} else {
			trigger_error('Error: Could not load helper ' . $helper . '!');
		}
	}

	public function includes($include) {
		$file = YPCORE_ROOT . '/' . YPCORE_DIR . '/include/' . $include . '.php';

		if (file_exists($file)) {
			require_once($file);
		} else {
			trigger_error('Error: Could not load include ' . $include . '!');
		}
	}
}