<?php 
class Controller_Admin_System_Header extends ypAdminController {
	public function Index() {
		$this->loadLanguage('Admin/System/Header');

		$this->set('admin_title', $this->Document->getTitle());

		$this->set('description', '');
		if ($this->Document->getDescription() != '') {
			$this->set('description', $this->Document->getDescription());
		}
		
		$this->set('keywork', '');
		if ($this->Document->getKeywork() != '') {
			$this->set('keywork', $this->Document->getKeywork());
		}
		
		// Google analytics
		$this->set('google_analytics_code', '');
		if ($this->Setting->get('google_analytics_code')) {
			$this->set('google_analytics_code', $this->Setting->get('google_analytics_code'));
		}

		$this->set('css_addon', '');
		if ($this->Document->getCss()) {
			$css = $this->Document->getCss();
			foreach($css as $cssLink) {
				$this->_data['css_addon'] .= '<link rel="stylesheet" href="'. $this->_data['template_url'] . '/' . $cssLink .'" />' . "\n";
			}
		}
		
		$this->set('javascript_addon', '');
		if ($this->Document->getJavascript() != '') {
			$javascript = $this->Document->getJavascript();
			foreach($javascript as $jsLink) {
				$this->_data['javascript_addon'] .= '<script type="text/javascript" src="'. $this->_data['template_url'] . '/' . $jsLink .'" ></script>' . "\n";
			}
		}
		
		// Admin name
		$this->set('username', $this->User->get('username'));

		// Help scroller
		$this->loadLanguage('Admin/System/HelpScroller');
		$this->randomArray($this->_data['help_scroller']);
		$this->set('help_scroller', $this->_data['help_scroller']);
		
		// Menu link 
		$menu['home'] = $this->Link->build('Admin/Index/Home', FALSE);
			$menu['front_site'] = $this->Link->build('Index/Home', FALSE);
			$menu['front_module_news'] = $this->Link->build('News/Index', FALSE);
		$menu['setting'] = $this->Link->build('Admin/Setting/Index', FALSE);
			$menu['site_setting'] = $this->Link->build('Admin/Setting/Site', FALSE);
			$menu['urlandhtml_setting'] = $this->Link->build('Admin/Setting/UrlAndHtml', FALSE);
			$menu['server_setting'] = $this->Link->build('Admin/Setting/Server', FALSE);
			$menu['template_setting'] = $this->Link->build('Admin/Setting/Template', FALSE);
			$menu['security_setting'] = $this->Link->build('Admin/Setting/Security', FALSE);
			$menu['user_setting'] = $this->Link->build('Admin/Setting/User', FALSE);
		$menu['module'] = $this->Link->build('Admin/Module/Index', FALSE);
			$menu['module_home'] = $this->Link->build('Admin/Module/Home', FALSE);
			$menu['module_download'] = $this->Link->build('Admin/Module/Download', FALSE);
			$menu['module_user'] = $this->Link->build('Admin/Module/User', FALSE);
		$menu['admin_tools'] = $this->Link->build('Admin/Tools/Index', FALSE);
			$menu['admin_tools_backup'] = $this->Link->build('Admin/Tools/Backup', FALSE);
			$menu['admin_tools_filemanager'] = $this->Link->build('Admin/Tools/Filemanager', FALSE);
			$menu['admin_tools_cache'] = $this->Link->build('Admin/Tools/Cache', FALSE);
			$menu['admin_tools_fix'] = $this->Link->build('Admin/Tools/FixSystem', FALSE);
		$menu['admin'] = $this->Link->build('Admin/Admin/Index', FALSE);
			$menu['admin_permission'] = $this->Link->build('Admin/Admin/Permission', FALSE);
			$menu['admin_logs'] = $this->Link->build('Admin/Admin/Logs', FALSE);
			$menu['admin_logout'] = $this->Link->build('Admin/Logout/Index', FALSE);
		$menu['newpost'] = $this->Link->build('Admin/News/Newpost', FALSE);
		$menu['listpost'] = $this->Link->build('Admin/News/Listpost', FALSE);

		$this->set('is_login', $this->Document->get('is_login'));
		$this->set('admin', $this->User->getUserInfo());
		$this->set('menu', $menu);

		$this->setTemplateChild(array());
		$this->setTemplate('layout/Header.php');
		return $this->render();
	}
	
	private function randomArray(&$array) {
		if (!$array OR is_null($array)) return FALSE;
		$new_array = array();
		$count = count($array) - 1;
		
		while($count) {
			$random_key = array_rand($array);
			$new_array[] = $array[$random_key];
			unset($array[$random_key]);
			$count--;
		}
		
		$array = $new_array;
	}
}