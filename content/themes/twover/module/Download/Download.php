<?php echo $Header ?>

    <header class="jumbotron masthead">
        <h1><?php echo $text_download ?></h1> 
            <p><?php echo $text_status ?></p>
			<p><?php echo $text_help ?></p>
	</header>


	<p class="text-center">
	<div class="row">
	<div class="span5"></div>
	<div id="" class="span6">
		<form action="javascript:void(0);">
		  <div id="form_email" style="display:none;">
			<div class="input-append">
				<input type="text" id="email" name="email" class="span2" value="" style="width:50%" placeholder="Email" />
				<button class="btn btn-primary" id="email-button"> Download </button>
			</div>
			<div class="" id="loading" style="display:none;">Loading ...</div>
		  </div>

		  <div id="success"></div>
		 <a class="btn btn-large btn-success" id="download-button" href="javascript:void(0);"><?php echo $button_download ?></a>
		</form>
	  </div>
	</div>
	</p>


<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />


<?php echo $Footer ?>