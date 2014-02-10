<?php
// Manager files server
class __SERVER {
	static private $_instance;
	private $_safeMode;
	private $_mysqlSupport;
	private $_zlibSupport;
	private $_sessionSupport;
	private $_fileuploadsSupport;
	private $_curlSupport;
	private $_ftpSupport;

	public function __construct() {
		$this->_getServerFunctionsInfo();
	}

	public static function getInstance() {
		if (!self::$_instance) self::$_instance = new self();

		return self::$_instance;
	}

	private function _getServerFunctionsInfo() {
		$this->_safeMode = (ini_get('safe_mode') == '1' || strtolower(ini_get('safe_mode')) == 'on') ? true : false;
		$this->_mysqlSupport = (extension_loaded('mysql') and function_exists('mysql_connect') ) ? true : false;
		$this->_zlibSupport = (extension_loaded('zlib')) ? true : false;
		$this->_sessionSupport = (extension_loaded('session')) ? true : false;
		$this->_fileuploadsSupport = (extension_loaded('file_uploads')) ? true : false;
		$this->_curlSupport = (extension_loaded('curl')) ? true : false;
		$this->_ftpSupport = (function_exists('ftp_connect')) ? true : false;
	}

	// Get file extension
	public static function getFileExt($fileName)
	{
		if (false === ($pos = strrpos($fileName, '.')))
			return null;
		return mb_strtolower(substr($fileName, $pos + 1));
	}

	// get file type
	public static function getFileType($fileName, $realName = null)
	{
		if (null === $realName)
			$realName = basename($fileName);

		if (null === ($result = self::getFileTypeByExtension($realName, null))) {
			$result = 'application/octet-stream';

			if (function_exists('mime_content_type')) {
				$result = mime_content_type($fileName);
			} elseif (function_exists('finfo_open')) {
				if (false !== ($r = @finfo_open(FILEINFO_MIME))) {
					$result = finfo_file($r, $fileName);
					$result = str_replace(strrchr($result, ';'), '', $result);
					finfo_close($r);
				}
			}
		}

		return $result;
	}
	
