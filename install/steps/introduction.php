<?php

function toptext() {
    global $language;
    return $language['introduction_toptext'];
}

function getContent() {
?>

<center><h2 class="bigtitle">Introduction</h2></center>
<p>During this installation, you will be asked to answer some configuration questions about your web server and prefered settings.</p>
<p>You will need some knowledge about your server, and root access if possible. If you are in a shared hosting, you may be able
to finish this installation, but ypCore won't have all the features. Please, press install when ready.</p>
<p class="lead">
	<a href="index.php?step=requirements" class="btn btn-lg btn-default">Next step: Requirements</a>
</p>
<?php 
}

?>
