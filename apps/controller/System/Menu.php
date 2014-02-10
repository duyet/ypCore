<?php 
class Controller_System_Menu extends ypController {
	public function Index() {
		$this->loadLanguage('System/Menu');

		
		$this->setTemplate('layout/Menu.php');
		$this->render();
	}
	
	public function buildMenu($link, $text, $sub = FALSE) {
		if ($sub == FALSE) {
			return $this->Link->a($link, $text);
		}
		
		$link = '<a class="dropdown-toggle" href="'. $this->Link->build($link) .'">';
		$link .= $text . ' <b class="caret"></b></a>';
		return $link;
	}
}