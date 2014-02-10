<html>
  <head>
    <title><?php echo $title ?></title>
    <meta http-equiv="refresh" content="1; url=<?php echo $redirect_to ?>">
	<script>window.location = '<?php echo $redirect_to ?>';</script>
  </head>
  <body>
    <?php echo $text_loading ?>
  </body>
</html>