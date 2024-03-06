<!-- <?php
    $sql_edit_kh = "SELECT * FROM tbl_kh WHERE id_khachhang='$_GET[idkh]' LIMIT 1"; /* sx tu cao->thap , ASC: ngược lại*/
    $query_edit_kh = mysqli_query($mysqli,$sql_edit_kh);
?>
<p>ĐIỀU CHỈNH THÔNG TIN KHÁCH HÀNG</p>

<table width="60%" border="1" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlykh/xuly.php?idkh=<?php echo $_GET['idkh']?>">
    <?php
    while($row = mysqli_fetch_array( $query_edit_kh)){
    ?>
    <tr>
        <td> Họ tên KH </td>
        <td><input type="text" value ="<?php echo $row['hoten']?>"name="hoten" style="width:98%"></td>
    </tr>
    <tr>
        <td> Mã KH </td>
        <td><input type="text" value ="<?php echo $row['makhachhang']?>" name="makh" style="width:98%"></td>
    </tr>
    <tr>
        <td> CCCD </td>
        <td><input type="text" value ="<?php echo $row['cccd']?>" name="cccd" style="width:98%"></td>
    </tr>
    <tr>
        <td> Địa chỉ </td>
        <td><input type="text" value ="<?php echo $row['diachi']?>" name="diachi" style="width:98%"></td>
    </tr>
    <tr>
        <td> SĐT </td>
        <td><input type="text" value ="<?php echo $row['sodienthoai']?>" name="sdt" style="width:98%"></td>
    </tr>
    <tr>
        <td> Password </td>
        <td><input type="text" value ="<?php echo $row['matkhau']?>" name="matkhau" style="width:98%"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suakh" value="Điều chỉnh"></td>
        
    </tr>
    <?php
    }
    ?>
    </form>

</table> -->