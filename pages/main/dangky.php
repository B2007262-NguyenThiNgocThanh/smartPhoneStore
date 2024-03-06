<?php
// session_start();
    if(isset($_POST['dangky'])){
        $hotenkh = $_POST['hoten'];
        $addr = $_POST['addr'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $psw = md5($_POST['psw']);

        $sql_dk = mysqli_query($mysqli, "INSERT INTO tbl_kh(hoten,diachi,email,sodienthoai,matkhau)
             VALUES('".$hotenkh."','".$addr."','".$email."','".$sdt."','".$psw."')");
        if($sql_dk){
            echo '<p style="color: green">Đăng ký thành công</p>';
            $_SESSION['dangky'] = $hotenkh;
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli); //khi đk tk mới tự tăng id -> sau lấy id mới nhất
            header('Location: index.php?quanly=dangnhap');
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
        <h1 style="text-align: center">ĐĂNG KÝ THÀNH VIÊN</h1>
        <form method="POST" action="" autocomplete="off">
            <div class="imgcontainer">
                <img src="images/register.png" alt="Avatar" class="avatar">
            </div>

            <table border="1" class="tbl_login" style="text-align: center; border-collapse: collapse;">
    
                <label for="uname"><b> Họ và tên</b></label>
                <input type="text" id="text" placeholder="Nhập họ tên . . ." name="hoten">

                <label for="addr"><b> Địa chỉ </b></label>
                <input type="text" id="addr" placeholder="Nhập địa chỉ . . ." name="addr">

                <label for="email"><b> Email </b></label>
                <input type="text" id="email" placeholder="Nhập email . . ." name="email">

                <label for="sdt"><b> Số điện thoại</b></label>
                <input type="text" id="sdt" placeholder="Nhập số điện thoại . . ." name="sdt">

                <label for="psw"><b> Mật khẩu </b></label>
                <input type="text" id="pw" placeholder="Nhập mật khẩu . . ." name="psw">

                <!-- <input type="submit" class="submit_log" name="login" value="Đăng nhập"> -->
                <button type="submit" name="dangky">Đăng Ký</button>
                <p class="question"> Bạn đã có tài khoản? <a href="index.php?quanly=dangnhap" name="dangnhap">Đăng Nhập tài khoản</a></p>
            </table>
        </form>
	</div>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</body>
</html>

<!-- <form method="POST" action="">
<table width="50%" border="1" style="font-weight: bolder;">
   
        <tr>
            <td>Họ và tên</td>
            <td><input type="text" name="hoten" style="width: 98%" > </td>
        </tr>
         <tr>
            <td>CCCD</td>
            <td><input type="text" name="cccd" style="width: 98%"></td>
        </tr> 
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="addr" style="width: 98%"></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text" name="sdt" style="width: 98%"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" style="width: 98%"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name="psw" style="width: 98%"></td>
        </tr>
        <tr>
            <td>Nhập lại mật khẩu</td>
            <td><input type="text" name="repsw" style="width: 98%"></td>
        </tr> 
        <tr>
            <td colspan="2"><input type="submit" name="dangky" value="Đăng ký"></td>
        </tr>
        <tr class="question">
        <td colspan ="2"> Bạn đã có tài khoản? <a href="index.php?quanly=dangnhap" name="dangnhap">Đăng Nhập tài khoản</a></td>
        </tr>
</table>
</form> -->
