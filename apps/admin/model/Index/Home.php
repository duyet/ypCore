<?php 
class Model_Admin_Index_Home extends ypModel {
	public function loadNewsPost($count) {
		$this->Db->query("SELECT `post_id`, `post`, `title`, 	`post_date` FROM `yp_module_news`
		ORDER BY `post_date` DESC LIMIT ". $count);
		
		$this->Loader->helper('string');
		$news = array();
		while ($row = $this->Db->fetch()) {
			$row['link'] = $this->Link->build('News/View', TRUE, array(
				'id' => $row['post_id'],
				'alias' => createAlias($row['title']),
				'referer' => 'admin_home',
			));
			$row['post_date'] = date('h:i d/m/y', $row['post_date']);
			$row['post'] = substr(skipHtmlTag($row['post']), 0, 200) . '...';
			$news[] = $row;
		}
		
		return $news;
	}
}