<?php
    $sql_lietke_hoadon = "SELECT * FROM tbl_hoadon,tbl_kh ORDER BY id_hoadon ASC"; /*DESC sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_hoadon = mysqli_query($mysqli,$sql_lietke_hoadon);
?>
<p> DANH SÁCH HÓA ĐƠN </p>
<table style="width:60%" border="1" style="border-collapse: collapse;" style="text-align: center;">
  <tr>
    <th>Số hóa đơn</th>
    <th>Mã khách hàng</th>
    <th>Ngày lập </th>
    <th>Trạng thái</th>
    <th> Quản lý </th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_hoadon)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr>
    <td><?php echo $row['id_hoadon']?></td>
    <td><?php echo $row['id_khachhang']?></td>
    <td><?php echo $row['ngaylap']?></td>
    <td><?php echo $row['trangthai']?></td>
    <td>
    <?php
    if($row['trangthai']==1){
      echo '<a href="modules/quanlyhoadon/xuly.php?code='.$row['id_khachhang'].'">Hóa đơn mới</a>';
    }else{
      echo 'Đã xem';
    }
    ?>
    </td>
    <td style="text-align: center">
        <a href="index.php?action=hoadon&query=xemhoadon&code=<?php echo $row['id_khachhang']?>">
          <input type="submit" style="background: #e75d41;" class="sub" name="xem" value="Xem hóa đơn">
        </a>   
    </td>
    <td style="text-align: center">
        <a href="modules/quanlyhoadon/xuly.php?&code=<?php echo $row['id_khachhang']?>">
          <input type="submit" style="background: #e75d41;" class="sub" name="xoa" value="xóa">
        </a>   
    </td>
  </tr>
  <?php
   }
  ?>
</table>