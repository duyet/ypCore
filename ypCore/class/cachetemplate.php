<?php 
class __CACHETEMPLATE {
	private static $_instance;
	private $expire = 999999;

	public static function getInstance() {
		if (!self::$_instance) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}

	public function get($key) {
		$key = substr($key, 0, strlen($key) - 3);
		$key = preg_replace('/[^A-Z0-9_-]/i', '', $key);
		$files = glob(YPCORE_ROOT . '/' . APP_TMP_DIR . '/cachetemplate.' . $key . '.*.php');

		if (!$files) {
			return FALSE;
		}

		foreach ($files as $file) { //filecache.settings.1374398470.cache
			preg_match('/cachetemplate\.[A-z0-9_-]+\.([0-9]{10})\.php$/', $file, $time);
			$time = intval($time[1]);
			if ($time < time()) {
				if (file_exists($file)) {
					unlink($file);
				}
			}
		}

		return $files[0];
	}

  	public function set($key, $value) {
		$key = substr($key, 0, strlen($key) - 3);
		$key = preg_replace('/[^A-Z0-9_-]/i', '', $key);
		$this->delete($key);
		$file = YPCORE_ROOT . '/' . APP_TMP_DIR . '/cachetemplate.' . $key . '.' . (time() + $this->expire) . '.php';
		$handle = fopen($file, 'w');

    	fwrite($handle, $value);
		
    	fclose($handle);
  	}
	
  	public function delete($key) {
		if (is_array($key)) {
			foreach ($key as $_key) {
				$this->delete($_key);
			}
			return TRUE;
		}

		$key = substr($key, 0, strlen($key) - 3);
		$key = preg_replace('/[^A-Z0-9_-]/i', '', $key);
		$files = glob(YPCORE_ROOT . '/' . APP_TMP_DIR . '/cachetemplate.' . $key . '.*.php');
		
		if ($files) {
    		foreach ($files as $file) {
      			if (file_exists($file)) {
					unlink($file);
				}
    		}
		}
  	}
}