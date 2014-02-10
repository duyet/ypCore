<?php 
class Controller_Admin_News_Index extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		
		$this->redirect($this->Link->build('Admin/News/Listpost'));
	}
}