<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sp, tbl_loaisp WHERE tbl_sp.id_loai = tbl_loaisp.id_loai ORDER BY id_sanpham DESC"; /* sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p style="padding-left: 20px;"> DANH SÁCH CÁC SẢN PHẨM </p>
<table style="width:95%" border="1" style="border-collapse: collapse;" style="text-align: center;" class="tbl_lk">
  <tr class="title_lk">
    <th> Mã sản phẩm </th>
    <th> Tên sản phẩm </th>
    <th> Số lượng </th>
    <th> Giá sản phẩm </th>
    <th> Hình ảnh </th>
    <th> Màu sắc </th>
    <th> Loại sản phẩm </th>
    <th> Màn hình </th>
    <th> Chip </th>
    <th> Dung lượng lưu trữ</th>
    <th> Ram </th>
    <th> Pin, Sạc </th>
    <th> Hệ điều hành</th>
    <th> Camere trước</th>
    <th> Camere sau</th>
    <th> Quản lý </th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr style="text-align: center">
    <td><?php echo $row['id_sanpham']?></td>
    <td><?php echo $row['tensanpham']?></td>
    <td><?php echo $row['soluong']?></td>
    <td><?php echo $row['giasanpham']?></td>
    <td><img src="modules/quanlysp/upload/<?php echo $row['hinhanh']?>" width="150px"></td>
    <td><?php echo $row['mausac']?></td>
    <td><?php echo $row['tenloai']?></td>
    <td><?php echo $row['manhinh']?></td>
    <td><?php echo $row['cpu']?></td>
    <td><?php echo $row['bonhotrong']?></td>
    <td><?php echo $row['ram']?></td>
    <td><?php echo $row['pin']?></td>
    <td><?php echo $row['hedieuhanh']?></td>
    <td><?php echo $row['cameratruoc']?></td>
    <td><?php echo $row['camerasau']?></td>
    <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">
          <input type="submit" style="background: #e75d41;" class="sub" name="xoasp" value="Xóa">
        </a>
        <a href="?action=quanlysp&query=edit&idsanpham=<?php echo $row['id_sanpham']?>">
          <input type="submit" style="background: #aee9a7;"class="sub" name="suasp" value="Sửa">
        </a>
    </td>
  </tr>
  <?php
   }
  ?>

</table>