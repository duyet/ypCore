<?php 
class Controller_System_Firewall extends ypController {
	public function Index() {
		if ($this->Cookie->get('active_firewall') == md5('active_firewall')) {
			return FALSE;
		}

		if ($this->Request->REQUEST['is_human'] == 'true') {
			$this->Cookie->set('active_firewall', md5('active_firewall'));
			return FALSE;
		}
		
		$this->Link->addParam('is_human', 'true');
		$submit_link = $this->Link->build($this->Link->this(), FALSE, $this->Link->getParams());
		$this->set('submit_link', $submit_link);

		if (!$this->Request->referer) {
			$this->loadLanguage('System/Firewall');

			$this->setTemplate('layout/Firewall.php');
			die($this->render());
		}
	}
}