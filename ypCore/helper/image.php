<?php 
function ypImageResize($filename, $width, $height) {
	if (!file_exists(APP_DOWNLOAD_DIR . '/' . $filename) || !is_file(APP_DOWNLOAD_DIR . '/' . $filename)) {
		return;
	} 

	$info = pathinfo(APP_DOWNLOAD_DIR . '/' . $filename);

	$extension = $info['extension'];

	$old_image = $filename;
	$new_image = 'cache/' . utf8_substr($filename, 0, utf8_strrpos($filename, '.')) . '-' . $width . 'x' . $height . '.' . $extension;
	
	if (!file_exists(APP_DOWNLOAD_DIR . '/' . $new_image) || (filemtime(APP_DOWNLOAD_DIR . '/' . $old_image) > filemtime(APP_DOWNLOAD_DIR . '/' . $new_image))) {
		$path = '';
		
		$directories = explode('/', dirname(str_replace('../', '', APP_DOWNLOAD_DIR . '/' . $new_image)));
		
		foreach ($directories as $directory) {
			$path = $path . '/' . $directory;
			
			if (!file_exists(APP_DOWNLOAD_DIR . '/' . $path)) {
				@mkdir(APP_DOWNLOAD_DIR . '/' . $path, 0777);
			}		
		}
		
		$image = new Image(DIR_IMAGE . $old_image);
		$image->resize($width, $height);
		$image->save(DIR_IMAGE . $new_image);
	}
		return APP_DOWNLOAD_DIR . '/image/' . $new_image;
}