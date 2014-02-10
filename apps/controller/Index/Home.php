<?php 
class Controller_Index_Home extends ypController {
	public function Index() {
		$this->loadLanguage('Index/Home');
		$this->Document->setTitle($this->Config->get('site_name'));
		
		$this->set('progress_staff', 35);
		$link['download'] = $this->Link->build('Download/Index');
		$this->set('link', $link);
		
		$this->setTemplateChild(array(
			'System/Header',
			'System/Footer'
		));
		$this->setTemplate('module/Index/Home.php');
		$this->Document->setTitle($this->_data['title']);
		$this->Response->setOutput($this->render());
	}

	public function PhpInfo() {
		phpinfo();
	}
}