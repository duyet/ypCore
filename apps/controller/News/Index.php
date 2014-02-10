<?php 
class Controller_News_Index extends ypController {
	public function Index() {
		$this->loadLanguage('News/Index');

		// Num of post
		$numOfPost = 10;

		// This page
		$currentPage = (isset($this->Request->GET['p']) AND intval($this->Request->GET['p']) > 0) ? intval($this->Request->GET['p']) : 1;

		$this->Loader->model('News/Index');
		$posts = $this->Model_News_Index->loadPost($numOfPost, $currentPage);

		// Number of page
		$totalPage = $this->Model_News_Index->numberOfPage($numOfPost);
		
		// Next page link
		if ($totalPage > 1 AND $currentPage < $totalPage) {
			$this->set('next_page_link', $this->Link->build('News/Index', FALSE, array('p' => $currentPage + 1)));
		}

		// Pre page link
		if ($totalPage > 1 AND $currentPage > 1) {
			$this->set('pre_page_link', $this->Link->build('News/Index', FALSE, array('p' => $currentPage - 1)));
		}
		
		$this->set('posts', $posts);


		$this->Document->setTitle($this->_data['title']);
		$this->setTemplate('module/News/Index.php');
		$this->setTemplateChild(array(
			'System/Header',
			'System/Footer',
		));
		$this->Response->setOutput($this->render());
	}
}