<?php
    $sql_edit_loaisp = "SELECT * FROM tbl_loaisp WHERE id_loai='$_GET[idloaisp]' LIMIT 1"; /* sx tu cao->thap , ASC: ngược lại*/
    $query_edit_loaisp = mysqli_query($mysqli,$sql_edit_loaisp);
?>
<p style="padding-left: 20px;">CẬP NHẬT LOẠI SẢN PHẨM</p>

<table width="50%" border="1" style="border-collapse: collapse;" class="tbl_lk">
    <form method="POST" action="modules/quanlyloaisp/xuly.php?idloaisp=<?php echo $_GET['idloaisp']?>" >
    <?php
    while($row = mysqli_fetch_array($query_edit_loaisp)){
    ?>
    <tr>
        <td>Mã loại</td>
        <td><input type="text" value ="<?php echo $row['id_loai']?>" name="maloai" style="width:98%"></td>
    </tr>
    <tr>
        <td>Tên loại</td>
        <td><input type="text" value ="<?php echo $row['tenloai']?>"name="tenloai" style="width:98%"></td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="2"><input type="submit" class="sub" name="sualoai" value="Cập nhật"></td>
        
    </tr>
    <?php
    }
    ?>
    </form>

</table>