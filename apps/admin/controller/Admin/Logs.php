<?php 
class Controller_Admin_Admin_Logs extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Admin/Logs');
		
		$this->Loader->model('Admin/Admin/Logs');

		// Phan trang
		$perpage = 50;
		$current_page = intval($this->Request->GET('page'));
		$total_rows = $this->Model_Admin_Admin_Logs->totalLogs();
		$this->Loader->library('pagination');
		$config['siteUrl'] = $this->Link->build($this->Link->this());
		$config['perPage'] = $perpage;
		$config['totalRows'] = $total_rows;
		$config['currentPageParam'] = 'page';
		$config['firstLink'] = $this->_data['text_pagination_first'];
		$config['lastLink'] = $this->_data['text_pagination_last'];

		$this->Pagination->initialize($config);
		$start = $this->Pagination->start;
		$logs = $this->Model_Admin_Admin_Logs->loadLogs($start, $perpage);
		$this->set('logs', $logs);

		$pagination = $this->Pagination->create_links();
		$this->set('pagination', $pagination);
		
		$this->setTemplate('module/Admin/Logs.php');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer'));
		$this->Response->setOutput($this->render());
	}
}