	// extension => file type
	public static function getFileTypeByExtension($ext, $default = 'application/octet-stream')
		$mimes = array(
			'hqx'   =>  'application/mac-binhex40',
			'cpt'   =>  'application/mac-compactpro',
			'doc'   =>  'application/msword',
			'bin'   =>  'application/macbinary',
			'dms'   =>  'application/octet-stream',
			'lha'   =>  'application/octet-stream',
			'lzh'   =>  'application/octet-stream',
			'exe'   =>  'application/octet-stream',
			'class' =>  'application/octet-stream',
			'psd'   =>  'application/octet-stream',
			'so'    =>  'application/octet-stream',
			'sea'   =>  'application/octet-stream',
			'dll'   =>  'application/octet-stream',
			'oda'   =>  'application/oda',
			'pdf'   =>  'application/pdf',
			'ai'    =>  'application/postscript',
			'eps'   =>  'application/postscript',
			'ps'    =>  'application/postscript',
			'smi'   =>  'application/smil',
			'smil'  =>  'application/smil',
			'mif'   =>  'application/vnd.mif',
			'xls'   =>  'application/vnd.ms-excel',
			'ppt'   =>  'application/vnd.ms-powerpoint',
			'wbxml' =>  'application/vnd.wap.wbxml',
			'wmlc'  =>  'application/vnd.wap.wmlc',
			'dcr'   =>  'application/x-director',
			'dir'   =>  'application/x-director',
			'dxr'   =>  'application/x-director',
			'dvi'   =>  'application/x-dvi',
			'gtar'  =>  'application/x-gtar',
			'php'   =>  'application/x-httpd-php',
			'php4'  =>  'application/x-httpd-php',
			'php3'  =>  'application/x-httpd-php',
			'phtml' =>  'application/x-httpd-php',
			'phps'  =>  'application/x-httpd-php-source',
			'js'    =>  'application/x-javascript',
			'swf'   =>  'application/x-shockwave-flash',
			'sit'   =>  'application/x-stuffit',
			'tar'   =>  'application/x-tar',
			'tgz'   =>  'application/x-tar',
			'xhtml' =>  'application/xhtml+xml',
			'xht'   =>  'application/xhtml+xml',
			'zip'   =>  'application/zip',
			'mid'   =>  'audio/midi',
			'midi'  =>  'audio/midi',
			'mpga'  =>  'audio/mpeg',
			'mp2'   =>  'audio/mpeg',
			'mp3'   =>  'audio/mpeg',
			'aif'   =>  'audio/x-aiff',
			'aiff'  =>  'audio/x-aiff',
			'aifc'  =>  'audio/x-aiff',
			'ram'   =>  'audio/x-pn-realaudio',
			'rm'    =>  'audio/x-pn-realaudio',
			'rpm'   =>  'audio/x-pn-realaudio-plugin',
			'ra'    =>  'audio/x-realaudio',
			'rv'    =>  'video/vnd.rn-realvideo',
			'wav'   =>  'audio/x-wav',
			'bmp'   =>  'image/bmp',
			'gif'   =>  'image/gif',
			'jpeg'  =>  'image/jpeg',
			'jpg'   =>  'image/jpeg',
			'jpe'   =>  'image/jpeg',
			'png'   =>  'image/png',
			'tiff'  =>  'image/tiff',
			'tif'   =>  'image/tiff',
			'css'   =>  'text/css',
			'html'  =>  'text/html',
			'htm'   =>  'text/html',
			'shtml' =>  'text/html',
			'txt'   =>  'text/plain',
			'text'  =>  'text/plain',
			'log'   =>  'text/plain',
			'rtx'   =>  'text/richtext',
			'rtf'   =>  'text/rtf',
			'xml'   =>  'text/xml',
			'xsl'   =>  'text/xml',
			'mpeg'  =>  'video/mpeg',
			'mpg'   =>  'video/mpeg',
			'mpe'   =>  'video/mpeg',
			'qt'    =>  'video/quicktime',
			'mov'   =>  'video/quicktime',
			'avi'   =>  'video/x-msvideo',
			'movie' =>  'video/x-sgi-movie',
			'doc'   =>  'application/msword',
			'word'  =>  'application/msword',
			'xl'    =>  'application/excel',
			'eml'   =>  'message/rfc822'
		);
		return (!isset($mimes[strtolower($ext)])) ? (!empty($default) ? $default : 'application/octet-stream') : $mimes[strtolower($ext)];
	}

	// file type => ext
	public static function getExtensionByType($fileType)
	{
		switch ($fileType) {
			case 'text/javascript':
				return '.js';
			case 'text/css':
				return '.css';
			case 'video/x-flv':
				return '.flv';
			case 'application/zip':
				return '.zip';
			case 'image/vnd.microsoft.icon':
				return '.ico';
			case 'application/pdf':
				return '.pdf';
			case 'image/png':
				return '.png';
			case 'image/jpg':
			case 'image/jpeg':
				return '.jpg';
			}
	}

	// string, path, url, ... => file name
	public static function getCleanFileName($fileName)
	{
		if ($sfx = strrchr($fileName, '.')) {
			$fileName = substr($fileName, 0, - strlen($sfx));
		}
		$fileName = trim(preg_replace('/[^a-z0-9_-]+/', '_', $fileName), '_') . $sfx;
		return $fileName;
	}

	// Ex: $path = __OS::path('home', 'module', 'index.php'); 
	public static function path()
	{
		$components = func_get_args();
		return str_replace('/', DIRECTORY_SEPARATOR, implode(DIRECTORY_SEPARATOR, $components));
	}

	// Is readeble file
	public function isReadable($fileName)
	{
		return is_readable($fileName);
	}
}