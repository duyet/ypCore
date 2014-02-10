<?php 
class Controller_Admin_Setting_Index extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$this->redirect($this->Link->build('Admin/Setting/Site'));

		$this->setTemplate('module/Setting/Index.php');
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer'
		));
		$this->Document->setTitle("All Setting");
		$this->Response->setOutput($this->render());
	}
}

