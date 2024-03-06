<?php
if(isset($_POST['dangnhap'])){
    $tk = $_POST['email'];
    $psw = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_kh WHERE email = '".$tk."' AND matkhau = '".$psw."'  LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($query);

    if($count > 0){
        $row_query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($row_query);
        $_SESSION['dangky'] = $row['hoten'];
        $_SESSION['id_khachhang'] = $row['id_khachhang'];
        header('Location:index.php');
    }else{
        echo 'sai email hoặc mật khẩu, vui lòng nhập lại !';
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Login KH</title>
	<link rel="shortcut icon" href="images/icon.png" />
	<!-- css -->
    <link rel="stylesheet" type="text/css" href="css/style_log.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
	<div class="wrapper-login">
        <h1 style="text-align: center">ĐĂNG NHẬP KHÁCH HÀNG</h1>
        <form method="POST" action="" autocomplete="off">
            <div class="imgcontainer">
                <img src="images/avt_login_cus.jpg" alt="Avatar" class="avatar">
            </div>

            <table border="1" class="tbl_login" style="text-align: center; border-collapse: collapse;">
    
                <label for="uname"><b><i class="fa fa-user-circle" aria-hidden="true"></i> Tên đăng nhập</b></label>
                <input type="text" id="text" placeholder="Nhập email . . ." name="email">

                <label for="psw"><b><i class="fa fa-keyboard-o" aria-hidden="true"></i> Mật khẩu:</b></label>
                <input type="password" id="pw" placeholder="Nhập mật khẩu . . ." name="matkhau">

                <!-- <input type="submit" class="submit_log" name="login" value="Đăng nhập"> -->
                <button type="submit" name="dangnhap">Đăng nhập</button>
                <p class="question"> Bạn chưa có tài khoản? <a href="index.php?quanly=dangky" name="dangky"><b>Đăng ký tài khoản<b></a></p>
            </table>
        </form>
	</div>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</body>
</html>