<?php 
class Model_User_Logout extends ypModel {
	public function deleteClientSession($session = '') {
		return $this->Db->query("DELETE FROM `yp_sessions` WHERE `hash` = '". $this->Db->e($session) ."'");
	}
}