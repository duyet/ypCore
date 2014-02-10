<?php 
class Controller_Admin_Setting_Template extends ypAdminController {
	public function Index() {
		$this->checkLogin();

		$this->loadLanguage('Admin/Setting/Template');
		if (isset($this->Request->POST['submit'])) {
			$new_template = $this->Request->POST['template'];
			$template = $this->Setting->get('template_list');
			if (!in_array($new_template, $template)) {
				$this->redirect($this->Link->build('Admin/Setting/Template'));
			}

			$new_admin_template = $this->Request->POST['admin_template'];
			$admin_template = $this->Setting->get('admin_template_list');
			if (!in_array($new_admin_template, $admin_template)) {
				$this->redirect($this->Link->build('Admin/Setting/Template'));
			}

			$cacheTemplate = $this->Request->POST['cache_template'] == '1' ? 1 : 0;

			$this->Setting->set('template', $new_template);
			$this->Setting->set('admin_template', $new_admin_template);
			$this->Setting->set('cache_template', $cacheTemplate);
			
			// Save logs
			$this->Loader->model('Admin/Admin/Admin');
			$this->Model_Admin_Admin_Admin->adminLogs($this->User->getInfo('username'), 'Edit Template Setting.');
			
			$this->set('success', $this->_data['text_success']);
		}
		
		$this->Loader->model('Admin/Setting/Template');
		$template_dir = $this->Model_Admin_Setting_Template->getAllTemplateDir();
		// Update database
		if ($template_dir) {
			$this->Setting->set('template_list', $template_dir);
		}
		
		$admin_template_dir = $this->Model_Admin_Setting_Template->getAllAdminTemplateDir();
		if ($admin_template_dir) {
			$this->Setting->set('admin_template_list', $admin_template_dir);
		}
		
		$template = $this->Model_Admin_Setting_Template->reloadTemplateFolder();
		$admin_template = $this->Model_Admin_Setting_Template->reloadAdminTemplateFolder();
		
		$this->Document->setTitle($this->_data['title']);
		$this->set('form_action', $this->Link->build('Admin/Setting/Template'));
		$this->set('template', $template);
		$this->set('admin_template', $admin_template);
		$this->set('current_template', $this->Setting->get('template'));
		$this->set('current_admin_template', $this->Setting->get('admin_template'));
		$this->set('cache_template', $this->Setting->get('cache_template'));
		$this->set('menu_active', 'template');
		$this->set('layout_setting_link', $this->Link->build('Admin/Setting/Template/Layout'));
		$this->setTemplate('module/Setting/Template.php');
		$this->setTemplateChild(array(
			'Admin/Setting/Leftmenu',
			'Admin/System/Header', 
			'Admin/System/Footer'
		));
		$this->Response->setOutput($this->render());
	}
	
