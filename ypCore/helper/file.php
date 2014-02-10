<?php
function getExtension($filename) {
	if (strpos($filename, '.') === false) return '';
	$filename = basename(strtolower($filename));
	$filename = explode('.', $filename);
	return array_pop($filename);
}

function getMime($ext) {
	if (empty($ext)) return FALSE;
	$ext = strtolower($ext);

	$_ext['txt'] = 'text/plain';
	$_ext['htm'] = 'text/html';
	$_ext['html'] = 'text/html';
	$_ext['css'] = 'text/css';

	$_ext['png'] = 'image/png';

	$_ext['gif'] = 'image/gif';

	$_ext['jpg'] = 'image/jpeg';

	$_ext['bmp'] = 'image/bmp';

	$_ext['tiff'] = 'image/tiff';


	$_ext['bz2'] = 'application/x-bzip';
	$_ext['gz'] = 'application/x-gzip';
	$_ext['tar'] = 'application/x-tar';
	$_ext['zip'] = 'application/zip';
	$_ext['zip'] = 'application/x-zip';
	$_ext['zip'] = 'application/x-zip-compressed';
	$_ext['rar'] = 'application/x-rar';
	$_ext['rar'] = 'application/x-rar-compressed';


	$_ext['aif'] = 'audio/aiff';
	$_ext['aiff'] = 'audio/aiff';
	$_ext['adp'] = 'audio/adpcm';
	$_ext['au'] = 'audio/basic';
	$_ext['snd'] = 'audio/basic';
	$_ext['mid'] = 'audio/midi';
	$_ext['midi'] = 'audio/midi';
	$_ext['kar'] = 'audio/midi';
	$_ext['rmi'] = 'audio/midi';
	$_ext['mp4a'] = 'audio/mp4';
	$_ext['mpga'] = 'audio/mpeg';
	$_ext['mp2'] = 'audio/mpeg';
	$_ext['mp2a'] = 'audio/mpeg';
	$_ext['mp3'] = 'audio/mp3';
	$_ext['mp3'] = 'audio/mpeg';
	$_ext['m2a'] = 'audio/mpeg';
	$_ext['m3a'] = 'audio/mpeg';
	$_ext['oga'] = 'audio/ogg';
	$_ext['ogg'] = 'audio/ogg';
	$_ext['spx'] = 'audio/ogg';
	$_ext['eol'] = 'audio/vnd.digital-winds';
	$_ext['dra'] = 'audio/vnd.dra';
	$_ext['dts'] = 'audio/vnd.dts';
	$_ext['dtshd']  ='audio/vnd.dts.hd';
	$_ext['lvp'] = 'audio/vnd.lucent.voice';
	$_ext['pya'] = 'audio/vnd.ms-playready.media.pya';
	$_ext['aac'] = 'audio/x-aac';
	$_ext['aifc'] = 'audio/x-aiff';
	$_ext['m3u'] = 'audio/x-mpegurl';
	$_ext['wav'] = 'audio/wav';
	$_ext['wax'] = 'audio/x-ms-wax';
	$_ext['wma'] = 'audio/x-ms-wma';

	$_ext['asf'] = 'video/x-ms-asf';
	$_ext['asx'] = 'video/x-ms-asf';
	$_ext['avi'] = 'video/avi';
	$_ext['mov'] = 'video/quicktime';
	$_ext['mpg'] = 'video/mpeg';
	$_ext['mpeg'] = 'video/mpeg';
	$_ext['wmv'] = 'video/x-ms-wmv';
	$_ext['wmx'] = 'video/x-ms-wmx';
	$_ext['3gp'] = 'video/3gpp';
	$_ext['3g2'] = 'video/3gpp2';
	$_ext['h261'] = 'video/h261';
	$_ext['h263'] = 'video/h263';
	$_ext['h264'] = 'video/h264';
	$_ext['jpgv'] = 'video/jpeg';
	$_ext['jpm'] = 'video/jpm';
	$_ext['jpgm'] = 'video/jpm';
	$_ext['mj2'] = 'video/mj2';
	$_ext['mjp2'] = 'video/mj2';
	$_ext['mp4'] = 'video/mp4';
	$_ext['mp4v'] = 'video/mp4';
	$_ext['mpg4'] = 'video/mp4';
	$_ext['mpe'] = 'video/mpeg';
	$_ext['m1v'] = 'video/mpeg';
	$_ext['m2v'] = 'video/mpeg';
	$_ext['ogv'] = 'video/ogg';
	$_ext['qt'] = 'video/quicktime';
	$_ext['fvt'] = 'video/vnd.fvt';
	$_ext['mxu'] = 'video/vnd.mpegurl';
	$_ext['pyv'] = 'video/vnd.ms-playready.media.pyv';
	$_ext['viv'] = 'video/vnd.vivo';
	$_ext['f4v'] = 'video/x-f4v';
	$_ext['fli'] = 'video/x-fli';
	$_ext['flv'] = 'video/x-flv';
	$_ext['m4v'] = 'video/x-m4v';
	$_ext['wm'] = 'video/x-ms-wm';

	$_ext['xml'] = 'text/xml';
	$_ext['xsl'] = 'text/xsl';

	$_ext['doc'] = 'application/msword';
	$_ext['docx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
	$_ext['docm'] = 'application/vnd.ms-word.document.macroEnabled.12';
	$_ext['dotm'] = 'application/vnd.ms-word.template.macroEnabled.12';
	$_ext['dotx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template';
	$_ext['rtf'] = 'application/rtf';
	$_ext['xls'] = 'application/excel';
	$_ext['xls'] = 'application/vnd.ms-excel';
	$_ext['xlsb'] = 'application/vnd.ms-excel.sheet.binary.macroEnabled.12';
	$_ext['xlsm'] = 'application/vnd.ms-excel.sheet.macroEnabled.12';
	$_ext['xlsx'] = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
	$_ext['odt'] = 'application/vnd.oasis.opendocument.text';
	$_ext['ods'] = 'application/vnd.oasis.opendocument.spreadsheet';
	$_ext['pps'] = 'application/vnd.ms-powerpoint';
	$_ext['ppt'] = 'application/vnd.ms-powerpoint';
	$_ext['ppsm'] = 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12';
	$_ext['ppsx'] = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow';
	$_ext['pptm'] = 'application/vnd.ms-powerpoint.presentation.macroEnabled.12';
	$_ext['pptx'] = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
	$_ext['potm'] = 'application/vnd.ms-powerpoint.template.macroEnabled.12';
	$_ext['potx'] = 'application/vnd.openxmlformats-officedocument.presentationml.template';
	$_ext['ppam'] = 'application/vnd.ms-powerpoint.addin.macroEnabled.12';
	$_ext['xps'] = 'application/vnd.ms-xpsdocument';

	$_ext['pdf'] = 'application/pdf';
	$_ext['ai'] = 'application/postscript';
	$_ext['eps'] = 'application/postscript';
	$_ext['psd'] = 'image/psd';

	$_ext['swf'] = 'application/x-shockwave-flash';
	$_ext['flv'] = 'video/x-flv';
	$_ext['swc'] = 'application/x-swc';

	$_ext['ra'] = 'audio/vnd.rn-realaudio';
	$_ext['ram'] = 'audio/x-pn-realaudio';
	$_ext['rm'] = 'application/vnd.rn-realmedia';
	$_ext['rv'] = 'video/vnd.rn-realvideo';

	$_ext['exe'] = 'application/x-msdownload';
	$_ext['pls'] = 'audio/scpls';
	$_ext['m3u'] = 'audio/x-mpegurl';
	$_ext['js'] = 'application/x-javascrip';
	
	if (!$_ext[$ext]) return FALSE;
	
	return $_ext[$ext];
}