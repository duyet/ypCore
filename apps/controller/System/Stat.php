<?php 
class Controller_System_Stat extends ypController {
	public function Index() {
		$timeLiveOfClient = 120;
		$key = $this->Request->REQUEST['key'];
		if (!$key OR empty($key)) {
		//	echo 'Access deny!';
		}
		$imgRender = 1;

		$this->Loader->model('System/Stat');
		$this->Model_System_Stat->setLiveTime($timeLiveOfClient);
		
		if ($this->Model_System_Stat->isNewClient()) {
			// Add new client
			$this->Model_System_Stat->addNewClient();
			
			// Update couter client 
			$this->Model_System_Stat->updateCounter();
		} else {
			$this->Model_System_Stat->updateNewTimeClient();
		}

		// Xoa nhung phien cu qua han
		$this->Model_System_Stat->cleanOldClient();
		
		if ($imgRender) {
			@header("Content-type: image/png");
			echo base64_decode("iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAMSURBVBhXY/j//z8ABf4C/qc1gYQAAAAASUVORK5CYII=");
		}
	}
}