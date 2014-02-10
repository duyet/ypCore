<?php 
class __DATABASE {
	private static $_instance;
	private $_connection = false;
	private $_dbhost;
	private $_dbuser;
	private $_dbpass;
	private $_dbname;
	private $_lastResult = false;
	public $fatalError = false;
	private $_debugMode = false;
	private $_debugInfo = false;
	private $_ext;
	public $_disconnectOnDescruct;

	public function __construct($databaseSetting) {
		$this->_setup($databaseSetting);

		if ($this->connect() === FALSE) {
			return FALSE;
		}
		
		return $this;
	}

	private function _setup($databaseSetting) {
		$this->_dbhost = 'localhost';
		if ($databaseSetting['host']) {
			$this->_dbhost = $databaseSetting['host'];
		}
		$this->_dbuser = 'root';
		if ($databaseSetting['username']) {
			$this->_dbuser = $databaseSetting['username'];
		}
		$this->_dbpass = '';
		if ($databaseSetting['password']) {
			$this->_dbpass = $databaseSetting['password'];
		}
		$this->_dbname = '';
		if ($databaseSetting['dbName']) {
			$this->_dbname = $databaseSetting['dbName'];
		}
		$this->_debugMode = TRUE;
		if (isset($databaseSetting['debug']) AND $databaseSetting['debug'] == TRUE) {
			$databaseSetting['debug'] = TRUE;
		}
		$this->_debugInfo['time'] = 0;
		$this->_ext = 'mysql';
		
		$disable_functions = array();
		if (ini_get("disable_functions") AND ini_get("disable_functions") != FALSE) {
			$disable_functions = array_map('trim', preg_split("/[\s,]+/", ini_get("disable_functions")));
		}
		if (function_exists('mysqli_connect') AND !in_array('mysqli_connect', $disable_functions)) {
			$this->_ext = 'mysqli';
		}
		$this->_disconnectOnDescruct = TRUE;
	}

	public function connect() {
		$time = microtime(TRUE);
		
		if ($this->_ext == 'mysqli') {
			$this->_connection = @mysqli_connect($this->_dbhost, $this->_dbuser, $this->_dbpass);
		} else {
			$this->_connection = @mysql_connect($this->_dbhost, $this->_dbuser, $this->_dbpass);
		}
		if($this->_connection == FALSE) {
			trigger_error('Error when try to connect to database!', E_USER_WARNING);
		}

		if ($this->_ext == 'mysqli') {
			$db = mysqli_select_db($this->_connection, $this->_dbname);
		} else {
			$db = mysql_select_db($this->_dbname, $this->_connection);
		}
		if ($db == FALSE) {
			trigger_error('Unknown database!', E_USER_WARNING);
		}

		if ($this->_ext == 'mysqli') {
			@mysqli_query($this->_connection, 'SET NAMES utf8');
		} else {
			@mysql_query('SET NAMES utf8', $this->_connection);
		}

		if($this->_debugMode) {
			$time = microtime(TRUE) - $time;
			$this->_debugInfo['queries'][] = array(
				'query' => 'CONNECT '.$this->_dbhost,
				'time' => number_format($time, 5, '.', ''),
			);
			$this->_debugInfo['time'] += $time;
		}
		return $this->_connection;
	}

	private function fatalError($query) {
		$this->fatalError = TRUE;
		$error = $this->_ext == 'mysqli' ? mysqli_error($this->_connection) : mysql_error(); 
		if($this->_debugMode) {
			echo 'MySQL Query: ' . $query . '<br />';
			echo 'MySQL Error: ' . $error . '<br />';
			exit;
		} else {
			return FALSE;
		}
	}

	public function query($query, $remember_result = TRUE) {
		if($this->_connection == FALSE) {
			$this->connect();
		}
		$time = microtime(TRUE);

		if ($this->_ext == 'mysqli') {
			$result = mysqli_query($this->_connection, $query);
		} else {
			$result = mysql_query($query, $this->_connection);
		}
		if($this->_debugMode) {
			$time = microtime(TRUE) - $time;
			$this->_debugInfo['queries'][] = array(
				'query' => $query,
				'time' => number_format($time, 5, '.', ''),
			);
			$this->_debugInfo['time'] += $time;
		}

		if($result == FALSE) {
			return $this->fatalError($query);
		}
		if($remember_result) {
			$this->_lastResult = $result;
		}
		return $result;
	}

