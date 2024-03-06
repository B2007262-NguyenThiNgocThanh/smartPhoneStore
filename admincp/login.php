<?php
    session_start();
    include('config/config.php');

    if(isset($_POST['login'])){
        $tk = $_POST['username'];
        $psw = md5($_POST['psw']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$tk."' AND  password='".$psw."' LIMIT 1 ";
        $row = mysqli_query($mysqli, $sql);
        $cnt = mysqli_num_rows($row);

        if($cnt>0){
            $_SESSION['login'] = $tk;
            echo '<script>alert("Đăng nhập thành công");</script>';
            header("Location:index.php");
        }else{
            echo '<script>alert("Tên đăng nhập hoặc Mật khẩu không đúng, vui lòng nhập lại")</script>';
            header("Location:login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="vi">

<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Login</title>
	<link rel="shortcut icon" href="images/icon.png" />

	<!-- css -->
    <link rel="stylesheet" type="text/css" href="css/style_log.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
	<div class="wrapper-login">
        <div class="wrapper">
            <h1 style="text-align: center; margin-top: 100px; color: #fff">CHÀO MỪNG ĐẾN VỚI ĐĂNG NHẬP ADMIN</h1>
            <form method="POST" action="" autocomplete="off">
                <div class="imgcontainer">
                    <img src="../images/avt-admin.jpg" alt="Avatar" class="avatar">
                </div>
                <table border="1" class="tbl_login" style="text-align: center; border-collapse: collapse;">
        
                    <label for="uname" style="color: #fff;"><b><i class="fa fa-user-circle" aria-hidden="true"></i> Tên đăng nhập</b></label>
                    <input type="text" placeholder="Enter Username" name="username">
                    <label for="psw" style="color: #fff;"><b><i class="fa fa-keyboard-o" aria-hidden="true"></i> Mật khẩu:</b></label>
                    <input type="password" placeholder="Enter password" name="psw">
                    <!-- <input type="submit" class="submit_log" name="login" value="Đăng nhập"> -->
                    <button type="submit" name="login">Đăng nhập</button>
                </table>
            </form>
        </div>
	</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>