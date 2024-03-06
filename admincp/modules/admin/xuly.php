<?php
include("../../config/config.php");

$username = $_POST['username'];
$psw = $_POST['password'];

if(isset($_POST['create'])){
    //thêm
    $sql_add = "INSERT INTO tbl_admin(username,password) VALUE('".$username."','".$psw."')";
    mysqli_query($mysqli, $sql_add);
    header("Location:../../index.php?action=admin&query=them");
}

?>


<!-- <?php
include('../../config/config.php'); /*để lấy $mysqli */

$tennpp = $_POST['tennpp'];
$manpp = $_POST['manpp'];
$addr = $_POST['diachi'];

if(isset($_POST['themnpp'])){ 
    //thêm
    $sql_them = "INSERT INTO tbl_npp(tennhapp,manhapp,diachi) VALUE('".$tennpp."','".$manpp."','".$addr."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlynpp&query=them');
}elseif(isset($_POST['suanpp'])){
    //sửa
    $sql_edit = "UPDATE tbl_npp SET tennhapp='".$tennpp."',manhapp='".$manpp."',diachi='".$addr."' WHERE id_nhaphanphoi='$_GET[idnpp]'";
    mysqli_query($mysqli,$sql_edit);
    header('Location:../../index.php?action=admin&query=them');
}else{
    //xóa
    $id=$_GET['idnpp'];
    $sql_delete = "DELETE FROM tbl_npp WHERE id_nhaphanphoi='".$id."'";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../index.php?action=quanlynpp&query=them');
}   
?> -->