<?php 
class Model_News_Tag extends ypModel {
	public function loadPost($tag = '', $num_post = 10) {
		if (empty($tag)) return FALSE;

		// Load from cache
		$cache = $this->Cache->get('postInTag' . $tag);
		if ($cache) {
			return $cache;
		}

		$num_post = (int) $num_post;

		$this->Db->query("SELECT * FROM `yp_module_news`
			WHERE `tag` LIKE '%" . $this->Db->e($tag) . "%' 
			LIMIT 0, $num_post");
		if ($this->Db->num_rows() == 0) {
			return array();
		}

		$data = array();
		while($row = $this->Db->fetch()) {
			$data[] = $this->progressDataPost($row);
		}

		// Set cache
		$this->Cache->set('postInTag' . $tag, $data);

		return $data;
	}

	public function progressDataPost($post = array()) {
		$post['post_date_tag'] = date('d-m-y', $post['post_date']);
		$post['post_date_text'] = date('d M Y', $post['post_date']);
		$post['post'] = htmlspecialchars_decode((string) $post['post']);
		$post['post_link'] = $this->Link->build('News/View', FALSE, array('id' => $post['post_id']));

		// Break post
		$break = '<div style="page-break-after: always;"><span style="display:none">&nbsp;</span></div>';
		$post['post'] = explode($break, $post['post']);
		$post['post'] = $post['post'][0];

		return $post;
	}
}