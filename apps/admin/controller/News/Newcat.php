<?php 
class Controller_Admin_Module_News_Newcat extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Module/News/Newcat');
		$error = '';
		
		$is_ajax = $this->Request->GET('is_ajax');

		$this->Loader->helper('string');
		if (isset($this->Request->POST)) {
			$data['title'] = $this->Request->POST('title');
			if (!$data['title'] OR empty($data['title'])) {
				$error = $this->_data[''];
			}

			$data['description'] = $this->Request->POST('description');
			$data['keywork'] = $this->Request->POST('keywork');
			$data['cat_parent_id'] = intval($this->Request->POST('cat_parent_id'));
			
			if (empty($error)) {
				$this->Loader->model('Admin/Module/News/Newcat');
				$this->Model_Admin_Module_News_Newcat->saveNewCat($data);
				$this->Model_Admin_Module_News_Newcat->saveNewCatPath($data);
			}
		}

		$this->set('form_action', $this->Link->build('Admin/Module/News/Newcat'));
		$this->set('error', $error);
		$this->setTemplate('module/Module/News/Newcat.php');
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
		));
		$this->Document->setTitle($this->_data['title']);
		$this->Response->setOutput($this->render());
	}
}