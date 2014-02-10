<?php 
class Model_News_Comment extends ypModel {
	public function loadComment($id) {
		$this->Db->query('SELECT * FROM `yp_module_news_comment`
		WHERE `post_id` = '. (int) $id);
		
		if ($this->Db->num_rows() == 0) {
			return FALSE;
		}
		
		$comments = array();
		while ($row = $this->Db->fetch()) {
			$row['comment'] = nl2br($row['comment']);
			if ((int) $row['user_id'] == 0) {
				$row['user_link'] = 'mail:' . $row['email'];
			} else {
				$row['user_link'] = $this->Link->build('User/User', TRUE, array('userid' => $row['user_id']));
			}
			$row['date'] = date('h:i d/m/Y', $row['date']);

			$comments[] = $row;
		}
		
		return $comments;
	}
	
	public function addComment($data) {
		$this->Db->query("INSERT INTO `yp_module_news_comment` (`post_id`, `user_id`, `username`, `email`, `comment`, `date`) 
		VALUES (". (int) $data['post_id'].", ". (int) $data['user_id'] .", '". $this->Db->e($data['username']) ."', '". $this->Db->e($data['email']) ."', '". $this->Db->e($data['comment']) ."', ". time() .")");
	}
	
	public function deleteComment($comment_id) {
		$comment_id = (int) $comment_id;

		return $this->Db->query("DELETE FROM `yp_module_news_comment` WHERE `id` = $comment_id");
	}
}