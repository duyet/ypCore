<?php 
class Controller_User_Index extends ypController {
	public function Index() {
		$this->redirect($this->Link->build('User/Account', TRUE));
	}
}