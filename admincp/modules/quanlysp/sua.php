<?php
    $sql_edit_sp = "SELECT * FROM tbl_sp WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1"; /* sx tu cao->thap , ASC: ngược lại*/
    $query_edit_sp = mysqli_query($mysqli,$sql_edit_sp);
?>
<p style="padding-left: 20px;">CẬP NHẬT THÔNG TIN SẢN PHẨM</p>

<table width="60%" border="1" style="border-collapse: collapse;">
<?php
while($row=mysqli_fetch_array($query_edit_sp)){

?>
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
    <tr>
        <td>Tên Sản Phẩm</td>
        <td><input type="text" name="tensp" value="<?php echo $row['tensanpham']?>" style="width:98%"></td>
    </tr>
    <!-- <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text" name="masp" value="<?php echo $row['masanpham']?>" style="width:98%"></td>
    </tr>  -->
    <tr>
        <td>Số lượng sản phẩm</td>
        <td><input type="text" name="no" value="<?php echo $row['soluong']?>" style="width:98%"></td>
    </tr> 
    <tr>
        <td>Giá sản phẩm</td>
        <td><input type="text" name="giasp" value="<?php echo $row['giasanpham']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td> Hình ảnh </td>
        <td><input type="file" name="hinhanh" style="width:98%"><img src="modules/quanlysp/upload/<?php echo $row['hinhanh']?>" width="150px"></td>
        
    </tr>
    <tr>
        <td>Màu sắc </td>
        <td><input type="text" name="color" value="<?php echo $row['mausac']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td>Loại sản phẩm </td>
        <td>
            <select name='loai'>
                <?php
                $sql_loaisp = "SELECT * FROM tbl_loaisp ORDER BY id_loai DESC";
                $query_loai = mysqli_query($mysqli,$sql_loaisp);
                while($row_loai = mysqli_fetch_array($query_loai)){
                    if($row_loai['id_loai'] == $row['id_loai']){
                ?>
                <option selected value="<?php echo $row_loai['id_loai']?>"><?php echo $row_loai['tenloai']?></option>
                <?php
                    }else{
                ?>
                 <option value="<?php echo $row_loai['id_loai']?>"><?php echo $row_loai['tenloai']?></option>
                <?php
                    }
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Màn hình</td>
        <td><input type="text" name="manhinh" value="<?php echo $row['manhinh']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td> Chip </td>
        <td><input type="text" name="cpu" value="<?php echo $row['cpu']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td> Dung lượng lưu trữ </td>
        <td><input type="text" name="rom" value="<?php echo $row['bonhotrong']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td>Ram</td>
        <td><input type="text" name="ram" value="<?php echo $row['ram']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td>Pin, Sạc </td>
        <td><input type="text" name="pin" value="<?php echo $row['pin']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td>Hệ điều hành</td>
        <td><input type="text" name="os" value="<?php echo $row['hedieuhanh']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td>Camera trước</td>
        <td><input type="text" name="cam1" value="<?php echo $row['cameratruoc']?>" style="width:98%"></td>
    </tr>
    <tr>
        <td>Camera sau</td>
        <td><input type="text" name="cam2" value="<?php echo $row['camerasau']?>" style="width:98%"></td>
    </tr>
    <tr style="text-align: center" >
        <td colspan="2"><input type="submit" class="sub" name="suasanpham"  value="Sửa sản phẩm"></td>
        
    </tr>
    </form>
<?php
}
?>
</table>

</table>