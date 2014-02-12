<?php 
class Model_News_View extends ypModel {
	public function load($id) {
		$this->Db->query("SELECT * FROM `yp_module_news`
		WHERE `post_id` = ". (int) $id . " AND `status` = 1");

		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}

		$news = $this->Db->fetch();

		return $news;
	}
	
	public function updateCounter($id) {
		$this->Db->query("UPDATE `yp_module_news`
		SET `view_count` = `view_count` + 1 
		WHERE `post_id` = ". (int) $id);
	}
	
	public function getTags($id) {
		$tags = array();
		$this->Db->query("SELECT * FROM `yp_module_news_tag`
		WHERE `post_id` = ". (int) $id);
		if ($this->Db->num_rows() == 0) {
			return $tags;
		}
		
		while ($row = $this->Db->fetch()) {
			$tags[] = $row['tag'];
		}
		
		return $tags;
	}
	
	public function loadPostIdFromAlias($alias) {
		$alias = preg_replace('/^[^A-z0-9-_.]+$/', '', $alias);
		$this->Db->query("SELECT `post_id` FROM `yp_module_news` 
		WHERE `title_alias` = '". $this->Db->e($alias) ."'");

		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}

		$data = $this->Db->fetch();

		return (int) $data['post_id'];
	}
}