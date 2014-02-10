<?php 
class Controller_News_Tag extends ypController {
	public function Index() {
		$this->loadLanguage('News/Index');

		// Num of post
		$this->_data['num_of_post'] = 10;
		if ($this->Request->REQUEST['per_page'] AND intval($this->Request->REQUEST['per_page']) > 0) {
			$this->_data['num_of_post'] = intval($this->Request->REQUEST['per_page']);
		}

		// Tag name
		$this->_data['tag'] = $this->Request->REQUEST['tag'] ? $this->Request->REQUEST['tag'] : '';
		$this->_data['tag'] = preg_replace('/[$%;!"\']/i', '', $this->_data['tag']);
		if (empty($this->_data['tag'])) {
			//$this->redirect($this->Link->build('News/Index'));
		}
 
		$this->Loader->model('News/Tag');
		$posts = $this->Model_News_Tag->loadPost($this->_data['tag'], $this->_data['num_of_post']);

		if (empty($posts)) {
			$post[0]['title'] = 'No post!';
		}

		$this->set('posts', $posts);

		$this->Document->setTitle('Tag: "' . $this->_data['tag'] . '"');
		$this->setTemplate('module/News/Tag.php');
		$this->setTemplateChild(array(
			'System/Header',
			'System/Footer',
		));
		$this->Response->setOutput($this->render());
	}
}