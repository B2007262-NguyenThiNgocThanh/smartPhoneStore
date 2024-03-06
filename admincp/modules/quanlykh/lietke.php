<?php
    $sql_lietke_kh = "SELECT * FROM tbl_kh ORDER BY id_khachhang ASC"; /* DESC sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_kh = mysqli_query($mysqli,$sql_lietke_kh);
?>
<p style="padding-left: 20px;">DANH SÁCH KHÁCH HÀNG </p>
<table style="width:80%" border="1" style="border-collapse: collapse;" style="text-align: center;" class="tbl_lk">
  <tr class="title_lk">
    <th>Mã khách hàng</th>
    <th> Họ tên KH </th>
    <th> Địa chỉ </th>
    <th> Email </th>
    <th> SĐT </th>
    <th> Mật khẩu </th>
    <!-- <th> Quản lý </th> -->
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_kh)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr style="text-align: center">
    <td><?php echo $row['id_khachhang']?></td>
    <td><?php echo $row['hoten']?></td>
    <td><?php echo $row['diachi']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['sodienthoai']?></td>
    <td><?php echo $row['matkhau']?></td>
    <!-- <td>
        <a href="modules/quanlykh/xuly.php?idkh=<?php echo $row['id_khachhang']?>">
         <input type="submit" style="background: #e75d41;" class="sub" name="xoakh" value="Xóa">
        </a> 
          <a href="?action=quanlykh&query=edit&idkh=<?php echo $row['id_khachhang']?>"> 
         <input type="submit" style="background: #aee9a7;"class="sub" name="suakh" value="Sửa">
        </a> 
    </td> -->
  </tr>
  <?php
   }
  ?>

</table>