<?php 
class Model_Admin_News_Listcat extends ypModel {
	public $level = 1;
	public function loadCat($parent_id = 0) {
		$parent_id = intval($parent_id);
		$result = $this->Db->query('SELECT `cat_id`, `title`, `cat_parent_id` FROM `yp_module_news_cat`');
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}
		
		$_cats = array();
		$cats = array();
		while ($row = $this->Db->fetch($result)) {
			$_cats[] = $row;
		}
		
		
		
		return $cats;
	}
}