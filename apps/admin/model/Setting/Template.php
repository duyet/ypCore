<?php 
class Model_Admin_Setting_Template extends ypModel {
	private $_template = FALSE;
	private $_admin_template = FALSE;

	public function reloadTemplateFolder() {
		if ($this->_template) {
			return $this->_template;
		}
		$this->_template = array();
		$dirs = scandir(APPS_TEMPLATE_DIR);
		foreach ($dirs as $dir) {
			if ($dir == '.' OR $dir == '..') {
				continue;
			}
			if (!file_exists(APPS_TEMPLATE_DIR . '/' . $dir . '/template.php')) {
				continue;
			}
			require_once(APPS_TEMPLATE_DIR . '/' . $dir . '/template.php');
			if (!$TEMPLATE_NAME) {
				continue;
			}

			$this->_template[] = array(
				'name' => $TEMPLATE_NAME,
				'dir' => $dir);

		}
		
		return $this->_template;
	}
	
	public function getAllTemplateDir() {
		if (!$this->_template) {
			$this->reloadTemplateFolder();
		}
		
		$dir = array();
		foreach ($this->_template as $template) {
			$dir[] = $template['dir'];
		}

		return $dir;
	}
	
	public function reloadAdminTemplateFolder() {
		if ($this->_admin_template) {
			return $this->_admin_template;
		}
		$this->_admin_template = array();
		$dirs = scandir(ADMIN_TEMPLATE_DIR);
		foreach ($dirs as $dir) {
			if ($dir == '.' OR $dir == '..') {
				continue;
			}
			if (!file_exists(ADMIN_TEMPLATE_DIR . '/' . $dir . '/template.php')) {
				continue;
			}
			require_once(ADMIN_TEMPLATE_DIR . '/' . $dir . '/template.php');
			if (!$TEMPLATE_NAME) {
				continue;
			}

			$this->_admin_template[] = array(
				'name' => $TEMPLATE_NAME,
				'dir' => $dir);
		}
		
		return $this->_admin_template;
	}
	
	public function getAllAdminTemplateDir() {
		if (!$this->_admin_template) {
			$this->reloadAdminTemplateFolder();
		}
		
		$dir = array();
		foreach ($this->_admin_template as $template) {
			$dir[] = $template['dir'];
		}

		return $dir;
	}
}