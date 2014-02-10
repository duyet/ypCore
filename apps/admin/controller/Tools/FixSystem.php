<?php 
class Controller_Admin_Tools_FixSystem extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		
		//$this->loadLanguage('Admin/Tools/FixSystem');
		$dir = array(
			YPCORE_ROOT . '/' . APP_CACHE_DIR, 
			YPCORE_ROOT . '/' . APP_TMP_DIR, 
			
		);
	}
}