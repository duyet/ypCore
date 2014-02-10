<?php 
class Model_System_Stat extends ypModel {
	/**
	 * Set up about client live time
	 *
	 * @since 	0.1.0
	 * @var 	int 	$time = 300
	 * @return 	string 	
	 */
	public function setLiveTime($time = 300) {
		$this->clientLiveTime = $time;
	}

	/**
	 * Create client hash
	 *
	 * @since 	0.1.0
	 * @var 
	 * @return 	string 	
	 */
	private function _thisClientHash() {
		if (!$this->Session->get('client_live_apsfc')) {
			$this->Session->set('client_live_apsfc', md5(microtime(true)));
		}

		$info = array(
			'ip' => $this->Request->ip, 
			'userAgent' => $this->Request->userAgent, 
			'session' => $this->Session->get('client_live_apsfc')
			);

		return md5(json_encode($info));
	}

	/**
	 * Check client is exists on database?
	 *
	 * @since 	0.1.0
	 * @var 
	 * @return 	bool
	 */
	public function isNewClient() {
		$this->Db->query("SELECT 1 FROM `yp_sessions` 
			WHERE `hash` = '". $this->_thisClientHash() ."' 
				");

		return (0 === $this->Db->num_rows()) ? TRUE : FALSE;
	}

	/** 
	 * Add new client to db if this is new client
	 *
	 * @since 	0.1.0
	 * @var 	void
	 * @return 	bool
	 */
	public function addNewClient() {
		$this->Db->query("INSERT INTO `yp_sessions` (`hash`, `last_time`) 
			VALUES ('{$this->_thisClientHash()}', '{$this->Request->time}');");

		
	}

	/** 
	 * Update last time for client
	 *
	 * @since 	0.1.0
	 * @var 	void
	 * @return 	bool
	 */
	public function updateNewTimeClient() {
		return $this->Db->query("UPDATE `yp_sessions` 
			SET `last_time` = {$this->Request->time} 
			WHERE `hash` = '{$this->_thisClientHash()}'");
	}

	/**
	 * Delete old client
	 *
	 * @since 	0.1.0
	 * @var 	void 
	 * @return 	bool
	 */
	 public function cleanOldClient() {
	 	return $this->Db->query("DELETE FROM `yp_sessions` 
	 		WHERE ({$this->Request->time} - `last_time`) > {$this->clientLiveTime}");
	 }

	/**
	 * Update counter
	 *
	 * @since 	0.1.0
	 * @var 	
	 * @return 	bool
	 */
	public function updateCounter() {
		// Check current day
		$this->Db->query("SELECT * FROM `yp_stat` 
			WHERE `day` = {$this->Request->day} 
			AND `month` = {$this->Request->month}
			AND `year` = {$this->Request->year}");

		if ($this->Db->num_rows() == 0) {
			$this->Db->query("INSERT INTO `yp_stat` (`day`, `month`, `year`)
				VALUES ({$this->Request->day}, {$this->Request->month}, {$this->Request->year})");
		} else {
			$this->Db->query("UPDATE `yp_stat` SET `value` = `value` + 1 
				WHERE `day` = {$this->Request->day} 
				AND `month` = {$this->Request->month}
				AND `year` = {$this->Request->year}");
		}
	}

	/**
	 * Get counter of day. You can get current day 
	 * by using like $this->getCounterOfDay();
	 * 
	 * @since 	0.1.0
	 *
	 * @var 	int 	$day
	 * @return 	int 	counter number
	 */
	public function getCounterOfDay($day = 0) {
		$day = (0 === $day OR $day > 31 OR $day < 1) ? $this->Request->day : $day;
		$this->Db->query("SELECT * FROM `yp_stat` 
			WHERE `day` = {$day} 
				AND `month` = {$this->Request->month}
				AND `year` = {$this->Request->year}");
		if ($this->Db->num_rows() == 0) return 0;

		$stat = $this->Db->fetch_object();
		return (int) $stat->value;
	}

	/**
	 * Get counter of month. You can get current month 
	 * by using like $this->getCounterOfMonth();
	 * 
	 * @since 	0.1.0
	 *
	 * @var 	int 	$month
	 * @return 	int 	counter number
	 */
	public function getCounterOfMonth($month = 0) {
		$month = (0 === $month OR $month > 12 OR $month < 1) ? $this->Request->month : $month;
		$this->Db->query("SELECT COUNT(*) FROM `yp_stat` 
			WHERE `month` = {$month}
				AND `year` = {$this->Request->year}");
		$stat = $this->Db->fetch_field();

		return (int) $stat[0];
	}

	/** 
	 * Get counter of year. You can get current
	 * year by using like $this->getCounterOfYear();
	 *
	 * @since 	0.1.0
	 *
	 * @var 	int 	$year
	 * @return 	int
	 */
	public function getCounterOfYear($year = 0) {
		$year = (0 === $year) ? $this->Request->year : $year;
		$this->Db->query("SELECT COUNT(*) FROM `yp_stat`
			WHERE `year` = {$year}");
		$stat = $this->Db->fetch_field();

		return (int) $stat[0];
	}
}