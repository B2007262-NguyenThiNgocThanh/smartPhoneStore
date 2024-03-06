<p style="padding-left: 20px;">THÊM SẢN PHẨM</p>

    <tr>
<table width="60%" border="1" style="border-collapse: collapse;" class="tbl_add">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <td>Tên Sản Phẩm</td>
        <td><input type="text" name="tensp" style="width:98%"></td>
    </tr>
    <tr>
        <td>Số lượng sản phẩm</td>
        <td><input type="text" name="no" style="width:98%"></td>
    </tr>
    <tr>
        <td>Giá sản phẩm</td>
        <td><input type="text" name="giasp" style="width:98%"></td>
    </tr>
    <tr>
        <td>Hình ảnh </td>
        <td><input type="file" name="hinhanh" style="width:98%"></td>
    </tr>
    <tr>
        <td>Màu sắc </td>
        <td><input type="text" name="color" style="width:98%"></td>
    </tr>
    <tr>
        <td>Màn hình</td>
        <td><input type="text" name="manhinh" style="width:98%"></td>
    </tr>
    <tr>
        <td>Chip </td>
        <td><input type="text" name="cpu" style="width:98%"></td>
    </tr>
    <tr>
        <td>Dung lượng lưu trữ</td>
        <td><input type="text" name="rom" style="width:98%"></td>
    </tr>
    <tr>
        <td>Ram</td>
        <td><input type="text" name="ram" style="width:98%"></td>
    </tr>
    <tr>
        <td>Pin, Sạc</td>
        <td><input type="text" name="pin" style="width:98%"></td>
    </tr>
    <tr>
        <td>Hệ điều hành</td>
        <td><input type="text" name="os" style="width:98%"></td>
    </tr>
    <tr>
        <td>Camera trước </td>
        <td><input type="text" name="cam1" style="width:98%"></td>
    </tr>
    <tr>
        <td>Camera sau </td>
        <td><input type="text" name="cam2" style="width:98%"></td>
    </tr>
    <tr>
        <td>Loại sản phẩm </td>
        <td>
            <select name='loai'>
                <?php
                $sql_loaisp = "SELECT * FROM tbl_loaisp ORDER BY id_loai DESC";
                $query_loai = mysqli_query($mysqli,$sql_loaisp);
                while($row_loai = mysqli_fetch_array($query_loai)){
                ?>
                <option value="<?php echo $row_loai['id_loai']?>"><?php echo $row_loai['tenloai']?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr style="text-align: center" >
        <td colspan="2"><input type="submit" class="sub" name="themsanpham" value="Thêm sản phẩm"></td>
        
    </tr>
    </form>

</table>