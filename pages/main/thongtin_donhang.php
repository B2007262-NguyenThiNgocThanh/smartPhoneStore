<?php
    $sql_lietke_donhang = "SELECT * FROM tbl_cart, tbl_kh 
        WHERE tbl_cart.id_khachhang = tbl_kh.id_khachhang ORDER BY tbl_cart.id_cart ASC"; /* DESC sx tu cao->thap , ASC: ngược lại*/
    $query_lietke_donhang = mysqli_query($mysqli,$sql_lietke_donhang);
?>

<p>DANH SÁCH CÁC ĐƠN HÀNG CỦA BẠN</p>
<table style="width:80%" border="1" style="border-collapse: collapse;" style="text-align: center;" class="tbl_lk" >
  <tr class="title_lk">
    <th>Mã đơn hàng</th>
    <th>Thông tin đơn hàng </th>
  </tr>

  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_donhang)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr>
    <td><?php echo $row['code_cart']?></td>
    <td style="text-align: center">
        <a href="index.php?quanly=thongtindonhang&code=<?php echo $row['code_cart']?>">
          <input type="submit" style="background: #e75d41;" class="sub" value="Xem chi tiết">
        </a>   
    </td>
  </tr>
  <?php
   }
  ?>

</table>