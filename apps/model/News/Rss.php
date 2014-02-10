<?php 
class Model_News_Rss extends ypModel {
	public function getRssItem($max_post = 20) {
		$result = $this->Db->query("SELECT * FROM `yp_module_news` 
		ORDER BY `post_date` DESC");
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}
		
		$posts = array();
		$this->Loader->model('News/Index');
		while ($row = $this->Db->fetch($result)) {
			if ((int) $this->Setting->get('post_request_type') == 0) {
				$row['link'] = $this->Model_News_Index->createPostLink($row['post_id'], $row['cat_id'],TRUE);
			} else {
				$row['link'] = $this->Model_News_Index->createPostLink($row['title_alias'], $row['cat_id'], TRUE);
			}
			$row['description'] = '';
			if ((int) $this->Setting->get('rss_content_maxchars') != 0) {
				$row['content'] = substr($row['post'], 0, (int) $this->Setting->get('rss_content_maxchars'));
			} else {
				$row['content'] = $row['post'];
			}
			
			$posts[] = $row;
		}
		
		return $posts;
	}
}