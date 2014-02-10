<?php 
class Controller_System_Footer extends ypController {
	public function Index() {
		$this->loadLanguage('System/Footer');

//		$this->set('phrase_js_url', $this->Link->build('System/Js', TRUE, array('_phrase' => 'global')));
		$js_addon = '';
		$js = $this->Document->getJavascript();
		foreach($js as $_js) {
			$js_addon .= '<script src="'. $this->get('template_url') . '/' . $_js .'"></script>';
		}
		$this->set('js_addon', $js_addon);
		$this->set('ypcore_version', $this->Setting->get('version'));
		// Google analytics
		$this->set('google_analytics_code', '');
		if ($this->Setting->get('google_analytics_code')) {
			$this->set('google_analytics_code', $this->Setting->get('google_analytics_code'));
		}

		// Stat img link
		$this->set('system_stat', '<img src="'. $this->Link->build('System/Stat') .'" width="0" height="0" style="display:none"/>');

		$this->set('is_debug', FAlSE);
		$this->set('debug_db_info', FAlSE);
		if ($this->Db->isDebug() AND $this->User->isAdmin()) {
			$this->set('is_debug', TRUE);
			$this->set('debug_time', __DEBUG::getInstance()->getPageLoadTime(START_TIME));
			
			$this->set('debug_db_info', '');
			if (isset($this->Request->GET['explain_db_query']) AND $this->Request->GET['explain_db_query'] == '1') {
				$this->set('debug_db_info', $this->Db->get_debugInfo());
				$this->Link->addParam('explain_db_query', '0');
			} else {
				$this->Link->addParam('explain_db_query', '1');
			}
			$this->set('explain_link', $this->Link->build($this->Link->this(), FALSE, $this->Link->getParams()));
		}

		$this->setTemplate('layout/Footer.php');
		$this->render();
	}
}