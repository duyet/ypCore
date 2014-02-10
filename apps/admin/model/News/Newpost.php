<?php 
class Model_Admin_News_Newpost extends ypModel {
	public function loadCat() {
		$result = $this->Db->query('SELECT `cat_id`, `title` FROM `yp_module_news_cat` 
		WHERE `cat_parent_id` = 0');
		if ($this->Db->num_rows() == 0) {
			return array();
		}
		
		$cats = array();
		while($row = $this->Db->fetch($result)) {
			if ($this->loadCatChild($cat_id)) {
				$row['child'] = $this->loadCatChild($cat_id);
			}
			$cats[] = $row;
		}
		
		return $cats;
	}
	
	public function loadCatChild($cat_id) {
		if ($cat_id == 0) return FALSE;

		$this->Db->query('SELECT `cat_id`, `title` FROM `yp_module_news_cat`
		WHERE `cat_parent_id` = '. (int) $cat_id);
		if ($this->Db->num_rows() == 0) {
			return FAlSE;
		}
		
		$cats = array();
		while($row = $this->Db->fetch()) {
			if ($this->loadCatChild($cat_id)) {
				$row['child'] = $this->loadCatChild($cat_id);
			}
			$cats[] = $row;
		}
	}
}