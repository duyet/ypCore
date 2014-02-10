<?php 
class Controller_Admin_Module_Index extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		
		$this->redirect($this->Link->build('Admin/Module/ModuleManager', TRUE));
	}
}