<?php
    $sql_edit_npp = "SELECT * FROM tbl_npp WHERE id_nhaphanphoi='$_GET[idnpp]' LIMIT 1"; /* sx tu cao->thap , ASC: ngược lại*/
    $query_edit_npp = mysqli_query($mysqli,$sql_edit_npp);
?>
<p>Sửa thông tin nhà phân phối</p>

<table width="60%" border="1" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlynpp/xuly.php?idnpp=<?php echo $_GET['idnpp']?>">
    <?php
    while($row = mysqli_fetch_array($query_edit_npp)){
    ?>
    <tr>
        <td>Tên nhà phân phối</td>
        <td><input type="text" value ="<?php echo $row['tennhapp']?>"name="tennpp" style="width:98%"></td>
    </tr>
    <tr>
        <td>Mã nhà phân phối</td>
        <td><input type="text" value ="<?php echo $row['manhapp']?>" name="manpp" style="width:98%"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" value ="<?php echo $row['diachi']?>" name="diachi" style="width:98%"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suanpp" value="Sửa"></td>
        
    </tr>
    <?php
    }
    ?>
    </form>

</table>