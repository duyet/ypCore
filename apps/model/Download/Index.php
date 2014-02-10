<?php 
class Model_Download_Index extends ypModel {
	public function getDownloadCount() {
		$this->Db->query("SELECT `download`
		FROM `yp_download_files`
		WHERE `id` = 1");
		if ($this->Db->num_rows() == 0) {
			return 0;
		}
		
		$result = $this->Db->fetch();
		
		return $result['download'];
	}
}