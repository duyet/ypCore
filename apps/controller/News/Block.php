<?php 
class Controller_News_Block extends ypController {
	public function Index() {
		$this->redirect($this->Link->build('News/Index'));
	}

	/** =============================
	 * List block of News module
	 * ============================== */

	/**
	 * Popular news
	 * 
	 * @access 	private 
	 * @author 	LvDuit
	 * @date 	6/2/2014
	 */
	private function Popular() {
		$post_id = $this->_data['post'];
	}
}