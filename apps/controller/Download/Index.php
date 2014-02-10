<?php 
class Controller_Download_Index extends ypController {
	public function Index() {
		$this->loadLanguage('Download/Index');
		$this->Document->setTitle($this->_data['title']);
		
		// Status
		$this->Loader->model('Download/Index');
		$count = $this->Model_Download_Index->getDownloadCount();
		//$this->_data['text_status'] = $this->_data['text_coming_soon'];
		$this->_data['text_status'] = sprintf($this->_data['text_status'], (string) $count);
		
		$this->Document->setJavascript('js/download.js');
		
		$this->setTemplate('module/Download/Download.php');
		$this->setTemplateChild(array(
			'System/Header', 
			'System/Footer',
		));
		$this->Response->setOutput($this->render());
	}
}