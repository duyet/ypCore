<?php 
class Controller_Admin_Tools_Index extends ypAdminController {
	/**
	 * Index of tools page
	 * It include list of tools 
	 *
	 * @access 	public
	 */
	public function Index() {
		$this->checkLogin();

		$this->setTemplate('module/Tools/Index.php');
		$this->Document->setTitle('All tools');
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
			'Admin/Tools/Leftmenu'));
		$this->Response->setOutput($this->render());
	}
}