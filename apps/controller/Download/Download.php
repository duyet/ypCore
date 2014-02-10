<?php 
class Controller_Download_Download extends ypController {
	public function Index() {
		if (!$this->Request->REQUEST['_email'] OR !$this->Request->REQUEST['_code'] OR !$this->Request->REQUEST['_time']) {
			$this->redirect($this->Link->build('Index/Home', TRUE));
		}

		$email = urldecode($this->Request->REQUEST['_email']);
		$code = (string) $this->Request->REQUEST['_code'];
		$time = (int) $this->Request->REQUEST['_time'];

		// Check code
		if ($code != md5($email . $time)) {
			$this->redirect($this->Link->build('Index/Home', TRUE));
		}

		// Check email
		$this->Loader->helper('email');
		if (!isEmail($email)) {
			$this->redirect($this->Link->build('Index/Home', TRUE));
		}

		// Check email in database
		$this->Loader->model('Download/Download');
		if (!$this->Model_Download_Download->checkEmail($email)) {
			$this->redirect($this->Link->build('Index/Home', TRUE));
		}
		// Check code in database
		if (!$this->Model_Download_Download->checkCode($code)) {
			$this->redirect($this->Link->build('Index/Home', TRUE));
		}
		// Load file 
		$file = $this->Model_Download_Download->getFile($code);
		if (!file_exists(APP_DOWNLOAD_DIR . '/' . $file['path'])) {
			trigger_error("Error: File not found " . APP_DOWNLOAD_DIR . '/' . $file['path']);
			exit();
		}

		// Update counter
		$this->Model_Download_Download->counter($file);

		$this->Loader->helper('file');
		$_file['ext'] = getExtension(APP_DOWNLOAD_DIR . '/' . $file['path']);
		$_file['mime'] = getMime($_file['ext']);
		$_file['size'] = filesize(APP_DOWNLOAD_DIR . '/' . $file['path']);    
		$_file['filename'] = $file['path'];
		$_file['mtime'] = filemtime(APP_DOWNLOAD_DIR . '/' . $file['path']);

		header('Pragma: public');
		header('Expires: 0');
		header('Cache-Control:');
		header('Cache-Control: public');
		header('Content-Description: File Transfer');
		header('Content-Type: ' . $_file['mime']);
		header('Content-Disposition: attachment; filename="' . urlencode($_file['filename']) . '";');
		header('Last-Modified: ' . date('D, d M Y H:i:s \G\M\T', $_file['mtime']));
		header('Content-Length: ' . $_file['size']);
		
		set_time_limit(ini_get("max_execution_time"));
		 
		$__file = fopen(APP_DOWNLOAD_DIR . '/' . $file['path'], 'rb' );
		if (!$__file) {
			trigger_error('Error: File error!');
			exit();
		}
		while (!(connection_aborted() OR connection_status() == 1) AND !feof($__file)) {
			$this->Response->setOutput(fread($__file, 1024 * 8));
			flush();
		}
		fclose($__file);
	}
}