<?php
function toptext() {
	global $language;
    return $language['requirements_toptext'];
}

function getContent() {
global $language;
    ?>
<p class="lead">
    <h2><?php echo $language['requirements_content_top'] ?></h2>

<table class="table">
        <?php
            echo '<tr><td style="padding-right:10px;" align="right">PHP Version:</td>';
            if (strnatcmp(phpversion(),'5.0') >= 0) {
                echo '<td class="textok" style="padding-left:10px;">'.phpversion().' <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">'.phpversion().' <img style="margin-left:10px;" img src="style/no.png" /> <span style="margin-left:10px;color:black">>= 5.0 required</span></td></tr>';
            }

            if(function_exists('apache_get_modules')) {
                echo '<tr><td style="padding-right:10px;" align="right">Apache mod_rewrite:</td>';
                $apache_modules = apache_get_modules();
                if(array_search('mod_rewrite', $apache_modules) !== false) {
                    echo '<td class="textok" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
                } else {
                    echo '<td class="textno" style="padding-left:10px;">Not enabled <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
                }
            }
            echo '<tr><td style="padding-right:10px;" align="right">Curl extension:</td>';
            if(in_array ('curl', get_loaded_extensions())) {
                
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Not Installed <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">GD extension:</td>';
            if(function_exists('gd_info')) {
                
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Not Installed <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
            }


            echo '<tr><td style="padding-right:10px;" align="right">Mysql extension:</td>';
            if(function_exists('mysql_connect')) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Not Installed <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">Mysqli extension:</td>';
            if(class_exists('MySQLi')) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Not Installed <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">JSON support:</td>';
            if(function_exists('json_encode')) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textoptional" style="padding-left:10px;">Not Installed (Optional)</td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">shm memory support:</td>';
            if(function_exists('shm_get_var')) {
                echo '<td class="textok" style="padding-left:10px;">Installed <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textoptional" style="padding-left:10px;">Not Installed (Optional)</td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini display_errors:</td>';
            if(ini_get('display_errors')) {
                echo '<td class="textok" style="padding-left:10px;">disabled <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textoptional" style="padding-left:10px;">Enabled (Recommended to be disabled)</td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini memory_limit:</td>';
            if(return_bytes(ini_get('memory_limit')) >= 268435456) {
                echo '<td class="textok" style="padding-left:10px;">'.ini_get('memory_limit').' <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textoptional" style="padding-left:10px;">'.ini_get('memory_limit').' (Recommended at least 128Mb)</td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini safe_mode:</td>';
            if(!ini_get('safe_mode')) {
                echo '<td class="textok" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini short_open_tag:</td>';
            if(ini_get('short_open_tag')) {
                echo '<td class="textok" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
            }

            echo '<tr><td style="padding-right:10px;" align="right">php.ini file_uploads:</td>';
            if(ini_get('file_uploads')) {
                echo '<td class="textok" style="padding-left:10px;">Enabled <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
            } else {
                echo '<td class="textno" style="padding-left:10px;">Disabled <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
            }

        ?>
</table>
</p>
<p class="lead">
    <h2><?php echo $language['requirements_content_top'] ?></h2>
</p>

<p class="lead">
<?php 
	$dirs = array();
	$dirs[] = YPCORE_ROOT . '/' . APP_CACHE_DIR;
	$dirs[] = YPCORE_ROOT . '/' . APP_TMP_DIR;
	$dirs[] = YPCORE_ROOT . '/' . APP_LOG_DIR;
	$dirs[] = YPCORE_ROOT . '/' . APP_DOWNLOAD_DIR;
	
	echo '<table class="table">';
	foreach ($dirs as $dir) {
		echo '<tr><td style="padding-right:10px;" align="right">'. $dir .'</td>';
		echo ypCheckChmod($dir);
	}
	echo '</table>';
?>
</p>

<p class="lead left">You are free to continue with the installation even if there are some missing requirements in your server. However,
if you want a full experience in ypCore, it is strongly recommended to have all the requirements installed
before proceeding.</p>
<p class="lead left">If you proceed with any element in red or orange, you can expect random failures in ypCore and data loss.</p>
<p class="lead">
    <a class="btn btn-lg btn-default" href="index.php?step=installdatabase">Next step: Installation</a>
</p>

<br /><br /><br />

<?php
}



function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val[strlen($val)-1]);
    switch($last) {
        // The 'G' modifier is available since PHP 5.1.0
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }

    return $val;
}

function ypCheckChmod($dir) {
	global $language;
	if (!is_dir($dir)) {
		return '<td class="textno" style="padding-left:10px;">'. $language['file_not_exists'] .' <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
	}
	
	$file_check = $dir . '/' . 'ypCoreSystem.txt';
	
	@chmod($dir, 0777);
	
	if (file_exists($file_check)) {
		@unlink($file_check);
	} 
	
	if (!is_writable($dir)) {
		return '<td class="textno" style="padding-left:10px;">'. $language['not_writeable'] .' <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
	}
	
	if (!file_put_contents($file_check, 'ypcore')) {
		return '<td class="textno" style="padding-left:10px;">'. $language['not_writeable'] .' <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
	}
	
	if (!is_file($file_check) OR !is_writable($file_check)) {
		return '<td class="textno" style="padding-left:10px;">'. $language['not_writeable'] .' <img style="margin-left:10px;" img src="style/no.png" /></td></tr>';
	}

	unlink($file_check);
	return '<td class="textok" style="padding-left:10px;">'. $language['is_writable'] .' <img style="margin-left:10px;" img src="style/ok.png" /></td></tr>';
}

?>