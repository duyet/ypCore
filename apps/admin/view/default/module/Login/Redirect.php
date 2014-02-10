<html>
  <head>
    <title><?= $title ?></title>
    <meta http-equiv="refresh" content="1; url=<?= $redirect_to ?>">
	<script>window.location = '<?= $redirect_to ?>';</script>
  </head>
  <body>
    <?= $text_loading ?>
  </body>
</html>