	public function q($query, $remember_result = TRUE) {
		return $this->query($query, $remember_result);
	}

	public function fetch_object($result = FALSE) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}

		if ($this->_ext == 'mysqli') {
			return mysqli_fetch_object($result);
		}
		
		return mysql_fetch_object($result);
	}

	public function fetch($result = FALSE, $type = 2) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}

		if ($type != 1 and $type != 2) $type = 0;
		switch ($type) {
			case 1: return $this->_ext == 'mysqli' ? @mysqli_fetch_array($result, MYSQL_NUM) : @mysql_fetch_array($result, MYSQL_NUM); break;
			case 2: return $this->_ext == 'mysqli' ? @mysqli_fetch_array($result, MYSQL_ASSOC ) : @mysql_fetch_array($result, MYSQL_ASSOC); break;
			default: return $this->_ext == 'mysqli' ? @mysqli_fetch_array($result, MYSQL_BOTH ) : @mysql_fetch_array($result, MYSQL_BOTH);
		}

		return false;
	}

	public function fetchAssoc($result = FALSE) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}
		
		return $this->_ext == 'mysqli' ? @mysqli_fetch_assoc($result) : @mysql_fetch_assoc($result);

		return false;
	}

	public function fetchObject($result=FALSE) {
		return $this->fetch_object($result);
	}

	public function fetch_all($res = FALSE) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}

		$data = array();
		while ($obj = $this->fetch_object($result)) {
			$data[] = $obj;
		}
		$this->free_result($result);
		return $data;
	}

	public function fetch_field($query) {
		$result = $this->query($query, FALSE);
		if (FALSE == $result) {
			return FALSE;
		}
		if ($this->_ext == 'mysqli') {
			$row = mysqli_fetch_row($result);
		} else {
			$row = mysql_fetch_row($result);
		}
		if (!$row) {
			return FALSE;
		}

		$this->free_result($result);
		return $row[0];
	}

	public function num_rows($result = FALSE) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}

		if ($this->_ext == 'mysqli') {
			return mysqli_num_rows($result);
		}
		
		return mysql_num_rows($result);
	}

	public function insert_id() {
		if($this->_connection == FALSE) {
			$this->connect();
		}
		if ($this->_ext == 'mysqli') {
			return intval(mysqli_insert_id($this->_connection));
		}

		return intval(mysql_insert_id($this->_connection));
	}

	public function insertID() {
		return $this->insert_id();
	}

	public function affected_rows() {
		if($this->_connection == FALSE) {
			$this->connect();
		}
		if ($this->_ext == 'mysqli') {
			return mysqli_affected_rows($this->_connection);
		}
		
		return mysql_affected_rows($this->_connection);
	}

	public function affectedRows() {
		return $this->affected_rows();
	}

	public function data_seek($row=0, $result = FALSE) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}

		if ($this->_ext == 'mysqli') {
			return mysqli_data_seek($result, $row);
		} 
		
		return mysql_data_seek($result, $row);
	}

	public function dataSeek($row=0, $result = FALSE) {
		return $this->data_seek($row, $result);
	}

	public function free_result($result = FALSE) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}
		
		if ($this->_ext == 'mysqli') {
			return mysqli_free_result($result);
		}

		return mysql_free_result($result);
	}

	public function free( $result = FALSE ) {
		return $this->free_result($result);
	}

	public function escape($string) {
		if ($this->_connection == FALSE) {
			$this->connect();
		}

		if ($this->_ext == 'mysqli') {
			return mysqli_real_escape_string($this->_connection, $string);
		}
		
		return mysql_real_escape_string($string, $this->_connection);
	}

	public function e($string) {
		return $this->escape($string);
	}

	public function isDebug() {
		return $this->_debugMode;
	}

	public function get_debugInfo() {
		if (!$this->isDebug()) {
			return FALSE;
		}

		$_debugInfo = $this->_debugInfo;
		$_debugInfo['time'] = number_format($_debugInfo['time'], 4, '.', '');
		return $_debugInfo;
	}

	public function delete_debugInfo() {
		$this->_debugInfo->queries = array();
	}

	public function __destruct() {
		if ($this->_disconnectOnDescruct) {
			if ($this->_connection) {
				$this->_ext == 'mysqli' ? @mysqli_close($this->_connection) : @mysql_close($this->_connection);
				$this->_connection = FALSE;
			}
		}
	}
// ================================================
}

