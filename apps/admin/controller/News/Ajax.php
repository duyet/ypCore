<?php 
class Controller_Admin_News_Ajax extends ypAdminController {
	public function Getalias() {
		$this->checkLogin();

		$returnFullLink = FALSE;

		$title = trim((string) urldecode($this->Request->REQUEST['title']));
		if (empty($title)) {
			die('Error!');
		}

		$this->Loader->helper('string');
		$alias = createAlias($title);

		if ($returnFullLink) {
			die($this->Link->build('News/Views', TRUE, array('alias' => createAlias($title))));
		} 

		die($alias);
	}
}