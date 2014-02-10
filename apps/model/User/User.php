<?php 
class Model_User_User extends ypModel {
	public function CheckUsername($username) {
		if (empty($username)) return FALSE;

		$this->Loader->helper('Email');

		if (isEmail($username)) {
			$this->Db->query("SELECT 1 FROM `yp_users` WHERE `email` = '". $this->Db->e($username) . "'");
		} else {
			$this->Db->query("SELECT 1 FROM `yp_users` WHERE `username` = '". $this->Db->e($username) . "'");
		}
		if ($this->Db->num_rows() == 0) return FALSE;

		return TRUE;
	}
	
	public function getUserInfo($username = '') {
		if (empty($username)) {
			$username = $this->Session->get('userName');
		}
		if (empty($username)) {
			return FALSE;
		}

		$this->Loader->helper('Email');
		if (isEmail($username)) {
			$userInfo = $this->User->getUserFromEmail($username);
		} else {
			$userInfo = $this->User->getUserFromUsername($username);
		}
		if (!$userInfo) {
			return FALSE;
		}

		unset($userInfo['password']);

		$this->Db->query("SELECT * FROM `yp_usergroup` WHERE `groupid` = ". $userInfo['groupid']);
		$group = $this->Db->fetch();
		$userInfo['group'] = $group;

		return $userInfo;
	}
}