	public function Layout() {
		$this->checkLogin();

		$modules = array();
		$_modules = $this->Setting->get('modules');
		foreach ($_modules as $_module) {
			$modules[] = $_module['dir'];
		}
		$module = $this->Request->GET('module');
		if (!$module) {
			$this->redirect($this->Link->build('Admin/Setting/Template/Layouts'));
		}
		if (isset($module) AND !in_array($module, $modules)) {
			trigger_error('Error: Module <b>'. $module .'</b> not exists!');
		}

		/* Layout: 
		 *         + content
		 *         + left-content
		 *         + content-right
		 *         + left-content-right
		 */
		$accept_layout = array(
			'',                      // Do not use 0
			'content',               // 1
			'left-content',          // 2
			'content-right',         // 3
			'left-content-right'     // 4
		);

		$layouts = $this->Setting->get('layouts');

		if (!$layouts[$module]) {
			$layouts[$module] = 1; // layout 'content'
			$this->Setting->set('layouts', $layouts);
		}
		
		if ($this->Request->POST('layout')) {
			$layoutId = (int) $this->Request->POST('layout');
			if ($layoutId == 0 OR $layoutId > 4) { // error 
				$layoutId = 1; // default
			}
			$layouts[$module] = $layoutId;
			$this->Setting->set('layouts', $layouts);
			$this->set('success', $this->_data['text_set_layout_success']);
		}
		
		$layout = $layouts[$module];
		
		$this->loadLanguage('Admin/Setting/Layout');
		$this->setTemplate('module/Setting/TemplateLayout.php');
		$this->Document->setTitle(sprintf($this->_data['title'], $module));
		$this->set('form_action', $this->Link->build($this->Link->this(), FALSE, $this->Link->getParams()));
		$this->set('text_set_layout_for', sprintf($this->_data['text_set_layout_for'], $module));
		$this->set('return_module_manager_link', $this->Link->build('Admin/Module/ModuleManager'));
		$this->set('layout', $layout);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
			'Admin/Setting/Template/ModuleLeftMenu',
		));
		$this->Response->setOutput($this->render());
	}
	
	public function Layouts() {
		$this->checkLogin();
		
		$modules = array();
		$_modules = $this->Setting->get('modules');
		foreach ($_modules as $_module) {
			$modules[] = $_module['dir'];
		}
		
		$accept_layout = array(
			'',                      // Do not use 0
			'content',               // 1
			'left-content',          // 2
			'content-right',         // 3
			'left-content-right'     // 4
		);
		
		$layouts = $this->Setting->get('layouts');
		$_layouts = array();
		foreach ($modules as $module) {
			if (!$layouts[$module]) {
				$_layouts[$module] = 1;
			} else {
				$_layouts[$module] = $layouts[$module];
			}
		}
		if (count($_layouts) > count($layouts)) { // Database not include some new module, update it
			$this->Setting->set('layouts', $_layouts);
			$layouts = $_layouts;
		}

		$this->loadLanguage('Admin/Setting/Layout');
		if ($this->Request->POST('layout')) {
			$requestLayout = (array) $this->Request->POST['layout'];
			foreach ($requestLayout as $_requestLayoutName => $_requestLayoutValue) {
				$_requestLayoutValue = intval($_requestLayoutValue);
				if (!in_array($_requestLayoutName, array_keys($layouts))) {
					continue;
				}
				if ($_requestLayoutValue == 0 OR $_requestLayoutValue > 4) {
					$_requestLayoutValue = 1; // default --- content 
				}
				$layouts[$_requestLayoutName] = $_requestLayoutValue;
			}
			$this->Setting->set('layouts', $layouts);
			$this->set('success', $this->_data['text_set_layout_success']);
		}

		$setting_layout_link = array();
		foreach ($layouts as $moduleName => $layout) {
			$setting_layout_link[$moduleName] = $this->Link->build('Admin/Setting/Template/Layout', FALSE,
				array('module' => $moduleName));
		}
		$this->set('setting_layout_link', $setting_layout_link);

		$this->setTemplate('module/Setting/TemplateLayouts.php');
		$this->Document->setTitle($this->_data['title2']);
		$this->set('form_action', $this->Link->build($this->Link->this(), FALSE, $this->Link->getParams()));
		$this->set('text_set_layout_for', sprintf($this->_data['text_set_layout_for'], $module));
		$this->set('return_module_manager_link', $this->Link->build('Admin/Module/ModuleManager'));
		$this->set('layouts', $layouts);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
			'Admin/Setting/Template/ModuleLeftMenu',
		));
		$this->Response->setOutput($this->render());
	}
	
	public function ModuleLeftMenu() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Module/ModuleManager');
		
		$link = array();
		$modules = $this->Setting->get('modules');

		foreach ($modules as $module) {
			$link[] = $this->Link->a(array('Admin/Setting/Template/Layout', array('module' => $module['dir'])), 
				$module['info']['module_name']);
		}
		
		$this->set('link', $link);
		$this->setTemplate('module/Module/ModuleLeftMenu.php');
		$this->render();
	}
}