<?php
class Controller_Admin_Stat_Index extends ypAdminController {
	public function Index() {
		$this->checkLogin();
		
		$type = $this->_getTypeStat();
		$chart = $this->_getTypeChart();

		$this->Loader->model('Admin/Stat/Index');

		$data = $this->Model_Admin_Stat_Index->getCouterOf($type);
		$this->set('data', $data);

		$sumtype = '';
		if ($type == 'month') $sumType = 'year';
		$this->set('total', $this->Model_Admin_Stat_Index->getSumCouter($type));

		$this->setTemplate('module/Stat/GoogleStat.php');
		$this->set('type', $type);
		$this->set('chart', $chart);
		$this->setTemplateChild(array(
			'Admin/System/Header',
			'Admin/System/Footer'));
		$this->Response->setOutput($this->render());
	}

	/**
	 * Get type of stat: day, week, month or year
	 *
	 * @return string
	 */
	private function _getTypeStat() {
		$typeAccept = array('week', 'month', 'year');
		$type = 'month';
		if ($this->Request->GET['type'] != '' AND in_array($this->Request->GET['type'], $typeAccept)) {
			$type = $this->Request->GET['type'];
		}

		return $type;
	}

	private function _getTypeChart() {
		$typeAccept = array('areachart', 'linechart');
		$type = 'linechart';
		if ($this->Request->GET['chart'] != '' AND in_array($this->Request->GET['chart'], $typeAccept)) {
			$type = $this->Request->GET['chart'];
		}

		return $type;
	}
}