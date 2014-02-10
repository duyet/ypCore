<?php 
class Controller_Download_Addemail extends ypController {
	public function Index() {
		if (!$this->Request->REQUEST['email']) {
			$this->redirect($this->Link->build('Download/Index', TRUE));
		}

		$this->Request->REQUEST['email'] = urldecode($this->Request->REQUEST['email']);
		$this->Loader->helper('Email');
		if (!isEmail($this->Request->REQUEST['email'])) {
			$status['status'] = 'fail';
		} else {
			$this->Loader->model('Download/Addemail');
			$this->Model_Download_Addemail->addEmail($this->Request->REQUEST['email']);

			$time = time();
			$file_id= 1;
			$code = md5($this->Request->REQUEST['email'] . $time);
			$email = $this->Request->REQUEST['email'];
			$active = 1; // 1 = one time; 0 = disactive; 2 = always
			$this->Model_Download_Addemail->addListWaiting($code, $email, $file_id, $active);

			$status = array(
				'status' => 'success',
				'link'   => $this->Link->build('Download/Download', TRUE, 
					array('_email' => urlencode($this->Request->REQUEST['email']),
						 '_code'  => $code,
						 '_time'  => $time,
						 )
					  )
			);
		}
		die(json_encode($status));
	}
}