<?php
    $code = $_GET['code'];
    $sql_lietke_hoadon = "SELECT * FROM tbl_hoadon, tbl_sp, tbl_cart  WHERE tbl_cart.id_sanpham = tbl_sp.id_sanpham AND tbl_hoadon.id_khachhang = tbl_kh.id_khachhang
        AND tbl_cart_detail.code_cart = '".$code."' ORDER BY tbl_cart_detail.id_cart_detail ASC"; /* DESC sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_hoadon= mysqli_query($mysqli,$sql_lietke_hoadon);
?>
<p>THÔNG TIN CHI TIẾT HÓA ĐƠN</p>
<table style="width:100%" border="1" style="border-collapse: collapse;" style="text-align: center;" >
  <tr class="title_lk">
    <!-- <th>Id</th> -->
    <th>Mã hóa đơn</th>
    <th>Ngày lập</th>
    <th>Mã khách hàng</th>
    <th>Họ tên khách hàng</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  </tr>

  <?php
  $i = 0;
  $tongtien=0;
  while($row = mysqli_fetch_array($query_lietke_hoadon)){ /* lấy ra từng mảng */
    $i++;
    $tongtien+=$row['giasanpham']*$row['soluongmua'];
  ?>
  <tr style="text-align: center;">
    <!-- <td> <?php echo $i?></td> -->
    <td><?php echo $row['code_cart']?></td>
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