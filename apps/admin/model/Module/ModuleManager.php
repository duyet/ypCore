<?php class Model_Admin_Module_ModuleManager extends ypModel {	public function checkModuleActive($module) {		if (empty($module)) {			return FALSE;		}		$active = $this->Setting->get('module_' . $module . '_active');		if (!$active OR (int) $active != 1) {			$this->Setting->set('module_' . $module . '_active', 0);			return FALSE;		}		return TRUE;	}}