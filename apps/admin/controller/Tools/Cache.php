<?php 
class Controller_Admin_Tools_Cache extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		$this->loadLanguage('Admin/Tools/Cache');

		if ($this->Request->POST['cleanup_cache']) {
			$num = $this->_cleanupCache();
			$this->set('success', sprintf($this->_data['text_cleanup_cache_success'], $num));
		}
		
		if ($this->Request->POST['cleanup_compress_template_cache']) {
			$num = $this->_cleanUpTemplateCache();
			$this->set('success', sprintf($this->_data['text_cleanup_compress_template_cache_success'], $num));
		}
		
		// Load list cache
		$cache = '';
		$dir = scandir(YPCORE_ROOT . '/' . APP_CACHE_DIR);
		if ($dir) {
			foreach($dir as $file) {
				if ($file == '.' OR $file == '..' OR $file == 'index.html' OR $file == '.htaccess') {
					continue;
				}
				if (preg_match('/^filecache\./i', $file)) {
					$cache .= $file . "\n";
				}
			}
		}
		
		// Load list template cache
		$template = '';
		$template_dir = FALSE;
		$template = '';
		if (file_exists(YPCORE_ROOT . '/' . APP_CACHE_DIR . '/cache_template_dir')) {
			$template_dir = scandir(YPCORE_ROOT . '/' . APP_CACHE_DIR . '/cache_template_dir');	
		}
		if ($template_dir) {
			foreach($template_dir as $file) {
				if ($file == '.' OR $file == '..' OR $file == 'index.html' OR $file == '.htaccess') {
					continue;
				}
				if (preg_match('/.*(\.php\.php)$/i', $file)) {
					$template .= $file . "\n";
				}
			}
		}

		$this->set('cache', $cache);
		$this->set('template', $template);
		$this->set('form_action', $this->Link->build('Admin/Tools/Cache'));
		$this->set('menu_active', 'cache');
		$this->Document->setTitle($this->_data['title']);
		$this->setTemplate('module/Tools/Cache.php');
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer',
			'Admin/Tools/Leftmenu'
		));
		$this->Response->setOutput($this->render());
	}
	
	/**
	 * Clean all cache
	 *
	 * @param 
	 * @return int $i 	number of cache have been delete
	 * @access 	private
	 */
	private function _cleanupCache() {
		$this->checkLogin();
		
		// Load list cache
		$i = 0;
		$dir = scandir(YPCORE_ROOT . '/' . APP_CACHE_DIR);
		if ($dir) {
			foreach($dir as $file) {
				if ($file == '.' OR $file == '..' OR $file == 'index.html' OR $file == '.htaccess') {
					continue;
				}
				if (preg_match('/^filecache\./i', $file)) {
					unlink(YPCORE_ROOT . '/' . APP_CACHE_DIR . '/' . $file);
					$i++;
				}
			}
		}
		
		return $i;
	}
	
	/**
	 * Clean all template cache smarty
	 *
	 * @param 
	 * @return 	int $i 	count of file have been delete
	 * @access 	private
	 */
	private function _cleanUpTemplateCache() {
		$this->checkLogin();
		// Load list template cache
		$i = 0; 
		$dir = FALSE;
		if (file_exists(YPCORE_ROOT . '/' . APP_CACHE_DIR . '/cache_template_dir')) {
			$dir = scandir(YPCORE_ROOT . '/' . APP_CACHE_DIR . '/cache_template_dir');	
		}
		if ($dir) {
			foreach($dir as $file) {
				if ($file == '.' OR $file == '..' OR $file == 'index.html' OR $file == '.htaccess') {
					continue;
				}
				if (preg_match('/.*(\.php\.php)$/i', $file)) {
					@unlink(YPCORE_ROOT . '/' . APP_CACHE_DIR . '/cache_template_dir/' . $file);
					$i++;
				}
			}
		}

		return $i;
	}
}