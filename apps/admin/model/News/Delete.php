<?php class Model_Admin_News_Delete extends ypModel {	public function deletePost($postId) {		return $this->Db->query("DELETE FROM `yp_module_news`		WHERE `post_id` = ". (int) $postId);	}}