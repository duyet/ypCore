<?php 
class Controller_Link_Index extends ypController {
	public function Index() {
		
	}
	
	public function actionRedirect() {
		$link = $this->Request->GET['url'];

		if (!$link) {
			$this->redirect($this->Link->build('Index/Home', TRUE));
		}

		$link = urldecode($link);
		// Counter
		// ===================
		
		$this->redirect($link);
	}
}