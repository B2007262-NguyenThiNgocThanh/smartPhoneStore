<?php
    $code = $_GET['code'];
    $sql_xem_donhang = "SELECT * FROM tbl_cart_detail, tbl_sp WHERE tbl_cart_detail.id_sanpham = tbl_sp.id_sanpham 
        AND tbl_cart_detail.code_cart = '".$code."' ORDER BY tbl_cart_detail.id_cart_detail ASC"; /* DESC sx tu cao->thap , ASC: ngược lại*/
    $query_xem_donhang = mysqli_query($mysqli,$sql_xem_donhang);

    $sql_donhang = "SELECT * FROM tbl_cart, tbl_kh 
        WHERE tbl_cart.id_khachhang = tbl_kh.id_khachhang AND tbl_cart.code_cart =  '".$code."' ORDER BY tbl_cart.id_cart ASC"; /* DESC sx tu cao->thap , ASC: ngược lại*/
    $query_donhang = mysqli_query($mysqli,$sql_donhang);
    $row = mysqli_fetch_array($query_donhang);
?>
<p style="text-align: center">THÔNG TIN ĐƠN HÀNG</p>
<p style="text-align: center">Mã đơn hàng: <?php echo $row['code_cart']?></p>
<div class="xem_donhang">
    
    <tr> 
      <td><b>Tên khách hàng:</b> <?php echo $row['hoten']?>.</td>
      <td><b> Số điện thoại:</b> <?php echo $row['sodienthoai']?>.</td>
    </tr><br/>
    <tr><b> Địa chỉ: </b><?php echo $row['diachi']?>.</tr><br/>
    <tr><b> Email: </b><?php echo $row['email']?>.</tr><br/>
    <!-- <th>Quản lý </th> -->
</div>
<p class="clear"></p>

<table style="width:100%" border="1" style="border-collapse: collapse;" style="text-align: center;" >
  <tr class="title_lk">
    <th>Thứ tự</th>
    <!-- <th>Mã đơn hàng</th> -->
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  </tr>

  <?php
  $i = 0;
  $tongtien=0;
  while($row = mysqli_fetch_array($query_xem_donhang)){ /* lấy ra từng mảng */
    $i++;
    $tongtien+=$row['giasanpham']*$row['soluongmua'];
  ?>
  <tr style="text-align: center;">
    <td> <?php echo $i?></td>
    <!-- <td><?php echo $row['code_cart']?></td> -->
    <td><?php echo $row['tensanpham']?></td>
    <td><?php echo $row['soluongmua']?></td>
    <td><?php echo number_format(($row['giasanpham']),0,',','.').'vnđ'?></td>
    <td><?php echo number_format(($row['giasanpham']*$row['soluongmua']),0,',','.').'vnđ'?> </td>
  </tr>
  <?php
   }
  ?>
    <tr>
        <td colspan="6"><p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ'?></p></td>
    </tr>

</table>