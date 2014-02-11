<?php echo $Header ?>

    <div class="container"> 
      <form class="form-register" method="POST" action="<?php echo $form_action ?>"> 
	    <input type="hidden" name="redirect" value="<?php echo ($redirect_to) ? $redirect_to : '' ?>">
        <h2 class="form-signin-heading"><?php echo $text_register ?></h2> 
		<?php if ($error) { ?><div class="login-error"><?php echo $error ?></div><?php } ?>
     <input type="text" name="username" value="<?php echo $username ?>" class="input-block-level input-text" placeholder="<?php echo $text_placeholder_username ?>"> 
     <input type="password" name="password" value="<?php echo $password ?>" class="input-block-level input-password" placeholder="<?php echo $text_placeholder_password ?>"> 
     <input type="password" name="re_password" value="<?php echo $re_password ?>" class="input-block-level input-password" placeholder="<?php echo $text_placeholder_re_password ?>"> 
     <input type="text" name="full_name" value="<?php echo $full_name ?>" class="input-block-level input-text" placeholder="<?php echo $text_placeholder_fullname ?>"> 
     <input type="text" name="email" value="<?php echo $email ?>" class="input-block-level input-text" placeholder="<?php echo $text_placeholder_email ?>"> 
        
		<button class="btn btn-large" name="login" type="reset" value="true"><?php echo $button_reset ?></button> 
		<button class="btn btn-large btn-primary" name="login" type="submit" value="true"><?php echo $button_register ?></button> 
      </form> 
 
    </div> <!-- /container --> 
<?php echo $Footer ?>