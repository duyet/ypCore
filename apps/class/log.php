<?php 
class __LOG {
	private $filename;
	
	public function __construct($filename) {
		$this->filename = $filename;
	}
	
	public function write($message) {
		$file = DIR_LOGS . $this->filename;
		
		$handle = fopen($file, 'a+'); 
		
		fwrite($handle, $this->_getTime() . ' - ' . $this->_formatMessage($message));

		fclose($handle); 
	}

	private function _getTime() {
		return date('Y-m-d G:i:s');
	}

	private function _formatMessage($message) {
		return $message . "\n";
	}
}