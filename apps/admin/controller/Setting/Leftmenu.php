<?php 
class Controller_Admin_Setting_Leftmenu extends ypAdminController {
	/** 
	 * Left menu of setting module
	 *
	 * @access 	public 
	 */
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Setting/Index');

		$this->set('links', array(
			'server' => $this->Link->build('Admin/Setting/Server'),
			'template' => $this->Link->build('Admin/Setting/template'),
			'site' => $this->Link->build('Admin/Setting/Site'),
			'user' => $this->Link->build('Admin/Setting/User'),
			'urlandhtml' => $this->Link->build('Admin/Setting/Urlandhtml'),
			'security' => $this->Link->build('Admin/Setting/Security'),
			'tools' => $this->Link->build('Admin/Tools/Index')
			));

		$this->setTemplate('module/Setting/Leftmenu.php');
		return $this->render();
	}
}