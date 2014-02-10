<?php 
class Model_News_Cat extends ypModel {
	public function loadCat($catId = 0) {
		$result = $this->Db->query('SELECT * FROM `yp_module_news_cat`
		WHERE `cat_parent_id` = '. (int) $catId);
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}

		$cat = array();
		$this->Loader->model('News/Index');
		while($row = $this->Db->fetch($result)) {
			// Cat link 
			if ((int) $this->Setting->get('post_request_type') == 1) {
				$cat_alias = $this->getCatAliasPath($row['cat_id']);
				$row['link'] = $this->Model_News_Index->createCatLink($cat_alias);
			} else {
				$row['link'] = $this->Model_News_Index->createCatLink($row['cat_id']);
			}

			// Load child cat
			$result_childcat = $this->Db->query('SELECT `cat_id`, `title`, `title_alias` FROM `yp_module_news_cat`
			WHERE `cat_parent_id` = '. $row['cat_id']);
			if ($this->Db->num_rows() > 0) {
				while ($_row = $this->Db->fetch($result_childcat)) {
					if ((int) $this->Setting->get('post_request_type') == 1) {
						$cat_alias = $this->getCatAliasPath($_row['cat_id']);
						$_row['link'] = $this->Model_News_Index->createCatLink($cat_alias);
					} else {
						$_row['link'] = $this->Model_News_Index->createCatLink($_row['cat_id']);
					}
					$row['child'][] = $_row;
				}
			} else {
				$row['child'] = array();
			}
	
			// Load some newest post
			$this->Loader->helper('string');
			$this->Loader->model('News/Index');
			$this->Db->query('SELECT `title`, `post_id`, `cat_id` FROM `yp_module_news`
			WHERE `cat_id` = '. $row['cat_id'] . ' 
			ORDER BY `post_id` DESC LIMIT 4');
			if ($this->Db->num_rows() == 0) {
				$row['newest_post'] = array();
			} else {
				while($_row = $this->Db->fetch()) {
					if ((int) $this->Setting->get('post_request_type') == 1) {
						$link = $this->Model_News_Index->createPostLink(createAlias($_row['title']), $_row['cat_id'], TRUE);
					} else {
						$link = $this->Model_News_Index->createPostLink($_row['post_id'], $_row['cat_id'], TRUE);
					}
					$text = (strlen($_row['title']) > 35) ? substr($_row['title'], 0, 35) . '...' : $_row['title'];
					$title = $_row['title'];
					$row['newest_post']['cat_box'][] = '<a href="'. $link .'" title="'. $title .'">' . $text . '</a>';
					$row['newest_post']['cat_line'][] = '<a href="'. $link .'" title="'. $title .'">' . $_row['title'] . '</a>';
				}
			}
			$cat[] = $row;
		}

		return $cat;
	}

	private $_catAliasPath = '';
	private $_firstCatIdToSaveToCache = null;
	public function getCatAliasPath($catId = 0) {
		$catId = intval($catId);
		if (is_null($this->_firstCatIdToSaveToCache)) {
			 $this->_firstCatIdToSaveToCache = $catId;
		}
		// First: load from cache
		$cache = $this->Cache->get('cat_alias_path');
		if (isset($cache[$catId]) AND is_string($cache[$catId])) {
			return $cache[$catId];
		}

		// And if not cache, load from database
		if ($catId == 0) {
			// Save to cache
			if (isset($cache) AND is_array($cache)) {
				$cache[$this->_firstCatIdToSaveToCache] = $this->_catAliasPath;
			} else {
				$cache[$this->_firstCatIdToSaveToCache] = $this->_catAliasPath;
			}
			$this->_firstCatIdToSaveToCache = null;
			$this->Cache->set('cat_alias_path', $cache);
			$alias = $this->_catAliasPath;    // Xoa self::_catAliasPath danh cho child category tiep theo
			$this->_catAliasPath = '';      // khong the return roi xoa boi return ket thuc function 
			return $alias;
		}
		$this->Db->query("SELECT `title_alias`, `cat_parent_id` FROM `yp_module_news_cat`
		WHERE `cat_id` = ". (int) $catId);

		$result = $this->Db->fetch();
		if (!empty($this->_catAliasPath)) {
			$this->_catAliasPath = $result['title_alias'] . '/' . $this->_catAliasPath;
		} else {
			$this->_catAliasPath = $result['title_alias'];
		}

		return $this->getCatAliasPath($result['cat_parent_id']);
	}

	public function IsCat($catId) {
		$this->Db->query('SELECT 1 FROM `yp_module_news_cat`
		WHERE `cat_id` = '. (int) $catId);

		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}

		return TRUE;
	}

	/**
	public function numPost($catId) {
		$result = $this->Db->query('SELECT COUNT(*) FROM `yp_module_news`
		WHERE `cat_id` = '. (int) $catId);
		
		$result = $this->Db->fetch($result, 1);

		return $result[0];
	}
	**/

	public function loadPost($catId) {
		$result = $this->Db->query('SELECT `post_id`, `title`, `title_alias`, `post_date`, `cat_id` FROM `yp_module_news`
		WHERE `cat_id` = '. (int) $catId . '
		ORDER BY `post_id` DESC LIMIT 10'); 
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}

		$post = array();
		$this->Loader->model('News/Index');
		while ($row = $this->Db->fetch($result)) {
			if ((int) $this->Setting->get('post_request_type') == 1) {
				$row['link'] = $this->Model_News_Index->createPostLink($row['title_alias'], $row['cat_id'], FALSE);
			} else {
				$row['link'] = $this->Model_News_Index->createPostLink($row['post_id'], $row['cat_id'], FALSE);
			}

			$post[] = $row;
		}

		return $post;
	}
	
	public function loadTopCatId($topCatAlias) {
		$topCatAlias = trim((string) $topCatAlias);
		
		$this->Db->query("SELECT `cat_id` FROM `yp_module_news_cat` 
		WHERE `title_alias` = '". $this->Db->e($topCatAlias) ."'");
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}

		$result = $this->Db->fetch();

		return intval($result['cat_id']);
	}
	
	public function getCatIdFromCatAlias($alias, $parent_id = 0) {
		$this->Db->query("SELECT `cat_id` FROM `yp_module_news_cat`
		WHERE `title_alias` = '". $this->Db->e($alias) ."' AND `cat_parent_id` = ". (int) $parent_id);
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}
		$result = $this->Db->fetch();
		
		return $result['cat_id'];
	}
}