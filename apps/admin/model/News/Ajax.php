<?php 
class Model_Admin_News_Ajax extends ypModel {
	public function getLastId() {
		$this->Db->query('SELECT `post_id` FROM `yp_module_news`
		ORDER BY `thread_id` DESC LIMIT 1');

		if ($this->Db->num_rows() == 0) {
			return 0;
		}

		$result = $this->Db->fetch();
		return intval($result['thread_id']);
	}
}