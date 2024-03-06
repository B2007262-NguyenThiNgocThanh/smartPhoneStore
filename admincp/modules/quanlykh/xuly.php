<!-- <?php
include('../../config/config.php'); /*để lấy $mysqli */

$hotenkh = $_POST['hoten'];
$makh = $_POST['makh'];
$addr = $_POST['diachi'];
$email = $_POST['email'];
$sdt = $_POST['sdt'];
$pw = $_POST['pw'];



if(isset($_POST['themkh'])){ 
    //thêm
    $sql_them = "INSERT INTO tbl_kh(hoten,makhachhang,diachi,email,sodienthoai,matkhau) VALUE('".$hotenkh."','".$makh."'
        ,'".$addr."','".$email."','".$sdt."','".$pw."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlykh&query=them');
}elseif(isset($_POST['suakh'])){
    //sửa
    $sql_edit = "UPDATE tbl_kh SET hoten='".$hotenkh."',makhachhang='".$makh."',diachi='".$addr."',sodienthoai='".$sdt."',
    matkhau='".$pw."' WHERE id_loai='$_GET[idloaisp]'";
    mysqli_query($mysqli,$sql_edit);
    header('Location:../../index.php?action=quanlykh&query=them');
}else{
    //xóa
    $id=$_GET['idkh'];
    $sql_delete = "DELETE FROM tbl_kh WHERE id_khachhang='".$id."'";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../index.php?action=quanlykh&query=them');
}   
?> -->