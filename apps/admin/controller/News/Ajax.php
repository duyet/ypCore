<?php 
class Controller_Admin_Module_News_Ajax extends ypAdminController {
	public function Getalias() {
		$this->checkLogin();

		$title = trim((string) urldecode($this->Request->GET['title']));
		if (!$title) {
			die('');
		}

		$this->Loader->helper('string');
		$link  = $this->Link->build('News/Views', TRUE, array('alias' => createAlias($title)));

		die($link);
	}
}