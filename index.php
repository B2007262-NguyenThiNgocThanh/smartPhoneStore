<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>SmartPhone Store</title>
	<link rel="shortcut icon" href="images/icon.png" />

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style_log.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<script SRC="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script SRC="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel = "stylesheet" href = "../node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel = "stylesheet" href = "../node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>
	<div class="wrapper-full">
		<?php
		session_start();
		include("admincp/config/config.php"); 
		include("pages/menu.php");
		?>
		<div class="wrapper">
			<?php 
				// session_start();
				include("pages/header.php");
				include("pages/main.php");
			?>
		</div>
		<?php
		include("pages/footer.php");
		?>
	<div>
</body>

</html>