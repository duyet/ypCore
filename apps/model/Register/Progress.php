<?php 
class Model_Register_Progress extends ypModel {
	public function CheckUsername(&$username) {
		$this->Db->query("SELECT 1 FROM `yp_users` WHERE `username` = '". $this->Db->e($username) ."'");
		if ($this->Db->num_rows() == 1) return FALSE;

		return TRUE;
	}

	public function CheckValidEmail($email) {
		$this->Loader->helper('Email');

		return isEmail($email);
	}
	
	public function CheckEmail($email) {
		$this->Db->query("SELECT 1 FROM `yp_users` WHERE `email` = '". $this->Db->e($email) ."'");
		if ($this->Db->num_rows() == 1) return FALSE;

		return TRUE;
	}
	
	public function addUser($data) {
		$salt = $this->Crypt->getSalt();
		$password = $this->Crypt->passwordHash($data['password'], $salt);

		return $this->Db->query("INSERT INTO `yp_users`(`username`, `password`, `salt`, `full_name`, `email`, `birthday`)
		VALUE ('". $this->Db->e($data['username']) ."', '". $this->Db->e($password) ."', '". $this->Db->e($salt) ."', '". $this->Db->e($data['full_name']) ."', '". $this->Db->e($data['email']) ."', '". $this->Db->e($data['birthday']) ."')");
	}
}