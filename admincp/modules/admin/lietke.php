<?php
    $sql_hienthi = "SELECT * FROM tbl_admin ORDER BY id_admin DESC"; /* sx tu cao->thap , ASC: ngược lại*/
    $query_hienthi = mysqli_query($mysqli,$sql_hienthi);
?>
<p> Thông tin tài khoản </p>
<table style="width:80%" border="1" style="border-collapse: collapse;" style="text-align: center;">
  <tr>
    <th> Id </th>
    <th> Tên đăng nhập </th>
    <th> Mật khẩu</th>
    <th> Trạng thái tài khoản</th>
    <th> Quản lý </th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_npp)){ /* lấy ra từng mảng */
    $i++;
  ?>
  <tr>
    <td> <?php echo $i?></td>
    <td><?php echo $row['username']?></td>
    <td><?php echo $row['password']?></td>
    <!-- <td><?php echo $row['diachi']?></td> -->
    <td style="text-align: center">
        <a href="modules/admin/xuly.php?idadmin=<?php echo $row['id_admin']?>">Xóa</a>  | 
        <a href="?action=adminp&query=edit&idadmin=<?php echo $row['id_admin']?>"> Sửa </a>
    </td>
  </tr>
  <?php
   }
  ?>

  </table>