<?php 
/**
 * ypAdminAction
 * Manager Action, class, path and method for admin
 * 
 * @since 0.1.0
 * @author LvDuit
 * @version $Id$
 * @access public
 */
abstract class ypAdminController {
	protected $_registry;
	protected $_id;
	protected $_layout;
	protected $_template;
	protected $_templateDir;
	protected $_children = array();
	protected $_data = array();
	protected $_output;

	public function __construct(&$_registry) {
		$this->_registry = $_registry;

		$this->_template = $this->_registry->get('Setting')->get('admin_template');
		$this->_templateDir = ADMIN_TEMPLATE_DIR . '/' . $this->_template;

		// Default 
		$this->set('template_url', $this->Request->getSiteUrl() . '/' . ADMIN_DIR . '/view/' . $this->_template);
		$this->set('site_url', $this->Request->getSiteUrl());
		$this->set('static_url', $this->Request->getSiteUrl() . '/' . YPCORE_STATIC_DIR);
		$this->set('template_dir', $this->_templateDir);

		$systemLink = array(
			'setting' => $this->Link->build('Admin/Setting/Index'),
			'post' => $this->Link->build('Admin/News/Index'),
			'newpost' => $this->Link->build('Admin/News/Newpost'),
			'user' => $this->Link->build('Admin/User'));
		$this->set('systemLink', $systemLink);
	}

	public function __get($key) {
		return $this->_registry->get($key);
	}

	public function __set($key, $value) {
		$this->_registry->set($key, $value);
	}

	public function set($key, $value) {
		// $this->_data[$key] = $value; // Old version
		$this->Template->set($key, $value);
	}

	public function loadLanguage($group) {
		$group = (string) $group;
		$this->Language->load($group);
		if ($this->Language->phrase) {
			// Load language to _data
			//$this->_data = array_merge($this->_data, $this->Language->phrase);
			
			// Load language to template
			foreach($this->Language->phrase as $key => $phrase) {
				$this->Template->set($key, $phrase);
			}
		}
	}

	public function setTemplate($path) {
		$this->_template = $path;
	}

	public function setTemplateChild($child = array()) {
		$this->_children = array_merge($this->_children, $child);
	}

	protected function forward($route, $args = array()) {
		return new ypAction($route, $args);
	}

	protected function redirect($url, $status = 302) {
		header('Status: ' . $status);
		header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url));
		exit();
	}

	protected function getChild($child, $args = array()) {
		$action = new ypAction($child, $args);

		if (file_exists($action->getFile())) {
			require_once($action->getFile());

			$class = $action->getClass();

			$controller = new $class($this->_registry);

			if($action->getArgs()) {
				call_user_func_array(array($controller, $action->getMethod()), $action->getArgs());
			} else {
				call_user_func(array($controller, $action->getMethod()));
			}

			return $controller->_output;
		} else {
			trigger_error('Error: Could not load controller ' . $child . '!');
			exit();
		}
	}

	protected function render() {
		foreach ($this->_children as $child) {
			$this->Template->set(basename($child), $this->getChild($child));
		}

		// Auto title 
		if (isset($this->_data['title'])) {
			$this->Document->setTitle($this->_data['title']);
		}

		$templatePath = $this->_templateDir  . '/' . $this->_template;
		if (!file_exists($templatePath)) {
			trigger_error('Error: Could not load template ' . $templatePath . '!');
			exit();
		}

		if ($this->Setting->get('compress_html', 'bool')) {
			$templateCacheName = $this->_templateName . '-' . str_replace('/', '-', $this->_template);
			$template_cache_file = __CACHETEMPLATE::getInstance()->get($templateCacheName);
			if (!$template_cache_file) {
				$template = file_get_contents($templatePath);
				$option['compressJs'] = false;
				$option['compressCss'] = true;
				$template = __COMPRESSHTML::getInstance()->compress($template, $option);
				if ($template) {
					__CACHETEMPLATE::getInstance()->set($templateCacheName, $template);
				}
				$template_cache_file = __CACHETEMPLATE::getInstance()->get($templateCacheName);
			}
			$templatePath = $template_cache_file;
		}


		//extract($this->_data); // Old version
		// require ($templatePath); // Old version

		$this->_output = $this->Template->compile($templatePath, md5($_SERVER['REQUEST_URI']));
		return $this->_output;
	}

	public function isLogin() {
		if ($this->User->isAdmin()) {
			return TRUE;
		}

		return FALSE;
	}

	public function checkLogin() {
		if (!$this->User->isAdmin()) {
			// Redirect to
			if (isset($this->Request->REQUEST['redirect_to'])) {
				$redirect_to = urldecode($this->Request->REQUEST['redirect_to']);
			} else {
				$redirect_to = $this->Link->build($this->Link->this(), TRUE, $this->Link->getParams());	
			}

			$this->redirect($this->Link->build('Login/Index', TRUE, 
			array('admin_login' => 1,
				'redirect_to' => $redirect_to, 
			)));
		}

		return TRUE;
	}

	public function redirectLogin() {
		$this->Link->addParam('redirect_to', $this->Link->build($this->Link->this(), TRUE));
		$this->Link->addParam('admin_username', $this->User->get('username'));
		$this->Link->addParam('relogin', '1');
		$this->redirect($this->Link->build('Admin/Login/Index', TRUE, $this->Link->getParams()));
	}

	private function _cache() {
		return __CACHETEMPLATE::getInstance();
	}

	public function getBool($param) {
		if (!$param OR !isset($param)) return FALSE;

		return TRUE;
	}

}
