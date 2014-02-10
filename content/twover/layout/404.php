<html>
	<head>
		<title><?php echo $title ?></title>
		<link rel='stylesheet' href='<?php echo $template_url ?>/css/bootstrap.css'>

		<style type="text/css"> 
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		.btn-large {
			width:300px;
			padding: 20px 16px;
		}
		</style> 

	</head>
	<body>
		<div class="container"> 
			<div class="hero-unit"> 
				<center>
					<h1 style="font-size:200px">404</h1> 
					<p><?php echo $text_not_found ?></p> 

					<p><a href="<?php echo $site_url ?>" class="btn btn-primary btn-large"><?php echo $text_go_home ?></a></p> 
				</center>
			</div> 
		</div>
	</body>
</html>