<?php 
/**
 * Database tools
 *
 * @since 0.1.0
 * @author LvDuit <duyet2000@gmail.com>
 * @package ypCore
 */
class __DATABASE {
	private static $_instance;
	private $_connection = false;
	
	/**
	 * Database host name.
	 * 
	 * @var [type]
	 */
	private $_dbhost;

	/**
	 * Database user.
	 * 
	 * @var [type]
	 */
	private $_dbuser;

	/**
	 * Database password.
	 * 
	 * @var [type]
	 */
	private $_dbpass;

	/**
	 * Database name.
	 * 
	 * @var [type]
	 */
	private $_dbname;

	/**
	 * Remember last result.
	 * 
	 * @var boolean
	 */
	private $_lastResult = false;

	/**
	 * Fatal error.
	 * 
	 * @var boolean
	 */
	public $fatalError = false;

	/**
	 * Debugging mode.
	 * 
	 * @var boolean
	 */
	private $_debugMode = false;
	
	/**
	 * Debug store
	 * 
	 * @var boolean
	 */
	private $_debugInfo = false;
	
	/**
	 * Database extends, mysql or mysqli
	 * 
	 * @var string
	 */
	private $_ext;

	/**
	 * Disconnect when on descruct
	 * 
	 * @var boolean
	 */
	public $_disconnectOnDescruct = TRUE;

	public function __construct($databaseSetting) {
		$this->_setup($databaseSetting);

		if ($this->connect() === FALSE) {
			return FALSE;
		}
		
		return $this;
	}

	/**
	 * Settup database.
	 * 
	 * @param  array
	 * @return void
	 */
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

	/**
	 * Connect to mysql
	 * 
	 * @return void
	 */
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

	/**
	 * Return and print error if debug active.
	 * 
	 * @param  string $query
	 * @return mixed
	 */
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

	/**
	 * Query mySQL query.
	 * 
	 * @param  string  $query
	 * @param  boolean $remember_result
	 * @return resource
	 */
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

	/**
	 * Short function of this::query()
	 * 
	 * @param  string  $query
	 * @param  boolean $remember_result
	 * @return resource
	 */
	public function q($query, $remember_result = TRUE) {
		return $this->query($query, $remember_result);
	}

	/**
	 * Fetch data and return object result.
	 *  
	 * @param  resource $result
	 * @return object
	 */
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

	/**
	 * Fetch result multi type response.
	 * 	$type = 1: Return array result with number index.
	 *  $type = 2: Return array result with assoc index.
	 *  $type = 3: Both 1 and 2
	 * 
	 * @param  boolean $result 
	 * @param  integer $type   
	 * @return mixed          
	 */
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

	/**
	 * Fetch assoc
	 * 
	 * @param  resource $result 
	 * @return mixed
	 */
	public function fetchAssoc($result = FALSE) {
		$result = ($result !== FALSE) ? $result : $this->_lastResult;
		if($result == FALSE) {
			return FALSE;
		}
		
		return $this->_ext == 'mysqli' ? @mysqli_fetch_assoc($result) : @mysql_fetch_assoc($result);

		return false;
	}

	/**
	 * Fetch object, short function of this::fetch_object()
	 * 
	 * @param  resource $result 
	 * @return object
	 */
	public function fetchObject($result=FALSE) {
		return $this->fetch_object($result);
	}

	/**
	 * Fetch all return row
	 * 
	 * @param  resource $res
	 * @return array of object
	 */
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

	/**
	 * Fetch field
	 * 
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
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

	/**
	 * Number of row
	 * 
	 * @param  resource $result
	 * @return int
	 */
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

	/**
	 * Return ID of query INSERT
	 * 
	 * @return int
	 */
	public function insert_id() {
		if($this->_connection == FALSE) {
			$this->connect();
		}
		if ($this->_ext == 'mysqli') {
			return intval(mysqli_insert_id($this->_connection));
		}

		return intval(mysql_insert_id($this->_connection));
	}

	/**
	 * Return ID of query INSERT, short function of this::insert_id()
	 * 
	 * @return int
	 */
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

