<?php
include('../../config/config.php'); /*để lấy $mysqli */

$tensp = $_POST['tensp'];
// $masp = $_POST['masp'];
$soluong=$_POST['no'];
$giasp = $_POST['giasp'];
//xuly img
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$mau = $_POST['color'];
$manhinh = $_POST['manhinh'];
$cpu = $_POST['cpu'];
$rom = $_POST['rom'];
$ram = $_POST['ram'];
$pin = $_POST['pin'];
$os = $_POST['os'];
$cam1 = $_POST['cam1'];
$cam2 = $_POST['cam2'];
$loai = $_POST['loai'];


if(isset($_POST['themsanpham'])){ 
    //thêm
    $sql_them = "INSERT INTO tbl_sp(tensanpham,soluong,giasanpham,hinhanh,mausac,manhinh,cpu,bonhotrong,ram,pin,hedieuhanh,cameratruoc, camerasau,id_loai) 
    VALUE('".$tensp."','".$soluong."','".$giasp."','".$hinhanh."','".$mau."','".$manhinh."','".$cpu."','".$rom."','".$ram."','".$pin."','".$os."','".$cam1."','".$cam2."','".$loai."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
    header('Location:../../index.php?action=quanlysp&query=them');
}elseif(isset($_POST['suasanpham'])){
    //sửa
    if($hinhanh != ''){ //có gửi hinh ảnh => thêm vào
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
        $sql_edit = "UPDATE tbl_sp SET tensanpham='".$tensp."',soluong='".$soluong."',giasanpham='".$giasp."',hinhanh='".$hinhanh."',id_loai='".$loai."',mausac='".$mau."',
        manhinh='".$manhinh."',cpu='".$cpu."',bonhotrong='".$rom."',ram='".$ram."',pin='".$pin."',hedieuhanh='".$os."',cameratruoc='".$cam1."',camerasau='".$cam2."' WHERE id_sanpham='$_GET[idsanpham]'";
       //xóa hình cũ
       $sql = "SELECT * FROM tbl_sp WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
       $query = mysqli_query($mysqli,$sql);
       while($row = mysqli_fetch_array($query)){
           unlink('upload/'.$row['hinhanh']);
       }
    }else{ // ngược lại=> k có cột hình ảnh
        $sql_edit = "UPDATE tbl_sp SET tensanpham='".$tensp."',soluong='".$soluong."',giasanpham='".$giasp."',id_loai='".$loai."',mausac='".$mau."',
        manhinh='".$manhinh."',cpu='".$cpu."',bonhotrong='".$rom."',ram='".$ram."',pin='".$pin."',hedieuhanh='".$os."',cameratruoc='".$cam1."',camerasau='".$cam2."' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    mysqli_query($mysqli,$sql_edit);
    header('Location:../../index.php?action=quanlysp&query=them');
}else{
    //xóa
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sp WHERE id_sanpham = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('upload/'.$row['hinhanh']);
    }
    $sql_delete = "DELETE FROM tbl_sp WHERE id_sanpham='".$id."'";
    mysqli_query($mysqli,$sql_delete);
    header('Location:../../index.php?action=quanlysp&query=them');
}   
?>