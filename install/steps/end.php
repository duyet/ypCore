<?php

function toptext() {
	global $language;
    return $language['end_toptext'];
}

function getContent() {
	global $language;
    echo '<center><h2 class="bigtitle">'. $language['end_content_top'] .'</h2></center>';
    ?>
	<div class="explaintext">
		<p>You have completed all the steps and site ypCore is installed and ready to use.<p>
		<p>However, you may experience some problems if your server is not fully compatible with ypCore. If you experience any problem,
		do not hesitate to ask for help in the <a href="http://go.use.vn">community forums.</a></p>
		<p>It is recommended to completly remove the <strong>install/</strong> directory in your ypCore</p>
		<p><center><a class="btn btn-lg btn-default" href="../index.php">Go to my ypCore!</a></center></p>
	</div>

    <?php
}

?>
