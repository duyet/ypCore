<?php 
class Model_Admin_Stat_Index extends ypModel {
	public function getCouterOf($type = 'month') {
		if ($type == 'month' OR $type == "year") {
			$thisMonth = $this->Request->month;
			$thisYear = $this->Request->year;
			$q = "SELECT `$type`, SUM(`value`) AS `value` FROM `yp_stat` ";
			if ($type == 'month') $q .= "WHERE `year` = $thisYear ";
			$q .= "GROUP BY  `$type`";

			$this->Db->query($q);
			
			if ($this->Db->num_rows() == 0) return array();
			$data = array();
			while ($row = $this->Db->fetch()) {
				$data[$row[$type]] = $row['value'];
			}

			return $data;
		}
	}

	public function getSumCouter($type = 'year', $t = 0) {
		if ($type == 'day') {
			if ($t == 0) $day = $this->Request->day;
			else $day = $t;

			$this->Db->query("SELECT `value` FROM `yp_stat` WHERE `day` = $day");
			$data = $this->Db->fetch();

			return (int) $data['value'];
		}

		if ($type == 'month' OR $type == 'year') {
			if ($t == 0) $t = ('month' == $type) ? $this->Request->month : $this->Request->year;
			$this->Db->query("SELECT SUM(`value`) as `value` FROM `yp_stat` 
				WHERE `$type` = $t 
				GROUP BY `$type`");

			$data = $this->Db->fetch();

			return (int) $data['value'];
		}

		// Get all
		$this->Db->query("SELECT COUNT(`value`) FROM `yp_stat`");
		$data = $this->Db->fetch();

		return (int) $data['value'];
	}
}