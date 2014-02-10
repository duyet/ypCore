<?php 
/**
 * getModuleName($default = 'Index')
 * getControllerName($default = 'Index')
 * getActionName($default = '')
 * getModuleKey()
 * getBaseSiteurl()
 * getControllerKey()
 * getActionKey() 
 * setModuleKey($key = '')
 * setControllerKey($key = '')
 * setActionKey($key = '')
 * setModuleName($value = '')
 * setControllerName($value = '')
 * setActionName($value = '') 
 * getUserParams() 
 * getUserParam($key, $default = '')
 * setParam($key, $value = null)
 * clearParams()
 * getParam($paramKey, $default = '')
 * GET($name, $default = NULL)
 * POST($name, $default = NULL)
 * REQUEST($name, $default = NULL)
 * setRequestDefaultMode($mode)
 * getAction()
 * getSiteUrl() 
 *
 * Var:
 *   baseSiteurl
 */

class __REQUEST {
	private static $_instance;
	public $ip;
	public $is_register_globals = FALSE;
	public $isMagicQuotesGpc = FALSE;
	public $is_filter = FALSE;
	public $requestUri;
	public $baseSiteurl;
	public $serverName;
	public $serverProtocol;
	public $serverPort;
	public $domain;
	public $headerstatus;
	public $siteUrl;
	public $referer;
	public $userAgent;
	public $time;
	public $requestDefaultMode = 'request';
	public $allowRequestMods = array('get', 'post', 'request', 'cookie', 'session', 'env', 'server');
	public $GET;
	public $POST;
	public $REQUEST;

	public function __construct() {
		$this->_setup();
	}

	public function getBaseSiteurl() {
		return $this->baseSiteurl;
	}

	public static function getInstance() {
		if (!self::$_instance) self::$_instance = new self();

		return self::$_instance;
	}

	public function GET($name, $default = NULL) {
		$name = (string) $name;
		if (isset($_GET[$name])) {
			return $_GET[$name];
		}
		
		if ($default) {
			return $default;
		}
		
		return FALSE;
	}

	public function POST($name, $default = NULL) {
		$name = (string) $name;
		if (!isset($_POST[$name])) {
			if ($default) {
				return $default;
			}
			return FALSE;
		}
		
		if (is_numeric($_POST[$name])) {
			return $_POST[$name];
		}
		
		return $this->_securityPost($name);
	}

	public function REQUEST($name, $default = NULL) {
		if ($this->GET($name) !== FALSE) {
			return $this->GET($name);
		}
		if ($this->POST($name) !== FALSE) {
			return $this->POST($name);
		}
		if ($default) {
			return $default;
		}
		return FALSE;
	}

	public function getSiteUrl() {
		return $this->serverProtocol . '://' . $this->serverName . $this->baseSiteurl;
	}

	public function setServerProtocal($protocol) {
		$this->serverProtocol = $protocol;
	}

	private function _securityPost($value) {
		if (is_array($value)) {
			$keys = array_keys($value);
			foreach ($keys as $keyword) {
				$value[$keyword] = $this->_securityPost( $value[$keyword] );
			}
		}
		else {
			$value = preg_replace("/\t+/", " ", $value);
			unset($matches);
			preg_match_all('/<!\[cdata\[(.*?)\]\]>/is', $value, $matches);
			$value = str_replace($matches[0], $matches[1], $value);
			$value = str_replace(array("'", '"', '<', '>'), array("&#039;", "&quot;", "&lt;", "&gt;"), $value );
			$value = str_replace(array("[:", ":]", "{:", ":}"), array('"', '"', "<", '>'), $value);
			$value = trim($value);
		}
		return $value;
	}

