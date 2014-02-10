<?php 
class Controller_News_Cat extends ypController {
	// Load list all cat
	public function Index() {
		$this->loadLanguage('News/Cat');
		$mode = $this->_setModeView(); // Mode view

		$catId = 0;
		if ((int) $this->Setting->get('post_request_type') == 1) {
			$alias = isset($this->Request->GET['alias']) ? trim((string) $this->Request->GET['alias']) : '';
			if (!empty($alias)) {
				$catId = $this->_parseCatAlias($alias);
				if (!$catId) {
					$this->categoryNotExists();
					return;
				}
			}
		} else {
			if (isset($this->Request->GET['id'])) {
				$catId = isset($this->Request->GET['id']) > 0 ? intval($this->Request->GET['id']) : 0;
			}
		}
		$catId = (int) $catId;

		$this->Loader->model('News/Cat');
		$this->Loader->model('News/Index');

		// And here we go ........
		$this->set('cats', FALSE);
		// Load Cat from cache
		$cats = $this->Cache->get('category_' . $catId);
		if (!$cats OR $cats == FALSE) {
			$cats = $this->Model_News_Cat->loadCat($catId); // Load cat from database
			if ($cats) {
				$this->Cache->set('category_' . $catId, $cats); // And save it to cache
			}
		}
		$this->set('cats', $cats);

		// Create breadcrumb
		$this->Model_News_Index->createBreadcrumb($catId);

		$this->set('posts', FALSE);
		// Load post
		if ($catId != 0) {
			$posts = $this->Cache->get('cat_post_' . $catId);
			if ($posts == FALSE) {
				$posts = $this->Model_News_Cat->loadPost($catId);
				$this->Cache->set('cat_post_' . $catId, $posts);
			}
		}
		$this->set('posts', $posts);

		if (($cats == FALSE OR !is_array($cats)) AND $posts == FALSE) {
			if ($catId == 0 OR ($catId != 0 AND !$this->Model_News_Cat->IsCat($catId))) {
				$this->categoryNotExists();
				return;
			} elseif ($posts == FALSE) {
				$this->categoryHaveNoPost($catId);
				return;
			}
		}

		if ($cats) {
			$list_child = array();
			foreach($cats as $id => $cat) {
				if (count($cat['child']) > 0) {
					foreach($cat['child'] as $child) {
						$list_child[$id][] = '<a href="'. $child['link'] .'">'. $child['title'] .'</a>';
					}
				}
			}
		}

		$this->set('list_child', $list_child);

		$this->setTemplate('module/News/Cat_'. $mode .'.php');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplateChild(array(
			'System/Header',
			'System/Footer',
			'System/Breadcrumb'
		));
		$this->Response->setOutput($this->render());
	}
	
	private function _parseCatAlias($alias) {
		$alias = preg_replace('/^[^A-z0-9\/\.-]$/', '', $alias);
		$alias = preg_replace('/(\/)*$/', '', $alias);
		$explode = explode('/', $alias);
		
		$this->Loader->model('News/Cat');
		
		$level = 0;
		$parent = 0;
		foreach ($explode as $cat) {
			if (empty($cat)) {
				continue;
			}
			$cat = trim($cat);
			$cat = preg_replace('/^[^A-z0-9-\._]+$/', '', $cat);
			$catId = $this->Model_News_Cat->getCatIdFromCatAlias($cat, $parent);
			if (!$catId) {
				return FALSE;
			}
			$level++;
			$parent = $catId;
		}
		return $catId;
	}
	
	public function categoryNotExists() {
		$this->Document->setTitle($this->_data['title_no_cat']);
		$this->setTemplate('module/News/NotFound.php');
		$this->setTemplateChild(array(
			'System/Header', 
			'System/Footer',
		));
		$this->Response->setOutput($this->render());
	}
	
	public function categoryHaveNoPost($catId) {
		$this->Loader->model('News/Index');
		$this->Model_News_Index->createBreadCrumb($catId);
		$this->Document->setTitle($this->_data['title_no_post']);
		$this->set('text_not_found', $this->_data['text_not_found_post']);
		$this->set('text_not_found_text', $this->_data['text_not_found_text_post']);
		$this->setTemplate('module/News/NotFound.php');
		$this->setTemplateChild(array(
			'System/Header', 
			'System/Footer',
			'System/Breadcrumb'
		));
		$this->Response->setOutput($this->render());
	}
	
	private function _setModeView() {
		// Mode view
		$mode = 'Box';
		if (isset($this->Request->GET['view']) AND $this->Request->GET['view'] == 'Line') {
			$mode = 'Line';
		} elseif (isset($this->Request->GET['view']) AND $this->Request->GET['view'] == 'Box') {
			$mode = 'Box';
		} else {
			if ($this->Cookie->get('news_views_cat_mode') == 'Line') {
				$mode = 'Line';
			} elseif ($this->Cookie->get('news_views_cat_mode') == 'Box') {
				$mode = 'Box';
			}
		}
		if (!$this->Cookie->get('news_views_cat_mode') OR $this->Cookie->get('news_views_cat_mode') != $mode) {
			$this->Cookie->set('news_views_cat_mode', $mode);
		}
		$this->set('link_mode', array(
		  'box' => $this->Link->build('News/Cat', FALSE, array('view' => 'Box', 'id' => $catId)), 
		  'line' => $this->Link->build('News/Cat', FALSE, array('view' => 'Line', 'id' => $catId))
		));

		return $mode;
	}
}