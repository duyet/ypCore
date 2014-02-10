<?php 
class Controller_System_Header extends ypController {
	public function Index() {
		$this->loadLanguage('System/Header');
		$this->Response->addHeader('Content-Type: text/html; charset=utf-8');

		$this->set('js_var', '');
		$this->_data['js_var'] .= "var site_domain = '". $this->Request->domain ."'; ";
		$this->_data['js_var'] .= "var site_path = '". $this->Request->siteUrl ."'; ";
		$this->_data['js_var'] .= "var template_url = '". $this->Request->siteUrl . '/' . APP_DIR . '/view/' . $this->_templateName ."'; ";

		// Title
		$title = $this->Setting->get('site_title');
		if ($this->Document->getTitle()) {
			$title = $this->Document->getTitle() . ' - ' . $title;
		}
		$this->set('title', $title);
		
		// Keywork
		$this->set('keywork', '');
		if ($this->Document->getKeywork()) {
			$this->set('keywork', $this->Document->getKeywork());
		}
		
		// Description
		$this->set('description', $this->Setting->get('site_description'));
		if ($this->Document->getDescription()) {
			$this->set('description', $this->Document->getDescription());
		}
		
		// Meta
		$this->set('meta', '');
		$metaes = $this->Document->getMeta();
		if ($metaes) {
			$_meta = '';
			foreach($metaes as $meta) {
				$_meta .= '    <meta ';
				if ($meta['http-equiv']) {
					$_meta .= 'http-equiv="' . $meta['http-equiv'] . '" ';
				}
				if ($meta['name']) {
					$_meta .= 'name="' . $meta['name'] . '" ';
				}
				$_meta .= 'content="'. $meta['content'] .'" />';
				$_meta .= "\n";
			}
			if ($_meta) {
				$this->set('meta', $_meta);
			}
		}

		// Base site meta tag
		$this->set('site_base', $this->Request->siteUrl);

		$this->set('site_title', $this->Setting->get('site_title'));
		$this->set('site_description', $this->Setting->get('site_description'));

		// No script
		$this->set('isNoscript', $this->Request->GET['noscript'] == '1' ? TRUE : FALSE);
		$this->Link->addParam('noscript', '1');
		$this->set('noscript_link', $this->Link->build($this->Link->this(), FALSE, $this->Link->getParams()));

		// Add this
		if ($this->Setting->get('addthis', 'int') == 1 AND $this->Setting->get('addthis_id') != '') {
			$this->set('addthis_active', TRUE);
			$this->set('addthis_id', $this->Setting->get('addthis_id'));
		}

		$this->setTemplateChild(array(
			'System/Menu'
		));
		$this->setTemplate('layout/Header.php');

		return $this->render();
	}
}