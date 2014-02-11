<?php 
/**
 * ypResponse
 * Controll output, set header.
 * 
 * @package ypCore 1.0
 * @since ypCore 1.0
 * @author duyet2000@gmail.com (http://go.use.vn)
 * @copyright 2013
 * @version $Id$
 * @access public
 */
class ypResponse {
	private $_headers = array(); 
	private $_level = 6;
	private $_output;

	/**
	 * Add header to response to client. It will store into _headers, and 
	 * return to client before output.
	 * 
	 * @param string $header
	 */
	public function addHeader($header) {
		$this->_headers[] = $header;
	}

	/**
	 *  Set compression level
	 * @param int $level level of compression module 1-9
	 */
	public function setCompression($level = 5) {
		$this->_level = (int) $level;
	}

	/**
	 * Set output content.
	 * 
	 * @param string $output
	 */
	public function setOutput($output) {
		$this->_output = $output;
	}

	/**
	 * Compress using zlib or gz
	 * 
	 * @param  string  $data 
	 * @param  integer $level
	 * @return string
	 */
	private function _compress($data, $level = 0) {
		if (!isset($_SERVER['HTTP_ACCEPT_ENCODING'])) {
			return $data;
		}

		if (!extension_loaded('zlib') OR ini_get('zlib.output_compression')) {
			return $data;
		}

		if (headers_sent() OR connection_status()) {
			return $data;
		}

		if (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE) {
			$this->addHeader('Content-Encoding: gzip');
		} elseif (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip') !== FALSE) {
			$this->addHeader('Content-Encoding: x-gzip');
		}

		return gzencode($data, (int) $level);
	}

	/**
	 * Return header to client and print output on screen.
	 * 
	 * @return void
	 */
	public function output() {
		$this->addHeader('Expires: ' . gmdate( "D, d M Y H:i:s", time() - 60 ) . ' GMT');
		$this->addHeader('Cache-Control: no-cache, pre-check=0, post-check=0');
		$this->addHeader('Pragma: no-cache');

		if ($this->_output) {
			if ($this->_level) {
				$ouput = $this->_compress($this->_output, $this->_level);
			} else {
				$ouput = $this->_output;
			}

			if (!headers_sent()) {
				foreach ($this->_headers as $header) {
					header($header, true);
				}
			}

			echo $ouput;
		}
	}
}