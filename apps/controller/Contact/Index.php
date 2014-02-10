<?php 
class Controller_Contact_Index extends ypController {
	public function Index() {
		$this->redirect($this->Link->build('Index/Home', TRUE));
	}
}
