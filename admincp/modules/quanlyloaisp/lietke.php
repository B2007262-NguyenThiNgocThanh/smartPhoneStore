<?php
    $sql_lietke_loaisp = "SELECT * FROM tbl_loaisp ORDER BY id_loai ASC"; /* DESC sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_loaisp = mysqli_query($mysqli,$sql_lietke_loaisp);
?>
<p style="padding-left: 20px;"> DANH SÁCH CÁC LOẠI SẢN PHẨM</p>
<table style="width:50%" border="1" style="border-collapse: collapse;" style="text-align: center;" class="tbl_lk">
  <tr class="title_lk">
    <th>Mã loại</th>
    <th> Tên loại sản phẩm </th>
    <th> Quản lý </th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_loaisp)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr>
    <td><?php echo $row['id_loai']?></td>
    <td><?php echo $row['tenloai']?></td>
    <td style="text-align: center">
        <a href="modules/quanlyloaisp/xuly.php?idloaisp=<?php echo $row['id_loai']?>">
          <input type="submit" style="background: #e75d41;" class="sub" name="xoasp" value="Xóa">
        </a>  
        <a href="?action=quanlyloaisp&query=edit&idloaisp=<?php echo $row['id_loai']?>"> 
          <input type="submit" style="background: #aee9a7;"class="sub" name="suasp" value="Sửa">
        </a>
    </td>
  </tr>
  <?php
   }
  ?>
</table>