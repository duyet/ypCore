<?php
class Controller_System_Breadcrumb extends ypController {
	public function Index() {
		$breadcrumb = $this->Document->getBreadcrumb();

		$this->set('breadcrumb', $breadcrumb);
		$this->setTemplate('layout/Breadcrumb.php');
		$this->render();
	}
}