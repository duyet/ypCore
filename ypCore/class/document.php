<?php 
class __DOCUMENT {
	private $_title;
	//private $_site_title_construct = '';
	private $_description;
	private $_keywork;
	private $_link;
	private $_meta = array();
	private $_javascript = array();
	private $_css = array();
	private $_breadcrumb;
	private $_data;
	private $_setting;

	public function __construct($setting) {
		$this->_setting = $setting;
		//$this->_site_title_construct = $this->_setting->get('site_title_construct');
		$this->setDescription($this->_setting->get('site_description'));
		$this->setKeywork($this->_setting->get('site_keywork'));
		$this->setTitle($this->_setting->get('site_title'));
	}

	public function set($name, $value = FALSE) {
		$this->_data[$name] = $value;
	}

	public function get($name) {
		if (!$this->_data[$name]) {
			return FALSE;
		}

		return $this->_data[$name];
	}

	public function setTitle($title = '') {
		$this->_title = $title;
	}

	public function getTitle() {
		return $this->_title;
	}

	public function setDescription($description) {
		$this->_description = $description;
	}

	public function getDescription() {
		return $this->_description;
	}

	public function setKeywork($description) {
		$this->_keywork = $description;
	}

	public function getKeywork() {
		return $this->_keywork;
	}

	public function setMeta($meta = array()) {
		if (!is_array($meta)) return FALSE;

		$this->_meta = array_merge($this->_meta, $meta);
	}

	public function getMeta() {
		return $this->_meta;
	}

	public function addLink($link) {
		$this->_link[md5($link)] = $link;
	}

	public function getLink() {
		return $this->_link;
	}

	public function setJavascript($linkJavascript) {
		$this->_javascript[] = $linkJavascript;
	}
	
	public function getJavascript() {
		return $this->_javascript;
	}
	
	public function setCss($linkCss) {
		$this->_css[] = $linkCss;
	}
	
	public function getCss() {
		return $this->_css;
	}
	
	public function setBreadcrumb($breadCrumb) {
		$this->_breadcrumb = $breadCrumb;
	}
	
	public function getBreadcrumb() {
		return $this->_breadcrumb;
	}
}