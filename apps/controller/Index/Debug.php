<?php 
class Controller_Index_Debug extends ypController {
	public function Index() {
		$this->_link('Index/Debug/PhpInfo');
		$this->_link('Index/Debug/Server');
		$this->_link('Index/Debug/BackTrace');
		$this->_link('Index/Debug/Zval');
	}
	
	private function _link($code) {
		echo '<a href="'. $this->Link->build($code) .'">'. $this->Link->build($code) .'</a><br />';
	}
	
	public function PhpInfo() {
		phpinfo();
	}
	
	public function Server() {
		echo '<pre>';
		print_r($_SERVER);
		echo '</pre>';
	}
	
	public function BackTrace() {
		echo '<pre>';
		print_r(debug_backtrace());
		echo '</pre>';
	}
	
	public function Zval($var = '') {
		if (!$this->Request->GET['var']) $var = $this;
		else $var = $this->Request->GET['var'];
		echo '<pre>';
		debug_zval_dump($var);
		echo '</pre>';
	}
}