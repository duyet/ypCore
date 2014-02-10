<?php 
class Model_Admin_News_Listpost extends ypModel {
	/**
	 * Load post from database 
	 *
	 */
	public function loadPost($start, $limit) {
		$result = $this->Db->query('SELECT `post_id`, `title`, `title_alias`, `status`, `tag` FROM `yp_module_news` 
		ORDER BY `post_date` DESC LIMIT '. (int) $start . ', '. (int) $limit);
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}

		$posts = array();
		while ($row = $this->Db->fetch($result)) {
			$this->Db->query('SELECT `cat_id`, `title` FROM `yp_module_news_cat` 
			WHERE `cat_id` = '. (int) $row['cat_id']);
			if ($this->Db->num_rows()) {
				$row['cat'] = $this->Db->fetch();
			}

			$posts[] = $row;
		}
		
		return $posts;
	}
	
	public function loadTag($post_id = 0) {
		$post_id = (int) $post_id;
		
		$this->Db->query("SELECT * FROM `yp_module_news_tag`
		WHERE `post_id` = $post_id");
		if ($this->Db->num_rows() == 0) {
			return array();
		}
		
		$tags = array();
		while ($row = $this->Db->fetch()) {
			$row['link'] = $this->Link->build('News/Tag', FALSE, array('tag' => urlencode($row['tag'])));
			$tags[] = $row;
		}
		
		return $tags;
	}
}