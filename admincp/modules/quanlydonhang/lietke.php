<?php
    $sql_lietke_donhang = "SELECT * FROM tbl_cart, tbl_kh 
        WHERE tbl_cart.id_khachhang = tbl_kh.id_khachhang ORDER BY tbl_cart.id_cart ASC"; /* DESC sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_donhang = mysqli_query($mysqli,$sql_lietke_donhang);
?>
<p style="padding-left: 20px;">DANH SÁCH CÁC ĐƠN HÀNG</p>
<table style="width:80%" border="1" style="border-collapse: collapse;" style="text-align: center;" class="tbl_lk" >
  <tr class="title_lk">
    <!-- <th>Id</th> -->
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
    <th>Quản lý </th>
  </tr>

  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_donhang)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr>
    <!-- <td> <?php echo $i?></td> -->
    <td><?php echo $row['code_cart']?></td>
    <td><?php echo $row['hoten']?></td>
    <td><?php echo $row['diachi']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['sodienthoai']?></td>
    <td>
    <?php
    if($row['cart_status']==1){
      echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
    }else{
      echo 'Đã duyệt';
    }
    ?>
    <!-- </td>
    <td style="text-align: center">
        <a href="modules/quanlydonhang/xuly.php?code=<?php echo $row['code_cart']?>">
          <input type="submit" style="background: #e75d41;" class="sub" name="xoasp" value="Xóa">
        </a>   
    </td> -->
    <td style="text-align: center">
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">
          <input type="submit" style="background: #e75d41;" class="sub" name="xoasp" value="Xem Đơn hàng">
        </a>   
    </td>
  </tr>
  <?php
   }
  ?>

</table>