<?php 
class Controller_Admin_Tools_Leftmenu extends ypAdminController {
	/** 
	 * Left menu of tools system module
	 *
	 * @access 	public 
	 */
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Tools/Index');

		$this->set('links', array(
			'backup' => $this->Link->build('Admin/Tools/Backup'),
			'cache' => $this->Link->build('Admin/Tools/Cache'),
			'fixsystem' => $this->Link->build('Admin/Tools/Fixsystem'),
			'update' => $this->Link->build('Admin/Tools/Update'),
			));

		$this->setTemplate('module/Tools/Leftmenu.php');
		return $this->render();
	}
}