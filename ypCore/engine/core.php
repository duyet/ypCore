<?php 
/**
 * Core of system. This core will parse route, check client and redirect to controller. 
 * Front page, response
 * 
 * @package ypCore 1.0
 * @since ypCore 1.0
 * @author duyet2000@gmail.com (http://go.use.vn)
 * @copyright 2013
 * @version $Id$
 * @access public
 */
class ypCore {
	protected $_registry;
	protected $preAction = array();
	protected $error;

	public function __construct(ypRegistry &$registry) {
		$this->_registry = $registry;
		
		$this->_setupSystem();
	}

	public function run() {
		// Start time
		define('START_TIME', microtime(TRUE));

		// Parse code from url
		if (!empty($this->Request->GET[CODE_PARAM])) {
			$code = trim((string) $this->Request->GET[CODE_PARAM]);

			// Remove / symbol in last string of code
			$code = preg_replace('/[\/]*$/', '', $code);
			
			// Fix 
			$code = preg_replace('/^([^A-z0-9\/-_\.]*)$/', '', $code);

			// Admin fake link 
			$adminFakeLink = $this->Setting->get('admin_fake_link');
			if (!empty($adminFakeLink) AND strtolower($adminFakeLink) != 'admin') {
				$tmpCode = explode('/', $code);
				// Delete real route
				if (strtolower($tmpCode[0]) == 'admin') {
					$code = 'System/NotFound';
				}
				// Set fake link to `admin` route
				if (strtolower($tmpCode[0]) == strtolower($adminFakeLink)) { // xac nhan admin fakelink
					$tmpCode[0] = 'Admin';
					$code = implode('/', $tmpCode);
				}
			}

			// Custom route
			$custom_route = $this->Setting->get('custom_route');
			if ($custom_route AND is_array($custom_route) AND count($custom_route) > 0) {
				foreach($custom_route as $custom) {
					if (strtolower($code) == strtolower($custom['route'])) {
						if ($custom['delete'] == TRUE) { // delete real code
							$code = '';
						}
					}
					if (strtolower($custom['new']) == strtolower($code)) { // convert new code to real code
						$code = $custom['route'];
					}
				}
			}

			// Fix 
			if (in_array(strtolower($code), array('admin', 'admin/'))) {
				$code = 'Admin/Index/Home';
			}

			$action = new ypAction($code);
		} else {
			$defaultModule = $this->Setting->get('default_module');
			$action = new ypAction($defaultModule ? $defaultModule : 'Index/Home');
		}

		$this->_registry->set('isAdminController', $action->isAdminController());

		$response = new ypResponse($this);

		// Compress page
		if ($this->Setting->get('setCompression')) {
			$response->setCompression((int) $this->Setting->get('setCompression'));
		}
		
		
		$this->_registry->set('Response', $response);

		$this->error = new ypAction('System/NotFound');

		foreach ($this->preAction as $preAction) {
			$result = $this->_execute($preAction);

			if ($result) {
				$action = $result;
				
				break;
			}
		}

		while ($action) {
			$action = $this->_execute($action);
		}

		$response->output(); 
	}

	public function addPreAction($preAction) {
		$this->preAction[] = $preAction;
	}

	private function _execute($action) {
		if (!is_object($action)) return FALSE;

		if (file_exists($action->getFile())) {
			require_once($action->getFile());

			$class = $action->getClass();

			$controller = new $class($this->_registry);

			if (is_callable(array($controller, $action->getMethod()))) {
				$action = call_user_func_array(array($controller, $action->getMethod()), $action->getArgs());
			} else {
				$action = $this->error;

				$this->error = '';
			}
		} else {
			$action = $this->error;
			
			$this->error = '';
		}
		
		return $action;
	}
	
	private function _setupSystem() {
		// Check if none user agent
		$denyIfNoneUseragent = $this->Setting->get('deny_if_none_useragent');
		$userAgent = $this->Request->userAgent;
		if ((int) $denyIfNoneUseragent AND ($userAgent == '' OR $userAgent == FALSE)) {
			trigger_error('Error: ypCore deny your software to access! Please try again!');
		}
		
		// Firewall 
		if ($this->Setting->get('firewall') AND defined('ACTIVE_FIREWALL')) {
			$this->addPreAction(new ypAction('System/Firewall')); 
		}
		
		// Https security
		if ((int) $this->Setting->get('security_https') == 1 AND defined('ACTIVE_HTTPS')) {
			$this->Request->setServerProtocal('https');
		}
	}
	
	public function __get($name) {
		return $this->_registry->get($name);
	}
	
	public function __set($name, $value) {
		return $this->_registry->set($name, $value);
	}
}