<?php 
class Model_Admin_Admin_Logs extends ypModel {
	public function loadLogs($start = 0, $limit = 300) {
		$start = intval($start);
		$limit = intval($limit);
		
		$logs = array();
		$this->Db->query("SELECT * FROM `yp_admin_logs`
		ORDER BY `id` DESC
		LIMIT $start, $limit");
		if ($this->Db->num_rows() > 0) {
			while ($row = $this->Db->fetch()) {
				$logs[] = $row;
			}
		}
		
		return $logs;
	}
	
	public function totalLogs() {
		$result = $this->Db->query("SELECT COUNT(*) FROM `yp_admin_logs`");
		$result = $this->Db->fetch($result, 1);
		
		return $result[0];
	}
}