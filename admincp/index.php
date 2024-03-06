<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header("Location:login.php");
	}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Admincp</title>
	<link rel="shortcut icon" href="images/icon.png" />
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/styleAdmincp.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
<body>
	<div class="wrapper_admin">
		<div>
			<h3 class="title_admin">CHÀO MỪNG ĐẾN VỚI ADMIN</h3>
			<?php
				include("config/config.php");
				include("modules/header.php");
				include("modules/menu.php");
			?>
		</div>
		<div class="wrapper">
		<?php
			include("modules/main.php");
		?>
		</div>
		<?php
			include("modules/footer.php");
		?>
	</div>
</body>
</html>