	private function _securityGet($value) {
		if (is_array($value)) {
			$keys = array_keys($value);
			foreach ($keys as $keyword) {
				$value[$keyword] = $this->_securityGet($value[$keyword]);
			}
		}
		else {
			$value = preg_replace("/\t+/", " ", $value);
			unset($matches);
			preg_match_all('/<!\[cdata\[(.*?)\]\]>/is', $value, $matches);
			$value = str_replace($matches[0], $matches[1], $value);
			$value = str_replace(array("'", '"', '<', '>'), array("&#039;", "&quot;", "&lt;", "&gt;"), $value );
			$value = str_replace(array("[:", ":]", "{:", ":}"), array('"', '"', "<", '>'), $value);
			$value = trim($value);
		}
		return $value;
	}

	private function _fixGET(&$var) {
		$array_keys = array_keys($var);
		foreach ($array_keys as $keyword) {
			if (is_array($var[$keyword])) $this->fixQuery($var[$keyword]);
			elseif (is_string($var[$keyword])) {
				if ( $this->isMagicQuotesGpc ) $var[$keyword] = stripslashes($var[$keyword]);
				if (!empty($var[$keyword]) AND !is_numeric($var[$keyword])) {
					$var[$keyword] = str_replace(array( "\t", "\r", "\n", "../"), "", $var[$keyword]);
					$var[$keyword] = $this->_unhtmlentities($var[$keyword]);
					unset( $matches );
					preg_match_all('/<!\[cdata\[(.*?)\]\]>/is', $var[$keyword], $matches);
					$var[$keyword] = str_replace($matches[0], $matches[1], $var[$keyword]);
					$var[$keyword] = strip_tags($var[$keyword]);
					$var[$keyword] = str_replace(array("'", '"', '<', '>'), array("&#039;", "&quot;", "&lt;", "&gt;"), $var[$keyword]);
					$var[$keyword] = trim($var[$keyword]);
				}
			}
		}
	}

	private function _parseMode($mode) {
		if (empty($mode)) return array($this->requestDefaultMode);
		$mode = explode(",", $mode);
		$mode = array_map('trim', $mode);
		$mode = array_map('strtolower', $mode);
		$mode = array_intersect($this->allowRequestMods, $mode);
		if (empty($mode)) return array($this->requestDefaultMode);
		return array_values($mode);
	}

	private function _getEnv($envKey) {
		if (!is_array($envKey)) $envKey = array($envKey);
		foreach ($envKey as $keyword)
		{
			if (isset($_SERVER[$keyword])) return $_SERVER[$keyword];
			elseif (isset( $_ENV[$keyword])) return $_ENV[$keyword];
			elseif (@getenv($keyword)) return @getenv($keyword);
			elseif (function_exists('apache_getenv') AND apache_getenv($keyword, TRUE)) return apache_getenv($keyword, TRUE);
		}
		return '';
	}

	public function getEnv($envKey) {
		return $this->_getEnv($envKey);
	}

	private function _setup() {
		if (strtolower(ini_get('register_globals')) == 'on' OR ini_get('register_globals') == '1') {
			$this->is_register_globals = TRUE;
		}
		if (function_exists('get_magic_quotes_gpc')) {
			if (get_magic_quotes_gpc()) $this->is_magic_quotes_gpc = TRUE;
		}
		if (extension_loaded('filter') AND filter_id(ini_get('filter.default')) !== FILTER_UNSAFE_RAW) {
			$this->is_filter = TRUE;
		}

		$this->_fixGET($_GET);
		$_REQUEST = array_merge ($_POST, array_diff_key($_GET, $_POST));

		$this->baseSiteurl = pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME);
		if (empty($this->baseSiteurl)) {
			$this->baseSiteurl = '/';
		}

		$this->serverName = $_SERVER['SERVER_NAME'];

		// Server protocal
		$this->serverProtocol = preg_replace('/^([^\/]+)\/*(.*)$/', '\\1', strtolower($_SERVER['SERVER_PROTOCOL']));
		if ($this->_getEnv('HTTPS') == 'on') {
			$this->serverProtocol .= 's';
		}

		$this->ip = $_SERVER['REMOTE_ADDR'];
		$this->userAgent = substr( htmlspecialchars((string)$this->_getEnv('HTTP_USER_AGENT')), 0, 255);
		$this->domain = $this->serverProtocol . '://' . $this->serverName;
		$this->headerstatus = (substr(php_sapi_name(), 0, 3 ) == 'cgi' ) ? 'Status:' : $_SERVER['SERVER_PROTOCOL'];
		$this->siteUrl = $this->getSiteUrl();
		$this->referer = $this->_getEnv(array('HTTP_REFERER', 'Referer'));

