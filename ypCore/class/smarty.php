<?php 
require_once (YPCORE_DIR . '/library/Smarty/Smarty.class.php');
class __SMARTY {
	private static $_instance;
	public $smarty;
	public $setting;
	
	public function __construct($setting = array()) {
		$this->setting = $setting;

		$this->getSmarty();
	}

	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function getSmarty() {
		$this->smarty = new Smarty();
		$this->setting($this->setting);
	}

	public function setting($setting = array()) {
		// Debug
		if (isset($setting['debugging'])) {
			$setting['debugging'] = (boolean) $setting['debugging'];
		} else {
			$setting['debugging'] = FALSE;
		}
		$this->smarty->debugging = $setting['debugging'];

		// Cache
		if (isset($setting['caching'])) {
			$setting['caching'] = (boolean) $setting['caching'];
		} else {
			$setting['caching'] = TRUE;
		}
		$this->smarty->caching = $setting['caching'];

		// Cache time
		if (isset($setting['cache_lifetime'])) {
			$setting['cache_lifetime'] = (int) $setting['cache_lifetime'];
		} else {
			$setting['cache_lifetime'] = 120;
		}
		$this->smarty->cache_lifetime = $setting['cache_lifetime'];

		// Default setting
		$this->smarty->template_dir = YPCORE_ROOT . '/' . APP_VIEWS_DIR; // template dir
		$this->smarty->compile_dir = YPCORE_ROOT . '/' . APP_CACHE_DIR . '/compile_dir'; 
		$this->smarty->cache_dir = YPCORE_ROOT . '/' . APP_CACHE_DIR . '/cache_template_dir'; 
		//$this->smarty->config_dir  = '';  
		//$this->smarty->compile = TRUE; 
	}

	public function set($key = '', $value) {
		$this->smarty->assign($key, $value);
	}

	public function setTemplate($template = '') {
		$this->smarty_template = $template;
	}

	public function setTemplateDirectory($dir = '') {
		$this->smarty->setTemplateDir($dir);
	}

	public function addTemplateDirectory($dir = '') {
		$this->smarty->addTemplateDir($dir);
	}

	public function compile($template = '') {
		$view_template = '';
		if (!empty($template)) {
			$view_template = $template;
		}
		if (empty($view_template)) {
			$view_template = $this->view_template;
		}

		if (file_exists($view_template)) {
			return $this->smarty->fetch($view_template);
		} else {
			trigger_error('Cannot render view without any template being assigned or file does not exist');
		}
	}

	public function __set($key, $value) {
		$this->assign($key, $value);
	}

	public function __get($key) {
		return $this->smarty->getTemplateVars($key);
	}

	public function __unset($key) {
		$this->smarty->clearAssign($key);
	}

	public function __isset($key) {
		return (NULL !== $this->smarty->getTemplateVars($key));
	}

	public function __clone() {
		//return $this->
	}

	public function getVars() {
		$this->smarty->getTemplateVars();
	}

	public function clearVars() {
		$this->smarty->clearAllVars();
	}
}