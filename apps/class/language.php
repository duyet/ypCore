<?php 
class __LANGUAGE {
	private static $_instance;
	public $lang = 'en';
	public $phrase = array();

	public function __construct() {
	}

	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function load($group = '') {
		if (empty($group)) $group = 'global';
		$group = trim($group);
		

		if (substr($group, 0, 5) == 'Admin') {
			$path = YPCORE_ROOT . '/' . ADMIN_DIR . '/language/' . $this->lang . '/' . substr($group, 6) . '.php';
		} else {
			$path = YPCORE_ROOT . '/' . APP_DIR . '/language/' . $this->lang . '/' . $group . '.php';
		}
		if (!file_exists($path)) {
			if (substr($group, 0, 5) == 'Admin') {
				$path_default = YPCORE_ROOT . '/' . ADMIN_DIR . '/language/en/' . substr($group, 6) . '.php';
			} else {
				$path_default = YPCORE_ROOT . '/' . APP_DIR . '/language/en/' . $group . '.php';
			}
			if (!file_exists($path_default)) {
				trigger_error('Could not load language file: ' . $path_default);
				exit();
			} else {
				$path = $path_default;
			}
		}

		$_ = array();
		require_once ($path);
		$this->phrase = array_merge($this->phrase, $_);
	}

	public function setLanguage($language = '') {
		if (strlen($language) != 2) return FALSE;
		$language = strtolower($language);

		$this->lang = $language;
	}

	public function getLanguageName() {
		return $this->lang;
	}

	public static function phrase($phraseName) {
		$instance = self::getInstance();

		if (!$instance->phrase["$phraseName"]) {
			return '';
		}

		return $instance->phrase["$phraseName"];
	}

}