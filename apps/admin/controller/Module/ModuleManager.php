<?php 
class Controller_Admin_Module_ModuleManager extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Module/ModuleManager');
		
		$modules = $this->_reloadModuleFolder();
		$active_link = array();
		$layout_link = array();
		foreach ($modules as $module) {
			$layout_link[$module['dir']] = $this->Link->a(array('Admin/Setting/Template/Layout', 
					array('module' => $module['dir'])), $this->_data['text_layout_link']);
			if (!$module['active']) {
				$active_link[$module['dir']] = $this->Link->a(array('Admin/Module/ModuleManager/InstallModule', 
					array('module' => $module['dir'])), $this->_data['text_install_link']);
			} else {
				$active_link[$module['dir']] = $this->Link->a(array('Admin/Module/ModuleManager/UnInstallModule', 
					array('module' => $module['dir'])), $this->_data['text_uninstall_link']);
			}
		}
		$this->Setting->set('modules', $modules);
		$this->set('modules', $modules);
		$this->set('active_link', $active_link);
		$this->set('layout_link', $layout_link);
		$this->set('reload_module_list_link', $this->Link->build($this->Link->this()));
		
		$this->setTemplate('module/Module/ListModule.php');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplateChild(array(
			'Admin/System/Header', 
			'Admin/System/Footer',
			'Admin/Module/ModuleManager/ModuleLeftMenu',
		));
		$this->Response->setOutput($this->render());
	}
	
	public function InstallModule() {
		$this->checkLogin();
		$modules = array();
		$_modules = $this->Setting->get('modules');
		foreach ($_modules as $_module) {
			$modules[] = $_module['dir'];
		}
		$module = $this->Request->GET('module');
		if (!$module) {
			$this->redirect($this->Link->build('Admin/Module/ModuleManager'));
		}

		if (!in_array($module, $modules)) {
			trigger_error('Error: Module <b>'. $module .'</b> not exists!');
		}

		// Set 
		$this->Setting->set('module_' . $module . '_active', 1);

		$this->set('redirect_to', $this->Link->build('Admin/Module/ModuleManager'));
		$this->setTemplate('layout/Redirect.php');
		$this->Response->setOutput($this->render());
	}

	public function UnInstallModule() {
		$this->checkLogin();
		
		$modules = array();
		$_modules = $this->Setting->get('modules');
		foreach ($_modules as $_module) {
			$modules[] = $_module['dir'];
		}
		$module = $this->Request->GET('module');
		if (!$module) {
			$this->redirect($this->Link->build('Admin/Module/ModuleManager'));
		}

		if (!in_array($module, $modules)) {
			trigger_error('Error: Module <b>'. $module .'</b> not exists!');
		}

		// Set 
		$this->Setting->set('module_' . $module . '_active', 0);

		$this->set('redirect_to', $this->Link->build('Admin/Module/ModuleManager'));
		$this->setTemplate('layout/Redirect.php');
		$this->Response->setOutput($this->render());
	}

	public function ModuleLeftMenu() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Module/ModuleManager');
		
		$link = array();
		$modules = $this->Setting->get('modules');

		foreach ($modules as $module) {
			$link[] = $this->Link->a('Admin/Module/' . $module['dir'] . '/Setting', $module['info']['module_name'], array('target' => '_blank'));
		}
		
		$this->set('link', $link);
		$this->setTemplate('module/Module/ModuleLeftMenu.php');
		$this->render();
	}

	private function _reloadModuleFolder() {
		$modules = array();
		$dir = scandir(YPCORE_ROOT . '/' . APP_CONTROLLER_DIR);
		if (empty($dir)) {
			return array();
		}
		
		$this->Loader->model('Admin/Module/ModuleManager');
		$not = array('.', '..', 'index.html', '.htaccess');
		foreach ($dir as $file) {
			if (in_array($file, $not)) {
				continue;
			}
			if (!is_dir(YPCORE_ROOT . '/' . APP_CONTROLLER_DIR . '/' . $file)) {
				continue;
			}
			if (!file_exists (YPCORE_ROOT . '/' . APP_CONTROLLER_DIR . '/' . $file . '/IsModule.php')) {
				continue;
			}
			if (!preg_match('/^([A-z0-9-_]+)$/i', $file)) {
				continue;
			}
			require_once (YPCORE_ROOT . '/' . APP_CONTROLLER_DIR . '/' . $file . '/IsModule.php');
			$active = $this->Model_Admin_Module_ModuleManager->checkModuleActive($file);
			$modules[] = array(
				'dir' => $file,
				'active' => $active,
				'info' => $ModuleInfo);
		}
		
		return $modules;
	}
}