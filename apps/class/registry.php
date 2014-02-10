<?php 
/**
 * ypRegistry
 * Start apps. Contain Database, Response, Cookie, Session, 
 * Setting, Link, Crypt, Loader, Document, User, Language
 * Pack: Database: Connect to database, query and fetch data...
 *       Response: Controll output, set header.
 *       Cookie: Manager user cookie
 *       Session: Manager user session.
 *       Setting: Manager site setting, user setting, server setting.
 *       Link: Build link, rewrite link, redirect.
 *       Crypt: Hash some info, hash password, cookie info.
 *       Loader: Load model, controller, helper function.
 *       Document: Site title, keywork, header and footer, description, ...
 *       User: Store user info.
 *       Language: Store language, multi language.
 * 
 * @package ypCore 1.0
 * @since ypCore 1.0
 * @author duyet2000@gmail.com (http://go.use.vn)
 * @copyright 2013
 * @version $Id$
 * @access public
 */
final class ypRegistry {
	private $_data = array();

	public function __construct() {
		if (phpversion() < 5) {
			trigger_error('Warning: ypCore requires PHP5 or greater!'); // ypCore yeu cau PHP Version >= 5
		}
		
		// Disable function 
		$disable_functions = @ini_get('disable_functions');
		if (isset($disable_functions) AND $disable_functions != FALSE AND $disable_functions != '') {
			$this->set('disable_functions', array_map('trim', explode(',', $disable_functions)));
		}

		// Request handle
		$this->set('Request', new __REQUEST());

		if (strtolower(substr($this->get('Request')->GET('code'), 0, 5)) == 'admin') {
			$this->set('isAdminController', TRUE);
		} else {
			$this->set('isAdminController', FALSE);
		}

		// Config
		$this->set('Config', new __CONFIG());

		// Database, don't use it? OK
		if ($this->get('Config')->has('db') AND defined('YPCORE_USE_DB')) {
			$db = new __DATABASE($this->get('Config')->get('db'));
			if ($db === FALSE) {
				trigger_error('Error: Could not connect to database!');
			}
		}
		$this->set('Db', FALSE);
		if (isset($db)) {
			$this->set('Db', $db);
		} 
		

		// Cache 
		if (defined('YPCORE_IS_CACHE')) {
			$this->set('Cache', new __CACHE());
		}

		// Cookie and session 
		$this->set('Cookie', new __COOKIE());
		$this->set('Session', new __SESSION());

		// Setting, load setting from database and cache
		$this->set('Setting', new __SETTING($this));

		// Link build, revrirte link 
		$this->set('Link', new __LINK($this));

		// Crypt was hash data
		$this->set('Crypt', new __CRYPT());

		// Load helper file, library, model...
		$this->set('Loader', new __LOADER($this));

		// Manager title, keywork, discription, javascript, stylesheet, ... :)
		$this->set('Document', new __DOCUMENT($this->get('Setting')));

		// Manager user 
		$this->set('User', new __USER($this));

		// Language load
		$language = new __LANGUAGE();
		if ($this->get('isAdminController')) {
			// Admin -> load admin language
			$language->setLanguage($this->get('Setting')->get('admin_language'));
		} else {
			// And I was in front page, load it 
			$language->setLanguage($this->get('Setting')->get('language'));
		}
		// By default ypCore use English, but I, Vietnamese =))
		$this->set('Language', $language);

		// Template settings
		$smartySetting = array(
			'debugging' => FALSE, 
			'caching' => $this->get('Setting')->get('cache_template'),
			'cache_lifetime' => 120);
		$smarty = new __SMARTY($smartySetting);
		$this->set('Template', $smarty);

		// Update pageview (Edit later)
		$this->_updateCounter();
	}

	public function get($key) {
		return (isset($this->_data[$key]) ? $this->_data[$key] : NULL);
	}

	public function set($key, $value) {
		$this->_data[$key] = $value;
	}

	private function _updateCounter() {
		return $this->get('Db')->query("UPDATE `yp_settings` 
				SET `value` = `value` + 1 
				WHERE `setting` = 'pageview'");
	}
}