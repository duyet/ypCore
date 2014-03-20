<?php 
class __LINK {
	private $_registry;
	public $site_url;
	public $path;
	public $params = array();
	public $code = '';
	public $lowcase = FALSE;
	public $rewrite = FALSE;

	public function __construct(&$registry) {
		$this->_registry = $registry;
		$this->path = $this->Request->baseSiteurl;
		$this->site_url = $this->Request->siteUrl;
		$this->lowcase = $this->Setting->get('url_lowcase', 'bool');
		$this->rewrite = $this->Setting->get('rewrite', 'bool');
		$this->params = $this->loadParams();
		$this->code = $this->Request->GET[CODE_PARAM];
	}

	public function getSiteUrl() {
		return $this->site_url;
	}

	public function build($code, $fullUrl = FALSE, $params = array()) {
		$url = $fullUrl ? $this->site_url : $this->path;
		$code = (string) $code;
		if ($this->lowcase) {
			$code = strtolower($code);
		}

		if (preg_match('/^javascript\:/i', $code)) {
			return $code;
		}
		if (substr($code, 0, 1) == '#') {
			return $code;
		}

		// Admin fake link 
		$adminFakeLink = $this->Setting->get('admin_fake_link');
		if (!empty($adminFakeLink)) {
			$code = explode('/', $code);
			if (strtolower($code[0]) == 'admin') {
				$code[0] = $adminFakeLink;
			}
			$code = implode('/', $code);
		}

		$custom_route = $this->Setting->get('custom_route');
		if ($custom_route AND is_array($custom_route) AND count($custom_route) > 0) {
			foreach($custom_route as $custom) {
				if ((strtolower($code) == strtolower($custom['route'])) AND $custom['replace_to_new'] == TRUE) {
					$code = $custom['new'];
				}
			}
		}

		if ($this->rewrite) {
			if (substr($code, 0, 1) != '/') {
				$code = '/' . $code;
			}
			$result = $url . $code;
		} else {
			$result = $url . '/index.php?'. CODE_PARAM .'=' . $code;
		}

		if (count($params)) {
			$result .= ($this->rewrite) ? '?' : '&';
			foreach ($params as $getKey => $getValue) {
				$result .= $getKey . '=' . $getValue . '&';
			}
			$result = substr($result, 0, strlen($result) - 1);
		}

		return $result;
	}

	public function a($link, $text, $params = array()) {
		if(is_array($link)) {
			$link = $this->build($link[0], FALSE, $link[1]);
		} elseif (preg_match('/^http\:\/\//i', $link)) {
		} else {
			$link = $this->build($link);
		}

		if (!isset($params['title'])) {
			$title = $text;
		} else {
			$title = $params['title'];
		}
		
		if (!isset($params['target'])) {
			$target = '_self';
		} else {
			$target = $params['target'];
		}
		
		$class = '';
		if (isset($params['class'])) {
			$class = $params['class'];
		}
		
		$title = str_replace('"', "'", $title);

		return '<a href="'. $link .'" title="'. $title .'" target="'. $target .'" class="'. $class .'">'. $text .'</a>';
	}


	public function loadParams() {
		$GET = $this->Request->GET;
		if($GET[CODE_PARAM]) {
			unset($GET[CODE_PARAM]);
		}
		return $GET;
	}
	
	public function getParams() {
		return $this->params;
	}
	
	public function addParam($paramKey, $paramValue) {
		$this->params[$paramKey] = $paramValue;
	}
	
	public function removeParam($paramKey) {
		if ($this->params[$paramKey]) {
			unset($this->params[$paramKey]);
		}
	}
	
	public function this() {
		return $this->code;
	}

	public function getThisUrl($fullUrl = FALSE) {
		return $this->build($this->this(), $fullUrl, $this->params);
	}

	public function __get($key) {
		return $this->_registry->get($key);
	}

	public function __set($key, $value) {
		return $this->_registry->set($key, $value);
	}
}