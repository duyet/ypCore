<?php 
/**
 * ypController
 * Main controller for module
 * 
 * @package ypCore 1.0
 * @since ypCore 1.0
 * @author duyet2000@gmail.com (http://go.use.vn)
 * @copyright 2013
 * @version $Id$
 * @access public
 */
abstract class ypController {
	protected $_registry;
	protected $_id;
	protected $_layout;
	protected $_template;
	protected $_templateDir;
	protected $_templateName = 'default';
	protected $_children = array();
	protected $_data = array();
	protected $_output;
	public $_debug = array();

	/**
	 *  Construct define
	 *  
	 * @param ypRegistry $_registry
	 * @return void 
	 */
	public function __construct(&$_registry) {
		$this->_registry = $_registry;

		$this->_templateName = $this->Setting->get('template');
		$this->_templateDir = APPS_TEMPLATE_DIR;

		// Default 
		$this->set('template_url', $this->Request->getSiteUrl() . '/' . APPS_TEMPLATE_DIR . '/
			' . $this->_templateName);
		$this->set('site_url', $this->Request->getSiteUrl());
		if ((boolean) $this->Setting->get('static_url_active')) {
			$this->set('static_url', $this->Setting->get('static_url'));
		} else {
			$this->set('static_url', $this->Request->getSiteUrl() . '/' . YPCORE_STATIC_DIR);
		}

		if ($this->User->isLogin()) {
			$this->set('USER', $this->User->getUserInfo());	
			$this->set('IS_ADMIN', $this->User->isAdmin());
		}
		$this->set('IS_USER', $this->User->isLogin());
	}

	/**
	 * Get from this class
	 * 
	 * @param  string $key
	 * @return mixed
	 */
	public function __get($key) {
		return $this->_registry->get($key);
	}

	/**
	 * Set for this class
	 * 
	 * @param string $key
	 * @param mixed $value
	 */
	public function __set($key, $value) {
		$this->_registry->set($key, $value);
	}

	/**
	 * Set value for data and template.
	 * 
	 * @param string $key
	 * @param mixed $value
	 */
	public function set($key, $value) {
		// $this->_data[$key] = $value; // Old version
		$this->Template->set($key, $value);
	}

	/**
	 * Get value from data store
	 * 
	 * @param  string $key
	 * @return mixed 
	 */
	public function get($key) {
		return $this->_data[$key];
	}

	/**
	 * Load language from language file.
	 * 
	 * @param  string $group
	 * @return boolean
	 */
	public function loadLanguage($group) {
		$group = (string) $group;
		$this->Language->load($group);
		if ($this->Language->phrase) {
			// Load language to _data
			$this->_data = array_merge($this->_data, $this->Language->phrase);
			
			// Load language to template
			foreach($this->Language->phrase as $key => $phrase) {
				$this->Template->set($key, $phrase);
			}
		}

		return TRUE;
	}

	/**
	 * Set template name to render. 
	 * The second param to using for fix cache template.
	 * 
	 * @param string $path
	 */
	public function setTemplate($path) {
		 $this->_template = $path; // Old version
	}

	/**
	 * Set template child
	 * 
	 * @param array $child
	 */
	public function setTemplateChild($child = array()) {
		$this->_children = array_merge($this->_children, $child);
	}

	/**
	 * Forward to re-Action
	 * 
	 * @param  string $route
	 * @param  array  $args
	 * @return ypAction
	 */
	protected function forward($route, $args = array()) {
		return new ypAction($route, $args);
	}

	/**
	 * Redirect to URL
	 * 
	 * @param  string  $url
	 * @param  integer $status
	 * @return void
	 */
	protected function redirect($url, $status = 302) {
		header('Status: ' . $status);
		header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url));
		exit();
	}

	/**
	 * Compile child action.
	 * 
	 * @param  string $child
	 * @param  array  $args
	 * @return void
	 */
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

	/**
	 * Set output return.
	 * 
	 * @param string $output
	 */
	public function setOutput($output = '') { // fix #2
		$this->_output = $output;
	}

	/**
	 * Render template
	 * 
	 * @return string
	 */
	protected function render() {
		foreach ($this->_children as $child) {
			$this->Template->set(basename($child), $this->getChild($child));
		}

		// Auto title 
		if (isset($this->_data['title'])) {
			$this->Document->setTitle($this->_data['title']);
		}

		$templatePath = $this->_templateDir . '/' . $this->_templateName . '/' . $this->_template;
		$templatePathDefault = $this->_templateDir . '/default/' . $this->_template;
		
		if (!file_exists($templatePath)) {
			if (!file_exists($templatePathDefault)) {
				trigger_error('Error: Could not load template ' . $templatePathDefault . '! <br />Template '. $templatePath . ' too!');
				exit();
			} else {
				$templatePath = $templatePathDefault;
			}
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

		$this->_output = $this->Template->compile($templatePath, md5($_SERVER['REQUEST_URI'])); // Fix loi cache khi cac trang co dang  /?id=123
		return $this->_output;
	}
}
