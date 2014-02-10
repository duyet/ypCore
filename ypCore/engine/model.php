<?php
/**
 * ypModel
 * Request to database
 * 
 * @package ypCore 1.0
 * @since ypCore 1.0
 * @author duyet2000@gmail.com (http://go.use.vn)
 * @copyright 2013
 * @version $Id$
 * @access public
 */
abstract class ypModel {
	protected $_registry;
	
	public function __construct(&$registry) {
		$this->_registry = $registry;
	}
	
	public function __get($key) {
		return $this->_registry->get($key);
	}
	
	public function __set($key, $value) {
		$this->_registry->set($key, $value);
	}
}