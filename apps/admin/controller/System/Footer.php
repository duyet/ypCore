<?php 
class Controller_Admin_System_Footer extends ypAdminController {
	public function Index() {
		$this->loadLanguage('System/Footer');

		if ($this->Db->isDebug()) {
			$this->set('debug', $this->Db->get_debugInfo());
		}
		
		$this->set('debug_time', __DEBUG::getInstance()->getPageLoadTime(START_TIME));

		$this->setTemplate('layout/Footer.php');
		return $this->render();
	}
}