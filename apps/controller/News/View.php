<?php 
class Controller_News_View extends ypController {
	public function Index() {
		$this->Loader->model('News/Index');
		$this->Loader->model('News/View');
		
		// Load post ID
		$id = 0;

		$alias = $this->Request->GET('alias');
		$alias = preg_replace('/(\/)*$/', '', trim($alias));
		$explode = explode('/', $alias);
		if (!empty($explode)) {
			$post = array_pop($explode);
			$id = $this->Model_News_View->loadPostIdFromAlias($post);
			if (!isset($this->Request->GET['id'])) {
				$this->Request->GET['id'] = $id; // fix for comment, it get post_id but in url not exists Id param
			}
		}

		// Load post_id from _GET
		$id = isset($this->Request->GET['id']) ? intval($this->Request->GET['id']) : $id;
		
		if ($id == 0) {
			//die('Error: Post not exists!');
			// You can redirect to homepage
			//$this->redirect($this->Link->build('Index/Home', TRUE));
			// Or show not found page
			$this->_showNotFound(sprintf($this->_data['title'], $this->_data['text_not_found']));
			return FALSE;
		}

 		$this->loadLanguage('News/View');

		// Load news 
		$news = $this->Model_News_View->load($id);

		//$this->Model_News_Index->createBreadcrumb($news['cat_id'], $news['title']);

 		if (!$news) {
			$this->_showNotFound(sprintf($this->_data['title'], $this->_data['text_not_found']));
			return FALSE;
		}

		$this->Model_News_View->updateCounter($id);

		$news['post_date'] = $news['post_date'] ? date('d/m/Y h:i', $news['post_date']) : '';

		$news['post'] = htmlspecialchars_decode($news['post']);
		$news['author'] = $news['username'];
		$news['author_link'] = $this->Link->build('User/User', FALSE, array('userid' => $news['user_id']));
		if ($this->Setting->get('show_view_counter') AND intval($this->Setting->get('show_view_counter')) == 0) { 
			$news['view_count'] = FALSE;
		} else {
			$news['view_count'] = sprintf($this->_data['text_view_count'], $news['view_count']);
		}
		if ($this->Setting->get('like_active') AND intval($this->Setting->get('like_active')) == 0) {
			$news['like_info'] = FALSE;
		} else {
			$news['like_info'] = sprintf($this->_data['text_like_count'], $news['like_count']);
		}

		// Create link for tag 
		if (!empty($news['tag'])) {
			$news['tag'] = explode(',', $news['tag']);
			foreach($news['tag'] as $id => $tag) {
				if (!empty($tag)) {
					$tag = trim($tag);
					$tag = '<a href="' . $this->Link->build('News/Tag', FALSE, array('tag' => $tag)) . '" alt="Tag '. $tag .'">' . $tag . '</a>';
					$news['tag'][$id] = $tag;
				}
			}
			$news['tag'] = implode(', ', $news['tag']);
		}

		$this->Document->setKeywork($news['keywork']);
		$this->set('addthis', $this->Setting->get('addthis'));

		// Quick edit
		$this->set('quick_edit', FALSE);
		if ($this->User->isAdmin() AND (boolean) $this->Setting->get('quick_edit_post') == TRUE) {
			$this->set('quick_edit', TRUE);
		}

		// Comment
		if ($this->Setting->get('comment_disqus_active') == '1') {
			$this->set('comment_disqus', TRUE);
			$this->set('comment_disqus_alias', $this->Setting->get('comment_disqus_alias'));
		}

		// Link 
		$this->_data['link_edit'] = $this->Link->build('Admin/Module/News/Edit', TRUE, array('id' => $news['post_id']));
		$this->_data['link_like'] = $this->Link->build('News/View/Like', TRUE, array('id' => $news['post_id'], 'user_id' => $this->User->get('user_id')));
		$this->_data['link_edit'] = $this->Link->build('Admin/Module/News/Edit', TRUE, array('id' => $news['post_id']));



		// Quick editor 
		$this->set('quick_edit', FALSE);
		if ($this->User->isAdmin() AND $this->Setting->get('quick_edit')) { 
			$this->set('quick_edit', TRUE);
		}

		$this->setTemplate('module/News/View.php');
		$this->setTemplateChild(array(
			'System/Header',
			'System/Footer',
			'News/Comment',
			'News/Comment/ListComment',
			'System/Breadcrumb',
		));
		$this->set('news', $news);
		$this->Document->setTitle($news['title']);
		$this->Response->setOutput($this->render());
	}

	private function _showNotFound($title) {
			$this->setTemplate('module/News/NotFound.php');
			$this->Document->setTitle($title);
			$this->setTemplateChild(array(
				'System/Header',
				'System/Footer',
			));
			$this->Response->setOutput($this->render());
			return;
	}
}