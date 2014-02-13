<?php
require_once (YPCORE_DIR . '/library/Markdown/Markdown.inc.php');
class __MARKDOWN {
	public static $_instance;

	/**
	 * Output HTML
	 * 
	 * @var string
	 */
	public $output = '';

	/**
	 * Text to compile
	 * 
	 * @var string
	 */
	public $text = '';

	public function __construct() {

	}

	/**
	 * Get instance for static call
	 * 
	 * @return 
	 */
	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Compile text, save result to mem and return result.
	 * 
	 * @param  string $text   [description]
	 * @param  array  $option [description]
	 * @return [type]         [description]
	 */
	public function compile($text = '', $option = array()) {
		if ($text == '') $text = $this->getText();

		$this->output = Markdown::defaultTransform($text);

		return $this->output;
	}

	/**
	 * Load compile text from cache.
	 * 
	 * @param  string $text [description]
	 * @return [type]       [description]
	 */
	public function loadFromCache($text = '') {
		if (__CACHE::getInstance()->get(md5($text) != '')) {
			return __CACHE::getInstance()->get(md5($text));
		}

		return FALSE;
	}

	/**
	 * Set input 
	 * 
	 * @param string $text [description]
	 */
	public function setInput($text = '') {
		$this->text = $text;
	}

	/**
	 * Get current compile result.
	 * 
	 * @return
	 */
	public function getOutput() {
		return $this->output;
	}

}