<?php 
class Controller_Admin_News_Listpost extends ypAdminController {
	/**
	 * View list of post
	 * (Chua phan trang)
	 *
	 * @access 	public
	 */
	public function Index() {
		$this->checkLogin();
		$this->Loader->model('Admin/News/Listpost');
		$this->Loader->model('News/Index');
		$this->loadLanguage('Admin/News/Listpost');

		$start = isset($this->Request->GET['start_post']) ? intval($this->Request->GET['start_post']) : 0;
		$limit = isset($this->Request->GET['limit']) ? intval($this->Request->GET['limit']) : 50;

		$posts = $this->Model_Admin_News_Listpost->loadPost($start, $limit);
		foreach ($posts as $offset => $content) {
			if ($this->Setting->get('post_request_type', 'int') == 1) {
				$content['link'] = $this->Model_News_Index->createPostLink($content['title_alias'], $content['cat_id']);
			} else {
				$content['link'] = $this->Model_News_Index->createPostLink($content['post_id']);
			}
			$content['tag'];
			$content['is_draft'] = (int) $content['status'] === 1 ? FALSE : TRUE;
			
			$content['link_edit'] = $this->Link->build('Admin/News/Newpost', FALSE, array('post_id' => $content['post_id']));
			$content['link_viewpost'] = $this->Link->build('News/View', FALSE, array('id' => $content['post_id']));
			$content['link_delete'] = $this->Link->build('Admin/News/Delete', FALSE, array('id' => $content['post_id']));
			$content['link_stat'] = $this->Link->build('Admin/News/Stat', FALSE, array('id' => $content['post_id']));
			$content['datetime'] = date('d-m-y', $content['date']);

			$posts[$offset] = $content;
		}

		$this->set('POSTS', $posts);
		$this->set('newpost_link', $this->Link->build('Admin/News/Newpost'));

		$this->setTemplate('module/News/Listpost.php');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
		));
		$this->Response->setOutput($this->render());
	}
}