		$this->time = time();
		$this->day = (int) date('d', $this->time);
		$this->month = (int) date('m', $this->time);
		$this->year = (int) date('Y', $this->time);

		$this->GET = $_GET;
		$this->POST = $_POST;
		$this->REQUEST = $_REQUEST;
	}

	private function _unhtmlentities($value) {
		$value = preg_replace("/%3A%2F%2F/", '', $value);
		$value = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $value);
		$value = preg_replace("/%u0([a-z0-9]{3})/i", "&#x\\1;", $value);
		$value = preg_replace("/%([a-z0-9]{2})/i", "&#x\\1;", $value);
		$value = str_ireplace(array('&#x53;&#x43;&#x52;&#x49;&#x50;&#x54;', '&#x26;&#x23;&#x78;&#x36;&#x41;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x31;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x36;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x31;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x33;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x33;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x32;&#x3B;&#x26;&#x23;&#x78;&#x36;&#x39;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x30;&#x3B;&#x26;&#x23;&#x78;&#x37;&#x34;&#x3B;', '/*', '*/', '<!--', '-->', '<!-- -->', '&#x0A;', '&#x0D;', '&#x09;', '' ), '', $value);
		$search = '/&#[xX]0{0,8}(21|22|23|24|25|26|27|28|29|2a|2b|2d|2f|30|31|32|33|34|35|36|37|38|39|3a|3b|3d|3f|40|41|42|43|44|45|46|47|48|49|4a|4b|4c|4d|4e|4f|50|51|52|53|54|55|56|57|58|59|5a|5b|5c|5d|5e|5f|60|61|62|63|64|65|66|67|68|69|6a|6b|6c|6d|6e|6f|70|71|72|73|74|75|76|77|78|79|7a|7b|7c|7d|7e);?/ie';
		$value = preg_replace($search, "chr(hexdec('\\1'))", $value);
		$search = '/&#0{0,8}(33|34|35|36|37|38|39|40|41|42|43|45|47|48|49|50|51|52|53|54|55|56|57|58|59|61|63|64|65|66|67|68|69|70|71|72|73|74|75|76|77|78|79|80|81|82|83|84|85|86|87|88|89|90|91|92|93|94|95|96|97|98|99|100|101|102|103|104|105|106|107|108|109|110|111|112|113|114|115|116|117|118|119|120|121|122|123|124|125|126);?/ie';
		$value = preg_replace($search, "chr('\\1')", $value);
		$search = array('&#60', '&#060', '&#0060', '&#00060', '&#000060', '&#0000060', '&#60;', '&#060;', '&#0060;', '&#00060;', '&#000060;', '&#0000060;', '&#x3c', '&#x03c', '&#x003c', '&#x0003c', '&#x00003c', '&#x000003c', '&#x3c;', '&#x03c;', '&#x003c;', '&#x0003c;', '&#x00003c;', '&#x000003c;', '&#X3c', '&#X03c', '&#X003c', '&#X0003c', '&#X00003c', '&#X000003c', '&#X3c;', '&#X03c;', '&#X003c;', '&#X0003c;', '&#X00003c;', '&#X000003c;', '&#x3C', '&#x03C', '&#x003C', '&#x0003C', '&#x00003C', '&#x000003C', '&#x3C;', '&#x03C;', '&#x003C;', '&#x0003C;', '&#x00003C;', '&#x000003C;', '&#X3C', '&#X03C', '&#X003C', '&#X0003C', '&#X00003C', '&#X000003C', '&#X3C;', '&#X03C;', '&#X003C;', '&#X0003C;', '&#X00003C;', '&#X000003C;', '\x3c', '\x3C', '\u003c', '\u003C');
		$value = str_ireplace($search, '<', $value);
		return $value;
	}
}