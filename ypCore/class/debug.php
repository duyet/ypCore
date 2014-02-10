<?php 
class __DEBUG {
	private static $_instance;
	public $debugMode = FALSE;
	private $_startTime = 0;
	private $_endTime = 0;
	private $_isEnd = FALSE;

	public function __construct($setting) {
		if (isset($setting['debug']) AND $setting['debug'] == TRUE) {
			$this->debugMode = TRUE;
		}
	}

	public static function getInstance($setting = array()) {
		if (!self::$_instance) self::$_instance = new self($setting);

		return self::$_instance;
	}

	public function setDebugsMode( boolean $mode) {
		$this->debugMode = ( $mode != TRUE ) ? FALSE : TRUE; 
	}

	public function start() {
		$this->_startTime = microtime();
	}

	public function end() {
		if (!$this->_isEnd) {
			$this->_endTime = microtime();
		}

		$this->_isEnd = TRUE;
	}

	public function showTime() {
		if (!$this->_isEnd) $this->end();
		$this->runTime = $this->_endTime - $this->_startTime;
		$this->runTime = number_format($this->runTime, 5);
		echo $this->runTime;
	}

	public static function getPageLoadTime($startTime = 0) {
		$endTime = microtime(TRUE);
		$time = $endTime - $startTime;
		$time = number_format($time, 5);

		return $time;
	}
}