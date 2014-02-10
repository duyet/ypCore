<?php 
class Controller_Admin_Tools_Backup extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$this->Loader->model('Admin/Tools/Backup');
		$tables = $this->Model_Admin_Tools_Backup->getDatabaseTable();
		$this->set('tables', $tables);
		
		$repair_link = array();
		$optimize_link = array();
		foreach ($tables as $table) {
			$repair_link[$table['name']] = $this->Link->build('Admin/Tools/Backup/Repair', FALSE, 
				array('table' => $table['name']));
			$optimize_link[$table['name']] = $this->Link->build('Admin/Tools/Backup/Optimize', FALSE, 
				array('table' => $table['name']));
		}
		$this->set('repair_link', $repair_link);
		$this->set('optimize_link', $optimize_link);
		
		$this->set('backup_database_link', $this->Link->build('Admin/Tools/Backup/Backup'));
		$this->set('repair_database_link', $this->Link->build('Admin/Tools/Backup/Repairs'));
		$this->set('optimize_talbe_link', $this->Link->build('Admin/Tools/Backup/Optimizes'));

		$this->loadLanguage('Admin/Tools/Backup');
		$this->setTemplate('module/Tools/ListTable.php');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
		));
		$this->Response->setOutput($this->render());
	}
	
	public function Backup() {
		$this->checkLogin();
		// Save logs
		$this->Loader->model('Admin/Admin/Admin');
		$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Backup database.');

		ini_set('max_time_out', 0);
		
		$this->Loader->model('Admin/Tools/Backup');
		$this->Model_Admin_Tools_Backup->getTableStatus();
	}
	
	public function Restore() {
	
	}
	
	public function Repair() {
		$this->checkLogin();
		
		$this->Loader->model('Admin/Tools/Backup');
		$tableName = $this->Model_Admin_Tools_Backup->getTable();
		
		$table = $this->Request->GET('table');
		if (!$table OR !in_array($table, $tableName)) {
			$this->redirect($this->Link->build('Admin/Tools/Backup'));
		}
		
		// Save logs
		$this->Loader->model('Admin/Admin/Admin');
		$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Repair table ' . $table);
		
		
		$this->Model_Admin_Tools_Backup->repairTable($table);
		
		$this->set('redirect_to', $this->Link->build('Admin/Tools/Backup'));
		$this->setTemplate('layout/Redirect.php');
		$this->Response->setOutput($this->render());
	}
	
	public function Repairs() {
		$this->checkLogin();
		
		$this->Loader->model('Admin/Tools/Backup');
		$tableName = $this->Model_Admin_Tools_Backup->getTable();
		
		foreach ($tableName as $table) {
			$this->Model_Admin_Tools_Backup->repairTable($table);
		}
		
		// Save logs
		$this->Loader->model('Admin/Admin/Admin');
		$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Repair database.');
		
		$this->set('redirect_to', $this->Link->build('Admin/Tools/Backup'));
		$this->setTemplate('layout/Redirect.php');
		$this->Response->setOutput($this->render());
	}
	
	public function Optimize() {
		$this->checkLogin();
		
		$this->Loader->model('Admin/Tools/Backup');
		$tableName = $this->Model_Admin_Tools_Backup->getTable();
		
		$table = $this->Request->GET('table');
		if (!$table OR !in_array($table, $tableName)) {
			$this->redirect($this->Link->build('Admin/Tools/Backup'));
		}
		
		// Save logs
		$this->Loader->model('Admin/Admin/Admin');
		$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Optimize table ' . $table);
		
		
		$this->Model_Admin_Tools_Backup->optimizeTable($table);
		
		$this->set('redirect_to', $this->Link->build('Admin/Tools/Backup'));
		$this->setTemplate('layout/Redirect.php');
		$this->Response->setOutput($this->render());
	}
	
	public function Optimizes() {
		$this->checkLogin();
		
		$this->Loader->model('Admin/Tools/Backup');
		$tableName = $this->Model_Admin_Tools_Backup->getTable();
		
		foreach ($tableName as $table) {
			$this->Model_Admin_Tools_Backup->optimizeTable($table);
		}
		
		// Save logs
		$this->Loader->model('Admin/Admin/Admin');
		$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Optimize database.');
		
		
		$this->set('redirect_to', $this->Link->build('Admin/Tools/Backup'));
		$this->setTemplate('layout/Redirect.php');
		$this->Response->setOutput($this->render());
	}
}