<?php 
class __CACHE {
	private $expire = 3600;
	private $_data = array();

	public function get($key) {
		$key = $this->_fixKeyName($key);

		// memcache
		if (isset($this->_data[$key])) {
			return $this->_data[$key];
		}

		$files = glob(APP_CACHE_DIR . '/filecache.' . $key . '.*.cache');

		if ($files) {
			$cache = file_get_contents($files[0]);

			$data = unserialize($cache);

			foreach ($files as $file) { //filecache.settings.1374398470.cache
				preg_match('/filecache\.[A-z0-9_-]+\.([0-9]{10})\.cache$/', $file, $time);
				$time = intval($time[1]);
      			if ($time < time()) {
					if (file_exists($file)) {
						unlink($file);
					}
				}
			}
			// Save to memcache
			$this->_data[$key] = $data;

			return $data;
		}

		return FALSE;
	}

	public function set($key, $value) {
		$key = $this->_fixKeyName($key);

		// Set to memcache
		$this->_data[$key] = $value;

		$this->delete($key);
		
		$file = APP_CACHE_DIR . '/filecache.' . $key . '.' . (time() + $this->expire) . '.cache';

		$handle = fopen($file, 'w');

		fwrite($handle, serialize($value));
		
		fclose($handle);
	}
	
	public function delete($key) {
		$key = $this->_fixKeyName($key);

		// Delete from memcache
		if (isset($this->_data[$key])) {
			$this->_data[$key] = NULL;
		}

		if (is_array($key)) {
			foreach ($key as $_key) {
				$this->delete($_key);
			}
			return TRUE;
		}

		$files = glob(APP_CACHE_DIR . '/filecache.' . $key . '.*.cache');

		if ($files) {
			foreach ($files as $file) {
				if (file_exists($file)) {
					unlink($file);
				}
    		}
		}
  	}
	
	private function _fixKeyName($key) {
		$key = trim((string) $key);
		
		return md5($key);
	}
}