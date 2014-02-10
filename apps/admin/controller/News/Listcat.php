<?php 
class Controller_Admin_Module_News_Listcat extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$this->loadLanguage('Admin/Module/News/Listcat');

		$start = intval($this->Request->GET['start_post']) ? intval($this->Request->GET['start_post']) : 0;
		$limit = intval($this->Request->GET['limit']) ? intval($this->Request->GET['limit']) : 50;

		$this->Loader->model('Admin/Module/News/Listcat');
		$cats = $this->Model_Admin_Module_News_Listcat->loadCat();
		$level = $this->Model_Admin_Module_News_Listcat->level;
		$column_width = 80 / $level;

		$this->set('cats', $cats);
		$this->set('level', $level);
		$this->set('column_width', $column_width);

		// ===============
		$this->setTemplate('module/Module/News/Listcat.php');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer'
		));
		$this->Response->setOutput($this->render());
	}
}