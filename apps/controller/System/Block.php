<?php 
class Controller_System_Block extends ypController {
	/**
	 * List of left block
	 * 
	 * @access 	private 
	 * @author 	LvDuit
	 * @date 	6/2/2014
	 */
	public function LeftBlock() {
		$list = $this->Setting->get('list_left_block');
		if (empty($list) OR count($list) == 0) return;

		$list[] = array('title' => 'Block title',
						'id' => 1);
	}

	/**
	 * List of right block
	 * 
	 * @access 	private 
	 * @author 	LvDuit
	 * @date 	6/2/2014
	 */
	public function RightBlock() {

	}

	/**
	 * Bottom block
	 *
	 * @access 	private 
	 * @author 	LvDuit
	 * @date 	6/2/2014
	 */
	public function BottomBlock() {
		
	}
}