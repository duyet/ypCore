<?php 
class Model_News_Index extends ypModel {
	public function loadPost($num_post = 10, $current_page = 1) {
		$num_post = (int) $num_post;
		$page = (int) $current_page;
		$start = ($page - 1) * $num_post;
		$end = $start + $num_post;

		// Load from cache
		$cache = $this->Cache->get('postInIndex-' . $current_page);
		if ($cache) {
		//	return $cache;
		}


		$this->Db->query("SELECT * FROM `yp_module_news` 
			WHERE `status` = 1
			ORDER BY `post_date` DESC 
			LIMIT $start, $end");
		if ($this->Db->num_rows() == 0) {
			return array();
		}

		$data = array();
		while($row = $this->Db->fetch()) {
			$data[] = $this->progressDataPost($row);
		}

		// Set cache
		//$this->Cache->set('postInIndex-' . $current_page, $data);

		return $data;
	}

	public function numberOfPage($num_post = 10) {
		$this->Db->query("SELECT COUNT(*) FROM `yp_module_news` 
			WHERE `status` = 1");

		$data = $this->Db->fetch();
		$numPost = intval($data['COUNT(*)']);

		if ($numPost <= $num_post) return 1;
		if (($numPost % $num_post) == 0) return ($numPost / $num_post);
		return intval($numPost / $num_post) + 1;
	}

	public function progressDataPost($post = array()) {
		$post['post_date_tag'] = date('d-m-y', $post['post_date']);
		$post['post_date_text'] = date('d M Y', $post['post_date']);
		$post['post'] = htmlspecialchars_decode((string) $post['post']);

		if ($this->Setting->get('news_view_request_type', 'string') == 'alias')
			$post['post_link'] = $this->Link->build('News/View', FALSE, array('alias' => trim($post['title_alias']) . '/'));
		elseif ($this->Setting->get('news_view_request_type', 'string') == 'both')
			$post['post_link'] = $this->Link->build('News/View', FALSE, array('id' => $post['post_id'], 'alias' => trim($post['title_alias']) . '/'));
		else
			$post['post_link'] = $this->Link->build('News/View', FALSE, array('id' => $post['post_id']));

		// Create link for tag 
		if (!empty($post['tag'])) {
			$post['tag'] = explode(',', $post['tag']);
			foreach($post['tag'] as $id => $tag) {
				$tag = trim($tag);
				if (!empty($tag)) {
					$tag = '<a href="' . $this->Link->build('News/Tag', FALSE, array('tag' => $tag)) . '" alt="Tag '. $tag .'">' . $tag . '</a>';
					$post['tag'][$id] = $tag;
				}
			}
			$post['tag'] = implode(', ', $post['tag']);
		}

		// Break post
		$break = '<div style="page-break-after: always;"><span style="display:none">&nbsp;</span></div>';
		$post['post'] = explode($break, $post['post']);
		$post['post'] = $post['post'][0];

		return $post;
	}

	public function getNewsSetting() {
		// Load from cache
		$cache = $this->Cache->get('moduleNewsSetting');

		if ($cache) {
			return $cache;
		}

		$this->Db->query("SELECT * FROM `yp_module_news_setting`");
		if ($this->Db->num_rows() == 0) {
			return array();
		}

		$data = array();
		while($row = $this->Db->fetch()) {
			$data[$row['var']] = $row['value'];
		}
		// Luu du lieu vao cache
		$this->Cache->set('moduleNewsSetting', $data);

		return $data;
	}

	public function createPostLink($post, $cat_id = 0, $fullPath = FALSE) {
		if (is_numeric($post)) {
			$post_id = intval($post);
		} else {
			$post_alias = trim((string) $post);
		}

		$cat_alias = '';
		$this->Loader->model('News/Cat');
		$cat_alias = $this->Model_News_Cat->getCatAliasPath($cat_id);

		if (isset($post_id)) {
			return $this->Link->build('News/View', $fullPath, array('id' => $post_id));
		}
		if (isset($post_alias)) {
			return $this->Link->build('News/View', $fullPath, array('alias' => $cat_alias . '/' . $post_alias . '/'));
		}
		/*
		if ((int) $this->Setting->get('post_request_type') == 0) { // /?id=5
			if (!isset($post_id)) {
				$this->Db->query("SELECT `post_id` FROM `yp_module_news`
				WHERE `alias` = '". $this->Db->e($post_alias) ."'");
				if ($this->Db->num_rows() == 0) {
					return FALSE;
				}
				$result = $this->Db->fetch();
				$post_id = $result['post_id'];
				}
			
			return $this->Link->build('News/View', $fullPath, array('id' => $post_id));
		} else { // alias, /?alias=Thong-bao/Day-la-bai-viet-test/
			// Load cat and sub cat
			// De day viet sau
			
			
			if (!isset($post_alias)) {
				$this->Db->query("SELECT `title_alias` FROM `yp_module_news`
				WHERE `post_id` = '". (int) $post_id ."'");
				if ($this->Db->num_rows() == 0) {
					return FALSE;
				}
				$result = $this->Db->fetch();
				$post_alias = $result['title_alias'];
			}
			
			return $this->Link->build('News/View', $fullPath, array('alias' => $post_alias . '/'));
		}*/
	}
	
	public function createCatLink($cat, $fullPath = FALSE) {
		if (is_numeric($cat)) {
			$cat_id = intval($cat);
		} else {
			$cat_alias = trim((string) $cat);
		}

		if (isset($cat_id)) {
			return $this->Link->build('News/Cat', $fullPath, array('id' => $cat_id));
		}
		if (isset($cat_alias)) {
			return $this->Link->build('News/Cat', $fullPath, array('alias' => $cat_alias . '/'));
		}

		return FALSE;
	}

	/**
	 *       ---> Trang chu / Thong bao chung / Doi code /
	 *                |             |              |
	 *   ID:          0             1              5
	 *
	 *  ==>   5 => array(0 => array('cat_id' => 1, 'title' => 'Thong bao chung', 'alias' => 'Thong-bao-chung'),
	 *                   1 => array('cat_id' => 5, 'title' => 'Doi code', 'alias' => 'Doi-code'));
	 */
	private $_catArray = array();
	private $_firstCatIdToSaveToCache = null;
	public function loadPathCat($catId = 0) {
		$catId = intval($catId);
		$cache = $this->Cache->get('category_path');
		if (isset($cache[$catId]) AND is_array($cache[$catId])) {
			return $cache[$catId];
		}

		if (is_null($this->_firstCatIdToSaveToCache)) {
			 $this->_firstCatIdToSaveToCache = $catId;
		}

		if ($catId == 0) {
			// Sap xep lai desc
			rsort($this->_catArray);
			// Save to cache
			if (isset($cache) AND is_array($cache)) {
				$cache[$this->_firstCatIdToSaveToCache] = $this->_catArray;
			} else {
				$cache[$this->_firstCatIdToSaveToCache] = $this->_catArray;
			}
			$this->_firstCatIdToSaveToCache = null;
			$this->Cache->set('category_path', $cache);
			$cachePath = $this->_catArray;    // Xoa self::_catAliasPath danh cho child category tiep theo
			$this->_catArray = null;           // khong the return roi xoa boi return ket thuc function 
			return $cachePath;
		}

		$this->Db->query("SELECT `cat_id`, `title`, `title_alias`, `cat_parent_id` FROM `yp_module_news_cat`
		WHERE `cat_id` = ". (int) $catId);

		$result = $this->Db->fetch();
		$this->_catArray[] = $result;

		return $this->loadPathCat($result['cat_parent_id']);
	}

	public function createBreadCrumb($cat_id, $current = FALSE) {
		$cat_id = intval($cat_id);
		// Load breadcrumb\
		$this->Loader->model('News/Index');
		$breadcrumbs = $this->Model_News_Index->loadPathCat($cat_id);
		$_breadcrumb = array();
		$_breadcrumb['parent'] = array();
		// Add home link in head of breadcrumb
		$_breadcrumb['parent'][0]['link'] = $this->Link->build('/');
		$_breadcrumb['parent'][0]['text'] = 'Home';
		foreach ($breadcrumbs as $breadcrumb) {
			if ((int) $this->Setting->get('post_request_type') == 0) {
				$row['link'] = $this->Model_News_Index->createCatLink($breadcrumb['cat_id']);
			} else {
				$row['link'] = $this->Model_News_Index->createCatLink($breadcrumb['title_alias']);
			}
			$row['text'] = $breadcrumb['title'];
			$_breadcrumb['parent'][] = $row;
		}
		if ($current != FALSE) {
			$_breadcrumb['curent'] = $current;
		} else {
			$current = $_breadcrumb['parent'][count($_breadcrumb['parent'])-1]['text'];
			unset($_breadcrumb['parent'][count($_breadcrumb['parent'])-1]);
			$_breadcrumb['curent'] = $current;
		}
		$this->Document->setBreadCrumb($_breadcrumb);
	}
}