<?php 
class Controller_System_Js extends ypController {
	public function Index() {
		$path = trim((string) $this->Request->GET['path']);
		$js    = trim((string) $this->Request->GET['js']);
		$_phrase = trim((string) $this->Request->GET['_phrase']);
		
		$contents = '';
		if ($_phrase == 'global') {
			$this->loadLanguage('System/Jsphrase_Global');

			foreach ($this->_data as $phrase => $text) {
				if (is_string($phrase) AND substr($phrase, 0, 16) == 'ypCore_jsphrase_') {
					$contents .= "$phrase = '$text'; \n"; 
				}
			}
		}

		$this->Response->addHeader('Content-type: text/javascript');
		$this->Response->setOutput($contents);
	}
}