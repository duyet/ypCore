<?php 
class Controller_Admin_Logout_Index extends ypAdminController {
	public function Index() {
		// Save logs
		$this->Loader->model('Admin/Admin/Admin');
		$this->Model_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Admin logout.');

		// Admin set
		$this->Session->delete('admin');
		$this->Session->set('isLogin');
		$this->Cookie->set('admin');
		$this->Cookie->set('admin_code');
		
		if (empty($this->Request->GET['redirect'])) {
			$this->set('redirect_to', $this->Link->build('Admin/Login/Index', TRUE));
		} else {
			$this->set('redirect_to', $this->Request->GET['redirect']);
		}
		
		$this->setTemplate('layout/Redirect.php');
		$this->Response->setOutput($this->render());
	}
}