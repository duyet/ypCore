<?php
class Controller_Admin_News_Upload extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$upload = __UPLOADHANDLER::getInstance();
		
	}
}