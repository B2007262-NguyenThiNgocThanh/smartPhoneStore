<?php
include('../../config/config.php'); /*để lấy $mysqli */

$tenloaisp = $_POST['tenloai'];
$maloaisp = $_POST['maloai'];
$thutu = $_POST['thutu'];
if(isset($_POST['themloai'])){ 
    //thêm
    $sql_them = "INSERT INTO tbl_loaisp(tenloai,maloai,thutu) VALUE('".$tenloaisp."','".$maloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlyloaisp&query=them');
}elseif(isset($_POST['sualoai'])){
    //sửa
    $sql_edit = "UPDATE tbl_loaisp SET tenloai='".$tenloaisp."',maloai='".$maloaisp."',thutu='".$thutu."' WHERE id_loai='$_GET[idloaisp]'";
    mysqli_query($mysqli,$sql_edit);
    header('Location:../../index.php?action=quanlyloaisp&query=them');
}else{
    //xóa
    $id=$_GET['idloaisp'];
    $sql_delete = "DELETE FROM tbl_loaisp WHERE id_loai='".$id."'";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../index.php?action=quanlyloaisp&query=them');
}   
?>